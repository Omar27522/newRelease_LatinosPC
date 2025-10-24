<?php
function cssStyles()    {

    if(str_contains($_SERVER['REQUEST_URI'], 'hardware')){
    ?>
    <style>
    .article {
        color:rgb(54, 42, 54);
        border-radius: 10px;
    }

    .hardware-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
        padding: 1rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .hardware-card {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        position: relative;
        height: 100%;
    }

    .hardware-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .hardware-card.featured {
        grid-column: span 2;
    }

    .card-link {
        display: block;
        text-decoration: none;
        color: #383a3b;
        height: 100%;
        padding: 1.5rem;
    }

    .hardware-card h2 {
        margin-top: 0;
        font-size: 1.4rem;
        color: #2a2d34;
        margin-bottom: 0.8rem;
        position: relative;
    }

    .hardware-card h2::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(90deg, #4a6fa5, #6b8cbe);
    }

    .hardware-card p {
        color: #555;
        font-size: 0.95rem;
        line-height: 1.5;
        margin-bottom: 1rem;
    }

    .card-image {
        margin-top: auto;
        text-align: center;
    }

    .card-image img {
        max-height: 150px;
        object-fit: contain;
        transition: transform 0.5s ease;
    }

    .hardware-card:hover .card-image img {
        transform: scale(1.05);
    }

    .hardware-logo {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1rem;
    }

    .hardware-logo img {
        max-width: 100%;
        max-height: 120px;
        transition: transform 0.3s ease;
    }

    .hardware-logo img:hover {
        transform: scale(1.1);
    }

    [data-component="cpu"] { border-top: 4px solid #4a6fa5; }
    [data-component="ram"] { border-top: 4px solid #6b8cbe; }
    [data-component="ssd"] { border-top: 4px solid #4a6fa5; }
    [data-component="motherboard"] { border-top: 4px solid #6b8cbe; }
    [data-component="psu"] { border-top: 4px solid #4a6fa5; }
    [data-component="gpu"] { border-top: 4px solid #6b8cbe; }
    [data-component="chassis"] { border-top: 4px solid #4a6fa5; }
    [data-component="cooling"] { border-top: 4px solid #6b8cbe; }
    [data-component="io"] { border-top: 4px solid #4a6fa5; }
    [data-component="peripherals"] { border-top: 4px solid #6b8cbe; }

    @media (max-width: 768px) {
        .hardware-grid {
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        }

        .hardware-card.featured {
            grid-column: auto;
        }
    }
    .newspaper2 li {
        font-size: x-large;
        line-height: 1.5;
        break-inside: avoid;
    }

    .newspaper2 li a {
        width: 100%;
    }

    /* Peripherals Section Styling */
    .peripherals-section {
        padding: 3rem 1rem;
        background-color: #f8f9fa;
        margin-top: 2rem;
    }

    .peripherals-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .peripherals-title-link {
        text-decoration: none;
        color: inherit;
        transition: color 0.3s ease;
    }

    .peripherals-title-link:hover {
        color: #0056b3;
    }

    .peripherals-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        position: relative;
        display: inline-block;
        padding-bottom: 0.5rem;
    }

    .peripherals-title:after {
        content: '';
        position: absolute;
        width: 50%;
        height: 3px;
        background: linear-gradient(90deg, #0056b3, #00c6ff);
        bottom: 0;
        left: 25%;
        border-radius: 2px;
    }

    .peripherals-container {
        max-width: 1400px;
        margin: 0 auto;
    }

    .peripherals-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-top: 1rem;
    }

    .peripheral-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
    }

    .peripheral-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .peripheral-card:focus-within {
        outline: 3px solid #0056b3;
    }

    .peripheral-card[data-type="input"] {
        border-top: 4px solid #2ecc71;
    }

    .peripheral-card[data-type="output"] {
        border-top: 4px solid #e74c3c;
    }

    .peripheral-card[data-type="storage"] {
        border-top: 4px solid #f39c12;
    }

    .peripheral-card[data-type="component"] {
        border-top: 4px solid #9b59b6;
    }

    .peripheral-card[data-type="power"] {
        border-top: 4px solid #e67e22;
    }

    .peripheral-card[data-type="cooling"] {
        border-top: 4px solid #3498db;
    }

    .peripheral-card[data-type="graphics"] {
        border-top: 4px solid #1abc9c;
    }

    .peripheral-card[data-type="audio"] {
        border-top: 4px solid #8e44ad;
    }

    .peripheral-card[data-type="gaming"] {
        border-top: 4px solid #e84393;
    }

    .peripheral-card[data-type="mobile"] {
        border-top: 4px solid #00cec9;
    }

    .peripheral-card.featured {
        grid-column: span 2;
    }

    .peripheral-link {
        text-decoration: none;
        color: inherit;
        display: block;
        height: 100%;
    }

    .peripheral-content {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .peripheral-name {
        font-size: 1.25rem;
        font-weight: 600;
        color: #333;
        margin-top: 0;
        margin-bottom: 1rem;
        text-align: center;
    }

    .peripheral-image {
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-radius: 8px;
    }

    .peripheral-image img {
        width: 100%;
        height: auto;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .peripheral-card:hover .peripheral-image img {
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .peripherals-grid {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        }

        .peripheral-card.featured {
            grid-column: auto;
        }

        .peripherals-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .peripherals-grid {
            grid-template-columns: 1fr;
        }

        .peripheral-content {
            padding: 1rem;
        }

        .peripherals-title {
            font-size: 1.75rem;
        }
    }
    .hero3.article {
        padding: 20px;
        margin: 15px 0;
        border-radius: 5px;
    }
    .hero3.article div {
        padding: 15px;
        border-radius: 3px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    </style>
    
    <?php
    }

    if(str_contains($_SERVER['REQUEST_URI'], 'cpu')){
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
         <?php
         }
     
         else{
         ?>
         <style>
         .peripherals-header {
             text-align: center;
             margin-bottom: 2.5rem;
         }
     
         .peripherals-title-link {
             text-decoration: none;
             color: inherit;
             transition: color 0.3s ease;
         }
     
         .peripherals-title-link:hover {
             color: #0056b3;
         }
     
         .peripherals-title {
             font-size: 2.5rem;
             font-weight: 700;
             color: #333;
             position: relative;
             display: inline-block;
             padding-bottom: 0.5rem;
         }
     
         .peripherals-title:after {
             content: '';
             position: absolute;
             width: 50%;
             height: 3px;
             background: linear-gradient(90deg, #0056b3, #00c6ff);
             bottom: 0;
             left: 25%;
             border-radius: 2px;
         }
     
         .peripherals-container {
             max-width: 1400px;
             margin: 0 auto;
         }
     
         .peripherals-grid {
             display: grid;
             grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
             gap: 1.5rem;
             margin-top: 1rem;
         }
     
         .peripheral-card {
             background-color: #fff;
             border-radius: 12px;
             box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
             overflow: hidden;
             transition: transform 0.3s ease, box-shadow 0.3s ease;
             position: relative;
         }
     
         .peripheral-card:hover {
             transform: translateY(-5px);
             box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
         }
     
         .peripheral-card:focus-within {
             outline: 3px solid #0056b3;
         }
     
         .peripheral-card[data-type="input"] {
             border-top: 4px solid #2ecc71;
         }
     
         .peripheral-card[data-type="output"] {
             border-top: 4px solid #e74c3c;
         }
     
         .peripheral-card[data-type="storage"] {
             border-top: 4px solid #f39c12;
         }
     
         .peripheral-card[data-type="component"] {
             border-top: 4px solid #9b59b6;
         }
     
         .peripheral-card[data-type="power"] {
             border-top: 4px solid #e67e22;
         }
     
         .peripheral-card[data-type="cooling"] {
             border-top: 4px solid #3498db;
         }
     
         .peripheral-card[data-type="graphics"] {
             border-top: 4px solid #1abc9c;
         }
     
         .peripheral-card[data-type="audio"] {
             border-top: 4px solid #8e44ad;
         }
     
         .peripheral-card[data-type="gaming"] {
             border-top: 4px solid #e84393;
         }
     
         .peripheral-card[data-type="mobile"] {
             border-top: 4px solid #00cec9;
         }
     
         .peripheral-card.featured {
             grid-column: span 2;
         }
     
         .peripheral-link {
             text-decoration: none;
             color: inherit;
             display: block;
             height: 100%;
         }
     
         .peripheral-content {
             padding: 1.5rem;
             display: flex;
             flex-direction: column;
             height: 100%;
         }
     
         .peripheral-name {
             font-size: 1.25rem;
             font-weight: 600;
             color: #333;
             margin-top: 0;
             margin-bottom: 1rem;
             text-align: center;
         }
     
         .peripheral-image {
             flex-grow: 1;
             display: flex;
             align-items: center;
             justify-content: center;
             overflow: hidden;
             border-radius: 8px;
         }
     
         .peripheral-image img {
             width: 100%;
             height: auto;
             object-fit: cover;
             transition: transform 0.5s ease;
         }
     
         .peripheral-card:hover .peripheral-image img {
             transform: scale(1.05);
         }
                    </style>

        <?php
    }

    //if(str_contains($_SERVER['REQUEST_URI'], 'ram')){

    
}

function hw_hardware() {
    echo "<h1 class=\"fullbar\">Hardware Main Page</h1>";
    $title="<h2>The Hardware is the computer — it&#39;s physical components.</h2>";

    $description ="<p>These components may include the computer&#39;s
        functionality, design, materials, innovations, thermals, etc.<br />A computer is an electronic device that
        manipulates data or information. It has the ability to store,retrieve, and process data.<p>     <!--https://unsplash.com/photos/2sILr4DwabQ-->
        <h3><a href=\"https://latinospc.com/hardware/?anatomy_of_a_computer#navi\">The anatomy of a computer</a> typically includes,
    <a href=\"https://latinospc.com//hardware/?notebooks#navi\">Laptops</a>, Portable, Smart Devices, Modular PC's, ETC.</h3>";

    $contentSubTitles= ["Computer Parts",       "Central Processing Unit (CPU):",       "Memory (RAM):",        "Memory Storage Drive (hard drive, SSD):",
                            "Motherboard:",        "Power Supply Unit (PSU):",      "GPU:",       "Chassis:",       "Coolers",      "Input/Output devices:", "Peripheral devices:"  ];

    $content=['CPU' =>  "The \"brain\" of the computer, responsible for carrying out instructions of computer programs.",
                'RAM' =>  "Stores data that the CPU uses in the short-term.",
                    'HDD' =>  "Persistently stores data, even when the computer is powered off.",
                        'Motherboard' =>  "The main circuit board in a computer, which houses the CPU, memory, and other components.&nbsp;",
                            'PSU' =>  "Converts AC power from a wall outlet into DC power used by the computer.",
                                'GPU' =>  "specialized Graphic Processing Unit (GPU) that handles the computational heavy lifting needed for tasks.&nbsp ",
                                    'Chassis' =>  "Houses all the internal components a computer needs.",
                                        'Coolers' =>  "Help to regulate the temperature of the central processing unit (CPU) and other critical components of the computer.",
                'I/O' =>  "Allow data to be input into the computer (such as a keyboard and mouse) and output from the computer (such as a display and speakers).&nbsp",
                'Peripherals' =>  "Additional hardware connected to a computer, such as printers, scanners, and external hard drives.&nbsp"
             ];
    $peripherals = [
    "Mouse",
    "Keyboard",
    "Display",
    "External Memory Drives",
    "PCI Cards",
    "Power Supply",
    "Cooling",
    "GPU",
    "Scanners",
    "Printers",
    "Console Controllers",
    "Joystick",
    "Tablets",
    "Microphones",
    "Headsets",
    "Headphones",
    "Audio Mixers",
    "Controllers",
    "Gaming Uniforms",
    "Pens, Pencils & Tablets",
    "Chairs",
    "Desks",
    "Anti-Slip Mats",
    "Speakers and Subwoofers",
    "Peripherals",
    ];
    $peripherals = [
    "Mouse",
    "Keyboard",
    "Display",
    "External Memory Drives",
    "PCI Cards",
    "Power Supply",
    "Cooling",
    "GPU",
    "Scanners",
    "Printers",
    "Console Controllers",
    "Joystick",
    "Tablets",
    "Microphones",
    "Headsets",
    "Headphones",
    "Audio Mixers",
    "Controllers",
    "Gaming Uniforms",
    "Pens, Pencils & Tablets",
    "Chairs",
    "Desks",
    "Anti-Slip Mats",
    "Speakers and Subwoofers",
    "Peripherals",
    ];

    $hardwareTitles = [
        'cc'   => 'Console Controllers',
        'cpu'  => 'CPU',
        'ram'  => 'RAM',
        'ssd'  => 'SSD',
        'psu'  => 'PSU',
        'gpu'  => 'Graphics Cards',
        'pci'  => 'PCI Cards',
        'mouse' => 'Mouse',
        'desk'  => 'Desks',
        'chair'  => 'Chairs',
        'cooling'=> 'Cooling',
        'tablet' => 'Tablets',
        'micro'  => 'Microphones',
        'monitor' => 'Display',
        'headset' => 'Headsets',
        'printer' => 'Printers',
        'scanner' => 'Scanners',
        'chassis'  => 'Computer Case',
        'keyboard'  => 'Keyboard',
        'joystick'  => 'Joysticks',
        'headphone' => 'Headphones',
        'p_memory'  => 'Portable Memory',
        'controller' => 'Controllers',
        'audiomixer' => 'Audio Mixers',
        'motherboard' => 'Motherboard',
        'pencil' => 'Pens, Pencils and Tablets',
        'antislipmats' => 'Anti-Slip Mats',
        'speakers_and_subwoofers' => 'Speakers and Subwoofers',
        'team_uniformity_authority' => 'Uniforms'
    ];


    $descriptions ="<p>These components may include the computer&#39;s
        functionality, design, materials, innovations, thermals, etc.<br />A computer is an electronic device that
        manipulates data or information. It has the ability to store,retrieve, and process data.<p>     <!--https://unsplash.com/photos/2sILr4DwabQ-->
        <h3><a href=\"https://latinospc.com/hardware/?anatomy_of_a_computer#navi\">The anatomy of a computer</a> typically includes,
    <a href=\"https://latinospc.com//hardware/?notebooks#navi\">Laptops</a>, Portable, Smart Devices, Modular PC's, ETC.</h3>";

    $contentSubTitles= ["Computer Parts",       "Central Processing Unit (CPU):",       "Memory (RAM):",        "Memory Storage Drive (hard drive, SSD):",
                            "<small>Motherboard</small>:",        "Power Supply Unit (PSU):",      "GPU:",       "Chassis:",       "Coolers",      "<small>Input/Output</small> devices:", "Peripheral devices:"  ];

    $content=['CPU' =>  "The \"brain\" of the computer, responsible for carrying out instructions of computer programs.",
                'RAM' =>  "Stores data that the CPU uses in the short-term.",
                    'HDD' =>  "Persistently stores data, even when the computer is powered off.",
                        'Motherboard' =>  "The main circuit board in a computer, which houses the CPU, memory, and other components.&nbsp;",
                            'PSU' =>  "Converts AC power from a wall outlet into DC power used by the computer.",
                                'GPU' =>  "specialized Graphic Processing Unit (GPU) that handles the computational heavy lifting needed for tasks.&nbsp ",
                                    'Chassis' =>  "Houses all the internal components a computer needs.",
                                        'Coolers' =>  "Help to regulate the temperature of the central processing unit (CPU) and other critical components of the computer.",
                'I/O' =>  "Allow data to be input into the computer (such as a keyboard and mouse) and output from the computer (such as a display and speakers).&nbsp",
                'Peripherals' =>  "Additional hardware connected to a computer, such as printers, scanners, and external hard drives.&nbsp"
             ];

             $hw = 'else';


    ?>
    <article class="fullbar">
     <section class="hero3 article" id="article">
        <div style=background-color:whitesmoke;>
            <?= empty($title) ? $titulo : $title;?>
            <?= empty($descriptions) ? $descripcion : $descriptions;?>
        </div>
    </section>
    <section class="hero article" style="background-color: whitesmoke;">
        <div>
            <h2 style="text-align: center;" id="cpu">
                <?= empty($contentSubTitles[0]) ? $subTitulosContenido[0] : $contentSubTitles[0];?>
            </h2>
            <!-- <a href="https://latinospc.com/images/hardware/hw/mobo.jpg" title="Motherboard">
                <img src="https://latinospc.com/images/hardware/hw/mobo.webp" alt="Motherboard" style="transform: translateX(20%)"/></a>
    Make this image randomize with all the images from here, I really would like to build a fulls creen gallery page maybe, where the image has a right and a left button.
	under the main image there is a carrousel of more images. Then the Gallery section will be right under This gallery section.
    -->
            <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** Computer Parts-->
    </div>

    <ul>
        <div class="hardware-grid">
    <div tabindex="0" class="hardware-card" data-component="cpu">
        <a href="./cpu" class="card-link">
            <h2><?= empty($contentSubTitles[1]) ? $subTitulosContenido[0] : $contentSubTitles[1]; ?></h2>
            <p><?= empty($content['CPU']) ? $contenido['CPU'] : $content['CPU']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/cpu.jpg" alt="CPU component" title="CPU">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="ram">
        <a href="./ram" class="card-link">
            <h2><?= empty($contentSubTitles[2]) ? $subTitulosContenido[0] : $contentSubTitles[2]; ?></h2>
            <p><?= empty($content['RAM']) ? $contenido['RAM'] : $content['RAM']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/ram.jpg" alt="RAM module" title="RAM">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="ssd">
        <a href="./storage" class="card-link">
            <h2><?= empty($contentSubTitles[3]) ? $subTitulosContenido[0] : $contentSubTitles[3]; ?></h2>
            <p><?= empty($content['HDD']) ? $contenido['HDD'] : $content['HDD']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/memdrive.png" alt="Storage drive" title="Memory Drive">
            </div>
        </a>
    </div>

    <div class="hardware-logo">
        <a rel="example_group" href="https://latinospc.com/images/websites/webcontent/2.jpg" title="LatinosPC Logo">
            <img src="https://latinospc.com/images/hardware/hw/lapc.webp" alt="LatinosPC Logo" title="LatinosPC">
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="motherboard">
        <a href="./motherboard" class="card-link">
            <h2><?= empty($contentSubTitles[4]) ? $subTitulosContenido[4] : $contentSubTitles[4]; ?></h2>
            <p><?= empty($content['Motherboard']) ? $contenido['Motherboard'] : $content['Motherboard']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/mobo.jpg" alt="Motherboard" title="Motherboard">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="psu">
        <a href="./powersupply" class="card-link">
            <h2><?= empty($contentSubTitles[5]) ? $subTitulosContenido[5] : $contentSubTitles[5]; ?></h2>
            <p><?= empty($content['PSU']) ? $contenido['PSU'] : $content['PSU']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/psu.jpg" alt="Power Supply Unit" title="Power Supply Unit">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card featured" data-component="gpu">
        <a href="./graphicscard" class="card-link">
            <h2><?= empty($contentSubTitles[6]) ? $subTitulosContenido[6] : $contentSubTitles[6]; ?></h2>
            <p><?= empty($content['GPU']) ? $contenido['GPU'] : $content['GPU']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/gpu.png" alt="Graphics Card" title="Graphic Processing Unit">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="chassis">
        <a href="./chassis" class="card-link">
            <h2><?= empty($contentSubTitles[7]) ? $subTitulosContenido[7] : $contentSubTitles[7]; ?></h2>
            <p><?= empty($content['Chassis']) ? $contenido['Chassis'] : $content['Chassis']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/case/case.webp" alt="Computer Case" title="Computer Case">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="cooling">
        <a href="./coolers" class="card-link">
            <h2><?= empty($contentSubTitles[8]) ? $subTitulosContenido[8] : $contentSubTitles[8]; ?></h2>
            <p><?= empty($content['Coolers']) ? $contenido['Coolers'] : $content['Coolers']; ?></p>
            <div class="card-image">
                <img src="https://latinospc.com/images/hardware/hw/cooler.jpg" alt="CPU Cooler" title="Coolers">
            </div>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="io">
        <a href="https://www.tutorialspoint.com/operating_system/os_io_hardware.htm" class="card-link">
            <h2><?= empty($contentSubTitles[9]) ? $subTitulosContenido[9] : $contentSubTitles[9]; ?></h2>
            <p><?= empty($content['I/O']) ? $contenido['I/O'] : $content['I/O']; ?></p>
        </a>
    </div>

    <div tabindex="0" class="hardware-card" data-component="peripherals">
        <a href="#peripherals" class="card-link">
            <h2><?= empty($contentSubTitles[10]) ? $subTitulosContenido[10] : $contentSubTitles[10]; ?></h2>
            <p><?= empty($content['Peripherals']) ? $contenido['Peripherals'] : $content['Peripherals']; ?></p>
        </a>
    </div>
    </div>


        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/mouse.jpg" title="Mouse"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/keys.jpg" title="Keyboard"></a>
        <!--https://unsplash.com/photos/mFtcZzLruCQ-->
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/display.jpg" title="Display"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/memory.jpg"
            title="External Memory Drives"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/pci.jpg" title="PCI Cards"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/psu.jpg"
            title="Power Supply"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/cooler.jpg" title="Cooling"></a>
        <!--https://unsplash.com/photos/5fZqHF21CIw-->
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/gpu.jpg" title="GPU"></a>
        <!--https://unsplash.com/photos/d6gyCYQU1vc-->
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/scanners.jpg"
            title="Scanners"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer.jpg"
            title="Printers"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/c_controllers.jpg"
            title="Console Controllers"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/joystick.jpg"
            title="Joysticks"></a>
        <!--https://unsplash.com/photos/V5hAryReZzo-->
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/tablet.jpg" title="Tablets"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/microphone.jpg"
            title="Microphones"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/headset.jpg"
            title="Headsets"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/headphones.jpg"
            title="Headphones"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/audio_mixer.jpg"
            title="Audio Mixers"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/controller.jpg"
            title="Controllers"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/uniform.jpg"
            title="Gaming Uniforms"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/pen.jpg"
            title="Pens, Pencils and Tablets"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/chairs.jpg" title="Chairs"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/desk.jpg" title="Desks"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/anti-slip-mat.jpg"
            title="Anti-Slip Mats"></a>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/speakers.jpg"
            title="Speakers and Subwoofers"></a>
        <div class="clr"></div>
    </section>

    <section class="peripherals-section">
    <div class="peripherals-header">
        <a href="#scroll" class="peripherals-title-link">
            <h2 id="peripherals" class="peripherals-title">
                <?= empty($peripherals[24]) ? $perifericos[24] : $peripherals[24];?>
            </h2>
        </a>
    </div>

    <div class="peripherals-container">
        <div class="peripherals-grid">
            <?php
            function hw_Link($hw, $en, $es) {
                echo $hw === 'en' ? $en : ($hw === 'es' ? $es : 'ERROR');
            }
            function hw_alt($hw, $en, $es) {
                echo $hw === 'en' ? $en : ($hw === 'es' ? $es : 'ERROR');
            }
            function hw_title($hw, $en, $es) {
                echo $hw === 'en' ? $en : ($hw === 'es' ? $es : 'ERROR');
            }
            ?>

            <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="./mouse">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $mouse = empty($peripherals[0]) ? $perifericos[0] : $peripherals[0]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/mouse.jpg" alt="<?= $mouse; ?>" title="<?= $mouse; ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="./keyboard">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $keyboard = empty($peripherals[1]) ? $perifericos[1] : $peripherals[1]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/keyboard.jpg" alt="<?= $keyboard; ?>" title="<?= $keyboard; ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="output" tabindex="0">
                <a class="peripheral-link" href="./monitor">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[2]) ? $perifericos[2] : $peripherals[2]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/monitor.jpg"
                                alt="<?= hw_alt($hw, $en='Display', $es='Pantalla'); ?>"
                                title="<?= hw_title($hw, $en='Computer Monitor', $es='Pantalla de la computadora'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="storage" tabindex="0">
                <a class="peripheral-link" href="./p_memory">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[3]) ? $perifericos[3] : $peripherals[3]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/portable.jpg"
                                alt="<?= hw_alt($hw, $en='External Drives', $es='Memoria Externa'); ?>"
                                title="<?= hw_title($hw, $en='External Drives', $es='Memoria Externas'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="component" tabindex="0">
                <a class="peripheral-link" href="./pci">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[4]) ? $perifericos[4] : $peripherals[4]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/soundcard.jpg"
                                alt="<?= hw_alt($hw, $en='PCI Cards', $es='Tarjetas PCI'); ?>"
                                title="<?= hw_title($hw, $en='Peripheral Component Interconnect Cards', $es='Componente Periférico Interconexión'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="power" tabindex="0">
                <a class="peripheral-link" href="./psu">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[5]) ? $perifericos[5] : $peripherals[5]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/psu2.png"
                                alt="<?= hw_alt($hw, $en='Power Supply', $es='Fuente de Poder'); ?>"
                                title="<?= hw_title($hw, $en='PSU', $es='Fuente de Poder'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="cooling" tabindex="0">
                <a class="peripheral-link" href="./cooling">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[6]) ? $perifericos[6] : $peripherals[6]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/cooler.jpg"
                                alt="<?= hw_alt($hw, $en='Cooling', $es='Enfriamiento'); ?>"
                                title="<?= hw_title($hw, $en='Cooling', $es='Enfriamiento'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="graphics" featured tabindex="0">
                <a class="peripheral-link" href="./gpu">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[7]) ? $perifericos[7] : $peripherals[7]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/gpu.png"
                                alt="<?= hw_alt($hw, $en='GPU', $es='Tarjeta Gráfica'); ?>"
                                title="<?= hw_title($hw, $en='GPU', $es='Tarjeta Gráfica'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="./scanner">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[8]) ? $perifericos[8] : $peripherals[8]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/scanner.png"
                                alt="<?= hw_alt($hw, $en='Scanners', $es='Escáneres'); ?>"
                                title="<?= hw_title($hw, $en='Scanners', $es='Escáneres'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="output" tabindex="0">
                <a class="peripheral-link" href="./printer">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[9]) ? $perifericos[9] : $peripherals[9]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/printer.png"
                                alt="<?= hw_alt($hw, $en='Printers', $es='Impresoras'); ?>"
                                title="<?= hw_title($hw, $en='Printers', $es='Impresoras'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="gaming" tabindex="0">
                <a class="peripheral-link" href="./console_controllers">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[10]) ? $perifericos[10] : $peripherals[10]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/controllers.png"
                                alt="<?= hw_alt($hw, $en='Controllers', $es='Mandos de Consola'); ?>"
                                title="<?= hw_title($hw, $en='Video Game Controllers', $es='Mandos de Videojuego'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="gaming" tabindex="0">
                <a class="peripheral-link" href="./joystick">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[11]) ? $perifericos[11] : $peripherals[11]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/joystick.png"
                                alt="<?= hw_alt($hw, $en='Joysticks', $es='Joysticks'); ?>"
                                title="<?= hw_title($hw, $en='Joysticks', $es='Joysticks'); ?>">
                        </div>
                    </div>
                </a>
            </div>

                              <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="./tablet">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[12]) ? $perifericos[12] : $peripherals[12]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/tablets.png"
                                alt="<?= hw_alt($hw, $en='Tablets', $es='Tabletas'); ?>"
                                title="<?= hw_title($hw, $en='Tablets', $es='Tabletas'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="./micro">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[13]) ? $perifericos[13] : $peripherals[13]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/mic.jpg"
                                alt="<?= hw_alt($hw, $en='Microphone', $es='Micrófono'); ?>"
                                title="<?= hw_title($hw, $en='Microphone', $es='Micrófono'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="./headset">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[14]) ? $perifericos[14] : $peripherals[14]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/headset.png"
                                alt="<?= hw_alt($hw, $en='Headsets', $es='Headsets'); ?>"
                                title="<?= hw_title($hw, $en='Headsets', $es='Headsets'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="./headphone">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[15]) ? $perifericos[15] : $peripherals[15]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/headphones.png"
                                alt="<?= hw_alt($hw, $en='Headphones', $es='Audífonos'); ?>"
                                title="<?= hw_title($hw, $en='Headphones', $es='Audífonos'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="./audiomixer">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[16]) ? $perifericos[16] : $peripherals[16]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/mixer.jpg"
                                alt="<?= hw_alt($hw, $en='Audio Mixer', $es='Mezcladora de Audio'); ?>"
                                title="<?= hw_title($hw, $en='Audio Mixer', $es='Mezcladora de Audio'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="gaming" tabindex="0">
                <a class="peripheral-link" href="./controller">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[17]) ? $perifericos[17] : $peripherals[17]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/controller.jpg"
                                alt="<?= hw_alt($hw, $en='Controllers', $es='Controladores'); ?>"
                                title="<?= hw_title($hw, $en='Controllers', $es='Controladores'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="gaming" tabindex="0">
                <a class="peripheral-link" href="./uniforms">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[18]) ? $perifericos[18] : $peripherals[18]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/uniforms.jpg"
                                alt="<?= hw_alt($hw, $en='Uniforms', $es='Uniformes'); ?>"
                                title="<?= hw_title($hw, $en='Gaming Uniforms', $es='Uniformes Gaming'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="./pencil">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[19]) ? $perifericos[19] : $peripherals[19]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/pensandpencils.jpg"
                                alt="<?= hw_alt($hw, $en='Pens and Pencils and Stylus', $es='Lápices, Plumas y Tabletas'); ?>"
                                title="<?= hw_title($hw, $en='Pens and Pencils and Stylus', $es='Lápices, Plumas y Tabletas'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="furniture" tabindex="0">
                <a class="peripheral-link" href="./chair">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[20]) ? $perifericos[20] : $peripherals[20]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/chairs.jpg"
                                alt="<?= hw_alt($hw, $en='Chairs', $es='Sillas'); ?>"
                                title="<?= hw_title($hw, $en='Chairs', $es='Sillas'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="furniture" tabindex="0">
                <a class="peripheral-link" href="./desk">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[21]) ? $perifericos[21] : $peripherals[21]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/desk.jpg"
                                alt="<?= hw_alt($hw, $en='Desks', $es='Escritorios'); ?>"
                                title="<?= hw_title($hw, $en='Desks', $es='Escritorios'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="accessories" tabindex="0">
                <a class="peripheral-link" href="./antislipmats">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[22]) ? $perifericos[22] : $peripherals[22]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/anti-slip-mat.jpg"
                                alt="<?= hw_alt($hw, $en='Anti Slip Mats', $es='Alfombrillas Antideslizantes'); ?>"
                                title="<?= hw_title($hw, $en='Anti Slip Mats', $es='Alfombrillas Antideslizantes'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="./speakers_and_subwoofers">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[23]) ? $perifericos[23] : $peripherals[23]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/speakers.jpg"
                                alt="<?= hw_alt($hw, $en='Speakers and Subwoofers', $es='Bocinas y Subwoofers'); ?>"
                                title="<?= hw_title($hw, $en='Speakers and Subwoofers', $es='Bocinas y Subwoofers'); ?>">
                        </div>
                    </div>
                </a>
            </div>
                <!-- Photo by Rosen Genov from Pexels: https://www.pexels.com/photo/a-presonus-speaker-system-4295360/ --></a>



        </div>
        </div>

    </section>
    </article>
    <?php
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

