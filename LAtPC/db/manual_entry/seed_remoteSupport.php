<?php
/**
 * ONE-TIME SEEDER —  Content
 * ─────────────────────────────────────────
 * Run this ONCE via browser or CLI to insert
 * the remoteSupport sections into laTpc.db.
 *
 * After running, DELETE, Or EDIT this file, USE IT WITH CAUTION!!!
 */

// Configuration
$page_id = 'hardware';
// Corrected Path: This file is in db/manual_entry/, so we go up one level to reach laTpc.db
$dbPath = dirname(__DIR__) . '/laTpc.db';

$status = null;
$message = '';
$details = [];
$count = 0;

try {
    // Verify file exists before trying to open it
    if (!file_exists($dbPath)) {
        throw new Exception("Database file not found at: " . $dbPath);
    }

    $pdo = new PDO('sqlite:' . $dbPath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ── Entries to insert ────────────────────────────────────────────
    $entries = [
        [
            'name'      => 'unsortListHeading',
            'section'   => 'hardware',
            'content'   => "Test1",
            'contenido' => 'Examen1',
        ],
        [
            'name'      => 'link_section',
            'section'   => 'hardware',
            'content'   => "Test2",
            'contenido' => 'Examen2',
        ]
    ];

    // ── Prepare Statements ───────────────────────────────────────────
    $checkStmt = $pdo->prepare(
        "SELECT COUNT(*) FROM content WHERE content = :content AND contenido = :contenido"
    );

    $insertStmt = $pdo->prepare(
        "INSERT INTO content (page_id, name, section, content, contenido, updated_at)
         VALUES (:page_id, :name, :section, :content, :contenido, CURRENT_TIMESTAMP)"
    );

    $pdo->beginTransaction();
    foreach ($entries as $entry) {
        // Check for duplicates of the (content + contenido) pair
        $checkStmt->execute([
            ':content'   => $entry['content'],
            ':contenido' => $entry['contenido'],
        ]);

        if ($checkStmt->fetchColumn() > 0) {
            // Already exists, skip this specific entry
            continue;
        }

        $insertStmt->execute([
            ':page_id'   => $page_id,
            ':name'      => $entry['name'],
            ':section'   => $entry['section'],
            ':content'   => $entry['content'],
            ':contenido' => $entry['contenido'],
        ]);
        $count++;
        $details[] = $entry;
    }
    $pdo->commit();

    if ($count === 0) {
        $status = 'warning';
        $message = 'No New Entries Added';
    } else {
        $status = 'success';
        $message = "Successfully Seeded {$count} Entries";
    }

} catch (Exception $e) {
    if (isset($pdo) && $pdo->inTransaction()) {
        $pdo->rollBack();
    }
    $status = 'error';
    $message = 'Database Error';
    $details = [$e->getMessage()];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Seeder — Remote Support</title>
    <style>
     :root {
         --bg-color: #0f172a;
         --card-bg: rgba(30, 41, 59, 0.7);
         --text-primary: #f8fafc;
         --text-secondary: #94a3b8;
         --accent-success: #10b981;
         --accent-warning: #f59e0b;
         --accent-error: #ef4444;
         --glass-border: rgba(255, 255, 255, 0.1);
     }

     * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
     }

     body {
         font-family: 'Inter', system-ui, -apple-system, sans-serif;
         background-color: var(--bg-color);
         background-image: radial-gradient(circle at top right, #1e293b, #0f172a);
         color: var(--text-primary);
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         padding: 20px;
     }

     .container {
         width: 100%;
         max-width: 600px;
         perspective: 1000px;
     }

     .card {
         background: var(--card-bg);
         backdrop-filter: blur(12px);
         border: 1px solid var(--glass-border);
         border-radius: 24px;
         padding: 40px;
         box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
         animation: slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1);
     }

     @keyframes slideUp {
         from {
             transform: translateY(30px);
             opacity: 0;
         }

         to {
             transform: translateY(0);
             opacity: 1;
         }
     }

     .status-icon {
         width: 64px;
         height: 64px;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         margin: 0 auto 24px;
         font-size: 32px;
         background: rgba(255, 255, 255, 0.05);
     }

     .status-success .status-icon {
         color: var(--accent-success);
         border: 2px solid var(--accent-success);
     }

     .status-warning .status-icon {
         color: var(--accent-warning);
         border: 2px solid var(--accent-warning);
     }

     .status-error .status-icon {
         color: var(--accent-error);
         border: 2px solid var(--accent-error);
     }

     h1 {
         font-size: 24px;
         font-weight: 700;
         text-align: center;
         margin-bottom: 8px;
         letter-spacing: -0.025em;
     }

     .subtitle {
         text-align: center;
         color: var(--text-secondary);
         font-size: 14px;
         margin-bottom: 32px;
     }

     .message-box {
         background: rgba(0, 0, 0, 0.2);
         border-radius: 12px;
         padding: 16px;
         margin-bottom: 24px;
         border-left: 4px solid transparent;
         word-break: break-all;
     }

     .status-success .message-box {
         border-left-color: var(--accent-success);
     }

     .status-warning .message-box {
         border-left-color: var(--accent-warning);
     }

     .status-error .message-box {
         border-left-color: var(--accent-error);
     }

     .details-list {
         margin-top: 24px;
         font-size: 13px;
         color: var(--text-secondary);
         max-height: 200px;
         overflow-y: auto;
         padding-right: 8px;
     }

     .details-item {
         padding: 8px 0;
         border-bottom: 1px solid var(--glass-border);
         display: flex;
         justify-content: space-between;
     }

     .details-item:last-child {
         border-bottom: none;
     }

     .code-tag {
         font-family: monospace;
         background: rgba(255, 255, 255, 0.1);
         padding: 2px 6px;
         border-radius: 4px;
         color: var(--text-primary);
     }

     .warning-footer {
         margin-top: 32px;
         padding: 16px;
         background: rgba(239, 68, 68, 0.1);
         border: 1px dashed var(--accent-error);
         border-radius: 12px;
         color: var(--accent-error);
         font-size: 13px;
         text-align: center;
         font-weight: 600;
     }
    </style>
</head>

<body class="status-<?= $status ?>">
    <div class="container">
        <div class="card">
            <div class="status-icon">
                <?php if ($status === 'success') echo '✓'; ?>
                <?php if ($status === 'warning') echo '⚠'; ?>
                <?php if ($status === 'error') echo '✕'; ?>
            </div>

            <h1><?= $message ?></h1>
            <p class="subtitle">Manual Content Seeder — Page ID: <span
                    class="code-tag"><?= htmlspecialchars($page_id) ?></span></p>

            <div class="message-box">
                <?php if ($status === 'success'): ?>
                Inserted <strong><?= $count ?></strong> new records into the <code>content</code> table.
                <?php elseif ($status === 'warning'): ?>
                All entries in this script already exist in the database. No duplicates were added.
                <?php else: ?>
                <strong>Error:</strong> <?= htmlspecialchars($details[0]) ?>
                <?php endif; ?>
            </div>

            <?php if ($status === 'success' && !empty($details)): ?>
            <div class="details-list">
                <?php foreach ($details as $d): ?>
                <div class="details-item">
                    <span><?= htmlspecialchars($d['name']) ?></span>
                    <span class="code-tag"><?= htmlspecialchars($d['section']) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <div class="warning-footer">
                ⚠ DELETE THIS FILE NOW — IT SHOULD ONLY RUN ONCE
            </div>
        </div>
    </div>
</body>

</html>