<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('hardware');
global $content, $key;
?>
<?php include_once('navBarHW.php'); ?>
<article class="fullbar article">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <a href="./#cpu">
        <h1 id="psu"><?= $content[288][$key] ?? ''; ?></h1>
    </a>
    <h2><?= $content[289][$key] ?? ''; ?></h2>
    <p>
        <img src="../images/hardware/icons/80_Plus_Standard_thumb.webp" class="rtl" alt="80 Plus Standard" loading="lazy">
        <img src="../images/hardware/icons/80_Plus_Bronze_thumb.webp" class="rtl" alt="80 Plus Bronze" loading="lazy">
        <img src="../images/hardware/icons/80_Plus_Silver_thumb.webp" class="rtl" alt="80 Plus Silver" loading="lazy">
        <img src="../images/hardware/icons/80_Plus_Gold_thumb.webp" class="rtl" alt="80 Plus Gold" loading="lazy">
        <img src="../images/hardware/icons/80_Plus_Platinum_thumb.webp" class="rtl" alt="80 Plus Platinum" loading="lazy">
        <img src="../images/hardware/icons/80_Plus_Titanium_thumb.webp" class="rtl" alt="80 Plus Titanium" loading="lazy">
    </p>
    <h2><a href="https://en.wikipedia.org/wiki/Category:Computer_power_supply_unit_manufacturers" class="psu"><?= $content[290][$key] ?? ''; ?></a></h2>
    <p><?= $content[291][$key] ?? ''; ?></p>
    <div class="carousel-group fl" style="margin-right: 15px; margin-bottom: 10px;">
        <div class="multi-link-container">
            <div class="thumbnail-container">
                <span tabindex="0" class="linked-text-img" role="button" aria-label="Standard ATX Power Supply">
                    <img src="../images/hardware/hw/psu_thumb.webp" alt="Power Supply Unit" title="Power Supply Unit" loading="lazy">
                </span>
            </div>
            <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
        </div>
    </div>
    <p><?= $content[292][$key] ?? ''; ?></p>
    <div class="carousel-group img_rtl" style="margin-left: 15px; margin-bottom: 10px;">
        <div class="multi-link-container">
            <div class="thumbnail-container">
                <span tabindex="0" class="linked-text-img" role="button" aria-label="Modular Power Supply Unit">
                    <img src="../images/hardware/hw/psu2_thumb.webp" alt="Modular Power Supply" title="Modular PSU" loading="lazy">
                </span>
            </div>
            <div class="image-dialog" data-carousel="true" data-start-index="1"></div>
        </div>
    </div>
    <h2><?= $content[293][$key] ?? ''; ?></h2>
</article>

<article class="fullbar article">
    <p><?= $content[294][$key] ?? ''; ?></p>
    <div class="carousel-group img_rtl" style="margin-left: 15px; margin-bottom: 10px;">
        <div class="multi-link-container">
            <div class="thumbnail-container">
                <span tabindex="0" class="linked-text-img" role="button" aria-label="Portable Power Supply">
                    <img src="../images/hardware/hw/portablepower_thumb.webp" alt="Portable Power Supply" title="Portable PSU" loading="lazy">
                </span>
            </div>
            <div class="image-dialog" data-carousel="true" data-start-index="2"></div>
        </div>
    </div>
    <p><?= $content[295][$key] ?? ''; ?></p>
    <div class="carousel-group fl" style="margin-right: 15px; margin-bottom: 10px;">
        <div class="multi-link-container">
            <div class="thumbnail-container">
                <span tabindex="0" class="linked-text-img" role="button" aria-label="Slim SFX Power Supply">
                    <img src="../images/hardware/hw/slimpower_thumb.webp" alt="Slim Power Supply" title="Slim SFX PSU" loading="lazy">
                </span>
            </div>
            <div class="image-dialog" data-carousel="true" data-start-index="3"></div>
        </div>
    </div>
    <p><?= $content[296][$key] ?? ''; ?></p>
    <div class="spacer_shape">
        <p><?= $content[297][$key] ?? ''; ?></p>
    </div><br />
    <h2><?= $content[298][$key] ?? ''; ?></h2>
    <ul class="colms2">
        <ol>
            <a href="https://www.intel.com/content/www/us/en/gaming/resources/power-supply.html#:~:text=You%20need%20to%20consider%20form,the%20time%20to%20choose%20wisely." title="Intel"><span class="psu">Intel</span></a>
        </ol><br />
        <ol>
            <a href="https://www.gamecrate.com/hardware/how-to-choose-pc-power-supply-buying-guide" title="GamerCrate"><span class="psu">GameCrate</span></a>
        </ol><br />
        <ol>
            <a href="https://www.corsair.com/us/en/s/psu-family-choosing-a-psu" title="Corsair"><span class="psu">Corsair</span></a>
        </ol><br />
        <ol>
            <a href="https://www.pcworld.com/article/456490/how-to-pick-the-best-pc-power-supply.html" title="PCWorld"><span class="psu">PCWorld</span></a>
        </ol><br />
        <ol>
            <a href="https://www.msi.com/power-supply-calculator" title="MSI"><span class="psu">MSI Power Supply Calculator</span></a>
        </ol><br />
        <ol>
            <a href="https://pcper.com/pcper-article/choose-right-power-supply-pc/" title="PCper"><span class="psu">PC-Perspective</span></a>
        </ol><br />
        <ol>
            <a href="https://pcpartpicker.com/forums/topic/81828-confused-about-estimated-wattage" title="Forums"><span class="psu">PC Part Picker Forums</span></a>
        </ol>
    </ul>
    <a href="https://www.tomshardware.com/reviews/best-psus,4229.html" title="best PSUs of 2023" class="psu"><?= $content[299][$key] ?? ''; ?></a>
    <table style="table-layout:fixed;width:468pt">
        <colgroup>
            <col />
            <col />
        </colgroup>
        <tbody>
            <tr style="height:42pt">
                <td style="vertical-align:top;overflow:hidden;overflow-wrap:break-word;">
                    <p>[Free Research Preview. ChatGPT March 23 Version 2023]</p>
                    <hr />
                </td>
            </tr>
        </tbody>
    </table>

    <template id="carousel-images">
        <?php
        $carouselItems = [
            [
                'original' => '../images/hardware/hw/psu.jpg',
                'webp'     => '../images/hardware/hw/psu.webp',
                'title'    => 'Standard ATX Power Supply',
                'link'     => 'https://en.wikipedia.org/wiki/Power_supply_unit_(computer)'
            ],
            [
                'original' => '../images/hardware/hw/psu2.png',
                'webp'     => '../images/hardware/hw/psu2.webp',
                'title'    => 'Modular Power Supply Unit',
                'link'     => 'https://en.wikipedia.org/wiki/Power_supply_unit_(computer)'
            ],
            [
                'original' => '../images/hardware/hw/portablepower.png',
                'webp'     => '../images/hardware/hw/portablepower.webp',
                'title'    => 'Portable Power Supply',
                'link'     => 'https://en.wikipedia.org/wiki/Power_supply_unit_(computer)'
            ],
            [
                'original' => '../images/hardware/hw/slimpower.png',
                'webp'     => '../images/hardware/hw/slimpower.webp',
                'title'    => 'Slim SFX Power Supply',
                'link'     => 'https://en.wikipedia.org/wiki/Power_supply_unit_(computer)'
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
</article>
<!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** Power Supply-->