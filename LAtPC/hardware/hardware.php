<?php
function hw_hardware() {
    echo "<h1 class=\"fullbar\">Hardware Main Page</h1>";
}

function hw_cpu()  {
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
        'This architecture is used in a wide range of devices such as routers, set-top boxes, and video game consoles. <a href="https://en.wikipedia.org/wiki/MIPS_architecture"title="MIPS architecture">https://en.wikipedia.org/wiki/MIPS_architecture</a>',
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
    <style>
    /* CPU Page Modern Styling
       Created: June 23, 2025
       A modern, clean design for the CPU hardware section
    */
        
    /* Modern CPU styling */
    .hero3,
    .hero4,
    .article,
    .container,
    .ex_menu,
    .colms2,
    button,
    .card2,
    .spacer_shape {
        /* CSS Variables applied to specific elements */
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
        --accent-color: #e74c3c;
        --light-bg: #bac3cc;
        --dark-bg: #343a40;
        --text-color: #333;
        --light-text: #305a84;
        --intel-blue: #0071c5;
        --amd-red: #ED1C24;
        --qualcomm-color: #3253DC;
        --samsung-color: #1428A0;
        --apple-color: #555555;
        --huawei-color: #CF0A2C;
        --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        --transition: all 0.3s ease;
    
        /* Base styles applied to elements */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
    }
    
    /* Container */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        width: 100%;
        box-sizing: border-box;
    }
    
    /* Hero sections */
    .hero3,
    .hero4 {
        padding: 40px 0;
        margin-bottom: 30px;
        border-radius: 8px;
        box-shadow: var(--box-shadow);
        transition: var(--transition);
    }
    
    .hero3 {
        background-color: #e8f4ea !important;
        /* Replacing DarkSeaGreen with a more modern shade */
    }
    
    .hero4 {
        background-color: #f9f5eb !important;
        /* Replacing wheat with a more modern shade */
    }
    
    /* Article sections */
    .article {
        padding: 25px;
        margin-bottom: 30px;
        background-color: white;
        border-radius: 8px;
        box-shadow: var(--box-shadow);
    }
    
    /* Menu styling */
    .ex_menu {
        list-style-type: none;
        padding: 0;
        margin: 20px 0;
    }
    
    .ex_menu li {
        margin-bottom: 15px;
        transition: var(--transition);
    }
    
    .ex_menu li:hover {
        transform: translateX(5px);
    }
    
    /* Center menu with large text */
    .ex_menu[style*="text-align:center"] {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
        padding-bottom: 20px;
    }
    
    .ex_menu[style*="text-align:center"] li {
        display: inline-block;
        font-size: 2rem !important;
        margin: 0 10px;
    }
    
    /* Links */
    a {
        color: var(--secondary-color);
        text-decoration: none;
        transition: var(--transition);
    }
    
    a:hover {
        color: var(--accent-color);
        text-decoration: underline;
    }
    
    /* Headings */
    h2 {
        color: var(--primary-color);
        margin-top: 30px;
        margin-bottom: 15px;
        font-weight: 600;
        border-bottom: 2px solid var(--secondary-color);
        padding-bottom: 8px;
        display: inline-block;
    }
    
    /* Images */
    img.fl {
        float: left;
        margin-right: 15px;
        margin-bottom: 10px;
        border-radius: 50%;
        box-shadow: var(--box-shadow);
    }
    
    img.rtl {
        float: right;
        margin-left: 15px;
        margin-bottom: 10px;
        border-radius: 8px;
        box-shadow: var(--box-shadow);
    }
    
    /* Two column layout */
    .colms2 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        margin: 30px 0;
    }
    
    /* Buttons */
    button {
        background-color: var(--secondary-color);
        color: white;
        border: none;
        border-radius: 6px;
        padding: 12px 20px;
        cursor: pointer;
        transition: var(--transition);
        font-weight: 600;
        box-shadow: var(--box-shadow);
    }
    
    button:hover {
        background-color: var(--primary-color);
        transform: translateY(-3px);
    }
    
    button[style*="padding:40px"] {
        background-color: var(--amd-red);
        font-size: 1.5rem !important;
        padding: 20px 40px !important;
        border-radius: 8px;
    }
    
    /* Button red style */
    .button_red {
        color: white;
        background-color: var(--amd-red);
        padding: 15px;
        border-radius: 6px;
        margin: 0;
    }
    
    /* Card styles */
    .card2 {
        background-color: white;
        border-radius: 8px;
        padding: 20px;
        box-shadow: var(--box-shadow);
        transition: var(--transition);
    }
    
    .card2:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    
    /* Spacers */
    .spacer {
        height: 30px;
    }
    
    .spacer_mega {
        height: 60px;
    }
    
    .spacer_shape {
        padding: 20px;
        margin: 30px 0;
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 8px;
        box-shadow: var(--box-shadow);
    }
    
    /* Horizontal rule */
    hr {
        border: none;
        height: 2px;
        background-color: var(--secondary-color);
        margin: 30px 0;
        opacity: 0.5;
    }
    
    /* Brand-specific styles */
    .intelletters {
        color: var(--intel-blue);
        font-weight: 600;
    }
    
    .amdletters {
        color: var(--amd-red);
        font-weight: 600;
    }
    
    .amdred {
        color: var(--amd-red);
        font-weight: 700;
        text-decoration: none;
    }
    
    .amdred:hover {
        text-decoration: underline;
    }
    
    .qualcomm {
        color: var(--qualcomm-color);
    }
    
    .samsung {
        color: var(--samsung-color);
    }
    
    .apple {
        color: var(--apple-color);
    }
    
    .huawei {
        color: var(--huawei-color);
    }
    
    /* Responsive design */
    @media (max-width: 768px) {
        .colms2 {
            grid-template-columns: 1fr;
        }
    
        .ex_menu[style*="text-align:center"] {
            flex-direction: column;
            align-items: center;
        }
    
        .ex_menu[style*="text-align:center"] li {
            margin: 5px 0;
        }
    
        b button[style*="padding:40px"] {
            padding: 15px 30px !important;
            font-size: 1.2rem !important;
        }
    
        .spacer_mega {
            height: 40px;
        }
    }
    
    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
    
        to {
            opacity: 1;
        }
    }
    
    .hero3,
    .hero4,
    .article {
        animation: fadeIn 0.5s ease-in-out;
    }
    
    /* Remove inline styles */
    [style*="font-size: xx-large;color:red;"] {
        font-size: 1.8rem !important;
        color: var(--accent-color) !important;
        font-weight: 700;
        margin-top: 30px;
        margin-bottom: 15px;
    }
    
    /* Additional modern touches */
    .ex_menu a {
        position: relative;
        overflow: hidden;
    }
    
    .ex_menu a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: var(--accent-color);
        transition: width 0.3s ease;
    }
    
    .ex_menu a:hover::after {
        width: 100%;
    }
    
    /* Focus states for accessibility */
    a:focus,
    button:focus {
        outline: 3px solid rgba(52, 152, 219, 0.5);
        outline-offset: 3px;
    }
    
    header span {
        color: rgb(53, 97, 135);
    }
    </style>
    
    <section class="hero3 fulbar article" style="background-color:DarkSeaGreen;">
        <div class="container">
            <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
            <ul class="ex_menu" style="text-align:center;padding-bottom: 20px;">
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
            <div class="colms2">
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
                        <p>
                            <?= empty($architecture[4]) ? $arquitectura[4] : $architecture[4];?>
                        </p>
                        <p>
                            <a href="<?=$links['CUDDGBM'] ?>"
                                title="Concepts of Urban Design By David Gosling, Barry Maitland · 1984">
                                <?= empty($title[6]) ? $titulo[6] : $title[6];?>
                            </a>
                        </p>
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
    <section class="hero4 fulbar article" style="background-color:whitesmoke;">
        <div class="container">
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
            <ul style="font-size: 35px; padding: 25px;" class="ex_menu intel_menu">
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
            <ul class="ex_menu">
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
            <div class="spacer_shape">
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
    
    
    <section class="hero4 fulbar article" style="background-color:wheat;">
        <div class="container">
            <div class="spacer_mega"></div>
            <div class="spacer_shape" id="amd"><a href="<?=$links['AMD'] ?>" title="AMD Processors">
                    <button style="padding:40px;font-size:xx-large">
                        <?= empty($title[2]) ? $titulo[2] : $title[2];?>
                    </button></a><a href="#scroll"><img src="https://latinospc.com/images/computer%20CPU.jpg"
                        alt="CPU Image" class="rtl" height="60" width="60" /></a></div>
            <div class="spacer"></div>
            <div class="colms2">
                <p><a href="<?=$links['AMD_epyc'] ?>" title="Epyc™"><button>
                            <p class="button_red">
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
                            <p class="button_red">
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
                            <p class="button_red">
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
                            <p class="button_red">
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
                        <p class="button_red">
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
                    <h2><?= empty($subTitle[3]) ? $subTitulo[3] : $subTitle[3];?></h2><br /><br /><?= $amd[26]; ?>
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
            <div class="container">
    
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
        <section class="container">
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
    <?php
}

