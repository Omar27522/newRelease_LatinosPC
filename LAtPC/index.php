<?php
include_once __DIR__ . '/handlers/classStructure.php';
	include_once __DIR__ . '/handlers/requestedPath.php';
		include_once __DIR__ . '/anvil/functions/controller.php';
$page = new Structure('../', 'english', 'Home LatinosPC');
$description = 'Online Tech Classes Computer services, Configurations, Hardware, and in‑person, businesses, and home users.';
$keywords = 'computer repair, laptop repair, pc repair, virus removal, malware removal, data backup, data recovery, computer diagnostics, small business IT support, student tech support, home computer repair, gamer PC repair, custom gaming PC help, computer classes, online computer classes, in-person computer classes, tech training for seniors, beginner computer lessons, computer repair in Pomona, Pomona tech support, laptop repair near me, IT services Pomona, computer classes Pomona';
include_once __DIR__ . '/handlers/databaseConnection.php';
databaseConnection('home');
		include_once   './handlers/route.php';
	include_once __DIR__ . '/handlers/home.php';
include_once __DIR__ . '/anvil/structure.php';
?>