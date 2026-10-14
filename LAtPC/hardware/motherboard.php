<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('hardware');
global $content, $key;
?>
<?php include_once('navBarHW.php'); ?>
<article class="container fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <a href="./#cpu"><h1 id="board"><?= $content[268][$key] ?? ''; ?></h1></a>
    <h2><?= $content[269][$key] ?? ''; ?></h2>
    <h3>
        <div class="spacer_shape">
            <div class="carousel-group fl" style="margin-right: 15px; margin-bottom: 10px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= htmlspecialchars($content[268][$key] ?? 'Motherboard'); ?>">
                            <img src="../images/hardware/hw/mobo_thumb.webp"
                                 alt="<?= htmlspecialchars($content[268][$key] ?? 'Motherboard'); ?>"
                                 title="Motherboard"
                                 loading="lazy">
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
                </div>
            </div>
            <ul class="colms">
                <ol><a href="https://www.hp.com/us-en/shop/tech-takes/how-to-choose-a-motherboard" title="Tech-Takes">HP</a></ol>
                <ol><a href="https://www.dell.com/en-us/shop/motherboard-processor-bundles/ar/7960" title="Motherboard/Processor Bundles">Dell</a></ol>
                <ol><a href="https://electronics.sony.com/FAQ" title="Sony Store FAQs">Sony</a></ol>
                <ol><a href="https://www.ibm.com/products/z16" title="IBM Z16 Mainframe">IBM</a></ol>
                <ol><a href="https://www.acer.com/us-en/support" title="Support">Acer</a></ol>
                <ol><a href="https://www.lenovo.com/us/en/glossary/what-is-a-motherboard/" title="Motherbaord">Lenovo</a></ol>
                <ol><a href="https://support.apple.com/?cid=gn-ols-home-hp-tab" title="Support">Apple</a></ol>
                <li><a href="https://www.asus.com/us/motherboards-components/motherboards/all-series/" title="Products" class="as">ASUS</a></li>
                <li><a href="https://www.gigabyte.com/Motherboard" title="Motherbaords" class="as">Gigabyte</a></li>
                <li><a href="https://www.msi.com/Motherboards/Products" title="Motherbaords" class="as">MSI</a></li>
                <li><a href="https://www.asrock.com/mb/" title="Motherboards" class="as">ASRock</a></li>
                <li><a href="https://www.evga.com/products/productlist.aspx?type=1" title="Motherboards" class="as">EVGA</a></li>
                <li><a href="https://www.biostar.com.tw/app/en/mb/index.php" title="Motherboard for Gaming" class="as">Biostar</a></li>
                <li><a href="https://www.supermicro.com/en/products/motherboards" title="High-End Motherboards" class="as">Supermicro</a></li>
                <li><a href="https://www.tyan.com/MB@en-US@0@1~SC" title="Products" class="as">Tyan</a></li>
                <li><a href="https://www.ecs.com.tw/en/about/product-category" title="Product Category" class="as">ECS</a></li>
            </ul>
        </div>
    </h3>
    <h3><?= $content[270][$key] ?? ''; ?></h3>
    <div class="spacer_shape">
        <h3><?= $content[271][$key] ?? ''; ?></h3>
    </div>
</article>

<article class="article fullbar">
    <h2>
        <?= $content[272][$key] ?? ''; ?>
        <br />
        <div class="i_t"><?= $content[273][$key] ?? ''; ?></div>
    </h2>
    <h3 class="colms2">
        <div class="card2">
            <strong class="_purple">Overclocking support:</strong> <?= $content[274][$key] ?? ''; ?>
        </div>
        <br />
        <div class="card2">
            <strong class="_pink">Multiple GPU support:</strong> <?= $content[275][$key] ?? ''; ?>
        </div>
        <br />
        <div class="card2">
            <strong class="_green">High-speed data interfaces:</strong> <?= $content[276][$key] ?? ''; ?>
        </div>
        <br />
        <div class="card2">
            <strong class="_yell">Network interfaces:</strong> <?= $content[277][$key] ?? ''; ?>
        </div>
        <br />
        <div class="card2">
            <strong class="_orange">Audio features:</strong> <?= $content[278][$key] ?? ''; ?>
        </div>
        <br />
        <div class="card2">
            <strong>RGB lighting and customization:</strong> <?= $content[279][$key] ?? ''; ?>
        </div>
        <br />
        <div class="card2">
            <strong class="_red">Power delivery:</strong> <?= $content[280][$key] ?? ''; ?>
        </div>
        <br />
        <div class="card2">
            <strong class="_tiel">BIOS and firmware features:</strong> <?= $content[281][$key] ?? ''; ?>
        </div>
    </h3>
    <h3>
        <div class="card2">
            <strong class="_purple"><?= $content[282][$key] ?? ''; ?></strong>
            <div class="i_t"><?= $content[283][$key] ?? ''; ?></div>
            <div class="i_t"><?= $content[284][$key] ?? ''; ?></div>
            <div class="i_t"><?= $content[285][$key] ?? ''; ?></div>
            <div class="i_t"><?= $content[286][$key] ?? ''; ?></div>
        </div>
    </h3>
    <h2><?= $content[287][$key] ?? ''; ?></h2>

    <template id="carousel-images">
        <?php
        $carouselItems = [
            [
                'original' => '../images/hardware/hw/mobo.jpg',
                'webp'     => '../images/hardware/hw/mobo.webp',
                'title'    => $content[268][$key] ?? 'Motherboard',
                'link'     => 'https://en.wikipedia.org/wiki/Motherboard'
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
