<?php
class Structure
{
	// Declare properties to avoid dynamic property creation warnings
	public string $dir;
	public string $lang;
	public string $title;

	public function __construct($dir, $lang, $title)
	{
		$this->dir = $dir;
		$this->lang = $lang;
		$this->title = $title;
	}

	public function getLang()
	{
		// Return the language code based on the object's lang property
		if ($this->lang == 'english') {
			return 'en';
		} elseif ($this->lang == 'español') {
			return 'es-419';
		} else {
			// Default to English
			return 'en';
		}
	}

	public function getDir()
	{
		return $this->dir;
	}

	public function getTitle()
	{
		return $this->title;
	}
}

// Get the requested path - this works even without .htaccess
$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];
$path_info = $_SERVER['PATH_INFO'] ?? '';

// Extract the route from the URL
if (!empty($path_info)) {
	$route = ltrim($path_info, '/');
} else {
	// Fallback: parse from REQUEST_URI
	$route = str_replace(dirname($script_name), '', $request_uri);
	$route = ltrim($route, '/');
	$route = strtok($route, '?');  // Remove query string
	$route = str_replace('LAtPC', '', $route);
	/* NOTE: in production $route str_replace 'LAtPC' will have to be deleted or something since the path will not be inside the LAtPC dir.
	but on the root of the public directory*/
	$route = trim($route, '/');
}

// Split the route into segments for subdirectory support
$route_segments = explode('/', $route);
$main_route = $route_segments[0] ?? '';
$sub_route = $route_segments[1] ?? '';

// echo "DEBUG: Route = '" . $route . "'<br>";
// echo $path_info;
// Route handling
switch ($main_route) {
	case '':
	case 'index.php':
		// Show homepage - continue to HTML below
		break;
	case 'español':
		// Show Spanish content and exit
		showSpanishContent();
		exit;  // Important: stop execution here
		break;

	case 'about':
		about();
		exit;
		break;

	case 'offered_services':
		offered_services($sub_route);
		exit;
		break;

	case 'offered_security':
		offered_security($sub_route);
		exit;
		break;

	case 'hardware_options':
		hardware_options($sub_route);
		exit;
		break;

	case 'software_options':
		software_options($sub_route);
		exit;
		break;

	case 'tutorials':
		tutorial();
		exit;
		break;

	case 'Template':
		fullPageTemplate();
		exit;
		break;

	case 'JesusChrist':
		_JesusChrist($sub_route);
		exit;
		break;
	case 'Jesucristo':
		_JesusChrist($sub_route);  /*this cannot work anywhere else in the same way;
										 say: when we start services functions,
											 there has to be a services(sub_route) function
												 and a servicios(sub_route) function.*/
		exit;
		break;
	default:
		// 404 page and exit
		show404();
		exit;
		break;
}

function show404()
{
	http_response_code(404);

	 echo '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>404 - Page Not Found</title>
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
      text-align: center;
	  padding: .25rem 2rem .3rem;
      padding-top: 10%;
      color: #333;
  margin: 0 auto;
  position: relative;
  max-width: 600px;
    }
    h1 {
      font-size: 5em;
      margin-bottom: 0.5em;
      color: #dc3545;
    }
    p {
      font-size: 1.2em;
      margin-bottom: 2em;
    }
    a {
      text-decoration: none;
      color: #fff;
      background-color: #007bff;
      padding: 0.75em 1.5em;
      border-radius: 5px;
      font-weight: bold;
    }
    a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <h1>404</h1>
  <p>Oops! The page you’re looking for doesn’t exist.</p>
  <a href="../">Return Home</a>
</body>
</html>';

	exit;
}

function showSpanishContent()
{
	$page = new Structure('../', 'español', 'Inicio LatinosPC');
	$keywords = '~Palabras Clave~';
	$description = '~Descripción~';
	include 'index_spanish.php';
}

function about()
{
	$page = new Structure('../', 'english', 'About');
	$keywords = 'Keywords';
	$description = 'Description';
	include 'about.php';
}

