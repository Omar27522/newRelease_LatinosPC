<?php
function cssStyles(){
  global $page;
  $dir = isset($page) && method_exists($page, 'getDir') ? $page->getDir() : '';
  ?>
  <link rel="stylesheet" href="<?= $dir ?>_JesusChrist/styles/_Apostles.css">
  <?php
}
function apostles()   {
  global $titles, $names, $subTitles, $adicionalNames, $_Jesus;
  $titles = [
    'From the Greek apostolos; Apostle is someone who is sent, or one commissioned.',
    'In Hebrews 3: "Jesus Our Apostle and High Priest',
    'The Twelve Original Apostles',
    'Additional Apostles',
    '📖 Additional Apostles in Scripture',
    'Name(s)',
    'Reference(s)',
    '🧮 Total Count'
  ];
  $names = [
    '<a href="?peter">Simon Peter</a> and <a href="?andrew">Andrew</a> (Sons of Jonah) <a href="https://en.wikipedia.org/wiki/Bethsaida#New_Testament"title="Wikipedia">Bethsaida</a>',
    '<a href="?james">James</a> and <a href="?john">John</a> (Sons of Zebedee)',
    '<a href="?philip">Philip</a> and <a href="?bartholomew">Bartholomew</a>',
    '<a href="?thomas">Thomas</a> and <a href="?matthew">Matthew</a>',
    '<a href="?little_james">James (son of Alphaeus)</a>',
    '<a href="?thaddaeus">Thaddaeus</a>',
    '<a href="?simon">Simon the Zealot</a>',
    '<a href="?judas">Judas Iscariot</a>',
    '<a href="?matthias">Matthias (replaced Judas)</a>',
    '<a href="?paul">Paul (Apostle to the Gentiles)</a>',
  ];
  $subTitles = [
    'Let’s start counting. Yes, there were the twelve chosen by Jesus (see Acts 1:13). Judas Iscariot, who betrayed Jesus, was replaced by Matthias (Acts 1:26). Revelation 21:14 confirms “the twelve apostles of the Lamb.” Counting both Judas and Matthias brings us to',
    '13 apostles',
    'But it doesn’t end there. Ephesians 4:11–13 speaks of ascension-gift apostles given by Christ',
    'until we all attain to the unity of the faith.',
    'That implies the apostolic ministry continues today.',
    'Including everyone listed—even debated figures like Junia—we arrive at a total of',
    '25 apostles',
    'named in the New Testament.'
  ];
  $adicionalNames = [
    ['<a href="https://www.catholic.com/qa/james-lords-brother-galatians-118-19"title="https://www.catholic.com">James</a> (Jesus’ brother)', 'Galatians 1:19'],
    ['Barnabas', 'Acts 14:14'],
    ['Paul', 'Acts 14:14, etc.'],
    ['Apollos', '1 Corinthians 4:6–9'],
    ['Timothy & Silvanus', '1 Thessalonians 1:1; 2:6'],
    ['Epaphroditus', 'Philippians 2:25'],
    ['Two unnamed brothers', '2 Corinthians 8:23'],
    ['Andronicus & Junia (disputed)', 'Romans 16:7'],
    ['Jesus Christ', 'Hebrews 3:1'],
  ];

  $_Jesus = '“Jesus, the Apostle and High Priest of our confession.” – Hebrews 3:1';
  content();
}

function apostoles()  {
  global $titulos, $nombres, $subTitulos, $nombresAdicionales, $_Jesus;
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
    ['Santiago (hermano de Jesús)', 'Gálatas 1:19'],
    ['Bernabé', 'Hechos 14:14'],
    ['Pablo', 'Hechos 14:14, etc.'],
    ['Apolos', '1 Corintios 4:6–9'],
    ['Timoteo y Silvano', '1 Tesalonicenses 1:1; 2:6'],
    ['Epafrodito', 'Filipenses 2:25'],
    ['Dos hermanos sin nombre', '2 Corintios 8:23'],
    ['Andrónico y Junia (disputado)', 'Romanos 16:7'],
    ['Jesucristo', 'Hebreos 3:1'],
  ];
  $_Jesus = '"Jesús, el Apóstol y Sumo Sacerdote de nuestra confesión." – Hebreos 3:1';
  content();
}

function peterApostle()    {
    include 'peter_the_apostle_temp.php';
}

