<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('hardware');
global $content, $key;
?>
<?php include_once('navBarHW.php'); ?>

<article class="article fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    <div id="nav">.:
        <a href="#history" class="print"><?= $content[644][$key] ?? ''; ?></a> > 
        <a href="#printers" class="print"><?= $content[645][$key] ?? ''; ?></a> > 
        <a href="#entry" class="print"><?= $content[646][$key] ?? ''; ?></a> > 
        <a href="#advanced" class="print"><?= $content[647][$key] ?? ''; ?></a> > 
        <a href="#devices" class="print"><?= $content[648][$key] ?? ''; ?></a> > 
        <a href="#future" class="print"><?= $content[649][$key] ?? ''; ?></a> > 
        <a href="#technical" class="print"><?= $content[650][$key] ?? ''; ?></a> > 
        <a href="#office" class="print"><?= $content[651][$key] ?? ''; ?></a> > 
        <a href="#thermal" class="print"><?= $content[652][$key] ?? ''; ?></a>:.
    </div>
    
    <h1><a href="./#peripherals"><?= $content[653][$key] ?? ''; ?></a></h1>
    
    <h2>
        <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer0.jpg" title="Printer">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer0.webp" width="250px" class="fl">
        </a>
        <?= $content[654][$key] ?? ''; ?>
    </h2>
    <div class="spacer"><hr></div>
    
    <h3>
        <span class="card2">
            <h2 id="history"><?= $content[655][$key] ?? ''; ?></h2>
            <a href="https://en.wikipedia.org/wiki/Ink#History"><span class="center"><?= $content[656][$key] ?? ''; ?></span></a><br />
            <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer3.jpg" title="Ancient Printing">
                <img src="https://latinospc.com/images/hardware/hw/printer/printer3.webp" width="150px" class="rtl">
            </a>
            <?= $content[657][$key] ?? ''; ?>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[658][$key] ?? ''; ?></h2>
            <a href="https://en.wikipedia.org/wiki/Printing_press"><span class="center"><?= $content[659][$key] ?? ''; ?></span></a><br />
            <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer16.jpg" title="Printing Press">
                <img src="https://latinospc.com/images/hardware/hw/printer/printer16.webp" width="150px" class="rtl">
            </a>
            <?= $content[660][$key] ?? ''; ?>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[661][$key] ?? ''; ?></h2>
            <a href="https://ageofrevolution.org/200-object/koenigs-steam-powered-printing-press/">
                <span class="center"><?= $content[662][$key] ?? ''; ?></span>
            </a><br />
            <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer17.jpg" title="Steam Press">
                <img src="https://latinospc.com/images/hardware/hw/printer/printer17.webp" width="150px" class="rtl">
            </a>
            <?= $content[663][$key] ?? ''; ?>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[664][$key] ?? ''; ?></h2>
            <a href="https://en.wikipedia.org/wiki/Teleprinter"><span class="center"><?= $content[665][$key] ?? ''; ?></span></a><br />
            <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer18.jpg" title="Electric Typewriter">
                <img src="https://latinospc.com/images/hardware/hw/printer/printer18.webp" width="150px" class="rtl">
            </a>
            <?= $content[666][$key] ?? ''; ?>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[667][$key] ?? ''; ?></h2>
            <span class="center"><a href="https://en.wikipedia.org/wiki/Laser_printing"><?= $content[668][$key] ?? ''; ?></a></span><br />
            <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer19_0.jpg" title="Dot Matrix Printer">
                <img src="https://latinospc.com/images/hardware/hw/printer/printer19_0.webp" width="150px" class="rtl">
            </a>
            <?= $content[669][$key] ?? ''; ?>
            <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer19_1.jpg" title="Laser Printer">
                <img src="https://latinospc.com/images/hardware/hw/printer/printer19_1.webp" width="150px" class="fl">
            </a>
            <br /><br />
            <span class="center"><?= $content[670][$key] ?? ''; ?></span><br />
            <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer19.jpg" title="InkJet Printer">
                <img src="https://latinospc.com/images/hardware/hw/printer/printer19.webp" width="150px" class="rtl">
            </a>
            <?= $content[671][$key] ?? ''; ?>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[672][$key] ?? ''; ?></h2>
            <span class="center"><a href="https://en.wikipedia.org/wiki/3D_printing"><?= $content[673][$key] ?? ''; ?></a></span><br />
            <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer20.jpg" title="3D Print">
                <img src="https://latinospc.com/images/hardware/hw/printer/printer20.webp" width="150px" class="rtl">
            </a>
            <?= $content[674][$key] ?? ''; ?>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[675][$key] ?? ''; ?></h2>
            <span class="center"><?= $content[676][$key] ?? ''; ?></span><br />
            <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer21.jpg" title="Eco Friendly">
                <img src="https://latinospc.com/images/hardware/hw/printer/printer21.webp" width="150px" class="rtl">
            </a>
            <?= $content[677][$key] ?? ''; ?>
            <div class="crl"></div>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[678][$key] ?? ''; ?></h2>
            <span class="center"><?= $content[679][$key] ?? ''; ?></span><br />
            <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer22.jpg" title="Printers in the Future">
                <img src="https://latinospc.com/images/hardware/hw/printer/printer22.webp" width="150px" class="rtl">
            </a>
            <?= $content[680][$key] ?? ''; ?>
            <div class="spacer"></div>
        </span>
        <div class="spacer"><hr></div>
        <div class="spacer"></div>
        
        <?= $content[681][$key] ?? ''; ?>
    </h3>
