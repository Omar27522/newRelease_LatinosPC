/**
 * @fileoverview DataHubManager - TypeScript-Style Content Management Engine for LatinosPC
 * Provides high-performance in-memory caching, section group filtering, instant editing modals,
 * and seamless URL state management.
 * 
 * @author LatinosPC Dev Team
 */

/**
 * @typedef {Object} ContentItem
 * @property {number|string} id - Database Primary Key
 * @property {string} page_id - Shared category namespace (e.g., 'home', 'services', 'hardware')
 * @property {string} name - Unique internal identifier
 * @property {string} section - Component or subpage category
 * @property {string} content - English text, snippet, or URL
 * @property {string} contenido - Spanish translated content
 * @property {number} true_index - Zero-based offset in PHP sequential array $content[index][$key]
 * @property {string} [created_at] - Creation timestamp
 * @property {string} [updated_at] - Last update timestamp
 */

/**
 * @typedef {Object} AppConfig
 * @property {string} activeTab - Currently active tab name
 * @property {string[]} validTabs - Whitelisted valid tab names
 * @property {string|null} savedId - ID of just-saved entry to highlight
 * @property {string|null} editId - ID of entry to open in editor
 */

// Global registry for fast access
window.tabCache = window.tabCache || {};
window.tableManagers = window.tableManagers || {};

/**
 * High-performance table manager with client-side sorting, filtering,
 * instant search match highlighting, and pagination.
 */
class FastTableManager {
    /**
     * @param {string} pageId - Tab namespace
     * @param {number|string} [pageSize=100] - Rows per page
     */
    constructor(pageId, pageSize = 100) {
        /** @type {string} */
        this.pageId = (pageId || '').toLowerCase();
        /** @type {string} */
        this.tableId = 'tbl_' + this.pageId.replace(/[^a-zA-Z0-9_]/g, '_');
        /** @type {HTMLTableSectionElement|null} */
        this.tbody = document.getElementById('tbody-' + this.tableId);
        /** @type {HTMLElement|null} */
        this.wrapper = document.getElementById('wrapper-' + this.tableId);
        /** @type {HTMLElement|null} */
        this.paginationBar = document.getElementById('pagination-' + this.tableId);
        /** @type {HTMLElement|null} */
        this.loadingEl = document.getElementById('loading-state-' + this.tableId);
        /** @type {HTMLElement|null} */
        this.emptyEl = document.getElementById('empty-state-' + this.tableId);

        /** @type {ContentItem[]} */
        this.rawItems = [];
        /** @type {ContentItem[]} */
        this.filteredItems = [];
        /** @type {Object.<string, number>} */
        this.sectionsMap = {};
        /** @type {string} */
        this.selectedSection = '';
        /** @type {string} */
        this.searchQuery = '';
        /** @type {'all'|'missing'|'complete'} */
        this.statusFilter = 'all';
        /** @type {'index'|'recent'} */
        this.sortMode = 'index';
        /** @type {number} */
        this.pageSize = pageSize === 'all' ? 999999 : parseInt(pageSize, 10);
        /** @type {number} */
        this.currentPage = 1;
        /** @type {boolean} */
        this.initialized = false;
    }

    /**
     * Loads raw items into manager and updates UI
     * @param {ContentItem[]} items
     */
    loadData(items) {
        this.rawItems = items || [];
        this.analyzeSections();
        this.renderSectionPills();
        this.applyFilterAndSort();
        this.initialized = true;
    }

    /**
     * Analyzes section frequencies and counts missing translations
     */
    analyzeSections() {
        this.sectionsMap = {};
        let missing = 0;
        this.rawItems.forEach(item => {
            const sec = (item.section || '').trim();
            const key = sec !== '' ? sec : '(no section)';
            this.sectionsMap[key] = (this.sectionsMap[key] || 0) + 1;
            if (!(item.contenido || '').trim()) {
                missing++;
            }
        });

        const missingBtn = document.getElementById('status-missing-' + this.tableId);
        if (missingBtn) {
            missingBtn.textContent = `⚠️ Missing Spanish (${missing})`;
        }
        const completeBtn = document.getElementById('status-complete-' + this.tableId);
        if (completeBtn) {
            completeBtn.textContent = `✅ Complete (${this.rawItems.length - missing})`;
        }
    }

