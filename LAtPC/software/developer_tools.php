<?php
/**
 * Developer Tools Component
 * Modularized from software.php
 */
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;

// Dynamic software links loaded from database ($content pool)
// Bilingual links with automatic fallback to English when Spanish version is not available
$links = [];
foreach ($content as $item) {
    if (isset($item['name']) && str_starts_with($item['name'], 'dev_tools_link_')) {
        $linkKey = str_replace('dev_tools_link_', '', $item['name']);
        $links[$linkKey] = !empty($item[$key]) ? $item[$key] : ($item['content'] ?? '#');
    }
}
?>
<article class="blurb fullbar">
    <?php if (function_exists('sw_breadCrumbs')) { sw_breadCrumbs(); } ?>
    <h2><?= $content[201][$key] ?? ''; ?></h2>
    <section class="homepage-grid" style="padding-top: 0;">

        <div class="grid-item">

            <p tabindex="0"><?= $content[202][$key] ?? ''; ?></p>
        </div>

        <div class="grid-item">
            <h2><?= $content[203][$key] ?? ''; ?></h2>
            <ul class="tools-list sb_menu">
                <li tabindex="0" class="card2 selection"><a href="<?= $links['google_keep']; ?>" target="_blank" rel="noopener noreferrer">Google Keep</a> <?= $content[204][$key] ?? ''; ?></li>
                <li tabindex="0" class="card2 selection"><a href="<?= $links['libreoffice']; ?>" target="_blank" rel="noopener noreferrer">Libre Office</a> <?= $content[205][$key] ?? ''; ?></li>
                <li tabindex="0" class="card2 selection"><a href="<?= $links['notepad_pp']; ?>" target="_blank" rel="noopener noreferrer">Notepad ++</a> <?= $content[206][$key] ?? ''; ?></li>
                <li tabindex="0" class="card2 selection"><a href="<?= $links['gimp']; ?>" target="_blank" rel="noopener noreferrer">Gimp</a> <?= $content[207][$key] ?? ''; ?></li>
                <li tabindex="0" class="card2 selection"><a href="<?= $links['wamp']; ?>" target="_blank" rel="noopener noreferrer">WAMP</a> <?= $content[208][$key] ?? ''; ?></li>
                <li tabindex="0" class="card2 selection"><a href="<?= $links['xampp']; ?>" target="_blank" rel="noopener noreferrer">XAMP</a> <?= $content[209][$key] ?? ''; ?></li>
                <li tabindex="0" class="card2 selection"><?= $content[210][$key] ?? ''; ?> <a
                        href="<?= $links['web_browser']; ?>" target="_blank" rel="noopener noreferrer"><?= $content[211][$key] ?? ''; ?></a> <?= $content[212][$key] ?? ''; ?> <a
                        href="<?= $links['websites']; ?>"><?= $content[213][$key] ?? ''; ?></a>.</li>
            </ul>
        </div>
    </section>
    <ul class="button-grid grid-item" style="padding-left: 20px;padding-right: 20px;">
        <li>
            <a href="<?= $links['softwareadvice']; ?>" target="_blank" rel="noopener noreferrer">
                <button tabindex="0" class="card2 selection">
                    <img src="../images/programs/thumbs/softwareadvice.svg" alt="SoftwareAdvice"
                        title="SoftwareAdvice" loading="lazy">
                    <br><?= $content[214][$key] ?? ''; ?>
                </button>
            </a>
        </li>
        <li>
            <a href="<?= $links['filehippo']; ?>" target="_blank" rel="noopener noreferrer">
                <button tabindex="0" class="card2 selection">
                    <img src="../images/programs/thumbs/filehippo.png" alt="FileHippo"
                        title="FileHippo" loading="lazy">
                    <br><?= $content[215][$key] ?? ''; ?>
                </button>
            </a>
        </li>
        <li>
            <a href="<?= $links['majorgeeks']; ?>" target="_blank" rel="noopener noreferrer">
                <button tabindex="0" class="card2 selection">
                    <img src="../images/programs/thumbs/majorgeeks.gif" alt="MajorGeeks"
                        title="MajorGeeks" loading="lazy">
                    <br><?= $content[216][$key] ?? ''; ?>
                </button>
            </a>
        </li>
        <li>
            <a href="<?= $links['ninite']; ?>" target="_blank" rel="noopener noreferrer">
                <button tabindex="0" class="card2 selection">
                    <img src="../images/programs/thumbs/ninite.png" alt="Ninite" title="Ninite" loading="lazy">
                    <br><?= $content[217][$key] ?? ''; ?>
                </button>
            </a>
        </li>
        <li>
            <a href="<?= $links['filehorse']; ?>" target="_blank" rel="noopener noreferrer">
                <button tabindex="0" class="card2 selection">
                    <img src="../images/programs/thumbs/filehorse.png" alt="FileHorse"
                        title="FileHorse" loading="lazy">
                    <br><?= $content[218][$key] ?? ''; ?>
                </button>
            </a>
        </li>
        <li>
            <a href="<?= $links['softpedia']; ?>" target="_blank" rel="noopener noreferrer">
                <button tabindex="0" class="card2 selection">
                    <img src="../images/programs/thumbs/softpedia3x2HGBW9_400x400.png"
                        alt="Softpedia" title="Softpedia" loading="lazy">
                    <br><?= $content[219][$key] ?? ''; ?>
                </button>
            </a>
        </li>
        <li>
            <a href="<?= $links['softonic']; ?>" target="_blank" rel="noopener noreferrer">
                <button tabindex="0" class="card2 selection">
                    <img src="../images/programs/thumbs/softonic.jpg" alt="Softonic"
                        title="Softonic" loading="lazy">
                    <br><?= $content[220][$key] ?? ''; ?>
                </button>
            </a>
        </li>
        <li>
            <a href="<?= $links['snapfiles']; ?>" target="_blank" rel="noopener noreferrer">
                <button tabindex="0" class="card2 selection">
                    <img src="../images/programs/thumbs/snapfileslogo-smaller.png"
                        alt="Snapfiles" title="Snapfiles" loading="lazy">
                    <br><?= $content[221][$key] ?? ''; ?>
                </button>
            </a>
        </li>
        <li>
            <a href="<?= $links['filepuma']; ?>" target="_blank" rel="noopener noreferrer">
                <button tabindex="0" class="card2 selection">
                    <img src="../images/programs/thumbs/filepuma.png" alt="FilePuma"
                        title="FilePuma" loading="lazy">
                    <br><?= $content[222][$key] ?? ''; ?>
                </button>
            </a>
        </li>
        <li>
            <a href="<?= $links['sourceforge']; ?>" target="_blank" rel="noopener noreferrer">
                <button tabindex="0" class="card2 selection">
                    <img src="../images/programs/thumbs/sourgeforge-logo-full.svg"
                        alt="SourceForge" title="SourceForge" loading="lazy">
                    <br><?= $content[223][$key] ?? ''; ?>
                </button>
            </a>
        </li>
        <li>
            <a href="<?= $links['donationcoder']; ?>" target="_blank" rel="noopener noreferrer">
                <button tabindex="0" class="card2 selection">
                    <img src="../images/programs/thumbs/donationcoder.jpg" alt="Donation Coder"
                        title="Donation Coder" loading="lazy">
                    <br><?= $content[224][$key] ?? ''; ?>
                </button>
            </a>
        </li>
        <li>
            <a href="<?= $links['fosshub']; ?>" target="_blank" rel="noopener noreferrer">
                <button tabindex="0" class="card2 selection">
                    <img src="../images/programs/thumbs/fosshub5b7e46590c200816f7b796df.png"
                        alt="Foss Hub" title="Foss Hub" loading="lazy">
                    <br><?= $content[225][$key] ?? ''; ?>
                </button>
            </a>
        </li>
    </ul>
</article>
<div class="spacer">
    <hr>
</div>
