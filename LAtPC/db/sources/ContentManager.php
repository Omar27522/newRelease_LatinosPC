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
            $this->pdo->exec("PRAGMA busy_timeout = 5000");
            $this->ensureTableExists();
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    private function ensureTableExists() {
        // 1. Create table with all columns if it doesn't exist
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS content (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            page_id TEXT NOT NULL,
            name TEXT NOT NULL,
            section TEXT,
            content TEXT,
            contenido TEXT,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )");

        // 2. Migration: Add updated_at if missing
        try {
            // SQLite restriction: ALTER TABLE ADD COLUMN cannot use non-constant defaults like CURRENT_TIMESTAMP in some versions
            @$this->pdo->exec("ALTER TABLE content ADD COLUMN updated_at DATETIME");
            // Initialize existing rows
            $this->pdo->exec("UPDATE content SET updated_at = CURRENT_TIMESTAMP WHERE updated_at IS NULL");
        } catch (PDOException $e) {
            // Ignore if column exists
        }
    }

    public function getAllGrouped() {
        // 1. Fetch in original stable order to calculate true_index (used by site offsets)
        $stmt = $this->pdo->query("SELECT * FROM content ORDER BY page_id, id ASC");
        $grouped = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $pid = $row['page_id'];
            if (!isset($grouped[$pid])) $grouped[$pid] = [];
            $row['true_index'] = count($grouped[$pid]);
            $grouped[$pid][] = $row;
        }

        // 2. Sort rows within each group by latest action first
        foreach ($grouped as $pid => &$rows) {
            usort($rows, function($a, $b) {
                if (($a['updated_at'] ?? '') === ($b['updated_at'] ?? '')) {
                    return $b['id'] - $a['id'];
                }
                return strcmp($b['updated_at'] ?? '', $a['updated_at'] ?? '');
            });
        }

        // 3. Sort the page groups (tabs) by the latest activity in that page
        uasort($grouped, function($a, $b) {
            $latestA = $a[0]['updated_at'] ?? '';
            $latestB = $b[0]['updated_at'] ?? '';
            return strcmp($latestB, $latestA);
        });

        return $grouped;
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM content WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function search($q) {
        $like = "%$q%";

        // Cache true indices across all IDs based on original stable order
        $all = $this->pdo->query("SELECT id, page_id FROM content ORDER BY page_id, id ASC")->fetchAll(PDO::FETCH_ASSOC);
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
            ORDER BY updated_at DESC, id DESC LIMIT 200
        ");
        $stmt->execute([':q' => $like]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Assign correct true_index
        foreach ($results as &$r) {
            $r['true_index'] = $indices[$r['id']] ?? 0;
        }

        return $results;
    }

    public function add($data) {
        try {
            $stmt = $this->pdo->prepare("
                INSERT INTO content (page_id, name, section, content, contenido, updated_at)
                VALUES (:page_id, :name, :section, :content, :contenido, CURRENT_TIMESTAMP)
            ");
            $stmt->execute($data);
            return $this->pdo->lastInsertId();
        } catch (PDOException $e) {
            if (strpos($e->getMessage(), 'no such column: updated_at') !== false) {
                 // Emergency migration attempt
                 try {
                     @$this->pdo->exec("ALTER TABLE content ADD COLUMN updated_at DATETIME");
                     $this->pdo->exec("UPDATE content SET updated_at = CURRENT_TIMESTAMP WHERE updated_at IS NULL");
                 } catch (Exception $ex) {}

                 // Retry once
                 $stmt = $this->pdo->prepare("
                     INSERT INTO content (page_id, name, section, content, contenido, updated_at)
                     VALUES (:page_id, :name, :section, :content, :contenido, CURRENT_TIMESTAMP)
                 ");
                 $stmt->execute($data);
                 return $this->pdo->lastInsertId();
            }
            throw $e;
        }
    }

    public function update($id, $data) {
        $data['id'] = $id;
        try {
            $stmt = $this->pdo->prepare("
                UPDATE content
                SET page_id = :page_id, name = :name, section = :section, content = :content, contenido = :contenido, updated_at = CURRENT_TIMESTAMP
                WHERE id = :id
            ");
            return $stmt->execute($data);
        } catch (PDOException $e) {
            if (strpos($e->getMessage(), 'no such column: updated_at') !== false) {
                // Emergency migration attempt
                try {
                    @$this->pdo->exec("ALTER TABLE content ADD COLUMN updated_at DATETIME");
                    $this->pdo->exec("UPDATE content SET updated_at = CURRENT_TIMESTAMP WHERE updated_at IS NULL");
                } catch (PDOException $ex) {}

                // Retry once
                $stmt = $this->pdo->prepare("
                    UPDATE content
                    SET page_id = :page_id, name = :name, section = :section, content = :content, contenido = :contenido, updated_at = CURRENT_TIMESTAMP
                    WHERE id = :id
                ");
                return $stmt->execute($data);
            }
            throw $e;
        }
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM content WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }

    public function getDistinct($column) {
        return $this->pdo->query("SELECT DISTINCT $column FROM content ORDER BY $column")->fetchAll(PDO::FETCH_COLUMN);
    }
}
