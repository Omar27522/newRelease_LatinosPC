<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('hardware');
global $content, $key;

include_once('navBarHW.php');
$lang = $page->getLang();
echo "<h1 class=\"fullbar\">" . ($content[105][$key] ?? '') . "</h1>";
?>
<article class="fullbar">
    <section class="hero3 article" id="article">
        <div style=background-color:whitesmoke;>
            <?= $content[106][$key] ?? ''; ?>
            <?= $content[107][$key] ?? ''; ?>
        </div>
    </section>
    <section class="hero article" style="background-color: whitesmoke;">
        <div>
            <h2 style="text-align: center;" id="cpu">
                <?= $content[108][$key] ?? '';?>
            </h2>
            <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ Computer Parts-->
        </div>

        <ul>
            <div class="hardware-grid">
                <div tabindex="0" class="hardware-card" data-component="cpu">
                    <a href="<?= $content[4319][$key] ?? 'CPU'; ?>" class="card-link">
                        <h2><?= $content[109][$key] ?? ''; ?></h2>
                        <p><?= $content[119][$key] ?? ''; ?></p>
                        <div class="card-image">
                            <img src="../images/hardware/hw/cpu.jpg" alt="CPU component" title="CPU">
                        </div>
                    </a>
                </div>

                <div tabindex="0" class="hardware-card" data-component="ram">
                    <a href="<?= $content[4320][$key] ?? 'RAM'; ?>" class="card-link">
                        <h2><?= $content[110][$key] ?? ''; ?></h2>
                        <p><?= $content[120][$key] ?? ''; ?></p>
                        <div class="card-image">
                            <img src="../images/hardware/hw/ram.jpg" alt="RAM module" title="RAM">
                        </div>
                    </a>
                </div>

                <div tabindex="0" class="hardware-card" data-component="ssd">
                    <a href="<?=$content[4321][$key] ?? 'Storage'; ?>" class="card-link">
                        <h2><?= $content[111][$key] ?? ''; ?></h2>
                        <p><?= $content[121][$key] ?? ''; ?></p>
                        <div class="card-image">
                            <img src="../images/hardware/hw/memdrive.png" alt="Storage drive" title="Memory Drive">
                        </div>
                    </a>
                </div>

                <div class="hardware-logo">
                    <a rel="example_group" href="../images/websites/webcontent/2.jpg" title="LatinosPC Logo">
                        <img src="../images/hardware/hw/lapc.webp" alt="LatinosPC Logo" title="LatinosPC">
                    </a>
                </div>

                <div tabindex="0" class="hardware-card" data-component="motherboard">
                    <a href="<?=$content[4322][$key] ?? 'Motherboard'; ?>" class="card-link">
                        <h2><?= $content[112][$key] ?? ''; ?></h2>
                        <p><?= $content[122][$key] ?? ''; ?></p>
                        <div class="card-image">
                            <img src="../images/hardware/hw/mobo.jpg" alt="Motherboard" title="Motherboard">
                        </div>
                    </a>
                </div>

                <div tabindex="0" class="hardware-card" data-component="psu">
                    <a href="<?=$content[4323][$key] ?? 'Power Supply'; ?>" class="card-link">
                        <h2><?= $content[113][$key] ?? ''; ?></h2>
                        <p><?= $content[123][$key] ?? ''; ?></p>
                        <div class="card-image">
                            <img src="../images/hardware/hw/psu.jpg" alt="Power Supply Unit" title="Power Supply Unit">
                        </div>
                    </a>
                </div>

                <div tabindex="0" class="hardware-card featured" data-component="gpu">
                    <a href="<?=$content[4331][$key] ?? 'graphicscard'; ?>" class="card-link">
                        <h2><?= $content[114][$key] ?? ''; ?></h2>
                        <p><?= $content[124][$key] ?? ''; ?></p>
                        <div class="card-image">
                            <img src="../images/hardware/hw/gpu.png" alt="Graphics Card"
                                title="Graphic Processing Unit">
                        </div>
                    </a>
                </div>

                <div tabindex="0" class="hardware-card" data-component="chassis">
                    <a href="<?= $content[4348][$key] ?? 'Chassis'; ?>" class="card-link">
                        <h2><?= $content[115][$key] ?? ''; ?></h2>
                        <p><?= $content[125][$key] ?? ''; ?></p>
                        <div class="card-image">
                            <img src="../images/hardware/case/case.webp" alt="Computer Case" title="Computer Case">
                        </div>
                    </a>
                </div>

                <div tabindex="0" class="hardware-card" data-component="cooling">
                    <a href="<?= $content[4330][$key] ?? 'coolers'; ?>" class="card-link">
                        <h2><?= $content[116][$key] ?? ''; ?></h2>
                        <p><?= $content[126][$key] ?? ''; ?></p>
                        <div class="card-image">
                            <img src="../images/hardware/hw/cooler.jpg" alt="CPU Cooler" title="Coolers">
                        </div>
                    </a>
                </div>

                <div tabindex="0" class="hardware-card" data-component="io">
                    <a href="https://www.tutorialspoint.com/operating_system/os_io_hardware.htm" class="card-link">
                        <h2><?= $content[117][$key] ?? ''; ?></h2>
                        <p><?= $content[127][$key] ?? ''; ?></p>
                    </a>
                </div>

                <div tabindex="0" class="hardware-card" data-component="peripherals">
                    <a href="#peripherals" class="card-link">
                        <h2><?= $content[118][$key] ?? ''; ?></h2>

                    </a>
                </div>
            </div>
    </section>

    <section class="peripherals-section">
        <div class="peripherals-header">
            <a href="#scroll" class="peripherals-title-link">
                <h2 id="peripherals" class="peripherals-title">
                    <?= $content[152][$key] ?? '';?>
                </h2>
            </a>
        </div>

        <div class="peripherals-container">
            <div class="peripherals-grid">
                <?php
