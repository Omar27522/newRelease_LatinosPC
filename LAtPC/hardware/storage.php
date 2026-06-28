<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('hardware');
global $content, $key;
?>
<?php include_once('navBarHW.php'); ?>
<article class="fullbar">
    <a href="./#cpu">
        <h1 id="ssd"><?= $content[228][$key] ?? ''; ?></h1>
    </a><a href="?updates#scroll" title="Latest Update">
        Last Update:</a>7/26/2023
    <p>
        <a href="http://latinospc.com/images/video/pexels-mario-aranda-7841655(2160p).mp4" title="Full Screen Video" class="center">
            <video width="320" height="240" autoplay loop muted>
                <source src="http://latinospc.com/images/video/pexels-mario-aranda-7841655-754.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </a>
        <a href="http://latinospc.com/images/Scripts/SSD_VS_HDD.pptx">PowerPoint Presentation</a>
    </p>
    <section>
        <p><?= $content[229][$key] ?? ''; ?></p>
        <p><?= $content[230][$key] ?? ''; ?></p>
        <a href="https://thefutureofthings.com/3819-2009-ssd-year-of-revolution/" Title="Flash memory">
            <h4><?= $content[231][$key] ?? ''; ?></h4>
        </a>
        <p><?= $content[232][$key] ?? ''; ?></p>
        <p><?= $content[233][$key] ?? ''; ?></p>
        <h4><?= $content[234][$key] ?? ''; ?></h4>
    </section>
    <section>
        <h2><?= $content[235][$key] ?? ''; ?></h2>
        <div class="spacer_shape">
            <img src="http://latinospc.com/images/hardware/hw/ssdm2install.jpg" width="380px" class="fl">
            <p><?= $content[236][$key] ?? ''; ?></p>
        </div>
    </section>
    <section>
        <h2><?= $content[237][$key] ?? ''; ?></h2>
        <p><?= $content[238][$key] ?? ''; ?></p>
        <div style="text-indent: 25px;">
            <?= $content[239][$key] ?? ''; ?>
        </div>
        <?= $content[240][$key] ?? ''; ?>
        <div style="text-indent: 25px;">
            <?= $content[241][$key] ?? ''; ?>
        </div>
    </section>
    <section>
        <h2 style="text-indent: 25px;"><?= $content[242][$key] ?? ''; ?></h2>
        <h4><?= $content[243][$key] ?? ''; ?></h4>
        <a href="https://www.techradar.com/best/large-hard-drives-and-ssds" title="Largest SSDs and biggest hard drives of 2023">
            <h4>link</h4>
        </a>
        <p><?= $content[244][$key] ?? ''; ?></p>
    </section>
    <section>
        <a href="https://commons.wikimedia.org/wiki/File:RAMAC_305_disk.JPG" title="IBM 305 RAMAC">
            <img src="http://latinospc.com/images/hardware/hw/RAMAC_305.jpg" class="fl" title="single disk">
        </a>
        <h2><?= $content[245][$key] ?? ''; ?></h2>
        <p>
            <?= $content[246][$key] ?? ''; ?>
            <div style="text-indent: 25px;"><?= $content[247][$key] ?? ''; ?></div>
            <?= $content[248][$key] ?? ''; ?>
            <a href="https://commons.wikimedia.org/wiki/File:Intel_DC_S3700_SSD_series,_bottom_side_of_a_100_GB_SATA_3.0_model.jpg">
                <img src="http://latinospc.com/images/hardware/hw/ssdsata.jpg" title="Intel DC S3700 SSD series, bottom side of a 100 GB SATA 3.0 model" class="rtl">
            </a>
        </p>
    </section>
</article>

<article class="fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <h2><?= $content[249][$key] ?? ''; ?></h2>
    <p><?= $content[250][$key] ?? ''; ?></p>
    <p><?= $content[251][$key] ?? ''; ?></p>
    <h2><?= $content[252][$key] ?? ''; ?></h2>
    <div>
        <strong class="ssd">Form Factor:</strong> <?= $content[253][$key] ?? ''; ?><br /><br />
        <strong class="ssd">Interface:</strong> <?= $content[254][$key] ?? ''; ?><br /><br />
        <strong class="ssd">Capacity:</strong> <?= $content[255][$key] ?? ''; ?><br /><br />
        <strong class="ssd">Performance:</strong> <?= $content[256][$key] ?? ''; ?><br /><br />
        <strong class="ssd">Endurance:</strong> <?= $content[257][$key] ?? ''; ?><br /><br />
        <strong class="ssd">Cache:</strong> <?= $content[258][$key] ?? ''; ?><br /><br />
        <strong class="ssd">Brand and Reliability:</strong> <?= $content[259][$key] ?? ''; ?><br /><br />
        <strong class="ssd">Price:</strong> <?= $content[260][$key] ?? ''; ?><br /><br />
        <strong class="ssd">Warranty:</strong> <?= $content[261][$key] ?? ''; ?><br /><br />
        <strong class="ssd">Compatibility:</strong> <?= $content[262][$key] ?? ''; ?><br /><br />
        <strong class="ssd">Read Reviews:</strong> <?= $content[263][$key] ?? ''; ?><br /><br />
        <strong class="ssd">Data Migration:</strong> <?= $content[264][$key] ?? ''; ?><br /><br />
        <strong class="ssd">TRIM Support:</strong> <?= $content[265][$key] ?? ''; ?><br /><br />
        <strong class="ssd">Overprovisioning:</strong> <?= $content[266][$key] ?? ''; ?><br /><br />
        <strong class="ssd">Security:</strong> <?= $content[267][$key] ?? ''; ?>
    </div>
    <div class="spacer"></div>
</article>