    /**
     * Renders clickable section filter pills
     */
    renderSectionPills() {
        const pillsBar = document.getElementById('section-pills-' + this.tableId);
        const infoEl = document.getElementById('section-count-info-' + this.tableId);
        if (!pillsBar) return;

        const secKeys = Object.keys(this.sectionsMap).sort((a, b) => {
            const countDiff = this.sectionsMap[b] - this.sectionsMap[a];
            if (countDiff !== 0) return countDiff;
            return a.localeCompare(b);
        });

        if (infoEl) {
            infoEl.textContent = `${secKeys.length} section category groups`;
        }

        let html = `
            <button type="button" 
                    class="section-pill ${this.selectedSection === '' ? 'active' : ''}" 
                    onclick="tableManagers['${this.tableId}'].onSectionFilter('')">
                All Sections <span class="section-pill-badge">${this.rawItems.length}</span>
            </button>
        `;

        secKeys.forEach(secName => {
            const count = this.sectionsMap[secName];
            const isActive = this.selectedSection === secName;
            const safeName = this.escapeHtml(secName);
            html += `
                <button type="button" 
                        class="section-pill ${isActive ? 'active' : ''}" 
                        onclick="tableManagers['${this.tableId}'].onSectionFilter('${this.escapeQuotes(secName)}')">
                    ${safeName} <span class="section-pill-badge">${count}</span>
                </button>
            `;
        });

        pillsBar.innerHTML = html;
    }

    /**
     * @param {string} secName
     */
    onSectionFilter(secName) {
        this.selectedSection = secName;
        this.currentPage = 1;
        this.renderSectionPills();
        this.applyFilterAndSort();
    }

    /**
     * @param {string} query
     */
    onSearch(query) {
        this.searchQuery = (query || '').trim();
        const searchBox = document.getElementById('search-box-' + this.tableId);
        if (searchBox) {
            searchBox.classList.toggle('has-text', this.searchQuery.length > 0);
        }
        this.currentPage = 1;
        this.applyFilterAndSort();
    }

    clearSearch() {
        const input = this.wrapper?.querySelector('.table-search-input');
        if (input) input.value = '';
        this.onSearch('');
    }

    /**
     * @param {'all'|'missing'|'complete'} status
     */
    onStatusFilter(status) {
        this.statusFilter = status;
        const group = document.querySelectorAll(`[id^="status-"][id$="-${this.tableId}"]`);
        group.forEach(b => b.classList.remove('active'));
        const activeBtn = document.getElementById(`status-${status}-${this.tableId}`);
        if (activeBtn) activeBtn.classList.add('active');

        this.currentPage = 1;
        this.applyFilterAndSort();
    }

    /**
     * @param {'index'|'recent'} mode
     */
    onSortChange(mode) {
        this.sortMode = mode;
        const sortIndexBtn = document.getElementById('sort-index-' + this.tableId);
        const sortRecentBtn = document.getElementById('sort-recent-' + this.tableId);
        if (sortIndexBtn) sortIndexBtn.classList.toggle('active', mode === 'index');
        if (sortRecentBtn) sortRecentBtn.classList.toggle('active', mode === 'recent');

        this.applyFilterAndSort();
    }

    /**
     * @param {string|number} size
     */
    onPageSizeChange(size) {
        this.pageSize = size === 'all' ? 999999 : parseInt(size, 10);
        this.currentPage = 1;
        this.renderRows();
    }

    clearAllFilters() {
        this.selectedSection = '';
        this.searchQuery = '';
        this.statusFilter = 'all';
        const input = this.wrapper?.querySelector('.table-search-input');
        if (input) input.value = '';
        const searchBox = document.getElementById('search-box-' + this.tableId);
        if (searchBox) searchBox.classList.remove('has-text');

        this.renderSectionPills();
        this.onStatusFilter('all');
    }

    applyFilterAndSort() {
        const q = this.searchQuery.toLowerCase();
        const isNumeric = /^\d+$/.test(q);
        const qInt = isNumeric ? parseInt(q, 10) : -1;

        // 1. Filter
        this.filteredItems = this.rawItems.filter(item => {
            const missing = !(item.contenido || '').trim();
            if (this.statusFilter === 'missing' && !missing) return false;
            if (this.statusFilter === 'complete' && missing) return false;

            if (this.selectedSection !== '') {
                const sec = (item.section || '').trim();
                const actualSecKey = sec !== '' ? sec : '(no section)';
                if (actualSecKey !== this.selectedSection) return false;
            }

            if (q) {
                if (item.true_index === qInt) return true;
                const name = (item.name || '').toLowerCase();
                const sec = (item.section || '').toLowerCase();
                const content = (item.content || '').toLowerCase();
                const contenido = (item.contenido || '').toLowerCase();
                if (!name.includes(q) && !sec.includes(q) && !content.includes(q) && !contenido.includes(q)) {
                    return false;
                }
            }

            return true;
        });

        // 2. Sort
        if (this.sortMode === 'recent') {
            this.filteredItems.sort((a, b) => {
                const upA = a.updated_at || '';
                const upB = b.updated_at || '';
                if (upA === upB) return (b.id || 0) - (a.id || 0);
                return upB.localeCompare(upA);
            });
        } else {
            this.filteredItems.sort((a, b) => a.true_index - b.true_index);
        }

        this.renderActiveFilterBreadcrumbs();
        this.renderRows();
    }

