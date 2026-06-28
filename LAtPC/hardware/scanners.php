<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('hardware');
global $content, $key;
?>
<?php include_once('navBarHW.php'); ?>
<article class="article fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    <a href="./#peripherals"><h1><?= $content[565][$key] ?? ''; ?></h1></a>

    <h2><?= $content[566][$key] ?? ''; ?></h2>
    <h3>
        <?= $content[567][$key] ?? ''; ?>
        <div class="spacer"></div>

        <span class="scan">
            <a href="https://en.wikipedia.org/wiki/Image_scanner#Drum" style="color: var(--primary-color);">
                <?= $content[568][$key] ?? ''; ?>
            </a>
        </span>
        <div class="spacer"><?= $content[569][$key] ?? ''; ?></div>

        <span class="scan">
            <a href="https://en.wikipedia.org/wiki/Image_scanner#Drum" style="color: var(--primary-color);">
                <?= $content[570][$key] ?? ''; ?>
            </a>
        </span>
        <div class="spacer"><?= $content[571][$key] ?? ''; ?></div>

        <span class="scan">
            <a href="https://en.wikipedia.org/wiki/Image_scanner" style="color: var(--primary-color);">
                <?= $content[572][$key] ?? ''; ?>
            </a>
        </span>
        <div class="spacer"><?= $content[573][$key] ?? ''; ?></div>

        <span class="scan">
            <a href="https://en.wikipedia.org/wiki/Image_scanner#Scan_quality" style="color: var(--primary-color);">
                <?= $content[574][$key] ?? ''; ?>
            </a>
        </span>
        <div class="spacer"><?= $content[575][$key] ?? ''; ?></div>

        <span class="scan">
            <a href="https://en.wikipedia.org/wiki/Image_scanner#Portable" style="color: var(--primary-color);">
                <?= $content[576][$key] ?? ''; ?>
            </a>
        </span>
        <div class="spacer"><?= $content[577][$key] ?? ''; ?></div>

        <span class="scan">
            <a href="https://www.alarisworld.com/en-us/insights/articles/difference-between-scanner-and-mfp#section%202" style="color: var(--primary-color);">
                <?= $content[578][$key] ?? ''; ?>
            </a>
        </span>
        <div class="spacer"><?= $content[579][$key] ?? ''; ?></div>

        <span class="scan">
            <a href="https://en.wikipedia.org/wiki/Image_scanner#CIS_scanner" style="color: var(--primary-color);">
                <?= $content[580][$key] ?? ''; ?>
            </a>
        </span>
        <div class="spacer"><?= $content[581][$key] ?? ''; ?></div>

        <span class="scan">
            <a href="https://en.wikipedia.org/wiki/Image_scanner#3D_scanner" style="color: var(--primary-color);">
                <?= $content[582][$key] ?? ''; ?>
            </a>
        </span>
        <div class="spacer"><?= $content[583][$key] ?? ''; ?></div>
    </h3>
    <h2><?= $content[584][$key] ?? ''; ?></h2>
</article>
<hr>

