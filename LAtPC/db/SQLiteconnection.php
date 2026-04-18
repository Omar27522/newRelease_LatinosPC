<?php
/**
 * Content Management Dashboard for LatinosPC
 * Restructured for better maintainability and professional aesthetics.
 */

// --- SESSION & SECURITY ---
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// --- CONFIGURATION ---
define('DB_PATH', __DIR__ . '/laTpc.db');

require_once __DIR__ . '/sources/ContentManager.php';
require_once __DIR__ . '/sources/ViewHelper.php';

// --- CONTROLLER LOGIC ---
$db = new ContentManager(DB_PATH);
$message = null;
$error = null;
$editData = null;
$lastSavedEntry = [];

// Handle CSRF Protection
function verifyCSRF() {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("CSRF token validation failed.");
    }
}

// Process GET Actions
if (isset($_GET['delete_id'])) {
    if ($db->delete($_GET['delete_id'])) {
        $message = "Entry deleted successfully.";
    } else {
        $error = "Failed to delete entry.";
    }
}

if (isset($_GET['edit_id'])) {
    $editData = $db->getById($_GET['edit_id']);
}

// Process POST Submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verifyCSRF();

    $data = [
        'page_id' => trim($_POST['page_id'] ?? ''),
        'name' => trim($_POST['name'] ?? ''),
        'section' => trim($_POST['section'] ?? ''),
        'content' => trim($_POST['content'] ?? ''),
        'contenido' => trim($_POST['contenido'] ?? '')
    ];

    if (!$data['page_id'] || !$data['name'] || !$data['content']) {
        $error = "Please fill in all required fields (Page ID, Name, Content).";
    } else {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            if ($db->update($_POST['id'], $data)) {
                $message = "Entry updated successfully.";
                $data['id'] = $_POST['id'];
                $lastSavedEntry = $data;
                $editData = null; // Exit edit mode
            } else {
                $error = "Failed to update entry.";
            }
        } else {
            if ($lastId = $db->add($data)) {
                $message = "Entry added successfully.";
                $data['id'] = $lastId;
                $lastSavedEntry = $data;
            } else {
                $error = "Failed to add entry.";
            }
        }
    }
}

// Fetch display data
$groupedContent = $db->getAllGrouped();

// Find true_index of latest entry if available
if (!empty($lastSavedEntry)) {
    $pid = $lastSavedEntry['page_id'];
    $lastSavedEntry['true_index'] = '?';
    if (isset($groupedContent[$pid])) {
        foreach ($groupedContent[$pid] as $row) {
            if ($row['id'] == $lastSavedEntry['id']) {
                $lastSavedEntry['true_index'] = $row['true_index'];
                break;
            }
        }
    }
}