    renderActiveFilterBreadcrumbs() {
        const bar = document.getElementById('active-filters-' + this.tableId);
        const chipsContainer = document.getElementById('filter-chips-' + this.tableId);
        if (!bar || !chipsContainer) return;

        const chips = [];
        if (this.selectedSection) {
            chips.push(`
                <span class="filter-chip">
                    Section: ${this.escapeHtml(this.selectedSection)}
                    <span class="filter-chip-remove" onclick="tableManagers['${this.tableId}'].onSectionFilter('')">✕</span>
                </span>
            `);
        }
        if (this.searchQuery) {
            chips.push(`
                <span class="filter-chip">
                    Search: "${this.escapeHtml(this.searchQuery)}"
                    <span class="filter-chip-remove" onclick="tableManagers['${this.tableId}'].clearSearch()">✕</span>
                </span>
            `);
        }
        if (this.statusFilter !== 'all') {
            chips.push(`
                <span class="filter-chip">
                    Status: ${this.statusFilter}
                    <span class="filter-chip-remove" onclick="tableManagers['${this.tableId}'].onStatusFilter('all')">✕</span>
                </span>
            `);
        }

        if (chips.length > 0) {
            chipsContainer.innerHTML = chips.join('');
            bar.style.display = 'flex';
        } else {
            bar.style.display = 'none';
        }
    }

    renderRows() {
        if (!this.tbody) return;

        const total = this.filteredItems.length;
        const totalPages = Math.max(1, Math.ceil(total / this.pageSize));
        if (this.currentPage > totalPages) this.currentPage = totalPages;

        const startIdx = (this.currentPage - 1) * this.pageSize;
        const endIdx = Math.min(startIdx + this.pageSize, total);
        const pageItems = this.filteredItems.slice(startIdx, endIdx);

        if (this.emptyEl) {
            this.emptyEl.style.display = total === 0 ? 'block' : 'none';
        }

        if (total === 0) {
            this.tbody.innerHTML = '';
            if (this.paginationBar) this.paginationBar.style.display = 'none';
            return;
        }

        if (this.paginationBar) this.paginationBar.style.display = 'flex';

        const q = this.searchQuery;
        const pageIdSafe = this.escapeQuotes(this.pageId);

        const html = pageItems.map(item => {
            const idx = item.true_index;
            const name = this.highlightMatch(this.escapeHtml(item.name || ''), q);
            const section = item.section ?
                `<span class="badge badge-section" title="Section: ${this.escapeQuotes(item.section)}">${this.highlightMatch(this.escapeHtml(item.section), q)}</span>` :
                `<span class="badge badge-empty">—</span>`;

            const content = this.highlightMatch(this.escapeHtml(item.content || ''), q);
            const contenido = this.highlightMatch(this.escapeHtml(item.contenido || ''), q);
            const missing = !(item.contenido || '').trim();

            return `
                <tr id="row-${this.tableId}-${idx}" class="data-row">
                    <td>
                        <button type="button" 
                                class="index-pill" 
                                onclick="DataHubApp.copySnippet(${idx}, event)"
                                title="Click to copy $content[${idx}][$key]">
                            #${idx}
                        </button>
                    </td>
                    <td class="font-mono text-muted" style="font-size: 0.8rem;">
                        ${item.id}
                    </td>
                    <td class="font-mono" style="font-weight: 500;">
                        ${name}
                    </td>
                    <td>
                        ${section}
                    </td>
                    <td>
                        <div class="content-preview-container">
                            <div class="content-preview en-content">
                                <span class="lang-tag">EN</span>${content}
                            </div>
                            ${!missing ? `
                                <div class="content-preview es-content">
                                    <span class="lang-tag">ES</span>${contenido}
                                </div>
                            ` : `
                                <span class="badge badge-missing">Missing Spanish Translation</span>
                            `}
                        </div>
                    </td>
                    <td style="text-align: right;" onclick="event.stopPropagation();">
                        <div class="actions" style="justify-content: flex-end;">
                            <button type="button" class="btn btn-sm btn-ghost btn-copy-code" onclick="DataHubApp.copySnippet(${idx}, event)" title="Copy snippet to clipboard">📋 Copy</button>
                            <button type="button" class="btn btn-sm btn-edit" onclick="tableManagers['${this.tableId}'].openEditModalById(${item.id})" title="Edit entry #${idx}">Edit</button>
                            <button type="button" class="btn btn-sm btn-danger btn-delete-row" onclick="tableManagers['${this.tableId}'].deleteEntry(${item.id}, event)" title="Delete entry #${idx} (ID: ${item.id})">✕</button>
                        </div>
                    </td>
                </tr>
            `;
        }).join('');

        this.tbody.innerHTML = html;

        // Update Pagination Info
        if (this.paginationBar) {
            const startEl = this.paginationBar.querySelector('.page-start');
            const endEl = this.paginationBar.querySelector('.page-end');
            const totalEl = this.paginationBar.querySelector('.page-total');
            const currEl = this.paginationBar.querySelector('.page-current');
            const maxEl = this.paginationBar.querySelector('.page-max');
            const noteEl = this.paginationBar.querySelector('.page-filtered-note');

            if (startEl) startEl.textContent = total > 0 ? (startIdx + 1) : 0;
            if (endEl) endEl.textContent = endIdx;
            if (totalEl) totalEl.textContent = total;
            if (currEl) currEl.textContent = this.currentPage;
            if (maxEl) maxEl.textContent = totalPages;
            if (noteEl) noteEl.style.display = total < this.rawItems.length ? 'inline' : 'none';

            const prevBtns = this.paginationBar.querySelectorAll('.page-btn-first, .page-btn-prev');
            const nextBtns = this.paginationBar.querySelectorAll('.page-btn-next, .page-btn-last');
            prevBtns.forEach(b => b.disabled = this.currentPage <= 1);
            nextBtns.forEach(b => b.disabled = this.currentPage >= totalPages);
        }
    }

