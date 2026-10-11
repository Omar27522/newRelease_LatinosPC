# Hardware Migration Roadmap

This document outlines the systematic process to migrate all remaining hardware page contents into the SQLite database (`laTpc.db`), resolving language translation issues and establishing a clean, unified template system.

## 1. Database Schema Guidelines
For each hardware part, the database entries must follow these rules:
* **Page ID**: Always set to `'hardware'`.
* **Unique Names**: Every entry must have a unique `name` prefixed with the part's name to avoid collisions:
  - `ram_...` for RAM
  - `gpu_...` for GPU
  - `motherboard_...` for Motherboard
  - `chassis_...` for Chassis, etc.
* **HTML Element Mapping (Section)**: The `section` column must store the tag name or layout hint for humans (e.g. `heading`, `paragraph`, `span`, `list-item`, `anchor`, `button`).

## 2. Order of Migration (The Hardware Parts)
For each part, follow the checklist to extract, translate, seed, and refactor:

- [x] **RAM** (`ram.php`)
- [x] **GPU** (`gpu.php`)
- [x] **Motherboard** (`motherboard.php`)
- [x] **Power Supply** (`powerSupply.php`)
- [x] **Storage** (`storage.php`)
- [x] **Chassis** (`chassis.php`)
- [x] **Coolers** (`coolers.php`)
- [x] **Portable Memory** (`portableMemory.php`)

---

## 3. Migration Workflow Checklist (Per File)

For each hardware part file (e.g., `hardware/ram.php`):

### Phase A: Extraction & Translation
1. Open the target PHP file and identify all static English text, headings, links, and lists.
2. Translate all extracted text accurately into Spanish.
3. Prepare a Python seeding script inside the `.gemini/.../scratch/` directory (e.g. `seed_hardware_ram.py`).

### Phase B: Database Seeding
1. Run the Python seeding script to insert both the English (`text_en`) and Spanish (`text_es`) entries into `laTpc.db`.
2. Ensure the seeding script tracks the starting index and total row count inserted.

### Phase C: Code Refactoring
1. Edit the target file to:
   - Import the database helper function `databaseConnection('hardware');`.
   - Remove the hardcoded text and arrays.
   - Dynamically render the content using lookups from the global `$content` array (e.g., `echo $content[154]['text'];`).
   - Retain the local PHP `$links` array format if applicable to keep external hyperlinks organized.

### Phase D: Verification
1. Open the page locally in both English and Spanish mode.
2. Confirm all texts display correctly in the active language without any undefined variables or layout breakage.

---

# Software Migration Roadmap

This roadmap tracks the step-by-step migration of the `software/` directory into the SQLite database (`laTpc.db`), unifying bilingual templates under `databaseConnection('software')`.

## 1. Database Schema Guidelines (Software)
* **Page ID**: Always set to `'software'`.
* **Unique Names**: Prefixed by module (e.g., `sw_main_heading`, `sw_blurb_...`, `sw_step_...`, `antivirus_...`).
* **Side-by-Side Content**: English stored in `content`, Mexican Spanish stored in `contenido`.

## 2. Order of Migration (Software Directory)
- [x] **Software Main Page** (`software/softwareContent.php`) - *(Database Seeded with 68 entries & Refactored)*
- [x] **Anti-Virus** (`software/antivirus.php`) - *(Database Seeded with 48 entries & Refactored)*
- [x] **Malware Cleaner** (`software/malware_cleaner.php`) - *(Database Seeded with 108 educational entries + 73 DB-driven bilingual threat links [offsets 501–681], Timeline Refactored into Clean Structured Architecture)*
- [x] **Web Browsers** (`software/web_browsers.php`) - *(Database Seeded with 101 educational entries + 2 DB-driven bilingual links [offsets 802–904] & Refactored)*
- [x] **Messaging** (`software/messaging.php`) - *(Database Seeded with 24 educational entries + 33 DB-driven bilingual links [offsets 745–801] & Refactored)*
- [x] **Media** (`software/media.php`) - *(Database Seeded with 40 educational entries + 23 DB-driven bilingual format links [offsets 682–744] & Refactored)*
- [x] **Runtimes** (`software/runtimes.php`) - *(Database Seeded with 49 educational entries + 4 DB-driven bilingual links [offsets 905–957] & Refactored)*
- [x] **Imaging** (`software/imaging.php`) - *(Database Seeded with 77 entries & Refactored with Bilingual Links)*
- [x] **Documents** (`software/documents.php`) - *(Database Seeded with 126 entries & Refactored)*
- [x] **File Sharing** (`software/file_sharing.php`) - *(Database Seeded with 23 text entries + 29 DB-driven bilingual links [offsets 472–500] & Reworked with Spanish fallbacks)*
- [x] **Online Storage** (`software/online_storage.php`) - *(Database Seeded with 19 educational entries + 8 DB-driven bilingual links [offsets 958–984] & Refactored)*
- [x] **Other** (`software/other.php`) - *(Database Seeded with 77 educational entries + 24 DB-driven bilingual links [offsets 985–1085] & Refactored)*
- [x] **Utilities** (`software/utilities.php`) - *(Database Seeded with 23 educational entries + 4 DB-driven bilingual links [offsets 1086–1112] & Refactored)*
- [x] **Compression** (`software/compression.php`) - *(Database Seeded with 85 entries & Refactored)*
- [x] **Developer Tools** (`software/developer_tools.php`) - *(Database Seeded with 25 text entries + 20 DB-driven bilingual links [offsets 452–471] & Reworked with Spanish fallbacks)*

