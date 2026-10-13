<header>
    <a href="tel:+19092767214" class="phone">
        909-276-7214
    </a>
    <div class="logo">
        <div class="logos"><span>LAt</span>inos<span>PC</span>.com
            <small class="rtl">
                <?php
                if($page->getLang() == "en"):
                    echo "PC, is for Personal Computer";
                elseif($page->getLang() == "es-419"):
                    echo "PC, es Computadora Personal";
                endif; ?>
            </small>
        </div>
    </div>
    <nav class="sticky">
        <!--    TerwanPOP   https://codepen.io/erikterwan/pen/EVzeRP -->
        <div role="navigation" class="burg">
            <div id="menuToggle"><input type="checkbox" id="menu-checkbox" aria-label="Toggle Navigation Menu" />
                <span></span><span></span><span></span>

                <ul id="menu">
                    <li class="titleli"><?php
                if($page->getLang() == "en"):
                    echo "Our Lord and Savior Jesus Christ";
                elseif($page->getLang() == "es-419"):
                    echo "Nuestro Señor y Salvador Jesucristo";
                endif; ?></li>

                    <li>
                        <a href="<?php
                        if($page ->getLang() == "en"):
                            echo "https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html";
                        elseif($page->getLang() == "es-419"):
                            echo "https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_sp.html";
                        endif; ?>" target="_blank">
                            <img src="../images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb9.webp"
                                width="100%" height="auto" alt="JesusChrist">
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        if($page->getLang() == "en"):
                            echo  $page->getDir(). "JesusChrist/father_in_heaven_tell_me_about_web";
                        elseif($page->getLang() == "es-419"):
                            echo $page->getDir(). "Jesucristo/padre_celestial_cuentame_sobre_el_internet";
                        endif; ?>">
                            <?php
                        if($page->getLang() == "en"):
                            echo "Heavenly Father tell me about the Web";
                        elseif($page->getLang() == "es-419"):
                            echo "Padre en el Cielo dime acerca de la red";
                        endif; ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        if($page->getLang() == "en"):
                            echo  $page->getDir(). "JesusChrist/parables";
                        elseif($page->getLang() == "es-419"):
                            echo $page->getDir(). "Jesucristo/parabolas";
                        endif;?>">
                            <!-- https://bibilium.com/38-parables-of-Jesus-parables-of-Jesus/ -->
                            <?php
                        if($page->getLang() == "en"):
                            echo "Parables";
                        elseif($page->getLang() == "es-419"):
                            echo "Parabolas";
                        endif;?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        if($page->getLang() == "en"):
                            echo $page->getDir(). "JesusChrist/sermons";
                        elseif($page->getLang() == "es-419"):
                            echo $page->getDir(). "Jesucristo/sermones";
                        endif;?>">
                            <?php
                        if($page->getLang() == "en"):
                            echo "Sermons/Discourses";
                        elseif($page->getLang() == "es-419"):
                            echo "Sermones/Discursos";
                        endif;?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        if($page->getLang() == "en"):
                            echo $page->getDir(). "JesusChrist/apostles";
                        elseif($page->getLang() == "es-419"):
                            echo $page->getDir(). "Jesucristo/apostoles";
                        endif;?>">
                            <?php
                        if($page->getLang() == "en"):
                            echo "The Apostles";
                        elseif($page->getLang() == "es-419"):
                            echo "Los Apóstoles";
                        endif;?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        if($page->getLang() == "en"):
                            echo $page->getDir(). "JesusChrist/teachings";
                        elseif($page->getLang() == "es-419"):
                            echo $page->getDir(). "Jesucristo/enseñanzas";
                        endif;?>">
                            <?php
                        if($page->getLang() == "en"):
                            echo "His Teachings";
                        elseif($page->getLang() == "es-419"):
                            echo "Las enseñanzas";
                        endif;?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        if($page->getLang() == "en"):
                            echo $page->getDir(). "offered_security/backups";
                        elseif($page->getLang() == "es-419"):
                            echo $page->getDir(). "seguridad/respaldos";
                        endif;?>">
                            <?php
                        if($page->getLang() == "en"):
                            echo "Computer Backup";
                        elseif($page->getLang() == "es-419"):
                            echo "Respaldos PC";
                        endif;?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        if($page->getLang() == "en"):
                            echo $page->getDir(). "hardware_options";
                        elseif($page->getLang() == "es-419"):
                            echo $page->getDir(). "opciones_hardware";
                        endif;?>">
                            <?php
                        if($page->getLang() == "en"):
                            echo "Hardware/Parts";
                        elseif($page->getLang() == "es-419"):
                            echo "Hardware/Partes";
                        endif;?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        if($page->getLang() == "en"):
                            echo $page->getDir(). "software_options";
                        elseif($page->getLang() == "es-419"):
                            echo $page->getDir(). "opciones_software";
                        endif;?>">
                            <?php
                        if($page->getLang() == "en"):
                            echo "Software/Programs";
                        elseif($page->getLang() == "es-419"):
                            echo "Software/Programas";
                        endif;?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        if($page->getLang() == "en"):
                            echo $page->getDir(). "offered_services/websites";
                        elseif($page->getLang() == "es-419"):
                            echo $page->getDir(). "servicios/sitiosWeb";
                        endif;?>">
                            <?php
                        if($page->getLang() == "en"):
                            echo "Websites";
                        elseif($page->getLang() == "es-419"):
                            echo "Sitios Web";
                        endif;?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        if($page->getLang() == "en"):
                            echo $page->getDir(). "offered_security/";
                        elseif($page->getLang() == "es-419"):
                            echo $page->getDir(). "seguridad/";
                        endif;?>">
                            <?php
                        if($page->getLang() == "en"):
                            echo "Security";
                        elseif($page->getLang() == "es-419"):
                            echo "Seguridad";
                        endif;?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        if($page->getLang() == "en"):
                            echo $page->getDir(). "offered_security/best_practices";
                        elseif($page->getLang() == "es-419"):
                            echo $page->getDir(). "seguridad/mejores_practicas";
                        endif;?>">
                            <?php
                        if($page->getLang() == "en"):
                            echo "Best Practices";
                        elseif($page->getLang() == "es-419"):
                            echo "Mejores Prácticas";
                        endif;?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        if($page->getLang() == "en"):
                            echo $page->getDir(). "offered_security/passwords";
                        elseif($page->getLang() == "es-419"):
                            echo $page->getDir(). "seguridad/clave";
                        endif;?>">
                            <?php
                        if($page->getLang() == "en"):
                            echo "Passwords";
                        elseif($page->getLang() == "es-419"):
                            echo "Contraseñas";
                        endif;?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php
                        if($page->getLang() == "en"):
                            echo "#";
                        elseif($page->getLang() == "es-419"):
                            echo "#";
                        endif;?>">
                            <?php
                        if($page->getLang() == "en"):
                            echo "Gallery";
                        elseif($page->getLang() == "es-419"):
                            echo "Galería";
                        endif;?>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- ^   TerwanPOP Made by Erik Terwan   ^ -->
        </div>
        <?php
        if($page->getLang() == "en"):
            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $routes = [
                "/JesusChrist/father_in_heaven_tell_me_about_web" => "Jesucristo/padre_celestial_cuentame_sobre_el_internet",
                "/JesusChrist/parables" => "Jesucristo/parabolas",
                "/JesusChrist/sermons" => "Jesucristo/sermones",
                "/JesusChrist/apostles" => "Jesucristo/apostoles",
                "/JesusChrist/teachings" => "Jesucristo/enseñanzas",
                "/about" => "acerca",
                "/offered_security" => "seguridad",
                "/offered_security/best_practices" => "seguridad/mejores_practicas",
                "/offered_security/passwords" => "seguridad/clave",
                "/offered_security/backups" => "seguridad/respaldos",
                "/offered_services" => "servicios",
                "/offered_services/cleanups" => "servicios/limpieza",
                "/offered_services/protection" => "servicios/proteccion",
                "/offered_services/consultations" => "servicios/consultas",
                "/offered_services/managedServices" => "servicios/serviciosGestionados",
                "/offered_services/remoteSupport" => "servicios/soporteRemoto",
                "/offered_services/websites" => "servicios/sitiosWeb",
                "/hardware_options" => "opciones_hardware",
                "/hardware_options/cpu" => "opciones_hardware/cpu",
                "/hardware_options/psu" => "opciones_hardware/psu",
                "/hardware_options/motherboard" => "opciones_hardware/motherboard",
                "/hardware_options/storage" => "opciones_hardware/almacenamiento",
                "/hardware_options/ram" => "opciones_hardware/ram",
                "/hardware_options/gpu" => "opciones_hardware/tarjeta_grafica",
                "/hardware_options/cooling" => "opciones_hardware/enfriamiento",
                "/hardware_options/chassis" => "opciones_hardware/carcasa",
                "/hardware_options/displays" => "opciones_hardware/displays",
                "/hardware_options/peripherals" => "opciones_hardware/perifericos", 
                "/hardware_options/sound_cards" => "opciones_hardware/tarjetas_de_sonido",
                "/hardware_options/networking" => "opciones_hardware/redes",
                "/hardware_options/mouse" => "opciones_hardware/raton",
                "/hardware_options/keyboard" => "opciones_hardware/teclado",
                "/hardware_options/portableMemory" => "opciones_hardware/memoria_portatil",
                "/hardware_options/pci_cards" => "opciones_hardware/tarjetas_pci",
                "/hardware_options/scanners" => "opciones_hardware/escaneres",
                "/hardware_options/printers" => "opciones_hardware/impresoras",
                "/hardware_options/console_controllers" => "opciones_hardware/controladores_de_consola",                
                "/hardware_options/joysticks" => "opciones_hardware/joysticks",
                "/hardware_options/tablets" => "opciones_hardware/tablets",
                "/hardware_options/microphones" => "opciones_hardware/microfonos",
                "/hardware_options/headset" => "opciones_hardware/headset",
                "/hardware_options/headphones" => "opciones_hardware/audifonos",
                "/hardware_options/audio_mixers" => "opciones_hardware/mezcladoras_de_audio",
                "/hardware_options/controllers" => "opciones_hardware/controladores",
                "/hardware_options/gaming_uniforms" => "opciones_hardware/uniformes_de_gaming",
                "/hardware_options/pens_pencils_tablets" => "opciones_hardware/lapices_plumas_y_tablets",
                "/hardware_options/chairs" => "opciones_hardware/sillas",
                "/hardware_options/desks" => "opciones_hardware/escritorios",
                "/hardware_options/anti_slip_mats" => "opciones_hardware/tapetes_antideslizantes",
                "/hardware_options/speakers_and_subwoofers" => "opciones_hardware/altavoces_y_subwoofers",
                "/software_options" => "opciones_software",
                "/software_options/" => "opciones_software",
                "/software_options/anti_virus" => "opciones_software/antivirus",
                "/software_options/antivirus" => "opciones_software/antivirus",
                "/software_options/malware_cleaner" => "opciones_software/limpiador_malware",
                "/software_options/limpiador_malware" => "opciones_software/limpiador_malware",
                "/software_options/web_browsers" => "opciones_software/navegadores",
                "/software_options/navegadores" => "opciones_software/navegadores",
                "/software_options/media" => "opciones_software/multimedia",
                "/software_options/multimedia" => "opciones_software/multimedia",
                "/software_options/runtimes" => "opciones_software/runtimes",
                "/software_options/imaging" => "opciones_software/imagenes",
                "/software_options/imagenes" => "opciones_software/imagenes",
                "/software_options/messaging" => "opciones_software/mensajeria",
                "/software_options/mensajeria" => "opciones_software/mensajeria",
                "/software_options/documents" => "opciones_software/documentos",
                "/software_options/documentos" => "opciones_software/documentos",
                "/software_options/file_sharing" => "opciones_software/compartir_archivos",
                "/software_options/compartir_archivos" => "opciones_software/compartir_archivos",
                "/software_options/online_storage" => "opciones_software/almacenamiento_en_linea",
                "/software_options/almacenamiento_en_linea" => "opciones_software/almacenamiento_en_linea",
                "/software_options/other" => "opciones_software/otro",
                "/software_options/otro" => "opciones_software/otro",
                "/software_options/utilities" => "opciones_software/utilidades",
                "/software_options/utilidades" => "opciones_software/utilidades",
                "/software_options/compression" => "opciones_software/compresion",
                "/software_options/compresion" => "opciones_software/compresion",
                "/software_options/developer_tools" => "opciones_software/herramientas_de_desarrollo",
                "/software_options/herramientas_de_desarrollo" => "opciones_software/herramientas_de_desarrollo"
            ];
            $var = isset($routes[$uri]) ? $routes[$uri] : $page->getDir()."español";

            $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
            if (!empty($query)) $var .= '?' . $query;
            ?>
        <button><a href="<?= $page->getDir();?>">Home</a></button>
        <button><a href="<?= $page->getDir() . $var;?>">Español</a></button>
        <button><a href="<?= $page->getDir();?>offered_services">Services</a></button>
        <button><a href="#">Contact Us</a></button>
        <button><a href="#">Reviews</a></button>
        <?php
        elseif($page->getLang() == "es-419"):
            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $routes = [
                "/Jesucristo/padre_celestial_cuentame_sobre_el_internet" => "JesusChrist/father_in_heaven_tell_me_about_web",
                "/Jesucristo/parabolas" => "JesusChrist/parables",
                "/Jesucristo/sermones" => "JesusChrist/sermons",
                "/Jesucristo/apostoles" => "JesusChrist/apostles",
                "/Jesucristo/enseñanzas" => "JesusChrist/teachings",
                "/acerca" => "about",
                "/seguridad" => "offered_security",
                "/seguridad/mejores_practicas" => "offered_security/best_practices",
                "/seguridad/clave" => "offered_security/passwords",
                "/seguridad/respaldos" => "offered_security/backups",
                "/servicios" => "offered_services",
                "/servicios/limpieza" => "offered_services/cleanups",
                "/servicios/proteccion" => "offered_services/protection",
                "/servicios/consultas" => "offered_services/consultations",
                "/servicios/serviciosGestionados" => "offered_services/managedServices",
                "/servicios/soporteRemoto" => "offered_services/remoteSupport",
                "/servicios/sitiosWeb" => "offered_services/websites",
                "/opciones_hardware" => "hardware_options",
                "/opciones_hardware/cpu" => "hardware_options/cpu",
                "/opciones_hardware/fuente_de_poder" => "hardware_options/psu",
                "/opciones_hardware/tarjeta_madre" => "hardware_options/motherboard",
                "/opciones_hardware/almacenamiento" => "hardware_options/storage",
                "/opciones_hardware/memoria_ram" => "hardware_options/ram",
                "/opciones_hardware/tarjeta_grafica" => "hardware_options/gpu",
                "/opciones_hardware/enfriamiento" => "hardware_options/cooling",
                "/opciones_hardware/carcasa" => "hardware_options/chassis",
                "/opciones_hardware/displays" => "hardware_options/displays",
                "/opciones_hardware/perifericos" => "hardware_options/peripherals",
                "/opciones_hardware/tarjetas_de_sonido" => "hardware_options/sound_cards",
                "/opciones_hardware/networking" => "hardware_options/networking",
                "/opciones_hardware/raton" => "hardware_options/mouse",
                "/opciones_hardware/teclado" => "hardware_options/keyboard",
                "/opciones_hardware/memoria_portatil" => "hardware_options/portableMemory",
                "/opciones_hardware/tarjetas_pci" => "hardware_options/pci_cards",
                "/opciones_hardware/escaneres" => "hardware_options/scanners",
                "/opciones_hardware/impresoras" => "hardware_options/printers",
                "/opciones_hardware/controladores_de_consola" => "hardware_options/console_controllers",
                "/opciones_hardware/joysticks" => "hardware_options/joysticks",
                "/opciones_hardware/tablets" => "hardware_options/tablets",
                "/opciones_hardware/microfonos" => "hardware_options/microphones",
                "/opciones_hardware/headset" => "hardware_options/headset",
                "/opciones_hardware/audifonos" => "hardware_options/headphones",
                "/opciones_hardware/mezcladoras_de_audio" => "hardware_options/audio_mixers",
                "/opciones_hardware/controladores" => "hardware_options/controllers",
                "/opciones_hardware/uniformes_de_gaming" => "hardware_options/gaming_uniforms",
                "/opciones_hardware/lapices_plumas_y_tablets" => "hardware_options/pens_pencils_tablets",
                "/opciones_hardware/sillas" => "hardware_options/chairs",
                "/opciones_hardware/escritorios" => "hardware_options/desks",
                "/opciones_hardware/tapetes_antideslizantes" => "hardware_options/anti_slip_mats",
                "/opciones_hardware/altavoces_y_subwoofers" => "hardware_options/speakers_and_subwoofers",
                "/opciones_software" => "software_options",
                "/opciones_software/" => "software_options",
                "/opciones_software/antivirus" => "software_options/anti_virus",
                "/opciones_software/anti_virus" => "software_options/anti_virus",
                "/opciones_software/limpiador_malware" => "software_options/malware_cleaner",
                "/opciones_software/malware_cleaner" => "software_options/malware_cleaner",
                "/opciones_software/navegadores" => "software_options/web_browsers",
                "/opciones_software/web_browsers" => "software_options/web_browsers",
                "/opciones_software/multimedia" => "software_options/media",
                "/opciones_software/media" => "software_options/media",
                "/opciones_software/runtimes" => "software_options/runtimes",
                "/opciones_software/imagenes" => "software_options/imaging",
                "/opciones_software/imaging" => "software_options/imaging",
                "/opciones_software/mensajeria" => "software_options/messaging",
                "/opciones_software/messaging" => "software_options/messaging",
                "/opciones_software/documentos" => "software_options/documents",
                "/opciones_software/documents" => "software_options/documents",
                "/opciones_software/compartir_archivos" => "software_options/file_sharing",
                "/opciones_software/file_sharing" => "software_options/file_sharing",
                "/opciones_software/almacenamiento_en_linea" => "software_options/online_storage",
                "/opciones_software/online_storage" => "software_options/online_storage",
                "/opciones_software/otro" => "software_options/other",
                "/opciones_software/other" => "software_options/other",
                "/opciones_software/utilidades" => "software_options/utilities",
                "/opciones_software/utilities" => "software_options/utilities",
                "/opciones_software/compresion" => "software_options/compression",
                "/opciones_software/compression" => "software_options/compression",
                "/opciones_software/herramientas_de_desarrollo" => "software_options/developer_tools",
                "/opciones_software/developer_tools" => "software_options/developer_tools"
            ];
            $var = isset($routes[$uri]) ? $routes[$uri] : $page->getDir()."";
            $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
            if (!empty($query)) $var .= '?' . $query;
            ?>
        <button><a href="<?= $page->getDir();?>español">Inicio</a></button>
        <button><a href="<?= $page->getDir() . $var;?>">Inglés</a></button>
        <button><a href="<?= $page->getDir();?>servicios">Servicios</a></button>
        <button><a href="#">Contacto</a></button>
        <button><a href="#">Reseñas</a></button>
        <?php endif;?>
    </nav>
    <span id="content"></span>
</header>