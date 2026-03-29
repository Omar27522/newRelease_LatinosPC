<?php

echo "<h1 class=\"fullbar\">Hardware Main Page</h1>";
    $title="<h2>The Hardware is the computer it's physical components.</h2>";

    $description ="<p>These components may include the computer&#39;s
        functionality, design, materials, innovations, thermals, etc.<br />A computer is an electronic device that
        manipulates data or information. It has the ability to store,retrieve, and process data.<p>     <!--https://unsplash.com/photos/2sILr4DwabQ-->
        <h3><a href=\"https://latinospc.com/hardware/?anatomy_of_a_computer#navi\">The anatomy of a computer</a> typically includes,
    <a href=\"https://latinospc.com//hardware/?notebooks#navi\">Laptops</a>, Portable, Smart Devices, Modular PC's, ETC.</h3>";

    $contentSubTitles= ["Computer Parts",       "Central Processing Unit (CPU):",       "Memory (RAM):",        "Memory Storage Drive (hard drive, SSD):",
                            "Motherboard:",        "Power Supply Unit (PSU):",      "GPU:",       "Chassis:",       "Coolers",      "Input/Output devices:", "Peripheral devices:"  ];

    $content=['CPU' =>  "The \"brain\" of the computer, responsible for carrying out instructions of computer programs.",
                'RAM' =>  "Stores data that the CPU uses in the short-term.",
                    'HDD' =>  "Persistently stores data, even when the computer is powered off.",
                        'Motherboard' =>  "The main circuit board in a computer, which houses the CPU, memory, and other components.&nbsp;",
                            'PSU' =>  "Converts AC power from a wall outlet into DC power used by the computer.",
                                'GPU' =>  "specialized Graphic Processing Unit (GPU) that handles the computational heavy lifting needed for tasks.&nbsp ",
                                    'Chassis' =>  "Houses all the internal components a computer needs.",
                                        'Coolers' =>  "Help to regulate the temperature of the central processing unit (CPU) and other critical components of the computer.",
                                            'I/O' =>  "Allow data to be input into the computer (such as a keyboard and mouse) and output from the computer (such as a display and speakers).&nbsp",
                                                'Peripherals' =>  "Additional hardware connected to a computer, such as printers, scanners, and external hard drives.&nbsp"
             ];

    $peripherals = [
    "Mouse",
    "Keyboard",
    "Display",
    "External Memory Drives",
    "PCI Cards",
    "Power Supply",
    "Cooling",
    "GPU",
    "Scanners",
    "Printers",
    "Console Controllers",
    "Joystick",
    "Tablets",
    "Microphones",
    "Headsets",
    "Headphones",
    "Audio Mixers",
    "Controllers",
    "Gaming Uniforms",
    "Pens, Pencils & Tablets",
    "Chairs",
    "Desks",
    "Anti-Slip Mats",
    "Speakers and Subwoofers",
    "Peripherals",
    ];

    $hardwareTitles = [
        'cc'   => 'Console Controllers',
        'cpu'  => 'CPU',
        'ram'  => 'RAM',
        'ssd'  => 'SSD',
        'psu'  => 'PSU',
        'gpu'  => 'Graphics Cards',
        'pci'  => 'PCI Cards',
        'mouse' => 'Mouse',
        'desk'  => 'Desks',
        'chair'  => 'Chairs',
        'cooling'=> 'Cooling',
        'tablet' => 'Tablets',
        'micro'  => 'Microphones',
        'monitor' => 'Display',
        'headset' => 'Headsets',
        'printer' => 'Printers',
        'scanner' => 'Scanners',
        'chassis'  => 'Computer Case',
        'keyboard'  => 'Keyboard',
        'joystick'  => 'Joysticks',
        'headphone' => 'Headphones',
        'p_memory'  => 'Portable Memory',
        'controller' => 'Controllers',
        'audiomixer' => 'Audio Mixers',
        'motherboard' => 'Motherboard',
        'pencil' => 'Pens, Pencils and Tablets',
        'antislipmats' => 'Anti-Slip Mats',
        'speakers_and_subwoofers' => 'Speakers and Subwoofers',
        'team_uniformity_authority' => 'Uniforms'
    ];


    $descriptions ="<p>These components may include the computer&#39;s
        functionality, design, materials, innovations, thermals, etc.<br />A computer is an electronic device that
        manipulates data or information. It has the ability to store,retrieve, and process data.<p>     <!--https://unsplash.com/photos/2sILr4DwabQ-->
        <h3><a href=\"https://latinospc.com/hardware/?anatomy_of_a_computer#navi\">The anatomy of a computer</a> typically includes,
    <a href=\"https://latinospc.com//hardware/?notebooks#navi\">Laptops</a>, Portable, Smart Devices, Modular PC's, ETC.</h3>";

    $contentSubTitles= ["Computer Parts",       "Central Processing Unit (CPU):",       "Memory (RAM):",        "Memory Storage Drive (hard drive, SSD):",
                            "<small>Motherboard</small>:",        "Power Supply Unit (PSU):",      "GPU:",       "Chassis:",       "Coolers",      "<small>Input/Output</small> devices:", "Peripheral devices:"  ];

    $content=['CPU' =>  "The \"brain\" of the computer, responsible for carrying out instructions of computer programs.",
                'RAM' =>  "Stores data that the CPU uses in the short-term.",
                    'HDD' =>  "Persistently stores data, even when the computer is powered off.",
                        'Motherboard' =>  "The main circuit board in a computer, which houses the CPU, memory, and other components.&nbsp;",
                            'PSU' =>  "Converts AC power from a wall outlet into DC power used by the computer.",
                                'GPU' =>  "specialized Graphic Processing Unit (GPU) that handles the computational heavy lifting needed for tasks.&nbsp ",
                                    'Chassis' =>  "Houses all the internal components a computer needs.",
                                        'Coolers' =>  "Help to regulate the temperature of the central processing unit (CPU) and other critical components of the computer.",
                'I/O' =>  "Allow data to be input into the computer (such as a keyboard and mouse) and output from the computer (such as a display and speakers).&nbsp",
                'Peripherals' =>  "Additional hardware connected to a computer, such as printers, scanners, and external hard drives.&nbsp"
             ];
    ?>
    <article class="fullbar">
     <section class="hero3 article" id="article">
        <div style=background-color:whitesmoke;>
            <?= empty($title) ? $titulo : $title;?>
            <?= empty($descriptions) ? $descripcion : $descriptions;?>
        </div>
    </section>
    <section class="hero article" style="background-color: whitesmoke;">
        <div>
            <h2 style="text-align: center;" id="cpu">
                <?= empty($contentSubTitles[0]) ? $subTitulosContenido[0] : $contentSubTitles[0];?>
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
            <h2><?= empty($contentSubTitles[1]) ? $subTitulosContenido[0] : $contentSubTitles[1]; ?></h2>
            <p><?= empty($content['CPU']) ? $contenido['CPU'] : $content['CPU']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/cpu.jpg" alt="CPU component" title="CPU">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="ram">
        <a href="./ram" class="card-link">
            <h2><?= empty($contentSubTitles[2]) ? $subTitulosContenido[0] : $contentSubTitles[2]; ?></h2>
            <p><?= empty($content['RAM']) ? $contenido['RAM'] : $content['RAM']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/ram.jpg" alt="RAM module" title="RAM">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="ssd">
        <a href="./storage" class="card-link">
            <h2><?= empty($contentSubTitles[3]) ? $subTitulosContenido[0] : $contentSubTitles[3]; ?></h2>
            <p><?= empty($content['HDD']) ? $contenido['HDD'] : $content['HDD']; ?></p>
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
            <h2><?= empty($contentSubTitles[4]) ? $subTitulosContenido[4] : $contentSubTitles[4]; ?></h2>
            <p><?= empty($content['Motherboard']) ? $contenido['Motherboard'] : $content['Motherboard']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/mobo.jpg" alt="Motherboard" title="Motherboard">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="psu">
        <a href="./powersupply" class="card-link">
            <h2><?= empty($contentSubTitles[5]) ? $subTitulosContenido[5] : $contentSubTitles[5]; ?></h2>
            <p><?= empty($content['PSU']) ? $contenido['PSU'] : $content['PSU']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/psu.jpg" alt="Power Supply Unit" title="Power Supply Unit">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card featured" data-component="gpu">
        <a href="./graphicscard" class="card-link">
            <h2><?= empty($contentSubTitles[6]) ? $subTitulosContenido[6] : $contentSubTitles[6]; ?></h2>
            <p><?= empty($content['GPU']) ? $contenido['GPU'] : $content['GPU']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/gpu.png" alt="Graphics Card" title="Graphic Processing Unit">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="chassis">
        <a href="./chassis" class="card-link">
            <h2><?= empty($contentSubTitles[7]) ? $subTitulosContenido[7] : $contentSubTitles[7]; ?></h2>
            <p><?= empty($content['Chassis']) ? $contenido['Chassis'] : $content['Chassis']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/case/case.webp" alt="Computer Case" title="Computer Case">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="cooling">
        <a href="./coolers" class="card-link">
            <h2><?= empty($contentSubTitles[8]) ? $subTitulosContenido[8] : $contentSubTitles[8]; ?></h2>
            <p><?= empty($content['Coolers']) ? $contenido['Coolers'] : $content['Coolers']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/cooler.jpg" alt="CPU Cooler" title="Coolers">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="io">
        <a href="https://www.tutorialspoint.com/operating_system/os_io_hardware.htm" class="card-link">
            <h2><?= empty($contentSubTitles[9]) ? $subTitulosContenido[9] : $contentSubTitles[9]; ?></h2>
            <p><?= empty($content['I/O']) ? $contenido['I/O'] : $content['I/O']; ?></p>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="peripherals">
        <a href="#peripherals" class="card-link">
            <h2><?= empty($contentSubTitles[10]) ? $subTitulosContenido[10] : $contentSubTitles[10]; ?></h2>
            <p><?= empty($content['Peripherals']) ? $contenido['Peripherals'] : $content['Peripherals']; ?></p>
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
                <?= empty($peripherals[24]) ? $perifericos[24] : $peripherals[24];?>
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
                        <h3 class="peripheral-name"><?= $mouse = empty($peripherals[0]) ? $perifericos[0] : $peripherals[0]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/mouse.jpg" alt="<?= $mouse; ?>" title="<?= $mouse; ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="./keyboard">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $keyboard = empty($peripherals[1]) ? $perifericos[1] : $peripherals[1]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/keyboard.jpg" alt="<?= $keyboard; ?>" title="<?= $keyboard; ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="output" tabindex="0">
                <a class="peripheral-link" href="./monitor">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[2]) ? $perifericos[2] : $peripherals[2]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[3]) ? $perifericos[3] : $peripherals[3]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[4]) ? $perifericos[4] : $peripherals[4]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[5]) ? $perifericos[5] : $peripherals[5]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[6]) ? $perifericos[6] : $peripherals[6]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[7]) ? $perifericos[7] : $peripherals[7]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[8]) ? $perifericos[8] : $peripherals[8]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[9]) ? $perifericos[9] : $peripherals[9]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[10]) ? $perifericos[10] : $peripherals[10]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[11]) ? $perifericos[11] : $peripherals[11]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[12]) ? $perifericos[12] : $peripherals[12]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[13]) ? $perifericos[13] : $peripherals[13]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[14]) ? $perifericos[14] : $peripherals[14]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[15]) ? $perifericos[15] : $peripherals[15]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[16]) ? $perifericos[16] : $peripherals[16]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[17]) ? $perifericos[17] : $peripherals[17]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[18]) ? $perifericos[18] : $peripherals[18]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[19]) ? $perifericos[19] : $peripherals[19]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[20]) ? $perifericos[20] : $peripherals[20]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[21]) ? $perifericos[21] : $peripherals[21]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[22]) ? $perifericos[22] : $peripherals[22]; ?></h3>
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
                        <h3 class="peripheral-name"><?= empty($peripherals[23]) ? $perifericos[23] : $peripherals[23]; ?></h3>
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