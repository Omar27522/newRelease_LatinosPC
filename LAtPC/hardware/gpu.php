<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('hardware');
global $content, $key;

$title = [$content[172][$key] ?? ''];

$links = ['https://www.pcmag.com/encyclopedia/term/gpu'];
?>
<?php include_once('navBarHW.php'); ?>
<!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** GPU-->

    <div class="container article fullbar">
    <a href="?hw/sw#cpu">
        <h2 id="gpu">
            <?= empty($title) ? $titulo[0] : $title[0] ?>
        </h2>
    </a>
    <a href="<?= $links[0] ?>" title="PC magazine">
        <h4 style="text-align:right; padding-right: 250px;"><?= $content[173][$key] ?? ''; ?></h4>
    </a>
    <video controls width="623" height="623" autoplay muted>
        <source src="https://latinospc.com/images/video/wavesgpu.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <h4><?= $content[174][$key] ?? ''; ?></h4>
    <p><?= $content[175][$key] ?? ''; ?></p>
    <h2><?= $content[176][$key] ?? ''; ?></h2>
    <p><?= $content[177][$key] ?? ''; ?></p>
    <p><?= $content[178][$key] ?? ''; ?></p>
    <p><?= $content[179][$key] ?? ''; ?></p>
    <p><?= $content[180][$key] ?? ''; ?></p>
    <p><?= $content[181][$key] ?? ''; ?></p>
    <p><?= $content[182][$key] ?? ''; ?></p>
    <p><?= $content[183][$key] ?? ''; ?></p>
    <p><?= $content[184][$key] ?? ''; ?></p>
</div><!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** GPU-->


<div class="fullbar article">
<img alt="GPU Grid" src="https://latinospc.com/images/hardware/hw/gpu-graphics1.jpg" title="GPU graphics" /></p>
<h2><a href="https://www.intel.com/content/www/us/en/products/docs/processors/what-is-a-gpu.html"
        title="Modern GPU technology powers traditional graphics applications—and much more."><?= $content[185][$key] ?? ''; ?></a></h2>
<p><?= $content[186][$key] ?? ''; ?></p>
<p><strong class="gpu">Gaming:</strong> <?= $content[187][$key] ?? ''; ?></p>
<p><strong class="gpu">Machine learning and AI:</strong> <?= $content[188][$key] ?? ''; ?></p>
<p><strong class="gpu">Scientific computing:</strong> <?= $content[189][$key] ?? ''; ?></p>
<p><strong class="gpu">Finance:</strong> <?= $content[190][$key] ?? ''; ?></p>
<p><strong class="gpu">Healthcare:</strong> <?= $content[191][$key] ?? ''; ?></p>
<p><strong class="gpu">Cryptocurrency mining:</strong> <?= $content[192][$key] ?? ''; ?></p>
<p><strong class="gpu">Media and entertainment:</strong> <?= $content[193][$key] ?? ''; ?></p>
<p class="spacer_shape"><?= $content[194][$key] ?? ''; ?></p>
</div><!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** GPU-->

<div class="fullbar article">
<h2 class="tnhkl"><?= $content[195][$key] ?? ''; ?></h2>
<p><?= $content[196][$key] ?? ''; ?></p>
<h2><a href="https://www.nvidia.com/en-us/geforce/graphics-cards/" title="NVIDIA" class="tnhkl">NVIDIA:</a></h2>
<p><?= $content[197][$key] ?? ''; ?></p>
<h2><a href="https://www.amd.com/en/graphics/workstations" title="" class="tnhkl">AMD:</a></h2>
<p><?= $content[198][$key] ?? ''; ?></p>
<h2><a href="https://www.intel.com/content/www/us/en/products/details/discrete-gpus/arc.html" title="Arc"
        class="tnhkl">Intel:</a></h2>
<p><?= $content[199][$key] ?? ''; ?></p>
<h2><a href="https://www.qualcomm.com/products/features/adreno" title="Adreno" class="tnhkl">Qualcomm:</a></h2>
<p><?= $content[200][$key] ?? ''; ?></p>
<h2><a href="https://www.imaginationtech.com/products/gpu/" title="Imagination" class="tnhkl">Imagination
        Technologies:</a></h2>
<p><?= $content[201][$key] ?? ''; ?></p>
<h2><a href="https://www.arm.com/products/silicon-ip-multimedia" title="Arm" class="tnhkl">ARM:</a></h2>
<p><?= $content[202][$key] ?? ''; ?></p>
</div><!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** GPU-->

