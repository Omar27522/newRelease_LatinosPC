<?php
function parables(){
?>
<style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th {
            background-color:rgb(50, 58, 172);
            color: white;
            padding: 12px;
            text-align: left;
        }
        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9f5e9;
        }
        .parable-name {
            font-weight: bold;
        }
        h1 {
            color:rgb(148, 30, 30);
            text-align: center;
        }
        figcaption a {
          text-decoration:none;
          font-size:2em;
          color:white;
          background-color:black;
          margin-top:2%;
          padding-right:2%;
          padding-left:2%;
        }
        figcaption a:hover{
          text-decoration:underline;
          color:royalblue;
        }
        .gospel{
          display:inline-block;
        }
        .link-dialog p{
          font-size:1.07em;
        }
        .link-dialog p:hover,.link-dialog p:focus{
          background:black;
          color:white;
        }
        .linked-text, .linked-text-img{
          color:black;
        }
        .linked-text:active, .linked-text-img:active{
          color:red;
        }
        .linked-text.focused, .linked-text-img.focused{
          color:red;
          transition: color 2s ease-out, border 2s ease-out;
        }
      
</style>
<article class="fullbar">
    <h2>The Gospels use mental illustrations. Jesus actively interacts with a wide range of people, using parables as a
        key tool to communicate His message in a way that everyone could understand.</h2>
    <ul>
        <li>They were Universally accessible by using every day scenarios, Jesus made complex spiritual concepts
            understandable to both educated scholars and illiterate laborers.</li>
        <li>The use of parables was culturally relevant by using the agricultural and domestic settings of these stories
            resonated with his audience's daily experiences in the 1st century.</li>
        <li>The multiple layers of meaning often contained surface-level stories that anyone could grasp, while offering
            deeper theological insights to those willing to contemplate them further.</li>
        <li>The narrative structure of parables made them easier to remember and share than abstract theological
            concepts.</li>
        <li>Rather than forcing interpretations, parables invited listeners to discover meaning for themselves, engaging
            their minds and hearts in the process.</li>
    </ul>
    <h3 style="font-size:2em; margin:0;padding:1.3%;text-align:center;">Jesus in the Gospels</h3>
    <table>
        <tr>
            <th>Parable</th>
            <th>Description</th>
            <th>Scripture Reference <span style="float:right;margin-right:10%;">
                    <a href="https://berean.bible" title="Young's Literal Translation
                        Section Headings Courtesy Berean Study Bible
                        OpenBible.com" style="color:white;"><ruby>
                            [1] <rt> Bible </rt></ruby>
                    </a></span>
            </th>
        </tr>




<?php

global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
        function theSower(){
  global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
  $title= 'The Sower';
  $image = '../images/sower.webp';
  $imageAlt = 'The Sower Parable';
  $linked_image = '../images/sower.png';
  $figCaption = 'The Parable of the Sower';
  $description = 'Describes different responses to the gospel message using the analogy of seeds falling on different types of soil';
  $paragraphDialogs = ['Imagine a farmer throwing seeds on the ground. That\'s kind of like when someone tells you about Jesus. The seeds are the message, and the ground is like your heart.',
                      'Jesus told a story about this. He said some seeds fell on a path where birds ate them up. That\'s like people who hear the message but don\'t get it, and then it\'s just forgotten.',
                      'Some seeds fell on rocky ground. They grew fast at first, but because the soil wasn\'t deep, they dried up and died. That\'s like people who are excited about the message at first, but when things get tough, they give up.',
                      'Other seeds fell among thorny bushes. The bushes grew bigger and stopped the seeds from growing. That\'s like people who hear the message, but they get too worried about other stuff, like money or wanting things, and the message doesn\'t really change them.',
                      'But some seeds fell on good dirt. They grew really well and made lots more seeds. That\'s like people who really listen to the message, understand it, and let it change how they live. They end up doing good things because of it.',
                      'So, the story is about how different people hear the same message in different ways, depending on what\'s going on in their hearts. Only the people with "good hearts" really let the message grow and make a difference.'
                    ];
  $gospel = ['Matthew','Mark','Luke'];
  //$gospelLinkPrefix = $gLP;
  $gLP ='https://openbible.com/ylt/';
  $gospelLinks = ['matthew/13.htm#1','mark/4.htm#1','luke/8.htm#4'];
  $passage = ['13:1-23,','4:1-20,','8:4-15'];
                  }





$parableFunctions = ['theSower'/*, 'mustardSeed', 'leavenedFlour', 'hiddenTreasure', 'pearlOfGreatPrice','dragnet', 'goodSamaritan', 'prodigalSon', 'lostSheep', 'lostCoin', 'unmercifulServant', 'workersInVineyard', 'richManAndLazarus', 'phariseeAndTaxCollector', 'persistentWidow', 'tenVirgins', 'talents', 'parableSheepAndGoats', 'parableTwoDebtors', 'parableUnfruitfulFigTree', 'parableWickedTenants', 'parableWeddingFeast', 'parableRichFool','wiseAndFoolishBuilders','growingSeed','newClothOnOldGarment','newWineInOldWineskins','lampOnStand','twoSons','unjustSteward','friendAtMidnight','barrenFigTree','greatBanquet','buildingTowerAndKingGoingToWar','unprofitableServants','unjustJudge','blindLeadingTheBlind','faithfulAndWiseServant','watchfulServants','childrenInTheMarketplace','speckAndLog','fishNet','householder','dishonestManager','goodShepherd','vineAndBranches','masterAndServant'*/];

foreach ($parableFunctions as $functionTableRow) {
    // Call the current function
    $functionTableRow();
    /*The code below is the Main Table row the loop will iterate over each function*/
    ?>



<div class="multi-link-container">
            <span class="linked-text">Click me for more information</span>
            <div class="link-dialog">
                <p tabindex="0">This is an example of a text link dialog. When you click on the text, this dialog
                    appears.</p>
                <p tabindex="0">You can add any content here, including links, images, and other HTML elements.</p>
            </div>
        </div>



        <tr>
            <div class="multi-link-container" >
              <td><span tabindex="0" class="linked-text" ><?= $title; ?></span></td>
                <div class="link-dialog" >
                  <figure>
                      <img src="<?= $image; ?>" alt="<?= $imageAlt; ?>">
                      <figcaption><a href="<?= $linked_image; ?>"><?= $figCaption; ?></a></figcaption>
                  </figure>
                </div>
            </div>

              <td>
            <div class="multi-link-container">
              <span tabindex="0" class="linked-text"><?= $description; ?></span>
              <div class="link-dialog">
                <?php foreach ($paragraphDialogs as $index ) {
                  echo '<p tabindex="0">'.$index.'</p>';
                }
                ?>
                </div>
            </div>
            </td>
            <td>
            <?php foreach ($gospel as $index => $text): ?>
              <div class="gospel"><?= $text ?> <a href="<?= $gLP . $gospelLinks[$index] ?>" target="_blank"><?= $passage[$index] ?></a></div>
            <?php endforeach; ?>
            </td>
        </tr>
        <!-- <tr>
            <td>The Sower</td>
            <td>Describes different responses to the gospel message using the analogy of seeds falling on different types of soil.</td>
            <td>Matthew 13:1-23, Mark 4:1-20, Luke 8:4-15</td>
        </tr> -->
    </table>

</article>
<?php
}
}
include './anvil/structure.php';
?>