function offered_services($sub_route)
{
	switch ($sub_route) {

		case 'cleanups':
			$page = new Structure('../../', 'english', 'Clean Ups');
			$keywords = 'Keywords';
			$description = 'Description';
			include 'services/cleanups.php';
			break;
		case 'protection':
			$page = new Structure('../../', 'english', 'Protection');
			$keywords = 'Keywords';
			$description = 'Description';
			include 'services/protection.php';
			break;
		case 'consultations':
			$page = new Structure('../../', 'english', 'Consultations');
			$keywords = 'Keywords';
			$description = 'Description';
			include 'services/consultations.php';
			break;
		case 'managedServices':
			$page = new Structure('../../', 'english', 'Managed Services');
			$keywords = 'Keywords';
			$description = 'Description';
			include 'services/managedServices.php';
			break;
		case 'websites':
			$page = new Structure('../../', 'english', 'Websites');
			$keywords = 'Keywords';
			$description = 'Description';
			include 'services/websites.php';
			break;
		case 'remoteSupport':
			$page = new Structure('../../', 'english', 'Remote Support');
			$keywords = 'Keywords';
			$description = 'Description';
			include 'services/remoteSupport.php';
			break;

			case '':
				$page = new Structure('../../', 'english', 'Services');
			$keywords = 'Keywords';
			$description = 'Description';
			include 'services/services.php';
				break;
		default:
			show404();
			break;
	}
}

function offered_security($sub_route){

	switch ($sub_route) {
		case 'best_practices':
			$page = new Structure('../../', 'english', 'Best Practices');
			$keywords = 'Keywords';
			$description = 'Description';
			include 'security/security.php';
			break;
		case 'backups':
			$page = new Structure('../../', 'english', 'Backups');
			$keywords = 'Keywords';
			$description = 'Description';
			include 'security/security.php';
			break;
		case 'passwords':
			$page = new Structure('../../', 'english', 'Passwords');
			$keywords = 'Keywords';
			$description = 'Description';
			include 'security/security.php';
			break;

		case '':
			$page = new Structure('../../', 'english', 'Security');
			$keywords = 'Security Keywords';
			$description = 'Security Description';
			include 'security/security.php';
			break;
		default:
			show404();
			break;
	}
}

