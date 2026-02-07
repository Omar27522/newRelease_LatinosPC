<!DOCTYPE html>
<html lang="en">

<head>
    <title>SQLite Connection</title>
    <link rel="stylesheet" href="styleSQLiteConnection.css">
</head>

<body>
    <h1>SQLite Connection</h1>

    <?php
/* DATABASE CONNECTION */
try {
    $dbPath ='laTpc.db';
    $pdo = new PDO('sqlite:' . $dbPath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Handle Edit Request (Fetch Data)
    $editData = null;
    if (isset($_GET['edit_id'])) {
        $edit_id = $_GET['edit_id'];
        $stmt = $pdo->prepare("SELECT * FROM content WHERE id = :id");
        $stmt->execute([':id' => $edit_id]);
        $editData = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Handle Delete Request
    if (isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];
        try {
            $stmt = $pdo->prepare("DELETE FROM content WHERE id = :id");
            $stmt->execute([':id' => $delete_id]);
            echo '<div style="max-width: 1200px; margin: 10px auto; padding: 10px; background: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px;">Entry deleted successfully! <a href="SQLiteconnection.php">Refresh</a></div>';
        } catch (PDOException $e) {
            echo '<div style="max-width: 1200px; margin: 10px auto; padding: 10px; background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 4px;">Error deleting entry: ' . htmlspecialchars($e->getMessage()) . '</div>';
        }
    }

    // Handle Form Submission (Add or Update)
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['add_entry'])) {
            // Add Entry Logic
            $page_id = trim($_POST['page_id'] ?? '');
            $name = trim($_POST['name'] ?? '');
            $section = trim($_POST['section'] ?? '');
            $content_text = trim($_POST['content'] ?? '');

            if ($page_id && $name && $section && $content_text) {
                try {
                    $stmt = $pdo->prepare("INSERT INTO content (page_id, name, section, content) VALUES (:page_id, :name, :section, :content)");
                    $stmt->execute([
                        ':page_id' => $page_id,
                        ':name' => $name,
                        ':section' => $section,
                        ':content' => $content_text
                    ]);
                    echo '<div style="max-width: 1200px; margin: 10px auto; padding: 10px; background: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px;">Entry added successfully!</div>';
                } catch (PDOException $e) {
                    echo '<div style="max-width: 1200px; margin: 10px auto; padding: 10px; background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 4px;">Error adding entry: ' . htmlspecialchars($e->getMessage()) . '</div>';
                }
            } else {
                echo '<div style="max-width: 1200px; margin: 10px auto; padding: 10px; background: #fff3cd; color: #856404; border: 1px solid #ffeeba; border-radius: 4px;">Please fill in all fields.</div>';
            }
        } elseif (isset($_POST['update_entry'])) {
            // Update Entry Logic
            $id = $_POST['id'];
            $page_id = trim($_POST['page_id'] ?? '');
            $name = trim($_POST['name'] ?? '');
            $section = trim($_POST['section'] ?? '');
            $content_text = trim($_POST['content'] ?? '');

            if ($id && $page_id && $name && $section && $content_text) {
                try {
                    $stmt = $pdo->prepare("UPDATE content SET page_id = :page_id, name = :name, section = :section, content = :content WHERE id = :id");
                    $stmt->execute([
                        ':page_id' => $page_id,
                        ':name' => $name,
                        ':section' => $section,
                        ':content' => $content_text,
                        ':id' => $id
                    ]);
                    echo '<div style="max-width: 1200px; margin: 10px auto; padding: 10px; background: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px;">Entry updated successfully! <a href="SQLiteconnection.php">Clear Edit Mode</a></div>';
                    // Refresh edit data to show updated values
                    $editData = ['id' => $id, 'page_id' => $page_id, 'name' => $name, 'section' => $section, 'content' => $content_text];
                } catch (PDOException $e) {
                    echo '<div style="max-width: 1200px; margin: 10px auto; padding: 10px; background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 4px;">Error updating entry: ' . htmlspecialchars($e->getMessage()) . '</div>';
                }
            } else {
                echo '<div style="max-width: 1200px; margin: 10px auto; padding: 10px; background: #fff3cd; color: #856404; border: 1px solid #ffeeba; border-radius: 4px;">Please fill in all fields.</div>';
            }
        }
    }

    // Check if content table exists
    $tableExists = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='content'")->fetch();

    // Fetch distinct values for datalists
    $existingPageIds = [];
    $existingNames = [];
    $existingSections = [];

    if ($tableExists) {
        $existingPageIds = $pdo->query("SELECT DISTINCT page_id FROM content ORDER BY page_id")->fetchAll(PDO::FETCH_COLUMN);
        $existingNames = $pdo->query("SELECT DISTINCT name FROM content ORDER BY name")->fetchAll(PDO::FETCH_COLUMN);
        $existingSections = $pdo->query("SELECT DISTINCT section FROM content ORDER BY section")->fetchAll(PDO::FETCH_COLUMN);
    }

    // Fetch ALL content for browsing, grouped by page_id
    $groupedContent = [];
    if ($tableExists && !isset($_GET['q'])) {
        $stmt = $pdo->query('SELECT * FROM content ORDER BY page_id, id');
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $groupedContent[$row['page_id']][] = $row;
        }
    }
} catch (PDOException $e) {
    // Log error and continue without database content
    error_log('Database Error: ' . $e->getMessage());
    $content = [];
}
?>


    <!-- Simple Search Form -->
    <form method="get" action="" style="max-width: 1200px; margin: 10px auto; display: flex; gap: 8px;">
        <input type="text" name="q"
            value="<?= isset($_GET['q']) ? htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8') : '' ?>"
            placeholder="Search content, name, section, or page_id..."
            style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px;" />
        <button type="submit"
            style="padding: 10px 16px; border: none; background: #357abd; color: #fff; border-radius: 6px; cursor: pointer;">Search</button>
    </form>

    <hr style="max-width: 1200px; margin: 20px auto; border: 0; border-top: 1px solid #eee;">

    <!-- Add/Edit Entry Form -->
    <div
        style="max-width: 1200px; margin: 20px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <h2 style="margin-top: 0; color: #333;">
            <?= $editData ? 'Edit Entry (ID: ' . $editData['id'] . ')' : 'Add New Entry' ?></h2>
        <form method="post" action="">
            <?php if ($editData): ?>
            <input type="hidden" name="id" value="<?= htmlspecialchars($editData['id']) ?>">
            <?php endif; ?>
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px; margin-bottom: 15px;">
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Page ID</label>
                    <input type="text" name="page_id" list="page_id_list" required placeholder="e.g., home"
                        value="<?= $editData ? htmlspecialchars($editData['page_id']) : '' ?>"
                        style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                    <datalist id="page_id_list">
                        <?php foreach ($existingPageIds as $val): ?>
                        <option value="<?= htmlspecialchars($val) ?>">
                            <?php endforeach; ?>
                    </datalist>
                </div>
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Name</label>
                    <input type="text" name="name" list="name_list" required placeholder="e.g., heading"
                        value="<?= $editData ? htmlspecialchars($editData['name']) : '' ?>"
                        style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                    <datalist id="name_list">
                        <?php foreach ($existingNames as $val): ?>
                        <option value="<?= htmlspecialchars($val) ?>">
                            <?php endforeach; ?>
                    </datalist>
                </div>
                <div>
                    <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Section</label>
                    <input type="text" name="section" list="section_list" required placeholder="e.g., about"
                        value="<?= $editData ? htmlspecialchars($editData['section']) : '' ?>"
                        style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                    <datalist id="section_list">
                        <?php foreach ($existingSections as $val): ?>
                        <option value="<?= htmlspecialchars($val) ?>">
                            <?php endforeach; ?>
                    </datalist>
                </div>
            </div>
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Content</label>
                <textarea name="content" required placeholder="Enter content here..." rows="4"
                    style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-family: inherit;"><?= $editData ? htmlspecialchars($editData['content']) : '' ?></textarea>
            </div>
            <?php if ($editData): ?>
            <button type="submit" name="update_entry"
                style="padding: 10px 20px; border: none; background: #e67e22; color: #fff; border-radius: 6px; cursor: pointer; font-size: 16px; font-weight: bold;">Update
                Entry</button>
            <a href="SQLiteconnection.php" style="margin-left: 10px; color: #666; text-decoration: none;">Cancel</a>
            <?php else: ?>
            <button type="submit" name="add_entry"
                style="padding: 10px 20px; border: none; background: #27ae60; color: #fff; border-radius: 6px; cursor: pointer; font-size: 16px; font-weight: bold;">Add
                Entry</button>
            <?php endif; ?>
        </form>
    </div>

    <?php
