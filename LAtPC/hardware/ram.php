<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('hardware');
global $content, $key;

$links = [
    'crucial' => 'https://www.crucial.com/products/memory',
    'kingston' => 'https://www.kingston.com/en/memory',
    'corsair' => 'https://www.corsair.com/us/en/Categories/Products/Memory/c/Cor_Products_Memory',
    'micron' => 'https://www.micron.com/products/dram',
    'pny' => 'https://www.pny.com/consumer/view-all-products/memory',
    'adata' => 'https://www.adata.com/us/consumer/category/computer-memory',
    'hyperx' => 'https://www.kingston.com/en/memory/gaming',
    'gskill' => 'https://www.gskill.com/products/1/165/Desktop-Memory',
    'teamgroup' => 'https://www.teamgroupinc.com/en/products/t-force/gaming-memory/'
];
?>
<section class="container fullbar"><?php include_once('navBarHW.php'); ?>
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
        <h2 id="ram"><a href="?hw/sw#cpu" title="Random Access Memory ">
            <?= $content[153][$key] ?? ''; ?>
        <img src="../images/fz/hw-ram_thumb.webp" alt="RAM" class="fl" height="60" width="60" loading="lazy" /></a></h2>
        <h3><?= $content[154][$key] ?? ''; ?></h3>
        <h2><?= $content[155][$key] ?? ''; ?></h2>
        <h3><?= $content[156][$key] ?? ''; ?></h3>
    </section>
    <article class="fullbar">
        <h2><?= $content[157][$key] ?? ''; ?></h2>
        <ul class="ex_menu">
            <h3 class="colms">
                <li class="ram"><a href="<?= $links['crucial'] ?>" title="Crucial"><?= $content[158][$key] ?? ''; ?></a></li><br />
                <li class="ram"><a href="<?= $links['kingston'] ?>" title="Kingston"><?= $content[159][$key] ?? ''; ?></a></li><br />
                <li class="ram"><a href="<?= $links['corsair'] ?>"><?= $content[160][$key] ?? ''; ?></a></li><br />
                <li class="ram"><a href="<?= $links['micron'] ?>" title="Micron"><?= $content[161][$key] ?? ''; ?></a></li><br />
                <li class="ram"><a href="<?= $links['pny'] ?>" title="PNY"><?= $content[162][$key] ?? ''; ?></a></li><br />
                <li class="ram"><a href="<?= $links['adata'] ?>" title="ADATA"><?= $content[163][$key] ?? ''; ?></a></li><br />
                <li class="ram"><a href="<?= $links['hyperx'] ?>" title="HyperX Fury"><?= $content[164][$key] ?? ''; ?></a></li><br />
                <li class="ram"><a href="<?= $links['gskill'] ?>" title="G.Skill"><?= $content[165][$key] ?? ''; ?></a></li><br />
                <li class="ram"><a href="<?= $links['teamgroup'] ?>" title="T-Force Gaming Memory"><?= $content[166][$key] ?? ''; ?></a></li>
            </h3>
        </ul>
        <h3><?= $content[167][$key] ?? ''; ?></h3>
        <h3>
            <ul class="colms">
                <li>2400 MHz</li>
                <li>2666 MHz</li>
                <li>3200 MHz</li>
                <li>3600 MHz</li>
                <li>3800 MHz</li>
                <li>4000 MHz</li>
                <li>4266 MHz</li>
                <li>4600 MHz</li>
                <li>4800 MHz</li>
            </ul>
        </h3><br />
        <h3><?= $content[168][$key] ?? ''; ?></h3>
        <div class="carousel-group img_rtl" style="margin-left: 15px; margin-bottom: 10px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="Random Access Memory Architecture">
                        <img src="../images/artificialintelligence/Introduction_thumb.webp"
                             alt="RAM Image"
                             title="Random Access Memory"
                             width="270"
                             loading="lazy" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
            </div>
        </div>
        <h3>
            <ul class="col c1">
                <li>5500 MHz</li>
                <li>5600 MHz</li>
                <li>6400 MHz</li>
                <li>7200 MHz</li>
                <li>8400 MHz</li>
            </ul>
        </h3>
    </article>
    <article class="fullbar">
        <h2><?= $content[169][$key] ?? ''; ?></h2>
        <h3><?= $content[170][$key] ?? ''; ?></h3>
        <h2><?= $content[171][$key] ?? ''; ?></h2><br />
    </article>

    <template id="carousel-images">
        <?php
        $carouselItems = [
            [
                'original' => '../images/artificialintelligence/Introduction.jpg',
                'webp'     => '../images/artificialintelligence/Introduction.webp',
                'title'    => 'Random Access Memory Architecture',
                'link'     => 'https://en.wikipedia.org/wiki/Random-access_memory'
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