function hardware_options($sub_route){

	switch ($sub_route) {
		case 'cpu':
			$page = new Structure('../../', 'english', 'HW CPU');
			$keywords = 'CPU Keywords';
			$description = 'CPU Description';
			include 'hardware/hardware.php';
			break;
		case 'ram':
			$page = new Structure('../../', 'english', 'HW RAM');
			$keywords = 'RAM Keywords';
			$description = 'RAM Description';
			include 'hardware/hardware.php';
			break;
		case 'motherboard':
			$page = new Structure('../../', 'english', 'HW Motherboard');
			$keywords = 'Motherboard Keywords';
			$description = 'Motherboard Description';
			include 'hardware/hardware.php';
			break;
		case 'chassis':
			$page = new Structure('../../', 'english', 'HW Chassis');
			$keywords = 'Chassis Keywords';
			$description = 'Chassis Description';
			include 'hardware/hardware.php';
			break;
		case 'storage':
			$page = new Structure('../../', 'english', 'HW Storage');
			$keywords = 'Storage Keywords';
			$description = 'Storage Description';
			include 'hardware/hardware.php';
			break;
		case 'powersupply':
			case 'psu':
			$page = new Structure('../../', 'english', 'HW PSU');
			$keywords = 'PSU Keywords';
			$description = 'PSU Description';
			include 'hardware/hardware.php';
			break;
		case 'graphicscard':
			case 'gpu':
			$page = new Structure('../../', 'english', 'HW GPU');
			$keywords = 'GPU Keywords';
			$description = 'GPU Description';
			include 'hardware/hardware.php';
			break;
		case 'coolers':
			case 'cooling':
			$page = new Structure('../../', 'english', 'HW Cooling');
			$keywords = 'Cooling Keywords';
			$description = 'Cooling Description';
			include 'hardware/hardware.php';
			break;
		case 'input_devices':
			$page = new Structure('../../', 'english', 'HW Input Devices');
			$keywords = 'Input Devices Keywords';
			$description = 'Input Devices Description';
			include 'hardware/hardware.php';
			break;
		case 'output_devices':
			$page = new Structure('../../', 'english', 'HW Output Devices');
			$keywords = 'Output Devices Keywords';
			$description = 'Output Devices Description';
			include 'hardware/hardware.php';
			break;
		case 'peripherals_and_gear':
			$page = new Structure('../../', 'english', 'HW Peripherals');
			$keywords = 'Peripherals Keywords';
			$description = 'Peripherals Description';
			include 'hardware/hardware.php';
			break;
		case 'mouse':
			$page = new Structure('../../', 'english', 'HW Mouse');
			$keywords = 'Mouse Keywords';
			$description = 'Mouse Description';
			include 'hardware/hardware.php';
			break;
		case 'keyboard':
			$page = new Structure('../../', 'english', 'HW Keyboard');
			$keywords = 'Keyboard Keywords';
			$description = 'Keyboard Description';
			include 'hardware/hardware.php';
			break;
		case 'monitor':
			$page = new Structure('../../', 'english', 'HW Monitor');
			$keywords = 'Monitor Keywords';
			$description = 'Monitor Description';
			include 'hardware/hardware.php';
			break;
		case 'p_memory':
			$page = new Structure('../../', 'english', 'HW External Drive');
			$keywords = 'External Drive Keywords';
			$description = 'External Drive Description';
			include 'hardware/hardware.php';
			break;
		case 'pci':
			$page = new Structure('../../', 'english', 'HW PCI Cards');
			$keywords = 'PCI Cards Keywords';
			$description = 'PCI Cards Description';
			include 'hardware/hardware.php';
			break;
		case 'scanners':
			case 'scanner':
			$page = new Structure('../../', 'english', 'HW Scanners');
			$keywords = 'Scanners Keywords';
			$description = 'Scanners Description';
			include 'hardware/hardware.php';
			break;
		case 'printers':
			case 'printer':
			$page = new Structure('../../', 'english', 'HW Printers');
			$keywords = 'Printers Keywords';
			$description = 'Printers Description';
			include 'hardware/hardware.php';
			break;
		case 'console_controllers':
			$page = new Structure('../../', 'english', 'HW Console Controllers');
			$keywords = 'Console Controllers Keywords';
			$description = 'Console Controllers Description';
			include 'hardware/hardware.php';
			break;
		case 'joystick':
			$page = new Structure('../../', 'english', 'HW Joysticks');
			$keywords = 'Joystick Keywords';
			$description = 'Joystick Description';
			include 'hardware/hardware.php';
			break;
		case 'tablets':
			case 'tablet':
			$page = new Structure('../../', 'english', 'HW Tablets');
			$keywords = 'Tablets Keywords';
			$description = 'Tablets Description';
			include 'hardware/hardware.php';
			break;
		case 'microphones':
			case 'micro':
			$page = new Structure('../../', 'english', 'HW Microphones');
			$keywords = 'Microphones Keywords';
			$description = 'Microphones Description';
			include 'hardware/hardware.php';
			break;
		case 'headsets':
			case 'headset':
			$page = new Structure('../../', 'english', 'HW Headsets');
			$keywords = 'Headsets Keywords';
			$description = 'Headsets Description';
			include 'hardware/hardware.php';
			break;
		case 'headphones':
			case 'headphone':
			$page = new Structure('../../', 'english', 'HW Headphones');
			$keywords = 'Headphones Keywords';
			$description = 'Headphones Description';
			include 'hardware/hardware.php';
			break;
		case 'audio_mixers':
			case 'audiomixer':
			$page = new Structure('../../', 'english', 'HW Audio Mixers');
			$keywords = 'Audio Mixers Keywords';
			$description = 'Audio Mixers Description';
			include 'hardware/hardware.php';
			break;
		case 'controllers':
			case 'controller':
			$page = new Structure('../../', 'english', 'HW Controllers');
			$keywords = 'Controllers Keywords';
			$description = 'Controllers Description';
			include 'hardware/hardware.php';
			break;
		case 'gaming_uniforms':
			case 'uniforms':
			$page = new Structure('../../', 'english', 'HW Gaming Uniforms');
			$keywords = 'Gaming Uniforms Keywords';
			$description = 'Gaming Uniforms Description';
			include 'hardware/hardware.php';
			break;
		case 'pens_pencils_tablets':
			case'pencil':
			$page = new Structure('../../', 'english', 'HW Pens, Pencils & Tablets');
			$keywords = 'Pens, Pencils & Tablets Keywords';
			$description = 'Pens, Pencils & Tablets Description';
			include 'hardware/hardware.php';
			break;
		case 'chairs':
			case 'chair':
			$page = new Structure('../../', 'english', 'HW Chairs');
			$keywords = 'Chairs Keywords';
			$description = 'Chairs Description';
			include 'hardware/hardware.php';
			break;
		case 'desk':
			case 'desks':
			$page = new Structure('../../', 'english', 'HW Desks');
			$keywords = 'Desk Keywords';
			$description = 'Desk Description';
			include 'hardware/hardware.php';
			break;
		case 'anti_slip_mats':
			case'antislipmats':
			$page = new Structure('../../', 'english', 'HW Anti-Slip Mats');
			$keywords = 'Anti-Slip Mats Keywords';
			$description = 'Anti-Slip Mats Description';
			include 'hardware/hardware.php';
			break;
		case 'speakers_and_subwoofers':
			$page = new Structure('../../', 'english', 'HW Speakers and Subwoofers');
			$keywords = 'Speakers and Subwoofers Keywords';
			$description = 'Speakers and Subwoofers Description';
			include 'hardware/hardware.php';
			break;
		case '':
				$page = new Structure('../../', 'english', 'Hardware');
			$keywords = 'Hardware Keywords';
			$description = 'Hardware Description';
			include 'hardware/hardware.php';
				break;

		default:
			show404();
			break;
	}
}


