<?php
//fihtmatw ==> English Version
//qpccsei ==> Versión en español
?>
<style>
.dangers {
    background-color: rgb(221, 126, 107);
    font-size: 1.1em;
    color: rgb(92, 90, 90)
}

.title {
    font-size: 3rem;
    text-shadow: .7px .7px;
}

.title:hover {
    text-shadow: .1px .1px;
    cursor: pointer;
}

.fullbar {
    padding: 1rem 2rem 3rem;
    margin: 0 auto;
    position: relative;
    max-width: 1200px;
}

.title {
    line-height: 1.2;
    text-align: justify;
    margin-top: 0pt;
    margin-bottom: 0pt;
    font-weight: 700;
}

.sub_title {
    font-size: 36pt;
    font-weight: 2000;
}

.sub_title2 {
    font-size: 24pt;
    font-weight: 2000;
    color: rgb(255, 255, 255);
    background-color: rgb(109, 158, 235);
}

.browse {
    font-size: 1.3em;
    color: rgb(35, 42, 60);
}

.fl {
    margin: 4px 16px 4px 0;
    float: left;
}

.rtl {
    margin: 4px 4px 16px 0;
    float: right;
}

.fullbar p {
    font-size: calc(1.5vw + 2vh);
}
</style>
<div class="fullbar hero4">
    <div class="title" style="text-align:center"><?= empty($titles) ? $titulos[0] : $titles[0]; ?></div>
    <!--This is the image linked to--><a rel="example_group"
        href="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb1.jpg"
        title="Jesus holding a lamb" alt="Jesus holding a lamb">
        <!--this is the image showing --><img
            src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/thumbnails/lamb1.webp"
            title="Jesus holding a lamb" alt="Jesus holding a lamb" height="500px" width="303px" class="fl" />
    </a>
    <h2 class="sub_title" style="overflow-wrap: normal;"><?= empty($titles) ? $titulos[1] : $titles[1]; ?></h2>
    <p><span class="dangers"><?= empty($titles) ? $titulos[2] : $titles[2]; ?>:</span>
        <?= empty($dangers) ? $peligros[0]: $dangers[0]; ?></p>
    <p><span class="dangers"><?= empty($titles) ? $titulos[3]: $titles[3]; ?>:</span>
        <?= empty($dangers) ? $peligros[1]: $dangers[1]; ?></p>
    <p><span class="dangers"><?= empty($titles) ? $titulos[4] : $titles[4]; ?>:</span>
        <?= empty($dangers) ? $peligros[2] : $dangers[2]; ?></p>
    <p><span class="dangers"><?= empty($titles) ? $titulos[5] : $titles[5]; ?>:</span>
        <?= empty($dangers) ? $peligros[3] : $dangers[3]; ?></p>
    <p><span class="dangers"><?= empty($titles) ? $titulos[6] : $titles[6]; ?>:</span>
        <?= empty($dangers) ? $peligros[4] : $dangers[4]; ?></p>
    <p><span class="dangers"><?= empty($titles) ? $titulos[7] : $titles[7]; ?>:</span>
        <?= empty($dangers) ? $peligros[5] : $dangers[5]; ?></p>
    <p><span class="dangers"><?= empty($titles) ? $titulos[8] : $titles[8]; ?>:</span>
        <?= empty($dangers) ? $peligros[6] : $dangers[6]; ?></p>
    <div class="spacer_mega"></div>
    <hr style="border: 3px dashed darkgray;width: 30%;">
    <h2 class="sub_title"><?= empty($titles) ? $titulos[9] : $titles[9]; ?></h2>
    <!--This is the image linked to--><a rel="example_group"
        href="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/jesushrist3.jpg"
        title="Catholic Path to Salvation" alt="Catholic Path to Salvation">
        <!--this is the image showing --><img
            src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/thumbnails/jesushrist3.webp"
            title="Catholic Path to Salvation" alt="Catholic Path to Salvation" height="500px" width="303px"
            class="rtl" />
    </a>
    <p>
        <?= empty($browse) ? $navegar['tenEnMente'] : $browse['beMindful']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['mantener'] : $browse['keep']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['cuidaQue'] : $browse['beAware']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['evita'] : $browse['avoid']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['prioridad'] : $browse['priorities']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['controlesFamiliares'] : $browse['parentalControls']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['tambien'] : $browse['also']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['conCuidado'] : $browse['beCautious']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['usar'] : $browse['use']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['busca'] : $browse['seek']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['siTuEres'] : $browse['ifYouAre']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['recuerda'] : $browse['remember']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['considera'] : $browse['consider']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['mundoEnLinea'] : $browse['onlineWorld']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['tiempoEnLinea'] : $browse['timeOnline']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['plataformasEnLinea'] : $browse['onlinePlatforms']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['encuentro'] : $browse['encounter']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['usaElInternet'] : $browse['useTheInternet']; ?>
    </p>
    <p>
        <?= empty($browse) ? $navegar['finalmente'] : $browse['finally']; ?>
    </p>
    <!--This is the image linked to--><a rel="example_group"
        href="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/jesushrist4.jpg"
        title="Browsing the Web" alt="Browsing the Web">
        <!--this is the image showing --><img
            src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/thumbnails/jesushrist4.webp"
            title="Browsing the Web" alt="Browsing the Web" height="auto" width="200px" class="fl" />
    </a>
    <p class="sub_title2"><?= empty($browse) ? $navegar['conclusion'] : $browse['conclusion']; ?></p>
