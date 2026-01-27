<?php
echo "<h1>Routing Diagnostic</h1>";
echo "<pre>";

$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];
$path_info = $_SERVER['PATH_INFO'] ?? 'NOT SET';

echo "REQUEST_URI: " . htmlspecialchars($request_uri) . "\n";
echo "SCRIPT_NAME: " . htmlspecialchars($script_name) . "\n";
echo "PATH_INFO:   " . htmlspecialchars($path_info) . "\n";
echo "__DIR__:     " . __DIR__ . "\n";

$script_dir_raw = dirname($script_name);
echo "dirname(SCRIPT_NAME): " . htmlspecialchars($script_dir_raw) . "\n";

$script_dir = str_replace('\\', '/', $script_dir_raw);
echo "Normalized script_dir: " . htmlspecialchars($script_dir) . "\n";

$uri_path = parse_url($request_uri, PHP_URL_PATH);
echo "parse_url(REQUEST_URI): " . htmlspecialchars($uri_path) . "\n";

echo "--------------------------------------------------\n";
echo "Logic Test:\n";

if (strpos($uri_path, $script_dir) === 0) {
    echo "Match found! strpos(\$uri_path, \$script_dir) === 0\n";
    if ($script_dir === '/' || $script_dir === '\\') {
         $route = ltrim($uri_path, '/');
         echo "Root dir detected. Ltrim: '$route'\n";
    } else {
        $len = strlen($script_dir);
        echo "Script dir length: $len\n";
        $route = substr($uri_path, $len);
        echo "Substr result: '$route'\n";
    }
} else {
    echo "No Match! Defaulting to uri_path\n";
    $route = $uri_path;
}

$route = ltrim($route, '/');
$route = trim($route, '/');

echo "FINAL ROUTE: '" . htmlspecialchars($route) . "'\n";
echo "</pre>";
?>
