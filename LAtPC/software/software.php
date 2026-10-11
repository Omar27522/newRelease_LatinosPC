<?php
function cssStyles() {
    $styles = [
        'compression' => 'compression.css',
        'compresion' => 'compression.css',
        'developer_tools' => 'developer_tools.css',
        'herramientas_de_desarrollo' => 'developer_tools.css',
        'utilities' => 'utilities.css',
        'utilidades' => 'utilities.css',
        'herramientas' => 'utilities.css',
        'other' => 'other.css',
        'otro' => 'other.css',
        'otros' => 'other.css',
        'media' => 'media.css',
        'multimedia' => 'media.css',
        'runtimes' => 'runtimes.css',
        'imaging' => 'imaging.css',
        'imagenes' => 'imaging.css',
        'diseno' => 'imaging.css',
        'web_browsers' => 'web_browsers.css',
        'navegadores' => 'web_browsers.css',
        'navegadores_web' => 'web_browsers.css',
        'messaging' => 'messaging.css',
        'mensajeria' => 'messaging.css',
        'documents' => 'documents.css',
        'documentos' => 'documents.css',
        'file_sharing' => 'file_sharing.css',
        'compartir_archivos' => 'file_sharing.css',
        'online_storage' => 'online_storage.css',
        'almacenamiento_en_linea' => 'online_storage.css',
        'almacenamiento_nube' => 'online_storage.css',
        'malware_cleaner' => 'malware_cleaner.css',
        'mlwcleaner' => 'malware_cleaner.css',
        'limpiador_malware' => 'malware_cleaner.css',
        'limpiadores_malware' => 'malware_cleaner.css',
        'softwareContent' => 'software_content.css',
        'software_content' => 'software_content.css',
    ];

    $loaded = [];
    foreach ($styles as $pattern => $file) {
        if (str_contains($_SERVER['REQUEST_URI'], $pattern) && !isset($loaded[$file])) {
            echo "<link rel=\"stylesheet\" href=\"../../software/styles/$file\">\n";
            $loaded[$file] = true;
        }
    }
}

