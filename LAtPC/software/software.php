<?php

function sw_breadCrumbs() {
    $breadCrumbs = [
        "<a href=\"./\">Software</a>",
        "<a href=\"./anti_virus\">Anti-Virus</a>",
        "<a href=\"./malware_cleanerx\">Malware Cleaners</a>",
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
}


function sw_anti_virus() {

    echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
    echo "<h1>Anti-Virus</h1>";
    echo "</div>";
}
function sw_mlwcleaner() {
     echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
    echo "<h1>Malware Cleaners</h1>";
    echo "</div>";
}
function sw_webBrowsers() {
     echo "<div class=\"fullbar\">";
    sw_breadCrumbs();
    echo "<h1>Web Browsers</h1>";
    echo "</div>";
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