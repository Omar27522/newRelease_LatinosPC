<?php
/**
 * ViewHelper for LatinosPC Data Hub
 * Generates super fast, intuitive table structures, section pill filters,
 * live breadcrumbs, and interactive pagination wrappers.
 */

function renderTabContainer($pageId, $count = 0) {
    $safeTableId = 'tbl_' . preg_replace('/[^a-zA-Z0-9_]/', '_', strtolower($pageId));
    ?>
    <div class="table-wrapper" id="wrapper-<?= $safeTableId ?>" data-page-id="<?= htmlspecialchars(strtolower($pageId)) ?>">
        
        <!-- Interactive Section Filter Pills -->
        <div class="section-pills-wrapper" id="section-pills-wrap-<?= $safeTableId ?>">
            <div class="section-pills-header">
                <span class="section-pills-title">Filter by Section</span>
                <span style="font-size: 0.78rem; color: var(--text-light);" id="section-count-info-<?= $safeTableId ?>">Loading sections...</span>
            </div>
            <div class="section-pills-bar" id="section-pills-<?= $safeTableId ?>">
                <button type="button" class="section-pill active" onclick="tableManagers['<?= $safeTableId ?>'].onSectionFilter('')">
                    All Entries <span class="section-pill-badge" id="pill-all-count-<?= $safeTableId ?>"><?= $count ?></span>
                </button>
            </div>
        </div>

        <!-- Active Filter Breadcrumbs (Shown when search/section/status is active) -->
        <div class="active-filters-bar" id="active-filters-<?= $safeTableId ?>" style="display: none;">
            <span class="active-filters-label">Active Filters:</span>
            <div id="filter-chips-<?= $safeTableId ?>" style="display: flex; gap: 6px; flex-wrap: wrap;"></div>
            <span class="clear-all-link" onclick="tableManagers['<?= $safeTableId ?>'].clearAllFilters()">Reset All</span>
        </div>

        <!-- Tab Control Toolbar -->
        <div class="tab-toolbar">
            <div class="toolbar-group flex-wrap">
                <!-- Search with clear button -->
                <div class="search-input-wrapper" id="search-box-<?= $safeTableId ?>">
                    <input type="text" 
                           class="table-search-input" 
                           placeholder="🔍 Search name, text, #index..." 
                           oninput="tableManagers['<?= $safeTableId ?>'].onSearch(this.value)"
                           aria-label="Filter table">
                    <button type="button" class="search-clear-btn" onclick="tableManagers['<?= $safeTableId ?>'].clearSearch()" title="Clear search">✖</button>
                </div>

                <!-- Jump to Index Input -->
                <div class="jump-box">
                    <span class="jump-label">Jump to #:</span>
                    <input type="number" 
                           min="0" 
                           placeholder="Index" 
                           class="jump-input" 
                           id="jump-input-<?= $safeTableId ?>"
                           onkeydown="if(event.key==='Enter'){event.preventDefault(); tableManagers['<?= $safeTableId ?>'].jumpToIndex();}">
                    <button type="button" class="btn btn-sm btn-ghost" onclick="tableManagers['<?= $safeTableId ?>'].jumpToIndex()">Go</button>
                </div>

                <!-- Status Filter Pills -->
                <div class="segmented-pill-group">
                    <button type="button" class="segmented-pill active" id="status-all-<?= $safeTableId ?>" onclick="tableManagers['<?= $safeTableId ?>'].onStatusFilter('all')">All</button>
                    <button type="button" class="segmented-pill pill-missing" id="status-missing-<?= $safeTableId ?>" onclick="tableManagers['<?= $safeTableId ?>'].onStatusFilter('missing')">⚠️ Missing Spanish</button>
                    <button type="button" class="segmented-pill" id="status-complete-<?= $safeTableId ?>" onclick="tableManagers['<?= $safeTableId ?>'].onStatusFilter('complete')">✅ Complete</button>
                </div>
            </div>

            <div class="toolbar-group flex-wrap justify-end">
                <!-- Sort Order Segmented Control -->
                <div class="segmented-pill-group">
                    <button type="button" class="segmented-pill active" id="sort-index-<?= $safeTableId ?>" onclick="tableManagers['<?= $safeTableId ?>'].onSortChange('index')" title="Sequence 0 to N as referenced in PHP templates">🔢 Index (0→N)</button>
                    <button type="button" class="segmented-pill" id="sort-recent-<?= $safeTableId ?>" onclick="tableManagers['<?= $safeTableId ?>'].onSortChange('recent')" title="Show most recently updated rows first">🕒 Recent</button>
                </div>

                <!-- Page Size Selector -->
                <div class="filter-select-wrapper">
                    <select class="toolbar-select" onchange="tableManagers['<?= $safeTableId ?>'].onPageSizeChange(this.value)">
                        <option value="50">50 / page</option>
                        <option value="100" selected>100 / page</option>
                        <option value="250">250 / page</option>
                        <option value="all">Show All</option>
                    </select>
                </div>

                <button type="button" class="btn btn-sm btn-primary" onclick="setEditorPageId('<?= htmlspecialchars($pageId) ?>')">
                    + Add to <?= htmlspecialchars(ucfirst($pageId)) ?>
                </button>
            </div>
        </div>

        <!-- Table Container -->
        <div class="table-container">
            <table id="<?= $safeTableId ?>" class="interactive-content-table">
                <thead>
                    <tr>
                        <th width="75">Index</th>
                        <th width="190">Name & Section</th>
                        <th>Content (English & Español)</th>
                        <th width="170" style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="tbody-<?= $safeTableId ?>">
                    <!-- Rows dynamically mounted by TableManager in < 1ms -->
                </tbody>
            </table>
            <div id="loading-state-<?= $safeTableId ?>" class="tab-loading-state" style="display: none;">
                <div class="spinner"></div>
                <div>Loading content for <?= htmlspecialchars($pageId) ?>...</div>
            </div>
            <div id="empty-state-<?= $safeTableId ?>" style="display: none; padding: 40px; text-align: center; color: var(--text-light);">
                No matching entries found for this filter.
            </div>
        </div>

        <!-- Pagination Controls -->
        <div class="pagination-bar" id="pagination-<?= $safeTableId ?>">
            <div class="pagination-info">
                Showing <strong class="page-start">0</strong> to <strong class="page-end">0</strong> of <strong class="page-total"><?= $count ?></strong> entries
                <span class="filter-count-note" style="display: none; color: var(--primary); font-weight: 600;"> (filtered)</span>
            </div>
            <div class="pagination-actions">
                <button type="button" class="btn btn-sm btn-ghost page-btn-first" onclick="tableManagers['<?= $safeTableId ?>'].goToPage(1)" title="First Page">⏮ First</button>
                <button type="button" class="btn btn-sm btn-ghost page-btn-prev" onclick="tableManagers['<?= $safeTableId ?>'].prevPage()" title="Previous Page">◀ Prev</button>
                <span class="page-current-info">Page <strong class="current-page-num">1</strong> of <strong class="total-pages-num">1</strong></span>
                <button type="button" class="btn btn-sm btn-ghost page-btn-next" onclick="tableManagers['<?= $safeTableId ?>'].nextPage()" title="Next Page">Next ▶</button>
                <button type="button" class="btn btn-sm btn-ghost page-btn-last" onclick="tableManagers['<?= $safeTableId ?>'].goToLastPage()" title="Last Page">Last ⏭</button>
            </div>
        </div>
    </div>
    <?php
}

