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
            <img tabindex="0" src="https://latinospc.com/images/programs/av.jpg" height="210" width="240"
                alt="First Image" class="rtl selection_2 card2"
                style="background-color: darkgray;color: whitesmoke;text-align: center;font-size: 2rem;">
            <br /><?= $content[70][$key] ?? ''; ?><br /><br /><?= $content[71][$key] ?? ''; ?>
        </p>

        <section tabindex="0" class="">
            <p><strong><?= $content[72][$key] ?? ''; ?>:</strong>
                <?= $content[73][$key] ?? ''; ?></p>
            <p><strong><?= $content[74][$key] ?? ''; ?>:</strong>
                <?= $content[75][$key] ?? ''; ?></p>
            <p><strong><?= $content[76][$key] ?? ''; ?>:</strong>
                <?= $content[77][$key] ?? ''; ?></p>
            <img tabindex="0" src="../../../images/ostore.jpg" height="150" width="350" alt="Second Image"
                class="fl selection_2 card2"
                style="background-color: darkcyan;color: whitesmoke;text-align: center;font-size: 2rem;">
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
                <img tabindex="0" src="../../../images/artificialintelligence/[4][4]/cyberfauna[4][4]1.jpeg"
                    height="315" width="440" alt="Second to Last Image" class="rtl selection_2 card2"
                    style="background-color: burlywood;color: whitesmoke;text-align: center;font-size: 2rem;">
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
            <img tabindex="0" src="../../../images/storefront.png" height="150" width="250" alt="Last Image"
                class="fl selection_2 card2"
                style="background-color: darkred;color: whitesmoke;text-align: center;font-size: 2rem;">
            <p><strong><?= $content[110][$key] ?? ''; ?></strong>
                <?= $content[111][$key] ?? ''; ?></p>
            <p><strong><?= $content[112][$key] ?? ''; ?></strong>
                <?= $content[113][$key] ?? ''; ?></p>
            <p><strong><?= $content[114][$key] ?? ''; ?></strong>
                <?= $content[115][$key] ?? ''; ?></p>
        </section>
    </div>
</article>