function hw_storage(){
    ?>
        
    <style>
    .ssd {
        font-size: 18px;
        color: rgb(62, 7, 7);
    }
    </style>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <article class="fullbar">
        <a href="./#cpu">
            <h1 id="ssd">Solid State Drives</h1>
        </a><a href="?updates#scroll" title="Latest Update">
            Last Update:</a>7/26/2023<p><a href="http://latinospc.com/images/video/pexels-mario-aranda-7841655(2160p).mp4"
                title="Full Screen Video" class="center"><video width="320" height="240" autoplay loop muted>
                    <source src="http://latinospc.com/images/video/pexels-mario-aranda-7841655-754.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video></a><a href="http://latinospc.com/images/Scripts/SSD_VS_HDD.pptx">
                PowerPoint Presentation
            </a></p>
        <section>
            <p>
                The main difference between an SSD and a Hard Disk Drive (HDD - shown above); is that the SSD doesn't
                have any moving parts and because of it, it makes reading and writing data much faster than a mechanical
                HDD, which has spinning platters. The platters work alongside an actuator arm that has a slider, think
                of it like a record player from back in the day.
            </p>
            <p>
                Data was written and read magnetically, until In early 2007, when Samsung introduced its <a
                    href="https://www.bit-tech.net/reviews/tech/storage/samsung_32gb_solid_state_drive/1/"
                    title="Samsung 32GB Solid State Drive">first generation SSD</a> into the current market it had a
                capacity of 32GB, sequential read/write speeds of 57 MB/s and 32 MB/s respectively and a hefty price tag
                of around $1000.
            </p><a href="https://thefutureofthings.com/3819-2009-ssd-year-of-revolution/" Title="Flash memory">
                <h4>Read All about it here.</h4>
            </a>
            <p>
                The most common HDD has an average speed of 80-160 Megabytes per second, read and write speeds.
                <br /><img src="http://latinospc.com/images/hardware/hw/ssdm2.jpg" width="200px" class="rtl">
                An SSD speed is about 550 megabytes per second read and write speeds. An SSD is 410+ megabytes per
                second faster than a HDD.
            </p>
            <p>
                Lets say your computer took one minute to be usable from when you first pressed the power button, now it
                takes thirty seconds, and when you transfer data on it, like from your phone, or an external hard drive
                is now much faster.
            </p>
            <h4>
                USB 2.0 cables transfer data at about 480-640 megabits per second.
            </h4>
        </section>
        <section>
            <h2>
                (SSDs) use integrated circuits to store [write] and retrieve [read] data.</h2>
            <div class="spacer_shape"><img src="http://latinospc.com/images/hardware/hw/ssdm2install.jpg" width="380px" class="fl">
                <p>
                    Unlike traditional hard disk drives (HDDs), which use spinning magnetic disks and a mechanical write
                    head, SSDs require no moving parts.
                </p>
            </div>
        </section>
        <section>
            <h2>
                An SSD supports more I/O operations, has a lower latency than HDD, and are "faster", smaller, more
                portable, more resistant to damage, and less affected by magnets than HDDs.
            </h2>
            <p>
                The traditional spinning HDD is the basic non-volatile storage on a computer.
                <br /><img src="http://latinospc.com/images/hardware/hw/hdd.jpg" width="380px" class="rtl">
                That is, information on it does not “go away” when you turn off the system, unlike data stored in RAM.
                An HDD is essentially a metal platter with a magnetic coating that stores your data.<div
                    style="text-indent: 25px;">
                    A read/write head on an arm (or a set of them) accesses the data while the platters are spinning.
                </div>
                An SSD performs the same basic function as a HDD, but data is instead stored on interconnected
                flash-memory chips that retain the data even when there is no power flowing through them.
                These flash chips (often dubbed “NAND”) are of a different type than the kind used in USB thumb drives,
                and are typically faster and more reliable.
                <div style="text-indent: 25px;">
                    The key differences between HDDs and SSDs are that SSDs are faster, more reliable, and more
                    expensive than HDDs. HDDs are cheaper and have more storage space than SSDs.
                </div>
            </p>
        </section>
        <section>
            <h2 style="text-indent: 25px;">Solid state drives have revolutionized the way we store data on computers.
                They are faster, more reliable, and more affordable than traditional magnetic storage devices.
            </h2>
            <h4>Due to the physical limitations of HDDs, currently the highest capacity is around 20TB, compared to the
                highest capacity SDD which is arround 100TB.
            </h4><a href="https://www.techradar.com/best/large-hard-drives-and-ssds"
                title="Largest SSDs and biggest hard drives of 2023">
                <h4>link</h4>
            </a>
            <p>
                Once upon a time, magnetic storage was the only way to store data on computers. It was a revolutionary
                technology that allowed people to store large amounts of data in a small space. The first magnetic
                storage device was invented in 1956 by IBM and it was called the
                <a href="https://www.ibm.com/ibm/history/exhibits/storage/storage_PH0305.html" title="IBM">
                    IBM 305 RAMAC1.</a>
                It was the size of
                <a href="https://en.wikipedia.org/wiki/IBM_305_RAMAC" title="IBM 305 RAMAC">
                    two refrigerators</a>
                and could store up to 5 MB of data.
            </p>
        </section>
        <section><a href="https://commons.wikimedia.org/wiki/File:RAMAC_305_disk.JPG" title="IBM 305 RAMAC"><img
                    src="http://latinospc.com/images/hardware/hw/RAMAC_305.jpg" class="fl" title="single disk"></a>
            <h2>
                Magnetic storage devices were used for many years and they continued to improve over time.</h2>
            <p>Computer storage devices became smaller, faster, and more reliable. However, they had their limitations.
                They were prone to failure due to their mechanical nature and they were not very fast compared to other
                types of storage devices.
                Solid state drives (SSDs) were invented over half a century ago and then made widely commercially
                available. <br />They use non-volatile solid state chips that feature flash memory cells to store data
                on a long-term basis. Unlike traditional hard disk drives (HDDs), which use magnetic platters spinning
                at high speeds to using an actuator arm reminiscent of a record player, SSDs require no moving parts.
                <div style="text-indent: 25px;">
                    This makes them much faster at reading and writing data, both ad hoc and in sustained operations.
                    SSDs also have built-in technology that further improves read/write speeds, making them faster than
                    traditional HDDs.</div>
                SSDs are also more reliable than traditional HDDs (from a mechanical and data integrity standpoint).
                They do not require an additional power source that maintains an electrical current into the device at
                all times to preserve the data. This makes them increasingly more reliable than traditional HDDs.
                <a
                    href="https://commons.wikimedia.org/wiki/File:Intel_DC_S3700_SSD_series,_bottom_side_of_a_100_GB_SATA_3.0_model.jpg"><img
                        src="http://latinospc.com/images/hardware/hw/ssdsata.jpg"
                        title="Intel DC S3700 SSD series, bottom side of a 100 GB SATA 3.0 model" class="rtl"></a>
                The cost of SSDs has come down significantly over the years as well. They are now much more affordable
                than they used to be. The storage sizes have also increased significantly over time. Today&apos;s SSDs
                can store up to several terabytes of data.
            </p>
        </section>
    </article>
    <article class="fullbar">
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
        <h2>How to Pick an SSD for your computer</h2>
        <p>Choosing the best SSD for your computer depends on several factors, including your specific requirements,
            budget, and compatibility with your system.</p>
        <p>Keep in mind that the best SSD for your system depends on an specific use case. For general productivity and
            gaming, a mid-range NVMe SSD with ample capacity is often a good choice. When more performance is required
            for intensive tasks like video editing or professional applications, it is worth it to consider a high-end
            NVMe SSDs.</p>
        <h2>Selecting, and, or upgrading to an SSD:</h2>
        <div>
            <strong class="ssd">Form Factor:</strong> SSDs come in various form factors, such as 2.5-inch, M.2, and U.2.
            Ensure that the SSD you choose is compatible with your computer's available slots and connections.
            <br /><br /><strong class="ssd">Interface:</strong> The most common interfaces for consumer SSDs are SATA
            (for 2.5-inch drives) and NVMe (for M.2 and U.2 drives). NVMe offers faster speeds than SATA, so if your
            computer supports NVMe, it's generally a better choice for better performance.
            <br /><br /><strong class="ssd">Capacity:</strong> Determine how much storage you need. SSDs are available
            in different capacities, ranging from 128GB to several terabytes. Consider your current and future storage
            needs before deciding.
            <br /><br /><strong class="ssd">Performance:</strong> Look at the SSD's read and write speeds. NVMe SSDs
            generally have faster speeds than SATA SSDs, resulting in quicker boot times and faster file transfers.
            <br /><br /><strong class="ssd">Endurance:</strong> Check the TBW (Total Bytes Written) or DWPD (Drive
            Writes Per Day) rating to understand the SSD's endurance and expected lifespan, especially if you plan on
            performing a lot of read/write operations.
            <br /><br /><strong class="ssd">Cache:</strong> Some SSDs have cache memory to improve performance. A larger
            cache can positively impact the SSD's speed.
            <br /><br /><strong class="ssd">Brand and Reliability:</strong> Stick to well-known and reputable brands
            that have a history of producing reliable SSDs.
            <br /><br /><strong class="ssd">Price:</strong> Compare prices from different manufacturers and retailers,
            considering your budget and the overall value you get from the SSD.
            <br /><br /><strong class="ssd">Warranty:</strong> Check the warranty period offered by the manufacturer. A
            longer warranty generally indicates the company's confidence in the SSD's reliability.
            <br /><br /><strong class="ssd">Compatibility:</strong> Ensure that the SSD is compatible with your
            computer's operating system and hardware. Check for driver support if required.
            <br /><br /><strong class="ssd">Read Reviews:</strong> Read user and expert reviews to gain insights into
            real-world performance and reliability.
            <br /><br /><strong class="ssd">Data Migration:</strong> If you're replacing your existing hard drive with
            an SSD, check if the manufacturer provides data migration software or consider using third-party tools to
            clone your data to the new SSD.
            <br /><br /><strong class="ssd">TRIM Support:</strong> TRIM is a feature that helps maintain SSD performance
            over time. Ensure that your operating system and SSD support TRIM.
            <br /><br /><strong class="ssd">Overprovisioning:</strong> Some SSDs come with overprovisioning, which
            reserves a portion of the storage for background tasks to enhance performance and longevity.
            <br /><br /><strong class="ssd">Security:</strong> If data security is a concern, look for SSDs that offer
            hardware-based encryption and security features.
            <br /><br /><strong class="ssd">Data Migration:</strong> If you're replacing your existing hard drive with
            an SSD, check if the manufacturer provides data migration software or consider using third-party tools to
            clone your data to the new SSD.
            <br /><br /><strong class="ssd">TRIM Support:</strong> TRIM is a feature that helps maintain SSD performance
            over time. Ensure that your operating system and SSD support TRIM.
            <br /><br /><strong class="ssd">Overprovisioning:</strong> Some SSDs come with overprovisioning, which
            reserves a portion of the storage for background tasks to enhance performance and longevity.
            <br /><br /><strong class="ssd">Security:</strong> If data security is a concern, look for SSDs that offer
            hardware-based encryption and security features.
    </div>
        <div class="spacer"></div>
    </article>
    <?php
}

function hw_psu() {
    echo "<h1 class=\"fullbar\">PSU</h1>";
}

function hw_input_devices() {
    echo "<h1 class=\"fullbar\">Input Devices</h1>";
}

function hw_output_devices() {
    echo "<h1 class=\"fullbar\">Output Devices</h1>";
}

function hw_peripherals_and_gear() {
    echo "<h1 class=\"fullbar\">Peripherals and Gear</h1>";
}



include 'anvil/structure.php';
?>