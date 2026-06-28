<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('hardware');
global $content, $key;

$links = [
    'techQuickie' => 'https://youtu.be/mKLAszoGeJk',
    'computerCase' => 'https://en.wikipedia.org/wiki/Computer_case'
];
?>
<?php include_once('navBarHW.php'); ?>
<article class="hero4 container article fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <a rel="example_group" href="https://latinospc.com/images/bg_lapc.png" title="LAtinosPC Icon Computer" alt="LAPChassisIcon">
        <img src="https://latinospc.com/images/lapc.png" class="image rtl">
    </a>
    <h1><a href="./#cpu">
        <?= $content[300][$key] ?? ''; ?>
    </a></h1>
    <h2>
        <?= $content[301][$key] ?? ''; ?>
    </h2>
    <a href="<?= $links['techQuickie']; ?>" title="Techquickie">
        <p class="link"><?= $content[302][$key] ?? ''; ?></p>
    </a>
    <h2>
        <?= $content[303][$key] ?? ''; ?> 
        <a href="<?= $links['computerCase']; ?>" title="Wikipedia"><?= $content[304][$key] ?? ''; ?></a> 
        <?= $content[305][$key] ?? ''; ?>
    </h2>

    <a rel="example_group" href="https://latinospc.com/images/hardware/case/1600393471697.png" title="LAtinosPC Main Computer" alt="LAPChassis">
        <img src="https://latinospc.com/images/cs_chassis.webp" width="263" alt="image" class="image fl" />
    </a>

    <h2><?= $content[306][$key] ?? ''; ?></h2>
    <p><?= $content[307][$key] ?? ''; ?></p>

    <h2><?= $content[308][$key] ?? ''; ?></h2>
    <p><?= $content[309][$key] ?? ''; ?></p>

    <h2><?= $content[310][$key] ?? ''; ?></h2>
    <p><?= $content[311][$key] ?? ''; ?></p>
    
    <ul class="colms2">
        <li>
            <h2><?= $content[312][$key] ?? ''; ?></h2>
            <p><?= $content[313][$key] ?? ''; ?></p>
        </li>
        <li>
            <h2><?= $content[314][$key] ?? ''; ?></h2>
            <p><?= $content[315][$key] ?? ''; ?></p>
        </li>
        <li>
            <h2><?= $content[316][$key] ?? ''; ?></h2>
            <p><?= $content[317][$key] ?? ''; ?></p>
        </li>
        <li class="item">
            <h2><?= $content[318][$key] ?? ''; ?></h2>
            <p><?= $content[319][$key] ?? ''; ?></p>
        </li>
        <li>
            <h2><?= $content[320][$key] ?? ''; ?></h2>
            <p><?= $content[321][$key] ?? ''; ?></p>
        </li>
        <li>
            <h2><?= $content[322][$key] ?? ''; ?></h2>
            <p><?= $content[323][$key] ?? ''; ?></p>
        </li>
    </ul>

    <h2><?= $content[324][$key] ?? ''; ?></h2>
    <hr>
</article>

<article class="hero4 container article fullbar">
    <h2 class="colms2">
        <div class="item"><?= $content[325][$key] ?? ''; ?></div>
        <div class="image"><?= $content[326][$key] ?? ''; ?></div>
    </h2>
    <div class="hero2 container"><hr></div>
    <p>
        <div class="colms2">
            <fieldset>
                <legend><?= $content[327][$key] ?? ''; ?></legend>
                <p><?= $content[328][$key] ?? ''; ?></p>
            </fieldset>

            <fieldset>
                <legend><?= $content[329][$key] ?? ''; ?></legend>
                <p><?= $content[330][$key] ?? ''; ?></p>
            </fieldset>

            <fieldset>
                <legend><?= $content[331][$key] ?? ''; ?></legend>
                <p><?= $content[332][$key] ?? ''; ?></p>
            </fieldset>

            <fieldset>
                <legend><?= $content[333][$key] ?? ''; ?></legend>
                <p><?= $content[334][$key] ?? ''; ?></p>
            </fieldset>

            <fieldset>
                <legend><?= $content[335][$key] ?? ''; ?></legend>
                <p><?= $content[336][$key] ?? ''; ?></p>
            </fieldset>

            <fieldset class="item">
                <legend><?= $content[337][$key] ?? ''; ?></legend>
                <p><?= $content[338][$key] ?? ''; ?></p>
            </fieldset>

            <fieldset>
                <legend><?= $content[339][$key] ?? ''; ?></legend>
                <p><?= $content[340][$key] ?? ''; ?></p>
            </fieldset>

            <fieldset>
                <legend><?= $content[341][$key] ?? ''; ?></legend>
                <p><?= $content[342][$key] ?? ''; ?></p>
            </fieldset>

            <fieldset>
                <legend><?= $content[343][$key] ?? ''; ?></legend>
                <p><?= $content[344][$key] ?? ''; ?></p>
            </fieldset>

            <fieldset>
                <legend><?= $content[345][$key] ?? ''; ?></legend>
                <p><?= $content[346][$key] ?? ''; ?></p>
            </fieldset>

            <fieldset>
                <legend><?= $content[347][$key] ?? ''; ?></legend>
                <p><?= $content[348][$key] ?? ''; ?></p>
            </fieldset>

            <fieldset>
                <legend><?= $content[349][$key] ?? ''; ?></legend>
                <p><?= $content[350][$key] ?? ''; ?></p>
            </fieldset>

            <fieldset>
                <legend><?= $content[351][$key] ?? ''; ?></legend>
                <p><?= $content[352][$key] ?? ''; ?></p>
            </fieldset>

            <fieldset>
                <legend><?= $content[353][$key] ?? ''; ?></legend>
                <p><?= $content[354][$key] ?? ''; ?></p>
            </fieldset>

            <?= $content[355][$key] ?? ''; ?>
        </div>
    </p>
