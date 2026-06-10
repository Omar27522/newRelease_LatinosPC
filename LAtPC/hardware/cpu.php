<?php
include_once('navBarHW.php');
 
    $title =[   'CPU','INTEL','AMD','x86:','ARM:','RISC-V:','Architecture','MIPS:','Power:'
    ];

    $subTitle =[    'As of Omar\'s latest research indicates, here are the latest lineup of modern x86 CPU Architecture:',
    '14th-Gen Raptor Cove _______7/19/2023',
    'Some of the most common uses for Intel Xeon CPUs include:',
    'The micro-architecture for the popular consumer CPU\'s is the Zen4.'
    ];

    $links =['LGA'=>'https://www.digitaltrends.com/computing/what-are-intels-lga-processor-sockets/',
             'x86'=>'https://en.wikipedia.org/wiki/X86',
             'ARM'=>'https://en.wikipedia.org/wiki/ARM_architecture_family',
             'RISCV'=>'https://riscv.org/about/history/',
             'CUDDGBM'=>'https://www.google.com/books/edition/_/F1c8XqLLJboC?hl=en&sa=X&ved=2ahUKEwjO6s-qz6H-AhU9hu4BHf-lBXcQ8fIDegQIDBAE',
             'MIPS'=>'https://www.mips.com/products/architectures/',
             'POWER'=>'https://www.ibm.com/cloud/architecture/architectures/power',
             'intel'=>'https://www.intel.com/content/www/us/en/products/overview.html',
             'intel_i3'=>'https://ark.intel.com/content/www/us/en/ark/products/series/236176/intel-core-i3-processors-14th-gen.html',
             'intel_i5'=>'https://ark.intel.com/content/www/us/en/ark/products/series/236175/intel-core-i5-processors-14th-gen.html',
             'intel_i7'=>'https://ark.intel.com/content/www/us/en/ark/products/series/236170/intel-core-i7-processors-14th-gen.html',
             'intel_i9'=>'https://ark.intel.com/content/www/us/en/ark/products/series/236143/intel-core-i9-processors-14th-gen.html',
             'intel_xeon'=>'https://ark.intel.com/content/www/us/en/ark/products/series/240357/intel-xeon-6.html',
             'intel_mobile'=>'https://ark.intel.com/content/www/us/en/ark/products/series/236798/intel-core-processors-series-1.html#@Mobile',
             'AMD'=>'https://www.amd.com/en/processors',
             'AMD_epyc'=>'https://www.amd.com/en/products/processors/server/epyc.html',
             'AMD_WS'=>'https://www.amd.com/en/products/processors/workstations/ryzen-threadripper.html',
             'AMD_embedded'=>'https://www.amd.com/en/products/embedded.html',
             'AMD_embeddedEpyc'=>'https://www.amd.com/en/products/embedded/epyc.html',
             'AMD_embededRyzen'=>'https://www.amd.com/en/products/embedded/ryzen.html',
             'AMD_laptop'=>'https://www.amd.com/en/products/processors/laptop/ryzen.html',
             'AMD_RyzenPro_laptop'=>'https://www.amd.com/en/products/processors/laptop/ryzen.html',
             'AMD_laptopBusiness'=>'https://www.amd.com/en/products/processors/laptop/ryzen-for-business.html',
             'AMD_laptopRyzen'=>'https://www.amd.com/en/products/processors/laptop/ryzen.html',
             'AMD_athlon'=>'https://www.amd.com/en/products/processors/laptop/athlon.html',
             'AMD_desktop'=>'https://www.amd.com/en/products/processors/ryzen-for-professionals.html',
             'AMD_threadripperPro'=>'https://www.amd.com/en/products/processors/workstations/ryzen-threadripper/design-and-manufacturing.html',
             'AMD_ryzenPro'=>'https://www.amd.com/en/products/processors/ryzen-for-professionals.html',
             'AMD_athlonPro'=>'https://www.amd.com/en/processors/athlon-pro',
             'AMD_ryzenThreadripper'=>'https://www.amd.com/en/products/processors/workstations/ryzen-threadripper.html',
             'AMD_Ryzen'=>'https://www.amd.com/en/products/processors/desktops/ryzen.html',
             'AMD_RyzenG'=>'https://www.amd.com/en/products/processors/laptop/ryzen-for-everyday-productivity.html',
             'AMD_athlonDesktop'=>'https://www.amd.com/en/products/processors/desktops/athlon.html',
             'AMD_sWRX80' => 'https://www.amd.com/en/products/processors/chipsets/wrx80.html',
             'AMD_TRX40' => 'https://www.amd.com/en/products/processors/chipsets/strx40.html',
             'AMD_X399' => 'https://www.amd.com/en/products/processors/chipsets/str4.html',
             'AMD_AM5' => 'https://www.amd.com/en/products/processors/chipsets/am5.html',
             'AMD_AM4' => 'https://www.amd.com/en/products/processors/chipsets/am4.html',
             'AMD_AM3+' => 'https://en.wikipedia.org/wiki/AMD_900_chipset_series',
             'AMD_FM2+' => 'https://www.amd.com/en/products/processors/chipsets.html#container-72c8b11ac7',
             'AMD_SP3' => 'https://www.amd.com/content/dam/amd/en/documents/processor-tech-docs/design-guides/56795_1_00-PUB.pdf'
    ];

    $architecture = [   'Modern CPU Architecture Types',
        'There are several modern CPU architectures currently in use. Some examples include:',
        'Used by Intel and AMD processors and is the most common architecture found in personal computers and servers.',
        'Mobile devices, embedded systems, and low-power servers. Known for its low power consumption and energy efficiency.',
        'This is a free and open-source instruction set architecture (ISA) that has been gaining popularity in recent years. It is used in a variety of applications, including data centers, IoT devices, and edge computing.',
        'This architecture is used in a wide range of devices such as routers, set-top boxes, and video game consoles. <a href="https://en.wikipedia.org/wiki/MIPS_architecture"title="MIPS architecture">Wikipedia Link</a>',
        'This architecture is used in IBM\'s Power systems, which are commonly used in enterprise and scientific computing.',
        'Each of these architectures has its own strengths and weaknesses, and the choice of which one to use will depend on the specific requirements of the application or device.'
    ];

    $intel =[   '14th Generation processors are based on the 10nm process and feature the new <a href="https://wccftech.com/intel-raptor-lake-s-desktop-cpu-lineup-leaks-out-core-i9-with-up-to-24-raptor-cove-architecture/" title="https://wccftech.com/"> Raptor Cove</a> micro-architecture.',
            'The main difference between the Intel processor series lie in their core counts, clock speeds, cache sizes, and supported technologies.<br /><br /> Moving from Core i3 to Core i9, the computer generally gets an increase in performance and features.',
            'However, it\'s essential to consider the specific needs, use cases, and the workload of a CPU, as higher-tier processors also come with higher price tags. <br /><br />',
            'For everyday computing and light tasks, a Core i3 or i5 may be sufficient, while content creators and gamers may benefit from the extra power and features offered by Core i7 and i9 CPUs.',
            'Positioned as entry-level processors, Core i3 CPUs are generally suitable for everyday tasks such as web browsing, office applications, and light multitasking. They usually have a lower core count and lack some of the more advanced features found in higher-tier CPUs.',
            'This CPU series is targeted at mainstream users and offers a good balance of performance and value. These processors typically have more cores than Core i3 models and support features like Turbo Boost, which dynamically increases clock speeds for improved performance.',
            'These CPUs are designed for power users, gamers, and content creators who need higher performance capabilities. They come with more cores, higher clock speeds, and often include Hyper-Threading (SMT) technology, allowing each physical core to handle two threads simultaneously.',
            'Positioned as Intel\'s top-of-the-line consumer-grade processors, Core i9 CPUs offer the best performance for demanding tasks like video editing, 3D rendering, and gaming. They have the highest core counts, the fastest clock speeds, and support advanced technologies like Hyper-Threading.',
            'Commonly used designed for <a href="https://www.lawinsider.com/dictionary/enterprise-market#:~:text=Enterprise%20Market%20means%20that%20market,agencies%2C%20utilities%20and%20educational%20institutions.">Enterprise</a> and <a href="https://www.researchnester.com/reports/workstation-market/149">Workstations,</a> in servers, workstations, and other high-end computing devices. They are popular for their performance, reliability, and scalability.<br />',
            '<a href="https://www.ibm.com/topics/data-centers" title="IBM">Data center</a> applications such as web serving, database management, and analytics.',
            '<a href="https://www.intel.com/content/www/us/en/products/docs/systems-devices/workstations/what-is-a-workstation.html" title="Intel">Workstation</a> applications such as 3D rendering, video editing, and scientific computing.',
            '<a href="https://www.techtarget.com/searchcio/feature/High-performance-computing-use-cases-and-benefits-in-business" title="TechTarget">High-performance computing (HPC)</a> applications such as weather forecasting, climate modeling, and drug discovery.',
            'These new Xeon processors lineup are based on the 10nm process, and feature the new Raptor Cove micro-architecture. They are designed for enterprise and data center use New features offer improved performance, power efficiency, security, and reliability.',
            '',
            '',
            '',
    ];

    $lga =[ 'Land Grid Array',
            'Sockets',
            'CPU Sockets are the physical connectors on a motherboard that allow the CPU (Central Processing Unit) to be installed and connected to the rest of the system. The size of a CPU socket refers to the physical dimensions and pin layout of the socket, and it must match the corresponding CPU.',
            'The latest <a href="https://www.intel.com/content/www/us/en/support/articles/000005670/processors.html"title="sockets">Intel</a><a href="https://en.wikipedia.org/wiki/Land_grid_array#Intel" title="Intel Sockets"> LGA sockets</a> are:',
            'This socket is used by Alder Lake and Raptor Lake processors and is compatible with motherboards that use the Intel 500 series chipsets.',
            'This socket is used by 10th and 11th Gen Core processors (Comet Lake and Rocket Lake) and is compatible with motherboards that use the Intel 400series chipsets.',
            'This socket is used by Sandy Bridge, Ivy Bridge, Haswell, and Broadwell processors and is compatible with motherboards that use the Intel C600 series chipsets.',
            'This socket is used by Core X-series processors and Xeon Scalable processors and is compatible with motherboards that use the X299 chipset.',
            'This socket is used by Skylake, Cascade Lake, and Xeon Phi Scalable processors for servers and workstations and is compatible with motherboards that use the C621, C622, C624 and C628 chipset.',
            'This socket is used by Cooper Lake, and Ice Lake processors [Xeon] chipset.',
            '',
    ];

    $amd =['EPYC™AMD',//0
            'Cloud Computing',
            'Database and Analytics',
            'HCI and Virtualization',
            'High Performance',//4

            'Ryzen™ & Threadripper™',
            'PRO',
            'Processors for Creators',
            'PRO Mobile Processors',//8


            'Embedded',
            'EPYC™ Embedded',
            'Ryzen™ Embedded',
            'R & G-Series Embedded Solutions',//12

            'Laptops',
            'PRO Mobile Processors for Business',
            'Mobile Processors for Business',
            'Mobile Processors',
            'Athlon™ Mobile Processors',//17

            'Desktops',
            'Ryzen™ Threadripper™ PRO',
            'Ryzen™ PRO',
            'Athlon™ PRO',
            'Ryzen™ Threadripper for High End Desktops',
            'Ryzen™',
            'Ryzen™ with Radeon™ Graphics',
            'Athlon™ with Radeon™ Graphics',//25

            'The current <a href="https://www.amd.com/en/products/chipsets-motherboards-desktop" title="Chipsets">Chipsets</a> are:',
            'Implemented by high-performance AMD Threadripper™ and Ryzen™ processors for powerful computers. designed for advanced users who need a lot of processing power for demanding tasks like video editing or gaming.',
            'Implemented by 3rd Gen Ryzen™ and Threadripper™ processors. It was and still is used in computers that needed a lot of power for tasks like video editing, gaming, or running multiple programs at the same time.',
            'Implemented by 1st and 2nd Gen Ryzen™ and Threadripper™ processors. Just like sWRX80 and sTRX40, it was used in powerful computers for tasks that required a lot of processing power, like professional video editing or running complex simulations.',
            'For AMD Ryzen™ 7000 Series Desktop Processors featuring PCIe® 5.0 And DDR5 Memory. It brings improvements in performance and features. Used in computers for various tasks like gaming, schoolwork, and general use.',
            'For select AMD Ryzen™ and Athlon™ processors with Radeon™ graphics, and 7th Gen A-Series, it offers fast DDR4 memory, PCIe® 4.0, and NVMe technologies.',
            'AMD 9-series chipsets empower AMD FX processors with the support of the latest device technologies for an easy, seamless PC experience.',
            'AMD A-Series chipsets are designed to unleash the performance of the AMD Accelerated Processing Unit (APU) and are offered in a variety of different I/O configurations.',
            'This <a href="https://www.amd.com/en/products/cpu/amd-epyc-7452">socket</a> is used by AMD EPYC processors for servers and workstations.',
            '',//35
    ];

    $cpu =['It\'s important to check the CPU socket size compatibility with the motherboard before buying a CPU, as the CPU will not fit in the socket if they are not compatible.<br />AMD usually supports their sockets for longer periods than Intel, so the AM4 socket is still being used and supported by new processors.',
            'The speed, core count, and cache size of a PC CPU can vary widely depending on the specific model and manufacturer, but in general, these are the most popular speeds, core counts, and cache sizes currently:',
            'Speed ',//2
            '3.0GHz - 4.0GHz range is considered as a sweet spot for most use cases.',
            'Core count',//4
            '4 cores is the minimum for most modern CPUs, however 6 and 8 cores CPUs are becoming more common and in some cases even 16 cores seen in high-end desktop or workstation CPUs.',
            'Cache size',//6
            '8MB - 16MB is considered as typical for most modern CPUs, some high-end desktop processors have 20MB-32MB',
            'It is worth noting that the actual performance of a CPU depends on many factors, including the specific architecture and manufacturing process used, as well as the specific application or workload being run. The above information is a generalization and some models and variants may deviate from it.',
            'Also, it\'s worth considering that core count and clock speed aren\'t the only things to consider when looking for a CPU. Other factors such as the CPU\'s architecture, memory support, features, and power consumption are also important to consider depending on your usage scenario and specific needs.',
    ];
    $mobile = ['Mobile CPU for embedded systems and Portable devices</p>
            <p>Mobile CPUs, also known as mobile processors or system-on-a-chip (SoC), are used in portable devices such as
                smartphones, tablets, and laptops. These processors are specifically designed to be energy-efficient and to
                conserve battery power, while still providing sufficient performance for these devices.',
                'Some popular mobile processors on the market include:',
                'These are a series of SoCs designed and manufactured by Qualcomm. They are used in a wide range of devices,
                from budget smartphones to high-end flagship devices. They are designed to support multiple communication
                modalities such as 5G, 4G, 3G, and 2G.',
                'These are a series of SoCs designed and manufactured by Samsung Electronics, used in Samsung\'s own mobile
                devices.',
                'These are a series of SoCs designed by Apple and used in the company\'s iPhone and iPad devices.',
                'These are a series of SoCs designed and manufactured by Huawei, they are used on Huawei and Honor\'s devices.',
                'They produce SoCs for smartphones, tablets, and other mobile devices, particularly popular in mid-range and
                budget devices.',
                'Microchip Technology is known for its micro-controller and CPU offerings, used in a variety of applications
                like IoT devices, automotive systems, and consumer electronics.',
                'The performance, power efficiency and capabilities of mobile processors have increased significantly over
                the years.',
                'It is also worth mentioning that in modern smartphones, a lot of the heavy computational work is offloaded
                to specialized sub-components such as the <a href="?hw_gpu#scroll">GPU</a> and the <a
                    href="https://en.wikipedia.org/wiki/Digital_signal_processor">DSP</a>, allowing the <a
                    href="?hw_cpu#scroll">CPU</a> to use less energy and stay cooler, making for a more power efficient
                device.'
            ];
            $update = ['Last Update:7/19/2023'];

    ?>


    <section class=" fulbar article">
        <div class="container hero3">
            <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
            <ul class="ex_menu spacer_shape" style="text-align:center;padding-bottom: 20px;">
                <li id="cpu" style="display: inline;font-size: xxx-large"><a href="?hw/sw#cpu">
                        <?= empty($title[0]) ? $titulo[0] : $title[0];?>
                    </a> - </li>
                <li style="display: inline;font-size: xxx-large"><a href="#intel">
                        <?= empty($title[1]) ? $titulo[1] : $title[1];?>
                    </a> - </li>
                <li style="display: inline;font-size: xxx-large"><a href="#amd">
                        <?= empty($title[2]) ? $titulo[2] : $title[2];?>
                    </a></li>
            </ul>
            <img src="https://latinospc.com/images/computer%20CPU.jpg" alt="" class="fl" height="60" width="60" />
            <p>
                <?= empty($architecture[0]) ? $arquitectura[0] : $architecture[0];?></p>
            <span><?= empty($update[0]) ? $actualizacion[0] : $update[0];?></span>
            <p>
                <?= empty($architecture[1]) ? $arquitectura[1] : $architecture[1];?>
            </p>
            <div style="columns: 2; column-gap: 20px;">
                <ul class="ex_menu">
                    <li>
                        <h2><a href="<?=$links['x86'] ?>" title="Wikipedia">
                                <?= empty($title[3]) ? $titulo[3] : $title[3];?>
                            </a></h2>
                        <p>
                            <?= empty($architecture[2]) ? $arquitectura[2] : $architecture[2];?>
                        </p>
                    </li>
                    <li>
                        <h2><a href="<?=$links['ARM'] ?>" title="ARM architecture family">
                                <?= empty($title[4]) ? $titulo[4] : $title[4];?>
                            </a></h2>
                        <p>
                            <?= empty($architecture[3]) ? $arquitectura[3] : $architecture[3];?>
                        </p>
                    </li>
                    <li>
                        <h2><a href="<?=$links['RISCV'] ?>" title="History">
                                <?= empty($title[5]) ? $titulo[5] : $title[5];?>
                            </a></h2>
                        <p style="break-inside: avoid;">
                            <?= empty($architecture[4]) ? $arquitectura[4] : $architecture[4];?>
                        </p>

                        <a href="<?=$links['CUDDGBM'] ?>"
                            title="Concepts of Urban Design By David Gosling, Barry Maitland · 1984"
                            class="spacer_shape"style="margin-left: 35%;">
                            <?= empty($title[6]) ? $titulo[6] : $title[6];?>
                        </a>

                    </li>
                    <li>
                        <h2><a href="<?=$links['MIPS'] ?>">
                                <?= empty($title[7]) ? $titulo[7] : $title[7];?>
                            </a></h2>
                        <p>
                            <?= empty($architecture[5]) ? $arquitectura[5] : $architecture[5];?>
                        </p>
                    </li>
                    <li>
                        <h2><a href="<?=$links['POWER'] ?>">
                                <?= empty($title[8]) ? $titulo[8] : $title[8];?>
                            </a></h2>
                        <p>
                            <?= empty($architecture[6]) ? $arquitectura[6] : $architecture[6];?>
                        </p>
                    </li>
                    <hr>
                    <p>
                        <?= empty($architecture[7]) ? $arquitectura[7] : $architecture[7];?>
                    </p>
                </ul>
            </div><img src="https://latinospc.com/images/artificialintelligence/hw/cpu/thumbs/cpu.jpg" height="280px"
                class="fl" title="Central Processing Unit" alt="CPU stiker">
        </div>
    </section>

    <!-- et▄;Gë6T3ï(⌡╦vt⌐Æïÿ|╪╓kÿY╪R+▌╫¥±   ▄;Gë6T3ï(          )             -->
    <section class="article">
        <div class="container fullbar">
            <p>
                <?= empty($subTitle[0]) ? $subTitulo[0] : $subTitle[0];?>
            </p>
            <div class="spacer"></div>
            <div class="spacer_shape" id="intel"><a href="<?=$links['intel'] ?>" title="intel Processors"><button
                        style="padding:40px;font-size:xx-large">
                        intel
                    </button></a><a href="#scroll"><img src="https://latinospc.com/images/computer%20CPU.jpg" alt=""
                        class="rtl" height="60" width="60" /></a></div>
            <h2>
                <?= empty($subTitle[1]) ? $subTitulo[1] : $subTitle[1];?>
            </h2>
            <ul style="font-size: 35px; padding: 25px;" class="ex_menu intel_menu hero4">
                <li style="display: inline"><a class="button" href="<?=$links['intel_i3'] ?>">
                        i3</a>
                </li>
                -<li style="display: inline"><a class="button" href="<?=$links['intel_i5'] ?>">
                        i5</a>
                </li>

                -<li style="display: inline"><a class="button" href="<?=$links['intel_i7'] ?>">
                        i7</a>
                </li>

                -<li style="display: inline"><a class="button" href="<?=$links['intel_i9'] ?>">
                        i9</a>
                </li>

                -<li style="display: inline"><a class="button" href="<?=$links['intel_xeon'] ?>">
                        Xeon</a>
                </li>

                -<li style="display: inline"><a class="button" href="<?=$links['intel_mobile'] ?>">
                        Mobile</a>
                </li>
            </ul>
            <p>
                <?= $intel[0]; ?>
            </p>
            <p>
                <?= $intel[1]; ?>
            </p>
            <p>
                <?= $intel[2]; ?>
            </p>
            <h2>
                <?= $intel[3]; ?>
            </h2>
            <ul class="ex_menu hero4">
                <li>
                    <h2 class="intelletters">Core i3:</h2>
                    <p>
                        <?= $intel[4]; ?>
                </li>
                </p>
                <li>
                    <h2 class="intelletters">Core i5:</h2>
                    <p>
                        <?= $intel[5]; ?>
                </li>
                </p>
                <li>
                    <h2 class="intelletters">Core i7:</h2>
                    <p>
                        <?= $intel[6]; ?>
                </li>
                </p>
                <li>
                    <h2 class="intelletters">Core i9:</h2>
                    <p>
                        <?= $intel[7]; ?>
                </li>
                </p>

                <li>
                    <h2 class="intelletters">intel Xeon:</h2>
                    <p>
                        <?= $intel[8]; ?>

                        <span style="font-size: larger;"><?= empty($subTitle[2]) ? $subTitulo[2] : $subTitle[2];?></span>

                <li>
                    <p><?= $intel[9]; ?></p>
                </li>
                <li>
                    <p><?= $intel[10]; ?></p>
                </li>
                <li>
                    <p><?= $intel[11]; ?></p>
                </li>

                <p><?= $intel[12]; ?></p>
                </li>
                </p>
            </ul>
            <hr>
            <div class="spacer_shape hero4">
                <p><?= $lga[0]; ?> <a href="<?=$links['LGA'] ?>" title="Digital Trends"><?= $lga[1]; ?></a></p>
                <p><img src="https://latinospc.com/images/artificialintelligence/hw/cpu/thumbs/socket.jpg" title="Socket"
                        class="rtl">
                    <?= $lga[2]; ?></p>
            </div>

            <p>
                <?= $lga[3]; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 1700:</strong> [V] <?= $lga[4]; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 1200:</strong> [H5] <?= $lga[5]; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 2011:</strong> [R] <?= $lga[6]; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 2066:</strong> [R4] <?= $lga[7]; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 3647:</strong> [P, P0, P1] <?= $lga[8]; ?>
            </p>
            <p>
                <strong class="intelletters">LGA 4189:</strong> [P+] <?= $lga[9]; ?>
            </p>
        </div><!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
        <div class="fulbar article">
        </div>
    </section>


    <section class="article">
        <div class="container fullbar">
            <div style="background-color:black; color:gray">
            <div class="spacer_shape" id="amd"><a href="https://www.amd.com/en.html" title="AMD Processors">
                    <button style="padding:40px;font-size:xx-large">
                        <?= empty($title[2]) ? $titulo[2] : $title[2];?>
                    </button></a><a href="#content"><img src="https://latinospc.com/images/computer%20CPU.jpg"
                        alt="CPU Image" class="rtl" height="60" width="60" /></a></div>
            <div class="colms2">
                <p><a href="<?=$links['AMD_epyc'] ?>" title="Epyc™"><button>
                            <p class="button_red">Epyc
                            <div class="amdletters">
                                <ol class="ex_menu"><?= $amd[0]; ?></ol>
                                <br /><?= $amd[1]; ?><br />
                                <br /><?= $amd[2]; ?><br />
                                <br /><?= $amd[3]; ?><br />
                                <br /><?= $amd[4]; ?>
                            </div>
                </p>
                </button></a></p>

                <p><a href="<?=$links['AMD_WS'] ?>" title="Ryzen™ & Threadripper™"><button>
                            <p class="button_red">Ryzen™ & Threadripper
                            <div class="amdletters">
                                <ol><?= $amd[5]; ?></ol>
                                <br /><?= $amd[6]; ?><br />
                                <br /><?= $amd[7]; ?><br />
                                <br /><?= $amd[8]; ?>
                            </div>
                </p>
                </button></a></p>
            </div>

            <div class="colms2">
                <p><a href="<?=$links['AMD_embedded'] ?>" title="Embedded"><button>
                            <p class="button_red">Embedded
                            <ul class="ex_menu"><?= $amd[9]; ?>
                                <li><a href="<?=$links['AMD_embeddedEpyc'] ?>" class="amdletters"
                                        title="EPYC™"><?= $amd[10]; ?></a></li>
                                <li><a href="<?=$links['AMD_embededRyzen'] ?>" class="amdletters"
                                        title="Ryzen™"><?= $amd[11]; ?></a></li>
                                <?= $amd[12]; ?>
                            </ul>
                </p>
                </button></a></p>

                <p><a href="<?=$links['AMD_laptop'] ?>" title="Laptop"><button>
                            <p class="button_red">Laptop
                            <ul class="amdletters ex_menu"><?= $amd[13]; ?>
                                <li><a href="<?=$links['AMD_RyzenPro_laptop'] ?>" class="amdletters"
                                        title="Mobile Pro Business"><?= $amd[14]; ?></a></li>
                                <li><a href="<?=$links['AMD_laptopBusiness'] ?>" class="amdletters"
                                        title="Mobile Business"><?= $amd[15]; ?></a></li>
                                <li><a href="<?=$links['AMD_laptopRyzen'] ?>" class="amdletters"
                                        title="Mobile"><?= $amd[16]; ?></a></li>
                                <li><a href="<?=$links['AMD_athlon'] ?>" class="amdletters"
                                        title="Mobile Athlon™"><?= $amd[17]; ?></a></li>
                            </ul>
                </p>
                </button></a></p>
            </div>

            <p><a href="<?=$links['AMD_desktop'] ?>" title="Desktop"><button>
                        <p class="button_red">Desktop
                        <ul class="ex_menu"><?= $amd[18]; ?>
                            <li><a href="<?=$links['AMD_threadripperPro'] ?>" title="Ryzen™ Threadripper™ PRO"
                                    class="amdletters"><?= $amd[19]; ?></a></li>
                            <li><a href="<?=$links['AMD_ryzenPro'] ?>" title="Ryzen™ PRO"
                                    class="amdletters"><?= $amd[20]; ?></a></li>
                            <li><a href="<?=$links['AMD_athlonPro'] ?>" title="Athlon™ PRO"
                                    class="amdletters"><?= $amd[21]; ?></a></li>
                            <li><a href="<?=$links['AMD_ryzenThreadripper'] ?>" title="High End"
                                    class="amdletters"><?= $amd[22]; ?></a></li>
                            <li><a href="<?=$links['AMD_Ryzen'] ?>" title="AMD Ryzen™ Processors"
                                    class="amdletters"><?= $amd[23]; ?></a></li>
                            <li><a href="<?=$links['AMD_RyzenG'] ?>" title="AMD Ryzen™ with Graphics"
                                    class="amdletters"><?= $amd[24]; ?></a></li>
                            <li><a href="<?=$links['AMD_athlonDesktop'] ?>" title="AMD Athlon™ with Radeon™ Graphics"
                                    class="amdletters"><?= $amd[25]; ?></li>
                        </ul>
            </p>
            </button></a></p>
            <ul class="ex_menu">
                <li class="card2">
                    <h2><?= empty($subTitle[3]) ? $subTitulo[3] : $subTitle[3];?></h2><br /><br /><a href="https://www.amd.com/en/technologies/zen-core.html">AMD "Zen" Core Architecture</a>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_sWRX80'] ?>" title="sWRX80" class="amdred">sWRX80:</a></strong>
                    <?= $amd[27]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_TRX40'] ?>" title="TRX40" class="amdred">sTRX40:</a></strong>
                    <?= $amd[28]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_X399'] ?>" title="X399" class="amdred">TR4
                            X399:</a></strong> <?= $amd[29]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_AM5'] ?>" title="AM5" class="amdred">AM5:</a></strong>
                    <?= $amd[30]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_AM4'] ?>" title="AM4" class="amdred">AM4:</a></strong> <?= $amd[31]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_AM3+'] ?>" title="AM3+" class="amdred">AM3+:</a></strong>
                    <?= $amd[32]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_FM2+'] ?>" title="FM2+" class="amdred">FM2+:</a>
                    </strong> <?= $amd[33]; ?>
                </li>
                <li>
                    <strong><a href="<?=$links['AMD_SP3'] ?>" title="SP3" class="amdred">SP3:</a></strong>
                    <?= $amd[34]; ?>
                </li>
            </ul>
        </div>
        <section class="hero4 fulbar article">
            <div class="container fullbar">

                <h2><?= $cpu[0]; ?></h2>
                <p>
                    <?= $cpu[1]; ?>
                </p>

                <h2><?= $cpu[2]; ?></h2>
                <p>
                    <?= $cpu[3]; ?>
                </p>

                <h2><?= $cpu[4]; ?></h2>
                <p>
                    <?= $cpu[5]; ?>
                </p>

                <h2><?= $cpu[6]; ?></h2>
                <p>
                    <?= $cpu[7]; ?>
                </p>
                <p>
                    <?= $cpu[8]; ?>
                </p>
                <p>
                    <?= $cpu[9]; ?>
                </p>
            </div>
        </section>
        <section class="container fullbar">
            <p style="font-size: xx-large;color:red;"><?= $mobile[0]; ?>
            </p>
            <p>
                <?= $mobile[1]; ?>
            </p>
            <h2 class="qualcomm">Qualcomm Snapdragon:</h2>
            <p>
                <?= $mobile[2]; ?>
            </p>
            <h2 class="samsung">Samsung Exynos:</h2>
            <p>
                <?= $mobile[3]; ?>
            </p>
            <h2 class="apple">Apple A-series:</h2>
            <p>
                <?= $mobile[4]; ?>
            </p>
            <h2 class="huawei">Huawei Kirin:</h2>
            <p>
                <?= $mobile[5]; ?>
            </p>
            <h2>MediaTek:</h2>
            <p>
                <?= $mobile[6]; ?>
            </p>
            <h2>Microchip Technology:</h2>
            <p><?= $mobile[7]; ?></p>
            <p>
            <p><?= $mobile[8]; ?></p>
            </p>
            <p><?= $mobile[9]; ?></p>
        </section>
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
        </div>
    </section>
