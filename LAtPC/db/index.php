
<html>
<head>
<title>Database Test</title>
</head>
<body>
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

$pdo->exec("CREATE TABLE IF NOT EXISTS images (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT,
    image TEXT
)");


// This block will insert a row into the table.
    //      Im guessing that this can be deleted in production once the database is setup and ready to be deployed.
$stmt = $pdo->prepare("INSERT INTO images (name, image) VALUES (?, ?)");
$stmt->execute(["Image 1", "https://latinospc.com/images/websites/webcontent/8.jpg"]);


//This is the data fetcher. This is what liveCode will run.
$stmt = $pdo->query("SELECT * FROM images");
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);

//add, update and delete can be added later. but I believe that the database will have to be prepared prior to testing.
?>

<h2><?php echo $images[0]['name']; ?></h2>
<img src="<?php echo $images[0]['image']; ?>" alt="<?php echo $images[0]['name']; ?>">

</body>
</html>