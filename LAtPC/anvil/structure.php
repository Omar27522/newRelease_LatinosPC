<!DOCTYPE html>
<html lang="<?= $lang == 'es' ? 'es-419' : 'en' ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= !empty($title) ? $title : $titulo ?> </title>
    <meta name="keywords" content="<?=$keywords?>">
    <meta name="description" content="<?=$description?>">
    <!--LatinosPC - Tech Support & Computer Services in Pomona, CA-->
    <link rel="stylesheet" href="../LAtPC/anvil/mainStyle.css">
    <link rel="stylesheet" href="../LAtPC/anvil/homepage.css">
    <link rel="stylesheet" href="../LAtPC/anvil/navMenu.css">
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
                    if($lang == "en"):
                       echo "PC, is for Personal Computer";
                    elseif($lang == "es"):
                       echo "PC, es Computadora Personal";
                    endif; ?>
                </small>
            </div>
        </div>
        <nav class="sticky">
            <!--    TerwanPOP    -->
            <div role="navigation" class="burg">
                <div id="menuToggle"><input type="checkbox" />
                    <span></span><span></span><span></span>

                    <ul id="menu">
                        <li class="titleli"><?php
                    if($lang == "en"):
                       echo "Our Lord and Savior Jesus Christ";
                    elseif($lang == "es"):
                       echo "Nuestro Señor y Salvador Jesucristo";
                    endif; ?></li>

                        <a href="<?php
                        if($lang == "en"):
                           echo "https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html";
                        elseif($lang == "es"):
                           echo "https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_sp.html";
                        endif; ?>" target="_blank">
                            <img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb9.webp"
                                width="100%" height="auto" alt="JesusChrist">
                        </a>

                        <a href="<?php
                        if($lang == "en"):
                           echo "#";
                        elseif($lang == "es"):
                           echo "#";
                        endif; ?>">
                            <li><?php
                        if($lang == "en"):
                           echo "Heavenly Father tell me about the Web";
                        elseif($lang == "es"):
                           echo "Padre en el Cielo dime acerca de la red";
                        endif; ?></li>
                        </a>

                        <a href="<?php
                        if($lang == "en"):
                           echo "#";
                        elseif($lang == "es"):
                           echo "#";
                        endif;?>">
                            <!-- https://bibilium.com/38-parables-of-Jesus-parables-of-Jesus/ -->
                            <li><?php
                        if($lang == "en"):
                           echo "Parables";
                        elseif($lang == "es"):
                           echo "Parabolas";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($lang == "en"):
                           echo "#";
                        elseif($lang == "es"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($lang == "en"):
                           echo "Sermons/Discourses";
                        elseif($lang == "es"):
                           echo "Sermones/Discursos";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($lang == "en"):
                           echo "#";
                        elseif($lang == "es"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($lang == "en"):
                           echo "The Apostles";
                        elseif($lang == "es"):
                           echo "Los Apóstoles";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($lang == "en"):
                           echo "#";
                        elseif($lang == "es"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($lang == "en"):
                           echo "His Teachings";
                        elseif($lang == "es"):
                           echo "Las enseñanzas";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($lang == "en"):
                           echo "#";
                        elseif($lang == "es"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($lang == "en"):
                           echo "Computer Backup";
                        elseif($lang == "es"):
                           echo "Respaldos PC";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($lang == "en"):
                           echo "#";
                        elseif($lang == "es"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($lang == "en"):
                           echo "Hardware/Parts";
                        elseif($lang == "es"):
                           echo "Hardware/Partes";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($lang == "en"):
                           echo "#";
                        elseif($lang == "es"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($lang == "en"):
                           echo "Software/Programs";
                        elseif($lang == "es"):
                           echo "Software/Programas";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($lang == "en"):
                           echo "#";
                        elseif($lang == "es"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($lang == "en"):
                           echo "Websites";
                        elseif($lang == "es"):
                           echo "Sitios Web";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($lang == "en"):
                           echo "#";
                        elseif($lang == "es"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($lang == "en"):
                           echo "Security";
                        elseif($lang == "es"):
                           echo "Seguridad";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($lang == "en"):
                           echo "#";
                        elseif($lang == "es"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($lang == "en"):
                           echo "Best Practices";
                        elseif($lang == "es"):
                           echo "Mejores Prácticas";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($lang == "en"):
                           echo "#";
                        elseif($lang == "es"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($lang == "en"):
                           echo "Passwords";
                        elseif($lang == "es"):
                           echo "Contraseñas";
                        endif;?></li>
                        </a>

                        <a href="<?php
                        if($lang == "en"):
                           echo "#";
                        elseif($lang == "es"):
                           echo "#";
                        endif;?>">
                            <li><?php
                        if($lang == "en"):
                           echo "Gallery";
                        elseif($lang == "es"):
                           echo "Galería";
                        endif;?></li>
                        </a>
                    </ul>
                </div>
                <!--    TerwanPOP Made by Erik Terwan    -->
            </div>
            <div class="navButtons">
                <?php /*On page.php from the last refactor there is a function called getNavButtons() that gets the correct place in the page I will need to use it for English and Spanish jumps.*/
                if($lang == "en"):
                ?>
                <button><a href="../LAtPC/index.php">Home</a></button>
                <button><a href="../LAtPC/español">Español</a></button>
                <button><a href="#">Services</a></button>
                <button><a href="#">Contact Us</a></button>
                <button><a href="#">Reviews</a></button>
                <?php
                elseif($lang == "es"):
                ?>
                <button><a href="../LAtPC/español">inicio</a></button>
                <button><a href="../LAtPC/index.php">Inglés</a></button>
                <button><a href="#">Servicios</a></button>
                <button><a href="#">Contacto</a></button>
                <button><a href="#">Reseñas</a></button><?php endif;?>
            </div>
        </nav>
        <span id="content"></span>
    </header>

    <main>
        <!-- this <main> will be part of the structure, everything inside will be the content,
        I have been posting content in a content() function, but Im not sure what would dbe best.
        Maybe a content object from different parts of teh site, for example this current one is the homepage.
        Creating a content() function is the easiest thing for me,
        but IDK is a bit obtuse because it just loads whatever is presented as the  content function().
        To he honest, I am not really sure what I am saying here.  -->

        <!-- right now there is no full-page css, because a homepage-grid is being used,
                but I would like to have this full-page css, on a CSS Wednesday.

        <div class="multi-link-container">
            <span class="linked-text">Click me for more information</span>
            <div class="link-dialog">
                <p tabindex="0">This is an example of a text link dialog. When you click on the text, this dialog
                    appears.</p>
                <p tabindex="0">You can add any content here, including links, images, and other HTML elements.</p>
            </div>
        </div>
        -->

        <?php if($lang == "en"): {content_home(); } elseif($lang == "es"): {contenido_inicio();} endif;?>

    </main>

    <footer>
        <p>&copy; LatinosPC <?php if($lang=="es"){$meses = [
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
    <script src="./anvil/dialogEngine.js">
    </script>
</body>

</html>