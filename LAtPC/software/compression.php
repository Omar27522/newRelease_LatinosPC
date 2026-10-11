<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;
?>
<article class="fullbar">
    <?php if (function_exists('sw_breadCrumbs')) { sw_breadCrumbs(); } ?>
    <h1><?= $content[116][$key] ?? ''; ?></h1>
    <div class="blurb">
        <section class="intro">
            <p tabindex="0" class="selection">
                <?= $content[117][$key] ?? ''; ?>
            </p>
        </section>

        <section class="timeline">
            <h2><?= $content[118][$key] ?? ''; ?></h2>
            <div class="timeline-grid">
                <div class="timeline-item" tabindex="0">
                    <h3><?= $content[119][$key] ?? ''; ?></h3>
                    <p class="selection">
                        <?= $content[120][$key] ?? ''; ?>
                    </p>
                </div>

                <div class="timeline-item" tabindex="0">
                    <h3><?= $content[121][$key] ?? ''; ?></h3>
                    <p class="selection">
                        <?= $content[122][$key] ?? ''; ?>
                    </p>
                </div>

                <div class="timeline-item" tabindex="0">
                    <h3><?= $content[123][$key] ?? ''; ?></h3>
                    <p class="selection">
                        <?= $content[124][$key] ?? ''; ?>
                    </p>
                </div>

                <div class="timeline-item" tabindex="0">
                    <h3><?= $content[125][$key] ?? ''; ?></h3>
                    <p class="selection">
                        <?= $content[126][$key] ?? ''; ?>
                    </p>
                </div>
            </div>
        </section>

        <section class="compression-formats">
            <h2><?= $content[127][$key] ?? ''; ?></h2>
            <div class="formats-grid">
                <details class="format-card">
                    <summary tabindex="0" class="selection"><?= $content[129][$key] ?? ''; ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4><?= $content[128][$key] ?? ''; ?></h4>
                            <ul>
                                <li><?= $content[130][$key] ?? ''; ?></li>
                                <li><?= $content[131][$key] ?? ''; ?></li>
                                <li><?= $content[132][$key] ?? ''; ?></li>
                                <li><?= $content[133][$key] ?? ''; ?></li>
                            </ul>
                            <p><?= $content[134][$key] ?? ''; ?></p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection"><?= $content[135][$key] ?? ''; ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4><?= $content[128][$key] ?? ''; ?></h4>
                            <ul>
                                <li><?= $content[136][$key] ?? ''; ?></li>
                                <li><?= $content[137][$key] ?? ''; ?></li>
                                <li><?= $content[138][$key] ?? ''; ?></li>
                                <li><?= $content[139][$key] ?? ''; ?></li>
                            </ul>
                            <p><?= $content[140][$key] ?? ''; ?></p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection"><?= $content[141][$key] ?? ''; ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4><?= $content[128][$key] ?? ''; ?></h4>
                            <ul>
                                <li><?= $content[142][$key] ?? ''; ?></li>
                                <li><?= $content[143][$key] ?? ''; ?></li>
                                <li><?= $content[144][$key] ?? ''; ?></li>
                                <li><?= $content[145][$key] ?? ''; ?></li>
                            </ul>
                            <p><?= $content[146][$key] ?? ''; ?></p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection"><?= $content[147][$key] ?? ''; ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4><?= $content[128][$key] ?? ''; ?></h4>
                            <ul>
                                <li><?= $content[148][$key] ?? ''; ?></li>
                                <li><?= $content[149][$key] ?? ''; ?></li>
                                <li><?= $content[150][$key] ?? ''; ?></li>
                                <li><?= $content[151][$key] ?? ''; ?></li>
                            </ul>
                            <p><?= $content[152][$key] ?? ''; ?></p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection"><?= $content[153][$key] ?? ''; ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4><?= $content[128][$key] ?? ''; ?></h4>
                            <ul>
                                <li><?= $content[154][$key] ?? ''; ?></li>
                                <li><?= $content[155][$key] ?? ''; ?></li>
                                <li><?= $content[156][$key] ?? ''; ?></li>
                                <li><?= $content[157][$key] ?? ''; ?></li>
                            </ul>
                            <p><?= $content[158][$key] ?? ''; ?></p>
                        </div>
                    </fieldset>
                </details>
            </div>
        </section>

        <section class="other-compression">
            <h2><?= $content[159][$key] ?? ''; ?></h2>
            <div class="formats-grid">
                <details class="format-card">
                    <summary tabindex="0" class="selection"><?= $content[165][$key] ?? ''; ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4><?= $content[160][$key] ?? ''; ?></h4>
                            <ul>
                                <li><?= $content[166][$key] ?? ''; ?></li>
                                <li><?= $content[167][$key] ?? ''; ?></li>
                                <li><?= $content[168][$key] ?? ''; ?></li>
                                <li><?= $content[169][$key] ?? ''; ?></li>
                            </ul>
                            <p><?= $content[170][$key] ?? ''; ?></p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection"><?= $content[171][$key] ?? ''; ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4><?= $content[160][$key] ?? ''; ?></h4>
                            <ul>
                                <li><?= $content[172][$key] ?? ''; ?></li>
                                <li><?= $content[173][$key] ?? ''; ?></li>
                                <li><?= $content[174][$key] ?? ''; ?></li>
                                <li><?= $content[175][$key] ?? ''; ?></li>
                            </ul>
                            <p><?= $content[176][$key] ?? ''; ?></p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection"><?= $content[177][$key] ?? ''; ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4><?= $content[161][$key] ?? ''; ?></h4>
                            <ul>
                                <li><?= $content[178][$key] ?? ''; ?></li>
                                <li><?= $content[179][$key] ?? ''; ?></li>
                                <li><?= $content[180][$key] ?? ''; ?></li>
                                <li><?= $content[181][$key] ?? ''; ?></li>
                            </ul>
                            <p><?= $content[182][$key] ?? ''; ?></p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection"><?= $content[183][$key] ?? ''; ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4><?= $content[162][$key] ?? ''; ?></h4>
                            <ul>
                                <li><?= $content[184][$key] ?? ''; ?></li>
                                <li><?= $content[185][$key] ?? ''; ?></li>
                                <li><?= $content[186][$key] ?? ''; ?></li>
                                <li><?= $content[187][$key] ?? ''; ?></li>
                            </ul>
                            <p><?= $content[188][$key] ?? ''; ?></p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection"><?= $content[189][$key] ?? ''; ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4><?= $content[163][$key] ?? ''; ?></h4>
                            <ul>
                                <li><?= $content[190][$key] ?? ''; ?></li>
                                <li><?= $content[191][$key] ?? ''; ?></li>
                                <li><?= $content[192][$key] ?? ''; ?></li>
                                <li><?= $content[193][$key] ?? ''; ?></li>
                            </ul>
                            <p><?= $content[194][$key] ?? ''; ?></p>
                        </div>
                    </fieldset>
                </details>

                <details class="format-card">
                    <summary tabindex="0" class="selection"><?= $content[195][$key] ?? ''; ?></summary>
                    <fieldset tabindex="0" class="selection">
                        <div class="format-content">
                            <h4><?= $content[164][$key] ?? ''; ?></h4>
                            <ul>
                                <li><?= $content[196][$key] ?? ''; ?></li>
                                <li><?= $content[197][$key] ?? ''; ?></li>
                                <li><?= $content[198][$key] ?? ''; ?></li>
                                <li><?= $content[199][$key] ?? ''; ?></li>
                            </ul>
                            <p><?= $content[200][$key] ?? ''; ?></p>
                        </div>
                    </fieldset>
                </details>
            </div>
        </section>
    </div>
</article>
