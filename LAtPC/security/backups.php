<?php
/**
 * Backups Strategies (English: security_backups, Spanish: respaldos)
 * Fed dynamically from databaseConnection('security') with progressive high-res image modal.
 */

include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('security');
global $content, $key;

function render_backups_view($isSpanish = false) {
    global $page, $content, $key;
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
    $baseRoute = $isSpanish ? 'seguridad' : 'offered_security';

    $types = [
        ['full', '&#x1F4E6;', $content[26][$key] ?? ($isSpanish ? 'Respaldo completo' : 'Full Backup'),        $content[27][$key] ?? ''],
        ['incr', '&#x1F4C8;', $content[28][$key] ?? ($isSpanish ? 'Respaldo incremental' : 'Incremental Backup'), $content[29][$key] ?? ''],
        ['diff', '&#x1F4CA;', $content[30][$key] ?? ($isSpanish ? 'Respaldo diferencial' : 'Differential Backup'), $content[31][$key] ?? ''],
        ['mirr', '&#x1FA9E;', $content[32][$key] ?? ($isSpanish ? 'Respaldo espejo (Mirror)' : 'Mirror Backup'),       $content[33][$key] ?? ''],
    ];

    $storageCards = [
        ['onsite_b', '&#x1F3E0;', $content[36][$key] ?? ($isSpanish ? 'Local (Onsite)' : 'Onsite Backup'),   $content[37][$key] ?? '', 'var(--primary-color, #3498db)'],
        ['offsite_b', '&#x1F697;', $content[38][$key] ?? ($isSpanish ? 'Externo (Offsite)' : 'Offsite Backup'), $content[39][$key] ?? '', 'var(--secondary-color, #e67e22)'],
        ['online_b',  '&#x2601;&#xFE0F;', $content[40][$key] ?? ($isSpanish ? 'Nube (Cloud)' : 'Cloud Backup'),     $content[41][$key] ?? '', '#8e44ad'],
    ];

    $backupImgAlt = $isSpanish ? 'Estrategias y Respaldos de Seguridad' : 'Backup Strategies & Disaster Recovery';
?>
<div class="fullbar">
    <?php include __DIR__ . '/navBarSecurity.php'; ?>
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
        <h2 class="sec-section-title" id="top" style="margin-bottom: 0;"><span>&#x1F4BE;</span> <?= $content[24][$key] ?? ($isSpanish ? 'Respaldo (Backup)' : 'Backups'); ?></h2>
        <!-- Progressive Thumbnail Trigger (roadmap.md) -->
        <div class="carousel-group img_rtl">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= $backupImgAlt; ?>">
                        <img src="<?= $imgDir; ?>images/backup_thumb.webp"
                             onerror="this.src='<?= $imgDir; ?>images/backup.png'"
                             alt="<?= $backupImgAlt; ?>"
                             title="<?= $backupImgAlt; ?>"
                             width="70"
                             height="70"
                             loading="lazy" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
            </div>
        </div>
    </div>

    <p><?= $content[25][$key] ?? ''; ?></p>
    <div class="backup-grid">
        <?php foreach ($types as [$cls, $ico, $name, $desc]): ?>
        <div class="backup-card <?= $cls ?>">
            <span class="bk-icon"><?= $ico ?></span>
            <h3><?= $name ?></h3>
            <p><?= $desc ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="sec-tip">
        &#x1F4A1; <strong><?= $isSpanish ? 'Regla 3-2-1:' : 'Best practice:'; ?></strong>
        <?= $content[34][$key] ?? ''; ?>
    </div>

    <h2 class="sec-section-title"><span>&#x1F4CD;</span> <?= $content[35][$key] ?? ($isSpanish ? '¿Dónde Guardar tus Respaldos?' : 'Where to Store Your Backups'); ?></h2>
    <div class="storage-trio">
        <?php foreach ($storageCards as [$anchorId, $ico, $name, $desc, $borderColor]): ?>
        <div class="storage-card" style="border-top-color: <?= $borderColor ?>;">
            <span class="st-icon"><?= $ico ?></span>
            <h3><a href="#<?= $anchorId ?>"><?= $name ?></a></h3>
            <p><?= $desc ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <hr class="sec-divider">

    <h3 id="onsite_b" style="color:var(--primary-dark, #0a192f);margin-bottom:.5rem">&#x1F3E0; <?= $content[36][$key] ?? ($isSpanish ? 'Respaldo local' : 'Onsite Backup'); ?></h3>
    <p><?= $content[42][$key] ?? ''; ?></p>

    <h3 id="offsite_b" style="color:var(--primary-dark, #0a192f);margin:1.5rem 0 .5rem">&#x1F697; <?= $content[38][$key] ?? ($isSpanish ? 'Respaldo externo' : 'Offsite Backup'); ?></h3>
    <p><?= $content[43][$key] ?? ''; ?></p>

    <h3 id="online_b" style="color:var(--primary-dark, #0a192f);margin:1.5rem 0 .5rem">&#x2601;&#xFE0F; <?= $content[40][$key] ?? ($isSpanish ? 'Almacenamiento en la nube' : 'Cloud Storage'); ?></h3>
    <p><?= $content[44][$key] ?? ''; ?></p>

    <div style="margin-top:1.5rem"><a href="#top" class="back-top-btn">&#x2B06; <?= $content[45][$key] ?? ($isSpanish ? 'Volver al inicio' : 'Back to top'); ?></a></div>

    <!-- Progressive Carousel Template Registry (roadmap.md) -->
    <template id="carousel-images">
        <div class="carousel-item" data-image-index="0">
            <a href="<?= $imgDir; ?>images/backup.png" target="_blank" rel="noopener">
                <img data-src="<?= $imgDir; ?>images/backup.webp"
                     src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'%3E%3C/svg%3E"
                     alt="<?= $backupImgAlt; ?>">
            </a>
            <h4 class="img_link">
                <a href="#top" title="<?= $backupImgAlt; ?>">
                    <?= $backupImgAlt; ?>
                </a>
            </h4>
        </div>
    </template>
</div>
<?php
}

function security_backups() {
    render_backups_view(false);
}

function respaldos() {
    render_backups_view(true);
}