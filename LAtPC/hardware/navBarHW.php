<?php
global $page, $sub_route;

$lang = $page->getLang();
$basePath = ($lang == 'en') ? 'hardware_options' : 'opciones_hardware';

$navItems = [
    'en' => [
        '' => ['label' => 'Hardware'],
        'cpu' => ['label' => 'CPU'],
        'ram' => ['label' => 'RAM'],
        'gpu' => ['label' => 'GPU'],
        'storage' => ['label' => 'Storage'],
        'motherboard' => ['label' => 'Motherboard'],
        'psu' => ['label' => 'Power Supply'],
        'chassis' => ['label' => 'Chassis'],
        'cooling' => ['label' => 'Cooling'],
        'input_devices' => ['label' => 'Input/Output Devices'],
        'peripherals' => ['label' => 'Peripherals'],
        'mouse' => ['label' => 'Mouse'],
        'keyboard' => ['label' => 'Keyboard'],
        'displays' => ['label' => 'Displays'],
        'portableMemory' => ['label' => 'External Storage'],
        'pci_cards' => ['label' => 'PCI Cards'],
        'scanners' => ['label' => 'Scanners'],
        'printers' => ['label' => 'Printers'],
        'console_controllers' => ['label' => 'Console Controllers'],
        'joysticks' => ['label' => 'Joysticks'],
        'tablets' => ['label' => 'Tablets'],
        'microphones' => ['label' => 'Microphones'],
        'headset' => ['label' => 'Headset'],
        'headphones' => ['label' => 'Headphones'],
        'audio_mixers' => ['label' => 'Audio Mixers'],
        'controllers' => ['label' => 'Controllers'],
        'gaming_uniforms' => ['label' => 'Gaming Gear'],
        'pens_pencils_tablets' => ['label' => 'Pencils, Pens, and Tablets'],
        'chairs' => ['label' => 'Chair'],
        'desks' => ['label' => 'Desks'],
        'anti_slip_mats' => ['label' => 'Anti-Slip Mat'],
        'speakers_and_subwoofers' => ['label' => 'Speakers and Subwoofers'],
    ],
    'es-419' => [
        '' => ['label' => 'Hardware'],
        'cpu' => ['label' => 'CPU'],
        'ram' => ['label' => 'RAM'],
        'gpu' => ['label' => 'GPU'],
        'storage' => ['label' => 'Almacenamiento'],
        'motherboard' => ['label' => 'Tarjeta Madre'],
        'psu' => ['label' => 'Fuente de Poder'],
        'chassis' => ['label' => 'Gabinete'],
        'cooling' => ['label' => 'Enfriamiento'],
        'input_devices' => ['label' => 'Disp. Entrada'],
        'peripherals' => ['label' => 'Periféricos'],
        'mouse' => ['label' => 'Ratón'],
        'keyboard' => ['label' => 'Teclado'],
        'displays' => ['label' => 'Pantallas'],
        'portableMemory' => ['label' => 'Memoria Portátil'],
        'pci_cards' => ['label' => 'Tarjetas PCI'],
        'scanners' => ['label' => 'Escáneres'],
        'printers' => ['label' => 'Impresoras'],
        'console_controllers' => ['label' => 'Mandos de Consola'],
        'joysticks' => ['label' => 'Palancas de Mando'],
        'tablets' => ['label' => 'Tabletas'],
        'microphones' => ['label' => 'Micrófonos'],
        'headset' => ['label' => 'Auriculares'],
        'headphones' => ['label' => 'Audífonos'],
        'audio_mixers' => ['label' => 'Mezcladores'],
        'controllers' => ['label' => 'Controladores'],
        'gaming_uniforms' => ['label' => 'Uniformes de Juego'],
        'pens_pencils_tablets' => ['label' => 'Lápices y Tabletas'],
        'chairs' => ['label' => 'Sillas'],
        'desks' => ['label' => 'Escritorios'],
        'anti_slip_mats' => ['label' => 'Alfombrillas'],
        'speakers_and_subwoofers' => ['label' => 'Altavoces y Subwoofers'],
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