</div>
<div class="fullbar hero4">
    <div class="spacer_shape">
        <hr style="border: 3px dashed darkgray;">
        <h2 class="sub_title"><?= empty($titles) ? $titulos[10] : $titles[10]; ?></h2>
        <p><?= empty($browseS) ? $navegarS[0] : $browseS[0]; ?></p>
        <p>
            <?= empty($browseS) ? $navegarS[1] : $browseS[1]; ?>
        </p>
        <p>
            <?= empty($browseS) ? $navegarS[2] : $browseS[2]; ?>
        </p>
        <p><span class="browse">
                <?= empty($browseS) ? $navegarS[3] : $browseS[3]; ?>
            </span> <?= empty($browseS) ? $navegarS[4] : $browseS[4]; ?></p>
        <p>
            <?= empty($browseS) ? $navegarS[5] : $browseS[5]; ?>
        </p>
        <h2 class="dangers"><?= empty($titles) ? $titulos[11] : $titles[11]; ?></h2>
        <p style="display: inline"><span class="browse">
                <?= empty($isAlwaysGod) ? $siempreEsDios[0] : $isAlwaysGod[0]; ?></span>
        <details title="click to reveal" style="display: inline">
            <summary style="display: inline; font-size: 1.5rem;cursor:pointer;color:midnightblue">😟</summary><span
                class="browse"><?= empty($isAlwaysGod) ? $siempreEsDios['loEscondido'] : $isAlwaysGod['clickHidden']; ?></span>
        </details> <span class="browse">
            <?= empty($isAlwaysGod) ? $siempreEsDios[1] : $isAlwaysGod[1]; ?>
        </span></p>
        <p>
            <?= empty($isAlwaysGod) ? $siempreEsDios[2] : $isAlwaysGod[2]; ?>
            <span class="browse">
                <?= empty($isAlwaysGod) ? $siempreEsDios[3] : $isAlwaysGod[3]; ?>
            </span>
            <?= empty($isAlwaysGod) ? $siempreEsDios[4] : $isAlwaysGod[4]; ?>
        </p>
        <p>
            <?= empty($isAlwaysGod) ? $siempreEsDios[5] : $isAlwaysGod[5]; ?>
        </p>
        <p>
            <?= empty($isAlwaysGod) ? $siempreEsDios[6] : $isAlwaysGod[6]; ?>
        </p>
        <p>
            <?= empty($isAlwaysGod) ? $siempreEsDios[7] : $isAlwaysGod[7]; ?>
        </p>
        <p><span class="browse">
                <?= empty($isAlwaysGod) ? $siempreEsDios[8] : $isAlwaysGod[8]; ?>
            </span>
            <?= empty($isAlwaysGod) ? $siempreEsDios[9] : $isAlwaysGod[9]; ?>
        </p>
        <p>
            <?= empty($isAlwaysGod) ? $siempreEsDios[10] : $isAlwaysGod[10]; ?>
        </p>
        <p>
            <?= empty($isAlwaysGod) ? $siempreEsDios[11] : $isAlwaysGod[11]; ?>
        </p>
        <p><span class="browse">
                <?= empty($isAlwaysGod) ? $siempreEsDios[12] : $isAlwaysGod[12]; ?>
            </span>
            <?= empty($isAlwaysGod) ? $siempreEsDios[13] : $isAlwaysGod[13]; ?>
        </p>
        <p>
            <?= empty($isAlwaysGod) ? $siempreEsDios[14] : $isAlwaysGod[14]; ?>
        </p>
        <p>
            <?= empty($isAlwaysGod) ? $siempreEsDios[15] : $isAlwaysGod[15]; ?>
            <span class="browse">
                <?= empty($isAlwaysGod) ? $siempreEsDios[16] : $isAlwaysGod[16]; ?>
            </span>
        </p>
        <p>
            <?= empty($isAlwaysGod) ? $siempreEsDios[17] : $isAlwaysGod[17]; ?>
            <span class="browse">
                <?= empty($isAlwaysGod) ? $siempreEsDios[18] : $isAlwaysGod[18]; ?>
            </span>
            <?= empty($isAlwaysGod) ? $siempreEsDios[19] : $isAlwaysGod[19]; ?>
        </p>
    </div>
