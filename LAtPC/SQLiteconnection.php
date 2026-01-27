<html>

<head>
    <title>SQLite Connection</title>
    <style>
    article {
        padding: 1rem 2rem 3rem;
        margin: 0 auto;
        position: relative;
        max-width: 1200px;
    }

    figure {
        padding-left: 10%;
    }

    figcaption {
        text-align: center;
        padding-right: 10%;
    }

    figcaption a {
        text-decoration: none;
        font-size: 2em;
        color: white;
        background-color: black;
        margin-top: 2%;
        padding-right: 2%;
        padding-left: 2%;
    }

    figcaption a:hover {
        text-decoration: underline;
        color: royalblue;
    }

    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f4;
    }

    h1 {
        color: #333;
        text-align: center;
    }

    table {
        background-color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        font-size: 15px;
        border: none;
        margin: 20px auto;
        width: 95%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    th {
        background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%);
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 18px 16px;
        font-size: 13px;
        border: none;
        text-align: left;
    }

    td {
        padding: 16px;
        border-bottom: 1px solid #eee;
        vertical-align: top;
        line-height: 1.6;
    }

    tr:nth-child(even) {
        background-color: #fafbfc;
    }

    tr:hover {
        background-color: #f0f7ff;
        transition: background-color 0.2s ease;
    }

    tr:last-child td {
        border-bottom: none;
    }

    /* Column width adjustments for better readability */
    th:nth-child(1),
    td:nth-child(1) {
        width: 5%;
    }

    /* Array Number */
    th:nth-child(2),
    td:nth-child(2) {
        width: 7%;
    }

    /* ID */
    th:nth-child(3),
    td:nth-child(3) {
        width: 10%;
    }

    /* Page ID */
    th:nth-child(4),
    td:nth-child(4) {
        width: 15%;
    }

    /* Name */
    th:nth-child(5),
    td:nth-child(5) {
        width: 13%;
    }

    /* Section */
    th:nth-child(6),
    td:nth-child(6) {
        width: 50%;
    }

    /* Content */

    /* Style for the first column (Array Number) */
    td:first-child {
        font-weight: bold;
        color: #4a90e2;
        text-align: center;
        background-color: rgba(74, 144, 226, 0.08);
        font-size: 14px;
    }

    /* Style for ID column */
    td:nth-child(2) {
        font-weight: 600;
        color: #666;
        text-align: center;
        font-size: 14px;
    }

    /* Style for Page ID column */
    td:nth-child(3) {
        font-weight: 600;
        color: #2c3e50;
        background-color: rgba(44, 62, 80, 0.05);
    }

    /* Style for Name column */
    td:nth-child(4) {
        font-weight: 500;
        color: #27ae60;
    }

    /* Style for Section column */
    td:nth-child(5) {
        color: #8e44ad;
        font-weight: 500;
        font-size: 14px;
    }

    /* Style for content column - most important for readability */
    td:last-child {
        word-wrap: break-word;
        line-height: 1.7;
        color: #2c3e50;
        font-size: 14px;
        padding-right: 20px;
    }
    </style>
</head>

<body>
    <h1>SQLite Connection</h1>


    <!-- Simple Search Form -->
    <form method="get" action="" style="max-width: 1200px; margin: 10px auto; display: flex; gap: 8px;">
        <input type="text" name="q"
            value="<?= isset($_GET['q']) ? htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8') : '' ?>"
            placeholder="Search content, name, section, or page_id..."
            style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px;" />
        <button type="submit"
            style="padding: 10px 16px; border: none; background: #357abd; color: #fff; border-radius: 6px; cursor: pointer;">Search</button>
    </form>


    <?php
// **************************** Content Home Page ****************************
// Insert Content in the Content Table

/*
 * page_id:home
 * name: the name of the content I have to create better naming for this content "name"
 * content: The actual content for the page.
 */

