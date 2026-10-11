<?php
/**
 * Imaging Component
 * Modularized from software.php
 */
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;

$isSpanish = ($key === 'contenido');

echo "<div class=\"fullbar\">";
if (function_exists('sw_breadCrumbs')) { sw_breadCrumbs(); }
echo "</div>";
?>
<article class="hero4">
    <div class="fullbar">
        <h1 id="title"><?= $content[375][$key] ?? ''; ?></h1>
        <div class="colms2" style="padding-top: 1%;">
            <p class="selection item" tabindex="0">
                <span style="font-size: larger;padding-left: 20px">
                    <?= $content[383][$key] ?? ''; ?>
                </span><br />
                <?= $content[384][$key] ?? ''; ?>
            </p>
            <p class="selection" tabindex="0">
                <?= $content[385][$key] ?? ''; ?>
            </p>
        </div><!-- colms2 -->

        <h2 class="eych8"><?= $content[376][$key] ?? ''; ?></h2>
        <p class="selection newspaper2" tabindex="0"><?= $content[386][$key] ?? ''; ?></p>

        <h2 class="eych8"><?= $content[377][$key] ?? ''; ?></h2>
        <p class="selection" tabindex="0" style="font-size: x-large;">
            <?= $content[387][$key] ?? ''; ?>
        </p>

        <h2 class="eych8"><?= $content[378][$key] ?? ''; ?></h2>
        <aside class="newspaper2">
            <p class="selection" tabindex="0" style="margin-top: 0;">
                <?= $content[388][$key] ?? ''; ?>
            </p>
            <ul class="imgs item">
                <li tabindex="0" class="d3"><?= $content[389][$key] ?? ''; ?></li>
                <li tabindex="0" class="d3"><?= $content[390][$key] ?? ''; ?></li>
                <li tabindex="0" class="d3"><?= $content[391][$key] ?? ''; ?></li>
                <li tabindex="0" class="d3"><?= $content[392][$key] ?? ''; ?></li>
            </ul>
            <p class="selection" tabindex="0">
                <?= $content[393][$key] ?? ''; ?>
            </p>
        </aside>

        <h2 class="eych8"><?= $content[379][$key] ?? ''; ?></h2>
        <p class="selection" tabindex="0" style="display: inline">
            <?= $content[394][$key] ?? ''; ?>
        </p>
        <p><?= $content[395][$key] ?? ''; ?></p>
        <aside class="colms2">
            <div class="item">
                <h3 style="margin-top: 0;"><?= $content[396][$key] ?? ''; ?></h3>
                <p class="selection" tabindex="0"><?= $content[397][$key] ?? ''; ?></p>
                <ul class="imgs">
                    <li class="blurb" tabindex="0">
                        <strong><?= $content[398][$key] ?? ''; ?></strong>
                        <?= $content[399][$key] ?? ''; ?>
                    </li>
                    <li class="blurb" tabindex="0">
                        <strong><?= $content[400][$key] ?? ''; ?></strong>
                        <?= $content[401][$key] ?? ''; ?>
                    </li>
                </ul>
                <p class="selection" tabindex="0">
                    <?= $content[402][$key] ?? ''; ?>
                </p>
                <img src="https://www.w3schools.com/w3images/photographer.jpg" alt="Photographer" style="width:100%;max-width:400px;margin-top:16px;">
            </div>
            <div class="item">
                <h3><?= $content[403][$key] ?? ''; ?></h3>
                <p class="selection" tabindex="0"><?= $content[404][$key] ?? ''; ?></p>
                <ul class="imgs">
                    <li><strong><?= $content[405][$key] ?? ''; ?></strong> <?= $content[406][$key] ?? ''; ?></li>
                    <li><strong><?= $content[407][$key] ?? ''; ?></strong> <?= $content[408][$key] ?? ''; ?></li>
                    <li><strong><?= $content[409][$key] ?? ''; ?></strong> <?= $content[410][$key] ?? ''; ?></li>
                    <li><strong><?= $content[411][$key] ?? ''; ?></strong> <?= $content[412][$key] ?? ''; ?></li>
                </ul>
            </div>
            <div class="item">
                <h3><?= $content[413][$key] ?? ''; ?></h3>
                <p class="selection" tabindex="0"><?= $content[414][$key] ?? ''; ?></p>
                <ul class="imgs">
                    <li><strong><?= $content[415][$key] ?? ''; ?></strong> <?= $content[416][$key] ?? ''; ?></li>
                    <li><strong><?= $content[417][$key] ?? ''; ?></strong> <?= $content[418][$key] ?? ''; ?></li>
                    <li><strong><?= $content[419][$key] ?? ''; ?></strong> <?= $content[420][$key] ?? ''; ?></li>
                    <li><strong><?= $content[421][$key] ?? ''; ?></strong> <?= $content[422][$key] ?? ''; ?></li>
                </ul>
            </div>
        </aside>

        <h2 class="eych8"><?= $content[380][$key] ?? ''; ?></h2>
        <p class="selection" tabindex="0">
            <?= $content[423][$key] ?? ''; ?>
        </p>
        <aside class="colms2">
            <ul class="imgs">
                <li class="item spz d4" tabindex="0">
                    <strong><?= $content[424][$key] ?? ''; ?>:</strong> <?= $content[425][$key] ?? ''; ?>
                </li>
                <li class="item spz d4" tabindex="0">
                    <strong><?= $content[426][$key] ?? ''; ?>:</strong> <?= $content[427][$key] ?? ''; ?>
                </li>
                <li class="item spz d4" tabindex="0">
                    <strong><?= $content[428][$key] ?? ''; ?>:</strong> <?= $content[429][$key] ?? ''; ?>
                </li>
                <li class="item spz d4" tabindex="0">
                    <strong><?= $content[430][$key] ?? ''; ?>:</strong> <?= $content[431][$key] ?? ''; ?>
                </li>
            </ul>
        </aside>

        <h2 class="eych8"><?= $content[381][$key] ?? ''; ?></h2>
        <p class="selection" tabindex="0"><?= $content[432][$key] ?? ''; ?></p>
        <aside class="colms2">
            <ul class="imgs">
                <li class="item spz d4" tabindex="0">
                    <strong><?= $content[433][$key] ?? ''; ?>:</strong> <?= $content[434][$key] ?? ''; ?>
                </li>
                <li class="item spz d4" tabindex="0">
                    <strong><?= $content[435][$key] ?? ''; ?>:</strong> <?= $content[436][$key] ?? ''; ?>
                </li>
                <li class="item spz d4" tabindex="0">
                    <strong><?= $content[437][$key] ?? ''; ?>:</strong> <?= $content[438][$key] ?? ''; ?>
                </li>
            </ul>
        </aside>
        <p class="selection" tabindex="0">
            <?= $content[439][$key] ?? ''; ?>
        </p>

        <h2 class="eych8"><?= $content[382][$key] ?? ''; ?></h2>
        <p class="selection" tabindex="0"><?= $content[440][$key] ?? ''; ?></p>
        <aside class="colms2">
            <ul class="imgs">
                <li class="item spz" tabindex="0">
                    <strong><?= $content[441][$key] ?? ''; ?>:</strong> <?= $content[442][$key] ?? ''; ?>
                </li>
                <li class="item spz" tabindex="0">
                    <strong><?= $content[443][$key] ?? ''; ?>:</strong> <?= $content[444][$key] ?? ''; ?>
                </li>
                <li class="item spz" tabindex="0">
                    <strong><?= $content[445][$key] ?? ''; ?>:</strong> <?= $content[446][$key] ?? ''; ?>
                </li>
            </ul>
            <p class="selection item" tabindex="0" style="margin-top: 0;">
                <?= $content[447][$key] ?? ''; ?>
            </p>
        </aside>

        <aside class="colms2" style="margin-top: 1%;">
            <div class="item">
                <h3 style="margin-top: 0;"><?= $content[448][$key] ?? ''; ?></h3>
                <p class="selection" tabindex="0">
                    <?= $content[449][$key] ?? ''; ?>
                </p>
            </div>

            <div class="item">
                <h3 style="text-align:center"><?= $content[450][$key] ?? ''; ?></h3>
                <p class="selection" tabindex="0" style="margin-bottom: 0;">
                    <?= $content[451][$key] ?? ''; ?>
                </p>
            </div>
        </aside>
    </div>
</article>
