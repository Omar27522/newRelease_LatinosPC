<?php

function offered_security($sub_route){
    global $page, $keywords, $description, $sub_route;

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
			$description = 'Password security services and guidance in Pomona, CA. Learn to create strong passwords, use password managers, and protect your accounts. Expert help with password setup, recovery, and implementing best practices for maximum security.';
			include 'security/security.php';
			break;

		case '':
			$page = new Structure('../../', 'english', 'Security');
			$keywords = 'computer security, cybersecurity Pomona, PC protection, network security, digital safety, malware prevention, data privacy, secure computing';
			$description = 'Expert computer security and cybersecurity services in Pomona, CA. Safeguard your devices, data, and network with proven protection measures from LatinosPC.';
			include 'security/security.php';
			break;
		default:
			show404();
			break;
	}
}

function seguridad_subninistrable($sub_route){
    global $page, $keywords, $description, $sub_route;

	switch ($sub_route) {
		case '':
			$page = new Structure('../../', 'español', 'Seguridad');
			$keywords = 'seguridad informática, ciberseguridad Pomona, protección de PC, seguridad de redes, seguridad digital, prevención de malware, privacidad de datos, computación segura';
			$description = 'Servicios expertos de seguridad informática y ciberseguridad en Pomona, CA. Proteja sus dispositivos, datos y redes con medidas de protección comprobadas de LatinosPC.';
			include 'security/security.php';
			break;

		case 'mejores_practicas':
			$page = new Structure('../../', 'español', 'Mejores Prácticas');
			$keywords = 'mejores prácticas de seguridad informática, consejos de ciberseguridad, pautas de seguridad para PC, seguridad en internet, buenas prácticas con contraseñas, navegación segura, protección de datos, prevención de malware, protección contra phishing, higiene digital, concientización de seguridad';
			$description = 'Aprenda las mejores prácticas esenciales de seguridad informática para proteger su PC e información. Consejos expertos sobre contraseñas, navegación segura y prevención de malware de LatinosPC en Pomona, CA.';
			include 'security/security.php';
			break;

		case 'respaldos':
			$page = new Structure('../../', 'español', 'Respaldos');
			$keywords = 'respaldo de computadoras, servicios de respaldo de datos, copia de seguridad en la nube, respaldo local, respaldos automáticos, recuperación de datos, soluciones de respaldo Pomona, respaldo en disco duro externo, recuperación ante desastres, protección de datos, respaldo seguro';
			$description = 'Servicios profesionales de respaldo de computadoras en Pomona, CA. Proteja sus archivos y datos importantes con soluciones de respaldo locales, automáticas y en la nube. Prevención ante desastres y recuperación de datos.';
			include 'security/security.php';
			break;

		case 'clave':
		case 'contrasenas':
		case 'contraseñas':
			$page = new Structure('../../', 'español', 'Contraseñas');
			$keywords = 'seguridad de contraseñas, contraseñas seguras, gestor de contraseñas, mejores prácticas para contraseñas, protección de contraseñas, recuperación de contraseñas, autenticación de dos factores, 2FA, boveda de contraseñas, consejos de seguridad, seguridad de cuentas';
			$description = 'Servicios y orientación sobre seguridad de contraseñas en Pomona, CA. Aprenda a crear contraseñas seguras, utilizar gestores de contraseñas y proteger sus cuentas con autenticación multifactor.';
			include 'security/security.php';
			break;

		default:
			show404();
			break;
	}
}
?>