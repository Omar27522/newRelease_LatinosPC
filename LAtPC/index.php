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

function showSpanishContent()
{
	$page = new Structure('../', 'español', 'Inicio LatinosPC');
	$keywords = '~Palabras Clave~';
	$description = '~Descripción~';
	include 'index_spanish.php';
}

function show404()
{
	http_response_code(404);
	echo '<!DOCTYPE html>';
	echo '<html><head><title>404 - Page Not Found</title></head>';
	echo '<body><h1>Page not found</h1></body></html>';
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
	$dbPath = __DIR__ . '/db/mydatabase.db';
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
/* END DATABASE */
//Send Request:
 /*F
$stmt = $pdo->prepare("INSERT INTO content (page_id, name, content) VALUES (?, ?, ?)");
$stmt->execute(["home", "headings", "Jesus Christ"]);
$stmt->execute(["home", "dialogs", "Most accept that Jesus was truly a man who lived in Israel 2,000 years ago."]);
$stmt->execute(["home", "dialogs", "What do we really know about Jesus? Explore his life and teachings and form your own valid experience."]);
$stmt->execute(["home", "link", "JesusChrist/father_in_heaven_tell_me_about_web"]);
$stmt->execute(["home", "link", "JesusChrist/apostles"]);
$stmt->execute(["home", "link", "JesusChrist/parables"]);
$stmt->execute(["home", "link", "JesusChrist/sermons"]);
$stmt->execute(["home", "link", "JesusChrist/teachings"]);
$stmt->execute(["home", "button", "Tell me about the web"]);
$stmt->execute(["home", "button", "Apostles"]);
$stmt->execute(["home", "button", "Parables"]);
$stmt->execute(["home", "button", "Sermons"]);
$stmt->execute(["home", "button", "Teachings"]);

-------
$stmt->execute(["home", "aboutHeadings", "About Us"]);
$stmt->execute(["home", "aboutParagraph", "We started back in 2009 with one technician; Omar, we have one goal."]);
$stmt->execute(["home", "aboutDialogs", "Our goal is to provide you and your company with outstanding service."]);
$stmt->execute(["home", "aboutDialogs", "We're dedicated to enhancing your experience through effective marketing, customer-friendly retention strategies, and maintaining top-notch quality control."]);
$stmt->execute(["home", "aboutParagraph", "we want to bring families and individuals, the experience of a fully working computer system; laptops and desktops."]);
$stmt->execute(["home", "aboutParagraph", "100% Satisfaction Guarantee | 90 Days Service Package -included"]);
$stmt->execute(["home", "aboutParagraph", "We are located in the city of Pomona, and will travel to LA county, SB county, RV county and OC."]);
$stmt->execute(["home", "aboutButton", "/about"]);
$stmt->execute(["home", "aboutLink", "Visit Us"]);

$stmt->execute(["home", "servicesHeadings", "Services"]);
$stmt->execute(["home", "servicesParagraph", "We mostly work with individuals, Students, Small-Medium Businesses, #Gamers!, and Professionals."]);
$stmt->execute(["home", "servicesParagraph", "Repairs and Service for Home and Office; any type-spec."]);
$stmt->execute(["home", "servicesParagraph", "90 day service guarantee. Computers run smoother, faster and perform better."]);
$stmt->execute(["home", "servicesLinkCleanUps", "/services/cleanups"]);
$stmt->execute(["home", "servicesCleanUpsButton", "Cleanups"]);

//$stmt->execute(["home", "servicesLinkComputerProtection", "/services/computer_protection"]);
$stmt->execute(["home", "servicesComputerProtectionButton", "Computer Protection"]);

//$stmt->execute(["home", "servicesLinkConsultations", "/services/consultations"]);
$stmt->execute(["home", "servicesConsultationsButton", "Consultations"]);

//$stmt->execute(["home", "servicesLinkManagedServices", "/services/managed_services"]);
$stmt->execute(["home", "servicesManagedServicesButton", "Managed Services"]);

//$stmt->execute(["home", "servicesLinkRemoteSupport", "/services/remote_support"]);
$stmt->execute(["home", "servicesRemoteSupportButton", "Remote Support"]);

//$stmt->execute(["home", "servicesLinkWebsites", "/services/websites"]);
$stmt->execute(["home", "servicesWebsitesButton", "Websites"]);

$stmt->execute(["home", "securityHeadings", "Security"]);
$stmt->execute(["home", "securityButton", "Best Practices"]);
$stmt->execute(["home", "securityButton", "Backups"]);
$stmt->execute(["home", "securityButton", "Passwords"]);
$stmt->execute(["home", "securityParagraph", "Think of your computer as a virtual treasure chest filled with your important stuff – photos, documents, and more. Computer protection is like a shield against troublemakers like viruses and hackers."]);



$stmt->execute(["home", "tutorialsHeadings", "Tutorials"]);
$stmt->execute(["home", "tutorialsHeadings", "Blogs"]);
$stmt->execute(["home", "tutorialsBlogDialog", "This section is all about the tutorials and blog posts that we have on our website. We have a wide range of topics that we cover, from computer hardware and software to internet security and more."]);
$stmt->execute(["home", "tutorialsParagraph", "Visit our tutorials and blog page for more information"]);
$stmt->execute(["home", "tutorialsButton", "Visit Page"]);
$stmt->execute(["home", "tutorialsLink", "/tutorials"]);




$stmt = $pdo->prepare("INSERT INTO content (page_id, name, content) VALUES (?, ?, ?)");
IRE <BLANQUET></BLANQUET> */



function content_home()
{
	/*
	 * I want to be able to migrate to a database instead of having arrays, arrays are cool and all, I really like them.
	 * 		Perhaps I can place the whole variable array into the database, and call it as is.
	 * 		I'm guessing in my noob mind that the data fetching will better for me as I am learning,
	 * 		also I kinda don't want to move away from arrays,
	 * 		they're cool and I want to keep working with them.
	 */
	global $content;// This global is named content, as a variable called from above. and there is a content for the database. I know it must be obvious but right now I don't know why this is her to begin with, but I think is related to the Class needing a variable called at intervals of code.

	$headingIndex = array_search('headings', array_column($content, 'name'));
	//$heading = $headingIndex !== false ? $content[$headingIndex]['content'] : 'Default Heading';
?>
<section class="homepage-grid">
    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?php echo $content[array_search('headings', array_column($content, 0))]['content']; ?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $_JesusChristDialog1 = $content[1]['content'];?></p>
                <p tabindex="0"><?= $_JesusChristDialog2 = $content[2]['content'];?></p>
            </div>

			<?php #$link = $content[1]['content']; echo $link; ?>
        </div>
        <a href="<?= htmlspecialchars($link = $content[13]['content']);?>"
            class="cta-button"><?= $button = $content[8]['content'];?></a>
        <a href="<?= $link2 = $content[5]['content'];?>"
            class="cta-button"><?= $button2 = $content[10]['content'];?></a>
        <a href="<?= $link3 = $content[6]['content'];?>"
            class="cta-button"><?= $button3 = $content[11]['content'];?></a>
        <a href="<?= $link4 = $content[4]['content']; ?>"
            class="cta-button"><?= $button4 = $content[9]['content'];?></a>
        <a href="<?= $link5 = $content[7]['content']; ?>"
            class="cta-button"><?= $button5 = $content[12]['content'];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $aboutUs = $content[14]['content'];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $aboutDialog1 = $content[15]['content'];?></p>
                <p tabindex="0"><?= $aboutDialog2 = $content[16]['content'];?></p>
                <p tabindex="0"><?= $aboutDialog3 = $content[17]['content'];?></p>
            </div>
        </div>

        <p><?= $aboutParagraph = $content[18]['content'];?></p>
        <p><?= $aboutParagraph2 = $content[19]['content'];?></p>
        <p><?= $aboutParagraph3 = $content[20]['content'];?></p>
        <a href="<?= $aboutButton = $content[21]['content'];?>" class="cta-button"><?= $aboutButton = $content[22]['content'];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $servicesHeading = $content[23]['content'];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $servicesDialog1 = $content[24]['content'];?></p>
                <p tabindex="0"><?= $servicesDialog2 = $content[25]['content'];?></p>
                <p tabindex="0"><?= $servicesDialog3 = $content[26]['content'];?></p>
                <img src="https://latinospc.com/images/number.jpg" width="auto" height="auto" alt="number"
                    style="display: block; margin: 0 auto;">
            </div>
        </div>

        <a href="#" class="cta-button"><?= $servicesCleanUpsButton = $content[28]['content'];?></a>
        <a href="#" class="cta-button"><?= $servicesComputerProtectionButton = $content[29]['content'];?></a>
        <a href="#" class="cta-button"><?= $servicesConsultationsButton = $content[30]['content'];?></a>
        <a href="#" class="cta-button"><?= $servicesManagedServicesButton = $content[31]['content'];?></a>
        <a href="#" class="cta-button"><?= $servicesRemoteSupportButton = $content[32]['content'];?></a>
        <a href="#" class="cta-button"><?= $servicesWebsitesButton = $content[33]['content'];?></a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text"><?= $securityHeading = $content[34]['content'];?></h3>
            <div class="link-dialog">
                <p tabindex="0"><?= $securityDialog = $content[38]['content'];?></p>
            </div>
        </div>

        <a href="#" class="cta-button"><?= $securityButton = $content[35]['content'];?></a>
        <a href="#" class="cta-button"><?= $securityButton2 = $content[36]['content'];?></a>
        <a href="#" class="cta-button"><?= $securityButton3 = $content[37]['content'];?></a>
        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text"><?= $securityButton3 = $content[39]['content'] . ' / ' . rtrim($content[40]['content'], 's');?></h3>
                <div class="link-dialog">
                    <p tabindex="0"><?= $securityButton3 = $content[41]['content'];?></p>
                </div>
            </div>
            <p><?= $securityButton3 = $content[42]['content'];?></p>
            <a href="#" class="cta-button"><?= $securityButton3 = $content[43]['content'];?></a>
        </aside>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text">Hardware</h3>
            <div class="link-dialog">
                <p tabindex="0">A computer is an electronic device that manipulates data or information. It has
                    the ability to store,retrieve, and process data.</p>
                <p tabindex="0">The Hardware is the computer — it's physical components.</p>
                <p>These components may include the computer's functionality, design, materials, innovations,
                    thermals, etc.</p>
            </div>
        </div>

        <a href="#" class="cta-button">CPU</a>
        <a href="#" class="cta-button">Storage</a>
        <a href="#" class="cta-button">Power Supply Unit</a>
        <a href="#" class="cta-button">Input</a>
        <a href="#" class="cta-button">Output</a>
        <a href="#" class="cta-button">Parts</a>

        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text">Peripherals and Gear</h3>
                <div class="link-dialog">
                    <p tabindex="0">Peripherals and gear are the additional components that help you use your
                        computer.</p>
                    <p tabindex="0">These include desks, chairs, computer mats, lights, clothing, and other
                        stuff that are unrelated to the computer itself, but are very useful to have.</p>
                </div>
            </div>
            <p>Visit our computer peripherals and gear for more information</p>
            <a href="#" class="cta-button">Visit Page</a>
    </div>
    </aside>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text">Software</h3>
            <div class="link-dialog">
                <p tabindex="0">Commonly known as computer programs or apps, these are the instructions for the
                    computer’s tasks</p>
            </div>
        </div>
        <a href="#" class="cta-button">Anti-Virus</a>
        <a href="#" class="cta-button">Malware Cleaner</a>
        <a href="#" class="cta-button">Web Browsers</a>
        <a href="#" class="cta-button">Messaging</a>
        <a href="#" class="cta-button">Media</a>
        <a href="#" class="cta-button">Runtimes</a>
        <a href="#" class="cta-button">Imaging</a>
        <a href="#" class="cta-button">Documents</a>
        <a href="#" class="cta-button">File Sharing</a>
        <a href="#" class="cta-button">Online Storage</a>
        <a href="#" class="cta-button">Other</a>
        <a href="#" class="cta-button">Utilities</a>
        <a href="#" class="cta-button">Compression</a>
        <a href="#" class="cta-button">Developer Tools</a>
    </div>
</section>
<?php
}

include './anvil/structure.php';

?>