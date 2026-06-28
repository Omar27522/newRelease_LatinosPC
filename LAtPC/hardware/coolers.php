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
            <div class="rtl">
                <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/coolers.jpg" title="Chilling Cooler">
                    <img src="https://latinospc.com/images/hardware/hw/cooling/coolers.webp" alt="Chilling Cooler">
                </a>
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
                <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/lasers.jpg" title="Laser Cooling" class="rtl">
                    <img src="https://latinospc.com/images/hardware/hw/cooling/lasers.webp" alt="Laser Cooling" height="120px" width="120px">
                </a>
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
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/aircool.jpg" class="fl" title="Air Cooling">
                        <img src="https://latinospc.com/images/hardware/hw/cooling/aircool.webp" height="100px" alt="Air Cooling">
                    </a>
                    <p><?= $content[446][$key] ?? ''; ?></p>
                </li>
                <li class="card2">
                    <h2 id="liquid-coolers"><?= $content[447][$key] ?? ''; ?></h2>
                    <p><?= $content[448][$key] ?? ''; ?></p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/liquid.jpg" class="fl" title="Liquid Cooling">
                        <img src="https://latinospc.com/images/hardware/hw/cooling/liquid.webp" height="100px" alt="Liquid Cooling">
                    </a>
                    <p><?= $content[449][$key] ?? ''; ?></p>
                </li>
                <li class="card2">
                    <h2 id="solid-state-coolers"><?= $content[450][$key] ?? ''; ?></h2>
                    <p><?= $content[451][$key] ?? ''; ?></p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/ssc.jpg" class="fl" title="Solid-State Cooling">
                        <img src="https://latinospc.com/images/hardware/hw/cooling/ssc.webp" height="100px" alt="Solid-State Cooling">
                    </a>
                    <p><?= $content[452][$key] ?? ''; ?></p>
                </li>
                <li class="card2">
                    <h2 id="TECS"><?= $content[453][$key] ?? ''; ?></h2>
                    <p>
                        <?= $content[454][$key] ?? ''; ?>
                        <a href="<?= $links[7]; ?>"><?= $content[455][$key] ?? ''; ?></a>
                        <?= $content[456][$key] ?? ''; ?>
                    </p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/tec.jpg" class="rtl" title="Thermoelectric Coolers">
                        <img src="https://latinospc.com/images/hardware/hw/cooling/tec.webp" height="100px" alt="TECs">
                    </a>
                    <p><?= $content[457][$key] ?? ''; ?></p>
                </li>
                <li class="card2">
                    <h2 id="hybrid-coolers"><?= $content[458][$key] ?? ''; ?></h2>
                    <p><?= $content[459][$key] ?? ''; ?></p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/hybrid.jpg" class="rtl" title="Hybrid Cooling">
                        <img src="https://latinospc.com/images/hardware/hw/cooling/hybrid.webp" height="100px" alt="Hybrid Cooling">
                    </a>
                    <p><?= $content[460][$key] ?? ''; ?></p>
                </li>
                <li class="card2">
                    <h2 id="phase-change-cooling"><?= $content[461][$key] ?? ''; ?></h2>
                    <p><?= $content[462][$key] ?? ''; ?></p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/pcc.jpg" class="rtl" title="Phase Change Cooling">
                        <img src="https://latinospc.com/images/hardware/hw/cooling/pcc.webp" height="100px" alt="Phase Change Cooling">
                    </a>
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
