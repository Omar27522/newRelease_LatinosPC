<?php
function cssStyles(){
    ?>
    <link rel="stylesheet" href="../services/style.css">
    <?php
}

function content_services(){
        global $title, $reliable, $services, $specialOffers, $contact;
        global $titulo, $confiable, $servicios, $ofertasEspeciales, $contacto;
        global $page, $sub_route;

        global $content, $key;
    include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
    databaseConnection('services');// database connection

     ?>
    <!-- Hero Section -->
    <section class="hero article fullbar"> <?php include 'navBar.php';

        ?> <div class="container">
            <h2><?= $heading = $content[58][$key]; ?></h2>
            <button><a href="tel:+19092767214"><img src="../images/number_thumb.webp" height="150px" width="auto" alt="Contact Phone Number" loading="lazy"></a></button>
            <p style="padding-left: 50px;"><?= $message = $content[59][$key]; ?></p>
        </div>
    </section>
    <article class="fullbar">
        <!-- Services Section -->
        <section id="services" class="services">
            <div class="container">
                <h2><?= $servicesHeading = $content[60][$key]; ?></h2>
                <ul><?= $servicesList = $content[61][$key]; ?></ul>
            </div>
        </section>
        <!-- Special Offers Section -->
        <section id="offers" class="offers">
            <div class="container">
                <div class="carousel-group rtl" style="width: 25%; margin-bottom: 15px;">
                    <div class="multi-link-container">
                        <div class="thumbnail-container">
                            <span tabindex="0" class="linked-text-img" role="button" aria-label="LatinosPC Storefront">
                                <img src="../images/storefront_thumb.webp" width="100%" alt="LatinosPC Storefront" loading="lazy">
                            </span>
                        </div>
                        <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
                    </div>
                </div>
                <h2><?= $specialOffersHeading = $content[62][$key]; ?></h2>
                <ul><?= $specialOffersList = $content[63][$key]; ?></ul>
            </div>
        </section>
        <!-- Contact Section -->
        <section id="contact" class="contact">
            <div class="container">
                <h2><?= $contactHeading = $content[64][$key]; ?></h2> <?= $contactList = $content[65][$key]; ?>
            </div>
        </section>

        <template id="carousel-images">
            <div class="carousel-item">
                <a href="#offers">
                    <img data-src="../images/storefront.webp"
                         src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'%3E%3C/svg%3E"
                         alt="LatinosPC Storefront">
                </a>
                <h4 class="img_link">
                    <a href="#offers">LatinosPC Storefront</a>
                </h4>
            </div>
        </template>
    </article>
    <?php
}

include dirname(__DIR__) . '/anvil/structure.php';

?>