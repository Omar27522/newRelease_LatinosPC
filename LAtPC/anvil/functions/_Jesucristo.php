<?php

function _Jesucristo($sub_route){
	switch ($sub_route) {
		case 'padre_celestial_cuentame_sobre_el_internet':
			$page = new Structure('../../', 'español', 'Padre Celestial');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/_HeavenlyFather.php';
			break;

		case 'apostoles':
			$page = new Structure('../../', 'español', 'Los Apóstoles');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/_Apostles.php';
			break;

		case 'parabolas':
			$page = new Structure('../../', 'español', 'Parabolas');
			$keywords = 'Palabras Clave de Parabolas';
			$description = 'Descripción de Parabolas';
			include '_JesusChrist/parables.php';
			break;

		case 'sermones':
			$page = new Structure('../../', 'español', 'Sermones');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/sermons.php';
			break;

		case 'enseñanzas':
			$page = new Structure('../../', 'español', 'Enseñanzas');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/teachings.php';
			break;

		case '':
			$page = new Structure('../../', 'español', 'Jesucristo');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			echo 'Hola!';
			break;

		default:
			show404();
			break;
	}
}
?>