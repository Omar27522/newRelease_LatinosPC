<?php
function cssStyles(){
    ?>
<link rel="stylesheet" href="../services/style.css">
<?php
}
function content_services_consultation(){
     global $content, $key;
    include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
    databaseConnection('services');// database connection
    ?>
<section class="fullbar">
    <?php include 'navBar.php'; ?>
    <section class="cut-it">
        <h1 id="hardware"><?= $consultationHeading = $content[74][$key]; ?></h1>
        <h2 class="box"><?= $consultationHeading = $content[75][$key]; ?></h2>
        <ul>
            <li class="box2">
                <p class="box2"><?= $diskFailure = $content[76][$key]; ?></p>
                <p><?= $diskFailureTextBackUpRecommended = $content[77][$key]; ?></p>
            </li>
            <li class="box2">
                <p class="box2"><?= $malware = $content[78][$key]; ?></p>
                <p><?= $malwareText = $content[79][$key]; ?></p>
            </li>
            <li class="box2">
                <p class="box2"><?= $overheating = $content[80][$key]; ?></p>
                <p><?= $overheatingText = $content[81][$key]; ?></p>
            </li>
            <li class="box2">
                <p class="box2"><?= $powerSupplyFailure = $content[82][$key]; ?></p>
                <p><?= $powerSupplyFailureText = $content[83][$key]; ?></p>
            </li>
            <li class="box2">
                <p class="box2"><?= $softwareErrors = $content[84][$key]; ?></p>
                <p><?= $softwareErrorsText = $content[85][$key]; ?>
                </p>
            </li>
            <li class="box2">
                <p class="box2"><?= $memoryIssues = $content[86][$key]; ?></p>
                <p><?= $memoryIssuesText = $content[87][$key]; ?></p>
            </li>
            <li class="box2">
                <p class="box2"><?= $graphicsCardProblems = $content[88][$key]; ?></p>
                <p><?= $graphicsCardProblemsText = $content[89][$key]; ?></p>
            </li>
            <li class="box2">
                <p class="box2"><?= $motherboardFailures = $content[90][$key]; ?></p>
                <p><?= $motherboardFailuresText = $content[91][$key]; ?></p>
            </li>
            <li class="box2">
                <p class="box2"><?= $dataCorruption = $content[92][$key]; ?></p>
                <p><?= $dataCorruptionText = $content[93][$key]; ?></p>
            </li>
            <li class="box2">
                <p class="box2"><?= $screenAndDisplayIssues = $content[94][$key]; ?></p>
                <p><?= $screenAndDisplayIssuesText = $content[95][$key]; ?></p>
            </li>
            <li class="box2">
                <p class="box2"><?= $keyboardAndMouseProblems = $content[96][$key]; ?></p>
                <p><?= $keyboardAndMouseProblemsText = $content[97][$key]; ?></p>
            </li>
            <li class="box2">
                <p class="box2"><?= $internetConnectionProblems = $content[98][$key]; ?></p>
                <p><?= $internetConnectionProblemsText = $content[99][$key]; ?></p>
            </li>
            <li class="box2">
                <p class="box2"><?= $dustAndDirtAccumulation = $content[100][$key]; ?></p>
                <p><?= $dustAndDirtAccumulationText = $content[101][$key]; ?></p>
            </li>
            <li class="box2">
                <p class="box2"><?= $physicalDamage = $content[102][$key]; ?></p>
                <p><?= $physicalDamageText = $content[103][$key]; ?></p>
            </li>
            <li class="box2">
                <p class="box2"><?= $outdatedHardware = $content[104][$key]; ?></p>
                <p><?= $outdatedHardwareText = $content[105][$key]; ?></p>
            </li>
            <p class="box">
                <?= $outdatedHardwareText = $content[106][$key]; ?>
            </p>
    </section>
</section>
<?php
}
include dirname(__DIR__) . '/anvil/structure.php';
?>