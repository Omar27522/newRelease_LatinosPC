<?php

function content_services(){
    global $title, $reliable, $services, $specialOffers, $contact;
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
            content();
}




function contenido_servicios(){
     global $titulo, $confiable, $servicios, $ofertasEspeciales, $contacto;
$titulo = "<h2>Su socio de confianza en soluciones de TI</h2>";
$confiable = "Servicio de reparación de computadoras y TI confiable, rápido y profesional.";
$servicios = '<h2>Nuestros servicios</h2>
                <ul>
                    <li>Compra de PC personalizada para oficinas, laboratorios en casa y gamers</li>
                    <li>Instalación y configuración de programas</li>
                    <li>Servicios administrados (semanal, mensual, trimestral, semestral)</li>
                    <li>Seguridad informática y buenas prácticas</li>
                    <li>Diagnóstico de hardware y soluciones</li>
                    <li>Eliminación de virus y malware</li>
                    <li>Soluciones de respaldo (local, externo, en la nube)</li>
                    <li>Limpieza de sistemas</li><img src="https://latinospc.com/images/button2.jpg" height="150px" width="350px" class="fl">
                    <li style="list-style-type: none">Soporte remoto y consultas telefónicas</li><br />
                    <li style="list-style-type: none">Actualizaciones de software/hardware y guías de compra</li><br />
                    <li style="list-style-type: none">Atención bilingüe:<br />(Tambien Hablamos Español)</li>
                </ul>';
$ofertasEspeciales = '<img src="https://latinospc.com/images/storefront.png" width="25%" class="rtl">
 <h2>Ofertas especiales</h2>
            <ul>
                <li>Planes de servicio para pequeñas empresas</li>
                <li>Clases de computación presenciales y en línea para usuarios principiantes e intermedios</li>
                <li>Soporte remoto y telefónico</li>
                <li>Tarifas accesibles: $35 de cuota de diagnóstico (se agrega al costo del servicio/reparación)</li>
            </ul>';
$contacto = "<h2>Contáctenos</h2>
            <p><span style=\"font-size:x-large;\">Llámenos:<a href=\"tel:+19092767214\">909-276-7214</a><br />o<br />escríbanos</span> para un presupuesto gratuito,<br />
            o para agendar una cita de servicio.</p>
            <p>Trabajamos con particulares, estudiantes, pequeñas y medianas empresas, gamers y profesionistas.</p>";
content();

        }

function content(){
    global $title, $reliable, $services, $specialOffers, $contact;
    global $titulo, $confiable, $servicios, $ofertasEspeciales, $contacto;
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