function software_options($sub_route){
	switch ($sub_route){
		case 'anti_virus':
				$page = new Structure('../../', 'english', 'SW Anti-Virus');
				$keywords = 'Anti-Virus Keywords';
				$description = 'Anti-Virus Description';
				include 'software/software.php';
				break;
		case 'malware_cleaner':
				$page = new Structure('../../', 'english', 'SW Malware Cleaner');
				$keywords = 'Malware Cleaner Keywords';
				$description = 'Malware Cleaner Description';
				include 'software/software.php';
				break;
		case 'web_browsers':
				$page = new Structure('../../', 'english', 'SW Web Browsers');
				$keywords = 'Web Browsers Keywords';
				$description = 'Web Browsers Description';
				include 'software/software.php';
				break;
		case 'messaging':
				$page = new Structure('../../', 'english', 'SW Messaging');
				$keywords = 'Messaging Keywords';
				$description = 'Messaging Description';
				include 'software/software.php';
				break;
		case 'media':
				$page = new Structure('../../', 'english', 'SW Media');
				$keywords = 'Media Keywords';
				$description = 'Media Description';
				include 'software/software.php';
				break;
		case 'runtimes':
				$page = new Structure('../../', 'english', 'SW Runtimes');
				$keywords = 'Runtimes Keywords';
				$description = 'Runtimes Description';
				include 'software/software.php';
				break;
		case 'imaging':
			$page = new Structure('../../', 'english', 'SW Imaging');
			$keywords = 'Imaging Keywords';
			$description = 'Imaging Description';
			include 'software/software.php';
			break;
		case 'documents':
			$page = new Structure('../../', 'english', 'SW Documents');
			$keywords = 'Documents Keywords';
			$description = 'Documents Description';
			include 'software/software.php';
			break;
		case'file_sharing':
			$page = new Structure('../../', 'english', 'SW File Sharing');
			$keywords = 'File Sharing Keywords';
			$description = 'File Sharing Description';
			include 'software/software.php';
			break;
		case 'online_storage':
			$page = new Structure('../../', 'english', 'SW Online Storage');
			$keywords = 'Online Storage Keywords';
			$description = 'Online Storage Description';
			include 'software/software.php';
			break;
		case 'other':
			$page = new Structure('../../', 'english', 'SW Other');
			$keywords = 'Other Keywords';
			$description = 'Other Description';
			include 'software/software.php';
			break;
		case 'utilities':
			$page = new Structure('../../', 'english', 'SW Utilities');
			$keywords = 'Utilities Keywords';
			$description = 'Utilities Description';
			include 'software/software.php';
			break;
		case 'compression':
			$page = new Structure('../../', 'english', 'SW Compression');
			$keywords = 'Compression Keywords';
			$description = 'Compression Description';
			include 'software/software.php';
			break;
		case 'developer_tools':
			$page = new Structure('../../', 'english', 'SW Developer Tools');
			$keywords = 'Developer Tools Keywords';
			$description = 'Developer Tools Description';
			include 'software/software.php';
			break;

		case '':
				$page = new Structure('../../', 'english', 'Software');
				$keywords = 'Software Keywords';
				$description = 'Software Description';
				include 'software/software.php';
					break;
		default:
			show404();
			break;
		}
}