</div>
<div class="fullbar hero4">
    <hr style="border: 3px dashed darkgray;width: 30%;">
    <ul>
        <h2 class="sub_title"><?= empty($titles) ? $titulos[12] : $titles[12]; ?></h2>
    </ul>
    <p>
        <?= empty($battle) ? $batalla[0] : $battle[0]; ?>
    </p>
    <p class="spacer_shape"><a href="<?= empty($links) ? $ligas[0] : $links[0]; ?>"
            title="<?= empty($links) ? $ligas[1] : $links[1]; /*here, Parable is used twice*/?>"><?= empty($links) ? $ligas[1] : $links[1]; ?></a>
    </p>
    <!--This is the image linked to--><a rel="example_group"
        href="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb2.jpg"
        title="the one sheep brought back to a heard of 99" alt="the one sheep brought back to a heard of 99">
        <!--this is the image showing --><img
            src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/thumbnails/lamb2.webp"
            title="the one sheep brought back to a heard of 99" alt="the one sheep brought back to a heard of 99"
            class="rtl" />
    </a>
    <p>
        <?= empty($battle) ? $batalla[1] : $battle[1]; ?>
    </p>
    <p>
        <?= empty($battle) ? $batalla[2] : $battle[2]; ?>
    </p>
    <p>
        <?= empty($battle) ? $batalla[3] : $battle[3]; ?>
    </p>
    <p>
        <?= empty($battle) ? $batalla[4] : $battle[4]; ?>
    </p>
    <!--This is the image linked to--><a rel="example_group"
        href="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/jesushrist2.jpg"
        title="Holy Spirit" alt="Holy Spirit">
        <!--this is the image showing --><img
            src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/thumbnails/jesushrist2.webp"
            title="Holy Spirit" alt="Holy Spirit" height="500px" width="303px" class="fl" />
    </a>
    <p>
        <?= empty($battle) ? $batalla[5] : $battle[5]; ?>
    </p>
    <p>
        <?= empty($battle) ? $batalla[6] : $battle[6]; ?>
    </p>
    <p>
        <?= empty($battle) ? $batalla[7] : $battle[7]; ?>
    </p>
    <p>
        <?= empty($battle) ? $batalla[8] : $battle[8]; ?>
    </p>
    <p>
        <?= empty($battle) ? $batalla[9] : $battle[9]; ?>
    </p>
</div>
<div class="fullbar hero4">
    <h2 class="sub_title2"><?= empty($titles) ? $titulos[13] : $titles[13]; ?></h2>
    <p>
        <?= empty($rejection) ? $rechazo[0] : $rejection[0]; ?>
    </p>
    <!--This is the image linked to--><a rel="example_group"
        href="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/jesushrist5.jpg"
        title="Ascension into Heaven" alt="Ascension into Heaven">
        <!--this is the image showing --><img
            src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/thumbnails/jesushrist5.webp"
            title="Ascension into Heaven" alt="Ascension into Heaven" height="500px" width="303px" class="fl" />
    </a>
    <p>
        <?= empty($rejection) ? $rechazo[1] : $rejection[1]; ?>
    </p>
    <p>
        <?= empty($rejection) ? $rechazo[2] : $rejection[2]; ?>
    </p>
    <p>
        <?= empty($rejection) ? $rechazo[3] : $rejection[3]; ?>
    </p>
    <p>
        <?= empty($rejection) ? $rechazo[4] : $rejection[4]; ?>
    </p>
</div>
<div class="fullbar hero4">
    <h2 class="sub_title2"><?= empty($titles) ? $titulos[14] : $titles[14]; ?></h2>
    <p>
        <?= empty($responsibility) ? $responsabilidad[0] : $responsibility[0]; ?>
    </p>
    <!--This is the image linked to--><a rel="example_group"
        href="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/jesuschrist1.jpg"
        title="King of kings and Lord of lords" alt="King of kings and Lord of lords">
        <!--this is the image showing --><img
            src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/thumbnails/jesuschrist1.webp"
            title="King of kings and Lord of lords" alt="King of kings and Lord of lords" height="500px" width="303px"
            class="rtl" />
    </a>
    <p>
        <?= empty($responsibility) ? $responsabilidad[1] : $responsibility[1]; ?>
    </p>
    <p>
        <?= empty($responsibility) ? $responsabilidad[2] : $responsibility[2]; ?>
    </p>
    <p>
        <?= empty($responsibility) ? $responsabilidad[3] : $responsibility[3]; ?>
    </p>
    <p>
        <?= empty($responsibility) ? $responsabilidad[4] : $responsibility[4]; ?>
    </p>
    <p>
        <?= empty($responsibility) ? $responsabilidad[5] : $responsibility[5]; ?>
    </p>
    <p>
        <?= empty($responsibility) ? $responsabilidad[6] : $responsibility[6]; ?>
    </p>
    <p>
        <?= empty($responsibility) ? $responsabilidad[7] : $responsibility[7]; ?>
    </p>
    <table style="table-layout:fixed;width:468pt">
        <colgroup>
            <col />
            <col />
        </colgroup>
        <tbody>
            <tr style="height:42pt">
                <td style="vertical-align:top;overflow:hidden;overflow-wrap:break-word;">
                    <p>[Free Research Preview. ChatGPT ChatGPT May 3 Version 2023]</p>
                    <hr />
                </td>
            </tr>
        </tbody>
    </table>
</div>