// **************************** Content Home Page ****************************
// Insert Content in the Content Table

/*
 * page_id:home
 * name: the name of the content I have to create better naming for this content "name"
 * content: The actual content for the page.
 */


// Search Results Section
if (isset($_GET['q']) && is_string($_GET['q'])) {
    $q = trim($_GET['q']);
    echo '<section style="max-width: 1200px; margin: 10px auto;">';
    echo '<h2 style="color:#333;">Search Results</h2>';

    if ($q === '') {
        echo '<p>Please type a keyword to search.</p>';
        echo '</section>';
    } else if (!empty($tableExists)) {
        try {
            $like = '%' . $q . '%';
            $stmt = $pdo->prepare('SELECT id, page_id, name, section, content FROM content
                                   WHERE content LIKE :q OR name LIKE :q OR section LIKE :q OR page_id LIKE :q
                                   ORDER BY page_id, name, id LIMIT 200');
            $stmt->execute([':q' => $like]);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$rows) {
                echo '<p>No results for <strong>' . htmlspecialchars($q, ENT_QUOTES, 'UTF-8') . '</strong>.</p>';
            } else {
                echo '<p>Found ' . count($rows) . ' result(s) for <strong>' . htmlspecialchars($q, ENT_QUOTES, 'UTF-8') . '</strong>.</p>';
                echo '<table cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">';
                echo '<thead><tr style="background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%); color: #fff;">';
                echo '<th style="text-align:left; padding: 12px;">ID</th><th style="text-align:left; padding: 12px;">Page</th><th style="text-align:left; padding: 12px;">Name</th><th style="text-align:left; padding: 12px;">Section</th><th style="text-align:left; padding: 12px;">Content Snippet</th><th style="text-align:left; padding: 12px;">Actions</th>';
                echo '</tr></thead><tbody>';

                foreach ($rows as $r) {
                    $text = (string)$r['content'];
                    $snippet = $text;
                    if (mb_strlen($text) > 180) {
                        $pos = mb_stripos($text, $q);
                        if ($pos === false) { $pos = 0; }
                        $start = max(0, $pos - 60);
                        $snippet = '...' . trim(mb_substr($text, $start, 180)) . '...';
                    }

                    echo '<tr style="border-bottom:1px solid #eee;">';
                    echo '<td style="padding:12px;">' . htmlspecialchars((string)$r['id']) . '</td>';
                    echo '<td style="padding:12px;">' . htmlspecialchars((string)$r['page_id']) . '</td>';
                    echo '<td style="padding:12px;">' . htmlspecialchars((string)$r['name']) . '</td>';
                    echo '<td style="padding:12px;">' . htmlspecialchars((string)$r['section']) . '</td>';
                    echo '<td style="padding:12px;">' . htmlspecialchars($snippet) . '</td>';
                    echo '<td style="white-space: nowrap; padding: 12px;">
                        <a href="?edit_id=' . $r['id'] . '" class="btn btn-edit">Edit</a>
                        <a href="?delete_id=' . $r['id'] . '" onclick="return confirm(\'Are you sure you want to delete this item?\');" class="btn btn-delete">Delete</a>
                    </td>';
                    echo '</tr>';
                }

                echo '</tbody></table>';
            }
        } catch (PDOException $e) {
            error_log('Search DB Error: ' . $e->getMessage());
            echo '<p>There was a problem searching. Please try again later.</p>';
        }

        echo '</section>';
    }
}






