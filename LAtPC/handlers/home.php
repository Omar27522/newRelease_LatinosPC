<?php


function content_home()
{
global $page; //this is the page object brought in from initial load. It contains the language and other page information. DIR: handlers/classStructure.php
	global $content; //Depending on the page Language, this will be either 'content' or 'contenido', the database will load acordingly.
     $key = ['en' => 'content','es-419' => 'contenido'][$page->getLang()] ?? 'content';
?>
<section class="homepage-grid">
    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $content[array_search('headings', array_column($content, 0))][$key];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $_JesusChristDialog1 = $content[9][$key];?></p>
                <p tabindex="0"><?= $_JesusChristDialog2 = $content[10][$key];?></p>
            </div>
        </div>
        <a href="<?= htmlspecialchars($link = $content[16][$key]);?>"
            class="cta-button"><?= $button = $content[11][$key];?></a>
        <a href="<?= $link2 = $content[17][$key];?>"
            class="cta-button"><?= $button2 = $content[12][$key];?></a>
        <a href="<?= $link3 = $content[18][$key];?>"
            class="cta-button"><?= $button3 = $content[13][$key];?></a>
        <a href="<?= $link4 = $content[19][$key]; ?>"
            class="cta-button"><?= $button4 = $content[14][$key];?></a>
        <a href="<?= $link5 = $content[20][$key]; ?>"
            class="cta-button"><?= $button5 = $content[15][$key];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $aboutUs = $content[21][$key];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $aboutDialog1 = $content[22][$key];?></p>
                <p tabindex="0"><?= $aboutDialog2 = $content[23][$key];?></p>
                <p tabindex="0"><?= $aboutDialog3 = $content[24][$key];?></p>
            </div>
        </div>

        <p><?= $aboutParagraph = $content[25][$key];?></p>
        <p><?= $aboutParagraph2 = $content[26][$key];?></p>
        <p><?= $aboutParagraph3 = $content[27][$key];?></p>
        <a href="<?= $aboutButton = $content[29][$key];?>" class="cta-button"><?= $aboutButton = $content[28][$key];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $servicesHeading = $content[30][$key];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $servicesDialog1 = $content[31][$key];?></p>
                <p tabindex="0"><?= $servicesDialog2 = $content[32][$key];?></p>
                <p tabindex="0"><?= $servicesDialog3 = $content[33][$key];?></p>
                <img src="https://latinospc.com/images/number.jpg" width="auto" height="auto" alt="number"
                    style="display: block; margin: 0 auto;">
            </div>
        </div>

        <a href="<?= $servicesCleanUpsButton = $content[85][$key];?>" class="cta-button"><?= $servicesCleanUpsButton = $content[34][$key];?></a>
        <a href="<?= $servicesComputerProtectionButton = $content[44][$key];?>" class="cta-button"><?= $servicesComputerProtectionButton = $content[35][$key];?></a>
        <a href="<?= $servicesConsultationsButton = $content[41][$key];?>" class="cta-button"><?= $servicesConsultationsButton = $content[36][$key];?></a>
        <a href="<?= $servicesManagedServicesButton = $content[42][$key];?>" class="cta-button"><?= $servicesManagedServicesButton = $content[37][$key];?></a>
        <a href="<?= $servicesWebsitesButton = $content[40][$key];?>" class="cta-button"><?= $servicesWebsitesButton = $content[38][$key];?></a>
        <a href="<?= $servicesRemoteSupportButton = $content[43][$key];?>" class="cta-button"><?= $servicesRemoteSupportButton = $content[39][$key];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $securityHeading = $content[45][$key];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $securityDialog = $content[46][$key];?></p>
            </div>
         </div>

        <a href="../offered_security/best_practices" class="cta-button"><?= $securityButton = $content[47][$key];?></a>
        <a href="../offered_security/backups" class="cta-button"><?= $securityButton2 = $content[48][$key];?></a>
        <a href="../offered_security/passwords" class="cta-button"><?= $securityButton3 = $content[49][$key];?></a>
        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text"><?= $tutorialsAndBlog = $content[50][$key] . ' / ' . rtrim($content[51][$key], 's');?></h3>
                <div class="link-dialog">
                    <p tabindex="0"><?= $tutorialsAndBlogDialog = $content[52][$key];?></p>
                </div>
            </div>
            <p><?= $tutorialsAndBlogParagraph = $content[53][$key];?></p>
            <a href="../tutorials/" class="cta-button"><?= $tutorialsAndBlogButton = $content[54][$key];?></a>
        </aside>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $hardwareHeading = $content[55][$key];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $hardwareDialog = $content[56][$key];?></p>
                <p tabindex="0"><?= $hardwareDialog = $content[57][$key];?></p>
                <p><?= $hardwareDialog = $content[58][$key];?></p>
            </div>
        </div>

        <a href="../hardware_options/cpu" class="cta-button"><?= $hardwareButtons = $content[59][$key];?></a>
        <a href="../hardware_options/storage" class="cta-button"><?= $hardwareButtons = $content[60][$key];?></a>
        <a href="../hardware_options/psu" class="cta-button"><?= $hardwareButtons = $content[61][$key];?></a>
        <a href="../hardware_options/input_devices" class="cta-button"><?= $hardwareButtons = $content[62][$key];?></a>
        <a href="../hardware_options/output_devices" class="cta-button"><?= $hardwareButtons = $content[63][$key];?></a>
        <a href="../hardware_options/#article" class="cta-button"><?= $hardwareButtons = $content[64][$key];?></a>

        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text"><?= $hardwarePeripheralsAndGear = $content[65][$key];?></h3>
                <div class="link-dialog">
                    <p tabindex="0"><?= $hardwarePeripheralsAndGearDialog = $content[66][$key];?></p>
                    <p tabindex="0"><?= $hardwarePeripheralsAndGearDialog = $content[67][$key];?></p>
                </div>
            </div>
            <p><?= $hardwarePeripheralsAndGear = $content[68][$key];?></p>
            <a href="./hardware_options/peripherals_and_gear" class="cta-button"><?= $visitPage = $content[54][$key];?></a>
    </div>
    </aside>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $softwareHeading = $content[69][$key];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $softwareDialog = $content[70][$key];?></p>
            </div>
        </div>
        <a href="../software_options/anti_virus" class="cta-button"><?= $softwareButtons = $content[71][$key];?></a>
        <a href="../software_options/malware_cleaner" class="cta-button"><?= $softwareButtons = $content[72][$key];?></a>
        <a href="../software_options/web_browsers" class="cta-button"><?= $softwareButtons = $content[73][$key];?></a>
        <a href="../software_options/messaging" class="cta-button"><?= $softwareButtons = $content[74][$key];?></a>
        <a href="../software_options/media" class="cta-button"><?= $softwareButtons = $content[75][$key];?></a>
        <a href="../software_options/runtimes" class="cta-button"><?= $softwareButtons = $content[76][$key];?></a>
        <a href="../software_options/imaging" class="cta-button"><?= $softwareButtons = $content[77][$key];?></a>
        <a href="../software_options/documents" class="cta-button"><?= $softwareButtons = $content[78][$key];?></a>
        <a href="../software_options/file_sharing" class="cta-button"><?= $softwareButtons = $content[79][$key];?></a>
        <a href="../software_options/online_storage" class="cta-button"><?= $softwareButtons = $content[80][$key];?></a>
        <a href="../software_options/other" class="cta-button"><?= $softwareButtons = $content[81][$key];?></a>
        <a href="../software_options/utilities" class="cta-button"><?= $softwareButtons = $content[82][$key];?></a>
        <a href="../software_options/compression" class="cta-button"><?= $softwareButtons = $content[83][$key];?></a>
        <a href="../software_options/developer_tools" class="cta-button"><?= $softwareButtons = $content[84][$key];?></a>
    </div>
</section>
<?php
}



?>