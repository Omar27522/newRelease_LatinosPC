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
        <div class="carousel-group fl" style="margin-right: 15px;">
        <div class="multi-link-container">
            <div class="thumbnail-container">
                <span tabindex="0" class="linked-text-img" role="button" aria-label="Modern Multifunction Printer">
                    <img src="../images/hardware/hw/printer/printer0_thumb.webp"
                         alt="Printer"
                         title="Modern Multifunction Printer"
                         loading="lazy"
                         style="max-width: 250px; width: 100%; height: auto;" />
                </span>
            </div>
            <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
        </div>
    </div>
        <?= $content[654][$key] ?? ''; ?>
    </h2>
    <div class="spacer"><hr></div>
    
    <h3>
        <span class="card2">
            <h2 id="history"><?= $content[655][$key] ?? ''; ?></h2>
            <a href="https://en.wikipedia.org/wiki/Ink#History"><span class="center"><?= $content[656][$key] ?? ''; ?></span></a><br />
            <div class="carousel-group rtl" style="margin-left: 15px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="Ancient Woodblock Printing">
                            <img src="../images/hardware/hw/printer/printer3_thumb.webp"
                                 alt="Ancient Printing"
                                 title="Ancient Woodblock Printing"
                                 loading="lazy"
                                 style="max-width: 150px; width: 100%; height: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="1"></div>
                </div>
            </div>
            <?= $content[657][$key] ?? ''; ?>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[658][$key] ?? ''; ?></h2>
            <a href="https://en.wikipedia.org/wiki/Printing_press"><span class="center"><?= $content[659][$key] ?? ''; ?></span></a><br />
            <div class="carousel-group rtl" style="margin-left: 15px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="Gutenberg Movable Type Press">
                            <img src="../images/hardware/hw/printer/printer16_thumb.webp"
                                 alt="Printing Press"
                                 title="Gutenberg Movable Type Press"
                                 loading="lazy"
                                 style="max-width: 150px; width: 100%; height: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="2"></div>
                </div>
            </div>
            <?= $content[660][$key] ?? ''; ?>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[661][$key] ?? ''; ?></h2>
            <a href="https://ageofrevolution.org/200-object/koenigs-steam-powered-printing-press/">
                <span class="center"><?= $content[662][$key] ?? ''; ?></span>
            </a><br />
            <div class="carousel-group rtl" style="margin-left: 15px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="Steam-Powered Printing Press">
                            <img src="../images/hardware/hw/printer/printer17_thumb.webp"
                                 alt="Steam Press"
                                 title="Steam-Powered Printing Press"
                                 loading="lazy"
                                 style="max-width: 150px; width: 100%; height: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="3"></div>
                </div>
            </div>
            <?= $content[663][$key] ?? ''; ?>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[664][$key] ?? ''; ?></h2>
            <a href="https://en.wikipedia.org/wiki/Teleprinter"><span class="center"><?= $content[665][$key] ?? ''; ?></span></a><br />
            <div class="carousel-group rtl" style="margin-left: 15px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="Electric Typewriter & Teleprinter">
                            <img src="../images/hardware/hw/printer/printer18_thumb.webp"
                                 alt="Electric Typewriter"
                                 title="Electric Typewriter & Teleprinter"
                                 loading="lazy"
                                 style="max-width: 150px; width: 100%; height: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="4"></div>
                </div>
            </div>
            <?= $content[666][$key] ?? ''; ?>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[667][$key] ?? ''; ?></h2>
            <span class="center"><a href="https://en.wikipedia.org/wiki/Laser_printing"><?= $content[668][$key] ?? ''; ?></a></span><br />
            <div class="carousel-group rtl" style="margin-left: 15px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="Dot Matrix Impact Printer">
                            <img src="../images/hardware/hw/printer/printer19_0_thumb.webp"
                                 alt="Dot Matrix Printer"
                                 title="Dot Matrix Impact Printer"
                                 loading="lazy"
                                 style="max-width: 150px; width: 100%; height: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="5"></div>
                </div>
            </div>
            <?= $content[669][$key] ?? ''; ?>
            <div class="carousel-group fl" style="margin-right: 15px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="Early Laser Printer">
                            <img src="../images/hardware/hw/printer/printer19_1_thumb.webp"
                                 alt="Laser Printer"
                                 title="Early Laser Printer"
                                 loading="lazy"
                                 style="max-width: 150px; width: 100%; height: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="6"></div>
                </div>
            </div>
            <br /><br />
            <span class="center"><?= $content[670][$key] ?? ''; ?></span><br />
            <div class="carousel-group rtl" style="margin-left: 15px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="Thermal & InkJet Printing">
                            <img src="../images/hardware/hw/printer/printer19_thumb.webp"
                                 alt="InkJet Printer"
                                 title="Thermal & InkJet Printing"
                                 loading="lazy"
                                 style="max-width: 150px; width: 100%; height: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="7"></div>
                </div>
            </div>
            <?= $content[671][$key] ?? ''; ?>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[672][$key] ?? ''; ?></h2>
            <span class="center"><a href="https://en.wikipedia.org/wiki/3D_printing"><?= $content[673][$key] ?? ''; ?></a></span><br />
            <div class="carousel-group rtl" style="margin-left: 15px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="3D Additive Manufacturing Printer">
                            <img src="../images/hardware/hw/printer/printer20_thumb.webp"
                                 alt="3D Print"
                                 title="3D Additive Manufacturing Printer"
                                 loading="lazy"
                                 style="max-width: 150px; width: 100%; height: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="8"></div>
                </div>
            </div>
            <?= $content[674][$key] ?? ''; ?>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[675][$key] ?? ''; ?></h2>
            <span class="center"><?= $content[676][$key] ?? ''; ?></span><br />
            <div class="carousel-group rtl" style="margin-left: 15px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="Eco-Friendly Sustainable Printing">
                            <img src="../images/hardware/hw/printer/printer21_thumb.webp"
                                 alt="Eco Friendly"
                                 title="Eco-Friendly Sustainable Printing"
                                 loading="lazy"
                                 style="max-width: 150px; width: 100%; height: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="9"></div>
                </div>
            </div>
            <?= $content[677][$key] ?? ''; ?>
            <div class="crl"></div>
        </span>
        <div class="spacer"><hr></div>

        <span class="card2">
            <h2><?= $content[678][$key] ?? ''; ?></h2>
            <span class="center"><?= $content[679][$key] ?? ''; ?></span><br />
            <div class="carousel-group rtl" style="margin-left: 15px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="Next-Generation Future Printing">
                            <img src="../images/hardware/hw/printer/printer22_thumb.webp"
                                 alt="Printers in the Future"
                                 title="Next-Generation Future Printing"
                                 loading="lazy"
                                 style="max-width: 150px; width: 100%; height: auto;" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="10"></div>
                </div>
            </div>
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
        <img src="../images/clouds.webp" loading="lazy" height="" class="rtl">
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
                <img loading="lazy" src="https://upload.wikimedia.org/wikipedia/commons/a/ad/HP_logo_2012.svg" class="fl" width="10%">
            </a>
            <?= substr($content[712][$key] ?? '', 19); ?>
            <div class="spacer"></div>
            <span class="print">2. <a href="https://epson.com/For-Home/Printers/Inkjet/c/h110?q=%3Aname-asc%3AdiscontinuedFlag%3Afalse%3APrinters+Facets%2CPrinter+Series%3AExpression&text=#scrollTgt_onRefresh">Epson Expression Home Series:</a></span> 
            <a href="https://epson.com/usa">
                <img loading="lazy" src="https://upload.wikimedia.org/wikipedia/commons/5/59/Epson_logo.svg" class="fl" width="10%">
            </a>
            <?= substr($content[713][$key] ?? '', 30); ?>
            <div class="spacer"></div>
            <span class="print">3. <a href="https://www.brother-usa.com/products/hll2300d">Brother HL-L2300D:</a></span> 
            <a href="https://www.brother-usa.com/home">
                <img loading="lazy" src="https://upload.wikimedia.org/wikipedia/commons/8/87/Brother_logo.svg" class="fl" width="10%">
            </a>
            <?= substr($content[714][$key] ?? '', 18); ?>
            <div class="spacer"></div>
            <span class="print">4. <a href="https://www.usa.canon.com/shop/printers?facet_printers_printer_series=634">Canon PIXMA Series:</a></span> 
            <a href="https://www.usa.canon.com/">
                <img loading="lazy" src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Canon_wordmark.svg" class="fl" width="10%">
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
        <div class="carousel-group fl" style="margin-right: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="LAPC 3D Print - Complex Lattice">
                        <img src="../images/hardware/hw/printer/printer3d_thumb.webp"
                             alt="3d Printed Image"
                             title="LAPC 3D Print - Complex Lattice"
                             loading="lazy" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="11"></div>
            </div>
        </div>
        <?= $content[738][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[739][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[740][$key] ?? ''; ?>
        <div class="spacer"></div>
        <div class="carousel-group rtl" style="margin-left: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="LAPC 3D Print - Geometric Sculpture">
                        <img src="../images/hardware/hw/printer/printer3d_3_thumb.webp"
                             alt="3d Printed Image"
                             title="LAPC 3D Print - Geometric Sculpture"
                             loading="lazy" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="12"></div>
            </div>
        </div>
        <?= $content[741][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[742][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[743][$key] ?? ''; ?>
        <div class="spacer"></div>
        <div class="carousel-group fl" style="margin-right: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="LAPC 3D Print - Mechanical Prototype">
                        <img src="../images/hardware/hw/printer/printer3d_1_thumb.webp"
                             alt="3d Printed Image"
                             title="LAPC 3D Print - Mechanical Prototype"
                             loading="lazy" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="13"></div>
            </div>
        </div>
        <?= $content[744][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[745][$key] ?? ''; ?>
        <div class="spacer"></div>
        <?= $content[746][$key] ?? ''; ?>
        <div class="spacer"></div>
        <div class="carousel-group rtl" style="margin-left: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="LAPC 3D Print - Architectural Model">
                        <img src="../images/hardware/hw/printer/printer3d_2_thumb.webp"
                             alt="3d Printed Image"
                             title="LAPC 3D Print - Architectural Model"
                             loading="lazy" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="14"></div>
            </div>
        </div>
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
        <div class="carousel-group rtl" style="margin-left: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="Gutenberg Printing Press (1440s)">
                        <img src="../images/hardware/hw/printer/printer4_thumb.webp"
                             alt="Printing Press"
                             title="Gutenberg Printing Press (1440s)"
                             loading="lazy" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="15"></div>
            </div>
        </div>
        <br />- <?= $content[751][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Linotype_machine" class="print">Linotype Machine</a> (1886) - 
        <a href="https://en.wikipedia.org/wiki/Ottmar_Mergenthaler" class="print">Ottmar Mergenthaler</a>:
        <div class="carousel-group rtl" style="margin-left: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="Linotype Machine (1886)">
                        <img src="../images/hardware/hw/printer/printer5_thumb.webp"
                             alt="Linotype Machine"
                             title="Linotype Machine (1886)"
                             loading="lazy"
                             style="max-width: 300px; width: 100%; height: auto;" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="16"></div>
            </div>
        </div>
        <br />- <?= $content[752][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Monotype_system" class="print">Monotype System</a> (1887) - 
        <a href="https://en.wikipedia.org/wiki/Tolbert_Lanston" class="print">Tolbert Lanston:</a>
        <div class="carousel-group rtl" style="margin-left: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="Monotype System (1887)">
                        <img src="../images/hardware/hw/printer/printer6_thumb.webp"
                             alt="Monotype matrix case"
                             title="Monotype System (1887)"
                             loading="lazy"
                             style="max-width: 300px; width: 100%; height: auto;" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="17"></div>
            </div>
        </div>
        <br />- <?= $content[753][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Original_Heidelberg_Platen_Press" class="print">Heidelberg Windmill</a> (1913) - 
        <a href="https://en.wikipedia.org/wiki/Heidelberger_Druckmaschinen" class="print">Heidelberger Druckmaschinen AG:</a>
        <div class="carousel-group rtl" style="margin-left: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="Heidelberg Windmill (1913)">
                        <img src="../images/hardware/hw/printer/printer7_thumb.webp"
                             alt="Heidelberg Platen Press"
                             title="Heidelberg Windmill (1913)"
                             loading="lazy"
                             style="max-width: 300px; width: 100%; height: auto;" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="18"></div>
            </div>
        </div>
        <br />- <?= $content[754][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Xerox_914" class="print">Xerox 914</a> (1959) - 
        <br /> <a href="https://en.wikipedia.org/wiki/Xerox#History" class="print">Xerox Corporation:</a>
        <div class="carousel-group rtl" style="margin-left: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="Xerox 914 (1959)">
                        <img src="../images/hardware/hw/printer/printer8_thumb.webp"
                             alt="Xerox 914"
                             title="Xerox 914 (1959)"
                             loading="lazy"
                             style="max-width: 300px; width: 100%; height: auto;" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="19"></div>
            </div>
        </div>
        <br />- <?= $content[755][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://www.hp.com/hpinfo/abouthp/histnfacts/museum/imagingprinting/0018/index.html" class="print">HP LaserJet Printer</a> (1984) - 
        <a href="https://www.hp.com/hpinfo/abouthp/histnfacts/museum/imagingprinting/0018/0018threeqtr.html" class="print">Hewlett-Packard (HP):</a>
        <div class="carousel-group rtl" style="margin-left: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="HP LaserJet Printer (1984)">
                        <img src="../images/hardware/hw/printer/printer9_thumb.webp"
                             alt="HP Laser Jet"
                             title="HP LaserJet Printer (1984)"
                             loading="lazy"
                             style="max-width: 300px; width: 100%; height: auto;" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="20"></div>
            </div>
        </div>
        <br />- <?= $content[756][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://spectrum.ieee.org/the-consumer-electronics-hall-of-fame-epson-stylus-color" class="print">Epson Stylus Color</a> (1994) - 
        <a href="https://corporate.epson/en/about/history/milestone-products/1994-5-stylus-color.html" class="print">Seiko Epson Corporation:</a>
        <div class="carousel-group fl" style="margin-right: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="Epson Stylus Color (1994)">
                        <img src="../images/hardware/hw/printer/printer10_thumb.webp"
                             alt="Epson Stylus Color"
                             title="Epson Stylus Color (1994)"
                             loading="lazy"
                             style="max-width: 300px; width: 100%; height: auto;" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="21"></div>
            </div>
        </div>
        <br />- <?= $content[757][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/RepRap" class="print" style="margin-left: 50px;">RepRap</a> (2005) - 
        <br /> <a href="https://en.wikipedia.org/wiki/Adrian_Bowyer" class="print" style="margin-left: 50px;">Dr. Adrian Bowyer:</a>
        <div class="carousel-group fl" style="margin-right: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="RepRap 3D Printer (2005)">
                        <img src="../images/hardware/hw/printer/printer11_thumb.webp"
                             alt="RepRap"
                             title="RepRap 3D Printer (2005)"
                             loading="lazy"
                             style="max-width: 300px; width: 100%; height: auto;" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="22"></div>
            </div>
        </div>
        <br />- <?= $content[758][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/MakerBot" class="print" style="margin-left: 50px;">MakerBot Replicator</a> (2009) - 
        <a href="https://www.makerbot.com/resources/3d-printing-news/" class="print" style="margin-left: 50px;">MakerBot Industries:</a>
        <div class="carousel-group fl" style="margin-right: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="MakerBot Replicator (2009)">
                        <img src="../images/hardware/hw/printer/printer12_thumb.webp"
                             alt="Maker Bot Replicator"
                             title="MakerBot Replicator (2009)"
                             loading="lazy"
                             style="max-width: 300px; width: 100%; height: auto;" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="23"></div>
            </div>
        </div>
        <br />- <?= $content[759][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Formlabs" class="print" style="margin-left: 50px;">Formlabs Form 1</a> (2012) - 
        <br /> <a href="https://formlabs.com/resources/" class="print" style="margin-left: 50px;">Formlabs:</a>
        <div class="carousel-group fl" style="margin-right: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="Formlabs Form 1 (2012)">
                        <img src="../images/hardware/hw/printer/printer13_thumb.webp"
                             alt="Form1"
                             title="Formlabs Form 1 (2012)"
                             loading="lazy"
                             style="max-width: 300px; width: 100%; height: auto;" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="24"></div>
            </div>
        </div>
        <br />- <?= $content[760][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Ultimaker" class="print" style="margin-left: 50px;">Ultimaker Original</a> (2011) - 
        <br /> <a href="https://ultimaker.com/" class="print" style="margin-left: 50px;">Ultimaker:</a>
        <div class="carousel-group fl" style="margin-right: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="Ultimaker Original (2011)">
                        <img src="../images/hardware/hw/printer/printer14_thumb.webp"
                             alt="The Ultimaker Original"
                             title="Ultimaker Original (2011)"
                             loading="lazy"
                             style="max-width: 300px; width: 100%; height: auto;" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="25"></div>
            </div>
        </div>
        <br />- <?= $content[761][$key] ?? ''; ?>
        <hr><br />
        
        <a href="https://en.wikipedia.org/wiki/Aleph_Objects" class="print" style="margin-left: 50px;">LulzBot TAZ</a> (2012) - 
        <br /> <a href="https://lulzbot.com/explore/printers-for-creatives" class="print" style="margin-left: 50px;">lulzbot.com:</a>
        <div class="carousel-group fl" style="margin-right: 15px;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="LulzBot TAZ / Mini (2012)">
                        <img src="../images/hardware/hw/printer/printer15_thumb.webp"
                             alt="LulBot Mini"
                             title="LulzBot TAZ / Mini (2012)"
                             loading="lazy"
                             style="max-width: 300px; width: 100%; height: auto;" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="26"></div>
            </div>
        </div>
        <br />- <?= $content[762][$key] ?? ''; ?>
    </h3>
    
    <h2><?= $content[763][$key] ?? ''; ?></h2>
    
    </article>

<article class="article fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ `ღ´ -->
    <hr id="future">
    <a href="#nav" title="Top">
        <h2 class="spacer_shape">
            <div class="carousel-group fl" style="margin-right: 15px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="Future of Digital Printing">
                            <img src="../images/hardware/hw/printer/printer_thumb.webp"
                                 alt="Future of Digital Printing"
                                 title="Future of Digital Printing"
                                 loading="lazy" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="27"></div>
                </div>
            </div>
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

    <!-- Carousel Modal Data Template -->
    <template id="carousel-images">
        <?php
        $carouselItems = [
            [
                'original' => '../images/hardware/hw/lightbox/printer0.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer0.webp',
                'title'    => 'Modern Multifunction Printer',
                'link'     => 'https://en.wikipedia.org/wiki/Multi-function_printer'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer3.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer3.webp',
                'title'    => 'Ancient Woodblock Printing',
                'link'     => 'https://en.wikipedia.org/wiki/Woodblock_printing'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer16.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer16.webp',
                'title'    => 'Gutenberg Movable Type Press',
                'link'     => 'https://en.wikipedia.org/wiki/Printing_press'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer17.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer17.webp',
                'title'    => 'Steam-Powered Printing Press',
                'link'     => 'https://ageofrevolution.org/200-object/koenigs-steam-powered-printing-press/'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer18.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer18.webp',
                'title'    => 'Electric Typewriter & Teleprinter',
                'link'     => 'https://en.wikipedia.org/wiki/Teleprinter'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer19_0.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer19_0.webp',
                'title'    => 'Dot Matrix Impact Printer',
                'link'     => 'https://en.wikipedia.org/wiki/Dot_matrix_printing'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer19_1.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer19_1.webp',
                'title'    => 'Early Laser Printer',
                'link'     => 'https://en.wikipedia.org/wiki/Laser_printing'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer19.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer19.webp',
                'title'    => 'Thermal & InkJet Printing',
                'link'     => 'https://en.wikipedia.org/wiki/Inkjet_printing'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer20.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer20.webp',
                'title'    => '3D Additive Manufacturing Printer',
                'link'     => 'https://en.wikipedia.org/wiki/3D_printing'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer21.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer21.webp',
                'title'    => 'Eco-Friendly Sustainable Printing',
                'link'     => 'https://en.wikipedia.org/wiki/Sustainable_printing'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer22.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer22.webp',
                'title'    => 'Next-Generation Future Printing',
                'link'     => 'https://en.wikipedia.org/wiki/Bioprinting'
            ],
            [
                'original' => '../images/artificialintelligence/printer/2.jpg',
                'webp'     => '../images/artificialintelligence/printer/2.webp',
                'title'    => 'LAPC 3D Print - Complex Lattice',
                'link'     => 'https://en.wikipedia.org/wiki/3D_printing'
            ],
            [
                'original' => '../images/artificialintelligence/printer/4.jpg',
                'webp'     => '../images/artificialintelligence/printer/4.webp',
                'title'    => 'LAPC 3D Print - Geometric Sculpture',
                'link'     => 'https://en.wikipedia.org/wiki/3D_printing'
            ],
            [
                'original' => '../images/artificialintelligence/printer/1.jpg',
                'webp'     => '../images/artificialintelligence/printer/1.webp',
                'title'    => 'LAPC 3D Print - Mechanical Prototype',
                'link'     => 'https://en.wikipedia.org/wiki/3D_printing'
            ],
            [
                'original' => '../images/artificialintelligence/printer/3.jpg',
                'webp'     => '../images/artificialintelligence/printer/3.webp',
                'title'    => 'LAPC 3D Print - Architectural Model',
                'link'     => 'https://en.wikipedia.org/wiki/3D_printing'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer4.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer4.webp',
                'title'    => 'Gutenberg Printing Press (1440s)',
                'link'     => 'https://en.wikipedia.org/wiki/Printing_press'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer5.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer5.webp',
                'title'    => 'Linotype Machine (1886)',
                'link'     => 'https://en.wikipedia.org/wiki/Linotype_machine'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer6.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer6.webp',
                'title'    => 'Monotype System (1887)',
                'link'     => 'https://en.wikipedia.org/wiki/Monotype_system'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer7.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer7.webp',
                'title'    => 'Heidelberg Windmill Platen Press (1913)',
                'link'     => 'https://en.wikipedia.org/wiki/Original_Heidelberg_Platen_Press'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer8.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer8.webp',
                'title'    => 'Xerox 914 Plain Paper Copier (1959)',
                'link'     => 'https://en.wikipedia.org/wiki/Xerox_914'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer9.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer9.webp',
                'title'    => 'HP LaserJet Desktop Printer (1984)',
                'link'     => 'https://www.hp.com/hpinfo/abouthp/histnfacts/museum/imagingprinting/0018/index.html'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer10.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer10.webp',
                'title'    => 'Epson Stylus Color 720 dpi (1994)',
                'link'     => 'https://spectrum.ieee.org/the-consumer-electronics-hall-of-fame-epson-stylus-color'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer11.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer11.webp',
                'title'    => 'RepRap Open-Source 3D Printer (2005)',
                'link'     => 'https://en.wikipedia.org/wiki/RepRap'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer12.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer12.webp',
                'title'    => 'MakerBot Replicator Desktop 3D (2009)',
                'link'     => 'https://en.wikipedia.org/wiki/MakerBot'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer13.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer13.webp',
                'title'    => 'Formlabs Form 1 SLA 3D Printer (2012)',
                'link'     => 'https://en.wikipedia.org/wiki/Formlabs'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer14.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer14.webp',
                'title'    => 'Ultimaker Original FDM 3D Printer (2011)',
                'link'     => 'https://en.wikipedia.org/wiki/Ultimaker'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer15.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer15.webp',
                'title'    => 'LulzBot TAZ / Mini (2012)',
                'link'     => 'https://en.wikipedia.org/wiki/Aleph_Objects'
            ],
            [
                'original' => '../images/hardware/hw/lightbox/printer.jpg',
                'webp'     => '../images/hardware/hw/lightbox/printer.webp',
                'title'    => 'Future of Digital Printing',
                'link'     => 'https://en.wikipedia.org/wiki/Digital_printing'
            ]
        ];

        foreach($carouselItems as $index => $item):
        ?>
        <div class="carousel-item" data-image-index="<?= $index; ?>">
            <a href="<?= $item['original']; ?>" target="_blank" rel="noopener">
                <img data-src="<?= $item['webp']; ?>"
                     src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'%3E%3C/svg%3E"
                     alt="<?= htmlspecialchars($item['title']); ?>">
            </a>
            <h4 class="img_link">
                <a href="<?= htmlspecialchars($item['link']); ?>" title="<?= htmlspecialchars($item['title']); ?>" target="_blank" rel="noopener">
                    <?= htmlspecialchars($item['title']); ?>
                </a>
            </h4>
        </div>
        <?php endforeach; ?>
    </template>
