<?php
/**
 * Messaging Component
 * Modularized from software.php
 * Powered by SQLite laTpc.db ($content pool for 'software')
 */

include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;

$isSpanish = ($key === 'contenido');

// Dynamic Content & Links Resolver from SQLite laTpc.db ($content pool)
$msg = [];
$links = [];
foreach ($content as $item) {
    if (isset($item['name']) && str_starts_with($item['name'], 'msg_')) {
        $val = !empty($item[$key]) ? $item[$key] : ($item['content'] ?? '');
        if (str_starts_with($item['name'], 'msg_link_')) {
            $linkKey = str_replace('msg_link_', '', $item['name']);
            $links[$linkKey] = $val;
        } else {
            $msgKey = str_replace('msg_', '', $item['name']);
            $msg[$msgKey] = $val;
        }
    }
}

echo "<div class=\"fullbar\">";
if (function_exists('sw_breadCrumbs')) {
    sw_breadCrumbs();
}
echo "</div>";

// Top 10 Recent Messaging Apps configuration
$recent_apps_list = [
    ['key' => 'sms', 'label' => $msg['app_sms_label'] ?? 'Text Messaging (SMS)'],
    ['key' => 'whatsApp', 'label' => 'WhatsApp'],
    ['key' => 'facebookMessenger', 'label' => 'Facebook Messenger'],
    ['key' => 'weChat', 'label' => 'WeChat'],
    ['key' => 'telegram', 'label' => 'Telegram'],
    ['key' => 'signal', 'label' => 'Signal'],
    ['key' => 'iMessage', 'label' => 'iMessage'],
    ['key' => 'googleChat', 'label' => 'Google Chat'],
    ['key' => 'slack', 'label' => 'Slack'],
    ['key' => 'microsoftTeams', 'label' => 'Microsoft Teams'],
];

// Advanced Features list
$advanced_features_list = [
    $msg['feat_sync'] ?? 'Cross-platform synchronization across devices',
    $msg['feat_voice_video'] ?? 'Voice and video messaging',
    $msg['feat_location'] ?? 'Live location sharing',
    $msg['feat_reactions'] ?? 'Message reactions and replies',
    $msg['feat_files'] ?? 'File sharing and cloud storage integration',
    $msg['feat_payments'] ?? 'Digital payments and money transfers',
    $msg['feat_group_conf'] ?? 'Group video calls and conferences',
];

// Additional Messaging & Social Platforms configuration
$additional_apps_list = [
    ['key' => 'discord', 'label' => 'Discord'],
    ['key' => 'snapchat', 'label' => 'Snapchat'],
    ['key' => 'viber', 'label' => 'Viber'],
    ['key' => 'line', 'label' => 'Line'],
    ['key' => 'kik', 'label' => 'Kik'],
    ['key' => 'skype', 'label' => 'Skype'],
    ['key' => 'dust', 'label' => 'Dust'],
    ['key' => 'qq', 'label' => 'QQ'],
    ['key' => 'kakaoTalk', 'label' => 'KakaoTalk'],
    ['key' => 'marcoPolo', 'label' => 'Marco Polo'],
    ['key' => 'textMe', 'label' => 'Text Me'],
    ['key' => 'textNow', 'label' => 'Text Now'],
    ['key' => 'threema', 'label' => 'Threema'],
    ['key' => 'wire', 'label' => 'Wire'],
    ['key' => 'session', 'label' => 'Session'],
    ['key' => 'wickr', 'label' => 'Wickr'],
    ['key' => 'tango', 'label' => 'Tango'],
    ['key' => 'chompSMS', 'label' => 'Chomp SMS'],
    ['key' => 'pinger', 'label' => 'Pinger'],
    ['key' => 'hike', 'label' => 'Hike'],
];
?>

