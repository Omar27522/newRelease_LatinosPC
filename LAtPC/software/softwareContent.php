<?php
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
    <?php //echo $_SERVER['REQUEST_URI']; ?>
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