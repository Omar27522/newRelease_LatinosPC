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
    $script_dir = str_replace('\\', '/', dirname($script_name));
    $uri_path = parse_url($request_uri, PHP_URL_PATH);

    // If the script is in a subdirectory, remove that directory from the URI path
    if (strpos($uri_path, $script_dir) === 0) {
        $route = substr($uri_path, strlen($script_dir));
    } else {
        $route = $uri_path;
    }

	$route = ltrim($route, '/');
	$route = trim($route, '/');
}

$route = urldecode($route);

// Split the route into segments for subdirectory support
$route_segments = explode('/', $route);
$main_route = $route_segments[0] ?? '';
$sub_route = $route_segments[1] ?? '';

?>