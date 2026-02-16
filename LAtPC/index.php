<?php
class Structure		{
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
    $script_dir = str_replace('\\', '/', dirname($script_name));
    $uri_path = parse_url($request_uri, PHP_URL_PATH);

    // If the script is in a subdirectory, remove that directory from the URI path
    if (strpos($uri_path, $script_dir) === 0) {
        $route = substr($uri_path, strlen($script_dir));
    } else {
        $route = $uri_path;
    }

	$route = ltrim($route, '/');
	$route = trim($route, '/');
}

$route = urldecode($route);

// Split the route into segments for subdirectory support
$route_segments = explode('/', $route);
$main_route = $route_segments[0] ?? '';
$sub_route = $route_segments[1] ?? '';

#echo "DEBUG: Route = '" . $route . "'<br>";
#echo $path_info;
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
		_Jesucristo($sub_route);
		exit;
		break;
	default:
		// 404 page and exit
		show404();
		exit;
		break;
}

function show404(){
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

function showSpanishContent(){
	$page = new Structure('../', 'español', 'Inicio LatinosPC');
	$keywords = 'reparación de computadoras, reparación de laptops, reparación de PC, eliminación de virus, eliminación de malware, respaldo de datos, recuperación de datos, diagnóstico de computadoras, soporte IT para pequeñas empresas, soporte técnico para estudiantes, reparación de computadoras a domicilio, reparación de PC para gamers, ayuda con PC gamer personalizada, clases de computación, clases de computación online, clases de computación presenciales, capacitación tecnológica para adultos mayores, clases básicas de computación, reparación de computadoras en Pomona, soporte técnico en Pomona, reparación de laptops cerca de mí, servicios IT en Pomona, clases de computación en Pomona';
	$description = 'Clases de tecnología en línea, servicios de computación, configuraciones, hardware y atención presencial para negocios y usuarios domésticos.';
	include 'index_spanish.php';
}

function about(){
	$page = new Structure('../', 'english', 'About');
	$keywords = 'computer repair Pomona, on-site computer service, remote IT support, laptop repair, desktop repair, computer technician Los Angeles, PC repair Inland Empire, small business IT, web development, computer services San Bernardino, Riverside computer repair, Orange County IT, home computer repair, network setup, computer training, technology solutions';
	$description = "LatinosPC offers on-site and remote computer repair services in Pomona, CA, serving LA, San Bernardino, Riverside, and Orange counties. Founded in 2021, personalized IT solutions provided to homes and small businesses with a 90-day service guarantee and 100% satisfaction commitment.";
	include 'about.php';
}

function offered_services($sub_route){
	switch ($sub_route) {

		case 'cleanups':
			$page = new Structure('../../', 'english', 'Clean Ups');
			$keywords = 'computer cleanup, PC cleanup Pomona, virus removal, malware removal, spyware removal, computer optimization, slow computer fix, PC tune-up, system cleanup, junk file removal, registry cleanup, performance optimization, computer maintenance, startup optimization, disk cleanup';
			$description = 'Professional computer cleanup services in Pomona, CA. virus and malware, and bloat files removal for PC improved performance. On-site and remote cleanup available for LA, San Bernardino, Riverside, and Orange counties.';
			include 'services/cleanups.php';
			break;
		case 'protection':
			$page = new Structure('../../', 'english', 'Protection');
			$keywords = 'computer protection, antivirus software, malware protection, cybersecurity, firewall setup, data protection, internet security, virus protection Pomona, PC security services, ransomware protection, spyware protection, network security, secure browsing, identity theft protection, computer security solutions';
			$description = 'Comprehensive computer protection services in Pomona, CA. software and hardware installation tips, firewalls, malware protection, and cybersecurity solutions to keep your PC safe. Serving LA, San Bernardino, Riverside, and Orange counties.';
			include 'services/protection.php';
			break;
		case 'consultations':
			$page = new Structure('../../', 'english', 'Consultations');
			$keywords = 'computer consultation, IT consultation Pomona, technology consulting, computer advice, PC buying guide, tech support consultation, business IT consulting, network consultation, software recommendations, hardware consultation, computer setup consultation, technology planning, IT assessment, computer system evaluation';
			$description = 'Expert computer consultation services in Pomona, CA. professional advice on PC purchases, upgrades, software selection, and technology planning for your home or business. Serving LA, San Bernardino, Riverside, and Orange counties.';
			include 'services/consultations.php';
			break;
		case 'managedServices':
			$page = new Structure('../../', 'english', 'Managed Services');
			$keywords = 'managed IT services Pomona, IT support for small business, remote IT management, network monitoring, proactive IT support, IT maintenance services, managed cybersecurity, IT support contracts, business IT services, outsourced IT support, IT management services, remote monitoring and management, IT support packages, proactive IT maintenance, managed IT solutions';
			$description = 'Professional managed IT services in Pomona, CA. proactive IT support provided, network monitoring, cybersecurity, and remote management for small businesses. Serving LA, San Bernardino, Riverside, and Orange counties.';
			include 'services/managedServices.php';
			break;
		case 'websites':
			$page = new Structure('../../', 'english', 'Websites');
			$keywords = 'website design Pomona, small business website, affordable website design, professional website, local business website, e-commerce website, website development Pomona, custom website design, business website design, website design packages, responsive website, modern website design, website design services, business website development, website design for small business';
			$description = 'Affordable website design services in Pomona, CA. professional, custom websites for small businesses with packages starting at $750. Serving LA, San Bernardino, Riverside, and Orange counties.';
			include 'services/websites.php';
			break;
		case 'remoteSupport':
			$page = new Structure('../../', 'english', 'Remote Support');
			$keywords = 'remote computer repair, remote IT support Pomona, remote PC help, remote technical support, remote computer assistance, online computer repair, remote software support, remote troubleshooting, remote IT services, remote computer helpdesk, remote PC support, remote technical assistance, remote computer maintenance, remote IT help, remote computer services';
			$description = 'Professional remote computer repair services in Pomona, CA. fast and secure remote IT support for PCs and Macs, including troubleshooting, software installation, and technical assistance. Serving LA, San Bernardino, Riverside, and Orange counties.';
			include 'services/remoteSupport.php';
			break;

			case '':
				$page = new Structure('../../', 'english', 'Services');
			$keywords = 'computer repair Pomona, on-site computer service, remote IT support, laptop repair, desktop repair, computer technician Los Angeles, PC repair Inland Empire, small business IT, web development, computer services San Bernardino, Riverside computer repair, Orange County IT, home computer repair, network setup, computer training, technology solutions';
			$description = 'LatinosPC offers on-site and remote computer repair services in Pomona, CA, serving LA, San Bernardino, Riverside, and Orange counties. Founded in 2021, personalized IT solutions for homes and small businesses with a 90-day service guarantee and 100% satisfaction commitment.';
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
			$keywords = 'computer security best practices, cybersecurity tips, PC safety guidelines, internet security tips, password best practices, safe browsing habits, data protection tips, malware prevention, phishing protection, secure computing, online safety practices, computer hygiene, security awareness, digital safety tips';
			$description = 'Learn essential computer security best practices to protect your PC and data. Expert tips on passwords, safe browsing, malware prevention, and cybersecurity from LatinosPC in Pomona, CA. Keep your computer and information secure.';
			include 'security/security.php';
			break;
		case 'backups':
			$page = new Structure('../../', 'english', 'Backups');
			$keywords = 'computer backup, data backup services, cloud backup, local backup, automatic backup, file backup, system backup, data recovery, backup solutions Pomona, external hard drive backup, network backup, disaster recovery, backup strategy, data protection, secure backup services';
			$description = 'Professional computer backup services in Pomona, CA. Protect your important files and data with cloud, local, and automated backup solutions. We provide backup setup, data recovery, and disaster prevention for homes and businesses.';
			include 'security/security.php';
			break;
		case 'passwords':
			$page = new Structure('../../', 'english', 'Passwords');
			$keywords = 'password security, strong passwords, password management, password manager, secure passwords, password best practices, password protection, password recovery, password reset, two-factor authentication, password vault, credential management, password tips, account security, password strength';
			$description = 'Password security services and guidance in Pomona, CA. Learn to create strong passwords, use password managers, and protect your accounts. offered help with password setup, recovery, and implementing best practices for maximum security.';
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
		    $keywords = 'CPU, processor, Intel CPU, AMD processor, CPU upgrade, processor installation, computer processor, CPU replacement, multi-core processor, gaming CPU, workstation processor';
		    $description = 'CPU and processor options, installation, and upgrade services in Pomona, CA. Expert guidance on Intel and AMD processors for gaming, workstation, and everyday computing needs.';
		    include 'hardware/hardware.php';
		    break;
		case 'ram':
		    $page = new Structure('../../', 'english', 'HW RAM');
		    $keywords = 'RAM, memory upgrade, DDR4, DDR5, computer memory, RAM installation, memory expansion, system memory, laptop RAM, desktop RAM, performance upgrade';
		    $description = 'RAM and memory upgrade services in Pomona, CA. We install and recommend the right memory for faster performance on desktops and laptops. DDR4 and DDR5 options available.';
		    include 'hardware/hardware.php';
		    break;
		case 'motherboard':
		    $page = new Structure('../../', 'english', 'HW Motherboard');
		    $keywords = 'motherboard, mainboard, motherboard replacement, motherboard upgrade, PC motherboard, gaming motherboard, ATX motherboard, micro ATX, motherboard installation, Intel motherboard, AMD motherboard';
		    $description = 'Motherboard replacement and upgrade services in Pomona, CA. Expert installation of Intel and AMD motherboards for gaming, workstation, and standard PC builds.';
		    include 'hardware/hardware.php';
		    break;
		case 'chassis':
		    $page = new Structure('../../', 'english', 'HW Chassis');
		    $keywords = 'computer case, PC chassis, tower case, desktop case, gaming case, ATX case, mini ITX case, computer enclosure, case upgrade, airflow case, RGB case';
		    $description = 'Computer chassis and case options in Pomona, CA. Choose from gaming towers, compact cases, and professional enclosures with optimal airflow and design.';
		    include 'hardware/hardware.php';
		    break;
		case 'storage':
		    $page = new Structure('../../', 'english', 'HW Storage');
		    $keywords = 'SSD, hard drive, NVMe SSD, storage upgrade, solid state drive, HDD replacement, M.2 drive, storage expansion, SATA SSD, internal storage, data storage';
		    $description = 'Computer storage upgrade services in Pomona, CA. Install SSDs, NVMe drives, and hard drives for faster performance and increased capacity. Professional storage solutions.';
		    include 'hardware/hardware.php';
		    break;
		case 'powersupply':
		case 'psu':
		    $page = new Structure('../../', 'english', 'HW PSU');
		    $keywords = 'power supply, PSU, power supply unit, PSU replacement, modular PSU, computer power supply, wattage calculator, PSU upgrade, reliable power supply, 80 Plus certified';
		    $description = 'Power supply installation and replacement services in Pomona, CA. Expert PSU selection and installation for stable, reliable PC performance. Modular and certified options available.';
		    include 'hardware/hardware.php';
		    break;
		case 'graphicscard':
		case 'gpu':
		    $page = new Structure('../../', 'english', 'HW GPU');
		    $keywords = 'graphics card, GPU, video card, NVIDIA GPU, AMD graphics card, GPU upgrade, gaming graphics card, graphics card installation, RTX, Radeon, discrete graphics';
		    $description = 'Graphics card installation and upgrade services in Pomona, CA. Expert GPU recommendations and installation for gaming, video editing, and professional graphics work.';
		    include 'hardware/hardware.php';
		    break;
		case 'coolers':
		case 'cooling':
		    $page = new Structure('../../', 'english', 'HW Cooling');
		    $keywords = 'CPU cooler, PC cooling, liquid cooling, AIO cooler, air cooler, thermal paste, case fans, cooling system, computer cooling upgrade, temperature management, heat sink';
		    $description = 'Computer cooling solutions in Pomona, CA. Install air coolers, liquid cooling systems, and case fans to keep your PC running cool and quiet under any workload.';
		    include 'hardware/hardware.php';
		    break;
		case 'input_devices':
		    $page = new Structure('../../', 'english', 'HW Input Devices');
		    $keywords = 'input devices, keyboard, mouse, gaming keyboard, mechanical keyboard, wireless mouse, touchpad, trackball, input peripherals, USB keyboard, gaming mouse';
		    $description = 'Computer input devices including keyboards, mice, and peripherals in Pomona, CA. Expert recommendations for gaming, productivity, and everyday computing needs.';
		    include 'hardware/hardware.php';
		    break;
		case 'output_devices':
		    $page = new Structure('../../', 'english', 'HW Output Devices');
		    $keywords = 'output devices, computer monitor, printer, speakers, display, projector, output peripherals, dual monitor setup, screen, audio output, visual display';
		    $description = 'Computer output devices including monitors, printers, and speakers in Pomona, CA. Professional setup and recommendations for optimal display and audio performance.';
		    include 'hardware/hardware.php';
		    break;
		case 'peripherals_and_gear':
		    $page = new Structure('../../', 'english', 'HW Peripherals');
		    $keywords = 'computer peripherals, PC accessories, gaming gear, USB devices, wireless peripherals, computer accessories, external devices, peripheral setup, tech gear, PC gear';
		    $description = 'Computer peripherals and gaming gear in Pomona, CA. Complete range of PC accessories, USB devices, and tech gear for enhanced productivity and gaming performance.';
		    include 'hardware/hardware.php';
		    break;
		case 'mouse':
		    $page = new Structure('../../', 'english', 'HW Mouse');
		    $keywords = 'computer mouse, gaming mouse, wireless mouse, ergonomic mouse, optical mouse, mouse DPI, RGB mouse, trackball mouse, Bluetooth mouse, precision mouse';
		    $description = 'Computer mouse options and recommendations in Pomona, CA. Gaming mice, wireless mice, and ergonomic options for comfort and precision in work or play.';
		    include 'hardware/hardware.php';
		    break;
		case 'keyboard':
		    $page = new Structure('../../', 'english', 'HW Keyboard');
		    $keywords = 'keyboard, mechanical keyboard, gaming keyboard, wireless keyboard, ergonomic keyboard, RGB keyboard, membrane keyboard, keyboard switches, backlit keyboard, USB keyboard';
		    $description = 'Computer keyboard options in Pomona, CA. Mechanical, gaming, and ergonomic keyboards for typing comfort and performance. Wired and wireless options available.';
		    include 'hardware/hardware.php';
		    break;
		case 'monitor':
		    $page = new Structure('../../', 'english', 'HW Monitor');
		    $keywords = 'computer monitor, gaming monitor, 4K monitor, ultrawide monitor, monitor setup, dual monitor, high refresh rate, IPS monitor, LED monitor, monitor calibration';
		    $description = 'Computer monitor sales and setup in Pomona, CA. Gaming monitors, 4K displays, ultrawide screens, and dual monitor configurations for productivity and entertainment.';
		    include 'hardware/hardware.php';
		    break;
		case 'p_memory':
		    $page = new Structure('../../', 'english', 'HW External Drive');
		    $keywords = 'external hard drive, portable storage, external SSD, USB drive, backup drive, external storage, portable hard drive, flash drive, thumb drive, data portability';
		    $description = 'External storage solutions in Pomona, CA. Portable hard drives, external SSDs, and USB drives for backup, file transfer, and expanding your storage capacity.';
		    include 'hardware/hardware.php';
		    break;
		case 'pci':
		    $page = new Structure('../../', 'english', 'HW PCI Cards');
		    $keywords = 'PCI card, expansion card, PCIe card, sound card, network card, capture card, WiFi card, PCI Express, expansion slot, add-in card';
		    $description = 'PCI and PCIe expansion cards in Pomona, CA. Sound cards, network cards, WiFi adapters, and other expansion cards to enhance your PC capabilities.';
		    include 'hardware/hardware.php';
		    break;
		case 'scanners':
		case 'scanner':
		    $page = new Structure('../../', 'english', 'HW Scanners');
		    $keywords = 'document scanner, flatbed scanner, photo scanner, portable scanner, scanner setup, document digitization, OCR scanner, high-speed scanner, duplex scanner';
		    $description = 'Document and photo scanner setup in Pomona, CA. Professional scanner installation and recommendations for digitizing documents, photos, and important papers.';
		    include 'hardware/hardware.php';
		    break;
		case 'printers':
		case 'printer':
		    $page = new Structure('../../', 'english', 'HW Printers');
		    $keywords = 'printer, inkjet printer, laser printer, wireless printer, all-in-one printer, printer setup, printer installation, home printer, office printer, photo printer';
		    $description = 'Printer setup and installation services in Pomona, CA. Inkjet, laser, and all-in-one printers for home and office. Wireless and network printer configuration available.';
		    include 'hardware/hardware.php';
		    break;
		case 'console_controllers':
		    $page = new Structure('../../', 'english', 'HW Console Controllers');
		    $keywords = 'console controller, game controller, Xbox controller, PlayStation controller, Nintendo controller, wireless controller, gaming controller, gamepad, PC controller';
		    $description = 'Gaming console controllers in Pomona, CA. Xbox, PlayStation, and Nintendo controllers for PC gaming. Wired and wireless options for all gaming platforms.';
		    include 'hardware/hardware.php';
		    break;
		case 'joystick':
		    $page = new Structure('../../', 'english', 'HW Joysticks');
		    $keywords = 'joystick, flight stick, HOTAS, flight simulator joystick, gaming joystick, flight controls, throttle control, arcade stick, sim racing joystick';
		    $description = 'Gaming joysticks and flight controls in Pomona, CA. Flight simulator joysticks, HOTAS systems, and arcade sticks for immersive gaming experiences.';
		    include 'hardware/hardware.php';
		    break;
		case 'tablets':
		case 'tablet':
		    $page = new Structure('../../', 'english', 'HW Tablets');
		    $keywords = 'drawing tablet, graphics tablet, pen tablet, Wacom tablet, digital art tablet, tablet setup, stylus tablet, art tablet, design tablet';
		    $description = 'Drawing and graphics tablets in Pomona, CA. Professional pen tablets for digital art, design, and photo editing. Setup and configuration services available.';
		    include 'hardware/hardware.php';
		    break;
		case 'microphones':
		case 'micro':
		    $page = new Structure('../../', 'english', 'HW Microphones');
		    $keywords = 'microphone, USB microphone, streaming microphone, condenser microphone, gaming mic, podcast microphone, studio microphone, mic setup, XLR microphone';
		    $description = 'Microphone options and setup in Pomona, CA. USB and XLR microphones for streaming, podcasting, gaming, and recording. Professional audio capture solutions.';
		    include 'hardware/hardware.php';
		    break;
		case 'headsets':
		case 'headset':
		    $page = new Structure('../../', 'english', 'HW Headsets');
		    $keywords = 'gaming headset, wireless headset, USB headset, headset with microphone, PC headset, surround sound headset, noise cancelling headset, gaming audio';
		    $description = 'Gaming and PC headsets in Pomona, CA. Wireless and wired headsets with microphones for gaming, video calls, and multimedia. Surround sound options available.';
		    include 'hardware/hardware.php';
		    break;
		case 'headphones':
		case 'headphone':
		    $page = new Structure('../../', 'english', 'HW Headphones');
		    $keywords = 'headphones, wireless headphones, studio headphones, Bluetooth headphones, noise cancelling headphones, over-ear headphones, audiophile headphones, music headphones';
		    $description = 'Computer headphones in Pomona, CA. Wired and wireless headphones for music, gaming, and work. Studio quality and noise-cancelling options available.';
		    include 'hardware/hardware.php';
		    break;
		case 'audio_mixers':
		case 'audiomixer':
		    $page = new Structure('../../', 'english', 'HW Audio Mixers');
		    $keywords = 'audio mixer, USB audio mixer, streaming mixer, podcast mixer, audio interface, mixing console, digital mixer, GoXLR, audio production mixer';
		    $description = 'Audio mixers and interfaces in Pomona, CA. Professional mixing solutions for streaming, podcasting, and music production. Setup and configuration services available.';
		    include 'hardware/hardware.php';
		    break;
		case 'controllers':
		case 'controller':
		    $page = new Structure('../../', 'english', 'HW Controllers');
		    $keywords = 'game controller, PC controller, wireless controller, wired controller, Xbox controller for PC, PlayStation controller PC, third-party controller, gaming gamepad';
		    $description = 'PC gaming controllers in Pomona, CA. Wireless and wired controllers compatible with PC games. Xbox, PlayStation, and third-party options available.';
		    include 'hardware/hardware.php';
		    break;
		case 'gaming_uniforms':
		case 'uniforms':
		    $page = new Structure('../../', 'english', 'HW Gaming Uniforms');
		    $keywords = 'gaming jersey, esports jersey, team gaming apparel, gaming uniform, streamer apparel, gaming clothing, esports gear, team jerseys, gaming merchandise';
		    $description = 'Gaming uniforms and esports apparel in Pomona, CA. Team jerseys, streaming apparel, and gaming merchandise for competitive gamers and content creators.';
		    include 'hardware/hardware.php';
		    break;
		case 'pens_pencils_tablets':
		case 'pencil':
		    $page = new Structure('../../', 'english', 'HW Pens, Pencils & Tablets');
		    $keywords = 'stylus pen, digital pen, tablet pen, Apple Pencil, Surface Pen, drawing stylus, pressure sensitive pen, active stylus, pen tablet accessories';
		    $description = 'Digital pens and styluses in Pomona, CA. Pressure-sensitive pens for drawing tablets, iPads, and touchscreen devices. Perfect for artists and designers.';
		    include 'hardware/hardware.php';
		    break;
		case 'chairs':
		case 'chair':
		    $page = new Structure('../../', 'english', 'HW Chairs');
		    $keywords = 'gaming chair, office chair, ergonomic chair, computer chair, desk chair, racing chair, mesh chair, adjustable chair, lumbar support chair';
		    $description = 'Gaming and office chairs in Pomona, CA. Ergonomic computer chairs with lumbar support for comfortable long gaming sessions and work hours.';
		    include 'hardware/hardware.php';
		    break;
		case 'desk':
		case 'desks':
		    $page = new Structure('../../', 'english', 'HW Desks');
		    $keywords = 'gaming desk, computer desk, standing desk, L-shaped desk, adjustable desk, desk setup, workstation desk, gaming station, office desk, ergonomic desk';
		    $description = 'Gaming and computer desks in Pomona, CA. Standing desks, L-shaped desks, and gaming stations for optimal workspace organization and comfort.';
		    include 'hardware/hardware.php';
		    break;
		case 'anti_slip_mats':
		case 'antislipmats':
		    $page = new Structure('../../', 'english', 'HW Anti-Slip Mats');
		    $keywords = 'mouse pad, gaming mouse pad, extended mouse pad, desk mat, RGB mouse pad, large mouse pad, anti-slip mat, desk pad, gaming desk mat';
		    $description = 'Gaming mouse pads and desk mats in Pomona, CA. Extended mouse pads, RGB desk mats, and anti-slip surfaces for precise mouse control and desk protection.';
		    include 'hardware/hardware.php';
		    break;
		case 'speakers_and_subwoofers':
		    $page = new Structure('../../', 'english', 'HW Speakers and Subwoofers');
		    $keywords = 'computer speakers, PC speakers, subwoofer, 2.1 speakers, gaming speakers, desktop speakers, multimedia speakers, Bluetooth speakers, surround sound speakers';
		    $description = 'Computer speakers and subwoofers in Pomona, CA. 2.1 systems, gaming speakers, and surround sound setups for immersive audio on your desktop PC.';
		    include 'hardware/hardware.php';
		    break;

		case '':
				$page = new Structure('../../', 'english', 'Hardware');
			$keywords = 'computer hardware, PC parts, laptop parts, desktop components, RAM upgrade, hard drive replacement, SSD upgrade, graphics card, motherboard, CPU upgrade, power supply, computer peripherals, hardware installation, PC components Pomona, computer parts recommendations';
			$description = 'Computer hardware options and upgrade services in Pomona, CA. recommendations, source, and install RAM, SSDs, hard drives, graphics cards, and other PC components. Expert hardware consultations for desktops and laptops.';
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
    		$keywords = 'antivirus software, virus protection, malware protection, antivirus installation, real-time protection, virus scanner, threat detection, computer security software, Windows Defender, Norton, McAfee, Bitdefender, Kaspersky, AVG, Avast, antivirus updates, virus removal, endpoint protection, cybersecurity software, PC protection';
    		$description = 'Comprehensive antivirus software installation and setup in Pomona, CA. Protect your computer from viruses, malware, and online threats with real-time scanning and automatic updates. We help you choose and configure the best antivirus solution for your needs, whether it\'s free options like Windows Defender or premium protection from Norton, Bitdefender, or Kaspersky. Expert guidance on keeping your system secure and performing regular scans.';
    		include 'software/software.php';
    		break;

		case 'malware_cleaner':
		    $page = new Structure('../../', 'english', 'SW Malware Cleaner');
		    $keywords = 'malware removal, malware cleaner, spyware removal, adware removal, PUP removal, malware scanner, Malwarebytes, anti-malware software, rootkit removal, trojan removal, browser hijacker removal, malware cleanup tools, security cleanup, infection removal, system disinfection';
		    $description = 'Professional malware removal and cleanup services in Pomona, CA. Remove stubborn spyware, adware, trojans, and potentially unwanted programs with specialized cleaning tools like Malwarebytes and other anti-malware solutions. We thoroughly scan and clean infected systems, remove browser hijackers, and restore your computer to safe operation. Expert malware detection and elimination for home and business computers.';
		    include 'software/software.php';
		    break;

		case 'web_browsers':
		    $page = new Structure('../../', 'english', 'SW Web Browsers');
		    $keywords = 'web browser, internet browser, Chrome, Firefox, Edge, Safari, Opera, Brave, browser installation, browser setup, secure browsing, private browsing, browser extensions, ad blocker, browser sync, cross-platform browsing, fast browser, browser security, browser privacy, default browser setup';
		    $description = 'Web browser installation and configuration in Pomona, CA. Set up Chrome, Firefox, Edge, Brave, or other browsers with optimal privacy and security settings. We configure browser extensions, sync settings across devices, install ad blockers, and teach safe browsing habits. Expert guidance on choosing the right browser for speed, privacy, and compatibility with your favorite websites and services.';
		    include 'software/software.php';
		    break;

		case 'media':
		    $page = new Structure('../../', 'english', 'SW Media');
		    $keywords = 'media player, video player, audio player, VLC, Windows Media Player, media codecs, streaming software, music player, video playback, audio formats, media center, multimedia software, iTunes, Spotify, media library, playlist management, audio converter, video converter';
		    $description = 'Media player software installation and setup in Pomona, CA. Play any video or audio format with VLC, Windows Media Player, or specialized media software. We install necessary codecs, configure media libraries, set up streaming services, and organize your music and video collections. Expert setup for home entertainment systems, audio playback, and video viewing across all formats.';
		    include 'software/software.php';
		    break;

		case 'runtimes':
		    $page = new Structure('../../', 'english', 'SW Runtimes');
		    $keywords = 'runtime environment, Java Runtime, .NET Framework, Visual C++ redistributable, runtime installation, software dependencies, JRE, application runtime, program libraries, runtime components, DirectX, system libraries, framework installation, runtime updates';
		    $description = 'Essential runtime and frameworks. Java Runtime Environment, .NET Framework, Visual C++ redistributables, DirectX, and other critical software components that programs need to run properly. We ensure all necessary runtimes and dependencies are installed and updated, preventing application errors and compatibility issues on your Windows PC.';
		    include 'software/software.php';
		    break;

		case 'imaging':
		    $page = new Structure('../../', 'english', 'SW Imaging');
		    $keywords = 'image editing software, photo editing, graphics software, Photoshop, GIMP, Paint.NET, image viewer, photo management, RAW editor, batch image processing, screenshot tools, image optimization, digital art software, photo retouching, image manipulation';
		    $description = 'Image editing and photo management software in Pomona, CA. Install and configure tools like Photoshop, GIMP, Paint.NET for editing photos and creating graphics. We set up image viewers, photo organizers, RAW editors, and screenshot utilities. Expert guidance on choosing the right imaging software for photography, digital art, web graphics, or casual photo editing needs.';
		    include 'software/software.php';
		    break;

		case 'documents':
		    $page = new Structure('../../', 'english', 'SW Documents');
		    $keywords = 'document software, Microsoft Office, Word, Excel, PowerPoint, LibreOffice, Google Docs, PDF reader, Adobe Acrobat, document editing, spreadsheet software, presentation software, office suite, document creation, PDF editing, office productivity';
		    $description = 'Document and office software installation in Pomona, CA. Set up Microsoft Office, LibreOffice, Google Workspace, and PDF readers for creating documents, spreadsheets, and presentations. We configure office suites, sync cloud documents, install PDF editors like Adobe Acrobat, and train you on productivity features. Complete office software solutions for home and business use.';
		    include 'software/software.php';
		    break;

		case 'file_sharing':
		    $page = new Structure('../../', 'english', 'SW File Sharing');
		    $keywords = 'file sharing software, file transfer, send large files, peer-to-peer sharing, network file sharing, FTP client, secure file transfer, cloud file sharing, file sync, collaboration tools, remote file access, file exchange, transfer protocol';
		    $description = 'File sharing and transfer software setup in Pomona, CA. Configure secure file sharing tools for sending large files, peer-to-peer transfers, and network sharing. We set up FTP clients, cloud file sharing services, and collaboration platforms for easy file exchange between computers and users. Professional file transfer solutions for businesses and home networks.';
		    include 'software/software.php';
		    break;

		case 'online_storage':
		    $page = new Structure('../../', 'english', 'SW Online Storage');
		    $keywords = 'cloud storage, online backup, Dropbox, Google Drive, OneDrive, iCloud, cloud sync, file backup, remote storage, cloud file access, automatic backup, data synchronization, cloud storage setup, online file storage, backup solution';
		    $description = 'Cloud storage and online backup setup. Configure Dropbox, Google Drive, OneDrive, iCloud, and other cloud services for automatic file backup and synchronization. We set up folder sync, shared folders, and automatic photo backup to protect your important files and access them from any device. Reliable cloud storage solutions for data protection and accessibility.';
		    include 'software/software.php';
		    break;

		case 'other':
		    $page = new Structure('../../', 'english', 'SW Other');
		    $keywords = 'specialty software, custom software, niche applications, specialized programs, software installation, program setup, unique software needs, custom application setup, specialized tools, business software, industry-specific software';
		    $description = 'Specialty and custom software installation in Pomona, CA. We install and configure unique applications, industry-specific programs, and specialized tools that don\'t fit standard categories. Whether you need niche business software, creative applications, or custom programs, we provide expert installation and setup tailored to your specific requirements.';
		    include 'software/software.php';
		    break;

		case 'utilities':
		    $page = new Structure('../../', 'english', 'SW Utilities');
		    $keywords = 'system utilities, PC optimization, disk cleanup, registry cleaner, system tools, maintenance software, CCleaner, disk defrag, system monitoring, performance tools, startup manager, uninstaller, driver updater, system tweaks';
		    $description = 'System utility software installation in Pomona, CA. Set up optimization tools, disk cleanup utilities, registry cleaners, and system monitoring software to keep your PC running efficiently. We install CCleaner, defragmentation tools, startup managers, and performance utilities. Expert configuration of system maintenance tools for optimal computer performance and reliability.';
		    include 'software/software.php';
		    break;

		case 'compression':
		    $page = new Structure('../../', 'english', 'SW Compression');
		    $keywords = 'file compression, zip software, archive software, WinRAR, 7-Zip, file archiving, compress files, extract files, archive extraction, compressed folders, file decompression, archive utility, backup compression';
		    $description = 'File compression and archive software. Install WinRAR, 7-Zip, and other compression tools to create and extract zip files, reduce file sizes for storage and email, and manage compressed archives. We set up compression utilities with optimal settings for file backup, email attachments, and efficient storage management.';
		    include 'software/software.php';
		    break;

		case 'developer_tools':
		    $page = new Structure('../../', 'english', 'SW Developer Tools');
		    $keywords = 'developer tools, programming software, code editor, Visual Studio Code, IDE, Git, version control, debugging tools, software development, coding environment, compiler, text editor, development environment, programming utilities, code repository';
		    $description = 'Developer tools and programming software setups in Pomona, CA. Installs VS Code, IDEs, Git version control, compilers, and development environments for software programming. We configure code editors, debugging tools, and developer utilities for web development, app development, and software engineering. Professional development environment setup for programmers and developers.';
		    include 'software/software.php';
		    break;

		case '':
				$page = new Structure('../../', 'english', 'Software');
				$keywords = 'computer software, software installation, operating systems, Windows installation, software setup, productivity software, antivirus software, software licensing, program installation, software recommendations, application setup, system software, software troubleshooting';
				$description = 'Computer software installation and setup services in Pomona, CA. We install operating systems, productivity software, antivirus programs, and applications for homes and businesses. Expert software recommendations and licensing.';
				include 'software/software.php';
					break;
		default:
			show404();
			break;
		}
}

function _JesusChrist($sub_route){
	switch ($sub_route) {
		case 'father_in_heaven_tell_me_about_web':
			$page = new Structure('../../', 'english', 'Heavenly Father');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/_HeavenlyFather.php';
			break;


		case 'apostles':
			$apostles = [
			    'peter'         => 'Peter',
			    'andrew'        => 'Andrew',
			    'james'         => 'James',
			    'john'          => 'John',
			    'philip'        => 'Philip',
			    'bartholomew'   => 'Bartholomew',
			    'thomas'        => 'Thomas',
			    'matthew'       => 'Matthew',
			    'little_james'  => 'James',
			    'thaddeus'      => 'Thaddeus',
			    'simon'         => 'Simon',
			    'judas'         => 'Judas',
			    'matthias'      => 'Matthias',
			    'paul'          => 'Paul'
			];

			$selected = null;

			// Find which GET key is present
			foreach ($apostles as $key => $name) {
			    if (isset($_GET[$key])) {
			        $selected = $name;
			    break;
			}
		}
		// Default title if none matched
		$title = $selected ? "Apostles: $selected" : "The Apostles";
		$page = new Structure('../../', 'english', $title);
		if (isset($_GET['peter'])) {
			$keywords = 'Apostle Peter, Saint Peter, Peter the Apostle, Life of Peter, Peter in the Bible, Peter in the New Testament, 1 Peter, 2 Peter, Council of Jerusalem, Peter’s martyrdom, Peter in Rome, Successor of Peter, Papacy origins, Peter Catholic teaching, Early Church history, Peter crucified upside down, Peter’s legacy, St. Peter’s Basilica, Peter’s ministry, Peter’s final journey, Biography of the Apostle Peter, Catholic teaching about Saint Peter';
			$description = 'A complete, easy-to-understand guide to the Apostle Peter—his calling by Jesus, leadership in the early Church, role at the Council of Jerusalem, New Testament writings, missionary work, and martyrdom in Rome. Includes biblical references, early Christian sources, and Catholic-aligned explanations of Peter’s lasting legacy and connection to the modern Church.';
		} else{
			$keywords = 'Keyword_test';
			$description = 'Description_test';
		}
		include '_JesusChrist/_Apostles.php';
		break;

		case 'parables':
			$page = new Structure('../../', 'english', 'Parables');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/parables.php';
			break;

		case 'sermons':
			$page = new Structure('../../', 'english', 'Sermons');
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

		case '':
			$page = new Structure('../../', 'english', 'Jesus Christ');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/_TheBelovedSon.php';
			break;

		default:
			show404();
			break;
	}
}

function _Jesucristo($sub_route){
	switch ($sub_route) {
		case 'padre_celestial_cuentame_sobre_el_internet':
			$page = new Structure('../../', 'español', 'Padre Celestial');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/_HeavenlyFather.php';
			break;

		case 'apostoles':
			$page = new Structure('../../', 'español', 'Los Apóstoles');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/_Apostles.php';
			break;

		case 'parabolas':
			$page = new Structure('../../', 'español', 'Parabolas');
			$keywords = 'Palabras Clave de Parabolas';
			$description = 'Descripción de Parabolas';
			include '_JesusChrist/parables.php';
			break;

		case 'sermones':
			$page = new Structure('../../', 'español', 'Sermones');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/sermons.php';
			break;

		case 'enseñanzas':
			$page = new Structure('../../', 'español', 'Enseñanzas');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/teachings.php';
			break;

		case '':
			$page = new Structure('../../', 'español', 'Jesucristo');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			echo 'Hola!';
			break;

		default:
			show404();
			break;
	}
}

function tutorial(){
	$page = new Structure('../../', 'english', 'Tutorials');
	$keywords = 'Tutorials Keywords';
	$description = 'Tutorials Description';
	include 'anvil/tutorials.php';
}

function fullPageTemplate(){
	$page = new Structure('../', 'english', 'Template');
	$keywords = 'test_Keywords';
	$description = 'test_Description';
	include 'fullPageTemplate.php';
}

$page = new Structure('../', 'english', 'Home LatinosPC');

$description = 'Online Tech Classes Computer services, Configurations, Hardware, and in‑person, businesses, and home users.';
$keywords = 'computer repair, laptop repair, pc repair, virus removal, malware removal, data backup, data recovery, computer diagnostics, small business IT support, student tech support, home computer repair, gamer PC repair, custom gaming PC help, computer classes, online computer classes, in-person computer classes, tech training for seniors, beginner computer lessons, computer repair in Pomona, Pomona tech support, laptop repair near me, IT services Pomona, computer classes Pomona';

/* DATABASE CONNECTION */
try {
	$dbPath = __DIR__ . '/db/laTpc.db';
	$pdo = new PDO('sqlite:' . $dbPath);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// Check if content table exists
	$tableExists = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='content'")->fetch();

	global $content;
	if ($tableExists) {
		$stmt = $pdo->query('SELECT * FROM content WHERE page_id = "home"');//each page has its own page_id wich is represnted by a table on the SQLite Connection file.
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
        <a href="../hardware_options/" class="cta-button"><?= $hardwareButtons = $content[64]['content'];?></a>

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

include './anvil/structure.php';

?>