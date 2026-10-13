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
- Script: `scripts/process_progressive_images.py`
- Inputs: Directory containing raw `.jpg`, `.png`, `.webp` files.
- Outputs:
  1. `<filename>_thumb.webp`: Thumbnail resized to fit within 360x360 px, compressed at quality 75.
  2. `<filename>.webp`: Optimized high-res display image resized to max 1600px width, quality 85.
  3. Original master file preserved intact.

---

## 5. Implementation Roadmap & Checklist

### Phase 1: Engine Optimization (On-Demand Loading)
- [ ] Refactor [`anvil/dialogEngine.js`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/anvil/dialogEngine.js):
  - [ ] Implement lazy dialog instantiation on click rather than on `DOMContentLoaded`.
  - [ ] Implement `data-src` &rarr; `src` image activation for carousel dialogs to prevent premature network fetching.
  - [ ] Ensure mobile swipe and keyboard controls are fully responsive across all screen sizes.
- [ ] Verify global CSS coverage in [`anvil/mainStyle.css`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/anvil/mainStyle.css) for `.linked-text-img`, `.thumbnail-container`, `.image-dialog`, and `.dialog-backdrop`.

### Phase 2: Pipeline Script Development
- [ ] Create `scripts/process_progressive_images.py` with Python Pillow (PIL):
  - [ ] Automatic aspect-ratio preservation.
  - [ ] Generation of `*_thumb.webp` (low-payload).
  - [ ] Generation of high-res `.webp` (sharp modal display).
  - [ ] Batch processing capability across target directories (`images/hardware/`, `images/software/`, etc.).

### Phase 3: Hardware Section Migration
Migrate all hardware pages to the progressive thumbnail & modal system:

- [ ] **Main Hardware Directory** (`hardware/hardwareContent.php`):
  - [ ] Process and generate thumbnails for all 24+ peripheral and component images in `images/hardware/hw/`.
  - [ ] Wrap hardware grid cards with `.linked-text-img` & `.image-dialog`.
  - [ ] Add `<template id="carousel-images">` at the bottom of `hardwareContent.php`.
- [ ] **Individual Hardware Subpages**:
  - [ ] `hardware/cpu.php`
  - [ ] `hardware/ram.php`
  - [ ] `hardware/storage.php`
  - [ ] `hardware/motherboard.php`
  - [ ] `hardware/powerSupply.php`
  - [ ] `hardware/gpu.php`
  - [ ] `hardware/chassis.php`
  - [ ] `hardware/coolers.php`
  - [ ] `hardware/mouse.php`
  - [ ] `hardware/keyboard.php`
  - [ ] `hardware/monitor.php`
  - [ ] `hardware/portableMemory.php`
  - [ ] `hardware/pci_cards.php`
  - [ ] `hardware/scanners.php`
  - [ ] `hardware/printers.php`
  - [x] [`hardware/console_controllers.php`](file:///c:/Users/Laptop/Documents/newRelease_LatinosPC/LAtPC/hardware/console_controllers.php) *(Completed: 43 compact 70x70 thumbnails on page, 900px high-resolution WebPs in modal carousel, linked to original 900px JPGs)*
  - [ ] `hardware/joysticks.php`
  - [ ] `hardware/tablets.php`
  - [ ] `hardware/microphones.php`
  - [ ] `hardware/headsets.php`
  - [ ] `hardware/headphones.php`
  - [ ] `hardware/audio_mixers.php`
  - [ ] `hardware/controllers.php`
  - [ ] `hardware/gaming_uniforms.php`
  - [ ] `hardware/pens_pencils_tablets.php`
  - [ ] `hardware/chairs.php`
  - [ ] `hardware/desks.php`
  - [ ] `hardware/anti_slip_mats.php`
  - [ ] `hardware/speakers_and_subwoofers.php`

### Phase 4: Software, Services & General Pages Migration
- [ ] `software/softwareContent.php` and software subpages (`antivirus.php`, `malware_cleaner.php`, etc.).
- [ ] `handlers/home.php` and homepage banners.
- [ ] `services/services.php` and service offering cards.
- [ ] `about/aboutUs.php`.

### Phase 5: Verification & Performance Audit
- [ ] Verify **Zero High-Res Network Requests** on initial page load via DevTools Network tab.
- [ ] Verify instant modal pop-up and sharp image delivery upon clicking any thumbnail.
- [ ] Test keyboard navigation (`Left`, `Right`, `Escape`) and mobile touch gestures.
- [ ] Run Lighthouse audits on migrated pages to verify 95+ performance scores and sub-second FCP/LCP.
