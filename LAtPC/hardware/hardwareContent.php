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
            <!-- <a href="https://latinospc.com/images/hardware/hw/mobo.jpg" title="Motherboard">
                <img src="https://latinospc.com/images/hardware/hw/mobo.webp" alt="Motherboard" style="transform: translateX(20%)"/></a>
    Make this image randomize with all the images from here, I really would like to build a fulls creen gallery page maybe, where the image has a right and a left button.
	under the main image there is a carrousel of more images. Then the Gallery section will be right under This gallery section.
    -->
            <!-- (-.-)Zzz...--|c[_]|--â˜ã€ãƒ„ã€‘â˜--|c[_]|--\(^-^)/--|c[_]|--(â•¯Â°â–¡Â°ï¼‰â•¯ ï¸µ â”»â”â”» **`áƒ¦Â´** Computer Parts-->
    </div>

    <ul>
        <div class="hardware-grid">
    <div tabindex="0" class="hardware-card" data-component="cpu">
        <a href="./cpu" class="card-link">
            <h2><?= $content[109][$key] ?? ''; ?></h2>
            <p><?= $content[119][$key] ?? ''; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/cpu.jpg" alt="CPU component" title="CPU">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="ram">
        <a href="./ram" class="card-link">
            <h2><?= $content[110][$key] ?? ''; ?></h2>
            <p><?= $content[120][$key] ?? ''; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/ram.jpg" alt="RAM module" title="RAM">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="ssd">
        <a href="./storage" class="card-link">
            <h2><?= $content[111][$key] ?? ''; ?></h2>
            <p><?= $content[121][$key] ?? ''; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/memdrive.png" alt="Storage drive" title="Memory Drive">
            </div>
        </a>
    </div>

    <div class="hardware-logo">
        <a rel="example_group" href="https://latinospc.com/images/websites/webcontent/2.jpg" title="LatinosPC Logo">
            <img src="https://latinospc.com/images/hardware/hw/lapc.webp" alt="LatinosPC Logo" title="LatinosPC">
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="motherboard">
        <a href="./motherboard" class="card-link">
            <h2><?= $content[112][$key] ?? ''; ?></h2>
            <p><?= $content[122][$key] ?? ''; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/mobo.jpg" alt="Motherboard" title="Motherboard">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="psu">
        <a href="./powersupply" class="card-link">
            <h2><?= $content[113][$key] ?? ''; ?></h2>
            <p><?= $content[123][$key] ?? ''; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/psu.jpg" alt="Power Supply Unit" title="Power Supply Unit">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card featured" data-component="gpu">
        <a href="./graphicscard" class="card-link">
            <h2><?= $content[114][$key] ?? ''; ?></h2>
            <p><?= $content[124][$key] ?? ''; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/gpu.png" alt="Graphics Card" title="Graphic Processing Unit">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="chassis">
        <a href="./chassis" class="card-link">
            <h2><?= $content[115][$key] ?? ''; ?></h2>
            <p><?= $content[125][$key] ?? ''; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/case/case.webp" alt="Computer Case" title="Computer Case">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="cooling">
        <a href="./coolers" class="card-link">
            <h2><?= $content[116][$key] ?? ''; ?></h2>
            <p><?= $content[126][$key] ?? ''; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/cooler.jpg" alt="CPU Cooler" title="Coolers">
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
            <p><?= $content[128][$key] ?? ''; ?></p>
        </a>
    </div>
    </div>


        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/mouse.jpg" title="Mouse"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/keys.jpg" title="Keyboard"></a>
        <!--https://unsplash.com/photos/mFtcZzLruCQ-->
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/display.jpg" title="Display"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/memory.jpg"
            title="External Memory Drives"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/pci.jpg" title="PCI Cards"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/psu.jpg"
            title="Power Supply"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/cooler.jpg" title="Cooling"></a>
        <!--https://unsplash.com/photos/5fZqHF21CIw-->
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/gpu.jpg" title="GPU"></a>
        <!--https://unsplash.com/photos/d6gyCYQU1vc-->
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/scanners.jpg"
            title="Scanners"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer.jpg"
            title="Printers"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/c_controllers.jpg"
            title="Console Controllers"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/joystick.jpg"
            title="Joysticks"></a>
        <!--https://unsplash.com/photos/V5hAryReZzo-->
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/tablet.jpg" title="Tablets"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/microphone.jpg"
            title="Microphones"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/headset.jpg"
            title="Headsets"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/headphones.jpg"
            title="Headphones"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/audio_mixer.jpg"
            title="Audio Mixers"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/controller.jpg"
            title="Controllers"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/uniform.jpg"
            title="Gaming Uniforms"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/pen.jpg"
            title="Pens, Pencils and Tablets"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/chairs.jpg" title="Chairs"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/desk.jpg" title="Desks"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/anti-slip-mat.jpg"
            title="Anti-Slip Mats"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/speakers.jpg"
            title="Speakers and Subwoofers"></a>
        <div class="clr"></div>
    </section>

    <section class="peripherals-section">
    <div class="peripherals-header">
        <a href="#scroll" class="peripherals-title-link">
            <h2 id="peripherals" class="peripherals-title">
                <?= $content[153][$key] ?? '';?>
            </h2>
        </a>
    </div>

    <div class="peripherals-container">
        <div class="peripherals-grid">
            <?php
            function hw_Link($hw, $en, $es) {
                echo $hw === 'en' ? $en : ($hw === 'es' ? $es : 'ERROR');
            }
            function hw_alt($hw, $en, $es) {
                echo $hw === 'en' ? $en : ($hw === 'es' ? $es : 'ERROR');
            }
            function hw_title($hw, $en, $es) {
                echo $hw === 'en' ? $en : ($hw === 'es' ? $es : 'ERROR');
            }
            ?>

            <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="./mouse">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $mouse = $content[129][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/mouse.jpg" alt="<?= $mouse; ?>" title="<?= $mouse; ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="./keyboard">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $keyboard = $content[130][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/keyboard.jpg" alt="<?= $keyboard; ?>" title="<?= $keyboard; ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="output" tabindex="0">
                <a class="peripheral-link" href="./monitor">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[131][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/monitor.jpg"
                                alt="<?= hw_alt($hw, $en='Display', $es='Pantalla'); ?>"
                                title="<?= hw_title($hw, $en='Computer Monitor', $es='Pantalla de la computadora'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="storage" tabindex="0">
                <a class="peripheral-link" href="./p_memory">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[132][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/portable.jpg"
                                alt="<?= hw_alt($hw, $en='External Drives', $es='Memoria Externa'); ?>"
                                title="<?= hw_title($hw, $en='External Drives', $es='Memoria Externas'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="component" tabindex="0">
                <a class="peripheral-link" href="./pci">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[133][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/soundcard.jpg"
                                alt="<?= hw_alt($hw, $en='PCI Cards', $es='Tarjetas PCI'); ?>"
                                title="<?= hw_title($hw, $en='Peripheral Component Interconnect Cards', $es='Componente PerifÃ©rico InterconexiÃ³n'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="power" tabindex="0">
                <a class="peripheral-link" href="./psu">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[134][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/psu2.png"
                                alt="<?= hw_alt($hw, $en='Power Supply', $es='Fuente de Poder'); ?>"
                                title="<?= hw_title($hw, $en='PSU', $es='Fuente de Poder'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="cooling" tabindex="0">
                <a class="peripheral-link" href="./cooling">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[135][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/cooler.jpg"
                                alt="<?= hw_alt($hw, $en='Cooling', $es='Enfriamiento'); ?>"
                                title="<?= hw_title($hw, $en='Cooling', $es='Enfriamiento'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="graphics" featured tabindex="0">
                <a class="peripheral-link" href="./gpu">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[136][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/gpu.png"
                                alt="<?= hw_alt($hw, $en='GPU', $es='Tarjeta GrÃ¡fica'); ?>"
                                title="<?= hw_title($hw, $en='GPU', $es='Tarjeta GrÃ¡fica'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="./scanner">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[137][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/scanner.png"
                                alt="<?= hw_alt($hw, $en='Scanners', $es='EscÃ¡neres'); ?>"
                                title="<?= hw_title($hw, $en='Scanners', $es='EscÃ¡neres'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="output" tabindex="0">
                <a class="peripheral-link" href="./printer">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[138][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/printer.png"
                                alt="<?= hw_alt($hw, $en='Printers', $es='Impresoras'); ?>"
                                title="<?= hw_title($hw, $en='Printers', $es='Impresoras'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="gaming" tabindex="0">
                <a class="peripheral-link" href="./console_controllers">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[139][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/controllers.png"
                                alt="<?= hw_alt($hw, $en='Controllers', $es='Mandos de Consola'); ?>"
                                title="<?= hw_title($hw, $en='Video Game Controllers', $es='Mandos de Videojuego'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="gaming" tabindex="0">
                <a class="peripheral-link" href="./joystick">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[140][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/joystick.png"
                                alt="<?= hw_alt($hw, $en='Joysticks', $es='Joysticks'); ?>"
                                title="<?= hw_title($hw, $en='Joysticks', $es='Joysticks'); ?>">
                        </div>
                    </div>
                </a>
            </div>

                              <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="./tablet">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[141][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/tablets.png"
                                alt="<?= hw_alt($hw, $en='Tablets', $es='Tabletas'); ?>"
                                title="<?= hw_title($hw, $en='Tablets', $es='Tabletas'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="./micro">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[142][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/mic.jpg"
                                alt="<?= hw_alt($hw, $en='Microphone', $es='MicrÃ³fono'); ?>"
                                title="<?= hw_title($hw, $en='Microphone', $es='MicrÃ³fono'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="./headset">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[143][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/headset.png"
                                alt="<?= hw_alt($hw, $en='Headsets', $es='Headsets'); ?>"
                                title="<?= hw_title($hw, $en='Headsets', $es='Headsets'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="./headphone">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[144][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/headphones.png"
                                alt="<?= hw_alt($hw, $en='Headphones', $es='AudÃ­fonos'); ?>"
                                title="<?= hw_title($hw, $en='Headphones', $es='AudÃ­fonos'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="./audiomixer">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[145][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/mixer.jpg"
                                alt="<?= hw_alt($hw, $en='Audio Mixer', $es='Mezcladora de Audio'); ?>"
                                title="<?= hw_title($hw, $en='Audio Mixer', $es='Mezcladora de Audio'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="gaming" tabindex="0">
                <a class="peripheral-link" href="./controller">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[146][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/controller.jpg"
                                alt="<?= hw_alt($hw, $en='Controllers', $es='Controladores'); ?>"
                                title="<?= hw_title($hw, $en='Controllers', $es='Controladores'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="gaming" tabindex="0">
                <a class="peripheral-link" href="./uniforms">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[147][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/uniforms.jpg"
                                alt="<?= hw_alt($hw, $en='Uniforms', $es='Uniformes'); ?>"
                                title="<?= hw_title($hw, $en='Gaming Uniforms', $es='Uniformes Gaming'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="./pencil">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[148][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/pensandpencils.jpg"
                                alt="<?= hw_alt($hw, $en='Pens and Pencils and Stylus', $es='LÃ¡pices, Plumas y Tabletas'); ?>"
                                title="<?= hw_title($hw, $en='Pens and Pencils and Stylus', $es='LÃ¡pices, Plumas y Tabletas'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="furniture" tabindex="0">
                <a class="peripheral-link" href="./chair">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[149][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/chairs.jpg"
                                alt="<?= hw_alt($hw, $en='Chairs', $es='Sillas'); ?>"
                                title="<?= hw_title($hw, $en='Chairs', $es='Sillas'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="furniture" tabindex="0">
                <a class="peripheral-link" href="./desk">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[150][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/desk.jpg"
                                alt="<?= hw_alt($hw, $en='Desks', $es='Escritorios'); ?>"
                                title="<?= hw_title($hw, $en='Desks', $es='Escritorios'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="accessories" tabindex="0">
                <a class="peripheral-link" href="./antislipmats">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[151][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/anti-slip-mat.jpg"
                                alt="<?= hw_alt($hw, $en='Anti Slip Mats', $es='Alfombrillas Antideslizantes'); ?>"
                                title="<?= hw_title($hw, $en='Anti Slip Mats', $es='Alfombrillas Antideslizantes'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="./speakers_and_subwoofers">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $content[152][$key] ?? ''; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/speakers.jpg"
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