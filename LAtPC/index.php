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

//echo "DEBUG: Route = '" . $route . "'<br>";
//echo $path_info;
// Route handling
switch($route) {
    case '':
    case 'index.php':
        // Show homepage - continue to HTML below
        break;
    case 'español':
        // Show Spanish content and exit
        showSpanishContent();
        exit; // Important: stop execution here
        break;
    default:
        // 404 page and exit
        show404();
        exit;
        break;
}

function showSpanishContent() {
    /*echo "<!DOCTYPE html>";
    echo "<html><head><title>Español - LatinosPC</title></head>";
    echo "<body><h1>Hola, el link funciona!</h1></body></html>";*/
    include 'index_spanish.php';
}

function show404() {
    http_response_code(404);
    echo "<!DOCTYPE html>";
    echo "<html><head><title>404 - Page Not Found</title></head>";
    echo "<body><h1>Page not found</h1></body></html>";
}

$title ="Home LatinosPC";
$small = "PC, is for Personal Computer";
include './anvil/structure.php';
?>


