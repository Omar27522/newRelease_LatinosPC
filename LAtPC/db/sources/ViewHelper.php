<?php
/**
 * Helper to render content table
 */
function renderTable($rows, $isSearch = false) {
    if (empty($rows)) {
        echo "<p>No entries found.</p>";
        return;
    }
    ?>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th width="50">#</th>
                    <?php if ($isSearch): ?><th width="100">Page</th><?php endif; ?>
                    <th width="100">Name</th>
                    <th width="100">Section</th>
                    <th>Content snippet</th>
                    <th width="150" style="text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                <?php $displayIndex = $row['true_index'] ?? 0; ?>
                <?php $missingTranslation = empty(trim($row['contenido'] ?? '')); ?>
                <tr data-index="<?= $displayIndex ?>" class="clickable-row <?= $missingTranslation ? 'missing-translation' : '' ?>">
                    <td><span class="badge" style="background: #f1f5f9;"><?= $displayIndex ?></span></td>
                    <?php if ($isSearch): ?>
                        <td><span class="badge" style="background: rgba(79, 70, 229, 0.1); color: var(--primary); text-transform: uppercase;"><?= htmlspecialchars($row['page_id'] ?? '') ?></span></td>
                    <?php endif; ?>
                    <td><strong><?= htmlspecialchars($row['name'] ?? '') ?></strong></td>
                    <td><span class="badge"><?= htmlspecialchars(($row['section'] ?? '') ?: '-') ?></span></td>
                    <td>
                        <div class="content-preview"><?= htmlspecialchars($row['content'] ?? '') ?></div>
                        <?php if (isset($row['contenido']) && $row['contenido']): ?>
                            <div class="content-preview" style="color: var(--text-light); margin-top: 4px; font-style: italic;">
                                <?= htmlspecialchars($row['contenido']) ?>
                            </div>
                        <?php endif; ?>
                    </td>
                    <td style="text-align: right;">
                        <div class="actions" style="justify-content: flex-end;">
                            <a href="?edit_id=<?= $row['id'] ?>#editor" class="btn btn-edit" title="Edit">
                                Edit
                            </a>
                            <a href="?delete_id=<?= $row['id'] ?>" onclick="return confirm('Delete this entry?');" class="btn btn-danger" title="Delete">
                                Delete
                            </a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
}
