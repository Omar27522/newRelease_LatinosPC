<?php
/**
 * Documents Component
 * Modularized from software.php
 */
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;
?>
<div class="fullbar">
    <?php if (function_exists('sw_breadCrumbs')) { sw_breadCrumbs(); } ?>
</div>
<div class="blurb">
    <h1 id="title"><?= $content[226][$key] ?? ''; ?></h1>
    <section class="intro">
        <p><?= $content[227][$key] ?? ''; ?></p>
    </section>

    <section class="electronic-documents">
        <h2><?= $content[228][$key] ?? ''; ?></h2>
        <div class="document-section">
            <h3><?= $content[229][$key] ?? ''; ?></h3>
            <div class="format-grid">
                <div class="format-item">
                    <i class="fas fa-file-word"></i>
                    <h4><?= $content[230][$key] ?? ''; ?></h4>
                    <ul>
                        <li><?= $content[231][$key] ?? ''; ?></li>
                        <li><?= $content[232][$key] ?? ''; ?></li>
                        <li><?= $content[233][$key] ?? ''; ?></li>
                        <li><?= $content[234][$key] ?? ''; ?></li>
                    </ul>
                </div>
                <div class="format-item">
                    <i class="fas fa-file-excel"></i>
                    <h4><?= $content[235][$key] ?? ''; ?></h4>
                    <ul>
                        <li><?= $content[236][$key] ?? ''; ?></li>
                        <li><?= $content[237][$key] ?? ''; ?></li>
                        <li><?= $content[238][$key] ?? ''; ?></li>
                    </ul>
                </div>
                <div class="format-item">
                    <i class="fas fa-file-powerpoint"></i>
                    <h4><?= $content[239][$key] ?? ''; ?></h4>
                    <ul>
                        <li><?= $content[240][$key] ?? ''; ?></li>
                        <li><?= $content[241][$key] ?? ''; ?></li>
                        <li><?= $content[242][$key] ?? ''; ?></li>
                    </ul>
                </div>
                <div class="format-item">
                    <i class="fas fa-file-pdf"></i>
                    <h4><?= $content[243][$key] ?? ''; ?></h4>
                    <ul>
                        <li><?= $content[244][$key] ?? ''; ?></li>
                        <li><?= $content[245][$key] ?? ''; ?></li>
                        <li><?= $content[246][$key] ?? ''; ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="advantages-section">
            <h3><?= $content[247][$key] ?? ''; ?></h3>
            <ul class="feature-list">
                <li><strong><?= $content[248][$key] ?? ''; ?>:</strong> <?= $content[249][$key] ?? ''; ?></li>
                <li><strong><?= $content[250][$key] ?? ''; ?>:</strong> <?= $content[251][$key] ?? ''; ?></li>
                <li><strong><?= $content[252][$key] ?? ''; ?>:</strong> <?= $content[253][$key] ?? ''; ?></li>
                <li><strong><?= $content[254][$key] ?? ''; ?>:</strong> <?= $content[255][$key] ?? ''; ?></li>
                <li><strong><?= $content[256][$key] ?? ''; ?>:</strong> <?= $content[257][$key] ?? ''; ?></li>
            </ul>
        </div>

        <div class="security-section">
            <h3><?= $content[258][$key] ?? ''; ?></h3>
            <ul class="security-features">
                <li><?= $content[259][$key] ?? ''; ?></li>
                <li><?= $content[260][$key] ?? ''; ?></li>
                <li><?= $content[261][$key] ?? ''; ?></li>
                <li><?= $content[262][$key] ?? ''; ?></li>
            </ul>
        </div>
    </section>

    <section class="physical-documents">
        <h2><?= $content[263][$key] ?? ''; ?></h2>

        <div class="document-types">
            <h3><?= $content[264][$key] ?? ''; ?></h3>
            <ul class="type-list">
                <li><?= $content[265][$key] ?? ''; ?></li>
                <li><?= $content[266][$key] ?? ''; ?></li>
                <li><?= $content[267][$key] ?? ''; ?></li>
                <li><?= $content[268][$key] ?? ''; ?></li>
                <li><?= $content[269][$key] ?? ''; ?></li>
            </ul>
        </div>

        <div class="storage-section">
            <h3><?= $content[270][$key] ?? ''; ?></h3>
            <ul class="storage-tips">
                <li><?= $content[271][$key] ?? ''; ?></li>
                <li><?= $content[272][$key] ?? ''; ?></li>
                <li><?= $content[273][$key] ?? ''; ?></li>
                <li><?= $content[274][$key] ?? ''; ?></li>
            </ul>
        </div>

        <div class="physical-advantages">
            <h3><?= $content[275][$key] ?? ''; ?></h3>
            <ul class="advantage-list">
                <li><?= $content[276][$key] ?? ''; ?></li>
                <li><?= $content[277][$key] ?? ''; ?></li>
                <li><?= $content[278][$key] ?? ''; ?></li>
                <li><?= $content[279][$key] ?? ''; ?></li>
            </ul>
        </div>
    </section>

    <section class="best-practices">
        <h2><?= $content[280][$key] ?? ''; ?></h2>
        <div class="practice-grid">
            <div class="practice-item">
                <h4><?= $content[281][$key] ?? ''; ?></h4>
                <p><?= $content[282][$key] ?? ''; ?></p>
            </div>
            <div class="practice-item">
                <h4><?= $content[283][$key] ?? ''; ?></h4>
                <p><?= $content[284][$key] ?? ''; ?></p>
            </div>
            <div class="practice-item">
                <h4><?= $content[285][$key] ?? ''; ?></h4>
                <p><?= $content[286][$key] ?? ''; ?></p>
            </div>
            <div class="practice-item">
                <h4><?= $content[287][$key] ?? ''; ?></h4>
                <p><?= $content[288][$key] ?? ''; ?></p>
            </div>
        </div>
    </section>

    <section class="future-trends">
        <h2><?= $content[289][$key] ?? ''; ?></h2>

        <div class="future-intro">
            <p><?= $content[290][$key] ?? ''; ?></p>
        </div>

        <div class="trend-categories">
            <div class="trend-category">
                <h3><?= $content[291][$key] ?? ''; ?></h3>
                <div class="trend-content">
                    <ul class="trend-list">
                        <li><strong><?= $content[292][$key] ?? ''; ?>:</strong> <?= $content[293][$key] ?? ''; ?></li>
                        <li><strong><?= $content[294][$key] ?? ''; ?>:</strong> <?= $content[295][$key] ?? ''; ?></li>
                        <li><strong><?= $content[296][$key] ?? ''; ?>:</strong> <?= $content[297][$key] ?? ''; ?></li>
                        <li><strong><?= $content[298][$key] ?? ''; ?>:</strong> <?= $content[299][$key] ?? ''; ?></li>
                    </ul>
                </div>
            </div>

            <div class="trend-category">
                <h3><?= $content[300][$key] ?? ''; ?></h3>
                <div class="trend-content">
                    <ul class="trend-list">
                        <li><strong><?= $content[301][$key] ?? ''; ?>:</strong> <?= $content[302][$key] ?? ''; ?></li>
                        <li><strong><?= $content[303][$key] ?? ''; ?>:</strong> <?= $content[304][$key] ?? ''; ?></li>
                        <li><strong><?= $content[305][$key] ?? ''; ?>:</strong> <?= $content[306][$key] ?? ''; ?></li>
                        <li><strong><?= $content[307][$key] ?? ''; ?>:</strong> <?= $content[308][$key] ?? ''; ?></li>
                    </ul>
                </div>
            </div>

            <div class="trend-category">
                <h3><?= $content[309][$key] ?? ''; ?></h3>
                <div class="trend-content">
                    <ul class="trend-list">
                        <li><strong><?= $content[310][$key] ?? ''; ?>:</strong> <?= $content[311][$key] ?? ''; ?></li>
                        <li><strong><?= $content[312][$key] ?? ''; ?>:</strong> <?= $content[313][$key] ?? ''; ?></li>
                        <li><strong><?= $content[314][$key] ?? ''; ?>:</strong> <?= $content[315][$key] ?? ''; ?></li>
                        <li><strong><?= $content[316][$key] ?? ''; ?>:</strong> <?= $content[317][$key] ?? ''; ?></li>
                    </ul>
                </div>
            </div>

            <div class="trend-category">
                <h3><?= $content[318][$key] ?? ''; ?></h3>
                <div class="trend-content">
                    <ul class="trend-list">
                        <li><strong><?= $content[319][$key] ?? ''; ?>:</strong> <?= $content[320][$key] ?? ''; ?></li>
                        <li><strong><?= $content[321][$key] ?? ''; ?>:</strong> <?= $content[322][$key] ?? ''; ?></li>
                        <li><strong><?= $content[323][$key] ?? ''; ?>:</strong> <?= $content[324][$key] ?? ''; ?></li>
                        <li><strong><?= $content[325][$key] ?? ''; ?>:</strong> <?= $content[326][$key] ?? ''; ?></li>
                    </ul>
                </div>
            </div>

            <div class="trend-category">
                <h3><?= $content[327][$key] ?? ''; ?></h3>
                <div class="trend-content">
                    <ul class="trend-list">
                        <li><strong><?= $content[328][$key] ?? ''; ?>:</strong> <?= $content[329][$key] ?? ''; ?></li>
                        <li><strong><?= $content[330][$key] ?? ''; ?>:</strong> <?= $content[331][$key] ?? ''; ?></li>
                        <li><strong><?= $content[332][$key] ?? ''; ?>:</strong> <?= $content[333][$key] ?? ''; ?></li>
                        <li><strong><?= $content[334][$key] ?? ''; ?>:</strong> <?= $content[335][$key] ?? ''; ?></li>
                    </ul>
                </div>
            </div>

            <div class="trend-category">
                <h3><?= $content[336][$key] ?? ''; ?></h3>
                <div class="trend-content">
                    <ul class="trend-list">
                        <li><strong><?= $content[337][$key] ?? ''; ?>:</strong> <?= $content[338][$key] ?? ''; ?></li>
                        <li><strong><?= $content[339][$key] ?? ''; ?>:</strong> <?= $content[340][$key] ?? ''; ?></li>
                        <li><strong><?= $content[341][$key] ?? ''; ?>:</strong> <?= $content[342][$key] ?? ''; ?></li>
                        <li><strong><?= $content[343][$key] ?? ''; ?>:</strong> <?= $content[344][$key] ?? ''; ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="future-implications">
            <h3><?= $content[345][$key] ?? ''; ?></h3>
            <p><?= $content[346][$key] ?? ''; ?></p>
            <ul class="preparation-list">
                <li><?= $content[347][$key] ?? ''; ?></li>
                <li><?= $content[348][$key] ?? ''; ?></li>
                <li><?= $content[349][$key] ?? ''; ?></li>
                <li><?= $content[350][$key] ?? ''; ?></li>
                <li><?= $content[351][$key] ?? ''; ?></li>
            </ul>
        </div>
    </section>
</div>
