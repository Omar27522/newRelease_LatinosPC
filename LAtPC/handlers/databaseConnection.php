<?php


function databaseConnection($page_id){
/* DATABASE CONNECTION */
try {
	$dbPath = dirname(__DIR__) . '/db/laTpc.db';
	$pdo = new PDO('sqlite:' . $dbPath);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// Check if content table exists
	$tableExists = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='content'")->fetch();

	global $content, $key, $page;
	$content = []; // Initialize to empty array

	// Initialize language key based on current page language
	$key = 'content';
	if (isset($page) && method_exists($page, 'getLang')) {
		$key = ['en' => 'content', 'es-419' => 'contenido'][$page->getLang()] ?? 'content';
	}

	if ($tableExists) {
		$stmt = $pdo->prepare('SELECT * FROM content WHERE page_id = ? ORDER BY id ASC');
		$stmt->execute([$page_id]);
		$content = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
} catch (PDOException $e) {
	// Log error and continue without database content
	error_log('Database Error: ' . $e->getMessage());
	$content = [];
	$key = 'content';
}
//$stmt = $pdo->prepare("INSERT INTO content (page_id, name, content) VALUES (?, ?, ?)");
}