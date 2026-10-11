<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;

$isSpanish = (isset($page) && is_object($page) && method_exists($page, 'getLang') && ($page->getLang() === 'es-419' || $page->getLang() === 'es'));
$sw = $isSpanish ? 'es' : 'en';

$links = [
    'opensource' => ($sw === 'es')
        ? 'https://www.redhat.com/es/topics/open-source/what-is-open-source'
        : 'https://www.redhat.com/en/topics/open-source/what-is-open-source'
];

echo "<div class=\"fullbar\">";
if (function_exists('sw_breadCrumbs')) {
    sw_breadCrumbs();
}
echo "<h1>" . htmlspecialchars($content[0][$key] ?? '') . "</h1>";
echo "</div>";
?>
<article class="fullbar">
    <?php //echo $_SERVER['REQUEST_URI'] ?? ''; ?>
    <section class="hero3" id="software">
        <div class="container" style="background-color:rgba(245, 245, 245, 0.41);padding-bottom:.6%;">
            <h2><?= $content[1][$key] ?? ''; ?></h2>
            <a href="#title"><img src="../images/programs/code.jpg" width="263" height="146" alt="image"
                    class="fl" /></a>
            <p style="margin-left:20%;margin-bottom:2%; width:68%;">
                <?= $content[2][$key] ?? ''; ?>
            </p>
            <p style="padding-top:2%;">
                <strong>Software</strong> <?= $content[3][$key] ?? ''; ?>
            </p>
            <div style="margin-left:20%;margin-bottom:2%; width:68%;">
                <p style="text-align: center; font-size: 1.1em; margin-bottom: 15px; color: #333;padding-top:2%;">
                    <?= $content[4][$key] ?? ''; ?><br />
                    <?= $content[5][$key] ?? ''; ?>
                </p>
                <p
                    style="line-height: 1.6; padding: 10px; background-color: rgba(240, 240, 240, 0.7); border-left: 4px solid #3366ff; border-radius: 5px;">
                    <?= $content[6][$key] ?? ''; ?>
                </p>
            </div>
            <a href="#title" style="padding-left:10%;"><?= $content[22][$key] ?? ''; ?></a>
        </div><span id="ps2"></span><br />
        <div class="container"
            style="column-count: 3; border: 1px solid royalblue;border-radius: 15%;background-color: rgba(245, 245, 245, 0.76);">
            <?php
                $categoryMeta = [
                    'antivirus'                   => ['idx' => 8,  'img' => 'av',    'id' => 'Anti-Virus'],
                    'malwarecleaner'              => ['idx' => 9,  'img' => 'mwc',   'id' => 'MalwareCleaner'],
                    'limpiadordemalware'          => ['idx' => 9,  'img' => 'mwc',   'id' => 'MalwareCleaner'],
                    'webbrowsers'                 => ['idx' => 10, 'img' => 'wb',    'id' => 'WebBrowsers'],
                    'navegadoresweb'              => ['idx' => 10, 'img' => 'wb',    'id' => 'WebBrowsers'],
                    'messaging'                   => ['idx' => 11, 'img' => 'msg',   'id' => 'Messaging'],
                    'mensajeria'                  => ['idx' => 11, 'img' => 'msg',   'id' => 'Messaging'],
                    'media'                       => ['idx' => 12, 'img' => 'media', 'id' => 'Media'],
                    'multimedia'                  => ['idx' => 12, 'img' => 'media', 'id' => 'Media'],
                    'runtimes'                    => ['idx' => 13, 'img' => 'rt',    'id' => 'Runtimes'],
                    'imaging'                     => ['idx' => 14, 'img' => 'img',   'id' => 'Imaging'],
                    'imagenes'                    => ['idx' => 14, 'img' => 'img',   'id' => 'Imaging'],
                    'documents'                   => ['idx' => 15, 'img' => 'docs',  'id' => 'Documents'],
                    'documentos'                  => ['idx' => 15, 'img' => 'docs',  'id' => 'Documents'],
                    'filesharing'                 => ['idx' => 16, 'img' => 'filsha','id' => 'FileSharing'],
                    'archivosparacompartir'       => ['idx' => 16, 'img' => 'filsha','id' => 'FileSharing'],
                    'onlinestorage'               => ['idx' => 17, 'img' => 'ons',   'id' => 'OnlineStorage'],
                    'almacenamientoenlinea'       => ['idx' => 17, 'img' => 'ons',   'id' => 'OnlineStorage'],
                    'other'                       => ['idx' => 18, 'img' => 'ot',    'id' => 'Other'],
                    'otros'                       => ['idx' => 18, 'img' => 'ot',    'id' => 'Other'],
                    'utilities'                   => ['idx' => 19, 'img' => 'utl',   'id' => 'Utilities'],
                    'utilidades'                  => ['idx' => 19, 'img' => 'utl',   'id' => 'Utilities'],
                    'compression'                 => ['idx' => 20, 'img' => 'press', 'id' => 'Compression'],
                    'compresion'                  => ['idx' => 20, 'img' => 'press', 'id' => 'Compression'],
                    'developertools'              => ['idx' => 21, 'img' => 'dv',    'id' => 'DeveloperTools'],
                    'herramientasparadesarrollar' => ['idx' => 21, 'img' => 'dv',    'id' => 'DeveloperTools'],
                ];

                $activeKey = key($_GET) ?? '';
                if ($activeKey !== '' && isset($categoryMeta[$activeKey])) {
                    $selected = $categoryMeta[$activeKey];
                    $imag = $selected['img'];
                    $id = $selected['id'];
                    $link = '#' . $id;
                    $titleText = $content[$selected['idx']][$key] ?? '';
                } else {
                    $imag = 'code';
                    $link = '#title';
                    $id = '';
                    $titleText = '';
                }
            ?>
            <a href="<?= !empty($link) ? $link : '#title'; ?>">
                <img src="../images/programs/<?= $imag; ?>.jpg" width="50%" height="70%"
                    alt="<?= !empty($activeKey) ? htmlspecialchars($activeKey) : 'Code Image'; ?>" /></a>
            <h2>&uarr;
                <?= $content[7][$key] ?? ''; ?>
            </h2>
            <aside class="cell buttons">
                <?php
                    $buttonSlugs = ($sw === 'es') ? [
                        'antivirus', 'limpiadordemalware', 'navegadoresweb', 'mensajeria', 'multimedia',
                        'runtimes', 'imagenes', 'documentos', 'archivosparacompartir', 'almacenamientoenlinea',
                        'otros', 'utilidades', 'compresion', 'herramientasparadesarrollar'
                    ] : [
                        'antivirus', 'malwarecleaner', 'webbrowsers', 'messaging', 'media',
                        'runtimes', 'imaging', 'documents', 'filesharing', 'onlinestorage',
                        'other', 'utilities', 'compression', 'developertools'
                    ];

                    for ($i = 0; $i < 14; $i++) {
                        $slug = $buttonSlugs[$i];
                        $btnText = $content[8 + $i][$key] ?? '';
                        echo "<a href=\"?$slug#ps2\"><button type=\"button\" class=\"bttn\">$btnText</button></a>\n";
                    }
                ?>
            </aside>
            <div class="clr"></div>
            <h3><a href="<?= !empty($link) ? $link : '#title'; ?>" class="rm"
                    title="Programs"><?= $content[22][$key] ?? ''; ?></a></h3>
        </div>
    </section>
