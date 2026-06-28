<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('hardware');
global $content, $key;
?>
<?php include_once('navBarHW.php'); ?>
<section class="fullbar">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <a href="./#peripherals">
        <h1 id="keyboard">
            <?= $content[516][$key] ?? ''; ?>
        </h1>
    </a>
    <img alt="Keyboard image with orange, white, and dark gray Key-caps" src="https://latinospc.com/images/keys.jpg" title="Keyboards" width="621">
    <p style="line-height: 1.2; margin-top: 16pt; text-align: center;">
        <span style="font-size: 42pt; color: rgb(105, 93, 70); font-weight: 700;">
            <?= $content[516][$key] ?? ''; ?>
        </span>
    </p>
    
    <h2 class="oranges">
        <?= $content[517][$key] ?? ''; ?>
    </h2>
    <h3><?= $content[518][$key] ?? ''; ?></h3>
    <h3><?= $content[519][$key] ?? ''; ?></h3>
    <h3><?= $content[520][$key] ?? ''; ?></h3>
    <h3><?= $content[521][$key] ?? ''; ?></h3>
    <h3><?= $content[522][$key] ?? ''; ?></h3>
    <h3><?= $content[523][$key] ?? ''; ?></h3>
    
    <h2 class="oranges">
        <?= $content[524][$key] ?? ''; ?>
    </h2>
    <h2><?= $content[525][$key] ?? ''; ?></h2>
    <ol>
        <h3><li><?= $content[526][$key] ?? ''; ?></li></h3>
        <li><h3><?= $content[527][$key] ?? ''; ?></h3></li>
        <li><h3><?= $content[528][$key] ?? ''; ?></h3></li>
        <li><h3><?= $content[529][$key] ?? ''; ?></h3></li>
        <li><h3><?= $content[530][$key] ?? ''; ?></h3></li>
        <li><h3><?= $content[531][$key] ?? ''; ?></h3></li>
    </ol>
    <h2><?= $content[532][$key] ?? ''; ?></h2>
    
    <a href="https://www.reddit.com/r/MechanicalKeyboards/" title="Reddit" class="bttn">
        <h1 class="oranges">r/MechanicalKeyboards</h1>
    </a>
    
    <h1 style="line-height:1.44;margin-top:6pt;margin-bottom:0pt;">
        <?= $content[533][$key] ?? ''; ?>
    </h1>
    <h2><?= $content[534][$key] ?? ''; ?></h2>
    <h3>
        <?= $content[535][$key] ?? ''; ?><br /><br />
        <?= $content[536][$key] ?? ''; ?><br /><br />
        <?= $content[537][$key] ?? ''; ?><br /><br />
        <?= $content[538][$key] ?? ''; ?><br /><br />
        <?= $content[539][$key] ?? ''; ?>
    </h3>
    
    <h2><?= $content[540][$key] ?? ''; ?></h2>
    <h3><?= $content[541][$key] ?? ''; ?></h3>
    <h3><?= $content[542][$key] ?? ''; ?></h3>
    <h3><?= $content[543][$key] ?? ''; ?></h3>
    <h3><?= $content[544][$key] ?? ''; ?></h3>
    <h2><?= $content[545][$key] ?? ''; ?></h2>
    
    <h2 class="keyboards"><?= $content[546][$key] ?? ''; ?></h2>
    <h3><?= $content[547][$key] ?? ''; ?></h3>
    <h3><?= $content[548][$key] ?? ''; ?></h3>
    <h3><?= $content[549][$key] ?? ''; ?></h3>
    <h3><?= $content[550][$key] ?? ''; ?></h3>
    <h3><?= $content[551][$key] ?? ''; ?></h3>
    <h3 class="items"><?= $content[552][$key] ?? ''; ?></h3>
    
    <h1 class="oranges">
        <?= $content[553][$key] ?? ''; ?>
    </h1>
    <ol>
        <li style="padding-inline-start:48px;">
            <h2 class="items"><?= $content[554][$key] ?? ''; ?></h2>
        </li>
        <h3><?= $content[555][$key] ?? ''; ?></h3>
        
        <li style="padding-inline-start:48px;">
            <h2 class="items"><?= $content[556][$key] ?? ''; ?></h2>
        </li>
        <h3><?= $content[557][$key] ?? ''; ?></h3>
        
        <li style="padding-inline-start:48px;">
            <h2 class="items"><?= $content[558][$key] ?? ''; ?></h2>
        </li>
        <h3><?= $content[559][$key] ?? ''; ?></h3>
        
        <li style="padding-inline-start:48px;">
            <h2 class="items"><?= $content[560][$key] ?? ''; ?></h2>
        </li>
        <h3><?= $content[561][$key] ?? ''; ?></h3>
        
        <li style="padding-inline-start:48px;">
            <h2 class="items"><?= $content[562][$key] ?? ''; ?></h2>
        </li>
        <h3><?= $content[563][$key] ?? ''; ?></h3>
    </ol>
    
    <h2 class="oranges"><?= $content[564][$key] ?? ''; ?></h2>
</section>
