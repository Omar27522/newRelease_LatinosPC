<?php
/**
 * File Sharing Component
 * Modularized from software.php
 */
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;

// Dynamic software links loaded from database ($content pool)
// Bilingual links with automatic fallback to English when Spanish version is not available
$links = [];
foreach ($content as $item) {
    if (isset($item['name']) && str_starts_with($item['name'], 'file_sharing_link_')) {
        $linkKey = str_replace('file_sharing_link_', '', $item['name']);
        $links[$linkKey] = !empty($item[$key]) ? $item[$key] : ($item['content'] ?? '#');
    }
}

echo "<div class=\"fullbar\">";
if (function_exists('sw_breadCrumbs')) { sw_breadCrumbs(); }
echo "</div>";
?>
<div class="blurb">
    <h1 id="title"><?= $content[352][$key] ?? ''; ?></h1>
    <p class="selection"><?= $content[353][$key] ?? ''; ?></p>

    <details>
        <summary><?= $content[354][$key] ?? ''; ?></summary>
        <p tabindex="0" class="selection buttonskit colms2">
            <button><a class="bttn" href="<?= $links['dropbox']; ?>" target="_blank" rel="noopener noreferrer" title="DropBox">Dropbox</a></button>
            <button><a class="bttn" href="<?= $links['google_drive']; ?>" target="_blank" rel="noopener noreferrer" title="Google Drive">Google Drive</a></button>
            <button><a class="bttn" href="<?= $links['onedrive']; ?>" target="_blank" rel="noopener noreferrer" title="OneDrive">OneDrive</a></button>
            <button><a class="bttn" href="<?= $links['hightail']; ?>" target="_blank" rel="noopener noreferrer" title="Hightail">Hightail</a></button>
            <button><a class="bttn" href="<?= $links['mediafire']; ?>" target="_blank" rel="noopener noreferrer" title="MediaFire">MediaFire</a></button>
            <button><a class="bttn" href="<?= $links['mega']; ?>" target="_blank" rel="noopener noreferrer" title="Mega">Mega</a></button>
            <button><a class="bttn" href="<?= $links['box']; ?>" target="_blank" rel="noopener noreferrer" title="Box">Box</a></button>
            <button><a class="bttn" href="<?= $links['icloud']; ?>" target="_blank" rel="noopener noreferrer" title="iCloud">iCloud</a></button>
            <button><a class="bttn" href="<?= $links['wetransfer']; ?>" target="_blank" rel="noopener noreferrer" title="WeTransfer">WeTransfer</a></button>
        </p>
    </details><br />

    <fieldset>
        <legend><?= $content[355][$key] ?? ''; ?></legend>
        <p><?= $content[356][$key] ?? ''; ?><a
                href="<?= $links['router']; ?>" target="_blank" rel="noopener noreferrer"
                title="Router"><?= $content[357][$key] ?? ''; ?></a><?= $content[358][$key] ?? ''; ?></p>
    </fieldset>

    <fieldset>
        <legend><?= $content[359][$key] ?? ''; ?></legend>
        <p><?= $content[360][$key] ?? ''; ?><a href="<?= $links['zoom']; ?>" target="_blank" rel="noopener noreferrer" title="Zoom">Zoom</a>, <a
                href="<?= $links['skype']; ?>" target="_blank" rel="noopener noreferrer" title="Skype">Skype</a>, <a href="<?= $links['meet']; ?>" target="_blank" rel="noopener noreferrer"
                title="Google Meet">Google Meet</a>, <a
                href="<?= $links['teams']; ?>" target="_blank" rel="noopener noreferrer"
                title="Microsoft Teams">Microsoft Teams</a>, <a href="<?= $links['teamviewer']; ?>" target="_blank" rel="noopener noreferrer"
                title="TeamViewer">TeamViewer</a>, <a href="<?= $links['anydesk']; ?>" target="_blank" rel="noopener noreferrer" title="AnyDesk">AnyDesk</a></p>
    </fieldset>

    <fieldset>
        <legend><?= $content[361][$key] ?? ''; ?></legend>
        <p><?= $content[362][$key] ?? ''; ?><a href="<?= $links['facebook']; ?>" target="_blank" rel="noopener noreferrer" title="facebook.com">Facebook</a>, <a
                href="<?= $links['instagram']; ?>" target="_blank" rel="noopener noreferrer" title="instagram.com">Instagram</a>, <a
                href="<?= $links['linkedin']; ?>" target="_blank" rel="noopener noreferrer" title="linkedin.com">LinkedIn</a>, <a href="<?= $links['pinterest']; ?>" target="_blank" rel="noopener noreferrer"
                title="pinterest.com">Pinterest</a>, <a href="<?= $links['reddit']; ?>" target="_blank" rel="noopener noreferrer" title="reddit.com">Reddit</a>,
            and <a href="<?= $links['x']; ?>" target="_blank" rel="noopener noreferrer" title="x.com"><?= $content[363][$key] ?? ''; ?></a>.</p>
    </fieldset>

    <fieldset>
        <legend><?= $content[364][$key] ?? ''; ?></legend>
        <p><?= $content[365][$key] ?? ''; ?><a href="<?= $links['workspace']; ?>" target="_blank" rel="noopener noreferrer" title="Google Workspace">Google
                Workspace</a>, <a href="<?= $links['m365']; ?>" target="_blank" rel="noopener noreferrer" title="Microsoft 365">Microsoft 365</a>, <a
                href="<?= $links['asana']; ?>" target="_blank" rel="noopener noreferrer" title="Asana">Asana</a>, <a href="<?= $links['slack']; ?>" target="_blank" rel="noopener noreferrer" title="Slack">Slack</a>,
            <a href="<?= $links['basecamp']; ?>" target="_blank" rel="noopener noreferrer" title="Basecamp">Basecamp</a>, <a href="<?= $links['monday']; ?>" target="_blank" rel="noopener noreferrer"
                title="Monday.com">Monday.com</a>, and <a href="<?= $links['trello']; ?>" target="_blank" rel="noopener noreferrer" title="Trello">Trello</a>.</p>
    </fieldset>

    <fieldset>
        <legend><?= $content[366][$key] ?? ''; ?></legend>
        <p tabindex="0" class="selection"><?= $content[367][$key] ?? ''; ?></p>
        <br />
        <figure>
            <figcaption>
                <?= $content[368][$key] ?? ''; ?><br /></figcaption>
            <iframe src="../images/gallery/thumbnail/mail.png" title="Share" width="263px" height="263px"></iframe>
        </figure>
        <div class="colms2">
            <fieldset>
                <legend>1</legend>
                <p style="border:2px solid green;"><?= $content[369][$key] ?? ''; ?></p>
            </fieldset>
            <fieldset>
                <legend>2</legend>
                <p style="border:2px solid red;"><?= $content[370][$key] ?? ''; ?></p>
            </fieldset>
            <fieldset>
                <legend>3</legend>
                <p style="border:2px solid purple;"><?= $content[371][$key] ?? ''; ?></p>
            </fieldset>
            <fieldset>
                <legend>4</legend>
                <p style="border:2px solid orange;"><?= $content[372][$key] ?? ''; ?></p>
            </fieldset>
            <fieldset>
                <legend>5</legend>
                <p style="border:2px solid yellow;"><?= $content[373][$key] ?? ''; ?></p>
            </fieldset>
        </div>
        <p><?= $content[374][$key] ?? ''; ?></p>
    </fieldset>
</div>
<div class="spacer">
    <hr />
</div>