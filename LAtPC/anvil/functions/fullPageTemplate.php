<?php
function fullPageTemplate(){
	$page = new Structure('../', 'english', 'Template');
	$keywords = 'test_Keywords';
	$description = 'test_Description';
	include __DIR__ . '/../../fullPageTemplate.php';
}

?>