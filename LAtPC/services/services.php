<?php
function cssStyles(){
    ?>
    <link rel="stylesheet" href="../services/style.css">
    <?php
}

function content(){
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
            <button><a href="tel:+19092767214"><img src="https://latinospc.com/images/number.jpeg" height="150px" width="auto"></a></button>
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
                <img src="https://latinospc.com/images/storefront.png" width="25%" class="rtl">
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
    </article>
    <?php
}

include dirname(__DIR__) . '/anvil/structure.php';

?>