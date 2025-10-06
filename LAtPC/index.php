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
	echo '<!DOCTYPE html>';
	echo '<html><head><title>404 - Page Not Found</title></head>';
	echo '<body><h1>Page not found Go away please!</h1></body></html>';
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
				echo 'Services Main Page';
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
			echo 'Jesus Christ Main Page';
			break;

		default:
			show404();
			break;
	}
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

        <a href="offered_services/cleanups" class="cta-button"><?= $servicesCleanUpsButton = $content[34]['content'];?></a>
        <a href="offered_services/protection" class="cta-button"><?= $servicesComputerProtectionButton = $content[35]['content'];?></a>
        <a href="offered_services/consultations" class="cta-button"><?= $servicesConsultationsButton = $content[36]['content'];?></a>
        <a href="offered_services/managedServices" class="cta-button"><?= $servicesManagedServicesButton = $content[37]['content'];?></a>
        <a href="offered_services/websites" class="cta-button"><?= $servicesRemoteSupportButton = $content[38]['content'];?></a>
        <a href="offered_services/remoteSupport" class="cta-button"><?= $servicesWebsitesButton = $content[39]['content'];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $securityHeading = $content[45]['content'];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $securityDialog = $content[46]['content'];?></p>
            </div>
        </div>

        <a href="#" class="cta-button"><?= $securityButton = $content[47]['content'];?></a>
        <a href="#" class="cta-button"><?= $securityButton2 = $content[48]['content'];?></a>
        <a href="#" class="cta-button"><?= $securityButton3 = $content[49]['content'];?></a>
        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text"><?= $tutorialsAndBlog = $content[50]['content'] . ' / ' . rtrim($content[51]['content'], 's');?></h3>
                <div class="link-dialog">
                    <p tabindex="0"><?= $tutorialsAndBlogDialog = $content[52]['content'];?></p>
                </div>
            </div>
            <p><?= $tutorialsAndBlogParagraph = $content[53]['content'];?></p>
            <a href="#" class="cta-button"><?= $tutorialsAndBlogButton = $content[54]['content'];?></a>
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

        <a href="#" class="cta-button"><?= $hardwareButtons = $content[59]['content'];?></a>
        <a href="#" class="cta-button"><?= $hardwareButtons = $content[60]['content'];?></a>
        <a href="#" class="cta-button"><?= $hardwareButtons = $content[61]['content'];?></a>
        <a href="#" class="cta-button"><?= $hardwareButtons = $content[62]['content'];?></a>
        <a href="#" class="cta-button"><?= $hardwareButtons = $content[63]['content'];?></a>
        <a href="#" class="cta-button"><?= $hardwareButtons = $content[64]['content'];?></a>

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
            <a href="#" class="cta-button"><?= $visitPage = $content[54]['content'];?></a>
    </div>
    </aside>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= ucfirst($content[69]['section']);?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $softwareDialog = $content[70]['content'];?></p>
            </div>
        </div>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[71]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[72]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[73]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[74]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[75]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[76]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[77]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[78]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[79]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[80]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[81]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[82]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[83]['content'];?></a>
        <a href="#" class="cta-button"><?= $softwareButtons = $content[84]['content'];?></a>
    </div>
</section>
<?php
}

include './anvil/structure.php';

?>