function fullPageTemplate()
{
	$page = new Structure('../', 'english', 'Template');
	$keywords = 'test_Keywords';
	$description = 'test_Description';
	include 'fullPageTemplate.php';
}

function _JesusChrist($sub_route)
{
	switch ($sub_route) {
		case 'father_in_heaven_tell_me_about_web':
			$page = new Structure('../../', 'english', 'Heavenly Father');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/_HeavenlyFather.php';
			break;
		case 'padre_celestial_cuentame_sobre_el_internet':
			$page = new Structure('../../', 'español', 'Padre Celestial');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/_HeavenlyFather.php';
			break;

		case 'apostles':
			$page = new Structure('../../', 'english', 'The Apostles');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/_Apostles.php';
			break;
		case 'apostoles':
			$page = new Structure('../../', 'español', 'Los Apóstoles');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/_Apostles.php';
			break;

		case 'parables':
			$page = new Structure('../../', 'english', 'Parables');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/parables.php';
			break;
		case 'parabolas':
			$page = new Structure('../../', 'español', 'Parabolas');
			$keywords = 'Palabras Clave de Parabolas';
			$description = 'Descripción de Parabolas';
			include '_JesusChrist/parables.php';
			break;

		case 'sermons':
			$page = new Structure('../../', 'english', 'Sermons');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/sermons.php';
			break;
		case 'sermones':
			$page = new Structure('../../', 'español', 'Sermones');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/sermons.php';
			break;

		case 'teachings':
			if (isset($_GET['John'])) {
				$page = new Structure('../../', 'english', 'Teachings: John');
				$keywords = 'Keyword_test';
				$description = 'Description_test';
				include '_JesusChrist/teachings.php';
			} else {
				$page = new Structure('../../', 'english', 'Teachings');
				$keywords = 'Keyword_test';
				$description = 'Description_test';
				include '_JesusChrist/teachings.php';
			}
			break;
		case 'enseñanzas':
			$page = new Structure('../../', 'español', 'Enseñanzas');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/teachings.php';
			break;

		case '':
			$page = new Structure('../../', 'english', 'Jesus Christ');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/_TheBelovedSon.php';
			break;
		case 'jesucristo':
			$page = new Structure('../../', 'español', 'Jesucristo');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include 'hola! Hay que arreglar las paginas en español';// This is a test: failed. The page displays the empty case above.
			break;

		default:
			show404();
			break;
	}
}

function tutorial() {
	$page = new Structure('../../', 'english', 'Tutorials');
	$keywords = 'Tutorials Keywords';
	$description = 'Tutorials Description';
	include 'anvil/tutorials.php';
}

$page = new Structure('../', 'english', 'Home LatinosPC');

$description = 'LatinosPC.com is your one-stop shop for all your computer repair needs. We offer a variety of services including computer repair, virus removal, data backup, and in-person and online computer classes. We work with individuals, students, small businesses, and gamers.';
$keywords = 'Computer repair, virus removal, data backup, computer classes, in-person classes, online classes, IT support, gamers, small business IT, student IT support';