<article class="article fullbar">
    <h2><?= $content[585][$key] ?? ''; ?><div class="spacer"></div></h2>
    <h3>
        <div style="margin-bottom: 7px;">
            <a href="https://www.hp.com/us-en/printers/scanners.html"><span class="com">Hewlett-Packard (HP):</span></a>
            <?= $content[586][$key] ?? ''; ?>
        </div>
        <div style="margin-bottom: 7px;">
            <a href="https://epson.com/scanners"><span class="com">Epson:</span></a>
            <?= $content[587][$key] ?? ''; ?>
        </div>
        <div style="margin-bottom: 7px;">
            <a href="https://www.usa.canon.com/shop/office/scanners"><span class="com">Canon:</span></a>
            <?= $content[588][$key] ?? ''; ?>
        </div>
        <div style="margin-bottom: 7px;">
            <a href="https://en.wikipedia.org/wiki/UMAX_Technologies"><span class="com">UMAX Technologies:</span></a>
            <?= $content[589][$key] ?? ''; ?>
        </div>
        <div style="margin-bottom: 7px;">
            <a href="https://microtek.com/en/applications/category/16"><span class="com">Microtek:</span></a>
            <?= $content[590][$key] ?? ''; ?>
        </div>
        <div>
            <a href="https://www.mustek.de/"><span class="com">Mustek:</span></a>
            <?= $content[591][$key] ?? ''; ?>
        </div>
    </h3>

    <h2 class="spacer_shape"><?= $content[592][$key] ?? ''; ?></h2>
    <h3>
        <div style="margin-bottom: 7px;">
            <a href="https://epson.com/scanners"><span class="com">Epson:</span></a>
            <?= $content[593][$key] ?? ''; ?>
        </div>
        <div style="margin-bottom: 7px;">
            <a href="https://www.usa.canon.com/shop/office/scanners"><span class="com">Canon:</span></a>
            <?= $content[594][$key] ?? ''; ?>
        </div>
        <div style="margin-bottom: 7px;">
            <a href="https://www.pfu-us.ricoh.com/"><span class="com">Ricoh/Fujitsu:</span></a>
            <?= $content[595][$key] ?? ''; ?>
        </div>
        <div style="margin-bottom: 7px;">
            <a href="https://www.alarisworld.com/en-us/solutions/document-scanners/desktop#ModelListing"><span class="com">Kodak Alaris:</span></a>
            <?= $content[596][$key] ?? ''; ?>
        </div>
        <div style="margin-bottom: 7px;">
            <a href="https://www.brother-usa.com/home/scanners/desktop"><span class="com">Brother:</span></a>
            <?= $content[597][$key] ?? ''; ?>
        </div>
        <div style="margin-bottom: 7px;">
            <a href="https://plustek.com/us/products/index.php?products=workgroup-scanners"><span class="com">Plustek:</span></a>
            <?= $content[598][$key] ?? ''; ?>
        </div>
        <div style="margin-bottom: 7px;">
            <a href="https://www.hp.com/us-en/printers/scanners.html"><span class="com">HP:</span></a>
            <?= $content[599][$key] ?? ''; ?>
        </div>
        <div style="margin-bottom: 7px;">
            <a href="https://www.irislink.com/JA-JP/c895/Canon---IRIS.aspx"><span class="com">IRIS (Canon Group):</span></a>
            <?= $content[600][$key] ?? ''; ?>
        </div>
        <?= $content[601][$key] ?? ''; ?>
    </h3>
</article>
<hr>