    /**
     * @param {number} p
     */
    goToPage(p) {
        const totalPages = Math.max(1, Math.ceil(this.filteredItems.length / this.pageSize));
        this.currentPage = Math.max(1, Math.min(p, totalPages));
        this.renderRows();
    }

    prevPage() {
        this.goToPage(this.currentPage - 1);
    }

    nextPage() {
        this.goToPage(this.currentPage + 1);
    }

    goToLastPage() {
        const totalPages = Math.max(1, Math.ceil(this.filteredItems.length / this.pageSize));
        this.goToPage(totalPages);
    }

    jumpToIndex() {
        const input = document.getElementById('jump-input-' + this.tableId);
        if (!input) return;
        const targetIdx = parseInt(input.value.trim(), 10);
        if (isNaN(targetIdx)) return;

        const targetItem = this.rawItems.find(it => it.true_index === targetIdx);
        if (!targetItem) {
            DataHubApp.showToast(`Index #${targetIdx} not found in ${this.pageId}.`);
            return;
        }

        this.clearAllFilters();
        const rowPos = this.filteredItems.findIndex(it => it.true_index === targetIdx);
        if (rowPos !== -1) {
            this.currentPage = Math.floor(rowPos / this.pageSize) + 1;
            this.renderRows();

            setTimeout(() => {
                const rowEl = document.getElementById(`row-${this.tableId}-${targetIdx}`);
                if (rowEl) {
                    rowEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    rowEl.classList.remove('row-highlight');
                    void rowEl.offsetWidth;
                    rowEl.classList.add('row-highlight');
                    setTimeout(() => rowEl.classList.remove('row-highlight'), 3000);
                }
            }, 60);
        }
    }

    /**
     * Jumps directly to an item by DB primary key ID and pulses it
     * @param {number|string} targetId
     */
    jumpToId(targetId) {
        const targetItem = this.rawItems.find(it => String(it.id) === String(targetId));
        if (!targetItem) return;

        this.clearAllFilters();
        const rowPos = this.filteredItems.findIndex(it => String(it.id) === String(targetId));
        if (rowPos !== -1) {
            this.currentPage = Math.floor(rowPos / this.pageSize) + 1;
            this.renderRows();

            setTimeout(() => {
                const rowEl = document.getElementById(`row-${this.tableId}-${targetItem.true_index}`);
                if (rowEl) {
                    rowEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    rowEl.classList.remove('row-highlight');
                    void rowEl.offsetWidth;
                    rowEl.classList.add('row-highlight');
                    setTimeout(() => rowEl.classList.remove('row-highlight'), 3500);
                }
            }, 80);
        }
    }

    /**
     * Instant inline edit modal population without requiring full page reload
     * @param {number|string} id
     */
    openEditModalById(id) {
        const item = this.rawItems.find(it => String(it.id) === String(id));
        if (!item) return;

        const modal = document.getElementById('editor-modal-overlay');
        const form = document.getElementById('entryForm');
        if (!modal || !form) return;

        // Set or create ID hidden input
        let idInput = form.querySelector('input[name="id"]');
        if (!idInput) {
            idInput = document.createElement('input');
            idInput.type = 'hidden';
            idInput.name = 'id';
            form.appendChild(idInput);
        }
        idInput.value = item.id;

        const pageIdInput = document.getElementById('form-input-page-id');
        if (pageIdInput) pageIdInput.value = item.page_id || '';

        const formTabInput = document.getElementById('form-active-tab');
        if (formTabInput) formTabInput.value = item.page_id || '';

        const nameInput = form.querySelector('input[name="name"]');
        if (nameInput) nameInput.value = item.name || '';

        const sectionInput = form.querySelector('input[name="section"]');
        if (sectionInput) sectionInput.value = item.section || '';

        const contentInput = form.querySelector('textarea[name="content"]');
        if (contentInput) contentInput.value = item.content || '';

        const contenidoInput = form.querySelector('textarea[name="contenido"]');
        if (contenidoInput) contenidoInput.value = item.contenido || '';

        const titleEl = document.querySelector('#editor .section-title');
        if (titleEl) titleEl.textContent = `Edit Entry #${item.id} (${item.name || ''})`;

        const submitBtn = form.querySelector('button[type="submit"]');
        if (submitBtn) submitBtn.innerHTML = '💾 Save Changes';

        // Update URL bar cleanly to reflect edit state without page reload
        try {
            history.replaceState(null, null, `SQLiteconnection.php?tab=${encodeURIComponent(item.page_id)}&edit_id=${encodeURIComponent(item.id)}`);
        } catch(e) {}

        ModalManager.openEditorModal('single');
    }

