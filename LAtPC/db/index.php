<html>

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Database Test</title>
        <meta name="keywords" content="<?= $keywords ?>">
        <meta name="description" content="<?= $description ?>">
        <link rel="stylesheet" href="../anvil/mainStyle.css">
        <link rel="stylesheet" href="../anvil/homepage.css">
        <style>
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--dialog-background);
            padding-top: 20px;
        }

        .fullbar {
            color: var(--background);
            box-shadow: var(--box-shadow);
        }

        h1 {
            text-align: center;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 3%;
        }

        .sections {
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            padding-left: 2rem;
            border-bottom: 1px solid var(--bannerAndFooter-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            background-color: var(--dialog-text-highlight);
            color: var(--primary-dark);
        }

        .pages {
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid var(--bannerAndFooter-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            background-color: var(--card-bg);
            color: var(--primary-dark);
            padding-left: 3rem;
        }

        .debugInfo {
            background: var(--primary-dark);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid var(--secondary-dark);
        }

        pre {
            overflow-x: auto;
            max-width: 100%;
            white-space: nowrap;
            word-wrap: nowrap;
            word-break: keep-all;
            font-size: 22px;
            padding: 10px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            background-color: var(--card-bg);
            color: var(--primary-dark);
            margin: 10px 0;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            isolation: isolate;
            will-change: transform;
            pointer-events: auto;
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            padding-top: 20px;
        }

        hr {
            border: 1px solid var(--secondary-dark);
            margin: 1rem 0;
        }
        </style>
    </head>

<body class="fullbar">
    <header>
        <a href="#" class="phone">
            909-276-7214
        </a>
        <a href="#sections"><span class="dbLink">Sections</span></a>
        <div class="logo" style="float:none;">
            <div class="logos"><a href="../"><span>LAt</span>inos<span>PC</span>.com</a>
                <small class="rtl">SQLlite
                </small>
            </div>
        </div>
    </header>
    <?php
// THE DATABASE FILE

/*
 * This file is a test file for the database.
 *  It will display the tables and information stored in the database.
 *
 * $title = "home_File";
 *
 *
 */
// PDO (PHP Data Objects) --> This PHP function Creates/Opens a database
$pdo = new PDO('sqlite:mydatabase.db');  //             If I change the name of the database file, I'm guessing it will create a new database file.

// Set error mode to exceptions (good practice)
// I'm not really sure what this error does but I guess is good practice.
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// This block will cerate a table if it doesn't exist, if it does exist, it will do nothing.
//      Im guessing that this can be deleted in production once the database is setup and ready to be deployed.
//      I think I will use this like a file that will populate the database first. Then I will deploy the database, and then just have the fetcher do the work on LIVE.
//      I need to work on the Schema for the table. My original idea is to create a new table per page:

/*
 * Table   - Jesus Christ
 *         - Father_in_heaven_tell_me_about_the_web
 *         - Apostles
 *         - Parables
 *         - Sermons
 *         - Teachings
 *
 *         - Padre_en_el_cielo_dime_sobre_la_web
 *         - Enviados {Apóstoles}
 *         - Parabolas
 *         - Sermones
 *         - Adiestramientos {Enseñanzas}
 *
 *         but the relational approach is a much clearer than many isolated tables.
 *             - how to approach moving your site’s content into SQLite.odt -
 */

/*
 * once the table is Created this is not needed. We can modify the table if needed.
 * $pdo->exec("CREATE TABLE IF NOT EXISTS images (
 *     id INTEGER PRIMARY KEY AUTOINCREMENT,
 *     name TEXT,
 *     image TEXT
 * )");
 */

/*
 * Sections Table Created and 1 value inserted
 * $pdo->exec("CREATE TABLE IF NOT EXISTS sections (
 *     id INTEGER PRIMARY KEY AUTOINCREMENT,
 *     name TEXT
 * )");
 * $stmt = $pdo->prepare("INSERT INTO sections (name) VALUES (?)");
 * $stmt->execute(["Jesus Christ"]);
 * $stmt->execute(["Services"]);
 * $stmt->execute(["Security"]);
 * $stmt->execute(["Hardware"]);
 * $stmt->execute(["Software"]);
 * $stmt->execute(["About Us"]);
 * $stmt->execute(["Reviews"]);
 * $stmt->execute(["Tutorials"]);
 * $stmt->execute(["Blogs"]);
 */

/*
 * $pdo->exec("CREATE TABLE IF NOT EXISTS pages (
 *     id INTEGER PRIMARY KEY AUTOINCREMENT,
 *     section_id INTEGER,
 *     name TEXT,
 *     FOREIGN KEY (section_id) REFERENCES sections(id)
 * )");
 *
 * // Example: get Jesus Christ's section id
 * $section_id = $pdo->query("SELECT id FROM sections WHERE name = 'Jesus Christ'")
 *                   ->fetchColumn();
 *
 * // Insert a page under that section
 * $stmt = $pdo->prepare("INSERT INTO pages (section_id, name) VALUES (?, ?)");
 * $stmt->execute([$section_id, "Apostles"]);
 * $stmt->execute([$section_id, "Parables"]);
 * $stmt->execute([$section_id, "Sermons"]);
 * $stmt->execute([$section_id, "Heavenly Father"]);
 * $stmt->execute([$section_id, "Teachings"]);
 *
 *
 * DELETE DUPLICATES  I messed up, and inserted a duplicate, but now that I deleted it there is no id 2.
 *     Im sure there is a way to shift the IDs if one is deleted. for now this is good.
 * $stmt = $pdo->prepare("DELETE FROM content WHERE id = ? ??");
 * $stmt->execute([1]);
 */

// This block will insert a row into the table.
//      Im guessing that this can be deleted in production once the database is setup and ready to be deployed.

// This Statement is very powerful, because once the database inserts teh data, every refresh if the statement is left will insert duplicate data.
// $stmt = $pdo->prepare("INSERT INTO images (name, image) VALUES (?, ?)");
// $stmt->execute(["Image 01", "https://latinospc.com/images/websites/webcontent/1.jpg"]);

// This is the data fetcher. This is what liveCode will run.

/*
//We will create a new Table for Content

$pdo->exec("CREATE TABLE IF NOT EXISTS content (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    page_id INTEGER,
    name TEXT,
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (page_id) REFERENCES pages(id)
)");

Then We will add our first array to the first element


$stmt = $pdo->prepare("INSERT INTO content (page_id, name, content) VALUES (?, ?, ?)");
$stmt->execute(["home", "headings", "Jesus Christ"]);

$stmt->execute(["home", "dialogs", "Most accept that Jesus was truly a man who lived in Israel 2,000 years ago."]);
$stmt->execute(["home", "dialogs", "What do we really know about Jesus? Explore his life and teachings and form your own valid experience."]);

$stmt = $pdo->prepare("INSERT INTO content (page_id, name, content) VALUES (?, ?, ?)");
$stmt->execute(["home", "headings", "Services"]);
*/


$stmt = $pdo->query('SELECT * FROM images');
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->query('SELECT * FROM sections');
$sections = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->query('SELECT * FROM pages');
$pages = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->query('SELECT * FROM content');
		$content = $stmt->fetchAll(PDO::FETCH_ASSOC);


       // $stmt = $pdo->prepare("DELETE FROM content WHERE id = ?");
       //$stmt->execute([6]);

// add, update and delete can be added later. but I believe that the database will have to be prepared prior to testing.
?>

    <h1><?php echo ucfirst($pages[5]['name']) #DB Title?></h1>
    Last Update: 09/21/2025
    <div class="container">
        <!--<img src="https://latinospc.com/images/websites/webcontent/1.jpg" alt="Image 1">-->

        <h2><?php
foreach ($images as $image) {
    echo ($image['name']);
}
?></h2><?php foreach ($images as $image) { ?>
        <img src="<?php echo $image['image']; ?>" alt="<?php echo $image['name']; ?>" width="10%" height="10%">
        <?php } ?>


        <hr>





        <section class="homepage-grid ">
            <div class="grid-item">
                <h3 id="sections">These are the Sections</h3>
                <?php
foreach ($sections as $section) {
    // Create a link to the section using its ID
    echo '<a href="#' . $section['name'] . '" style="color: var(--primary-dark); text-decoration: none;" class="cta-button">' .
         $section['name'] . '</a><br />';
}
echo '</div><div class="grid-item"><h3>These are the Pages</h3>';
foreach ($pages as $page) {
    // Create a link to the section using its ID
    echo '<a href="#' . $page['name'] . '" style="color: var(--primary-dark); text-decoration: none;" class="cta-button">' .
         $page['name']."<span style=\"float:right; padding-right:30%\"> | " .$sections[0]['name']  . '</a><br />';
}

echo '</div><div class="grid-item"><h3>These are the Content</h3>';
foreach ($content as $contents) {
    // Create a link to the section using its ID
    echo '<a href="#' . $contents['name'] . $contents['content'] . '" style="color: var(--primary-dark); text-decoration: none;" class="cta-button">' .
         $contents['name']."<span style=\"float:right; flex-wrap: wrap; padding-right:30%\">". $contents['content'] . " | " . $pages[5]['name'] . '</a><br />';
}
?>

        </div>
    </section>
        </h2>










        <?php
        // Debug information between sections and Jesus Christ section
        echo '<div class="debugInfo">';


        echo '<h3>Sections ID:</h3> <strong>';
        foreach ($sections as $section) {
            echo $section['id'] . ' - ' . $section['name'] . '<br>';
        }

        echo '</strong>';


        echo '<h3>Debug Information</h3>';
        echo 'Total sections: ' . count($sections) . '<br>';
        echo 'Sections array: <pre>' . print_r($sections, true) . '</pre>';

        echo 'Total pages: ' . count($pages) . '<br>';
        echo 'Pages array: <pre>' . print_r($pages, true) . '</pre>';
        
        

        echo 'Total content: ' . count($content) . '<br>';
        echo 'Content array: <pre>' . print_r($content, true) . '</pre>';
        
        echo '</div>';
        ?>










        <h2 id="Jesus Christ" class="pages" data-name="Jesus Christ"><?php
echo 'Pages in ' . $sections[0]['name'] . '<br />';
foreach ($pages as $page) {
    // Create a link to the section using its ID
    echo '<a href="#' . $page['name'] . '" style="color: var(--primary-dark); text-decoration: none;" class="cta-button">' .
         $page['name'] . '</a><br />';
}
?></h2>


<section id="home">
    <h2>Home</h2>
    <p>Home content</p>


  
   <table border="1">
    <tr>
        <th>Array Number</th>
        <th>ID</th>
        <th>Page ID</th>
        <th>Name</th>
        <th>Content</th>
    </tr>
    <?php
    foreach ($content as $index => $contents) {
        echo '<tr>
        <td>' . $index .'</td>
        <!--<td>Index: ' . $index . ' | Keys: ' . implode(', ', array_keys($contents)). '</td>-->
        ';
        //print_r($contents);
        echo '<td>' . htmlspecialchars($contents['id']) . '</td>';
        echo '<td>' . htmlspecialchars($contents['page_id']) . '</td>';
        echo '<td>' . htmlspecialchars($contents['name']) . '</td>';
        echo '<td>' . htmlspecialchars($contents['content']) . '</td>';
        echo '</tr>';
    }
    ?>
</table>
</section>

        <?php
echo '<hr><h3>Section IDs</h3>';
foreach ($pdo->query('SELECT id, name FROM sections') as $row) {
    echo $row['id'] . ' - ' . $row['name'] . '<br />';
}

echo '<hr><h3>Section: ' . $sections[0]['name'] . '</h3>';
foreach ($pdo->query('SELECT id, name FROM pages') as $row) {
    echo $row['id'] . ' - ' . $row['name'] . '<br />';
}
?>
    </div>
    <h2><big><?php echo $contents['content'] ?></big></h2>
</body>

</html>