---

## 3. Process Ruleset: Monolithic HTML Ingestion & Mexican Scholar Translation

When converting a monolithic HTML software document (such as `compression.php`, `web_browsers.php`, etc.) into the database architecture:

### Rule 1: Monolithic Content Extraction to Database
1. **Never embed raw Spanish text blocks directly into PHP templates**: Every user-facing string must reside in `laTpc.db` under `page_id = 'software'`.
2. **Side-by-Side Ingestion**: Store English in `content` and Spanish in `contenido` at the exact same row index.
3. **Semantic Tagging**: Assign accurate HTML semantic markers in the `section` column (`heading`, `paragraph`, `summary`, `list-item`, `anchor`, `code`, etc.).
4. **Distinct Prefixes**: Every entry must carry a namespaced identifier (e.g. `compression_zip_title`, `compression_net_desc`) to prevent collisions across the 200+ software rows.

### Rule 2: Mexican Scholar Translation Register (*Español Culto / Erudito Mexicano*)
1. **Zero Anglicisms or Loanwords**: Ban untranslated English computer buzzwords. Every technical concept must be rendered into its formal, academic Spanish / Mexican equivalent.
2. **Canonical Academic Terminology Reference**:
   * *Computer / PC* &rarr; **Equipo de cómputo** / **Ordenador personal**
   * *File / Archive* &rarr; **Fichero** / **Archivo digital**
   * *Loop* &rarr; **Bucle** / **Ciclo iterativo**
   * *Buffer / Cache* &rarr; **Memoria intermedia** / **Memoria de acceso ultrarrápido**
   * *Firewall* &rarr; **Muro cortafuegos**
   * *Malware* &rarr; **Software malicioso** / **Código nocivo**
   * *Ransomware* &rarr; **Secuestro extorsivo de datos**
   * *Lossless compression* &rarr; **Compresión sin merma / sin pérdida de información**
   * *Lossy compression* &rarr; **Compresión con atenuación de fidelidad**
   * *Streaming* &rarr; **Transmisión telemática continua en tiempo real**
   * *Cross-platform* &rarr; **Capacidad multiplataforma / interoperabilidad de sistemas**
   * *Open source* &rarr; **Código fuente abierto / especificación pública sin regalías**
   * *Metadata preservation* &rarr; **Preservación meticulosa de metadatos**
3. **Tone and Rhetoric**: Eloquent, encyclopedic, professorial tone worthy of an academic scholar (*estilo de cátedra universitaria y rigor formal*).

### Rule 3: Dynamic Template Substitution
1. Include database handler at top of file:
   ```php
   <?php
   include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
   databaseConnection('software');
   global $content, $key, $page;
   ?>
   ```
2. Replace static text nodes with dynamic references: `<?= $content[$offset][$key] ?? ''; ?>`.
3. Wrap breadcrumbs defensively: `<?php if (function_exists('sw_breadCrumbs')) { sw_breadCrumbs(); } ?>`.
4. Validate with `php -l` and live bilingual test scripts in `scratch/`.

### Rule 4: External Software Links in SQLite Database
1. **Never Hardcode Hyperlinks**: Hyperlinks for software, platforms, and download buttons must reside in `laTpc.db` under `page_id = 'software'`.
2. **Standardized Names**: Every link entry must use a prefix identifying the component and purpose (e.g. `dev_tools_link_<slug>`).
3. **Bilingual URLs with Graceful Fallback**:
   - Provide the English URL in `content`.
   - If an official Spanish site/documentation exists, store it in `contenido`.
   - If no Spanish edition exists, store the English URL in `contenido` (and defensively fallback in PHP using `!empty($item[$key]) ? $item[$key] : ($item['content'] ?? '#')`).
4. **Token-Efficient Batch Seeding**:
   - Do not query or dump whole tables into LLM contexts.
   - Use targeted Python scripts with `executemany` or the ContentManager / DbManager (`/db/SQLiteconnection.php`) to insert rows rapidly in a single transaction.


