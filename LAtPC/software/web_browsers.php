<?php
/**
 * Web Browsers Component
 * Modularized from software.php
 * Powered by SQLite laTpc.db ($content pool for 'software')
 */

include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;

$isSpanish = ($key === 'contenido');

// Dynamic Content & Links Resolver from SQLite laTpc.db ($content pool)
$wb = [];
$links = [];
foreach ($content as $item) {
    if (isset($item['name']) && str_starts_with($item['name'], 'wb_')) {
        $val = !empty($item[$key]) ? $item[$key] : ($item['content'] ?? '');
        if (str_starts_with($item['name'], 'wb_link_')) {
            $linkKey = str_replace('wb_link_', '', $item['name']);
            $links[$linkKey] = $val;
        } else {
            $wbKey = str_replace('wb_', '', $item['name']);
            $wb[$wbKey] = $val;
        }
    }
}

echo "<div class=\"fullbar\">";
if (function_exists('sw_breadCrumbs')) {
    sw_breadCrumbs();
}
echo "</div>";

// Use cases configuration with FontAwesome icons
$usecases_list = [
    ['icon' => 'fa-graduation-cap', 'title' => $wb['uc_1_title'] ?? 'Research and Learning', 'text' => $wb['uc_1_text'] ?? ''],
    ['icon' => 'fa-comments', 'title' => $wb['uc_2_title'] ?? 'Communication', 'text' => $wb['uc_2_text'] ?? ''],
    ['icon' => 'fa-film', 'title' => $wb['uc_3_title'] ?? 'Entertainment', 'text' => $wb['uc_3_text'] ?? ''],
    ['icon' => 'fa-cart-shopping', 'title' => $wb['uc_4_title'] ?? 'Shopping', 'text' => $wb['uc_4_text'] ?? ''],
    ['icon' => 'fa-building-columns', 'title' => $wb['uc_5_title'] ?? 'Banking and Finance', 'text' => $wb['uc_5_text'] ?? ''],
    ['icon' => 'fa-briefcase', 'title' => $wb['uc_6_title'] ?? 'Work and Productivity', 'text' => $wb['uc_6_text'] ?? ''],
    ['icon' => 'fa-newspaper', 'title' => $wb['uc_7_title'] ?? 'News and Updates', 'text' => $wb['uc_7_text'] ?? ''],
    ['icon' => 'fa-plane-departure', 'title' => $wb['uc_8_title'] ?? 'Travel Planning', 'text' => $wb['uc_8_text'] ?? ''],
    ['icon' => 'fa-heart-pulse', 'title' => $wb['uc_9_title'] ?? 'Health and Fitness', 'text' => $wb['uc_9_text'] ?? ''],
    ['icon' => 'fa-landmark', 'title' => $wb['uc_10_title'] ?? 'Government and Civic Services', 'text' => $wb['uc_10_text'] ?? ''],
    ['icon' => 'fa-network-wired', 'title' => $wb['uc_11_title'] ?? 'Job Hunting and Professional Networking', 'text' => $wb['uc_11_text'] ?? ''],
];

// Professional environment accordions
$env_items = [];
for ($i = 1; $i <= 14; $i++) {
    $sum = $wb["env_{$i}_sum"] ?? '';
    $det = $wb["env_{$i}_det"] ?? '';
    if (!empty($sum)) {
        $env_items[] = ['summary' => $sum, 'detail' => $det];
    }
}

// Daily Interaction timeline
$day_items = [];
for ($i = 1; $i <= 10; $i++) {
    $time = $wb["day_{$i}_time"] ?? '';
    $text = $wb["day_{$i}_text"] ?? '';
    if (!empty($time)) {
        $day_items[] = ['time' => $time, 'text' => $text, 'is_last' => ($i === 10)];
    }
}
?>

