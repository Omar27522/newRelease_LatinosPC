<?php
/**
 * Utilities Component
 * Modularized from software.php
 * Powered by SQLite laTpc.db ($content pool for 'software')
 */

include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;

$isSpanish = ($key === 'contenido');

// Dynamic Content & Links Resolver from SQLite laTpc.db ($content pool)
$util = [];
$links = [];
foreach ($content as $item) {
    if (isset($item['name']) && str_starts_with($item['name'], 'util_')) {
        $val = !empty($item[$key]) ? $item[$key] : ($item['content'] ?? '');
        if (str_starts_with($item['name'], 'util_link_')) {
            $linkKey = str_replace('util_link_', '', $item['name']);
            $links[$linkKey] = $val;
        } else {
            $utilKey = str_replace('util_', '', $item['name']);
            $util[$utilKey] = $val;
        }
    }
}
?>

<article class="fullbar">
    <?php if (function_exists('sw_breadCrumbs')) { sw_breadCrumbs(); } ?>
    <h1><?= htmlspecialchars($util['title'] ?? 'Utilities'); ?></h1>
    <div class="blurb">
        <section class="intro">
            <p tabindex="0" class="selection">
                <?= htmlspecialchars($util['intro'] ?? ''); ?>
            </p>
        </section>

        <section class="windows-optimization">
            <h2 tabindex="0"><?= htmlspecialchars($util['opt_heading'] ?? 'Windows System Optimization'); ?></h2>
            <p tabindex="0" class="selection">
                <?= htmlspecialchars($util['opt_intro'] ?? ''); ?>
            </p>

            <div class="features-grid">
                <details class="feature-card">
                    <summary tabindex="0" class="selection"><?= htmlspecialchars($util['feat_disk_sum'] ?? 'Disk Cleanup'); ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <p><?= htmlspecialchars($util['feat_disk_desc'] ?? ''); ?></p>
                    </fieldset>
                </details>

                <details class="feature-card">
                    <summary tabindex="0" class="selection"><?= htmlspecialchars($util['feat_reg_sum'] ?? 'Registry Cleanup'); ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <p><?= htmlspecialchars($util['feat_reg_desc'] ?? ''); ?></p>
                    </fieldset>
                </details>

                <details class="feature-card">
                    <summary tabindex="0" class="selection"><?= htmlspecialchars($util['feat_start_sum'] ?? 'Startup Optimization'); ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <p><?= htmlspecialchars($util['feat_start_desc'] ?? ''); ?></p>
                    </fieldset>
                </details>

                <details class="feature-card">
                    <summary tabindex="0" class="selection"><?= htmlspecialchars($util['feat_serv_sum'] ?? 'Service Optimization'); ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <p><?= htmlspecialchars($util['feat_serv_desc'] ?? ''); ?></p>
                    </fieldset>
                </details>

                <details class="feature-card">
                    <summary tabindex="0" class="selection"><?= htmlspecialchars($util['feat_net_sum'] ?? 'Internet Optimization'); ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <p><?= htmlspecialchars($util['feat_net_desc'] ?? ''); ?></p>
                    </fieldset>
                </details>
            </div>
        </section>

        <section class="warning">
            <div class="warning-box">
                <h3 tabindex="0"><?= htmlspecialchars($util['warn_heading'] ?? '⚠️ Important Note'); ?></h3>
                <p tabindex="0" class="selection">
                    <?= htmlspecialchars($util['warn_desc'] ?? ''); ?>
                </p>
            </div>
        </section>

        <section class="intro" style="margin-top: 1rem;">
            <h3><?= htmlspecialchars($util['proto_heading'] ?? 'This is what I do on a typical new installation'); ?></h3>
            <p><?= $util['proto_p1'] ?? ''; ?></p>
            <p><?= str_replace('{BENCH_LINK}', htmlspecialchars($links['browserbench'] ?? 'https://browserbench.org/'), $util['proto_p2'] ?? ''); ?></p>
            <p><?= htmlspecialchars($util['proto_p3'] ?? 'Then I install the following:'); ?></p>
            <ul>
                <li><a href="<?= htmlspecialchars($links['ninite'] ?? 'https://ninite.com/'); ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($util['app_ninite_label'] ?? 'Ninite'); ?></a></li>
                <li><a href="<?= htmlspecialchars($links['speccy'] ?? 'https://www.ccleaner.com/speccy'); ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($util['app_speccy_label'] ?? 'Speccy'); ?></a></li>
                <li><a href="<?= htmlspecialchars($links['batteryinfo'] ?? 'https://www.nirsoft.net/utils/battery_information_view.html'); ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($util['app_battery_label'] ?? 'BatteryInfoView'); ?></a></li>
            </ul>
        </section>
    </div>
</article>
