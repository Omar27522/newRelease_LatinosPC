<?php
function hardware_options($sub_route){
    global $page, $keywords, $description;
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
		case 'display':
		case 'displays':
		    $page = new Structure('../../', 'english', 'HW Monitor');
		    $keywords = 'computer monitor, gaming monitor, 4K monitor, ultrawide monitor, monitor setup, dual monitor, high refresh rate, IPS monitor, LED monitor, monitor calibration';
		    $description = 'Computer monitor sales and setup in Pomona, CA. Gaming monitors, 4K displays, ultrawide screens, and dual monitor configurations for productivity and entertainment.';
		    include 'hardware/hardware.php';
		    break;
		case 'p_memory':
		case 'portableMemory':
		    $page = new Structure('../../', 'english', 'HW External Drive');
		    $keywords = 'external hard drive, portable storage, external SSD, USB drive, backup drive, external storage, portable hard drive, flash drive, thumb drive, data portability';
		    $description = 'External storage solutions in Pomona, CA. Portable hard drives, external SSDs, and USB drives for backup, file transfer, and expanding your storage capacity.';
		    include 'hardware/hardware.php';
		    break;
		case 'pci':
		case 'pci_cards':
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
		case 'joysticks':
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

function hardware_spanish($sub_route){
    global $page, $keywords, $description;
	switch ($sub_route) {

		case 'cpu':
		    $page = new Structure('../../', 'español', 'HW CPU');
		    $keywords = 'CPU, procesador, CPU Intel, procesador AMD, actualización de CPU, instalación de procesador, procesador de computadora, reemplazo de CPU, procesador multinúcleo, CPU para juegos, procesador para estación de trabajo';
		    $description = 'Opciones de CPU y procesadores, servicios de instalación y actualización en Pomona, CA. Orientación experta sobre procesadores Intel y AMD para juegos, estaciones de trabajo y necesidades informáticas cotidianas.';
		    include 'hardware/hardware.php';
		    break;
		case 'ram':
		    $page = new Structure('../../', 'español', 'HW RAM');
		    $keywords = 'RAM, actualización de memoria, DDR4, DDR5, memoria de computadora, instalación de RAM, expansión de memoria, memoria del sistema, RAM de laptop, RAM de escritorio, actualización de rendimiento';
		    $description = 'Servicios de actualización de RAM y memoria en Pomona, CA. Instalamos y recomendamos la memoria adecuada para un rendimiento más rápido en computadoras de escritorio y laptops. Opciones DDR4 y DDR5 disponibles.';
		    include 'hardware/hardware.php';
		    break;
		case 'placa_base':
		case 'placa-base':
		case 'motherboard':
		    $page = new Structure('../../', 'español', 'HW Placa Base');
		    $keywords = 'tarjeta madre, placa base, reemplazo de tarjeta madre, actualización de placa madre, placa base de PC, placa base para juegos, placa base ATX, micro ATX, instalación de placa base, placa base Intel, placa base AMD';
		    $description = 'Servicios de reemplazo y actualización de placas base en Pomona, CA. Instalación experta de placas base Intel y AMD para juegos, estaciones de trabajo y construcciones de PC estándar.';
		    include 'hardware/hardware.php';
		    break;
		case 'gabinete':
		case 'carcasa':
		case 'chassis':
		    $page = new Structure('../../', 'español', 'HW Carcasa');
		    $keywords = 'gabinete de computadora, chasis de PC, gabinete de torre, gabinete de escritorio, gabinete para juegos, gabinete ATX, gabinete mini ITX, carcasa de computadora, actualización de gabinete, gabinete de flujo de aire, gabinete RGB';
		    $description = 'Opciones de chasis y gabinetes de computadora en Pomona, CA. Elija entre torres para juegos, gabinetes compactos y carcasas profesionales con flujo de aire y diseño óptimos.';
		    include 'hardware/hardware.php';
		    break;
		case 'almacenamiento':
		case 'storage':
		    $page = new Structure('../../', 'español', 'HW Almacenamiento');
		    $keywords = 'SSD, disco duro, SSD NVMe, actualización de almacenamiento, unidad de estado sólido, reemplazo de HDD, unidad M.2, expansión de almacenamiento, SSD SATA, almacenamiento interno, almacenamiento de datos';
		    $description = 'Servicios de actualización de almacenamiento de computadoras en Pomona, CA. Instale SSD, unidades NVMe y discos duros para un rendimiento más rápido y mayor capacidad. Soluciones de almacenamiento profesional.';
		    include 'hardware/hardware.php';
		    break;
		case 'fuente_de_poder':
		case 'fuente-de-poder':
		case 'powersupply':
		case 'psu':
		    $page = new Structure('../../', 'español', 'HW Fuente de Poder');
		    $keywords = 'fuente de poder, PSU, unidad de fuente de alimentación, reemplazo de PSU, fuente modular, fuente de alimentación de computadora, calculadora de vataje, actualización de fuente, fuente de alimentación confiable, certificación 80 Plus';
		    $description = 'Servicios de instalación y reemplazo de fuentes de alimentación en Pomona, CA. Selección e instalación experta de fuentes de poder para un rendimiento de PC estable y confiable. Opciones modulares y certificadas disponibles.';
		    include 'hardware/hardware.php';
		    break;
		case 'tarjeta_grafica':
		case 'tarjeta-grafica':
		case 'graphicscard':
		case 'gpu':
		    $page = new Structure('../../', 'español', 'HW Tarjeta Grafica');
		    $keywords = 'tarjeta gráfica, GPU, tarjeta de video, GPU NVIDIA, tarjeta gráfica AMD, actualización de GPU, tarjeta gráfica para juegos, instalación de tarjeta gráfica, RTX, Radeon, gráficos discretos';
		    $description = 'Servicios de instalación y actualización de tarjetas gráficas en Pomona, CA. Recomendaciones e instalación experta de GPU para juegos, edición de video y trabajo gráfico profesional.';
		    include 'hardware/hardware.php';
		    break;
		case 'enfriamiento':
		case 'coolers':
		case 'cooling':
		    $page = new Structure('../../', 'español', 'HW Enfriamiento');
		    $keywords = 'enfriador de CPU, enfriamiento de PC, enfriamiento líquido, enfriador AIO, enfriador de aire, pasta térmica, ventiladores de gabinete, sistema de enfriamiento, actualización de enfriamiento de computadora, gestión de temperatura, disipador de calor';
		    $description = 'Soluciones de enfriamiento para computadoras en Pomona, CA. Instale enfriadores de aire, sistemas de enfriamiento líquido y ventiladores de gabinete para mantener su PC fresca y silenciosa bajo cualquier carga de trabajo.';
		    include 'hardware/hardware.php';
		    break;
		case 'dispositivos_de_entrada':
		case 'dispositivos-de-entrada':
		case 'input_devices':
		    $page = new Structure('../../', 'español', 'HW Dispositivos de Entrada');
		    $keywords = 'dispositivos de entrada, teclado, mouse, teclado para juegos, teclado mecánico, mouse inalámbrico, panel táctil, trackball, periféricos de entrada, teclado USB, mouse para juegos';
		    $description = 'Dispositivos de entrada de computadora, incluyendo teclados, ratones y periféricos en Pomona, CA. Recomendaciones de expertos para juegos, productividad y necesidades informáticas cotidianas.';
		    include 'hardware/hardware.php';
		    break;
		case 'dispositivos_de_salida':
		case 'dispositivos-de-salida':
		case 'output_devices':
		    $page = new Structure('../../', 'español', 'HW Dispositivos de Salida');
		    $keywords = 'dispositivos de salida, monitor de computadora, impresora, altavoces, pantalla, proyector, periféricos de salida, configuración de doble monitor, pantalla, salida de audio, pantalla visual';
		    $description = 'Dispositivos de salida de computadora, incluyendo monitores, impresoras y altavoces en Pomona, CA. Configuración profesional y recomendaciones para un rendimiento óptimo de pantalla y audio.';
		    include 'hardware/hardware.php';
		    break;
		case 'perifericos':
		case 'peripherals_and_gear':
		    $page = new Structure('../../', 'español', 'HW Perifericos');
		    $keywords = 'periféricos de computadora, accesorios de PC, equipo de juego, dispositivos USB, periféricos inalámbricos, accesorios de computadora, dispositivos externos, configuración de periféricos, equipo tecnológico, equipo de PC';
		    $description = 'Periféricos de computadora y equipo para juegos en Pomona, CA. Gama completa de accesorios para PC, dispositivos USB y equipos tecnológicos para mejorar la productividad y el rendimiento de los juegos.';
		    include 'hardware/hardware.php';
		    break;
		case 'raton':
		case 'ratón':
		case 'mouse':
		    $page = new Structure('../../', 'español', 'HW Ratón');
		    $keywords = 'mouse de computadora, mouse para juegos, mouse inalámbrico, mouse ergonómico, mouse óptico, mouse DPI, mouse RGB, mouse trackball, mouse Bluetooth, mouse de precisión';
		    $description = 'Opciones y recomendaciones de mouse de computadora en Pomona, CA. Ratones para juegos, inalámbricos y opciones ergonómicas para comodidad y precisión en el trabajo o el juego.';
		    include 'hardware/hardware.php';
		    break;
		case 'teclado':
		case 'keyboard':
		    $page = new Structure('../../', 'español', 'HW Teclado');
		    $keywords = 'teclado, teclado mecánico, teclado para juegos, teclado inalámbrico, teclado ergonómico, teclado RGB, teclado de membrana, interruptores de teclado, teclado retroiluminado, teclado USB';
		    $description = 'Opciones de teclado de computadora en Pomona, CA. Teclados mecánicos, para juegos y ergonómicos para comodidad de escritura y rendimiento. Opciones con cable e inalámbricas disponibles.';
		    include 'hardware/hardware.php';
		    break;
		case 'monitor':
		case 'display':
		case 'displays':
		    $page = new Structure('../../', 'español', 'HW Monitor');
		    $keywords = 'monitor de computadora, monitor para juegos, monitor 4K, monitor ultrawide, configuración de monitor, monitor dual, alta tasa de refresco, monitor IPS, monitor LED, calibración de monitor';
		    $description = 'Venta y configuración de monitores de computadora en Pomona, CA. Monitores para juegos, pantallas 4K, pantallas ultrawide y configuraciones de monitor dual para productividad y entretenimiento.';
		    include 'hardware/hardware.php';
		    break;
		case 'memoria_portatil':
		case 'memoria-portatil':
		case 'p_memory':
		case 'portableMemory':
		    $page = new Structure('../../', 'español', 'HW Memoria Portatil');
		    $keywords = 'disco duro externo, almacenamiento portátil, SSD externo, unidad USB, unidad de respaldo, almacenamiento externo, disco duro portátil, unidad flash, memoria USB, portabilidad de datos';
		    $description = 'Soluciones de almacenamiento externo en Pomona, CA. Discos duros portátiles, SSD externos y unidades USB para respaldo, transferencia de archivos y expansión de su capacidad de almacenamiento.';
		    include 'hardware/hardware.php';
		    break;
		case 'tarjetas_pci':
		case 'tarjetas-pci':
		case 'pci':
		case 'pci_cards':
		    $page = new Structure('../../', 'español', 'HW Tarjetas PCI');
		    $keywords = 'tarjeta PCI, tarjeta de expansión, tarjeta PCIe, tarjeta de sonido, tarjeta de red, tarjeta de captura, tarjeta WiFi, PCI Express, ranura de expansión, tarjeta adicional';
		    $description = 'Tarjetas de expansión PCI y PCIe en Pomona, CA. Tarjetas de sonido, tarjetas de red, adaptadores WiFi y otras tarjetas de expansión para mejorar las capacidades de su PC.';
		    include 'hardware/hardware.php';
		    break;
		case 'escaneres':
		case 'escáneres':
		case 'scanners':
		case 'scanner':
		    $page = new Structure('../../', 'español', 'HW Escáneres');
		    $keywords = 'escáner de documentos, escáner plano, escáner de fotos, escáner portátil, configuración de escáner, digitalización de documentos, escáner OCR, escáner de alta velocidad, escáner dúplex';
		    $description = 'Configuración de escáneres de documentos y fotos en Pomona, CA. Instalación profesional de escáneres y recomendaciones para digitalizar documentos, fotos y papeles importantes.';
		    include 'hardware/hardware.php';
		    break;
		case 'impresoras':
		case 'printers':
		case 'printer':
		    $page = new Structure('../../', 'español', 'HW Impresoras');
		    $keywords = 'impresora, impresora de inyección de tinta, impresora láser, impresora inalámbrica, impresora todo en uno, configuración de impresora, instalación de impresora, impresora para el hogar, impresora de oficina, impresora fotográfica';
		    $description = 'Servicios de configuración e instalación de impresoras en Pomona, CA. Impresoras de inyección de tinta, láser y todo en uno para el hogar y la oficina. Configuración de impresoras inalámbricas y de red disponible.';
		    include 'hardware/hardware.php';
		    break;
		case 'controladores_de_consola':
		case 'controladores-de-consola':
		case 'console_controllers':
		    $page = new Structure('../../', 'español', 'HW Controladores de Consola');
		    $keywords = 'control de consola, control de juego, control de Xbox, control de PlayStation, control de Nintendo, control inalámbrico, control para juegos, gamepad, control de PC';
		    $description = 'Controles de consolas de juegos en Pomona, CA. Controles de Xbox, PlayStation y Nintendo para juegos de PC. Opciones con cable e inalámbricas para todas las plataformas de juegos.';
		    include 'hardware/hardware.php';
		    break;
		case 'joystick':
		case 'joysticks':
		    $page = new Structure('../../', 'español', 'HW Joysticks');
		    $keywords = 'joystick, palanca de vuelo, HOTAS, joystick de simulador de vuelo, joystick para juegos, controles de vuelo, control de aceleración, palanca arcade, joystick de carreras sim';
		    $description = 'Joysticks de juego y controles de vuelo en Pomona, CA. Joysticks para simulador de vuelo, sistemas HOTAS y palancas arcade para experiencias de juego inmersivas.';
		    include 'hardware/hardware.php';
		    break;
		case 'tablets':
		case 'tablet':
		    $page = new Structure('../../', 'español', 'HW Tablets');
		    $keywords = 'tableta de dibujo, tableta gráfica, tableta con lápiz, tableta Wacom, tableta de arte digital, configuración de tableta, tableta con lápiz óptico, tableta de arte, tableta de diseño';
		    $description = 'Tabletas de dibujo y gráficas en Pomona, CA. Tabletas con lápiz profesionales para arte digital, diseño y edición de fotos. Servicios de configuración y ajuste disponibles.';
		    include 'hardware/hardware.php';
		    break;
		case 'microfonos':
		case 'micrófonos':
		case 'microphones':
		case 'micro':
		    $page = new Structure('../../', 'español', 'HW Micrófonos');
		    $keywords = 'micrófono, micrófono USB, micrófono de streaming, micrófono de condensador, micrófono para juegos, micrófono para podcast, micrófono de estudio, configuración de micrófono, micrófono XLR';
		    $description = 'Opciones y configuración de micrófonos en Pomona, CA. Micrófonos USB y XLR para streaming, podcasting, juegos y grabación. Soluciones profesionales de captura de audio.';
		    include 'hardware/hardware.php';
		    break;
		case 'headsets':
		case 'headset':
		    $page = new Structure('../../', 'español', 'HW Headsets');
		    $keywords = 'auriculares para juegos, diadema inalámbrica, diadema USB, auriculares con micrófono, auriculares para PC, auriculares con sonido envolvente, auriculares con cancelación de ruido, audio para juegos';
		    $description = 'Auriculares y diademas para juegos y PC en Pomona, CA. Auriculares inalámbricos y con cable con micrófonos para juegos, videollamadas y multimedia. Opciones de sonido envolvente disponibles.';
		    include 'hardware/hardware.php';
		    break;
		case 'audifonos':
		case 'audífonos':
		case 'headphones':
		case 'headphone':
		    $page = new Structure('../../', 'español', 'HW Audífonos');
		    $keywords = 'auriculares, audífonos inalámbricos, auriculares de estudio, auriculares Bluetooth, auriculares con cancelación de ruido, auriculares sobre la oreja, auriculares para audiófilos, auriculares para música';
		    $description = 'Auriculares para computadora en Pomona, CA. Auriculares con cable e inalámbricos para música, juegos y trabajo. Opciones de calidad de estudio y cancelación de ruido disponibles.';
		    include 'hardware/hardware.php';
		    break;
		case 'mezcladoras_de_audio':
		case 'mezcladoras-de-audio':
		case 'audio_mixers':
		case 'audiomixer':
		    $page = new Structure('../../', 'español', 'HW Mezcladoras de Audio');
		    $keywords = 'mezclador de audio, mezclador de audio USB, mezclador de streaming, mezclador de podcast, interfaz de audio, consola de mezcla, mezclador digital, GoXLR, mezclador de producción de audio';
		    $description = 'Mezcladores e interfaces de audio en Pomona, CA. Soluciones de mezcla profesional para streaming, podcasting y producción musical. Servicios de configuración y ajuste disponibles.';
		    include 'hardware/hardware.php';
		    break;
		case 'controladores':
		case 'controllers':
		case 'controller':
		    $page = new Structure('../../', 'español', 'HW Controladores');
		    $keywords = 'control de juego, control de PC, control inalámbrico, control con cable, control de Xbox para PC, control de PlayStation para PC, control de terceros, gamepad para juegos';
		    $description = 'Controles para juegos de PC en Pomona, CA. Controles inalámbricos y con cable compatibles con juegos de PC. Opciones de Xbox, PlayStation y de terceros disponibles.';
		    include 'hardware/hardware.php';
		    break;
		case 'uniformes_de_gaming':
		case 'uniformes-de-gaming':
		case 'gaming_uniforms':
		case 'uniforms':
		    $page = new Structure('../../', 'español', 'HW Uniformes de Gaming');
		    $keywords = 'jersey de juego, jersey de esports, ropa de equipo de juego, uniforme de juego, ropa de streamer, ropa de juego, equipo de esports, jerseys de equipo, mercancía de juego';
		    $description = 'Uniformes de juego y ropa de esports en Pomona, CA. Jerseys de equipo, ropa de streaming y mercancía de juego para jugadores competitivos y creadores de contenido.';
		    include 'hardware/hardware.php';
		    break;
		case 'lapices_plumas_y_tablets':
		case 'lapices-plumas-y-tablets':
		case 'pens_pencils_tablets':
		case 'pencil':
		    $page = new Structure('../../', 'español', 'HW Lápices, Plumas y Tablets');
		    $keywords = 'lápiz óptico, lápiz digital, lápiz de tableta, Apple Pencil, Surface Pen, lápiz de dibujo, lápiz sensible a la presión, lápiz activo, accesorios de tableta con lápiz';
		    $description = 'Lápices digitales y ópticos en Pomona, CA. Lápices sensibles a la presión para tabletas de dibujo, iPads y dispositivos con pantalla táctil. Perfecto para artistas y diseñadores.';
		    include 'hardware/hardware.php';
		    break;
		case 'sillas':
		case 'chairs':
		case 'chair':
		    $page = new Structure('../../', 'español', 'HW Sillas');
		    $keywords = 'silla para juegos, silla de oficina, silla ergonómica, silla de computadora, silla de escritorio, silla de carreras, silla de malla, silla ajustable, silla con soporte lumbar';
		    $description = 'Sillas de oficina y para juegos en Pomona, CA. Sillas ergonómicas para computadora con soporte lumbar para sesiones de juego y horas de trabajo cómodas.';
		    include 'hardware/hardware.php';
		    break;
		case 'escritorios':
		case 'desk':
		case 'desks':
		    $page = new Structure('../../', 'español', 'HW Escritorios');
		    $keywords = 'escritorio para juegos, escritorio de computadora, escritorio de pie, escritorio en L, escritorio ajustable, configuración de escritorio, escritorio de estación de trabajo, estación de juegos, escritorio de oficina, escritorio ergonómico';
		    $description = 'Escritorios para computadoras y juegos en Pomona, CA. Escritorios de pie, escritorios en L y estaciones de juego para una organización y comodidad óptimas del espacio de trabajo.';
		    include 'hardware/hardware.php';
		    break;
		case 'tapetes_antideslizantes':
		case 'tapetes-antideslizantes':
		case 'anti_slip_mats':
		case 'antislipmats':
		    $page = new Structure('../../', 'español', 'HW Tapetes Antideslizantes');
		    $keywords = 'mouse pad, mouse pad para juegos, mouse pad extendido, tapete de escritorio, mouse pad RGB, mouse pad grande, alfombrilla antideslizante, almohadilla de escritorio, tapete de escritorio para juegos';
		    $description = 'Alfombrillas de ratón para juegos y tapetes de escritorio en Pomona, CA. Mouse pads extendidos, tapetes de escritorio RGB y superficies antideslizantes para un control preciso del mouse y protección del escritorio.';
		    include 'hardware/hardware.php';
		    break;
		case 'altavoces_y_subwoofers':
		case 'altavoces-y-subwoofers':
		case 'speakers_and_subwoofers':
		    $page = new Structure('../../', 'español', 'HW Altavoces y Subwoofers');
		    $keywords = 'altavoces de computadora, bocinas de PC, subwoofer, altavoces 2.1, bocinas para juegos, altavoces de escritorio, altavoces multimedia, bocinas Bluetooth, altavoces de sonido envolvente';
		    $description = 'Altavoces y subwoofers para computadora en Pomona, CA. Sistemas 2.1, altavoces para juegos y configuraciones de sonido envolvente para un audio inmersivo en su PC de escritorio.';
		    include 'hardware/hardware.php';
		    break;

		case '':
			$page = new Structure('../../', 'español', 'Hardware');
			$keywords = 'hardware de computadora, partes de PC, partes de laptop, componentes de escritorio, actualización de RAM, reemplazo de disco duro, actualización de SSD, tarjeta gráfica, placa base, actualización de CPU, fuente de alimentación, periféricos de computadora, instalación de hardware, componentes de PC Pomona, recomendaciones de partes de computadora';
			$description = 'Opciones de hardware de computadora y servicios de actualización en Pomona, CA. Recomendamos, obtenemos e instalamos RAM, SSD, discos duros, tarjetas gráficas y otros componentes de PC. Consultas de hardware expertas para escritorios y laptops.';
			include 'hardware/hardware.php';
			break;
		default:
			show404();
			break;
	}
}
?>