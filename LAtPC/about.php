<?php
function cssStyles()
{
?><style>
.fullbar {
    padding-bottom: 2%;
}

h1 {
    font-size: 3.5rem;
    font-weight: 800;
    background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 0.5rem;
    letter-spacing: -0.02em;
}

/* Secondary headings with a subtle bottom border */
h2 {
    font-size: 2rem;
    border-bottom: 2px solid var(--bannerAndFooter-bg);
    padding-bottom: 10px;
    margin-top: 2rem;
    color: var(--primary-dark);
}

h3 {
    margin-top: 1rem;
    font-size: 1.25rem;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--dialog-background);
}

/* Turning your list into interactive "cards" */
ul {
    list-style: none;
    padding: 0;
}

li {
    background: #f3eceaff;
    margin-bottom: 12px;
    padding: 16px 24px;
    border-radius: 12px;
    border: 1px solid #1a3f73ff;
    transition: all 0.3s ease;
    cursor: pointer;
}

/* Using <b> as a neon accent color */
b {
    color: var(--primary-color);
    font-weight: 600;
    text-shadow: 0 0 10px rgba(56, 189, 248, 0.3);
}
</style>
<?php
}

function content_about()
{
  /* DATABASE CONNECTION */
  try {
    $dbPath = __DIR__ . '/db/laTpc.db';
    $pdo = new PDO('sqlite:' . $dbPath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if content table exists
    $tableExists = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='content'")->fetch();

    global $content;
    if ($tableExists) {
      $stmt = $pdo->query('SELECT * FROM content WHERE page_id = "about"');  // each page has its own page_id wich is represnted by a table on the SQLite Connection file.
      $content = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  } catch (PDOException $e) {
    // Log error and continue without database content
    error_log('Database Error: ' . $e->getMessage());
    $content = [];
  }

  global $page;  // this is the page object brought in from initial load. It contains the language and other page information. DIR: handlers/classStructure.php
  $key = ['en' => 'content', 'es-419' => 'contenido'][$page->getLang()] ?? 'content';
  global $content;  // Depending on the page Language, this will be either 'content' or 'contenido', the database will load acordingly.

  if (isset($_GET['omar'])) {
?>
<article class="fullbar" ;>
  <h1><?= $content[0][$key]; ?></h1>
  <section>
    <h2><?= $content[1][$key]; ?></h2>
    <p><?= $content[2][$key]; ?></p>
    <h3><?= $content[3][$key]; ?></h3>
    <ul style="columns:3; margin-bottom:1rem; "> <?= $content[4][$key]; ?> </ul> <?= $content[5][$key]; ?>
  </section>
  <section> <?= $content[6][$key]; ?> </section>
  <aside>
    <h3><?= $content[9][$key] ?> <a href="<?= $content[7][$key] ?>"><?= $content[8][$key] ?></a> <?= $content[10][$key] ?></h3>
    <p> <?= $content[11][$key] ?> </p>
  </aside>
</article>
<?php
  } else {
?>
<article class="fullbar" ;>
    <h1><?= $content[12][$key] ?></h1><?= $content[13][$key] ?>
</article>
<?php
  }
}

include './anvil/structure.php';

?>