function hw_ram() {
    ?>
        <style>
    .ram {
        font-size: 18px;
        display: inline-block;
        padding: 5px 0;
        position: relative;
    }

    .ram:before {
        content: '';
        background-color: rgb(106, 207, 101);
        display: block;
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 0;
        height: 3px;
        transition: all 0.3s ease-in-out;
    }

    .ram:hover {
        background-position: 0;
    }

    .ram:hover::before {
        width: 100%;
        margin-block: auto;
        border: 2px solid #000000;
    }
    </style>

    <section class="container fullbar">
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
        <h2 id="ram"><a href="?hw/sw#cpu" title="Random Access Memory ">
            RAM
        <img src="https://latinospc.com/images/fz/hw-ram.jpg" alt="" class="fl" height="60" width="60" /></a></h2>
        <h3>The most common RAM sizes for consumer PCs are <b>8GB</b> and <b>16GB</b>. These are sizes that typically
            are found in new
            computers, also 8 or 16 is
            sufficient for most tasks, such as web browsing, office work, media playback. And impressively the work gets
            done because of
            <a href="https://learn.microsoft.com/en-us/troubleshoot/windows-server/performance/ram-virtual-memory-pagefile-management"
                title="Virtual Ram">
                vr</a>, the only downside is the slower overall computer speed with memory intensive applications that
            require more memory.
        </h3>
        <h2>Some higher-end consumer PCs may come with 32GB, 64GB of RAM or more.</h2>
        <h3>In terms of configurations, consumer PCs typically use DDR4/5 memory, which is the most widely used type of
            RAM.
            Some older PCs may still use DDR3/2 memory, but this is becoming less common. Additionally, most consumer
            PCs use non-ECC
            <a href="https://www.tomshardware.com/reviews/ecc-memory-ram-glossary-definition,6013.html">(Error-Correction
                Code)</a>
            memory, which is less expensive and doesn't provide the same level of data protection as ECC memory.
            The actual speed of the RAM can vary depending on the specific
            <a href="https://en.wikipedia.org/wiki/Integrated_circuit" title="Integrated circuit">ICs</a> and the
            motherboard's memory controllers.
            Say a baseboard only supports upto a certain speed of memory.(eg. 4GB) even after adding more (+2GB) the
            computer
            might not recognize the extra ram.<br />[4+2=6, but the maximum allowed is 4, so even with 6gb of memory,
            the computer will only have a total of 4gb.]Also, the benefit of faster RAM speed depends on the usage,
            scenario,
            and the specific application; in most cases, applications and games may not be able to take full advantage
            of the faster memory,
            but if you are doing memory-intensive tasks such as video editing, 3D rendering, or running a lot of virtual
            machines, faster RAM can provide a
            significant performance boost. <b>Note that capacity is not the same as speed</b>
        </h3>
    </section>
    <article class="fullbar">
        <h2>Some of the largest and most well-known manufacturers of computer RAM include:</h2>
        <ul class="ex_menu">
            <h3 class="colms">
                <li class="ram"><a href="https://www.crucial.com/products/memory" title="Crucial">Micron Technology
                        (Crucial)</a></li><br />
                <li class="ram"><a href="https://www.kingston.com/en/memory" title="Kingston">Kingston Technology</a>
                </li><br />
                <li class="ram"><a
                        href="https://www.corsair.com/us/en/Categories/Products/Memory/c/Cor_Products_Memory">Corsair</a>
                </li><br />
                <li class="ram"><a href="https://www.micron.com/products/dram" title="Micron">Ballistix (Micron)</a>
                </li><br />
                <li class="ram"><a href="https://www.pny.com/consumer/view-all-products/memory" title="PNY">PNY</a></li>
                <br />
                <li class="ram"><a href="https://www.adata.com/us/consumer/category/computer-memory"
                        title="ADATA">ADATA</a></li><br />
                <li class="ram"><a href="https://www.kingston.com/en/memory/gaming" title="HyperX Fury">HyperX
                        (Kingston) Fury</li><br />
                <li class="ram"><a href="https://www.gskill.com/products/1/165/Desktop-Memory"
                        title="G.Skill">G.Skill</a></li><br />
                <li class="ram"><a href="https://www.teamgroupinc.com/en/products/t-force/gaming-memory/"
                        title="T-Force Gaming Memory">TeamGroup</a></li>
            </h3>
        </ul>
        <h3>DDR4 RAM is available in a wide range of speeds, but its most popular
            <a href="https://www.quora.com/How-important-is-RAM-speed" title="How important is RAM speed?">speeds</a>
            are:
        </h3>
        <h3>
            <ul class="colms">
                <li>2400 MHz</li>
                <li>2666 MHz</li>
                <li>3200 MHz</li>
                <li>3600 MHz</li>
                <li>3800 MHz</li>
                <li>4000 MHz</li>
                <li>4266 MHz</li>
                <li>4600 MHz</li>
                <li>4800 MHz</li>
            </ul>
        </h3><br />
        <h3>As for DDR5 the most common speeds seen in the market are:</h3>
        <img src="https://latinospc.com/images/artificialintelligence/Introduction.jpg" alt="Image" width="270px" title="image"
            class="rtl">
        <h3>
            <ul class="col c1">
                <li>5500 MHz</li>
                <li>5600 MHz</li>
                <li>6400 MHz</li>
                <li>7200 MHz</li>
                <li>8400 MHz</li>
            </ul>
        </h3>
    </article>
    <article class="fullbar">
        <h2>RAM attachments:</h2>
        <h3>These are additional components that can be added to a computer's RAM to enhance its performance or
            appearance.
            Some popular examples include RAM coolers, which are designed to dissipate heat and keep the memory modules
            cool, and RAM fans,
            which actively cool the memory modules using airflow. RAM lighting, such as RGB lighting, adds a visual
            element to the memory
            modules by illuminating them with different colors. (<a
                href="https://www.techrepublic.com/article/the-geekiest-tech-jokes-on-the-internet/"
                title="The geekiest tech jokes on the internet">Joke:</a> RGB lights on ram sticks makes the computer go
            fast)
            RAM <b>coolers</b> are typically made of aluminum or other heat-dissipating materials and are designed to be
            attached directly to the
            memory modules, often with thermal pads or thermal tape. They can help to reduce the temperature of the
            memory modules, which
            can improve their performance and stability.RAM <b>fans</b> are similar to CPU fans, they are small and can
            be placed on top of the memory
            modules to improve the airflow and dissipate heat.RAM <b>lighting</b>, such as RGB lighting, is becoming
            more popular
            and can be found in many modern motherboards. It adds a visual element to the memory modules and can be
            controlled
            through software to match the color scheme of the build.</h3>
        <h2>It is important to note that while these attachments
            can enhance the performance or appearance of the memory,they are not necessary for most users, and are
            mostly used for enthusiasts or gamers.</h2><br />
    </article>
    <?php
}

