<!DOCTYPE html>
<!--LatinosPC - Tech Support & Computer Services in Pomona, CA-->
<html lang="<?php echo $page->getLang(); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= !empty($page->getTitle()) ? $page->getTitle() : $page->getTitle() ?> </title>
    <meta name="keywords" content="<?=$keywords?>">
    <meta name="description" content="<?=$description?>">
    <link rel="stylesheet" href="<?= $page->getDir(); ?>LAtPC/anvil/mainStyle.css">
    <link rel="stylesheet" href="<?= $page->getDir(); ?>LAtPC/anvil/homepage.css">
    <link rel="stylesheet" href="<?= $page->getDir(); ?>LAtPC/anvil/navMenu.css">
    <?php
    if (function_exists('cssStyles')) {
        cssStyles();
    }
    ?>
</head>

<body>
    <header>
        <a href="#" class="phone">
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
                <div id="menuToggle"><input type="checkbox" />
                    <span></span><span></span><span></span>

                    <ul id="menu">
                        <li class="titleli"><?php
                    if($page->getLang() == "en"):
                       echo "Our Lord and Savior Jesus Christ";
                    elseif($page->getLang() == "es-419"):
                       echo "Nuestro Señor y Salvador Jesucristo";
                    endif; ?></li>

                        <a href="<?php
                        if($page ->getLang() == "en"):
                           echo "https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html";
                        elseif($page->getLang() == "es-419"):
                           echo "https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_sp.html";
                        endif; ?>" target="_blank">
                            <img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb9.webp"
                                width="100%" height="auto" alt="JesusChrist">
                        </a>

                        <a href="<?php
                        if($page->getLang() == "en"):
                           echo  $page->getDir(). "LAtPC/JesusChrist/father_in_heaven_tell_me_about_web";
                        elseif($page->getLang() == "es-419"):
                           echo $page->getDir(). "LAtPC/Jesucristo/padre_celestial_cuentame_sobre_el_internet";
                        endif; ?>">
                            <li><?php
                        if($page->getLang() == "en"):
                           echo "Heavenly Father tell me about the Web";
                        elseif($page->getLang() == "es-419"):
                           echo "Padre en el Cielo dime acerca de la red";
                        endif; ?></li>
                        </a>

                        <a href="<?php
                        if($page->getLang() == "en"):
                           echo  $page->getDir(). "LAtPC/JesusChrist/parables";
                        elseif($page->getLang() == "es-419"):
                           echo $page->getDir(). "LAtPC/Jesucristo/parabolas";
                        endif;?>">
                            <!-- https://bibilium.com/38-parables-of-Jesus-parables-of-Jesus/ -->
                            <li><?php
                        if($page->getLang() == "en"):
                           echo "Parables";
                        elseif($page->getLang() == "es-419"):
                           echo "Parabolas";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($page->getLang() == "en"):
                           echo $page->getDir(). "LAtPC/JesusChrist/sermons";
                        elseif($page->getLang() == "es-419"):
                           echo $page->getDir(). "LAtPC/Jesucristo/sermones";
                        endif;?>">
                            <li><?php
                        if($page->getLang() == "en"):
                           echo "Sermons/Discourses";
                        elseif($page->getLang() == "es-419"):
                           echo "Sermones/Discursos";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($page->getLang() == "en"):
                           echo $page->getDir(). "LAtPC/JesusChrist/apostles";
                        elseif($page->getLang() == "es-419"):
                           echo $page->getDir(). "LAtPC/Jesucristo/apostoles";
                        endif;?>">
                            <li><?php
                        if($page->getLang() == "en"):
                           echo "The Apostles";
                        elseif($page->getLang() == "es-419"):
                           echo "Los Apóstoles";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($page->getLang() == "en"):
                           echo $page->getDir(). "LAtPC/JesusChrist/teachings";
                        elseif($page->getLang() == "es-419"):
                           echo $page->getDir(). "LAtPC/Jesucristo/enseñanzas";
                        endif;?>">
                            <li><?php
                        if($page->getLang() == "en"):
                           echo "His Teachings";
                        elseif($page->getLang() == "es-419"):
                           echo "Las enseñanzas";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($page->getLang() == "en"):
                           echo "#";
                        elseif($page->getLang() == "es-419"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($page->getLang() == "en"):
                           echo "Computer Backup";
                        elseif($page->getLang() == "es-419"):
                           echo "Respaldos PC";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($page->getLang() == "en"):
                           echo "#";
                        elseif($page->getLang() == "es-419"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($page->getLang() == "en"):
                           echo "Hardware/Parts";
                        elseif($page->getLang() == "es-419"):
                           echo "Hardware/Partes";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($page->getLang() == "en"):
                           echo "#";
                        elseif($page->getLang() == "es-419"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($page->getLang() == "en"):
                           echo "Software/Programs";
                        elseif($page->getLang() == "es-419"):
                           echo "Software/Programas";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($page->getLang() == "en"):
                           echo "#";
                        elseif($page->getLang() == "es-419"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($page->getLang() == "en"):
                           echo "Websites";
                        elseif($page->getLang() == "es-419"):
                           echo "Sitios Web";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($page->getLang() == "en"):
                           echo "#";
                        elseif($page->getLang() == "es-419"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($page->getLang() == "en"):
                           echo "Security";
                        elseif($page->getLang() == "es-419"):
                           echo "Seguridad";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($page->getLang() == "en"):
                           echo "#";
                        elseif($page->getLang() == "es-419"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($page->getLang() == "en"):
                           echo "Best Practices";
                        elseif($page->getLang() == "es-419"):
                           echo "Mejores Prácticas";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($page->getLang() == "en"):
                           echo "#";
                        elseif($page->getLang() == "es-419"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($page->getLang() == "en"):
                           echo "Passwords";
                        elseif($page->getLang() == "es-419"):
                           echo "Contraseñas";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($page->getLang() == "en"):
                           echo "#";
                        elseif($page->getLang() == "es-419"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($page->getLang() == "en"):
                           echo "Gallery";
                        elseif($page->getLang() == "es-419"):
                           echo "Galería";
                        endif;?></li>
                        </a>
                    </ul>
                </div>
                <!--    TerwanPOP Made by Erik Terwan    -->
            </div>
            <div class="navButtons">
                <?php /*On page.php from the last refactor there is a function called getNavButtons() that gets the correct place in the page I will need to use it for English and Spanish jumps.*/
                if($page->getLang() == "en"):
                ?>
                <button><a href="<?= $page->getDir();?>LAtPC/index.php">Home</a></button>
                <button><a href="<?= $page->getDir();?>LAtPC/español">Español</a></button>
                <button><a href="#">Services</a></button>
                <button><a href="#">Contact Us</a></button>
                <button><a href="#">Reviews</a></button>
                <?php
                elseif($page->getLang() == "es-419"):
                ?>
                <button><a href="<?= $page->getDir();?>LAtPC/español">inicio</a></button>
                <button><a href="<?= $page->getDir();?>LAtPC/index.php">Inglés</a></button>
                <button><a href="#">Servicios</a></button>
                <button><a href="#">Contacto</a></button>
                <button><a href="#">Reseñas</a></button><?php endif;?>
            </div>
        </nav>
        <span id="content"></span>
    </header>

    <main>
        <!-- <div class="multi-link-container">
            <span class="linked-text">Click me for more information</span>
            <div class="link-dialog">
                <p tabindex="0">This is an example of a text link dialog. When you click on the text, this dialog
                    appears.</p>
                <p tabindex="0">You can add any content here, including links, images, and other HTML elements.</p>
            </div>
        </div> -->

        <?php
        // Define page routes mapping
        $pageRoutes = [
            'en' => [
                'Home LatinosPC' => 'content_home',
                'Heavenly Father' => 'fihtmatw',
                'The Apostles' => 'apostles',
                'Parables' => 'parables',
                'Sermons' => 'sermons',
                'Teachings' => 'teachings',
                'Teachings: John' => 'teachings',
                'Template' => 'template',
                'About' => 'content_about',
                'Clean Ups' => 'content_services_cleanups',
                'Protection' => 'content_services_protection',
                'Consultations' => 'content_services_consultation',
                'Managed Services' => 'content_services_managedServices',
                'Websites' => 'content_services_websites',
                'Remote Support' => 'content_services_remoteSupport',
                'Best Practices' => 'best_practices',
                'Backups' => 'backups',
                'Passwords' => 'passwords',
                'HW CPU' => 'hw_cpu',
            ],
            'es-419' => [
                'Inicio LatinosPC' => 'contenido_inicio',
                'Padre Celestial' => 'qpccsei',
                'Los Apóstoles' => 'apostoles',
                'Parabolas' => 'parabolas',
                'Sermones' => 'sermones',
                'Enseñanzas' => 'ensenhanzas',
                'Acerca' => 'contenido_acerca'
            ]
        ];

        // Get current page info
        $currentLang = $page->getLang();
        $currentTitle = $page->getTitle();

        // Call appropriate function if route exists
        if (isset($pageRoutes[$currentLang][$currentTitle])) {
            $functionName = $pageRoutes[$currentLang][$currentTitle];
            if (function_exists($functionName)) {
                call_user_func($functionName);
            }
        }
        ?>

    </main>

    <footer>
        <p>&copy; LatinosPC <?php if($page->getLang() == "es-419"){$meses = [
    'January' => 'Enero',
    'February' => 'Febrero',
    'March' => 'Marzo',
    'April' => 'Abril',
    'May' => 'Mayo',
    'June' => 'Junio',
    'July' => 'Julio',
    'August' => 'Agosto',
    'September' => 'Septiembre',
    'October' => 'Octubre',
    'November' => 'Noviembre',
    'December' => 'Diciembre'
   ];
   echo $meses[date("F")] . " " . date("Y");} else{ echo date("F Y"); }?></p>
    </footer>

    <script src="<?php if($page->getDir() == "../"): echo "./";
    elseif ($page->getDir() == "../../"): echo "../";
    elseif ($page->getDir() == "../../../"): echo "../../";
    endif;?>anvil/dialogEngine.js"></script>
</body>
</html>