</article>

<article class="hero4 container article fullbar">
    <p><?= $content[356][$key] ?? ''; ?></p>
    
    <div style="margin-bottom: 20px;">
        <h3>1. <?= $content[357][$key] ?? ''; ?></h3>
        <p><?= $content[358][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>2. <?= $content[359][$key] ?? ''; ?></h3>
        <p><?= $content[360][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>3. <?= $content[361][$key] ?? ''; ?></h3>
        <p><?= $content[362][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>4. <?= $content[363][$key] ?? ''; ?></h3>
        <p><?= $content[364][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>5. <?= $content[365][$key] ?? ''; ?></h3>
        <p><?= $content[366][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>6. <?= $content[367][$key] ?? ''; ?></h3>
        <p><?= $content[368][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>7. <?= $content[369][$key] ?? ''; ?></h3>
        <p><?= $content[370][$key] ?? ''; ?></p>
    </div>

    <p><?= $content[371][$key] ?? ''; ?></p>
</article>

<article class="hero4 container article fullbar">
    <p><?= $content[372][$key] ?? ''; ?></p>

    <div style="margin-bottom: 20px;">
        <h3>1. <?= $content[373][$key] ?? ''; ?></h3>
        <p><?= $content[374][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>2. <?= $content[375][$key] ?? ''; ?></h3>
        <p><?= $content[376][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>3. <?= $content[377][$key] ?? ''; ?></h3>
        <p><?= $content[378][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>4. <?= $content[379][$key] ?? ''; ?></h3>
        <p><?= $content[380][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>5. <?= $content[381][$key] ?? ''; ?></h3>
        <p><?= $content[382][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>6. <?= $content[383][$key] ?? ''; ?></h3>
        <p><?= $content[384][$key] ?? ''; ?></p>
    </div>

    <p><?= $content[385][$key] ?? ''; ?></p>
</article>

<article class="hero4 container article fullbar">
    <p><?= $content[386][$key] ?? ''; ?></p>

    <div style="margin-bottom: 20px;">
        <h3>1. <?= $content[387][$key] ?? ''; ?></h3>
        <p><?= $content[388][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>2. <?= $content[389][$key] ?? ''; ?></h3>
        <p><?= $content[390][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>3. <?= $content[391][$key] ?? ''; ?></h3>
        <p><?= $content[392][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>4. <?= $content[393][$key] ?? ''; ?></h3>
        <p><?= $content[394][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>5. <?= $content[395][$key] ?? ''; ?></h3>
        <p><?= $content[396][$key] ?? ''; ?></p>
    </div>
    <div style="margin-bottom: 20px;">
        <h3>6. <?= $content[397][$key] ?? ''; ?></h3>
        <p><?= $content[398][$key] ?? ''; ?></p>
    </div>

    <p><?= $content[399][$key] ?? ''; ?></p>
</article>

<article class="hero4 container article fullbar">
    <p><?= $content[400][$key] ?? ''; ?></p>
    <h2><?= $content[401][$key] ?? ''; ?></h2>
    <ul>
        <li><?= $content[402][$key] ?? ''; ?></li>
        <li><?= $content[403][$key] ?? ''; ?></li>
        <li><?= $content[404][$key] ?? ''; ?></li>
        <li><?= $content[405][$key] ?? ''; ?></li>
        <li><?= $content[406][$key] ?? ''; ?></li>
        <li><?= $content[407][$key] ?? ''; ?></li>
        <li><?= $content[408][$key] ?? ''; ?></li>
        <li><?= $content[409][$key] ?? ''; ?></li>
    </ul>
    <p><?= $content[410][$key] ?? ''; ?></p>

    <table style="table-layout:fixed;width:468pt">
        <colgroup>
            <col />
            <col />
        </colgroup>
        <tbody>
            <tr style="height:42pt">
                <td style="vertical-align:top;overflow:hidden;overflow-wrap:break-word;">
                    <p>[Free Research Preview. ChatGPT ChatGPT August 3 Version 2023]</p>
                    <hr />
                </td>
            </tr>
        </tbody>
    </table>
</article>
<!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** Chassis-->