/* DATABASE CONNECTION */
try {
    $dbPath = __DIR__ . '/db/.db';
    $pdo = new PDO('sqlite:' . $dbPath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if content table exists
    $tableExists = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='content'")->fetch();

    if ($tableExists) {
        $stmt = $pdo->query('SELECT * FROM content WHERE page_id="home"');
        $content = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (PDOException $e) {
    // Log error and continue without database content
    error_log('Database Error: ' . $e->getMessage());
    $content = [];
}

// Search Results Section
if (isset($_GET['q']) && is_string($_GET['q'])) {
    $q = trim($_GET['q']);
    echo '<section style="max-width: 1200px; margin: 10px auto;">';
    echo '<h2 style="color:#333;">Search Results</h2>';

    if ($q === '') {
        echo '<p>Please type a keyword to search.</p>';
        echo '</section>';
    } else if (!empty($tableExists)) {
        try {
            $like = '%' . $q . '%';
            $stmt = $pdo->prepare('SELECT id, page_id, name, section, content FROM content 
                                   WHERE content LIKE :q OR name LIKE :q OR section LIKE :q OR page_id LIKE :q
                                   ORDER BY page_id, name, id LIMIT 200');
            $stmt->execute([':q' => $like]);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$rows) {
                echo '<p>No results for <strong>' . htmlspecialchars($q, ENT_QUOTES, 'UTF-8') . '</strong>.</p>';
            } else {
                echo '<p>Found ' . count($rows) . ' result(s) for <strong>' . htmlspecialchars($q, ENT_QUOTES, 'UTF-8') . '</strong>.</p>';
                echo '<table cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">';
                echo '<thead><tr style="background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%); color: #fff;">';
                echo '<th style="text-align:left; padding: 12px;">ID</th><th style="text-align:left; padding: 12px;">Page</th><th style="text-align:left; padding: 12px;">Name</th><th style="text-align:left; padding: 12px;">Section</th><th style="text-align:left; padding: 12px;">Content Snippet</th>';
                echo '</tr></thead><tbody>';

                foreach ($rows as $r) {
                    $text = (string)$r['content'];
                    $snippet = $text;
                    if (mb_strlen($text) > 180) {
                        $pos = mb_stripos($text, $q);
                        if ($pos === false) { $pos = 0; }
                        $start = max(0, $pos - 60);
                        $snippet = '...' . trim(mb_substr($text, $start, 180)) . '...';
                    }

                    echo '<tr style="border-bottom:1px solid #eee;">';
                    echo '<td style="padding:12px;">' . htmlspecialchars((string)$r['id']) . '</td>';
                    echo '<td style="padding:12px;">' . htmlspecialchars((string)$r['page_id']) . '</td>';
                    echo '<td style="padding:12px;">' . htmlspecialchars((string)$r['name']) . '</td>';
                    echo '<td style="padding:12px;">' . htmlspecialchars((string)$r['section']) . '</td>';
                    echo '<td style="padding:12px;">' . htmlspecialchars($snippet) . '</td>';
                    echo '</tr>';
                }

                echo '</tbody></table>';
            }
        } catch (PDOException $e) {
            error_log('Search DB Error: ' . $e->getMessage());
            echo '<p>There was a problem searching. Please try again later.</p>';
        }

        echo '</section>';
    }
}

/*
 * $pdo->exec("CREATE TABLE IF NOT EXISTS pages (
 *              id INTEGER PRIMARY KEY AUTOINCREMENT,
 *              name TEXT
 *          )");
 *
 *
 * $pdo->exec("CREATE TABLE IF NOT EXISTS content (
 *                 id INTEGER PRIMARY KEY AUTOINCREMENT,
 *                 page_id TEXT,
 *                 name TEXT,
 *                 section TEXT,
 *                 content TEXT,
 *                 FOREIGN KEY (page_id) REFERENCES pages(name)
 *             )");
 *
 * $stmt = $pdo->prepare("INSERT INTO pages (name) VALUES (?)");
 * $stmt->execute(["home"]);
 */
// $pdo->exec("DROP TABLE content");

// Update content by ID
//$stmt = $pdo->prepare("UPDATE content SET content = ? WHERE id = ?");
//$stmt->execute(["About Us", 13]); // Replace 1 with your actual ID

//$stmt = $pdo->prepare("DELETE FROM content WHERE id = ?");
//$stmt->execute([13]); // Delete record with ID 13






// Display content in HTML table
if (!empty($content)) {
    echo '<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; margin-top: 20px;">';
    echo '<thead>';
    echo '<tr style="background-color: #f2f2f2;">';
    echo '<th>Array Number</th>';
    echo '<th>ID</th>';
    echo '<th>Page ID</th>';
    echo '<th>Name</th>';
    echo '<th>Section</th>';
    echo '<th>Content</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($content as $index => $row) {
        echo '<tr>';
        echo '<td>' . $index . '</td>';
        echo '<td>' . htmlspecialchars($row['id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['page_id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['name']) . '</td>';
        echo '<td>' . htmlspecialchars($row['section']) . '</td>';
        echo '<td>' . htmlspecialchars($row['content']) . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo '<p>No content found in the database.</p>';
}


//HERE IS THE SECOND TABLE FOR THE SPANISH CONTENT
if ($tableExists) {
    $stmt = $pdo->query('SELECT * FROM content WHERE page_id="inicio"');
    $content = $stmt->fetchAll(PDO::FETCH_ASSOC);
}



echo 'Content: ' . $content[0]['content'] . '!!!';
echo '<br />';
echo 'Content: ' . $content[13]['content'] . '!!!';


// Display content in HTML table
if (!empty($content)) {
    echo '<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; margin-top: 20px;">';
    echo '<thead>';
    echo '<tr style="background-color: #f2f2f2;">';
    echo '<th>Array Number</th>';
    echo '<th>ID</th>';
    echo '<th>Page ID</th>';
    echo '<th>Name</th>';
    echo '<th>Section</th>';
    echo '<th>Content</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($content as $index => $row) {
        echo '<tr>';
        echo '<td>' . $index . '</td>';
        echo '<td>' . htmlspecialchars($row['id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['page_id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['name']) . '</td>';
        echo '<td>' . htmlspecialchars($row['section']) . '</td>';
        echo '<td>' . htmlspecialchars($row['content']) . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo '<p>No content found in the database.</p>';
}
/*
 * $stmt = $pdo->prepare("INSERT INTO content (page_id, name, section, content) VALUES (?, ?, ?, ?)");
 *
 *
 *
 *
 * $stmt->execute(["home", "heading", "JesusChrist", "Jesus Christ"]);
 * $stmt->execute(["home", "JesusChrist", "dialog", "Most accept that Jesus was truly a man who lived in Israel 2,000 years ago."]);
 * $stmt->execute(["home", "JesusChrist", "dialog", "What do we really know about Jesus? Explore his life and teachings and form your own valid experience."]);
 * $stmt->execute(["home", "JesusChrist", "button", "Tell me about the web"]);
 * $stmt->execute(["home", "JesusChrist", "button", "Apostles"]);
 * $stmt->execute(["home", "JesusChrist", "button", "Parables"]);
 * $stmt->execute(["home", "JesusChrist", "button", "Sermons"]);
 * $stmt->execute(["home", "JesusChrist", "button", "Teachings"]);
 * $stmt->execute(["home", "JesusChrist", "link", "JesusChrist/father_in_heaven_tell_me_about_web"]);
 * $stmt->execute(["home", "JesusChrist", "link", "JesusChrist/apostles"]);
 * $stmt->execute(["home", "JesusChrist", "link", "JesusChrist/parables"]);
 * $stmt->execute(["home", "JesusChrist", "link", "JesusChrist/sermons"]);
 * $stmt->execute(["home", "JesusChrist", "link", "JesusChrist/teachings"]);
 *
 *
 * $stmt->execute(["home", "heading", "about", "About Us"]);
 * $stmt->execute(["home", "about", "dialog", "Our goal is to provide you and your company with outstanding service."]);
 * $stmt->execute(["home", "about", "dialog", "We're dedicated to enhancing your experience through effective marketing, customer-friendly retention strategies, and maintaining top-notch quality control."]);
 * $stmt->execute(["home", "about", "dialog", "We started back in 2009 with one technician; Omar, we have one goal."]);
 * $stmt->execute(["home", "about", "paragraph", "we want to bring families and individuals, the experience of a fully working computer system; laptops and desktops."]);
 * $stmt->execute(["home", "about", "paragraph", "100% Satisfaction Guarantee | 90 Days Service Package -included"]);
 * $stmt->execute(["home", "about", "paragraph", "We are located in the city of Pomona, and will travel to LA county, SB county, RV county and OC."]);
 * $stmt->execute(["home", "about", "button", "Visit Us"]);
 * $stmt->execute(["home", "about", "link", "/about"]);
 *
 *
 * $stmt->execute(["home", "heading", "services", "Services"]);
 * $stmt->execute(["home", "services", "dialog", "We mostly work with individuals, Students, Small-Medium Businesses, #Gamers!, and Professionals."]);
 * $stmt->execute(["home", "services", "dialog", "Repairs and Service for Home and Office; any type-spec."]);
 * $stmt->execute(["home", "services", "dialog", "90 day service guarantee. Computers run smoother, faster and perform better."]);
 * $stmt->execute(["home", "services", "button", "Cleanups"]);
 * $stmt->execute(["home", "services", "button", "Computer Protection"]);
 * $stmt->execute(["home", "services", "button", "Consultations"]);
 * $stmt->execute(["home", "services", "button", "Managed Services"]);
 * $stmt->execute(["home", "services", "button", "Websites"]);
 * $stmt->execute(["home", "services", "button", "Remote Support"]);
 * $stmt->execute(["home", "services", "link", "/services/websites"]);
 * $stmt->execute(["home", "services", "link", "/services/consultations"]);
 * $stmt->execute(["home", "services", "link", "/services/managed_services"]);
 * $stmt->execute(["home", "services", "link", "/services/remote_support"]);
 * $stmt->execute(["home", "services", "link", "/services/computer_protection"]);
 *
 *
 * $stmt->execute(["home", "heading", "security", "Security"]);
 * $stmt->execute(["home", "security", "dialog", "Think of your computer as a virtual treasure chest filled with your important stuff – photos, documents, and more. Computer protection is like a shield against troublemakers like viruses and hackers."]);
 * $stmt->execute(["home", "security", "button", "Best Practices"]);
 * $stmt->execute(["home", "security", "button", "Backups"]);
 * $stmt->execute(["home", "security", "button", "Passwords"]);
 *
 *
 * $stmt->execute(["home", "heading", "tutorials", "Tutorials"]);
 * $stmt->execute(["home", "heading", "blogs", "Blogs"]);
 * $stmt->execute(["home", "tutorials", "dialog", "This section is all about the tutorials and blog posts that we have on our website. We have a wide range of topics that we cover, from computer hardware and software to internet security and more."]);
 * $stmt->execute(["home", "tutorials", "paragraph", "Visit our tutorials and blog page for more information"]);
 * $stmt->execute(["home", "tutorials", "button", "Visit Page"]);
 *
 *
 *
 * $stmt->execute(["home", "heading", "hardware", "Hardware"]);
 * $stmt->execute(["home", "hardware", "dialog", "A computer is an electronic device that manipulates data or information. It has the ability to store,retrieve, and process data."]);
 * $stmt->execute(["home", "hardware", "dialog", "The Hardware is the computer — it's physical components."]);
 * $stmt->execute(["home", "hardware", "dialog", "These components may include the computer's functionality, design, materials, innovations, thermals, etc."]);
 * $stmt->execute(["home", "hardware", "button", "CPU"]);
 * $stmt->execute(["home", "hardware", "button", "Storage"]);
 * $stmt->execute(["home", "hardware", "button", "Power Supply Unit"]);
 * $stmt->execute(["home", "hardware", "button", "Input"]);
 * $stmt->execute(["home", "hardware", "button", "Output"]);
 * $stmt->execute(["home", "hardware", "button", "Parts"]);
 * $stmt->execute(["home", "headings", "Peripherals and Gear"]);
 * $stmt->execute(["home", "peripheralsAndGear", "dialog", "Peripherals and gear are the additional components that help you use your computer."]);
 * $stmt->execute(["home", "peripheralsAndGear", "dialog", "These include desks, chairs, computer mats, lights, clothing, and other stuff that are unrelated to the computer itself, but are very useful to have."]);
 * $stmt->execute(["home", "peripheralsAndGear", "paragraph", "Visit our computer peripherals and gear for more information"]);
 *
 *
 * $stmt->execute(["home", "heading", "software", "Software"]);
 * $stmt->execute(["home", "software", "dialog", "Commonly known as computer programs or apps, these are the instructions for the computer’s tasks"]);
 * $stmt->execute(["home", "software", "button", "Anti-Virus"]);
 * $stmt->execute(["home", "software", "button", "Malware Cleaner"]);
 * $stmt->execute(["home", "software", "button", "Web Browsers"]);
 * $stmt->execute(["home", "software", "button", "Messaging"]);
 * $stmt->execute(["home", "software", "button", "Media"]);
 * $stmt->execute(["home", "software", "button", "Runtimes"]);
 * $stmt->execute(["home", "software", "button", "Imaging"]);
 * $stmt->execute(["home", "software", "button", "Documents"]);
 * $stmt->execute(["home", "software", "button", "File Sharing"]);
 * $stmt->execute(["home", "software", "button", "Online Storage"]);
 * $stmt->execute(["home", "software", "button", "Other"]);
 * $stmt->execute(["home", "software", "button", "Utilities"]);
 * $stmt->execute(["home", "software", "button", "Compression"]);
 * $stmt->execute(["home", "software", "button", "Developer Tools"]);
 *
 *
 * // Spanish version - append after English content
 *
 * // Jesucristo section
 * $stmt->execute(["inicio", "encabezado", "Jesucristo", "Jesucristo"]);
 * $stmt->execute(["inicio", "Jesucristo", "dialog", "La mayoría acepta que Jesús fue verdaderamente un hombre que vivió en Israel hace 2,000 años."]);
 * $stmt->execute(["inicio", "Jesucristo", "dialog", "¿Qué sabemos realmente acerca de Jesús? Explora su vida y enseñanzas y forma tu propio criterio."]);
 * $stmt->execute(["inicio", "Jesucristo", "button", "Háblame de la web"]);
 * $stmt->execute(["inicio", "Jesucristo", "button", "Apóstoles"]);
 * $stmt->execute(["inicio", "Jesucristo", "button", "Parábolas"]);
 * $stmt->execute(["inicio", "Jesucristo", "button", "Sermones"]);
 * $stmt->execute(["inicio", "Jesucristo", "button", "Enseñanzas"]);
 * $stmt->execute(["inicio", "Jesucristo", "link", "Jesucristo/padre_celestial_cuentame_sobre_el_internet"]);
 * $stmt->execute(["inicio", "Jesucristo", "link", "Jesucristo/apostoles"]);
 * $stmt->execute(["inicio", "Jesucristo", "link", "Jesucristo/parabolas"]);
 * $stmt->execute(["inicio", "Jesucristo", "link", "Jesucristo/sermones"]);
 * $stmt->execute(["inicio", "Jesucristo", "link", "Jesucristo/enseñanzas"]);
 *
 * // Acerca de Nosotros (About Us) section
 * $stmt->execute(["inicio", "encabezado", "acerca", "Acerca de Nosotros"]);
 * $stmt->execute(["inicio", "acerca", "dialog", "Empezamos en 2009 con un técnico; Omar, tenemos un objetivo."]);
 * $stmt->execute(["inicio", "acerca", "dialog", "Objetivo numero uno es, proporcionarte a ti y a tu empresa un servicio excepcional."]);
 * $stmt->execute(["inicio", "acerca", "dialog", "Nos dedicamos a mejorar tu experiencia a través de estrategias de mercadotecnia efectivas, estrategias de retención al cliente y también al mantener un control de calidad excepcional."]);
 * $stmt->execute(["inicio", "acerca", "paragraph", "Queremos traer a las familias y a las personas, la experiencia de un sistema computacional completamente funcional; laptops y desktops."]);
 * $stmt->execute(["inicio", "acerca", "paragraph", "Satisfacción 100% Garantizada | Paquete de servicio de 90 días - incluido"]);
 * $stmt->execute(["inicio", "acerca", "paragraph", "Estamos ubicados en la ciudad de Pomona, y viajaremos a el condado de LA, condado de SB, condado de RV y OC."]);
 * $stmt->execute(["inicio", "acerca", "button", "Visita la Pagina"]);
 * $stmt->execute(["inicio", "acerca", "link", "/acerca"]);
 *
 * // Servicios (Services) section
 * $stmt->execute(["inicio", "encabezado", "servicios", "Servicios"]);
 * $stmt->execute(["inicio", "servicios", "dialog", "Nos dedicamos a trabajar con gente, estudiantes, pequeñas y medianas empresas, #Gamers!, y profesionales."]);
 * $stmt->execute(["inicio", "servicios", "dialog", "Reparaciones y servicios para casa y oficina; computadoras de cualquier tipo y especificación."]);
 * $stmt->execute(["inicio", "servicios", "dialog", "Garantía de servicio de 90 días. Las computadoras funcionan más agradablemente, más rápidas y se mejora el rendimiento."]);
 * $stmt->execute(["inicio", "servicios", "button", "Limpiezas"]);
 * $stmt->execute(["inicio", "servicios", "button", "Protección de computadoras"]);
 * $stmt->execute(["inicio", "servicios", "button", "Consultas"]);
 * $stmt->execute(["inicio", "servicios", "button", "Servicios gestionados"]);
 * $stmt->execute(["inicio", "servicios", "button", "Sitios web"]);
 * $stmt->execute(["inicio", "servicios", "button", "Soporte remoto"]);
 * $stmt->execute(["inicio", "servicios", "link", "/servicios/sitios_web"]);
 * $stmt->execute(["inicio", "servicios", "link", "/servicios/consultas"]);
 * $stmt->execute(["inicio", "servicios", "link", "/servicios/servicios_gestionados"]);
 * $stmt->execute(["inicio", "servicios", "link", "/servicios/soporte_remoto"]);
 * $stmt->execute(["inicio", "servicios", "link", "/servicios/proteccion_computadoras"]);
 *
 * // Seguridad (Security) section
 * $stmt->execute(["inicio", "encabezado", "seguridad", "Seguridad"]);
 * $stmt->execute(["inicio", "seguridad", "dialog", "Piensa en tu computadora como tu tesoro virtual llena de tus cosas más importantes – fotos, documentos, y más. La protección de la computadora es como una escudo contra lo malo, como virus y hackers."]);
 * $stmt->execute(["inicio", "seguridad", "button", "Las Mejores Prácticas"]);
 * $stmt->execute(["inicio", "seguridad", "button", "Respaldos"]);
 * $stmt->execute(["inicio", "seguridad", "button", "Contraseñas"]);
 *
 * // Tutoriales / Blog section
 * $stmt->execute(["inicio", "encabezado", "tutoriales", "Tutoriales"]);
 * $stmt->execute(["inicio", "encabezado", "blogs", "Blog"]);
 * $stmt->execute(["inicio", "tutoriales", "dialog", "Esta sección es sobre los tutoriales y publicaciones del blog que tenemos en nuestro sitio web. Tenemos una amplia gama de temas que cubrimos, desde hardware y software de computadoras hasta seguridad en internet y más."]);
 * $stmt->execute(["inicio", "tutoriales", "paragraph", "Visita nuestra página de tutoriales y blog para más información"]);
 * $stmt->execute(["inicio", "tutoriales", "button", "Visita la Pagina"]);
 *
 * // Hardware section
 * $stmt->execute(["inicio", "encabezado", "hardware", "Hardware"]);
 * $stmt->execute(["inicio", "hardware", "dialog", "Una computadora es un dispositivo electrónico que manipula datos y/o información. Tiene la habilidad de almacenar, recuperar y procesar datos."]);
 * $stmt->execute(["inicio", "hardware", "dialog", "El Hardware es la computadora en sí — los componentes físicos."]);
 * $stmt->execute(["inicio", "hardware", "dialog", "Estos componentes pueden incluir la funcionalidad, el diseño, los materiales, las innovaciones, la gestión térmica, etc."]);
 * $stmt->execute(["inicio", "hardware", "button", "CPU"]);
 * $stmt->execute(["inicio", "hardware", "button", "Almacenamiento"]);
 * $stmt->execute(["inicio", "hardware", "button", "Fuente de Alimentación"]);
 * $stmt->execute(["inicio", "hardware", "button", "Entrada"]);
 * $stmt->execute(["inicio", "hardware", "button", "Salida"]);
 * $stmt->execute(["inicio", "hardware", "button", "Partes"]);
 *
 * // Periféricos y equipo (Peripherals and Gear) section
 * $stmt->execute(["inicio", "encabezados", "Periféricos y equipo"]);
 * $stmt->execute(["inicio", "equipo", "dialog", "Los periféricos y equipo son los componentes adicionales que ayudan al rendimiento, comodidad y estética de el equipo completo."]);
 * $stmt->execute(["inicio", "equipo", "dialog", "Estos incluyen mesas, sillas, tapetes de computadora, luces, ropa, y otros cosas que no están relacionadas con la computadora misma, pero son muy útiles tener."]);
 * $stmt->execute(["inicio", "equipo", "paragraph", "Visita nuestra página de periféricos y equipo para más información"]);
 *
 * // Software section
 * $stmt->execute(["inicio", "encabezado", "software", "Software"]);
 * $stmt->execute(["inicio", "software", "dialog", "Conocido comúnmente como programas o aplicaciones, estos son las instrucciones de tareas para la computadora."]);
 * $stmt->execute(["inicio", "software", "button", "Anti-Virus"]);
 * $stmt->execute(["inicio", "software", "button", "Limpieza de malware"]);
 * $stmt->execute(["inicio", "software", "button", "Navegadores"]);
 * $stmt->execute(["inicio", "software", "button", "Mensajería"]);
 * $stmt->execute(["inicio", "software", "button", "Multimedia"]);
 * $stmt->execute(["inicio", "software", "button", "Runtimes"]);
 * $stmt->execute(["inicio", "software", "button", "Imágenes"]);
 * $stmt->execute(["inicio", "software", "button", "Documentos"]);
 * $stmt->execute(["inicio", "software", "button", "Compartir archivos"]);
 * $stmt->execute(["inicio", "software", "button", "Almacenamiento en línea"]);
 * $stmt->execute(["inicio", "software", "button", "Otros"]);
 * $stmt->execute(["inicio", "software", "button", "Utilidades"]);
 * $stmt->execute(["inicio", "software", "button", "Compresión"]);
 * $stmt->execute(["inicio", "software", "button", "Herramientas para el Desarrollo"]);
 */

/*
 * *********-*-*-*-*-NOTES-*-*-*-*-**********
 *
 * This is just a stream of conscience about what is going on, or what I am realizing about the page.
 *         First It looks like the content schema has been found. I guess for now I only have 2 table to be able to allocate data, the content, and page table.
 *                 The way they have a relationship is by the page_id in the content table. each page has an id, for example home page id is home. about us is about. so on and so forth.
 *                         the visualization of data is much more simple. although the database has all the data, there is a single request per content data per page. look at line 19:
 *                                                                                                                                                 if ($tableExists) {
 *                                                                                                                                                 $stmt = $pdo->query('SELECT * FROM content WHERE page_id = "home"');
 *                                                                                                                                                 $content = $stmt->fetchAll(PDO::FETCH_ASSOC);
 *                                                                                                                                             }
 */
?>

</body>

</html>