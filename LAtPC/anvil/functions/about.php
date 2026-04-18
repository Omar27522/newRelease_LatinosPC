<?php
function about(){
    global $page, $keywords, $description;
	$page = new Structure('../', 'english', 'About');
	$keywords = 'computer repair Pomona, on-site computer service, remote IT support, laptop repair, desktop repair, computer technician Los Angeles, PC repair Inland Empire, small business IT, web development, computer services San Bernardino, Riverside computer repair, Orange County IT, home computer repair, network setup, computer training, technology solutions';
	$description = "LatinosPC offers on-site and remote computer repair services in Pomona, CA, serving LA, San Bernardino, Riverside, and Orange counties. Founded in 2021, personalized IT solutions provided to homes and small businesses with a 90-day service guarantee and 100% satisfaction commitment.";
	include __DIR__ . '/../../about.php';
}

function acerca(){
    global $page, $keywords, $description;
	$page = new Structure('../', 'español', 'Acerca');
	$keywords = 'reparación de computadoras Pomona, servicio de computadoras a domicilio, soporte técnico remoto, reparación de laptops, reparación de PC, técnico de computadoras Los Ángeles, reparación de computadoras Inland Empire, TI para pequeñas empresas, desarrollo web, servicios de computación San Bernardino, reparación de computadoras Riverside, soporte técnico Orange County, reparación de computadoras en casa, configuración de redes, capacitación en computación, soluciones tecnológicas';
	$description = "LatinosPC ofrece servicios de reparación de computadoras a domicilio y de forma remota en Pomona, CA, cubriendo los condados de LA, San Bernardino, Riverside y Orange. Fundada en 2021, brindamos soluciones de TI personalizadas para hogares y pequeñas empresas con una garantía de servicio de 90 días y 100% de satisfacción.";
	include __DIR__ . '/../../about.php';
}
?>