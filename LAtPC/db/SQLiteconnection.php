<?php
/**
 * Content Management Dashboard for LatinosPC
 * High-performance, ultra-fast asynchronous data hub with intuitive
 * section pill filtering, search match highlighting, and instant tab caching.
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

$db = new ContentManager(DB_PATH);

// --- LIGHTWEIGHT API ENDPOINTS FOR ZERO-LATENCY ACTIONS ---
if (isset($_GET['api']) || isset($_POST['api'])) {
    $apiAction = $_REQUEST['api'] ?? '';
    header('Content-Type: application/json; charset=utf-8');

    if ($apiAction === 'tab_data') {
        $tab = trim($_GET['tab'] ?? 'home');
        $rows = $db->getByPageId($tab);
        echo json_encode($rows, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        exit;
    }

    if ($apiAction === 'delete') {
        $delId = (int)($_REQUEST['id'] ?? $_REQUEST['delete_id'] ?? 0);
        if ($delId <= 0) {
            echo json_encode(['success' => false, 'error' => 'Invalid entry ID.']);
            exit;
        }

        // Validate CSRF if provided
        $clientCsrf = $_REQUEST['csrf_token'] ?? '';
        if ($clientCsrf && (!isset($_SESSION['csrf_token']) || $clientCsrf !== $_SESSION['csrf_token'])) {
            echo json_encode(['success' => false, 'error' => 'CSRF verification failed.']);
            exit;
        }

        $existingItem = $db->getById($delId);
        $deleted = $db->delete($delId);
        if ($deleted) {
            echo json_encode([
                'success' => true,
                'id' => $delId,
                'page_id' => $existingItem['page_id'] ?? '',
                'name' => $existingItem['name'] ?? '',
                'message' => "Entry #$delId deleted successfully."
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'error' => "Entry #$delId was not found or has already been deleted."
            ]);
        }
        exit;
    }

    if ($apiAction === 'save') {
        // Validate CSRF if provided
        $clientCsrf = $_REQUEST['csrf_token'] ?? '';
        if ($clientCsrf && (!isset($_SESSION['csrf_token']) || $clientCsrf !== $_SESSION['csrf_token'])) {
            echo json_encode(['success' => false, 'error' => 'CSRF verification failed.']);
            exit;
        }

        $id = !empty($_POST['id']) ? (int)$_POST['id'] : null;
        $data = [
            'page_id' => trim($_POST['page_id'] ?? ''),
            'name' => trim($_POST['name'] ?? ''),
            'section' => trim($_POST['section'] ?? ''),
            'content' => trim($_POST['content'] ?? ''),
            'contenido' => trim($_POST['contenido'] ?? '')
        ];

        if (!$data['page_id'] || !$data['name'] || !$data['content']) {
            echo json_encode(['success' => false, 'error' => 'Please fill in all required fields (Page ID, Name, Content).']);
            exit;
        }

        if ($id) {
            $updated = $db->update($id, $data);
            if ($updated) {
                $savedItem = $db->getById($id);
                echo json_encode([
                    'success' => true,
                    'action' => 'update',
                    'item' => $savedItem,
                    'message' => "Entry #{$savedItem['id']} updated successfully."
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            } else {
                echo json_encode(['success' => false, 'error' => "Failed to update entry #$id."]);
            }
        } else {
            $newId = $db->add($data);
            if ($newId) {
                $savedItem = $db->getById($newId);
                echo json_encode([
                    'success' => true,
                    'action' => 'create',
                    'item' => $savedItem,
                    'message' => "Entry #$newId added successfully."
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            } else {
                echo json_encode(['success' => false, 'error' => 'Failed to create new entry.']);
            }
        }
        exit;
    }
}

// --- CONTROLLER LOGIC ---
$message = null;
$error = null;
$editData = null;
$lastSavedEntry = [];

// Flash messages from Session
if (!empty($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
}
if (!empty($_SESSION['flash_error'])) {
    $error = $_SESSION['flash_error'];
    unset($_SESSION['flash_error']);
}

$activeTab = trim($_GET['tab'] ?? ($_POST['active_tab'] ?? ''));

// Handle CSRF Protection
function verifyCSRF() {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("CSRF token validation failed.");
    }
}

// Process GET Actions (with Post-Redirect-Get pattern)
if (isset($_GET['delete_id'])) {
    $delId = (int)$_GET['delete_id'];
    $delTab = trim($_GET['tab'] ?? $activeTab);
    $itemToDelete = $db->getById($delId);
    if ($db->delete($delId)) {
        $nameLabel = !empty($itemToDelete['name']) ? " (" . $itemToDelete['name'] . ")" : "";
        $_SESSION['flash_message'] = "Entry #$delId{$nameLabel} deleted successfully.";
    } else {
        $_SESSION['flash_error'] = "Entry #$delId was not found or has already been deleted.";
    }
    $redirectUrl = "SQLiteconnection.php?tab=" . urlencode($delTab ?: 'home');
    if (!empty($_GET['q'])) {
        $redirectUrl .= "&q=" . urlencode($_GET['q']);
    }
    header("Location: " . $redirectUrl);
    exit;
}

if (isset($_GET['edit_id'])) {
    $editData = $db->getById((int)$_GET['edit_id']);
    if ($editData && empty($activeTab)) {
        $activeTab = $editData['page_id'];
    }
}

if (isset($_GET['saved_id'])) {
    $savedItem = $db->getById((int)$_GET['saved_id']);
    if ($savedItem) {
        $lastSavedEntry = $savedItem;
        if (empty($activeTab)) {
            $activeTab = $savedItem['page_id'];
        }
    }
}

// Process POST Submissions (with Post-Redirect-Get pattern)
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && !isset($_POST['batch_action'])) {
    verifyCSRF();

    $data = [
        'page_id' => trim($_POST['page_id'] ?? ''),
        'name' => trim($_POST['name'] ?? ''),
        'section' => trim($_POST['section'] ?? ''),
        'content' => trim($_POST['content'] ?? ''),
        'contenido' => trim($_POST['contenido'] ?? '')
    ];

    $redirectTab = $data['page_id'] ?: ($activeTab ?: 'home');

    if (!$data['page_id'] || !$data['name'] || !$data['content']) {
        $error = "Please fill in all required fields (Page ID, Name, Content).";
    } else {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $postId = (int)$_POST['id'];
            if ($db->update($postId, $data)) {
                $_SESSION['flash_message'] = "Entry #$postId updated successfully.";
                header("Location: SQLiteconnection.php?tab=" . urlencode($redirectTab) . "&saved_id=" . $postId);
                exit;
            } else {
                $error = "Failed to update entry #$postId.";
            }
        } else {
            if ($lastId = $db->add($data)) {
                $_SESSION['flash_message'] = "Entry #$lastId added successfully.";
                header("Location: SQLiteconnection.php?tab=" . urlencode($redirectTab) . "&saved_id=" . $lastId);
                exit;
            } else {
                $error = "Failed to add entry.";
            }
        }
    }
}

// Get Page Counts in stable order (home, services, hardware, about)
$pageCounts = $db->getPageCounts();

// Ensure an active tab is selected
if (empty($activeTab) && !empty($pageCounts)) {
    $activeTab = array_key_first($pageCounts);
}
$activeTab = strtolower($activeTab);

// Fetch data ONLY for active tab on initial load for lightning-fast delivery (< 30ms)
$initialTabData = $db->getByPageId($activeTab);

// Find true_index of latest saved entry if available
if (!empty($lastSavedEntry)) {
    $pid = strtolower($lastSavedEntry['page_id']);
    $lastSavedEntry['true_index'] = '?';
    $targetRows = ($pid === $activeTab) ? $initialTabData : $db->getByPageId($pid);
    foreach ($targetRows as $row) {
        if ($row['id'] == $lastSavedEntry['id']) {
            $lastSavedEntry['true_index'] = $row['true_index'];
            break;
        }
    }
}

$existingPageIds = array_keys($pageCounts);
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
    <title>LatinosPC | Data Hub</title>
    <!-- Modern Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styleSQLiteConnection.css">
</head>

<body>
    <!-- Apply theme before rendering to avoid flicker -->
    <script>
    (function() {
        const saved = localStorage.getItem('latinospc_theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        document.documentElement.setAttribute('data-theme', saved);
    })();
    </script>

    <div class="container">
        <header>
            <div class="brand-wrapper">
                <div class="brand-logo-badge">LP</div>
                <div>
                    <a href="../index.php" style="text-decoration: none; color: inherit;">
                        <h1>LatinosPC <span style="font-weight: 300; color: var(--text-light);">DbManager</span></h1>
                    </a>
                    <p class="header-subtitle">
                        High-performance bilingual content studio & component registry
                    </p>
                </div>
            </div>
            <!-- Header Global Search -->
            <form class="header-search-form" method="get" action="SQLiteconnection.php">
                <div class="search-input-wrapper">
                    <input type="text" name="q" value="<?= htmlspecialchars($_GET['q'] ?? '') ?>"
                        placeholder="Global search across all pages (name, text, #index)..." class="header-search-input">
                    <?php if (isset($_GET['q'])): ?>
                    <a href="SQLiteconnection.php?tab=<?= urlencode($activeTab) ?>" class="search-clear-btn" style="display:block;">✕</a>
                    <?php endif; ?>
                </div>
            </form>

            <div class="actions">
                <button type="button" class="btn btn-ghost btn-sm" onclick="openGuideModal()" title="Architecture Guide: Common Page IDs & Offsets">
                    💡 Guide
                </button>
                <button type="button" class="btn btn-ghost btn-sm" id="theme-toggle-btn" onclick="toggleTheme()" title="Toggle Dark / Light Mode">
                    🌙 Dark
                </button>
                <button type="button" class="btn btn-primary btn-sm" id="open-editor-btn" onclick="openEditorModal('new')" title="Add New Entry">
                    <?= $editData ? '✏️ Edit Mode' : '➕ New Entry' ?>
                </button>
                <a href="../index.php" class="btn btn-ghost btn-sm">← Site</a>
                <?php if ($editData): ?>
                <a href="SQLiteconnection.php?tab=<?= urlencode($activeTab) ?>" class="btn btn-danger btn-sm">Clear Edit</a>
                <?php endif; ?>
            </div>
        </header>

        <!-- Floating Notifications (Zero height in layout flow) -->
        <?php if ($message): ?>
        <div class="toast-alert alert-success" id="auto-dismiss-message">
            <span>✅ <?= htmlspecialchars($message) ?></span>
            <button type="button" onclick="this.parentElement.remove()" class="toast-close">✕</button>
        </div>
        <script>
        setTimeout(() => {
            const msg = document.getElementById('auto-dismiss-message');
            if (msg) {
                msg.style.opacity = '0';
                setTimeout(() => msg.remove(), 300);
            }
        }, 3500);
        </script>
        <?php endif; ?>
        <?php if ($error): ?>
        <div class="toast-alert alert-error" id="auto-dismiss-error">
            <span>⚠️ <?= htmlspecialchars($error) ?></span>
            <button type="button" onclick="this.parentElement.remove()" class="toast-close">✕</button>
        </div>
        <?php endif; ?>

        <!-- Architecture Guide Modal -->
        <div id="guide-modal-overlay" class="modal-overlay is-hidden" onclick="handleModalBackdropClick(event)">
            <div class="modal-dialog">
                <button type="button" class="modal-close-btn" onclick="closeGuideModal()" title="Close guide">✕</button>
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 14px;">
                    <span style="font-size: 1.5rem;">💡</span>
                    <div>
                        <h3 style="margin: 0; color: var(--primary); font-size: 1.25rem;">Deep Dive: How Page IDs & Sequential PHP Offsets Work in LatinosPC</h3>
                        <p style="margin: 2px 0 0 0; color: var(--text-light); font-size: 0.85rem;">Architecture guide for bilingual content system & component registry</p>
                    </div>
                </div>
                <div class="architecture-guide-body">
                    <p>
                        In this project, pages call <code>databaseConnection($page_id)</code> (e.g. <code>databaseConnection('hardware')</code>).
                        The database query runs <code>SELECT * FROM content WHERE page_id = ? ORDER BY id ASC</code> and loads all rows into a zero-based PHP array called <code>$content</code>.
                    </p>
                    <div class="architecture-grid">
                        <div class="arch-card">
                            <h4>1. Common Page ID = Shared Namespace</h4>
                            <p>All 28+ files in <code>/hardware/</code> (like <code>hardwareContent.php</code>, <code>cpu.php</code>, <code>ram.php</code>) share <code>page_id = 'hardware'</code> so they can access the shared 4,322-item pool and common navigation links.</p>
                        </div>
                        <div class="arch-card">
                            <h4>2. Sections Separate Sub-Features</h4>
                            <p>In <code>services</code>, all files share <code>page_id = 'services'</code>, but use <code>section</code> (e.g. <code>cleanups</code>, <code>remote_support</code>, <code>consultations</code>) to categorize items without breaking the array pool.</p>
                        </div>
                        <div class="arch-card">
                            <h4>3. Sequential Offset <code>$content[#][$key]</code></h4>
                            <p>PHP references items by offset <code>$content[105][$key]</code>, NOT by primary key <code>id</code>. Click any <b>#Index</b> badge in the tables below to copy the exact PHP snippet directly to your clipboard!</p>
                        </div>
                        <div class="arch-card">
                            <h4>4. Avoid Misspelled Page IDs</h4>
                            <p>If an entry has a typo (e.g. <code>Hardware</code> vs <code>hardware</code>), SQLite won't match it, and it will shift the offsets of every entry after it, causing layout bugs!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Editor Modal Overlay (Single & Batch Modes) -->
        <div id="editor-modal-overlay" class="modal-overlay <?= ($editData || (isset($_GET['batch_action']) && $_GET['batch_action'] === 'load')) ? '' : 'is-hidden' ?>" onclick="handleModalBackdropClick(event)">
            <div class="modal-dialog">
                <button type="button" class="modal-close-btn" onclick="closeEditorModal()" title="Close editor">✕</button>

                <!-- Single Entry Form -->
                <div id="editor" style="<?= (isset($_GET['batch_action']) && $_GET['batch_action'] === 'load') ? 'display: none;' : '' ?>">
                    <div class="section-header" style="margin-bottom: 16px;">
                        <h2 class="section-title" style="margin-bottom: 0;">
                            <?= $editData ? 'Edit Entry #' . ($editData['id'] ?? '') : 'Add New Entry' ?>
                        </h2>
                        <div style="display: flex; gap: 8px;">
                            <?php if (!$editData): ?>
                            <button type="button" class="btn btn-ghost btn-sm" id="quick-tab-fill-btn"
                                onclick="fillCurrentTab()" title="Sets Page ID to active tab">⬇ Pre-fill with <?= htmlspecialchars($activeTab) ?></button>
                            <button type="button" class="btn btn-ghost btn-sm" onclick="fillLastUsed()"
                                title="Fills Page ID, Name, Section from last entry">⬇ Fill Last Used</button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <form method="post" id="entryForm">
                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
                        <input type="hidden" name="active_tab" id="form-active-tab" value="<?= htmlspecialchars($activeTab) ?>">
                        <?php if ($editData): ?>
                        <input type="hidden" name="id" value="<?= $editData['id'] ?>">
                        <?php endif; ?>

                        <div class="grid-3">
                            <div class="form-group">
                                <label>Page ID <span style="font-weight: normal; color: var(--text-light);">(Category / Shared Pool)</span></label>
                                <input type="text" name="page_id" id="form-input-page-id" list="page_ids" required
                                    value="<?= htmlspecialchars($editData['page_id'] ?? $activeTab) ?>"
                                    placeholder="e.g. hardware, services, home">
                                <datalist id="page_ids">
                                    <?php foreach($existingPageIds as $id): ?><option value="<?= htmlspecialchars($id) ?>">
                                        <?php endforeach; ?>
                                </datalist>
                            </div>
                            <div class="form-group">
                                <label>Internal Name <span style="font-weight: normal; color: var(--text-light);">(Unique Identifier)</span></label>
                                <input type="text" name="name" list="names" required
                                    value="<?= htmlspecialchars($editData['name'] ?? '') ?>"
                                    placeholder="e.g. hero_title, cleanups_heading">
                                <datalist id="names">
                                    <?php foreach($existingNames as $name): ?><option value="<?= htmlspecialchars($name) ?>">
                                        <?php endforeach; ?>
                                </datalist>
                            </div>
                            <div class="form-group">
                                <label>Section <span style="font-weight: normal; color: var(--text-light);">(Subpage / Component)</span></label>
                                <input type="text" name="section" list="sections"
                                    value="<?= htmlspecialchars($editData['section'] ?? '') ?>"
                                    placeholder="e.g. cleanups, remote_support, heading">
                                <datalist id="sections">
                                    <?php foreach($existingSections as $sec): ?><option value="<?= htmlspecialchars($sec) ?>">
                                        <?php endforeach; ?>
                                </datalist>
                            </div>
                        </div>

                        <div class="grid-2">
                            <div class="form-group">
                                <label>Content (English) <span style="color: red;">*</span></label>
                                <textarea name="content" rows="4" required
                                    placeholder="Enter English text, HTML snippet, or URL..."><?= htmlspecialchars($editData['content'] ?? '') ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Contenido (Español)</label>
                                <textarea name="contenido" rows="4"
                                    placeholder="Ingrese texto en español o traducción..."><?= htmlspecialchars($editData['contenido'] ?? '') ?></textarea>
                            </div>
                        </div>

                        <div style="display: flex; gap: 10px; align-items: center; justify-content: space-between; flex-wrap: wrap;">
                            <div style="display: flex; gap: 10px; align-items: center;">
                                <button type="submit" class="btn btn-primary">
                                    <?= $editData ? '💾 Save Changes' : '➕ Create Entry' ?>
                                </button>
                                <?php if ($editData): ?>
                                <a href="SQLiteconnection.php?tab=<?= urlencode($activeTab) ?>" class="btn btn-ghost">Cancel</a>
                                <?php else: ?>
                                <button type="button" class="btn btn-ghost" onclick="closeEditorModal()">Cancel</button>
                                <?php endif; ?>
                            </div>
                            <button type="button" class="btn btn-ghost" onclick="toggleEditorMode()"
                                style="border: 1px solid var(--primary); color: var(--primary);">Switch to Batch Mode</button>
                        </div>
                    </form>
                </div>

                <!-- Batch Editor Section -->
                <?php include __DIR__ . '/batch_editor.php'; ?>
            </div>
        </div>

        <!-- Results Section -->
        <?php if ($searchResults !== null): ?>
        <div class="section-header" style="flex-shrink: 0; margin-bottom: 2px;">
            <h2 class="section-title">Search Results (<?= count($searchResults) ?>)</h2>
        </div>
        <div class="glass-card" style="flex: 1; min-height: 0; display: flex; flex-direction: column; overflow: hidden; padding: 8px 12px; margin-bottom: 0;">
            <?php renderSearchResults($searchResults); ?>
        </div>
        <?php else: ?>
        <!-- Modern Persistent Tabs -->
        <div class="tabs-container" id="main-tabs-nav">
            <?php foreach ($pageCounts as $pId => $pCount): ?>
            <?php $isActive = (strtolower($pId) === $activeTab); ?>
            <button type="button" class="tab-button <?= $isActive ? 'active' : '' ?>"
                id="tab-btn-<?= htmlspecialchars(strtolower($pId)) ?>"
                onclick="switchTab('<?= htmlspecialchars(strtolower($pId)) ?>')">
                <span style="text-transform: capitalize;"><?= htmlspecialchars($pId) ?></span>
                <span class="badge"><?= $pCount ?></span>
            </button>
            <?php endforeach; ?>
        </div>

        <div class="tab-content-container">
            <?php foreach ($pageCounts as $pId => $pCount): ?>
            <?php $isActive = (strtolower($pId) === $activeTab); ?>
            <div id="tab-content-<?= htmlspecialchars(strtolower($pId)) ?>"
                class="tab-content <?= $isActive ? 'active' : '' ?>">
                <div class="section-header">
                    <h2 class="section-title">
                        <span style="text-transform: capitalize;"><?= htmlspecialchars($pId) ?></span> Content
                        <span
                            style="font-size: 0.88rem; font-weight: normal; color: var(--text-light); margin-left: 8px;">
                            (Namespace: <code>page_id = '<?= htmlspecialchars($pId) ?>'</code> • <?= $pCount ?> entries)
                        </span>
                    </h2>
                </div>
                <div class="glass-card">
                    <?php renderTabContainer($pId, $pCount); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>

    <div id="copy-toast">Snippet copied!</div>

    <!-- Embedded Initial Tab Data (< 40 KB for home / services, instant mount) -->
    <script id="initial-tab-data" type="application/json">
    <?= json_encode($initialTabData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
    </script>

    <script id="app-config" type="application/json">
    <?= json_encode([
        'activeTab' => $activeTab,
        'validTabs' => array_map('strtolower', $existingPageIds),
        'savedId' => $_GET['saved_id'] ?? null,
        'editId' => $_GET['edit_id'] ?? null,
        'csrfToken' => $_SESSION['csrf_token'] ?? ''
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
    </script>

    <!-- TypeScript-Style Modular DataHub Engine -->
    <script src="sources/dataHubManager.js"></script>

</body>

</html>