<article class="article fullbar">
    <h2><?= $content[602][$key] ?? ''; ?></h2><br />
    <div class="colms">
        <h3>
            <span class="scan"><?= $content[603][$key] ?? ''; ?></span><br />
            <?= $content[604][$key] ?? ''; ?>
            <hr>
            <span class="scan"><?= $content[605][$key] ?? ''; ?></span><br />
            <?= $content[606][$key] ?? ''; ?>
            <hr>
            <span class="scan"><?= $content[607][$key] ?? ''; ?></span><br />
            <?= $content[608][$key] ?? ''; ?>
            <hr>
            <div class="spacer_mega"></div><div class="spacer_mega"></div>
            <hr>
            <span class="scan"><?= $content[609][$key] ?? ''; ?></span><br />
            <?= $content[610][$key] ?? ''; ?>
            <hr>
            <span class="scan"><?= $content[611][$key] ?? ''; ?></span><br />
            <?= $content[612][$key] ?? ''; ?>
            <hr>
            <span class="scan"><?= $content[613][$key] ?? ''; ?></span><br />
            <?= $content[614][$key] ?? ''; ?>
            <hr><br>
            <hr>
            <span class="scan"><?= $content[615][$key] ?? ''; ?></span><br />
            <?= $content[616][$key] ?? ''; ?>
            <hr>
            <span class="scan"><?= $content[617][$key] ?? ''; ?></span><br />
            <?= $content[618][$key] ?? ''; ?>
            <hr>
            <span class="scan"><?= $content[619][$key] ?? ''; ?></span><br />
            <?= $content[620][$key] ?? ''; ?>
            <hr>
            <span class="scan"><?= $content[621][$key] ?? ''; ?></span><br />
            <?= $content[622][$key] ?? ''; ?>
            <hr>
        </h3>
    </div>

    <div class="spacer_shape"><hr style="border: 2px solid green;border-radius: 5px;"></div>
    <h2><?= $content[623][$key] ?? ''; ?></h2><hr>

    <div class="colms2">
        <h3>
            <div class="com"><?= $content[624][$key] ?? ''; ?></div><br />
            <?= $content[625][$key] ?? ''; ?><br />
            <?= $content[626][$key] ?? ''; ?>
        </h3>
        <hr>
        <h3>
            <div class="com"><?= $content[627][$key] ?? ''; ?></div><br />
            <?= $content[628][$key] ?? ''; ?><br />
            <?= $content[629][$key] ?? ''; ?>
        </h3>
        <img src="https://latinospc.com/images/hardware/hw/123.jpg" height="280px">
        <hr>
        <h3>
            <div class="com"><?= $content[630][$key] ?? ''; ?></div><br />
            <?= $content[631][$key] ?? ''; ?><br />
            <?= $content[632][$key] ?? ''; ?>
        </h3>
    </div>
    <br /><hr>
    <h2><?= $content[633][$key] ?? ''; ?></h2>
</article>

<article class="article fullbar"><hr>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    <h3><?= $content[634][$key] ?? ''; ?></h3>
    <h3>
        <span style="font-size:18px"><?= substr($content[635][$key] ?? '', 0, 1); ?></span><?= substr($content[635][$key] ?? '', 1); ?><div class="spacer"></div>
        <span style="font-size:18px"><?= substr($content[636][$key] ?? '', 0, 1); ?></span><?= substr($content[636][$key] ?? '', 1); ?><div class="spacer"></div>
        <span style="font-size:18px"><?= substr($content[637][$key] ?? '', 0, 1); ?></span><?= substr($content[637][$key] ?? '', 1); ?><div class="spacer"></div>
        <span style="font-size:18px"><?= substr($content[638][$key] ?? '', 0, 1); ?></span><?= substr($content[638][$key] ?? '', 1); ?><div class="spacer"></div>
        <span style="font-size:18px"><?= substr($content[639][$key] ?? '', 0, 1); ?></span><?= substr($content[639][$key] ?? '', 1); ?><div class="spacer"></div>
        <span style="font-size:18px"><?= substr($content[640][$key] ?? '', 0, 1); ?></span><?= substr($content[640][$key] ?? '', 1); ?><div class="spacer"></div>
        <span style="font-size:18px"><?= substr($content[641][$key] ?? '', 0, 1); ?></span><?= substr($content[641][$key] ?? '', 1); ?><div class="spacer"></div>
        <span style="font-size:18px"><?= substr($content[642][$key] ?? '', 0, 1); ?></span><?= substr($content[642][$key] ?? '', 1); ?><div class="spacer"></div>
        <a href="https://en.wikipedia.org/wiki/Planetary_scanner"><?= $content[643][$key] ?? ''; ?></a>
    </h3>
    <table style="table-layout:fixed;width:468pt">
        <colgroup><col /><col /></colgroup>
        <tbody>
            <tr style="height:42pt">
                <td style="vertical-align:top;overflow:hidden;overflow-wrap:break-word;">
                    <h3>[Free Research Preview. ChatGPT August 3 Version 2023]</h3>
                    <hr />
                </td>
            </tr>
        </tbody>
    </table>
</article>
