<?php
global $page, $sub_route, $main_route;

// Robust language detection
$isSpanish = false;
if (isset($page) && method_exists($page, 'getLang') && $page->getLang() === 'es-419') {
    $isSpanish = true;
} elseif (isset($page) && isset($page->lang) && in_array(strtolower($page->lang), ['español', 'es', 'es-419'])) {
    $isSpanish = true;
} elseif (($main_route ?? '') === 'seguridad') {
    $isSpanish = true;
} elseif (str_contains($_SERVER['REQUEST_URI'] ?? '', 'seguridad')) {
    $isSpanish = true;
}

include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('security');
global $content, $key;

$lang = $isSpanish ? 'es-419' : 'en';
$basePath = $isSpanish ? 'seguridad' : 'offered_security';
$dir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';

$items = [
    '' => [
        'slug'  => '',
        'label' => $content[0][$key] ?? ($isSpanish ? 'Seguridad' : 'Overview'),
        'icon'  => '&#x1F6E1;&#xFE0F;',
        'key'   => 'overview'
    ],
    'best_practices' => [
        'slug'  => $isSpanish ? 'mejores_practicas' : 'best_practices',
        'label' => $content[1][$key] ?? ($isSpanish ? 'Mejores Prácticas' : 'Best Practices'),
        'icon'  => '&#x26A0;&#xFE0F;',
        'key'   => 'best_practices'
    ],
    'passwords' => [
        'slug'  => $isSpanish ? 'clave' : 'passwords',
        'label' => $content[2][$key] ?? ($isSpanish ? 'Contraseñas' : 'Passwords'),
        'icon'  => '&#x1F511;',
        'key'   => 'passwords'
    ],
    'backups' => [
        'slug'  => $isSpanish ? 'respaldos' : 'backups',
        'label' => $content[3][$key] ?? ($isSpanish ? 'Respaldos' : 'Backups'),
        'icon'  => '&#x1F4BE;',
        'key'   => 'backups'
    ],
];
$currentTitle = (isset($page) && method_exists($page, 'getTitle')) ? $page->getTitle() : '';
$currentSub = $sub_route ?? '';
?>

<nav class="security-breadcrumbs" aria-label="<?= $isSpanish ? 'Navegación de Seguridad' : 'Security Navigation' ?>">
    <ul>
        <?php foreach ($items as $itemKey => $data): ?>
        <?php
                $label = $data['label'];
                $icon = $data['icon'];
                $slug = $data['slug'];

                // Active state detection
                $isActive = false;
                if ($itemKey === '') {
                    if (($currentSub === '' || $currentSub === null) && in_array($currentTitle, ['Security', 'Seguridad'])) {
                        $isActive = true;
                    }
                } elseif ($itemKey === 'best_practices') {
                    if (in_array($currentSub, ['best_practices', 'mejores_practicas']) || in_array($currentTitle, ['Best Practices', 'Mejores Prácticas'])) {
                        $isActive = true;
                    }
                } elseif ($itemKey === 'passwords') {
                    if (in_array($currentSub, ['passwords', 'clave', 'contrasenas', 'contraseñas']) || in_array($currentTitle, ['Passwords', 'Contraseñas'])) {
                        $isActive = true;
                    }
                } elseif ($itemKey === 'backups') {
                    if (in_array($currentSub, ['backups', 'respaldos']) || in_array($currentTitle, ['Backups', 'Respaldos'])) {
                        $isActive = true;
                    }
                }

                $activeClass = $isActive ? 'active' : '';
                $url = $dir . $basePath . ($slug ? '/' . $slug : '');
            ?>
        <li>
            <a href="<?= htmlspecialchars($url); ?>" class="<?= $activeClass ?>">
                <span><?= $icon ?></span>
                <span><?= $label; ?></span>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</nav>