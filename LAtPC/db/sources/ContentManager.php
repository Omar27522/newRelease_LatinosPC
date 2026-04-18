<?php
/**
 * Class ContentManager
 * Handles all CRUD operations for the contents table.
 */
class ContentManager {
    private $pdo;

    public function __construct($dbPath) {
        try {
            $this->pdo = new PDO('sqlite:' . $dbPath);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->ensureTableExists();
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    private function ensureTableExists() {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS content (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            page_id TEXT NOT NULL,
            name TEXT NOT NULL,
            section TEXT,
            content TEXT,
            contenido TEXT
        )");
    }

    public function getAllGrouped() {
        $stmt = $this->pdo->query("SELECT * FROM content ORDER BY page_id, id");
        $grouped = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $pid = $row['page_id'];
            $row['true_index'] = isset($grouped[$pid]) ? count($grouped[$pid]) : 0;
            $grouped[$pid][] = $row;
        }
        return $grouped;
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM content WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function search($q) {
        $like = "%$q%";

        // Cache true indices across all IDs
        $all = $this->pdo->query("SELECT id, page_id FROM content ORDER BY page_id, id")->fetchAll(PDO::FETCH_ASSOC);
        $indices = [];
        $counters = [];
        $matchedIds = [];

        $qTrimmed = trim($q);
        $isNumericSearch = is_numeric($qTrimmed) && intval($qTrimmed) >= 0;
        $qInt = $isNumericSearch ? intval($qTrimmed) : -1;

        foreach ($all as $item) {
            $pid = $item['page_id'];
            if (!isset($counters[$pid])) $counters[$pid] = 0;
            $currentIndex = $counters[$pid]++;
            $indices[$item['id']] = $currentIndex;

            if ($isNumericSearch && $currentIndex === $qInt) {
                $matchedIds[] = $item['id'];
            }
        }

        $inClause = "";
        if (!empty($matchedIds)) {
            $inList = implode(',', $matchedIds);
            $inClause = " OR id IN ($inList)";
        }

        $stmt = $this->pdo->prepare("
            SELECT * FROM content
            WHERE content LIKE :q OR contenido LIKE :q OR name LIKE :q OR section LIKE :q OR page_id LIKE :q $inClause
            ORDER BY page_id, name, id LIMIT 200
        ");
        $stmt->execute([':q' => $like]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Assign true_index
        foreach ($results as &$r) {
            $r['true_index'] = $indices[$r['id']] ?? 0;
        }

        return $results;
    }

    public function add($data) {
        $stmt = $this->pdo->prepare("
            INSERT INTO content (page_id, name, section, content, contenido)
            VALUES (:page_id, :name, :section, :content, :contenido)
        ");
        $stmt->execute($data);
        return $this->pdo->lastInsertId();
    }

    public function update($id, $data) {
        $data['id'] = $id;
        $stmt = $this->pdo->prepare("
            UPDATE content
            SET page_id = :page_id, name = :name, section = :section, content = :content, contenido = :contenido
            WHERE id = :id
        ");
        return $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM content WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }

    public function getDistinct($column) {
        return $this->pdo->query("SELECT DISTINCT $column FROM content ORDER BY $column")->fetchAll(PDO::FETCH_COLUMN);
    }
}