    /**
     * Deletes an entry asynchronously with zero page reload.
     * Removes the item from memory, sequentially re-indexes remaining items,
     * updates section counters and pill badges, and re-renders the current view smoothly.
     * 
     * @param {number|string} id - Database Primary Key ID
     * @param {Event} [event] - Click event
     */
    async deleteEntry(id, event) {
        if (event) {
            event.preventDefault();
            event.stopPropagation();
        }

        const item = this.rawItems.find(it => String(it.id) === String(id));
        const trueIndex = item ? item.true_index : '?';
        const displayName = item?.name || 'entry';

        const confirmMsg = `Delete entry #${trueIndex} ("${displayName}") with DB ID #${id}?\n\nThis action cannot be undone.`;
        if (!window.confirm(confirmMsg)) {
            return;
        }

        const rowEl = document.getElementById(`row-${this.tableId}-${trueIndex}`);
        if (rowEl) {
            rowEl.style.transition = 'all 0.25s ease';
            rowEl.style.opacity = '0.4';
            rowEl.style.pointerEvents = 'none';
        }

        const csrfToken = DataHubApp.config?.csrfToken || '';
        const formData = new FormData();
        formData.append('api', 'delete');
        formData.append('id', String(id));
        if (csrfToken) {
            formData.append('csrf_token', csrfToken);
        }

        try {
            const resp = await fetch('SQLiteconnection.php', {
                method: 'POST',
                body: formData
            });
            const data = await resp.json();

            if (data && data.success) {
                // 1. Remove item from rawItems
                this.rawItems = this.rawItems.filter(it => String(it.id) !== String(id));

                // 2. Recalculate true_index sequentially so subsequent rows match PHP array offsets
                this.rawItems.forEach((it, i) => {
                    it.true_index = i;
                });

                // 3. Update cache for this tab so switching tabs doesn't restore deleted item
                if (window.tabCache && window.tabCache[this.pageId]) {
                    window.tabCache[this.pageId] = this.rawItems;
                }

                // 4. Update section counts and pills
                this.analyzeSections();
                this.renderSectionPills();

                // 5. Update main tab button counter badge
                const tabBadge = document.querySelector(`#tab-btn-${this.pageId} .badge`);
                if (tabBadge) {
                    tabBadge.textContent = this.rawItems.length;
                }

                // 6. Update tab section header entry count
                const headerDesc = document.querySelector(`#tab-content-${this.pageId} .section-title span[style*="font-size: 0.88rem"]`);
                if (headerDesc) {
                    headerDesc.innerHTML = `(Namespace: <code>page_id = '${this.escapeHtml(this.pageId)}'</code> • ${this.rawItems.length} entries)`;
                }

                // 7. Re-apply filter and sort without losing current page or scroll
                this.applyFilterAndSort();

                // 8. Unobtrusive feedback toast
                DataHubApp.showToast(`Deleted #${trueIndex} (${displayName}) [ID: ${id}]`);
            } else {
                if (rowEl) {
                    rowEl.style.opacity = '1';
                    rowEl.style.pointerEvents = 'auto';
                }
                alert(data?.error || `Failed to delete entry #${trueIndex}.`);
            }
        } catch (err) {
            console.error('Delete API call failed, falling back to GET navigation:', err);
            // Fallback to GET navigation if fetch fails
            window.location.href = `SQLiteconnection.php?delete_id=${encodeURIComponent(id)}&tab=${encodeURIComponent(this.pageId)}`;
        }
    }

    /**
     * @param {string} text
     * @param {string} query
     * @returns {string}
     */
    highlightMatch(text, query) {
        if (!query || !text) return text;
        const escaped = query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
        const reg = new RegExp(`(${escaped})`, 'gi');
        return text.replace(reg, '<mark class="search-match">$1</mark>');
    }

    /**
     * @param {string} str
     * @returns {string}
     */
    escapeHtml(str) {
        if (!str) return '';
        return String(str)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }

