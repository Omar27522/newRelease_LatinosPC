<?php
// batch_editor.php
// Modular batch insertion and updating system

$batchMessage = null;
$batchError = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['batch_action'])) {
    verifyCSRF();

    if ($_POST['batch_action'] === 'save') {
        $batchPageId = trim($_POST['batch_page_id'] ?? '');
        $batchSection = trim($_POST['batch_section'] ?? '');

        $batchIds = $_POST['batch_id'] ?? [];
        $batchNames = $_POST['batch_name'] ?? [];
        $batchContents = $_POST['batch_content'] ?? [];
        $batchContenidos = $_POST['batch_contenido'] ?? [];

        $opAdd = 0;
        $opUpdate = 0;
        $opError = 0;

        if ($batchPageId) {
            foreach ($batchNames as $index => $name) {
                $name = trim($name);
                $content = trim($batchContents[$index] ?? '');
                $contenido = trim($batchContenidos[$index] ?? '');
                $id = trim($batchIds[$index] ?? '');

                if ($name && $content) {
                    $data = [
                        'page_id' => $batchPageId,
                        'section' => $batchSection,
                        'name' => $name,
                        'content' => $content,
                        'contenido' => $contenido
                    ];

                    if ($id) {
                        if ($db->update($id, $data)) $opUpdate++; else $opError++;
                    } else {
                        if ($db->add($data)) $opAdd++; else $opError++;
                    }
                }
            }
            $batchMessage = "Batch save success: $opAdd added, $opUpdate updated." . ($opError ? " ($opError errors)" : "");

            // Re-fetch grouped content so the main page reflects changes immediately
            global $groupedContent;
            $groupedContent = $db->getAllGrouped();
        } else {
            $batchError = "Batch Page ID is required.";
        }
    }
}

// Handle loading for batch
$batchLoadedData = [];
$batchCurrentPageId = $_POST['batch_page_id'] ?? ($_GET['batch_page_id'] ?? '');
$batchCurrentSection = $_POST['batch_section'] ?? ($_GET['batch_section'] ?? '');

$isBatchLoad = (isset($_POST['batch_action']) && $_POST['batch_action'] === 'load') ||
               (isset($_GET['batch_action']) && $_GET['batch_action'] === 'load') ||
               (isset($_POST['batch_action']) && $_POST['batch_action'] === 'save');

if ($batchCurrentPageId && $isBatchLoad) {
    global $groupedContent;
    if (isset($groupedContent[$batchCurrentPageId])) {
        foreach ($groupedContent[$batchCurrentPageId] as $row) {
            if (!$batchCurrentSection || $row['section'] === $batchCurrentSection) {
                $batchLoadedData[] = $row;
            }
        }
    }
}
?>

<?php if ($batchMessage): ?>
    <div class="alert alert-success" id="auto-dismiss-batch" style="transition: opacity 0.3s ease; margin-top: 20px;"><?= htmlspecialchars($batchMessage) ?></div>
    <script>setTimeout(() => { const bMsg = document.getElementById('auto-dismiss-batch'); if (bMsg) { bMsg.style.opacity = '0'; setTimeout(() => bMsg.remove(), 300); } }, 3000);</script>
<?php endif; ?>
<?php if ($batchError): ?>
    <div class="alert alert-error" style="margin-top: 20px;"><?= htmlspecialchars($batchError) ?></div>
<?php endif; ?>

