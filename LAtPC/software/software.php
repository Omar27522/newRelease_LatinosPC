<?php

function sw_breadCrumbs() {
    $breadCrumbs = [
        "<a href=\"./\">Software</a>",
        "<a href=\"./anti_virus\">Anti-Virus</a>",
        "<a href=\"./malware_cleaner\">Malware Cleaners</a>",
        "<a href=\"./web_browsers\">Web Browsers</a>",
        "<a href=\"./messaging\">Messaging</a>",
        "<a href=\"./media\">Media</a>",
        "<a href=\"./runtimes\">Runtimes</a>",
        "<a href=\"./imaging\">Imaging</a>",
        "<a href=\"./documents\">Documents</a>",
        "<a href=\"./file_sharing\">File Sharing</a>",
        "<a href=\"./online_storage\">Online Storage</a>",
        "<a href=\"./other\">Other</a>",
        "<a href=\"./utilities\">Utilities</a>",
        "<a href=\"./compression\">Compression</a>",
        "<a href=\"./developer_tools\">Developer Tools</a>"
    ];

    // Get current URI path
    $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    echo "<span class=\"fullbar\">";
    foreach ($breadCrumbs as $crumb) {
        // Extract href attribute from anchor tag
        preg_match('/href="\.\/([^"]+)"/', $crumb, $matches);
        $href = isset($matches[1]) ? $matches[1] : '';

        // Check if current URI contains this breadcrumb's path
        if ($href && strpos($currentPath, $href) !== false) {
            echo "<strong>" . $crumb . "</strong>";
        } else {
            echo $crumb;
        }

        // Add separator except for last item
        if ($crumb !== end($breadCrumbs)) {
            echo " > ";
        }
    }

    echo "</span> <hr style=\"margin: 0; margin-bottom: 10px;\">";
}

