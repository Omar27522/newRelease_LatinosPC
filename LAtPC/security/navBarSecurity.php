<?php
global $page, $sub_route;

$lang = (isset($page) && method_exists($page, 'getLang')) ? $page->getLang() : 'en';
$basePath = ($lang == 'en') ? 'offered_security' : 'seguridad';
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

$items = $navItems[$lang] ?? $navItems['en'];
$currentTitle = (isset($page) && method_exists($page, 'getTitle')) ? $page->getTitle() : '';
?>

<nav class="security-breadcrumbs" aria-label="Security Navigation">
    <ul>
        <?php foreach ($items as $slug => $data): ?>
            <?php
                $label = $data['label'];
                $icon = $data['icon'];
                // Match active state by slug or page title
                $isActive = false;
                if ($slug === '' && in_array($currentTitle, ['Security', 'Seguridad'])) {
                    $isActive = true;
                } elseif ($slug === 'best_practices' && in_array($currentTitle, ['Best Practices', 'Mejores Prácticas'])) {
                    $isActive = true;
                } elseif (($slug === 'passwords' || $slug === 'clave') && in_array($currentTitle, ['Passwords', 'Contraseñas'])) {
                    $isActive = true;
                } elseif (($slug === 'backups' || $slug === 'respaldos') && in_array($currentTitle, ['Backups', 'Respaldos'])) {
                    $isActive = true;
                } elseif (($sub_route ?? '') === $slug) {
                    $isActive = true;
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
