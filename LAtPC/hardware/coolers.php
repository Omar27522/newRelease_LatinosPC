<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('hardware');
global $content, $key;

$links = [
    'https://en.wikipedia.org/wiki/Computer_cooling',
    'https://www.youtube.com/watch?v=6AYdAl7Gxrc',
    'https://youtube.com/clip/UgkxCtnGcjvvzs7VShBGNBL_6luLxB5T1rSI?si=82vLKDTdjHML9d4O',
    'https://www.youtube.com/watch?v=FPFE7i7bz9Y',
    'https://en.wikipedia.org/wiki/Doppler_cooling',
    'https://en.wikipedia.org/wiki/Sisyphus_cooling',
    'https://en.wikipedia.org/wiki/Evaporative_cooling_(atomic_physics)',
    'https://en.wikipedia.org/wiki/Thermoelectric_effect',
];
?>
<?php include_once('navBarHW.php'); ?>
<article class="hero4 container">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <section class="fullbar">
        <a href="./#peripherals">
            <h2 id="cooler"><?= $content[411][$key] ?? ''; ?></h2>
        </a>

        <p>
            <a href="#fans"><?= $content[412][$key] ?? ''; ?></a> 
            <a href="#liquid-coolers"><?= $content[413][$key] ?? ''; ?></a> 
            <a href="#solid-state-coolers"><?= $content[414][$key] ?? ''; ?></a>&nbsp;
            <a href="#TECS"><?= $content[415][$key] ?? ''; ?></a>&nbsp;
            <a href="#phase-change-cooling"><?= $content[416][$key] ?? ''; ?></a>
        </p>
        <p class="container fullbar">
            <a href="<?= $links[0]; ?>" style="font-size: x-large;"><?= $content[417][$key] ?? ''; ?></a>
            <?= $content[418][$key] ?? ''; ?>
        </p>
        <div class="container fullbar">
            <div class="carousel-group rtl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="Chilling Cooler">
                            <img src="../images/hardware/hw/cooling/coolers_thumb.webp"
                                 alt="Chilling Cooler"
                                 title="Chilling Cooler"
                                 loading="lazy" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
                </div>
            </div>
            <p>
                <span style="font-size: x-large;"><?= $content[419][$key] ?? ''; ?></span>
                <?= $content[420][$key] ?? ''; ?>
            </p>
            <p>
                <span style="font-size: x-large;"><?= $content[421][$key] ?? ''; ?></span>
                <?= $content[422][$key] ?? ''; ?>
            </p>
            <p>
                <span style="font-size: x-large;"><?= $content[423][$key] ?? ''; ?></span>
                <?= $content[424][$key] ?? ''; ?>
            </p>
            <p>&nbsp;
                <a href="<?= $links[1]; ?>" title="VIDEO"><?= $content[425][$key] ?? ''; ?></a>
                <?= $content[426][$key] ?? ''; ?>
            </p>
            <p>&nbsp;
                <a href="<?= $links[2]; ?>" title="VIDEO"><?= $content[427][$key] ?? ''; ?></a>
                <?= $content[428][$key] ?? ''; ?>
            </p>
            <p>
                <a href="<?= $links[3]; ?>"><?= $content[429][$key] ?? ''; ?></a>
                <?= $content[430][$key] ?? ''; ?>
            </p>
            <p>
                <span style="font-size: x-large;"><?= $content[431][$key] ?? ''; ?></span>
                <?= $content[432][$key] ?? ''; ?>
            </p>
        </div>
        <details>
            <summary style="text-align: center;" class="hero4 cooler_button cooler2_button">
                <h2 id="Laser-Cooling" style="display: inline-block;">
                    <?= $content[433][$key] ?? ''; ?>
                </h2>
            </summary>
            <fieldset class="container card2">
                <div class="carousel-group rtl">
                    <div class="multi-link-container">
                        <div class="thumbnail-container">
                            <span tabindex="0" class="linked-text-img" role="button" aria-label="Laser Cooling">
                                <img src="../images/hardware/hw/cooling/lasers_thumb.webp"
                                     alt="Laser Cooling"
                                     title="Laser Cooling"
                                     loading="lazy"
                                     style="max-height: 120px; width: auto;" />
                            </span>
                        </div>
                        <div class="image-dialog" data-carousel="true" data-start-index="1"></div>
                    </div>
                </div>
                <p>
                    <?= $content[434][$key] ?? ''; ?>
                </p>
            </fieldset>
            <fieldset class="container card2">
                <legend>
                    <p><?= $content[435][$key] ?? ''; ?></p>
                </legend>
                <dl>
                    <dt>
                        <a href="<?= $links[4]; ?>"><?= $content[436][$key] ?? ''; ?></a>
                    </dt>
                    <dd>
                        <?= $content[437][$key] ?? ''; ?>
                    </dd>
                    <dt>
                        <a href="<?= $links[5]; ?>"><?= $content[438][$key] ?? ''; ?></a>
                    </dt>
                    <dd>
                        <?= $content[439][$key] ?? ''; ?>
                    </dd>
                    <dt>
                        <a href="<?= $links[6]; ?>"><?= $content[440][$key] ?? ''; ?></a>
                    </dt>
                    <dd>
                        <?= $content[441][$key] ?? ''; ?>
                    </dd>
                </dl>
            </fieldset>
        </details>
        <p class="container card2">
            <?= $content[442][$key] ?? ''; ?>
        </p>
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** Cooling Devices -->
        <br />
    </section>
    <section class="fullbar">
        <details>
            <summary class="cooler_button cooler2_button center">
                <h2><?= $content[443][$key] ?? ''; ?></h2>
            </summary>
            <ul class="container colms2">
                <li class="card2">
                    <h2 id="fans"><?= $content[444][$key] ?? ''; ?></h2>
                    <p><?= $content[445][$key] ?? ''; ?></p>
                    <div class="carousel-group fl">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="Air Cooling">
                                    <img src="../images/hardware/hw/cooling/aircool_thumb.webp"
                                         alt="Air Cooling"
                                         title="Air Cooling"
                                         loading="lazy"
                                         style="max-height: 100px; width: auto;" />
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="2"></div>
                        </div>
                    </div>
                    <p><?= $content[446][$key] ?? ''; ?></p>
                </li>
                <li class="card2">
                    <h2 id="liquid-coolers"><?= $content[447][$key] ?? ''; ?></h2>
                    <p><?= $content[448][$key] ?? ''; ?></p>
                    <div class="carousel-group fl">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="Liquid Cooling">
                                    <img src="../images/hardware/hw/cooling/liquid_thumb.webp"
                                         alt="Liquid Cooling"
                                         title="Liquid Cooling"
                                         loading="lazy"
                                         style="max-height: 100px; width: auto;" />
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="3"></div>
                        </div>
                    </div>
                    <p><?= $content[449][$key] ?? ''; ?></p>
                </li>
                <li class="card2">
                    <h2 id="solid-state-coolers"><?= $content[450][$key] ?? ''; ?></h2>
                    <p><?= $content[451][$key] ?? ''; ?></p>
                    <div class="carousel-group fl">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="Solid-State Cooling">
                                    <img src="../images/hardware/hw/cooling/ssc_thumb.webp"
                                         alt="Solid-State Cooling"
                                         title="Solid-State Cooling"
                                         loading="lazy"
                                         style="max-height: 100px; width: auto;" />
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="4"></div>
                        </div>
                    </div>
                    <p><?= $content[452][$key] ?? ''; ?></p>
                </li>
                <li class="card2">
                    <h2 id="TECS"><?= $content[453][$key] ?? ''; ?></h2>
                    <p>
                        <?= $content[454][$key] ?? ''; ?>
                        <a href="<?= $links[7]; ?>"><?= $content[455][$key] ?? ''; ?></a>
                        <?= $content[456][$key] ?? ''; ?>
                    </p>
                    <div class="carousel-group rtl">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="Thermoelectric Coolers">
                                    <img src="../images/hardware/hw/cooling/tec_thumb.webp"
                                         alt="TECs"
                                         title="Thermoelectric Coolers"
                                         loading="lazy"
                                         style="max-height: 100px; width: auto;" />
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="5"></div>
                        </div>
                    </div>
                    <p><?= $content[457][$key] ?? ''; ?></p>
                </li>
                <li class="card2">
                    <h2 id="hybrid-coolers"><?= $content[458][$key] ?? ''; ?></h2>
                    <p><?= $content[459][$key] ?? ''; ?></p>
                    <div class="carousel-group rtl">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="Hybrid Cooling">
                                    <img src="../images/hardware/hw/cooling/hybrid_thumb.webp"
                                         alt="Hybrid Cooling"
                                         title="Hybrid Cooling"
                                         loading="lazy"
                                         style="max-height: 100px; width: auto;" />
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="6"></div>
                        </div>
                    </div>
                    <p><?= $content[460][$key] ?? ''; ?></p>
                </li>
                <li class="card2">
                    <h2 id="phase-change-cooling"><?= $content[461][$key] ?? ''; ?></h2>
                    <p><?= $content[462][$key] ?? ''; ?></p>
                    <div class="carousel-group rtl">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="Phase Change Cooling">
                                    <img src="../images/hardware/hw/cooling/pcc_thumb.webp"
                                         alt="Phase Change Cooling"
                                         title="Phase Change Cooling"
                                         loading="lazy"
                                         style="max-height: 100px; width: auto;" />
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="7"></div>
                        </div>
                    </div>
                    <p><?= $content[463][$key] ?? ''; ?></p>
                </li>
            </ul>
        </details>
        <dl>
            <dt>
                <h2><?= $content[464][$key] ?? ''; ?></h2>
            </dt>
            <dd>
                <strong><?= $content[465][$key] ?? ''; ?></strong>
                <?= $content[466][$key] ?? ''; ?>
                <hr>
            </dd>
            <dd>
                <strong><?= $content[467][$key] ?? ''; ?></strong>
                <?= $content[468][$key] ?? ''; ?>
                <hr>
            </dd>
            <dd>
                <strong><?= $content[469][$key] ?? ''; ?></strong>
                <?= $content[470][$key] ?? ''; ?>
            </dd>
            <dt>
                <h2><?= $content[471][$key] ?? ''; ?></h2>
            </dt>
            <dd><?= $content[472][$key] ?? ''; ?></dd>
            <dd><?= $content[473][$key] ?? ''; ?></dd>
        </dl>
        <h2><?= $content[474][$key] ?? ''; ?></h2>
        <p><?= $content[475][$key] ?? ''; ?></p>
    </section>