// Display content grouped by Page ID
if (!empty($groupedContent)) {
    foreach ($groupedContent as $pageId => $rows) {
        echo '<div style="margin-top: 40px; margin-bottom: 20px;">';
        echo '<h2 style="color: #357abd; border-bottom: 2px solid #eee; padding-bottom: 10px; text-transform: capitalize; margin-bottom: 0;">' . htmlspecialchars($pageId) . '</h2>';
        echo '<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; margin-top: 20px;">';
        echo '<thead>';
        echo '<tr style="background-color: #f2f2f2;">';
        echo '<th>Index</th>';
        echo '<th>Page ID</th>';
        echo '<th>Name</th>';
        echo '<th>Section</th>';
        echo '<th>Content</th>';
        echo '<th>Actions</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($rows as $index => $row) {
            echo '<tr>';
            echo '<td>' . $index . '</td>';
            echo '<td>' . htmlspecialchars($row['page_id']) . '</td>';
            echo '<td>' . htmlspecialchars($row['name']) . '</td>';
            echo '<td>' . htmlspecialchars($row['section']) . '</td>';
            echo '<td>' . htmlspecialchars($row['content']) . '</td>';
            echo '<td style="white-space: nowrap;">
                <a href="?edit_id=' . $row['id'] . '" class="btn btn-edit">Edit</a>
                <a href="?delete_id=' . $row['id'] . '" onclick="return confirm(\'Are you sure you want to delete this item?\');" class="btn btn-delete">Delete</a>
            </td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    }
} elseif (!isset($_GET['q'])) {
    echo '<p>No content found in the database.</p>';
}
?>
    <div id="copy-toast">Copied HTML snippet to clipboard!</div>

    <script>
    // Smooth scrolling for Edit
    if (window.location.search.includes('edit_id')) {
        const form = document.querySelector('form[method="post"]');
        if (form) {
            form.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }
    }

    // Click-to-Copy Logic
    document.addEventListener('DOMContentLoaded', () => {
        const rows = document.querySelectorAll('tbody tr');
        const toast = document.getElementById('copy-toast');

        rows.forEach(row => {
            row.addEventListener('click', (e) => {
                // Ignore clicks on buttons or links (Actions column)
                if (e.target.closest('a') || e.target.closest('button')) {
                    return;
                }

                // Get the index from the first cell (Index column)
                const indexCell = row.cells[0];
                if (indexCell) {
                    const index = indexCell.textContent.trim();
                    const phpSnippet = `$content[${index}]['content']`;

                    // Copy to clipboard
                    navigator.clipboard.writeText(phpSnippet).then(() => {
                        showToast(phpSnippet);
                    }).catch(err => {
                        console.error('Failed to copy: ', err);
                    });
                }
            });
        });

        function showToast(text) {
            toast.textContent = `Copied: "${text}"`;
            toast.className = "show";
            setTimeout(() => {
                toast.className = toast.className.replace("show", "");
            }, 3000);
        }
    });
    </script>
</body>

</html>