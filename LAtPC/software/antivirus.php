<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;

$isSpanish = (isset($page) && is_object($page) && method_exists($page, 'getLang') && ($page->getLang() === 'es-419' || $page->getLang() === 'es'));
$sw = $isSpanish ? 'es' : 'en';

echo "<div class=\"fullbar\">";
if (function_exists('sw_breadCrumbs')) {
    sw_breadCrumbs();
}
echo "<h1 id=\"^\">" . htmlspecialchars($content[68][$key] ?? '') . "</h1>";
echo "</div>";
?>
<article class="hero4">
    <div class=" fullbar">
        <div style="display:inline-block;">
            <a href="../#software">
                <h2 id="title"><?= $content[68][$key] ?? ''; ?></h2>
            </a>
        </div>

        <p tabindex="0" class=""><?= $content[69][$key] ?? ''; ?><br />
            <div class="carousel-group rtl" style="margin: 0 0 15px 15px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img selection_2 card2" role="button" aria-label="Anti-Virus Protection &amp; Real-Time Scanning">
                            <img src="../images/programs/av_thumb.webp" height="210" width="240"
                                alt="Anti-Virus Protection &amp; Real-Time Scanning" loading="lazy" style="max-height: 210px; width: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
                </div>
            </div>
            <br /><?= $content[70][$key] ?? ''; ?><br /><br /><?= $content[71][$key] ?? ''; ?>
        </p>

        <section tabindex="0" class="">
            <p><strong><?= $content[72][$key] ?? ''; ?>:</strong>
                <?= $content[73][$key] ?? ''; ?></p>
            <p><strong><?= $content[74][$key] ?? ''; ?>:</strong>
                <?= $content[75][$key] ?? ''; ?></p>
            <p><strong><?= $content[76][$key] ?? ''; ?>:</strong>
                <?= $content[77][$key] ?? ''; ?></p>
            <div class="carousel-group fl" style="margin: 0 15px 15px 0;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img selection_2 card2" role="button" aria-label="App Store &amp; Cloud Distribution Security">
                            <img src="../images/ostore_thumb.webp" height="150" width="350"
                                alt="App Store &amp; Cloud Distribution Security" loading="lazy" style="max-height: 150px; width: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="1"></div>
                </div>
            </div>
            <p><strong><?= $content[78][$key] ?? ''; ?>:</strong>
                <?= $content[79][$key] ?? ''; ?></p>
        </section>

        <h2><?= $content[80][$key] ?? ''; ?></h2>
        <section>
            <p class="colms2">
                <span tabindex="0" class="selection_2">
                    <?= $content[81][$key] ?? ''; ?></span>
                <br /><br /><span tabindex="0" class="selection_2">
                    <?= $content[82][$key] ?? ''; ?></span>
                <br /><br /><span tabindex="0" class="selection_2">
                    <?= $content[83][$key] ?? ''; ?></span>
                <br /><br /><span tabindex="0" class="selection_2">
                    <?= $content[84][$key] ?? ''; ?></span>
                <br /><br /><span tabindex="0" class="selection_2">
                    <?= $content[85][$key] ?? ''; ?></span>
            </p>
            <div tabindex="0" class="">
                <p><strong><?= $content[86][$key] ?? ''; ?>:</strong>
                    <?= $content[87][$key] ?? ''; ?></p>
                <div class="carousel-group rtl" style="margin: 0 0 15px 15px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img selection_2 card2" role="button" aria-label="AI-Powered Heuristic Threat Detection">
                            <img src="../images/artificialintelligence/[4][4]/cyberfauna[4][4]1_thumb.webp" height="315" width="440"
                                alt="AI-Powered Heuristic Threat Detection" loading="lazy" style="max-height: 315px; width: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="2"></div>
                </div>
            </div>
                <p><strong><?= $content[88][$key] ?? ''; ?>:</strong>
                    <?= $content[89][$key] ?? ''; ?></p>
                <p><strong><?= $content[90][$key] ?? ''; ?>:</strong>
                    <?= $content[91][$key] ?? ''; ?></p>
                <p><strong><?= $content[92][$key] ?? ''; ?>:</strong>
                    <?= $content[93][$key] ?? ''; ?></p>
            </div>
        </section>
    </div><!-- /fullbar -->

    <div class="hero4 fullbar" style="margin-bottom: 0;">
        <h2><?= $content[94][$key] ?? ''; ?></h2>
        <section tabindex="0" class="selection">
            <p><strong><?= $content[95][$key] ?? ''; ?>:</strong>
                <?= $content[96][$key] ?? ''; ?></p>
            <p><strong><?= $content[97][$key] ?? ''; ?>:</strong>
                <?= $content[98][$key] ?? ''; ?></p>
            <p><strong><?= $content[99][$key] ?? ''; ?>:</strong>
                <?= $content[100][$key] ?? ''; ?></p>
            <p><strong><?= $content[101][$key] ?? ''; ?>:</strong>
                <?= $content[102][$key] ?? ''; ?></p>
            <p><strong><?= $content[103][$key] ?? ''; ?>:</strong>
                <?= $content[104][$key] ?? ''; ?></p>
        </section>

        <h2><?= $content[105][$key] ?? ''; ?></h2>
        <section tabindex="0" class="">
            <p><strong><?= $content[106][$key] ?? ''; ?></strong>
                <?= $content[107][$key] ?? ''; ?></p>
            <p><strong><?= $content[108][$key] ?? ''; ?></strong>
                <?= $content[109][$key] ?? ''; ?></p>
            <div class="carousel-group fl" style="margin: 0 15px 15px 0;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img selection_2 card2" role="button" aria-label="Enterprise Endpoint &amp; System Protection">
                            <img src="../images/storefront_thumb.webp" height="150" width="250"
                                alt="Enterprise Endpoint &amp; System Protection" loading="lazy" style="max-height: 150px; width: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="3"></div>
                </div>
            </div>
            <p><strong><?= $content[110][$key] ?? ''; ?></strong>
                <?= $content[111][$key] ?? ''; ?></p>
            <p><strong><?= $content[112][$key] ?? ''; ?></strong>
                <?= $content[113][$key] ?? ''; ?></p>
            <p><strong><?= $content[114][$key] ?? ''; ?></strong>
                <?= $content[115][$key] ?? ''; ?></p>
        </section>
    </div>
</article>

<!-- Carousel Modal Data Template -->
<template id="carousel-images">
    <?php
    $carouselItems = [
        [
            'original' => '../images/programs/av.jpg',
            'webp'     => '../images/programs/av.webp',
            'title'    => 'Anti-Virus Protection & Real-Time Scanning',
            'link'     => '#title'
        ],
        [
            'original' => '../images/ostore.jpg',
            'webp'     => '../images/ostore.webp',
            'title'    => 'App Store & Cloud Distribution Security',
            'link'     => '#title'
        ],
        [
            'original' => '../images/artificialintelligence/[4][4]/cyberfauna[4][4]1.jpeg',
            'webp'     => '../images/artificialintelligence/[4][4]/cyberfauna[4][4]1.webp',
            'title'    => 'AI-Powered Heuristic Threat Detection',
            'link'     => '#title'
        ],
        [
            'original' => '../images/storefront.png',
            'webp'     => '../images/storefront.webp',
            'title'    => 'Enterprise Endpoint & System Protection',
            'link'     => '#title'
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
            <a href="<?= htmlspecialchars($item['link']); ?>" title="<?= htmlspecialchars($item['title']); ?>">
                <?= htmlspecialchars($item['title']); ?>
            </a>
        </h4>
    </div>
    <?php endforeach; ?>
</template>
