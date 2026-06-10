<?php
global $page, $sub_route;

$lang = $page->getLang();
$basePath = ($lang == 'en' || $lang == 'es-419') ? 'hardware_options' : 'opciones_hardware';

$navItems = [
    'en' => [
        '' => ['label' => 'Hardware'],
        'cpu' => ['label' => 'CPU'],
        'ram' => ['label' => 'RAM'],
        'gpus' => ['label' => 'GPU'],
        'storage' => ['label' => 'Storage'],
        'motherboards' => ['label' => 'Motherboards'],
        'power_supply' => ['label' => 'Power Supply'],
        'gpu' => ['label' => 'GPU'],
        'cases' => ['label' => 'Cases'],
        'cooling' => ['label' => 'Cooling'],
        'io_devices' => ['label' => 'Input/Output Devices'],
        'peripherals' => ['label' => 'Peripherals'],
        'mouse' => ['label' => 'Mouse'],
        'keyboard' => ['label' => 'Keyboard'],
        'displays' => ['label' => 'Displays'],
        'external_storage' => ['label' => 'External Storage'],
        'pci_cards' => ['label' => 'PCI Cards'],
        'scanners' => ['label' => 'Scanners'],
        'printers' => ['label' => 'Printers'],
        'console_controllers' => ['label' => 'Console Controllers'],
        'joysticks' => ['label' => 'Joysticks'],
        'tablets' => ['label' => 'Tablets'],
        'microphones' => ['label' => 'Microphones'],
        'headset' => ['label' => 'Headset'],
        'headphones' => ['label' => 'Headphones'],
        'audioMixers' => ['label' => 'Audio Mixers'],
        'controllers' => ['label' => 'Controllers'],
        'gamingGear' => ['label' => 'Gaming Gear'],
        'pencils' => ['label' => 'Pencils, Pens, and Tablets'],
        'chair' => ['label' => 'Chair'],
        'desks' => ['label' => 'Desks'],
        'anti_slip_mat' => ['label' => 'Anti-Slip Mat'],
        'speakersAndSubwoofers' => ['label' => 'Speakers and Subwoofers'],
    ],
    'es-419' => [
        '' => ['label' => 'Hardware'],
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

<nav class="hardware-breadcrumbs fullbar">
    <ul>
        <?php foreach ($items as $slug => $data): ?>
            <?php
            if (!is_array($data) || !isset($data['label'])) continue;

            $label = $data['label'];
            $itemTitle = $data['label'];
            $isActive = (($sub_route ?? '') == $slug || $page->getTitle() == $itemTitle);
            $activeClass = $isActive ? 'active' : '';
            $url = $page->getDir() . $basePath . ($slug ? '/' . $slug : '');
            ?>
            <li><a href="<?= $url ?>#content" class="<?= $activeClass ?>"><?= $label ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>
