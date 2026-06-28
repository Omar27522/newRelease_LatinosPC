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
        'tarjeta_grafica' => ['label' => 'GPU'],
        'almacenamiento' => ['label' => 'Almacenamiento'],
        'placa_base' => ['label' => 'Tarjeta Madre'],
        'fuente_de_poder' => ['label' => 'Fuente de Poder'],
        'carcasa' => ['label' => 'Gabinete'],
        'enfriamiento' => ['label' => 'Enfriamiento'],
        'raton' => ['label' => 'Ratón'],
        'teclado' => ['label' => 'Teclado'],
        'displays' => ['label' => 'Pantallas'],
        'memoria_portatil' => ['label' => 'Memoria Portátil'],
        'tarjetas_pci' => ['label' => 'Tarjetas PCI'],
        'escaneres' => ['label' => 'Escáneres'],
        'impresoras' => ['label' => 'Impresoras'],
        'controladores_de_consola' => ['label' => 'Mandos de Consola'],
        'joysticks' => ['label' => 'Palancas de Mando'],
        'tablets' => ['label' => 'Tabletas'],
        'microfonos' => ['label' => 'Micrófonos'],
        'headset' => ['label' => 'Auriculares'],
        'audifonos' => ['label' => 'Audífonos'],
        'mezcladoras_de_audio' => ['label' => 'Mezcladores'],
        'controladores' => ['label' => 'Controladores'],
        'uniformes_de_gaming' => ['label' => 'Uniformes de Juego'],
        'lapices_plumas_y_tablets' => ['label' => 'Lápices y Tabletas'],
        'sillas' => ['label' => 'Sillas'],
        'escritorios' => ['label' => 'Escritorios'],
        'tapetes_antideslizantes' => ['label' => 'Alfombrillas'],
        'altavoces_y_subwoofers' => ['label' => 'Altavoces y Subwoofers'],
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