<div class="glass-card" id="batch-manager" style="margin-top: 20px; border-top: 4px solid #10b981;">
    <div class="section-header" style="margin-bottom: 15px;">
        <h2 class="section-title" style="margin-bottom: 0;">Batch Table Editor</h2>
        <span style="color: var(--text-light); font-size: 0.85rem;">Lock Page ID/Section to load and edit multiple entries simultaneously</span>
    </div>

    <!-- Load Form -->
    <form method="get" action="#batch-manager" style="background: rgba(0,0,0,0.02); padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid rgba(0,0,0,0.05); display: flex; flex-wrap: wrap; gap: 15px; align-items: flex-end;">
        <input type="hidden" name="batch_action" value="load">
        <div class="form-group" style="margin-bottom: 0px; flex: 1; min-width: 200px;">
            <label>Load Page ID <span style="color:red">*</span></label>
            <input type="text" name="batch_page_id" list="batch_page_ids" required value="<?= htmlspecialchars($batchCurrentPageId) ?>" placeholder="e.g. services_managed">
            <datalist id="batch_page_ids">
                <?php foreach($existingPageIds as $id): ?><option value="<?= htmlspecialchars($id) ?>"><?php endforeach; ?>
            </datalist>
        </div>
        <div class="form-group" style="margin-bottom: 0px; flex: 1; min-width: 200px;">
            <label>Filter by Section (Optional)</label>
            <input type="text" name="batch_section" list="batch_sections" value="<?= htmlspecialchars($batchCurrentSection) ?>" placeholder="e.g. hero">
            <datalist id="batch_sections">
                <?php foreach($existingSections as $sec): ?><option value="<?= htmlspecialchars($sec) ?>"><?php endforeach; ?>
            </datalist>
        </div>
        <div>
            <button type="submit" class="btn btn-primary" style="background: var(--primary-light); color: white;">Load Entries</button>
        </div>
    </form>

    <!-- Save Form -->
    <form method="post" id="batchSaveForm" action="#batch-manager">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <input type="hidden" name="batch_action" value="save">
        <input type="hidden" name="batch_page_id" value="<?= htmlspecialchars($batchCurrentPageId) ?>">
        <input type="hidden" name="batch_section" value="<?= htmlspecialchars($batchCurrentSection) ?>">

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 15px;" id="batchTable">
                <thead>
                    <tr style="text-align: left; border-bottom: 2px solid rgba(0,0,0,0.1);">
                        <th style="padding: 10px; width: 15%; min-width: 120px;">Section</th>
                        <th style="padding: 10px; width: 20%; min-width: 180px;">Internal Name <span style="color:red">*</span></th>
                        <th style="padding: 10px; width: 30%; min-width: 250px;">Content (English) <span style="color:red">*</span></th>
                        <th style="padding: 10px; width: 30%; min-width: 250px;">Contenido (Español)</th>
                        <th style="padding: 10px; width: 5%; min-width: 50px; text-align: center;">🗑️</th>
                    </tr>
                </thead>
                <tbody id="batchTableBody">
                    <?php if (empty($batchLoadedData) && $batchCurrentPageId): ?>
                        <!-- Blank row for new entries when loading an empty Page ID -->
                        <tr>
                            <td style="padding: 8px;">
                                <input type="hidden" name="batch_id[]" value="">
                                <input type="text" value="<?= htmlspecialchars($batchCurrentSection) ?>" readonly style="width: 100%; background: rgba(0,0,0,0.05); text-align:center; border-radius: 4px; border: 1px solid #e2e8f0; pointer-events: none;" placeholder="NEW">
                            </td>
                            <td style="padding: 8px;"><input type="text" name="batch_name[]" required placeholder="e.g. title_x" style="width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #e2e8f0; font-family: inherit;"></td>
                            <td style="padding: 8px;"><textarea name="batch_content[]" rows="2" required placeholder="English text" style="width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #e2e8f0; font-family: inherit; resize: vertical;"></textarea></td>
                            <td style="padding: 8px;"><textarea name="batch_contenido[]" rows="2" placeholder="Spanish text" style="width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #e2e8f0; font-family: inherit; resize: vertical;"></textarea></td>
                            <td style="padding: 8px; text-align: center;"><button type="button" class="btn btn-danger" onclick="this.closest('tr').remove()" style="padding: 6px 12px; font-size: 0.9rem;" title="Remove row">X</button></td>
                        </tr>
                    <?php endif; ?>

                    <!-- Loaded Rows -->
                    <?php foreach($batchLoadedData as $row): ?>
                    <tr>
                        <td style="padding: 8px;">
                            <input type="hidden" name="batch_id[]" value="<?= $row['id'] ?>">
                            <input type="text" title="<?= htmlspecialchars($row['section']) ?>" value="<?= htmlspecialchars($row['section']) ?>" readonly style="width: 100%; background: rgba(0,0,0,0.05); text-align:center; border-radius: 4px; border: 1px solid #e2e8f0; pointer-events: none;">
                        </td>
                        <td style="padding: 8px;"><input type="text" name="batch_name[]" required value="<?= htmlspecialchars($row['name']) ?>" style="width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #e2e8f0; font-family: inherit;"></td>
                        <td style="padding: 8px;"><textarea name="batch_content[]" rows="2" required style="width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #e2e8f0; font-family: inherit; resize: vertical;"><?= htmlspecialchars($row['content']) ?></textarea></td>
                        <td style="padding: 8px;"><textarea name="batch_contenido[]" rows="2" style="width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #e2e8f0; font-family: inherit; resize: vertical;"><?= htmlspecialchars($row['contenido']) ?></textarea></td>
                        <td style="padding: 8px; text-align: center;"><button type="button" class="btn btn-danger" onclick="this.closest('tr').remove()" style="padding: 6px 12px; font-size: 0.9rem;" title="Remove row">X</button></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div style="display: flex; gap: 10px; align-items: center; justify-content: space-between;">
            <div style="display: flex; gap: 10px; align-items: center;">
                <button type="button" class="btn btn-ghost" onclick="addBatchRow()" style="border: 1px dashed var(--primary-light);" <?= !$batchCurrentPageId ? 'disabled title="Load a Page ID to start editing"' : '' ?>>+ Add New Blank Row</button>
                <button type="submit" class="btn btn-primary" style="background-color: #10b981; border-color: #10b981;" <?= !$batchCurrentPageId ? 'disabled title="Load a Page ID to start editing"' : '' ?>>💾 Save All Changes</button>
                <?php if ($batchCurrentPageId): ?>
                    <button type="button" class="btn btn-ghost" onclick="closeBatchTable()" style="border: 1px solid #ef4444; color: #ef4444;" title="Close table and reset filters">✖ Close Table</button>
                <?php endif; ?>
            </div>
            <button type="button" class="btn btn-ghost" onclick="toggleEditorMode()" style="border: 1px solid var(--primary-light); color: var(--primary-color);">Switch to Single Mode</button>
        </div>
    </form>
