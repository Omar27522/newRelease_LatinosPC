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
                    </a>
                    <div class="card-image">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= htmlspecialchars($content[109][$key] ?? 'CPU'); ?>">
                                    <img src="../images/hardware/hw/cpu_thumb.webp" alt="<?= htmlspecialchars($content[109][$key] ?? 'CPU'); ?>" title="CPU" loading="lazy">
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
                        </div>
                    </div>
                </div>

                <div tabindex="0" class="hardware-card" data-component="ram">
                    <a href="<?= $content[4320][$key] ?? 'RAM'; ?>" class="card-link">
                        <h2><?= $content[110][$key] ?? ''; ?></h2>
                        <p><?= $content[120][$key] ?? ''; ?></p>
                    </a>
                    <div class="card-image">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= htmlspecialchars($content[110][$key] ?? 'RAM'); ?>">
                                    <img src="../images/hardware/hw/ram_thumb.webp" alt="<?= htmlspecialchars($content[110][$key] ?? 'RAM'); ?>" title="RAM" loading="lazy">
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="1"></div>
                        </div>
                    </div>
                </div>

                <div tabindex="0" class="hardware-card" data-component="ssd">
                    <a href="<?=$content[4321][$key] ?? 'Storage'; ?>" class="card-link">
                        <h2><?= $content[111][$key] ?? ''; ?></h2>
                        <p><?= $content[121][$key] ?? ''; ?></p>
                    </a>
                    <div class="card-image">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= htmlspecialchars($content[111][$key] ?? 'Storage'); ?>">
                                    <img src="../images/hardware/hw/memdrive_thumb.webp" alt="<?= htmlspecialchars($content[111][$key] ?? 'Storage'); ?>" title="Memory Drive" loading="lazy">
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="2"></div>
                        </div>
                    </div>
                </div>

                <div class="hardware-logo">
                    <div class="multi-link-container">
                        <div class="thumbnail-container">
                            <span tabindex="0" class="linked-text-img" role="button" aria-label="LatinosPC Logo">
                                <img src="../images/hardware/hw/lapc_thumb.webp" alt="LatinosPC Logo" title="LatinosPC" loading="lazy">
                            </span>
                        </div>
                        <div class="image-dialog" data-carousel="true" data-start-index="3"></div>
                    </div>
                </div>

                <div tabindex="0" class="hardware-card" data-component="motherboard">
                    <a href="<?=$content[4322][$key] ?? 'Motherboard'; ?>" class="card-link">
                        <h2><?= $content[112][$key] ?? ''; ?></h2>
                        <p><?= $content[122][$key] ?? ''; ?></p>
                    </a>
                    <div class="card-image">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= htmlspecialchars($content[112][$key] ?? 'Motherboard'); ?>">
                                    <img src="../images/hardware/hw/mobo_thumb.webp" alt="<?= htmlspecialchars($content[112][$key] ?? 'Motherboard'); ?>" title="Motherboard" loading="lazy">
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="4"></div>
                        </div>
                    </div>
                </div>

                <div tabindex="0" class="hardware-card" data-component="psu">
                    <a href="<?=$content[4323][$key] ?? 'Power Supply'; ?>" class="card-link">
                        <h2><?= $content[113][$key] ?? ''; ?></h2>
                        <p><?= $content[123][$key] ?? ''; ?></p>
                    </a>
                    <div class="card-image">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= htmlspecialchars($content[113][$key] ?? 'Power Supply'); ?>">
                                    <img src="../images/hardware/hw/psu_thumb.webp" alt="<?= htmlspecialchars($content[113][$key] ?? 'Power Supply'); ?>" title="Power Supply Unit" loading="lazy">
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="5"></div>
                        </div>
                    </div>
                </div>

                <div tabindex="0" class="hardware-card featured" data-component="gpu">
                    <a href="<?=$content[4331][$key] ?? 'graphicscard'; ?>" class="card-link">
                        <h2><?= $content[114][$key] ?? ''; ?></h2>
                        <p><?= $content[124][$key] ?? ''; ?></p>
                    </a>
                    <div class="card-image">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= htmlspecialchars($content[114][$key] ?? 'Graphics Card'); ?>">
                                    <img src="../images/hardware/hw/gpu_thumb.webp" alt="<?= htmlspecialchars($content[114][$key] ?? 'Graphics Card'); ?>"
                                        title="Graphic Processing Unit" loading="lazy">
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="6"></div>
                        </div>
                    </div>
                </div>

                <div tabindex="0" class="hardware-card" data-component="chassis">
                    <a href="<?= $content[4348][$key] ?? 'Chassis'; ?>" class="card-link">
                        <h2><?= $content[115][$key] ?? ''; ?></h2>
                        <p><?= $content[125][$key] ?? ''; ?></p>
                    </a>
                    <div class="card-image">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= htmlspecialchars($content[115][$key] ?? 'Computer Case'); ?>">
                                    <img src="../images/hardware/case/case_thumb.webp" alt="<?= htmlspecialchars($content[115][$key] ?? 'Computer Case'); ?>" title="Computer Case" loading="lazy">
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="7"></div>
                        </div>
                    </div>
                </div>

                <div tabindex="0" class="hardware-card" data-component="cooling">
                    <a href="<?= $content[4330][$key] ?? 'coolers'; ?>" class="card-link">
                        <h2><?= $content[116][$key] ?? ''; ?></h2>
                        <p><?= $content[126][$key] ?? ''; ?></p>
                    </a>
                    <div class="card-image">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= htmlspecialchars($content[116][$key] ?? 'CPU Cooler'); ?>">
                                    <img src="../images/hardware/hw/cooler_thumb.webp" alt="<?= htmlspecialchars($content[116][$key] ?? 'CPU Cooler'); ?>" title="Coolers" loading="lazy">
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="8"></div>
                        </div>
                    </div>
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
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4324][$key] ?? 'Mouse'; ?>">
                            <h3 class="peripheral-name"><?= $mouse = $content[128][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Mouse', 'Ratón'); ?>">
                                        <img src="../images/hardware/hw/mouse_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Mouse', 'Ratón'); ?>"
                                            title="<?= hw_title($hw, 'Mouse', 'Ratón'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="9"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="input" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4325][$key] ?? 'Keyboard';?>">
                            <h3 class="peripheral-name"><?= $keyboard = $content[129][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Keyboard', 'Teclado'); ?>">
                                        <img src="../images/hardware/hw/keyboard_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Keyboard', 'Teclado'); ?>"
                                            title="<?= hw_title($hw, 'Keyboard', 'Teclado'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="10"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="output" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?= $content[4326][$key] ?? 'Monitor'; ?>">
                            <h3 class="peripheral-name"><?= $monitor = $content[130][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Computer Monitor', 'Pantalla de la computadora'); ?>">
                                        <img src="../images/hardware/hw/monitor_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Display', 'Pantalla'); ?>"
                                            title="<?= hw_title($hw, 'Computer Monitor', 'Pantalla de la computadora'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="11"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="storage" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4327][$key] ?? 'External Drives';?>">
                            <h3 class="peripheral-name"><?= $external_drives = $content[131][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'External Drives', 'Memoria Externas'); ?>">
                                        <img src="../images/hardware/hw/portable_thumb.webp"
                                            alt="<?= hw_alt($hw, 'External Drives', 'Memoria Externa'); ?>"
                                            title="<?= hw_title($hw, 'External Drives', 'Memoria Externas'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="12"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="component" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4328][$key] ?? 'PciCard';?>">
                            <h3 class="peripheral-name"><?= $pci = $content[132][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Peripheral Component Interconnect Cards', 'Componente Periférico Interconexión'); ?>">
                                        <img src="../images/hardware/hw/soundcard_thumb.webp"
                                            alt="<?= hw_alt($hw, 'PCI Cards', 'Tarjetas PCI'); ?>"
                                            title="<?= hw_title($hw, 'Peripheral Component Interconnect Cards', 'Componente Periférico Interconexión'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="13"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="power" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4329][$key] ?? 'Power Supply';?>">
                            <h3 class="peripheral-name"><?= $psu = $content[133][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'PSU', 'Fuente de Poder'); ?>">
                                        <img src="../images/hardware/hw/psu2_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Power Supply', 'Fuente de Poder'); ?>"
                                            title="<?= hw_title($hw, 'PSU', 'Fuente de Poder'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="14"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="cooling" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4330][$key] ?? 'Cooling';?>">
                            <h3 class="peripheral-name"><?= $cooling = $content[134][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Cooling', 'Enfriamiento'); ?>">
                                        <img src="../images/hardware/hw/cooler_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Cooling', 'Enfriamiento'); ?>"
                                            title="<?= hw_title($hw, 'Cooling', 'Enfriamiento'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="15"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="graphics" featured tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4331][$key] ?? 'graphicscard';?>">
                            <h3 class="peripheral-name"><?= $gpu = $content[135][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'GPU', 'Tarjeta Gráfica'); ?>">
                                        <img src="../images/hardware/hw/gpu_thumb.webp"
                                            alt="<?= hw_alt($hw, 'GPU', 'Tarjeta Gráfica'); ?>"
                                            title="<?= hw_title($hw, 'GPU', 'Tarjeta Gráfica'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="16"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="input" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4332][$key] ?? 'Scanners';?>">
                            <h3 class="peripheral-name"><?= $scanner = $content[136][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Scanners', 'Escáneres'); ?>">
                                        <img src="../images/hardware/hw/scanner_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Scanners', 'Escáneres'); ?>"
                                            title="<?= hw_title($hw, 'Scanners', 'Escáneres'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="17"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="output" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4333][$key] ?? 'Printers';?>">
                            <h3 class="peripheral-name"><?= $printer = $content[137][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Printers', 'Impresoras'); ?>">
                                        <img src="../images/hardware/hw/printer_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Printers', 'Impresoras'); ?>"
                                            title="<?= hw_title($hw, 'Printers', 'Impresoras'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="18"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="gaming" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4334][$key] ?? 'Controllers';?>">
                            <h3 class="peripheral-name"><?= $console_controllers = $content[138][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Video Game Controllers', 'Mandos de Videojuego'); ?>">
                                        <img src="../images/hardware/hw/controllers_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Controllers', 'Mandos de Consola'); ?>"
                                            title="<?= hw_title($hw, 'Video Game Controllers', 'Mandos de Videojuego'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="19"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="gaming" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4335][$key] ?? 'joystick';?>">
                            <h3 class="peripheral-name"><?= $joystick = $content[139][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Joysticks', 'Joysticks'); ?>">
                                        <img src="../images/hardware/hw/joystick_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Joysticks', 'Joysticks'); ?>"
                                            title="<?= hw_title($hw, 'Joysticks', 'Joysticks'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="20"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="input" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4336][$key] ?? 'tablet';?>">
                            <h3 class="peripheral-name"><?= $tablet = $content[140][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Tablets', 'Tabletas'); ?>">
                                        <img src="../images/hardware/hw/tablets_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Tablets', 'Tabletas'); ?>"
                                            title="<?= hw_title($hw, 'Tablets', 'Tabletas'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="21"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="audio" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4337][$key] ?? 'Microphone';?>">
                            <h3 class="peripheral-name"><?= $mic = $content[141][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Microphone', 'Micrófono'); ?>">
                                        <img src="../images/hardware/hw/mic_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Microphone', 'Micrófono'); ?>"
                                            title="<?= hw_title($hw, 'Microphone', 'Micrófono'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="22"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="audio" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4338][$key] ?? 'Headphones';?>">
                            <h3 class="peripheral-name"><?= $headset = $content[142][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Headsets', 'Headsets'); ?>">
                                        <img src="../images/hardware/hw/headset_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Headsets', 'Headsets'); ?>"
                                            title="<?= hw_title($hw, 'Headsets', 'Headsets'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="23"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="audio" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4339][$key] ?? 'Headphones';?>">
                            <h3 class="peripheral-name"><?= $headphone = $content[143][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Headphones', 'Audífonos'); ?>">
                                        <img src="../images/hardware/hw/headphones_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Headphones', 'Audífonos'); ?>"
                                            title="<?= hw_title($hw, 'Headphones', 'Audífonos'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="24"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="audio" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4340][$key] ?? 'Audio_Mixer';?>">
                            <h3 class="peripheral-name"><?= $audiomixer = $content[144][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Audio Mixer', 'Mezcladora de Audio'); ?>">
                                        <img src="../images/hardware/hw/mixer_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Audio Mixer', 'Mezcladora de Audio'); ?>"
                                            title="<?= hw_title($hw, 'Audio Mixer', 'Mezcladora de Audio'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="25"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="gaming" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4341][$key] ?? 'Controllers';?>">
                            <h3 class="peripheral-name"><?= $controller = $content[145][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Controllers', 'Controladores'); ?>">
                                        <img src="../images/hardware/hw/controller_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Controllers', 'Controladores'); ?>"
                                            title="<?= hw_title($hw, 'Controllers', 'Controladores'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="26"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="gaming" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4342][$key] ?? 'Uniforms';?>">
                            <h3 class="peripheral-name"><?= $uniforms = $content[146][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Gaming Uniforms', 'Uniformes Gaming'); ?>">
                                        <img src="../images/hardware/hw/uniforms_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Uniforms', 'Uniformes'); ?>"
                                            title="<?= hw_title($hw, 'Gaming Uniforms', 'Uniformes Gaming'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="27"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="input" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4343][$key] ?? 'tablet';?>">
                            <h3 class="peripheral-name"><?= $pencil = $content[147][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Pens and Pencils and Stylus', 'Lápices, Plumas y Tabletas'); ?>">
                                        <img src="../images/hardware/hw/pensandpencils_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Pens and Pencils and Stylus', 'Lápices, Plumas y Tabletas'); ?>"
                                            title="<?= hw_title($hw, 'Pens and Pencils and Stylus', 'Lápices, Plumas y Tabletas'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="28"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="furniture" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4344][$key] ?? 'Chairs';?>">
                            <h3 class="peripheral-name"><?= $chair = $content[148][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Chairs', 'Sillas'); ?>">
                                        <img src="../images/hardware/hw/chairs_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Chairs', 'Sillas'); ?>"
                                            title="<?= hw_title($hw, 'Chairs', 'Sillas'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="29"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="furniture" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4345][$key] ?? 'Desks';?>">
                            <h3 class="peripheral-name"><?= $desks = $content[149][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Desks', 'Escritorios'); ?>">
                                        <img src="../images/hardware/hw/desk_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Desks', 'Escritorios'); ?>"
                                            title="<?= hw_title($hw, 'Desks', 'Escritorios'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="30"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="accessories" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4346][$key] ?? 'Anti Slip Mats';?>">
                            <h3 class="peripheral-name"><?= $antislipmats = $content[150][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Anti Slip Mats', 'Alfombrillas Antideslizantes'); ?>">
                                        <img src="../images/hardware/hw/anti-slip-mat_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Anti Slip Mats', 'Alfombrillas Antideslizantes'); ?>"
                                            title="<?= hw_title($hw, 'Anti Slip Mats', 'Alfombrillas Antideslizantes'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="31"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="peripheral-card" data-type="audio" tabindex="0">
                    <div class="peripheral-content">
                        <a class="peripheral-link" href="<?=$content[4347][$key] ?? 'Speakers';?>">
                            <h3 class="peripheral-name"><?= $speakers_and_subwoofers = $content[151][$key] ?? ''; ?></h3>
                        </a>
                        <div class="peripheral-image">
                            <div class="multi-link-container">
                                <div class="thumbnail-container">
                                    <span tabindex="0" class="linked-text-img" role="button" aria-label="<?= hw_title($hw, 'Speakers and Subwoofers', 'Bocinas y Subwoofers'); ?>">
                                        <img src="../images/hardware/hw/speakers_thumb.webp"
                                            alt="<?= hw_alt($hw, 'Speakers and Subwoofers', 'Bocinas y Subwoofers'); ?>"
                                            title="<?= hw_title($hw, 'Speakers and Subwoofers', 'Bocinas y Subwoofers'); ?>"
                                            loading="lazy">
                                    </span>
                                </div>
                                <div class="image-dialog" data-carousel="true" data-start-index="32"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Photo by Rosen Genov from Pexels: https://www.pexels.com/photo/a-presonus-speaker-system-4295360/ -->
            </div>
        </div>
    </section>

    <template id="carousel-images">
        <?php
        $carouselItems = [
            [
                'original' => '../images/hardware/hw/cpu.jpg',
                'webp'     => '../images/hardware/hw/cpu.webp',
                'title'    => $content[109][$key] ?? 'CPU',
                'link'     => $content[4319][$key] ?? 'CPU'
            ],
            [
                'original' => '../images/hardware/hw/ram.jpg',
                'webp'     => '../images/hardware/hw/ram.webp',
                'title'    => $content[110][$key] ?? 'RAM',
                'link'     => $content[4320][$key] ?? 'RAM'
            ],
            [
                'original' => '../images/hardware/hw/memdrive.png',
                'webp'     => '../images/hardware/hw/memdrive.webp',
                'title'    => $content[111][$key] ?? 'Storage',
                'link'     => $content[4321][$key] ?? 'Storage'
            ],
            [
                'original' => '../images/websites/webcontent/2.jpg',
                'webp'     => '../images/hardware/hw/lapc.webp',
                'title'    => 'LatinosPC',
                'link'     => '../images/websites/webcontent/2.jpg'
            ],
            [
                'original' => '../images/hardware/hw/mobo.jpg',
                'webp'     => '../images/hardware/hw/mobo.webp',
                'title'    => $content[112][$key] ?? 'Motherboard',
                'link'     => $content[4322][$key] ?? 'Motherboard'
            ],
            [
                'original' => '../images/hardware/hw/psu.jpg',
                'webp'     => '../images/hardware/hw/psu.webp',
                'title'    => $content[113][$key] ?? 'Power Supply',
                'link'     => $content[4323][$key] ?? 'Power Supply'
            ],
            [
                'original' => '../images/hardware/hw/gpu.png',
                'webp'     => '../images/hardware/hw/gpu.webp',
                'title'    => $content[114][$key] ?? 'Graphics Card',
                'link'     => $content[4331][$key] ?? 'graphicscard'
            ],
            [
                'original' => '../images/hardware/case/case.webp',
                'webp'     => '../images/hardware/case/case.webp',
                'title'    => $content[115][$key] ?? 'Chassis',
                'link'     => $content[4348][$key] ?? 'Chassis'
            ],
            [
                'original' => '../images/hardware/hw/cooler.jpg',
                'webp'     => '../images/hardware/hw/cooler.webp',
                'title'    => $content[116][$key] ?? 'Coolers',
                'link'     => $content[4330][$key] ?? 'coolers'
            ],
            // Peripherals
            [
                'original' => '../images/hardware/hw/mouse.jpg',
                'webp'     => '../images/hardware/hw/mouse.webp',
                'title'    => $content[128][$key] ?? 'Mouse',
                'link'     => $content[4324][$key] ?? 'Mouse'
            ],
            [
                'original' => '../images/hardware/hw/keyboard.jpg',
                'webp'     => '../images/hardware/hw/keyboard.webp',
                'title'    => $content[129][$key] ?? 'Keyboard',
                'link'     => $content[4325][$key] ?? 'Keyboard'
            ],
            [
                'original' => '../images/hardware/hw/monitor.jpg',
                'webp'     => '../images/hardware/hw/monitor.webp',
                'title'    => $content[130][$key] ?? 'Monitor',
                'link'     => $content[4326][$key] ?? 'Monitor'
            ],
            [
                'original' => '../images/hardware/hw/portable.jpg',
                'webp'     => '../images/hardware/hw/portable.webp',
                'title'    => $content[131][$key] ?? 'External Drives',
                'link'     => $content[4327][$key] ?? 'External Drives'
            ],
            [
                'original' => '../images/hardware/hw/soundcard.jpg',
                'webp'     => '../images/hardware/hw/soundcard.webp',
                'title'    => $content[132][$key] ?? 'PCI Cards',
                'link'     => $content[4328][$key] ?? 'PciCard'
            ],
            [
                'original' => '../images/hardware/hw/psu2.png',
                'webp'     => '../images/hardware/hw/psu2.webp',
                'title'    => $content[133][$key] ?? 'Power Supply',
                'link'     => $content[4329][$key] ?? 'Power Supply'
            ],
            [
                'original' => '../images/hardware/hw/cooler.jpg',
                'webp'     => '../images/hardware/hw/cooler.webp',
                'title'    => $content[134][$key] ?? 'Cooling',
                'link'     => $content[4330][$key] ?? 'Cooling'
            ],
            [
                'original' => '../images/hardware/hw/gpu.png',
                'webp'     => '../images/hardware/hw/gpu.webp',
                'title'    => $content[135][$key] ?? 'Graphics Card',
                'link'     => $content[4331][$key] ?? 'graphicscard'
            ],
            [
                'original' => '../images/hardware/hw/scanner.png',
                'webp'     => '../images/hardware/hw/scanner.webp',
                'title'    => $content[136][$key] ?? 'Scanners',
                'link'     => $content[4332][$key] ?? 'Scanners'
            ],
            [
                'original' => '../images/hardware/hw/printer.png',
                'webp'     => '../images/hardware/hw/printer.webp',
                'title'    => $content[137][$key] ?? 'Printers',
                'link'     => $content[4333][$key] ?? 'Printers'
            ],
            [
                'original' => '../images/hardware/hw/controllers.png',
                'webp'     => '../images/hardware/hw/controllers.webp',
                'title'    => $content[138][$key] ?? 'Controllers',
                'link'     => $content[4334][$key] ?? 'Controllers'
            ],
            [
                'original' => '../images/hardware/hw/joystick.png',
                'webp'     => '../images/hardware/hw/joystick.webp',
                'title'    => $content[139][$key] ?? 'Joysticks',
                'link'     => $content[4335][$key] ?? 'joystick'
            ],
            [
                'original' => '../images/hardware/hw/tablets.png',
                'webp'     => '../images/hardware/hw/tablets.webp',
                'title'    => $content[140][$key] ?? 'Tablets',
                'link'     => $content[4336][$key] ?? 'tablet'
            ],
            [
                'original' => '../images/hardware/hw/mic.jpg',
                'webp'     => '../images/hardware/hw/mic.webp',
                'title'    => $content[141][$key] ?? 'Microphones',
                'link'     => $content[4337][$key] ?? 'Microphone'
            ],
            [
                'original' => '../images/hardware/hw/headset.png',
                'webp'     => '../images/hardware/hw/headset.webp',
                'title'    => $content[142][$key] ?? 'Headsets',
                'link'     => $content[4338][$key] ?? 'Headphones'
            ],
            [
                'original' => '../images/hardware/hw/headphones.png',
                'webp'     => '../images/hardware/hw/headphones.webp',
                'title'    => $content[143][$key] ?? 'Headphones',
                'link'     => $content[4339][$key] ?? 'Headphones'
            ],
            [
                'original' => '../images/hardware/hw/mixer.jpg',
                'webp'     => '../images/hardware/hw/mixer.webp',
                'title'    => $content[144][$key] ?? 'Audio Mixer',
                'link'     => $content[4340][$key] ?? 'Audio_Mixer'
            ],
            [
                'original' => '../images/hardware/hw/controller.jpg',
                'webp'     => '../images/hardware/hw/controller.webp',
                'title'    => $content[145][$key] ?? 'Controllers',
                'link'     => $content[4341][$key] ?? 'Controllers'
            ],
            [
                'original' => '../images/hardware/hw/uniforms.jpg',
                'webp'     => '../images/hardware/hw/uniforms.webp',
                'title'    => $content[146][$key] ?? 'Uniforms',
                'link'     => $content[4342][$key] ?? 'Uniforms'
            ],
            [
                'original' => '../images/hardware/hw/pensandpencils.jpg',
                'webp'     => '../images/hardware/hw/pensandpencils.webp',
                'title'    => $content[147][$key] ?? 'Pens and Pencils',
                'link'     => $content[4343][$key] ?? 'tablet'
            ],
            [
                'original' => '../images/hardware/hw/chairs.jpg',
                'webp'     => '../images/hardware/hw/chairs.webp',
                'title'    => $content[148][$key] ?? 'Chairs',
                'link'     => $content[4344][$key] ?? 'Chairs'
            ],
            [
                'original' => '../images/hardware/hw/desk.jpg',
                'webp'     => '../images/hardware/hw/desk.webp',
                'title'    => $content[149][$key] ?? 'Desks',
                'link'     => $content[4345][$key] ?? 'Desks'
            ],
            [
                'original' => '../images/hardware/hw/anti-slip-mat.jpg',
                'webp'     => '../images/hardware/hw/anti-slip-mat.webp',
                'title'    => $content[150][$key] ?? 'Anti Slip Mats',
                'link'     => $content[4346][$key] ?? 'Anti Slip Mats'
            ],
            [
                'original' => '../images/hardware/hw/speakers.jpg',
                'webp'     => '../images/hardware/hw/speakers.webp',
                'title'    => $content[151][$key] ?? 'Speakers and Subwoofers',
                'link'     => $content[4347][$key] ?? 'Speakers'
            ],
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
</article>
