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
            <h3 class="linked-text"><?= $content[0][$key] ?? 'Welcome';?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $_JesusChristDialog1 = $content[9][$key] ?? '';?></p>
                <p tabindex="0"><?= $_JesusChristDialog2 = $content[10][$key] ?? '';?></p>
            </div>
        </div>
        <a href="<?= htmlspecialchars($link = $content[16][$key] ?? '#');?>"
            class="cta-button"><?= $button = $content[11][$key] ?? 'Button';?></a>
        <a href="<?= $link2 = $content[17][$key] ?? '#';?>"
            class="cta-button"><?= $button2 = $content[12][$key] ?? 'Button';?></a>
        <a href="<?= $link3 = $content[18][$key] ?? '#';?>"
            class="cta-button"><?= $button3 = $content[13][$key] ?? 'Button';?></a>
        <a href="<?= $link4 = $content[19][$key] ?? '#'; ?>"
            class="cta-button"><?= $button4 = $content[14][$key] ?? 'Button';?></a>
        <a href="<?= $link5 = $content[20][$key] ?? '#'; ?>"
            class="cta-button"><?= $button5 = $content[15][$key] ?? 'Button';?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $aboutUs = $content[21][$key] ?? 'About';?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $aboutDialog1 = $content[22][$key] ?? '';?></p>
                <p tabindex="0"><?= $aboutDialog2 = $content[23][$key] ?? '';?></p>
                <p tabindex="0"><?= $aboutDialog3 = $content[24][$key] ?? '';?></p>
            </div>
        </div>

        <p><?= $aboutParagraph = $content[25][$key] ?? '';?></p>
        <p><?= $aboutParagraph2 = $content[26][$key] ?? '';?></p>
        <p><?= $aboutParagraph3 = $content[27][$key] ?? '';?></p>
        <a href="<?= $aboutButton = $content[29][$key] ?? '#';?>" class="cta-button"><?= $aboutButton = $content[28][$key] ?? 'Button';?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $servicesHeading = $content[30][$key] ?? 'Services';?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $servicesDialog1 = $content[31][$key] ?? '';?></p>
                <p tabindex="0"><?= $servicesDialog2 = $content[32][$key] ?? '';?></p>
                <p tabindex="0"><?= $servicesDialog3 = $content[33][$key] ?? '';?></p>
                <img src="https://latinospc.com/images/number.jpg" width="auto" height="auto" alt="number"
                    style="display: block; margin: 0 auto;">
            </div>
        </div>

        <a href="<?= $servicesCleanUpsButton = $content[85][$key] ?? '#';?>" class="cta-button"><?= $servicesCleanUpsButton = $content[34][$key] ?? 'Button';?></a>
        <a href="<?= $servicesComputerProtectionButton = $content[44][$key] ?? '#';?>" class="cta-button"><?= $servicesComputerProtectionButton = $content[35][$key] ?? 'Button';?></a>
        <a href="<?= $servicesConsultationsButton = $content[41][$key] ?? '#';?>" class="cta-button"><?= $servicesConsultationsButton = $content[36][$key] ?? 'Button';?></a>
        <a href="<?= $servicesManagedServicesButton = $content[42][$key] ?? '#';?>" class="cta-button"><?= $servicesManagedServicesButton = $content[37][$key] ?? 'Button';?></a>
        <a href="<?= $servicesWebsitesButton = $content[40][$key] ?? '#';?>" class="cta-button"><?= $servicesWebsitesButton = $content[38][$key] ?? 'Button';?></a>
        <a href="<?= $servicesRemoteSupportButton = $content[43][$key] ?? '#';?>" class="cta-button"><?= $servicesRemoteSupportButton = $content[39][$key] ?? 'Button';?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $securityHeading = $content[45][$key] ?? 'Security';?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $securityDialog = $content[46][$key] ?? '';?></p>
            </div>
         </div>

        <a href="<?= $securityButtonBestPractices = $content[86][$key] ?? '#';?>" class="cta-button"><?= $securityButtonBestPractices = $content[47][$key] ?? 'Button';?></a>
        <a href="<?= $securityButtonBackups = $content[87][$key] ?? '#';?>" class="cta-button"><?= $securityButtonBackups = $content[48][$key] ?? 'Button';?></a>
        <a href="<?= $securityButtonPasswords = $content[88][$key] ?? '#';?>" class="cta-button"><?= $securityButtonPasswords = $content[49][$key] ?? 'Button';?></a>
        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text"><?= $tutorialsAndBlog = ($content[50][$key] ?? 'Tutorials') . ' / ' . rtrim($content[51][$key] ?? 'Blog', 's');?></h3>
                <div class="link-dialog">
                    <p tabindex="0"><?= $tutorialsAndBlogDialog = $content[52][$key] ?? '';?></p>
                </div>
            </div>
            <p><?= $tutorialsAndBlogParagraph = $content[53][$key] ?? '';?></p>
            <a href="<?= $tutorialsAndBlogButton = $content[89][$key] ?? '#';?>" class="cta-button"><?= $tutorialsAndBlogButton = $content[54][$key] ?? 'Button';?></a>
        </aside>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $hardwareHeading = $content[55][$key] ?? 'Hardware';?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $hardwareDialog = $content[56][$key] ?? '';?></p>
                <p tabindex="0"><?= $hardwareDialog = $content[57][$key] ?? '';?></p>
                <p><?= $hardwareDialog = $content[58][$key] ?? '';?></p>
            </div>
        </div>

        <a href="<?= $hardwarecpu = $content[90][$key] ?? '#';?>" class="cta-button"><?= $hardwareButtons = $content[59][$key] ?? 'Button';?></a>
        <a href="<?= $hardwarestorage = $content[91][$key] ?? '#';?>" class="cta-button"><?= $hardwareButtons = $content[60][$key] ?? 'Button';?></a>
        <a href="<?= $hardwarepsu = $content[92][$key] ?? '#';?>" class="cta-button"><?= $hardwareButtons = $content[61][$key] ?? 'Button';?></a>
        <a href="<?= $hardwareinputdevices = $content[93][$key] ?? '#';?>" class="cta-button"><?= $hardwareButtons = $content[62][$key] ?? 'Button';?></a>
        <a href="<?= $hardwareoutputdevices = $content[94][$key] ?? '#';?>" class="cta-button"><?= $hardwareButtons = $content[63][$key] ?? 'Button';?></a>
        <a href="<?= $hardwarearticle = $content[95][$key] ?? '#';?>" class="cta-button"><?= $hardwareButtons = $content[64][$key] ?? 'Button';?></a>

        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text"><?= $hardwarePeripheralsAndGear = $content[65][$key] ?? 'Peripherals';?></h3>
                <div class="link-dialog">
                    <p tabindex="0"><?= $hardwarePeripheralsAndGearDialog = $content[66][$key] ?? '';?></p>
                    <p tabindex="0"><?= $hardwarePeripheralsAndGearDialog = $content[67][$key] ?? '';?></p>
                </div>
            </div>
            <p><?= $hardwarePeripheralsAndGear = $content[68][$key] ?? '';?></p>
            <a href="<?= $hardwarearticle = $content[96][$key] ?? '#';?>" class="cta-button"><?= $visitPage = $content[54][$key] ?? 'Button';?></a>
    </div>
    </aside>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $softwareHeading = $content[69][$key] ?? 'Software';?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $softwareDialog = $content[70][$key] ?? '';?></p>
            </div>
        </div>
        <a href="<?= $softwareAntiVirus = $content[97][$key] ?? '#';?>" class="cta-button"><?= $softwareB_AntiVirus = $content[71][$key] ?? 'Button';?></a>
        <a href="<?= $softwareMalwareCleaner = $content[98][$key] ?? '#';?>" class="cta-button"><?= $softwareB_MalwareCleaner = $content[72][$key] ?? 'Button';?></a>
        <a href="<?= $softwareWebBrowsers = $content[99][$key] ?? '#';?>" class="cta-button"><?= $softwareB_WebBrowsers = $content[73][$key] ?? 'Button';?></a>
        <a href="<?= $softwareMessaging = $content[100][$key] ?? '#';?>" class="cta-button"><?= $softwareB_Messaging = $content[74][$key] ?? 'Button';?></a>
        <a href="<?= $softwareMedia = $content[101][$key] ?? '#';?>" class="cta-button"><?= $softwareB_Media = $content[75][$key] ?? 'Button';?></a>
        <a href="<?= $softwareRuntimes = $content[102][$key] ?? '#';?>" class="cta-button"><?= $softwareB_Runtimes = $content[76][$key] ?? 'Button';?></a>
        <a href="<?= $softwareImaging = $content[103][$key] ?? '#';?>" class="cta-button"><?= $softwareB_Imaging = $content[77][$key] ?? 'Button';?></a>
        <a href="<?= $softwareDocuments = $content[104][$key] ?? '#';?>" class="cta-button"><?= $softwareB_Documents = $content[78][$key] ?? 'Button';?></a>
        <a href="<?= $softwareFileSharing = $content[105][$key] ?? '#';?>" class="cta-button"><?= $softwareB_FileSharing = $content[79][$key] ?? 'Button';?></a>
        <a href="<?= $softwareOnlineStorage = $content[106][$key] ?? '#';?>" class="cta-button"><?= $softwareB_OnlineStorage = $content[80][$key] ?? 'Button';?></a>
        <a href="<?= $softwareOther = $content[107][$key] ?? '#';?>" class="cta-button"><?= $softwareB_Other = $content[81][$key] ?? 'Button';?></a>
        <a href="<?= $softwareUtilities = $content[108][$key] ?? '#';?>" class="cta-button"><?= $softwareB_Utilities = $content[82][$key] ?? 'Button';?></a>
        <a href="<?= $softwareCompression = $content[109][$key] ?? '#';?>" class="cta-button"><?= $softwareB_Compression = $content[83][$key] ?? 'Button';?></a>
        <a href="<?= $softwareDeveloperTools = $content[110][$key] ?? '#';?>" class="cta-button"><?= $softwareB_DeveloperTools = $content[84][$key] ?? 'Button';?></a>
    </div>
</section>
<?php
}



?>