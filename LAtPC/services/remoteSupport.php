<?php
function cssStyles()
{
    ?>
    <link rel="stylesheet" href="../services/style.css">
    <?php
}

function content_services_remoteSupport()
{
    global $content, $key;
    include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
    databaseConnection('services');  // database connection
    ?>
    <section class="fullbar"> <?php
    include 'navBar.php';
        ?><article class="article">
        <h1 id="title"><?= $remoteSupportTitle = $content[129][$key]; ?></h1>
        <h2><?= $remoteSupportGoal = $content[130][$key]; ?></h2>
        <p class="spacer_shape"><?= $remoteSupportP1 = $content[131][$key]; ?> </p>
        <p class="remote"><?= $remoteSupportP2 = $content[132][$key]; ?></p>
        <p>
            <h3><?= $remoteSupportP3 = $content[133][$key]; ?></h3>
            <ul>
                <li class="remote"><strong class="text"><?= $remoteSupportLi1E = $content[134][$key]; ?></strong> <?= $remoteSupportLi1F = $content[135][$key]; ?></li>
                <li class="remote"><strong class="text"><?= $remoteSupportLi2E = $content[136][$key]; ?></strong> <?= $remoteSupportLi2F = $content[137][$key]; ?></li>
                <li class="remote"><strong class="text"><?= $remoteSupportLi3E = $content[138][$key]; ?></strong> <?= $remoteSuppoerIssueresolution = $content[139][$key]; ?></li>
            </ul>
        </p>
        <h3 style="background: rgb(204, 227, 200);"><?= $remoteSupportP4 = $content[140][$key]; ?></h3>
        <p><span class="center"><?= $remoteSupportP5 = $content[141][$key]; ?></span>
            <ul>
                <li class="remote"><span class="text"><?= $security_steps1 = $content[142][$key]; ?></span> <?= $content[143][$key]; ?></li>
                <li class="remote"><span class="text"><?= $security_steps2 = $content[144][$key]; ?></span> <?= $content[145][$key]; ?></li>
                <li class="remote"><span class="text"><?= $security_steps3 = $content[146][$key]; ?></span> <?= $content[147][$key]; ?></li>
            </ul>
            <h3><?= $content[148][$key]; ?></h3>
            <p> <?= $content[149][$key]; ?> </p>
            <ul>
                <li class="remote"><span class="text"><?= $prepare_steps1 = $content[150][$key]; ?></span> <?= $content[151][$key]; ?></li>
                <li class="remote"><span class="text"><?= $prepare_steps2 = $content[152][$key]; ?></span> <?= $content[153][$key]; ?></li>
                <li class="remote"><span class="text"><?= $prepare_steps3 = $content[154][$key]; ?></span> <?= $content[155][$key]; ?></li>
            </ul>
            <h3><?= $communication_is_key = $content[156][$key]; ?></h3>
            <p><?= $communcation_is_key_content = $content[157][$key]; ?></p>
            <ul>
                <li class="remote"><strong class="text"><?= $communcation_is_key_content = $content[158][$key]; ?></strong> <?= $content[159][$key]; ?></li>
                <li class="remote"><strong class="text"><?= $unsortListHeading = $content[160][$key]; ?></strong> <?= $content[161][$key]; ?></li>
                <li class="remote"><strong class="text"><?= $unsortListHeading = $content[162][$key]; ?></strong> <?= $content[163][$key]; ?></li>
            </ul>
            <h3><?= $unsortListHeading = $content[164][$key]; ?></h3>
            <p><?= $unsortList2 = $content[165][$key]; ?></p>
            <ul>
                <li class="remote"><strong class="text"><?= $unsortList3 = $content[166][$key]; ?></strong> <?= $content[167][$key]; ?></li>
                <li class="remote"><strong class="text"><?= $unsortList4 = $content[168][$key]; ?></strong> <?= $content[169][$key]; ?></li>
            </ul>
            <p class="spacer_shape"> <?= $remote_support = $content[170][$key]; ?> </p>
    </article><a href="./#content"> <?= $link_section = $content[171][$key]; ?> </a>
    <h2 id="phone_call">
        <hr><?= $content[128][$key]; ?> <a href="tel:+19092767214">909-276-7214</a>&nbsp;|&nbsp; </section>

    <?php
}

include dirname(__DIR__) . '/anvil/structure.php';

?>