function andrewApostle()    {
    echo'ANDREW JOHN 1:39
                39 He said to them, “Come and see.”
  They came and saw where he was staying, and they stayed with him that day. It was about the tenth hour.† 40 One of the two who heard John and followed him was Andrew, Simon Peter’s brother. 41 He first found his own brother, Simon, and said to him, “We have found the Messiah!” (which is, being interpreted, Christ‡). 42 He brought him to Jesus. Jesus looked at him and said, “You are Simon the son of Jonah. You shall be called Cephas” (which is by interpretation, Peter).§
  ';
}

function paulApostle () {
  include 'paul_the_apostle_temp.php';
}

function content()    {
    global $titles, $names, $subTitles, $adicionalNames, $_Jesus;
    global $titulos, $nombres, $subTitulos, $nombresAdicionales, $_Jesus;
    if (isset($_GET['peter'])):
      peterApostle();
  elseif (isset($_GET['andrew'])):
      andrewApostle();
      echo "<section class=\"fullbar\">Andrew</section>";
  elseif (isset($_GET['james'])):
      echo "<section class=\"fullbar\">James</section>";
  elseif (isset($_GET['john'])):
      echo "<section class=\"fullbar\">John</section>";
  elseif (isset($_GET['philip'])):
      echo "<section class=\"fullbar\">Philip</section>";
  elseif (isset($_GET['bartholomew'])):
      echo "<section class=\"fullbar\">Bartholomew</section>";
  elseif (isset($_GET['thomas'])):
      echo "<section class=\"fullbar\">Thomas</section>";//https://en.wikipedia.org/wiki/Caravaggio#/media/File:The_Incredulity_of_Saint_Thomas-Caravaggio_(1601-2).jpg
  elseif (isset($_GET['matthew'])):
      echo "<section class=\"fullbar\">Matthew</section>";
  elseif (isset($_GET['little_james'])):
      echo "<section class=\"fullbar\">James (son of Alphaeus)</section>";
  elseif (isset($_GET['thaddaeus'])):
      echo "<section class=\"fullbar\">Thaddaeus</section>";
  elseif (isset($_GET['simon'])):
      echo "<section class=\"fullbar\">Simon the Zealot</section>";
  elseif (isset($_GET['judas'])):
      echo "<section class=\"fullbar\">Judas Iscariot</section>";
  elseif (isset($_GET['matthias'])):
      echo "<section class=\"fullbar\">Matthias (replaced Judas)</section>";
  elseif (isset($_GET['paul'])):
    paulApostle ();
  else:

  ?>

  <div class="fullbar">
    <nav class="crumbs">
      <div class="bread-crumbs">
        <a href="./#^" class="crumb-link">Jesus Christ</a>
        <a href="#^" class="crumb-link"><b>Apostles</b></a>
      </div>
    </nav>
    <div class="apostles-intro" id="^">
      <h2><?= empty($titles) ? $titulos[0] : $titles[0]; ?></h2>
      <h3><?= empty($titles) ? $titulos[1] : $titles[1]; ?></h3>
    </div>

    <div class="apostles-lists">
      <div class="apostles-list">
        <h3><?= empty($titles) ? $titulos[2] : $titles[2]; ?></h3>
        <ul>
          <li><?= empty($names) ? $nombres[0] : $names[0]; ?></li>
          <li><?= empty($names) ? $nombres[1] : $names[1]; ?></li>
            <li><?= empty($names) ? $nombres[2] : $names[2]; ?></li>
            <li><?= empty($names) ? $nombres[3] : $names[3]; ?></li>
            <li><?= empty($names) ? $nombres[4] : $names[4]; ?></li>
            <li><?= empty($names) ? $nombres[5] : $names[5]; ?></li>
            <li><?= empty($names) ? $nombres[6] : $names[6]; ?></li>
            <li><?= empty($names) ? $nombres[7] : $names[7]; ?></li>
        </ul>
    </div>

    <div class="apostles-list">
        <h3><?= empty($titles) ? $titulos[3] : $titles[3]; ?></h3>
        <ul>
            <li><?= empty($names) ? $nombres[8] : $names[8]; ?></li>
            <li><?= empty($names) ? $nombres[9] : $names[9]; ?></li>
        </ul>
    </div>
  </div>
  </div>


  <div class="fullbar">

    <p><?= empty($titles) ? $subTitulos[0] : $subTitles[0]; ?>
      <span class="highlight-number" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); "><?= empty($titles) ? $subTitulos[1] : $subTitles[1]; ?></span>.</p>

    <p><?= empty($titles) ? $subTitulos[2] : $subTitles[2]; ?> <em>“<?= empty($titles) ? $subTitulos[3] : $subTitles[3]; ?>”</em> <?= empty($titles) ? $subTitulos[4] : $subTitles[4]; ?></p>

    <h2><?= empty($titles) ? $titulos[4] : $titles[4]; ?></h2>
    <table>
      <tr><th><?= empty($titles) ? $titulos[5] : $titles[5]; ?></th><th><?= empty($titles) ? $titulos[6] : $titles[6]; ?></th></tr>
      <tr><td><?= empty($adicionalNames) ? $nombresAdicionales[0][0] : $adicionalNames[0][0]; ?></td><td><?= empty($adicionalNames) ? $nombresAdicionales[0][1] : $adicionalNames[0][1]; ?></td></tr>
      <tr><td><?= empty($adicionalNames) ? $nombresAdicionales[1][0] : $adicionalNames[1][0]; ?></td><td><?= empty($adicionalNames) ? $nombresAdicionales[1][1] : $adicionalNames[1][1]; ?></td></tr>
      <tr><td><?= empty($adicionalNames) ? $nombresAdicionales[2][0] : $adicionalNames[2][0]; ?></td><td><?= empty($adicionalNames) ? $nombresAdicionales[2][1] : $adicionalNames[2][1]; ?></td></tr>
      <tr><td><?= empty($adicionalNames) ? $nombresAdicionales[3][0] : $adicionalNames[3][0]; ?></td><td><?= empty($adicionalNames) ? $nombresAdicionales[3][1] : $adicionalNames[3][1]; ?></td></tr>
      <tr><td><?= empty($adicionalNames) ? $nombresAdicionales[4][0] : $adicionalNames[4][0]; ?></td><td><?= empty($adicionalNames) ? $nombresAdicionales[4][1] : $adicionalNames[4][1]; ?></td></tr>
      <tr><td><?= empty($adicionalNames) ? $nombresAdicionales[5][0] : $adicionalNames[5][0]; ?></td><td><?= empty($adicionalNames) ? $nombresAdicionales[5][1] : $adicionalNames[5][1]; ?></td></tr>
      <tr><td><?= empty($adicionalNames) ? $nombresAdicionales[6][0] : $adicionalNames[6][0]; ?></td><td><?= empty($adicionalNames) ? $nombresAdicionales[6][1] : $adicionalNames[6][1]; ?></td></tr>
      <tr><td><?= empty($adicionalNames) ? $nombresAdicionales[7][0] : $adicionalNames[7][0]; ?></td><td><?= empty($adicionalNames) ? $nombresAdicionales[7][1] : $adicionalNames[7][1]; ?></td></tr>
      <tr><td><?= empty($adicionalNames) ? $nombresAdicionales[8][0] : $adicionalNames[8][0]; ?></td><td><?= empty($adicionalNames) ? $nombresAdicionales[8][1] : $adicionalNames[8][1]; ?></td></tr>
    </table>

    <p class="verse"><?php echo $_Jesus; ?></p>

    <div class="total-count">
      <h2><?= empty($titles) ? $titulos[7] : $titles[7]; ?></h2>
      <p><?= empty($titles) ? $subTitulos[5] : $subTitles[5]; ?> <span class="highlight-number"><?= empty($titles) ? $subTitulos[6] : $subTitles[6]; ?></span> <?= empty($titles) ? $subTitulos[7] : $subTitles[7]; ?></p>
    </div>
    possible born in places:
    <br />
    Andrew Peter and Philip were born in Bethsaida<br />
    James, John, and Matthew were born in Capernaum also little James<br />
    Nathanael was born in Cana<br />
    Simon the Zealot was born in Gamla, or Cana<br />
    Judas Iscariot was born in Kerioth 1,2<br />
    Thadeus was born in Korazin<br />
    Thomas was born in Arbel<br />
    Matthias was born in Jerusalem
  </div>
  <?php
  endif;
}

include './anvil/structure.php';
?>