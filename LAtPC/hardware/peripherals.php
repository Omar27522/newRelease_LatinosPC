<?php
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
    ?>
    <section class="peripherals-section fullbar">
    <div class="peripherals-header">
        <a href="#scroll" class="peripherals-title-link">
            <h1 id="peripherals" class="peripherals-title">
                Peripherals
            </h1>
        </a>
    </div>



    <div class="peripherals-container">
        <div class="peripherals-grid">
            <?php
            if (!function_exists('hw_Link')) {
                function hw_Link($hw, $en, $es) {
                    echo $hw === 'en' ? $en : ($hw === 'es' ? $es : 'ERROR');
                }
            }
            if (!function_exists('hw_alt')) {
                function hw_alt($hw, $en, $es) {
                    echo $hw === 'en' ? $en : ($hw === 'es' ? $es : 'ERROR');
                }
            }
            if (!function_exists('hw_title')) {
                function hw_title($hw, $en, $es) {
                    echo $hw === 'en' ? $en : ($hw === 'es' ? $es : 'ERROR');
                }
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
                                title="<?= hw_title($hw, $en='Peripheral Component Interconnect Cards', $es='Componente Periférico Interconexión'); ?>">
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
                                alt="<?= hw_alt($hw, $en='GPU', $es='Tarjeta Gráfica'); ?>"
                                title="<?= hw_title($hw, $en='GPU', $es='Tarjeta Gráfica'); ?>">
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
                                alt="<?= hw_alt($hw, $en='Scanners', $es='Escáneres'); ?>"
                                title="<?= hw_title($hw, $en='Scanners', $es='Escáneres'); ?>">
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
                                alt="<?= hw_alt($hw, $en='Microphone', $es='Micrófono'); ?>"
                                title="<?= hw_title($hw, $en='Microphone', $es='Micrófono'); ?>">
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
                                alt="<?= hw_alt($hw, $en='Headphones', $es='Audífonos'); ?>"
                                title="<?= hw_title($hw, $en='Headphones', $es='Audífonos'); ?>">
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
                                alt="<?= hw_alt($hw, $en='Pens and Pencils and Stylus', $es='Lápices, Plumas y Tabletas'); ?>"
                                title="<?= hw_title($hw, $en='Pens and Pencils and Stylus', $es='Lápices, Plumas y Tabletas'); ?>">
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
