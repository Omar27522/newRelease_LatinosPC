<?php
$page = new Structure('../../', 'español', 'Los Apóstoles');
$keywords = 'Keyword_test';
$description = 'Description_test';

function apostoles()
{
    $titulos = [
        'Del griego apostolos; Apóstol es alguien que es enviado, o uno comisionado.',
        'En Hebreos 3: "Jesús Nuestro Apóstol y Sumo Sacerdote',
        'Los Doce Apóstoles Originales',
        'Apóstoles Adicionales',
        '📖 Apóstoles Adicionales en las Escrituras',
        'Nombre(s)',
        'Referencia(s)',
        '🧮 Conteo Total'
    ];
    $nombres = [
        'Simón Pedro y Andrés (Hijos de Jonás)',
        'Santiago y Juan (Hijos de Zebedeo)',
        'Felipe y Bartolomé',
        'Tomás y Mateo',
        'Santiago (hijo de Alfeo)',
        'Tadeo',
        'Simón el Zelote',
        'Judas Iscariote',
        'Matías (reemplazó a Judas)',
        'Pablo (Apóstol de los Gentiles)',
    ];
    $subTitulos = [
        'Comencemos a contar. Sí, hubo los doce elegidos por Jesús (véase Hechos 1:13). Judas Iscariote, quien traicionó a Jesús, fue reemplazado por Matías (Hechos 1:26). Apocalipsis 21:14 confirma "los doce apóstoles del Cordero." Contando tanto a Judas como a Matías nos lleva a',
        '13 apóstoles',
        'Pero no termina ahí. Efesios 4:11–13 habla de apóstoles como dones de ascensión dados por Cristo',
        'hasta que todos alcancemos la unidad de la fe.',
        'Eso implica que el ministerio apostólico continúa hoy.',
        'Incluyendo a todos los mencionados—incluso figuras debatidas como Junia—llegamos a un total de',
        '25 apóstoles',
        'nombrados en el Nuevo Testamento.'
    ];
    $nombresAdicionales = [
        ['Santiago (hermano de Jesús)','Gálatas 1:19'],
        ['Bernabé','Hechos 14:14'],
        ['Pablo','Hechos 14:14, etc.'],
        ['Apolos','1 Corintios 4:6–9'],
        ['Timoteo y Silvano','1 Tesalonicenses 1:1; 2:6'],
        ['Epafrodito','Filipenses 2:25'],
        ['Dos hermanos sin nombre','2 Corintios 8:23'],
        ['Andrónico y Junia (disputado)','Romanos 16:7'],
        ['Jesucristo','Hebreos 3:1'],
    ];
    $_Jesus='"Jesús, el Apóstol y Sumo Sacerdote de nuestra confesión." – Hebreos 3:1';
    include ('content_Apostles.php');
}

include ('./anvil/structure.php');
?>