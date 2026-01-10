<?php
function cssStyles(){
  ?>
  <style>
     /*.container {
      padding: .25rem 2rem .3rem;
    margin: 0 auto;
    position: relative;
    max-width: 1200px;
    }*/

    h1, h2 {
      color: var(--primary-dark);
      margin-bottom: 1rem;
    }

    h1 {
      text-align: center;
      font-size: 2.2rem;
      margin-bottom: 1.5rem;
      border-bottom: 3px solid var(--secondary-dark);
      padding-bottom: 0.5rem;
    }

    h2 {
      font-size: 1.5rem;
      margin-top: 2rem;
    }

    .apostles-intro {
      background: linear-gradient(127deg,var(--secondary-dark), var(--primary-dark));
      border-radius: 15px;
      padding: 2rem;
      margin: 2rem 0;
      color: white;
      text-align: center;
      box-shadow: var(--box-shadow);
    }

    .apostles-intro h2 {
      color: white;
      margin-bottom: 1rem;
      font-size: 1.3rem;
    }

    .apostles-lists {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2rem;
      margin: 2rem 0;
    }

    .apostles-list {
      background: var(--background);
      border-radius: var(--border-radius);
      padding: 1.5rem;
      box-shadow: var(--box-shadow);
    }

    .apostles-list h3 {
      color: var(--primary-color);
      margin-bottom: 1rem;
      text-align: center;
      font-size: 1.2rem;
    }

    .apostles-list ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .apostles-list li {
      background: white;
      margin: 0.5rem 0;
      padding: 0.8rem 1rem;
      border-radius: 8px;
      border-left: 4px solid var(--light-text);
      box-shadow: var(--box-shadow);
      transition: transform 0.2s ease;
    }

    .apostles-list li:hover {
      transform: translateX(5px);
    }

    p {
      line-height: 1.6;
      margin: 1.2rem 0;
      text-align: justify;
    }

    blockquote {
      border-left: 4px solid var(--light-text);
      padding-left: 1em;
      margin: 1.5em 0;
      font-style: italic;
      background: var(--background);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 2rem 0;
      background: var(--background);
      border-radius: var(--border-radius);
      overflow: hidden;
      box-shadow: var(--box-shadow);
    }

    th, td {
      padding: 1rem;
      text-align: left;
      border-bottom: 1px solid var(--dialog-text-highlight);
    }

    th {
      background: linear-gradient(135deg,#0275d8, var(--primary-dark));
      color: white;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    tr:hover {
      background-color: var(--card-bg);
    }

    .verse {
      font-style: italic;
      color: var(--light-text);
      margin: 1.5rem 0;
      padding: 1rem;
      background: var(--background);
      border-left: 4px solid var(--secondary-dark);
      border-radius: var(--border-radius);
      text-align: center;
      font-size: 1.1rem;
    }

    .total-count {
      background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
      color: white;
      padding: 2rem;
      border-radius: var(--border-radius);
      text-align: center;
      margin: 2rem 0;
      box-shadow: var(--box-shadow);
    }

    .total-count h2 {
      color: white;
      margin-bottom: 1rem;
    }

    .total-count p {
      font-size: 1.2rem;
      margin: 0;
    }

    .highlight-number {
      color: var(--dialog-text-highlight);
      font-weight: bold;
      font-size: 1.3em;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .container {
        padding: .25rem;
        margin: 0 .1rem;
      }

      .apostles-lists {
        grid-template-columns: 1fr;
        gap: 1rem;
      }

      h1 {
        font-size: 1.8rem;
      }

      th, td {
        padding: 0.7rem 0.5rem;
        font-size: 0.9rem;
      }
    }
  </style><?php
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
    '<a href="?peter">Simon Peter</a> and <a href="?andrew">Andrew</a> (Sons of Jonah)',
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

function content()    {
  global $titles, $names, $subTitles, $adicionalNames, $_Jesus;
  global $titulos, $nombres, $subTitulos, $nombresAdicionales, $_Jesus;
  if (isset($_GET['peter'])):
    echo "<section class=\"fullbar\">Simon Peter</section>";
elseif (isset($_GET['andrew'])):
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
    echo "<section class=\"fullbar\">Thomas</section>";
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
    echo "<section class=\"fullbar\">Paul (Apostle to the Gentiles)</section>";
else:

  ?>
  
  <div class="fullbar">
    <div class="apostles-intro">
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
  </div>
  <?php
endif;
}

include './anvil/structure.php';
?>