function renderSearchResults($rows) {
    if (empty($rows)) {
        echo "<p style='color: var(--text-light); padding: 30px; text-align: center;'>No entries matched your search query.</p>";
        return;
    }
    ?>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th width="75">Index</th>
                    <th width="110">Page ID</th>
                    <th width="180">Name & Section</th>
                    <th>Content Preview</th>
                    <th width="160" style="text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                <?php 
                    $idx = $row['true_index'] ?? 0;
                    $missing = empty(trim($row['contenido'] ?? ''));
                    $currPage = $row['page_id'] ?? '';
                ?>
                <tr class="clickable-row <?= $missing ? 'missing-translation' : '' ?>" onclick="copySnippet(<?= $idx ?>, event)">
                    <td>
                        <button type="button" class="index-badge" onclick="copySnippet(<?= $idx ?>, event)" title="Click to copy: $content[<?= $idx ?>][$key] ?? ''">
                            #<?= $idx ?>
                        </button>
                    </td>
                    <td>
                        <span class="badge badge-page" onclick="switchTab('<?= htmlspecialchars($currPage) ?>'); event.stopPropagation();" style="cursor: pointer;" title="Open <?= htmlspecialchars($currPage) ?> tab">
                            <?= htmlspecialchars($currPage) ?>
                        </span>
                    </td>
                    <td>
                        <div class="name-section-cell">
                            <strong><?= htmlspecialchars($row['name'] ?? '') ?></strong>
                            <span class="badge badge-section"><?= htmlspecialchars(($row['section'] ?? '') ?: 'none') ?></span>
                        </div>
                    </td>
                    <td>
                        <div class="content-display-block">
                            <div class="content-preview en-content">
                                <span class="lang-tag">EN</span><?= htmlspecialchars($row['content'] ?? '') ?>
                            </div>
                            <?php if (!$missing): ?>
                                <div class="content-preview es-content">
                                    <span class="lang-tag">ES</span><?= htmlspecialchars($row['contenido'] ?? '') ?>
                                </div>
                            <?php else: ?>
                                <span class="badge badge-missing">Missing Spanish</span>
                            <?php endif; ?>
                        </div>
                    </td>
                    <td style="text-align: right;" onclick="event.stopPropagation();">
                        <div class="actions" style="justify-content: flex-end;">
                            <button type="button" class="btn btn-sm btn-ghost btn-copy-code" onclick="copySnippet(<?= $idx ?>, event)">📋 Copy</button>
                            <a href="?edit_id=<?= $row['id'] ?>&tab=<?= urlencode($currPage) ?>#editor" class="btn btn-sm btn-edit">Edit</a>
                            <a href="?delete_id=<?= $row['id'] ?>&tab=<?= urlencode($currPage) ?><?= isset($_GET['q']) ? '&q=' . urlencode($_GET['q']) : '' ?>" onclick="return confirm('Delete entry #<?= $idx ?> (<?= htmlspecialchars(addslashes($row['name'] ?? ''), ENT_QUOTES) ?>) [ID: <?= $row['id'] ?>]?\n\nThis cannot be undone.');" class="btn btn-sm btn-danger" title="Delete entry #<?= $idx ?> (ID: <?= $row['id'] ?>)">✕</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
}
