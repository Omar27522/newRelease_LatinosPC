<?php
include_once __DIR__ . '/handlers/classStructure.php';

include_once __DIR__ . '/handlers/requestedPath.php';


include_once __DIR__ . '/anvil/functions/controller.php';

include_once __DIR__ . '/handlers/route.php';


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

include __DIR__ . '/handlers/home.php';

include __DIR__ . '/anvil/structure.php';

?>