    /**
     * @param {string} str
     * @returns {string}
     */
    escapeQuotes(str) {
        if (!str) return '';
        return String(str).replace(/'/g, "\\'").replace(/"/g, '&quot;');
    }
}

/**
 * Manages modal dialogs, backdrop clicks, and keyboard shortcuts.
 */
class ModalManager {
    /**
     * Opens editor modal in 'single' or 'batch' mode
     * @param {'single'|'batch'|'new'} [mode='single']
     */
    static openEditorModal(mode = 'single') {
        const modal = document.getElementById('editor-modal-overlay');
        const singleEd = document.getElementById('editor');
        const batchEd = document.getElementById('batch-manager');
        if (!modal) return;

        if (mode === 'batch') {
            if (singleEd) singleEd.style.display = 'none';
            if (batchEd) batchEd.style.display = 'block';
        } else {
            if (singleEd) singleEd.style.display = 'block';
            if (batchEd) batchEd.style.display = 'none';

            if (mode === 'new') {
                const form = document.getElementById('entryForm');
                if (form) {
                    const idInput = form.querySelector('input[name="id"]');
                    if (idInput) idInput.remove();

                    const pageIdInput = document.getElementById('form-input-page-id');
                    const curTab = document.getElementById('form-active-tab')?.value || DataHubApp.activeTab || 'home';
                    if (pageIdInput) pageIdInput.value = curTab;

                    const nameInput = form.querySelector('input[name="name"]');
                    if (nameInput) nameInput.value = '';

                    const sectionInput = form.querySelector('input[name="section"]');
                    if (sectionInput) sectionInput.value = '';

                    const contentInput = form.querySelector('textarea[name="content"]');
                    if (contentInput) contentInput.value = '';

                    const contenidoInput = form.querySelector('textarea[name="contenido"]');
                    if (contenidoInput) contenidoInput.value = '';

                    const titleEl = document.querySelector('#editor .section-title');
                    if (titleEl) titleEl.textContent = 'Add New Entry';

                    const submitBtn = form.querySelector('button[type="submit"]');
                    if (submitBtn) submitBtn.innerHTML = '➕ Create Entry';
                }
            }
        }

        modal.classList.remove('is-hidden');
        document.getElementById('form-input-page-id')?.focus();
    }

    /**
     * Closes editor modal and restores clean URL without reloads
     */
    static closeEditorModal() {
        const modal = document.getElementById('editor-modal-overlay');
        if (modal) modal.classList.add('is-hidden');

        // Clean URL from edit_id or #editor
        if (window.location.search.includes('edit_id') || window.location.hash === '#editor') {
            const cleanUrl = 'SQLiteconnection.php?tab=' + encodeURIComponent(DataHubApp.activeTab || 'home');
            try {
                history.replaceState(null, null, cleanUrl);
            } catch (e) {}
        }
    }

    static openGuideModal() {
        const modal = document.getElementById('guide-modal-overlay');
        if (modal) modal.classList.remove('is-hidden');
    }

    static closeGuideModal() {
        const modal = document.getElementById('guide-modal-overlay');
        if (modal) modal.classList.add('is-hidden');
    }

    /**
     * @param {MouseEvent} e
     */
    static handleBackdropClick(e) {
        if (e.target && e.target.classList.contains('modal-overlay')) {
            ModalManager.closeEditorModal();
            ModalManager.closeGuideModal();
        }
    }

    /**
     * @param {KeyboardEvent} e
     */
    static handleKeyDown(e) {
        if (e.key === 'Escape') {
            ModalManager.closeEditorModal();
            ModalManager.closeGuideModal();
        }
    }
}

/**
 * Handles Dark / Light theme toggling with smooth transitions
 */
class ThemeManager {
    static getTheme() {
        return document.documentElement.getAttribute('data-theme') || 'light';
    }

    /**
     * @param {'dark'|'light'} theme
     */
    static setTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
        try {
            localStorage.setItem('latinospc_theme', theme);
        } catch (e) {}
        ThemeManager.updateToggleBtn(theme);
    }

    static toggle() {
        const current = ThemeManager.getTheme();
        const next = current === 'dark' ? 'light' : 'dark';
        ThemeManager.setTheme(next);
    }

    /**
     * @param {'dark'|'light'} theme
     */
    static updateToggleBtn(theme) {
        const btn = document.getElementById('theme-toggle-btn');
        if (btn) {
            btn.innerHTML = theme === 'dark' ? '☀️ Light' : '🌙 Dark';
        }
    }
}

/**
 * Main application coordinator for LatinosPC DataHub
 */
class DataHubApp {
    /** @type {AppConfig} */
    static config = {
        activeTab: 'home',
        validTabs: ['home', 'services', 'hardware', 'about'],
        savedId: null,
        editId: null
    };

    /** @type {string} */
    static activeTab = 'home';

