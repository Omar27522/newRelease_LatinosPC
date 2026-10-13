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

$lang = $isSpanish ? 'es-419' : 'en';
$basePath = $isSpanish ? 'seguridad' : 'offered_security';
$dir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';

$navItems = [
    'en' => [
        '' => ['label' => 'Overview', 'icon' => '&#x1F6E1;&#xFE0F;'],
        'best_practices' => ['label' => 'Best Practices', 'icon' => '&#x26A0;&#xFE0F;'],
        'passwords' => ['label' => 'Passwords', 'icon' => '&#x1F511;'],
        'backups' => ['label' => 'Backups', 'icon' => '&#x1F4BE;'],
    ],
    'es-419' => [
        '' => ['label' => 'Seguridad', 'icon' => '&#x1F6E1;&#xFE0F;'],
        'mejores_practicas' => ['label' => 'Mejores Pr&aacute;cticas', 'icon' => '&#x26A0;&#xFE0F;'],
        'clave' => ['label' => 'Contrase&ntilde;as', 'icon' => '&#x1F511;'],
        'respaldos' => ['label' => 'Respaldos', 'icon' => '&#x1F4BE;'],
    ]
];

$items = $navItems[$lang];
$currentTitle = (isset($page) && method_exists($page, 'getTitle')) ? $page->getTitle() : '';
$currentSub = $sub_route ?? '';
?>

<nav class="security-breadcrumbs" aria-label="<?= $isSpanish ? 'Navegación de Seguridad' : 'Security Navigation' ?>">
    <ul>
        <?php foreach ($items as $slug => $data): ?>
            <?php
                $label = $data['label'];
                $icon = $data['icon'];

                // Active state detection
                $isActive = false;
                if ($slug === '') {
                    if (($currentSub === '' || $currentSub === null) && in_array($currentTitle, ['Security', 'Seguridad'])) {
                        $isActive = true;
                    }
                } elseif ($slug === 'best_practices' || $slug === 'mejores_practicas') {
                    if ($currentSub === $slug || in_array($currentTitle, ['Best Practices', 'Mejores Prácticas'])) {
                        $isActive = true;
                    }
                } elseif ($slug === 'passwords' || $slug === 'clave') {
                    if ($currentSub === $slug || in_array($currentSub, ['passwords', 'clave', 'contrasenas', 'contraseñas']) || in_array($currentTitle, ['Passwords', 'Contraseñas'])) {
                        $isActive = true;
                    }
                } elseif ($slug === 'backups' || $slug === 'respaldos') {
                    if ($currentSub === $slug || in_array($currentTitle, ['Backups', 'Respaldos'])) {
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
