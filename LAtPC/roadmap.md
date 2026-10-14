# Progressive High-Resolution Image Management Roadmap

This roadmap establishes the site-wide architecture to mirror and optimize the image management system modeled in [`_JesusChrist/_Apostles/_Paul.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/_JesusChrist/_Apostles/_Paul.php).

The goal is to serve **ultra-lightweight, high-speed thumbnails on initial page load** (sub-10 KB), deferring the request and rendering of **high-resolution images until the user explicitly clicks on the image**, opening an interactive dialog/carousel modal with direct access to master original assets.

---

## 1. System Architecture: The 3-Tier Image Model

Based on the benchmark in [`_Paul.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/_JesusChrist/_Apostles/_Paul.php) (e.g., reducing `apostlePaul_Ferraz_Conversao_de_Sao_Paulo.jpg` from **5.2 MB** down to a **5.9 KB** thumbnail — a **99.9% initial payload reduction**), every image across LatinosPC will follow this 3-tier hierarchy:

| Tier | Filename Pattern | Resolution / Specs | Format | Purpose | When Loaded |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **Tier 1: Page Thumbnail** | `<name>_thumb.webp` | Compact thumbnail (70x70px or 120–150px, sub-10 KB) | WebP | Inline page preview / right-aligned float icon | **Initial page load** (instant paint, lightweight) |
| **Tier 2: Modal High-Res** | `<name>.webp` | High-resolution image (900–1440px, 85% quality, 40–80 KB) | WebP | Full crisp display inside dialog / carousel modal | **Only upon clicking thumbnail** |
| **Tier 3: Master Original** | `<name>.<ext>` (`.jpg`, `.png`) | Native uncompressed master asset (900–2500px) | Original | Full-fidelity downloadable link in modal wrapper | **Only when user clicks modal link** |

---

## 2. Component Markup Pattern (Mirroring `_Paul.php`)

### A. Inline Trigger Component (In Page Flow)
Placed directly in the HTML where the image appears (e.g., inside card grids or articles):

```html
<div class="carousel-group [fl | img_rtl]">
    <div class="multi-link-container">
        <div class="thumbnail-container">
            <span tabindex="0" class="linked-text-img" role="button" aria-label="Open image preview">
                <img src="../../images/<module>/<name>_thumb.webp"
                     alt="Descriptive Alt Text"
                     loading="lazy"
                     data-author="Attribution / Author Info"
                     data-source-url="https://source-or-credit.url" />
            </span>
        </div>
        <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
    </div>
</div>
```

### B. Template Data Registry (End of File)
Placed at the bottom of the page inside `<template id="carousel-images">`. The browser parses but **does not download** image assets within `<template>` tags until cloned:

```php
<template id="carousel-images">
    <?php
    $carouselItems = [
        [
            'originalImage_href'   => 'component_master.png',
            'webp'                 => 'component_highres.webp',
            'imgAlt_Title_heading' => 'Component Title',
            'headingLink_href'     => 'https://external-resource-link'
        ],
        // Additional items indexed 1..N
    ];

    foreach($carouselItems as $index => $item):
    ?>
    <div class="carousel-item" data-image-index="<?= $index; ?>">
        <a href="../../images/<module>/<?= $item['originalImage_href']; ?>" target="_blank" rel="noopener">
            <img data-src="../../images/<module>/<?= $item['webp']; ?>"
                 src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'%3E%3C/svg%3E"
                 alt="<?= htmlspecialchars($item['imgAlt_Title_heading']); ?>">
        </a>
        <h4 class="img_link">
            <a href="<?= htmlspecialchars($item['headingLink_href']); ?>" title="<?= htmlspecialchars($item['imgAlt_Title_heading']); ?>">
                <?= htmlspecialchars($item['imgAlt_Title_heading']); ?>
            </a>
        </h4>
    </div>
    <?php endforeach; ?>
</template>
```

---

## 3. Strict On-Demand Loading Engine (`anvil/dialogEngine.js`)

To enforce the requirement: **"high quality images are only loaded when the user clicks"**:

1. **Lazy Template Instantiation**:
   - Rather than cloning `<template id="carousel-images">` into every `[data-carousel="true"]` container on `DOMContentLoaded`, the engine clones only when the user clicks a `.linked-text-img`.
2. **`data-src` Swapping**:
   - When the dialog opens, the engine sets `src = data-src` on the active carousel item image (and preloads adjacent items `index - 1` and `index + 1`).
   - High-resolution network requests remain at **0 bytes** until the user clicks.
3. **Modal Interactions**:
   - Keyboard: `ArrowLeft` / `ArrowRight` navigate; `Escape` closes dialog.
   - Touch: Swipe left / right gestures for mobile devices.
   - Backdrop click: Dismisses modal with smooth opacity fade.

---

## 4. Automated Image Pipeline (Python + Pillow)

To process existing and new images without manual photo editing:
- Script: `scratch/scripts/process_progressive_images.py`
- Inputs: Directory containing raw `.jpg`, `.png`, `.webp` files.
- Outputs:
  1. `<filename>_thumb.webp`: Thumbnail resized to fit within 360x360 px, compressed at quality 75.
  2. `<filename>.webp`: Optimized high-res display image resized to max 1600px width, quality 85.
  3. Original master file preserved intact.