    /**
     * Initializes application state and event listeners
     */
    static init() {
        // Read configuration from embedded JSON
        try {
            const configEl = document.getElementById('app-config');
            if (configEl) {
                const parsed = JSON.parse(configEl.textContent || '{}');
                DataHubApp.config = Object.assign(DataHubApp.config, parsed);
                DataHubApp.activeTab = (DataHubApp.config.activeTab || 'home').toLowerCase();
            }
        } catch (e) {
            console.error('Error reading app-config:', e);
        }

        // Initialize preloaded active tab in cache
        try {
            const initialDataEl = document.getElementById('initial-tab-data');
            if (initialDataEl) {
                window.tabCache[DataHubApp.activeTab] = JSON.parse(initialDataEl.textContent || '[]');
            }
        } catch (e) {
            console.error('Error parsing initial tab data:', e);
        }

        // Theme init
        ThemeManager.updateToggleBtn(ThemeManager.getTheme());

        // Keyboard navigation
        document.addEventListener('keydown', ModalManager.handleKeyDown);

        // Form submit save state
        document.getElementById('entryForm')?.addEventListener('submit', () => {
            const pageId = document.querySelector('input[name="page_id"]')?.value;
            const name = document.querySelector('input[name="name"]')?.value;
            const section = document.querySelector('input[name="section"]')?.value;
            if (pageId) localStorage.setItem('last_page_id', pageId);
            if (name) localStorage.setItem('last_name', name);
            if (section) localStorage.setItem('last_section', section);
        });

        // Determine initial active tab safely:
        // Priority: 1. URL search 'tab', 2. Valid URL hash (never '#editor'!), 3. Server activeTab, 4. LocalStorage, 5. 'home'
        const urlParams = new URLSearchParams(window.location.search);
        const queryTab = (urlParams.get('tab') || '').toLowerCase();
        const rawHash = (window.location.hash || '').replace('#', '').toLowerCase();

        const validTabs = DataHubApp.config.validTabs || ['home', 'services', 'hardware', 'about'];
        const hashTab = validTabs.includes(rawHash) ? rawHash : null;
        const storedTab = validTabs.includes(localStorage.getItem('latinospc_active_tab')) ? localStorage.getItem('latinospc_active_tab') : null;

        const initialTab = (validTabs.includes(queryTab) ? queryTab : null) || hashTab || DataHubApp.activeTab || storedTab || 'home';
        DataHubApp.switchTab(initialTab);

        // Open editor modal if URL specifies edit_id or hash is #editor
        if (urlParams.has('edit_id') || rawHash === 'editor') {
            ModalManager.openEditorModal('single');
        }

        // If saved an entry, jump and pulse highlight it
        const savedId = urlParams.get('saved_id') || DataHubApp.config.savedId;
        if (savedId) {
            const tableId = 'tbl_' + initialTab.replace(/[^a-zA-Z0-9_]/g, '_');
            const highlightSaved = (attempts = 0) => {
                if (window.tableManagers[tableId] && window.tableManagers[tableId].initialized) {
                    window.tableManagers[tableId].jumpToId(savedId);
                } else if (attempts < 25) {
                    setTimeout(() => highlightSaved(attempts + 1), 50);
                }
            };
            setTimeout(highlightSaved, 60);
        }

        // Preload other tabs after 600ms idle for instant 0ms switching
        setTimeout(DataHubApp.preloadOtherTabs, 600);
    }