<article class="hero4 fullbar web-browsers-page">
    <h1 id="title"><?= htmlspecialchars($wb['title'] ?? 'Web Browsers'); ?></h1>
    <p class="browser-subtitle"><?= htmlspecialchars($wb['subtitle'] ?? 'Software to browse the web on a PC.'); ?></p>

    <div class="browser-hero-wrapper browser-intro-section">
        <div class="browser-intro-text">
            <p tabindex="0" class="selection"><?= htmlspecialchars($wb['intro_p1'] ?? ''); ?></p>
            <p tabindex="0" class="selection"><?= htmlspecialchars($wb['intro_p2'] ?? ''); ?></p>
        </div>
        <div class="browser-hero-media carousel-group">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= htmlspecialchars($wb['img_alt'] ?? 'Web Browsers on PC'); ?>">
                        <img src="../images/programs/wb_thumb.webp" alt="<?= htmlspecialchars($wb['img_alt'] ?? 'Web Browsers on PC'); ?>" class="browser-hero-img" loading="lazy">
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
            </div>
        </div>
    </div>

    <hr class="section-divider" />

    <section class="browser-section history-section">
        <h2 class="section-heading"><i class="fas fa-landmark heading-icon"></i> <?= htmlspecialchars($wb['hist_title'] ?? 'A Brief History of Web Browsers'); ?></h2>
        <p class="history-intro"><?= htmlspecialchars($wb['hist_intro'] ?? ''); ?></p>
        <h3 class="timeline-title"><?= htmlspecialchars($wb['hist_timeline_title'] ?? 'Here\'s a simplified timeline:'); ?></h3>

        <div class="timeline-grid colms2">
            <div class="era-card selection">
                <div class="era-badge"><i class="fas fa-floppy-disk"></i> <?= htmlspecialchars($wb['era_1_badge'] ?? '1970s - 1980s'); ?></div>
                <h4 class="era-title"><?= htmlspecialchars($wb['era_1_title'] ?? 'Early Days (1970s-1980s)'); ?></h4>
                <ul class="era-list">
                    <li><?= htmlspecialchars($wb['era_1_item1'] ?? ''); ?></li>
                    <li><?= htmlspecialchars($wb['era_1_item2'] ?? ''); ?></li>
                </ul>
            </div>

            <div class="era-card selection">
                <div class="era-badge"><i class="fas fa-desktop"></i> <?= htmlspecialchars($wb['era_2_badge'] ?? '1990s'); ?></div>
                <h4 class="era-title"><?= htmlspecialchars($wb['era_2_title'] ?? 'The Graphical Era (1990s)'); ?></h4>
                <ul class="era-list">
                    <li><?= htmlspecialchars($wb['era_2_item1'] ?? ''); ?></li>
                    <li><?= htmlspecialchars($wb['era_2_item2'] ?? ''); ?></li>
                    <li><?= htmlspecialchars($wb['era_2_item3'] ?? ''); ?></li>
                </ul>
            </div>

            <div class="era-card selection">
                <div class="era-badge"><i class="fas fa-fire"></i> <?= htmlspecialchars($wb['era_3_badge'] ?? '2000s'); ?></div>
                <h4 class="era-title"><?= htmlspecialchars($wb['era_3_title'] ?? 'The Browser Wars (2000s)'); ?></h4>
                <ul class="era-list">
                    <li><?= htmlspecialchars($wb['era_3_item1'] ?? ''); ?></li>
                    <li><?= htmlspecialchars($wb['era_3_item2'] ?? ''); ?></li>
                    <li><?= htmlspecialchars($wb['era_3_item3'] ?? ''); ?></li>
                </ul>
            </div>

            <div class="era-card selection">
                <div class="era-badge"><i class="fas fa-globe"></i> <?= htmlspecialchars($wb['era_4_badge'] ?? '2010s - Present'); ?></div>
                <h4 class="era-title"><?= htmlspecialchars($wb['era_4_title'] ?? 'Modern Browsers (2010s-Present)'); ?></h4>
                <p class="era-text"><?= htmlspecialchars($wb['era_4_text'] ?? ''); ?></p>
            </div>
        </div>
    </section>

    <hr class="section-divider" />

    <section class="browser-section usecases-section">
        <h2 class="section-heading center"><i class="fas fa-compass heading-icon"></i> <?= htmlspecialchars($wb['usecases_title'] ?? 'Web Browser Use Cases'); ?></h2>
        <div class="colms newspaper2 usecases-grid">
            <?php foreach ($usecases_list as $uc) : ?>
                <fieldset class="usecase-card">
                    <legend class="usecase-legend"><i class="fas <?= $uc['icon']; ?>"></i> <?= htmlspecialchars($uc['title']); ?></legend>
                    <p class="usecase-text"><?= htmlspecialchars($uc['text']); ?></p>
                </fieldset>
            <?php endforeach; ?>
        </div>
    </section>

    <hr class="section-divider" />

    <section class="browser-section env-section">
        <h2 class="section-heading center"><i class="fas fa-briefcase heading-icon"></i> <?= htmlspecialchars($wb['env_title'] ?? 'Professional Environment'); ?></h2>
        <div class="colms2 accordion-grid">
            <?php foreach ($env_items as $item) : ?>
                <details class="env-accordion">
                    <summary class="selection_2 env-summary"><i class="fas fa-laptop-code accordion-icon"></i> <span><?= htmlspecialchars($item['summary']); ?></span></summary>
                    <div class="pe env-content">
                        <span tabindex="0" class="selection_2 env-detail"><?= htmlspecialchars($item['detail']); ?></span>
                    </div>
                </details>
            <?php endforeach; ?>
        </div>
    </section>

    <hr class="section-divider" />

    <section class="browser-section timeline-section">
        <h2 class="section-heading"><i class="fas fa-calendar-day heading-icon"></i> <?= htmlspecialchars($wb['day_title'] ?? 'A Professional Interaction with Web Browsers'); ?></h2>
        <div class="daily-timeline steps">
            <?php foreach ($day_items as $slot) : 
                $class = $slot['is_last'] ? ' last' : '';
            ?>
                <div class="timeline-entry<?= $class; ?>">
                    <div class="timeline-time-col">
                        <div class="timeline-time-badge"><i class="fas fa-clock"></i> <span><?= htmlspecialchars($slot['time']); ?></span></div>
                    </div>
                    <div class="timeline-content-bubble">
                        <p><?= htmlspecialchars($slot['text']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="browser-resources-card">
        <div class="resources-badge"><i class="fas fa-link"></i> <?= htmlspecialchars($wb['res_badge'] ?? 'Helpful Resources'); ?></div>
        <div class="resource-buttons">
            <a href="<?= htmlspecialchars($links['ranking'] ?? '#'); ?>" target="_blank" rel="noopener noreferrer" class="resource-btn">
                <i class="fas fa-chart-simple"></i>
                <span><?= htmlspecialchars($wb['res_btn_ranking'] ?? 'Best Web Browser Rankings'); ?></span>
                <i class="fas fa-arrow-up-right-from-square"></i>
            </a>
            <a href="<?= htmlspecialchars($links['compliance'] ?? '#'); ?>" target="_blank" rel="noopener noreferrer" class="resource-btn">
                <i class="fas fa-shield-halved"></i>
                <span><?= htmlspecialchars($wb['res_btn_compliance'] ?? 'Microsoft Compliance Documentation'); ?></span>
                <i class="fas fa-arrow-up-right-from-square"></i>
            </a>
        </div>
    </div>
</article>

<template id="carousel-images">
    <div class="carousel-item">
        <a href="<?= htmlspecialchars($links['ranking'] ?? '#'); ?>" target="_blank" rel="noopener">
            <img data-src="../images/programs/wb.webp"
                 src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'%3E%3C/svg%3E"
                 alt="<?= htmlspecialchars($wb['img_alt'] ?? 'Web Browsers on PC'); ?>">
        </a>
        <h4 class="img_link">
            <a href="<?= htmlspecialchars($links['ranking'] ?? '#'); ?>" target="_blank" rel="noopener">
                <?= htmlspecialchars($wb['img_alt'] ?? 'Web Browsers on PC'); ?>
            </a>
        </h4>
    </div>
</template>
