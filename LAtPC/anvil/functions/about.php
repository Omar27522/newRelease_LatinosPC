<?php
function about(){
	$page = new Structure('../', 'english', 'About');
	$keywords = 'computer repair Pomona, on-site computer service, remote IT support, laptop repair, desktop repair, computer technician Los Angeles, PC repair Inland Empire, small business IT, web development, computer services San Bernardino, Riverside computer repair, Orange County IT, home computer repair, network setup, computer training, technology solutions';
	$description = "LatinosPC offers on-site and remote computer repair services in Pomona, CA, serving LA, San Bernardino, Riverside, and Orange counties. Founded in 2021, personalized IT solutions provided to homes and small businesses with a 90-day service guarantee and 100% satisfaction commitment.";
	include __DIR__ . '/../../about.php';
}