<?php
// Get the requested path - this works even without .htaccess
$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];
$path_info = $_SERVER['PATH_INFO'] ?? '';

// Extract the route from the URL
if (!empty($path_info)) {
    $route = ltrim($path_info, '/');
} else {
    // Fallback: parse from REQUEST_URI
    $route = str_replace(dirname($script_name), '', $request_uri);
    $route = ltrim($route, '/');
    $route = strtok($route, '?'); // Remove query string
    $route = str_replace('LAtPC', '', $route);
                                                    /* NOTE: in production $route str_replace 'LAtPC' will have to be deleted or something since the path will not be inside the LAtPC dir.
                                                    but on the root of the public directory*/
    $route = trim($route, '/');
}

// Split the route into segments for subdirectory support
$route_segments = explode('/', $route);
$main_route = $route_segments[0] ?? '';
$sub_route = $route_segments[1] ?? '';

//echo "DEBUG: Route = '" . $route . "'<br>";
//echo $path_info;
// Route handling
switch($main_route) {
    case '':
    case 'index.php':
        // Show homepage - continue to HTML below
        break;
    case 'español':
        // Show Spanish content and exit
        showSpanishContent();
        exit; // Important: stop execution here
        break;


    case 'Template':
        fullPageTemplate();
        exit;
        break;

    case 'JesusChrist':
        _JesusChrist($sub_route);
        exit;
        break;
    default:
        // 404 page and exit
        show404();
        exit;
        break;
}

function showSpanishContent() {
    include 'index_spanish.php';
}

function show404() {
    http_response_code(404);
    echo "<!DOCTYPE html>";
    echo "<html><head><title>404 - Page Not Found</title></head>";
    echo "<body><h1>Page not found</h1></body></html>";
}

function fullPageTemplate(){
    include 'fullpageTemplate.php';
}

function _JesusChrist($sub_route){
    switch($sub_route) {
        case 'father_in_heaven_tell_me_about_web':
            echo"it works";
            break;
        case '':
            echo "Jesus Christ Main Page";
            break;
        default:
            show404();
            break;
    }
}
$lang = "en";
$title ="Home LatinosPC";
$keywords="test_Keywords";
$description="test_Description";

