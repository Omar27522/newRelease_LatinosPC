<?php
global $page, $sub_route;

$lang = $page->getLang();
$basePath = ($lang == 'en') ? 'offered_services' : 'servicios';

$navItems = [
    'en' => [
        '' => ['label' => 'Services'],
        'cleanups' => ['label' => 'Cleanups'],
        'protection' => ['label' => 'Protection'],
        'consultations' => ['label' => 'Consultations'],
        'managedServices' => ['label' => 'Managed'],
        'websites' => ['label' => 'Websites'],
        'remoteSupport' => ['label' => 'Remote'],
    ],
    'es-419' => [
        '' => ['label' => 'Servicios'],
        'limpieza' => ['label' => 'Limpieza'],
        'proteccion' => ['label' => 'Protección'],
        'consultas' => ['label' => 'Consultas'],
        'serviciosGestionados' => ['label' => 'Gestionados'],
        'sitiosWeb' => ['label' => 'Sitios Web'],
        'soporteRemoto' => ['label' => 'Soporte'],
    ]
];

$items = $navItems[$lang] ?? $navItems['en'];
?>

<nav class="services-breadcrumbs">
    <ul>
        <?php foreach ($items as $slug => $data): ?>
            <?php
                $label = $data['label'];
                $itemTitle = $data['label'];
                // Check active state by slug OR by page title
                $isActive = (($sub_route ?? '') == $slug || $page->getTitle() == $itemTitle);
                $activeClass = $isActive ? 'active' : '';
                $url = $page->getDir() . $basePath . ($slug ? '/' . $slug : '');
            ?>
            <li><a href="<?= $url ?>#content" class="<?= $activeClass ?>"><?= $label ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>