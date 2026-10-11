<?php
/**
 * Online Storage Component
 * Modularized from software.php
 * Powered by SQLite laTpc.db ($content pool for 'software')
 */

include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;

$isSpanish = ($key === 'contenido');

// Dynamic Content & Links Resolver from SQLite laTpc.db ($content pool)
$os = [];
$links = [];
foreach ($content as $item) {
    if (isset($item['name']) && str_starts_with($item['name'], 'os_')) {
        $val = !empty($item[$key]) ? $item[$key] : ($item['content'] ?? '');
        if (str_starts_with($item['name'], 'os_link_')) {
            $linkKey = str_replace('os_link_', '', $item['name']);
            $links[$linkKey] = $val;
        } else {
            $osKey = str_replace('os_', '', $item['name']);
            $os[$osKey] = $val;
        }
    }
}

echo "<div class=\"fullbar\">";
if (function_exists('sw_breadCrumbs')) {
    sw_breadCrumbs();
}
echo "</div>";

// Top 6 providers for colms
$top_providers = [
    ['link_key' => 'gdrive', 'title_key' => 'prov_gdrive_title', 'desc_key' => 'prov_gdrive_desc'],
    ['link_key' => 'dropbox', 'title_key' => 'prov_dropbox_title', 'desc_key' => 'prov_dropbox_desc'],
    ['link_key' => 'onedrive', 'title_key' => 'prov_onedrive_title', 'desc_key' => 'prov_onedrive_desc'],
    ['link_key' => 'icloud', 'title_key' => 'prov_icloud_title', 'desc_key' => 'prov_icloud_desc'],
    ['link_key' => 'amazon', 'title_key' => 'prov_amazon_title', 'desc_key' => 'prov_amazon_desc'],
    ['link_key' => 'box', 'title_key' => 'prov_box_title', 'desc_key' => 'prov_box_desc'],
];
?>

<div class="blurb fullbar">
    <h1 id="title">
        <a href="<?= htmlspecialchars($links['cloud'] ?? '#'); ?>" title="<?= htmlspecialchars($os['title_attr'] ?? ''); ?>" target="_blank" rel="noopener noreferrer">
            <?= htmlspecialchars($os['title'] ?? 'Online storage'); ?>
        </a>
    </h1>
    <p tabindex="0" class="selection">
        <?= str_replace(
            ['{CLOUD_LINK}', '{CLOUD_ATTR}'],
            [htmlspecialchars($links['cloud'] ?? '#'), htmlspecialchars($os['title_attr'] ?? '')],
            $os['intro_p1'] ?? ''
        ); ?>
    </p>
    <p tabindex="0" class="selection">
        <?= str_replace(
            ['{SERVICES_LINK}', '{SERVICES_ATTR}'],
            [htmlspecialchars($links['cloud'] ?? '#'), htmlspecialchars($os['title_attr'] ?? '')],
            $os['intro_p2'] ?? ''
        ); ?>
    </p>
    <h2><?= htmlspecialchars($os['providers_heading'] ?? ''); ?></h2>
    <div class="colms">
        <?php foreach ($top_providers as $prov) : 
            $href = htmlspecialchars($links[$prov['link_key']] ?? '#');
            $pTitle = htmlspecialchars($os[$prov['title_key']] ?? '');
            $pDesc = htmlspecialchars($os[$prov['desc_key']] ?? '');
        ?>
            <fieldset tabindex="0" class="selection card2">
                <legend tabindex="0" class="selection card2">
                    <a href="<?= $href; ?>" title="<?= $pTitle; ?>" target="_blank" rel="noopener noreferrer"><?= $pTitle; ?></a>
                </legend>
                <?= $pDesc; ?>
            </fieldset>
        <?php endforeach; ?>
    </div>
    <fieldset tabindex="0" class="selection card2">
        <legend tabindex="0" class="selection card2" style="text-align: center;">
            <a href="<?= htmlspecialchars($links['mega'] ?? '#'); ?>" title="<?= htmlspecialchars($os['prov_mega_title'] ?? 'Mega:'); ?>" target="_blank" rel="noopener noreferrer">
                <?= htmlspecialchars($os['prov_mega_title'] ?? 'Mega:'); ?>
            </a>
        </legend>
        <?= htmlspecialchars($os['prov_mega_desc'] ?? ''); ?>
    </fieldset>
</div>
<div class="spacer">
    <hr />
</div>