</div>

<script>
function toggleEditorMode() {
    const singleEditor = document.getElementById('editor');
    const batchEditor = document.getElementById('batch-manager');

    // Fallbacks just in case
    if (!singleEditor || !batchEditor) return;

    if (singleEditor.style.display !== 'none') {
        singleEditor.style.display = 'none';
        batchEditor.style.display = 'block';
        localStorage.setItem('preferredEditorMode', 'batch');
    } else {
        singleEditor.style.display = 'block';
        batchEditor.style.display = 'none';
        localStorage.setItem('preferredEditorMode', 'single');
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const singleEditor = document.getElementById('editor');
    const batchEditor = document.getElementById('batch-manager');
    const mode = localStorage.getItem('preferredEditorMode') || 'single';

    if (!singleEditor || !batchEditor) return;

    <?php if ($isBatchLoad || isset($batchMessage) || isset($batchError)): ?>
        singleEditor.style.display = 'none';
        batchEditor.style.display = 'block';
    <?php elseif (isset($editData) && $editData): ?>
        singleEditor.style.display = 'block';
        batchEditor.style.display = 'none';
    <?php else: ?>
        if (mode === 'batch') {
            singleEditor.style.display = 'none';
            batchEditor.style.display = 'block';
        } else {
            singleEditor.style.display = 'block';
            batchEditor.style.display = 'none';
        }
    <?php endif; ?>
});

function addBatchRow() {
    const tbody = document.getElementById('batchTableBody');
    const newRow = document.createElement('tr');
    const currentSection = document.querySelector('input[name="batch_section"]')?.value || '';
    newRow.innerHTML = `
        <td style="padding: 8px;">
            <input type="hidden" name="batch_id[]" value="">
            <input type="text" value="${currentSection}" readonly style="width: 100%; background: rgba(0,0,0,0.05); text-align:center; border-radius: 4px; border: 1px solid #e2e8f0; pointer-events: none;" placeholder="NEW">
        </td>
        <td style="padding: 8px;"><input type="text" name="batch_name[]" required placeholder="e.g. title_x" style="width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #e2e8f0; font-family: inherit;"></td>
        <td style="padding: 8px;"><textarea name="batch_content[]" rows="2" required placeholder="English text" style="width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #e2e8f0; font-family: inherit; resize: vertical;"></textarea></td>
        <td style="padding: 8px;"><textarea name="batch_contenido[]" rows="2" placeholder="Spanish text" style="width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #e2e8f0; font-family: inherit; resize: vertical;"></textarea></td>
        <td style="padding: 8px; text-align: center;"><button type="button" class="btn btn-danger" onclick="this.closest('tr').remove()" style="padding: 6px 12px; font-size: 0.9rem;" title="Remove row">X</button></td>
    `;
    tbody.appendChild(newRow);
}

function closeBatchTable() {
    window.location.href = window.location.pathname + '?batch_action=load#batch-manager';
}
</script>
