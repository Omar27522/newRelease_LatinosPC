<?php
include_once __DIR__ . '/head.php';
?>
<body>
<?php
include_once __DIR__ . '/header.php';
?>

    <main>
        <?php
        // Define page routes mapping
        $pageRoutes = [
            'en' => [
                'Home LatinosPC' => 'content_home',
                'Jesus Christ' => '_JesusChrist_King_of_kings',
                'Heavenly Father' => 'fihtmatw',
                'The Apostles' => 'apostles',
                'Apostles: Peter' => 'apostles',
                'Apostles: Andrew' => 'apostles',
                'Apostles: James' => 'apostles',
                'Apostles: John' => 'apostles',
                'Apostles: Philip' => 'apostles',
                'Apostles: Bartholomew' => 'apostles',
                'Apostles: Thomas' => 'apostles',
                'Apostles: Matthew' => 'apostles',
                'Apostles: little_James' => 'apostles',
                'Apostles: Thaddaeus' => 'apostles',
                'Apostles: Simon' => 'apostles',
                'Apostles: Judas' => 'apostles',
                'Apostles: Matthias' => 'apostles',
                'Apostles: Paul' => 'apostles',
                'Parables' => 'parables',
                'Sermons' => 'sermons',
                'Teachings' => 'teachings',
                'Teachings: John' => 'teachings',
                'Template' => 'template',
                'About' => 'content_about',
                'Services' => 'content_services',
                'Clean Ups' => 'content_services_cleanups',
                'Protection' => 'content_services_protection',
                'Consultations' => 'content_services_consultation',
                'Managed Services' => 'content_services_managedServices',
                'Websites' => 'content_services_websites',
                'Remote Support' => 'content_services_remoteSupport',
                'Security' => 'security',
                'Best Practices' => 'best_practices',
                'Backups' => 'security_backups',
                'Passwords' => 'passwords',
                'Hardware' => 'hw_hardware',
                'HW CPU' => 'hw_cpu',
                'HW RAM' => 'hw_ram',
                'HW Motherboard' => 'hw_motherboard',
                'HW Chassis' => 'hw_chassis',
                'HW Storage' => 'hw_storage',
                'HW PSU' => 'hw_psu',
                'HW GPU' => 'hw_gpu',
                'HW Cooling' => 'hw_coolers',
                'HW Input Devices' => 'hw_input_devices',
                'HW Output Devices' => 'hw_output_devices',
                'HW Peripherals' => 'hw_peripherals_and_gear',
                'HW Mouse' => 'hw_mouse',
                'HW Keyboard' => 'hw_keyboard',
                'HW Monitor' => 'hw_monitor',
                'HW PCI Cards' => 'hw_pci_cards',
                'HW External Drive' => 'hw_portableMemory',
                'HW Scanners' => 'hw_scanners',
                'HW Printers' => 'hw_printers',
                'HW Console Controllers' => 'hw_console_controllers',
                'HW Joysticks' => 'hw_joysticks',
                'HW Tablets' => 'hw_tablets',
                'HW Microphones' => 'hw_microphones',
                'HW Headsets' => 'hw_headsets',
                'HW Headphones' => 'hw_headphones',
                'HW Audio Mixers' => 'hw_audio_mixers',
                'HW Controllers' => 'hw_controllers',
                'HW Gaming Uniforms' => 'hw_gaming_uniforms',
                'HW Pens, Pencils & Tablets' => 'hw_pens_pencils_tablets',
                'HW Chairs' => 'hw_chairs',
                'HW Desks' => 'hw_desks',
                'HW Anti-Slip Mats' => 'hw_anti_slip_mats',
                'HW Speakers and Subwoofers' => 'hw_speakers_and_subwoofers',
                'Software' => 'sw_software',
                'SW Anti-Virus' => 'sw_anti_virus',
                'SW Malware Cleaner' => 'sw_mlwcleaner',
                'SW Web Browsers' => 'sw_webBrowsers',
                'SW Messaging' => 'sw_messaging',
                'SW Media' => 'sw_media',
                'SW Runtimes' => 'sw_runtimes',
                'SW Imaging' => 'sw_imaging',
                'SW Documents' => 'sw_documents',
                'SW File Sharing' => 'sw_fileSharing',
                'SW Online Storage' => 'sw_onlineStorage',
                'SW Other' => 'sw_other',
                'SW Utilities' => 'sw_utilities',
                'SW Compression' => 'sw_compression',
                'SW Developer Tools' => 'sw_developerTools',
                'Tutorials' => 'tutorials',
            ],
            'es-419' => [
                'Inicio LatinosPC' => 'content_home',
                'Padre Celestial' => 'qpccsei',
                'Los Apóstoles' => 'apostoles',
                'Parabolas' => 'parabolas',
                'Sermones' => 'sermones',
                'Enseñanzas' => 'ensenhanzas',
                'Acerca' => 'content_about',
                'Seguridad' => 'seguridad',
                'Mejores Prácticas' => 'mejores_practicas',
                'Respaldos' => 'respaldos',
                'Contraseñas' => 'clave',
                'Servicios' => 'content_services',
                'Limpieza' => 'content_services_cleanups',
                'Protección' => 'content_services_protection',
                'Consultas' => 'content_services_consultation',
                'Servicios Gestionados' => 'content_services_managedServices',
                'Soporte Remoto' => 'content_services_remoteSupport',
                'Paginas Web' => 'contenido_servicios_paginasWeb',
            ]
        ];

        // Get current page info
        $currentLang = $page->getLang();
        $currentTitle = $page->getTitle();

        // Call appropriate function if route exists
        if (isset($pageRoutes[$currentLang][$currentTitle])) {
            $functionName = $pageRoutes[$currentLang][$currentTitle];
            if (function_exists($functionName)) {
                call_user_func($functionName);
            }
        }
        ?>

    </main>

<?php
include_once __DIR__ . '/footer.php';
?>
</body>
</html>

