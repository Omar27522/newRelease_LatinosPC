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
- [ ] **GPU** (`gpu.php`)

- [ ] **Motherboard** (`motherboard.php`)
- [ ] **Power Supply** (`powerSupply.php`)
- [ ] **Storage** (`storage.php`)
- [ ] **Chassis** (`chassis.php`)
- [ ] **Coolers** (`coolers.php`)
- [ ] **Portable Memory** (`portableMemory.php`)

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