</article>

<article class="article fullbar">
    <div class="center">
        <hr id="printers"><br />
        <a href="#nav">
            <div class="spacer_shape"><h2><?= $content[682][$key] ?? ''; ?></h2></div>
        </a><br />
        <hr>
    </div>
    
    <h3>
        <span class="printer"><?= $content[683][$key] ?? ''; ?></span>
        <div class="spacer"></div>
        <span class="printer" id="m">1. Multifunctionality:</span> <?= substr($content[684][$key] ?? '', 19); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">2. Wireless Connectivity:</span> <?= substr($content[685][$key] ?? '', 23); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">3. Cloud Printing:</span> <?= substr($content[686][$key] ?? '', 16); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">4. Mobile Printing Apps:</span> <?= substr($content[687][$key] ?? '', 22); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">5. High-Quality Printing:</span> <?= substr($content[688][$key] ?? '', 22); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">6. Energy Efficiency:</span> <?= substr($content[689][$key] ?? '', 19); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">7. Touchscreen Interfaces:</span> <?= substr($content[690][$key] ?? '', 24); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">8. Automatic Duplexing:</span> <?= substr($content[691][$key] ?? '', 21); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">9. 3D Printing:</span> <?= substr($content[692][$key] ?? '', 13); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">10. Eco-Friendly Initiatives:</span> <?= substr($content[693][$key] ?? '', 26); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">11. AI and Automation:</span> <?= substr($content[694][$key] ?? '', 18); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">12. Security Features:</span> <?= substr($content[695][$key] ?? '', 19); ?>
        <br /><br />
        <div class="spacer_shape">
            <span class="center"><?= $content[696][$key] ?? ''; ?></span>
        </div>
    </h3>
</article>

