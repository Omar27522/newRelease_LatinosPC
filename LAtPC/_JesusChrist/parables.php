<?php
function content () {
  global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    global $introduction, $_JesusChrist, $list, $bible;
  global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    global $introducion, $_Jesucristo, $lista, $biblia;
  // $gospelLinkPrefix = $gLP;
  $gLP = 'https://ebible.org/study/';
 ?>
  <style>
    table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
    }
    th {
        background-color:var(--primary-color);
        color: white;
        padding: 12px;
        text-align: left;
    }
    td {
        padding: 8px;
        border-bottom: 1px solid var(--dialog-text-highlight);
    }
    tr:nth-child(even) {
        background-color: var(--background);
    }
    tr:hover {
        background-color: var(--background);
    }
    .parable-name {
        font-weight: bold;
    }
    figcaption {
      font-size:1.7em;
      text-align: center;
      padding-right: 10%;
    }
    figcaption a {
      text-decoration:none;
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
    figure {
      padding-left: 10%;
    }
    figure img{
      width:90%;
      height:auto;
    }
    .intro-section {
      background: linear-gradient(135deg, var(--card-bg), var(--background));
      border-radius: var(--border-radius);
      padding: 2rem;
      margin: 2rem 0;
      box-shadow: var(--box-shadow);
      border-left: 4px solid var(--primary-color);
    }
    .intro-section h2 {
      color: var(--primary-color);
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
      font-weight: 600;
      line-height: 1.4;
    }
    .intro-list {
      list-style: none;
      padding: 0;
    }
    .intro-list li {
      background: var(--card-bg);
      margin: 1rem 0;
      padding: 1.2rem;
      border-radius: 8px;
      border-left: 3px solid var(--secondary-color);
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      transition: var(--transition);
      position: relative;
    }
    .intro-list li:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 16px rgba(0,0,0,0.15);
      border-left-color: var(--primary-color);
    }
    .intro-list li::before {
      content: "✓";
      color: var(--secondary-dark);
      font-weight: bold;
      font-size: 1.2rem;
      margin-right: 0.8rem;
    }
    .section-title {
      font-size:2em;
      color:var(--secondary-dark);
      border-radius: var(--border-radius);
      text-align: center;
      box-shadow: var(--box-shadow);
      font-weight: 600;
    }
  </style>
  <article class="fullbar">
    <div class="intro-section">
    <h1 class="section-title" style="box-shadow:none;"><?= !empty ($_JesusChrist) ? $_JesusChrist[0] : $_Jesucristo[0]; ?></h1>
      <ul class="intro-list">
          <li><?= !empty ($introduction) ? $introduction[$list][0] : $introducion[$lista][0];?></li>
          <li><?= !empty ($introduction) ? $introduction[$list][1] : $introducion[$lista][1];?></li>
          <li><?= !empty ($introduction) ? $introduction[$list][2] : $introducion[$lista][2];?></li>
          <li><?= !empty ($introduction) ? $introduction[$list][3] : $introducion[$lista][3];?></li>
          <li><?= !empty ($introduction) ? $introduction[$list][4] : $introducion[$lista][4];?></li>
      </ul>
    </div>
    <h2 class="section-title"><?= !empty ($_JesusChrist) ? $_JesusChrist[1] : $_Jesucristo[1]; ?></h2>
    <table>
      <tr>
        <th><?= !empty ($introduction) ? $introduction[0] : $introducion[0];?></th>
        <th><?= !empty ($introduction) ? $introduction[1] : $introducion[1];?></th>
        <th><?= !empty ($introduction) ? $introduction[2] : $introducion[2];?>
          <span style="float:right;margin-right:10%;">
            <a href="<?= !empty ($bible) ? $bible[0] : $biblia[0];?>" title="<?= !empty ($bible) ? $bible[1] : $biblia[1];?>" style="color:white;"><ruby>
              [1] <rt> <?= !empty ($bible) ? $bible[2] : $biblia[2];?> </rt></ruby>
            </a>
          </span>
          </th>
      </tr>
        <?php
        if (!empty($introduction)) {
          $parableFunctions = ['theSower', 'wheatAndTheWeeds', 'mustardSeed', 'leavenedFlour', 'hiddenTreasure', 'pearlOfGreatPrice', 'dragnet', 'goodSamaritan', 'prodigalSon', 'lostSheep', 'lostCoin', 'unmercifulServant', 'workersInVineyard', 'richManAndLazarus', 'phariseeAndTaxCollector', 'persistentWidow', 'tenVirgins', 'talents', 'sheepAndGoats', 'twoDebtors', 'wickedTenants', 'weddingFeast', 'richFool', 'wiseAndFoolishBuilders', 'growingSeed', 'newClothOnOldGarment', 'newWineInOldWineskins', 'lampOnStand', 'twoSons', 'unjustSteward', 'dishonestManager', 'friendAtMidnight', 'barrenFigTree', 'greatBanquet', 'buildingTowerAndKingGoingToWar', 'unprofitableServants', 'masterAndServant', 'unjustJudge', 'blindLeadingTheBlind', 'faithfulAndWiseServant', 'watchfulServants', 'childrenInTheMarketplace', 'speckAndLog', 'fishNet', 'householder', 'goodShepherd', 'vineAndBranches'];
        }
        if (!empty($introducion)) {
          $parableFunctions = ['elSembrador', 'trigoYHierbaMala', 'semillaDeMostaza', 'levaduraEnHarina', 'tesoroEscondido', 'perlaDeGranPrecio', 'red', 'buenSamaritano', 'hijoProdigo', 'ovejaPerdida', 'monedaPerdida', 'siervoSinPiedad', 'obrerosEnLaVinha', 'hombreRicoYLazaro', 'fariseoYPublicano', 'viudaPersistente', 'diezVirgenes', 'talentos', 'ovejasYCabritos', 'dosDeudores', 'labradoresMalvados', 'banqueteDeBodas', 'ricoInsensato', 'constructoresSabiosEInsensatos', 'semillaQueCrece', 'panhoNuevoEnVestidoViejo', 'vinoNuevoEnOdresViejos', 'lamparaEnLaMesa', 'dosHijos', 'mayordomoInjusto','mayordomoDeshonesto', 'amigoAmediaNoche', 'higueraEsteril', 'granBanquete', 'torreElReyYLaGuerra', 'siervosInutiles', 'amoYSiervo', 'juezInjusto', 'ciegoGuiandoAlCiego', 'siervoFielYSabio', 'siervosVeladores', 'ninhosEnLaPlaza', 'pajaYViga', 'redDePescar', 'amoDeLaCasa', 'buenPastor', 'vidYLosSarmientos'];
        }
        foreach ($parableFunctions as $functionTableRow) {
          // Call the current function
          $functionTableRow();
          /* The code below is the Main Table row the loop will iterate over each function */
          ?>
          <tr>
            <td>
                <div class="multi-link-container" >
                  <span class="linked-text" ><?= !empty ($title) ? $title : $titulo; ?></span>
                  <div class="link-dialog" >
                    <figure>
                      <img src="<?= !empty ($image) ? $image : $imagen; ?>" alt="<?= !empty ($imageAlt) ? $imageAlt : $imagenAlt; ?>">
                      <figcaption><a href="<?= !empty ($linked_image) ? $linked_image : $enlaceImagen; ?>"><?= !empty ($figCaption) ? $figCaption : $figLeyenda; ?></a></figcaption>
                    </figure>
                  </div>
                </div>
            </td>
            <td>
                <div class="multi-link-container">
                  <span tabindex="0" class="linked-text"><?= !empty ($description) ? $description : $descripcion; ?></span>
                  <div class="link-dialog">
                    <?php
                    echo '<h2 class="section-title" style="box-shadow:none;">'.(!empty ($title) ? $title : $titulo).'</h2>';
                    if (!empty($paragraphDialogs)) {
                    foreach ($paragraphDialogs as $index) {
                      echo '<p tabindex="0">' . $index . '</p>';
                    }
                    }
                    if (!empty($dialogoParrafo)) {
                    foreach ($dialogoParrafo as $index) {
                      echo '<p tabindex="0">' . $index . '</p>';
                    }
                    }
                    ?>
                    </div>
                </div>
            </td>
            <td>
                <?php if (!empty($gospel)) {
                foreach ($gospel as $index => $text):
                  ?>
                  <div class="gospel"><?= $text ?> <a href="<?= $gLP . $gospelLinks[$index] ?>" target="_blank"><?= $passage[$index] ?></a></div>
                  <?php endforeach; }?>
                  <?php if (!empty($evangelio)) {
                foreach ($evangelio as $index => $text):
                  ?>
                  <div class="gospel"><?= $text ?> <a href="<?= $gLP . $enlaceEvangelio[$index] ?>" target="_blank"><?= $pasaje[$index] ?></a></div>
                  <?php endforeach; }?>
            </td>
          </tr>
            <?php
          } //END LOOP foreach($parableFunctions as $functionTableRow);
        ?>
    </table>
  </article>
  <?php
} //END FUNCTION content();
/*
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿Content︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿Parables();︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
*/
function parables() {

  global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
  global $introduction, $_JesusChrist, $list, $bible;

  $_JesusChrist = [ 'Jesus in the Gospels',
                    'Jesus actively interacts with a wide range of people, using parables as a key tool to communicate His message in a way that everyone could understand by the use of mental illustrations.'];
  $introduction =	[
    $list => ['The parables were Universally accessible by using every day scenarios, Jesus made complex spiritual concepts understandable to both educated scholars and illiterate laborers.',
              'The use of parables was culturally relevant by using the agricultural and domestic settings of these stories resonated with his audience\'s daily experiences in the 1st century.',
              'The multiple layers of meaning often contained surface-level stories that anyone could grasp, while offering deeper theological insights to those willing to contemplate them further.',
              'The narrative structure of parables made them easier to remember and share than abstract theological concepts.',
              'Rather than forcing interpretations, parables invited listeners to discover meaning for themselves, engaging their minds and hearts in the process.',
             ],'Parable', 'Description', 'Scripture Reference','Bible'
					];
  $bible = ['https://ebible.org/find/show.php?id=eng-web', 'World English Bible with Deuterocanon', 'Bible'];

  function theSower() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Sower';
    $image = '../images/_JesusChrist/sower.webp';
    $imageAlt = 'The Sower Parable';
    $linked_image = '../images/_JesusChrist/sower.png';
    $figCaption = 'The Parable of the Sower';
    $description = 'Describes different responses to the gospel message using the analogy of seeds falling on different types of soil';
    $paragraphDialogs = ["Imagine a farmer throwing seeds on the ground. That's kind of like when someone tells you about Jesus. The seeds are the message, and the ground is like your heart.",
      "Jesus told a story about this. He said some seeds fell on a path where birds ate them up. That's like people who hear the message but don't get it, and then it's just forgotten.",
      "Some seeds fell on rocky ground. They grew fast at first, but because the soil wasn't deep, they dried up and died. That's like people who are excited about the message at first, but when things get tough, they give up.",
      "Other seeds fell among thorny bushes. The bushes grew bigger and stopped the seeds from growing. That's like people who hear the message, but they get too worried about other stuff, like money or wanting things, and the message doesn't really change them.",
      "But some seeds fell on good dirt. They grew really well and made lots more seeds. That's like people who really listen to the message, understand it, and let it change how they live. They end up doing good things because of it.",
      'So, the story is about how different people hear the same message in different ways, depending on what\'s going on in their hearts. Only the people with "good hearts" really let the message grow and make a difference.'];
    $gospel = ['Matthew', 'Mark', 'Luke'];
    $gospelLinks = ['?v1=MT13_1&t1=local%3Aeng-web&w1=bible', '?v1=MK4_1&t1=local%3Aeng-web&w1=bible', '?v1=LK8_4&t1=local%3Aeng-web&w1=bible'];
    $passage = ['13:1-23,', '4:1-20,', '8:4-15'];
  }

  function wheatAndTheWeeds() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Parable of the Wheat and the Weeds';
    $image = '../images/_JesusChrist/wheatAndTheWeeds.webp';
    $imageAlt = 'Wheat and the Weeds Parable';
    $linked_image = '../images/_JesusChrist/wheatAndTheWeeds.png';
    $figCaption = 'The Parable of the Wheat and the Weeds';
    $description = 'Illustrates the kingdom of God as a farmer planting wheat but His enemies plant weeds in His field. Jesus will separate the wheat from the weeds at harvest time';
    $paragraphDialogs = ['The Kingdom of Heaven is like a farmer who planted good seeds in his field.',
      'But one night, while everyone was asleep, his enemy came and secretly planted weeds among the wheat, then left.',
      'Later, when the plants grew tall and produced grain, the weeds also appeared.',
      'The farmer\'s workers came to him and asked, "Sir, you planted good seeds, right? Where did all these weeds come from?"',
      'He told them, "An enemy did this." The workers then asked, "Do you want us to go and pull them out?"',
      'But he replied, "No, because if you pull out the weeds, you might accidentally pull up the wheat too. Let both grow together until harvest time. When it\'s time to harvest, I\'ll tell the reapers:<br />\'First, gather the weeds and tie them in bundles to burn them. Then, put the good wheat into my barn.\'"'];
    $gospel = ['Matthew'];
    $gospelLinks = ['?w1=bible&t1=local%3Aeng-web&v1=MT13_24'];
    $passage = ['13:24-30'];
  }

  function mustardSeed() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Mustard Seed';
    $image = '../images/_JesusChrist/mustardSeed.webp';
    $imageAlt = 'The Mustard Seed Parable';
    $linked_image = '../images/_JesusChrist/mustardSeed.png';
    $figCaption = 'The Parable of the Mustard Seed';
    $description = "Illustrates how God's kingdom starts small but grows enormously";
    $paragraphDialogs = ['A tiny round mustard seed. You know how small those are, right? Black mustard seeds are about 1mm, or about .05 inches in diameter.',
      "He said that the kingdom of God is like that little seed. When it's planted, it's one of the smallest seeds you can find.",
      'But guess what? When it grows up, it becomes the biggest of all garden plants! It gets so big that birds can even come and make nests in its branches.',
      "So, what Jesus was saying is that even though God's kingdom might seem really small or unimportant for people, But the kingdom is something huge and amazing. It starts small but ends up being big enough to help and shelter lots of people, just like the big mustard plant shelters the birds. It's like something little that has the potential to become something really, really big!"];
    $gospel = ['Matthew', 'Mark', 'Luke'];
    $gospelLinks = ['?v1=MT13_31&t1=local%3Aeng-web&w1=bible', '?v1=MK4_30&t1=local%3Aeng-web&w1=bible', '?v1=LK13_18&t1=local%3Aeng-web&w1=bible'];
    $passage = ['13:31-32,', '4:30-32,', '13:18-19'];
  }

  function leavenedFlour() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Leaven';
    $image = '../images/_JesusChrist/leavenedFlour.webp';
    $imageAlt = 'The Leaven Parable';
    $linked_image = '../images/_JesusChrist/leavenedFlour.png';
    $figCaption = 'The Parable of the Leavened Flour';
    $description = 'Shows how the kingdom of God works subtly but thoroughly transforms';
    $paragraphDialogs = ['Imagine a woman making a whole bunch of bread. She takes a little bit of yeast (or leaven) and mixes it into a huge amount of flour – like, a really, really big bowl of it!',
      'Even though she only puts in a little bit of yeast, something amazing happens. Slowly but surely, the yeast spreads all the way through the dough, and it makes the whole thing rise and get bigger.',
      "So, what Jesus was saying is that even though God's kingdom might start with just a few people or seem like something small, it has this incredible power to spread and grow and affect everything around it.",
      "Just like a little bit of yeast can change a whole lot of dough, God's kingdom can start small but eventually touch and change many, many lives. It has this quiet but powerful way of growing and making a big difference!"];
    $gospel = ['Matthew', 'Luke'];
    $gospelLinks = ['?v1=MT13_33&t1=local%3Aeng-web&w1=bible', '?v1=LK13_20&t1=local%3Aeng-web&w1=bible'];
    $passage = ['13:33,', '13:20-21'];
  }

  function hiddenTreasure() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Hidden Treasure';
    $image = '../images/_JesusChrist/hiddenTreasure.webp';
    $imageAlt = 'The Hidden Treasure Parable';
    $linked_image = '../images/_JesusChrist/hiddenTreasure.png';
    $figCaption = 'The Parable of the Hidden Treasure';
    $description = "Reveals the supreme value of God's kingdom, worth sacrificing everything to obtain";
    $paragraphDialogs = ["Jesus told a story about a man who was walking through someone else's field. While he was walking, he found a treasure that was hidden in the ground!",
      'The man was super excited about finding this treasure. He covered it back up really quick so nobody else would find it.',
      "Then he went and sold everything he owned - like all his stuff! That's how badly he wanted this treasure.",
      'With all the money he got from selling his things, he bought the field where the treasure was hidden. Now the treasure was all his!',
      "Jesus was teaching that God's kingdom is like that treasure. When people realize how amazing God's kingdom is, they'll be willing to give up everything else just to be part of it. It's that valuable!"];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT13_44&t1=local%3Aeng-web&w1=bible'];
    $passage = ['13:44'];
  }

  function pearlOfGreatPrice() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Pearl of Great Price';
    $image = '../images/_JesusChrist/pearlOfGreatPrice.webp';
    $imageAlt = 'The Pearl of Great Price Parable';
    $linked_image = '../images/_JesusChrist/pearlOfGreatPrice.png';
    $figCaption = 'The Parable of the Pearl of Great Price';
    $description = "Similar to the Hidden Treasure, emphasizes the kingdom's incomparable worth";
    $paragraphDialogs = ['Jesus told a story about a merchant, which is like a businessman who buys and sells valuable things. This merchant was looking for beautiful pearls to sell.',
      'One day, he found an amazing pearl - the most perfect and valuable pearl he had ever seen in his whole life!',
      'The merchant wanted this special pearl so badly that he went and sold absolutely everything he owned just to get enough money to buy it.',
      "Jesus was showing us that God's kingdom is like that perfect pearl. When we truly understand how amazing God's kingdom is, we'll think it's worth giving up everything else we have just to be part of it!"];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT13_45&t1=local%3Aeng-web&w1=bible'];
    $passage = ['13:45-46'];
  }

  function dragnet() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Dragnet';
    $image = '../images/_JesusChrist/dragnet.webp';
    $imageAlt = 'The Dragnet Parable';
    $linked_image = '../images/_JesusChrist/dragnet.png';
    $figCaption = 'The Parable of the Dragnet';
    $description = 'Describes the final judgment when the righteous will be separated from the wicked';
    $paragraphDialogs = ['Jesus told a story about some fishermen who threw a big net into the lake. The net caught all kinds of fish - good ones and bad ones all mixed together.',
      'When the net was full, the fishermen pulled it up onto the shore. Then they sat down and began sorting through all the fish.',
      'They put the good fish into baskets to keep, but they threw the bad fish away because nobody would want to eat those.',
      'Jesus said this is like what will happen at the end of the world. Angels will separate good people from bad people, just like the fishermen separated good fish from bad fish.',
      "The bad people will be thrown away into a fiery furnace where there will be crying and lots of sadness. But the good people, who follow God, will shine like the sun in God's kingdom!"];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT13_47&t1=local%3Aeng-web&w1=bible'];
    $passage = ['13:47-50'];
  }

  function goodSamaritan() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Good Samaritan';
    $image = '../images/_JesusChrist/goodSamaritan.webp';
    $imageAlt = 'The Good Samaritan Parable';
    $linked_image = '../images/_JesusChrist/goodSamaritan.png';
    $figCaption = 'The Parable of the Good Samaritan';
    $description = "Teaches about loving one's neighbor through the story of an unlikely hero helping a wounded stranger";
    $paragraphDialogs = ['Jesus told a story about a Jewish man who was traveling on a road from Jerusalem to Jericho. While he was traveling, some robbers attacked him! They beat him up, took all his stuff, and left him hurt really badly on the side of the road.',
      "A priest (that's like a church leader) came walking down the same road. But when he saw the hurt man, he just crossed to the other side of the road and kept on walking!",
      'Then another religious leader called a Levite came by. He also saw the hurt man, but he did the same thing - he just walked on by without helping!',
      "Finally, a Samaritan man came down the road. Now, Samaritans and Jews usually didn't like each other at all. But when this Samaritan saw the hurt Jewish man, he felt sorry for him.",
      "The Samaritan cleaned and bandaged the man's wounds. Then he put the hurt man on his own donkey and took him to an inn, which is like a hotel. The Samaritan even paid the innkeeper to take care of the hurt man until he got better!",
      'After telling this story, Jesus asked. Who was a real neighbor to the man who got hurt? The answer was the Samaritan - the one who showed kindness and mercy. Jesus told us to go and do the same thing - to show love to everyone, even people who might be different from us!'];
    $gospel = ['Luke'];
    $gospelLinks = ['?w1=bible&t1=local%3Aeng-web&v1=LK10_25'];
    $passage = ['10:25-37'];
  }

  function prodigalSon() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Prodigal Son';
    $image = '../images/_JesusChrist/prodigalSon.webp';
    $imageAlt = 'The Prodigal Son Parable';
    $linked_image = '../images/_JesusChrist/prodigalSon.png';
    $figCaption = 'The Parable of the Prodigal Son';
    $description = "Illustrates God's forgiveness and the joy of reconciliation through a father welcoming back his wayward son";
    $paragraphDialogs = ["Jesus told a story about a father who had two sons. The younger son asked his father for his share of the family money, even though his father wasn't dead yet! This was super disrespectful, but the father gave him the money anyway.",
      'The younger son took all that money and moved far away from home. There, he wasted all his money on wild parties and doing whatever he wanted. He was having fun for a while, but then he ran out of money completely!',
      "Right at that time, there was a terrible famine in that country, which means there wasn't enough food. The son got so desperate and hungry that he took a job feeding pigs. He was so hungry that he even wanted to eat the gross pig food!",
      'Finally, the son realized how badly he had messed up. He thought, "Even my father\'s servants have plenty of food, and here I am starving!" So he decided to go back home and beg his father to let him be just a servant.',
      'But while the son was still a long way off, his father saw him coming. Instead of being angry, the father ran to his son, hugged him, and kissed him! The son started to apologize, but the father was already calling for a celebration.',
      'The father gave his son a fancy robe, a ring, and sandals. Then he threw a big party because his son who had been "dead" was now alive again; his son who had been lost was now found!',
      'The older brother got mad about this party. He complained that he had always obeyed his father, but never got a party. The father explained that everything he had already belonged to the older son, but they needed to celebrate because the lost brother had returned.',
      'Jesus told this story to show how much God loves us and is ready to forgive us. Like the father in the story, God eagerly waits for us to come back to Him when we mess up, and He celebrates when we do!'];
    $gospel = ['Luke'];
    $gospelLinks = ['?v1=LK15_11&t1=local%3Aeng-web&w1=bible'];
    $passage = ['15:11-32'];
  }

  function lostSheep()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Lost Sheep';
    $image = '../images/_JesusChrist/lostSheep.webp';
    $imageAlt = 'The Lost Sheep Parable';
    $linked_image = '../images/_JesusChrist/lostSheep.png';
    $figCaption = 'The Parable of the Lost Sheep';
    $description = "Shows God's concern for each individual through a shepherd seeking one lost sheep";
    $paragraphDialogs = ['Jesus told a story about a shepherd who had 100 sheep. Shepherds take care of sheep and protect them from wild animals and danger.',
      'One day, the shepherd noticed that one of his sheep was missing! What do you think he did? He left the 99 other sheep in a safe place and went searching for that one lost sheep.',
      'When the shepherd finally found his lost sheep, he was so happy! He put the sheep on his shoulders and carried it all the way home.',
      'The shepherd was so excited about finding his lost sheep that he called all his friends and neighbors together for a celebration!',
      "Jesus explained that this is how God feels about people who are lost and then found. He said there's more joy in heaven over one lost person who turns back to God than over 99 people who are already following God.",
      "This story shows that God cares about every single person. Just like the shepherd wasn't willing to lose even one sheep, God doesn't want to lose any of us. He will come looking for us when we wander away!"];
    $gospel = ['Matthew', 'Luke'];
    $gospelLinks = ['?w1=bible&t1=local%3Aeng-web&v1=MT18_12', '?w1=bible&t1=local%3Aeng-web&v1=LK15_1'];
    $passage = ['18:12-14,', '15:1-7'];
  }

  function lostCoin()	{
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Lost Coin';
    $image = '../images/_JesusChrist/lostCoin.webp';
    $imageAlt = 'The Lost Coin Parable';
    $linked_image = '../images/_JesusChrist/lostCoin.png';
    $figCaption = 'The Parable of the Lost Coin';
    $description = 'Emphasizes the value God places on finding those who are lost';
    $paragraphDialogs = ['Jesus told a story about a woman who had ten silver coins. These coins were very important to her.',
      'One day, she realized that one of her coins was missing! She was so worried about finding it that she lit a lamp, swept the whole house, and searched carefully everywhere until she found it.',
      'When she finally found her lost coin, she was super happy! She called all her friends and neighbors together and said, "Come celebrate with me because I\'ve found my lost coin!"',
      "Jesus explained that this is how God and the angels feel when one person who was doing wrong turns back to God. There's a big celebration in heaven!",
      'This story teaches us that God values each person so much. Just like the woman searched hard for one coin, God seeks out people who are lost. And just like she celebrated finding her coin, God celebrates when someone comes back to Him!'];
    $gospel = ['Luke'];
    $gospelLinks = ['?w1=bible&t1=local%3Aeng-web&v1=LK15_8'];
    $passage = ['15:8-10'];
  }

  function unmercifulServant()	{
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Unmerciful Servant';
    $image = '../images/_JesusChrist/unmercifulServant.webp';
    $imageAlt = 'The Unmerciful Servant Parable';
    $linked_image = '../images/_JesusChrist/unmercifulServant.png';
    $figCaption = 'The Parable of the Unmerciful Servant';
    $description = "Teaches about forgiveness by contrasting a king's mercy with a servant's harshness";
    $paragraphDialogs = ['Jesus told a story about a king who wanted to settle accounts with his servants. One servant was brought to him who owed the king millions of dollars - way more money than the servant could ever pay back!',
      'The king ordered that the servant and his whole family should be sold as slaves to pay back some of the debt. The servant fell on his knees and begged, "Please be patient with me, and I will pay back everything!"',
      'The king felt sorry for the servant and did something amazing - he canceled the whole debt! He let the servant go free without having to pay back anything at all!',
      'But then that same servant went out and found a fellow servant who owed him just several hundred dollars. He grabbed him, started choking him, and demanded, "Pay back what you owe me!"',
      'The fellow servant begged for patience, just like the first servant had done with the king. But the first servant refused to show mercy. He had the man thrown into prison until he could pay the debt.',
      'When the other servants saw what happened, they were really upset. They went and told the king everything. The king called the first servant back and said, "You wicked servant! I canceled all that debt because you begged me to. Shouldn\'t you have had mercy on your fellow servant just as I had on you?"',
      'The angry king then handed the unmerciful servant over to the jailers to be punished until he could pay back all he owed.',
      "Jesus ended by saying that this is how God will treat us if we don't forgive others from our heart. The story teaches us that since God has forgiven us so much, we should also be willing to forgive others when they do wrong to us."];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT18_21&t1=local%3Aeng-web&w1=bible'];
    $passage = ['18:21-35'];
  }

  function workersInVineyard()	{
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Workers in the Vineyard';
    $image = '../images/_JesusChrist/workersInVineyard.webp';
    $imageAlt = 'The Workers in the Vineyard Parable';
    $linked_image = '../images/_JesusChrist/workersInVineyard.png';
    $figCaption = 'The Parable of the Workers in the Vineyard';
    $description = "Reveals God's generosity and grace that defies human expectations of fairness";
    $paragraphDialogs = ['Jesus told a story about a landowner who needed workers for his vineyard. Early in the morning, around 6 AM, he went out and hired some workers. He agreed to pay them a denarius for the day, which was the normal daily wage.',
      'Later that morning, around 9 AM, the landowner saw more people standing in the marketplace with nothing to do. He told them, "You also go and work in my vineyard, and I will pay you whatever is right." So they went.',
      'The landowner did the same thing at noon, at 3 PM, and even at 5 PM when the workday was almost over! Each time, he sent more workers into his vineyard.',
      'When evening came, it was time to pay all the workers. The landowner told his manager to call the workers and pay them, starting with the ones who were hired last.',
      "The workers who were hired at 5 PM came first. Surprisingly, each of them received a full denarius - a whole day's wage! When the workers who were hired first saw this, they got excited thinking they would get even more.",
      'But when their turn came, they also received one denarius each - exactly what they had agreed to at the beginning of the day. They started complaining to the landowner, "These people who were hired last worked only one hour, but you\'ve paid them the same as us who worked all day in the hot sun!"',
      "The landowner replied to one of them, \"Friend, I'm not being unfair to you. Didn't you agree to work for a denarius? Take your pay and go. I want to give the one who was hired last the same as I gave you. Don't I have the right to do what I want with my own money? Or are you envious because I am generous?\"",
      "Jesus ended by saying, \"So the last will be first, and the first will be last.\" This story teaches us that God's way of rewarding people isn't based on how long or how much they work. Instead, God is generous and gives good gifts to everyone who follows Him, whether they've been following Him their whole life or just started recently."];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT20_1&t1=local%3Aeng-web&w1=bible'];
    $passage = ['20:1-16'];
  }

  function richManAndLazarus()	{
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Rich Man and Lazarus';
    $image = '../images/_JesusChrist/richManAndLazarus.webp';
    $imageAlt = 'The Rich Man and Lazarus Parable';
    $linked_image = '../images/_JesusChrist/richManAndLazarus.png';
    $figCaption = 'The Parable of the Rich Man and Lazarus';
    $description = 'Warns about the dangers of wealth and ignoring those in need';
    $paragraphDialogs = ['Jesus told a story about a rich man who lived in luxury every day. He wore expensive purple clothes and fine linen, and he feasted on delicious food all the time.',
      "At the rich man's gate was a poor beggar named Lazarus. His body was covered with sores, and he was so hungry that he wished he could eat just the crumbs that fell from the rich man's table. Even dogs came and licked his sores. The rich man didn't help Lazarus at all.",
      "Eventually, both men died. Lazarus was carried by angels to Abraham's side in heaven. The rich man went to Hades, where he was in terrible pain.",
      'The rich man looked up and saw Abraham far away with Lazarus by his side. He called out, "Father Abraham, have mercy on me! Send Lazarus to dip the tip of his finger in water and cool my tongue, because I\'m suffering in this fire."',
      'But Abraham replied, "Son, remember that in your lifetime you received good things, while Lazarus received bad things. Now he is comforted here, and you are in agony. Besides, there\'s a huge gap between us that nobody can cross."',
      'The rich man then begged Abraham to send Lazarus to warn his five brothers so they wouldn\'t end up in the same painful place. Abraham said, "They have Moses and the Prophets; let them listen to them."',
      'The rich man argued, "No, father Abraham, but if someone from the dead goes to them, they will repent!" Abraham responded, "If they don\'t listen to Moses and the Prophets, they won\'t be convinced even if someone rises from the dead."',
      'Jesus told this story to warn people about the dangers of focusing on wealth and comfort while ignoring those in need. The story teaches us that how we treat others, especially people who are poor or suffering, matters a lot to God.'];
    $gospel = ['Luke'];
    $gospelLinks = ['?w1=bible&t1=local%3Aeng-web&v1=LK16_19'];
    $passage = ['16:19-31'];
  }

  function phariseeAndTaxCollector()	{
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Pharisee and the Tax Collector';
    $image = '../images/_JesusChrist/phariseeAndTaxCollector.webp';
    $imageAlt = 'The Pharisee and the Tax Collector Parable';
    $linked_image = '../images/_JesusChrist/phariseeAndTaxCollector.png';
    $figCaption = 'The Parable of the Pharisee and the Tax Collector';
    $description = 'Contrasts self-righteous pride with humble repentance in prayer';
    $paragraphDialogs = ['Jesus told a story about two men who went to the temple to pray. One was a Pharisee, which is like a religious leader who followed all the rules really carefully. The other was a tax collector, which most people disliked because tax collectors often cheated people.',
      'The Pharisee stood up by himself and prayed, "God, I thank you that I\'m not like other people—robbers, evildoers, adulterers—or even like this tax collector. I fast twice a week and give a tenth of all I get." He was basically bragging about how good he was!',
      'But the tax collector stood at a distance. He wouldn\'t even look up to heaven. Instead, he beat his chest and said, "God, have mercy on me, a sinner." He knew he had done wrong things and was asking God to forgive him.',
      'Jesus said that it was actually the tax collector, not the Pharisee, who went home right with God! Then Jesus explained, "For all those who make themselves important will become unimportant, and those who humble themselves will become important."',
      "This story teaches us that God doesn't want us to be proud or to think we're better than other people. Instead, God wants us to be honest about our mistakes and to ask for His forgiveness with a humble heart."];
    $gospel = ['Luke'];
    $gospelLinks = ['?w1=bible&t1=local%3Aeng-web&v1=LK18_9'];
    $passage = ['18:9-14'];
  }

  function persistentWidow()	{
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Persistent Widow';
    $image = '../images/_JesusChrist/persistentWidow.webp';
    $imageAlt = 'The Persistent Widow Parable';
    $linked_image = '../images/_JesusChrist/persistentWidow.png';
    $figCaption = 'The Parable of the Persistent Widow';
    $description = 'Encourages persistent prayer through the story of a widow seeking justice';
    $paragraphDialogs = ["Jesus told a story to teach his followers that they should always pray and never give up. The story was about a judge who didn't care about God or what people thought about him.",
      'In the same town was a widow who kept coming to this judge with the same request: "Grant me justice against my opponent." A widow is a woman whose husband has died, and in those days, widows often had a hard time taking care of themselves.',
      "For a long time, the judge refused to help her. But the widow didn't give up! She kept coming back again and again, asking for justice.",
      "Finally, the judge thought to himself, \"Even though I don't care about God or people, I will give this widow justice because she keeps bothering me. If I don't help her, she'll wear me out with her constant requests!\"",
      'Then Jesus explained the point of the story. He said, "Listen to what the unfair judge said. And won\'t God bring justice for his chosen people, who cry out to him day and night? Will he keep putting them off? I tell you, he will give them justice quickly."',
      'The story teaches us that if even an unfair judge will eventually respond to someone who keeps asking, how much more will God - who is perfectly good and who loves us - respond to our prayers when we keep bringing our needs to Him!'];
    $gospel = ['Luke'];
    $gospelLinks = ['?w1=bible&t1=local%3Aeng-web&v1=LK18_1'];
    $passage = ['18:1-8'];
  }

  function tenVirgins()	{
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Ten Virgins';
    $image = '../images/_JesusChrist/tenVirgins.webp';
    $imageAlt = 'The Ten Virgins Parable';
    $linked_image = '../images/_JesusChrist/tenVirgins.png';
    $figCaption = 'The Parable of the Ten Virgins';
    $description = "Stresses readiness for Christ's return through the analogy of wedding attendants";
    $paragraphDialogs = ["Jesus told a story comparing the kingdom of heaven to ten bridesmaids who took their lamps and went out to meet the bridegroom (that's the man getting married).",
      "Five of the bridesmaids were foolish, and five were wise. The foolish ones took their lamps but didn't bring any extra oil with them. The wise ones, however, took oil in jars along with their lamps. They were prepared!",
      'The bridegroom was a long time in coming, and all the bridesmaids got sleepy and fell asleep. But at midnight, someone shouted, "Here\'s the bridegroom! Come out to meet him!"',
      'All the bridesmaids woke up and got their lamps ready. The foolish ones realized they were running out of oil and said to the wise ones, "Give us some of your oil; our lamps are going out."',
      'But the wise ones replied, "No, there may not be enough for both us and you. Go to those who sell oil and buy some for yourselves."',
      'While the foolish bridesmaids were gone buying oil, the bridegroom arrived. The wise bridesmaids, who were ready, went in with him to the wedding banquet. And then the door was shut and locked!',
      'Later, the foolish bridesmaids came back and called out, "Sir! Sir! Open the door for us!" But the bridegroom answered, "Truly I tell you, I don\'t know you."',
      'Jesus ended the story by saying, "Therefore keep watch, because you do not know the day or the hour." He was teaching us to always be ready for when He comes back, because we don\'t know exactly when that will be!'];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT25_1&t1=local%3Aeng-web&w1=bible'];
    $passage = ['25:1-13'];
  }

  function talents()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Talents/Minas';
    $image = '../images/_JesusChrist/talents.webp';
    $imageAlt = 'The Talents Parable';
    $linked_image = '../images/_JesusChrist/talents.png';
    $figCaption = 'The Parable of the Talents';
    $description = 'Teaches about stewardship and accountability for what God entrusts to us';
    $paragraphDialogs = ['Jesus told a story about a man going on a journey. Before he left, he called his servants and entrusted his wealth to them. Talents were large amounts of money in those days.',
      'To one servant he gave five talents, to another two talents, and to another just one talent. He gave to each according to their ability. Then he went on his journey.',
      "The servant who received five talents went right away and put the money to work, earning five more talents. The one with two talents gained two more. But the servant who got one talent dug a hole in the ground and hid his master's money.",
      'After a long time, the master came back and settled accounts with his servants. The one who had received five talents brought the additional five and said, "Master, you gave me five talents. See, I have gained five more!"',
      'The master replied, "Well done, good and faithful servant! You have been faithful with a few things; I will put you in charge of many things. Come and share your master\'s happiness!"',
      'The servant who had received two talents also came and said, "Master, you gave me two talents. See, I have gained two more!" The master said the same thing to him, "Well done, good and faithful servant!"',
      'Then the servant who had received one talent came and said, "Master, I knew you are a hard man, harvesting where you haven\'t sown and gathering where you haven\'t scattered seed. So I was afraid and went out and hid your talent in the ground. Here, take back what belongs to you."',
      'The master replied, "You wicked, lazy servant! If you knew I harvest where I haven\'t sown, you should have at least put my money in the bank so I could have gotten it back with interest!"',
      'The master took the one talent from him and gave it to the servant who had ten talents. He said, "Everyone who uses well what they are given will get more. But the one who does not use well what they are given will have everything taken away."',
      'Jesus told this story to teach that God expects us to use the gifts, abilities, and opportunities He gives us. When we use them well, He will give us more responsibilities and blessings!'];
    $gospel = ['Matthew', 'Luke'];
    $gospelLinks = ['?v1=MT25_14&t1=local%3Aeng-web&w1=bible', '?v1=LK19_11&t1=local%3Aeng-web&w1=bible'];
    $passage = ['25:14-30', '19:11-27'];
  }

  function sheepAndGoats() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Sheep and the Goats';
    $image = '../images/_JesusChrist/sheepAndGoats.webp';
    $imageAlt = 'Sheep and the goats';
    $linked_image = '../images/_JesusChrist/sheepAndGoats.png';
    $figCaption = 'The Parable of the Sheep and the Goats';
    $description = 'Describes the final judgment based on how people treated "the least of these"';
    $paragraphDialogs = ['Jesus says when He comes back, He will separate people like a shepherd separates sheep from goats.',
      'The sheep are the people who helped others when they were hungry, sick, or in trouble. Jesus says they were really helping Him.',
      'The goats are the people who didn’t help others. Jesus says they ignored Him by not caring for others.',
      'This story teaches us that showing kindness to others is very important to God.'];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT25_31&t1=local%3Aeng-web&w1=bible'];
    $passage = ['25:31-46'];
  }

  function twoDebtors() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Two Debtors';
    $image = '../images/_JesusChrist/twoDebtors.webp';
    $imageAlt = 'Two people owe money to the same lender';
    $linked_image = '../images/_JesusChrist/twoDebtors.png';
    $figCaption = 'The Parable of the Two Debtors';
    $description = 'Shows how gratitude flows from understanding the depth of forgiveness received';
    $paragraphDialogs = ['Jesus tells a story about two people who owe money. One person owes a little, and the other owes a lot.',
      'The lender decides to forgive both of them and says they don’t have to pay it back.',
      'Jesus asks which person will love the lender more. The answer is the one who was forgiven the most.',
      'This shows us that people who know they’ve been forgiven a lot by God will love Him more.'];
    $gospel = ['Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=LK7_41'];
    $passage = ['7:41-43'];
  }

  function wickedTenants()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Wicked Tenants';
    $image = '../images/_JesusChrist/wickedTenants.webp';
    $imageAlt = "Vineyard workers attack the owner's messengers";
    $linked_image = '../images/_JesusChrist/wickedTenants.png';
    $figCaption = 'The Parable of the Wicked Tenants';
    $description = "Foretells Jesus' rejection by religious leaders through the story of rebellious vineyard workers";
    $paragraphDialogs = ['A man owned a vineyard and rented it to some farmers. When it was time to collect fruit, he sent servants.',
      'The farmers beat the servants and sent them away. The man sent more, and they were treated badly too.',
      'Finally, he sent his son, thinking they would respect him. But the farmers killed the son.',
      "Jesus told this story to show how people rejected God's messengers and even Jesus, God's Son."];
    $gospel = ['Matthew', 'Mark', 'Luke'];
    $gospelLinks = ['?v1=MT21_33&w1=bible&t1=local%3Aeng-web', '?v1=MK12_1&w1=bible&t1=local%3Aeng-web', '?v1=LK20_9&w1=bible&t1=local%3Aeng-web'];
    $passage = ['21:33-46', '12:1-12', '20:9-19'];
  }

  function weddingFeast() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Wedding Feast';
    $image = '../images/_JesusChrist/weddingFeast.webp';
    $imageAlt = 'Guests are invited to a royal wedding';
    $linked_image = '../images/_JesusChrist/weddingFeast.png';
    $figCaption = 'The Parable of the Wedding Feast';
    $description = "Illustrates the invitation to God's kingdom and the importance of proper response";
    $paragraphDialogs = ['A king planned a big wedding for his son and invited many guests.',
      'But the guests didn’t want to come. Some made excuses, and others were mean to the messengers.',
      'The king then invited people from the streets, both good and bad, and the wedding hall was filled.',
      "Jesus says this is like God's kingdom—everyone is invited, but we must be ready and take it seriously."];
    $gospel = ['Matthew', 'Luke'];
    $gospelLinks = ['?v1=MT22_1&w1=bible&t1=local%3Aeng-web', '?v1=LK14_16&w1=bible&t1=local%3Aeng-web'];
    $passage = ['22:1-14,', '14:16-24'];
  }

  function richFool() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Rich Fool';
    $image = '../images/_JesusChrist/richFool.webp';
    $imageAlt = 'A man builds bigger barns for his crops';
    $linked_image = '../images/_JesusChrist/richFool.png';
    $figCaption = 'The Parable of the Rich Fool';
    $description = 'Warns against greed and storing up treasures on earth rather than being rich toward God';
    $paragraphDialogs = ['A rich man had a great harvest and didn’t know where to store all his crops.',
      'He decided to tear down his barns and build bigger ones to keep everything.',
      'He thought, ‘Now I can relax, eat, drink, and enjoy life!’',
      'But that night, he died. Jesus said this shows how foolish it is to only think about money and not about God.'];
    $gospel = ['Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=LK12_13'];
    $passage = ['12:13-21'];
  }

  function wiseAndFoolishBuilders() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Wise and Foolish Builders';
    $image = '../images/_JesusChrist/wiseAndFoolishBuilders.webp';
    $imageAlt = 'The Wise and Foolish Builders Parable';
    $linked_image = '../images/_JesusChrist/wiseAndFoolishBuilders.png';
    $figCaption = 'The Parable of the Wise and Foolish Builders';
    $description = "Contrasts those who hear Jesus' words and act on them versus those who don't";
    $paragraphDialogs = ['Jesus told a story about two people who both built houses. One was wise, and one was foolish.',
      'The wise builder constructed his house on solid rock. He dug deep and made sure the foundation was strong.',
      'The foolish builder was lazy and built his house right on the sand, without any strong foundation at all.',
      'Then the rainy season came! Heavy rain poured down, streams rose, and strong winds blew against both houses.',
      'The house built on the rock stood firm through the storm. But the house built on sand? It completely collapsed with a big crash!',
      "Jesus explained that people who hear His words and put them into practice are like the wise builder with the strong foundation. When tough times come, they'll stay standing.",
      "But people who hear His words and don't follow them are like the foolish builder who built on sand. When problems come, everything falls apart for them.",
      "This story teaches us that it's not enough to just listen to what Jesus says - we need to actually do what He teaches us!"];
    $gospel = ['Matthew', 'Luke'];
    $gospelLinks = ['?v1=MT7_24&w1=bible&t1=local%3Aeng-web', '?v1=LK6_47&w1=bible&t1=local%3Aeng-web'];
    $passage = ['7:24-27', '6:47-49'];
  }

  function growingSeed()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Growing Seed';
    $image = '../images/_JesusChrist/growingSeed.webp';
    $imageAlt = 'The Growing Seed Parable';
    $linked_image = '../images/_JesusChrist/growingSeed.png';
    $figCaption = 'The Parable of the Growing Seed';
    $description = "Shows how God's kingdom grows mysteriously by God's power, not human effort";
    $paragraphDialogs = ["Jesus told a story comparing God's kingdom to a man who scattered seed on the ground.",
      'Night and day, whether the man was asleep or awake, the seeds sprouted and grew. But the man had no idea how it happened!',
      'The soil produced grain all by itself - first the stalk, then the head, then the full kernel in the head.',
      'As soon as the grain was ripe, the man went out with his sickle to harvest it, because the harvest time had come.',
      "Jesus was teaching that God's kingdom grows in ways we don't always understand. We might plant seeds by telling others about Jesus, but it's God who makes those seeds grow!",
      "This story shows us that we don't need to worry so much about making God's kingdom grow - that's God's job! Our job is to scatter the seeds and be ready for the harvest."];
    $gospel = ['Mark'];
    $gospelLinks = ['?v1=MK4_26&w1=bible&t1=local%3Aeng-web'];
    $passage = ['4:26-29'];
  }

  function newClothOnOldGarment() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'New Cloth on Old Garment';
    $image = '../images/_JesusChrist/newClothOnOldGarment.webp';
    $imageAlt = 'The New Cloth on Old Garment Parable';
    $linked_image = '../images/_JesusChrist/newClothOnOldGarment.png';
    $figCaption = 'The Parable of the New Cloth on Old Garment';
    $description = "Illustrates the incompatibility of the old religious system with Jesus' new teaching";
    $paragraphDialogs = ['Jesus told a short story about clothes to help people understand something important. He asked, "Who would use a piece of new cloth to patch up an old garment?"',
      'He explained that if you did that, the new patch would shrink when you wash it. Then it would pull away from the old garment and make an even bigger tear than before!',
      'This might seem like just a practical sewing tip, but Jesus was actually teaching about something much bigger. The "old garment" stood for the old religious ways that people were used to.',
      'The "new patch" represented Jesus\' new teachings and the new way of relating to God that He was bringing.',
      "Jesus was saying that you can't just add His new teachings onto the old religious system - they wouldn't fit together right. His new way required a completely fresh start!",
      "This story helped people see that Jesus wasn't just fixing up the old way of doing things. He was bringing something totally new that would change everything!"];
    $gospel = ['Matthew', 'Mark', 'Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=MT9_16', '?v1=MK2_21&w1=bible&t1=local%3Aeng-web', '?t1=local%3Aeng-web&w1=bible&v1=LK5_36'];
    $passage = ['9:16', '2:21', '5:36'];
  }

  function newWineInOldWineskins()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'New Wine in Old Wineskins';
    $image = '../images/_JesusChrist/newWineInOldWineskins.webp';
    $imageAlt = 'The New Wine in Old Wineskins Parable';
    $linked_image = '../images/_JesusChrist/newWineInOldWineskins.png';
    $figCaption = 'The Parable of the New Wine in Old Wineskins';
    $description = "Similar to the cloth parable, shows how Jesus' message requires new structures";
    $paragraphDialogs = ['Jesus told another short story about wine to help explain His ministry. He asked, "Does anyone pour new wine into old wineskins?"',
      'In those days, they used animal skins as containers for wine. When wine was new, it would still be fermenting and producing gases that would make the wineskin stretch.',
      "Old wineskins had already been stretched out and had become brittle. If you put new wine in them, they'd burst as the wine expanded! Then both the wine and wineskins would be ruined.",
      'Jesus explained that new wine must be poured into new wineskins so both can be preserved.',
      'Like the cloth story, Jesus wasn\'t really giving tips about making wine. The "new wine" was His fresh, powerful message and the Holy Spirit\'s work.',
      'The "old wineskins" represented old religious systems and traditions that couldn\'t contain Jesus\' new way without breaking.',
      'Jesus was teaching that His message was so new and different that it needed new ways of thinking and new structures. People needed to be ready for completely new ways of relating to God!'];
    $gospel = ['Matthew', 'Mark', 'Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=MT9_17', '?v1=MK2_22&w1=bible&t1=local%3Aeng-web', '?t1=local%3Aeng-web&w1=bible&v1=LK5_37'];
    $passage = ['9:17', '2:22', '5:37-39'];
  }

  function lampOnStand()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Lamp on a Stand';
    $image = '../images/_JesusChrist/lampOnStand.webp';
    $imageAlt = 'The Lamp on a Stand Parable';
    $linked_image = '../images/_JesusChrist/lampOnStand.png';
    $figCaption = 'The Parable of the Lamp on a Stand';
    $description = 'Teaches that spiritual truth is meant to illuminate, not be hidden';
    $paragraphDialogs = ['Jesus asked a simple question: "Do people light a lamp and then put it under a bowl or a bed? Of course not! They put it on a stand so it can give light to everyone in the house."',
      "In Jesus' time, they used oil lamps to light their homes at night. It would be silly to light a lamp and then hide it - that would defeat the whole purpose of having a lamp!",
      "Jesus explained that there's nothing hidden that won't eventually be revealed, and nothing kept secret that won't come to light.",
      "He was teaching that the truth of God's kingdom isn't meant to be hidden or kept secret. God's truth is like a lamp that should be put on a stand where everyone can see it and benefit from its light.",
      'Jesus also said, "You are the light of the world." He wanted His followers to shine brightly for others to see, like a city on a hill that can\'t be hidden.',
      "This story reminds us that we shouldn't hide our faith or the things God has taught us. Instead, we should let our light shine so others can see it and give glory to God!"];
    $gospel = ['Matthew', 'Mark', 'Luke', 'Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=MT5_14', '?v1=MK4_21&w1=bible&t1=local%3Aeng-web', '?t1=local%3Aeng-web&w1=bible&v1=LK8_16', '?t1=local%3Aeng-web&w1=bible&v1=LK11_33'];
    $passage = ['5:14-16', '4:21-22', '8:16-17', '11:33-36'];
  }

  function twoSons()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Two Sons';
    $image = '../images/_JesusChrist/twoSons.webp';
    $imageAlt = 'The Two Sons Parable';
    $linked_image = '../images/_JesusChrist/twoSons.png';
    $figCaption = 'The Parable of the Two Sons';
    $description = 'Contrasts obedience with mere words, showing the importance of actual repentance';
    $paragraphDialogs = ['Jesus told a story about a father who had two sons. The father went to the first son and said, "Son, go and work today in the vineyard."',
      'The first son answered, "I will not." But later he changed his mind and went to work in the vineyard after all.',
      'Then the father went to his second son and said the same thing. This son answered, "Yes, sir, I will," but he didn\'t actually go.',
      'Jesus asked the people listening, "Which of the two sons did what his father wanted?" They answered, "The first son," and they were right!',
      "Jesus used this story to make an important point. He compared the religious leaders to the second son - they said the right words but didn't really obey God.",
      'And He compared tax collectors and prostitutes (people everyone looked down on) to the first son. These people had said "no" to God at first through their sinful lives, but then they had changed their minds and truly repented when they heard John the Baptist\'s message.',
      "Jesus was teaching that it's not just what we say that matters to God, but what we actually do. God cares more about true repentance and obedience than about people who just say the right religious words but don't follow through with their actions."];
    $gospel = ['Matthew'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=MT21_28'];
    $passage = ['21:28-32'];
  }

  function unjustSteward()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Unjust Steward';
    $image = '../images/_JesusChrist/unjustSteward.webp';
    $imageAlt = 'The Unjust Steward Parable';
    $linked_image = '../images/_JesusChrist/unjustSteward.png';
    $figCaption = 'The Parable of the Unjust Steward';
    $description = 'Encourages wise use of worldly resources with eternal perspective';
    $paragraphDialogs = ['Jesus told a strange story about a manager (or steward) who worked for a rich man. The rich man found out that this manager was wasting his money, so he called him in and said, "What\'s this I hear about you? Give an account of your management, because you cannot be manager any longer."',
      "The manager thought to himself, \"Oh no! I'm going to lose my job! I'm not strong enough to dig, and I'm too proud to beg. What will I do?\" Then he came up with a clever plan to make friends who would help him after he lost his job.",
      'He called in each of his master\'s debtors. To the first he said, "How much do you owe my master?" The man replied, "Eight hundred gallons of olive oil." The manager told him, "Quick, take your bill and make it four hundred."',
      'To another debtor who owed a thousand bushels of wheat, the manager said, "Take your bill and make it eight hundred." The manager was cutting their debts so they would be grateful to him!',
      'When the rich man found out what the manager had done, he surprisingly praised him for being clever! The dishonest manager had acted shrewdly and planned ahead.',
      'Jesus wasn\'t saying we should be dishonest! But He did say, "The people of this world are more shrewd in dealing with their own kind than are the people of the light." He was pointing out that sometimes worldly people are better at planning ahead with their resources than God\'s people are.',
      'Jesus then taught, "Use worldly wealth to gain friends for yourselves, so that when it is gone, you will be welcomed into eternal dwellings." He was saying we should use our money and possessions in ways that have eternal value - like helping others and advancing God\'s kingdom.',
      'Jesus ended with an important reminder: "Whoever can be trusted with very little can also be trusted with much." He taught that how we handle money shows a lot about our character, and we can\'t serve both God and money at the same time.'];
    $gospel = ['Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=LK16_1'];
    $passage = ['16:1-13'];
  }

  function dishonestManager() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Dishonest Manager';
    $image = '../images/_JesusChrist/dishonestManager.webp';
    $imageAlt = 'Illustration of a manager reducing debts owed to his master';
    $linked_image = '../images/_JesusChrist/dishonestManager.png';
    $figCaption = 'The Dishonest Manager';
    $description = 'Teaches shrewd use of worldly resources for eternal purposes';
    $paragraphDialogs = ["Jesus told one of His most surprising stories about a manager who was about to get fired for wasting his rich employer's money.",
      "Realizing he'd soon be unemployed, the manager quickly called in people who owed his master money and reduced their debts - cutting one bill from 800 gallons of olive oil to 400, and another from 1,000 bushels of wheat to 800. He did this so these people would welcome him into their homes after he lost his job.",
      'The weird part is that when the rich man found out, he actually praised the dishonest manager for being so clever!',
      "Jesus wasn't saying we should be dishonest. Instead, He made the point that 'the people of this world are more shrewd in dealing with their own kind than are the people of the light.'",
      "Then Jesus gave the real lesson: we should use our money ('worldly wealth') to help others and make friends, so that when earthly money is gone, these people will welcome us into 'eternal dwellings' (heaven).",
      'Jesus was teaching that we should be at least as clever about using our resources for eternal purposes as dishonest people are about using money for their temporary benefit on earth.'];
    $gospel = ['Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=LK16_1'];
    $passage = ['16:1-9'];
  }

  function friendAtMidnight() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Friend at Midnight';
    $image = '../images/_JesusChrist/friendAtMidnight.webp';
    $imageAlt = 'Illustration of a person knocking on a door at night';
    $linked_image = '../images/_JesusChrist/friendAtMidnight.png';
    $figCaption = 'The Parable of the Friend at Midnight';
    $description = 'Teaches persistence in prayer through a story about borrowing bread at night';
    $paragraphDialogs = ["In this parable, Jesus tells about a guy who had a friend come visit him late at night. The problem was, he didn't have any food to give his visitor! So he went to another friend's house at midnight to ask for some bread.",
      "The friend was already in bed with his family and didn't want to get up. But the first guy kept knocking and asking, and wouldn't stop.",
      'Finally, the friend got up and gave him what he needed - not because they were friends, but because the guy was so persistent!',
      "Jesus used this story to teach us about prayer. God isn't like the grumpy friend who doesn't want to help. But Jesus wants us to understand that we should keep praying and not give up, even when it seems like no one is listening."];
    $gospel = ['Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=LK11_5'];
    $passage = ['11:5-8'];
  }

  function barrenFigTree()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Barren Fig Tree';
    $image = '../images/_JesusChrist/barrenFigTree.webp';
    $imageAlt = 'Illustration of a fig tree without fruit';
    $linked_image = '../images/_JesusChrist/barrenFigTree.png';
    $figCaption = 'The Parable of the Barren Fig Tree';
    $description = "Warns about the consequences of unfruitfulness despite God's patience";
    $paragraphDialogs = ["Jesus told a story about a man who had a fig tree in his garden that wasn't growing any figs. For three whole years, the man came looking for fruit but found nothing!",
      'He told his gardener to just cut it down because it was wasting space and soil.',
      'But the gardener asked for one more chance - he would dig around it and put fertilizer on it. If it grew fruit next year, great! If not, then they could cut it down.',
      "This parable teaches us that God is patient with us, but He does expect us to grow and change. He gives us chances to become better and produce 'good fruit' in our lives, but His patience won't last forever.",
      'We need to use the time He gives us to grow and become better people.'];
    $gospel = ['Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=LK13_6'];
    $passage = ['13:6-9'];
  }

  function greatBanquet() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Great Banquet';
    $image = '../images/_JesusChrist/greatBanquet.webp';
    $imageAlt = 'Illustration of a grand feast with empty seats and servants inviting new guests';
    $linked_image = '../images/_JesusChrist/greatBanquet.png';
    $figCaption = 'The Parable of the Great Banquet';
    $description = "Shows how many reject God's invitation while the unlikely are welcomed";
    $paragraphDialogs = ['Jesus told about a man who planned a huge dinner party and sent out invitations to lots of people. When everything was ready, he sent his servant to tell the guests it was time to come.',
      "But they all started making excuses! One guy said he bought a field and had to go see it. Another said he bought some oxen and needed to try them out. Another said he just got married so he couldn't come.",
      'The host got really upset and told his servant to go into the streets and bring in the poor, the disabled, the blind, and the lame instead.',
      'After doing this, there was still room, so the host sent the servant to the roads and country lanes to invite even more people!',
      "Jesus used this story to show how many people who should have accepted God's invitation to be part of His kingdom make excuses and miss out. So God welcomes those who society often ignores or looks down on.",
      "The point is that God's invitation is for everyone, but especially for those who recognize their need for Him."];
    $gospel = ['Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=LK14_15'];
    $passage = ['14:15-24'];
  }

  function buildingTowerAndKingGoingToWar() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'Building a Tower and King Going to War';
    $image = '../images/_JesusChrist/buildingTower.webp';
    $imageAlt = 'Illustration of a person planning a tower and a king planning for battle';
    $linked_image = '../images/_JesusChrist/buildingTower.png';
    $figCaption = 'Building a Tower and King Going to War';
    $description = 'Emphasizes counting the cost of discipleship before committing';
    $paragraphDialogs = ['Jesus shared two short stories to make people think carefully before deciding to follow Him.',
      'First, He talked about someone who wants to build a tower. A smart builder would sit down first and figure out how much it would cost to make sure they have enough money to finish it. Otherwise, they might lay the foundation but run out of money, and everyone would laugh at them!',
      "In the second story, Jesus described a king who's about to go to war against another king. Before fighting, he needs to figure out if his 10,000 soldiers can beat the other king's 20,000 soldiers. If not, he'd better send people to ask for peace terms!",
      'Jesus used these examples to teach that following Him is a serious decision. We need to understand what it will cost us - like maybe losing friends or facing hard times - and be prepared to go all the way, not just start and then quit when things get tough.'];
    $gospel = ['Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=LK14_28'];
    $passage = ['14:28-33'];
  }

  function unprofitableServants() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Unprofitable Servants';
    $image = '../images/_JesusChrist/unprofitableServants.webp';
    $imageAlt = 'Illustration of servants working in a field';
    $linked_image = '../images/_JesusChrist/unprofitableServants.png';
    $figCaption = 'The Unprofitable Servants';
    $description = 'Teaches humility in service, showing we only do our duty before God';
    $paragraphDialogs = ["Jesus asked His followers to imagine they had a servant who worked in their fields or took care of their sheep. When that servant comes in from working all day, would the master say, 'Hey, come sit down and eat'?",
      "No way! Instead, the master would tell the servant to make dinner, serve it, and only after the master finished eating could the servant eat. And the master wouldn't thank the servant for doing these things because that's just what servants are supposed to do.",
      "Jesus then told His disciples that they should have the same attitude. When they've done everything God has commanded them to do, they shouldn't expect special praise or rewards.",
      "They should simply say, 'We are unprofitable servants; we have only done what was our duty to do.'",
      "This teaches us to be humble when we serve God and others. We shouldn't serve to get attention or praise, but because it's the right thing to do."];
    $gospel = ['Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=LK17_7'];
    $passage = ['17:7-10'];
  }

  function unjustJudge()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Unjust Judge';
    $image = '../images/_JesusChrist/unjustJudge.webp';
    $imageAlt = 'Illustration of a widow persistently appearing before a judge';
    $linked_image = '../images/_JesusChrist/unjustJudge.png';
    $figCaption = 'The Unjust Judge';
    $description = 'Encourages persistent prayer and faith until Jesus returns';
    $paragraphDialogs = ["Jesus told this story to teach His followers to keep praying and never give up. There was a judge in a certain city who didn't care about God or what people thought about him.",
      "A widow in that city kept coming to him, asking for justice against someone who had wronged her. For a long time the judge ignored her. But she wouldn't stop asking!",
      "Finally, the judge thought, 'Even though I don't care about God or people, this woman is driving me crazy with her constant requests. I'll give her justice just to get her to leave me alone!'",
      'Jesus explained that if even an unfair judge eventually helps because of persistence, how much more will God - who is perfectly good and loves us - answer His people who pray day and night?',
      "But then Jesus asked a sad question: 'When I come back, will I find people on earth who still have faith?' This reminds us to keep trusting God and praying even when it seems like He's not answering right away."];
    $gospel = ['Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=LK18_1'];
    $passage = ['18:1-8'];
  }

  function blindLeadingTheBlind() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'Blind Leading the Blind';
    $image = '../images/_JesusChrist/blindLeadingBlind.webp';
    $imageAlt = 'Illustration of two blind people where one is trying to lead the other';
    $linked_image = '../images/_JesusChrist/blindLeadingBlind.png';
    $figCaption = 'Blind Leading the Blind';
    $description = 'Warns against following spiritually blind teachers';
    $paragraphDialogs = ["Jesus asked a really good question: 'Can a blind person lead another blind person?' Of course not! They'd both fall into a ditch!",
      "This short parable has a simple but important message. If someone doesn't understand the truth about God themselves, they can't properly teach others about Him. It's like trying to give directions to a place you've never been.",
      "Jesus was warning people to be careful about who they listen to and learn from. Some religious teachers act like they know everything about God, but if they don't really understand God's truth, following them will lead to trouble.",
      "Jesus also taught that a student isn't better than their teacher - at best, they'll know what their teacher knows. So if we want to grow in our understanding of God, we need to make sure we're learning from people who truly know Him."];
    $gospel = ['Matthew', 'Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=MT15_14', '?t1=local%3Aeng-web&w1=bible&v1=LK6_39'];
    $passage = ['15:14', '6:39'];
  }

  function faithfulAndWiseServant() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Faithful and Wise Servant';
    $image = '../images/_JesusChrist/faithfulWiseServant.webp';
    $imageAlt = 'Illustration of a servant managing a household while the master is away';
    $linked_image = '../images/_JesusChrist/faithfulWiseServant.png';
    $figCaption = 'The Faithful and Wise Servant';
    $description = "Contrasts faithful and unfaithful stewardship while waiting for the master's return";
    $paragraphDialogs = ['Jesus told about a master who put a servant in charge of his household while he went away on a trip. The servant had one main job - to make sure all the other servants were fed at the right time.',
      "Jesus asked, 'Who is the faithful and wise servant that the master can trust to do this?' A good servant would be found doing his job when the master returned, and the master would reward him by giving him even more responsibility.",
      "But what if the servant was bad and thought, 'My master is taking a long time to come back,' and started beating the other servants and partying with troublemakers?",
      "When the master finally returned on a day when the servant wasn't expecting him, he would punish that servant severely!",
      "Jesus was teaching about how we should live while we wait for Him to return. We shouldn't get lazy or do wrong things just because Jesus hasn't come back yet.",
      "Instead, we should faithfully do what He's asked us to do, caring for others and living right, so we'll be ready whenever He returns."];
    $gospel = ['Matthew', 'Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=MT24_45', '?t1=local%3Aeng-web&w1=bible&v1=LK12_42'];
    $passage = ['24:45-51', '12:42-48'];
  }

  function watchfulServants() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Watchful Servants';
    $image = '../images/_JesusChrist/watchfulServants.webp';
    $imageAlt = "Illustration of servants with lamps lit waiting for their master's return";
    $linked_image = '../images/_JesusChrist/watchfulServants.png';
    $figCaption = 'The Watchful Servants';
    $description = "Emphasizes staying alert and ready for Christ's return";
    $paragraphDialogs = ['Jesus told His followers to be like servants waiting for their master to return from a wedding feast. These good servants would be dressed and ready for action, with their lamps lit even late at night. When the master knocked, they could immediately open the door.',
      'The master would be so happy with these watchful servants that he would do something amazing - he would have them sit down while he served them a meal!',
      "Jesus also compared His return to a thief breaking into a house at night - you don't know exactly when it will happen, so you need to be ready all the time.",
      'In another version of this teaching, Jesus described a man going on a journey who puts his servants in charge of his house, giving each one a job to do. The doorkeeper especially needs to stay awake and watch because no one knows when the master will return - evening, midnight, when the rooster crows, or at dawn.',
      "Jesus was teaching us to live in a way that we'd be happy for Him to find us at any moment - not doing wrong things or being lazy, but actively doing what He's asked us to do."];
    $gospel = ['Mark', 'Luke'];
    $gospelLinks = ['?v1=MK13_34&w1=bible&t1=local%3Aeng-web', '?t1=local%3Aeng-web&w1=bible&v1=LK12_35'];
    $passage = ['13:34-37', '12:35-40'];
  }

  function childrenInTheMarketplace() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'Children in the Marketplace';
    $image = '../images/_JesusChrist/childrenMarketplace.webp';
    $imageAlt = 'Illustration of children playing in a marketplace while others refuse to join';
    $linked_image = '../images/_JesusChrist/childrenMarketplace.png';
    $figCaption = 'Children in the Marketplace';
    $description = 'Illustrates the inconsistent criticism Jesus and John the Baptist received';
    $paragraphDialogs = ["Jesus noticed how people were never satisfied with God's messengers, no matter what they did. He compared them to kids sitting in the marketplace calling out to other kids: 'We played wedding music for you, but you wouldn't dance! We played funeral music, but you wouldn't cry!'",
      "Then Jesus explained what He meant. John the Baptist came living super strictly - not drinking wine and barely eating - and people said, 'He's crazy! He has a demon!'",
      "Then Jesus came, enjoying food and wine at parties with all kinds of people, and the same critics said, 'Look at him! He eats too much, drinks too much, and hangs out with tax collectors and sinners!'",
      "Jesus was pointing out how some people were just determined to find fault no matter what. These critics weren't being honest or fair - they just didn't want to listen to God's message, so they made excuses about the messengers.",
      "But Jesus said that wisdom is proved right by its results - both His way and John's way were part of God's plan and produced good fruit in the lives of those who actually listened."];
    $gospel = ['Matthew', 'Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=MT11_16', '?t1=local%3Aeng-web&w1=bible&v1=LK7_31'];
    $passage = ['11:16-19', '7:31-35'];
  }

  function speckAndLog()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Speck and the Log';
    $image = '../images/_JesusChrist/speckAndLog.webp';
    $imageAlt = "Illustration of a person with a log in their eye trying to remove a speck from another's eye";
    $linked_image = '../images/_JesusChrist/speckAndLog.png';
    $figCaption = 'The Speck and the Log';
    $description = 'Warns against hypocritical judgment of others';
    $paragraphDialogs = ["Jesus used a funny picture to teach about judging others. He asked, 'Why do you notice the tiny speck of sawdust in your friend's eye, but completely ignore the massive log sticking out of your own eye?'",
      'Imagine trying to help someone get a tiny dust particle out of their eye when you have a huge wooden beam sticking out of yours!',
      "Jesus called people who do this 'hypocrites' - people who criticize others for small mistakes while ignoring their own big problems.",
      "He said we should first take the log out of our own eye (fix our own major issues), and then we'll be able to see clearly enough to help others with their smaller problems.",
      "This doesn't mean we should never help others improve - it means we need to be honest about our own faults first. We should deal with our own mistakes before pointing fingers at everyone else.",
      'Jesus wants us to help each other grow, but with humility and self-awareness, not with a judgmental attitude.'];
    $gospel = ['Matthew', 'Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=MT7_3', '?t1=local%3Aeng-web&w1=bible&v1=LK6_41'];
    $passage = ['7:3-5', '6:41-42'];
  }

  function fishNet()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Fish Net';
    $image = '../images/_JesusChrist/fishNet.webp';
    $imageAlt = 'Illustration of fishermen sorting good fish from bad after a catch';
    $linked_image = '../images/_JesusChrist/fishNet.png';
    $figCaption = 'The Fish Net';
    $description = 'Describes the final separation of the righteous and wicked';
    $paragraphDialogs = ["Jesus said God's kingdom is like a huge fishing net that was thrown into the lake and caught all kinds of fish. When it was full, the fishermen pulled it up on the shore.",
      'Then they sat down and sorted the good fish into containers, but threw the bad ones away.',
      'Jesus explained that this is how it will be at the end of the world. Angels will come and separate the wicked people from the righteous ones, and throw the wicked into a fiery furnace, where there will be weeping and gnashing of teeth.',
      "This parable teaches that right now, both people who truly follow God and people who don't are mixed together in the world - just like different kinds of fish in the same net. But a time is coming when God will sort everyone out.",
      "It's a serious reminder that our choices now about whether to follow Jesus or not have big consequences for our future. Jesus wants everyone to be counted among the 'good fish' by believing in Him and living according to His teachings."];
    $gospel = ['Matthew'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=MT13_47'];
    $passage = ['13:47-50'];
  }

  function householder()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Householder';
    $image = '../images/_JesusChrist/householder.webp';
    $imageAlt = 'Illustration of a homeowner bringing out treasures from storage';
    $linked_image = '../images/_JesusChrist/householder.png';
    $figCaption = 'The Householder';
    $description = 'Compares a teacher of scripture to a homeowner bringing out treasures old and new';
    $paragraphDialogs = ["After teaching several parables about God's kingdom, Jesus asked His disciples if they understood everything He said. When they answered yes, He gave them one more short comparison.",
      'He said that every teacher of religious law who has become a disciple in the kingdom of heaven is like the owner of a house who brings out of his storeroom new treasures as well as old.',
      "This mini-parable is about how Jesus' followers should teach others. A good teacher doesn't just stick to old familiar ideas or only chase after new trends.",
      "Instead, they're like someone who has collected valuable things over time - some old, some new - and knows when to share each one.",
      'Jesus was telling His disciples that they should use both the treasured wisdom from the Old Testament scriptures AND the new teachings He was giving them. Both are valuable!',
      "This teaches us that we should appreciate traditional wisdom while also being open to fresh insights about God's truth."];
    $gospel = ['Matthew'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=MT13_52'];
    $passage = ['13:52'];
  }

  function goodShepherd() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Good Shepherd';
    $image = '../images/_JesusChrist/goodShepherd.webp';
    $imageAlt = 'Illustration of a shepherd protecting his sheep';
    $linked_image = '../images/_JesusChrist/goodShepherd.png';
    $figCaption = 'The Good Shepherd';
    $description = 'Depicts Jesus as the shepherd who knows, protects, and lays down his life for his sheep';
    $paragraphDialogs = ["Jesus described Himself as the Good Shepherd who truly cares for His sheep. Unlike a hired worker who runs away when wolves come because the sheep don't really belong to him, Jesus actually lays down His life to protect His sheep.",
      "He explained that He knows His sheep personally, and they know His voice. When He calls, they follow Him because they recognize and trust Him, but they run from strangers whose voices they don't know.",
      "Jesus also said He has 'other sheep' (meaning non-Jewish believers) who will also become part of His one flock under one shepherd.",
      'The most amazing part is when Jesus said that no one forces Him to die for His sheep - He chooses to lay down His life willingly, and He has the power to take it up again.',
      'This beautiful word picture teaches us that Jesus loves us personally, protects us, guides us, and made the ultimate sacrifice for us.',
      'It also shows that Jesus is not just a good person or teacher - He claimed the authority to lay down His life and take it up again, something only God could do.'];
    $gospel = ['John'];
    $gospelLinks = ['?v1=JN10_1&w1=bible&t1=local%3Aeng-web'];
    $passage = ['10:1-18'];
  }

  function vineAndBranches()  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Vine and the Branches';
    $image = '../images/_JesusChrist/vineAndBranches.webp';
    $imageAlt = 'Illustration of a grapevine with branches bearing fruit';
    $linked_image = '../images/_JesusChrist/vineAndBranches.png';
    $figCaption = 'The Vine and the Branches';
    $description = 'Illustrates the necessity of remaining connected to Jesus to bear spiritual fruit';
    $paragraphDialogs = ["Jesus used a picture that His followers would easily understand - a grapevine. He said, 'I am the true vine, and my Father is the gardener.' He explained that God removes branches that don't bear fruit, but prunes (cuts back) the fruitful ones so they'll produce even more.",
      "Then Jesus told His disciples the most important part: 'Remain in me, and I will remain in you. No branch can bear fruit by itself; it must remain in the vine.' Just like a branch can't grow grapes if it's cut off from the vine, we can't live truly good and meaningful lives if we're disconnected from Jesus.",
      "He said, 'Apart from me you can do nothing.' Jesus also warned that branches that don't stay connected get thrown away, wither, and are burned.",
      'But He gave an amazing promise too: if we stay connected to Him and His words stay in us, we can ask whatever we wish, and it will be done for us!',
      "The 'fruit' Jesus talked about includes things like love, joy, peace, patience, and kindness - the good qualities that naturally grow in our lives when we stay close to Him."];
    $gospel = ['John'];
    $gospelLinks = ['?v1=JN15_1&w1=bible&t1=local%3Aeng-web'];
    $passage = ['15:1-8'];
  }

  function masterAndServant() {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gospelLinks, $passage;
    $title = 'The Master and Servant';
    $image = '../images/_JesusChrist/masterAndServant.webp';
    $imageAlt = 'Illustration of a servant working in a field then serving his master at the table';
    $linked_image = '../images/_JesusChrist/masterAndServant.png';
    $figCaption = 'The Master and Servant';
    $description = 'Shows the proper relationship between God and his servants';
    $paragraphDialogs = ["Jesus asked His disciples to imagine they owned a servant who had been plowing fields or taking care of sheep all day. When that servant came in from the fields, would any master say, 'Come and sit down to eat'?",
      "No way! Instead, the master would say, 'Make my dinner, serve me while I eat and drink, and afterward you can eat and drink.' And the master wouldn't thank the servant for just doing what he was supposed to do.",
      'Jesus then told His followers that they should have the same attitude when serving God: \'When you have done everything you were told to do, you should say, "We are unworthy servants; we have only done our duty."\'',
      "This parable teaches us humility in our relationship with God. We shouldn't serve God expecting special praise or thinking we deserve rewards. Everything we have already comes from God, so when we serve Him, we're just doing what we ought to do.",
      "This doesn't mean God doesn't appreciate our service - other teachings show that He does reward faithfulness. But it reminds us that our attitude should be humble gratitude for the privilege of serving Him, not pride or a feeling that God owes us something."];
    $gospel = ['Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=LK17_7'];
    $passage = ['17:7-10'];
  }
    content();
} // function parables() {bracket ends here}
/*
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿Contenido︵︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿Parabolas()︵‿︵‿︵‿︵‿︵‿︵‿︵
                                                  ‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵‿︵
*/
function parabolas(){
  global $introducion, $_Jesucristo, $lista, $biblia;
  $_Jesucristo = [ 'Jesús en los Evangelios',
                    'Jesús interactúa activamente con una amplia variedad de personas, utilizando parábolas como una herramienta clave para comunicar Su mensaje de una manera que todos puedan entender mediante el uso de ilustraciones mentales.'];
  $introducion =  [ $lista => ['Las parabolas eran universalmente accesibles: al usar escenarios cotidianos, Jesús hacía que conceptos espirituales complejos fueran comprensibles tanto para los eruditos educados como para los trabajadores analfabetos.',
                      'El uso de parábolas era culturalmente relevante: al utilizar entornos agrícolas y domésticos, estas historias resonaban con las experiencias diarias de su audiencia en el siglo I.',
                      'Las múltiples capas de significado a menudo contenían historias superficiales que cualquiera podía comprender, mientras ofrecían profundos conocimientos teológicos a quienes estaban dispuestos a reflexionarlas más a fondo.',
                      'La estructura narrativa de las parábolas las hacía más fáciles de recordar y compartir que los conceptos teológicos abstractos.',
                      'En lugar de imponer interpretaciones, las parábolas invitaban a los oyentes a descubrir el significado por sí mismos, involucrando sus mentes y corazones en el proceso.',
                      ],'Parable', 'Description', 'Scripture Reference','Bible'];
  $biblia = ['https://ebible.org/find/details.php?id=spablm', 'Santa Biblia libre para el mundo', 'Biblia'];


  function elSembrador()  {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Sembrador';
    $imagen = '../images/_JesusChrist/sower.webp';
    $imagenAlt = 'El Sembrador';
    $enlaceImagen = '../images/_JesusChrist/sower.png';
    $figLeyenda = 'La Parabola de el Sembrador';
    $descripcion = 'Describe las diferentes reacciones ante el mensaje del evangelio usando la analogía de las semillas que caen en distintos tipos de tierra.';
    $dialogoParrafo = ["Imagina a un agricultor echando semillas al suelo. Es algo así como cuando alguien te habla de Jesús. Las semillas son el mensaje, y el suelo es como tu corazón.",
      "Jesús contó una historia sobre esto. Dijo que algunas semillas cayeron en un camino donde los pájaros se las comieron. Eso es como la gente que escucha el mensaje, pero no lo entiende y lo olvida enseguida.",
      "Otras semillas cayeron en terreno con piedras. Crecieron rápido al principio, pero como la tierra no era profunda, se secaron y se murieron. Eso es como la gente que se emociona con el mensaje al principio, pero cuando las cosas se ponen difíciles, se rinde.",
      "Otras semillas cayeron entre espinos. Los espinos crecieron y ahogaron las semillas, impidiendo que se desarrollaran. Esto es como la gente que escucha el mensaje, pero se preocupa demasiado por otras cosas, como el dinero o los deseos materiales, y el mensaje no los cambia de verdad.",
      "Pero algunas semillas cayeron en tierra buena. Crecieron muy bien y produjeron muchísimas más semillas. Eso es como la gente que realmente escucha el mensaje, lo entiende y deja que cambie su forma de vivir. Por eso, terminan haciendo cosas buenas.",
      "Así que, la historia trata de cómo diferentes personas escuchan el mismo mensaje de distintas maneras, dependiendo de lo que hay en sus corazones. Solo las personas con un 'corazón bueno' permiten que el mensaje crezca y haga una diferencia."];
    $evangelio = ['Mateo', 'Marcos', 'Lucas'];
    $enlaceEvangelio = ['?v1=MT13_1&t1=local%3Aspablm&w1=bible', '?v1=MK4_1&t1=local%3Aspablm&w1=bible', '?v1=LK8_4&t1=local%3Aspablm&w1=bible'];
    $pasaje = ['13:1-23,', '4:1-20,', '8:4-15'];
  }

  function trigoYHierbaMala() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Trigo y la Cizaña';
    $imagen = '../images/_JesusChrist/wheatAndTheWeeds.webp';
    $imagenAlt = 'Trigo y la Cizaña';
    $enlaceImagen = '../images/_JesusChrist/wheatAndTheWeeds.png';
    $figLeyenda = 'La Parabola de el Trigo y la Cizaña';
    $descripcion = 'Ilustra el reino de Dios como un agricultor que sembró buena semilla en su campo pero sus enemigos plantaron cizaña en su campo. Jesús separará el trigo de la cizaña al tiempo de la cosecha';
    $dialogoParrafo = ['El Reino de Dios es como un agricultor que sembró buena semilla en su campo. Pero una noche, mientras todos dormían, su enemigo vino y sembró hierba mala entre el trigo, y luego se fue.',
      'Cuando los trigos crecieron y produjeron grano, también apareció la cizaña. Los trabajadores del agricultor le dijeron: "Señor, plantaste buena semilla, ¿De dónde vino toda esta cizaña?" Él les dijo: "Un enemigo lo hizo." Los trabajadores le preguntaron: "¿Quieres que vayamos y arranquemos la hierba mala?"',
      'Pero él respondió: "No, porque si arrancan la cizaña, también arrancarán el trigo. Dejaré crecer ambas hasta la cosecha. Cuando sea el tiempo de la cosecha, le diré a los segadores:<br /> \'Primero, junten la cizaña en manojos y quémenla. Luego, coloquen el trigo en mi granero.\'"',
      'Jesús explicó que esta historia nos enseña que las personas buenas y malas conviven juntas en el mundo, pero que Dios no va a separarlas antes de tiempo para no dañar a los que son suyos.',
      'Pero al final de los tiempos, que es como el tiempo de la cosecha, los ángeles harán una separación final.',
      'Entonces, las personas que siguen a Dios estarán en su reino, mientras que los que hicieron el mal enfrentarán un juicio.'];
    $evangelio = ['Mateo'];
    $enlaceEvangelio = ['?v1=MT13_24&t1=local%3Aspablm&w1=bible'];
    $pasaje = ['13:24-30'];
  }

  function semillaDeMostaza() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Semilla de Mostaza';
    $imagen = '../images/_JesusChrist/mustardSeed.webp';
    $imagenAlt = 'Semilla de Mostaza';
    $enlaceImagen = '../images/_JesusChrist/mustardSeed.png';
    $figLeyenda = 'La Parabola de la Semilla de Mostaza';
    $descripcion = "Ilustra cómo el reino de Dios empieza pequeño, pero crece enormemente.";
    $dialogoParrafo = ["Una pequeña y redonda semilla de mostaza. ¿Sabes lo pequeñas que son, verdad? Las semillas de mostaza negra miden cerca de 1mm, o casi 0.05 pulgadas de diámetro.",
      "Él dijo que el reino de Dios es como esa pequeña semilla. Cuando se planta, es una de las semillas más diminutas que puedes encontrar.",
      "Pero, ¿adivina qué? Cuando crece, se convierte en la más grande de todas las plantas del jardín. Se hace tan grande que hasta los pájaros pueden venir a hacer nidos en sus ramas.",
      "Entonces, lo que Jesús decía es que aunque el reino de Dios pueda parecer muy pequeño o sin importancia para la gente, en realidad es algo enorme y asombroso. Empieza pequeño, pero termina siendo lo suficientemente grande como para ayudar y dar refugio a muchas personas, justo como la gran planta de mostaza protege a los pájaros. ¡Es como algo chiquito que tiene el potencial de convertirse en algo realmente, realmente grande!"];
    $evangelio = ['Mateo', 'Marcos', 'Lucas'];
    $enlaceEvangelio = ['?v1=MT13_31&t1=local%3Aspablm&w1=bible', '?v1=MK4_30&t1=local%3Aspablm&w1=bible', '?v1=LK13_18&t1=local%3Aspablm&w1=bible'];
    $pasaje = ['13:31-32,', '4:30-32,', '13:18-19'];
  }

  function levaduraEnHarina() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Levadura en el Harina';
    $imagen = '../images/_JesusChrist/leavenedFlour.webp';
    $imagenAlt = 'Levadura en el Harina';
    $enlaceImagen = '../images/_JesusChrist/leavenedFlour.png';
    $figLeyenda = 'La Parabola de la Levadura en el Harina';
    $descripcion = 'Muestra cómo el reino de Dios actúa de manera sutil pero lo transforma todo por completo.';
    $dialogoParrafo = ["Imagina a una mujer haciendo una gran cantidad de pan. Toma un poco de levadura y la mezcla en una enorme cantidad de harina, ¡como en un tazón realmente, realmente grande!",
      "Aunque solo pone un poquito de levadura, algo asombroso sucede. Lenta pero seguramente, la levadura se esparce por toda la masa, y hace que todo se infle y crezca.",
      "Entonces, lo que Jesús estaba diciendo es que, aunque el reino de Dios comienza con solo unas cuantas personas o parezca algo pequeño, tiene este increíble poder para esparcirse, crecer y afectar todo a su alrededor.",
      "Justo como un poco de levadura puede cambiar una gran cantidad de masa, el reino de Dios puede empezar pequeño, pero con el tiempo tocar y cambiar muchísimas vidas. ¡Tiene esta manera tranquila, pero poderosa, de crecer y hacer una gran diferencia!"];
    $evangelio = ['Mateo', 'Lucas'];
    $enlaceEvangelio = ['?v1=MT13_33&t1=local%3Aspablm&w1=bible', '?v1=LK13_20&t1=local%3Aspablm&w1=bible'];
    $pasaje = ['13:33,', '13:20-21'];
  }

  function tesoroEscondido()  {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Tesoro Escondido';
    $imagen = '../images/_JesusChrist/hiddenTreasure.webp';
    $imagenAlt = 'Tesoro Escondido';
    $enlaceImagen = '../images/_JesusChrist/hiddenTreasure.png';
    $figLeyenda = 'La Parabola del Tesoro Escondido';
    $descripcion = "Revela el valor supremo del reino de Dios, por el cual vale la pena sacrificar todo para obtenerlo.";
    $dialogoParrafo = ["Jesús contó la historia de un hombre que iba caminando por el campo de otra persona. Mientras caminaba, ¡encontró un tesoro que estaba escondido en la tierra!",
      "El hombre se emocionó muchísimo al encontrar este tesoro. Lo cubrió de nuevo muy rápido para que nadie más lo encontrara.",
      "Luego fue y vendió todo lo que tenía, ¡todas sus cosas! Así de grande era su deseo de tener este tesoro.",
      "Con todo el dinero que obtuvo de la venta de sus cosas, compró el campo donde estaba escondido el tesoro. ¡Ahora el tesoro era todo suyo!",
      "Jesús estaba enseñando que el reino de Dios es como ese tesoro. Cuando las personas se dan cuenta de lo maravilloso que es el reino de Dios, están dispuestas a dejar todo lo demás con tal de ser parte de él. ¡Así de valioso es!"];
    $evangelio = ['Mateo'];
    $enlaceEvangelio = ['?v1=MT13_44&t1=local%3Aspablm&w1=bible'];
    $pasaje = ['13:44'];
  }

  function perlaDeGranPrecio()  {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Perla de Gran Precio';
    $imagen = '../images/_JesusChrist/pearlOfGreatPrice.webp';
    $imagenAlt = 'Perla de Gran Precio';
    $enlaceImagen = '../images/_JesusChrist/pearlOfGreatPrice.png';
    $figLeyenda = 'La Parabola de la Perla de Gran Precio';
    $descripcion = "Similar al tesoro escondido, enfatiza el valor incomparable del reino de Dios.";
    $dialogoParrafo = ["Jesús contó la historia de un comerciante, que es como un empresario que compra y vende cosas valiosas. Este comerciante andaba buscando perlas preciosas para vender.",
      "Un día, encontró una perla asombrosa, ¡la perla más perfecta y valiosa que había visto en toda su vida!",
      "El comerciante deseaba tanto esta perla especial que fue y vendió absolutamente todo lo que tenía solo para conseguir el dinero suficiente para comprarla.",
      "Jesús nos estaba mostrando que el reino de Dios es como esa perla perfecta. Cuando de verdad entendemos lo maravilloso que es el reino de Dios, ¡pensaremos que vale la pena dejar todo lo demás que tenemos solo para ser parte de él!"];
    $evangelio = ['Mateo'];
    $enlaceEvangelio = ['?v1=MT13_45&t1=local%3Aspablm&w1=bible'];
    $pasaje = ['13:45-46'];
  }

  function red()  {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Red';
    $imagen = '../images/_JesusChrist/dragnet.webp';
    $imagenAlt = 'La Red';
    $enlaceImagen = '../images/_JesusChrist/dragnet.png';
    $figLeyenda = 'La Parabola de la Red';
    $descripcion = 'Describe el juicio final cuando los justos serán separados de los malvados.';
    $dialogoParrafo = ["Jesús contó la historia de unos pescadores que lanzaron una red grande al lago. La red atrapó todo tipo de peces: buenos y malos, todos mezclados.",
      "Cuando la red estaba llena, los pescadores la arrastraron hasta la orilla. Luego se sentaron y empezaron a separar todos los peces.",
      "Pusieron los peces buenos en canastas para guardarlos, pero tiraron los peces malos porque nadie querría comerlos.",
      "Jesús dijo que esto es lo que pasará al final del mundo. Los ángeles separarán a la gente buena de la gente mala, tal como los pescadores separaron los peces buenos de los peces malos.",
      "La gente mala será echada en un horno de fuego donde habrá llanto y rechinar de dientes. Pero la gente buena, que sigue a Dios, ¡brillará como el sol en el reino de Dios!"];
    $evangelio = ['Mateo'];
    $enlaceEvangelio = ['?v1=MT13_47&t1=local%3Aspablm&w1=bible'];
    $pasaje = ['13:47-50'];
  }

  function buenSamaritano() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Buen Samaritano';
    $imagen = '../images/_JesusChrist/goodSamaritan.webp';
    $imagenAlt = 'Buen Samaritano';
    $enlaceImagen = '../images/_JesusChrist/goodSamaritan.png';
    $figLeyenda = 'La Parabola del Buen Samaritano';
    $descripcion = "Enseña a amar al prójimo a través de la historia de un héroe inesperado que ayuda a un extraño herido.";
    $dialogoParrafo = ["Jesús contó la historia de un hombre judío que iba por un camino de Jerusalén a Jericó. Mientras viajaba, ¡unos ladrones lo atacaron! Lo golpearon, le quitaron todas sus cosas y lo dejaron muy malherido a un lado del camino.",
      "Un sacerdote (que es como un líder de la iglesia) pasó por el mismo camino. Pero cuando vio al hombre herido, ¡simplemente se cruzó al otro lado de la calle y siguió caminando!",
      "Luego pasó otro líder religioso llamado levita. Él también vio al hombre herido, pero hizo lo mismo: ¡simplemente siguió de largo sin ayudar!",
      "Finalmente, un hombre samaritano llegó por el camino. Los samaritanos y los judíos por lo general no se caían bien en absoluto. Pero cuando este samaritano vio al hombre judío herido, se compadeció de él.",
      "El samaritano le limpió y vendó las heridas. Luego puso al hombre herido en su propio burro y lo llevó a una posada, que es como un hotel. ¡El samaritano incluso le pagó al encargado de la posada para que cuidara al hombre herido hasta que se recuperara!",
      "Después de contar esta historia, Jesús preguntó: ¿Quién fue un verdadero prójimo para el hombre que fue herido? La respuesta fue el samaritano, el que mostró bondad y misericordia. Jesús nos dijo que fuéramos e hiciéramos lo mismo: ¡mostrar amor a todos, incluso a la gente que podría ser diferente a nosotros!"];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?w1=bible&t1=local%3Aspablm&w1=bible&v1=LK10_25'];
    $pasaje = ['10:25-37'];
  }

  function hijoProdigo()  {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Hijo Prodigo';
    $imagen = '../images/_JesusChrist/prodigalSon.webp';
    $imagenAlt = 'Hijo Prodigo';
    $enlaceImagen = '../images/_JesusChrist/prodigalSon.png';
    $figLeyenda = 'La Parabola del Hijo Prodigo';
    $descripcion = "Ilustra el perdón de Dios y la alegría de la reconciliación a través de un padre que recibe de vuelta a su hijo descarriado.";
    $dialogoParrafo = ["Jesús contó la historia de un padre que tenía dos hijos. El hijo menor le pidió a su padre su parte del dinero de la familia, ¡aunque su padre aún no había muerto! Esto fue súper irrespetuoso, pero el padre de todos modos le dio el dinero.",
      "El hijo menor tomó todo ese dinero y se fue lejos de casa. Allí, malgastó todo su dinero en fiestas salvajes y haciendo lo que quería. Se divirtió un tiempo, ¡pero luego se quedó sin dinero por completo!",
      "Justo en ese momento, hubo una terrible hambruna en ese país, lo que significa que no había suficiente comida. El hijo se desesperó y tuvo tanta hambre que aceptó un trabajo alimentando cerdos. ¡Tenía tanta hambre que incluso quería comer la asquerosa comida de los cerdos!",
      "Finalmente, el hijo se dio cuenta de lo mal que había actuado. Pensó: '¡Hasta los siervos de mi padre tienen mucha comida, y aquí estoy yo muriéndome de hambre!' Así que decidió volver a casa y rogarle a su padre que lo dejara ser solo un siervo.",
      "Pero mientras el hijo aún estaba lejos, su padre lo vio venir. En lugar de enojarse, el padre corrió hacia su hijo, ¡lo abrazó y lo besó! El hijo comenzó a disculparse, pero el padre ya estaba pidiendo que prepararan una celebración.",
      "El padre le dio a su hijo una túnica elegante, un anillo y sandalias. Luego organizó una gran fiesta porque su hijo que había estado 'muerto' ahora estaba vivo de nuevo; ¡su hijo que se había perdido ahora fue encontrado!",
      "El hermano mayor se enojó por esta fiesta. Se quejó de que él siempre había obedecido a su padre, pero nunca tuvo una fiesta. El padre le explicó que todo lo que tenía ya le pertenecía al hijo mayor, pero que necesitaban celebrar porque el hermano perdido había regresado.",
      "Jesús contó esta historia para mostrar cuánto nos ama Dios y lo listo que está para perdonarnos. Al igual que el padre en la historia, Dios nos espera ansiosamente para que volvamos a Él cuando nos equivocamos, ¡y Él celebra cuando lo hacemos!"];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?v1=LK15_11&t1=local%3Aspablm&w1=bible'];
    $pasaje = ['15:11-32'];
  }

  function ovejaPerdida() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Oveja Perdida';
    $imagen = '../images/_JesusChrist/lostSheep.webp';
    $imagenAlt = 'Oveja Perdida';
    $enlaceImagen = '../images/_JesusChrist/lostSheep.png';
    $figLeyenda = 'La Parabola de la Oveja Perdida';
    $descripcion = "Muestra la preocupación de Dios por cada individuo a través de un pastor buscando una de sus cien ovejas";
    $dialogoParrafo = ["Jesús contó la historia de un pastor que tenía 100 ovejas. Los pastores cuidan de las ovejas y las protegen de los animales salvajes y del peligro.",
      "Un día, el pastor se dio cuenta de que le faltaba una de sus ovejas. ¿Qué crees que hizo? Dejó a las otras 99 ovejas en un lugar seguro y se fue a buscar a esa oveja perdida.",
      "Cuando el pastor por fin encontró a su oveja perdida, ¡estaba muy feliz! La puso sobre sus hombros y la cargó todo el camino de regreso a casa.",
      "El pastor estaba tan emocionado por haber encontrado a su oveja perdida que llamó a todos sus amigos y vecinos para que se unieran a una celebración.",
      "Jesús explicó que así es como se siente Dios con respecto a las personas que están perdidas y luego son encontradas. Dijo que hay más alegría en el cielo por una persona perdida que se vuelve a Dios que por 99 personas que ya lo siguen.",
      "Esta historia muestra que Dios se preocupa por cada persona. Así como el pastor no estaba dispuesto a perder ni una sola oveja, Dios no quiere perder a ninguno de nosotros. ¡Él vendrá a buscarnos cuando nos alejemos!"];
    $evangelio = ['Mateo', 'Lucas'];
    $enlaceEvangelio = ['?w1=bible&t1=local%3Aspablm&w1=bible&v1=MT18_12', '?w1=bible&t1=local%3Aspablm&w1=bible&v1=LK15_1'];
    $pasaje = ['18:12-14,', '15:1-7'];
  }

  function monedaPerdida()  {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Moneda Perdida';
    $imagen = '../images/_JesusChrist/lostCoin.webp';
    $imagenAlt = 'Moneda Perdida';
    $enlaceImagen = '../images/_JesusChrist/lostCoin.png';
    $figLeyenda = 'La Parabola de la Moneda Perdida';
    $descripcion = 'Enfatiza el valor que Dios le da a encontrar a los que se han perdido.';
    $dialogoParrafo = ["Jesús contó la historia de una mujer que tenía diez monedas de plata. Estas monedas eran muy importantes para ella.",
    "Un día, se dio cuenta de que le faltaba una de sus monedas. Estaba tan preocupada por encontrarla que encendió una lámpara, barrió toda la casa y buscó con cuidado por todas partes hasta que la encontró.",
    "Cuando por fin encontró su moneda perdida, ¡estaba súper feliz! Llamó a todas sus amigas y vecinas y les dijo: '¡Vengan a celebrar conmigo porque he encontrado mi moneda perdida!'",
    "Jesús explicó que así es como se sienten Dios y los ángeles cuando una persona que estaba haciendo el mal se vuelve a Dios. ¡Hay una gran celebración en el cielo!",
    "Esta historia nos enseña que Dios valora muchísimo a cada persona. Así como la mujer buscó con tanto empeño una moneda, Dios busca a las personas que están perdidas. Y así como ella celebró al encontrar su moneda, ¡Dios celebra cuando alguien regresa a Él!"];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?w1=bible&t1=local%3Aspablm&w1=bible&v1=LK15_8'];
    $pasaje = ['15:8-10'];
  }

  function siervoSinPiedad()  {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Siervo Sin Piedad';
    $imagen = '../images/_JesusChrist/unmercifulServant.webp';
    $imagenAlt = 'Siervo Sin Piedad';
    $enlaceImagen = '../images/_JesusChrist/unmercifulServant.png';
    $figLeyenda = 'La Parabola del Siervo Sin Piedad';
    $descripcion = "Enseña sobre el perdón contrastando la misericordia de un rey con la dureza de un siervo.";
    $dialogoParrafo = ["Jesús contó la historia de un rey que quería arreglar cuentas con sus siervos. Le llevaron a un siervo que le debía millones de dólares al rey, ¡muchísimo más dinero del que el siervo podría pagar jamás!",
    "El rey ordenó que el siervo y toda su familia fueran vendidos como esclavos para pagar algo de la deuda. El siervo se arrodilló y le suplicó: '¡Por favor, ten paciencia conmigo y te lo pagaré todo!'",
    "El rey sintió compasión por el siervo e hizo algo asombroso: ¡le canceló toda la deuda! Dejó que el siervo se fuera libre sin tener que pagar absolutamente nada.",
    "Pero luego, ese mismo siervo salió y encontró a un consiervo que le debía solo unos cuantos cientos de dólares. Lo agarró, lo empezó a ahorcar y le exigió: '¡Págame lo que me debes!'",
    "El consiervo le suplicó que tuviera paciencia, justo como el primer siervo lo había hecho con el rey. Pero el primer siervo se negó a mostrar misericordia. Hizo que metieran al hombre a la cárcel hasta que pudiera pagar la deuda.",
    "Cuando los otros siervos vieron lo que pasó, se molestaron mucho. Fueron y le contaron todo al rey. El rey hizo llamar de nuevo al primer siervo y le dijo: '¡Siervo malvado! Te cancelé toda esa deuda porque me lo suplicaste. ¿No debiste tú haber tenido misericordia de tu consiervo, así como yo la tuve de ti?'",
    "Entonces el rey, enojado, entregó al siervo sin piedad a los carceleros para que fuera castigado hasta que pudiera pagar todo lo que debía.",
    "Jesús terminó diciendo que así es como Dios nos tratará si no perdonamos a los demás de corazón. La historia nos enseña que, ya que Dios nos ha perdonado tanto, nosotros también debemos estar dispuestos a perdonar a los demás cuando nos hacen algo malo."];
    $evangelio = ['Mateo'];
    $enlaceEvangelio = ['?v1=MT18_21&t1=local%3Aspablm&w1=bible'];
    $pasaje = ['18:21-35'];
  }

  function obrerosEnLaVinha() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'Los Obreros en la Viña';
    $imagen = '../images/_JesusChrist/workersInVineyard.webp';
    $imagenAlt = 'Obreros en la Viña';
    $enlaceImagen = '../images/_JesusChrist/workersInVineyard.png';
    $figLeyenda = 'La Parabola de los Obreros en la Viña';
    $descripcion = "Revela la generosidad y la gracia de Dios que desafían las expectativas humanas de justicia.";
    $dialogoParrafo = ["Jesús contó la historia de un dueño de viñedo que necesitaba trabajadores. Temprano en la mañana, como a las 6 AM, salió y contrató a algunos trabajadores. Acordó pagarles un denario por el día, que era el salario normal de un día.",
    "Más tarde esa mañana, como a las 9 AM, el dueño vio a más personas paradas en la plaza sin nada que hacer. Les dijo: 'Vayan ustedes también a trabajar a mi viñedo, y les pagaré lo que sea justo.' Y ellos fueron.",
    "El dueño hizo lo mismo al mediodía, a las 3 PM e incluso a las 5 PM, ¡cuando el día de trabajo casi terminaba! Cada vez, envió a más trabajadores a su viñedo.",
    "Cuando llegó la tarde, era el momento de pagarles a todos los trabajadores. El dueño le dijo a su administrador que llamara a los trabajadores y les pagara, empezando por los que fueron contratados al final.",
    "Los trabajadores que fueron contratados a las 5 PM pasaron primero. Para su sorpresa, cada uno de ellos recibió un denario completo, ¡el salario de un día entero! Cuando los trabajadores que fueron contratados primero vieron esto, se emocionaron pensando que a ellos les tocaría todavía más.",
    "Pero cuando les llegó su turno, también recibieron un denario cada uno, exactamente lo que habían acordado al principio del día. Comenzaron a quejarse con el dueño: '¡Estas personas que fueron contratadas al final trabajaron solo una hora, pero les has pagado lo mismo que a nosotros, que trabajamos todo el día bajo el sol ardiente!'",
    "El dueño le respondió a uno de ellos: 'Amigo, no estoy siendo injusto contigo. ¿No acordaste trabajar por un denario? Toma tu paga y vete. Yo quiero darle al que fue contratado al final lo mismo que te di a ti. ¿Acaso no tengo el derecho de hacer lo que quiera con mi propio dinero? ¿O tienes envidia porque soy generoso?'",
    "Jesús terminó diciendo: 'Así que los últimos serán los primeros, y los primeros serán los últimos.' Esta historia nos enseña que la manera en que Dios recompensa a las personas no se basa en cuánto o qué tanto trabajan. En cambio, Dios es generoso y le da buenos regalos a todos los que lo siguen, ya sea que lo hayan seguido toda su vida o que apenas hayan empezado hace poco."];
    $evangelio = ['Mateo'];
    $enlaceEvangelio = ['?v1=MT20_1&t1=local%3Aspablm&w1=bible'];
    $pasaje = ['20:1-16'];
  }

  function hombreRicoYLazaro()  {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Hombre Rico y Lazaro';
    $imagen = '../images/_JesusChrist/richManAndLazarus.webp';
    $imagenAlt = 'Hombre Rico y Lazaro';
    $enlaceImagen = '../images/_JesusChrist/richManAndLazarus.png';
    $figLeyenda = 'La Parabola del Hombre Rico y Lazaro';
    $descripcion = "Advierte sobre los peligros de la riqueza y de ignorar a los necesitados.";
    $dialogoParrafo = ["Jesús contó la historia de un hombre rico que vivía en la abundancia todos los días. Usaba ropas púrpuras y finos linos, y siempre festejaba con comidas deliciosas.",
    "A la entrada de la casa del hombre rico había un mendigo pobre llamado Lázaro. Su cuerpo estaba cubierto de llagas y tenía tanta hambre que deseaba poder comer al menos las migajas que caían de la mesa del rico. Hasta los perros venían y le lamían las llagas. El hombre rico no ayudó a Lázaro en lo más mínimo.",
    "Con el tiempo, ambos hombres murieron. Lázaro fue llevado por los ángeles al lado de Abraham en el cielo. El hombre rico fue al Hades, donde sufría un dolor terrible.",
    "El hombre rico levantó la vista y vio a Abraham a lo lejos, con Lázaro a su lado. Le gritó: '¡Padre Abraham, ten misericordia de mí! Envía a Lázaro para que moje la punta de su dedo en agua y me refresque la lengua, porque estoy sufriendo en este fuego.'",
    "Pero Abraham le respondió: 'Hijo, recuerda que en tu vida recibiste cosas buenas, mientras que Lázaro recibió cosas malas. Ahora él es consolado aquí, y tú estás en agonía. Además, hay un gran abismo entre nosotros que nadie puede cruzar.'",
    "El hombre rico le rogó a Abraham que enviara a Lázaro para advertir a sus cinco hermanos para que no terminaran en ese mismo lugar de sufrimiento. Abraham le dijo: 'Tienen a Moisés y a los Profetas; que los escuchen.'",
    "El hombre rico insistió: 'No, padre Abraham, pero si alguien de entre los muertos va a ellos, ¡se arrepentirán!' Abraham respondió: 'Si no escuchan a Moisés y a los Profetas, no se convencerán aunque alguien resucite de entre los muertos.'",
    "Jesús contó esta historia para advertir a la gente sobre los peligros de enfocarse en la riqueza y la comodidad mientras se ignora a los necesitados. La historia nos enseña que la forma en que tratamos a los demás, especialmente a la gente pobre o que sufre, le importa mucho a Dios."];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?w1=bible&t1=local%3Aspablm&w1=bible&v1=LK16_19'];
    $pasaje = ['16:19-31'];
  }

  function fariseoYPublicano()  {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Fariseo y el Publicano';
    $imagen = '../images/_JesusChrist/phariseeAndTaxCollector.webp';
    $imagenAlt = 'El Fariseo y el Publicano';
    $enlaceImagen = '../images/_JesusChrist/phariseeAndTaxCollector.png';
    $figLeyenda = 'La Parabola del Fariseo y el Publicano';
    $descripcion = "Contrasta el orgullo de la autosuficiencia con el arrepentimiento humilde en la oración.";
    $dialogoParrafo = ["Jesús contó la historia de dos hombres que fueron al templo a orar. Uno era un fariseo, que es como un líder religioso que seguía todas las reglas con mucho cuidado. El otro era un publicano, que a la mayoría de la gente le caía mal porque a menudo engañaban a las personas.",
    "El fariseo se paró aparte y oró: 'Dios, te doy gracias porque no soy como los demás: ladrones, malhechores, adúlteros, ni siquiera como este publicano. Ayuno dos veces a la semana y doy la décima parte de todo lo que gano.' ¡Básicamente estaba presumiendo de lo bueno que era!",
    "Pero el publicano se quedó parado a la distancia. Ni siquiera se atrevía a levantar la vista al cielo. En cambio, se golpeaba el pecho y decía: 'Dios, ten misericordia de mí, que soy un pecador.' Él sabía que había hecho cosas malas y le estaba pidiendo a Dios que lo perdonara.",
    "Jesús dijo que en realidad fue el publicano, y no el fariseo, ¡quien regresó a casa en buena relación con Dios! Luego Jesús explicó: 'Porque todo el que se ensalza será humillado, y el que se humilla será ensalzado.'",
    "Esta historia nos enseña que Dios no quiere que seamos orgullosos ni que pensemos que somos mejores que los demás. En cambio, Dios quiere que seamos honestos acerca de nuestros errores y que pidamos su perdón con un corazón humilde."];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?w1=bible&t1=local%3Aspablm&w1=bible&v1=LK18_9'];
    $pasaje = ['18:9-14'];
  }

  function viudaPersistente() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Viuda Persistente';
    $imagen = '../images/_JesusChrist/persistentWidow.webp';
    $imagenAlt = 'Viuda Persistente';
    $enlaceImagen = '../images/_JesusChrist/persistentWidow.png';
    $figLeyenda = 'La Parabola de la Viuda Persistente';
    $descripcion = "Anima a la oración persistente a través de la historia de una viuda que busca justicia.";
    $dialogoParrafo = ["Jesús contó una historia para enseñar a sus seguidores que siempre deben orar y nunca rendirse. La historia trataba de un juez al que no le importaba ni Dios ni lo que la gente pensara de él.",
    "En el mismo pueblo vivía una viuda que no dejaba de ir a ver a este juez con la misma petición: 'Hazme justicia contra mi adversario.' Una viuda es una mujer cuyo marido ha muerto, y en esos días, a las viudas a menudo les resultaba difícil cuidar de sí mismas.",
    "Por mucho tiempo, el juez se negó a ayudarla. ¡Pero la viuda no se dio por vencida! Siguió regresando una y otra vez, pidiendo justicia.",
    "Finalmente, el juez pensó para sí mismo: 'Aunque no me importan ni Dios ni las personas, le haré justicia a esta viuda porque no deja de molestarme. ¡Si no la ayudo, me agotará con sus constantes peticiones!'",
    "Luego Jesús explicó el punto de la historia. Dijo: 'Oigan lo que dijo el juez injusto. Y, ¿acaso Dios no le hará justicia a su pueblo elegido, que clama a él día y noche? ¿Los hará esperar? Les digo que sí, les hará justicia rápidamente.'",
    "La historia nos enseña que si incluso un juez injusto eventualmente responde a alguien que sigue pidiendo, ¡cuánto más responderá Dios, que es perfectamente bueno y que nos ama, a nuestras oraciones cuando seguimos llevándole nuestras necesidades!"];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?w1=bible&t1=local%3Aspablm&w1=bible&v1=LK18_1'];
    $pasaje = ['18:1-8'];
  }

  function diezVirgenes() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'Las 10 Virgenes';
    $imagen = '../images/_JesusChrist/tenVirgins.webp';
    $imagenAlt = '10 Virgenes';
    $enlaceImagen = '../images/_JesusChrist/tenVirgins.png';
    $figLeyenda = 'La Parabola de las 10 Virgenes';
    $descripcion = "Enfatiza la preparación para el regreso de Cristo a través de la analogía de las asistentes de boda";
    $dialogoParrafo = ["Jesús contó una historia comparando el reino de los cielos con diez jóvenes vírgenes que tomaron sus lámparas y salieron a recibir al novio (ese es el hombre que se va a casar).",
      "Cinco de las vírgenes eran necias, y cinco eran prudentes. Las necias tomaron sus lámparas pero no llevaron aceite adicional. Las prudentes, sin embargo, llevaron aceite en vasijas junto con sus lámparas. ¡Estaban preparadas!",
      'El novio tardó en llegar, y todas las vírgenes se adormecieron y se quedaron dormidas. Pero a la medianoche, alguien gritó: "¡Aquí viene el novio! ¡Salgan a recibirlo!"',
      'Todas las vírgenes se despertaron y prepararon sus lámparas. Las necias se dieron cuenta de que se les acababa el aceite y dijeron a las prudentes: "Dennos de su aceite, porque nuestras lámparas se están apagando."',
      'Pero las prudentes respondieron: "No, porque no habrá suficiente para nosotras y para ustedes. Vayan mejor a los que venden aceite y compren para ustedes mismas."',
      'Mientras las vírgenes necias fueron a comprar aceite, llegó el novio. Las vírgenes prudentes, que estaban listas, entraron con él al banquete de bodas. ¡Y luego la puerta se cerró con llave!',
      'Más tarde, las vírgenes necias regresaron y llamaron: "¡Señor! ¡Señor! ¡Ábrenos la puerta!" Pero el novio respondió: "De cierto les digo, no las conozco."',
      'Jesús terminó la historia diciendo: "Por tanto, manténganse alerta, porque no saben el día ni la hora." Nos estaba enseñando a estar siempre listos para cuando Él regrese, ¡porque no sabemos exactamente cuándo será!'];
    $evangelio = ['Mateo'];
    $enlaceEvangelio = ['?v1=MT25_1&t1=local%3Aspablm&w1=bible'];
    $pasaje = ['25:1-13'];
  }

  function talentos() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'Los Talentos';
    $imagen = '../images/_JesusChrist/talents.webp';
    $imagenAlt = 'Talentos';
    $enlaceImagen = '../images/_JesusChrist/talents.png';
    $figLeyenda = 'La Parabola de los Talentos';
    $descripcion = 'Enseña sobre la administración y la rendición de cuentas por lo que Dios nos confía';
    $dialogoParrafo = ['Jesús contó una historia sobre un hombre que salía de viaje. Antes de irse, llamó a sus siervos y les confió su riqueza. Los talentos eran grandes cantidades de dinero en aquellos días.',
      'A un siervo le dio cinco talentos, a otro dos talentos, y a otro sólo un talento. Le dio a cada uno según su capacidad. Luego se fue de viaje.',
      'El siervo que recibió cinco talentos fue de inmediato y puso el dinero a trabajar, ganando cinco talentos más. El que tenía dos talentos ganó dos más. Pero el siervo que recibió un talento cavó un hoyo en la tierra y escondió el dinero de su señor.',
      'Después de mucho tiempo, el señor regresó y ajustó cuentas con sus siervos. El que había recibido cinco talentos trajo los cinco adicionales y dijo: "Señor, me entregaste cinco talentos. Mira, he ganado cinco más!"',
      'El señor le respondió: "¡Bien hecho, siervo bueno y fiel! Has sido fiel en lo poco, te pondré a cargo de mucho más. ¡Ven a compartir la felicidad de tu señor!"',
      'El siervo que había recibido dos talentos también vino y dijo: "Señor, me entregaste dos talentos. Mira, he ganado dos más!" El señor le dijo lo mismo: "¡Bien hecho, siervo bueno y fiel!"',
      'Luego vino el siervo que había recibido un talento y dijo: "Señor, yo sabía que eres un hombre duro, que cosechas donde no has sembrado y recoges donde no has esparcido. Así que tuve miedo y fui a esconder tu talento en la tierra. Mira, aquí tienes lo que es tuyo."',
      'El señor le respondió: "¡Siervo malo y perezoso! Si sabías que cosecho donde no he sembrado, ¡deberías al menos haber puesto mi dinero en el banco para que pudiera recuperarlo con intereses!"',
      'El señor le quitó el talento y se lo dio al siervo que tenía diez talentos. Dijo: "A todo el que usa bien lo que se le ha dado, se le dará más. Pero al que no usa bien lo que se le ha dado, hasta lo que tiene se le quitará."',
      '¡Jesús contó esta historia para enseñar que Dios espera que usemos los dones, habilidades y oportunidades que Él nos da. Cuando los usamos bien, Él nos dará más responsabilidades y bendiciones!'];
    $evangelio = ['Mateo', 'Lucas'];
    $enlaceEvangelio = ['?v1=MT25_14&t1=local%3Aspablm&w1=bible', '?v1=LK19_11&t1=local%3Aspablm&w1=bible'];
    $pasaje = ['25:14-30', '19:11-27'];
  }

  function ovejasYCabritos() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'Las Ovejas y los Cabritos';
    $imagen = '../images/_JesusChrist/sheepAndGoats.webp';
    $imagenAlt = 'Ovejas y Cabritos';
    $enlaceImagen = '../images/_JesusChrist/sheepAndGoats.png';
    $figLeyenda = 'La Parabola de las Ovejas y los Cabritos';
    $descripcion = 'Describe el juicio final basado en cómo las personas trataron a "los más pequeños"';
    $dialogoParrafo = ['Jesús dice que cuando Él regrese, separará a las personas como un pastor separa las ovejas de los cabritos.',
      'Las ovejas son las personas que ayudaron a otros cuando tenían hambre, estaban enfermos o en problemas. Jesús dice que en realidad lo estaban ayudando a Él.',
      'Los cabritos son las personas que no ayudaron a otros. Jesús dice que lo ignoraron a Él al no preocuparse por los demás.',
      'Esta historia nos enseña que mostrar bondad hacia los demás es muy importante para Dios.'];
    $evangelio = ['Mateo'];
    $enlaceEvangelio = ['?v1=MT25_31&t1=local%3Aspablm&w1=bible'];
    $pasaje = ['25:31-46'];
  }

  function dosDeudores() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'Los Dos Deudores';
    $imagen = '../images/_JesusChrist/twoDebtors.webp';
    $imagenAlt = 'Dos personas que deben dinero a la misma persona';
    $enlaceImagen = '../images/_JesusChrist/twoDebtors.png';
    $figLeyenda = 'La Parabola de los Dos Deudores';
    $descripcion = 'Muestra cómo la gratitud surge de comprender la profundidad del perdón recibido';
    $dialogoParrafo = ['Jesús cuenta una historia sobre dos personas que deben dinero. Una persona debe poco, y la otra debe mucho.',
      'El prestamista decide perdonarles a ambos y les dice que no tienen que devolverlo.',
      'Jesús pregunta cuál de las personas amará más al prestamista. La respuesta es aquella a la que se le perdonó más.',
      'Esto nos muestra que las personas que saben que han sido perdonadas mucho por Dios lo amarán más.'];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=LK7_41'];
    $pasaje = ['7:41-43'];
  }

  function labradoresMalvados() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'Los Labradores Malvados';
    $imagen = '../images/_JesusChrist/wickedTenants.webp';
    $imagenAlt = 'Labradores que atacan los mensajeros del dueño de la viña';
    $enlaceImagen = '../images/_JesusChrist/wickedTenants.png';
    $figLeyenda = 'La Parabola de los Labradores Malvados';
    $descripcion = "Predice el rechazo de Jesús por los líderes religiosos a través de la historia de unos viñadores rebeldes";
    $dialogoParrafo = ['Un hombre tenía una viña y la arrendó a unos labradores. Cuando llegó el tiempo de recoger los frutos, envió a sus siervos.',
      'Los labradores golpearon a los siervos y los enviaron con las manos vacías. El hombre envió más siervos, y también fueron maltratados.',
      'Finalmente, envió a su hijo, pensando que lo respetarían. Pero los labradores mataron al hijo.',
      'Jesús contó esta historia para mostrar cómo la gente rechazó a los mensajeros de Dios e incluso a Jesús, el Hijo de Dios.'];
    $evangelio = ['Mateo', 'Marcos', 'Lucas'];
    $enlaceEvangelio = ['?v1=MT21_33&w1=bible&t1=local%3Aspablm', '?v1=MK12_1&w1=bible&t1=local%3Aspablm', '?v1=LK20_9&w1=bible&t1=local%3Aspablm'];
    $pasaje = ['21:33-46', '12:1-12', '20:9-19'];
  }

  function banqueteDeBodas() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Banquete de Boda';
    $imagen = '../images/_JesusChrist/weddingFeast.webp';
    $imagenAlt = 'Invitados a una boda real';
    $enlaceImagen = '../images/_JesusChrist/weddingFeast.png';
    $figLeyenda = 'La Parabola del Banquete de Boda';
    $descripcion = "Ilustra la invitación al reino de Dios y la importancia de responder adecuadamente";
    $dialogoParrafo = ['Un rey preparó una gran boda para su hijo e invitó a muchos invitados.',
      'Pero los invitados no quisieron venir. Algunos pusieron excusas, y otros fueron crueles con los mensajeros.',
      'El rey entonces invitó a personas de las calles, tanto buenos como malos, y la sala de bodas se llenó.',
      "Jesús dice que esto es como el reino de Dios—todos están invitados, pero debemos estar preparados y tomarlo en serio."];
    $evangelio = ['Mateo', 'Lucas'];
    $enlaceEvangelio = ['?v1=MT22_1&w1=bible&t1=local%3Aspablm', '?v1=LK14_16&w1=bible&t1=local%3Aspablm'];
    $pasaje = ['22:1-14', '14:16-24'];
  }

  function ricoInsensato() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Rico Insensato';
    $imagen = '../images/_JesusChrist/richFool.webp';
    $imagenAlt = 'Un hombre construye más graneros para sus cultivos';
    $enlaceImagen = '../images/_JesusChrist/richFool.png';
    $figLeyenda = 'La Parabola del Rico Insensato';
    $descripcion = 'Advierte contra la avaricia y el acumular tesoros en la tierra en lugar de ser rico para con Dios';
    $dialogoParrafo = ['Un hombre rico tuvo una gran cosecha y no sabía dónde almacenar todos sus cultivos.',
      'Decidió derribar sus graneros y construir otros más grandes para guardarlo todo.',
      'Pensó, "¡Ahora puedo relajarme, comer, beber y disfrutar la vida!"',
      'Pero esa noche, murió. Jesús dijo que esto muestra cuán insensato es pensar solo en el dinero y no en Dios.'];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=LK12_13'];
    $pasaje = ['12:13-21'];
  }

  function constructoresSabiosEInsensatos() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'Los Constructores Sabios e Insensatos';
    $imagen = '../images/_JesusChrist/wiseAndFoolishBuilders.webp';
    $imagenAlt = 'Los Constructores Sabios e Insensatos';
    $enlaceImagen = '../images/_JesusChrist/wiseAndFoolishBuilders.png';
    $figLeyenda = 'La Parabola de los Constructores Sabios e Insensatos';
    $descripcion = "Contrasta a aquellos que escuchan las palabras de Jesús y actúan conforme a ellas versus los que no lo hacen";
    $dialogoParrafo = ['Jesús contó una historia sobre dos personas que construyeron casas. Una era sabia, y la otra era insensata.',
      'El constructor sabio edificó su casa sobre roca sólida. Cavó profundo y se aseguró de que el cimiento fuera fuerte.',
      'El constructor insensato era perezoso y construyó su casa directamente sobre la arena, sin ningún cimiento firme.',
      '¡Entonces llegó la temporada de lluvias! Cayó fuerte lluvia, subieron los arroyos y fuertes vientos soplaron contra ambas casas.',
      'La casa construida sobre la roca se mantuvo firme durante la tormenta. Pero la casa construida sobre arena? ¡Se derrumbó completamente con un gran estruendo!',
      "Jesús explicó que las personas que escuchan Sus palabras y las ponen en práctica son como el constructor sabio con el cimiento fuerte. Cuando lleguen tiempos difíciles, seguirán en pie.",
      "Pero las personas que escuchan Sus palabras y no las siguen son como el constructor insensato que edificó sobre arena. Cuando vengan los problemas, todo se derrumbará para ellos.",
      "¡Esta historia nos enseña que no es suficiente solo escuchar lo que Jesús dice - necesitamos realmente hacer lo que Él nos enseña!"];
    $evangelio = ['Mateo', 'Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=MT7_24', '?t1=local%3Aspablm&w1=bible&v1=LK6_47'];
    $pasaje = ['7:24-27', '6:47-49'];
  }

  function semillaQueCrece() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Semilla que crece';
    $imagen = '../images/_JesusChrist/growingSeed.webp';
    $imagenAlt = 'La Semilla que crece';
    $enlaceImagen = '../images/_JesusChrist/growingSeed.png';
    $figLeyenda = 'La Parabola de la Semilla que crece';
    $descripcion = "Muestra cómo el reino de Dios crece de manera misteriosa por el poder de Dios, no por el esfuerzo humano";
    $dialogoParrafo = ["Jesús contó una historia comparando el reino de Dios con un hombre que esparció semilla en la tierra.",
      'Noche y día, ya sea que el hombre estuviera dormido o despierto, las semillas brotaban y crecían. ¡Pero el hombre no tenía idea de cómo sucedía!',
      'La tierra producía grano por sí sola - primero el tallo, luego la espiga, y después el grano lleno en la espiga.',
      'Tan pronto como el grano estaba maduro, el hombre salía con su hoz para cosecharlo, porque el tiempo de la cosecha había llegado.',
      "Jesús estaba enseñando que el reino de Dios crece de maneras que no siempre entendemos. Podemos plantar semillas al hablar a otros acerca de Jesús, ¡pero es Dios quien hace que esas semillas crezcan!",
      "Esta historia nos muestra que no necesitamos preocuparnos tanto por hacer crecer el reino de Dios - ¡ese es el trabajo de Dios! Nuestro trabajo es esparcir las semillas y estar listos para la cosecha."];
    $evangelio = ['Marcos'];
    $enlaceEvangelio = ['?v1=MK4_26&w1=bible&t1=local%3Aspablm'];
    $pasaje = ['4:26-29'];
  }

  function panhoNuevoEnVestidoViejo() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El paño nuevo en el vestido viejo';
    $imagen = '../images/_JesusChrist/newClothOnOldGarment.webp';
    $imagenAlt = 'El paño nuevo en el vestido viejo';
    $enlaceImagen = '../images/_JesusChrist/newClothOnOldGarment.png';
    $figLeyenda = 'La Parabola de el Paño Nuevo en el Vestido Viejo';
    $descripcion = "Ilustra la incompatibilidad del antiguo sistema religioso con las nuevas enseñanzas de Jesús";
    $dialogoParrafo = ['Jesús contó una breve historia sobre ropa para ayudar a las personas a entender algo importante. Él preguntó: "¿Quién usaría un pedazo de tela nueva para remendar un vestido viejo?"',
      'Explicó que si hicieras eso, el remiendo nuevo se encogería cuando lo lavaras. ¡Entonces se separaría del vestido viejo y haría un desgarro aún más grande que antes!',
      'Esto podría parecer solo un consejo práctico de costura, pero Jesús en realidad estaba enseñando sobre algo mucho más grande. El "vestido viejo" representaba las antiguas formas religiosas a las que la gente estaba acostumbrada.',
      'El "remiendo nuevo" representaba las nuevas enseñanzas de Jesús y la nueva forma de relacionarse con Dios que Él estaba trayendo.',
      "Jesús estaba diciendo que no puedes simplemente añadir Sus nuevas enseñanzas al antiguo sistema religioso - no encajarían bien juntos. ¡Su nueva forma requería un comienzo completamente nuevo!",
      "¡Esta historia ayudó a la gente a ver que Jesús no solo estaba arreglando la antigua manera de hacer las cosas. Él estaba trayendo algo totalmente nuevo que cambiaría todo!"];
    $evangelio = ['Mateo', 'Marcos', 'Lucas'];
    $enlaceEvangelio = ['?v1=MT9_16&w1=bible&t1=local%3Aspablm', '?v1=MK2_21&w1=bible&t1=local%3Aspablm', '?v1=LK5_36&w1=bible&t1=local%3Aspablm'];
    $pasaje = ['9:16', '2:21', '5:36'];
  }

  function vinoNuevoEnOdresViejos() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El vino nuevo en los ordes viejos';
    $imagen = '../images/_JesusChrist/newWineInOldWineskins.webp';
    $imagenAlt = 'Vino Nuevo en los Ordes Viejos';
    $enlaceImagen = '../images/_JesusChrist/newWineInOldWineskins.png';
    $figLeyenda = 'La Parabola de el Vino Nuevo en los Ordes Viejos';
    $descripcion = "Similar a la parábola del paño, muestra cómo el mensaje de Jesús requiere nuevas estructuras";
    $dialogoParrafo = ['Jesús contó otra breve historia sobre el vino para ayudar a explicar Su ministerio. Él preguntó, "¿Alguien echa vino nuevo en odres viejos?"',
      'En aquellos días, usaban pieles de animales como recipientes para el vino. Cuando el vino era nuevo, todavía estaba fermentando y produciendo gases que hacían que el odre se estirara.',
      "Los odres viejos ya se habían estirado y se habían vuelto quebradizos. Si ponías vino nuevo en ellos, ¡reventarían cuando el vino se expandiera! Entonces tanto el vino como los odres se echarían a perder.",
      'Jesús explicó que el vino nuevo debe ser echado en odres nuevos para que ambos se conserven.',
      'Como en la historia del paño, Jesús no estaba realmente dando consejos sobre cómo hacer vino. El "vino nuevo" era Su mensaje fresco y poderoso y la obra del Espíritu Santo.',
      'Los "odres viejos" representaban los antiguos sistemas religiosos y tradiciones que no podían contener la nueva forma de Jesús sin romperse.',
      '¡Jesús estaba enseñando que Su mensaje era tan nuevo y diferente que necesitaba nuevas formas de pensar y nuevas estructuras. La gente necesitaba estar lista para formas completamente nuevas de relacionarse con Dios!'];
    $evangelio = ['Mateo', 'Marcos', 'Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=MT9_17', '?v1=MK2_22&w1=bible&t1=local%3Aspablm', '?t1=local%3Aspablm&w1=bible&v1=LK5_37'];
    $pasaje = ['9:17', '2:22', '5:37-39'];
  }

  function lamparaEnLaMesa() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Lampara en la Mesa';
    $imagen = '../images/_JesusChrist/lampOnStand.webp';
    $imagenAlt = 'Lampara en la Mesa';
    $enlaceImagen = '../images/_JesusChrist/lampOnStand.png';
    $figLeyenda = 'La Parabola de la Lampara en la Mesa';
    $descripcion = 'Enseña que la verdad espiritual está destinada a iluminar, no a ser escondida';
    $dialogoParrafo = ['Jesús hizo una pregunta simple: "¿Acaso alguien enciende una lámpara y luego la pone debajo de un recipiente o una cama? ¡Por supuesto que no! La pone en un candelero para que dé luz a todos en la casa."',
      "En los tiempos de Jesús, usaban lámparas de aceite para iluminar sus casas por la noche. Sería tonto encender una lámpara y luego esconderla - ¡eso anularía todo el propósito de tener una lámpara!",
      "Jesús explicó que no hay nada oculto que no vaya a ser revelado eventualmente, y nada guardado en secreto que no vaya a salir a la luz.",
      "Él estaba enseñando que la verdad del reino de Dios no está destinada a ser escondida o mantenida en secreto. La verdad de Dios es como una lámpara que debe colocarse en un lugar alto donde todos puedan verla y beneficiarse de su luz.",
      'Jesús también dijo: "Ustedes son la luz del mundo". Él quería que Sus seguidores brillaran intensamente para que otros pudieran ver, como una ciudad en una colina que no puede ocultarse.',
      "¡Esta historia nos recuerda que no debemos esconder nuestra fe o las cosas que Dios nos ha enseñado. En cambio, debemos dejar que nuestra luz brille para que otros puedan verla y dar gloria a Dios!"];
    $evangelio = ['Mateo', 'Marcos', 'Lucas', 'Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=MT5_14', '?v1=MK4_21&w1=bible&t1=local%3Aspablm', '?t1=local%3Aspablm&w1=bible&v1=LK8_16', '?t1=local%3Aspablm&w1=bible&v1=LK11_33'];
    $pasaje = ['5:14-16', '4:21-22', '8:16-17', '11:33-36'];
  }

  function dosHijos() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'Dos Hijos';
    $imagen = '../images/_JesusChrist/twoSons.webp';
    $imagenAlt = 'Dos Hijos Parable';
    $enlaceImagen = '../images/_JesusChrist/twoSons.png';
    $figLeyenda = 'La Parabola de Dos Hijos';
    $descripcion = 'Contrasta la obediencia con solo palabras, mostrando la importancia del arrepentimiento real';
    $dialogoParrafo = ['Jesús contó una historia sobre un padre que tenía dos hijos. El padre fue al primer hijo y le dijo: "Hijo, ve y trabaja hoy en la viña."',
      'El primer hijo respondió: "No quiero." Pero después cambió de opinión y fue a trabajar en la viña después de todo.',
      'Luego el padre fue a su segundo hijo y le dijo lo mismo. Este hijo respondió: "Sí, señor, iré," pero en realidad no fue.',
      'Jesús preguntó a las personas que escuchaban: "¿Cuál de los dos hijos hizo lo que su padre quería?" Ellos respondieron: "El primer hijo," ¡y tenían razón!',
      "Jesús usó esta historia para hacer un punto importante. Comparó a los líderes religiosos con el segundo hijo - decían las palabras correctas pero realmente no obedecían a Dios.",
      'Y comparó a los recaudadores de impuestos y prostitutas (personas que todos despreciaban) con el primer hijo. Estas personas habían dicho "no" a Dios al principio a través de sus vidas pecaminosas, pero luego cambiaron de opinión y verdaderamente se arrepintieron cuando escucharon el mensaje de Juan el Bautista.',
      "Jesús estaba enseñando que no es solo lo que decimos lo que importa a Dios, sino lo que realmente hacemos. Dios se preocupa más por el verdadero arrepentimiento y la obediencia que por las personas que solo dicen las palabras religiosas correctas pero no cumplen con sus acciones."];
    $evangelio = ['Mateo'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=MT21_28'];
    $pasaje = ['21:28-32'];
  }

  function mayordomoInjusto() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Mayordomo Injusto';
    $imagen = '../images/_JesusChrist/unjustSteward.webp';
    $imagenAlt = 'El Mayordomo Injusto';
    $enlaceImagen = '../images/_JesusChrist/unjustSteward.png';
    $figLeyenda = 'La Parabola del Mayordomo Injusto';
    $descripcion = 'Anima al uso sabio de los recursos mundanos con perspectiva eterna';
    $dialogoParrafo = ['Jesús contó una extraña historia sobre un administrador (o mayordomo) que trabajaba para un hombre rico. El hombre rico descubrió que este administrador estaba malgastando su dinero, así que lo llamó y le dijo: "¿Qué es esto que oigo de ti? Da cuenta de tu administración, porque ya no podrás seguir siendo administrador."',
      "El administrador pensó para sí mismo: \"¡Oh no! ¡Voy a perder mi trabajo! No soy lo suficientemente fuerte para cavar, y soy demasiado orgulloso para mendigar. ¿Qué haré?\" Entonces se le ocurrió un plan astuto para hacerse amigos que le ayudaran después de perder su trabajo.",
      'Llamó a cada uno de los deudores de su amo. Al primero le dijo: "¿Cuánto le debes a mi amo?" El hombre respondió: "Ochocientos galones de aceite de oliva." El administrador le dijo: "Rápido, toma tu factura y hazla de cuatrocientos."',
      'A otro deudor que debía mil fanegas de trigo, el administrador le dijo: "Toma tu factura y hazla de ochocientas." ¡El administrador estaba reduciendo sus deudas para que le estuvieran agradecidos!',
      '¡Cuando el hombre rico descubrió lo que había hecho el administrador, sorprendentemente lo elogió por ser astuto! El administrador deshonesto había actuado con sagacidad y había planeado con anticipación.',
      '¡Jesús no estaba diciendo que deberíamos ser deshonestos! Pero sí dijo: "Los hijos de este mundo son más astutos en el trato con los suyos que los hijos de luz." Estaba señalando que a veces las personas mundanas son mejores planificando con sus recursos que el pueblo de Dios.',
      'Jesús luego enseñó: "Gánense amigos por medio de las riquezas mundanas, para que cuando éstas se acaben, se les reciba en las moradas eternas." Estaba diciendo que deberíamos usar nuestro dinero y posesiones de maneras que tengan valor eterno - como ayudar a otros y avanzar el reino de Dios.',
      'Jesús terminó con un recordatorio importante: "El que es fiel en lo muy poco, también en lo más es fiel." Enseñó que la manera en que manejamos el dinero muestra mucho sobre nuestro carácter, y no podemos servir a Dios y al dinero al mismo tiempo.'];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=LK16_1'];
    $pasaje = ['16:1-13'];
  }

  function amigoAmediaNoche() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Amigo en la Medianoche';
    $imagen = '../images/_JesusChrist/friendAtMidnight.webp';
    $imagenAlt = 'Ilustración de una persona tocando la puerta de una casa en la medianoche';
    $enlaceImagen = '../images/_JesusChrist/friendAtMidnight.png';
    $figLeyenda = 'La Parabola del Amigo en la Medianoche';
    $descripcion = 'Enseña la persistencia en la oración a través de una historia sobre pedir pan prestado en la noche';
    $dialogoParrafo = ["En esta parábola, Jesús habla de un hombre que recibió la visita de un amigo muy tarde en la noche. ¡El problema era que no tenía comida para ofrecerle! Así que fue a la casa de otro amigo a medianoche para pedirle pan.",
      "El amigo ya estaba en la cama con su familia y no quería levantarse. Pero el primer hombre seguía tocando la puerta e insistiendo, y no se detenía.",
      '¡Finalmente, el amigo se levantó y le dio lo que necesitaba - no porque fueran amigos, sino porque el hombre era tan persistente!',
      "Jesús usó esta historia para enseñarnos sobre la oración. Dios no es como el amigo malhumorado que no quiere ayudar. Pero Jesús quiere que entendamos que debemos seguir orando y no darnos por vencidos, incluso cuando parece que nadie está escuchando."];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=LK11_5'];
    $pasaje = ['11:5-8'];
  }

  function higueraEsteril() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Higuera Estéril';
    $imagen = '../images/_JesusChrist/barrenFigTree.webp';
    $imagenAlt = 'Ilustración de una Higuera Estéril';
    $enlaceImagen = '../images/_JesusChrist/barrenFigTree.png';
    $figLeyenda = 'La Parabola de la Higuera Estéril';
    $descripcion = "Advierte sobre las consecuencias de la infructuosidad a pesar de la paciencia de Dios";
    $dialogoParrafo = ["Jesús contó una historia sobre un hombre que tenía una higuera en su jardín que no producía higos. ¡Durante tres años enteros, el hombre vino buscando fruto pero no encontró nada!",
      'Le dijo a su jardinero que la cortara porque estaba desperdiciando espacio y suelo.',
      'Pero el jardinero pidió una oportunidad más - cavaría alrededor y le pondría abono. Si daba fruto el próximo año, ¡excelente! Si no, entonces podrían cortarla.',
      "Esta parábola nos enseña que Dios es paciente con nosotros, pero Él espera que crezcamos y cambiemos. Nos da oportunidades para ser mejores y producir 'buen fruto' en nuestras vidas, pero Su paciencia no durará para siempre.",
      'Necesitamos usar el tiempo que Él nos da para crecer y convertirnos en mejores personas.'];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=LK13_6'];
    $pasaje = ['13:6-9'];
  }

  function granBanquete() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Gran Banquete';
    $imagen = '../images/_JesusChrist/greatBanquet.webp';
    $imagenAlt = 'Ilustración de un gran banquete con asientos vacíos y sirvientes invitando a nuevos invitados';
    $enlaceImagen = '../images/_JesusChrist/greatBanquet.png';
    $figLeyenda = 'La Parabola del Gran Banquete';
    $descripcion = "Muestra cómo muchos rechazan la invitación de Dios mientras que los menos probables son bienvenidos";
    $dialogoParrafo = ['Jesús contó sobre un hombre que planeó una gran cena y envió invitaciones a muchas personas. Cuando todo estaba listo, envió a su siervo para decirles a los invitados que era hora de venir.',
      "¡Pero todos comenzaron a poner excusas! Uno dijo que había comprado un campo y tenía que ir a verlo. Otro dijo que había comprado bueyes y necesitaba probarlos. Otro dijo que se acababa de casar, así que no podía venir.",
      'El anfitrión se enojó mucho y le dijo a su siervo que fuera a las calles y trajera a los pobres, los discapacitados, los ciegos y los cojos en su lugar.',
      '¡Después de hacer esto, todavía había espacio, así que el anfitrión envió al siervo a los caminos y senderos rurales para invitar a más personas!',
      "Jesús usó esta historia para mostrar cómo muchas personas que deberían haber aceptado la invitación de Dios para ser parte de Su reino ponen excusas y se pierden. Así que Dios da la bienvenida a aquellos que la sociedad a menudo ignora o menosprecia.",
      "El punto es que la invitación de Dios es para todos, pero especialmente para aquellos que reconocen su necesidad de Él."];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=LK14_15'];
    $pasaje = ['14:15-24'];
  }

  function torreElReyYLaGuerra() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Torre y el Rey que va a la Guerra';
    $imagen = '../images/_JesusChrist/buildingTower.webp';
    $imagenAlt = 'Ilustración de una persona planificando una torre y un rey planificando para la guerra';
    $enlaceImagen = '../images/_JesusChrist/buildingTower.png';
    $figLeyenda = 'La Parabola de la Torre y de el Rey que va a la Guerra';
    $descripcion = 'Enfatiza la importancia de calcular el costo del discipulado antes de comprometerse';
    $dialogoParrafo = ['Jesús compartió dos breves historias para hacer que las personas pensaran cuidadosamente antes de decidir seguirlo.',
      'Primero, habló sobre alguien que quiere construir una torre. Un constructor inteligente se sentaría primero y calcularía cuánto costaría para asegurarse de tener suficiente dinero para terminarla. De lo contrario, podría poner los cimientos pero quedarse sin dinero, ¡y todos se burlarían de él!',
      "En la segunda historia, Jesús describió a un rey que está a punto de ir a la guerra contra otro rey. Antes de luchar, necesita averiguar si sus 10,000 soldados pueden vencer a los 20,000 soldados del otro rey. Si no, ¡mejor envía a alguien para pedir condiciones de paz!",
      'Jesús usó estos ejemplos para enseñar que seguirlo es una decisión seria. Necesitamos entender lo que nos costará - como tal vez perder amigos o enfrentar tiempos difíciles - y estar preparados para ir hasta el final, no solo comenzar y luego renunciar cuando las cosas se pongan difíciles.'];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=LK14_28'];
    $pasaje = ['14:28-33'];
  }

  function siervosInutiles() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'Los Siervos Inútiles';
    $imagen = '../images/_JesusChrist/unprofitableServants.webp';
    $imagenAlt = 'Ilustración de siervos trabajando en un campo';
    $enlaceImagen = '../images/_JesusChrist/unprofitableServants.png';
    $figLeyenda = 'La Parabola de los Siervos Inútiles';
    $descripcion = 'Enseña la humildad en el servicio, mostrando que solo cumplimos nuestro deber ante Dios';
    $dialogoParrafo = ["Jesús pidió a Sus seguidores que imaginaran que tenían un siervo que trabajaba en sus campos o cuidaba de sus ovejas. Cuando ese siervo regresa después de trabajar todo el día, ¿le diría el amo, 'Ven, siéntate y come'?",
      "¡De ninguna manera! En cambio, el amo le diría al siervo que preparara la cena, la sirviera, y solo después de que el amo terminara de comer podría el siervo comer. Y el amo no le agradecería al siervo por hacer estas cosas porque eso es simplemente lo que se supone que deben hacer los siervos.",
      "Jesús entonces dijo a Sus discípulos que deberían tener la misma actitud. Cuando hayan hecho todo lo que Dios les ha mandado hacer, no deberían esperar elogios o recompensas especiales.",
      "Simplemente deberían decir: 'Somos siervos inútiles; solo hemos hecho lo que era nuestro deber hacer.'",
      "Esto nos enseña a ser humildes cuando servimos a Dios y a los demás. No deberíamos servir para obtener atención o elogios, sino porque es lo correcto."];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=LK17_7'];
    $pasaje = ['17:7-10'];
  }

  function juezInjusto() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Juez Injusto';
    $imagen = '../images/_JesusChrist/unjustJudge.webp';
    $imagenAlt = 'Ilustración de una mujer persistente apareciendo ante un juez';
    $enlaceImagen = '../images/_JesusChrist/unjustJudge.png';
    $figLeyenda = 'La Parabola de el Juez Injusto';
    $descripcion = 'Anima a la oración persistente y a la fe hasta que Jesús regrese';
    $dialogoParrafo = ["Jesús contó esta historia para enseñar a Sus seguidores a seguir orando y nunca darse por vencidos. Había un juez en cierta ciudad que no se preocupaba por Dios ni por lo que la gente pensara de él.",
      "Una viuda en esa ciudad seguía acudiendo a él, pidiendo justicia contra alguien que le había hecho daño. Durante mucho tiempo el juez la ignoró. ¡Pero ella no dejaba de insistir!",
      "Finalmente, el juez pensó, 'Aunque no me importa Dios ni la gente, esta mujer me está volviendo loco con sus constantes peticiones. ¡Le haré justicia solo para que me deje en paz!'",
      'Jesús explicó que si incluso un juez injusto eventualmente ayuda debido a la persistencia, cuánto más Dios - quien es perfectamente bueno y nos ama - responderá a Su pueblo que ora día y noche?',
      "Pero entonces Jesús hizo una triste pregunta: '¿Cuando regrese, encontraré personas en la tierra que todavía tengan fe?' Esto nos recuerda seguir confiando en Dios y orando incluso cuando parece que Él no está respondiendo de inmediato."];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=LK18_1'];
    $pasaje = ['18:1-8'];
  }

  function ciegoGuiandoAlCiego() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Ciego Guiando al Ciego';
    $imagen = '../images/_JesusChrist/blindLeadingBlind.webp';
    $imagenAlt = 'Ilustración de dos personas ciegas donde uno está tratando de guiar al otro';
    $enlaceImagen = '../images/_JesusChrist/blindLeadingBlind.png';
    $figLeyenda = 'La Parabola de el Ciego Guiando al Ciego';
    $descripcion = 'Advierte contra seguir a maestros espiritualmente ciegos';
    $dialogoParrafo = ["Jesús hizo una pregunta muy buena: '¿Puede un ciego guiar a otro ciego?' ¡Por supuesto que no! ¡Ambos caerían en una zanja!",
      "Esta breve parábola tiene un mensaje simple pero importante. Si alguien no entiende la verdad acerca de Dios, no puede enseñar adecuadamente a otros sobre Él. Es como tratar de dar indicaciones a un lugar donde nunca has estado.",
      "Jesús estaba advirtiendo a la gente que tuviera cuidado con quién escucha y de quién aprende. Algunos maestros religiosos actúan como si lo supieran todo acerca de Dios, pero si realmente no entienden la verdad de Dios, seguirlos llevará a problemas.",
      "Jesús también enseñó que un estudiante no es mejor que su maestro - en el mejor de los casos, sabrá lo que su maestro sabe. Así que si queremos crecer en nuestro entendimiento de Dios, necesitamos asegurarnos de aprender de personas que realmente lo conocen."];
    $evangelio = ['Mateo', 'Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=MT15_14', '?t1=local%3Aspablm&w1=bible&v1=LK6_39'];
    $pasaje = ['15:14', '6:39'];
  }

  function siervoFielYSabio() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Siervo Fiel y Sabio';
    $imagen = '../images/_JesusChrist/faithfulWiseServant.webp';
    $imagenAlt = 'Illustration of a servant managing a household while the master is away';
    $enlaceImagen = '../images/_JesusChrist/faithfulWiseServant.png';
    $figLeyenda = 'La Parabola de el Siervo Fiel y Sabio';
    $descripcion = "Contrasta la administración fiel e infiel mientras se espera el regreso del señor";
    $dialogoParrafo = ['Jesús habló de un señor que puso a un siervo a cargo de su casa mientras se iba de viaje. El siervo tenía un trabajo principal - asegurarse de que todos los demás siervos fueran alimentados a tiempo.',
      "Jesús preguntó, '¿Quién es el siervo fiel y sabio en quien el señor puede confiar para hacer esto?' Un buen siervo sería encontrado haciendo su trabajo cuando el señor regresara, y el señor lo recompensaría dándole aún más responsabilidad.",
      "Pero ¿qué pasaría si el siervo fuera malo y pensara, 'Mi señor está tardando mucho en volver', y comenzara a golpear a los otros siervos y a festejar con alborotadores?",
      "¡Cuando el señor finalmente regresara en un día que el siervo no esperaba, lo castigaría severamente!",
      "Jesús estaba enseñando cómo debemos vivir mientras esperamos Su regreso. No debemos volvernos perezosos ni hacer cosas incorrectas solo porque Jesús aún no ha vuelto.",
      "En cambio, debemos hacer fielmente lo que Él nos ha pedido, cuidando a los demás y viviendo correctamente, para estar listos cuando Él regrese."];
    $evangelio = ['Mateo', 'Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=MT24_45', '?t1=local%3Aspablm&w1=bible&v1=LK12_42'];
    $pasaje = ['24:45-51', '12:42-48'];
  }

  function siervosVeladores() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'Los Siervos Veladores';
    $imagen = '../images/_JesusChrist/watchfulServants.webp';
    $imagenAlt = "Ilustración de los siervos veladores";
    $enlaceImagen = '../images/_JesusChrist/watchfulServants.png';
    $figLeyenda = 'La Parabola de los Siervos Velantes';
    $descripcion = "Enfatiza estar alerta y preparado para el regreso de Cristo";
    $dialogoParrafo = ['Jesús dijo a Sus seguidores que fueran como siervos esperando a que su señor regrese de una fiesta de bodas. Estos buenos siervos estarían vestidos y listos para actuar, con sus lámparas encendidas incluso tarde en la noche. Cuando el señor llamara a la puerta, podrían abrirle inmediatamente.',
      '¡El señor estaría tan contento con estos siervos vigilantes que haría algo asombroso - los haría sentarse mientras él les servía una comida!',
      "Jesús también comparó Su regreso con un ladrón entrando en una casa por la noche - no sabes exactamente cuándo sucederá, así que necesitas estar preparado todo el tiempo.",
      'En otra versión de esta enseñanza, Jesús describió a un hombre que se va de viaje y pone a sus siervos a cargo de su casa, dando a cada uno un trabajo que hacer. El portero especialmente necesita permanecer despierto y vigilante porque nadie sabe cuándo regresará el señor - por la tarde, a medianoche, cuando cante el gallo, o al amanecer.',
      "Jesús nos estaba enseñando a vivir de manera que estaríamos felices de que Él nos encuentre en cualquier momento - no haciendo cosas incorrectas o siendo perezosos, sino haciendo activamente lo que Él nos ha pedido que hagamos."];
    $evangelio = ['Marcos', 'Lucas'];
    $enlaceEvangelio = ['?v1=MK13_34&w1=bible&t1=local%3Aspablm', '?t1=local%3Aspablm&w1=bible&v1=LK12_35'];
    $pasaje = ['13:34-37', '12:35-40'];
  }

  function ninhosEnLaPlaza() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'Los Niños en la Plaza';
    $imagen = '../images/_JesusChrist/childrenMarketplace.webp';
    $imagenAlt = 'Ilustración de niños jugando en la plaza mientras otros se niegan a unirse';
    $enlaceImagen = '../images/_JesusChrist/childrenMarketplace.png';
    $figLeyenda = 'La Parabola de los Niños en la Plaza';
    $descripcion = 'Ilustra las críticas inconsistentes que recibieron Jesús y Juan el Bautista';
    $dialogoParrafo = ["Jesús notó cómo la gente nunca estaba satisfecha con los mensajeros de Dios, sin importar lo que hicieran. Los comparó con niños sentados en la plaza llamando a otros niños: '¡Tocamos música de boda para ustedes, pero no bailaron! ¡Tocamos música fúnebre, pero no lloraron!'",
      "Luego Jesús explicó lo que quería decir. Juan el Bautista vino viviendo muy estrictamente - sin beber vino y apenas comiendo - y la gente decía: '¡Está loco! ¡Tiene un demonio!'",
      "Luego vino Jesús, disfrutando de comida y vino en fiestas con todo tipo de personas, y los mismos críticos decían: '¡Mírenlo! ¡Come demasiado, bebe demasiado y anda con recaudadores de impuestos y pecadores!'",
      "Jesús estaba señalando cómo algunas personas estaban simplemente decididas a encontrar faltas sin importar qué. Estos críticos no estaban siendo honestos ni justos - simplemente no querían escuchar el mensaje de Dios, así que ponían excusas sobre los mensajeros.",
      "Pero Jesús dijo que la sabiduría se demuestra por sus resultados - tanto Su camino como el de Juan eran parte del plan de Dios y produjeron buenos frutos en las vidas de quienes realmente escucharon."];
    $evangelio = ['Mateo', 'Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=MT11_16', '?t1=local%3Aspablm&w1=bible&v1=LK7_31'];
    $pasaje = ['11:16-19', '7:31-35'];
  }

  function pajaYViga() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Paja y la Viga';
    $imagen = '../images/_JesusChrist/speckAndLog.webp';
    $imagenAlt = "Ilustración de una persona con una viga en su ojo intentando eliminar una paja de otro ojo";
    $enlaceImagen = '../images/_JesusChrist/speckAndLog.png';
    $figLeyenda = 'La Parabola de la Paja y la Viga';
    $descripcion = 'Advierte contra el juicio hipócrita hacia los demás';
    $dialogoParrafo = ["Jesús usó una imagen graciosa para enseñar sobre juzgar a otros. Preguntó: '¿Por qué te fijas en la pequeña paja en el ojo de tu amigo, pero ignoras completamente la enorme viga que sobresale de tu propio ojo?'",
      '¡Imagina tratar de ayudar a alguien a quitarse una pequeña partícula de polvo del ojo cuando tú tienes una enorme viga de madera saliendo del tuyo!',
      "Jesús llamó 'hipócritas' a las personas que hacen esto - gente que critica a otros por pequeños errores mientras ignoran sus propios grandes problemas.",
      "Dijo que primero deberíamos sacar la viga de nuestro propio ojo (arreglar nuestros propios problemas importantes), y entonces podremos ver con claridad para ayudar a otros con sus problemas menores.",
      "Esto no significa que nunca debamos ayudar a otros a mejorar - significa que necesitamos ser honestos sobre nuestros propios defectos primero. Debemos ocuparnos de nuestros propios errores antes de señalar con el dedo a los demás.",
      'Jesús quiere que nos ayudemos mutuamente a crecer, pero con humildad y autoconciencia, no con una actitud crítica.'];
    $evangelio = ['Mateo', 'Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=MT7_3', '?t1=local%3Aspablm&w1=bible&v1=LK6_41'];
    $pasaje = ['7:3-5', '6:41-42'];
  }

  function redDePescar() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Red de Pescar';
    $imagen = '../images/_JesusChrist/fishNet.webp';
    $imagenAlt = 'Ilustración de pescadores seleccionando peces buenos de los malos';
    $enlaceImagen = '../images/_JesusChrist/fishNet.png';
    $figLeyenda = 'La Parabola de la Red de Pescar';
    $descripcion = 'Describe la separación final de los justos y los malvados';
    $dialogoParrafo = ["Jesús dijo que el reino de Dios es como una gran red de pesca que fue lanzada al lago y atrapó todo tipo de peces. Cuando estuvo llena, los pescadores la sacaron a la orilla.",
      'Entonces se sentaron y separaron los peces buenos en contenedores, pero tiraron los malos.',
      'Jesús explicó que así será al fin del mundo. Los ángeles vendrán y separarán a las personas malvadas de las justas, y arrojarán a los malvados a un horno de fuego, donde habrá llanto y crujir de dientes.',
      "Esta parábola enseña que ahora mismo, tanto las personas que verdaderamente siguen a Dios como las que no, están mezcladas en el mundo - igual que diferentes tipos de peces en la misma red. Pero llegará un tiempo en que Dios separará a todos.",
      "Es un recordatorio serio de que nuestras decisiones ahora sobre si seguir a Jesús o no tienen grandes consecuencias para nuestro futuro. Jesús quiere que todos seamos contados entre los 'peces buenos' al creer en Él y vivir de acuerdo con Sus enseñanzas."];
    $evangelio = ['Mateo'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=MT13_47'];
    $pasaje = ['13:47-50'];
  }

  function amoDeLaCasa() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Dueño de la Casa';
    $imagen = '../images/_JesusChrist/householder.webp';
    $imagenAlt = 'Ilustración de un dueño de casa que saca tesoros del almacén';
    $enlaceImagen = '../images/_JesusChrist/householder.png';
    $figLeyenda = 'El Dueño de la Casa';
    $descripcion = 'Compara a un maestro de las escrituras con un dueño de casa que saca tesoros nuevos y viejos';
    $dialogoParrafo = ["Después de enseñar varias parábolas sobre el reino de Dios, Jesús preguntó a Sus discípulos si habían entendido todo lo que dijo. Cuando respondieron que sí, les dio una comparación más corta.",
      'Dijo que todo maestro de la ley religiosa que se ha hecho discípulo del reino de los cielos es como el dueño de una casa que saca de su almacén tesoros nuevos y viejos.',
      "Esta mini-parábola trata sobre cómo los seguidores de Jesús deben enseñar a otros. Un buen maestro no se limita solo a ideas viejas y familiares ni persigue únicamente las nuevas tendencias.",
      "En cambio, son como alguien que ha recolectado cosas valiosas a lo largo del tiempo - algunas viejas, algunas nuevas - y sabe cuándo compartir cada una.",
      '¡Jesús estaba diciendo a Sus discípulos que debían usar tanto la sabiduría atesorada de las escrituras del Antiguo Testamento COMO las nuevas enseñanzas que Él les estaba dando. Ambas son valiosas!',
      "Esto nos enseña que debemos apreciar la sabiduría tradicional mientras permanecemos abiertos a nuevas perspectivas sobre la verdad de Dios."];
    $evangelio = ['Mateo'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=MT13_52'];
    $pasaje = ['13:52'];
  }

  function mayordomoDeshonesto() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Mayordomo Deshonesto';
    $imagen = '../images/_JesusChrist/dishonestManager.webp';
    $imagenAlt = 'Ilustración de un mayordomo que reduce las deudas ante su amo';
    $enlaceImagen = '../images/_JesusChrist/dishonestManager.png';
    $figLeyenda = 'La Parabola del Mayordomo Deshonesto';
    $descripcion = 'Enseña el uso astuto de los recursos mundanos para propósitos eternos';
    $dialogoParrafo = ["Jesús contó una de Sus historias más sorprendentes sobre un mayordomo que estaba a punto de ser despedido por desperdiciar el dinero de su rico patrón.",
      "Al darse cuenta de que pronto estaría desempleado, el mayordomo rápidamente llamó a las personas que debían dinero a su amo y redujo sus deudas - rebajando una factura de 800 galones de aceite de oliva a 400, y otra de 1,000 fanegas de trigo a 800. Hizo esto para que estas personas lo recibieran en sus casas después de que perdiera su trabajo.",
      "¡Lo extraño es que cuando el hombre rico se enteró, en realidad elogió al mayordomo deshonesto por ser tan astuto!",
      "Jesús no estaba diciendo que debemos ser deshonestos. En cambio, señaló que 'los hijos de este mundo son más astutos en el trato con los suyos que los hijos de la luz.'",
      "Luego Jesús dio la verdadera lección: debemos usar nuestro dinero ('riquezas injustas') para ayudar a otros y hacer amigos, para que cuando el dinero terrenal se acabe, estas personas nos reciban en las 'moradas eternas' (el cielo).",
      "Jesús estaba enseñando que debemos ser al menos tan inteligentes en el uso de nuestros recursos para propósitos eternos como lo son las personas deshonestas al usar el dinero para su beneficio temporal en la tierra."];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=LK16_1'];
    $pasaje = ['16:1-9'];
  }

  function buenPastor() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Buena Pastor';
    $imagen = '../images/_JesusChrist/goodShepherd.webp';
    $imagenAlt = 'Ilustración de un pastor que protege a sus ovejas';
    $enlaceImagen = '../images/_JesusChrist/goodShepherd.png';
    $figLeyenda = 'La Parabola del Buena Pastor';
    $descripcion = 'Representa a Jesús como el pastor que conoce, protege y da su vida por sus ovejas';
    $dialogoParrafo = ["Jesús se describió a sí mismo como el Buen Pastor que realmente cuida de Sus ovejas. A diferencia de un trabajador contratado que huye cuando vienen los lobos porque las ovejas no le pertenecen realmente, Jesús da Su vida para proteger a Sus ovejas.",
      "Él explicó que conoce a Sus ovejas personalmente, y ellas conocen Su voz. Cuando Él llama, lo siguen porque lo reconocen y confían en Él, pero huyen de extraños cuyas voces no conocen.",
      "Jesús también dijo que tiene 'otras ovejas' (refiriéndose a creyentes no judíos) que también formarán parte de Su único rebaño bajo un solo pastor.",
      'La parte más asombrosa es cuando Jesús dijo que nadie lo obliga a morir por Sus ovejas - Él elige entregar Su vida voluntariamente, y tiene el poder para tomarla de nuevo.',
      'Esta hermosa imagen nos enseña que Jesús nos ama personalmente, nos protege, nos guía y hizo el sacrificio máximo por nosotros.',
      'También muestra que Jesús no es solo una buena persona o maestro - Él reclamó la autoridad para entregar Su vida y tomarla de nuevo, algo que solo Dios podría hacer.'];
    $evangelio = ['Juan'];
    $enlaceEvangelio = ['?v1=JN10_1&w1=bible&t1=local%3Aspablm'];
    $pasaje = ['10:1-18'];
  }

  function vidYLosSarmientos() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'La Vid y los Sarmientos';
    $imagen = '../images/_JesusChrist/vineAndBranches.webp';
    $imagenAlt = 'Ilustración de una vid con ramas que producen frutos';
    $enlaceImagen = '../images/_JesusChrist/vineAndBranches.png';
    $figLeyenda = 'La Parabola de la Vid y los Sarmientos';
    $descripcion = 'Ilustra la necesidad de permanecer conectado a Jesús para dar fruto espiritual';
    $dialogoParrafo = ["Jesús usó una imagen que Sus seguidores entenderían fácilmente - una vid. Él dijo, 'Yo soy la vid verdadera, y mi Padre es el jardinero.' Explicó que Dios quita las ramas que no dan fruto, pero poda (recorta) las fructíferas para que produzcan aún más.",
      "Entonces Jesús dijo a Sus discípulos la parte más importante: 'Permaneced en mí, y yo en vosotros. Como el pámpano no puede llevar fruto por sí mismo, si no permanece en la vid, así tampoco vosotros, si no permanecéis en mí.' Así como una rama no puede producir uvas si está separada de la vid, no podemos vivir vidas verdaderamente buenas y significativas si estamos desconectados de Jesús.",
      "Él dijo, 'Separados de mí nada podéis hacer.' Jesús también advirtió que las ramas que no permanecen conectadas son arrojadas, se secan y son quemadas.",
      '¡Pero también dio una promesa asombrosa: si permanecemos conectados a Él y Sus palabras permanecen en nosotros, podemos pedir lo que queramos, y nos será concedido!',
      "El 'fruto' del que Jesús habló incluye cosas como amor, gozo, paz, paciencia y bondad - las buenas cualidades que naturalmente crecen en nuestras vidas cuando permanecemos cerca de Él."];
    $evangelio = ['Juan'];
    $enlaceEvangelio = ['?v1=JN15_1&w1=bible&t1=local%3Aspablm'];
    $pasaje = ['15:1-8'];
  }

  function amoYSiervo() {
    global $titulo, $imagen, $imagenAlt, $enlaceImagen, $figLeyenda, $descripcion, $dialogoParrafo, $evangelio, $enlaceEvangelio, $pasaje;
    $titulo = 'El Maestro y el Siervo';
    $imagen = '../images/_JesusChrist/masterAndServant.webp';
    $imagenAlt = 'Ilustración de un siervo que trabaja en un campo y luego sirve a su amo en la mesa';
    $enlaceImagen = '../images/_JesusChrist/masterAndServant.png';
    $figLeyenda = 'La Parabola del Maestro y el Siervo';
    $descripcion = 'Muestra la relación correcta entre Dios y sus siervos';
    $dialogoParrafo = ["Jesús pidió a Sus discípulos que imaginaran que tenían un siervo que había estado arando campos o cuidando ovejas todo el día. Cuando ese siervo regresaba del campo, ¿algún amo le diría: 'Ven y siéntate a comer'?",
      "¡De ninguna manera! En cambio, el amo diría: 'Prepárame la cena, sírveme mientras como y bebo, y después tú podrás comer y beber'. Y el amo no le agradecería al siervo por simplemente hacer lo que se suponía que debía hacer.",
      'Jesús entonces dijo a Sus seguidores que deberían tener la misma actitud al servir a Dios: \'Cuando hayan hecho todo lo que se les ordenó hacer, deberían decir: "Somos siervos indignos; solo hemos cumplido con nuestro deber."\'',
      "Esta parábola nos enseña humildad en nuestra relación con Dios. No deberíamos servir a Dios esperando alabanzas especiales o pensando que merecemos recompensas. Todo lo que tenemos ya viene de Dios, así que cuando lo servimos, simplemente estamos haciendo lo que debemos hacer.",
      "Esto no significa que Dios no aprecie nuestro servicio - otras enseñanzas muestran que Él sí recompensa la fidelidad. Pero nos recuerda que nuestra actitud debe ser de humilde gratitud por el privilegio de servirle, no de orgullo o un sentimiento de que Dios nos debe algo."];
    $evangelio = ['Lucas'];
    $enlaceEvangelio = ['?t1=local%3Aspablm&w1=bible&v1=LK17_7'];
    $pasaje = ['17:7-10'];
  }
    ?>
   </article>
    <?php
    content();
}// función parabolas() {bracket termina aqui}
include './anvil/structure.php';
?>