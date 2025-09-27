<?php

$pdo = new PDO('sqlite:mydatabasess.db');  //             If I change the name of the database file, I'm guessing it will create a new database file.

// Set error mode to exceptions (good practice)
// I'm not really sure what this error does but I guess is good practice.
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



/*

$pdo->exec("CREATE TABLE IF NOT EXISTS homeEnglish (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    page_id INTEGER,
    name TEXT,
    content TEXT, --Jesus Christ
    content TEXT, --About Us
    content TEXT, --Services
    content TEXT, --Security
    content TEXT, --Hardware
    content TEXT, --Software
    content TEXT, --Tutorials
    content TEXT, --Blogs
    homelink TEXT,    --Tell me about the web
    tellmeaboutweb TEXT,  --Tell me about the web
    homelink TEXT,   --Apostles
    apostles TEXT, --Apostles
    homelink TEXT,   --Parables
    parables TEXT, --Parables
    homelink TEXT,   --Sermons
    homebutton TEXT, --Sermons
    homelink TEXT,   --Teachings
    homebutton TEXT, --Teachings
    aboutParagraph TEXT,
    aboutParagraph TEXT,
    aboutParagraph TEXT,
    aboutlink TEXT, --About Us
    aboutbutton TEXT, --visit Page
    serviceslink TEXT, --Cleanups
    servicesbutton TEXT,
    serviceslink TEXT, --Computer Protection
    servicesbutton TEXT,
    serviceslink TEXT, ----Consultations
    servicesbutton TEXT,
    serviceslink TEXT, --Managed Services
    servicesbutton TEXT,
    serviceslink TEXT, --Remote Support
    servicesbutton TEXT,
    serviceslink TEXT, --Websites
    servicesbutton TEXT,
    securitylink TEXT, --Best Practices
    securitybutton TEXT,
    securitylink TEXT, --Data Backup
    securitybutton TEXT,
    securitylink TEXT, --Passwords
    securitybutton TEXT,
    hardwarelink TEXT, --CPU
    hardwarebutton TEXT,
    hardwarelink TEXT, --Storage
    hardwarebutton TEXT,
    hardwarelink TEXT, --Power Supply Unit
    hardwarebutton TEXT,
    hardwarelink TEXT, --Input
    hardwarebutton TEXT,
    hardwarelink TEXT, --Output
    hardwarebutton TEXT,
    hardwarelink TEXT, --Parts
    hardwarebutton TEXT,
    preripheralsandgear TEXT,
    preripheralsandgearlink TEXT,
    preripheralsandgearbutton TEXT,
    softwarelink TEXT, --Antivirus
    softwarebutton TEXT,
    softwarelink TEXT, --Malware Cleaner
    softwarebutton TEXT,
    softwarelink TEXT, --Web Browser
    softwarebutton TEXT,
    softwarelink TEXT, --Messaging
    softwarebutton TEXT,
    softwarelink TEXT, --Media
    softwarebutton TEXT,
    softwarelink TEXT, --Runtimes
    softwarebutton TEXT,
    softwarelink TEXT, --imaging
    softwarebutton TEXT,
    softwarelink TEXT, --Documents
    softwarebutton TEXT,
    softwarelink TEXT, --File Sharing
    softwarebutton TEXT,
    softwarelink TEXT, --Online Storage
    softwarebutton TEXT,
    softwarelink TEXT, --Other
    softwarebutton TEXT,
    softwarelink TEXT, --Utilities
    softwarebutton TEXT,
    softwarelink TEXT, --Compression
    softwarebutton TEXT,
    softwarelink TEXT, --Developer Tools
    softwarebutton TEXT,
    tutorials TEXT,
    tutorialslink TEXT,
    tutorialsbutton TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (page_id) REFERENCES pages(id)
)");


$stmt = $pdo->prepare("INSERT INTO homeEnglish (page_id,
name,
content, homeLink, tellMeAboutWeb, apostlesLink, apostles,
parablesLink, parables,
sermonsLink, sermons,
teachingsLink, teachings,
homebutton,
homebutton,
aboutParagraph,
aboutlink,
aboutbutton,
serviceslink,
servicesbutton,
securitylink,
securitybutton,
hardwarelink,
hardwarebutton,
preripheralsandgear,
preripheralsandgearlink,
preripheralsandgearbutton,
softwarelink,
softwarebutton,
tutorials,
tutorialslink,
tutorialsbutton)

VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([1, "home", "Jesus Christ", "/father_in_heaven_tell_me_about_web", "Tell me about the web", "Apostles","Parables",
"Sermons", "Teachings", "we want to bring families and individuals, the experience of a fully working computer system; laptops and desktops.", "/about", "Visit Page", "/cleanups", "Cleanups", "/security-best-practices", "Best Practices", "/cpu", "CPU", "Peripherals and gear for your computer setup", "/peripherals", "View Peripherals", "/antivirus", "Antivirus", "Computer tutorials and guides", "/tutorials", "View Tutorials"]);
*/

/*
$stmt = $pdo->query('SELECT * FROM homeEnglish ');
$homeEnglish = $stmt->fetchAll(PDO::FETCH_ASSOC);
*/




?>