<div class="fullbar article">
<h2><?= $content[203][$key] ?? ''; ?></h2>
<div class="spacer"></div>
<div style="text-align: center"><a href="https://en.wikipedia.org/wiki/List_of_AMD_graphics_processing_units"
        title="List of GPUs">
        <h2 class="amd">AMD</h2>
    </a></div>
<div class="spacer_shape">
    <p><a href="https://en.wikipedia.org/wiki/Radeon_HD_7000_series" title="Radeon HD 7000" class="amd">HD 7000:</a> <?= $content[204][$key] ?? ''; ?></p>
    <p><a href="https://en.wikipedia.org/wiki/Radeon_200_series" title="RX 200" class="amd">RX 200:</a> <?= $content[205][$key] ?? ''; ?></p>
    <p><a href="https://en.wikipedia.org/wiki/Radeon_300_series" title="RX 300" class="amd">RX 300:</a> <?= $content[206][$key] ?? ''; ?></p>
    <p><a href="https://en.wikipedia.org/wiki/Radeon_400_series" title="RX 400" class="amd">RX 400:</a> <?= $content[207][$key] ?? ''; ?></p>
    <p><a href="https://en.wikipedia.org/wiki/Radeon_500_series" title="RX 500" class="amd">RX 500:</a> <?= $content[208][$key] ?? ''; ?></p>
    <p><a href="https://en.wikipedia.org/wiki/Radeon_RX_Vega_series" title="RX Vega" class="amd">RX Vega:</a> <?= $content[209][$key] ?? ''; ?></p>
    <p><a href="https://en.wikipedia.org/wiki/Radeon_RX_5000_series" title="RX 5000" class="amd">RX 5000:</a> <?= $content[210][$key] ?? ''; ?></p>
    <p><a href="https://en.wikipedia.org/wiki/Radeon_RX_6000_series" title="RX 6000" class="amd">RX 6000:</a> <?= $content[211][$key] ?? ''; ?></p>
    <p><a href="https://en.wikipedia.org/wiki/Radeon_RX_7000_series" title="RX 7000" class="amd">RX 7000:</a> <?= $content[212][$key] ?? ''; ?></p>
    <p><a href="https://en.wikipedia.org/wiki/Radeon_Pro#Radeon_Pro_Duo" title="Radeon Pro" class="amd">Radeon
            Pro:</a> <?= $content[213][$key] ?? ''; ?></p>
</div>
<div class="spacer"></div>
<div style="text-align: center"><a href="https://en.wikipedia.org/wiki/List_of_Nvidia_graphics_processing_units"
        title="list of GPUs">
        <h2 class="nvidia">Nvidia</h2>
    </a></div>
<p><b class="nvidia">GT:</b> <?= $content[214][$key] ?? ''; ?></p>
<p><b class="nvidia">GTS:</b> <?= $content[215][$key] ?? ''; ?></p>
<p><b class="nvidia">GTX:</b> <?= $content[216][$key] ?? ''; ?></p>
<p><b class="nvidia">GTX+</b> <?= $content[217][$key] ?? ''; ?></p>
<p><b class="nvidia">RTX:</b> <?= $content[218][$key] ?? ''; ?></p>
<div class="spacer_shape">
    <p><a href="https://en.wikipedia.org/wiki/GeForce_8_series" title="GeForce 8 series" class="nvidia">GeForce
            8000:</a> <?= $content[219][$key] ?? ''; ?></p>
    <p><a href="https://en.wikipedia.org/wiki/GeForce" title="GeForce" class="nvidia">GeForce
            GTX/RTX/GT/GTS/GTX+:</a> <?= $content[220][$key] ?? ''; ?></p>
    <p><a href="https://en.wikipedia.org/wiki/GeForce#GeForce_40_series_(Current)" title="Current Cards"
            class="nvidia">GeForce RTX/GTX/GT/GTS/GTX+:</a> <?= $content[221][$key] ?? ''; ?></p>
</div>
<h2><a href="https://www.intel.com/content/www/us/en/products/details/discrete-gpus.html"
        title="Intel Discrete GPUs">
        <div style="text-align: center">Intel</div>
    </a></h2>
<p>Intel <a
        href="https://www.intel.com/content/www/us/en/products/docs/discrete-gpus/arc/desktop/a-series/overview.html">A-Series</a>
    <?= $content[222][$key] ?? ''; ?></p>
<p><?= $content[223][$key] ?? ''; ?></p>
<p><?= $content[224][$key] ?? ''; ?></p>
<p><?= $content[225][$key] ?? ''; ?></p>
<p><?= $content[226][$key] ?? ''; ?></p>
<p><?= $content[227][$key] ?? ''; ?></p>
</div>