$existingPageIds = $db->getDistinct('page_id');
$existingNames = $db->getDistinct('name');
$existingSections = $db->getDistinct('section');
$searchResults = null;
if (isset($_GET['q']) && trim($_GET['q']) !== '') {
    $searchResults = $db->search(trim($_GET['q']));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LatinoPC | Data Hub</title>
    <!-- Modern Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styleSQLiteConnection.css">
</head>
<body>

<div class="container">
    <header>
        <h1>LatinosPC <span style="font-weight: 300; color: var(--text-light);">DbManager</span></h1>
        <div class="actions">
            <a href="../index.php" class="btn btn-ghost">← Back to Site</a>
            <?php if ($editData): ?>
                <a href="SQLiteconnection.php" class="btn btn-danger">Clear Edit Mode</a>
            <?php endif; ?>
        </div>
    </header>

    <?php if ($message): ?>
        <div class="alert alert-success" id="auto-dismiss-message" style="transition: opacity 0.3s ease;"><?= htmlspecialchars($message) ?></div>
        <script>
            setTimeout(() => {
                const msg = document.getElementById('auto-dismiss-message');
                if (msg) {
                    msg.style.opacity = '0';
                    setTimeout(() => msg.remove(), 300);
                }
            }, 500);
        </script>
        <?php if (!empty($lastSavedEntry)): ?>
            <div class="glass-card" style="margin-bottom: 20px; border-left: 4px solid var(--primary-color); padding: 1.25rem;">
                <div style="font-size: 0.85rem; color: var(--primary-light); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px; font-weight: 600;">Latest Submitted Entry (Persists)</div>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px;">
                    <div><span style="color: var(--text-light); font-size: 0.85rem;">Index / #:</span><br><strong style="font-size: 1.1rem; color: var(--primary-color);">[<?= htmlspecialchars($lastSavedEntry['true_index']) ?>]</strong></div>
                    <div><span style="color: var(--text-light); font-size: 0.85rem;">Page ID:</span><br><strong style="font-size: 1.1rem;"><?= htmlspecialchars($lastSavedEntry['page_id']) ?></strong></div>
                    <div><span style="color: var(--text-light); font-size: 0.85rem;">Internal Name:</span><br><strong style="font-size: 1.1rem;"><?= htmlspecialchars($lastSavedEntry['name']) ?></strong></div>
                    <div><span style="color: var(--text-light); font-size: 0.85rem;">Section:</span><br><strong style="font-size: 1.1rem;"><?= htmlspecialchars($lastSavedEntry['section']) ?></strong></div>
                </div>
                <!-- Content Previews -->
                <div style="margin-top: 20px; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; border-top: 1px solid rgba(0,0,0,0.05); padding-top: 20px;">
                    <div>
                        <span style="color: var(--text-light); font-size: 0.85rem; text-transform: uppercase;">Content (English)</span>
                        <div style="margin-top: 5px; font-size: 0.95rem; line-height: 1.5; color: var(--text-main); white-space: pre-wrap;"><?= htmlspecialchars($lastSavedEntry['content']) ?></div>
                    </div>
                    <div>
                        <span style="color: var(--text-light); font-size: 0.85rem; text-transform: uppercase;">Contenido (Español)</span>
                        <div style="margin-top: 5px; font-size: 0.95rem; line-height: 1.5; color: var(--text-main); white-space: pre-wrap; font-style: italic;"><?= htmlspecialchars($lastSavedEntry['contenido']) ?></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if ($error): ?>
        <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <!-- Search Section -->
    <form class="search-form" method="get">
        <input type="text" name="q" value="<?= htmlspecialchars($_GET['q'] ?? '') ?>" placeholder="Search database content..." aria-label="Search">
        <button type="submit" class="btn btn-primary">Search</button>
        <?php if (isset($_GET['q'])): ?>
            <a href="SQLiteconnection.php" class="btn btn-ghost">Clear</a>
        <?php endif; ?>
    </form>

    <!-- Editor Section -->
    <div class="glass-card" id="editor">
        <div class="section-header" style="margin-bottom: 20px;">
            <h2 class="section-title" style="margin-bottom: 0;"><?= $editData ? 'Edit Entry' : 'Add New Entry' ?></h2>
            <?php if (!$editData): ?>
                <button type="button" class="btn btn-ghost" onclick="fillLastUsed()" style="padding: 6px 12px; font-size: 0.85rem;" title="Fills Page ID and Section from last entry">⬇ Fill Last Used Context</button>
            <?php endif; ?>
        </div>
        <form method="post" id="entryForm">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
            <?php if ($editData): ?>
                <input type="hidden" name="id" value="<?= $editData['id'] ?>">
            <?php endif; ?>

            <div class="grid-3">
                <div class="form-group">
                    <label>Page ID</label>
                    <input type="text" name="page_id" list="page_ids" required value="<?= htmlspecialchars($editData['page_id'] ?? '') ?>" placeholder="e.g. home">
                    <datalist id="page_ids">
                        <?php foreach($existingPageIds as $id): ?><option value="<?= htmlspecialchars($id) ?>"><?php endforeach; ?>
                    </datalist>
                </div>
                <div class="form-group">
                    <label>Internal Name</label>
                    <input type="text" name="name" list="names" required value="<?= htmlspecialchars($editData['name'] ?? '') ?>" placeholder="e.g. hero_title">
                    <datalist id="names">
                        <?php foreach($existingNames as $name): ?><option value="<?= htmlspecialchars($name) ?>"><?php endforeach; ?>
                    </datalist>
                </div>
                <div class="form-group">
                    <label>Section</label>
                    <input type="text" name="section" list="sections" value="<?= htmlspecialchars($editData['section'] ?? '') ?>" placeholder="e.g. main">
                    <datalist id="sections">
                        <?php foreach($existingSections as $sec): ?><option value="<?= htmlspecialchars($sec) ?>"><?php endforeach; ?>
                    </datalist>
                </div>
            </div>

            <div class="grid-2">
                <div class="form-group">
                    <label>Content (English)</label>
                    <textarea name="content" rows="6" required placeholder="Enter content..."><?= htmlspecialchars($editData['content'] ?? '') ?></textarea>
                </div>
                <div class="form-group">
                    <label>Contenido (Español)</label>
                    <textarea name="contenido" rows="6" placeholder="Ingrese contenido..."><?= htmlspecialchars($editData['contenido'] ?? '') ?></textarea>
                </div>
            </div>

            <div style="display: flex; gap: 10px; align-items: center;">
                <button type="submit" class="btn btn-primary">
                    <?= $editData ? 'Save Changes' : 'Create Entry' ?>
                </button>
                <?php if ($editData): ?>
                    <a href="SQLiteconnection.php" class="btn btn-ghost">Cancel</a>
                <?php endif; ?>
            </div>
        </form>
    </div>

    <!-- Results Section -->
    <?php if ($searchResults !== null): ?>
        <div class="section-header">
            <h2 class="section-title">Search Results (<?= count($searchResults) ?>)</h2>
        </div>
        <div class="glass-card">
            <?php renderTable($searchResults, true); ?>
        </div>
    <?php else: ?>
        <div class="tabs-container">
            <?php $firstTab = true; foreach ($groupedContent as $pageId => $rows): ?>
                <?php $tabId = 'tab-' . md5($pageId); ?>
                <a href="#<?= htmlspecialchars($pageId) ?>" style="text-decoration: none;"><button class="tab-button <?= $firstTab ? 'active' : '' ?>" onclick="openTab(event, '<?= $tabId ?>')">
                    <span style="text-transform: capitalize;  text-decoration: none;"><?= htmlspecialchars($pageId) ?></span> <span class="badge"><?= count($rows) ?></span>
                </button></a>
            <?php $firstTab = false; endforeach; ?>
        </div>

        <div class="tab-content-container">
            <?php $firstTab = true; foreach ($groupedContent as $pageId => $rows): ?>
                <?php $tabId = 'tab-' . md5($pageId); ?>
                <div id="<?= $tabId ?>" class="tab-content <?= $firstTab ? 'active' : '' ?>">
                    <div class="section-header">
                        <h2 class="section-title" style="text-transform: capitalize;" id="<?= htmlspecialchars($pageId) ?>"><?= htmlspecialchars($pageId) ?></h2>
                    </div>
                    <div class="glass-card">
                        <?php renderTable($rows, false); ?>
                    </div>
                </div>
            <?php $firstTab = false; endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<div id="copy-toast">Snippet copied!</div>


<script>
    // Copy to clipboard logic
    document.querySelectorAll('.clickable-row').forEach(row => {
        row.addEventListener('click', (e) => {
            if (e.target.closest('.actions')) return;

            const index = row.dataset.index;
            const snippet = `$content[${index}]['content']`;

            navigator.clipboard.writeText(snippet).then(() => {
                const toast = document.getElementById('copy-toast');
                toast.textContent = `Copied: ${snippet}`;
                toast.classList.add('show');
                setTimeout(() => toast.classList.remove('show'), 3000);
            });
        });
    });

    // Auto-scroll to editor if editing
    if (window.location.search.includes('edit_id')) {
        document.getElementById('editor').scrollIntoView({ behavior: 'smooth' });
    }

    // Tabs navigation logic
    function openTab(evt, tabId) {
        // Hide all tab contents
        const tabContents = document.getElementsByClassName("tab-content");
        for (let i = 0; i < tabContents.length; i++) {
            tabContents[i].classList.remove("active");
        }

        // Remove active class from all buttons
        const tabButtons = document.getElementsByClassName("tab-button");
        for (let i = 0; i < tabButtons.length; i++) {
            tabButtons[i].classList.remove("active");
        }

        // Show current tab, and add active class to the button that opened the tab
        document.getElementById(tabId).classList.add("active");
        evt.currentTarget.classList.add("active");
    }

    // Save to local storage on submit
    document.getElementById('entryForm')?.addEventListener('submit', function() {
        const pageId = document.querySelector('input[name="page_id"]').value;
        const name = document.querySelector('input[name="name"]').value;
        const section = document.querySelector('input[name="section"]').value;
        localStorage.setItem('last_page_id', pageId);
        localStorage.setItem('last_name', name);
        localStorage.setItem('last_section', section);
    });

    function fillLastUsed() {
        const pageId = localStorage.getItem('last_page_id');
        const name = localStorage.getItem('last_name');
        const section = localStorage.getItem('last_section');
        
        if (pageId) document.querySelector('input[name="page_id"]').value = pageId;
        if (name) document.querySelector('input[name="name"]').value = name;
        if (section) document.querySelector('input[name="section"]').value = section;
        
        // Brief visual feedback
        const btn = document.querySelector('button[onclick="fillLastUsed()"]');
        if(btn) {
            const originalText = btn.innerHTML;
            btn.innerHTML = "Filled!";
            setTimeout(() => btn.innerHTML = originalText, 1000);
        }
    }
</script>

</body>
</html>