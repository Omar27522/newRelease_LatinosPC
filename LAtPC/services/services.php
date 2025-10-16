<?php
function content_services(){
$title = "<h2>Your Trusted IT Solution Partner</h2>";
 $reliable ="Reliable, fast, and professional computer repair and IT services.";
 $services ='<h2>Our Services</h2>
                <ul>
                    <li>Custom PC Purchaser for Offices, Home Labs, and Gamers</li>
                    <li>Program Installation and Configuration</li>
                    <li>Managed Services (Weekly, Monthly, Quarterly, Bi-annually)</li>
                    <li>Computer Security and Best Practices</li>
                    <li>Hardware Diagnosis and Solutions</li>
                    <li>Virus and Malware Removal</li>
                    <li>Backup Solutions (Local, Offsite, Cloud)</li>
                    <li>System Cleanups</li><img src="https://latinospc.com/images/button2.jpg" height="150px" width="350px" class="fl">
                    <li style="list-style-type: none">Remote Support and Phone Consultations</li><br />
                    <li style="list-style-type: none">Software/Hardware Upgrades and Buying Guides</li><br />
                    <li style="list-style-type: none">Bilingual Support:<br />(Tambien Hablamos Español)</li>
                </ul>';
 $specialOffers ='<img src="https://latinospc.com/images/storefront.png" width="25%" class="rtl">
 <h2>Special Offers</h2>
            <ul>
                <li>Small Business Service Plans</li>
                <li>In-person and Online Computer Classes for Beginners and Intermediate Users</li>
                <li>Remote and Phone-based Support</li>
                <li>Reasonable Rates: $35 Diagnosis Fee (added to cost of service/repair)</li>
            </ul>';
 $contact ="<h2>Contact Us</h2>
            <p><span style=\"font-size:x-large;\">Call:<a href=\"tel:+19092767214\">909-276-7214</a><br />or<br />text</span> us for a free quote,<br />
            or to schedule a service appointment.</p>
            <p>We work with individuals, students, small-to-medium businesses, gamers, and professionals.</p>";
    ?>
<!-- Hero Section -->
<section class="hero article fullbar">
        <div class="container">
            <?= empty($title) ? $titulo : $title; ?>
            <button><a href="tel:+19092767214"><img src="https://latinospc.com/images/number.jpeg" height="150px"width="auto"></a></button>
            <p style="padding-left: 50px;"><?= empty($reliable) ? $confiable : $reliable; ?></p>
        </div>
    </section>
<article class="fullbar">
    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <?= empty($services) ? $servicios : $services;?>
        </div>
    </section>

    <!-- Special Offers Section -->
    <section id="offers" class="offers">
        <div class="container">
            <?= empty($specialOffers) ? $ofertasEspeciales : $specialOffers ?>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <?= empty($contact) ? $contacto : $contact; ?>
        </div>
    </section>
</article>


<?php
}
include 'anvil/structure.php';

?>
