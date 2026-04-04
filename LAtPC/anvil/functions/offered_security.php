<?php

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
?>
