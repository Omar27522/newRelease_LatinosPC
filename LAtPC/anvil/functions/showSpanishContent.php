<?php
function showSpanishContent(){
	global $content, $page;
	$page = new Structure('../', 'español', 'Inicio LatinosPC');
	$keywords = 'reparación de computadoras, reparación de laptops, reparación de PC, eliminación de virus, eliminación de malware, respaldo de datos, recuperación de datos, diagnóstico de computadoras, soporte IT para pequeñas empresas, soporte técnico para estudiantes, reparación de computadoras a domicilio, reparación de PC para gamers, ayuda con PC gamer personalizada, clases de computación, clases de computación online, clases de computación presenciales, capacitación tecnológica para adultos mayores, clases básicas de computación, reparación de computadoras en Pomona, soporte técnico en Pomona, reparación de laptops cerca de mí, servicios IT en Pomona, clases de computación en Pomona';
	$description = 'Clases de tecnología en línea, servicios de computación, configuraciones, hardware y atención presencial para negocios y usuarios domésticos.';
	/* DATABASE CONNECTION */
	try {
		if (!isset($pdo)) {
			$dbPath = __DIR__ . '/../../db/laTpc.db';
			$pdo = new PDO('sqlite:' . $dbPath);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}

		// Check if content table exists and fetch content if not already set
		if (empty($content)) {
			$tableExists = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='content'")->fetch();
			if ($tableExists) {
				$stmt = $pdo->query('SELECT * FROM content WHERE page_id = "home"');
				$content = $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
		}
	} catch (PDOException $e) {
		error_log('Database Error: ' . $e->getMessage());
		$content = $content ?? [];
	}

	include_once __DIR__ . '/../structure.php';
}
include_once __DIR__ . '/../../handlers/home.php';
?>