function sw_breadCrumbs() {
    global $page, $sub_route;

    // Detect language: Mexican Spanish ('es') or English ('en')
    $lang = 'en';
    if (isset($page) && is_object($page)) {
        if (method_exists($page, 'getLang')) {
            $langCode = $page->getLang();
            $lang = ($langCode === 'es-419' || $langCode === 'es') ? 'es' : 'en';
        } elseif (isset($page->lang) && ($page->lang === 'español' || $page->lang === 'es' || $page->lang === 'es-419')) {
            $lang = 'es';
        }
    }

    $currentPath = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '';
    $currentTitle = (isset($page) && is_object($page) && method_exists($page, 'getTitle')) ? $page->getTitle() : '';

    $softwarePages = [
        '' => [
            'title'   => 'Software',
            'en'      => 'Software',
            'es'      => 'Software',
            'es_slug' => '',
            'en_slug' => '',
        ],
        'anti_virus' => [
            'title'   => 'SW Anti-Virus',
            'en'      => 'Anti-Virus',
            'es'      => 'Antivirus',
            'es_slug' => 'antivirus',
            'en_slug' => 'anti_virus',
        ],
        'malware_cleaner' => [
            'title'   => 'SW Malware Cleaner',
            'en'      => 'Malware Cleaners',
            'es'      => 'Limpiadores de Malware',
            'es_slug' => 'limpiador_malware',
            'en_slug' => 'malware_cleaner',
        ],
        'web_browsers' => [
            'title'   => 'SW Web Browsers',
            'en'      => 'Web Browsers',
            'es'      => 'Navegadores Web',
            'es_slug' => 'navegadores',
            'en_slug' => 'web_browsers',
        ],
        'messaging' => [
            'title'   => 'SW Messaging',
            'en'      => 'Messaging',
            'es'      => 'Mensajería',
            'es_slug' => 'mensajeria',
            'en_slug' => 'messaging',
        ],
        'media' => [
            'title'   => 'SW Media',
            'en'      => 'Media',
            'es'      => 'Multimedia',
            'es_slug' => 'multimedia',
            'en_slug' => 'media',
        ],
        'runtimes' => [
            'title'   => 'SW Runtimes',
            'en'      => 'Runtimes',
            'es'      => 'Runtimes',
            'es_slug' => 'runtimes',
            'en_slug' => 'runtimes',
        ],
        'imaging' => [
            'title'   => 'SW Imaging',
            'en'      => 'Imaging',
            'es'      => 'Imágenes y Diseño',
            'es_slug' => 'imagenes',
            'en_slug' => 'imaging',
        ],
        'documents' => [
            'title'   => 'SW Documents',
            'en'      => 'Documents',
            'es'      => 'Documentos',
            'es_slug' => 'documentos',
            'en_slug' => 'documents',
        ],
        'file_sharing' => [
            'title'   => 'SW File Sharing',
            'en'      => 'File Sharing',
            'es'      => 'Compartir Archivos',
            'es_slug' => 'compartir_archivos',
            'en_slug' => 'file_sharing',
        ],
        'online_storage' => [
            'title'   => 'SW Online Storage',
            'en'      => 'Online Storage',
            'es'      => 'Almacenamiento en la Nube',
            'es_slug' => 'almacenamiento_en_linea',
            'en_slug' => 'online_storage',
        ],
        'other' => [
            'title'   => 'SW Other',
            'en'      => 'Other',
            'es'      => 'Otros Programas',
            'es_slug' => 'otro',
            'en_slug' => 'other',
        ],
        'utilities' => [
            'title'   => 'SW Utilities',
            'en'      => 'Utilities',
            'es'      => 'Herramientas del Sistema',
            'es_slug' => 'utilidades',
            'en_slug' => 'utilities',
        ],
        'compression' => [
            'title'   => 'SW Compression',
            'en'      => 'Compression',
            'es'      => 'Compresión',
            'es_slug' => 'compresion',
            'en_slug' => 'compression',
        ],
        'developer_tools' => [
            'title'   => 'SW Developer Tools',
            'en'      => 'Developer Tools',
            'es'      => 'Herramientas de Desarrollo',
            'es_slug' => 'herramientas_de_desarrollo',
            'en_slug' => 'developer_tools',
        ],
    ];

    $slugAliases = [
        'mlwcleaner' => 'malware_cleaner',
        'limpiador_malware' => 'malware_cleaner',
        'limpiadores_malware' => 'malware_cleaner',
        'antivirus' => 'anti_virus',
        'navegadores' => 'web_browsers',
        'navegadores_web' => 'web_browsers',
        'multimedia' => 'media',
        'imagenes' => 'imaging',
        'diseno' => 'imaging',
        'mensajeria' => 'messaging',
        'documentos' => 'documents',
        'compartir_archivos' => 'file_sharing',
        'almacenamiento_en_linea' => 'online_storage',
        'almacenamiento_nube' => 'online_storage',
        'otro' => 'other',
        'otros' => 'other',
        'utilidades' => 'utilities',
        'herramientas' => 'utilities',
        'compresion' => 'compression',
        'herramientas_de_desarrollo' => 'developer_tools',
    ];

    $activeSlug = null;
    if (!empty($sub_route)) {
        $normalized = $slugAliases[$sub_route] ?? $sub_route;
        if (isset($softwarePages[$normalized])) {
            $activeSlug = $normalized;
        }
    }

    if ($activeSlug === null && $currentTitle !== '') {
        foreach ($softwarePages as $slug => $meta) {
            if ($meta['title'] === $currentTitle) {
                $activeSlug = $slug;
                break;
            }
        }
    }

    if ($activeSlug === null && $currentPath !== '') {
        foreach ($softwarePages as $slug => $meta) {
            $enSlug = $meta['en_slug'] ?? $slug;
            $esSlug = $meta['es_slug'] ?? $slug;
            if ($slug !== '') {
                if (($enSlug !== '' && (strpos($currentPath, 'software_options/' . $enSlug) !== false || strpos($currentPath, '/' . $enSlug) !== false)) ||
                    ($esSlug !== '' && (strpos($currentPath, 'opciones_software/' . $esSlug) !== false || strpos($currentPath, '/' . $esSlug) !== false))) {
                    $activeSlug = $slug;
                    break;
                }
            }
        }
    }

    if ($activeSlug === null) {
        $activeSlug = '';
    }

    $navAriaLabel = ($lang === 'es') ? 'Navegación de Software' : 'Software Navigation';

    echo "<nav class=\"fullbar\" aria-label=\"$navAriaLabel\" style=\"display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: .5rem; padding: .8rem 1.2rem; background: rgba(0,0,0,0.03); border: 1px solid rgba(0,0,0,0.05); border-radius: .6rem; font-size: .9rem; color: #64748b; margin-bottom: 1rem; width: 80%;\">\n";

    $baseRoute = ($lang === 'es') ? 'opciones_software' : 'software_options';
    $total = count($softwarePages);
    $i = 0;
    foreach ($softwarePages as $slug => $meta) {
        $label = $meta[$lang];
        $isActive = ($slug === $activeSlug);
        $targetSlug = ($lang === 'es') ? ($meta['es_slug'] ?? $slug) : ($meta['en_slug'] ?? $slug);
        $href = '../' . $baseRoute . ($targetSlug !== '' ? '/' . $targetSlug : '') . '#^';

        if ($isActive) {
            echo "  <strong style=\"color: #0f172a; font-weight: 800; border-bottom: 2px solid #0284c7; padding-bottom: 1px;\" aria-current=\"page\">" . htmlspecialchars($label) . "</strong>\n";
        } else {
            echo "  <a href=\"$href\" style=\"color: #0284c7; text-decoration: none;\">" . htmlspecialchars($label) . "</a>\n";
        }

        $i++;
        if ($i < $total) {
            echo "  <span style=\"color: #94a3b8; user-select: none;\">›</span>\n";
        }
    }

    echo "</nav>\n";
    echo "<hr id=\"^\" style=\"margin: 0; margin-bottom: 10px;\">\n";
}

function sw_software() {
       include_once ('software/softwareContent.php');
}

function sw_anti_virus() {
        include_once('software/antivirus.php');
}

function sw_mlwcleaner() {
        include_once('software/malware_cleaner.php');
}

function sw_webBrowsers() {
    include_once('software/web_browsers.php');
}

function sw_messaging() {
    include_once('software/messaging.php');
}

function sw_media() {
    include_once('software/media.php');
}

function sw_runtimes() {
    include_once('software/runtimes.php');
}

function sw_imaging() {
    include_once('software/imaging.php');
}

function sw_documents() {
    include_once('software/documents.php');
}

function sw_fileSharing() {
    include_once('software/file_sharing.php');
}

function sw_onlineStorage() {
    include_once('software/online_storage.php');
}

function sw_other() {
    include_once('software/other.php');
}

function sw_utilities() {
    include_once('software/utilities.php');
}

function sw_compression() {
    include_once('software/compression.php');
}

function sw_developerTools() {
    include_once('software/developer_tools.php');
}

include dirname(__DIR__) . '/anvil/structure.php';
?>