    /**
     * Switches active tab with safety validation
     * @param {string} pageId
     */
    static switchTab(pageId) {
        const cleanId = (pageId || '').toLowerCase();
        const validTabs = DataHubApp.config.validTabs || [];

        // STRICT DEFENSE: Do not allow invalid tab names (such as '#editor') to hide valid tab content!
        if (validTabs.length > 0 && !validTabs.includes(cleanId)) {
            console.warn(`[DataHubApp] Ignored switch to invalid tab '${cleanId}'`);
            return;
        }

        DataHubApp.activeTab = cleanId;

        // Update button & container states
        document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));

        const targetBtn = document.getElementById('tab-btn-' + cleanId);
        const targetContent = document.getElementById('tab-content-' + cleanId);

        if (targetBtn && targetContent) {
            targetBtn.classList.add('active');
            targetContent.classList.add('active');
        }

        // Mount tab table
        DataHubApp.mountTab(cleanId);

        // Save active tab state
        try {
            localStorage.setItem('latinospc_active_tab', cleanId);
            history.replaceState(null, null, '#' + cleanId);
        } catch (e) {}

        const formTabInput = document.getElementById('form-active-tab');
        if (formTabInput) formTabInput.value = cleanId;

        const quickBtn = document.getElementById('quick-tab-fill-btn');
        if (quickBtn) quickBtn.textContent = '⬇ Pre-fill with ' + cleanId;
    }

    /**
     * Mounts data into table manager for the specified tab
     * @param {string} tabName
     */
    static mountTab(tabName) {
        const cleanId = (tabName || '').toLowerCase();
        const tableId = 'tbl_' + cleanId.replace(/[^a-zA-Z0-9_]/g, '_');

        if (!window.tableManagers[tableId]) {
            window.tableManagers[tableId] = new FastTableManager(cleanId, 100);
        }

        const mgr = window.tableManagers[tableId];

        if (window.tabCache[cleanId]) {
            if (!mgr.initialized) {
                mgr.loadData(window.tabCache[cleanId]);
            }
        } else {
            const loader = document.getElementById('loading-state-' + tableId);
            if (loader) loader.style.display = 'flex';

            fetch(`SQLiteconnection.php?api=tab_data&tab=${encodeURIComponent(cleanId)}`)
                .then(res => res.json())
                .then(items => {
                    window.tabCache[cleanId] = items;
                    if (loader) loader.style.display = 'none';
                    mgr.loadData(items);
                })
                .catch(err => {
                    console.error(`Error loading tab ${cleanId}:`, err);
                    if (loader) {
                        loader.innerHTML = `<span style="color:red">Failed to load content for ${cleanId}.</span>`;
                    }
                });
        }
    }

    /**
     * Background preloader for instant zero-latency tab switching
     */
    static preloadOtherTabs() {
        const tabsToPreload = DataHubApp.config.validTabs || [];
        tabsToPreload.forEach(tName => {
            if (!window.tabCache[tName]) {
                fetch(`SQLiteconnection.php?api=tab_data&tab=${encodeURIComponent(tName)}`)
                    .then(res => res.json())
                    .then(data => {
                        window.tabCache[tName] = data;
                    })
                    .catch(() => {});
            }
        });
    }

    /**
     * Copies sequential offset snippet $content[#][$key] to clipboard
     * @param {number} index
     * @param {Event} [e]
     */
    static copySnippet(index, e) {
        if (e) e.stopPropagation();
        const snippet = `$content[${index}][$key] ?? ''`;
        navigator.clipboard.writeText(snippet).then(() => {
            DataHubApp.showToast(`Copied: ${snippet}`);
        }).catch(() => {
            DataHubApp.showToast(`Copied snippet #${index}`);
        });
    }

    /**
     * Shows unobtrusive toast notification
     * @param {string} text
     */
    static showToast(text) {
        const toast = document.getElementById('copy-toast');
        if (!toast) return;
        toast.textContent = text;
        toast.classList.add('show');
        clearTimeout(window._toastTimeout);
        window._toastTimeout = setTimeout(() => toast.classList.remove('show'), 2800);
    }

    /**
     * @param {string} pageId
     */
    static setEditorPageId(pageId) {
        const input = document.getElementById('form-input-page-id');
        if (input) input.value = pageId;
        const formTabInput = document.getElementById('form-active-tab');
        if (formTabInput) formTabInput.value = pageId;
        ModalManager.openEditorModal('single');
    }

    static fillCurrentTab() {
        const activeTab = document.getElementById('form-active-tab')?.value || DataHubApp.activeTab || 'home';
        const input = document.getElementById('form-input-page-id');
        if (input) {
            input.value = activeTab;
            input.focus();
        }
    }

    static fillLastUsed() {
        const pageId = localStorage.getItem('last_page_id');
        const name = localStorage.getItem('last_name');
        const section = localStorage.getItem('last_section');

        if (pageId) document.querySelector('input[name="page_id"]').value = pageId;
        if (name) document.querySelector('input[name="name"]').value = name;
        if (section) document.querySelector('input[name="section"]').value = section;

        const btn = document.querySelector('button[onclick="fillLastUsed()"]');
        if (btn) {
            const originalText = btn.innerHTML;
            btn.innerHTML = "Filled!";
            setTimeout(() => btn.innerHTML = originalText, 1000);
        }
    }
}

// --- GLOBAL ATTACHMENTS (Ensures 100% backward compatibility with inline HTML onclick handlers) ---
window.FastTableManager = FastTableManager;
window.ModalManager = ModalManager;
window.ThemeManager = ThemeManager;
window.DataHubApp = DataHubApp;

window.openEditorModal = ModalManager.openEditorModal;
window.closeEditorModal = ModalManager.closeEditorModal;
window.openGuideModal = ModalManager.openGuideModal;
window.closeGuideModal = ModalManager.closeGuideModal;
window.handleModalBackdropClick = ModalManager.handleBackdropClick;

window.switchTab = DataHubApp.switchTab;
window.copySnippet = DataHubApp.copySnippet;
window.toggleTheme = ThemeManager.toggle;
window.fillCurrentTab = DataHubApp.fillCurrentTab;
window.fillLastUsed = DataHubApp.fillLastUsed;
window.setEditorPageId = DataHubApp.setEditorPageId;
window.showToast = DataHubApp.showToast;

// Boot application upon DOM readiness
document.addEventListener('DOMContentLoaded', DataHubApp.init);
