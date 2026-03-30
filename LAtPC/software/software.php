<?php
function cssStyles() {
    // Check if the current URI contains 'compression'
     $styles = [
        'compression' => 'compression.css',
        'developer_tools' => 'developer_tools.css',
        'utilities' => 'utilities.css',
        'other' => 'other.css',
        'media' => 'media.css',
        'runtimes' => 'runtimes.css',
        'imaging' => 'imaging.css',
        'web_browsers' => 'web_browsers.css',
        'documents' => 'documents.css',
        'file_sharing' => 'file_sharing.css',
        'online_storage' => 'online_storage.css',
        'softwareContent' => 'software_content.css',
    ];

        foreach ($styles as $pattern => $file) {
        if (str_contains($_SERVER['REQUEST_URI'], $pattern)) {
            echo "<link rel=\"stylesheet\" href=\"../../software/styles/$file\">\n";
        }
    }
}

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

    echo "<nav class=\"fullbar\" style=\"display: flex; flex-wrap: wrap; align-items: center;
    justify-content: center; gap: .5rem; padding: .8rem 1.2rem; background: rgba(0,0,0,0.03);
    border: 1px solid rgba(0,0,0,0.05); border-radius: .6rem; font-size: .9rem; color: #64748b;
    margin-bottom: 1rem; box-shadow: inset 0 1px 0 rgba(255,255,255,0.5);width: 80%;\">";
    foreach ($breadCrumbs as $crumb) {
        // Extract href attribute from anchor tag
        preg_match('/href="\.\/([^"]+)"/', $crumb, $matches);
        $href = isset($matches[1]) ? $matches[1] : '';

        // Check if current URI contains this breadcrumb's path
        if ($href && strpos($currentPath, $href) !== false) {
            echo "<strong style='font-weight: 900;'>" . $crumb . "</strong>";
        } else {
            echo $crumb;
        }

        // Add separator except for last item
        if ($crumb !== end($breadCrumbs)) {
            echo " > ";
        }
    }

    echo "</nav> <hr style=\"margin: 0; margin-bottom: 10px;\">";
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

include 'anvil/structure.php';
?>