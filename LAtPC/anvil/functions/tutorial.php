<?php
function tutorial(){
	$page = new Structure('../../', 'english', 'Tutorials');
	$keywords = 'Tutorials Keywords';
	$description = 'Tutorials Description';
	include 'anvil/tutorials.php';
}
?>