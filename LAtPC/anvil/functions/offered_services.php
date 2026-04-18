<?php

function offered_services($sub_route){
    global $page, $keywords, $description;
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

function servicios($sub_route){
    global $page, $keywords, $description;
	switch ($sub_route) {

		case 'limpieza':
			$page = new Structure('../../', 'español', 'Limpieza');
			$keywords = 'limpieza de computadoras Pomona, limpieza de PC Pomona, eliminación de virus, eliminación de malware, eliminación de spyware, optimización de computadoras, reparación de computadoras lentas, tune-up de PC, limpieza de sistema, eliminación de archivos basura, limpieza de registro, optimización de rendimiento, mantenimiento de computadoras, optimización de inicio, limpieza de disco';
			$description = 'Servicios profesionales de limpieza de computadoras en Pomona, CA. virus y malware, y eliminación de archivos basura para mejorar el rendimiento de la PC. Limpieza en sitio y remota disponible para los condados de LA, San Bernardino, Riverside y Orange.';
			include 'services/cleanups.php';
			break;

		case 'proteccion':
			$page = new Structure('../../', 'español', 'Protección');
			$keywords = 'protección de computadoras Pomona, protección de PC Pomona, eliminación de virus, eliminación de malware, eliminación de spyware, optimización de computadoras, reparación de computadoras lentas, tune-up de PC, limpieza de sistema, eliminación de archivos basura, limpieza de registro, optimización de rendimiento, mantenimiento de computadoras, optimización de inicio, limpieza de disco';
			$description = 'Servicios profesionales de protección de computadoras en Pomona, CA. virus y malware, y eliminación de archivos basura para mejorar el rendimiento de la PC. Limpieza en sitio y remota disponible para los condados de LA, San Bernardino, Riverside y Orange.';
			include 'services/protection.php';
			break;

		case 'consultas':
			$page = new Structure('../../', 'español', 'Consultas');
			$keywords = 'computer consultation, IT consultation Pomona, technology consulting, computer advice, PC buying guide, tech support consultation, business IT consulting, network consultation, software recommendations, hardware consultation, computer setup consultation, technology planning, IT assessment, computer system evaluation';
			$description = 'Expert computer consultation services in Pomona, CA. professional advice on PC purchases, upgrades, software selection, and technology planning for your home or business. Serving LA, San Bernardino, Riverside, and Orange counties.';
			include 'services/consultations.php';
			break;

		case 'serviciosGestionados':
			$page = new Structure('../../', 'español', 'Servicios Gestionados');
			$keywords = 'managed IT services Pomona, IT support for small business, remote IT management, network monitoring, proactive IT support, IT maintenance services, managed cybersecurity, IT support contracts, business IT services, outsourced IT support, IT management services, remote monitoring and management, IT support packages, proactive IT maintenance, managed IT solutions';
			$description = 'Professional managed IT services in Pomona, CA. proactive IT support provided, network monitoring, cybersecurity, and remote management for small businesses. Serving LA, San Bernardino, Riverside, and Orange counties.';
			include 'services/managedServices.php';
			break;

		case 'sitiosWeb':
			$page = new Structure('../../', 'español', 'Paginas Web');
			$keywords = 'website design Pomona, small business website, affordable website design, professional website, local business website, e-commerce website, website development Pomona, custom website design, business website design, website design packages, responsive website, modern website design, website design services, business website development, website design for small business';
			$description = 'Affordable website design services in Pomona, CA. professional, custom websites for small businesses with packages starting at $750. Serving LA, San Bernardino, Riverside, and Orange counties.';
			include 'services/websites.php';
			break;

		case 'soporteRemoto':
			$page = new Structure('../../', 'español', 'Soporte Remoto');
			$keywords = 'remote computer repair, remote IT support Pomona, remote PC help, remote technical support, remote computer assistance, online computer repair, remote software support, remote troubleshooting, remote IT services, remote computer helpdesk, remote PC support, remote technical assistance, remote computer maintenance, remote IT help, remote computer services';
			$description = 'Professional remote computer repair services in Pomona, CA. fast and secure remote IT support for PCs and Macs, including troubleshooting, software installation, and technical assistance. Serving LA, San Bernardino, Riverside, and Orange counties.';
			include 'services/remoteSupport.php';
			break;

			case '':
				$page = new Structure('../../', 'español', 'Servicios');
			$keywords = 'reparación de computadoras Pomona, servicio de cómputo a domicilio, soporte técnico remoto, reparación de laptops, reparación de computadoras de escritorio, técnico en computación Los Ángeles, reparación de PC Inland Empire, TI para pequeñas empresas, desarrollo web, servicios de cómputo San Bernardino, reparación de computadoras Riverside, TI Orange County, reparación de computadoras a domicilio, configuración de redes, capacitación en computación, soluciones tecnológicas';
			$description = 'LatinosPC ofrece servicios de reparación de computadoras a domicilio y de forma remota en Pomona, CA, atendiendo los condados de LA, San Bernardino, Riverside y Orange. Fundada en 2021, brinda soluciones de TI personalizadas para hogares y pequeñas empresas con un paquete de servicio de 90 días y garantía de satisfacción al 100%.';
			include 'services/services.php';
			break;
		default:
			show404();
			break;
	}
}

?>