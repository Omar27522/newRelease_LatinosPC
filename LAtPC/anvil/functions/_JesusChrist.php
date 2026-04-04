<?php
function _JesusChrist($sub_route){
	switch ($sub_route) {
		case 'father_in_heaven_tell_me_about_web':
			$page = new Structure('../../', 'english', 'Heavenly Father');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/_HeavenlyFather.php';
			break;


		case 'apostles':
			$apostles = [
			    'peter'         => 'Peter',
			    'andrew'        => 'Andrew',
			    'james'         => 'James',
			    'john'          => 'John',
			    'philip'        => 'Philip',
			    'bartholomew'   => 'Bartholomew',
			    'thomas'        => 'Thomas',
			    'matthew'       => 'Matthew',
			    'little_james'  => 'James',
			    'thaddeus'      => 'Thaddeus',
			    'simon'         => 'Simon',
			    'judas'         => 'Judas',
			    'matthias'      => 'Matthias',
			    'paul'          => 'Paul'
			];

			$selected = null;

			// Find which GET key is present
			foreach ($apostles as $key => $name) {
			    if (isset($_GET[$key])) {
			        $selected = $name;
			    break;
			}
		}
		// Default title if none matched
		$title = $selected ? "Apostles: $selected" : "The Apostles";
		$page = new Structure('../../', 'english', $title);
		if (isset($_GET['peter'])) {
			$keywords = 'Apostle Peter, Saint Peter, Peter the Apostle, Life of Peter, Peter in the Bible, Peter in the New Testament, 1 Peter, 2 Peter, Council of Jerusalem, Peter’s martyrdom, Peter in Rome, Successor of Peter, Papacy origins, Peter Catholic teaching, Early Church history, Peter crucified upside down, Peter’s legacy, St. Peter’s Basilica, Peter’s ministry, Peter’s final journey, Biography of the Apostle Peter, Catholic teaching about Saint Peter';
			$description = 'A complete, easy-to-understand guide to the Apostle Peter—his calling by Jesus, leadership in the early Church, role at the Council of Jerusalem, New Testament writings, missionary work, and martyrdom in Rome. Includes biblical references, early Christian sources, and Catholic-aligned explanations of Peter’s lasting legacy and connection to the modern Church.';
		} else{
			$keywords = 'Keyword_test';
			$description = 'Description_test';
		}
		include '_JesusChrist/_Apostles.php';
		break;

		case 'parables':
			$page = new Structure('../../', 'english', 'Parables');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/parables.php';
			break;

		case 'sermons':
			$page = new Structure('../../', 'english', 'Sermons');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/sermons.php';
			break;

		case 'teachings':
			if (isset($_GET['John'])) {
				$page = new Structure('../../', 'english', 'Teachings: John');
				$keywords = 'Keyword_test';
				$description = 'Description_test';
				include '_JesusChrist/teachings.php';
			} else {
				$page = new Structure('../../', 'english', 'Teachings');
				$keywords = 'Keyword_test';
				$description = 'Description_test';
				include '_JesusChrist/teachings.php';
			}
			break;

		case '':
			$page = new Structure('../../', 'english', 'Jesus Christ');
			$keywords = 'Keyword_test';
			$description = 'Description_test';
			include '_JesusChrist/_TheBelovedSon.php';
			break;

		default:
			show404();
			break;
	}
}
?>