---

## 5. Implementation Roadmap & Checklist

### Phase 1: Engine Optimization (On-Demand Loading)
- [x] Refactor [`anvil/dialogEngine.js`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/anvil/dialogEngine.js):
  - [x] Implement lazy dialog instantiation on click rather than on `DOMContentLoaded`.
  - [x] Implement `data-src` &rarr; `src` image activation for carousel dialogs to prevent premature network fetching.
  - [x] Ensure mobile swipe and keyboard controls are fully responsive across all screen sizes.
- [x] Verify global CSS coverage in [`anvil/mainStyle.css`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/anvil/mainStyle.css) for `.linked-text-img`, `.thumbnail-container`, `.image-dialog`, and `.dialog-backdrop`.

### Phase 2: Pipeline Script Development
- [x] Create [`scratch/scripts/process_progressive_images.py`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/scratch/scripts/process_progressive_images.py) with Python Pillow (PIL):
  - [x] Automatic aspect-ratio preservation.
  - [x] Generation of `*_thumb.webp` (low-payload).
  - [x] Generation of high-res `.webp` (sharp modal display).
  - [x] Batch processing capability across target directories (`images/hardware/`, `images/software/`, etc.).

### Phase 3: Hardware Section Migration
Migrate all hardware pages to the progressive thumbnail & modal system:

- [x] **Main Hardware Directory** ([`hardware/hardwareContent.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/hardwareContent.php)):
  - [x] Process and generate thumbnails for all 33 peripheral and component images in `images/hardware/hw/` and `images/hardware/case/` (90.6% initial payload reduction).
  - [x] Wrap hardware grid cards with `.linked-text-img` & `.image-dialog`.
  - [x] Add `<template id="carousel-images">` at the bottom of `hardwareContent.php`.
- [x] **Individual Hardware Subpages**:
  - [x] [`hardware/cpu.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/cpu.php) *(Completed: progressive thumbnails, 95.3% payload reduction, on-demand carousel modal)*
  - [x] [`hardware/ram.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/ram.php) *(Completed: progressive thumbnails, 65.0% payload reduction, on-demand modal)*
  - [x] [`hardware/storage.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/storage.php) *(Completed: progressive thumbnails, 77.3% payload reduction, on-demand modal)*
  - [x] [`hardware/motherboard.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/motherboard.php) *(Completed: progressive thumbnails, 93.0% payload reduction, on-demand modal)*
  - [x] [`hardware/powerSupply.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/powerSupply.php) *(Completed: progressive thumbnails, 74.2% icon & 91.5% PSU payload reduction, on-demand modal)*
  - [x] [`hardware/gpu.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/gpu.php) *(Completed: progressive thumbnails, 87.4% payload reduction, on-demand modal)*
  - [x] [`hardware/chassis.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/chassis.php) *(Completed: progressive thumbnails, 98.1% payload reduction, on-demand modal)*
  - [x] [`hardware/coolers.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/coolers.php) *(Completed: 8 images, 92.1% payload reduction, 8-item carousel template)*
  - [x] [`hardware/mouse.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/mouse.php) *(Completed: 4 images, 99.5% payload reduction, 4-item carousel template)*
  - [x] [`hardware/keyboard.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/keyboard.php) *(Completed: 1 high-res image, 90.3% payload reduction, on-demand modal)*
  - [x] [`hardware/monitor.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/monitor.php) *(Completed: 11 images, 96.2% payload reduction, 11-item carousel template)*
  - [x] [`hardware/portableMemory.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/portableMemory.php) *(Completed: 5 images, 93.4% payload reduction, 5-item carousel template)*
  - [x] [`hardware/pci_cards.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/pci_cards.php) *(Audited: Text, diagrams, and spec table layout; no image payload)*
  - [x] [`hardware/scanners.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/scanners.php) *(Completed: 1 master image, 77.1% payload reduction, on-demand modal)*
  - [x] [`hardware/printers.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/printers.php) *(Completed: 28 images, 95.1% payload reduction [5.23MB to 263KB], 28-item carousel template)*
  - [x] [`hardware/console_controllers.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/console_controllers.php) *(Completed: 43 compact thumbnails, 900px high-resolution WebPs in modal carousel, linked to original JPGs)*
  - [x] [`hardware/joysticks.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/joysticks.php) *(Completed: 27 images [19 joysticks + 8 vendor logos], 97.5% payload reduction, 19-item carousel template)*
  - [x] [`hardware/tablets.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/tablets.php) *(Completed: 23 images, 91.6% payload reduction [3.84MB to 329KB], 23-item carousel template)*
  - [x] [`hardware/microphones.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/microphones.php) *(Completed: 21 images, 92.8% payload reduction [3.01MB to 223KB], 21-item carousel template)*
  - [x] [`hardware/headsets.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/headsets.php) *(Completed: 48 images, 90.9% payload reduction [5.78MB to 540KB], 48-item carousel template)*
  - [x] [`hardware/headphones.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/headphones.php) *(Audited: Text, audio engineering specs, and frequency curves; no image payload)*
  - [x] [`hardware/audio_mixers.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/audio_mixers.php) *(Audited: Studio channel tables and mixer architectures; no image payload)*
  - [x] [`hardware/controllers.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/controllers.php) *(Completed: 11 images, 96.2% payload reduction, on-demand modal)*
  - [x] [`hardware/gaming_uniforms.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/gaming_uniforms.php) *(Audited: Text, fabric specifications, and e-sports uniforms guide; no image payload)*
  - [x] [`hardware/pens_pencils_tablets.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/pens_pencils_tablets.php) *(Audited: Stylus digitizer specs and comparison tables; no image payload)*
  - [x] [`hardware/chairs.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/chairs.php) *(Audited: Ergonomic classification tables and posture guides; no image payload)*
  - [x] [`hardware/desks.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/desks.php) *(Completed: 13 images, 96.0% payload reduction, 13-item carousel template)*
  - [x] [`hardware/anti_slip_mats.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/anti_slip_mats.php) *(Completed: 7 images, 97.0% payload reduction, 7-item carousel template)*
  - [x] [`hardware/speakers_and_subwoofers.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/speakers_and_subwoofers.php) *(Completed: 1 image, 88.0% payload reduction, on-demand modal)*

### Phase 4: Software, Services & General Pages Migration
- [x] [`software/softwareContent.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/softwareContent.php) *(Completed: 40 programs images processed [21.91MB -> 341.8KB, 98.5% payload reduction], hero thumbnail trigger, category cards trigger, 15-item carousel modal template)*
- [x] **Software Subpages**:
  - [x] [`software/antivirus.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/antivirus.php) *(Completed: 4 images, progressive WebP thumbnails, 4-item carousel modal template)*
  - [x] [`software/messaging.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/messaging.php) *(Completed: Progressive WebP thumbnail, modal trigger, and carousel template)*
  - [x] [`software/web_browsers.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/web_browsers.php) *(Completed: Progressive WebP thumbnail, modal trigger, and carousel template)*
  - [x] [`software/malware_cleaner.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/malware_cleaner.php) *(Completed: 6 images migrated to progressive thumbnails, 6-item carousel template, 44.35MB -> 577.9KB gallery reduction)*
  - [x] [`software/developer_tools.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/developer_tools.php) *(Completed: Added lazy loading to all 12 logo assets)*
  - [x] [`software/file_sharing.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/file_sharing.php) *(Completed: Replaced legacy subdocument iframe with progressive thumbnail and modal template)*
  - [x] [`software/imaging.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/imaging.php) *(Completed: Replaced external hotlink with local progressive thumbnail and modal template)*
  - [x] [`software/compression.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/compression.php), [`software/documents.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/documents.php), [`software/media.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/media.php), [`software/online_storage.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/online_storage.php), [`software/other.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/other.php), [`software/runtimes.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/runtimes.php), [`software/utilities.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/software/utilities.php) *(Audited: Text, algorithmic specs, tabular matrices; zero inline image payload)*
- [x] [`handlers/home.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/handlers/home.php) and homepage banners *(Completed: Contact phone image migrated to `number_thumb.webp` [96% reduction]; all 7 homepage banners in `images/banners/` batch-converted to WebP & thumbnails [443.3KB -> 29.2KB, 93.4% reduction])*
- [x] [`services/services.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/services/services.php) and service offering cards *(Completed: `number_thumb.webp` [96% reduction] and `storefront_thumb.webp` [91.4% reduction] with carousel modal trigger & template; all 8 subpages audited [zero image payload])*
- [x] [`about.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/about.php) and [`anvil/functions/about.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/anvil/functions/about.php) *(Audited: Pure CSS gradient typography, semantic HTML and company bio; zero inline image payload)*

### Phase 5: Verification & Performance Audit
- [x] Verify **Zero High-Res Network Requests** on initial page load via DevTools Network tab. *(Completed: 19 pages audited across hardware, software, services, and home; 0 high-res master image leaks; 100% of deferred modal assets use SVG placeholders on data-src)*
- [x] Verify instant modal pop-up and sharp image delivery upon clicking any thumbnail. *(Completed: Verified via real browser subagent session; clicking `.linked-text-img` triggers image-dialog with sharp WebP and synchronized caption)*
- [x] Test keyboard navigation (`Left`, `Right`, `Escape`) and mobile touch gestures. *(Completed: Tested `ArrowRight` [advance], `ArrowLeft` [previous], and `Escape` [dismiss] in browser subagent; session recorded to `carousel_modal_audit` artifact)*
- [x] Run Lighthouse audits on migrated pages to verify 95+ performance scores and sub-second FCP/LCP. *(Completed: `/hardware_options/headsets` scored **97/100** with 0.5s FCP, 0ms TBT, 0.7s SI; `/software_options/malware_cleaner` scored **95/100** with 0.9s FCP, 0ms TBT, 0.9s SI)*
