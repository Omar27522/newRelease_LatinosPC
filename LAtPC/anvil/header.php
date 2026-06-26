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
                            <img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb9.webp"
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
                            echo $page->getDir(). "software_options/";
                        elseif($page->getLang() == "es-419"):
                            echo "#";
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
            ];
            $var = isset($routes[$uri]) ? $routes[$uri] : $page->getDir()."español/";

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