</article>

    <!-- Carousel Modal Data Template -->
    <template id="carousel-images">
        <?php
        $carouselItems = [
            [
                'original' => '../images/hardware/hw/cooling/coolers.jpg',
                'webp'     => '../images/hardware/hw/cooling/coolers.webp',
                'title'    => 'Chilling Cooler',
                'link'     => $links[0]
            ],
            [
                'original' => '../images/hardware/hw/cooling/lasers.jpg',
                'webp'     => '../images/hardware/hw/cooling/lasers.webp',
                'title'    => 'Laser Cooling',
                'link'     => $links[4]
            ],
            [
                'original' => '../images/hardware/hw/cooling/aircool.jpg',
                'webp'     => '../images/hardware/hw/cooling/aircool.webp',
                'title'    => 'Air Cooling',
                'link'     => 'https://en.wikipedia.org/wiki/Computer_cooling#Air_cooling'
            ],
            [
                'original' => '../images/hardware/hw/cooling/liquid.jpg',
                'webp'     => '../images/hardware/hw/cooling/liquid.webp',
                'title'    => 'Liquid Cooling',
                'link'     => 'https://en.wikipedia.org/wiki/Water_cooling'
            ],
            [
                'original' => '../images/hardware/hw/cooling/ssc.jpg',
                'webp'     => '../images/hardware/hw/cooling/ssc.webp',
                'title'    => 'Solid-State Cooling',
                'link'     => 'https://en.wikipedia.org/wiki/Thermoelectric_cooling'
            ],
            [
                'original' => '../images/hardware/hw/cooling/tec.jpg',
                'webp'     => '../images/hardware/hw/cooling/tec.webp',
                'title'    => 'Thermoelectric Coolers',
                'link'     => $links[7]
            ],
            [
                'original' => '../images/hardware/hw/cooling/hybrid.jpg',
                'webp'     => '../images/hardware/hw/cooling/hybrid.webp',
                'title'    => 'Hybrid Cooling',
                'link'     => 'https://en.wikipedia.org/wiki/Computer_cooling'
            ],
            [
                'original' => '../images/hardware/hw/cooling/pcc.jpg',
                'webp'     => '../images/hardware/hw/cooling/pcc.webp',
                'title'    => 'Phase Change Cooling',
                'link'     => 'https://en.wikipedia.org/wiki/Phase-change_cooling'
            ]
        ];

        foreach($carouselItems as $index => $item):
        ?>
        <div class="carousel-item" data-image-index="<?= $index; ?>">
            <a href="<?= $item['original']; ?>" target="_blank" rel="noopener">
                <img data-src="<?= $item['webp']; ?>"
                     src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'%3E%3C/svg%3E"
                     alt="<?= htmlspecialchars($item['title']); ?>">
            </a>
            <h4 class="img_link">
                <a href="<?= htmlspecialchars($item['link']); ?>" title="<?= htmlspecialchars($item['title']); ?>" target="_blank" rel="noopener">
                    <?= htmlspecialchars($item['title']); ?>
                </a>
            </h4>
        </div>
        <?php endforeach; ?>
    </template>