<article class="article fullbar">
    <hr id="entry">
    <h2><?= $content[697][$key] ?? ''; ?></h2>
    <h3 class="center">
        <a href="#nav"><span class="printer" id="m"><?= $content[698][$key] ?? ''; ?></span></a>
    </h3>
    <hr>
    <h3 style="column-count: auto;">
        <ul class="ex_menu"><li class="print">1. <a href="https://en.wikipedia.org/wiki/Inkjet_printing">Inkjet Printers:</a></li></ul> 
        <?= substr($content[699][$key] ?? '', 17); ?>
        <hr>
        <ul class="ex_menu"><li class="print">2. <a href="https://www.digitaltrends.com/computing/what-is-a-monochrome-printer-and-do-you-need-one/">Monochrome Laser Printers:</a></li></ul>
        <?= substr($content[700][$key] ?? '', 27); ?>
        <hr>
        <ul class="ex_menu"><li class="print">3. <a href="https://en.wikipedia.org/wiki/Multi-function_printer">All-in-One (Multifunction) Printers:</a></li></ul>
        <?= substr($content[701][$key] ?? '', 35); ?>
        <img src="https://latinospc.com/images/clouds.webp" height="" class="rtl">
    </h3>
    <hr>
    
    <h3 class="printer" id="m"><?= $content[702][$key] ?? ''; ?></h3>
    <h3>
        <?= $content[703][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[704][$key] ?? ''; ?>
        <div class="spacer"></div>
        <div class="colms2">
            <?= $content[705][$key] ?? ''; ?>
            <div class="spacer"></div>
            <?= $content[706][$key] ?? ''; ?>
            <div class="spacer"></div>
            <?= $content[707][$key] ?? ''; ?>
            <div class="spacer"></div>
            <?= $content[708][$key] ?? ''; ?>
            <div class="spacer"></div>
            <?= $content[709][$key] ?? ''; ?>
            <div class="spacer"></div>
            <?= $content[710][$key] ?? ''; ?>
        </div>
    </h3>
    <div class="spacer"></div><hr>
    
    <h3>
        <div class="printer"><div class="center" id="m"><?= $content[711][$key] ?? ''; ?></div></div>
        <div class="spacer"></div>
        <div>
            <span class="print">1.<a href="https://www.hp.com/us-en/printers/deskjet-printers.html">HP DeskJet Series:</a></span> 
            <a href="https://www.hp.com/us-en/home.html">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/HP_logo_2012.svg" class="fl" width="10%">
            </a>
            <?= substr($content[712][$key] ?? '', 19); ?>
            <div class="spacer"></div>
            <span class="print">2. <a href="https://epson.com/For-Home/Printers/Inkjet/c/h110?q=%3Aname-asc%3AdiscontinuedFlag%3Afalse%3APrinters+Facets%2CPrinter+Series%3AExpression&text=#scrollTgt_onRefresh">Epson Expression Home Series:</a></span> 
            <a href="https://epson.com/usa">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Epson_logo.svg" class="fl" width="10%">
            </a>
            <?= substr($content[713][$key] ?? '', 30); ?>
            <div class="spacer"></div>
            <span class="print">3. <a href="https://www.brother-usa.com/products/hll2300d">Brother HL-L2300D:</a></span> 
            <a href="https://www.brother-usa.com/home">
                <img src="https://upload.wikimedia.org/wikipedia/commons/8/87/Brother_logo.svg" class="fl" width="10%">
            </a>
            <?= substr($content[714][$key] ?? '', 18); ?>
            <div class="spacer"></div>
            <span class="print">4. <a href="https://www.usa.canon.com/shop/printers?facet_printers_printer_series=634">Canon PIXMA Series:</a></span> 
            <a href="https://www.usa.canon.com/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Canon_wordmark.svg" class="fl" width="10%">
            </a>
            <?= substr($content[715][$key] ?? '', 19); ?>
        </div>
    </h3>
    
    <h3 class="spacer_shape">
        <span class="center"><?= $content[716][$key] ?? ''; ?></span>
        <br />
        <?= $content[717][$key] ?? ''; ?><br /><br />
        <?= $content[718][$key] ?? ''; ?><br /><br />
        <?= $content[719][$key] ?? ''; ?><br /><br />
        <?= $content[720][$key] ?? ''; ?><br /><br />
        <?= $content[721][$key] ?? ''; ?>
    </h3>
    <h2><?= $content[722][$key] ?? ''; ?></h2>
</article>

<article class="article fullbar">
    <hr id="advanced">
    <h2><?= $content[723][$key] ?? ''; ?></h2>
    <a href="#nav"><span class="printer"><h3 class="center" id="adv"><?= $content[724][$key] ?? ''; ?></h3></span></a>
    
    <h3 class="spacer_shape">
        <span class="center"><?= $content[725][$key] ?? ''; ?></span>
    </h3>
    <div class="spacer"></div>
    
    <h3 class="colms">
        <div class="card2"><span class="printer" id="q">High-Quality Printing:</span> <?= substr($content[726][$key] ?? '', 22); ?></div>
        <div class="spacer"></div>
        <div class="card2"><span class="printer" id="q">Speed and Efficiency:</span> <?= substr($content[727][$key] ?? '', 21); ?></div>
        <br /><br />
        <div class="card2"><span class="printer" id="q">Network Connectivity:</span> <?= substr($content[728][$key] ?? '', 21); ?></div>
        <div class="spacer"></div>
    </h3>

    <h3 class="colms">
        <span class="printer" id="q">Large Paper Handling:</span> <?= substr($content[729][$key] ?? '', 22); ?>
        <br /><br /><br />
        <div class="printer" id="q">Professional Color Accuracy:</div> <?= substr($content[730][$key] ?? '', 29); ?>
        <br /><br />
        <span class="printer" id="q">Additional Paper Trays:</span> <?= substr($content[731][$key] ?? '', 24); ?>
        <div class="spacer"></div>
    </h3>

    <h3 class="colms2">
        <span class="printer" id="q">Security Features:</span> <?= substr($content[732][$key] ?? '', 18); ?>
        <div class="spacer"></div>
        <span class="printer" id="q">PostScript Support:</span> <?= substr($content[733][$key] ?? '', 19); ?>
        <div class="spacer"></div>
        <span class="printer" id="q">Multifunction Options:</span> <?= substr($content[734][$key] ?? '', 22); ?>
        <div class="spacer"></div>
        <span class="printer" id="q">Commercial and Industrial Printing:</span> <?= substr($content[735][$key] ?? '', 36); ?>
    </h3>
    <div class="spacer"></div>

    <a href="#adv"><span class="printer"><h3 class="center"><?= $content[736][$key] ?? ''; ?></h3></span></a>

    <h2><?= $content[737][$key] ?? ''; ?></h2>
    <h3>
        <a rel="efxample_group" href="https://latinospc.com/images/artificialintelligence/printer/2.jpg" title="LAPC 3d Print">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer3d.webp" class="fl" alt="3d Printed Image">
        </a>
        <?= $content[738][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[739][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[740][$key] ?? ''; ?>
        <div class="spacer"></div>
        <a rel="efxample_group" href="https://latinospc.com/images/artificialintelligence/printer/4.jpg" title="LAPC 3d Print">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer3d_3.webp" class="rtl" alt="3d Printed Image">
        </a>
        <?= $content[741][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[742][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[743][$key] ?? ''; ?>
        <div class="spacer"></div>
        <a rel="efxample_group" href="https://latinospc.com/images/artificialintelligence/printer/1.jpg" title="LAPC 3d Print">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer3d_1.webp" class="fl" alt="3d Printed Image">
        </a>
        <?= $content[744][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[745][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[746][$key] ?? ''; ?>
        <div class="spacer"></div>
        <a rel="efxample_group" href="https://latinospc.com/images/artificialintelligence/printer/3.jpg" title="LAPC 3d Print">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer3d_2.webp" class="rtl" alt="3d Printed Image">
        </a>
        <?= $content[747][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[748][$key] ?? ''; ?>
    </h3>
    <h2><?= $content[749][$key] ?? ''; ?></h2>
</article>

<article class="article fullbar">
    <hr id="devices">
    <a href="#nav" title="Top">
        <h2 class="spacer_shape"><?= $content[750][$key] ?? ''; ?></h2>
    </a>
    
    <h3 class="colms2">
        <a href="https://en.wikipedia.org/wiki/Printing_press" class="print">Gutenberg Printing Press</a> (1440s) - 
        <a href="https://www.britannica.com/biography/Johannes-Gutenberg" class="print">Johannes Gutenberg:</a>
        <a href="https://en.wikipedia.org/wiki/Printing_press#/media/File:Chodowiecki_Basedow_Tafel_21_c_Z.jpg" title="Printing Press">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer4.webp" class="rtl" alt="Printing Press">
        </a>
        <br />- <?= $content[751][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Linotype_machine" class="print">Linotype Machine</a> (1886) - 
        <a href="https://en.wikipedia.org/wiki/Ottmar_Mergenthaler" class="print">Ottmar Mergenthaler</a>:
        <a href="https://en.wikipedia.org/wiki/Linotype_machine#/media/File:Linotype_machines,_Anthony_Hordern_and_Sons_department_store,_c._1935.jpg">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer5.webp" class="rtl" alt="Linotype Machine" width="300px">
        </a>
        <br />- <?= $content[752][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Monotype_system" class="print">Monotype System</a> (1887) - 
        <a href="https://en.wikipedia.org/wiki/Tolbert_Lanston" class="print">Tolbert Lanston:</a>
        <a href="https://en.wikipedia.org/wiki/Monotype_system#/media/File:Matrixcase-bembo-16pts.jpg">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer6.webp" alt="Monotype matrix case" class="rtl" width="300px">
        </a>
        <br />- <?= $content[753][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Original_Heidelberg_Platen_Press" class="print">Heidelberg Windmill</a> (1913) - 
        <a href="https://en.wikipedia.org/wiki/Heidelberger_Druckmaschinen" class="print">Heidelberger Druckmaschinen AG:</a>
        <a href="https://en.wikipedia.org/wiki/Original_Heidelberg_Platen_Press#/media/File:Heidelberg_Platen_Press_front-left.jpg">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer7.webp" alt="Heidelberg Platen Press" class="rtl" width="300px">
        </a>
        <br />- <?= $content[754][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Xerox_914" class="print">Xerox 914</a> (1959) - 
        <br /> <a href="https://en.wikipedia.org/wiki/Xerox#History" class="print">Xerox Corporation:</a>
        <a href="https://en.wikipedia.org/wiki/Xerox_914#/media/File:Xerox_914.jpg">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer8.webp" alt="Xerox 914" class="rtl" width="300px">
        </a>
        <br />- <?= $content[755][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://www.hp.com/hpinfo/abouthp/histnfacts/museum/imagingprinting/0018/index.html" class="print">HP LaserJet Printer</a> (1984) - 
        <a href="https://www.hp.com/hpinfo/abouthp/histnfacts/museum/imagingprinting/0018/0018threeqtr.html" class="print">Hewlett-Packard (HP):</a>
        <a href="https://www.computerhistory.org/revolution/input-output/14/351/1680">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer9.webp" alt="HP Laser Jet" class="rtl" width="300px">
        </a>
        <br />- <?= $content[756][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://spectrum.ieee.org/the-consumer-electronics-hall-of-fame-epson-stylus-color" class="print">Epson Stylus Color</a> (1994) - 
        <a href="https://corporate.epson/en/about/history/milestone-products/1994-5-stylus-color.html" class="print">Seiko Epson Corporation:</a>
        <a href="https://corporate.epson/en/about/history/milestone-products/" title="Epson milestone-products">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer10.webp" alt="Epson Stylus Color" class="fl" width="300px">
        </a>
        <br />- <?= $content[757][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/RepRap" class="print" style="margin-left: 50px;">RepRap</a> (2005) - 
        <br /> <a href="https://en.wikipedia.org/wiki/Adrian_Bowyer" class="print" style="margin-left: 50px;">Dr. Adrian Bowyer:</a>
        <a href="https://en.wikipedia.org/wiki/RepRap#/media/File:Extrusion_of_hexagon_2nd_layer_closeup.jpg">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer11.webp" alt="RepRap" class="fl" width="300px">
        </a>
        <br />- <?= $content[758][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/MakerBot" class="print" style="margin-left: 50px;">MakerBot Replicator</a> (2009) - 
        <a href="https://www.makerbot.com/resources/3d-printing-news/" class="print" style="margin-left: 50px;">MakerBot Industries:</a>
        <a href="https://en.wikipedia.org/wiki/MakerBot#/media/File:MakerBot_ThingOMatic_Bre_Pettis.jpg">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer12.webp" alt="Maker Bot Replicator" width="300px">
        </a>
        <br />- <?= $content[759][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Formlabs" class="print" style="margin-left: 50px;">Formlabs Form 1</a> (2012) - 
        <br /> <a href="https://formlabs.com/resources/" class="print" style="margin-left: 50px;">Formlabs:</a>
        <a href="https://en.wikipedia.org/wiki/Formlabs#/media/File:Formlabs_Form2_Bild11_5184x2912_(24203075010).jpg">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer13.webp" alt="Form1" class="fl" width="300px">
        </a>
        <br />- <?= $content[760][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Ultimaker" class="print" style="margin-left: 50px;">Ultimaker Original</a> (2011) - 
        <br /> <a href="https://ultimaker.com/" class="print" style="margin-left: 50px;">Ultimaker:</a>
        <a href="https://en.wikipedia.org/wiki/Ultimaker#/media/File:Ultimaker_History_-_5_Ultimaker_Original_(28127007460).jpg">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer14.webp" alt="The Ultimaker Original" class="fl" width="300px">
        </a>
        <br />- <?= $content[761][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Aleph_Objects" class="print" style="margin-left: 50px;">LulzBot TAZ</a> (2012) - 
        <br /> <a href="https://lulzbot.com/explore/printers-for-creatives" class="print" style="margin-left: 50px;">lulzbot.com:</a>
        <a href="https://en.wikipedia.org/wiki/Aleph_Objects#/media/File:LulzBot_Mini_3D_Printer.jpg">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer15.webp" alt="LulBot Mini" class="fl" width="300px">
        </a>
        <br />- <?= $content[762][$key] ?? ''; ?>
    </h3>
    
    <h2><?= $content[763][$key] ?? ''; ?></h2>
    
    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer4.jpg" title="Gutenberg Printing Press"></a>
    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer5.jpg" title="Linotype Machine"></a>
    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer6.jpg" title="Monotype System"></a>
    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer7.jpg" title="Heidelberg Windmill"></a>
    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer8.jpg" title="Xerox 914"></a>
    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer9.jpg" title="HP LaserJet Printer"></a>
    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer10.jpg" title="Epson Stylus Color"></a>
    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer11.jpg" title="RepRap"></a>
    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer12.jpg" title="MakerBot Replicator"></a>
    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer13.jpg" title="Formlabs Form 1"></a>
    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer14.jpg" title="The Ultimaker Original"></a>
    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer15.jpg" title="LulBot Mini"></a>
    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/lightbox/printer00.jpg" title="Happy Printing"></a>
</article>

<article class="article fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    <hr id="future">
    <a href="#nav" title="Top">
        <h2 class="spacer_shape">
            <img src="https://latinospc.com/images/hardware/hw/printer/printer.webp" class="fl">
            <?= $content[764][$key] ?? ''; ?>
        </h2>
    </a>
    <h3>
        <span class="printer" id="m">1. 3D Printing Evolution:</span> <?= substr($content[765][$key] ?? '', 27); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">2. Bioprinting and Healthcare:</span> <?= substr($content[766][$key] ?? '', 30); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">3. Advanced Materials:</span> <?= substr($content[767][$key] ?? '', 22); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">4. Nanoprinting:</span> <?= substr($content[768][$key] ?? '', 16); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">5. Smart Printing and IoT Integration:</span> <?= substr($content[769][$key] ?? '', 37); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">6. AI and Print Optimization:</span> <?= substr($content[770][$key] ?? '', 29); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">7. Sustainable Printing:</span> <?= substr($content[771][$key] ?? '', 24); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">8. Augmented Reality Printing:</span> <?= substr($content[772][$key] ?? '', 31); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">9. Mass Customization:</span> <?= substr($content[773][$key] ?? '', 22); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">10. Remote Printing and Cloud Services:</span> <?= substr($content[774][$key] ?? '', 40); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">11. Educational and Collaborative Printing:</span> <?= substr($content[775][$key] ?? '', 44); ?>
        <div class="spacer"></div>
        <span class="printer" id="m">12. Blockchain and Document Security:</span> <?= substr($content[776][$key] ?? '', 36); ?>
    </h3>
    
    <h3 class="spacer_shape">
        <div class="card2"><?= $content[777][$key] ?? ''; ?></div>
    </h3>
</article>

<article class="article fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    <hr id="technical">
    <h2><a href="#nav" title="Top"><?= $content[778][$key] ?? ''; ?></a></h2>
    <h3>
        <?= $content[779][$key] ?? ''; ?><br /><br />
        <?= $content[780][$key] ?? ''; ?><br /><br />
        <?= $content[781][$key] ?? ''; ?><br /><br />
        <?= $content[782][$key] ?? ''; ?><br /><br />
        <?= $content[783][$key] ?? ''; ?><br /><br />
        <?= $content[784][$key] ?? ''; ?><br /><br />
        <?= $content[785][$key] ?? ''; ?><br /><br />
        <?= $content[786][$key] ?? ''; ?><br /><br />
        <?= $content[787][$key] ?? ''; ?><br /><br />
        <?= $content[788][$key] ?? ''; ?><br /><br />
        <?= $content[789][$key] ?? ''; ?><br /><br />
        <?= $content[790][$key] ?? ''; ?><br /><br />
        <?= $content[791][$key] ?? ''; ?><br /><br />
        
        <div class="printer"><?= $content[792][$key] ?? ''; ?></div><br />
        <?= $content[793][$key] ?? ''; ?><br /><br />
        <?= $content[794][$key] ?? ''; ?><br /><br />
        <?= $content[795][$key] ?? ''; ?><br /><br />
        <?= $content[796][$key] ?? ''; ?><br /><br />
        <?= $content[797][$key] ?? ''; ?><br /><br />
        <?= $content[798][$key] ?? ''; ?><br /><br />
        <?= $content[799][$key] ?? ''; ?><br /><br />
        <?= $content[800][$key] ?? ''; ?>
    </h3>
</article>

<article class="article fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    <hr id="office">
    <a href="#nav">
        <h2 class="spacer_shape">
            <div class="card2"><?= $content[801][$key] ?? ''; ?></div>
        </h2>
    </a>
    
    <h3>
        <div class="printer"><?= $content[802][$key] ?? ''; ?></div><br />
        <?= $content[803][$key] ?? ''; ?>
        <div class="spacer"></div>
        
        <div class="printer"><?= $content[804][$key] ?? ''; ?></div><br />
        <?= $content[805][$key] ?? ''; ?>
        <div class="spacer"></div>
        
        <div class="printer"><?= $content[806][$key] ?? ''; ?></div><br />
        <?= $content[807][$key] ?? ''; ?>
        <div class="spacer"></div>
        
        <div class="printer"><?= $content[808][$key] ?? ''; ?></div><br />
        <?= $content[809][$key] ?? ''; ?>
        <div class="spacer"></div>
        
        <div class="printer"><?= $content[810][$key] ?? ''; ?></div><br />
        <?= $content[811][$key] ?? ''; ?>
        <div class="spacer"></div>
        
        <?= $content[812][$key] ?? ''; ?>
    </h3>
</article>

<article class="article fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    <hr id="thermal">
    <h2>
        <a href="#nav"><?= $content[813][$key] ?? ''; ?></a>
    </h2>
    
    <h3>
        <div id="m"><?= $content[814][$key] ?? ''; ?></div><br />
        <?= $content[815][$key] ?? ''; ?><br /><br />
        
        <div id="m"><?= $content[816][$key] ?? ''; ?></div><br />
        <?= $content[817][$key] ?? ''; ?>
    </h3>
    
    <h2><?= $content[818][$key] ?? ''; ?></h2>
    <h3 class="colms">
        <?= $content[819][$key] ?? ''; ?><br /><br />
        <?= $content[820][$key] ?? ''; ?><br /><br />
        <?= $content[821][$key] ?? ''; ?><br /><br />
        <?= $content[822][$key] ?? ''; ?><br /><br />
        <?= $content[823][$key] ?? ''; ?><br /><br />
        <?= $content[824][$key] ?? ''; ?>
    </h3>
    
    <h2><?= $content[825][$key] ?? ''; ?></h2>
    <h3 class="colms2">
        <?= $content[826][$key] ?? ''; ?><br /><br />
        <?= $content[827][$key] ?? ''; ?><br /><br />
        <?= $content[828][$key] ?? ''; ?><br /><br />
        <?= $content[829][$key] ?? ''; ?>
    </h3>
    
    <h2 class="spacer_shape">
        <div class="card2"><?= $content[830][$key] ?? ''; ?></div>
    </h2>
    
    <table style="table-layout:fixed;width:468pt">
        <colgroup><col /><col /></colgroup>
        <tbody>
            <tr style="height:42pt">
                <td style="vertical-align:top;overflow:hidden;overflow-wrap:break-word;">
                    <h3>[Free Research Preview. ChatGPT August 3 Version 2023]</h3>
                    <hr />
                </td>
            </tr>
        </tbody>
    </table>
</article>