</article>
<!--Full Bar -->
<article class="fullbar" id="programs"><br />
    <?php if (!empty($activeKey) && isset($categoryMeta[$activeKey])): 
        $blurbIndex = 23 + ($categoryMeta[$activeKey]['idx'] - 8);
    ?>
    <div id="<?= $id; ?>" class="hero4 blurb" style="padding-bottom: 3em;background-color:rgba(245, 245, 245, 0.41);">
        <h2><?= $titleText; ?></h2>
        <section tabindex="0" class="hero4 readMore">
            <p>
                <?= $content[$blurbIndex][$key] ?? ''; ?>
            </p>
        </section><a class="rm" href="<?php
            $base = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
            if ($sw === 'en') {
                $prefix = $base . 'software_options/';
                if (isset($_GET['antivirus'])) {echo $prefix . 'anti_virus#^';}
                elseif (isset($_GET['malwarecleaner'])) {echo $prefix . 'malware_cleaner#^';}
                elseif (isset($_GET['webbrowsers'])) {echo $prefix . 'web_browsers#^';}
                elseif (isset($_GET['messaging'])) {echo $prefix . 'messaging#^';}
                elseif (isset($_GET['media'])) {echo $prefix . 'media#^';}
                elseif (isset($_GET['runtimes'])) {echo $prefix . 'runtimes#^';}
                elseif (isset($_GET['imaging'])) {echo $prefix . 'imaging#^';}
                elseif (isset($_GET['documents'])) {echo $prefix . 'documents#^';}
                elseif (isset($_GET['filesharing'])) {echo $prefix . 'file_sharing#^';}
                elseif (isset($_GET['onlinestorage'])) {echo $prefix . 'online_storage#^';}
                elseif (isset($_GET['other'])) {echo $prefix . 'other#^';}
                elseif (isset($_GET['utilities'])) {echo $prefix . 'utilities#^';}
                elseif (isset($_GET['compression'])) {echo $prefix . 'compression#^';}
                elseif (isset($_GET['developertools'])) {echo $prefix . 'developer_tools#^';}
            } else {
                $prefix = $base . 'opciones_software/';
                if (isset($_GET['antivirus'])) {echo $prefix . 'antivirus#^';}
                elseif (isset($_GET['limpiadordemalware'])) {echo $prefix . 'limpiador_malware#^';}
                elseif (isset($_GET['navegadoresweb'])) {echo $prefix . 'navegadores#^';}
                elseif (isset($_GET['mensajeria'])) {echo $prefix . 'mensajeria#^';}
                elseif (isset($_GET['multimedia'])) {echo $prefix . 'multimedia#^';}
                elseif (isset($_GET['runtimes'])) {echo $prefix . 'runtimes#^';}
                elseif (isset($_GET['imagenes'])) {echo $prefix . 'imagenes#^';}
                elseif (isset($_GET['documentos'])) {echo $prefix . 'documentos#^';}
                elseif (isset($_GET['archivosparacompartir'])) {echo $prefix . 'compartir_archivos#^';}
                elseif (isset($_GET['almacenamientoenlinea'])) {echo $prefix . 'almacenamiento_en_linea#^';}
                elseif (isset($_GET['otros'])) {echo $prefix . 'otro#^';}
                elseif (isset($_GET['utilidades'])) {echo $prefix . 'utilidades#^';}
                elseif (isset($_GET['compresion'])) {echo $prefix . 'compresion#^';}
                elseif (isset($_GET['herramientasparadesarrollar'])) {echo $prefix . 'herramientas_de_desarrollo#^';}
            }
        ?>"><?= $content[22][$key] ?? ''; ?></a>
    </div> <?php endif; ?>
    <br />
    <a href="#software" id="title" class="sub_title">
        <?= $content[37][$key] ?? ''; ?>
    </a>
    <br />
    <div class="steps">
        <h2><?= $content[38][$key] ?? ''; ?></h2>
        <section tabindex="0" class="selection">
            <p><strong><?= $content[39][$key] ?? ''; ?>:</strong>
                <?= $content[40][$key] ?? ''; ?>
            </p>
            <p><strong><?= $content[41][$key] ?? ''; ?>:</strong>
                <?= $content[42][$key] ?? ''; ?>
            </p>
            <p><strong><?= $content[43][$key] ?? ''; ?>:</strong>
                <?= $content[44][$key] ?? ''; ?>
            </p>
            <p><strong><?= $content[45][$key] ?? ''; ?>:</strong>
                <?= $content[46][$key] ?? ''; ?>
            </p>
            <p><strong><?= $content[47][$key] ?? ''; ?>:</strong>
                <?= $content[48][$key] ?? ''; ?>
            </p>
            <p><strong><?= $content[49][$key] ?? ''; ?>:</strong>
                <?= $content[50][$key] ?? ''; ?>
            </p>
            <p><strong><?= $content[51][$key] ?? ''; ?>:</strong>
                <?= $content[52][$key] ?? ''; ?>
            </p>
            <p><strong><?= $content[53][$key] ?? ''; ?>:</strong>
                <?= $content[54][$key] ?? ''; ?></p>
        </section>
        <h2>
            <?= $content[55][$key] ?? ''; ?>
        </h2>
    </div> <br />
    <div tabindex="0" class="hero4" style="padding-bottom: 4%;width: 97%;">
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
            <div style="flex: 0 0 48%; margin-bottom: 20px;">
                <a href="<?= $links['opensource'] ?? '#'; ?>">
                    <h2><?= $content[56][$key] ?? ''; ?>:</h2>
                </a>
                <p>
                    <?= $content[57][$key] ?? ''; ?>
                </p>
            </div>
            <div style="flex: 0 0 48%; margin-bottom: 20px;">
                <a href="#navi">
                    <h2><?= $content[58][$key] ?? ''; ?>:</h2>
                </a>
                <p>
                    <?= $content[59][$key] ?? ''; ?>
                </p>
            </div>
            <div style="flex: 0 0 48%; margin-bottom: 20px;">
                <a href="#navi">
                    <h2><?= $content[60][$key] ?? ''; ?>:</h2>
                </a>
                <p>
                    <?= $content[61][$key] ?? ''; ?>
                </p>
            </div>
            <div style="flex: 0 0 48%; margin-bottom: 20px;">
                <h2><a href="#navi">
                        <?= $content[62][$key] ?? ''; ?>:</h2>
                </a>
                <p>
                    <?= $content[63][$key] ?? ''; ?>
                </p>
            </div>
            <div style="flex: 0 0 48%; margin-bottom: 20px;">
                <h2><a href="#navi">
                        <?= $content[64][$key] ?? ''; ?>:</h2>
                </a>
                <p>
                    <?= $content[65][$key] ?? ''; ?>
                </p>
            </div>
            <div style="flex: 0 0 48%; margin-bottom: 20px;">
                <h2><a href="#navi">
                        <?= $content[66][$key] ?? ''; ?>:</h2>
                </a>
                <p>
                    <?= $content[67][$key] ?? ''; ?>
                </p>
            </div>
        </div>
    </div>
</article>