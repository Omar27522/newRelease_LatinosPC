<?php
/**
 * Security Overview (English: security, Spanish: seguridad)
 * Fed dynamically from databaseConnection('security') with progressive high-res image modal.
 */

include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('security');
global $content, $key;

function render_security_view($isSpanish = false) {
    global $page, $content, $key;
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
    $baseRoute = $isSpanish ? 'seguridad' : 'offered_security';
    $subRoute = $isSpanish ? 'mejores_practicas' : 'best_practices';

    $icons = [
        "&#x1F5A5;&#xFE0F;", "&#x1F511;", "&#x1F6AB;", "&#x1F9A0;", "&#x1F4BE;",
        "&#x1F510;", "&#x1F525;", "&#x1F6AA;", "&#x1F464;", "&#x1F4CB;",
        "&#x1F46A;", "&#x2699;&#xFE0F;", "&#x1F5D1;&#xFE0F;"
    ];

    $heroAlt = htmlspecialchars($content[9][$key] ?? ($isSpanish ? 'Seguridad Digital y Ciberprotección' : 'Digital Security & Cyber Protection'));
?>
<article class="fullbar">
    <?php include __DIR__ . '/navBarSecurity.php'; ?>
    <div class="sec-hero">
        <div class="sec-hero-inner">
            <span class="sec-shield" role="img"
                aria-label="<?= $isSpanish ? 'escudo' : 'shield' ?>">&#x1F6E1;&#xFE0F;</span>
            <div>
                <h1><?= $content[4][$key] ?? ($isSpanish ? 'Seguridad' : 'Security'); ?></h1>
                <p><?= $content[5][$key] ?? ($isSpanish ? 'Medidas valiosas y aplicables — mantén tu vida digital bajo llave.' : 'Valuable Implementable Measures — keep your digital life locked down.'); ?>
                </p>
                <p class="sec-meta">
                    &#x1F4C5; <?= $content[6][$key] ?? ($isSpanish ? '1 de febrero de 2023' : 'February 1, 2023'); ?>
                    &nbsp;|&nbsp;
                    <?= $content[8][$key] ?? ($isSpanish ? 'Publicado por' : 'Posted by'); ?>
                    <a href="<?= $imgDir; ?>about/?omar#scroll"><?= $content[7][$key] ?? 'Omar Garcia'; ?></a>
                    &nbsp;|&nbsp;
                    <a
                        href="<?= $imgDir . $baseRoute; ?>/"><?= $content[4][$key] ?? ($isSpanish ? 'Seguridad' : 'Security'); ?></a>,
                    <a
                        href="<?= $imgDir . $baseRoute . '/' . $subRoute; ?>"><?= $content[1][$key] ?? ($isSpanish ? 'Mejores Prácticas' : 'Best Practices'); ?></a>
                </p>
            </div>
        </div>
        <!-- Progressive High-Resolution Image Architecture (roadmap.md) -->
        <div class="sec-hero-bg-art" aria-hidden="false">
            <div class="carousel-group img_rtl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= $heroAlt; ?>">
                            <img src="<?= $imgDir; ?>images/gallery/secty_thumb.webp"
                                onerror="this.src='<?= $imgDir; ?>images/gallery/secty.jpg'" alt="<?= $heroAlt; ?>"
                                title="<?= $heroAlt; ?>" width="360" height="271" loading="lazy" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="sec-section-title"><span>&#x1F512;</span>
        <?= $content[10][$key] ?? ($isSpanish ? 'Mantén tu Seguridad al Día' : 'Keep Your Security in Check'); ?></h2>
    <div class="sec-checklist" role="list">
        <?php for ($i = 0; $i < 13; $i++): ?>
        <?php $idx = 11 + $i; ?>
        <div class="sec-card" role="listitem">
            <span class="sec-card-icon"><?= $icons[$i] ?? '&#x1F512;' ?></span>
            <div class="sec-card-num"><?= $i + 1 ?></div>
            <p><?= $content[$idx][$key] ?? ''; ?></p>
        </div>
        <?php endfor; ?>
    </div>

    <!-- Progressive Carousel Template Registry (roadmap.md Section 2B) -->
    <template id="carousel-images">
        <div class="carousel-item" data-image-index="0">
            <a href="<?= $imgDir; ?>images/gallery/secty.jpg" target="_blank" rel="noopener">
                <img data-src="<?= $imgDir; ?>images/gallery/secty.webp"
                    src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'%3E%3C/svg%3E"
                    alt="<?= $heroAlt; ?>">
            </a>
            <h4 class="img_link">
                <a href="<?= $imgDir . $baseRoute; ?>/" title="<?= $heroAlt; ?>">
                    <?= $heroAlt; ?>
                </a>
            </h4>
        </div>
    </template>
</article>
<?php
}

function security() { 
    render_security_view(false);
}

function seguridad() { 
    render_security_view(true);
}