function sw_software() {
     echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
    echo "<h1>Software Main Page</h1>";
    echo "</div>";

    $sw='en';
    $titles = [
        "Commonly known as computer programs -these, are the instructions for the computer’s tasks.",
        "When it comes to choosing the right software for the job, there are many factors to consider.",
        "Here are a few steps you can take to help you make the right choice:",
        "Ultimately, the key is to find software that meets your specific needs and fits within your budget, while also being easy to use and compatible with your current setup.",
        "Open Source",
        "Free",
        "Shareware",
        "Trialware",
        "Paid",
        "Subscription",
    ];
    $links = [ 'opensource' => 'https://www.redhat.com/en/topics/open-source/what-is-open-source',

    ];
    $description = [
        '   <p style="margin-left:20%;margin-bottom:2%; width:68%;">Like paper
            programs, (which we get before the start of performances, like Concert Shows, a Graduation or Stage Plays.</p>
            <p style="padding-top:2%;">
            <strong>Software</strong> are a way to communicate to the computer user, about the computer’s ongoing performances.
            Computer software, like paper programs could be considered the same idea in this instance. Much more
            detailed than paper programs, <ins>software</ins> contains all the necessary parts that make the whole
            show.</p>
            <div style="margin-left:20%;margin-bottom:2%; width:68%;">
            <p style="text-align: center; font-size: 1.1em; margin-bottom: 15px; color: #333;padding-top:2%;">The "stage" is the CPU, Ram, Hard drive.<br />
            The public enjoys the performance through the computer display, the performers are the programs
            themselves.</p>
            <p style="line-height: 1.6; padding: 10px; background-color: rgba(240, 240, 240, 0.7); border-left: 4px solid #3366ff; border-radius: 5px;">Because computers can execute muti-millions of instructions per second; millions+ of performers and
            performances have to be coordinated in a way that makes the computer <b class="highlight">run</b> without declaring any
            software errors, glitches, bugs, or unwanted features.</p>
            </div>',
    ];
    $programs = [
        "Click on the image",
        "Anti-Virus",
        "Malware Cleaner",
        "Web Browsers",
        "Messaging",
        "Media",
        "Runtimes",
        "Imaging",
        "Documents",
        "File Sharing",
        "Online Storage",
        "Other",
        "Utilities",
        "Compression",
        "Development Tools",
        "Read more",

        "links" => [
            "antivirus",
            "malwarecleaner",
            "webbrowsers",
            "messaging",
            "media",
            "runtimes",
            "imaging",
            "documents",
            "filesharing",
            "onlinestorage",
            "other",
            "utilities",
            "compression",
            "developertools",
        ],
    ];

    $descriptions = [
        //up to 52 word descriptions
        "av" =>
            "An anti-virus program in itself, is created to help the computer shield itself from viruses. The best antivirus solutions are the ones keeping Up to date with whats out there trying to harm the computer (PC). Also, the best antivirus solutions are simple, cost less than imagined, and bring peace of mind.",
        "mlwc" =>
            "Malware, harmful files infecting computers, can be found in spam, emails, infected drives, or bundled software. Often disguised as harmless software, malware steals data and can cause irreparable damage. To prevent infections, use paid or free antivirus solutions that offer real-time protection and background scanning.",
        "wb" =>
            "Web browsers, essential tools for accessing the internet, have evolved significantly since their early days. From text-based interfaces to modern graphical browsers, they have played a crucial role in shaping the online world. Today, browsers offer a wide range of features, from speed and security to customization options.",
        "msg" =>
            "Instant messaging enables fast communication over the internet beyond email. Modern apps support file sharing, group chats, and video/voice calls. They also allow users to make payments and play games. While the term originated in the 1990s, the concept dates back to the 1960s on multi-user operating systems like CTSS.",
        "media" =>
            "Media refers to computer representations of visual and audio formats, such as pictures, videos, and audio files. These formats shape how we interact with the digital world. From NFTs and video sites to books and image galleries, media spans various forms and enhances communication across the internet.",
        "rtimes" =>
            "Runtimes enable computer programs to execute across different systems, handling code execution for various programming languages. Lighter software generally runs faster than heavier programs requiring more system resources. As technology advances, mobile devices and laptops are improving, though they still lag behind desktops in processing power.",
        "imgs" =>
            "Humans perceive the world through senses like sight, interpreting light to form reality. In contrast, computers generate 2D images, calculating how objects appear on screens. Imaging refers to the file formats used to create these visuals. Today, computers can also bring digital designs into the physical world via 3D printing.",
        "docs" =>
            "Many types of computer files are classified as document files, used to store and organize information. Common examples in an office environment include text files (.txt), Word documents (.doc/.docx), spreadsheets (.xls/.xlsx), presentations (.ppt/.pptx), and PDFs (.pdf). These formats enable efficient data sharing, editing, and presentation across various platforms.",
        "flsha" =>
            "File sharing enables easy transfer of files between devices via cloud storage, email, or peer-to-peer networks. Popular services include Dropbox, Google Drive, and WeTransfer. Screen sharing tools like Zoom and Google Meet aid collaboration, while secure policies and password management tools ensure safety when sharing sensitive credentials.",
        "onsto" =>
            "Online storage, or cloud storage, allows users to store and access files on remote servers via the internet, offering flexibility across devices. Popular services like Google Drive, Dropbox, and OneDrive provide free storage with options to purchase more. Additional features include file sharing, collaboration tools, and backup services.",
        "oth" =>
            "Computer repair involves diagnosing and fixing various hardware and software issues. Basic troubleshooting steps include checking cable connections, ensuring the power supply is on, and verifying hardware components. If these steps fail, professional technicians can provide accurate diagnostics and solutions. Remote support services offer prompt, cost-effective technical assistance.",
        "uth" =>
            "Computer utilities manage, maintain, and optimize performance by cleaning hard drives, defragmenting disks, repairing errors, and enhancing security. Examples include antivirus software, disk cleanup tools, and system optimizers. These utilities, either built-in or standalone, improve speed and efficiency, ensuring smooth operation and preventing issues.",
        "compr" =>
            "File compression reduces file size for storage and transmission. Early methods like run-length encoding evolved into sophisticated algorithms such as LZW, used in GIF and ZIP formats. Modern compression includes MP3 and JPEG. Common formats include ZIP, RAR, TAR, GZ, and BZ2, enhancing efficiency and performance.",
        "devtools" =>
            "Here at LAtinosPC, developers enhance the website to be advanced yet user-friendly. They refine code for clarity and organization, ensuring a seamless browsing experience. Utilizing tools like Google Keep, WPS Office, Notepad++, GIMP, and WAMP, they create a better site for visitors, supported by resources like FileHippo and SourceForge.",
    ];
    $rightChoice = [
        "strong" => [
            "Define your requirements",
            "Research available options",
            "Check for compatibility",
            "Read reviews and user feedback",
            "Try before you buy",
            "Consider cost",
            "Support and updates",
            "Technical requirements",
        ],
        "descriptions" => [
            "Clearly define the specific tasks and functionality you need the software to perform. This will help you to narrow down your options and make it easier to compare different software packages.",
            "Look into the different software options available that meet your requirements. Make a list of the software packages that seem like they would be a good fit.",
            "Make sure that the software is compatible with your operating system and any other software you are currently using. Also check if the software is compatible with any hardware you are using as well.",
            "Read online reviews and user feedback to get an idea of how well the software works and how easy it is to use.",
            "Many software vendors offer free trial versions of their software, so you can test the software out before you make a purchase.",
            "Consider the cost of the software, including any additional costs for support, upgrades, or additional features. Compare the cost of different software packages and see which one offers the best value for your budget.",
            "Consider the level of support and updates provided by the software vendor. Make sure that the software will continue to be updated and supported in the future.",
            "If you are looking for software that require specific technical requirements, make sure that the software you choose meet them, for example if you are developing a mobile app, make sure that the software you choose can export the app to the platform you need.",
        ],
    ];
    $types = [
        "opensource" =>
            "This type of software is freely available for use, modification, and distribution. The source code is also available for users to view and modify.",
        "free" =>
            "This type of software is also freely available for use, but the source code may not be available for modification.",
        "shareware" =>
            "This type of software is typically available for a free trial period, after which the user must purchase a license to continue using the software.",
        "trialware" =>
            "Similar to shareware, this type of software is available for a free trial period, but typically includes more limitations or reduced functionality.",
        "paid" => "This type of software must be purchased in order to use it.",
        "subscription" =>
            "This type of software requires a recurring payment (such as a monthly or annual fee) in order to continue using the software. Examples include software as a service (SaaS) applications.",
    ];



    ?>
        <article class="fullbar">
    <?php echo $_SERVER['REQUEST_URI']; ?>
    <section class="hero3" id="software">
        <div class="container" style="background-color:rgba(245, 245, 245, 0.41);padding-bottom:.6%;  ">
            <h2><?= empty($titles) ? $titulos[0] : $titles[0];
        #<!-- script checks if the english $variable is empty. if it is, the Spanish version will be displayed otherwise the English version will be displayed =0k= -->
        ?></h2>
            <a href="#title"><img src="https://latinospc.com/images/programs/code.jpg" width="263" height="146"
                    alt="image" class="fl" /></a>
            <?= empty($description) ? $descripcion[0] : $description[0];?>
             <a href="#title" style="padding-left:10%;"><?= empty($programs) ? $programas[15] : $programs[15];?></a>
        </div><span id="ps2"></span><br />
        <div class="container" style="column-count: 3; border: 1px solid royalblue;border-radius: 15%;background-color: rgba(245, 245, 245, 0.76);">
            <?php /*ISSET checks if $_GET is set then depending on the key, the switch statement will have the Spanish and English versions of each of the program categories.
                    For right now the id's and the links will remain the same for both versions.*/
                if (isset($_GET)) :
                    switch (key($_GET)) :
                case 'antivirus': $imag = 'av'; $title = 'Antivirus'; $titulo = $title; $id = 'Anti-Virus'; $link = '#Anti-Virus';
                    break;
                case 'malwarecleaner': case 'limpiadordemalware':
                    $imag = 'mwc'; $title = 'Malware Cleaner'; $titulo = 'Limpiadores de Malware'; $id = 'MalwareCleaner'; $link = '#MalwareCleaner';
                    break;
                case 'webbrowsers': case 'navegadoresweb':
                    $imag = 'wb'; $title = 'Web Browsers'; $titulo = 'Navegadores Web'; $id = 'WebBrowsers'; $link = '#WebBrowsers';
                    break;
                case 'messaging': case 'mensajeria':
                        $imag = 'msg'; $title = 'Messaging'; $titulo = 'Mensajería'; $id = 'Messaging'; $link = '#Messaging';
                    break;
                case 'media': case'multimedia':
                        $imag = 'media';$title = 'Media'; $titulo = 'Multi-Media'; $id = 'Media'; $link = '#Media';
                    break;
                case 'runtimes':
                    $imag = 'rt'; $title = 'Runtimes'; $titulo = 'Tiempos de Ejecución'; $id = 'Runtimes'; $link = '#Runtimes';
                    break;
                case 'imaging': case 'imagenes':
                    $imag = 'img'; $title = 'Imaging'; $titulo = 'Imágenes'; $id = 'Imaging'; $link = '#Imaging';
                    break;
                case 'documents': case 'documentos':
                    $imag = 'docs'; $title = 'Documents'; $titulo = 'Documentos'; $id = 'Documents'; $link = '#Documents';
                    break;
                case 'filesharing': case 'archivosparacompartir':
                    $imag = 'filsha'; $title = 'File Sharing'; $titulo ='Archivos para Compartir'; $id = 'FileSharing'; $link = '#FileSharing';
                    break;
                case 'onlinestorage': case 'almacenamientoenlinea':
                    $imag = 'ons'; $title = 'Online Storage'; $titulo = 'Almacenamiento en Linea'; $id = 'OnlineStorage'; $link = '#OnlineStorage';
                    break;
                case 'other': case 'otros':
                    $imag = 'ot'; $title = 'Other'; $titulo = 'Otros'; $id = 'Other'; $link = '#Other';
                    break;
                case 'utilities': case 'utilidades':
                    $imag = 'utl'; $title = 'Utilities'; $titulo = 'Utilidades'; $id = 'Utilities'; $link = '#Utilities';
                    break;
                case 'compression': case 'compresion':
                    $imag = 'press'; $title = 'Compression'; $titulo = 'Compresión'; $id = 'Compression'; $link = '#Compression';
                    break;
                case 'developertools': case 'herramientasparadesarrollar':
                    $imag = 'dv'; $title = 'Developer Tools'; $titulo = 'Herramientas de Desarrollo'; $id = 'DeveloperTools'; $link = '#DeveloperTools';
                    break;
                    default: "code";    $imag='code';          $link='#title';
                            break;
                    endswitch;
                endif;
            ?>
            <a href="<?php if(!empty($link)){echo$link;}else{echo"#title";} ?>">
                <img src="https://latinospc.com/images/programs/<?= $imag; ?>.jpg" width="50% height="70%"
                    alt="<?php if(!empty(key($_GET))){echo (key($_GET));}else{echo "Code Image";} ?>" /></a>
            <h2>&uarr;
                <?= empty($programs) ? $programas[0] : $programs[0];?>
            </h2>
            <!--checks if the $variable programs is empty. if it is the Spanish version will be displayed. otherwise the english version will be displayed -->
            <aside class="cell buttons">
                <a href="?<?= empty($programs) ? $programas['links'][0] : $programs['links'][0];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[1] : $programs[1];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][1] : $programs['links'][1];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[2] : $programs[2];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][2] : $programs['links'][2];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[3] : $programs[3];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][3] : $programs['links'][3];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[4] : $programs[4];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][4] : $programs['links'][4];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[5] : $programs[5];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][5] : $programs['links'][5];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[6] : $programs[6];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][6] : $programs['links'][6];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[7] : $programs[7];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][7] : $programs['links'][7];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[8] : $programs[8];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][8] : $programs['links'][8];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[9] : $programs[9];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][9] : $programs['links'][9];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[10] : $programs[10];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][10] : $programs['links'][10];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[11] : $programs[11];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][11] : $programs['links'][11];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[12] : $programs[12];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][12] : $programs['links'][12];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[13] : $programs[13];?></button>
                </a>
                <a href="?<?= empty($programs) ? $programas['links'][13] : $programs['links'][13];?>#ps2">
                    <button type="button" class="bttn"><?= empty($programs) ? $programas[14] : $programs[14];?></button>
                </a>
            </aside>
            <div class="clr"></div>
            <h3><a href="<?php if (key($_GET)){ echo $link; } ?>" class="rm"
                    title="Programs"><?= empty($programs) ? $programas[15] : $programs[15];?></a></h3>
        </div>
    </section>
    </article>
    <!--Full Bar -->
    <article class="fullbar" id="programs"><br />
    <?php if (key($_GET)){
        //<!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|-Short Descriptions -\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    ?>
    <div id="<?= $id ?>" class="hero4 blurb" style="padding-bottom: 3em;background-color:rgba(245, 245, 245, 0.41);">
        <h2><?php if ($sw == 'en'){echo $title;} elseif ($sw == 'es'){echo $titulo;}?></h2>
        <section tabindex="0" class="hero4 readMore">
            <p>
                <?php
        /* EG. Click ON antivirus or the "read more" link, and a window with a description will manifest lower down the page.
       Read more inside the description will Take you to a directory inside software called antivirus.*/
        //<!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|-English Version -\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        if ($sw == 'en'){
            $options = [
                'antivirus'      => 'av',
                'malwarecleaner' => 'mlwc',
                'webbrowsers'    => 'wb',
                'messaging'      => 'msg',
                'media'          => 'media',
                'runtimes'       => 'rtimes',
                'imaging'        => 'imgs',
                'documents'      => 'docs',
                'filesharing'    => 'flsha',
                'onlinestorage'  => 'onsto',
                'other'          => 'oth',
                'utilities'      => 'uth',
                'compression'    => 'compr',
                'developertools' => 'devtools'
            ];  foreach ($options as $key => $value) {
                    if (isset($_GET[$key])) {
                        echo $descriptions[$value];
                    break;
                }
            }
        }
        //<!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|-Spanish Version -\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        if ($sw == 'es') {
            $opciones = [
                'antivirus'                   => 'av',
                'limpiadordemalware'          => 'mlwc',
                'navegadoresweb'              => 'wb',
                'mensajeria'                  => 'msg',
                'multimedia'                  => 'media',
                'runtimes'                    => 'rtimes',
                'imagenes'                    => 'imgs',
                'documentos'                  => 'docs',
                'archivosparacompartir'       => 'flsha',
                'almacenamientoenlinea'       => 'onsto',
                'otros'                       => 'oth',
                'utilidades'                  => 'uth',
                'compresion'                  => 'compr',
                'herramientasparadesarrollar' => 'devtools'
            ];  foreach ($opciones as $llave => $valor) {
                    if (isset($_GET[$llave])) {
                        echo $descripciones[$valor];
                break;
                }
            }
        }
        ?>
                <!-- En español en leer mas, antivirus sirve bien, pero al momento de mostrar malware cleaner, no funciona me manda a un link ?limpiadordemalware -->
            </p>
        </section><a class="rm" href="<?php
            #<!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|-This link takes the user to a more informative page -\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
            if ($sw == 'en')  {
                    if (isset($_GET['antivirus'])) {echo 'anti_virus#^';}
                    elseif (isset($_GET['malwarecleaner'])) {echo 'malware_cleaner';}
                    elseif (isset($_GET['webbrowsers'])) {echo 'web_browsers';}
                    elseif (isset($_GET['messaging'])) {echo 'messaging';}
                    elseif (isset($_GET['media'])) {echo 'media';}
                    elseif (isset($_GET['runtimes'])) {echo 'runtimes';}
                    elseif (isset($_GET['imaging'])) {echo 'imaging';}
                    elseif (isset($_GET['documents'])) {echo 'documents';}
                    elseif (isset($_GET['filesharing'])) {echo 'file_sharing';}
                    elseif (isset($_GET['onlinestorage'])) {echo 'online_storage';}
                    elseif (isset($_GET['other'])) {echo 'other';}
                    elseif (isset($_GET['utilities'])) {echo 'utilities';}
                    elseif (isset($_GET['compression'])) {echo 'compression';}
                    elseif (isset($_GET['developertools'])) {echo 'developer_tools';}
                }
                  if ($sw == 'es') {
                    if (isset($_GET['antivirus'])) {echo '../software/antivirus';}
                    elseif (isset($_GET['limpiadordemalware'])) {echo '../software/limpiadoresdemalware';}
                    elseif (isset($_GET['navegadoresweb'])) {echo '../software/navegadoresweb';}
                    elseif (isset($_GET['mensajeria'])) {echo '../software/mensajeria';}
                    elseif (isset($_GET['multimedia'])) {echo '../software/multimedia';}
                    elseif (isset($_GET['runtimes'])) {echo '../software/tiemposdeejecucion';}
                    elseif (isset($_GET['imagenes'])) {echo '../software/imagenes';}
                    elseif (isset($_GET['documentos'])) {echo '../software/documentos';}
                    elseif (isset($_GET['archivosparacompartir'])) {echo '../software/archivosparacompartir';}
                    elseif (isset($_GET['almacenamientoenlinea'])) {echo '../software/almacenamientoenlinea';}
                    elseif (isset($_GET['otros'])) {echo '../software/otros';}
                    elseif (isset($_GET['utilidades'])) {echo '../software/utilidades';}
                    elseif (isset($_GET['compresion'])) {echo '../software/compresion';}
                    elseif (isset($_GET['herramientasparadesarrollar'])) {echo '../software/herramientasparadesarrolladores';}
                }
                    ?>"> <?php if ($sw == 'es') {echo 'Leer más';} else {echo'Read more';}?></a>
    </div> <?php } ?>
    <br />
    <a href="#software" id="title" class="sub_title">
        <?= empty($titles) ? $titulos[1] : $titles[1]; ?>
    </a>
    <br />
    <div class="steps">
        <h2><?= empty($titles) ? $titulos[2] : $titles[2]; ?></h2>
        <section tabindex="0" class="selection">
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][0] : $rightChoice['strong'][0]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][0] : $rightChoice['descriptions'][0]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][1] : $rightChoice['strong'][1]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][1] : $rightChoice['descriptions'][1]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][2] : $rightChoice['strong'][2]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][2] : $rightChoice['descriptions'][2]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][3] : $rightChoice['strong'][3]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][3] : $rightChoice['descriptions'][3]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][4] : $rightChoice['strong'][4]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][4] : $rightChoice['descriptions'][4]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][5] : $rightChoice['strong'][5]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][5] : $rightChoice['descriptions'][5]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][6] : $rightChoice['strong'][6]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][6] : $rightChoice['descriptions'][6]; ?>
            </p>
            <p><strong><?= empty($rightChoice) ? $correctaEleccion['strong'][7] : $rightChoice['strong'][7]; ?>:</strong>
                <?= empty($rightChoice) ? $correctaEleccion['descriptions'][7] : $rightChoice['descriptions'][7]; ?></p>
            
            <!-- Implement the Spanish version of the right choice $variable, is not on _works/_software/index.php -->
        </section><h2>
                <?= empty($titles) ? $titulos[3] : $titles[3]; ?>
            </h2>
    </div> <br />
    <div tabindex="0" class="hero4" style="padding-bottom: 4%;width: 97%;">
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|-
        links, will choose which $links item from the array to use.
        Only open source is available, I hope I can have many more links to use.
        This will be done after the structure of the site is done.
        <b>Links</b> and <b>images</b> for the site will be some of the last items to be worked on.
        -\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
            <div style="flex: 0 0 48%; margin-bottom: 20px;">
                <a href="<?= empty($links['opensource']) ? $links['codigoabierto'] : $links['opensource']; ?>">
                <h2><?= empty($titles) ? $titulos[4] : $titles[4]; ?>:</h2>
                </a>
                <p>
                    <?= empty($types) ? $tipos['codigoabierto'] : $types['opensource']; ?>
                </p>
            </div>
            <div style="flex: 0 0 48%; margin-bottom: 20px;">
                <a href="#navi">
                    <!-- (╯°□°）╯ FREE ┻━┻ `ღ´ -->
                    <h2><?= empty($titles) ? $titulos[5] : $titles[5]; ?>:</h2>
                </a>
                <p>
                    <?= empty($types) ? $tipos['gratis'] : $types['free']; ?>
                </p>
            </div>  
            <div style="flex: 0 0 48%; margin-bottom: 20px;">
                <a href="#navi">
                    <!-- (╯°□°）╯ SHAREWARE  ┻━┻ `ღ´ -->
                    <h2><?= empty($titles) ? $titulos[6] : $titles[6]; ?>:</h2>
                </a>
                <p>
                    <?= empty($types) ? $tipos['shareware'] : $types['shareware']; ?>
                </p>
            </div>
            <div style="flex: 0 0 48%; margin-bottom: 20px;">
                <h2><a href="#navi">
                    <!-- (╯°□°）╯ TRIAL ┻━┻ `ღ´ -->
                    <?= empty($titles) ? $titulos[7] : $titles[7]; ?>:</h2>
                </a>
                <p>
                    <?= empty($types) ? $tipos['prueba'] : $types['trialware']; ?>
                </p>
            </div>
            <div style="flex: 0 0 48%; margin-bottom: 20px;">
                <h2><a href="#navi">
                    <!-- (╯°□°）╯ PAID ┻━┻ `ღ´ -->
                    <?= empty($titles) ? $titulos[8] : $titles[8]; ?>:</h2>
                </a>
                <p>
                    <?= empty($types) ? $tipos['pagado'] : $types['paid']; ?>
                </p>
            </div>
            <div style="flex: 0 0 48%; margin-bottom: 20px;">
                <h2><a href="#navi">
                    <!-- (╯°□°）╯ SUBSCRIPTION ┻━┻ `ღ´ -->
                    <?= empty($titles) ? $titulos[9] : $titles[9]; ?>:</h2>
                </a>
                <p>
                    <?= empty($types) ? $tipos['subscripcion'] : $types['subscription']; ?>
                </p>
            </div>
        </div>
    </div>
    </article>
    <style>
    .selection li {
        list-style: none;
        font-size: 110%;
    }
    .bttn {
        /*This whole section is for the buttons, I wanted to add a background color to the buttons, but it doesn't let me*/
        font-size: 130%;
        margin: 2.4%;
        padding: 10.4%;
    }
    .bttn:hover {
        color: midnightblue;
    }
    .cell button{
        background-color: #436bbdc7;
    }
    .cell button:hover,
    .cell button:focus,
    .cell button:active {
        border-radius: 25px;
        color: white;
        background-color: #74747463;
    }
    </style>
        <?php
}

function sw_anti_virus() {
    $title = 'Antivirus';
    $links = ['computerVirus'=>'https://en.wikipedia.org/wiki/Computer_virus'];
    $av =[
        'An anti-virus program in itself, is created to help the computer shield itself from <a href="'.$links['computerVirus'].'">viruses</a>.',
        'The best antivirus solutions are the ones keeping Up to date with whats out there trying to harm the computer (PC).',
        'Also, the best antivirus solutions are simple, cost less than imagined, and bring peace of mind to the whole operation; which is to keep the PC Free from any viruses that will harm the computer and/or its components.'
    ];
    $history = [
        'The Bad Old Days',
        'From Mistakes to Menace',
        'The Virus Wild West',
        'Why You Need to Protect Your Digital Castle',
        'oldDays'=>'Way back when computers were clunky behemoths, problems started popping up. Little mistakes in their programming turned into annoying glitches. Nobody knew it then, but these were the tiny seeds of trouble that would grow into something much bigger.',
        'fromMto_M'=>'As computers got smarter, so did the people using them. Some folks figured out how to turn those little mistakes into mean little programs. These digital bullies, called viruses, started causing chaos, stealing stuff, and generally being jerks to computers.',
        'wildWest'=>'Viruses didn\'t stop at being annoying. They got super sneaky, hiding in places you\'d never expect. It was like a digital Wild West, with viruses always coming up with new tricks to mess with your computer.',
        'digitalCastle'=>'Viruses can steal your stuff, ruin your computer, and even steal your identity. It\'s like leaving your front door wide open for any creep to walk in. So lock that digital door, and don\'t be a sitting duck for those virtual villains.',

    ];

    $tips = [
        'Regular Antivirus scans, are less frequently needed; this is due to the technology inside each of the Av Solutions.',
        'Never install 2 antivirus solutions; this is due to the fact that False positives are a true nature on any field.',
        'Free antivirus solutions are just as good as paid ones, but paid ones have an incentive which is to keep the PC free from viruses, and because of their technology the PC can ensure trust in their solution.
            <br />Also Paid solutions have more features than free solutions such as, online storage, and malware protection, etc.',
        'Paid antivirus solutions also offer live support, and are reliable solution to ultimately keep computer data, safe.',
        'Scheduled scans: are a great way to ensure no viruses are hiding behind other files, and can be on set hours that the computer might not be in use.',
        'Safe browsing habits',
        'Software updates',
        'Strong passwords',
        'Backup data',
        'safe'=>'Be cautious of suspicious links and websites, and avoid downloading files from unknown sources.',
        'updates'=>'Keep your operating system and software applications up-to-date with the latest security patches.',
        'passwords'=>'Create complex and unique passwords for your online accounts, and consider using a password manager.',
        'backup'=>'Regularly back up your important files to an external hard drive or cloud storage.',
        'title'=>'Tips'
    ];

    $features = [
        'Real-time protection',
        'Firewall',
        'Phishing protection',
        'Ransomware protection',
        'Performance impact',
        'realTime'=>'Constantly monitors your system for threats, blocking them before they can cause damage.',
        'firewall'=>'Acts as a security barrier, protecting your computer from unauthorized network access.',
        'phishingProtection'=>'Identifies and blocks fraudulent attempts to steal your personal information.',
        'ransomwareProtection'=>'Detects and prevents ransomware attacks, safeguarding your files.',
        'performance'=>'Offers strong protection without significantly slowing down your computer.',
        'title'=>'Antivirus Features'
    ];

    $questions = [
        'Is a paid antivirus really necessary?',
        'What are the key benefits of paid antivirus software?',
        'How much does a good antivirus program cost?',
        'Is it worth paying for extra features like VPN and password management?',
        'Can I rely solely on my operating system\'s built-in protection?',
        'paidAv'=>'While free options exist, paid antivirus solutions often offer more comprehensive protection, advanced features, and dedicated customer support.',
        'benefits'=>'Paid antivirus typically includes features like real-time protection, firewalls, anti-phishing, ransomware protection, VPN access, password managers, and cloud storage.',
        'cost'=>'Prices vary based on the features and number of devices covered. Many offer flexible subscription plans.',
        'vpn'=>'It depends on your needs. If you value online privacy and convenience, these features can be beneficial.',
        'builtIn'=>'While operating systems offer some protection, a dedicated antivirus provides more robust security.',
        'title'=>'Common Antivirus Questions'
    ];



        echo "<div class=\"fullbar\">";
        sw_breadCrumbs();
        echo "<h1 id=\"^\">Anti-Virus</h1>";
        echo "</div>";

    ?>
            <article class="hero4">
        <div class=" fullbar">
            <div style="display:inline-block;">
                <a href="../#software">
                    <h2 id="title"><?= empty($title) ? $titulo : $title;?></h2>
                </a>
            </div>
            <?php  //BreadCrumbs
    
                    ?>
                <p tabindex="0" class=""><?= $av[0]; ?><br />
                    <img tabindex="0" src="https://latinospc.com/images/programs/av.jpg" height="210" width="240" alt="First Image" class="rtl selection_2 card2"
                        style="background-color: darkgray;color: whitesmoke;text-align: center;font-size: 2rem;">
                    <br /><?= $av[1]; ?><br /><br /><?= $av[2];?>
                </p>

                <section tabindex="0" class="">
                    <p><strong><?= empty($history) ?$historia[0]: $history[0];?>:</strong>
                        <?= empty($history) ?$historia['viejosTiempos']: $history['oldDays'];?></p>
                    <p><strong><?= empty($history) ?$historia[1]: $history[1];?>:</strong>
                        <?= empty($history) ?$historia['de_M_a_M']: $history['fromMto_M'];?></p>
                    <p><strong><?= empty($history) ?$historia[2]: $history[2];?>:</strong>
                        <?= empty($history) ?$historia['salvajeOeste']: $history['wildWest'];?></p>
                    <img tabindex="0" src="../../../tempimages/th.jpg" height="150" width="350" alt="Second Image" class="fl selection_2 card2"
                        style="background-color: darkcyan;color: whitesmoke;text-align: center;font-size: 2rem;">
                    <p><strong><?= empty($history) ?$historia[3]: $history[3];?>:</strong>
                        <?= empty($history) ?$historia['castilloDigital']: $history['digitalCastle'];?></p>
                </section>

                <h2><?= empty($tips) ? $consejos['titulo'] : $tips['title'];?></h2>
                <section>
                    <p class="colms2">
                        <span tabindex="0" class="selection_2">
                            <?= empty($tips) ? $consejos[0] : $tips[0];?></span>
                        <br /><br /><span tabindex="0" class="selection_2">
                            <?= empty($tips) ? $consejos[1] : $tips[1];?></span>
                        <br /><br /><span tabindex="0" class="selection_2">
                            <?= empty($tips) ? $consejos[2] : $tips[2];?></span>
                        <br /><br /><span tabindex="0" class="selection_2">
                            <?= empty($tips) ? $consejos[3] : $tips[3];?></span>
                        <br /><br /><span tabindex="0" class="selection_2">
                            <?= empty($tips) ? $consejos[4] : $tips[4];?></span>
                    </p>
                    <div tabindex="0" class="">
                        <p><strong><?= empty($tips) ? $consejos[5] : $tips[5];?>:</strong>
                            <?= empty($tips) ? $consejos['aSalvo'] : $tips['safe']; ?></p>
                        <img tabindex="0" src="../../../tempimages/OIG2.jpg" height="315" width="440" alt="Second to Last Image" class="rtl selection_2 card2"
                            style="background-color: burlywood;color: whitesmoke;text-align: center;font-size: 2rem;">
                        <p><strong><?= empty($tips) ? $consejos[6] : $tips[6];?>:</strong>
                            <?= empty($tips) ? $consejos['actualizaciones'] : $tips['updates']; ?></p>
                        <p><strong><?= empty($tips) ? $consejos[7] : $tips[7];?>:</strong>
                            <?= empty($tips) ? $consejos['contraseñas'] : $tips['passwords']; ?></p>
                        <p><strong><?= empty($tips) ? $consejos[8] : $tips[8];?>:</strong>
                            <?= empty($tips) ? $consejos['respaldo'] : $tips['backup']; ?></p>
                    </div>
                </section>
        </div><!-- /fullbar -->

        <div class="hero4 fullbar" style="margin-bottom: 0;">
            <h2><?= empty($features) ? $caracteristicas['titulo'] : $features['title'];?></h2>
            <section tabindex="0" class="selection">
                <p><strong><?= empty($features) ? $caracteristicas[0] : $features[0];?>:</strong>
                    <?= empty($features) ? $caracteristicas['tiempoReal'] : $features['realTime'];?></p>
                <p><strong><?= empty($features) ? $caracteristicas[1] : $features[1];?>:</strong>
                    <?= empty($features) ? $caracteristicas['paredesCortaFuegos'] : $features['firewall']; ?></p>
                <p><strong><?= empty($features) ? $caracteristicas[2] : $features[2];?>:</strong>
                    <?= empty($features) ? $caracteristicas['proteccionFraude'] : $features['phishingProtection']; ?></p>
                <p><strong><?= empty($features) ? $caracteristicas[3] : $features[3];?>:</strong>
                    <?= empty($features) ? $caracteristicas['proteccionRescate'] : $features['ransomwareProtection']; ?></p>
                <p><strong><?= empty($features) ? $caracteristicas[4] : $features[4];?>:</strong>
                    <?= empty($features) ? $caracteristicas['rendimiento'] : $features['performance']; ?></p>
            </section>

            <h2><?= empty($questions) ? $preguntas['titulo'] : $questions['title']; ?></h2>
            <section tabindex="0" class="">
                <p><strong><?= empty($questions) ? $preguntas[0] : $questions[0];?></strong>
                    <?= empty($questions) ? $preguntas['avPagado'] : $questions['paidAv']; ?></p>
                <p><strong><?= empty($questions) ? $preguntas[1] : $questions[1];?></strong>
                    <?= empty($questions) ? $preguntas['beneficios'] : $questions['benefits']; ?></p>
                <img tabindex="0" src="../../../tempimages/thm.jpg" height="150" width="250" alt="Last Image" class="fl selection_2 card2"
                    style="background-color: darkred;color: whitesmoke;text-align: center;font-size: 2rem;">
                <p><strong><?= empty($questions) ? $preguntas[2] : $questions[2];?></strong>
                    <?= empty($questions) ? $preguntas['costo'] : $questions['cost']; ?></p>
                <p><strong><?= empty($questions) ? $preguntas[3] : $questions[3];?></strong>
                    <?= empty($questions) ? $preguntas['vpn'] : $questions['vpn']; ?></p>
                <p><strong><?= empty($questions) ? $preguntas[4] : $questions[4];?></strong>
                    <?= empty($questions) ? $preguntas['incorporado'] : $questions['builtIn']; ?></p>
            </section>
        </div>
    </article>
    <?php
}

function sw_mlwcleaner() {


    $links=[ //Site Links
    'creeperWorm'=>         ['https://en.wikipedia.org/wiki/Creeper_and_Reaper','Creeper and Reaper','Creeper Worm (1971)'],
        'arpaNet'=>         ['https://en.wikipedia.org/wiki/ARPANET','ARPANET'],
    'elkCloner'=>           ['https://en.wikipedia.org/wiki/Elk_Cloner','Elk Cloner','Elk Cloner (1982)'],
        'appleII'=>         ['https://americanhistory.si.edu/collections/nmah_334638','Apple II'],
        'floppyDisk'=>      ['https://www.ibm.com/history/floppy-disk','Floppy Disk','floppy disks'],
    'brainVirus'=>          ['https://en.wikipedia.org/wiki/Brain_(computer_virus)','Brain','Brain Virus (1986)'],
    'jVirus87'=>            ['https://en.wikipedia.org/wiki/Jerusalem_(computer_virus)','Friday the 13th','Jerusalem Virus (1987)'],
        'timeBombVirus'=>   ['https://www.twingate.com/blog/glossary/time-bomb','Time Bomb','time bomb virus'],
    'morrisWorm'=>          ['https://en.wikipedia.org/wiki/Morris_worm','Morris Worm','Morris Worm (1988)'],
        'worms'=>           ['https://en.wikipedia.org/wiki/Computer_worm','Worms','worms'],
    'cihVirus'=>            ['https://en.wikipedia.org/wiki/CIH_(computer_virus)','CIH/Chernobyl Virus','CIH/Chernobyl Virus (1998)'],
        'systemBIOS'=>      ['https://www.lifewire.com/bios-basic-input-output-system-2625820','BIOS','system BIOS'],
    'virusMelisa'=>         ['https://en.wikipedia.org/wiki/Melissa_(computer_virus)','Melissa','Melissa Virus (1999)'],
        'worm'=>            ['https://en.wikipedia.org/wiki/Computer_worm','Worm','worm'],
    'codeRedWorm'=>         ['https://en.wikipedia.org/wiki/Code_Red_(computer_worm)','Code Red Worm','Code Red Worm (2001)'],
        'microsoftIIS'=>    ['https://en.wikipedia.org/wiki/Internet_Information_Services','Microsoft IIS'],
    'iLOVEYOUVirus'=>       ['https://en.wikipedia.org/wiki/ILOVEYOU','ILOVEYOU Virus','ILOVEYOU Virus (2000)'],
    'virusAnnaK'=>          ['https://en.wikipedia.org/wiki/Anna_Kournikova_(computer_virus)','Anna Kournikova Virus','Anna Kournikova Virus (2001)'],
        'tPAK'=>            ['https://en.wikipedia.org/wiki/List_of_female_tennis_players#:~:text=Anna%20Kournikova','List of female tennis players','Anna Kournikova'],
    'blasterWorm'=>         ['https://en.wikipedia.org/wiki/Blaster_(computer_worm)','Blaster','Blaster Worm (2003)'],
    'sobigF'=>              ['https://simple.wikipedia.org/wiki/Sobig','Sobig.F','Sobig.F (2003)'],
    'bagleWorm'=>           ['https://en.wikipedia.org/wiki/Bagle_(computer_worm)','Bagle','Bagle Worm (2004)'],
        'backDoor'=>        ['https://en.wikipedia.org/wiki/Backdoor_(computing)','Backdoor','backdoor'],
    'confickerWorm' =>      ['https://en.wikipedia.org/wiki/Conficker','Conficker','Conficker Worm (2008)'],
    'mydoomWorm' =>         ['https://en.wikipedia.org/wiki/Mydoom','Mydoom','Mydoom Worm (2004)'],
    'sasserWorm' =>         ['https://en.wikipedia.org/wiki/Sasser_(computer_worm)','Sasser','Sasser Worm (2004)'],
    'stormWorm' =>          ['https://en.wikipedia.org/wiki/Storm_Worm','Storm Worm','Storm Worm (2007)'],
        'trojan' =>         ['https://www.bleepingcomputer.com/virus-removal/threat/trojan-horses/#:~:text=INFORMATION%20ON%20TROJAN%20HORSES','Trojan Horse','Trojan'],
        'botnet' =>         ['https://en.wikipedia.org/wiki/Botnet','Botnet','botnet'],
    'zeus' =>               ['https://en.wikipedia.org/wiki/Zeus_(malware)','Zeus','Zeus (2007-2010)'],
        'keyStrokeLogging'=>['https://en.wikipedia.org/wiki/Keystroke_logging','KeyStroke Logging','keystroke logging'],
        'formGrabbing' =>   ['https://en.wikipedia.org/wiki/Form_grabbing','Form Grabbing','form grabbing'],
    'cryptoLocker' =>       ['https://www.bleepingcomputer.com/virus-removal/CryptoLocker-ransomware-information','CryptoLocker','CryptoLocker (2013-2014)'],
        'ransomware' =>     ['https://en.wikipedia.org/wiki/Ransomware','Ransomware','ransomware'],
        'key'   =>          ['https://en.wikipedia.org/wiki/Key_(cryptography)','Cryptographic Key','key'],
    'miraiMalware' =>       ['https://en.wikipedia.org/wiki/Mirai_(malware)','Mirai Malware','Mirai Malware (2016)'],
    'wCryRansomware' =>     ['https://en.wikipedia.org/wiki/WannaCry_ransomware_attack','WannaCry Ransomware','WannaCry Ransomware (2017)'],
    'petyaNotPetya' =>      ['https://en.wikipedia.org/wiki/Petya_(malware_family)','Petya/NotPetya','Petya/NotPetya (2016-2017)'],
    'emotet' =>             ['https://en.wikipedia.org/wiki/Emotet','Emotet','Emotet (2014-2021)'],
    'trickBot' =>           ['https://en.wikipedia.org/wiki/Trickbot','TrickBot','TrickBot (2016-present)'],
    'ryukRansomware' =>     ['https://en.wikipedia.org/wiki/Ryuk_(ransomware)','Ryuk Ransomware','Ryuk Ransomware (2018-present)'],
    'blueKeep' =>           ['https://en.wikipedia.org/wiki/BlueKeep','BlueKeep','BlueKeep (2019)'],
        'rCE' =>            ['https://en.wikipedia.org/wiki/Arbitrary_code_execution','Remote Code Execution','remote code execution'],
    'eternalBlue' =>        ['https://en.wikipedia.org/wiki/EternalBlue','EternalBlue','EternalBlue (2017-present)'],
        'nsa' =>            ['https://www.nsa.gov/','National Security Agency','NSA'],
        'shadowBrokers'=>   ['https://en.wikipedia.org/wiki/The_Shadow_Brokers','Shadow Brokers','Shadow Brokers'],
    'qakBot' =>             ['https://www.justice.gov/opa/pr/qakbot-malware-disrupted-international-cyber-takedown','QakBot','QakBot (QBot) (2007-present)'],
    'botenaGo' =>           ['https://cybersecurity.att.com/blogs/labs-research/att-alien-labs-finds-new-golang-malwarebotenago-targeting-millions-of-routers-and-iot-devices-with-more-than-30-exploits','BotenaGo','BotenaGo (2021)'],
        'go'=>              ['https://en.wikipedia.org/wiki/Golang','Golang','Go'],
        'ioT'=>             ['https://en.wikipedia.org/wiki/Internet_of_things','Internet of Things','IoT'],
    'darkSideRansomware' => ['https://en.wikipedia.org/wiki/DarkSide_(hacker_group)','DarkSide','DarkSide Ransomware (2020-present)'],
        'cPipelineI' =>     ['https://www.cisa.gov/news-events/news/attack-colonial-pipeline-what-weve-learned-what-weve-done-over-past-two-years','The Attack on Colonial Pipeline','Colonial Pipeline incident'],
    'solarWindsAttack' =>   ['https://www.cisecurity.org/solarwinds','SolarWinds Attack','SolarWinds Attack (2020)'],
        'supplyCAttack' =>  ['https://en.wikipedia.org/wiki/Supply_chain_attack','Supply Chain Attack','supply chain attack'],
    'hafnium' =>            ['https://en.wikipedia.org/wiki/2021_Microsoft_Exchange_Server_data_breach','2021 Microsoft Exchange Server data breach','Hafnium (2021)'],
    'revilRansomware' =>    ['https://en.wikipedia.org/wiki/REvil','REvil','REvil (Sodinokibi) (2019-present)'],
        'kVSA' =>           ['https://en.wikipedia.org/wiki/Kaseya_VSA_ransomware_attack','Kaseya VSA','Kaseya VSA attack'],
    'contiRansomware' =>    ['https://en.wikipedia.org/wiki/Conti_(ransomware)','Conti Ransomware','Conti Ransomware (2020-present)'],
    'blackMatter' =>        ['https://www.cisa.gov/news-events/cybersecurity-advisories/aa21-291a','BlackMatter','BlackMatter (2021-present)'],
    'log4Shell' =>          ['https://en.wikipedia.org/wiki/Log4Shell','Log4Shell','Log4Shell (2021)'],
    'mosaicLoader' =>       ['https://www.bleepingcomputer.com/news/security/new-mosaicloader-malware-targets-software-pirates-via-online-ads/','MosaicLoader','MosaicLoader (2021)'],
    'fritzFrog' =>          ['https://www.bleepingcomputer.com/news/security/fritzfrog-botnet-grows-10x-hits-healthcare-edu-and-govt-systems/','FritzFrog','FritzFrog (2020-present)'],
    'stuxnet' =>            ['https://en.wikipedia.org/wiki/Stuxnet','Stuxnet','Stuxnet (2010)'],
    'dridex' =>             ['https://en.wikipedia.org/wiki/Dridex','Dridex','Dridex (2014-present)'],
    'agentTesla' =>         ['https://en.wikipedia.org/wiki/Agent_Tesla','Agent Tesla','Agent Tesla (2014-present)'],
        'keylogger' =>      ['https://en.wikipedia.org/wiki/Keystroke_logging','Keylogger','keylogger'],
    'spyware' =>            ['https://en.wikipedia.org/wiki/Spyware','Spyware','Spyware'],
    'phishing' =>           ['https://en.wikipedia.org/wiki/Phishing','Phishing','Phishing Attacks'],
    'aPTs' =>               ['https://en.wikipedia.org/wiki/Advanced_persistent_threat','Advanced Persistent Threats','Advanced Persistent Threats (APTs)'],
    'bankingTrojan' =>      ['https://www.checkpoint.com/cyber-hub/cyber-security/what-is-trojan/what-is-a-banking-trojan/','Banking Trojan','Banking Trojans'],
    'rATs' =>               ['https://www.checkpoint.com/cyber-hub/threat-prevention/what-is-remote-access-trojan/','Remote Access Trojan','Remote Access Trojans (RATs)'],
    'adware' =>             ['https://en.wikipedia.org/wiki/Adware','Adware','Adware'],
    'rootkits' =>           ['https://en.wikipedia.org/wiki/Rootkit','Rootkit','Rootkit']

    ];

    $titles=[ //titles and subtitles
                'Malware Cleaner',
                'The Hidden Dangers of the Digital World',
                'To keep your digital garden healthy and thriving, you need to:',
                'So, where does malware come from?',
                'What can malware do to your computer?',
                'How can you protect yourself from malware?',
                'The Case of the Corrupted Photos',
                'internetAge'=>'Internet Age and Complex Malware',
                'earlyDays'=>'Early Days: Simple Viruses and Worms',
                'theRise'=>'The Rise of Personal Computers and Viruses',
                'modernMLW'=>'Modern Malware: Ransomware, Spyware, and Beyond',
                'once'=>'Once inside, it can do bad things like',
                'howCanGet'=>'How can you get malware on your computer?',
                'howCanProt'=>'How can you protect your computer from malware?',
    ];

    $images=[ //images
    'garden' => '<img src="../../../tempimages/fa.jpg" alt="Garden" class="rtl gardenImgRight" height="85" width="400">',
    'biggerGarden'=>'<img src="../../../tempimages/OIG2.jpg" class="rtl" alt="Tech Garden" style="background-color: rgb(49, 99, 83);" width="500" height="300">',
    'secondImage'=>'<img src="../../../tempimages/secondImage.jpg" class="fl" alt="Second Image" style="background-color: darkcyan;" width="100" height="75">',
    'thirdImage'=>'<img src="../../../tempimages/hide.jpg" class="rtl" alt="Third Image" style="background-color: darkcyan; margin-left: 1%;" width="100" height="75">',
    'fourthImage'=>'<img src="../../../tempimages/perl.jpg" class="fl" alt="Fourth Image" style="background-color: darkcyan;" width="100" height="75">',
    ];
    function anchor($url,$title,$anchor = null) { // Function to generate HTML link
    if ($anchor === null) : $anchor = $title; endif;
    return '<a href="'.$url.'" title="'.$title.'">'.$anchor.'</a>';
    }
    // Links $variables to make the arrays more readable.
    #$variables assignment                                                             |Early Days|
        $creeperWorm        =   anchor($links['creeperWorm'][0],$links['creeperWorm'][1],$links['creeperWorm'][2]);
            $arpaNet        =   anchor($links['arpaNet'][0],$links['arpaNet'][1]);
        $elkCloner          =   anchor($links['elkCloner'][0],$links['elkCloner'][1],$links['elkCloner'][2]);
            $appleII        =   anchor($links['appleII'][0],$links['appleII'][1]);
            $floppyDisk     =   anchor($links['floppyDisk'][0],$links['floppyDisk'][1],$links['floppyDisk'][2]);
    $earlyDays=[ //earlyDays
                'creeperWorm'=>[$creeperWorm,
                                  'One of the earliest known pieces of malware, this worm spread across the '.$arpaNet.', leaving the message "I\'m the creeper, catch me if you can!"'],
                'elkCloner'=>[$elkCloner,
                                'This virus infected '.$appleII.' computers through '.$floppyDisk.', displaying a taunting poem upon execution.'],
    ];                                                          //Variables assignment |The Rise|
        $brainVirus         =   anchor($links['brainVirus'][0],$links['brainVirus'][1],$links['brainVirus'][2]);
        $jVirus87           =   anchor($links['jVirus87'][0],$links['jVirus87'][1],$links['jVirus87'][2]);
            $timeBombVirus  =   anchor($links['timeBombVirus'][0],$links['timeBombVirus'][1],$links['timeBombVirus'][2]);
    $theRise=[ //theRise
                'brainVirus'=>[$brainVirus,
                                'The first widely known virus for IBM PCs, it infected '.$floppyDisk.' and displayed a message about copyright protection.'],
                'jVirus87'=>[$jVirus87,
                                'This '.$timeBombVirus.' was designed to delete files on Fridays the 13th.']
    ];                                                          //Variables assignment |Internet Age|
        $morrisWorm             =   anchor($links['morrisWorm'][0],$links['morrisWorm'][1],$links['morrisWorm'][2]);
            $worms              =   anchor($links['worms'][0],$links['worms'][1],$links['worms'][2]);
        $cihVirus               =   anchor($links['cihVirus'][0],$links['cihVirus'][1],$links['cihVirus'][2]);
            $systemBIOS         =   anchor($links['systemBIOS'][0],$links['systemBIOS'][1],$links['systemBIOS'][2]);
        $virusMelisa            =   anchor($links['virusMelisa'][0],$links['virusMelisa'][1],$links['virusMelisa'][2]);
            $worm               =   anchor($links['worm'][0],$links['worm'][1],$links['worm'][2]);
        $codeRedWorm            =   anchor($links['codeRedWorm'][0],$links['codeRedWorm'][1],$links['codeRedWorm'][2]);
            $microsoftIIS       =   anchor($links['microsoftIIS'][0],$links['microsoftIIS'][1]);
        $iLOVEYOUVirus          =   anchor($links['iLOVEYOUVirus'][0],$links['iLOVEYOUVirus'][1],$links['iLOVEYOUVirus'][2]);
        $virusAnnaK             =   anchor($links['virusAnnaK'][0],$links['virusAnnaK'][1],$links['virusAnnaK'][2]);
            $tPAK               =   anchor($links['tPAK'][0],$links['tPAK'][1],$links['tPAK'][2]);
        $blasterWorm            =   anchor($links['blasterWorm'][0],$links['blasterWorm'][1],$links['blasterWorm'][2]);
        $sobigF                 =   anchor($links['sobigF'][0],$links['sobigF'][1],$links['sobigF'][2]);
        $bagleWorm              =   anchor($links['bagleWorm'][0],$links['bagleWorm'][1],$links['bagleWorm'][2]);
            $backDoor           =   anchor($links['backDoor'][0],$links['backDoor'][1],$links['backDoor'][2]);
        $confickerWorm          =   anchor($links['confickerWorm'][0],$links['confickerWorm'][1],$links['confickerWorm'][2]);
        $mydoomWorm             =   anchor($links['mydoomWorm'][0],$links['mydoomWorm'][1],$links['mydoomWorm'][2]);
        $sasserWorm             =   anchor($links['sasserWorm'][0],$links['sasserWorm'][1],$links['sasserWorm'][2]);
        $stormWorm              =   anchor($links['stormWorm'][0],$links['stormWorm'][1],$links['stormWorm'][2]);
            $trojan             =   anchor($links['trojan'][0],$links['trojan'][1],$links['trojan'][2]);
            $botnet             =   anchor($links['botnet'][0],$links['botnet'][1],$links['botnet'][2]);
        $zeus                   =   anchor($links['zeus'][0],$links['zeus'][1],$links['zeus'][2]);
            $keyStrokeLogging   =   anchor($links['keyStrokeLogging'][0],$links['keyStrokeLogging'][1],$links['keyStrokeLogging'][2]);
            $formGrabbing       =   anchor($links['formGrabbing'][0],$links['formGrabbing'][1],$links['formGrabbing'][2]);
        $cryptoLocker           =   anchor($links['cryptoLocker'][0],$links['cryptoLocker'][1],$links['cryptoLocker'][2]);
            $ransomware         =   anchor($links['ransomware'][0],$links['ransomware'][1],$links['ransomware'][2]);
            $key                =   anchor($links['key'][0],$links['key'][1],$links['key'][2]);
        $miraiMalware           =   anchor($links['miraiMalware'][0],$links['miraiMalware'][1],$links['miraiMalware'][2]);
        $wCryRansomware         =   anchor($links['wCryRansomware'][0],$links['wCryRansomware'][1],$links['wCryRansomware'][2]);
        $petyaNotPetya          =   anchor($links['petyaNotPetya'][0],$links['petyaNotPetya'][1],$links['petyaNotPetya'][2]);
        $emotet                 =   anchor($links['emotet'][0],$links['emotet'][1],$links['emotet'][2]);
        $trickBot               =   anchor($links['trickBot'][0],$links['trickBot'][1],$links['trickBot'][2]);
        $ryukRansomware         =   anchor($links['ryukRansomware'][0],$links['ryukRansomware'][1],$links['ryukRansomware'][2]);
        $blueKeep               =   anchor($links['blueKeep'][0],$links['blueKeep'][1],$links['blueKeep'][2]);
            $rCE                =   anchor($links['rCE'][0],$links['rCE'][1],$links['rCE'][2]);
        $eternalBlue            =   anchor($links['eternalBlue'][0],$links['eternalBlue'][1],$links['eternalBlue'][2]);
            $shadowBrokers      =   anchor($links['shadowBrokers'][0],$links['shadowBrokers'][1],$links['shadowBrokers'][2]);
            $nsa                =   anchor($links['nsa'][0],$links['nsa'][1],$links['nsa'][2]);
            $eBWCry             =   anchor($links['wCryRansomware'][0],$links['wCryRansomware'][1],rtrim($links['wCryRansomware'][2]," Ransomware (2017)"));
            $eBpetyaNotPetya    =   anchor($links['petyaNotPetya'][0],$links['petyaNotPetya'][1],substr($links['petyaNotPetya'][2],6,-12));
        $qakBot                 =   anchor($links['qakBot'][0],$links['qakBot'][1],$links['qakBot'][2]);
        $botenaGo               =   anchor($links['botenaGo'][0],$links['botenaGo'][1],$links['botenaGo'][2]);
            $go                 =   anchor($links['go'][0],$links['go'][1],$links['go'][2]);
            $ioT                =   anchor($links['ioT'][0],$links['ioT'][1],$links['ioT'][2]);
        $darkSideRansomware     =   anchor($links['darkSideRansomware'][0],$links['darkSideRansomware'][1],$links['darkSideRansomware'][2]);
            $cPipelineI         =   anchor($links['cPipelineI'][0],$links['cPipelineI'][1],$links['cPipelineI'][2]);
        $solarWindsAttack       =   anchor($links['solarWindsAttack'][0],$links['solarWindsAttack'][1],$links['solarWindsAttack'][2]);
            $supplyCAttack      =   anchor($links['supplyCAttack'][0],$links['supplyCAttack'][1],$links['supplyCAttack'][2]);
        $hafnium                =   anchor($links['hafnium'][0],$links['hafnium'][1],$links['hafnium'][2]);
        $revilRansomware        =   anchor($links['revilRansomware'][0],$links['revilRansomware'][1],$links['revilRansomware'][2]);
            $kVSA               =   anchor($links['kVSA'][0],$links['kVSA'][1],$links['kVSA'][2]);
        $contiRansomware        =   anchor($links['contiRansomware'][0],$links['contiRansomware'][1],$links['contiRansomware'][2]);
        $blackMatter            =   anchor($links['blackMatter'][0],$links['blackMatter'][1],$links['blackMatter'][2]);
        $log4Shell              =   anchor($links['log4Shell'][0],$links['log4Shell'][1],$links['log4Shell'][2]);
        $mosaicLoader           =   anchor($links['mosaicLoader'][0],$links['mosaicLoader'][1],$links['mosaicLoader'][2]);
        $fritzFrog              =   anchor($links['fritzFrog'][0],$links['fritzFrog'][1],$links['fritzFrog'][2]);
        $stuxnet                =   anchor($links['stuxnet'][0],$links['stuxnet'][1],$links['stuxnet'][2]);
        $dridex                 =   anchor($links['dridex'][0],$links['dridex'][1],$links['dridex'][2]);
        $agentTesla             =   anchor($links['agentTesla'][0],$links['agentTesla'][1],$links['agentTesla'][2]);
        $keylogger              =   anchor($links['keylogger'][0],$links['keylogger'][1],$links['keylogger'][2]);
    $internetAge=[ //internetAge
                'morrisWorm'=>[$morrisWorm,
                                'One of the first Internet '.$worms.', it quickly spread and caused significant disruption to networks worldwide.'],
                'cihVirus' => [$cihVirus,
                                'A virus that could overwrite '.$systemBIOS.', rendering the computer unbootable.'],
                'virusMelisa'=>[$virusMelisa,
                                'This email '.$worm.' used Microsoft Word attachments to spread and could potentially crash infected computers.'],
                'ILOVEYOUVirus' => [$iLOVEYOUVirus,
                                                'A computer '.$worm.' that spread through email with the subject "ILOVEYOU," causing widespread damage by overwriting files.'],
                'codeRedWorm'=>[$codeRedWorm,
                                'A '.$worm.' that exploited a vulnerability in '.$microsoftIIS.' web servers, causing widespread disruption.'],
                'virusAnnaK' => [$virusAnnaK,
                                'A computer '.$worm.' disguised as a photo of the tennis player '.$tPAK.', which spread via email.'],
                'blasterWorm' => [$blasterWorm,
                                'A '.$worm.' that targeted Windows and caused infected machines to reboot continuously.'],
                'sobigF' => [$sobigF,
                                'One of the most widespread email '.$worms.', known for flooding inboxes with infected emails.'],
                'bagleWorm' => [$bagleWorm,
                                'A '.$worm.' that opened a '.$backDoor.' on infected systems, allowing remote control.'],
                'mydoomWorm' => [$mydoomWorm,
                                'One of the fastest-spreading email '.$worms.', which also launched a denial-of-service attack against several websites.'],
                'sasserWorm' => [$sasserWorm,
                                'A '.$worm.' that exploited a vulnerability in Windows, causing infected computers to continually crash and reboot.'],
                'stormWorm' => [$stormWorm,
                                'A '.$trojan.' horse that spread through email and turned infected computers into bots for a '.$botnet.'.'],
                'confickerWorm' => [$confickerWorm,
                                'A notorious '.$worm.' that exploited Windows vulnerabilities, infecting millions of computers worldwide.'],
                'zeus' => [$zeus,
                                'A '.$trojan.' horse that primarily targeted Windows systems to steal banking information through '.$keyStrokeLogging.' and '.$formGrabbing.'.'],
                'qakBot' => [$qakBot,
                                'A banking '.$trojan.' that has evolved into a sophisticated malware used for data theft and '.$ransomware.' delivery.'],
                'stuxnet' => [$stuxnet,
                                'A highly sophisticated '.$worm.' that targeted industrial control systems, specifically those used in Iran’s nuclear program.'],
                'cryptoLocker' => [$cryptoLocker,
                                'One of the first widespread '.$ransomware.' attacks, encrypting users’ files and demanding a ransom for the decryption '.$key.'.'],
                'dridex' => [$dridex,
                                'A banking '.$trojan.' that has evolved into a modular malware used for financial fraud and '.$ransomware.' delivery.'],
                'agentTesla' => [$agentTesla,
                                'A '.$keylogger.' and information stealer that targets credentials and other sensitive data.'],
                'miraiMalware' => [$miraiMalware,
                                'Malware that turned networked devices running Linux into remotely controlled bots for large-scale network attacks.'],
                'wCryRansomware' => [$wCryRansomware,
                                'A '.$ransomware.' attack that encrypted files on infected computers and demanded ransom payments in Bitcoin.'],
                'petyaNotPetya' => [$petyaNotPetya,
                                'Initially a '.$ransomware.', later versions like NotPetya were designed to cause widespread disruption rather than financial gain.'],
                'emotet' => [$emotet,
                                'Initially a banking '.$trojan.', it evolved into a highly modular '.$botnet.' used to distribute other malware.'],
                'trickBot' => [$trickBot,
                                'A sophisticated banking '.$trojan.' that has evolved into a modular malware suite, often used in conjunction with '.$ransomware.'.'],
                'ryukRansomware' => [$ryukRansomware,
                                'A '.$ransomware.' strain known for targeting large organizations and demanding high ransom payments.'],
                'blueKeep' => [$blueKeep,
                                'A critical vulnerability in Windows Remote Desktop Services that could allow for '.$rCE.' and has been exploited by various malware.'],
                'solarWindsAttack' => [$solarWindsAttack,
                                'A sophisticated '.$supplyCAttack.' that compromised the software updates of SolarWinds’ Orion platform, affecting numerous organizations.'],
                'eternalBlue' => [$eternalBlue,
                                'An exploit developed by the '.$nsa.' and leaked by the '.$shadowBrokers.', used in various attacks including '.$eBWCry.' and '.$eBpetyaNotPetya.'.'],
                'botenaGo' => [$botenaGo,
                                'A new '.$botnet.' malware written in '.$go.', targeting '.$ioT.' devices and routers.'],
                'hafnium' => [$hafnium,
                                'A group exploiting vulnerabilities in Microsoft Exchange Server to steal data from various organizations.'],
                'log4Shell' => [$log4Shell,
                                'A critical vulnerability in the Apache Log4j library, widely exploited for remote code execution.'],
                'mosaicLoader' => [$mosaicLoader,
                                'A malware loader that spreads through cracked software downloads, used to deliver various types of malware.'],
                'revilRansomware' => [$revilRansomware,
                                'A '.$ransomware.'-as-a-service operation responsible for numerous high-profile attacks, including the '.$kVSA.'.'],
                'darkSideRansomware' => [$darkSideRansomware,
                                'A '.$ransomware.' group known for high-profile attacks, including the '.$cPipelineI.'.'],
                'contiRansomware' => [$contiRansomware,
                                'A '.$ransomware.' strain known for its speed and efficiency in encrypting data, often used in double extortion schemes.'],
                'fritzFrog' => [$fritzFrog,
                                'A peer-to-peer '.$botnet.' targeting SSH servers, known for its decentralized structure and ability to evade detection.'],
                'blackMatter' => [$blackMatter,
                                'A '.$ransomware.' group that emerged after the shutdown of DarkSide, targeting large organizations.'],
    ];                                                          //Variables assignment |Modern Malware|
        $mMLRansomware=  anchor($links['ransomware'][0],$links['ransomware'][1],ucfirst($links['ransomware'][2]));
        $spyware=  anchor($links['spyware'][0],$links['spyware'][1],ucfirst($links['spyware'][2]));
        $phishing=  anchor($links['phishing'][0],$links['phishing'][1],ucfirst($links['phishing'][2]));
        $aTPs=  anchor($links['aPTs'][0],$links['aPTs'][1],ucfirst($links['aPTs'][2]));
        $bankingTrojan=  anchor($links['bankingTrojan'][0],$links['bankingTrojan'][1],ucfirst($links['bankingTrojan'][2]));
        $rATs=  anchor($links['rATs'][0],$links['rATs'][1],ucfirst($links['rATs'][2]));
        $adware=  anchor($links['adware'][0],$links['adware'][1],ucfirst($links['adware'][2]));
        $rootkit=  anchor($links['rootkits'][0],$links['rootkits'][1],ucfirst($links['rootkits'][2]));
        $mMLBotnet=  anchor($links['botnet'][0],$links['botnet'][1],ucfirst($links['botnet'][2]));
        $mMLKeylogger=  anchor($links['keylogger'][0],$links['keylogger'][1],ucfirst($links['keylogger'][2]));
    $modernMLW=[ //modern malware
                'ransomware'=>[$mMLRansomware,'A type of malware that encrypts victims\' files and demands a ransom for decryption.'],
                'spyware'=>[$spyware,'Malware designed to gather information about a user\'s activities without their knowledge.'],
                'phishing'=>[$phishing,'Attempts to trick users into revealing personal information through fraudulent emails or websites.'],
                'apts'=>[$aTPs,'Sophisticated attacks often carried out by nation-states or organized crime groups.'],
                'trojans'=>[$trojan,'Malicious software disguised as legitimate software, which can create backdoors for unauthorized access.'],
                'bankingTrojans'=>[$bankingTrojan,'Malicious software disguised as legitimate software, which can create backdoors for unauthorized access.'],
                'remoteAccessTrojans'=>[$rATs,'Allow attackers to remotely control infected systems.'],
                'adware'=>[$adware,'Software that automatically displays or downloads advertising material, often without user consent.'],
                'rootkits'=>[$rootkit,'Tools that enable unauthorized users to gain control of a system without being detected.'],
                'botnets'=>[$mMLBotnet,'Networks of infected computers controlled by a central entity, often used for large-scale attacks.'],
                'Keyloggers'=>[$mMLKeylogger,'Programs that record keystrokes to steal sensitive information like passwords and credit card numbers.'],
    ];
    $malware = [
        'Malware','is short for "malicious software." It\'s like a sneaky little thief that can sneak into your computer without you knowing.',
        'once' => [
            'Steal your information',
            'Malware can steal your passwords, credit card numbers, and other personal details.',
            'Damage your computer',
            'It can mess up your files, slow down your computer, or even make it stop working altogether.',
            'Spread to other computers',
            'Malware can spread from your computer to your friends\' computers, causing them problems too.'],
        'howCanGet'=>[
            'Downloading infected files',
            'If you download a file from an untrusted source, it might contain malware.',
            'Clicking on bad links',
            'Clicking on links in emails or on websites can sometimes lead to malware.',
            'Opening attachments',
            'Be careful about opening attachments in emails, especially from people you don\'t know.'],
        'howCanProt'=>[
            'Use antivirus software',
            'This is like a security guard for your computer. It scans for malware and removes it before it can do damage.',
            'Be careful about what you download and click',
            'Only download files from trusted sources, and avoid clicking on suspicious links.',
            'Keep your software up to date',
            'Software updates often include security patches that can protect you from malware.']
    ];
    $hiddenDangers = [
        'Imagine your computer as a garden.',
        'Just like a garden needs regular care and protection, so does your computer.',
        'Malware is like weeds',
        'They can quickly overgrow and choke your computer\'s performance, making it slow and sluggish.',
        'Viruses are like pests',
        'They can infect your files and programs, causing damage or even deleting them entirely.',
        'Phishing scams are like thieves',
        'They try to trick you into giving away your personal information, just like a thief might try to steal your wallet.',
    ];
    $healthyAndThrivingGarden = [
        'Regularly update your antivirus software',
        'This is like spraying pesticide on your garden to keep pests away.',
        'Be careful what you download',
        'Only download software from trusted sources, just like you wouldn\'t plant seeds from an unknown source.',
        'Be mindful of phishing attempts',
        'Don\'t click on suspicious links or open attachments from unknown senders.',
        'Back up your data',
        'Just like you might save seeds from your best plants, backing up your data ensures you can restore it if something goes wrong.'
    ];
    $comeFrom =[
        'emails' => ['Emails','Be careful of emails with attachments or links, especially from people you don\'t know. These can contain malware.'],
        'downloads' =>['Downloads','Avoid downloading files from websites you don\'t trust. Malware can be hidden in seemingly harmless downloads.'],
        'websites' =>['Websites','Some websites can infect your computer with malware just by visiting them.'],
        'usbDrives' => ['USB drives','If you plug a USB drive into your computer, be sure it\'s from a trusted source. It could contain malware.'],
        'socialMedia' => ['Social Media', 'Be cautious of messages and links on social media, as they can also contain malware.'],
        'outdatedSoftware' => ['Outdated Software', 'Can contain vulnerabilities exploited by malware.'],
        'phishingAttacks' => ['Phishing Attacks','Be aware of phishing attempts, which try to trick you into clicking on malicious links or providing personal information.'],
        'mobileDevices' => ['Mobile Devices','Malware can also infect mobile devices, so be careful about downloading apps from untrusted sources and clicking on suspicious links.'],
    ];
    $doComputer = [
        'Steal your information',
        'Malware can steal your personal information, like passwords, credit card numbers, and even photos.',
        'Damage your files',
        'It can delete or corrupt your important files, like documents, photos, or videos.',
        'Slow down your computer',
        'Malware can make your computer run slowly or crash.',
        'Control your computer',
        'In some cases, malware can take control of your computer and use it for harmful purposes.',
        'Cause financial loss',
        'Malware can lead to identity theft, online fraud, and other financial losses.',
        'Violate your privacy',
        'Malware can spy on your activities and expose your personal information.',
        'Disrupt your life',
        'Malware can cause significant disruption to your work or personal life due to ransomware attacks or DoS attacks.',
        'Have legal consequences',
        'Engaging in malicious activities using malware can lead to legal consequences.'
    ];
    $protect = [
        'Use antivirus software',
        'This is like a security guard for your computer. It can help protect you from malware.',
        'Be careful with downloads',
        'Only download files from websites you trust.',
        'Don\'t click on suspicious links',
        'If an email or website looks suspicious, don\'t click on any links.',
        'Keep your software updated',
        'Make sure your operating system and software are always up-to-date with the latest security patches.',
        'Remember',
        'Prevention is key. By following these simple steps, you can help keep your computer safe from malware.',
    ];
    $perl = [
        'Perl was a passionate photographer.',
        'She loved capturing the beauty of the world around her, and her photo library was a treasure trove of memories. One day, she noticed that some of her most recent photos were missing.',
        'She searched her computer frantically, but couldn\'t find them anywhere.',
        'Perl suspected malware might be to blame. She had recently clicked on a suspicious email attachment, and she remembered hearing about malware that could delete files.',
        'Worried that her precious photos were gone forever, she decided to take action. She downloaded a reputable malware cleaner and ran a full scan of her computer. The scan found several malicious files that had been lurking on her system. After removing the malware, Perl was able to recover most of her missing photos. Relieved and grateful, Perl learned a valuable lesson about online safety.',
        'From then on, she was more cautious about clicking on suspicious links or downloading attachments from unknown sources. She also made sure to keep her antivirus software up-to-date and regularly backed up her important files.'
    ];
     echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
  
    echo "</div>";
            ?>
            <article class="hero4">
    <div class="fullbar">
    <h1 id="title"><?= empty($titles) ? $titulos[0] : $titles[0];?></h1>
    
    <!-- 1st Section -->
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[Early days Section]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    <div class="colms2">
        <dl>
            <details tabindex="0" class="selection item">
                <summary>
                    <?= empty($earlyDays) ? $titulos['primerosDias'] : $titles['earlyDays'];?>
                </summary>
                <hr>
                <?php
                    $jours = !empty($earlyDays) ? $earlyDays : $primerosDias;
                    foreach ($jours as $clavis => $jour) :  // Displays each element of the selected array
                        echo "<div class=\"item\"><dt>{$jour[0]}</dt>";
                        echo "<dd><span tabindex=\"0\" class=\"selection_2\">{$jour[1]}</span></dd></div>";
                    endforeach;
                ?>
                <br />
            </details>
        </dl>
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[The Rise Section]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        <dl>
            <details tabindex="0" class="selection item">
                <summary>
                    <?= empty($earlyDays) ? $titulos['elAumento'] : $titles['theRise'];?>
                </summary>
                <hr>
                <?php
                    $levers = !empty($theRise) ? $theRise : $elAumento;
                    foreach ($levers as $clavis => $lever) :  //Displays each element of the array theRise
                        echo "<div class=\"item\"><dt>{$lever[0]}</dt>";
                        echo "<dd><span tabindex=\"0\" class=\"selection_2\">{$lever[1]}</span></dd></div>";
                    endforeach;
                ?>
                <br />
            </details>
        </dl>
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[internet Age Section]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        <dl>
            <details tabindex="0" class="selection">
                <summary>
                    <?= empty($internetAge) ? $titulos['eraDeInternet'] : $titles['internetAge'];?>
                </summary>
                <hr>
                <?php
                    $internetAetas = !empty($internetAge) ? $internetAge : $eraDeInternet;
                    foreach ($internetAetas as $clavis => $internetAeta) :  //Displays each element of the array internetAge
                        echo "<div class=\"item\"><dt>{$internetAeta[0]}</dt>";
                        echo "<dd><span tabindex=\"0\" class=\"selection_2\">{$internetAeta[1]}</span></dd></div>";
                    endforeach;
                ?>
                <br /><br />
            </details>
        </dl>
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[Modern MLW Section]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        <dl>
            <details tabindex="0" class="selection item">
                <summary>
                    <?= empty($internetAge) ? $titulos['mlwModerno'] : $titles['modernMLW'];?>
                </summary>
                <hr>
                <?php
                    $modernus = !empty($modernMLW) ? $modernMLW : $mlwModerno;
                    foreach ($modernus as $clavis => $modernu) :  //Displays each element of the array internetAge
                        echo "<div class=\"item\"><dt>{$modernu[0]}</dt>";
                        echo "<dd><span tabindex=\"0\" class=\"selection_2\">{$modernu[1]}</span></dd></div>";
                    endforeach;
                ?>
                    <br /><br />
            </details>
        </dl>
    </div><!-- colms2 -->
    <!-- 1st Section^^^ -->

    <!-- 2nd Section -->
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[BOLD Malware Section]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    <details>
        <summary>
            <h2 tabindex="0" style="padding:0;cursor:pointer;" class="hero4 selection_2">
                <strong style="font-weight: 900"><?= empty($malware)? $swMaligno[0] : $malware[0];?></strong>
                <?= empty($malware)? $swMaligno[1] : $malware[1];?>
            </h2>
        </summary>
        <dl class="blurb">
        <?php
        function renderSections($tituli, $sectio) {
            foreach ($sectio as $clavis => $valores) :  // 'clavis' for key
                echo '<h2 class="hero3">' . $tituli[$clavis] . '</h2><div class="newspaper2">';
                for ($i = 0; $i < count($valores); $i += 2) :
                    echo '<fieldset tabindex="0" class="selection_2"><dt><legend>'. htmlspecialchars($valores[$i]) . '</legend></dt>';
                    echo '<dd>' . (isset($valores[$i + 1]) ? htmlspecialchars($valores[$i + 1]) : '') . '</dd></fieldset>'; endfor;
                echo '</div>'; endforeach;
        }

            if (!empty($malware)) :         // ☁【ツ】☁ English section ☁【ツ】☁
                $sections = ['once' => $malware['once'],'howCanGet' => $malware['howCanGet'],'howCanProt' => $malware['howCanProt'] ];
                renderSections($titles, $sections); endif;

            if (!empty($swMaligno)) :       // ☁【ツ】☁ Sección en Español ☁【ツ】☁
                $secciones = ['uno' => $swMaligno['uno'],'comoPuedoObt' => $swMaligno['comoPuedoObt'],'comoPuedoProt' => $swMaligno['comoPuedoProt'] ];
                renderSections($titulos, $secciones); endif;
        ?>

        </dl>
    </details>
    <!-- 2nd Section^^^ -->

    <!-- 3rd Section -->
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[Hidden Dangers of the Digital World]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        <h2 style="padding-right:150px;"><?= empty($titles) ? $titulos[1] : $titles[1];?></h2>
        <p style="padding-right:150px;"><?= empty($hiddenDangers) ? $peligrosOcultos[0] : $hiddenDangers[0];
                                            echo empty($images) ? $imagenes['jardin'] : $images['garden']; ?>
            <br /><?= empty($hiddenDangers) ? $peligrosOcultos[1] : $hiddenDangers[1]; ?>
        </p>
        <ol class="newspaper2">
            <?php
            for ($i = 2; $i <= 7; $i += 2) {
                echo '<li tabindex="0" class="selection_2 fence' . (($i == 2) ? 'L' : (($i == 6) ? 'R' : 'C')) . '"><strong class="fenceBold">' . (empty($hiddenDangers[$i]) ? $peligrosOcultos[$i] : $hiddenDangers[$i]) . '</strong> ';
                echo (empty($hiddenDangers[$i+1]) ? $peligrosOcultos[$i+1] : $hiddenDangers[$i+1]) . '</li>';
            } ?>
        </ol>
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[To keep your digital garden healthy and thriving, you need to:]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        <div class="blurb">
            <h2 class="garden"><?= empty($titles) ? $titulos[2] : $titles[2];?></h2>
            <p class="colms2">
                <?php
                for ($i = 0; $i < 8; $i += 2) {
                    echo '<span tabindex="0" class="item selection_2"><strong class="fenceBold">' . (empty($healthyAndThrivingGarden[$i]) ? $jardinSaludableYProspero[$i] : $healthyAndThrivingGarden[$i]) . '</strong> ';
                    echo (empty($healthyAndThrivingGarden[$i+1]) ? $jardinSaludableYProspero[$i+1] : $healthyAndThrivingGarden[$i+1]) . '</span><br />';
                } ?>
            </p>
        </div>
    <!-- 3rd Section^^^ -->

    <!-- 4th Section -->
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[So, where does malware come from?]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        <div class="blurb">
            <h2 class="garden"><?= empty($titles) ? $titulos[3] : $titles[3];?></h2>
            <p class="newspaper2">
                <?php if (!empty($origenes)){
                foreach ($origenes as $key => $value) {
                    echo '<span tabindex="0" class="item selection_2"><strong>' .
                         (empty($comeFrom) ? $value[0] : $comeFrom[$key][0]) .
                         ':</strong> ' .
                         (empty($comeFrom) ? $value[1] : $comeFrom[$key][1]) .
                         '</span><br />';
                }}
                if (!empty($comeFrom)) {
                        //FOR SOME REASON THE CLASS ITEM DOES NOT WORK FOR SPANISH... IDK HOW TO MAKE IT WORK
                foreach ($comeFrom as $key => $value) {
                    echo '<span tabindex="0" class="item selection_2"><strong>' .
                         (empty($comeFrom) ? $origenes[$key][0] : $value[0]) .
                         ':</strong> ' .
                         (empty($comeFrom) ? $origenes[$key][1] : $value[1]) .
                         '</span><br />';
                }}
                ?>
            </p>
        </div>
    <!-- 4th Section^^^ -->

    <!-- 5th Section -->
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[What can malware do to your computer?]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        <div class="blurb">
            <h2 class="garden"><?= empty($titles) ? $titulos[4] : $titles[4];?></h2>
            <dl>
                <ol class="zigzag">
                    <?php
                    if (!empty($queLasComputadoras)) {
                        for ($i = 0; $i < count($queLasComputadoras); $i += 2): ?>
                            <li class="<?= ($i / 2) % 2 == 0 ? 'right' : ''; ?>">
                                <strong class="<?= ($i / 2) % 2 == 0 ? 'rightStr' : ''; ?>">
                                    <?= $queLasComputadoras[$i]; ?>
                                </strong><br />
                                <dd tabindex="0" class="selection_2 <?= ($i / 2) % 2 == 0 ? 'rightdd' : 'leftdd'; ?>">
                                    <?= $queLasComputadoras[$i + 1]; ?>
                                </dd>
                            </li>
                        <?php endfor;
                    }
                    if (!empty($doComputer)){
                        for ($i = 0; $i < count($doComputer); $i += 2): ?>
                            <li class="<?= ($i / 2) % 2 == 0 ? 'right' : ''; ?>">
                                <strong class="<?= ($i / 2) % 2 == 0 ? 'rightStr' : ''; ?>">
                                    <?= $doComputer[$i]; ?>
                                </strong><br />
                                <dd tabindex="0" class="selection_2 <?= ($i / 2) % 2 == 0 ? 'rightdd' : 'leftdd'; ?>">
                                    <?= $doComputer[$i + 1]; ?>
                                </dd>
                            </li>
                    <?php endfor; /*The loop increments by 2 each time because each list item uses two elements from the $doComputer array.
                        We use ($i / 2) % 2 == 0 to alternate between the right and left styles.
                        When ($i / 2) % 2 == 0 is true, the right class and rightStr/rightdd classes are applied;
                    otherwise, no additional classes are applied, assuming "left" styles are default.*/
                    }?>
                </ol>
            </dl>
        </div>
    <!-- 5th Section^^^ -->

    <!-- 6th Section -->
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[How can you protect yourself from malware?]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        <div class="colms2 protect">
            <h2 class="garden blurb selection_2" tabindex="0"><?= empty($titles) ? $titulos[5] : $titles[5];?></h2>
            <fieldset tabindex="0" class="selection_2">
                <legend tabindex="0" class="selection_2"><?= empty($protect) ? $protegete[0] : $protect[0]; ?></legend>
                <?= empty($protect) ? $protegete[1] : $protect[1];?>
            </fieldset>
            <fieldset tabindex="0" class="selection_2">
                <legend tabindex="0" class="selection_2"><?= empty($protect) ? $protegete[2] : $protect[2]; ?></legend>
                <?= empty($protect) ? $protegete[3] : $protect[3];?>
            </fieldset>
            <fieldset tabindex="0" class="selection_2">
                <legend tabindex="0" class="selection_2"><?= empty($protect) ? $protegete[4] : $protect[4]; ?></legend>
                <?= empty($protect) ? $protegete[5] : $protect[5];?>
            </fieldset>
            <fieldset tabindex="0" class="selection_2">
                <legend tabindex="0" class="selection_2"><?= empty($protect) ? $protegete[6] : $protect[6]; ?></legend>
                <?= empty($protect) ? $protegete[7] : $protect[7];?>
            </fieldset>
            <fieldset tabindex="0" class="selection_2">
                <legend tabindex="0" class="selection_2"><?= empty($protect) ? $protegete[8] : $protect[8]; ?></legend>
                <?= empty($protect) ? $protegete[9] : $protect[9];?>
            </fieldset>
        </div>
    <!-- 6th Section^^^ -->

    <!-- 7th Section -->
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[The Case of the Corrupted Photos]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
        <h2><?= empty($titles) ? $titulos[6] : $titles[6]; ?></h2>
        <dl style="margin-bottom: 0;" class="photographer">
            <dd tabindex="0" class="selection_2">
                <?= empty($images) ? $imagenes['jardinGrande'] : $images['biggerGarden']; ?>
                <?= $perl[0]; ?><br />
                <?= $perl[1]; ?>
            </dd>
            <dd tabindex="0" class="selection_2">
                <?= $perl[2]; ?>
                <?= empty($images) ? $imagenes['segundaImagen'] : $images['secondImage']; ?>
                <?= $perl[3]; ?>
            </dd>
            <dd tabindex="0" class="selection_2" class="selection_2" style="margin-right: 17%;">
            <?= empty($images) ? $imagenes['terceraImagen'] : $images['thirdImage']; ?>
                <?= $perl[4]; ?>
                <?= empty($images) ? $imagenes['cuartaImagen'] : $images['fourthImage']; ?>
            </dd>
            <dd tabindex="0" style="margin-bottom: 0;" class="selection_2">
                <?= $perl[5]; ?>
            </dd>
        </dl>
    <!-- 7th Section^^^ -->
    </div> <!-- ^Full Bar -->
    </article>
            <?php
}

function sw_webBrowsers() {


    $profesionalEnvironment =[ 'summary'=>
    ['Online Development and Testing',
                    'Virtual Workspaces',
                'Web-based Applications',
                'Remote Access',
                'Data Management',
                'Learning Languages',
                'Fitness Classes and Virtual Training',
                'Multimedia Creation',
                'Interactive Experiences',
                'Market Analysis',
                'Stock Trading',
                'Event Management',
                'Security and Privacy',
                'Crowdfunding and Fundraising'
    ],
    'detail'=>
    ['Web developers use browsers to build and test websites and applications. Developer tools available in browsers help debug code, analyze performance, and inspect elements.',
                    'Many businesses use web-based virtual desktop environments where employees can access their workspaces from any device with a browser.',
                'Browsers run a variety of web applications like office suites (Google Docs, Office 365), graphic design tools (Canva), and customer relationship management (CRM) software.',
                'Web browsers can be used to remotely access other computers or devices, allowing users to manage systems and files from anywhere.',
                'Browsers can be used to manage data through cloud storage services (like Google Drive, Dropbox), enabling file sharing and collaboration.',
                'Interactive language learning platforms like Duolingo or Babbel can be accessed through browsers, providing tools to learn new languages.',
                'Many fitness instructors and platforms offer live-streaming classes or on-demand workouts that can be accessed through browsers.',
                'Browsers support tools for creating and editing videos, podcasts, and other multimedia content directly online.',
                'Virtual museums, galleries, and educational sites offer interactive experiences that can be enjoyed via web browsers.',
                'Browsers provide access to market research tools and analytics platforms that help businesses understand consumer behavior and trends.',
                'Online brokerage services enable users to trade stocks and manage portfolios through browser-based platforms.',
                'Planning and managing events can be done through browser-based event management tools, including ticket sales, attendee tracking, and virtual event hosting.',
                'Browsers can manage secure communications through encrypted connections (HTTPS), support VPN services, and provide privacy-focused features.',
                'Platforms like Kickstarter and GoFundMe are accessed through browsers, allowing individuals and organizations to raise funds for projects and causes.',
            ],
                                ];


                                $titles=['Web Browsers','Software to browse the web on a PC.',];
    $subTitles = [
        'A Brief History of Web Browsers',
    'The evolution of web browsers has been intertwined with the growth of the internet itself.',
    'Here\'s a simplified timeline:',
    'Early Days (1970s-1980s)',
    'The Graphical Era (1990s)',
    'The Browser Wars (2000s)',
    'Modern Browsers (2010s-Present)',
    'Web Browser Use Cases' ,
    'Professional Environment',
    'A professional Intraction with Web Browsers'
    ];
    $links=['http   s://www.softwaretestinghelp.com/best-browser-ranking/', 'https://learn.microsoft.com/en-us/compliance/'];
    $pc_webBrowsing=[
    'Many websites are now services (like streaming services for example). A web browser is a portal for connecting to computers across the internet. Many services now days can be accessed via web browser making it much easier for companies t  o write programs for their products that use the web as an interface to their services and/or goods.',
    'Microsoft Windows has Microsoft Edge, but there are many other web browsers that can be installed alongside one another; many companies (like schools, banks ,government sites, ETC.) use Edge to stay compliant with government regulations.'
    ];
    $usecases=[
    'Research and Learning' => 'Browsers are used to search for information on virtually any topic, from academic research to personal interest subjects. This includes reading articles, watching educational videos, and accessing online courses.',
    'Communication' => 'Web browsers are the gateway to various communication platforms like email, social media, and messaging services. They help you stay in touch with friends, family, and colleagues.',
    'Entertainment' => 'Streaming videos, listening to music, playing online games, and reading digital books or comics are all activities facilitated by web browsers.',
    'Shopping' => 'Online shopping has become a staple of modern life. Browsers allow you to browse products, compare prices, read reviews, and make purchases from the comfort of your home.',
    'Banking and Finance' => 'Browsers are used to access online banking services, manage investments, pay bills, and perform other financial transactions.',
    'Work and Productivity' => 'Many web-based applications support productivity, including project management tools, collaboration platforms, and document storage and editing services.',
    'News and Updates' => 'Staying updated with current events is easy with browsers. Users can access news websites, subscribe to news feeds, and watch live broadcasts.',
    'Travel Plan    ning' => 'Browsers facilitate booking flights, hotels, and rental cars, as well as researching travel destinations and reading travel blogs or reviews.',
    'Health and Fitness' => 'Web browsers help you find information about health conditions, book medical appointments, track fitness goals, and follow workout routines or diets.',    
    'Government and Civic Services' => 'Accessing government services, such as renewing licenses, filing taxes, or applying for permits, is often done through web browsers.',
    'Job Hunting and Professional Networking' => 'Browsers are essential for searching job listings, submitting applications, and connecting with professionals via platformsplatforms like LinkedIn.'
    ];
    $wbInteraction=[
    '6:30 AM' => 'The alarm on Jordan\'s phone chimed, and after a quick stretch, Jordan grabbed the phone and opened the web browser to check the morning news. Scanning through headlines, Jordan caught up on world events and local news, feeling ready to face the day.',
    '7:00 AM' => 'Over breakfast, Jordan used the browser to watch a couple of tutorial videos on a new software tool needed for a project at work. The videos were informative and set a positive tone for the day.',
    '8:30 AM' => 'Arriving at the office, Jordan opened the browser again, this time to access the company\'s project management software. Tasks were assigned, deadlines checked, and a quick chat with colleagues on the integrated communication platform helped clarify the day\'s priorities.',
    '11:00 AM' => 'During a break, Jordan used the browser to check personal emails and social media accounts. Responding to a few messages and scrolling through the latest updates from friends and family added a light-hearted touch to the busy morning.',
    '1:00 PM' => 'After lunch, it was time for some online shopping. Jordan needed to buy a few things for an upcoming event, so the browser was used to compare prices, read reviews, and make a purchase.',
    '3:00 PM' => 'As the afternoon wore on, Jordan accessed the browser again to join a virtual meeting. The browser facilitated the video call, and Jordan shared a presentation using the browser\'s screen-sharing feature.',
    '5:30 PM' =>     'Wrapping up the workday, Jordan used the browser to manage finances. Online banking allowed Jordan to pay bills, check account balances, and ensure everything was in order.',
    '7:00 PM' => 'At home, Jordan used the browser to plan a weekend trip. Researching travel destinations, booking a hotel, and checking flight options were all seamlessly done on    line.',
    '9:00 PM' => 'The day winding down, Jordan settled on the couch with a laptop. Browsers made it easy to stream a favorite TV show on a popular streaming platform, providing a relaxing end to a productive day.',
    '11:00 PM' => 'Before bed, Jordan used the browser one last time to review an online course. Learning something new felt like a great way to wrap up the day.   '
    ];
    $pro_environment=[
    'summary' => [
        'ENQUIRE: One of the earliest web browsers, developed in 1973.',
        'WorldWideWeb (WWW): Created by Tim Berners-Lee in 1989.',
        'Mosaic: Released in 1993, one of the first graphical web browsers.',
        'Netscape Navigator: Dominated the late 1990s.',
        'Internet Explorer: Microsoft\'s response to Netscape.',
        'Mozilla Firefox: Launched in 2004, gained popularity due to its open-source nature.',
        'Google Chrome: Released in 2008, known for its speed and performance.',
        'Safari: Apple\'s web browser.',
        'The browser market remains competitive, with ongoing innovations in areas like speed, security, and features.'
    ],
    'detail' => [
        'ENQUIRE was a hypertext-based system that allowed users to create and manage links between documents.',
        'WorldWideWeb (WWW) was the first web browser and editor, developed by Tim Berners-Lee.',
        'Mosaic was a graphical web browser that popularized the web and made it accessible to a wider audience.',
        'Netscape Navigator was a commercial web browser that dominated the market in the late 1990s.',
        'Internet Explorer was Microsoft\'s response to Netscape Navigator and became a widely used web browser.',
        'Mozilla Firefox is an open-source web browser that gained popularity due to its speed, security, and customization options.',
        'Google Chrome is a web browser developed by Google that is known for its speed, simplicity, and seamless integration with other Google services.',
        'Safari is a web browser developed by Apple that is known for its speed, security, and integration with other Apple devices.',
        'The browser market continues to evolve with new features, security updates, and innovations in areas like artificial intelligence and virtual reality.'
    ]
    ];
    //These Detail $pro_environment['detail'] do not lead anywhere.


     echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
 
    echo "</div>";
        ?>
        <style>.buttons {
    width: 50%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
    gap: 15px;
    padding: 20px 0;
}

section a{
    color: rgb(101, 101, 101);
}
section a:hover{
    color: midnightblue;
}
.steps{
    background-color: rgba(252, 253, 159, 0.41);
}
.selection:hover{
 background-color: rgba(25, 25, 112, 0.146);
}
.selection{
    padding: 1%;
    border-radius: 1.5%;
    padding-left:25%;
    text-align: center;
}
.steps h2{
    font-size: 1.3em;
    padding-left:1%;
}
.steps p {
    font-size: 1.2em;
    padding-top: 2%;
    width:70%;
}
.steps strong{
    font-size: 1.7em;
}
.readMore{
    background-color: rgba(25, 25, 112, 0.146);   
    padding: 1%;
    border-radius: 1.5%;
    margin-right: 1%;
    text-align: center;
}
.rm{
    font-size: 1.5em; float:right; padding-right: 2em; margin-top: .7em;cursor: pointer;
}
.rm:hover{
    color: midnightblue;
    text-decoration: underline;
}

.fl {
    float: left;
    margin-right: 10px;
    width: 25%;
    height: auto;
}
.rtl {
    float: right;
}
            </style>
        <article class="hero4 fullbar">
    <h1 id="title"><?= empty($titles) ? $titulos[0] : $titles[0];?></h1>
    <h2><span style="text-align:right;color:blue;">
            <!-- INDENT THE SECOND H2 -->
            <?= empty($titles) ? $titulos[1] : $titles[1];?>
        </span></h2>

    <p tabindex="0" class="selection"><?= empty($pc_webBrowsing) ? $navegacionWeb_pc[0] : $pc_webBrowsing[0];?></p>
    <img tabindex="0" src="../../../tempimages/sath.jpg" style="background-color:rgb(178,34,34,.7);" alt="1st image" class="fl selection_2 card2" height="100%" width="10%">
    <p tabindex="0" class="selection"><?= empty($pc_webBrowsing) ? $navegacionWeb_pc[1] : $pc_webBrowsing[1];?></p>
    <hr />
    <h2><?= empty($subTitles) ? $subtitulos[0] : $subTitles[0];?></h2>

    <p><?= empty($subTitles) ? $subtitulos[1] : $subTitles[1];?></p>
    <h2 style="text-align:center;"><?= empty($subTitles) ? $subtitulos[2] : $subTitles[2];?></h2>
    <section class="colms2">

        <div class="selection">
            <h2><?= empty($subTitles) ? $subtitulos[3] : $subTitles[3];?></h2>
            <ul>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][0] : $pro_environment['summary'][0];?></li>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][1] : $pro_environment['summary'][1];?></li>
            </ul>
        </div>

        <div class="item selection" style="margin-top: 79px;">
            <h2><?= empty($subTitles) ? $subtitulos[4] : $subTitles[4];?></h2>
            <ul>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][2] : $pro_environment['summary'][2];?></li>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][3] : $pro_environment['summary'][3];?></li>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][4] : $pro_environment['summary'][4];?></li>
            </ul>
        </div>

        <div class="selection item">
            <h2><?= empty($subTitles) ? $subtitulos[5] : $subTitles[5];?></h2>
            <ul>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][5] : $pro_environment['summary'][5];?></li>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][6] : $pro_environment['summary'][6];?></li>
                <li><?= empty($pro_environment) ? $entornoProfesional['resumen'][7] : $pro_environment['summary'][7];?></li>
            </ul>
        </div>

        <div class="selection">
            <h2><?= empty($subTitles) ? $subtitulos[6] : $subTitles[6];?></h2>
            <p><?= empty($pro_environment) ? $entornoProfesional['resumen'][8] : $pro_environment['summary'][8];?></p>
        </div>
    </section> <!-- colms2 -->
    <hr style="width:65%;">
    <h2 class="center"><?= empty($subTitles) ? $subtitulos[7] : $subTitles[7];?></h2>
    <section class="colms newspaper2">
    <?php
        $activeArr = !empty($usecases) ? $usecases : $casosDeUso;
        foreach ($activeArr as $key => $value) { ?>
            <fieldset>
                <legend><?= $key; ?></legend> <?= $value; ?>
            </fieldset>
    <?php }
    ?>
    </section>
    <hr style="width:65%;">
    <h2 class="center"><?= empty($subTitles) ? $subtitulos[8] : $subTitles[8];?></h2>
    <section class="colms2">
    <?php
        $environment = !empty($profesionalEnvironment) ? $profesionalEnvironment : $entornoPro;
        if (!empty($environment)) {
            foreach ($environment['summary'] as $index => $summary) { ?>
                <details>
                    <summary class="selection_2"><?= htmlspecialchars($summary); ?></summary>
                    <div class="pe">
                        <span tabindex="0" class="selection_2"><?= htmlspecialchars($environment['detail'][$index]); ?></span>
                    </div>
                </details>
            <?php }
        }
    ?>
    </section>
    <hr style="width:65%;">
    <h2><?= empty($subTitles) ? $subtitulos[9] : $subTitles[9];?></h2>
   <section>
         <?php
         $interaction = !empty($wbInteraction) ? $wbInteraction : $interaccionWeb;
         foreach ($interaction as $key => $value) {
            $class = ($key === '11:00 PM') ? ' class="last"' : '';
        ?>
        <p<?= $class;?>><strong><?= $key;?>:</strong> <?= $value;?></p>
       <?php } ?>
    </section>
    </article>



<?php


}
function sw_messaging() {
     echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
    echo "<h1>Messaging</h1>";
    echo "</div>";
}
function sw_media() {
     echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
    echo "<h1>Media</h1>";
    echo "</div>";
}
function sw_runtimes() {
     echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
    echo "<h1>Runtimes</h1>";
    echo "</div>";
}
function sw_imaging() {
     echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
    echo "<h1>Imaging</h1>";
    echo "</div>";
}
function sw_documents() {
    echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
    echo "<h1>Documents</h1>";
    echo "</div>";
}
function sw_fileSharing() {
     echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
    echo "<h1>File Sharing</h1>";
    echo "</div>";
}
function sw_onlineStorage() {
     echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
    echo "<h1>Online Storage</h1>";
    echo "</div>";
}
function sw_other() {
     echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
    echo "<h1>Other</h1>";
    echo "</div>";
}
function sw_utilities() {
        ?>
    <style>
    .blurb {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .intro {
        margin-bottom: 40px;
    }

    .windows-optimization h2 {
        color: #2c3e50;
        margin-bottom: 20px;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin: 30px 0;
    }

    .feature-card {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 15px;
        transition: transform 0.2s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
    }

    .blurb summary {
        font-size: 1.2rem;
        font-weight: 600;
        color: #34495e;
        cursor: pointer;
        padding: 10px;
    }

    fieldset {
        border: none;
        padding: 15px;
        background: white;
        border-radius: 4px;
        margin-top: 10px;
    }

    .warning-box {
        background: #fff3cd;
        border-left: 4px solid #ffc107;
        padding: 20px;
        margin-top: 40px;
        border-radius: 4px;
    }

    .warning-box h3 {
        color: #856404;
        margin-top: 0;
    }

    /* Accessibility improvements */
    *:focus {
        outline: 2px solid #007bff;
        outline-offset: 2px;
    }

    @media (max-width: 768px) {
        .features-grid {
            grid-template-columns: 1fr;
        }
    }
    </style>
    <article class="fullbar">
        <?php sw_breadCrumbs(); ?>
        <h1>Utilities</h1>
        <div class="blurb">
            <section class="intro">
                <p tabindex="0" class="selection">
                    Computer utilities are essential programs that help manage, maintain, and enhance your computer's
                    performance. These powerful tools can perform various tasks, from cleaning up your hard drive to
                    ensuring optimal system security. Whether built into your operating system or available as standalone
                    applications, utilities play a crucial role in keeping your computer running at its best.
                </p>
            </section>

            <section class="windows-optimization">
                <h2 tabindex="0">Windows System Optimization</h2>
                <p tabindex="0" class="selection">
                    Windows system optimizers are specialized programs designed to enhance the performance of Windows-based
                    computers. These tools offer a comprehensive suite of features to clean, optimize, and maintain your
                    system for peak efficiency.
                </p>

                <div class="features-grid">
                    <details class="feature-card">
                        <summary tabindex="0" class="selection">Disk Cleanup</summary>
                        <fieldset tabindex="0" class="selection">
                            <p>Efficiently removes temporary files, system logs, and unnecessary data to free up valuable
                                disk space and improve overall system performance.</p>
                        </fieldset>
                    </details>

                    <details class="feature-card">
                        <summary tabindex="0" class="selection">Registry Cleanup</summary>
                        <fieldset tabindex="0" class="selection">
                            <p>Scans and repairs invalid Windows registry entries to enhance system stability and prevent
                                common errors.</p>
                        </fieldset>
                    </details>

                    <details class="feature-card">
                        <summary tabindex="0" class="selection">Startup Optimization</summary>
                        <fieldset tabindex="0" class="selection">
                            <p>Manages and optimizes startup programs to significantly reduce boot times and improve initial
                                system responsiveness.</p>
                        </fieldset>
                    </details>

                    <details class="feature-card">
                        <summary tabindex="0" class="selection">Service Optimization</summary>
                        <fieldset tabindex="0" class="selection">
                            <p>Intelligently manages system services to optimize resource allocation and enhance overall
                                system performance.</p>
                        </fieldset>
                    </details>

                    <details class="feature-card">
                        <summary tabindex="0" class="selection">Internet Optimization</summary>
                        <fieldset tabindex="0" class="selection">
                            <p>Fine-tunes network settings to maximize internet connection speed and reliability.</p>
                        </fieldset>
                    </details>
                </div>
            </section>

            <section class="warning">
                <div class="warning-box">
                    <h3 tabindex="0">⚠️ Important Note</h3>
                    <p tabindex="0" class="selection">
                        While optimization tools can significantly improve your computer's performance, it's crucial to use
                        them carefully. Always create a system restore point before making any system modifications. This
                        precaution ensures you can revert changes if needed.
                    </p>
                </div>
            </section>
        </div>
    </article>
    <?php
}

function sw_compression() {
        ?>
    <style>
    .blurb {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    }

    .intro {
        font-size: 1.1em;
        line-height: 1.6;
        margin-bottom: 40px;
        color: #34495e;
    }

    .timeline-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin: 30px 0;
    }

    .timeline-item {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease;
    }

    .timeline-item:hover {
        transform: translateY(-5px);
    }

    .timeline-item h3 {
        color: #2980b9;
        margin-top: 0;
    }

    .formats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin: 30px 0;
    }

    .format-card {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease;
    }

    .format-card:hover {
        transform: translateY(-5px);
    }

    .format-card summary {
        font-size: 1.2rem;
        font-weight: 600;
        color: #34495e;
        padding: 15px;
        cursor: pointer;
        border-radius: 8px;
        background: #f8f9fa;
    }

    .format-content {
        padding: 15px;
    }

    .format-content ul {
        list-style-type: none;
        padding-left: 0;
    }

    .format-content li {
        margin-bottom: 8px;
        padding-left: 20px;
        position: relative;
    }

    .format-content li:before {
        content: "•";
        color: #3498db;
        position: absolute;
        left: 0;
    }

    fieldset {
        border: none;
        padding: 0;
        margin: 0;
    }

    /* Accessibility improvements */
    *:focus {
        outline: 2px solid #3498db;
        outline-offset: 2px;
    }

    /* Responsive design */
    @media (max-width: 768px) {

        .timeline-grid,
        .formats-grid {
            grid-template-columns: 1fr;
        }

        .blurb {
            padding: 15px;
        }
    }
    </style>
    <article class="fullbar">
        <?php sw_breadCrumbs(); ?>
        <h1>Compression</h1>
        <div class="blurb">
            <section class="intro">
                <p tabindex="0" class="selection">
                    File compression is a fundamental technology that revolutionized digital storage and transmission by
                    reducing file sizes while preserving their content. This essential process enables efficient storage
                    utilization and faster data transmission across networks.
                </p>
            </section>

            <section class="timeline">
                <h2>Evolution of File Compression</h2>
                <div class="timeline-grid">
                    <div class="timeline-item" tabindex="0">
                        <h3>1960s: The Beginning</h3>
                        <p class="selection">
                            The era of run-length encoding marked the dawn of file compression. This pioneering method was
                            primarily used for compressing data on magnetic tapes by consolidating repeated data values.
                        </p>
                    </div>

                    <div class="timeline-item" tabindex="0">
                        <h3>1980s: The PC Revolution</h3>
                        <p class="selection">
                            The personal computer boom sparked the development of more sophisticated compression algorithms.
                            The groundbreaking Lempel-Ziv-Welch (LZW) algorithm emerged, powering popular formats like GIF
                            and ZIP.
                        </p>
                    </div>

                    <div class="timeline-item" tabindex="0">
                        <h3>1990s: The Internet Age</h3>
                        <p class="selection">
                            The rise of the internet and multimedia content drove the creation of specialized compression
                            formats. Revolutionary standards like MP3 for audio and JPEG for images transformed digital
                            media distribution.
                        </p>
                    </div>

                    <div class="timeline-item" tabindex="0">
                        <h3>Today: Modern Compression</h3>
                        <p class="selection">
                            Modern compression technology offers diverse solutions for different data types, balancing
                            compression efficiency with processing speed and compatibility.
                        </p>
                    </div>
                </div>
            </section>

            <section class="compression-formats">
                <h2>Popular Compression Formats</h2>
                <div class="formats-grid">
                    <details class="format-card">
                        <summary tabindex="0" class="selection">ZIP Format</summary>
                        <fieldset tabindex="0" class="selection">
                            <div class="format-content">
                                <h4>Features:</h4>
                                <ul>
                                    <li>Multi-file archiving</li>
                                    <li>Password protection</li>
                                    <li>Universal compatibility</li>
                                    <li>Industry standard format</li>
                                </ul>
                                <p>The most widely used compression format, perfect for general-purpose file compression and
                                    archiving.</p>
                            </div>
                        </fieldset>
                    </details>

                    <details class="format-card">
                        <summary tabindex="0" class="selection">RAR Format</summary>
                        <fieldset tabindex="0" class="selection">
                            <div class="format-content">
                                <h4>Features:</h4>
                                <ul>
                                    <li>Advanced compression</li>
                                    <li>Archive splitting</li>
                                    <li>Error recovery</li>
                                    <li>Strong encryption</li>
                                </ul>
                                <p>A powerful format offering advanced features and superior compression ratios for complex
                                    archiving needs.</p>
                            </div>
                        </fieldset>
                    </details>

                    <details class="format-card">
                        <summary tabindex="0" class="selection">TAR Format</summary>
                        <fieldset tabindex="0" class="selection">
                            <div class="format-content">
                                <h4>Features:</h4>
                                <ul>
                                    <li>Unix-style archiving</li>
                                    <li>Metadata preservation</li>
                                    <li>Combinable with compression</li>
                                    <li>Perfect for backups</li>
                                </ul>
                                <p>Commonly used in Unix-like systems, often combined with compression algorithms like gzip
                                    or bzip2.</p>
                            </div>
                        </fieldset>
                    </details>

                    <details class="format-card">
                        <summary tabindex="0" class="selection">GZ Format</summary>
                        <fieldset tabindex="0" class="selection">
                            <div class="format-content">
                                <h4>Features:</h4>
                                <ul>
                                    <li>DEFLATE algorithm</li>
                                    <li>Fast compression</li>
                                    <li>Single-file focus</li>
                                    <li>Cross-platform support</li>
                                </ul>
                                <p>Efficient single-file compression using the DEFLATE algorithm, ideal for quick
                                    compression tasks.</p>
                            </div>
                        </fieldset>
                    </details>

                    <details class="format-card">
                        <summary tabindex="0" class="selection">BZ2 Format</summary>
                        <fieldset tabindex="0" class="selection">
                            <div class="format-content">
                                <h4>Features:</h4>
                                <ul>
                                    <li>High compression ratio</li>
                                    <li>Block-sorting compression</li>
                                    <li>Data integrity checks</li>
                                    <li>Open-source format</li>
                                </ul>
                                <p>Offers superior compression ratios using the bzip2 algorithm, perfect for text-based
                                    content.</p>
                            </div>
                        </fieldset>
                    </details>
                </div>
            </section>
        </div>
    </article>
    <?php
}

function sw_developerTools() {
    ?>
    <style>
    .tools-list li {
        display: inline-block;
        overflow: hidden;
        width: 100%;
        margin-bottom: 10px;
    }

    .button-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        padding: 20px 0;
    }

    .button-grid li {
        list-style: none;
    }

    .button-grid button {
        width: 100%;
        padding: 10px;
        background: white;
        border: 1px solid #ddd;
        border-radius: 8px;
        transition: transform 0.2s;
    }

    .button-grid button:hover {
        transform: translateY(-2px);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .button-grid img {
        max-width: 70%;
        height: auto;
        margin-bottom: 8px;
    }

    .grid-item:hover {
        transform: translateY(.10px);

    }
    </style>

    <article class="blurb fullbar">
        <?php //BreadCrumbs
           /* if (urldecode($_SERVER['REQUEST_URI'])==="/español/software/herramientasparadesarrolladores/") {
            include ('../../../include/_code/migasDePan_software.php');
            }
            else {
                include ('../../include/_code/breadCrumbs_software.php');
        }*/
        ?>
        <?php sw_breadCrumbs(); ?>
        <h2>Developer Tools</h2>
        <section class="homepage-grid" style="padding-top: 0;">

            <div class="grid-item">

                <p tabindex="0">The job of the developer here at LAtinosPC is to grow or cause the site to grow and
                    become more mature, advanced, or elaborate, yet simple and intuitive to browse. Also our job is to
                    elaborate (like a
                    musical theme) by modification of the melody, harmony, or rhythm; a better website for our visitors. We
                    not only
                    write code, but we also read a lot of code. Well-written code is easy to understand and remember because
                    it is clear
                    and organized. we begin with an idea that can make something start to exist, start to experience, or
                    start to
                    possess.</p>
            </div>

            <div class="grid-item">
                <h2>Here are some of the popular tools LAPC uses:</h2>
                <ul class="tools-list sb_menu">
                    <li tabindex="0" class="card2 selection"><a href="https://www.google.com/keep/">Google Keep</a> for note
                        taking</li>
                    <li tabindex="0" class="card2 selection"><a href="https://www.wps.com/">WPS</a> for accessing documents,
                        Office Suite</li>
                    <li tabindex="0" class="card2 selection"><a href="https://notepad-plus-plus.org/">Notepad ++</a> Source
                        Code Editor</li>
                    <li tabindex="0" class="card2 selection"><a href="https://www.gimp.org/">Gimp</a> For image editing,
                        image manipulation</li>
                    <li tabindex="0" class="card2 selection"><a href="https://www.wampserver.com/en/">WAMP</a> For website
                        environment, and testing</li>
                    <li tabindex="0" class="card2 selection"><a href="https://www.wampserver.com/en/">XAMP</a> Website
                        environment, and testing</li>
                    <li tabindex="0" class="card2 selection">A <a
                            href="https://en.wikipedia.org/wiki/Web_browser#Browsers">web browser</a> and several <a
                            href="https://latinospc.com/web/websites.php#navi">websites</a>.</li>
                </ul>
            </div>
        </section>
        <ul class="button-grid grid-item" style="padding-left: 20px;padding-right: 20px;">
            <li>
                <a href="https://www.softwareadvice.com/categories/">
                    <button tabindex="0" class="card2 selection">
                        <img src="https://latinospc.com/latinospc/articles/software/softwareadvice.svg" alt="SoftwareAdvice"
                            title="SoftwareAdvice">
                        <br>Software Advice
                    </button>
                </a>
            </li>
            <li>
                <a href="https://filehippo.com/popular/">
                    <button tabindex="0" class="card2 selection">
                        <img src="https://latinospc.com/latinospc/articles/software/filehippo.png" alt="FileHippo"
                            title="FileHippo">
                        <br>FileHippo
                    </button>
                </a>
            </li>
            <li>
                <a href="https://www.majorgeeks.com/mg/sortdate/internet_tools.html">
                    <button tabindex="0" class="card2 selection">
                        <img src="https://latinospc.com/latinospc/articles/software/majorgeeks.gif" alt="MajorGeeks"
                            title="MajorGeeks">
                        <br>MajorGeeks
                    </button>
                </a>
            </li>
            <li>
                <a href="https://ninite.com/">
                    <button tabindex="0" class="card2 selection">
                        <img src="https://latinospc.com/latinospc/articles/software/ninite.png" alt="Ninite" title="Ninite">
                        <br>Ninite
                    </button>
                </a>
            </li>
            <li>
                <a href="https://www.filehorse.com/">
                    <button tabindex="0" class="card2 selection">
                        <img src="https://latinospc.com/latinospc/articles/software/filehorse.png" alt="FileHorse"
                            title="FileHorse">
                        <br>FileHorse
                    </button>
                </a>
            </li>
            <li>
                <a href="https://win.softpedia.com/index.free.shtml?scroll_flt">
                    <button tabindex="0" class="card2 selection">
                        <img src="https://latinospc.com/latinospc/articles/software/softpedia3x2HGBW9_400x400.png"
                            alt="Softpedia" title="Softpedia">
                        <br>Softpedia
                    </button>
                </a>
            </li>
            <li>
                <a href="https://en.softonic.com/">
                    <button tabindex="0" class="card2 selection">
                        <img src="https://latinospc.com/latinospc/articles/software/softonic.jpg" alt="Softonic"
                            title="Softonic">
                        <br>Softonic
                    </button>
                </a>
            </li>
            <li>
                <a href="https://www.snapfiles.com/topdownloads/">
                    <button tabindex="0" class="card2 selection">
                        <img src="https://latinospc.com/latinospc/articles/software/snapfileslogo-smaller.png"
                            alt="Snapfiles" title="Snapfiles">
                        <br>Snapfiles
                    </button>
                </a>
            </li>
            <li>
                <a href="https://www.filepuma.com/">
                    <button tabindex="0" class="card2 selection">
                        <img src="https://latinospc.com/latinospc/articles/software/filepuma.png" alt="FilePuma"
                            title="FilePuma">
                        <br>Filepuma
                    </button>
                </a>
            </li>
            <li>
                <a href="https://sourceforge.net/directory/windows/?developmentstatus=5-production-stable">
                    <button tabindex="0" class="card2 selection">
                        <img src="https://latinospc.com/latinospc/articles/software/sourgeforge-logo-full.svg"
                            alt="SourceForge" title="SourceForge">
                        <br>Sourgeforge
                    </button>
                </a>
            </li>
            <li>
                <a href="https://www.donationcoder.com/software">
                    <button tabindex="0" class="card2 selection">
                        <img src="https://latinospc.com/latinospc/articles/software/donationcoder.jpg" alt="Donation Coder"
                            title="Donation Coder">
                        <br>Donation Coder
                    </button>
                </a>
            </li>
            <li>
                <a href="https://www.fosshub.com/">
                    <button tabindex="0" class="card2 selection">
                        <img src="https://latinospc.com/latinospc/articles/software/fosshub5b7e46590c200816f7b796df.png"
                            alt="Foss Hub" title="Foss Hub">
                        <br>Foss Hub
                    </button>
                </a>
            </li>
        </ul>
    </article>

    <div class="spacer">
        <hr>
    </div><?php
}


include 'anvil/structure.php';
?>