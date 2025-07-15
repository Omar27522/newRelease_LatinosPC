<?php
    class Structure {
        // Declare properties to avoid dynamic property creation warnings
        public string $dir;
        public string $lang;
        public string $title;


        public function __construct($dir, $lang, $title){
            $this->dir = $dir;
            $this->lang = $lang;
            $this->title = $title;
        }

        public function getLang() {
            // Return the language code based on the object's lang property
            if ($this->lang == "english") {
                return "en";
            } elseif ($this->lang == "español") {
                return "es-419";
            } else {
                // Default to English
                return "en";
            }
        }
        public function getDir() {
            return $this->dir;
        }
        public function getTitle() {
            return $this->title;
        }

        public function getNav() {
            global $dir;
             if ($this->lang == "english") {
                ?>

<ul id="menu">
    <li class="titleli">Our Lord and Savior Jesus Christ</li>
    <a href="https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html"
        target="_blank" alt="Jesus">
        <img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb9.webp"
            width="100%" height="auto">
    </a>
    <a href="<?= $this->dir; ?>JesusChrist">
        <li>Heavenly Father Tell me about the Web</li>
    </a><a href="<?= $this->dir; ?>JesusChrist/parables">
        <!-- https://bibilium.com/38-parables-of-Jesus-parables-of-Jesus/ -->
        <li>Parables</li>
    </a><a href="<?= $this->dir; ?>JesusChrist/sermons">
        <li>Sermons/Discourses</li>
    </a><a href="<?= $this->dir; ?>JesusChrist/apostles ">
        <li>The Apostles</li>
    </a><a href="<?= $this->dir; ?>JesusChrist/teachings" target="_blank">
        <li>His Teachings</li>
    </a><a href="<?= $this->dir; ?>security/backups" target="_blank">
        <li>Computer Backup</li>
    </a><a href="<?= $this->dir; ?>parts" target="_blank">
        <li>Hardware/Parts</li>
    </a><a href="<?= $this->dir; ?>programs" target="_blank">
        <li>Software/Programs</li>
    </a><a href="<?= $this->dir; ?>services/websites" target="_blank">
        <li>Websites</li>
    </a><a href="<?= $this->dir; ?>security" target="_blank">
        <li>Security</li>
    </a><a href="<?= $this->dir; ?>" target="_blank">
        <li>Best Practices</li>
    </a><a href="<?= $this->dir; ?>security/passwords" target="_blank">
        <li>Passwords</li>
    </a><a href="<?= $this->dir; ?>gallery" target="_blank">
        <li>Gallery</li>
    </a>
</ul>

<?php
            }
            elseif

                        ($this->lang == "español") {
                ?>

<ul id="menu">
    <li class="titleli">Nuestro Señor y Salvador Jesucristo</li>
    <a href="https://www.vatican.va/includes/romancuria/es.html" target="_blank">
        <li><img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_Jesus_christ/lamb10.webp"
                width="100%" height="auto"></li>
    </a><a href="../jesucristo">
        <li>Padre en el Cielo dime acerca de la Web</li>
    </a><a href="../jesucristo/parabolas/">
        <li>Parabolas</li>
    </a><a href="#">
        <li>Sermones/Discursos</li>
    </a><a href="#">
        <li>Los Apóstoles</li>
    </a><a href="#" target="_blank">
        <li>Las Enseñanzas</li>
    </a><a href="#" target="_blank">
        <li>Respaldos PC</li>
    </a><a href="<?= $this->dir; ?>partes">
        <li>Hardware/Partes</li>
    </a><a href="<?= $this->dir; ?>programas">
        <li>Software/Programas</li>
    </a><a href="#" target="_blank">
        <li>Sitios Web</li>
    </a><a href="<?= $this->dir; ?>seguridad/contraseñas" target="_blank">
        <li>Contraseñas</li>
    </a><a href="#" target="_blank">
        <li>Galería</li>
    </a>
</ul>

<?php
            } else {
                // Default to English
                return "Error Loading Page";
            }
        }

        public function getNavButtons() {
            if ($this->lang == "english") {
                $uri = $_SERVER['REQUEST_URI'];
                    $routes = [
                        "/JesusChrist/" => "/jesucristo",
                        //"/jesucristo/" => "/JesusChrist/"
                        "/services/" => "/servicios",
                        "/hardware/" => "/hardware",
                        "/JesusChrist/parables/"=> "/jesucristo/parabolas",
                        "/parts/"=> "/partes",
                        "/contact/"=> "/contacto",
                        "/programs/"=> "/programas",
                        "/security/passwords/"=> "/seguridad/contrase%C3%B1as"
                    ];

                $var = isset($routes[$uri]) ? $routes[$uri] : "español/";
                ?>


<button><a href="<?=$this->getDir();?>">Home</a></button>
<button><a href="<?=$this->getDir().$var?>">Español</a></button>
<button><a href="<?=$this->getDir();?>services">Services</a></button>
<button><a href="<?=$this->getDir();?>contact">Contact&nbsp;Us</a></button>
<button><a href="<?=$this->getDir();?>reviews">Reviews</a></button>

<?php
            }
            elseif

                        ($this->lang == "español") {
                             $uri = $_SERVER['REQUEST_URI'];
                        $routes = [
                            //"/JesusChrist" => "/jesucristo",
                            "/jesucristo/" => "/JesusChrist",
                            "/espa%c3%b1ol/" => "../",
                            "/servicios/" => "/services",
                            "/hardware/" => "/hardware",
                            "/jesucristo/parabolas/"=> "/JesusChrist/parables",
                            "/partes/"=> "/parts",
                            "/contacto/"=> "/contact",
                            "/programas/"=> "/programs",
                            "/seguridad/contrase%c3%b1as/"=> "security/passwords"

                        ];

                    $var = isset($routes[$uri]) ? $routes[$uri] : "./";
                                    ?>

<button><a href="<?=$this->getDir();?>espa%C3%B1ol">Inicio</a></button>
<button><a href="<?=$this->getDir().$var;?>">English</a></button>
<button><a href="<?=$this->getDir();?>servicios">Servicios</a></button>
<button><a href="<?=$this->getDir();?>contacto">Contacto</a></button>
<button><a href="<?=$this->getDir();?>reseñas">Reseñas</a></button>
<?php
                                } else {
                                    // Default to English
                                    return "Error Loading Page";
                                }
        }

        public function getCrumbs() {
            if ($this->lang == "english") {
               echo'<a href="'.$this->getDir().'services">Service</a>&nbsp;<a href="'.$this->getDir().'parts">Parts</a>&nbsp;<a href="'.$this->getDir().'programs">Software</a>';
            }
            elseif ($this->lang == "español") {
                echo '<a href="'.$this->getDir().'servicios">Servicio</a>&nbsp;<a href="'.$this->getDir().'partes">Partes</a>&nbsp;<a href="'.$this->getDir().'programas">Software</a>';
            }
        }

        public function getLogo() {
            if ($this->lang == "english") {
               echo '<div class="logos"><span>LA</span>tinos<span>PC</span>.com
                        <small class="rtl">PC is for Personal Computer
                        </small>
                        </div>';
            }
            elseif ($this->lang == "español") {
                echo '<div class="logos"><span>LA</span>tinos<span>PC</span>.com
                        <small class="rtl">PC por Computadora Personal
                        </small>
                        </div>';
            }
        }
}


?>