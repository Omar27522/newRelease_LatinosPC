<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('hardware');
global $content, $key;

include_once('navBarHW.php');

$links = [
    'LGA' => 'https://www.digitaltrends.com/computing/what-are-intels-lga-processor-sockets/',
    'x86' => 'https://en.wikipedia.org/wiki/X86',
    'ARM' => 'https://en.wikipedia.org/wiki/ARM_architecture_family',
    'RISCV' => 'https://riscv.org/about/history/',
    'CUDDGBM' => 'https://www.google.com/books/edition/_/F1c8XqLLJboC?hl=en&sa=X&ved=2ahUKEwjO6s-qz6H-AhU9hu4BHf-lBXcQ8fIDegQIDBAE',
    'MIPS' => 'https://www.mips.com/products/architectures/',
    'POWER' => 'https://www.ibm.com/cloud/architecture/architectures/power',
    'intel' => 'https://www.intel.com/content/www/us/en/products/overview.html',
    'intel_i3' => 'https://ark.intel.com/content/www/us/en/ark/products/series/236176/intel-core-i3-processors-14th-gen.html',
    'intel_i5' => 'https://ark.intel.com/content/www/us/en/ark/products/series/236175/intel-core-i5-processors-14th-gen.html',
    'intel_i7' => 'https://ark.intel.com/content/www/us/en/ark/products/series/236170/intel-core-i7-processors-14th-gen.html',
    'intel_i9' => 'https://ark.intel.com/content/www/us/en/ark/products/series/236143/intel-core-i9-processors-14th-gen.html',
    'intel_xeon' => 'https://ark.intel.com/content/www/us/en/ark/products/series/240357/intel-xeon-6.html',
    'intel_mobile' => 'https://ark.intel.com/content/www/us/en/ark/products/series/236798/intel-core-processors-series-1.html#@Mobile',
    'AMD' => 'https://www.amd.com/en/processors',
    'AMD_epyc' => 'https://www.amd.com/en/products/processors/server/epyc.html',
    'AMD_WS' => 'https://www.amd.com/en/products/processors/workstations/ryzen-threadripper.html',
    'AMD_embedded' => 'https://www.amd.com/en/products/embedded.html',
    'AMD_embeddedEpyc' => 'https://www.amd.com/en/products/embedded/epyc.html',
    'AMD_embededRyzen' => 'https://www.amd.com/en/products/embedded/ryzen.html',
    'AMD_laptop' => 'https://www.amd.com/en/products/processors/laptop/ryzen.html',
    'AMD_RyzenPro_laptop' => 'https://www.amd.com/en/products/processors/laptop/ryzen.html',
    'AMD_laptopBusiness' => 'https://www.amd.com/en/products/processors/laptop/ryzen-for-business.html',
    'AMD_laptopRyzen' => 'https://www.amd.com/en/products/processors/laptop/ryzen.html',
    'AMD_athlon' => 'https://www.amd.com/en/products/processors/laptop/athlon.html',
    'AMD_desktop' => 'https://www.amd.com/en/products/processors/ryzen-for-professionals.html',
    'AMD_threadripperPro' => 'https://www.amd.com/en/products/processors/workstations/ryzen-threadripper/design-and-manufacturing.html',
    'AMD_ryzenPro' => 'https://www.amd.com/en/products/processors/ryzen-for-professionals.html',
    'AMD_athlonPro' => 'https://www.amd.com/en/processors/athlon-pro',
    'AMD_ryzenThreadripper' => 'https://www.amd.com/en/products/processors/workstations/ryzen-threadripper.html',
    'AMD_Ryzen' => 'https://www.amd.com/en/products/processors/desktops/ryzen.html',
    'AMD_RyzenG' => 'https://www.amd.com/en/products/processors/laptop/ryzen-for-everyday-productivity.html',
    'AMD_athlonDesktop' => 'https://www.amd.com/en/products/processors/desktops/athlon.html',
    'AMD_sWRX80' => 'https://www.amd.com/en/products/processors/chipsets/wrx80.html',
    'AMD_TRX40' => 'https://www.amd.com/en/products/processors/chipsets/strx40.html',
    'AMD_X399' => 'https://www.amd.com/en/products/processors/chipsets/str4.html',
    'AMD_AM5' => 'https://www.amd.com/en/products/processors/chipsets/am5.html',
    'AMD_AM4' => 'https://www.amd.com/en/products/processors/chipsets/am4.html',
    'AMD_AM3+' => 'https://en.wikipedia.org/wiki/AMD_900_chipset_series',
    'AMD_FM2+' => 'https://www.amd.com/en/products/processors/chipsets.html#container-72c8b11ac7',
    'AMD_SP3' => 'https://www.amd.com/content/dam/amd/en/documents/processor-tech-docs/design-guides/56795_1_00-PUB.pdf'
];
?>


    <section class=" fulbar article">
        <div class="container hero3">
            <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
            <ul class="ex_menu spacer_shape" style="text-align:center;padding-bottom: 20px;">
                <li id="cpu" style="display: inline;font-size: xxx-large"><a href="?hw/sw#cpu">
                        <?= $content[0][$key] ?? '';?>
                    </a> - </li>
                <li style="display: inline;font-size: xxx-large"><a href="#intel">
                        <?= $content[1][$key] ?? '';?>
                    </a> - </li>
                <li style="display: inline;font-size: xxx-large"><a href="#amd">
                        <?= $content[2][$key] ?? '';?>
                    </a></li>
            </ul>
            <img src="https://latinospc.com/images/computer%20CPU.jpg" alt="" class="fl" height="60" width="60" />
            <p>
                <?= $content[13][$key] ?? '';?></p>
            <span><?= $content[104][$key] ?? '';?></span>
            <p>
                <?= $content[14][$key] ?? '';?>
            </p>
            <div style="columns: 2; column-gap: 20px;">
                <ul class="ex_menu">
                    <li>
                        <h2><a href="<?=$links['x86'] ?>" title="Wikipedia">
                                <?= $content[3][$key] ?? '';?>
                            </a></h2>
                        <p>
                            <?= $content[15][$key] ?? '';?>
                        </p>
                    </li>
                    <li>
                        <h2><a href="<?=$links['ARM'] ?>" title="ARM architecture family">
                                <?= $content[4][$key] ?? '';?>
                            </a></h2>
                        <p>
                            <?= $content[16][$key] ?? '';?>
                        </p>
                    </li>
                    <li>
                        <h2><a href="<?=$links['RISCV'] ?>" title="History">
                                <?= $content[5][$key] ?? '';?>
                            </a></h2>
                        <p style="break-inside: avoid;">
                            <?= $content[17][$key] ?? '';?>
                        </p>

                        <a href="<?=$links['CUDDGBM'] ?>"
                            title="Concepts of Urban Design By David Gosling, Barry Maitland · 1984"
                            class="spacer_shape"style="margin-left: 35%;">
                            <?= $content[6][$key] ?? '';?>
                        </a>

                    </li>
                    <li>
                        <h2><a href="<?=$links['MIPS'] ?>">
                                <?= $content[7][$key] ?? '';?>
                            </a></h2>
                        <p>
                            <?= $content[18][$key] ?? '';?>
                        </p>
                    </li>
                    <li>
                        <h2><a href="<?=$links['POWER'] ?>">
                                <?= $content[8][$key] ?? '';?>
                            </a></h2>
                        <p>
                            <?= $content[19][$key] ?? '';?>
                        </p>
                    </li>
                    <hr>
                    <p>
                        <?= $content[20][$key] ?? '';?>
                    </p>
                </ul>
            </div><img src="https://latinospc.com/images/artificialintelligence/hw/cpu/thumbs/cpu.jpg" height="280px"
                class="fl" title="Central Processing Unit" alt="CPU stiker">
        </div>
    </section>

    <!-- et▄;Gë6T3ï(⌡╦vt⌐Æïÿ|╪╓kÿY╪R+▌╫¥±   ▄;Gë6T3ï(          )             -->
    <section class="article">
        <div class="container fullbar">
            <p>
                <?= $content[9][$key] ?? '';?>
            </p>
            <div class="spacer"></div>
            <div class="spacer_shape" id="intel"><a href="<?=$links['intel'] ?>" title="intel Processors"><button
                        style="padding:40px;font-size:xx-large">
                        intel
                    </button></a><a href="#scroll"><img src="https://latinospc.com/images/computer%20CPU.jpg" alt=""
                        class="rtl" height="60" width="60" /></a></div>
            <h2>
                <?= $content[10][$key] ?? '';?>
            </h2>
            <ul style="font-size: 35px; padding: 25px;" class="ex_menu intel_menu hero4">
                <li style="display: inline"><a class="button" href="<?=$links['intel_i3'] ?>">
                        i3</a>
                </li>
                -<li style="display: inline"><a class="button" href="<?=$links['intel_i5'] ?>">
                        i5</a>
                </li>

                -<li style="display: inline"><a class="button" href="<?=$links['intel_i7'] ?>">
                        i7</a>
                </li>

                -<li style="display: inline"><a class="button" href="<?=$links['intel_i9'] ?>">
                        i9</a>
                </li>

                -<li style="display: inline"><a class="button" href="<?=$links['intel_xeon'] ?>">
                        Xeon</a>
                </li>

                -<li style="display: inline"><a class="button" href="<?=$links['intel_mobile'] ?>">
                        Mobile</a>
                </li>
            </ul>
            <p>
                <?= $content[21][$key] ?? ''; ?>
            </p>
            <p>
                <?= $content[22][$key] ?? ''; ?>
            </p>
            <p>
                <?= $content[23][$key] ?? ''; ?>
            </p>
            <h2>
                <?= $content[24][$key] ?? ''; ?>
            </h2>
            <ul class="ex_menu hero4">
                <li>
                    <h2 class="intelletters">Core i3:</h2>
                    <p>
                        <?= $content[25][$key] ?? ''; ?>
                </li>
                </p>
                <li>
                    <h2 class="intelletters">Core i5:</h2>
                    <p>
                        <?= $content[26][$key] ?? ''; ?>
                </li>
                </p>
                <li>
                    <h2 class="intelletters">Core i7:</h2>
                    <p>
                        <?= $content[27][$key] ?? ''; ?>
                </li>
                </p>
                <li>
                    <h2 class="intelletters">Core i9:</h2>
                    <p>
                        <?= $content[28][$key] ?? ''; ?>
                </li>
                </p>

                <li>
                    <h2 class="intelletters">intel Xeon:</h2>
                    <p>
                        <?= $content[29][$key] ?? ''; ?>

                        <span style="font-size: larger;"><?= $content[11][$key] ?? '';?></span>

                <li>
                    <p><?= $content[30][$key] ?? ''; ?></p>
                </li>
                <li>
                    <p><?= $content[31][$key] ?? ''; ?></p>
                </li>
                <li>
                    <p><?= $content[32][$key] ?? ''; ?></p>
                </li>

                <p><?= $content[33][$key] ?? ''; ?></p>
                </li>
                </p>
            </ul>
            <hr>
            <div class="spacer_shape hero4">
                <p><?= $content[37][$key] ?? ''; ?> <a href="<?=$links['LGA'] ?>" title="Digital Trends"><?= $content[38][$key] ?? ''; ?></a></p>
                <p><img src="https://latinospc.com/images/artificialintelligence/hw/cpu/thumbs/socket.jpg" title="Socket"
                        class="rtl">
                    <?= $content[39][$key] ?? ''; ?></p>
            </div>

            <p>
                <?= $content[40][$key] ?? ''; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 1700:</strong> [V] <?= $content[41][$key] ?? ''; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 1200:</strong> [H5] <?= $content[42][$key] ?? ''; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 2011:</strong> [R] <?= $content[43][$key] ?? ''; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 2066:</strong> [R4] <?= $content[44][$key] ?? ''; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 3647:</strong> [P, P0, P1] <?= $content[45][$key] ?? ''; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 4189:</strong> [P+] <?= $content[46][$key] ?? ''; ?>
            </p>
        </div><!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
        <div class="fulbar article">
        </div>
    </section>


    <section class="article">
        <div class="container fullbar">
            <div style="background-color:black; color:gray">
            <div class="spacer_shape" id="amd"><a href="https://www.amd.com/en.html" title="AMD Processors">
                    <button style="padding:40px;font-size:xx-large">
                        <?= $content[2][$key] ?? '';?>
                    </button></a><a href="#content"><img src="https://latinospc.com/images/computer%20CPU.jpg"
                        alt="CPU Image" class="rtl" height="60" width="60" /></a></div>
            <div class="colms2">
                <p><a href="<?=$links['AMD_epyc'] ?>" title="Epyc™"><button>
                            <p class="button_red">Epyc
                            <div class="amdletters">
                                <ol class="ex_menu"><?= $content[48][$key] ?? ''; ?></ol>
                                <br /><?= $content[49][$key] ?? ''; ?><br />
                                <br /><?= $content[50][$key] ?? ''; ?><br />
                                <br /><?= $content[51][$key] ?? ''; ?><br />
                                <br /><?= $content[52][$key] ?? ''; ?>
                            </div>
                </p>
                </button></a></p>

                <p><a href="<?=$links['AMD_WS'] ?>" title="Ryzen™ & Threadripper™"><button>
                            <p class="button_red">Ryzen™ & Threadripper
                            <div class="amdletters">
                                <ol><?= $content[53][$key] ?? ''; ?></ol>
                                <br /><?= $content[54][$key] ?? ''; ?><br />
                                <br /><?= $content[55][$key] ?? ''; ?><br />
                                <br /><?= $content[56][$key] ?? ''; ?>
                            </div>
                </p>
                </button></a></p>
            </div>

            <div class="colms2">
                <p><a href="<?=$links['AMD_embedded'] ?>" title="Embedded"><button>
                            <p class="button_red">Embedded
                            <ul class="ex_menu"><?= $content[57][$key] ?? ''; ?>
                                <li><a href="<?=$links['AMD_embeddedEpyc'] ?>" class="amdletters"
                                        title="EPYC™"><?= $content[58][$key] ?? ''; ?></a></li>
                                <li><a href="<?=$links['AMD_embededRyzen'] ?>" class="amdletters"
                                        title="Ryzen™"><?= $content[59][$key] ?? ''; ?></a></li>
                                <?= $content[60][$key] ?? ''; ?>
                            </ul>
                </p>
                </button></a></p>

                <p><a href="<?=$links['AMD_laptop'] ?>" title="Laptop"><button>
                            <p class="button_red">Laptop
                            <ul class="amdletters ex_menu"><?= $content[61][$key] ?? ''; ?>
                                <li><a href="<?=$links['AMD_RyzenPro_laptop'] ?>" class="amdletters"
                                        title="Mobile Pro Business"><?= $content[62][$key] ?? ''; ?></a></li>
                                <li><a href="<?=$links['AMD_laptopBusiness'] ?>" class="amdletters"
                                        title="Mobile Business"><?= $content[63][$key] ?? ''; ?></a></li>
                                <li><a href="<?=$links['AMD_laptopRyzen'] ?>" class="amdletters"
                                        title="Mobile"><?= $content[64][$key] ?? ''; ?></a></li>
                                <li><a href="<?=$links['AMD_athlon'] ?>" class="amdletters"
                                        title="Mobile Athlon™"><?= $content[65][$key] ?? ''; ?></a></li>
                            </ul>
                </p>
                </button></a></p>
            </div>

            <p><a href="<?=$links['AMD_desktop'] ?>" title="Desktop"><button>
                        <p class="button_red">Desktop
                        <ul class="ex_menu"><?= $content[66][$key] ?? ''; ?>
                            <li><a href="<?=$links['AMD_threadripperPro'] ?>" title="Ryzen™ Threadripper™ PRO"
                                    class="amdletters"><?= $content[67][$key] ?? ''; ?></a></li>
                            <li><a href="<?=$links['AMD_ryzenPro'] ?>" title="Ryzen™ PRO"
                                    class="amdletters"><?= $content[68][$key] ?? ''; ?></a></li>
                            <li><a href="<?=$links['AMD_athlonPro'] ?>" title="Athlon™ PRO"
                                    class="amdletters"><?= $content[69][$key] ?? ''; ?></a></li>
                            <li><a href="<?=$links['AMD_ryzenThreadripper'] ?>" title="High End"
                                    class="amdletters"><?= $content[70][$key] ?? ''; ?></a></li>
                            <li><a href="<?=$links['AMD_Ryzen'] ?>" title="AMD Ryzen™ Processors"
                                    class="amdletters"><?= $content[71][$key] ?? ''; ?></a></li>
                            <li><a href="<?=$links['AMD_RyzenG'] ?>" title="AMD Ryzen™ with Graphics"
                                    class="amdletters"><?= $content[72][$key] ?? ''; ?></a></li>
                            <li><a href="<?=$links['AMD_athlonDesktop'] ?>" title="AMD Athlon™ with Radeon™ Graphics"
                                    class="amdletters"><?= $content[73][$key] ?? ''; ?></li>
                        </ul>
            </p>
            </button></a></p>
            <ul class="ex_menu">
                <li class="card2">
                    <h2><?= $content[12][$key] ?? '';?></h2><br /><br /><a href="https://www.amd.com/en/technologies/zen-core.html">AMD "Zen" Core Architecture</a>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_sWRX80'] ?>" title="sWRX80" class="amdred">sWRX80:</a></strong>
                    <?= $content[75][$key] ?? ''; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_TRX40'] ?>" title="TRX40" class="amdred">sTRX40:</a></strong>
                    <?= $content[76][$key] ?? ''; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_X399'] ?>" title="X399" class="amdred">TR4
                            X399:</a></strong> <?= $content[77][$key] ?? ''; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_AM5'] ?>" title="AM5" class="amdred">AM5:</a></strong>
                    <?= $content[78][$key] ?? ''; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_AM4'] ?>" title="AM4" class="amdred">AM4:</a></strong> <?= $content[79][$key] ?? ''; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_AM3+'] ?>" title="AM3+" class="amdred">AM3+:</a></strong>
                    <?= $content[80][$key] ?? ''; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_FM2+'] ?>" title="FM2+" class="amdred">FM2+:</a>
                    </strong> <?= $content[81][$key] ?? ''; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_SP3'] ?>" title="SP3" class="amdred">SP3:</a></strong>
                    <?= $content[82][$key] ?? ''; ?>
                </li>
            </ul>
        </div>
        <section class="hero4 fulbar article">
            <div class="container fullbar">

                <h2><?= $content[84][$key] ?? ''; ?></h2>
                <p>
                    <?= $content[85][$key] ?? ''; ?>
                </p>

                <h2><?= $content[86][$key] ?? ''; ?></h2>
                <p>
                    <?= $content[87][$key] ?? ''; ?>
                </p>

                <h2><?= $content[88][$key] ?? ''; ?></h2>
                <p>
                    <?= $content[89][$key] ?? ''; ?>
                </p>

                <h2><?= $content[90][$key] ?? ''; ?></h2>
                <p>
                    <?= $content[91][$key] ?? ''; ?>
                </p>
                <p>
                    <?= $content[92][$key] ?? ''; ?>
                </p>
                <p>
                    <?= $content[93][$key] ?? ''; ?>
                </p>
            </div>
        </section>
        <section class="container fullbar">
            <p style="font-size: xx-large;color:red;"><?= $content[94][$key] ?? ''; ?>
            </p>
            <p>
                <?= $content[95][$key] ?? ''; ?>
            </p>
            <h2 class="qualcomm">Qualcomm Snapdragon:</h2>
            <p>
                <?= $content[96][$key] ?? ''; ?>
            </p>
            <h2 class="samsung">Samsung Exynos:</h2>
            <p>
                <?= $content[97][$key] ?? ''; ?>
            </p>
            <h2 class="apple">Apple A-series:</h2>
            <p>
                <?= $content[98][$key] ?? ''; ?>
            </p>
            <h2 class="huawei">Huawei Kirin:</h2>
            <p>
                <?= $content[99][$key] ?? ''; ?>
            </p>
            <h2>MediaTek:</h2>
            <p>
                <?= $content[100][$key] ?? ''; ?>
            </p>
            <h2>Microchip Technology:</h2>
            <p><?= $content[101][$key] ?? ''; ?></p>
            <p>
            <p><?= $content[102][$key] ?? ''; ?></p>
            </p>
            <p><?= $content[103][$key] ?? ''; ?></p>
        </section>
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
        </div>
    </section>