function content_home(){
    ?>
<section class="homepage-grid">
    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text">Jesus Christ</h3>
            <div class="link-dialog">
                <p tabindex="0">Most accept that Jesus was truly a man who lived in Israel 2,000 years ago.</p>
                <p tabindex="0">What do we really know about Jesus? Explore his life and teachings and form your
                    own valid experience.</p>
            </div>
        </div>
        <a href="#content" class="cta-button">Tell me about the web</a>
        <a href="#" class="cta-button">Apostles</a>
        <a href="#" class="cta-button">Parables</a>
        <a href="#" class="cta-button">Sermons</a>
        <a href="#" class="cta-button">Teachings</a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text">About Us</h3>
            <div class="link-dialog">
                <p tabindex="0">
                    We started back in 2009 with one technician; Omar, we have one goal.</p>
                <p tabindex="0">
                    Our goal is to provide you and your company with outstanding service.</p>
                <p tabindex="0">We're dedicated to enhancing your experience through effective marketing,
                    customer-friendly retention
                    strategies, and maintaining top-notch quality control.
                </p>
            </div>
        </div>

        <p>we want to bring families and individuals, the experience of a fully working computer system; laptops
            and desktops.</p>
        <p>100% Satisfaction Guarantee | 90 Days Service Package -included</p>
        <p>We are located in the city of Pomona, and will travel to LA county, SB county, RV county and OC.</p>
        <a href="#" class="cta-button">Visit Page</a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text">Services</h3>
            <div class="link-dialog">
                <p tabindex="0">We mostly work with individuals, Students, Small-Medium Businesses, #Gamers!,
                    and Professionals.</p>
                <p tabindex="0">Repairs and Service for Home and Office; any type-spec.</p>
                <p tabindex="0">90 day service guarantee. Computers run smoother, faster and perform better.</p>
                <img src="https://latinospc.com/images/number.jpg" width="auto" height="auto" alt="number"
                    style="display: block; margin: 0 auto;">
            </div>
        </div>

        <a href="#" class="cta-button">Cleanups</a>
        <a href="#" class="cta-button">Computer protection</a>
        <a href="#" class="cta-button">Consultations</a>
        <a href="#" class="cta-button">Managed Services</a>
        <a href="#" class="cta-button">Remote Support</a>
        <a href="#" class="cta-button">Websites</a>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text">Security</h3>
            <div class="link-dialog">
                <p tabindex="0">Think of your computer as a virtual treasure chest filled with your important
                    stuff – photos, documents, and more. Computer protection is like a shield against
                    troublemakers like viruses and hackers.</p>
            </div>
        </div>

        <a href="#" class="cta-button">Best Practices</a>
        <a href="#" class="cta-button">Backups</a>
        <a href="#" class="cta-button">Passwords</a>
        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text">Tutorials / Blog</h3>
                <div class="link-dialog">
                    <p tabindex="0">This section is all about the tutorials and blog posts that we have on our
                        website. We have a wide range of topics that we cover, from computer hardware and
                        software to internet security and more.</p>
                </div>
            </div>
            <p>Visit our tutorials and blog page for more information</p>
            <a href="#" class="cta-button">Visit Page</a>
        </aside>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text">Hardware</h3>
            <div class="link-dialog">
                <p tabindex="0">A computer is an electronic device that manipulates data or information. It has
                    the ability to store,retrieve, and process data.</p>
                <p tabindex="0">The Hardware is the computer — it's physical components.</p>
                <p>These components may include the computer's functionality, design, materials, innovations,
                    thermals, etc.</p>
            </div>
        </div>

        <a href="#" class="cta-button">CPU</a>
        <a href="#" class="cta-button">Storage</a>
        <a href="#" class="cta-button">Power Supply Unit</a>
        <a href="#" class="cta-button">Input</a>
        <a href="#" class="cta-button">Output</a>
        <a href="#" class="cta-button">Parts</a>

        <aside>
            <hr>
            <div class="multi-link-container">
                <h3 class="linked-text">Peripherals and Gear</h3>
                <div class="link-dialog">
                    <p tabindex="0">Peripherals and gear are the additional components that help you use your
                        computer.</p>
                    <p tabindex="0">These include desks, chairs, computer mats, lights, clothing, and other
                        stuff that are unrelated to the computer itself, but are very useful to have.</p>
                </div>
            </div>
            <p>Visit our computer peripherals and gear for more information</p>
            <a href="#" class="cta-button">Visit Page</a>
    </div>
    </aside>
    </div>

    <div class="grid-item">
        <div class="multi-link-container">
            <h3 class="linked-text">Software</h3>
            <div class="link-dialog">
                <p tabindex="0">Commonly known as computer programs or apps, these are the instructions for the
                    computer’s tasks</p>
            </div>
        </div>
        <a href="#" class="cta-button">Anti-Virus</a>
        <a href="#" class="cta-button">Malware Cleaner</a>
        <a href="#" class="cta-button">Web Browsers</a>
        <a href="#" class="cta-button">Messaging</a>
        <a href="#" class="cta-button">Media</a>
        <a href="#" class="cta-button">Runtimes</a>
        <a href="#" class="cta-button">Imaging</a>
        <a href="#" class="cta-button">Documents</a>
        <a href="#" class="cta-button">File Sharing</a>
        <a href="#" class="cta-button">Online Storage</a>
        <a href="#" class="cta-button">Other</a>
        <a href="#" class="cta-button">Utilities</a>
        <a href="#" class="cta-button">Compression</a>
        <a href="#" class="cta-button">Developer Tools</a>
    </div>
</section>
<?php
}

include './anvil/structure.php';
?>