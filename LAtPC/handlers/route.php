<?php
#echo "DEBUG: Route = '" . $route . "'<br>";
#echo $path_info;
// Route handling
switch ($main_route) {
	case '':
	case 'index.php':
		// Show homepage - continue to HTML below
		break;
	case 'español':
		// Show Spanish content and exit
		showSpanishContent();
		exit;  // Important: stop execution here
		break;

	case 'about':
		about();
		exit;
		break;

	case 'acerca':
		acerca();
		exit;
		break;

	case 'offered_services':
		offered_services($sub_route);
		exit;
		break;

	case 'servicios':
		servicios($sub_route);
		exit;
		break;

	case 'offered_security':
		offered_security($sub_route);
		exit;
		break;

	case 'seguridad':
		seguridad_subninistrable($sub_route);
		exit;
		break;

	case 'hardware_options':
		hardware_options($sub_route);
		exit;
		break;

	case 'software_options':
		software_options($sub_route);
		exit;
		break;

	case 'tutorials':
		tutorial();
		exit;
		break;

	case 'Template':
		fullPageTemplate();
		exit;
		break;

	case 'JesusChrist':
		_JesusChrist($sub_route);
		exit;
		break;

	case 'Jesucristo':
		_Jesucristo($sub_route);
		exit;
		break;
	default:
		// 404 page and exit
		show404();
		exit;
		break;
}
?>