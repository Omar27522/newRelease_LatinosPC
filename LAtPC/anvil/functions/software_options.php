<?php
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

		case 'messaging':
		    $page = new Structure('../../', 'english', 'SW Messaging');
		    $keywords = 'messaging software, chat software, instant messaging, WhatsApp, Telegram, Signal, Facebook Messenger, Skype, Zoom, Microsoft Teams, Slack, Discord, video conferencing, chat application, messaging app, communication software';
		    $description = 'Messaging and communication software in Pomona, CA. Install and configure tools like WhatsApp, Telegram, Signal, Facebook Messenger, Skype, Zoom, Microsoft Teams, Slack, Discord for messaging, chat, and video conferencing. We set up messaging apps, configure communication tools, and teach you how to use them effectively for personal and business communication.';
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
function software_options_spanish($sub_route){
    global $page, $keywords, $description;
	switch ($sub_route){
		case 'anti_virus':
		case 'antivirus':
			$page = new Structure('../../', 'español', 'SW Anti-Virus');
			$keywords = 'software antivirus, protección contra virus, protección contra malware, instalación de antivirus, protección en tiempo real, escáner de virus, detección de amenazas, seguridad informática, Windows Defender, Norton, McAfee, Bitdefender, Kaspersky, AVG, Avast, eliminación de virus';
			$description = 'Servicios de instalación y configuración de software antivirus en Pomona, CA. Protege tu computadora contra virus, malware y amenazas en línea con análisis en tiempo real y actualizaciones automáticas. Te ayudamos a elegir la mejor opción gratuita o de paga.';
			include 'software/software.php';
			break;

		case 'malware_cleaner':
		case 'limpiador_malware':
		case 'limpiadores_malware':
		case 'mlwcleaner':
			$page = new Structure('../../', 'español', 'SW Limpiador de Malware');
			$keywords = 'eliminación de malware, limpiador de malware, eliminación de spyware, adware, PUP, escáner de malware, Malwarebytes, desinfección de sistema, limpieza de virus, seguridad de PC';
			$description = 'Servicios profesionales de limpieza y eliminación de malware en Pomona, CA. Eliminamos spyware, adware, troyanos y programas no deseados con herramientas especializadas como Malwarebytes. Dejamos tu equipo seguro y funcionando al 100%.';
			include 'software/software.php';
			break;

		case 'web_browsers':
		case 'navegadores':
		case 'navegadores_web':
			$page = new Structure('../../', 'español', 'SW Navegadores');
			$keywords = 'navegador web, navegadores de internet, Chrome, Firefox, Edge, Safari, Opera, Brave, instalación de navegadores, navegación segura, bloqueador de anuncios, extensiones de navegador';
			$description = 'Instalación y configuración de navegadores web en Pomona, CA. Configuramos Chrome, Firefox, Edge o Brave con las mejores opciones de privacidad, seguridad, bloqueadores de anuncios y sincronización de cuentas.';
			include 'software/software.php';
			break;

		case 'media':
		case 'multimedia':
			$page = new Structure('../../', 'español', 'SW Multimedia');
			$keywords = 'reproductor multimedia, reproductor de video, reproductor de audio, VLC, Windows Media Player, códecs de video, música, Spotify, iTunes, formatos de video';
			$description = 'Instalación y configuración de reproductores multimedia en Pomona, CA. Reproduce cualquier formato de video o audio con VLC y paquetes de códecs esenciales. Organización de bibliotecas de música y video.';
			include 'software/software.php';
			break;

		case 'runtimes':
			$page = new Structure('../../', 'español', 'SW Runtimes');
			$keywords = 'entorno runtime, Java Runtime, .NET Framework, Visual C++ redistributable, DirectX, librerías de sistema, dependencias de software, componentes de Windows, errores de dll';
			$description = 'Instalación de paquetes runtime y librerías esenciales en Pomona, CA. Java Runtime, .NET Framework, Visual C++ y DirectX para garantizar que todos tus programas y juegos abran sin errores de compatibilidad.';
			include 'software/software.php';
			break;

		case 'imaging':
		case 'imagenes':
		case 'diseno':
			$page = new Structure('../../', 'español', 'SW Imágenes');
			$keywords = 'software de edición de fotos, diseño gráfico, Photoshop, GIMP, Paint.NET, visor de imágenes, retoque fotográfico, optimización de imágenes, arte digital';
			$description = 'Software de edición y administración de imágenes en Pomona, CA. Instalamos y configuramos herramientas como Photoshop, GIMP y Paint.NET para diseño gráfico, edición de fotos y optimización visual.';
			include 'software/software.php';
			break;

		case 'messaging':
		case 'mensajeria':
			$page = new Structure('../../', 'español', 'SW Mensajería');
			$keywords = 'programas de mensajería, chat, videollamadas, WhatsApp, Telegram, Signal, Zoom, Microsoft Teams, Skype, Slack, Discord, comunicación empresarial';
			$description = 'Instalación y configuración de aplicaciones de mensajería y videollamadas en Pomona, CA. WhatsApp, Telegram, Zoom, Teams, Discord y Skype para mantenerte comunicado con tu familia o tu equipo de trabajo.';
			include 'software/software.php';
			break;

		case 'documents':
		case 'documentos':
			$page = new Structure('../../', 'español', 'SW Documentos');
			$keywords = 'paquetería de oficina, Microsoft Office, Word, Excel, PowerPoint, LibreOffice, Google Docs, lector de PDF, Adobe Acrobat, edición de documentos, hojas de cálculo';
			$description = 'Instalación y soporte de software de oficina y documentos en Pomona, CA. Configuramos Microsoft Office, LibreOffice y lectores/editores de PDF como Adobe Acrobat para máxima productividad en el hogar y la oficina.';
			include 'software/software.php';
			break;

		case 'file_sharing':
		case 'compartir_archivos':
			$page = new Structure('../../', 'español', 'SW Compartir Archivos');
			$keywords = 'compartir archivos, transferencia de archivos, enviar archivos pesados, red local, cliente FTP, transferencia segura, sincronización de archivos';
			$description = 'Configuración de software para compartir y transferir archivos en Pomona, CA. Herramientas seguras para enviar archivos de gran tamaño, redes locales y clientes FTP para el hogar y negocios.';
			include 'software/software.php';
			break;

		case 'online_storage':
		case 'almacenamiento_en_linea':
		case 'almacenamiento_nube':
			$page = new Structure('../../', 'español', 'SW Almacenamiento en Línea');
			$keywords = 'almacenamiento en la nube, respaldo en línea, Dropbox, Google Drive, OneDrive, iCloud, sincronización en la nube, copia de seguridad automática';
			$description = 'Configuración de almacenamiento y respaldos en la nube en Pomona, CA. Sincroniza y protege tus fotos y documentos importantes con Dropbox, Google Drive, OneDrive o iCloud con acceso desde cualquier dispositivo.';
			include 'software/software.php';
			break;

		case 'other':
		case 'otro':
		case 'otros':
			$page = new Structure('../../', 'español', 'SW Otro');
			$keywords = 'software especializado, programas personalizados, aplicaciones de nicho, instalación de programas específicos, soporte de software';
			$description = 'Instalación de software especializado y a la medida en Pomona, CA. Te ayudamos a instalar y configurar aplicaciones profesionales, programas de nicho y herramientas personalizadas para tu trabajo.';
			include 'software/software.php';
			break;

		case 'utilities':
		case 'utilidades':
		case 'herramientas':
			$page = new Structure('../../', 'español', 'SW Utilidades');
			$keywords = 'utilidades del sistema, optimización de PC, limpieza de disco, CCleaner, desfragmentación, monitoreo de rendimiento, mantenimiento de computadora';
			$description = 'Herramientas de optimización y mantenimiento del sistema en Pomona, CA. Instalamos utilidades para acelerar el arranque, limpiar archivos basura y mantener tu computadora rápida y estable.';
			include 'software/software.php';
			break;

		case 'compression':
		case 'compresion':
			$page = new Structure('../../', 'español', 'SW Compresión');
			$keywords = 'compresión de archivos, descompresor, WinRAR, 7-Zip, archivos zip, comprimir archivos, extraer archivos, descompresión, respaldo comprimido';
			$description = 'Software de compresión y descompresión de archivos en Pomona, CA. Instalamos WinRAR, 7-Zip y herramientas para crear y extraer archivos ZIP o RAR, ahorrando espacio en disco y facilitando el envío por correo.';
			include 'software/software.php';
			break;

		case 'developer_tools':
		case 'herramientas_de_desarrollo':
			$page = new Structure('../../', 'español', 'SW Herramientas de Desarrollo');
			$keywords = 'herramientas de desarrollo, programación, editor de código, Visual Studio Code, IDE, Git, control de versiones, entorno de desarrollo';
			$description = 'Instalación y configuración de herramientas para programadores en Pomona, CA. VS Code, Git, compiladores y entornos de desarrollo listos para programar páginas web, software y aplicaciones.';
			include 'software/software.php';
			break;

		case '':
			$page = new Structure('../../', 'español', 'Software');
			$keywords = 'software de computadora, instalación de programas, sistemas operativos, instalación de Windows, configuración de programas, antivirus, licenciamiento de software, Pomona CA';
			$description = 'Servicios de instalación y configuración de software en Pomona, CA. Instalamos sistemas operativos, programas de oficina, antivirus y herramientas de productividad para hogares y negocios.';
			include 'software/software.php';
			break;

		default:
			show404();
			break;
	}
}

function software_spanish($sub_route){
	software_options_spanish($sub_route);
}
?>