<div class="hero4 fullbar messaging-container">
    <h1 id="title"><?= htmlspecialchars($msg['title'] ?? 'Messaging'); ?></h1>

    <div class="messaging-hero-wrapper messaging-intro-section">
        <div class="messaging-intro-text">
            <p tabindex="0" class="selection">
                <?= str_replace('{COMM_LINK}', htmlspecialchars($links['comm'] ?? 'https://es.wikipedia.org/wiki/Comunicaci%C3%B3n'), $msg['intro_p1'] ?? ''); ?>
            </p>
            <p tabindex="0" class="selection">
                <?= $msg['intro_p2'] ?? ''; ?>
            </p>
            <blockquote class="intro-quote selection" tabindex="0">
                <i class="fas fa-quote-left quote-icon" aria-hidden="true"></i>
                <span class="quote-text"><?= $msg['intro_quote'] ?? ''; ?></span>
            </blockquote>

            <div class="wiki-source-container">
                <a href="<?= htmlspecialchars($links['wiki'] ?? 'https://en.wikipedia.org/wiki/Instant_messaging'); ?>" target="_blank" rel="noopener noreferrer" class="wiki-source-btn" tabindex="0">
                    <i class="fa-brands fa-wikipedia-w"></i>
                    <span><?= htmlspecialchars($msg['wiki_btn_text'] ?? 'Explore Instant Messaging on Wikipedia'); ?></span>
                    <i class="fas fa-arrow-up-right-from-square"></i>
                </a>
            </div>
        </div>
        <div class="messaging-hero-media carousel-group">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= htmlspecialchars($msg['img_alt'] ?? 'Instant Messaging Applications'); ?>">
                        <img src="../images/programs/msg_thumb.webp" alt="<?= htmlspecialchars($msg['img_alt'] ?? 'Instant Messaging Applications'); ?>" class="messaging-hero-img" loading="lazy">
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
            </div>
        </div>
    </div>

    <hr class="section-divider" />

    <section class="messaging-section">
        <h2 class="section-heading"><i class="fas fa-comments heading-icon"></i> <?= htmlspecialchars($msg['recent_title'] ?? 'Here are some Messaging Apps as of recently'); ?></h2>
        <ul class="newspaper2 app-grid">
            <?php foreach ($recent_apps_list as $app) : 
                $href = htmlspecialchars($links[$app['key']] ?? '#');
            ?>
                <li class="app-item">
                    <a href="<?= $href; ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($app['label']); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="messaging-section security-section">
        <h2 class="section-heading"><i class="fas fa-shield-halved heading-icon"></i> <?= htmlspecialchars($msg['security_title'] ?? 'Security and Privacy in Modern Messaging'); ?></h2>
        <div class="security-card">
            <p tabindex="0" class="selection security-content">
                <?= str_replace('{ENCRYPTION_LINK}', htmlspecialchars($links['encryptionEnd2End'] ?? '#'), $msg['security_content'] ?? ''); ?>
            </p>
        </div>
    </section>

    <hr class="section-divider" />

    <section class="messaging-section">
        <h2 class="section-heading"><i class="fas fa-wand-magic-sparkles heading-icon"></i> <?= htmlspecialchars($msg['advanced_title'] ?? 'Advanced Features and Capabilities'); ?></h2>
        <p tabindex="0" class="selection feature-intro"><?= htmlspecialchars($msg['advanced_intro'] ?? 'Modern messaging apps have evolved far beyond simple text communication. Users can now enjoy features like:'); ?></p>
        <ul class="features-grid">
            <?php foreach ($advanced_features_list as $feature) : ?>
                <li tabindex="0" class="border-li">
                    <i class="fas fa-circle-check feature-check" aria-hidden="true"></i>
                    <span><?= htmlspecialchars($feature); ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <hr class="section-divider" />

    <section class="messaging-section trends-section">
        <h2 class="section-heading"><i class="fas fa-bolt heading-icon"></i> <?= htmlspecialchars($msg['trends_title'] ?? 'Emerging Trends and Future of Messaging'); ?></h2>
        <div class="trends-card">
            <p tabindex="0" class="selection trends-content"><?= htmlspecialchars($msg['trends_content'] ?? ''); ?></p>
        </div>
    </section>

    <div class="market-stats-card">
        <div class="stats-badge"><i class="fas fa-chart-line"></i> <?= htmlspecialchars($msg['market_badge'] ?? 'Global Market Insight'); ?></div>
        <p tabindex="0" class="selection stats-content"><?= htmlspecialchars($msg['market_content'] ?? ''); ?></p>
    </div>

    <hr class="section-divider" />

    <section class="messaging-section additional-apps-section">
        <h2 class="section-heading"><i class="fas fa-layer-group heading-icon"></i> <?= htmlspecialchars($msg['additional_title'] ?? 'More Messaging & Social Platforms'); ?></h2>
        <ul class="newspaper2 app-grid lastItem">
            <?php foreach ($additional_apps_list as $app) : 
                $href = htmlspecialchars($links[$app['key']] ?? '#');
            ?>
                <li class="app-item">
                    <a href="<?= $href; ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($app['label']); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</div>

<!-- Carousel Modal Data Template -->
<template id="carousel-images">
    <div class="carousel-item" data-image-index="0">
        <a href="../images/programs/msg.jpg" target="_blank" rel="noopener">
            <img data-src="../images/programs/msg.webp"
                 src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'%3E%3C/svg%3E"
                 alt="<?= htmlspecialchars($msg['img_alt'] ?? 'Instant Messaging Applications'); ?>">
        </a>
        <h4 class="img_link">
            <a href="<?= htmlspecialchars($links['wiki'] ?? 'https://en.wikipedia.org/wiki/Instant_messaging'); ?>" target="_blank" rel="noopener">
                <?= htmlspecialchars($msg['img_alt'] ?? 'Instant Messaging Applications'); ?>
            </a>
        </h4>
    </div>
</template>
