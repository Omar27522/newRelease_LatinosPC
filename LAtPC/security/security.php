<?php
/**
 * LatinosPC Security Module Master Controller
 * Dispatches to modularized subcomponents and hooks into anvil structure.
 */

include_once __DIR__ . '/securityContent.php';
include_once __DIR__ . '/bestPractices.php';
include_once __DIR__ . '/passwords.php';
include_once __DIR__ . '/backups.php';

if (!function_exists('cssStyles')) {
    function cssStyles() {
        global $page, $sub_route;
        $dir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
        $title = (isset($page) && method_exists($page, 'getTitle')) ? $page->getTitle() : '';
        $sub = $sub_route ?? '';
        $uri = $_SERVER['REQUEST_URI'] ?? '';

        // Always load core security styling (hero banner, breadcrumbs, checklist, shared utilities)
        echo '<link rel="stylesheet" href="' . $dir . 'security/styles/sec_mainStyle.css">' . "\n";

        // Load section-specific modular stylesheet
        if ($sub === 'best_practices' || $sub === 'mejores_practicas' || in_array($title, ['Best Practices', 'Mejores Prácticas']) || str_contains($uri, 'best_practices') || str_contains($uri, 'mejores_practicas')) {
            echo '<link rel="stylesheet" href="' . $dir . 'security/styles/bestPractices.css">' . "\n";
        } elseif ($sub === 'passwords' || $sub === 'clave' || in_array($title, ['Passwords', 'Contraseñas']) || str_contains($uri, 'passwords') || str_contains($uri, 'clave')) {
            echo '<link rel="stylesheet" href="' . $dir . 'security/styles/passwords.css">' . "\n";
        } elseif ($sub === 'backups' || $sub === 'respaldos' || in_array($title, ['Backups', 'Respaldos']) || str_contains($uri, 'backups') || str_contains($uri, 'respaldos')) {
            echo '<link rel="stylesheet" href="' . $dir . 'security/styles/backups.css">' . "\n";
        }
    }
}

include dirname(__DIR__) . '/anvil/structure.php';
?>