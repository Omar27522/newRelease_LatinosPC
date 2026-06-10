<?php
function cssStyles(){
    ?>
<link rel="stylesheet" href="../services/style.css">
<?php
}

function content_services_protection(){
    global $content, $key;
    include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
    databaseConnection('services');// database connection
    ?>
<section class="fullbar">
    <?php include 'navBar.php'; ?>
    <article class="article">
        <h1 id="security"><?= $protectionHeading = $content[66][$key]; ?></h1>

        <p class="protection"><?= $protectionHeadingThink = $content[67][$key]; ?></p>
        <p class="protection"><?= $protectionHeadingBaddies = $content[68][$key]; ?></p>
        <p class="protection"><?= $protectionHeadingGuessWhat = $content[69][$key]; ?></p>

        <h2 class="protection" tabindex="0"><?= $protectionHeading15Points = $content[70][$key]; ?></h2>

        <ul><?= $protection15Points = $content[71][$key]; ?></ul>

        <h2><?= $protectionRemember = $content[72][$key]; ?></h2>

        <h3><?= $protectionCallText = $content[73][$key]; ?></h3>
        <hr>
    </article>

</section>

<?php
}

include dirname(__DIR__) . '/anvil/structure.php';

?>