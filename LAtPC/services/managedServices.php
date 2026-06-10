<?php
function cssStyles(){
    ?>
    <link rel="stylesheet" href="../services/style.css">
    <?php
}

function content_services_managedServices(){
    global $content, $key; include_once dirname(__DIR__) . '/handlers/databaseConnection.php'; databaseConnection('services');// database connection ?>
    <section class="fullbar"> <?php include 'navBar.php';
    ?> <article class="article">
        <section>
            <h1 id="title"><?=$managedServices = $content[107][$key];?></h1>
            <h2><?=$managedServicesGoal = $content[108][$key];?> </h2>
            <h3><?=$managedServicesServ = $content[109][$key];?></h3>
            <hr style="width: 40%;">
            <ul style="list-style-type: none;">
                <li class="space"><span class="service" tabindex="0"><?=$managedServicesNMM = $content[110][$key];?></span> <?=$NMM_Description = $content[111][$key];?> </li>
                <li class="space"><span class="service"><?=$managedServicesDBR = $content[112][$key];?></span> <?=$DBR_Description = $content[113][$key];?> </li>
                <li class="space"><span class="service"><?=$managedServicesSS = $content[114][$key];?></span> <?=$SS_Description = $content[115][$key];?> </li>
                <li class="space"><span class="service"><?=$managedServicesCS = $content[116][$key];?></span> <?=$CS_Description = $content[117][$key];?> </li>
                <li class="space"><span class="service"><?=$managedServicesRITS = $content[118][$key];?></span> <?=$RITS_Description = $content[119][$key];?></li>
                <li class="space"><span class="service"><?=$managedServicesSAM = $content[120][$key];?></span> <?=$SAM_Description = $content[121][$key];?></li>
                <li class="space"><span class="service"><?=$managedServicesHM = $content[122][$key];?></span> <?=$HM_Description = $content[123][$key];?></li>
                <li class="space"><span class="service"><?=$managedServicesHD = $content[124][$key];?></span> <?=$HD_Description = $content[125][$key];?></li>
                <li class="space"><span class="service"><?=$managedServicesCSP = $content[126][$key];?></span> <?=$CSP_Description = $content[127][$key];?></li>
            </ul>
        </section>
        <h2 id="phone_call">
            <hr><?=$content[128][$key];?> <a href="tel:+19092767214">909-276-7214</a>&nbsp;|&nbsp; <br />Email: <a
                href="mailto:Help@LAtinosPC.com?subject = Feedback&body = Message">Help@LAtinosPC.com</a>
        </h2>
        <hr>
    </article>
    </section>
    <?php
}

include dirname(__DIR__) . '/anvil/structure.php';

?>