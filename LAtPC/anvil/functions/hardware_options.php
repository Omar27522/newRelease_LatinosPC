<?php
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
?>