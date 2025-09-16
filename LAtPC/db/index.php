
<html>
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Database Test</title>
    <meta name="keywords" content="<?=$keywords?>">
    <meta name="description" content="<?=$description?>">
    <link rel="stylesheet" href="../anvil/mainStyle.css">

</head>
<body class="fullbar">
<h1>Database Test</h1>
Last Update: 09/13/2025
<?php
// Basically I will crate a database that will retrieve data and out put it from the database
    /*
    echo "Hola Mundo";

    $title = "Image 1";


    $img = "https://latinospc.com/images/websites/webcontent/8.jpg";
    */

    // PDO (PHP Data Objects) --> This PHP function Creates/Opens a database
$pdo = new PDO('sqlite:mydatabase.db');    #             If I change the name of the database file, I'm guessing it will create a new database file.


// Set error mode to exceptions (good practice)
    // I'm not really sure what this error does but I guess is good practice.
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// This block will cerate a table if it doesn't exist, if it does exist, it will do nothing.
    //      Im guessing that this can be deleted in production once the database is setup and ready to be deployed.
        //      I think I will use this like a file that will populate the database first. Then I will deploy the database, and then just have the fetcher do the work on LIVE.
            //      I need to work on the Schema for the table. My original idea is to create a new table per page:

                    /*
                    Table   - Jesus Christ
                            - Father_in_heaven_tell_me_about_the_web
                            - Apostles
                            - Parables
                            - Sermons
                            - Teachings

                            - Padre_en_el_cielo_dime_sobre_la_web
                            - Enviados {Apóstoles}
                            - Parabolas
                            - Sermones
                            - Adiestramientos {Enseñanzas}

                            but the relational approach is a much clearer than many isolated tables.
                                - how to approach moving your site’s content into SQLite.odt -
                    */



/*
    once the table is Created this is not needed. We can modify the table if needed.
$pdo->exec("CREATE TABLE IF NOT EXISTS images (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT,
    image TEXT
)");
*/



/* Sections Table Created and 1 value inserted
$pdo->exec("CREATE TABLE IF NOT EXISTS sections (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT
)");
$stmt = $pdo->prepare("INSERT INTO sections (name) VALUES (?)");
$stmt->execute(["Jesus Christ"]);
$stmt->execute(["Services"]);
$stmt->execute(["Security"]);
$stmt->execute(["Hardware"]);
$stmt->execute(["Software"]);
$stmt->execute(["About Us"]);
$stmt->execute(["Reviews"]);
$stmt->execute(["Tutorials"]);
$stmt->execute(["Blogs"]);
*/

/*
$pdo->exec("CREATE TABLE IF NOT EXISTS pages (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    section_id INTEGER,
    name TEXT,
    FOREIGN KEY (section_id) REFERENCES sections(id)
)");

// Example: get Jesus Christ's section id
$section_id = $pdo->query("SELECT id FROM sections WHERE name = 'Jesus Christ'")
                  ->fetchColumn();

// Insert a page under that section
$stmt = $pdo->prepare("INSERT INTO pages (section_id, name) VALUES (?, ?)");
$stmt->execute([$section_id, "Apostles"]);
$stmt->execute([$section_id, "Parables"]);
$stmt->execute([$section_id, "Sermons"]);
$stmt->execute([$section_id, "Heavenly Father"]);
$stmt->execute([$section_id, "Teachings"]);


DELETE DUPLICATES  I messed up, and inserted a duplicate, but now that I deleted it there is no id 2.
    Im sure there is a way to shift the IDs if one is deleted. for now this is good.
$stmt = $pdo->prepare("DELETE FROM sections WHERE id = ?");
$stmt->execute([2]);
*/




// This block will insert a row into the table.
    //      Im guessing that this can be deleted in production once the database is setup and ready to be deployed.

// This Statement is very powerful, because once the database inserts teh data, every refresh if the statement is left will insert duplicate data.
#$stmt = $pdo->prepare("INSERT INTO images (name, image) VALUES (?, ?)");
#$stmt->execute(["Image 01", "https://latinospc.com/images/websites/webcontent/1.jpg"]);


//This is the data fetcher. This is what liveCode will run.


$stmt = $pdo->query("SELECT * FROM images");
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);


$stmt = $pdo->query("SELECT * FROM sections");
$sections = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->query("SELECT * FROM pages");
$pages = $stmt->fetchAll(PDO::FETCH_ASSOC);

//add, update and delete can be added later. but I believe that the database will have to be prepared prior to testing.
?>

<h2><?php foreach ($images as $image) {
echo ($image['name']);
}
 ?></h2><?php foreach ($images as $image) {?>
<img src="<?php echo $image['image']; ?>" alt="<?php echo $image['name']; ?>"width="100">
<?php } ?>

<h2 style="padding-left: 20px;"><?php echo"These are the Sections<br />";
    foreach ($sections as $section) {
    echo ($section['name'])."<br />";
    }
 ?></h2>

<h2><?php echo"These are the Pages in ". $sections[0]['name']."<br />";
    foreach ($pages as $page) {
    echo ($page['name']."<br />");
    }
 ?></h2>

<?php echo "<hr><h3>Section IDs</h3>";
foreach ($pdo->query("SELECT id, name FROM sections") as $row) {
    echo $row['id'] . " - " . $row['name'] . "<br />";
}
?>

</body>
</html>