$hw=$lang;
function hw_alt($hw, $en, $es){ return $hw == 'es-419' ? $es : $en;}
function hw_title($hw, $en, $es){ return $hw == 'es-419' ? $es : $en;}
?>
                <div class="peripheral-card" data-type="input" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4324][$key] ?? 'Mouse'; ?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $mouse = $content[128][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/mouse.jpg"
                                    alt="<?= hw_alt($hw, $en='Mouse', $es='Ratón'); ?>"
                                    title="<?= hw_title($hw, $en='Mouse', $es='Ratón'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="input" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4325][$key] ?? 'Keyboard';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $keyboard = $content[129][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/keyboard.jpg"
                                    alt="<?= hw_alt($hw, $en='Keyboard', $es='Teclado'); ?>"
                                    title="<?= hw_title($hw, $en='Keyboard', $es='Teclado'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="output" tabindex="0">
                    <a class="peripheral-link" href="<?= $content[4326][$key] ?? 'Monitor'; ?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $monitor = $content[130][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/monitor.jpg"
                                    alt="<?= hw_alt($hw, $en='Display', $es='Pantalla'); ?>"
                                    title="<?= hw_title($hw, $en='Computer Monitor', $es='Pantalla de la computadora'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="storage" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4327][$key] ?? 'External Drives';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $external_drives = $content[131][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/portable.jpg"
                                    alt="<?= hw_alt($hw, $en='External Drives', $es='Memoria Externa'); ?>"
                                    title="<?= hw_title($hw, $en='External Drives', $es='Memoria Externas'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="component" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4328][$key] ?? 'PciCard';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $pci = $content[132][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/soundcard.jpg"
                                    alt="<?= hw_alt($hw, $en='PCI Cards', $es='Tarjetas PCI'); ?>"
                                    title="<?= hw_title($hw, $en='Peripheral Component Interconnect Cards', $es='Componente PerifÃ©rico InterconexiÃ³n'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="power" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4329][$key] ?? 'Power Supply';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $psu = $content[133][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/psu2.png"
                                    alt="<?= hw_alt($hw, $en='Power Supply', $es='Fuente de Poder'); ?>"
                                    title="<?= hw_title($hw, $en='PSU', $es='Fuente de Poder'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="cooling" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4330][$key] ?? 'Cooling';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $cooling = $content[134][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/cooler.jpg"
                                    alt="<?= hw_alt($hw, $en='Cooling', $es='Enfriamiento'); ?>"
                                    title="<?= hw_title($hw, $en='Cooling', $es='Enfriamiento'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="graphics" featured tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4331][$key] ?? 'graphicscard';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $gpu = $content[135][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/gpu.png"
                                    alt="<?= hw_alt($hw, $en='GPU', $es='Tarjeta GrÃ¡fica'); ?>"
                                    title="<?= hw_title($hw, $en='GPU', $es='Tarjeta GrÃ¡fica'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="input" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4332][$key] ?? 'Scanners';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $scanner = $content[136][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/scanner.png"
                                    alt="<?= hw_alt($hw, $en='Scanners', $es='EscÃ¡neres'); ?>"
                                    title="<?= hw_title($hw, $en='Scanners', $es='EscÃ¡neres'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="output" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4333][$key] ?? 'Printers';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $printer = $content[137][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/printer.png"
                                    alt="<?= hw_alt($hw, $en='Printers', $es='Impresoras'); ?>"
                                    title="<?= hw_title($hw, $en='Printers', $es='Impresoras'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="gaming" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4334][$key] ?? 'Controllers';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $console_controllers = $content[138][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/controllers.png"
                                    alt="<?= hw_alt($hw, $en='Controllers', $es='Mandos de Consola'); ?>"
                                    title="<?= hw_title($hw, $en='Video Game Controllers', $es='Mandos de Videojuego'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="gaming" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4335][$key] ?? 'joystick';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $joystick = $content[139][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/joystick.png"
                                    alt="<?= hw_alt($hw, $en='Joysticks', $es='Joysticks'); ?>"
                                    title="<?= hw_title($hw, $en='Joysticks', $es='Joysticks'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="input" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4336][$key] ?? 'tablet';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $tablet = $content[140][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/tablets.png"
                                    alt="<?= hw_alt($hw, $en='Tablets', $es='Tabletas'); ?>"
                                    title="<?= hw_title($hw, $en='Tablets', $es='Tabletas'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="audio" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4337][$key] ?? 'Microphone';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $mic = $content[141][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/mic.jpg"
                                    alt="<?= hw_alt($hw, $en='Microphone', $es='MicrÃ³fono'); ?>"
                                    title="<?= hw_title($hw, $en='Microphone', $es='MicrÃ³fono'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="audio" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4338][$key] ?? 'Headphones';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $headset = $content[142][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/headset.png"
                                    alt="<?= hw_alt($hw, $en='Headsets', $es='Headsets'); ?>"
                                    title="<?= hw_title($hw, $en='Headsets', $es='Headsets'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="audio" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4339][$key] ?? 'Headphones';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $headphone = $content[143][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/headphones.png"
                                    alt="<?= hw_alt($hw, $en='Headphones', $es='AudÃ­fonos'); ?>"
                                    title="<?= hw_title($hw, $en='Headphones', $es='AudÃ­fonos'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="audio" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4340][$key] ?? 'Audio_Mixer';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $audiomixer = $content[144][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/mixer.jpg"
                                    alt="<?= hw_alt($hw, $en='Audio Mixer', $es='Mezcladora de Audio'); ?>"
                                    title="<?= hw_title($hw, $en='Audio Mixer', $es='Mezcladora de Audio'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="gaming" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4341][$key] ?? 'Controllers';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $controller = $content[145][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/controller.jpg"
                                    alt="<?= hw_alt($hw, $en='Controllers', $es='Controladores'); ?>"
                                    title="<?= hw_title($hw, $en='Controllers', $es='Controladores'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="gaming" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4342][$key] ?? 'Uniforms';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $uniforms = $content[146][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/uniforms.jpg"
                                    alt="<?= hw_alt($hw, $en='Uniforms', $es='Uniformes'); ?>"
                                    title="<?= hw_title($hw, $en='Gaming Uniforms', $es='Uniformes Gaming'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="input" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4343][$key] ?? 'tablet';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $pencil = $content[147][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/pensandpencils.jpg"
                                    alt="<?= hw_alt($hw, $en='Pens and Pencils and Stylus', $es='LÃ¡pices, Plumas y Tabletas'); ?>"
                                    title="<?= hw_title($hw, $en='Pens and Pencils and Stylus', $es='LÃ¡pices, Plumas y Tabletas'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="furniture" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4344][$key] ?? 'Chairs';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $chair = $content[148][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/chairs.jpg"
                                    alt="<?= hw_alt($hw, $en='Chairs', $es='Sillas'); ?>"
                                    title="<?= hw_title($hw, $en='Chairs', $es='Sillas'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="furniture" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4345][$key] ?? 'Desks';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $desks = $content[149][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/desk.jpg"
                                    alt="<?= hw_alt($hw, $en='Desks', $es='Escritorios'); ?>"
                                    title="<?= hw_title($hw, $en='Desks', $es='Escritorios'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="accessories" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4346][$key] ?? 'Anti Slip Mats';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $antislipmats = $content[150][$key] ?? ''; ?></h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/anti-slip-mat.jpg"
                                    alt="<?= hw_alt($hw, $en='Anti Slip Mats', $es='Alfombrillas Antideslizantes'); ?>"
                                    title="<?= hw_title($hw, $en='Anti Slip Mats', $es='Alfombrillas Antideslizantes'); ?>">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peripheral-card" data-type="audio" tabindex="0">
                    <a class="peripheral-link" href="<?=$content[4347][$key] ?? 'Speakers';?>">
                        <div class="peripheral-content">
                            <h3 class="peripheral-name"><?= $speakers_and_subwoofers = $content[151][$key] ?? ''; ?>
                            </h3>
                            <div class="peripheral-image">
                                <img src="../images/hardware/hw/speakers.jpg"
                                    alt="<?= hw_alt($hw, $en='Speakers and Subwoofers', $es='Bocinas y Subwoofers'); ?>"
                                    title="<?= hw_title($hw, $en='Speakers and Subwoofers', $es='Bocinas y Subwoofers'); ?>">
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Photo by Rosen Genov from Pexels: https://www.pexels.com/photo/a-presonus-speaker-system-4295360/ --></a>



            </div>
        </div>

    </section>
</article>