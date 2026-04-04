<?php


function content_home()
{

	global $content;

	$headingIndex = array_search('headings', array_column($content, 'name'));

?>
<section class="homepage-grid">
    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?php echo $content[array_search('headings', array_column($content, 0))]['content']; ?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $_JesusChristDialog1 = $content[9]['content'];?></p>
                <p tabindex="0"><?= $_JesusChristDialog2 = $content[10]['content'];?></p>
            </div>
        </div>
        <a href="<?= htmlspecialchars($link = $content[16]['content']);?>"
            class="cta-button"><?= $button = $content[11]['content'];?></a>
        <a href="<?= $link2 = $content[17]['content'];?>"
            class="cta-button"><?= $button2 = $content[12]['content'];?></a>
        <a href="<?= $link3 = $content[18]['content'];?>"
            class="cta-button"><?= $button3 = $content[13]['content'];?></a>
        <a href="<?= $link4 = $content[19]['content']; ?>"
            class="cta-button"><?= $button4 = $content[14]['content'];?></a>
        <a href="<?= $link5 = $content[20]['content']; ?>"
            class="cta-button"><?= $button5 = $content[15]['content'];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $aboutUs = $content[1]['content'];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $aboutDialog1 = $content[22]['content'];?></p>
                <p tabindex="0"><?= $aboutDialog2 = $content[23]['content'];?></p>
                <p tabindex="0"><?= $aboutDialog3 = $content[24]['content'];?></p>
            </div>
        </div>

        <p><?= $aboutParagraph = $content[25]['content'];?></p>
        <p><?= $aboutParagraph2 = $content[26]['content'];?></p>
        <p><?= $aboutParagraph3 = $content[27]['content'];?></p>
        <a href="<?= $aboutButton = $content[29]['content'];?>" class="cta-button"><?= $aboutButton = $content[28]['content'];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $servicesHeading = $content[30]['content'];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $servicesDialog1 = $content[31]['content'];?></p>
                <p tabindex="0"><?= $servicesDialog2 = $content[32]['content'];?></p>
                <p tabindex="0"><?= $servicesDialog3 = $content[33]['content'];?></p>
                <img src="https://latinospc.com/images/number.jpg" width="auto" height="auto" alt="number"
                    style="display: block; margin: 0 auto;">
            </div>
        </div>

        <a href="../offered_services/cleanups" class="cta-button"><?= $servicesCleanUpsButton = $content[34]['content'];?></a>
        <a href="../offered_services/protection" class="cta-button"><?= $servicesComputerProtectionButton = $content[35]['content'];?></a>
        <a href="../offered_services/consultations" class="cta-button"><?= $servicesConsultationsButton = $content[36]['content'];?></a>
        <a href="../offered_services/managedServices" class="cta-button"><?= $servicesManagedServicesButton = $content[37]['content'];?></a>
        <a href="../offered_services/websites" class="cta-button"><?= $servicesRemoteSupportButton = $content[38]['content'];?></a>
        <a href="../offered_services/remoteSupport" class="cta-button"><?= $servicesWebsitesButton = $content[39]['content'];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $securityHeading = $content[45]['content'];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $securityDialog = $content[46]['content'];?></p>
            </div>
         </div>

        <a href="../offered_security/best_practices" class="cta-button"><?= $securityButton = $content[47]['content'];?></a>
        <a href="../offered_security/backups" class="cta-button"><?= $securityButton2 = $content[48]['content'];?></a>
        <a href="../offered_security/passwords" class="cta-button"><?= $securityButton3 = $content[49]['content'];?></a>
        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text"><?= $tutorialsAndBlog = $content[50]['content'] . ' / ' . rtrim($content[51]['content'], 's');?></h3>
                <div class="link-dialog">
                    <p tabindex="0"><?= $tutorialsAndBlogDialog = $content[52]['content'];?></p>
                </div>
            </div>
            <p><?= $tutorialsAndBlogParagraph = $content[53]['content'];?></p>
            <a href="../tutorials/" class="cta-button"><?= $tutorialsAndBlogButton = $content[54]['content'];?></a>
        </aside>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $hardwareHeading = $content[55]['content'];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $hardwareDialog = $content[56]['content'];?></p>
                <p tabindex="0"><?= $hardwareDialog = $content[57]['content'];?></p>
                <p><?= $hardwareDialog = $content[58]['content'];?></p>
            </div>
        </div>

        <a href="../hardware_options/cpu" class="cta-button"><?= $hardwareButtons = $content[59]['content'];?></a>
        <a href="../hardware_options/storage" class="cta-button"><?= $hardwareButtons = $content[60]['content'];?></a>
        <a href="../hardware_options/psu" class="cta-button"><?= $hardwareButtons = $content[61]['content'];?></a>
        <a href="../hardware_options/input_devices" class="cta-button"><?= $hardwareButtons = $content[62]['content'];?></a>
        <a href="../hardware_options/output_devices" class="cta-button"><?= $hardwareButtons = $content[63]['content'];?></a>
        <a href="../hardware_options/#article" class="cta-button"><?= $hardwareButtons = $content[64]['content'];?></a>

        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text"><?= $hardwarePeripheralsAndGear = $content[65]['section'];?></h3>
                <div class="link-dialog">
                    <p tabindex="0"><?= $hardwarePeripheralsAndGearDialog = $content[66]['content'];?></p>
                    <p tabindex="0"><?= $hardwarePeripheralsAndGearDialog = $content[67]['content'];?></p>
                </div>
            </div>
            <p><?= $hardwarePeripheralsAndGear = $content[68]['content'];?></p>
            <a href="./hardware_options/peripherals_and_gear" class="cta-button"><?= $visitPage = $content[54]['content'];?></a>
    </div>
    </aside>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= ucfirst($content[69]['section']);?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $softwareDialog = $content[70]['content'];?></p>
            </div>
        </div>
        <a href="../software_options/anti_virus" class="cta-button"><?= $softwareButtons = $content[71]['content'];?></a>
        <a href="../software_options/malware_cleaner" class="cta-button"><?= $softwareButtons = $content[72]['content'];?></a>
        <a href="../software_options/web_browsers" class="cta-button"><?= $softwareButtons = $content[73]['content'];?></a>
        <a href="../software_options/messaging" class="cta-button"><?= $softwareButtons = $content[74]['content'];?></a>
        <a href="../software_options/media" class="cta-button"><?= $softwareButtons = $content[75]['content'];?></a>
        <a href="../software_options/runtimes" class="cta-button"><?= $softwareButtons = $content[76]['content'];?></a>
        <a href="../software_options/imaging" class="cta-button"><?= $softwareButtons = $content[77]['content'];?></a>
        <a href="../software_options/documents" class="cta-button"><?= $softwareButtons = $content[78]['content'];?></a>
        <a href="../software_options/file_sharing" class="cta-button"><?= $softwareButtons = $content[79]['content'];?></a>
        <a href="../software_options/online_storage" class="cta-button"><?= $softwareButtons = $content[80]['content'];?></a>
        <a href="../software_options/other" class="cta-button"><?= $softwareButtons = $content[81]['content'];?></a>
        <a href="../software_options/utilities" class="cta-button"><?= $softwareButtons = $content[82]['content'];?></a>
        <a href="../software_options/compression" class="cta-button"><?= $softwareButtons = $content[83]['content'];?></a>
        <a href="../software_options/developer_tools" class="cta-button"><?= $softwareButtons = $content[84]['content'];?></a>
    </div>
</section>
<?php
}
?>