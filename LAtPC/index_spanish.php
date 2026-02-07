<?php
/* DATABASE CONNECTION */
try {
	$dbPath = __DIR__ . '/db/laTpc.db';
	$pdo = new PDO('sqlite:' . $dbPath);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// Check if content table exists
	$tableExists = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='content'")->fetch();

	global $content;
	if ($tableExists) {
		$stmt = $pdo->query('SELECT * FROM content WHERE page_id = "inicio"');
		$content = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
} catch (PDOException $e) {
	// Log error and continue without database content
	error_log('Database Error: ' . $e->getMessage());
	$content = [];
}

function contenido_inicio (){
global $content;
   ?>

<section class="homepage-grid">
    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?php echo $content[array_search('headings', array_column($content, 0))]['content']; ?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $_JesusChristDialog1 = $content[1]['content'];?></p>
                <p tabindex="0"><?= $_JesusChristDialog2 = $content[2]['content'];?></p>
            </div>

        </div>
        <a href="../Jesucristo/padre_celestial_cuentame_sobre_el_internet"
            class="cta-button"><?= $button = $content[3]['content'];?></a>
        <a href="../Jesucristo/apostoles"
            class="cta-button"><?= $button2 = $content[4]['content'];?></a>
        <a href="../Jesucristo/parabolas"
            class="cta-button"><?= $button3 = $content[5]['content'];?></a>
        <a href="../Jesucristo/sermones"
            class="cta-button"><?= $button4 = $content[6]['content'];?></a>
        <a href="../Jesucristo/enseñanzas"
            class="cta-button"><?= $button5 = $content[7]['content'];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $aboutUs = $content[13]['content'];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $aboutDialog1 = $content[14]['content'];?></p>
                <p tabindex="0"><?= $aboutDialog2 = $content[15]['content'];?></p>
                <p tabindex="0"><?= $aboutDialog3 = $content[16]['content'];?></p>
            </div>
        </div>

        <p><?= $aboutParagraph = $content[17]['content'];?></p>
        <p><?= $aboutParagraph2 = $content[18]['content'];?></p>
        <p><?= $aboutParagraph3 = $content[19]['content'];?></p>
        <a href="<?= $aboutButton = $content[21]['content'];?>" class="cta-button"><?= $aboutButton = $content[20]['content'];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $servicesHeading = $content[22]['content'];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $servicesDialog1 = $content[23]['content'];?></p>
                <p tabindex="0"><?= $servicesDialog2 = $content[24]['content'];?></p>
                <p tabindex="0"><?= $servicesDialog3 = $content[25]['content'];?></p>
                <img src="https://latinospc.com/images/number.jpg" width="auto" height="auto" alt="number"
                    style="display: block; margin: 0 auto;">
            </div>
        </div>

        <a href="#" class="cta-button"><?= $servicesCleanUpsButton = $content[26]['content'];?></a>
        <a href="#" class="cta-button"><?= $servicesComputerProtectionButton = $content[27]['content'];?></a>
        <a href="#" class="cta-button"><?= $servicesConsultationsButton = $content[28]['content'];?></a>
        <a href="#" class="cta-button"><?= $servicesManagedServicesButton = $content[29]['content'];?></a>
        <a href="#" class="cta-button"><?= $servicesRemoteSupportButton = $content[30]['content'];?></a>
        <a href="#" class="cta-button"><?= $servicesWebsitesButton = $content[31]['content'];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $securityHeading = $content[37]['content'];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $securityDialog = $content[38]['content'];?></p>
            </div>
        </div>

        <a href="#" class="cta-button"><?= $securityButton = $content[39]['content'];?></a>
        <a href="#" class="cta-button"><?= $securityButton2 = $content[40]['content'];?></a>
        <a href="#" class="cta-button"><?= $securityButton3 = $content[41]['content'];?></a>
        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text"><?= $tutorialsAndBlog = $content[42]['content'] . ' / ' . rtrim($content[43]['content'], 's');?></h3>
                <div class="link-dialog">
                    <p tabindex="0"><?= $tutorialsAndBlogDialog = $content[44]['content'];?></p>
                </div>
            </div>
            <p><?= $tutorialsAndBlogParagraph = $content[45]['content'];?></p>
            <a href="#" class="cta-button"><?= $tutorialsAndBlogButton = $content[46]['content'];?></a>
        </aside>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $hardwareHeading = $content[47]['content'];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $hardwareDialog = $content[48]['content'];?></p>
                <p tabindex="0"><?= $hardwareDialog = $content[49]['content'];?></p>
                <p><?= $hardwareDialog = $content[50]['content'];?></p>
            </div>
        </div>

        <a href="#" class="cta-button"><?= $hardwareButtons = $content[51]['content'];?></a>
        <a href="#" class="cta-button"><?= $hardwareButtons = $content[52]['content'];?></a>
        <a href="#" class="cta-button"><?= $hardwareButtons = $content[53]['content'];?></a>
        <a href="#" class="cta-button"><?= $hardwareButtons = $content[54]['content'];?></a>
        <a href="#" class="cta-button"><?= $hardwareButtons = $content[55]['content'];?></a>
        <a href="#" class="cta-button"><?= $hardwareButtons = $content[56]['content'];?></a>

        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text"><?= $hardwarePeripheralsAndGear = $content[57]['section'];?></h3>
                <div class="link-dialog">
                    <p tabindex="0"><?= $hardwarePeripheralsAndGearDialog = $content[58]['content'];?></p>
                    <p tabindex="0"><?= $hardwarePeripheralsAndGearDialog = $content[59]['content'];?></p>
                </div>
            </div>
            <p><?= $hardwarePeripheralsAndGear = $content[60]['content'];?></p>
            <a href="#" class="cta-button"><?= $visitPage = $content[46]['content'];?></a>
    </div>
    </aside>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= ucfirst($content[61]['section']);?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $softwareDialog = $content[62]['content'];?></p>
            </div>
        </div>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[63]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[64]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[65]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[66]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[67]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[68]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[69]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[70]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[71]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[72]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[73]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[74]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[75]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[76]['content'];?></a>
    </div>
</section>
   <?php
}
include './anvil/structure.php';

?>