/* DATABASE CONNECTION */
try {
	$dbPath = __DIR__ . '/db/laTpc.db';
	$pdo = new PDO('sqlite:' . $dbPath);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// Check if content table exists
	$tableExists = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='content'")->fetch();

	global $content;
	if ($tableExists) {
		$stmt = $pdo->query('SELECT * FROM content WHERE page_id = "home"');
		$content = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
} catch (PDOException $e) {
	// Log error and continue without database content
	error_log('Database Error: ' . $e->getMessage());
	$content = [];
}
//$stmt = $pdo->prepare("INSERT INTO content (page_id, name, content) VALUES (?, ?, ?)");






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

        <a href="../LAtPC/offered_services/cleanups" class="cta-button"><?= $servicesCleanUpsButton = $content[34]['content'];?></a>
        <a href="../LAtPC/offered_services/protection" class="cta-button"><?= $servicesComputerProtectionButton = $content[35]['content'];?></a>
        <a href="../LAtPC/offered_services/consultations" class="cta-button"><?= $servicesConsultationsButton = $content[36]['content'];?></a>
        <a href="../LAtPC/offered_services/managedServices" class="cta-button"><?= $servicesManagedServicesButton = $content[37]['content'];?></a>
        <a href="../LAtPC/offered_services/websites" class="cta-button"><?= $servicesRemoteSupportButton = $content[38]['content'];?></a>
        <a href="../LAtPC/offered_services/remoteSupport" class="cta-button"><?= $servicesWebsitesButton = $content[39]['content'];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $securityHeading = $content[45]['content'];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $securityDialog = $content[46]['content'];?></p>
            </div>
         </div>

        <a href="../LAtPC/offered_security/best_practices" class="cta-button"><?= $securityButton = $content[47]['content'];?></a>
        <a href="../LAtPC/offered_security/backups" class="cta-button"><?= $securityButton2 = $content[48]['content'];?></a>
        <a href="../LAtPC/offered_security/passwords" class="cta-button"><?= $securityButton3 = $content[49]['content'];?></a>
        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text"><?= $tutorialsAndBlog = $content[50]['content'] . ' / ' . rtrim($content[51]['content'], 's');?></h3>
                <div class="link-dialog">
                    <p tabindex="0"><?= $tutorialsAndBlogDialog = $content[52]['content'];?></p>
                </div>
            </div>
            <p><?= $tutorialsAndBlogParagraph = $content[53]['content'];?></p>
            <a href="../LAtPC/tutorials/" class="cta-button"><?= $tutorialsAndBlogButton = $content[54]['content'];?></a>
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

        <a href="../LAtPC/hardware_options/cpu" class="cta-button"><?= $hardwareButtons = $content[59]['content'];?></a>
        <a href="../LAtPC/hardware_options/storage" class="cta-button"><?= $hardwareButtons = $content[60]['content'];?></a>
        <a href="../LAtPC/hardware_options/psu" class="cta-button"><?= $hardwareButtons = $content[61]['content'];?></a>
        <a href="../LAtPC/hardware_options/input_devices" class="cta-button"><?= $hardwareButtons = $content[62]['content'];?></a>
        <a href="../LAtPC/hardware_options/output_devices" class="cta-button"><?= $hardwareButtons = $content[63]['content'];?></a>
        <a href="../LAtPC/hardware_options/" class="cta-button"><?= $hardwareButtons = $content[64]['content'];?></a>

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
        <a href="../LAtPC/software_options/anti_virus" class="cta-button"><?= $softwareButtons = $content[71]['content'];?></a>
        <a href="../LAtPC/software_options/malware_cleaner" class="cta-button"><?= $softwareButtons = $content[72]['content'];?></a>
        <a href="../LAtPC/software_options/web_browsers" class="cta-button"><?= $softwareButtons = $content[73]['content'];?></a>
        <a href="../LAtPC/software_options/messaging" class="cta-button"><?= $softwareButtons = $content[74]['content'];?></a>
        <a href="../LAtPC/software_options/media" class="cta-button"><?= $softwareButtons = $content[75]['content'];?></a>
        <a href="../LAtPC/software_options/runtimes" class="cta-button"><?= $softwareButtons = $content[76]['content'];?></a>
        <a href="../LAtPC/software_options/imaging" class="cta-button"><?= $softwareButtons = $content[77]['content'];?></a>
        <a href="../LAtPC/software_options/documents" class="cta-button"><?= $softwareButtons = $content[78]['content'];?></a>
        <a href="../LAtPC/software_options/file_sharing" class="cta-button"><?= $softwareButtons = $content[79]['content'];?></a>
        <a href="../LAtPC/software_options/online_storage" class="cta-button"><?= $softwareButtons = $content[80]['content'];?></a>
        <a href="../LAtPC/software_options/other" class="cta-button"><?= $softwareButtons = $content[81]['content'];?></a>
        <a href="../LAtPC/software_options/utilities" class="cta-button"><?= $softwareButtons = $content[82]['content'];?></a>
        <a href="../LAtPC/software_options/compression" class="cta-button"><?= $softwareButtons = $content[83]['content'];?></a>
        <a href="../LAtPC/software_options/developer_tools" class="cta-button"><?= $softwareButtons = $content[84]['content'];?></a>
    </div>
</section>
<?php
}

include './anvil/structure.php';

?>