function hw_motherboard(){
    ?>
    <style>
    .as{display: inline-block;padding: 5px 0;position: relative;}
      .as:before{content: '';background: #54b3d6;display: block;position: absolute;bottom: -3px;left: 0;width: 0;height: 3px;transition: all 0.3s ease-in-out;}
        .as:hover{background-position: 0;}
          .as:hover::before{width: 100%;}
    .i_t{text-indent: 25px;}._purple{ font-size: 18px;color:rgb(78, 10, 181);}._red{ font-size: 18px;color:rgb(192, 28, 28);}._green{ font-size: 18px;color:rgb(79,193, 38);}._yell{ font-size: 18px;color:rgb(131, 137, 42);}._tiel{ font-size: 18px;color:rgb(43, 125, 116);}._orange{ font-size: 18px;color:rgb(187, 98, 35);}._pink{ font-size: 18px;color:rgb(194, 19, 186);}
    </style>

    <article class="container fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <a href="?hw/sw#cpu"><h1 id="board">Motherboard</h1></a><!-- <a href="?updates"title="Latest Update">
            Last Update:</a>7/26/2023 /*UPDATES GO HERE WHEN AVAILABLE*/--><h2>
    There are many manufacturers of computer motherboards, but some of the most popular and well-known manufacturers include:
    </h2><h3><div class="spacer_shape"><img src="http://latinospc.com/images/hardware/hw/mobo.webp"class="fl"><ul class="colms">
    <ol><a href="https://www.hp.com/us-en/shop/tech-takes/how-to-choose-a-motherboard"title="Tech-Takes">HP</a></ol>
    <ol><a href="https://www.dell.com/en-us/shop/motherboard-processor-bundles/ar/7960"title="Motherboard/Processor Bundles">Dell</a></ol>
    <ol><a href="https://electronics.sony.com/FAQ"title="Sony Store FAQs">Sony</a></ol>
    <ol><a href="https://www.ibm.com/products/z16"title="IBM Z16 Mainframe">IBM</a></ol>
    <ol><a href="https://www.acer.com/us-en/support"title="Support">Acer</a></ol>
    <ol><a href="https://www.lenovo.com/us/en/glossary/what-is-a-motherboard/"title="Motherbaord">Lenovo</a></ol>
    <ol><a href="https://support.apple.com/?cid=gn-ols-home-hp-tab"title="Support">Apple</a></ol>
    <li><a href="https://www.asus.com/us/motherboards-components/motherboards/all-series/"title="Products"class="as">ASUS</a></li>
    <li><a href="https://www.gigabyte.com/Motherboard"title="Motherbaords"class="as">Gigabyte</a></li>
    <li><a href="https://www.msi.com/Motherboards/Products"title="Motherbaords"class="as">MSI</a></li>
    <li><a href="https://www.asrock.com/mb/"title="Motherboards"class="as">ASRock</a></li>
    <li><a href="https://www.evga.com/products/productlist.aspx?type=1"title="Motherboards"class="as">EVGA</a></li>
    <li><a href="https://www.biostar.com.tw/app/en/mb/index.php"title="Motherboard for Gaming"class="as">Biostar</a></li>
    <li><a href="https://www.supermicro.com/en/products/motherboards"title="High-End Motherboards"class="as">Supermicro</a></li>
    <li><a href="https://www.tyan.com/MB@en-US@0@1~SC"title="Products"class="as">Tyan</a></li>
    <li><a href="https://www.ecs.com.tw/en/about/product-category"title="Product Category"class="as">ECS</a></li>
    </ul></div></h3><h3>
      These manufacturers produce motherboards for various platforms, including desktop PCs, workstations, and servers. They also offer motherboards different form factors, such as <a href="https://en.wikipedia.org/wiki/ATX"title="ATX">ATX</a>, <a href="https://en.wikipedia.org/wikiMicroATX"title="Micro-ATX">Micro-ATX</a>, and <a href="https://en.wikipedia.org/wiki/Mini_ATX"title="Mini-ITX">Mini-ITX</a>. They also have models different chipsets and sockets. Some of these manufacturers also produce motherboards for specific use cases, such as gaming, overclocking, workstations.
    </h3><div class="spacer_shape"><h3>
      It's worth noting that this is not an exhaustive list, and there are many other manufacturers of motherboards available, the popularity of manufacturer or brand may vary depending on the specific region or market. The manufacturers mentioned above have a long-standing reputation producing high-quality and reliable motherboards.</h3></div>
    </article><article class="article fullbar">
    <h2>A simple motherboard typically has the basic features required to build a functional computer system.
      <br /><div class="i_t">However, there are many additional features that are available on more advanced motherboards that can provide a wider range of capabilities and improved performance
    Some of the most notable features that can be found on advanced motherboards include:</div></h2>
    <h3 class="colms2"><div class="card2"><strong class="_purple">
      Overclocking support:</strong> Allows users to increase the clock speed of their beyond its standard clock speed, allowing for improved performance certain applications.
    </div><br /><div class="card2"><strong class="_pink">
      Multiple GPU support:</strong> Allows users to install multiple graphics cards the system, allowing for improved graphics performance and support for demanding applications such as gaming or 3D rendering. This is no longer the case for systems today.
    </div><br /><div class="card2"><strong class="_green">
    High-speed data interfaces:</strong> Some motherboards support faster data such as USB 3.1 Gen 2 and Thunderbolt 3, which allow for faster transfer speeds and support for high-speed storage devices and peripherals.
    </div><br /><div class="card2"><strong class="_yell">
    Network interfaces:</strong> Advanced motherboards often have additional interfaces such as Gigabit Ethernet or Wi-Fi, which can provide connectivity and faster internet speeds.
    </div><br /><div class="card2"><strong class="_orange">
    Audio features:</strong> Some high-end motherboards include advanced audio such as high-definition audio codecs and audio software that improved audio quality and support for virtual 7.1 surround sound.
    </div><br /><div class="card2"><strong>
    RGB lighting and customization:</strong> Some motherboards include RGB lightingwhich can be customized to match the color scheme of the system, or provide added visual effects.
    </div><br /><div class="card2"><strong class="_red">
    Power delivery:</strong> Some motherboards feature enhanced power delivery, which provide more stable and reliable power to the CPU and other components.
    </div><br /><div class="card2"><strong class="_tiel">
    BIOS and firmware features:</strong> Some motherboards include advanced features such as UEFI BIOS, fan control, thermal management and power-options, making the system easier to configure and maintain.
    </div></h3><h3><div class="card2"><strong class="_purple">
    PCI connectivity:</strong> PCI slots determine whether your hardware components can be connected to the motherboard. Different cards require specific PCI slots for proper functioning.
    <div class="i_t">
    Having ample and versatile PCI slots allows you to upgrade and add new hardware components to your system in the future without changing the entire motherboard.
    </div><div class="i_t">
    The presence of suitable PCI slots enables users to install specialized hardware components required for their specific needs, such as graphics cards, sound cards, and network adapters.
    </div><div class="i_t">
    The speed and generation of PCI slots can impact the performance of certain components. Choosing a motherboard with the latest PCI standards ensures optimal performance for modern hardware.
    </div><div class="i_t">
    Investing in a motherboard with sufficient PCI connectivity ensures your system remains compatible with new hardware technologies and standards that emerge in the future.
    </div></div></h3>
    <h2>This list is not exhaustive and other advanced features can also be found motherboards. It's important to note that the specific features offered on a motherboard can vary depending on the specific model and manufacturer, it's important to check the specifications of a motherboard carefully before purchasing it, to ensure that it has the required features.</h2>
    </article>
						<!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->

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
   ?>
                <style>
    .psu {
        font-size: 18px;
        background-color: rgb(255, 215, 0);
        color: rgb(35, 35, 35);
        display: inline-block;
        padding: 5px 0;
        position: relative;
    }

    .psu:before {
        content: '';
        background: rgb(21, 14, 7);
        display: block;
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 0;
        height: 3px;
        transition: all 0.3s ease-in-out;
    }

    .psu:hover {
        background-position: 0;
    }

    .psu:hover::before {
        width: 100%;
    }
    </style>
    <article class="fullbar article">
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
        <a href="?hw/sw#cpu">
            <h1 id="psu">Power Supply</h1>
        </a>
        <p>
        <h2>Power supplies are an essential component of any computing system, whether it&#39;s a laptop or desktop.
        </h2>
        <img src="https://latinospc.com/images/hardware/icons/80_Plus_Standard.png" class="rtl">
        <img src="https://latinospc.com/images/hardware/icons/80_Plus_Bronze.png" class="rtl">
        <img src="https://latinospc.com/images/hardware/icons/80_Plus_Silver.png" class="rtl">
        <img src="https://latinospc.com/images/hardware/icons/80_Plus_Gold.png" class="rtl">
        <img src="https://latinospc.com/images/hardware/icons/80_Plus_Platinum.png" class="rtl">
        <img src="https://latinospc.com/images/hardware/icons/80_Plus_Titanium.png" class="rtl">
        </p>
        <h2><a href="https://en.wikipedia.org/wiki/Category:Computer_power_supply_unit_manufacturers"
                class="psu">Popular PSU Manufacturers</a></h2>
        <p>Desktop computers require a power supply unit (PSU) to convert AC power from the wall outlet into DC power
            that can be used by the computer&#39;s internal components. A desktop computer PSU typically ranges in power
            output from 300 to 1200 watts, with the most common wattages being between 400 and 800 watts. The wattage
            needed for a desktop computer PSU is determined by the power requirements of the internal components,
            including the CPU, GPU, hard drives, water pumps, radiators, fans and any additional hardware such as a
            sound card or optical drives.</p><img src="https://latinospc.com/images/hardware/hw/psu.jpg" class="fl">
        <p>When choosing a PSU for a desktop computer, it is important to ensure that it has the necessary wattage to
            power all of the components in the system, while also providing enough headroom for future upgrades. A PSU
            that is too weak for the system can cause stability issues or even damage to the hardware, while a PSU that
            is too powerful may waste energy and be more expensive than necessary.</p>
        <img src="https://latinospc.com/images/hardware/hw/psu2.png" class="rtl">
        <h2>PSUs are typically rated for efficiency using the 80 Plus<a href="https://en.wikipedia.org/wiki/80_Plus"
                title="80 Plus"> certification system</a>, which ranges from 80 Plus (basic efficiency) to 80 Plus
            Titanium (highest efficiency). A more efficient PSU will waste less energy as heat and will result in lower
            electricity bills over time.</h2>
    </article>
    <article class="fullbar article">
        <p><strong class="psu">Power Adapters for Laptops:</strong> Laptops, on the other hand, typically do not have an
            internal PSU. Instead, they use a power adapter (brick) that converts AC power from the wall outlet into DC
            power that can be used by the laptop. Laptop power adapters are typically rated for output voltage and
            amperage, and are designed to provide the specific voltage and amperage required by the laptop&#39;s
            internal components.</p>
        <img src="https://latinospc.com/images/hardware/hw/portablepower.png" class="rtl">
        <p>When choosing a power adapter for a laptop, it is important to ensure that it provides the correct voltage
            and amperage, as using an adapter with the wrong specifications can damage the laptop&#39;s internal
            components. It is also important to choose an adapter that is compatible with the laptop&#39;s charging
            port.</p><img src="https://latinospc.com/images/hardware/hw/slimpower.png" class="fl">
        <p>Laptop power adapters come in a variety of sizes and shapes, with some designed for travel and others for use
            at a desk. Some adapters also include additional features, such as the ability to charge multiple devices at
            once or the ability to adjust the output voltage to support a wider range of devices.</p>
        <div class="spacer_shape">
            <p>In conclusion, power supplies are an essential component of any computing system, whether it&#39;s a
                desktop computer or a laptop. When choosing a power supply, it is important to ensure that it provides
                the necessary wattage or specifications to power all of the internal components, while also being
                efficient and compatible with the system.</p>
        </div><br />
        <h2>How to pick a PSU based on recomendations from reputable sources.</h2>
        <ul class="colms2">
            <ol>
                <a href="https://www.intel.com/content/www/us/en/gaming/resources/power-supply.html#:~:text=You%20need%20to%20consider%20form,the%20time%20to%20choose%20wisely."
                    title="Intel"><span class="psu">Intel<span></a>
            </ol><br />
            <ol>
                <a href="https://www.gamecrate.com/hardware/how-to-choose-pc-power-supply-buying-guide"
                    title="GamerCrate"><span class="psu">GameCrate</span></a>
            </ol><br />
            <ol>
                <a href="https://www.corsair.com/us/en/s/psu-family-choosing-a-psu" title="Corsair"><span
                        class="psu">Corsair</span></a>
            </ol><br />
            <ol>
                <a href="https://www.pcworld.com/article/456490/how-to-pick-the-best-pc-power-supply.html"
                    title="PCWorld"><span class="psu">PCWorld</span></a>
            </ol><br />
            <ol>
                <a href="https://www.msi.com/power-supply-calculator" title="MSI"><span class="psu">MSI Power Supply
                        Calculator</span></a>
            </ol><br />
            <ol>
                <a href="https://pcper.com/pcper-article/choose-right-power-supply-pc/" title="PCper"><span
                        class="psu">PC-Perspective</span></a>
            </ol><br />
            <ol>
                <a href="https://pcpartpicker.com/forums/topic/81828-confused-about-estimated-wattage"
                    title="Forums"><span class="psu">PC Part Picker Forums</span></a>
            </ol>
        </ul>
        <a href="https://www.tomshardware.com/reviews/best-psus,4229.html" title="best PSUs of 2023" class="psu">Toms
            Hardware's best of 2023 </a>
        <table style="table-layout:fixed;width:468pt">
            <colgroup>
                <col />
                <col />
            </colgroup>
            <tbody>
                <tr style="height:42pt">
                    <td style="vertical-align:top;overflow:hidden;overflow-wrap:break-word;">
                        <p>[Free Research Preview. ChatGPT March 23 Version 2023]</p>
                        <hr />
                    </td>
                </tr>
            </tbody>
        </table>
    </article>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** Power Supply-->
   <?php
}

function hw_gpu(){

    $title =['Graphics Processing Unit'];

    $links =['https://www.pcmag.com/encyclopedia/term/gpu',
            'IvanSutherland'=>['https://en.wikipedia.org/wiki/Ivan_Sutherland','Ivan Sutherland']    ];
    ?>
        <style>
    .gpu {
        font-size: 18px;
        color: rgb(41, 161, 43);
    }

    .amd {
        font-size: 25px;
        color: rgb(237, 28, 36);
    }

    .nvidia {
        font-size: 25px;
        color: rgb(118, 185, 0);
    }
    </style>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->

        <div class="container article fullbar">
        <a href="?hw/sw#cpu">
            <h2 id="gpu">
                <?= empty($title) ? $titulo[0] : $title[0] ?>
            </h2>
        </a>
        <a href="<?= $links[0] ?>" title="PC magazine">
            <h4 style="text-align:right; padding-right: 250px;">The GPU</h4>
        </a>
        <video controls width="623" height="623" autoplay muted>
            <source src="https://latinospc.com/images/video/wavesgpu.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h4>by Omar Garcia Using ChatGPT on April 13th 2023</h4>
        <p>Computer graphics has come a long way since its inception in the early 1950s. In the early days of computing,
            graphics were primarily used to create simple images and diagrams for scientific and engineering purposes.
            However, with the advent of gaming and multimedia, the demand for more sophisticated and realistic graphics grew
            exponentially.</p>
        <h2>Here are some of the milestones in the history of computer graphics, with a particular focus on the role of
            GPUs:</h2>
        <p>The first digital computer graphics were created in the 1950s using vector graphics systems that used <a
                href="https://en.wikipedia.org/wiki/Cathode-ray_tube" title="cathode ray tubes">cathode ray tubes</a> to
            display simple line drawings.</p>
        <p>In the 1960s, <a href="<?= $links["IvanSutherland"][0] ?>" title="Ivan Sutherland">
                <?= $links["IvanSutherland"][1] ?></a> created Sketchpad, the first
            computer program that could draw images on a computer screen. Sketchpad laid the groundwork for modern computer
        graphics and user interfaces.</p>
    <p>In the 1970s, computer graphics became more sophisticated with the introduction of the first 3D graphics
        software, such as the University of Utah&#39;s &quot;<a href="https://en.wikipedia.org/wiki/Utah_teapot"
            title="University of Utah">Utah Teapot</a>&quot; program.</p>
    <p>The 1980s saw the introduction of the first personal computers with <a
            href="https://www.computerhope.com/jargon/g/gui.htm" title="GUI">graphical user interfaces (GUIs)</a> such
        as the Apple Macintosh and the IBM PC. This helped to popularize computer graphics and bring it into the
        mainstream.</p>
    <p>In the 1990s, the introduction of dedicated <a href="https://www.techspot.com/article/650-history-of-the-gpu/"
            title="GPU">graphics processing units (GPUs)</a> allowed computers to render 3D graphics in real-time,
        enabling the development of 3D video games and other applications.</p>
    <p>The early 2000s saw the introduction of the first <a
            href="https://en.wikipedia.org/wiki/General-purpose_computing_on_graphics_processing_units"
            title="GPGPU">programmable GPUs</a>, which allowed developers to create custom shaders and other advanced
        visual effects.</p>
    <p>In 2006, <a href="https://developer.nvidia.com/about-cuda" title="CUDA">NVIDIA</a> introduced the <a
            href="https://en.wikipedia.org/wiki/CUDA" title="CUDA wiki">CUDA platform</a>, which allowed developers to
        harness the power of the GPU for general-purpose computing tasks.</p>
    <p>In recent years, advances in GPU technology have enabled the development of cutting-edge graphics techniques such
        as <a href="https://developer.nvidia.com/rtx/ray-tracing" title="Ray Tracing">real-time ray tracing</a> and <a
            href="https://www.run.ai/guides/gpu-deep-learning/best-gpu-for-deep-learning" title="Run AI">machine
            learning-based image processing</a>.</p>
    </div><!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** GPU-->


    <div class="fullbar article">
    <img alt="GPU Grid" src="https://latinospc.com/images/hardware/hw/gpu-graphics1.jpg" title="GPU graphics" /></p>
    <h2><a href="https://www.intel.com/content/www/us/en/products/docs/processors/what-is-a-gpu.html"
            title="Modern GPU technology powers traditional graphics applications—and much more.">GPU&rsquo;s Where are
            they?</a></h2>
    <p>The use of GPUs for computations has grown rapidly in recent years, with a wide range of applications and
        markets. Here are some of the areas of GPU computations and markets where they are commonly used:</p>
    <p><strong class="gpu">Gaming:</strong> GPUs are used extensively in the gaming industry to render 3D graphics in
        real-time, allowing gamers to experience immersive and realistic gaming environments.</p>
    <p><strong class="gpu">Machine learning and AI:</strong> GPUs have become essential for training deep learning
        models and other forms of artificial intelligence. They are used in a wide range of applications, from image and
        speech recognition to natural language processing.</p>
    <p><strong class="gpu">Scientific computing:</strong> GPUs are increasingly used for scientific simulations, such as
        weather modeling, fluid dynamics, and molecular dynamics. They can perform complex calculations much faster than
        traditional CPU-based systems.</p>
    <p><strong class="gpu">Finance:</strong> GPUs are used in finance for risk management, algorithmic trading, and
        portfolio optimization. They can quickly analyze large datasets and execute complex mathematical models.</p>
    <p><strong class="gpu">Healthcare:</strong> GPUs are used in healthcare for medical imaging and diagnosis, drug
        discovery, and genomics research. They can process large amounts of data quickly and efficiently, helping
        doctors and researchers make more informed decisions.</p>
    <p><strong class="gpu">Cryptocurrency mining:</strong> GPUs are used in cryptocurrency mining to solve complex
        mathematical algorithms and earn rewards. This has led to a significant increase in demand for high-performance
        GPUs in recent years.</p>
    <p><strong class="gpu">Media and entertainment:</strong> GPUs are used in the film and animation industries for
        special effects, rendering, and post-production. They allow for faster rendering times and more realistic
        graphics.</p>
    <p class="spacer_shape"><a href="https://en.wikipedia.org/wiki/GDDR_SDRAM" title="GDDR">GDDR</a> is a type of memory
        that is specially designed for graphics cards. It stands for Graphics Double Data Rate, which means it can
        transfer data twice as fast as regular <a href="?hw_ram#ram" title="RAM">DDR memory</a>. GDDR memory is
        optimized for high bandwidth and low latency, which are important for rendering high-resolution images and
        videos. There are different versions of GDDR memory, such as <a href="https://en.wikipedia.org/wiki/GDDR5_SDRAM"
            title="GDDR5">GDDR5</a>, <a href="https://en.wikipedia.org/wiki/GDDR6_SDRAM" title="GDDR6">GDDR6</a>, <a
            href="https://en.wikipedia.org/wiki/GDDR6_SDRAM#GDDR6X" title="GDDR6X">GDDR6X</a>, and <a
            href="https://en.wikipedia.org/wiki/GDDR7_SDRAM" title="GDDR7">GDDR7</a> each with different specifications
        and performance.</p>
    </div><!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** GPU-->

    <div class="fullbar article">
    <h2 class="tnhkl">GPU Manufacturers:</h2>
    <p>There are several major players in the GPU industry, each with their own strengths and market focus. Here are
        some of the most prominent companies in the GPU industry:</p>
    <h2><a href="https://www.nvidia.com/en-us/geforce/graphics-cards/" title="NVIDIA" class="tnhkl">NVIDIA:</a></h2>
    <p>The leading player in the GPU industry, with a focus on gaming, data center, and AI applications. The
        company&#39;s GeForce and Quadro product lines are popular with gamers and professionals, while its Tesla line
        of GPUs is designed for data center and scientific computing applications.</p>
    <h2><a href="https://www.amd.com/en/graphics/workstations" title="" class="tnhkl">AMD:</a></h2>
    <p>AMD is another major player in the GPU industry, with a focus on gaming and data center applications. The
        company&#39;s Radeon product line is popular with gamers and professionals, while its Instinct line of GPUs is
        designed for data center and scientific computing applications.</p>
    <h2><a href="https://www.intel.com/content/www/us/en/products/details/discrete-gpus/arc.html" title="Arc"
            class="tnhkl">Intel:</a></h2>
    <p>Intel is a dominant player in the CPU market, but it has recently entered the GPU market with its Xe product
        line. The company is targeting the gaming, data center, and AI markets with its GPUs.</p>
    <h2><a href="https://www.qualcomm.com/products/features/adreno" title="Adreno" class="tnhkl">Qualcomm:</a></h2>
    <p>Qualcomm is a major player in the mobile GPU market, with its Adreno product line used in many smartphones and
        tablets.</p>
    <h2><a href="https://www.imaginationtech.com/products/gpu/" title="Imagination" class="tnhkl">Imagination
            Technologies:</a></h2>
    <p>Imagination Technologies is a UK-based company that designs and licenses GPUs for use in mobile and embedded
        devices. Its PowerVR product line is used in many smartphones and other mobile devices.</p>
    <h2><a href="https://www.arm.com/products/silicon-ip-multimedia" title="Arm" class="tnhkl">ARM:</a></h2>
    <p>ARM is a UK-based company that designs CPUs and GPUs for use in mobile and embedded devices. Its Mali product
        line is used in many smartphones and other mobile devices.</p>
    </div><!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** GPU-->

    <div class="fullbar article">
    <h2>Here is a simplified List of GPU series from AMD Radeon, Nvidia, and Intel:</h2>
    <div class="spacer"></div>
    <div style="text-align: center"><a href="https://en.wikipedia.org/wiki/List_of_AMD_graphics_processing_units"
            title="List of GPUs">
            <h2 class="amd">AMD</h2>
        </a></div>
    <div class="spacer_shape">
        <p><a href="https://en.wikipedia.org/wiki/Radeon_HD_7000_series" title="Radeon HD 7000" class="amd">HD 7000:</a>
            Launched in 2012, based on the <a href="https://en.wikipedia.org/wiki/Graphics_Core_Next"
                title="GCN">GCN</a>" 1.0 architecture, supports <a
                href="https://en.wikipedia.org/wiki/DirectX#DirectX_11" title="DirectX 11.1">DirectX 11.1</a> and <a
                href="https://en.wikipedia.org/wiki/OpenGL" title="OpenGL">OpenGL</a>" 4.3</p>
        <p><a href="https://en.wikipedia.org/wiki/Radeon_200_series" title="RX 200" class="amd">RX 200:</a> Launched in
            2013, based on the <a href="https://en.wikipedia.org/wiki/Graphics_Core_Next" title="GCN">GCN</a>" 1.1 and
            1.2 architectures, supports <a href="https://en.wikipedia.org/wiki/DirectX#DirectX_12"
                title="DirectX 12">DirectX 12</a>" and <a href="https://en.wikipedia.org/wiki/OpenGL"
                title="OpenGL">OpenGL</a>" 4.4¹</p>
        <p><a href="https://en.wikipedia.org/wiki/Radeon_300_series" title="RX 300" class="amd">RX 300:</a> Launched in
            2015, based on the <a href="https://en.wikipedia.org/wiki/Graphics_Core_Next" title="GCN">GCN</a>" 1.2
            architecture, supports <a href="https://en.wikipedia.org/wiki/DirectX#DirectX_12" title="DirectX 12">DirectX
                12</a>" and <a href="https://en.wikipedia.org/wiki/OpenGL" title="OpenGL">OpenGL</a>" 4.5.</p>
        <p><a href="https://en.wikipedia.org/wiki/Radeon_400_series" title="RX 400" class="amd">RX 400:</a> Launched in
            2016, based on the <a href="https://en.wikipedia.org/wiki/Graphics_Core_Next" title="GCN">GCN</a>" 4.0
            architecture, supports <a href="https://en.wikipedia.org/wiki/DirectX#DirectX_12" title="DirectX 12">DirectX
                12</a>" and <a href="https://en.wikipedia.org/wiki/Vulkan" title="Vulkan">Vulkan</a>"</p>
        <p><a href="https://en.wikipedia.org/wiki/Radeon_500_series" title="RX 500" class="amd">RX 500:</a> Launched in
            2017, based on the <a href="https://en.wikipedia.org/wiki/Graphics_Core_Next" title="GCN">GCN</a>" 4.0
            architecture, supports <a href="https://en.wikipedia.org/wiki/DirectX#DirectX_12" title="DirectX 12">DirectX
                12</a>" and <a href="https://en.wikipedia.org/wiki/Vulkan" title="Vulkan">Vulkan</a>"</p>
        <p><a href="https://en.wikipedia.org/wiki/Radeon_RX_Vega_series" title="RX Vega" class="amd">RX Vega:</a>
            Launched in 2017, based on the <a href="https://en.wikipedia.org/wiki/Graphics_Core_Next"
                title="GCN">GCN</a>" 5.0 architecture, supports <a
                href="https://en.wikipedia.org/wiki/DirectX#DirectX_12" title="DirectX 12">DirectX 12</a>" and <a
                href="https://en.wikipedia.org/wiki/Vulkan" title="Vulkan">Vulkan</a>", uses <a
                href="https://en.wikipedia.org/wiki/High_Bandwidth_Memory" title="High Bandwidth Memory">HBM2</a>"</p>
        <p><a href="https://en.wikipedia.org/wiki/Radeon_RX_5000_series" title="RX 5000" class="amd">RX 5000:</a>
            Launched in 2019, based on the <a href="https://en.wikipedia.org/wiki/RDNA_(microarchitecture)"
                title="RDNA">RDNA</a>" architecture, supports <a href="https://en.wikipedia.org/wiki/DirectX#DirectX_12"
                title="DirectX 12">DirectX 12</a>" and <a href="https://en.wikipedia.org/wiki/Vulkan"
                title="Vulkan">Vulkan</a>", uses GDDR6</p>
        <p><a href="https://en.wikipedia.org/wiki/Radeon_RX_6000_series" title="RX 6000" class="amd">RX 6000:</a>
            Launched in 2020, based on the <a href="https://en.wikipedia.org/wiki/RDNA_(microarchitecture)"
                title="RDNA">RDNA</a>" 2 architecture, supports <a
                href="https://en.wikipedia.org/wiki/DirectX#DirectX_12" title="DirectX 12">DirectX 12</a>" Ultimate and
            <a href="https://en.wikipedia.org/wiki/Vulkan" title="Vulkan">Vulkan</a>", uses GDDR6 and Infinity Cache
        </p>
        <p><a href="https://en.wikipedia.org/wiki/Radeon_RX_7000_series" title="RX 7000" class="amd">RX 7000:</a>
            Launched in 2023, based on the <a href="https://en.wikipedia.org/wiki/RDNA_(microarchitecture)"
                title="RDNA">RDNA</a>" 3 architecture, supports <a
                href="https://en.wikipedia.org/wiki/DirectX#DirectX_12" title="DirectX 12">DirectX 12</a>" Ultimate and
            <a href="https://en.wikipedia.org/wiki/Vulkan" title="Vulkan">Vulkan</a>", uses GDDR6X and Infinity Cache
        </p>
        <p><a href="https://en.wikipedia.org/wiki/Radeon_Pro#Radeon_Pro_Duo" title="Radeon Pro" class="amd">Radeon
                Pro:</a>For workstation with needed high-performance and reliable graphics for various applications,
            such as computer-aided design (CAD), computer-generated imagery (CGI), digital content creation (DCC),
            high-performance computing (HPC), and virtual reality (VR).</p>
    </div>
    <div class="spacer"></div>
    <div style="text-align: center"><a href="https://en.wikipedia.org/wiki/List_of_Nvidia_graphics_processing_units"
            title="list of GPUs">
            <h2 class="nvidia">Nvidia</h2>
        </a></div>
    <p><b class="nvidia">GT:</b> For casual gamers and general users who need a basic graphics card for everyday tasks
        such as web browsing, video streaming, photo editing, and light gaming. GT cards are the cheapest and
        lowest-performing ones in the GeForce lineup.</p>
    <p><b class="nvidia">GTS:</b> For budget-conscious gamers who want a decent graphics card for playing older or less
        demanding games at medium to high settings. GTS cards are slightly better than GT cards in terms of performance
        and features, but they are also more expensive and consume more power.</p>
    <p><b class="nvidia">GTX:</b> For enthusiasts and hardcore gamers who want a high-end graphics card for playing the
        latest and most demanding games at high to ultra settings. GTX cards are the flagship models of each generation,
        offering superior processor performance, more shader pipelines, more and faster memory, and bigger heatsinks
        than GTS cards.</p>
    <p><b class="nvidia">GTX+</b> Cards also have a "+" variant, which means a slightly improved version of the original
        model with higher clock speeds and memory bandwidth.</p>
    <p><b class="nvidia">RTX:</b> For gamers and creators who want a cutting-edge graphics card that supports ray
        tracing and AI acceleration. RTX cards are the newest and most advanced models of the GeForce lineup, adding ray
        tracing cores and tensor cores to the GTX architecture . Ray tracing cores enable realistic lighting, shadows,
        and reflections in games, while tensor cores enable AI-based features such as DLSS (Deep Learning Super
        Sampling), which boosts performance and image quality.</p>
    <div class="spacer_shape">
        <p><a href="https://en.wikipedia.org/wiki/GeForce_8_series" title="GeForce 8 series" class="nvidia">GeForce
                8000:</a> Launched in 2006, based on the <a href="https://en.wikipedia.org/wiki/Nvidia_Tesla"
                title="Tesla architecture">Tesla architecture</a>, supports <a
                href="https://en.wikipedia.org/wiki/DirectX#DirectX_10" title="DirectX 10">DirectX 10</a> and <a
                href="https://en.wikipedia.org/wiki/OpenGL" title="OpenGL">OpenGL</a>" 3.3</p>
        <p><a href="https://en.wikipedia.org/wiki/GeForce" title="GeForce" class="nvidia">GeForce
                GTX/RTX/GT/GTS/GTX+:</a> Launched between 2008 and 2020, based on various architectures such as <a
                href="https://en.wikipedia.org/wiki/Fermi_(microarchitecture)" title="Fermi Architecture">Fermi</a>,
            <a href="https://en.wikipedia.org/wiki/Kepler_(microarchitecture)" title="Kepler Architecture">Kepler</a>,
            <a href="https://en.wikipedia.org/wiki/Maxwell_(microarchitecture)"
                title="Maxwell Architecture">Maxwell</a>,
            <a href="https://en.wikipedia.org/wiki/Pascal_(microarchitecture)" title="Pascal Architecture">Pascal</a>,
            <a href="https://en.wikipedia.org/wiki/Turing_(microarchitecture)" title="Turing Architecture">Turing</a>,
            and <a href="https://en.wikipedia.org/wiki/Ampere_(microarchitecture)"
                title="Ampere Architecture">Ampere</a>, supports various versions of <a
                href="https://en.wikipedia.org/wiki/DirectX" title="DirectX">DirectX</a>,
            <a href="https://en.wikipedia.org/wiki/OpenGL" title="OpenGL">OpenGL</a>, and <a
                href="https://en.wikipedia.org/wiki/Vulkan" title="Vulkan">Vulkan</a>"
        </p>
        <p><a href="https://en.wikipedia.org/wiki/GeForce#GeForce_40_series_(Current)" title="Current Cards"
                class="nvidia">GeForce RTX/GTX/GT/GTS/GTX+:</a> Launched between 2020 and 2023, based on the <a
                href="https://en.wikipedia.org/wiki/Ada_Lovelace_(microarchitecture)"
                title="Ada Lovelace architecture">Ada Lovelace architecture</a>, supports <a
                href="https://en.wikipedia.org/wiki/DirectX#DirectX_12_Ultimate" title="DirectX 12 Ultimate">DirectX 12
                Ultimate</a> and <a href="https://en.wikipedia.org/wiki/Vulkan" title="Vulkan">Vulkan</a>", uses GDDR6X
            and <a
                href="https://nvidianews.nvidia.com/news/nvidia-introduces-dlss-3-with-breakthrough-ai-powered-frame-generation-for-up-to-4x-performance"
                title="DLSS 3">DLSS 3 Frame Generation</a></p>
    </div>
    <h2><a href="https://www.intel.com/content/www/us/en/products/details/discrete-gpus.html"
            title="Intel Discrete GPUs">
            <div style="text-align: center">Intel</div>
        </a></h2>
    <p>Intel <a
            href="https://www.intel.com/content/www/us/en/products/docs/discrete-gpus/arc/desktop/a-series/overview.html">A-Series</a>
        Arc has different series of GPUs, each with different performance levels and features. The first series, called
        Alchemist, launched in 2022, followed by Battlemage, Celestial, and Druid in the later years.</p>
    <p>
        The <a href="https://en.wikipedia.org/wiki/Intel_Arc" title="Arc Alchemist">A-Series</a> has two types of chips:
        ACM-G10 and ACM-G11 and both use the <a
            href="https://www.intel.com/content/www/us/en/products/docs/discrete-gpus/arc/technology/xe-hpg-microarchitecture.html"
            title="Xe-HPG">Xe-HPG Microarchitecture</a>, which delivers breakthrough performance, efficiency, and
        scalability for gamers and creators. The ACM-G10 chip has up to 512 Xe Vector Engines (XVEs), which are the
        basic units of computation for graphics and other workloads. The ACM-G11 chip has up to 128 XVEs. Each XVE can
        perform 16 floating-point operations per clock cycle, and each chip also has XMX units that can perform matrix
        operations for deep learning and other tasks.</p>
    <p>The <a href="https://en.wikipedia.org/wiki/Intel_Arc" title="Arc Alchemist">A-Series</a> also supports ray
        tracing, which is a technique for rendering realistic lighting effects in 3D scenes. Each chip has ray tracing
        units (RTUs) that can accelerate the ray tracing calculations. The ACM-G10 chip has 32 RTUs, while the ACM-G11
        chip has 8 RTUs.
    </p>
    <p>
        The <a href="https://en.wikipedia.org/wiki/Intel_Arc" title="Arc Alchemist">A-Series</a> has different models
        for laptops and desktops, with different power and performance levels. The cards are <a
            href="https://www.intel.com/content/www/us/en/products/docs/discrete-gpus/arc/desktop/a-series/3.html"
            title="Arch 3">Arc 3</a>, <a>Arc 5</a>, and <a
            href="https://www.intel.com/content/www/us/en/products/docs/discrete-gpus/arc/desktop/a-series/7.html"
            title="Arc7">Arc 7</a>. The laptop models use the PCIe 4.0 x8 interface, while the desktop models will use
        the PCIe 4.0 x16 interface.
    </p>
    <p>
        The <a href="https://en.wikipedia.org/wiki/Intel_Arc" title="Arc Alchemist">A-Series</a> has various memory
        configurations, depending on the model. The laptop models use GDDR6 memory with a maximum of 16 GB capacity and
        a maximum of 256-bit bus width. The desktop models use GDDR6 or GDDR6X memory with a maximum of 32 GB capacity
        and a maximum of 384-bit bus width².
    </p>
    <p>
        The <a href="https://en.wikipedia.org/wiki/Intel_Arc" title="Arc Alchemist">A-Series</a> has other features,
        such as DLSS (Deep Learning Super Sampling), which is a technique for improving the image quality and
        performance of games by using artificial intelligence. The <a href="https://en.wikipedia.org/wiki/Intel_Arc"
            title="Arc Alchemist">A-Series</a> also supports <a
            href="https://en.wikipedia.org/wiki/DirectX#DirectX_12_Ultimate" title="DirectX 12 Ultimate">DirectX 12
            Ultimate</a>" , <a href="https://en.wikipedia.org/wiki/Vulkan" title="Vulkan">Vulkan</a>", and other
        graphics APIs.</p>
    </div>
    <?php
}

function hw_chassis(){
      $titles = ['chassis'=>['The BOX','chassis'],
             'years'=>['Early Days (1940s-1950s)','Mainframe Era (1960s-1970s)','Microcomputers and Home Computers (1970s-1980s)',
             'The ATX Form Factor (1990s)','Desktop and Tower Cases (1990s-2000s)','Customization and Gaming Cases (2000s-2010s)',
             'Mini-ITX and Small Form Factor (SFF) Cases (2010s-2020s)','Tempered Glass and RGB Lighting (2010s-2020s)',
             'Emphasis on Cooling and Cable Management (2020s)']
    ];
    $chassis = ['The history of computer cases is an interesting journey that has seen significant changes and developments from their humble beginnings to the modern era.',
                'The Evolution of PC cases. YouTube Video','Let\'s take a look at the evolution of','computer cases','through the years:',
                'Early computers were large, room-filling machines housed in cabinets or racks, without proper "cases" as we understand them today.',
                'Mainframes were large and used enclosures or cabinets, operated by specialists in controlled environments.',
                'Early microcomputers like the Altair 8800 had simple metal boxes, and the Apple II was one of the first with a more recognizable case design.',
                'Intel\'s ATX form factor set standards for modern computer cases, including motherboard layout, power supply, and I/O panel, leading to better standardization and cooling options.',
                'Desktop cases were compact and horizontally oriented, while tower cases were vertically oriented and provided better airflow.',
                'Case manufacturers introduced designs catering to gamers, with features like transparent side panels, LED lighting, and custom cooling solutions.',
                'The popularity of smaller and powerful components led to the rise of Mini-ITX and SFF cases, ideal for limited space and portable setups.',
                'Tempered glass side panels and RGB lighting became popular, showcasing internal components and allowing customization of lighting effects.',
                'Modern cases focus on improving airflow and cable management, with better fan mounts, radiator support, and smart cable routing solutions.'
    ,'years'=>['Overall, the computer case has evolved from basic enclosures to a key component of personal expression for
            enthusiasts. It is no longer just a box to hold components; it reflects the user\'s style and preferences
            while ensuring optimal performance and functionality for the modern computing era.']

            ];

    $links = ['techQuickie'=>'https://youtu.be/mKLAszoGeJk',
         'computerCase'=>'https://en.wikipedia.org/wiki/Computer_case'];


    ?>
        <article class="hero4 container article fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** --><a rel="example_group"
        href="https://latinospc.com/images/bg_lapc.png" title="LAtinosPC Icon Computer" alt="LAPChassisIcon"><img
            src="https://latinospc.com/images/lapc.png" class="image rtl"></a>
    <h1><a href="?hw/sw#cpu" id="case">
    <?= empty($titles['chassis'][0]) ? $titulo['chasis'][0] : $titles['chassis'][0];?>

    </a></h1>
    <h2>
        <?= empty($chassis[0]) ? $chasis[0] : $chassis[0];?>
    </h2>
    <a href="<?= $links['techQuickie']; ?>" title="Techquickie">
        <p class="link"><?= empty($chassis[1]) ? $chasis[1] : $chassis[1];?></p>
    </a>
    <h2>
    <?= empty($chassis[2]) ? $chasis[2] : $chassis[2];?> <a href="<?= $links['computerCase']; ?>"
            title="Wikipedia"><?= empty($chassis[3]) ? $chasis[3] : $chassis[3];?></a> <?= empty($chassis[4]) ? $chasis[4] : $chassis[4];?></h2>

        <a rel="example_group" href="https://latinospc.com/images/hardware/case/1600393471697.png"
            title="LAtinosPC Main Computer" alt="LAPChassis">
            <img src="https://latinospc.com/images/cs_chassis.webp" width="263" alt="image" class="image fl" /></a>


        <h2><?= empty($titles['years'][0]) ? $titulo['años'][0] : $titles['years'][0];?></h2>
        <p><?= empty($chassis[5]) ? $chasis[5] : $chassis[5];?></p>

        <h2><?= empty($titles['years'][1]) ? $titulo['años'][1] : $titles['years'][1];?></h2>
        <p><?= empty($chassis[6]) ? $chasis[6] : $chassis[6];?></p>

        <h2><?= empty($titles['years'][2]) ? $titulo['años'][2] : $titles['years'][2];?></h2>
        <p><?= empty($chassis[7]) ? $chasis[7] : $chassis[7];?></p>
    <ul class="colms2">
        <li>
            <h2><?= empty($titles['years'][3]) ? $titulo['años'][3] : $titles['years'][3];?></h2>
            <p><?= empty($chassis[8]) ? $chasis[8] : $chassis[8];?></p>
        </li>

        <li>
            <h2><?= empty($titles['years'][4]) ? $titulo['años'][4] : $titles['years'][4];?></h2>
            <p><?= empty($chassis[9]) ? $chasis[9] : $chassis[9];?></p>
        </li>

        <li>
            <h2><?= empty($titles['years'][5]) ? $titulo['años'][5] : $titles['years'][5];?></h2>
            <p><?= empty($chassis[10]) ? $chasis[10] : $chassis[10];?></p>
        </li>

        <li class="item">
            <h2><?= empty($titles['years'][6]) ? $titulo['años'][6] : $titles['years'][6];?></h2>
            <p><?= empty($chassis[11]) ? $chasis[11] : $chassis[11];?></p>
        </li>

        <li>
            <h2><?= empty($titles['years'][7]) ? $titulo['años'][7] : $titles['years'][7];?></h2>
            <p><?= empty($chassis[12]) ? $chasis[12] : $chassis[12];?></p>
        </li>

        <li>
            <h2><?= empty($titles['years'][8]) ? $titulo['años'][8] : $titles['years'][8];?></h2>
            <p><?= empty($chassis[13]) ? $chasis[13] : $chassis[13];?></p>
        </li>
    </ul>



        <h2><?= empty($chassis['years'][0]) ? $chasis['años'][0] : $chassis['years'][0];?>
        </h2>
        <hr>
    </article>


    <article class="hero4 container article fullbar">
    <h2 class="colms2">
        <div class="item">The most important features of a modern computer case can significantly impact the overall performance,
        aesthetics, and user experience of a PC build.</div>
        <div class="image">Here are some key features that are commonly sought after in modern computer cases:</div></h2>
    <div class="hero2 container"><hr></div>
        <p>
            <div class="colms2">
            <fieldset>
            <legend>Form Factor and Size</legend>
            <p>Modern cases come in various form factors, such as ATX, Micro-ATX, Mini-ITX, and E-ATX. Choosing the right form factor is essential to ensure compatibility with the selected motherboard and other components. Additionally, users can choose from different sizes, including full-tower, mid-tower, and compact SFF (Small Form Factor) cases, based on their space requirements and portability preferences.</p>
        </fieldset>

        <fieldset>
            <legend>Build Quality and Material</legend>
            <p>High-quality materials, such as steel, aluminum, or tempered glass, are essential for sturdiness and durability. Tempered glass panels on the side or front of the case are popular to showcase the internal components and provide a premium look.</p>
        </fieldset>

        <fieldset>
            <legend>Cooling Solutions</legend>
            <p>Effective cooling is critical to maintaining optimal performance and longevity of computer components. Modern cases should have proper ventilation, mounting points for fans, and support for liquid cooling solutions. Features like fan filters can also help keep dust out and maintain clean airflow.</p>
        </fieldset>

        <fieldset>
            <legend>Cable Management</legend>
            <p>Good cable management is essential for improved airflow, aesthetics, and ease of maintenance. Modern cases often come with cable routing options, tie-down points, and compartments to hide and organize cables neatly.</p>
        </fieldset>

        <fieldset>
            <legend>I/O Ports</legend>
            <p>Convenient front or top I/O ports are valuable for easy access to peripherals. Common ports include USB Type-A and Type-C, audio jacks, and sometimes an SD card reader.</p>
        </fieldset>

        <fieldset class="item">
            <legend>Storage Options</legend>
            <p>The case should have ample space and mounting points for storage drives, such as SSDs and HDDs. Some modern cases also provide specialized storage solutions, like dedicated SSD mounts or brackets.</p>
        </fieldset>

        <fieldset>
            <legend>GPU and Expansion Support</legend>
            <p>Sufficient clearance for graphics cards and expansion slots are crucial to accommodate high-performance components and future upgrades.</p>
        </fieldset>

        <fieldset>
            <legend>Tool-less Design</legend>
            <p>Tool-less features, like thumb screws or quick-release mechanisms, make installation and maintenance easier, eliminating the need for additional tools.</p>
        </fieldset>

        <fieldset>
            <legend>Removable Dust Filters</legend>
            <p>Dust filters help prevent dust buildup inside the case, which can clog fans and decrease cooling efficiency. Removable dust filters make cleaning easier.</p>
        </fieldset>

        <fieldset>
            <legend>Noise Reduction</legend>
            <p>Noise dampening materials or design features can help reduce operating noise, providing a quieter computing experience.</p>
        </fieldset>

        <fieldset>
            <legend>Aesthetics and RGB Lighting</legend>
            <p>Customizable RGB lighting and attractive aesthetics are popular among users who want to create visually stunning and personalized setups.</p>
        </fieldset>

        <fieldset>
            <legend>Cable Management Space</legend>
            <p>Sufficient space behind the motherboard tray or in cable management channels allows for tidier cable routing and better airflow.</p>
        </fieldset>

        <fieldset>
            <legend>Easy Component Access</legend>
            <p>Removable panels and easy-to-access components facilitate upgrades and maintenance.</p>
        </fieldset>

        <fieldset>
            <legend>Compatibility and Future-Proofing</legend>
            <p>A modern case should be compatible with the latest hardware and provide room for future upgrades without major modifications.</p>
        </fieldset>

        Overall, the best modern computer cases strike a balance between functionality, aesthetics, and ease of use,
        allowing users to build powerful and visually appealing systems while ensuring efficient cooling and
        organization.
        </div>
    </p>
    </article>
    <article class="hero4 container article fullbar">
    There are several types of computer cases available in the market, each designed to suit different needs and
    preferences. Here are some common types of computer cases and their advantages:

    1. Full-Tower Case:
    Advantages:
    - Ample internal space: Full-tower cases offer plenty of room to accommodate multiple graphics cards, large CPU
    coolers, and multiple storage drives.
    - Excellent airflow: The larger size allows for better cooling options, such as more fan mounts and radiator
    support, leading to improved thermal performance.
    - Easier cable management: The extra space makes it easier to manage and route cables neatly.

    2. Mid-Tower Case:
    Advantages:
    - Balanced size: Mid-tower cases strike a good balance between space and manageability, making them the most popular
    form factor for general users and gamers.
    - Sufficient internal space: They can still accommodate high-end components while being more compact than full-tower
    cases, making them suitable for most setups.
    - Portability: Mid-tower cases are easier to transport compared to full-tower cases.

    3. Mini-ITX Case:
    Advantages:
    - Compact size: Mini-ITX cases are the smallest form factor, making them ideal for space-constrained environments or
    for building portable systems.
    - Energy-efficient: Smaller components typically draw less power, resulting in more energy-efficient builds.
    - Aesthetically pleasing: Many Mini-ITX cases feature stylish and unique designs, making them popular among
    enthusiasts interested in visually appealing setups.

    4. Micro-ATX Case:
    Advantages:
    - Smaller than ATX but larger than Mini-ITX: Micro-ATX cases offer a middle ground between compactness and component
    compatibility.
    - Multi-GPU support: Many Micro-ATX cases can still accommodate multiple graphics cards, providing an upgrade path
    for gaming enthusiasts.
    - Suitable for most users: Micro-ATX cases are versatile and suitable for a wide range of builds, from
    budget-oriented to mid-range gaming setups.

    5. HTPC (Home Theater PC) Case:
    Advantages:
    - Blend into entertainment centers: HTPC cases are designed to resemble traditional audio/video components, making
    them suitable for living room setups.
    - Quiet operation: HTPC cases often prioritize noise reduction and have features to minimize operating noise.
    - Accommodate A/V equipment: HTPC cases may have space to fit other A/V components, like DVD/Blu-ray drives or audio
    amplifiers.

    6. Open-Air Case:
    Advantages:
    - Enhanced cooling: Open-air cases allow unrestricted airflow around components, leading to improved thermal
    performance.
    - Easy access for testing and modding: Components are easily accessible, making testing, swapping, or modifying
    hardware more convenient.
    - Showcase components: Open-air cases are perfect for enthusiasts who want to showcase their high-end components and
    custom cooling setups.

    7. Cube Case or Cube-Style Case:
    Advantages:
    - Space-efficient design: Cube cases typically have a cube-like shape, making them space-efficient and easy to fit
    on a desk or in tight spaces.
    - Good airflow: Cube cases often have well-designed airflow paths to ensure efficient cooling.
    - Unique aesthetics: The cube design sets them apart from traditional tower cases, appealing to users looking for a
    distinctive look.

    Each type of computer case has its own set of advantages, and the choice depends on individual preferences, use case
    scenarios, and the specific hardware configuration one plans to build. Whether it's for gaming, content creation, or
    office use, there's a computer case to suit every need.

    Certainly! In addition to the types of computer cases mentioned earlier, here are a few more specialized types of
    computer cases:

    1. Rackmount Case:
    Advantages:
    - Designed for server and data center environments: Rackmount cases are designed to be mounted on server racks,
    providing efficient space utilization in data centers.
    - Hot-swappable components: Some rackmount cases allow for hot-swapping of hard drives and other components,
    enabling easy maintenance without powering down the entire system.
    - Improved cable management: Rackmount cases often have cable management features to maintain a clean and organized
    setup.

    2. Test Bench Case:
    Advantages:
    - Open-air design: Test bench cases have an open structure for easy access to components and testing various
    hardware configurations.
    - Ideal for enthusiasts and overclockers: Enthusiasts and overclockers often use test bench cases for quick and easy
    hardware testing and modifications.
    - Efficient cooling: The open-air design allows for excellent cooling and observation of temperature changes during
    stress tests.

    3. Vertical GPU Mount Case:
    Advantages:
    - Showcase GPU: Vertical GPU mount cases position the graphics card vertically, allowing users to showcase high-end
    graphics cards and RGB lighting.
    - Improved airflow for GPU: Vertical mounting can offer better cooling for the GPU as it can breathe in fresh air
    more efficiently.
    - Aesthetically pleasing: The vertical orientation creates a visually stunning display inside the case.

    4. SFF (Small Form Factor) Case:
    Advantages:
    - Compact and portable: SFF cases are highly compact, making them perfect for building a powerful system in a small
    space or for portable gaming rigs.
    - Unique designs: Many SFF cases feature innovative and unique designs that cater to users seeking a distinctive
    look.
    - High-performance potential: Despite their small size, SFF cases can often accommodate powerful hardware
    configurations.

    5. PSU Shroud Case:
    Advantages:
    - Aesthetically pleasing: PSU shroud cases hide the power supply and cables from view, creating a cleaner and more
    visually appealing interior.
    - Improved airflow: By separating the power supply from the main components, PSU shrouds allow for better airflow
    inside the case.
    - Cable management: PSU shrouds contribute to better cable management by providing a designated space to tuck away
    excess cables.

    6. DIY Cardboard Case:
    Advantages:
    - Low-cost and eco-friendly: DIY cardboard cases are a budget-friendly and environmentally conscious option for
    building a temporary or experimental system.
    - Customizable: Users can easily cut and modify cardboard to fit their specific hardware requirements and airflow
    needs.
    - Fun and creative: Building a cardboard case can be a fun and creative project, especially for those interested in
    crafting and DIY activities.

    These specialized types of computer cases cater to specific use cases and user preferences. Whether it's for data
    centers, testing purposes, showcasing high-end components, or building compact and portable systems, there is a
    computer case available to meet the diverse needs of PC builders and enthusiasts.
    Certainly! Here are a few more types of computer cases:

    1. Inverted Case:
    Advantages:
    - Unique design: Inverted cases position the motherboard upside-down, with the I/O ports at the bottom. This creates
    a visually distinctive and unconventional layout.
    - Improved GPU cooling: Inverted cases often have the graphics card mounted vertically, allowing for improved GPU
    cooling with direct access to fresh air.
    - Easier access to I/O ports: Placing the I/O ports at the bottom can be more convenient for some setups, especially
    when the case is located on the floor.

    2. Home Server/NAS Case:
    Advantages:
    - Multiple drive bays: These cases offer numerous drive bays to accommodate multiple storage drives, making them
    suitable for home servers and network-attached storage (NAS) setups.
    - Quiet operation: Home server/NAS cases are designed for quiet and efficient operation to run 24/7 without being
    intrusive.
    - RAID support: Some cases come with built-in RAID support to enhance data redundancy and storage performance.

    3. Transparent/Showcase Case:
    Advantages:
    - Display components: Transparent or showcase cases are designed with tempered glass panels to allow users to
    display their components and custom cooling setups for a stunning visual effect.
    - Aesthetics and RGB lighting: These cases are often favored by users who want to showcase their RGB lighting
    configurations for a captivating and immersive look.
    - Enthusiast appeal: Transparent cases cater to enthusiasts who take pride in their builds and enjoy sharing their
    creations with others.

    4. Dustproof and Waterproof Case:
    Advantages:
    - Enhanced protection: These specialized cases are designed to protect components from dust, dirt, and moisture,
    making them suitable for harsh environments or industrial settings.
    - Improved reliability: Dustproof and waterproof cases can help extend the lifespan of components by preventing
    damage caused by dust and liquid intrusion.
    - Ideal for specialized applications: Such cases are commonly used in outdoor installations, factories, marine
    environments, and other challenging conditions.

    5. Silent/Noise-Dampening Case:
    Advantages:
    - Noise reduction: Silent cases are engineered with sound-dampening materials and optimized airflow to minimize
    operating noise, providing a quieter computing experience.
    - Perfect for quiet environments: These cases are well-suited for office setups, media centers, or any place where
    noise reduction is essential.
    - Balanced performance: Silent cases maintain a good balance between thermal performance and noise reduction,
    ensuring components stay cool while operating quietly.

    6. DIY Custom Mod Case:
    Advantages:
    - Full creative control: DIY custom mod cases involve creating a unique case design from scratch or modifying an
    existing one to match individual tastes and requirements.
    - Showcasing creativity: Building a DIY custom mod case allows enthusiasts to showcase their creativity and
    craftsmanship by making something truly one-of-a-kind.
    - Learning experience: This type of case building provides an opportunity to learn more about fabrication, design
    principles, and various materials used in case construction.

    Each type of computer case caters to specific needs, design preferences, and functional requirements. As PC building
    continues to evolve, new types of cases may emerge, offering even more exciting possibilities for enthusiasts and
    users looking to build their dream systems.

    Wall-mounted computer cases (computers mounted directly on a wall) are a unique and innovative type of computer case
    that, as the name suggests, are designed to be mounted directly on a wall. These cases offer a visually striking and
    space-saving solution for PC enthusiasts who want to showcase their builds in a distinctive way. Here are the
    advantages of wall-mounted cases:

    Advantages:

    1. Aesthetically pleasing: Wall-mounted cases create an eye-catching display, turning the PC into a functional piece
    of art on the wall. They serve as a conversation starter and can become a focal point in a room.

    2. Space-saving: Mounting the case on the wall frees up floor space, making it ideal for smaller living spaces or
    environments where floor or desk space is limited.

    3. Improved airflow: Wall-mounted cases allow for better airflow around the components since there are no
    obstructions on the sides or bottom. This can lead to improved cooling and potentially better performance.

    4. Easy access and maintenance: With components exposed and easily accessible, wall-mounted cases make hardware
    upgrades, cleaning, and maintenance more convenient.

    5. Showcase custom components: Wall-mounted cases are perfect for displaying custom cooling solutions, RGB lighting
    configurations, and high-end components in a visually appealing manner.

    6. Cable management: Wall-mounted cases often come with cable management solutions to keep the interior clean and
    organized, adding to the overall aesthetics.

    7. Unique design options: Wall-mounted cases come in various designs, materials, and styles, catering to different
    tastes and interior design preferences.

    8. Customization: Users can add creative touches, such as LED lighting strips, decorative elements, or even artwork,
    to further enhance the visual impact of the wall-mounted setup.

    It's important to consider a few factors before opting for a wall-mounted case. First, ensure that the wall can
    handle the weight of the case and its components. Reinforcing the wall or using appropriate mounting hardware may be
    necessary. Secondly, wall-mounted cases are not as easily portable as traditional cases, so it's essential to select
    a permanent location for the setup.

    Overall, wall-mounted cases offer a distinctive and aesthetically pleasing option for PC enthusiasts who want to go
    beyond traditional tower or desktop setups and turn their computer into a functional work of art.

    <table style="table-layout:fixed;width:468pt">
        <colgroup>
            <col />
            <col />
        </colgroup>
        <tbody>
            <tr style="height:42pt">
                <td style="vertical-align:top;overflow:hidden;overflow-wrap:break-word;">
                    <p>[Free Research Preview. ChatGPT ChatGPT August 3 Version 2023]</p>
                    <hr />
                </td>
            </tr>
        </tbody>
    </table>
    </article>
    <?php
}

function hw_coolers() {
        $titles =[ 'Cooling Devices',':Fans:',':Solid State Coolers:',':Phase Change:','Computer coolers','There are two types of computer coolers:',
                'The process typically involves the following steps:','Doppler cooling:','Coolers:','Air:','Liquid:','Solid-State:',
                'Thermoelectric Coolers (TECs):','Hybrid Coolers:','Phase Change Cooling:','Maintenance and Installation:','Conclusion:','Lasers','On the other hand,',
                'There are several types of active cooling systems,',':Liquid Coolers:',':TECS:','Recently,','Sisyphus cooling:','Evaporative cooling:',
                'When choosing a cooler, consider factors such as Cooler Size and Compatibility:','Cooler Height:','Socket Compatibility:','Cooling Performance:'
             ];
    $links =[   'https://en.wikipedia.org/wiki/Computer_cooling',
        'https://www.youtube.com/watch?v=6AYdAl7Gxrc',
        'https://youtube.com/clip/UgkxCtnGcjvvzs7VShBGNBL_6luLxB5T1rSI?si=82vLKDTdjHML9d4O',
        'https://www.youtube.com/watch?v=FPFE7i7bz9Y',
        'https://en.wikipedia.org/wiki/Doppler_cooling',
        'https://en.wikipedia.org/wiki/Sisyphus_cooling',
        'https://en.wikipedia.org/wiki/Evaporative_cooling_(atomic_physics)',
        'https://en.wikipedia.org/wiki/Thermoelectric_effect',
    ];
    $coolers = ['coolers'=>'are an essential component of any computing system, as
                    they help to regulate the temperature of the central processing unit (CPU) and other critical components of
                    the computer. The cooling system is crucial because the performance and lifespan of the computer&#39;s
                    components can be negatively affected by excessive heat.',

                'passiveAndActivePassive'=>'<a href="https://www.cybernetman.com/blog/fanless-cooling-how-it-works-and-why-you-need-it/">passive</a> and
                    <a href="https://www.pcmag.com/encyclopedia/term/active-cooling#:~:text=Active%20cooling%20uses%20a%20fan,allow%20the%20air%20to%20dissipate.">active</a> cooling.
                    Passive cooling systems use natural convection or airflow to remove heat from the computer.
                    Passive cooling systems are typically made up of heat sinks or radiators that absorb heat from the CPU
                    and other components and disperse it through a series of fins or pipes.',

                'passiveAndActiveActive'=>'active cooling uses a fan or pump to create
                    forced airflow or liquid circulation to remove heat from the computer. Active cooling is typically more
                    effective than passive cooling because it can move air or liquid at a higher velocity, thus removing
                    heat more efficiently.',

                'types'=>'including air-cooled, liquid-cooled, and thermoelectric coolers.',

                'air'=>'Air-cooled systems',

                'common'=>'are the most common and use fans to blow air over the heat sink, which in turn dissipates heat from the CPU.',

                'liquid'=>'Liquid-cooled systems',

                'pump'=>', on the other hand, use a pump to circulate liquid through a radiator to remove heat from the CPU and other components.',

                'thermoelectric'=>'Thermoelectric coolers',

                'peltier'=>'use the Peltier effect to cool the CPU by creating a temperature differential between two surfaces.',

                'ssc'=>'there have been advancements in solid-state cooling technology, which uses materials that can transfer heat without the need for a fan or liquid. These materials are known as thermoelectric materials and can be used to create solid-state heat sinks or coolers that can be incorporated into a computer&#39;s cooling system.',

                'laserCooling'=>'This is a fascinating phenomenon in physics that involves the use of lasers to cool atoms or molecules down to extremely low temperatures, often close to absolute zero. It relies on the principles of quantum mechanics and involves manipulating the motion of particles through the absorption and emission of photons.',

                'dopplerCooling'=>'This method utilizes the Doppler effect to slow down the movement of atoms or molecules. Laser beams are directed at the particles, and as they absorb and re-emit photons, their momentum changes. By carefully tuning the frequency of the lasers, the particles can be slowed down significantly.',

                'sisyphus'=>'In this technique, particles are trapped in a periodic potential, often created by intersecting laser beams. As the particles move through this potential, they exchange kinetic energy with the light field, leading to further cooling.',

                'evaporative'=>'Once the particles are sufficiently cooled using techniques like Doppler and Sisyphus cooling, evaporative cooling can be employed to further reduce their temperature. This involves selectively removing the highest-energy particles from the system, leaving behind a colder ensemble.',

                'laserCoolingSummary'=>'In summary, computer coolers are essential to ensure that the CPU and other critical components of a computer are kept within safe operating temperatures. Active cooling systems, including air-cooled, liquid-cooled, and thermoelectric coolers, are more effective than passive cooling systems and can help extend the lifespan and improve the performance of a computer. Solid-state cooling technology is also an emerging technology that has the potential to improve computer cooling systems further.',

                'airCooling'=>'Air coolers are the most common type of CPU cooler. They consist of a heat-sink with metal fins and one or more fans mounted on top or alongside the fins.',

                'airCooling2'=>'The fan(s) blow air over the heat-sink, dissipating heat from the CPU. Heat pipes, often embedded in the heat-sink, help conduct heat away from the CPU to the fins where it can be dispersed.',

                'liquidCooling'=>'Liquid coolers, also known as water coolers, use a closed-loop system to transfer heat away from the CPU.',

                'liquidCooling2'=>'A pump circulates a coolant (usually water mixed with a coolant additive) through tubes connected to a radiator. The radiator dissipates heat into the surrounding air, and the cooled coolant is then pumped back to the CPU block to absorb more heat.',

                'solidStateCooling'=>'Solid-state coolers use thermoelectric materials to transfer heat without the need for fans or liquid.',

                'solidStateCooling2'=>'These materials create a temperature gradient when an electric current is applied, enabling heat transfer. Solid-state coolers are still emerging and hold potential for compact and efficient cooling solutions.',

                'tec'=>['TECs utilize the','Peltier effect','to cool the CPU.','When an electrical current is applied to a thermoelectric module, it creates a temperature differential between its two surfaces. One side becomes hot while the other side becomes cold, effectively cooling the CPU. However, TECs are less common due to their high power consumption and complexity.'],

                'hybrid'=>['Hybrid coolers combine elements of both air and liquid cooling systems.',
                    'They typically feature a liquid cooling loop for the CPU with an integrated air cooler for other components such as VRMs (Voltage Regulator Modules) or RAM.'],

                'pcc'=>['Phase change cooling systems use refrigerants to cool the CPU.','The refrigerant undergoes phase changes from liquid to gas and back, absorbing heat during evaporation and releasing it during condensation. While highly effective, phase change cooling systems are expensive and complex, making them impractical for most users.'],

                'factors'=>['Ensure it fits within the case without obstructing other components.','Check if the cooler is compatible with your CPU socket type.','Consider the TDP (Thermal Design Power) rating and cooling capacity of the cooler relative to your CPU\'s power consumption and heat output.',
                    'Follow manufacturer guidelines for installation to ensure proper contact between the cooler and CPU.',
                    'Regularly clean dust and debris from air cooler fins and radiator fins in liquid cooling systems to maintain optimal airflow.',
                    'Computer coolers play a crucial role in maintaining optimal temperatures for CPUs and other components. Understanding the different types of coolers and their operation can help users make informed decisions when selecting cooling solutions for their systems. As technology advances, new cooling methods and innovations continue to emerge, offering improved efficiency and performance for computer systems.']
    ];




    /*/====================================================\
    |                                                    |
    |   // Search for the item in the array              |
    |                                                    |
    |   $search_item = 'Lasers';                         |
    |                                                    |
    |   $index = array_search($search_item, $titles);    |
    |                                                    |
    |   if ($index !== false) {                          |
    |       echo "$search_item is in the array           |
    |       at index $index.";                           |
    |   } else {                                         |
    |       echo "$search_item is not in the array.";    |
    |   }                                                |
    |                                                    |
    |   %^&Lasers is in the array at index 17.%^&        |
    |                                                    |
    |                                                    |
    \====================================================/
    */
        ?>
        <article class="hero4 container">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <style>
    .cooler_button {
        text-align: center;
        background-color: #91c9b7;
        display: flex;
        flex-direction: column;
    }

    .cooler2_button :hover {
        background-color: #b3f6e0;
        cursor: pointer;
    }

    .cooler_button :hover {
        background-color: #b3f6e0;
        cursor: pointer;
    }
    </style>
    <section class="fullbar" >
    <a href="./#peripherals">
        <h2 id="cooler"><?= empty($titles[0]) ? $titulos[0] : $titles[0];?></h2>
    </a>

        <p><a href="#fans"><?= empty($titles[1]) ? $titulos[1] : $titles[1];?></a> <a
                href="#liquid-coolers"><?= empty($titles[20]) ? $titulos[20] : $titles[20];?></a> <a
                href="#solid-state-coolers"><?= empty($titles[2]) ? $titulos[2] : $titles[2];?></a>&nbsp;<a
                href="#TECS"><?= empty($titles[21]) ? $titulos[21] : $titles[21];?></a>&nbsp;<a
                href="#phase-change-cooling"><?= empty($titles[3]) ? $titulos[3] : $titles[3];?></a></p>
        <p class="container"><a href="<?= empty($links[0]) ? $links[0] : $links[0];?>"
                style="font-size: x-large;"><?= empty($titles[4]) ? $titulos[4] : $titles[4];?></a>
            <?= empty($coolers['coolers']) ? $enfriador['enfriador'] : $coolers['coolers'];?></p>
        <div class="container">
            <div class="rtl"><a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/coolers.jpg"
                    title="Chilling Cooler"><img src="https://latinospc.com/images/hardware/hw/cooling/coolers.webp"
                        alt="Chilling Cooler"></a></div>
            <p><span style="font-size: x-large;"><?= empty($titles[5]) ? $titulos[5] : $titles[5];?></span>
                <?= empty($coolers['passiveAndActivePassive']) ? $enfriador['pasivoYActivoPasivo'] : $coolers['passiveAndActivePassive'];?>
            </p>
            <p><span style="font-size: x-large;"><?= empty($titles[18]) ? $titulos[18] : $titles[18];?></span>
                <?= empty($coolers['passiveAndActiveActive']) ? $enfriador['pasivoYActivoActivo'] : $coolers['passiveAndActiveActive'];?>
            </p>
            <p><span style="font-size: x-large;"><?= empty($titles[19]) ? $titulos[19] : $titles[19];?></span>
                <?= empty($coolers['types']) ? $enfriador['tipos'] : $coolers['types'];?></p>
            <p>&nbsp;<a href="<?= empty($links[1]) ? $links[1] : $links[1];?>"
                    title="VIDEO"><?= empty($coolers['air']) ? $enfriador['aire'] : $coolers['air'];?></a>
                <?= empty($coolers['common']) ? $enfriador['comun'] : $coolers['common'];?>
            </p>
            <p>&nbsp;<a href="<?= empty($links[2]) ? $links[2] : $links[2];?>"
                    title="VIDEO"><?= empty($coolers['liquid']) ? $enfriador['liquido'] : $coolers['liquid'];?></a>
                <?= empty($coolers['pump']) ? $enfriador['bomba'] : $coolers['pump'];?></p>
            <p><a href="<?= empty($links[3]) ? $links[3] : $links[3];?>">
                    <?= empty($coolers['thermoelectric']) ? $enfriador['termoelectrico'] : $coolers['thermoelectric'];?></a>
                <?= empty($coolers['peltier']) ? $enfriador['peltier'] : $coolers['peltier'];?></p>
            <p><span style="font-size: x-large;"><?= empty($titles[22]) ? $titulos[22] : $titles[22];?></span>
                <?= empty($coolers['ssc']) ? $enfriador['ees'] : $coolers['ssc'];?></p>
        </div>
        <details>
            <summary style="text-align: center;" class="hero4 cooler_button cooler2_button">
                <h2 id="Laser-Cooling" style="display: inline-block;">
                    <?= empty($titles[17]) ? $titulos[17] : $titles[17];?></h2>
                <?php
                /*<a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/lazer.jpg"
                    title="Laser Cooling"><img src="https://latinospc.com/images/hardware/hw/cooling/lazer.webp" alt="Laser Cooling"
                        height="30px" style="transform: translate(175px, 10px);"></a>*/
                        ?>
            </summary>
            <fieldset class="container card2"><a rel="example_group"
                    href="https://latinospc.com/images/hardware/hw/cooling/lasers.jpg" title="Laser Cooling"
                    class="rtl"><img src="https://latinospc.com/images/hardware/hw/cooling/lasers.webp"
                        alt="Laser Cooling" height="120px"width="120px"></a>
                <p>
                    <?= empty($coolers['laserCooling']) ? $enfriador['enfriadorLaser'] : $coolers['laserCooling'];?>
                </p>
                <p>
                <dl>
            </fieldset>
            <fieldset class="container card2">
                <legend>
                    <p><?= empty($titles[6]) ? $titulos[6] : $titles[6];?></p>
                </legend>
                <dt><a href="<?= empty($links[4]) ? $links[4] : $links[4];?>">
                        <?= empty($titles[7]) ? $titulos[7] : $titles[7];?></a>
                </dt>
                <dd><?= empty($coolers['dopplerCooling']) ? $enfriador['enfriadorDoppler'] : $coolers['dopplerCooling'];?>
                </dd>
                <dt><a href="<?= empty($links[5]) ? $links[5] : $links[5];?>">
                        <?= empty($titles[23]) ? $titulos[23] : $titles[23];?></a>
                </dt>
                <dd>
                    <?= empty($coolers['sisyphus']) ? $enfriador['sisyphus'] : $coolers['sisyphus'];?>
                </dd>
                <dt><a href="<?= empty($links[6]) ? $links[6] : $links[6];?>">
                        <?= empty($titles[24]) ? $titulos[24] : $titles[24];?></a></dt>
                <dd>
                    <?= empty($coolers['evaporative']) ? $enfriador['evaporativo'] : $coolers['evaporative'];?>
                </dd>
                <dl>
                    </p>
        </details>
        </fieldset>
        <p class="container card2">
            <?= empty($coolers['laserCoolingSummary']) ? $enfriador['resumenEnfriadorLaser'] : $coolers['laserCoolingSummary'];?>
        </p>
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** Cooling Devices -->
        <br />
    </section>
    <section class="fullbar">
        <details>
            <summary class="cooler_button cooler2_button center">
                <h2><?= empty($titles[8]) ? $titulos[8] : $titles[8];?></h2>
            </summary>
            <ul class="container colms2">
                <li class="card2">
                    <h2 id="fans"><?= empty($titles[9]) ? $titulos[9] : $titles[9];?></h2>
                    <p><?= empty($coolers['airCooling']) ? $enfriador['enfriadoAire'] : $coolers['airCooling'];?></p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/aircool.jpg"
                        class="fl" title="Air Cooling"><img
                            src="https://latinospc.com/images/hardware/hw/cooling/aircool.webp" height="100px"
                            alt="Air Cooling"></a>
                    <p><?= empty($coolers['airCooling2']) ? $enfriador['enfriadoAire2'] : $coolers['airCooling2'];?></p>
                </li>
                <li class="card2">
                    <h2 id="liquid-coolers"><?= empty($titles[10]) ? $titulos[10] : $titles[10];?></h2>
                    <p><?= empty($coolers['liquidCooling']) ? $enfriador['enfriadoLiquido'] : $coolers['liquidCooling'];?>
                    </p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/liquid.jpg" class="fl"
                        title="Liquid Cooling"><img src="https://latinospc.com/images/hardware/hw/cooling/liquid.webp"
                            height="100px" alt="Liquid Cooling"></a>
                    <p><?= empty($coolers['liquidCooling2']) ? $enfriador['enfriadoLiquido2'] : $coolers['liquidCooling2'];?>
                    </p>
                </li>
                <li class="card2">
                    <h2 id="solid-state-coolers"><?= empty($titles[11]) ? $titulos[11] : $titles[11];?></h2>
                    <p><?= empty($coolers['solidStateCooling']) ? $enfriador['enfriadoEstadoSolido'] : $coolers['solidStateCooling'];?>
                    </p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/ssc.jpg" class="fl"
                        title="Solid-State Cooling"><img src="https://latinospc.com/images/hardware/hw/cooling/ssc.webp"
                            height="100px" alt="Solid-State Cooling"></a>
                    <p><?= empty($coolers['solidStateCooling2']) ? $enfriador['enfriadoEstadoSolido2'] : $coolers['solidStateCooling2'];?>
                    </p>
                </li>
                <li class="card2">
                    <h2 id="TECS"><?= empty($titles[12]) ? $titulos[12] : $titles[12];?></h2>
                    <p><?= empty($coolers['tec'][0]) ? $enfriador['tec'][0] : $coolers['tec'][0];?>
                        <a href="<?= empty($links[7]) ? $links[7] : $links[7];?>">
                            <?= empty($coolers['tec'][1]) ? $enfriador['tec'][1] : $coolers['tec'][1];?></a>
                        <?= empty($coolers['tec'][2]) ? $enfriador['tec'][2] : $coolers['tec'][2];?>
                    </p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/tec.jpg" class="rtl"
                        title="Thermoelectric Coolers"><img
                            src="https://latinospc.com/images/hardware/hw/cooling/tec.webp" height="100px"
                            alt="TECs"></a>
                    <p><?= empty($coolers['tec'][3]) ? $enfriador['tec'][3] : $coolers['tec'][3];?></p>
                </li>
                <li class="card2">
                    <h2 id="hybrid-coolers"><?= empty($titles[13]) ? $titulos[13] : $titles[13];?></h2>
                    <p><?= empty($coolers['hybrid'][0]) ? $enfriador['hibrido'][0] : $coolers['hybrid'][0];?></p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/hybrid.jpg"
                        class="rtl" title="Hybrid Cooling"><img
                            src="https://latinospc.com/images/hardware/hw/cooling/hybrid.webp" height="100px"
                            alt="Hybrid Cooling"></a>
                    <p><?= empty($coolers['hybrid'][1]) ? $enfriador['hibrido'][1] : $coolers['hybrid'][1];?></p>
                </li>
                <li class="card2">
                    <h2 id="phase-change-cooling"><?= empty($titles[14]) ? $titulos[14] : $titles[14];?></h2>
                    <p><?= empty($coolers['pcc'][0]) ? $enfriador['pcc'][0] : $coolers['pcc'][0];?></p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/pcc.jpg" class="rtl"
                        title="Phase Change Cooling"><img
                            src="https://latinospc.com/images/hardware/hw/cooling/pcc.webp" height="100px"
                            alt="Phase Change Cooling"></a>
                    <p><?= empty($coolers['pcc'][1]) ? $enfriador['pcc'][1] : $coolers['pcc'][1];?></p>
                </li>
            </ul>
        </details>
        <dl>
            <dt>
                <h2><?= empty($titles[25]) ? $titulos[25] : $titles[25];?></h2>
            <dt>
                <p>
            <dd><strong><?= empty($titles[26]) ? $titulos[26] : $titles[26];?></strong>
                <?= empty($coolers['factors'][0]) ? $enfriador['factores'][0] : $coolers['factors'][0];?>
                <hr>
            </dd>
            <dd><strong><?= empty($titles[27]) ? $titulos[27] : $titles[27];?></strong>
                <?= empty($coolers['factors'][1]) ? $enfriador['factores'][1] : $coolers['factors'][1];?>
                <hr>
            </dd>
            <dd><strong><?= empty($titles[28]) ? $titulos[28] : $titles[28];?></strong>
                <?= empty($coolers['factors'][2]) ? $enfriador['factores'][2] : $coolers['factors'][2];?></dd>
            </p>
            <dt>
                <h2><?= empty($titles[15]) ? $titulos[15] : $titles[15];?></h2>
            </dt>
            <p>
                <dd><?= empty($coolers['factors'][3]) ? $enfriador['factores'][3] : $coolers['factors'][3];?>
                </dd>
                <dd><?= empty($coolers['factors'][4]) ? $enfriador['factores'][4] : $coolers['factors'][4];?></dd>
            </p>
        </dl>
        <h2><?= empty($titles[16]) ? $titulos[16] : $titles[16];?></h2>
        <p><?= empty($coolers['factors'][5]) ? $enfriador['factores'][5] : $coolers['factors'][5];?></p>
    </section>
    </article>
    <?php
}

function hw_input_devices() {
    echo "<h1 class=\"fullbar\">Input Devices</h1>";
}

function hw_output_devices() {
    echo "<h1 class=\"fullbar\">Output Devices</h1>";
}

function hw_peripherals_and_gear() {
    $title="<h2>The Hardware is the computer — it&#39;s physical components.</h2>";

    $description ="<p>These components may include the computer&#39;s
        functionality, design, materials, innovations, thermals, etc.<br />A computer is an electronic device that
        manipulates data or information. It has the ability to store,retrieve, and process data.<p>     <!--https://unsplash.com/photos/2sILr4DwabQ-->
        <h3><a href=\"https://latinospc.com/hardware/?anatomy_of_a_computer#navi\">The anatomy of a computer</a> typically includes,
    <a href=\"https://latinospc.com//hardware/?notebooks#navi\">Laptops</a>, Portable, Smart Devices, Modular PC's, ETC.</h3>";

    $contentSubTitles= ["Computer Parts",       "Central Processing Unit (CPU):",       "Memory (RAM):",        "Memory Storage Drive (hard drive, SSD):",
                            "Motherboard:",        "Power Supply Unit (PSU):",      "GPU:",       "Chassis:",       "Coolers",      "Input/Output devices:", "Peripheral devices:"  ];

    $content=['CPU' =>  "The \"brain\" of the computer, responsible for carrying out instructions of computer programs.",
                'RAM' =>  "Stores data that the CPU uses in the short-term.",
                    'HDD' =>  "Persistently stores data, even when the computer is powered off.",
                        'Motherboard' =>  "The main circuit board in a computer, which houses the CPU, memory, and other components.&nbsp;",
                            'PSU' =>  "Converts AC power from a wall outlet into DC power used by the computer.",
                                'GPU' =>  "specialized Graphic Processing Unit (GPU) that handles the computational heavy lifting needed for tasks.&nbsp ",
                                    'Chassis' =>  "Houses all the internal components a computer needs.",
                                        'Coolers' =>  "Help to regulate the temperature of the central processing unit (CPU) and other critical components of the computer.",
                'I/O' =>  "Allow data to be input into the computer (such as a keyboard and mouse) and output from the computer (such as a display and speakers).&nbsp",
                'Peripherals' =>  "Additional hardware connected to a computer, such as printers, scanners, and external hard drives.&nbsp"
             ];
    $peripherals = [
    "Mouse",
    "Keyboard",
    "Display",
    "External Memory Drives",
    "PCI Cards",
    "Power Supply",
    "Cooling",
    "GPU",
    "Scanners",
    "Printers",
    "Console Controllers",
    "Joystick",
    "Tablets",
    "Microphones",
    "Headsets",
    "Headphones",
    "Audio Mixers",
    "Controllers",
    "Gaming Uniforms",
    "Pens, Pencils & Tablets",
    "Chairs",
    "Desks",
    "Anti-Slip Mats",
    "Speakers and Subwoofers",
    "Peripherals",
    ];
    $peripherals = [
    "Mouse",
    "Keyboard",
    "Display",
    "External Memory Drives",
    "PCI Cards",
    "Power Supply",
    "Cooling",
    "GPU",
    "Scanners",
    "Printers",
    "Console Controllers",
    "Joystick",
    "Tablets",
    "Microphones",
    "Headsets",
    "Headphones",
    "Audio Mixers",
    "Controllers",
    "Gaming Uniforms",
    "Pens, Pencils & Tablets",
    "Chairs",
    "Desks",
    "Anti-Slip Mats",
    "Speakers and Subwoofers",
    "Peripherals",
    ];

    $hardwareTitles = [
        'cc'   => 'Console Controllers',
        'cpu'  => 'CPU',
        'ram'  => 'RAM',
        'ssd'  => 'SSD',
        'psu'  => 'PSU',
        'gpu'  => 'Graphics Cards',
        'pci'  => 'PCI Cards',
        'mouse' => 'Mouse',
        'desk'  => 'Desks',
        'chair'  => 'Chairs',
        'cooling'=> 'Cooling',
        'tablet' => 'Tablets',
        'micro'  => 'Microphones',
        'monitor' => 'Display',
        'headset' => 'Headsets',
        'printer' => 'Printers',
        'scanner' => 'Scanners',
        'chassis'  => 'Computer Case',
        'keyboard'  => 'Keyboard',
        'joystick'  => 'Joysticks',
        'headphone' => 'Headphones',
        'p_memory'  => 'Portable Memory',
        'controller' => 'Controllers',
        'audiomixer' => 'Audio Mixers',
        'motherboard' => 'Motherboard',
        'pencil' => 'Pens, Pencils and Tablets',
        'antislipmats' => 'Anti-Slip Mats',
        'speakers_and_subwoofers' => 'Speakers and Subwoofers',
        'team_uniformity_authority' => 'Uniforms'
    ];
    ?>
    <section class="peripherals-section fullbar">
    <div class="peripherals-header">
        <a href="#scroll" class="peripherals-title-link">
            <h1 id="peripherals" class="peripherals-title">
                <?= empty($peripherals[24]) ? $perifericos[24] : $peripherals[24];?>
            </h1>
        </a>
    </div>

    <div class="peripherals-container">
        <div class="peripherals-grid">


            <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?mouse', $es='?ratón'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $mouse = empty($peripherals[0]) ? $perifericos[0] : $peripherals[0]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/mouse.jpg" alt="<?= $mouse; ?>" title="<?= $mouse; ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?keyboard', $es='?teclado'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= $keyboard = empty($peripherals[1]) ? $perifericos[1] : $peripherals[1]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/keyboard.jpg" alt="<?= $keyboard; ?>" title="<?= $keyboard; ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="output" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?monitor', $es='?pantalla'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[2]) ? $perifericos[2] : $peripherals[2]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/monitor.jpg"
                                alt="<?= hw_alt($hw, $en='Display', $es='Pantalla'); ?>"
                                title="<?= hw_title($hw, $en='Computer Monitor', $es='Pantalla de la computadora'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="storage" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?p_memory', $es='?memoria_externa'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[3]) ? $perifericos[3] : $peripherals[3]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/portable.jpg"
                                alt="<?= hw_alt($hw, $en='External Drives', $es='Memoria Externa'); ?>"
                                title="<?= hw_title($hw, $en='External Drives', $es='Memoria Externas'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="component" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?pci', $es='?tarjeta_pci'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[4]) ? $perifericos[4] : $peripherals[4]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/soundcard.jpg"
                                alt="<?= hw_alt($hw, $en='PCI Cards', $es='Tarjetas PCI'); ?>"
                                title="<?= hw_title($hw, $en='Peripheral Component Interconnect Cards', $es='Componente Periférico Interconexión'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="power" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?psu', $es='?fuente_de_poder'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[5]) ? $perifericos[5] : $peripherals[5]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/psu2.png"
                                alt="<?= hw_alt($hw, $en='Power Supply', $es='Fuente de Poder'); ?>"
                                title="<?= hw_title($hw, $en='PSU', $es='Fuente de Poder'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="cooling" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?cooling', $es='?enfriamiento'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[6]) ? $perifericos[6] : $peripherals[6]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/cooler.jpg"
                                alt="<?= hw_alt($hw, $en='Cooling', $es='Enfriamiento'); ?>"
                                title="<?= hw_title($hw, $en='Cooling', $es='Enfriamiento'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="graphics" featured tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?gpu', $es='?tarjeta_grafica'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[7]) ? $perifericos[7] : $peripherals[7]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/gpu.png"
                                alt="<?= hw_alt($hw, $en='GPU', $es='Tarjeta Gráfica'); ?>"
                                title="<?= hw_title($hw, $en='GPU', $es='Tarjeta Gráfica'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?scanner', $es='?escáner'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[8]) ? $perifericos[8] : $peripherals[8]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/scanner.png"
                                alt="<?= hw_alt($hw, $en='Scanners', $es='Escáneres'); ?>"
                                title="<?= hw_title($hw, $en='Scanners', $es='Escáneres'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="output" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?printer', $es='?impresoras'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[9]) ? $perifericos[9] : $peripherals[9]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/printer.png"
                                alt="<?= hw_alt($hw, $en='Printers', $es='Impresoras'); ?>"
                                title="<?= hw_title($hw, $en='Printers', $es='Impresoras'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="gaming" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?cc', $es='?mando_de_consola'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[10]) ? $perifericos[10] : $peripherals[10]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/controllers.png"
                                alt="<?= hw_alt($hw, $en='Controllers', $es='Mandos de Consola'); ?>"
                                title="<?= hw_title($hw, $en='Video Game Controllers', $es='Mandos de Videojuego'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="gaming" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?joystick', $es='?joystick'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[11]) ? $perifericos[11] : $peripherals[11]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/joystick.png"
                                alt="<?= hw_alt($hw, $en='Joysticks', $es='Joysticks'); ?>"
                                title="<?= hw_title($hw, $en='Joysticks', $es='Joysticks'); ?>">
                        </div>
                    </div>
                </a>
            </div>

                              <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?tablet', $es='?tabletas'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[12]) ? $perifericos[12] : $peripherals[12]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/tablets.png"
                                alt="<?= hw_alt($hw, $en='Tablets', $es='Tabletas'); ?>"
                                title="<?= hw_title($hw, $en='Tablets', $es='Tabletas'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?micro', $es='?micrófonos'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[13]) ? $perifericos[13] : $peripherals[13]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/mic.jpg"
                                alt="<?= hw_alt($hw, $en='Microphone', $es='Micrófono'); ?>"
                                title="<?= hw_title($hw, $en='Microphone', $es='Micrófono'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?headset', $es='?headsets'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[14]) ? $perifericos[14] : $peripherals[14]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/headset.png"
                                alt="<?= hw_alt($hw, $en='Headsets', $es='Headsets'); ?>"
                                title="<?= hw_title($hw, $en='Headsets', $es='Headsets'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?headphone', $es='?audífonos'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[15]) ? $perifericos[15] : $peripherals[15]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/headphones.png"
                                alt="<?= hw_alt($hw, $en='Headphones', $es='Audífonos'); ?>"
                                title="<?= hw_title($hw, $en='Headphones', $es='Audífonos'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?audiomixer', $es='?mezcladora_de_audio'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[16]) ? $perifericos[16] : $peripherals[16]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/mixer.jpg"
                                alt="<?= hw_alt($hw, $en='Audio Mixer', $es='Mezcladora de Audio'); ?>"
                                title="<?= hw_title($hw, $en='Audio Mixer', $es='Mezcladora de Audio'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="gaming" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?controller', $es='?controladores'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[17]) ? $perifericos[17] : $peripherals[17]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/controller.jpg"
                                alt="<?= hw_alt($hw, $en='Controllers', $es='Controladores'); ?>"
                                title="<?= hw_title($hw, $en='Controllers', $es='Controladores'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="gaming" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?team_uniformity_authority', $es='?uniformes_gaming'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[18]) ? $perifericos[18] : $peripherals[18]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/uniforms.jpg"
                                alt="<?= hw_alt($hw, $en='Uniforms', $es='Uniformes'); ?>"
                                title="<?= hw_title($hw, $en='Gaming Uniforms', $es='Uniformes Gaming'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="input" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?pencil', $es='?lápices_plumas_tabletas'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[19]) ? $perifericos[19] : $peripherals[19]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/pensandpencils.jpg"
                                alt="<?= hw_alt($hw, $en='Pens and Pencils and Stylus', $es='Lápices, Plumas y Tabletas'); ?>"
                                title="<?= hw_title($hw, $en='Pens and Pencils and Stylus', $es='Lápices, Plumas y Tabletas'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="furniture" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?chair', $es='?sillas'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[20]) ? $perifericos[20] : $peripherals[20]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/chairs.jpg"
                                alt="<?= hw_alt($hw, $en='Chairs', $es='Sillas'); ?>"
                                title="<?= hw_title($hw, $en='Chairs', $es='Sillas'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="furniture" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?desk', $es='?escritorios'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[21]) ? $perifericos[21] : $peripherals[21]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/desk.jpg"
                                alt="<?= hw_alt($hw, $en='Desks', $es='Escritorios'); ?>"
                                title="<?= hw_title($hw, $en='Desks', $es='Escritorios'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="accessories" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?antislipmats', $es='?alfombrillas_antideslizantes'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[22]) ? $perifericos[22] : $peripherals[22]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/anti-slip-mat.jpg"
                                alt="<?= hw_alt($hw, $en='Anti Slip Mats', $es='Alfombrillas Antideslizantes'); ?>"
                                title="<?= hw_title($hw, $en='Anti Slip Mats', $es='Alfombrillas Antideslizantes'); ?>">
                        </div>
                    </div>
                </a>
            </div>

            <div class="peripheral-card" data-type="audio" tabindex="0">
                <a class="peripheral-link" href="<?= hw_Link($hw, $en='?speakers_and_subwoofers', $es='?bocinas_y_subwoofers'); ?>">
                    <div class="peripheral-content">
                        <h3 class="peripheral-name"><?= empty($peripherals[23]) ? $perifericos[23] : $peripherals[23]; ?></h3>
                        <div class="peripheral-image">
                            <img src="https://latinospc.com/images/hardware/hw/speakers.jpg"
                                alt="<?= hw_alt($hw, $en='Speakers and Subwoofers', $es='Bocinas y Subwoofers'); ?>"
                                title="<?= hw_title($hw, $en='Speakers and Subwoofers', $es='Bocinas y Subwoofers'); ?>">
                        </div>
                    </div>
                </a>
            </div>
                <!-- Photo by Rosen Genov from Pexels: https://www.pexels.com/photo/a-presonus-speaker-system-4295360/ --></a>



        </div>
        </div>

    </section>
    <?php
}

function hw_mouse(){
    ?>
    <section class="fullbar">
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** --><article class="article">



    <a href="./#peripherals"><h1 id="mouse">Mice</h1></a>
    <div class="colms2"><img class="fl"alt="" width="200" src="http://latinospc.com/images/artificialintelligence/mouse/thumbs/left.png" title="Your best friend"/>
    <ul class="ex_menu">
    <h1><li><a href="#sensor_technology">Sensor&nbsp;Technology</a></li></h1>
    <h1><li><a href="#ergonomics">Ergonomics</a></li></h1>
    <h1><li><a href="#connectivity">Connectivity</a></li></h1>
    <h1><li><a href="#software_feature">Software&nbsp;features</a></li></h1>
    <h1><li><a href="#durability">Durability</a></li></h1>
    </ul></div><section>


    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--Trabajo1.text--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <h2>Inception and Evolution of Computer Mouse Technology</h2>
    <h3>The computer mouse was invented by Douglas Engelbart in 1963, while he was working at the Stanford Research Institute. The original design of the mouse included two perpendicular wheels that could detect the direction of movement. Later, the design was improved to include a ball that rolled on two axes, detecting the direction of movement and transmitting this information to the computer.</h3>
    <h3>In the 1980s, the mouse became a popular peripheral for personal computers, particularly with the rise of the graphical user interface (GUI) and the introduction of the Apple Macintosh computer. Over time, the mouse has continued to evolve, with new designs and features that make it more ergonomic and easier to use.</h3>
    <h3>In the early 2000s, the mouse began to see competition from other input devices such as touchscreens, trackpads, and styluses. However, the mouse remains a popular and essential tool for many computer users, particularly for tasks that require precision and accuracy.</h3>
    <h3><a href="#mouse" id="Inception and Evolution of Computer Mouse Technology"><img alt="A small green rectangle to divide sections of the document" height="3" src="http://latinospc.com/images/green_rectangle.png" style="margin-left:0px;margin-top:0px;" title="Divider Line" width="44" /></a></h3>
    <h2>Future of Computer Mouse Technology</h2>
    <h3>The future of computer mouse technology is likely to continue its evolution towards more ergonomic designs and more advanced features. Some current trends in mouse design include the use of wireless connectivity and improved sensors for greater accuracy.</h3>
    <h3>In addition, there is ongoing research into new input technologies that could eventually replace the mouse altogether. For example, there are prototypes for devices that use eye-tracking or brain-computer interfaces to control a computer. However, these technologies are still in the early stages of development and are not yet widely available.</h3>
    <h3>Overall, it is likely that the computer mouse will continue to be an important tool for computer users for the foreseeable future, even as new input technologies emerge.</h3>
    <a href="#mouse"><h3><img alt="A small green rectangle to divide sections of the document" height="3" src="http://latinospc.com/images/green_rectangle.png" style="margin-left:0px;margin-top:0px;" title="Divider Line" width="44" /></h3></a></section><section>
    <h2>About the Mouse</h2>
    <h3>The computer mouse is a versatile input device that is used for a wide range of applications. Some of the most common use cases and applications for a computer mouse include:</h3>


    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--Trabajo2.text--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <ol style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    	<li>	<h3>Pointing and clicking: The primary use of the mouse is to move the cursor on the screen and click on icons, links, buttons, and other graphical elements.</h3>
    	</li>
    	<li>	<h3>Scrolling: The mouse wheel allows you to scroll up and down on a webpage, document, or other content.</h3>
    	</li>
    	<li>	<h3>Drag and drop: The mouse can be used to select and drag files, folders, and other objects, and drop them into new locations.</h3>
    	</li>
    	<li>	<h3>Navigation: In addition to pointing and clicking, the mouse can be used to navigate through menus, toolbars, and other user interface elements.</h3>
    	</li>
    	<li>	<h3>Drawing and design: The mouse is a popular tool for graphic designers, artists, and other professionals who need to create and edit digital artwork.</h3>
    	</li>
    	<li>	<h3>Gaming: The mouse is a critical input device for PC gaming, allowing players to move and control characters, objects, and weapons in video games.</h3>
    	</li>
    	<li>	<h3>Accessibility: For individuals with certain disabilities or mobility impairments, the mouse can be an important assistive technology that allows them to interact with a computer and access digital content.</h3>
    	</li>
    	<li>	<h3>Productivity: The mouse can be used to increase productivity by allowing users to perform tasks quickly and efficiently, such as copying and pasting text, resizing windows, and switching between applications.</h3>
    	</li>
    	<li>	<h3>3D modeling: In addition to drawing and design, the mouse is also used in 3D modeling applications to control the movement and rotation of objects in a virtual space.</h3>
    	</li>
    </ol>
    <h3>These are just some of the most common use cases and applications for a computer mouse. As technology evolves, the mouse is likely to continue to be an important input device for a wide range of tasks and industries.</h3>


    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--Trabajo3.text--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->

    <h3><a href="#mouse"><img alt="A small green rectangle to divide sections of the document" height="3" src="http://latinospc.com/images/green_rectangle.png" style="margin-left:0px;margin-top:0px;" title="Divider Line" width="44" /></a></h3></section><section>
    <h2>Trends</h2>
    <h3>The computer mouse has been a popular input device for several decades, but as technology continues to evolve, there are some trends that suggest that its dominance may be challenged in the future. Here are a few potential scenarios for the future of the mouse:</h3>
    <ol style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    	<li>	<h3>Gesture-based input: One possible future for input devices is the use of gestures, such as hand and finger movements, to control computer interfaces. This could be accomplished with cameras, sensors, or other technologies that can detect and interpret gestures in real-time. While this type of input is still in its early stages, it has the potential to provide more natural and intuitive interaction than traditional mouse and keyboard input.</h3>
    	</li>
    	<li>	<h3>Touchscreens: Touchscreens are already a popular input method for mobile devices and some laptops, and they could become more widespread in desktop computing as well. With the increasing availability of large, high-resolution touchscreens, users may be able to interact with their computers through touch gestures rather than a mouse.</h3>
    	</li>
    	<li>	<h3>Voice and AI-based interfaces: Another potential future for input devices is the use of voice commands and artificial intelligence (AI) to control computer interfaces. With the development of natural language processing and machine learning technologies, users may be able to interact with their computers through voice commands and have their requests interpreted and executed by AI assistants.</h3>
    	</li>
    	<li>	<h3>Augmented and virtual reality: As augmented and virtual reality technologies continue to develop, they may offer new ways of interacting with digital content beyond the traditional mouse and keyboard. For example, users may be able to use hand gestures or other movements to manipulate virtual objects in 3D space.</h3>
    	</li>
    </ol>
    <a href="#mouse"><img alt="A small green rectangle to divide sections of the document" height="3" src="http://latinospc.com/images/green_rectangle.png" style="margin-left:0px;margin-top:0px;" title="Divider Line" width="44" /></a>
    <a href="#mouse"><img alt="A small green rectangle to divide sections of the document" height="3" src="http://latinospc.com/images/green_rectangle.png" style="margin-left:0px;margin-top:0px;" title="Divider Line" width="44" /></a>
    <a href="#mouse"><img alt="A small green rectangle to divide sections of the document" height="3" src="http://latinospc.com/images/green_rectangle.png" style="margin-left:0px;margin-top:0px;" title="Divider Line" width="44" /></a></section></article><article class="article">
    <h2><a href="#mouse">Features</a></h2>
    <h3>The features of a computer mouse can vary depending on the type of mouse, its price point, and the intended use case. Here are some of the key features that can distinguish an inexpensive mouse from a more expensive market-tested mouse:</h3>
    <h3 id="sensor_technology">Sensor technology:</h3>
    <h3>Higher-end mice tend to have more advanced sensor technology that provides greater precision and accuracy, even on surfaces that are not perfectly smooth. Inexpensive mice may have lower quality optical or laser sensors that may not work as well on certain surfaces or at higher speeds.</h3>
    <h3 id="ergonomics">Ergonomics:</h3>
    <h3>More expensive mice are often designed with ergonomics in mind, with features such as contoured grips, adjustable weights, and customizable buttons that can be programmed for specific tasks. Inexpensive mice may have a more basic design and may not be as comfortable to use for long periods of time.</h3>
    <h3 id="connectivity">Connectivity:</h3>
    <h3>More expensive mice may offer wireless connectivity options such as Bluetooth or proprietary wireless protocols, while inexpensive mice are often wired and may have a shorter cable length. Wireless connectivity can provide greater flexibility and freedom of movement, but can also introduce latency and other issues.</h3>
    <h3 id="software_feature">Software features:</h3>
    <h3>Many high-end mice come with software that allows you to customize settings such as DPI (dots per inch), button assignments, and macros. These features can be useful for gamers and other power users who want to optimize their mouse for specific tasks. Inexpensive mice may not have this kind of software, or may have limited customization options.</h3>
    <h3 id="durability">Durability:</h3>
    <h3>More expensive mice are often built with higher quality materials and may have a longer lifespan than inexpensive mice. They may also come with longer warranties and better customer support. Inexpensive mice may be more prone to wear and tear, and may need to be replaced more frequently.</h3>
    <h3>Overall, the key differences between an inexpensive mouse and a market-tested one tend to be in terms of sensor technology, ergonomics, connectivity, software features, and durability. More expensive mice tend to offer better performance, greater customization options, and a more comfortable user experience, while inexpensive mice may be more basic in design and functionality. However, there are exceptions to this, and it&#39;s important to consider your specific needs and budget when choosing a mouse.</h3>
    <h3><a href="#mouse"><img alt="A small green rectangle to divide sections of the document" height="3" src="http://latinospc.com/images/green_rectangle.png" style="margin-left:0px;margin-top:0px;" title="Divider Line" width="44" /></a></h3></article>

    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** MOUSE-->

    </section>
    <?php
}

function hw_keyboard(){
    ?>
        <style>
    .oranges {
        color: rgb(255, 94, 14);
        font-size: 23pt;
    }

    .items {
        font-size: 14pt;
        color: rgb(77, 0, 19);
    }

    .keyboards {
        font-size: 18pt;
        color: rgb(0, 133, 117);
    }
    </style>
    <section class="fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <a href="./#peripherals">
        <h1 id="keyboard">
            Keyboards
        </h1>
    </a><img alt="Keyboard image with orange, white, and dark gray Key-caps" src="https://latinospc.com/images/keys.jpg" title="Keyboards"
        width="621">
    <p style="line-height: 1.2; margin-top: 16pt; text-align: center;"><span
            style="font-size: 42pt; color: rgb(105, 93, 70); font-weight: 700;">
            Keyboards
        </span></p>
    <h2 class="oranges">
        Overview
    </h2>
    <h3>
        The mechanical typewriter invented by Christopher Latham Sholes in the late 1800s, was a revolutionary device that
        could imprint letters on paper with the touch of a key, replacing the laborious task of handwriting.
    </h3>
    <h3>
        However, the original QWERTY keyboard layout that Sholes came up with had some flaws. The keys were arranged in a
        way that made typing fast difficult, as the most commonly used letters were placed far apart. The result was that
        typists would often jam the keys, causing the typewriter to stop working.
    </h3>
    <h3>
        In the early 1900s, another inventor named August Dvorak decided to solve this problem by creating a new keyboard
        layout that would make typing more efficient. His design placed the most frequently used letters in the middle row
        and arranged the keys so that the fingers would move less, reducing fatigue and increasing speed. This layout became
        known as the Dvorak Simplified Keyboard.</h3>
    <h3>
        Despite its benefits, the Dvorak keyboard didn&#39;t catch on immediately. The QWERTY keyboard had already become
        standard, and it was difficult to convince people to switch to a new system. However, some enthusiasts continued to
        promote the Dvorak keyboard, arguing that it was more comfortable and efficient.</h3>
    <h3>
        Today, electronic keyboards have replaced the old mechanical typewriters, and both QWERTY and Dvorak layouts are
        still in use. Some people even create their own custom keyboard layouts, using the latest technology to design
        keyboards that fit their individual needs.
    </h3>
    <h3>
        And so the story of the keyboard continues, evolving and adapting to the needs of each generation. Who knows what
        new innovations and designs we will see in the future?
    </h3>
    <h2 class="oranges">
        Features
    </h2>
    <h2>
        Keyboards come in many different shapes and sizes, with a variety of features that can make them unique and
        specialized for different purposes. Here are some examples of unique features you might find on keyboards:
    </h2>
    <ol>
        <h3>
            <li>
                <b class="items">Mechanical switches:</b>
                These are switches that use a physical mechanism to activate each key press, resulting in a tactile feel and
                an audible clicking sound. Mechanical keyboards are popular among gamers and typists who value the tactile
                feedback and durability of the switches.
            </li>
        </h3>
        <li>
            <h3><b class="items">Backlit keys:</b>
                Some keyboards have keys that are illuminated, making them easier to see in low light conditions. This
                feature is particularly useful for gamers and those who work in dimly lit environments.
            </h3>
        </li>
        <li>
            <h3><b class="items">Programmable keys:</b>
                Some keyboards have programmable keys that can be customized to perform specific functions or launch
                applications with a single press. This can be a time-saving feature for users who frequently perform certain
                tasks or use certain applications.
            </h3>
        </li>
        <li>
            <h3><b class="items">Ergonomic design:</b>
                Keyboards with an ergonomic design are designed to reduce strain and discomfort on the hands and wrists,
                particularly for users who spend long hours typing. They may have a curved shape, a split design, or other
                features to promote more comfortable typing.
            </h3>
        </li>
        <li>
            <h3><b class="items">Wireless connectivity:</b>
                Some keyboards connect to a computer or other device wirelessly, using Bluetooth or other wireless
                protocols. This can be a convenient feature for users who prefer to work without cords and cables.
            </h3>
        </li>
        <li>
            <h3><b class="items">Touchpads or trackballs:</b>
                Some keyboards feature built-in touchpads or trackballs, allowing users to control the cursor without using
                a separate mouse. This can be a useful feature for users who prefer to work with minimal desk space.
        </li>
    </ol>
    <h2> These are just a few examples of the many unique features that keyboards can offer. Whether you&#39;re a gamer, a
        typist, or a casual computer user, there&#39;s sure to be a keyboard out there with the features and design that
        best suit your needs.
    </h2><a href="https://www.reddit.com/r/MechanicalKeyboards/" title="Reddit" class="bttn">
        <h1 class="oranges">
            r/MechanicalKeyboards
        </h1>
    </a>
    <h1 style="line-height:1.44;margin-top:6pt;margin-bottom:0pt;">Keyboards can be highly collectible for several reasons.
    </h1>
    <h2>
        Overall, the reasons for keyboard collectibility can vary widely, but the combination of historical significance,
        rarity, design, customization, and nostalgia can all contribute to making certain keyboards highly sought after by
        enthusiasts and collectors.
    </h2>
    <h3><b class="items">Historical significance:</b>
        Some keyboards have a significant historical or cultural value, either because of their design, their role in
        technological innovation, or their association with a famous user or event. For example, the Apple Extended Keyboard
        II, which was released in 1990, is highly sought after by collectors for its iconic design and its association with
        early Apple computers.
        <br /><br /><b class="items">Rarity:</b>
        Some keyboards are rare or limited edition, making them highly collectible. This might be because they were produced
        in small quantities, were only sold in certain regions, or were only available for a short period of time.
        <br /><br /><b class="items">Design:</b>
        Keyboards can be highly collectible for their design, whether it&#39;s because of their aesthetics, their ergonomic
        features, or their unique functionality. For example, the Happy Hacking Keyboard, which was designed in Japan in the
        early 2000s, has a minimalist design and a compact layout that has won it a devoted following among keyboard
        enthusiasts.
        <br /><br /><b class="items">Customization:</b>
        Some collectors are drawn to keyboards that have been customized or modified by their previous owners, whether
        it&#39;s through the addition of custom keycaps, the installation of a new switch mechanism, or other modifications.
        <br /><br /><b class="items">Nostalgia:</b>
        Some collectors may be drawn to keyboards that remind them of their youth or of a particular era in computing
        history. For example, the IBM Model M keyboard, which was produced in the 1980s and 1990s, is prized by many
        collectors for its distinctive buckling spring switches and its association with early IBM computers.
    </h3>
    <h2> <b class="keyboards">Keyboards</b> have played a significant role in pop culture over the years, both in the
        entertainment industry and in the world of technology. Here are a few examples of how keyboards have made their mark
        on pop culture.
    </h2>
    <h3><b class="items">Music:</b> Keyboards and synthesizers have been an essential part of popular music since the 1970s,
        when artists like Kraftwerk, Pink Floyd, and Stevie Wonder began incorporating electronic sounds into their music.
        Keyboards continue to be an important part of many musical genres, from pop and rock to hip-hop and electronic dance
        music.
    </h3>
    <h3><b class="items">Film and television:</b> Keyboards have been featured prominently in many movies and TV shows over
        the years, often as a symbol of technology and modernity. For example, the 1983 film WarGames features a young
        hacker played by Matthew Broderick who uses a computer and keyboard to unwittingly start a nuclear war. Keyboards
        have also been used as props in many sci-fi films and TV shows, such as Star Trek and Blade Runner.
    </h3>
    <h3><b class="items">Gaming:</b> Keyboards are an essential tool for PC gaming, and the gaming community has embraced a
        wide range of keyboard styles and designs, from traditional QWERTY keyboards to custom mechanical keyboards with LED
        lighting and programmable keys. Many popular video game streamers and content creators use keyboards as part of
        their setup, and some even design and sell their own custom keyboards.
    </h3>
    <h3><b class="items">Internet culture:</b> The rise of the internet and social media has created a vibrant
        keyboard-centric culture, with memes, jokes, and slang revolving around keyboards and typing. For example,
        &quot;keyboard warrior&quot; is a term used to describe someone who aggressively argues online, while
        &quot;ASDF&quot; and &quot;JKL;&quot; are common phrases used to describe the home row of the QWERTY keyboard.
    </h3>
    <h2>
        Overall, keyboards have become a ubiquitous part of modern culture, whether it&#39;s through music, film, gaming, or
        the internet. As technology continues to evolve, it will be interesting to see how keyboards and their role in pop
        culture continue to evolve as well.
    </h2>
    <h2 class="keyboards">
        There have been several films where a keyboard is prominently displayed in an iconic scene. Here are a few examples:
    </h2>
    <h3><b class="items">
            The Social Network (2010):</b> In this biographical drama about the founding of Facebook, a keyboard is
        prominently displayed in several scenes, including the opening scene where Mark Zuckerberg, played by Jesse
        Eisenberg, is shown typing furiously on his computer while drinking and talking with his girlfriend.
    </h3>
    <h3><b class="items">
            WarGames (1983):</b> In this classic Cold War-era thriller, a young hacker played by Matthew Broderick uses a
        computer and keyboard to unwittingly start a nuclear war simulation. The keyboard is a key prop in several scenes as
        Broderick&#39;s character attempts to hack into government computer systems.
    </h3>
    <h3><b class="items">
            Hackers (1995):</b> In this cyberpunk thriller about a group of young hackers, keyboards are a central prop
        throughout the film. In one iconic scene, Angelina Jolie&#39;s character is shown typing frantically on her keyboard
        while wearing a virtual reality headset.
    </h3>
    <h3><b class="items">
            Sneakers (1992):</b> In this caper film about a team of security experts who specialize in testing corporate
        security systems, a keyboard is prominently displayed in several scenes as the characters attempt to crack codes and
        bypass security measures.</h3>
    <h3><b class="items">
        Tron (1982):</b> In this sci-fi classic, a computer programmer played by Jeff Bridges is digitized and
    transported into a virtual world where he must compete in gladiatorial games. Keyboards are a prominent feature
    throughout the film, including in the iconic scene where Bridges&#39; character uses a light cycle to destroy a wall
    of computer terminals.
    <h3 class="items">
        Overall, keyboards have played a prominent role in many films about technology, cybercrime, and virtual reality,
        often serving as a symbol of the power and potential of technology.</h3></span></span></p>
    <h1 class="oranges">
        Milestones
    </h1>
    <ol>
        <li style="padding-inline-start:48px;">
            <h2 class="items">Types of keyboards</h2>
        </li>
        <h3>
            There are many different types of keyboards available, including traditional QWERTY keyboards, ergonomic
            keyboards, mechanical keyboards, wireless keyboards, and more. Each type has its own features and benefits,
            so it&#39;s important to do some research to find the best fit for your needs.</h3>
        <li style="padding-inline-start:48px;">
            <h2 class="items">Keyboard layout:</h2>
        </li>
        <h3>Most keyboards use the standard QWERTY layout, but there are also alternative layouts available, such as
            Dvorak and Colemak. These layouts are designed to be more efficient or ergonomic than QWERTY, but they can
            take some time to get used to.
        </h3>
        <li style="padding-inline-start:48px;">
            <h2 class="items">Key switches:</h2>
        </li>
        <h3>Mechanical keyboards use key switches to register keystrokes, and there are several different types of
            switches available, each with its own feel and sound. Some popular switch types include Cherry MX, Kailh,
            and Gateron.</h3>

        <li style="padding-inline-start:48px;">
            <h2 class="items">Customization:</h2>
        </li>
        <h3>Many keyboards allow for customization, such as programmable keys, RGB lighting, and removable keycaps.
            Customizing your keyboard can help make it more comfortable and personalized to your preferences.</h3>
        <li style="padding-inline-start:48px;">
            <h2 class="items">Cleaning and maintenance:</h2>
        </li>
    </ol>
    <h3>Like any electronic device, keyboards require some cleaning and maintenance to keep them in good working order.
        Dust and debris can accumulate under the keys and affect performance, so it&#39;s a good idea to periodically
        clean your keyboard with compressed air or a keyboard cleaning kit.
    </h3><br />
    <h2 class="oranges">
        Overall, <b class="keyboards">keyboards</b> are a versatile and essential tool for anyone who uses a <b
            class="keyboards">computer</b>. There are many different <b class="keyboards">options</b> available to suit
        different needs and preferences. By doing some <a href="https://keyboardpartpicker.com/first-build"
            title="keyboard research">research</a> and choosing a <b class="keyboards">keyboard</b> that meets your
        needs, you can improve your <b class="keyboards">typing speed,</b>comfort, and overall <b
            class="keyboards">productivity</b>.</h2>
        </section>
    <?php
}

function hw_monitor() {
    ?>
                <style>
    .purple {
        color: #6d64e8;
        font-weight: 700;
        font-size: 27pt;
        text-align: left;
    }
    </style>
    <article class="article fullbar">
    <div align="center">
        <a href="#tech"><button type="button" class="bttn">
                Technologies&nbsp;
            </button></a><a href="#know"><button type="button" class="bttn">
                What to know!&nbsp;
            </button></a><a href="#future"><button type="button" class="bttn">
                Future of Displays&nbsp;
            </button></a><a href="#innovators"><button type="button" class="bttn">
                Innovators and major players&nbsp;
            </button></a><a href="#features"><button type="button" class="bttn">
                What to look for when buying a new display, monitor or TV?&nbsp;
            </button></a>
    </div><br />
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <a href="./#peripherals">
        <h1 class="purple" id="monitor">
            Displays
        </h1>
    </a>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <h3>
        Here are some of the key milestones and figures in the history of computer monitors. Each development and
        advancement has contributed to the evolution of display technology, bringing us to the diverse range of monitors
        we have today.
    </h3><img src="https://latinospc.com/images/artificialintelligence/hw/display/thumbs/cathode.png" class="rtl">
    <h2>
        1. Cathode Ray Tube (CRT) Monitors:
    </h2>
    <h3>
        - In 1897, Karl Ferdinand Braun invented the cathode ray tube (CRT), which served as the basis for early
        television and computer displays.
    </h3>
    <h3>
        - In 1922, Vladimir Zworykin patented the iconoscope, an electronic television camera tube that later influenced
        the development of CRT monitors.
    </h3>
    <h3>
        - In 1934, Alan Archibald Campbell-Swinton proposed the concept of using CRTs as display devices.
    </h3><br />
    <h2>
        2. Liquid Crystal Display (LCD) Monitors:
    </h2><img src="https://latinospc.com/images/programs/thumbs/tealLED.jpg" class="fl">
    <h3>
        - In 1964, George H. Heilmeier developed the first operational liquid crystal display (LCD) while working at
        RCA.
    </h3>
    <h3>
        - In 1970, James Fergason improved the technology by introducing the first twisted nematic (TN) liquid crystal
        display, which became the basis for modern LCDs.
    </h3>
    <h3>
        - In 1983, Epson released the first commercially successful LCD display, the Epson ET-10, which was a portable
        TV.
    </h3><br />
    <h2>
        3. Thin-Film Transistor (TFT) LCD Monitors:
    </h2>
    <h3>
        - In 1984, Martin Schadt and Wolfgang Helfrich developed the thin-film transistor (TFT) technology, which
        greatly improved the quality and speed of LCD displays.
    </h3><img src="https://latinospc.com/images/artificialintelligence/hw/display/thumbs/michael-maasen-AkYGy_ymFqo-unsplash.jpg"
        class="fl">
    <h3>
        - In the late 1990s, companies like Samsung, LG, and Sony started mass-producing TFT LCD monitors, making them
        more accessible to consumers.
    </h3><br />
    <h2>
        4. LED Monitors:
    </h2>
    <h3>
        - In 1997, a research team at Shizuoka University in Japan developed the first practical blue LED, which enabled
        the production of white LEDs used in backlighting.
    </h3>
    <h3>
        - Companies such as Sony, Samsung, and LG started incorporating LED backlighting into their LCD monitors in the
        mid-2000s, leading to the rise of LED monitors.
    </h3><br />
    <h2>
        5. OLED Monitors:
    </h2>
    <h3>
        - In 1987, Ching W. Tang and Steven Van Slyke developed the first practical organic light-emitting diode (OLED)
        display at Eastman Kodak.
    </h3>
    <h3>
        - In the 2000s, companies like Sony, Samsung, and LG began producing OLED displays for small electronic devices
        such as mobile phones and eventually expanded to larger OLED monitors.
    </h3><br />
    <h2>
        6. Curved Monitors:
    </h2><img src="https://latinospc.com/images/artificialintelligence/hw/display/thumbs/curved-ultrawide.jpg" class="rtl">
    <h3>
        - In 2013, Samsung introduced the first commercially available curved OLED monitor, the Samsung S27D590C,
        bringing a new level of immersion to the display market.
    </h3>
    <h3>
        - Other companies, including LG and ASUS, followed suit, introducing their own curved monitor models.
    </h3><br />
    <h2>
        7. Ultrawide Monitors:
    </h2>
    <h3>
        - In 2013, LG introduced the first commercially available 21:9 ultrawide monitor, the LG EA93, offering a wider
        aspect ratio for enhanced productivity and immersive experiences.
    </h3>
    <h3>
        - Since then, various manufacturers have released ultrawide monitors with different aspect ratios, including
        32:9, providing even wider screen real estate.
    </h3><br />
    </article>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <article class="article fullbar"><a href="#monitor">
        <h1 id="tech" class="purple">
            Technologies
        </h1>
    </a>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <h2>
        1. High Definition (HD):
    </h2>
    <h3>
        HD refers to a display resolution higher than the standard definition (SD). It offers improved image quality
        with more pixels, resulting in sharper and clearer visuals. HD resolutions include 720p (1280x720 pixels) and
        1080p (1920x1080 pixels).
        <br />
    </h3>
    <h2>
        2. 4K Ultra HD:
    </h2>
    <h3>
        4K Ultra HD, also known as 4K or UHD, offers four times the resolution of Full HD (1080p). It has a resolution
        of 3840x2160 pixels, providing incredibly detailed and lifelike visuals.
    </h3><br />
    <h2>
        3. 8K Ultra HD:
    </h2>
    <h3>
        8K Ultra HD takes resolution even further, offering sixteen times the resolution of Full HD. It has a resolution
        of 7680x4320 pixels, delivering an unprecedented level of detail and clarity.
    </h3><img src="https://latinospc.com/images/artificialintelligence/hw/display/thumbs/ultrahd.jpg" class="rtl">
    <h2>
        4. High Dynamic Range (HDR):
    </h2>
    <h3>
        HDR is a technology that expands the range of colors and contrast in a display. It allows for brighter whites,
        deeper blacks, and a wider color gamut, resulting in a more vibrant and lifelike image.
    </h3>
    <h2>
        5. OLED (Organic Light-Emitting Diode):
    </h2>
    <h3>
        OLED technology utilizes organic compounds that emit light when an electric current is applied. OLED displays
        offer deep blacks, high contrast ratios, wide viewing angles, and vibrant colors. They are known for their thin
        form factor and excellent picture quality.
    </h3>
    <h2>
        6. Quantum Dot:
    </h2>
    <h3>
        Quantum Dot technology involves using tiny semiconductor particles (quantum dots) to enhance color reproduction
        and brightness in displays. Quantum Dot displays can achieve a wider color gamut, resulting in more accurate and
        vibrant colors.
    </h3>
    <h2>
        7. Adaptive Sync:
    </h2>
    <h3>
        Adaptive Sync technologies, such as NVIDIA G-Sync and AMD FreeSync, synchronize the refresh rate of the display
        with the output of the graphics card. This reduces screen tearing, stuttering, and input lag, resulting in
        smoother gameplay and improved visual experience, especially for gaming.
    </h3>
    <h2>
        8. In-Plane Switching (IPS):
    </h2>
    <h3>
        IPS technology improves color accuracy, viewing angles, and overall image quality. IPS displays offer wider
        viewing angles, ensuring consistent colors and contrast even when viewed from different positions.
    </h3>
    <h2>
        9. MicroLED:
    </h2>
    <h3>
        MicroLED is an emerging display technology that uses tiny LED modules to create images. It offers the benefits
        of OLED, such as deep blacks and high contrast, but with potentially higher brightness levels and longer
        lifespan.
    </h3>
    <h2>
        10. Local Dimming:
    </h2>
    <h3>
        Local dimming is a backlighting technique used in LCD displays to enhance contrast. It selectively dims or
        brightens different areas of the backlight to improve black levels and overall picture quality.
    </h3>
    </article>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <article class="article fullbar"><a href="#monitor">
        <h1 id="future" class="purple">Future of Displays</h1>
    </a><img src="https://latinospc.com/images/artificialintelligence/hw/display/thumbs/future-display.jpg">
    &nbsp;&nbsp;&nbsp;
    <img src="https://latinospc.com/images/artificialintelligence/hw/display/thumbs/future-display2.jpg">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <h3>
        Here are just a few potential future technologies that could impact computer and TV displays. As technology
        progresses, we can expect ongoing innovations that enhance our visual experiences and redefine how we interact
        with digital content.
    </h3>
    <h2>
        1. MicroLED Displays:
    </h2>
    <h3>
        MicroLED technology holds promise for the future. It involves using tiny, self-emitting LED modules, offering
        improved brightness, contrast, and color reproduction. MicroLED displays have the potential to deliver superior
        picture quality, longer lifespan, and energy efficiency.
    </h3>
    <h2>
        2. Rollable and Foldable Displays:
    </h2>
    <h3>
        Flexible display technology is gaining momentum. Rollable displays can be rolled up like a scroll, allowing for
        compact storage and portability. Foldable displays can be folded or unfolded, offering versatility in screen
        size and usage. These displays may revolutionize the concept of portability and form factor in monitors and TVs.
    </h3>
    <h2>
        3. Transparent Displays:
    </h2>
    <h3>
        Transparent displays have the potential to merge digital content with the physical world. These displays allow
        you to see through the screen while overlaying digital information, creating augmented reality experiences.
        Transparent displays may find applications in various industries, including retail, automotive, and
        entertainment.
    </h3>
    <h2>
        4. Holographic Displays:
    </h2>
    <h3>
        Holographic displays aim to create three-dimensional visuals without the need for special glasses or headsets.
        This technology could provide immersive and realistic viewing experiences, making objects appear as if they are
        floating in space. Holographic displays may have applications in gaming, design, education, and entertainment.
    </h3>
    <h2>
        5. Virtual and Augmented Reality:
    </h2>
    <h3>
        Virtual reality (VR) and augmented reality (AR) are rapidly evolving technologies that rely heavily on immersive
        displays. VR headsets transport users to virtual environments, while AR overlays digital information onto the
        real world. These technologies may influence the design and capabilities of future displays, offering enhanced
        interactivity and immersion.
    </h3>
    <h2>
        6. Advanced HDR:
    </h2><img src="https://latinospc.com/images/artificialintelligence/hw/display/thumbs/advanced.jpg" class="rtl">
    <h3>
        High Dynamic Range (HDR) technology is continuously improving, with advancements in peak brightness, local
        dimming, and color accuracy. Future displays may feature even higher levels of HDR, offering more nuanced
        details in highlights and shadows, wider color gamuts, and improved contrast ratios.
    </h3>
    <h2>
        7. Eye-Tracking and Gesture Recognition:
    </h2>
    <h3>
        Display technologies that incorporate eye-tracking and gesture recognition may enable more natural and intuitive
        interactions with monitors and TVs. Users may be able to control displays using eye movements, gestures, or
        voice commands, opening up new possibilities for user interfaces and accessibility.
    </h3>
    <h2>
        8. 8K and Beyond:
    </h2>
    <h3>
        While 8K Ultra HD is already available, further advancements in display resolution may continue. Higher
        resolutions and pixel densities may become more widespread, providing even sharper and more detailed visuals.
    </h3>
    <h2>
        9. Energy Efficiency:
    </h2>
    <h3>
        Energy-efficient display technologies will likely play a significant role in the future. Advancements in
        backlighting, power management, and materials may result in displays that consume less energy while maintaining
        high performance.
    </h3>
    <h2>
        10. Seamless Integration:
    </h2>
    <h3>
        Displays may become seamlessly integrated into our everyday lives, embedded in various surfaces and objects.
        From smart mirrors to interactive walls, the future may bring displays that blend into our environment and offer
        dynamic information and entertainment.
    </h3>
    </article>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <article class="article fullbar"><a href="#monitor">
        <h1 id="innovators" class="purple">
            Innovators and major players
        </h1>
    </a>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <h2>
        <a href="https://displaysolutions.samsung.com/main/index" title="Display Solutions">
            1. Samsung Electronics:
        </a>
    </h2>
    <h3><a href="https://displaysolutions.samsung.com/monitor/overview" title="PC Monitors">
            Samsung</a> is a global leader in display technologies and produces a wide range of displays, including LCD,
        LED, QLED, and OLED panels. They offer displays for various applications, including smartphones, tablets, TVs,
        and computer monitors.
    </h3>
    <h2><a href="https://www.lgdisplay.com/eng" title="LG">
            2. LG Display:
        </a></h2>
    <h3><a href="https://www.oledspace.com/en/about-oled/brand-story/" title="OLED">
            LG Display</a> is a leading manufacturer of display panels. They produce LCD, OLED, and flexible OLED
        displays for televisions, smartphones, tablets, and monitors. LG's OLED technology is widely acclaimed for its
        image quality.
    </h3>
    <h2><a href="https://pro.sony/ue_US/products/professional-displays/product-line-up"
            title="Professional Display System">
            3. Sony Corporation:
        </a></h2>
    <h3><a href="https://electronics.sony.com/oled-tv-display" title="BRAVIA">
            Sony</a> is known for its high-quality displays across different product lines. They offer LCD and OLED
        displays for TVs, smartphones, tablets, and professional monitors. Sony's Bravia TV series is particularly
        renowned.
    </h3>
    <h2><a href="https://na.panasonic.com/us/audio-video-solutions/professional-displays/video-walls"
            title="Video Walls">
            4. Panasonic Corporation:
        </a></h2>
    <h3><a href="https://panasonic.net/cns/prodisplays/products/" title="Products">
            Panasonic</a> is a multinational electronics company that manufactures a range of display products. They
        produce LCD panels for TVs, professional displays, and digital signage solutions.
    </h3>
    <h2><a href="https://www.sharpnecdisplays.us/" title="Display Solutions">
            5. Sharp / NEC Corporation:
        </a></h2>
    <h3><a href="https://business.sharpusa.com/Commercial-Displays" title="Comercial Displays">
            Sharp</a> is a Japanese company that specializes in LCD technology. They offer LCD panels for TVs, monitors,
        and other applications. Sharp's Aquos line of TVs has gained popularity worldwide.<br />NEC Display Solutions is
        a global provider of display and visualization solutions. They offer a wide range of displays, including LCD,
        LED, and projection systems, for various industries and applications.
    </h3>
    <h2><a href="https://www.auo.com/en-global/technologies/index/Display" title="ALED">
            6. AU Optronics:
        </a></h2>
    <h3><a href="https://auo.com/en-global/products/index/Display_Panel_Products/Monitor" title="Monitor">
            AU Optronics</a>, commonly referred to as AUO, is a Taiwanese display manufacturer. They produce LCD panels
        for TVs, monitors, laptops, and other electronic devices.
    </h3>
    <h2>
        <a href="https://www.boe.com/en/about/index" title="Best On Earth">
            7. BOE Technology Group:
        </a>
    </h2>
    <h3><a href="https://www.boe.com/en/Enterprise/MonitorDisplayPanel" title="Monitor">
            BOE Technology Group</a> is a Chinese display manufacturer that produces LCD and OLED panels for various
        applications, including TVs, smartphones, tablets, and monitors. They are one of the largest display panel
        manufacturers globally.
    </h3>
    <h2><a href="https://www.innolux.com/en/index.html" title="Panels">
            8. Innolux Corporation:
        </a></h2>
    <h3><a href="https://www.innolux.com/en/product-and-tech.html" title="Products">
            Innolux</a> is another Taiwanese display manufacturer that specializes in LCD panels. They produce displays
        for TVs, monitors, laptops, and other devices.
    </h3>
    <h2><a href="https://www.eizoglobal.com/">
            9. EIZO Corporation:
        </a></h2>
    <h3><a href="https://www.eizoglobal.com/products/coloredge/" title="Color Management">
            EIZO</a> is a Japanese company known for its high-end monitors and display solutions. They specialize in
        professional-grade displays used in industries such as graphic design, photography, and medical imaging.
    </h3>
    <h1><img src="https://latinospc.com/images/artificialintelligence/hw/display/thumbs/others.jpg" class="fl">
        In addition to the companies mentioned above, there are several other manufacturers and brands that sell TVs and
        computer displays.
    </h1>
    <p>
    <h1>
        Here are some notable ones:
    </h1>
    </p>
    <h2>
        1. Dell:
    </h2>
    <h3>
        Dell is a well-known computer technology company that offers a range of computer monitors and displays,
        including ultrawide monitors, gaming monitors, and professional-grade monitors.
    </h3>
    <h2>
        2. HP (Hewlett-Packard):
    </h2>
    <h3>
        HP is a renowned computer hardware manufacturer that offers a variety of computer monitors and displays suitable
        for different needs, including gaming, business, and multimedia.
    </h3>
    <h2>
        3. Acer:
    </h2>
    <h3>
        Acer is a multinational hardware and electronics corporation that produces a wide range of computer monitors,
        including gaming monitors, curved monitors, and budget-friendly options.
    </h3>
    <h2>
        4. Asus:
    </h2>
    <h3>
        Asus is a well-established brand that offers computer monitors targeted at different user segments. They provide
        gaming monitors, professional monitors, and general-purpose monitors with various features.
    </h3>
    <h2>
        5. ViewSonic:
    </h2>
    <h3>
        ViewSonic is a global provider of visual display products, including computer monitors and projectors. They
        offer a diverse range of monitors for home, office, gaming, and professional use.
    </h3>
    <h2>
        6. BenQ:
    </h2>
    <h3>
        BenQ specializes in visual display solutions and offers a wide selection of computer monitors, including gaming
        monitors, professional monitors for designers and photographers, and entertainment-focused displays.
    </h3>
    <h2>
        7. Philips:
    </h2>
    <h3>
        Philips is a multinational electronics company that offers a range of consumer electronics, including TVs and
        computer monitors. They provide a variety of display options, including curved monitors and Ultra HD monitors.
    </h3>
    <h2>
        8. TCL:
    </h2>
    <h3>
        TCL is a Chinese multinational electronics company known for its affordable TVs. They have expanded their
        product range to include computer monitors, offering budget-friendly options with various features.
    </h3>
    <h2>
        9. Hisense:
    </h2>
    <h3>
        Hisense is a Chinese electronics manufacturer that offers TVs and computer monitors. They provide a range of
        display options, including affordable entry-level models and higher-end options.
    </h3>
    <h2>
        10. Vizio:
    </h2>
    <h3>
        Vizio is an American company primarily known for its TVs, but they also offer computer monitors. They provide
        displays with different features and specifications, including options for gaming and entertainment.
    </h3>
    </article>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <article class="article fullbar"><a href="#monitor">
        <h1 id="features" class="purple">
            What to look for when buying a new display, monitor or TV?
        </h1>
    </a>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <img src="https://latinospc.com/images/artificialintelligence/hw/display/thumbs/integrated.jpg" class="fl">
    <h2>
        When choosing the best display for a particular use case, there are several factors to consider, especially when
        we prioritize quality, durability, and affordability.Here are some key aspects to look for:
    </h2>
    <h2>
        1. Display Technology:
    </h2>
    <h3>
        Different display technologies, such as LCD, OLED, and LED, offer varying levels of image quality, color
        accuracy, contrast, and viewing angles. Consider the specific needs of your users and the intended use case to
        determine the most suitable display technology.
    </h3>
    <h2>
        2. Resolution:
    </h2>
    <h3>
        The display resolution determines the level of detail and clarity. Higher resolutions, such as 4K or 8K Ultra
        HD, are ideal for professionals who require precise image reproduction, while lower resolutions like Full HD may
        be more cost-effective for general use.
    </h3>
    <h2>
        3. Size and Aspect Ratio:
    </h2>
    <h3>
        Consider the desired screen size and aspect ratio based on the users' requirements and the available workspace.
        Larger screens provide a more immersive experience, but they may come at a higher cost. Additionally, different
        aspect ratios, such as 16:9 or 21:9 ultrawide, offer different viewing experiences.
    </h3>
    <h2>
        4. Color Accuracy and Gamut:
    </h2>
    <h3>
        Professionals who work with graphic design, photography, or video editing often require displays with accurate
        color reproduction. Look for displays that offer a wide color gamut, support color calibration, and provide
        accurate color representation.
    </h3>
    <h2>
        5. Refresh Rate:
    </h2>
    <h3>
        If your users engage in gaming or fast-paced activities, consider displays with higher refresh rates (e.g.,
        120Hz or 144Hz) for smoother motion and reduced motion blur. However, keep in mind that higher refresh rates may
        come at a higher price point.
    </h3>
    <h2>
        6. Connectivity:
    </h2>
    <h3>
        Ensure that the display has the necessary connectivity options to connect to the users' devices, such as HDMI,
        DisplayPort, or USB-C. Additional ports like USB hubs can also provide convenience for connecting peripherals.
    </h3>
    <h2>
        7. Durability and Build Quality:
    </h2>
    <h3>
        Consider displays with sturdy construction and high-quality materials that are built to last. Look for displays
        with good reviews regarding durability and reliability to ensure they can withstand regular usage.
    </h3>
    <h2>
        8. Energy Efficiency:
    </h2>
    <h3>
        Displays that are energy-efficient can help reduce power consumption and save costs in the long run. Look for
        displays with energy-saving features, such as certifications like ENERGY STAR.
    </h3>
    <h2>
        9. Price and Value for Money:
    </h2>
    <h3>
        Assess the overall value for money by comparing the features, quality, and durability against the price.
        Consider the specific requirements of your users and strike a balance between affordability and the desired
        performance.
    </h3>
    <h2>
        10. User Reviews and Recommendations:
    </h2>
    <h3>
        Read user reviews and seek recommendations from trusted sources to get insights into the performance,
        reliability, and user satisfaction of specific display models.
    </h3>
    <h2>
        By considering these factors, you can narrow down the options and choose a display that balances quality,
        durability, and affordability while catering to the needs of the task at hand, Including professionals who
        require a high-quality display.
    </h2>
    </article>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <article class="article fullbar"><a href="#monitor">
        <h1 id="know" class="purple">Things to know!</h1>
    </a>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <h2>
        1. Calibration and Color Accuracy:
    </h2><img src="https://latinospc.com/images/artificialintelligence/hw/display/thumbs/calibrate.jpg" class="fl">
    <h3>
        Encourage your users, especially professionals, to consider calibrating their displays for optimal color
        accuracy. Display calibration ensures that colors are accurately represented, which is crucial for tasks like
        graphic design, photo editing, and video production. Recommending color calibration tools or providing guides on
        how to calibrate displays can be valuable information for your users.
    </h3><br />
    <h2>
        2. Ergonomics:
    </h2>
    <h3>
        Advise your users to pay attention to the ergonomics of their displays. Adjustable stands or VESA mounting
        options can help users position their displays at a comfortable viewing height and angle, reducing strain on
        their neck, back, and eyes during long hours of use.
    </h3>
    <h2>
        3. Warranty and Support:
    </h2>
    <h3>
        Remind your users to check the warranty and support options provided by the display manufacturer. A reliable
        warranty and responsive customer support can be essential in case of any issues or defects with the display.
    </h3>
    <h2>
        4. Eye Care Features:
    </h2>
    <h3>
        Inform your users about eye care features available in displays, such as blue light filters and flicker-free
        technology. These features help reduce eye strain and fatigue, particularly during extended periods of screen
        time.
    </h3>
    <h2>
        5. Connectivity and Multi-Monitor Setup:
    </h2>
    <h3>
        If your users require a multi-monitor setup, provide guidance on connecting multiple displays to their devices
        and configuring them effectively. Explain the benefits of extended desktops for multitasking and productivity.
    </h3>
    <h2>
        6. Cleaning and Maintenance:
    </h2>
    <h3>
        Share tips on how to properly clean and maintain the displays to prolong their lifespan and preserve image
        quality. Remind users to follow manufacturer recommendations and avoid using harsh chemicals or abrasive
        materials when cleaning their displays.
    </h3>
    <h2>
        7. Energy Saving Tips:
    </h2>
    <h3>
        Educate your users on energy-saving practices for displays, such as adjusting brightness settings, enabling
        power-saving modes, and turning off displays when not in use. These practices can help reduce energy consumption
        and contribute to a more sustainable environment.
    </h3>
    <h2>
        8. Future Technologies and Upgrades:
    </h2>
    <h3>
        Keep your users informed about emerging display technologies and advancements, such as upcoming releases of
        higher-resolution displays, new connectivity options, or improved features. This helps them stay up-to-date and
        make informed decisions when upgrading their displays in the future.
    </h3>
    <h2>
        9. Product Comparisons:
    </h2>
    <h3>
        Provide comparison guides or tools that allow users to compare different display models based on their
        specifications, features, and price. This helps users make informed decisions by easily understanding the
        differences between various options.
    </h3>
    <h2>
        10. User Reviews and Ratings:
    </h2>
    <h3>
        Incorporate user reviews and ratings for different display models on your website. Real-life experiences and
        feedback from other users can be valuable in helping users assess the reliability, performance, and user
        satisfaction of specific displays.
    </h3>
    <h2>
        11. Compatibility and System Requirements:
    </h2>
    <h3>
        Advise your users to check the compatibility of the display with their existing devices, such as computers,
        gaming consoles, or media players. Highlight any specific system requirements, such as graphics card
        compatibility or supported operating systems, to ensure seamless integration.
    </h3>
    <h2>
        12. Accessories and Add-ons:
    </h2>
    <h3>
        Provide information on useful accessories or add-ons that can enhance the display experience, such as monitor
        stands, screen protectors, cable management solutions, or color calibration tools. Recommending compatible
        accessories can be beneficial for users looking to optimize their setup.
    </h3>
    <h2>
        13. User Guides and Troubleshooting:
    </h2>
    <h3>
        Create comprehensive user guides or FAQs that cover common setup procedures, troubleshooting tips, and solutions
        for common display issues. This helps users address minor problems on their own and provides them with valuable
        resources for setting up and maintaining their displays.
    </h3><img src="https://latinospc.com/images/artificialintelligence/hw/display/thumbs/lastdisplay.jpg" width="600px" class="fl">
    <h2>
        14. Industry News and Trends:
    </h2>
    <h3>
        Include a section on your website dedicated to display industry news, technological advancements, and upcoming
        releases. This keeps your users informed about the latest trends, innovations, and product launches, fostering
        their interest and knowledge in the field.
    </h3>
    <h2>
        15. Community Forums or Discussion Boards:
    </h2>
    <h3>
        Establish an online community where users can interact, ask questions, and share their experiences related to
        displays. This allows users to connect with like-minded individuals, seek advice, and engage in discussions
        about display technologies and related topics.
    </h3>
    <h2>
        16. Sustainability and Environmental Considerations:
    </h2>
    <h3>
        Highlight displays that prioritize energy efficiency, eco-friendly manufacturing processes, or recyclability.
        Educate users about the importance of choosing displays with lower environmental impact and provide information
        on responsible disposal or recycling options for old displays.
    </h3>
    <h2>
        17. Warranty Registration:
    </h2>
    <h3>
        We encourage users to register their display's warranty with the manufacturer to ensure they receive the full
        benefits and coverage. Provide instructions or links to the warranty registration process for each brand.
    </h3>
    <h2>
        18. Firmware and Software Updates:
    </h2>
    <h3>
        We try to Inform users about the importance of keeping their display's firmware and software up to date. Also we
        provide guided instructions on how to check for updates and install them to ensure optimal performance, bug
        fixes, and compatibility improvements.
    </h3>
    <h2>
        19. Customer Support Channels:
    </h2>
    <h3>
        We provide information about the customer support channels available for each display brand, such as phone
        support, email support, or live chat. Include links or contact details so users can easily reach out for
        assistance or inquiries.
    </h3>
    <h2>
        20. Recommended Accessories:
    </h2>
    <h3>
        We suggest additional accessories that can enhance the display experience, such as monitor calibration tools,
        cable management solutions, or ergonomic desk setups.
    </h3>
    </article>

    <?php
}

function hw_portableMemory(){
    ?>
    <style>
    /*This Code is already on jsk.css */
    .container {      max-width: 800px; margin: 50px auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); break-inside: avoid-column;     }
    /*This Code is already on jsk.css */
    .tnk:focus{     background: url(blue_rectangle.png) repeat-y right; transition: all 0.3s ease-out; background-size: 60px auto; animation-delay: 6000ms;     }
    /*This Code is already on jsk.css care with the duplicates */
    .logo{     padding-top: 20px;      }
    .portable a{      font-size: larger;  text-transform: uppercase;      }
    .container .card2 {background-color: azure; }
    </style>

    <article class="article fullbar"><a href="./#peripherals">
        <h1 id="portable">Portable Memory - External Drives</h1>
    </a>
    <!--☁【ツ】☁--┻━┻ **`ღ´**☁ Portable Memory ☁☁【ツ】☁--┻━┻ **`ღ´**-->
    <h3 class="container"><a href="https://csrc.nist.gov/glossary/term/portable_storage_device">Portable memory</a> for
        computer users typically comes in the form of external <a href="../hardware/?ssd#ssd">hard drives or solid-state
            drives (SSDs)</a>. These devices are designed to be easily transported and connected to a computer via <a
            href="https://www.enablingusb.org/">USB</a> or other interfaces.</h3>
    <a rel="example_group" href="../images/hardware/hw/p_memory/portablehdd.jpg"
        style="margin:4px 16px 4px 0; float:left;" title="Portable Hard Disk Drive"><img
            src="https://latinospc.com/images/hardware/hw/p_memory/portablehdd.webp" alt="90's porable drive"></a>
    <div class="container">
        <h3>With filling the drive with data and deleting files, it&#39;s important, to consider <a
                href="https://www.dpbestflow.org/data-storage-hardware/hard-drive-101#capacity">the capacity
                ("size")</a> of the storage device you will need meet the intended use and requirements.<a
                href="https://www.youtube.com/watch?v=NsAhC4UuTXs"
                title="What's the Largest Possible File Size? | Techquickie | Sep 22, 2017">Consider this:</a> Video
            files can be quite large, so you may want a device with <a
                href="https://www.ionos.com/digitalguide/websites/web-development/what-is-a-terabyte/">several terabytes
                of storage capacity</a>.</h3>
        <h3>In terms of the <a href="https://en.wikipedia.org/wiki/Disk_enclosure">housing of the drive</a>, there are a
            few factors to consider. <br /><span style="font-size: large;">Firstly</span>, you will want a device that
            is durable and can withstand being transported frequently. Some external hard drives come with <a
                href="https://www.pcmag.com/picks/the-best-rugged-hard-drives-and-ssds">shock-resistant casings</a>,
            which can help protect the drive from accidental drops or bumps.<br /><a
                href="https://exascend.com/technologies/mil-std-810/" style="font-size: large;">Additionally</a>, some
            SSDs are designed to be more rugged than others and can be a good choice for those who are on the move
            frequently.</h3>
    </div>
    <div class="container"><a rel="example_group" href="../images/hardware/hw/p_memory/ssd.jpg"
            style="margin:4px 4px 16px 0; float:right;" title="Portable Solid State Drive"><img
                src="https://latinospc.com/images/hardware/hw/p_memory/ssd.webp" alt="SSD"></a>
        <h3><span style="font-size: large;">Another consideration</span> when choosing an external hard drive or SSD is
            the <a href="https://tripplite.eaton.com/products/usb-connectivity-types-standards">interface</a> it uses to
            connect to your computer. USB 3.0 and USB-C are popular interfaces for external hard drives and SSDs, as
            they offer fast transfer speeds and are widely compatible with different computers and operating systems.
            <div class="spacer" style="margin-bottom:30px ;"></div>
        </h3>
    </div>
    <h3 class="container"><a rel="example_group" href="../images/hardware/hw/p_memory/usb.jpg"
            style="margin:4px 16px 4px 0; float:left;" title="USB Powerred Memory Drives"><img
                src="https://latinospc.com/images/hardware/hw/p_memory/usb.webp" height="130px" alt="USB Powerred Memory Drives"></a><span
            style="font-size: large;">Finally</span>, it&#39;s worth considering whether you want a device that is <a
            href="https://www.omnicharge.co/blogs/blog/what-is-usb-power-and-how-does-it-work-exactly">powered via
            USB</a> or one that requires an external power source. USB-powered devices can be more convenient to use, as
        you don&#39;t need to carry around a separate power supply, but they may not be suitable for all use cases,
        especially if you need to transfer large amounts of data quickly.</h3>
    <!--☁【ツ】☁--┻━┻ **`ღ´**☁ Memory Cards ☁【ツ】☁--┻━┻ **`ღ´**-->
    <section class="container">
        <details>
            <summary class="tnk">
                <h2>Memory Cards</h2>
            </summary>
            <h3>Memory cards are small, removable data storage devices commonly used in digital cameras, smartphones,
                tablets, and other portable electronics. They are available in various formats, such as <a
                    href="https://en.wikipedia.org/wiki/SD_card">SD (Secure Digital)</a>, <a
                    href="https://www.sdcard.org/press/thoughtleadership/anatomy-of-an-sd-memory-card-what-matters-most-for-photography-and-videography/">microSD</a>,
                <a href="https://compactflash.org/industry-standards/">CompactFlash (CF)</a>, and others.</h3>
            <h2>Key features of memory cards include:</h2>
            <ul>
                <h3>
                    <li><strong>Portability:</strong> Memory cards are compact and lightweight, making them easy to
                        carry and transfer data between devices.</li>
                    <a rel="example_group" href="../images/hardware/hw/p_memory/memory.jpg"
                        style="margin:4px 4px 16px 0; float:right;" title="Memory Card"><img
                            src="https://latinospc.com/images/hardware/hw/p_memory/memory.webp" alt="Memory Card" class="rtl"></a>
                    <li><strong>Capacity:</strong> Memory cards (<a
                            href="https://www.sdcard.org/developers/sd-standard-overview/capacity-sd-sdhc-sdxc-sduc/">SD</a>)
                        come in different storage capacities, ranging from a few gigabytes to hundreds of gigabytes,
                        allowing users to store a large number of photos, videos, music files, and other data.</li>
                    <li><strong>Reusability:</strong> <a
                            href="https://colesclassroom.com/how-long-do-micro-sd-cards-last/">Memory cards</a> can be
                        reused by formatting or deleting their contents, making them a cost-effective storage solution.
                    </li>
                    <li><strong>Compatibility:</strong> Different devices may require specific <a
                            href="https://en.wikipedia.org/wiki/Memory_card#Overview_of_all_memory_card_types">memory
                            card formats</a>, so it's important to choose the right type for your device.</li>
                    <li><strong>Speed:</strong> Memory cards have varying read and write speeds, which can affect the
                        performance of your device and the <a
                            href="https://www.sdcard.org/press/thoughtleadership/sd-express-memory-cards-when-ultra-high-performance-matters-2/">transfer
                            speed</a> of data.</li>
                </h3>
            </ul>
            <h2>Common uses of memory cards:</h2>
            <ul>
                <h3>
                    <li>Storing photos and videos from digital cameras and smartphones</li>
                    <li>Expanding the storage capacity of tablets, smartphones, and other portable devices</li>
                    <li>Transferring data between different devices</li>
                    <li>Backing up important files and data</li>
                </h3>
            </ul>
        </details>
    </section>
    <!--☁【ツ】☁--┻━┻ **`ღ´**☁ USB Sticks ☁【ツ】☁--┻━┻ **`ღ´**-->
    <section class="container">
        <details>
            <summary class="tnk">
                <h2>USB Sticks</h2>
            </summary>
            <h3><a href="https://www.britannica.com/technology/USB-flash-drive">USB sticks</a>, also known as <a
                    href="https://en.wikipedia.org/wiki/USB_flash_drive">USB flash drives or thumb drives</a>, are
                small, portable storage devices that connect to a computer or other devices via a <a
                    href="https://en.wikipedia.org/wiki/USB_hardware#Connectors">USB port</a>. They are widely used for
                storing and transferring data due to their convenience and affordability.</h3>
            <h2 style="text-align: right;">Key features of USB sticks:</h2>
            <a rel="example_group" href="../images/hardware/hw/p_memory/usb_stick.jpg"
                style="margin:4px 30px 4px 4px; float:left;" title="USB"><img
                    src="https://latinospc.com/images/hardware/hw/p_memory/usb_stick.webp" alt=""></a>
            <ul>
                <h3>
                    <li class="card2"><strong>Portability:</strong> <a
                            href="https://www.tomshardware.com/best-picks/best-flash-drives">USB sticks</a> are compact
                        and can easily fit in a pocket, making them highly portable.</li>
                    <li class="card2"><strong>Plug-and-Play:</strong> Most USB sticks are <a
                            href="https://en.wikipedia.org/wiki/Plug_and_play">plug-and-play</a>, meaning they can be
                        used with any computer or device with a USB port without the need for additional drivers or
                        software.</li>
                    <li class="card2"><strong>Capacity:</strong> USB sticks are available in various storage capacities,
                        ranging from a few gigabytes to several terabytes, allowing users to store a large amount of
                        data.</li>
                    <li><strong>Reusability:</strong> USB sticks can be reused by formatting or deleting their contents,
                        making them a cost-effective storage solution.</li>
                    <li><strong>Security features:</strong> Some USB sticks offer <a
                            href="https://www.techradar.com/news/best-secure-drives">security features</a> like password
                        protection and hardware encryption to keep data safe.</li>
                </h3>
            </ul>
            <h2>Common uses of USB sticks:</h2>
            <ul>
                <h3>
                    <li>Transferring files between computers and devices</li>
                    <li>Backing up important data and documents</li>
                    <li>Storing and carrying presentations, documents, and other files for work or school</li>
                    <li>Storing and transferring multimedia files like music, photos, and videos</li>
                    <li>Installing software or operating systems on multiple computers</li>
                </h3>
            </ul>
        </details>
    </section>
    <!--☁【ツ】☁--┻━┻ **`ღ´**☁ Who benefits from Portable Data? ☁【ツ】☁--┻━┻ **`ღ´**-->
    <section class="portable container">
        <details>
            <summary class="tnk">
                <h2>Who benefits from Portable Data?</h2>
            </summary>
            <h3><a href="https://expertphotography.com/best-way-to-store-photos/">Photography</a> - A professional
                photographer may use a portable drive to store and transport their high-resolution photos. They may need
                a device that is compact and lightweight, but also offers fast transfer speeds and ample storage
                capacity. A ruggedized portable drive with USB 3.0 connectivity and a capacity of several terabytes
                would be a good choice.</h3>
            <h3><a href="https://steamcommunity.com/discussions/forum/11/3203744999872598557/?l=koreana">Gaming</a> - A
                gamer may use a portable drive to store their game library and move it between different computers. They
                may need a device with fast read and write speeds to ensure smooth gameplay, as well as a large capacity
                to accommodate multiple games. A portable SSD with USB-C connectivity and a capacity of at least 1TB
                would be a good choice.</h3>
            <h3><a href="#">Video production</a> - A video producer may use a portable drive to store and edit their
                high-resolution video footage. They may need a device with fast transfer speeds and a large capacity, as
                well as compatibility with video editing software. A portable SSD with Thunderbolt 3 connectivity and a
                capacity of several terabytes would be a good choice.</h3>
            <h3><a href="#">Business travel</a> - A frequent business traveler may use a portable drive to store
                important documents, presentations, and other files. They may need a device that is compact and
                lightweight, but also offers ample storage capacity and data security features. A portable hard drive
                with USB 3.0 connectivity and hardware encryption would be a good choice.</h3>
            <h3><a href="#">Personal backup</a> - An individual may use a portable drive to back up their personal
                files, such as family photos and videos, music, and documents. They may need a device with a large
                capacity, fast transfer speeds, and backup software that can automatically back up files on a regular
                basis. A portable hard drive with USB 3.0 connectivity and backup software included would be a good
                choice.</h3>
            <h3><a href="#">Students</a> - Students may use portable drives to store their class notes, assignments, and
                research papers. A portable drive allows them to easily move their files between different computers on
                campus, and can serve as a backup for important coursework.</h3>
            <h3><a href="#">Freelancers</a> - Freelancers who work remotely may use portable drives to store and
                transport their work files. This can include design files, code repositories, and project management
                documents. A portable SSD with fast transfer speeds can help ensure that they can access their files
                quickly and easily from anywhere.</h3>
            <h3><a href="#">Musicians</a> - Musicians may use portable drives to store and transport their music files,
                including recordings, sheet music, and other performance materials. A portable drive with a large
                capacity can allow them to store multiple albums and other media files, while USB connectivity allows
                them to easily transfer files to and from their computer.</h3>
            <h3><a href="#">Educators</a> - Educators may use portable drives to store and transport educational
                materials, including presentations, lecture notes, and videos. This can allow them to easily share these
                materials with other educators or students, and can serve as a backup for important course materials.
            </h3>
            <h3><a
                    href="https://www.nexcopy.com/usb-secure-flash-drives/hipaa-compliant-usb-flash-drive/#:~:text=HIPAA%20compliant%20USB%20flash%20drives%20provide%20an%20unmatched%20level%20of,the%20HIPAA%20compliant%20flash%20drive.">Health
                    professionals</a> - Health professionals may use portable drives to store and transport patient
                data, including medical records and imaging files. A portable drive with encryption and password
                protection can help ensure that this sensitive data is kept secure during transport.</h3>
            <h3><a href="#">Graphic designers</a> - Graphic designers may use portable drives to store and transport
                their design files, including Photoshop documents, Illustrator files, and high-resolution images. A
                portable SSD with Thunderbolt connectivity can help ensure that large files can be transferred quickly
                and efficiently.</h3>
            <h3><a href="#">Video game developers</a> - Video game developers may use portable drives to store game
                code, assets, and other development files. A portable drive with a large capacity and USB 3.0
                connectivity can allow them to easily transfer these files between different computers, and can serve as
                a backup for important development work.</h3>
            <h3><a href="https://www.pcmag.com/picks/the-best-rugged-hard-drives-and-ssds">Construction workers</a> -
                Construction workers may use portable drives to store and transport construction plans, blueprints, and
                other project documents. A ruggedized portable hard drive with USB-C connectivity can help ensure that
                these important documents are protected during transport, even in harsh outdoor environments.</h3>
            <h3><a href="#">Digital nomads</a> - Digital nomads, who work remotely while traveling, may use portable
                drives to store and transport their work files, including video calls, documents, and images. A portable
                SSD with fast transfer speeds and a compact form factor can allow them to work efficiently from anywhere
                in the world.</h3>
            <h3><a href="#">Non-profit organizations</a> - Non-profit organizations may use portable drives to store and
                transport sensitive data, such as donor information and financial records. A portable drive with
                hardware encryption and password protection can help ensure that this information is kept secure during
                transport, and can serve as a backup for important organizational data.</h3>
            <h3><a href="#">Small business owners</a> - Small business owners may use portable drives to store and
                transport their business files, including financial records, customer data, and marketing materials. A
                portable drive with hardware encryption and backup software can help ensure that this important data is
                kept secure and backed up regularly.</h3>
            <h3><a href="#">Lawyers</a> - Lawyers may use portable drives to store and transport legal documents, case
                files, and other sensitive materials. A portable drive with encryption and password protection can help
                ensure that this confidential information is kept secure during transport.</h3>
            <h3><a href="#">Journalists</a> - Journalists may use portable drives to store and transport their research
                materials, including interview recordings, notes, and articles. A portable drive with a large capacity
                and USB 3.0 connectivity can allow them to easily transfer these files between different computers and
                locations.</h3>
            <h3><a href="#">Event planners</a> - Event planners may use portable drives to store and transport event
                plans, schedules, and other materials. A portable drive with a ruggedized casing and USB-C connectivity
                can help ensure that these important documents are protected during transport and can be easily accessed
                on-site.</h3>
            <h3><a href="https://www.kiteworks.com/hipaa-compliance/hipaa-compliance-requirements/">Medical
                    researchers</a> - Medical researchers may use portable drives to store and transport research data,
                including patient data and medical imaging files. A portable drive with high-speed transfer rates and
                encryption can help ensure that this sensitive data is kept secure during transport and can be easily
                accessed by researchers at different locations.</h3>
            <h3><a href="#">Photographers</a> - Photographers may use portable drives to store and transport their
                high-resolution images and videos. A portable SSD with fast transfer speeds and a large capacity can
                allow them to store thousands of photos and videos, while USB connectivity allows them to easily
                transfer files to and from their computer.</h3>
            <h3><a href="#">Architects</a> - Architects may use portable drives to store and transport architectural
                drawings, blueprints, and other design files. A portable drive with a ruggedized casing and USB-C
                connectivity can help ensure that these important documents are protected during transport and can be
                easily accessed on-site.</h3>
            <h3><a href="https://www.vikingtechnology.com/military-memory-storage-solutions/">Scientists</a> -
                Scientists may use portable drives to store and transport research data, including experimental data,
                results, and analysis. A portable drive with encryption and backup software can help ensure that this
                valuable research data is kept secure and backed up regularly.</h3>
            <h3><a href="#">Musicians (live performers)</a> - Musicians who perform live may use portable drives to
                store and transport their performance materials, including backing tracks, sound effects, and sheet
                music. A portable drive with a compact form factor and fast transfer speeds can allow them to easily
                bring their performance materials to different locations.</h3>
            <h3><a href="#">Salespeople</a> - Salespeople may use portable drives to store and transport sales
                materials, including presentations, product catalogs, and customer data. A portable drive with
                encryption and password protection can help ensure that this confidential information is kept secure
                during transport.</h3>
        </details>
    </section>
    </article><!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** Portable Memory-->
    <?php
}

function hw_pci_cards() {
    ?>
        <article class="fullbar hero4">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <ul style="display:inline-block;">
        <a href="./#article">
            <h2 id="pci_cards">PCI Cards</h2>
        </a>
    </ul>
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <h2> PCI Cards: Unveiling the Enigma of Expansion</h2>
    <p class="container"> Picture this: your computer, a technological beast yearning for more power, speed, and
        functionality. But alas, the confines of its chassis limit its growth. <br />Enter PCI cards, the magic wands of
        expansion that liberate your machine from its hardware constraints. </p>
    <br />
    <!--|--\(^-^)/--|-->
    <section class="colms2">
        <fieldset>
            <legend> What Are PCI Cards, You Ask?</legend> PCI, short for Peripheral Component Interter. Think of it as
            a bustling tech marketplace within your computer's case. These cards are like plug-in modules connect, is a
            standard for connecting various hardware components to the motherboard of your computer that add new
            features, capabilities, and performance upgrades. It's like giving your computer a buffet of specialized
            talents.
        </fieldset>
        <br />
        <!--|--\(^-^)/--|-->
        <fieldset>
            <legend> Why Are They Important, You Wonder?</legend> Imagine a world where your computer could only do what
            it was born to do, like a one-trick pony. Boring, right? Enter PCI cards, the superheroes of customization.
            They allow you to tailor your computer's capabilities to your precise needs.
        </fieldset>
        <fieldset>
            <legend> Need more graphics horsepower for gaming?</legend> There's a PCI graphics card for that.<br /><br />
            Craving lightning-fast storage? A PCI SSD card is at your service.<br /><br />
            Want to control your MIDI instruments?
            Behold the MIDI interface PCI card.<br /><br />
            From networking to audio to USB expansion, there's a card for almost every imaginable purpose.<br /><br />
            These cards not only enhance your computer's performance but also provide flexibility and upgradability, helping to extend your system's capabilities as technology advances.
        </fieldset>
    </section>
    <br />
    <!--|--\(^-^)/--|-->
    <section class="blurb">
        <h2>The Extravaganza of Consumer Choices: a list of PCI cards that consumers can get their hands on:</h2>
        <ul class="colms2" style="list-style-type:none">
            <li tabindex="0" class="selection">
                <strong>1. Graphics Cards (GPU):</strong> The rockstars of PCI cards, GPUs render your graphics, making
                games and high-res visuals come alive. Gaming, content creation, and scientific simulations bow before
                their might.
            </li>
            <li tabindex="0" class="selection">
                <strong>2. Sound Cards:</strong> Elevate your auditory experience with these. From immersive gaming
                soundscapes to studio-quality music production, they ensure your ears never go bored.
            </li>
            <li tabindex="0" class="selection">
                <strong>3. Network Interface Cards (NIC):</strong> Don't settle for sluggish internet speeds. NICs offer
                faster connections, reduced latency, and even support for specialized network tasks.
            </li>
            <li tabindex="0" class="selection">
                <strong>4. USB Expansion Cards:</strong> Running out of USB ports for your gazillion peripherals? These
                cards pop extra ports out of thin air, connecting you to a universe of devices.
            </li>
            <li tabindex="0" class="selection">
                <strong>5. Storage Controller Cards:</strong> Crave storage speed? PCIe-based SSD controller cards
                supercharge your data access, leaving traditional hard drives in the dust.
            </li>
            <li tabindex="0" class="selection">
                <strong>6. RAID Controller Cards:</strong> For those who demand data redundancy and performance, these
                cards help configure RAID setups with multiple hard drives.
            </li>
            <li tabindex="0" class="selection">
                <strong>7. TV Tuner Cards:</strong> Transform your computer into an entertainment hub by watching,
                recording, and even streaming TV content.
            </li>
            <li tabindex="0" class="selection">
                <strong>8. Capture Cards:</strong> Gamers and content creators rejoice! Capture cards enable seamless
                recording and streaming of gameplay and other video content.
            </li>
            <li tabindex="0" class="selection">
                <strong>9. MIDI Interface Cards:</strong> Musicians and producers find their muse in these, connecting
                MIDI instruments and controllers to craft symphonies.
            </li>
            <li tabindex="0" class="selection">
                <strong>10. Serial/Parallel Port Cards:</strong> Yep, some folks still need these for legacy devices
                like printers and industrial equipment.
            </li>
        </ul>
        <br />
        <!--|--\(^-^)/--|-->
        <ul>
            <h2>In Conclusion: The Future Beckons</h2>
        </ul>
        <p tabindex="0" class="selection"> PCI cards are the true magicians of computer expansion. They take your
            machine's potential and multiply it, ensuring that you're not left in the technological dust. As computers
            evolve, so do these cards, adapting to new standards and technologies. </p>
        <p tabindex="0" class="selection"> So, whether you're a gamer seeking graphical nirvana or a content creator
            crafting digital masterpieces, PCI cards have your back. They're the puzzle pieces that complete your
            computer's mosaic of functionality, making it as unique and versatile as your dreams demand. </p>
    </section>
    </article>
    <hr style="border: 3px dashed darkgray; width: 70%;">
    <!--|--\(^-^)/--|-->
    <article class="fullbar hero4">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    <section class="container">
        <h2>The Epic Journey of PCI:</h2>
        <h3>From Humble Beginnings to Modern Marvel</h3>
        <p> Once upon a time in the tech realm of the early 1990s, computer enthusiasts and engineers faced a conundrum.
            They yearned for a standardized way to connect various hardware components to their motherboards, a system
            that would transcend the limitations of the past. Enter the protagonist of our tale: the Peripheral
            Component Interconnect, better known as PCI. </p>
    </section>
    <br />
    <!--|--\(^-^)/--|-->
    <h2>Chapter 1: The Genesis</h2>
    <p> Born in 1992, PCI emerged as a revolutionary interface, poised to replace older and slower technologies like ISA
        (Industry Standard Architecture) and VESA (Video Electronics Standards Association) Local Bus. The goal? To
        provide a versatile, high-speed channel for components like graphics cards, network cards, and storage devices
        to communicate with the motherboard and CPU. This was like opening a high-speed expressway within the computer,
        allowing data to flow like never before. </p>
    <h2>Chapter 2: The Growth Spurt - PCI-X</h2>
    <p> As technology galloped ahead, the demands of power users and enterprise environments escalated. The original
        PCI, though remarkable, couldn't keep up. Thus, the PCI-X (PCI eXtended) standard was born around the late
        1990s. With increased speeds and improved data transfer capabilities, it aimed to cater to the needs of servers
        and high-performance computing systems. Imagine a turbocharged version of PCI, built for the data-hungry demands
        of the era. </p>
    <h2>Chapter 3: The Revolution - PCIe (PCI Express)</h2>
    <p> Just when you thought the story couldn't get any juicier, along comes PCIe in the early 2000s, the crown jewel
        of the PCI family. PCI Express ditched the parallel communication method of its predecessors and embraced a
        high-speed, serial connection strategy. This allowed for even faster data transfer rates and better scalability.
        Plus, it eliminated the bottlenecks that often plagued parallel interfaces. It's like replacing a congested city
        road with a sleek, multi-lane highway system. </p>
    <h2>Why the Different Sizes and Speeds, You Ask?</h2>
    <section class="colms2">
        <strong style="padding-left: 25%; font-size: 1.2rem;">1. Form Factors:</strong>
        <br />
        <p tabindex="0" class="selection"> Computers come in all shapes and sizes, from slim laptops to gargantuan
            server racks. To accommodate this diversity, PCI Express slots come in different physical sizes or form
            factors, denoted by the number of lanes they support. The most common sizes are x1, x4, x8, and x16, with
            "x" representing the number of lanes. More lanes mean more data can flow simultaneously, like adding more
            lanes to a highway. </p>
        <strong style="padding-left: 25%; font-size: 1.2rem;">2. Speed Grades:</strong>
        <br />
        <p tabindex="0" class="selection"> Just as a car's speedometer measures velocity, PCIe slots are classified by
            their maximum data transfer rates, commonly referred to as "generations." The higher the generation, the
            faster the speed. PCIe 1.0, 2.0, 3.0, 4.0, and 5.0 have successively upped the ante, enabling mind-boggling
            data transfer rates. Imagine upgrading your car's engine for more horsepower with each new generation. </p>
    </section>
    <h2>Epilogue: The Unending Saga of Evolution</h2>
    <p> PCI and its iterations have been a cornerstone of computer connectivity for decades. They've witnessed the rise
        of the internet, the explosion of digital media, and the proliferation of artificial intelligence. Today, PCIe
        4.0 and 5.0 are setting the stage for the future, with speeds that boggle the mind. As technology evolves, so
        will these interfaces, continuing to bridge the gap between our hardware dreams and the motherboard reality. And
        thus, the saga of PCI marches on, a testament to the relentless pursuit of progress in the ever-expanding
            universe of computing. </p>
    </article>
    <hr style="border: 3px dashed darkgray; width: 70%;">
    <article class="fullbar hero4">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    <details class="container">
        <summary style="display: inline;cursor: pointer;" class="selection">
            <h2>This is the Story of Ajax a computer tech hired by a small company, armed with only one computer, Ajax
                needed to work hard in order to bring the company to the next level:</h2>
        </summary>
        <p> Amidst the urban jungle of towering skyscrapers and bustling streets, a hidden gem of ambition and
            aspiration thrived - a company that dared to dream beyond its modest office confines. In this unassuming
            oasis of innovation, the stage was set for a technological hero to rise. Enter Ajax, a modern-day wizard of
            the digital realm, whose skill set was an orchestra of ones and zeroes, ready to conduct the symphony of
            progress. </p>
        <p> As the doors of the company's office swung open, Ajax stepped in, his eyes scanning the compact workspace
            that held the promise of greatness. The company, fueled by determination but confined by limited resources
            and spatial constraints, had placed its hopes in this young tech savant. Ajax's reputation as a
            problem-solving virtuoso preceded him, earning him the title of the one-man IT brigade. </p>
        <p> Within the tapestry of this narrative, the role bestowed upon Ajax was not just a job; it was a
            responsibility to navigate the labyrinthine corridors of technology. From the break of dawn to the dying
            embers of twilight, Ajax was the sentinel guarding the gates of connectivity, the maestro conducting the
            symphony of software, and the craftsman keeping the hardware gears oiled and spinning. </p>
        <p> But this was no ordinary task. In this age of digital dynamism, the company's aspirations had outgrown their
            initial computer infrastructure. The existing machine, once a nimble steed, now limped under the weight of
            multitasking demands. It juggled file storage, network hosting, and the ever-present hum of crucial
            applications. Multitasking had become a bottleneck, like a crowded intersection during rush hour. </p>
        <p> Ajax, armed with a mind that was part engineer and part magician, recognized the challenges laid bare before
            him. With each passing day, the urgency grew - the need for streamlined efficiency, accelerated processing
            power, and expanded capabilities was like a crescendo in his mind. </p>
        <p> As he delved deep into the world of possibilities, Ajax's solution unfolded like a map to a hidden treasure.
            In the arsenal of modern computer architecture, the answer lay in a trio of PCI cards, each a key to unlock
            a realm of enhanced performance. The RAID controller card emerged as the guardian of data integrity,
            ensuring that the company's valuable information was shielded from the whims of chance. The network
            interface card promised to transform the sluggish internet connection into a superhighway of digital
            communication. And the multi-port USB expansion card, like a magician's hat, conjured additional ports to
            accommodate the ever-growing array of devices. </p>
        <p> With a determination that mirrored the company's vision, Ajax embarked on a journey of transformation. The
            PCI cards slid seamlessly into their designated slots, the clicks resonating like the turning of a key in a
            long-lost lock. The computer, once a struggling orchestra out of tune, suddenly roared to life with the
            harmonious melodies of rejuvenation. The RAID controller orchestrated a symphony of data protection, the
            network interface card led a chorus of lightning-fast connectivity, and the USB expansion card orchestrated
            a ballet of peripheral synchronization. </p>
        <p> And thus, the tale took its glorious turn. Days turned into weeks, and weeks into months, and the
            once-struggling company began to thrive. Efficiency cascaded through every task, projects danced seamlessly
            from conception to completion, and the underdog computer, once gasping for breath, stood proud as the heart
            of the operation. Ajax, with his PCI magic, had transcended the constraints of resources and space, becoming
            the alchemist that turned challenges into stepping stones to success. </p>
        <p> But every story has its final act. With business booming and the company's horizons stretching ever wider, a
            new challenge loomed on the horizon. The once-modest ambitions now demanded more power, more resources, and
            more technology. It was time for a second computer. Ajax, armed with the knowledge gained from his
            triumphant PCI endeavor, presented the case to management. His proposal was met with understanding nods, for
            his track record had earned him the trust of decision-makers. A new computer would not just be a piece of
            hardware; it would be an investment in the company's flourishing future. </p>
        <p> And so, a second computer joined the ensemble, bringing with it a symphony of possibilities. The company,
            once confined by limitations, now had the tools to amplify its impact. Ajax's journey, from overcoming
            challenges with PCI magic to advocating for expansion, was a testament to the indomitable spirit of one-man
            IT. As he continued to be the guardian of the company's technological aspirations, he also stood as a beacon
            of inspiration, proving that even in a world of constraints, innovation and dedication could unlock the
            doors to boundless potential. </p>
    </details>
    </article>
    <br />
    <!--|--\(^-^)/--|-->
    <article class="fullbar hero4">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    <h2>Real-Life Applications of PCI Expansion Slots:</h2>
    <p>
        <strong>1. Graphics Enhancement:</strong> One of the most common applications is installing a dedicated graphics
        card into a PCIe x16 slot. This can dramatically improve gaming performance, video editing, and
        graphic-intensive tasks.
    </p>
    <p>
        <strong>2. Improved Network Connectivity:</strong> Adding a PCIe network card with enhanced capabilities can
        lead to faster internet speeds, reduced latency, and better online gaming experiences.
    </p>
    <p>
        <strong>3. Expanded Storage:</strong> PCIe SSD cards can boost storage speeds significantly, making data access
        and application loading lightning-fast.
    </p>
    <p>
        <strong>4. Audio Enhancement:</strong> Audiophiles and content creators can benefit from dedicated sound cards,
        which provide higher audio quality and support for advanced audio tasks.
    </p>
    <p>
        <strong>5. USB Expansion:</strong> A PCIe USB card can add more USB ports, accommodating a growing collection of
        peripherals like external hard drives, printers, and input devices.
    </p>
    <p>
        <strong>6. Specialized Hardware:</strong> Various PCIe cards cater to specific needs, such as TV tuner cards for
        watching and recording television content, and RAID controller cards for data redundancy and performance.
    </p>
    <p>
        <strong>7. Video Capture and Editing:</strong> Capture cards enable users to record and stream gameplay or other
        video content, while video editing cards accelerate rendering and editing processes.
    </p>
    <ul>
        <h2>Harnessing Upgradability for Entry-Level Users:</h2>
    </ul>
    <section class="colms2">
        <fieldset style="text-align: center">
            <legend>1. Identify Needs:</legend>
            <p tabindex="0" class="selection"> Determine what areas of your computer's performance need enhancement. Is
                it gaming, storage, networking, or audio quality? </p>
        </fieldset>
        <fieldset style="text-align: center">
            <legend>2. Research Compatibility:</legend>
            <p tabindex="0" class="selection"> Check your computer's motherboard manual or manufacturer's website to
                confirm available PCIe slots and their specifications (e.g., x16, x4, x1) and compatibility with
                different cards. </p>
        </fieldset>
        <fieldset style="text-align: center">
            <legend>3. Choose Wisely:</legend>
            <p tabindex="0" class="selection"> Based on your needs and compatibility, select the appropriate PCI card.
                Remember, not all slots are equal; x16 is typically used for graphics cards, while x1 slots can
                accommodate a variety of expansion cards. </p>
        </fieldset>
        <fieldset style="text-align: center">
            <legend>4. Install with Care:</legend>
            <p tabindex="0" class="selection"> Before inserting the card, power off and unplug your computer. Insert the
                card firmly into the appropriate slot and secure it with any included brackets or screws. </p>
        </fieldset>
        <fieldset style="text-align: center">
            <legend>5. Update Drivers:</legend>
            <p tabindex="0" class="selection"> Once the hardware is installed, download and install the latest drivers
                from the manufacturer's website to ensure optimal performance. </p>
        </fieldset>
        <fieldset style="text-align: center">
            <legend>6. Configure Software:</legend>
            <p tabindex="0" class="selection"> Some cards may require software configuration or setup. Follow the
                instructions provided by the manufacturer. </p>
        </fieldset>
        <fieldset style="text-align: center">
            <legend>7. Enjoy the Boost:</legend>
            <p tabindex="0" class="selection"> With your new PCI card installed and configured, you should notice
                improvements in the specific area you targeted, whether it's gaming, networking, or storage. </p>
        </fieldset>
        <fieldset style="text-align: center">
            <legend>8. Keep Learning:</legend>
            <p tabindex="0" class="selection"> Explore other possibilities for expansion. As you become more comfortable
                with hardware upgrades, you can venture into more advanced installations, such as multiple GPUs for
                gaming or RAID setups for data storage. </p>
        </fieldset>
        <fieldset style="text-align: center;">
            <legend>9. Monitor Compatibility:</legend>
            <p tabindex="0" class="selection"> Keep in mind that as technology evolves, new cards may become available
                that could further enhance your system's capabilities. </p>
        </fieldset>
    </section>
    <p tabindex="0" class="selection"> By understanding the practical applications of PCI expansion slots and making
        informed choices, entry-level computer users can unlock the true potential of their systems. Embracing
        upgradability transforms a basic computer into a customizable powerhouse that can adapt to changing needs and
        technologies, all without the need for a complete system overhaul. </p>
    <table style="table-layout:fixed;width:468pt;text-align: center;">
        <colgroup>
            <col />
            <col />
        </colgroup>
        <tbody>
            <tr style="height:42pt">
                <td style="vertical-align:top;overflow:hidden;overflow-wrap:break-word;">
                    <h3>[Free Research Preview. ChatGPT August 3 Version 2023]</h3>
                    <hr />
                </td>
            </tr>
        </tbody>
    </table>
    <a href="#scroll" style="float:right;translate: 0px -75px">
        <h3>back to top</h3>
    </a>
    </article>
 
 

    <?php
}

function hw_scanners() {
    echo "<h1 class=\"fullbar\">Scanners</h1>";
}

function hw_printers() {
    echo "<h1 class=\"fullbar\">Printers</h1>";
}

function hw_console_controllers() {
    echo "<h1 class=\"fullbar\">Console Controllers</h1>";
}

function hw_joysticks (){
    echo "<h1 class=\"fullbar\">Joystick</h1>";
}

function hw_tablets (){
    echo "<h1 class=\"fullbar\">Tablets</h1>";
}

function hw_microphones (){
    echo "<h1 class=\"fullbar\">Microphones</h1>";
}

function hw_headsets () {
    echo "<h1 class=\"fullbar\">Headsets</h1>";
}

function hw_headphones () {
    echo "<h1 class=\"fullbar\">Headphones</h1>";
}

function hw_audio_mixers () {
    echo "<h1 class=\"fullbar\">Audio Mixers</h1>";
}

function hw_controllers () {
    echo "<h1 class=\"fullbar\">Controllers</h1>";
}

function hw_gaming_uniforms () {
    echo "<h1 class=\"fullbar\">Gaming Uniforms</h1>";
}

function hw_pens_pencils_tablets () {
    echo "<h1 class=\"fullbar\">Pens, Pencils, Tablets</h1>";
}

function hw_chairs () {
    echo "<h1 class=\"fullbar\">Chairs</h1>";
}

function hw_desks () {
    echo "<h1 class=\"fullbar\">Desks</h1>";
}

function hw_anti_slip_mats () {
    echo "<h1 class=\"fullbar\">Anti Slip Mats</h1>";
}

function hw_speakers_and_subwoofers () {
    echo "<h1 class=\"fullbar\">Speakers and Subwoofers</h1>";
}

    include 'anvil/structure.php';
?>