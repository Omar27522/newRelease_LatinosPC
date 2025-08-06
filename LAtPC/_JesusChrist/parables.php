<?php
function content () {
  global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
  global $introduction, $_JesusChrist, $list, $bible;
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
          <li><?= $introduction[$list][0];?></li>
          <li><?= $introduction[$list][1];?></li>
          <li><?= $introduction[$list][2];?></li>
          <li><?= $introduction[$list][3];?></li>
          <li><?= $introduction[$list][4];?></li>
      </ul>
    </div>
    <h2 class="section-title"><?= !empty ($_JesusChrist) ? $_JesusChrist[1] : $_Jesucristo[1]; ?></h2>
    <table>
      <tr>
        <th><?= $introduction[0];?></th>
        <th><?= $introduction[1];?></th>
        <th><?= $introduction[2];?>
          <span style="float:right;margin-right:10%;">
            <a href="<?= $bible[0];?>" title="<?= $bible[1];?>" style="color:white;"><ruby>
              [1] <rt> <?= $bible[2];?> </rt></ruby>
            </a>
          </span>
          </th>
      </tr>
        <?php
  $parableFunctions = ['theSower', 'mustardSeed', 'leavenedFlour', 'hiddenTreasure', 'pearlOfGreatPrice', 'dragnet', 'goodSamaritan', 'prodigalSon', 'lostSheep', 'lostCoin', 'unmercifulServant', 'workersInVineyard', 'richManAndLazarus', 'phariseeAndTaxCollector', 'persistentWidow', 'tenVirgins', 'talents', 'parableSheepAndGoats', 'parableTwoDebtors', 'parableUnfruitfulFigTree', 'parableWickedTenants', 'parableWeddingFeast', 'parableRichFool', 'wiseAndFoolishBuilders', 'growingSeed', 'newClothOnOldGarment', 'newWineInOldWineskins', 'lampOnStand', 'twoSons', 'unjustSteward', 'friendAtMidnight', 'barrenFigTree', 'greatBanquet', 'buildingTowerAndKingGoingToWar', 'unprofitableServants', 'unjustJudge', 'blindLeadingTheBlind', 'faithfulAndWiseServant', 'watchfulServants', 'childrenInTheMarketplace', 'speckAndLog', 'fishNet', 'householder', 'dishonestManager', 'goodShepherd', 'vineAndBranches', 'masterAndServant'];
  foreach ($parableFunctions as $functionTableRow) {
    // Call the current function
    $functionTableRow();
    /* The code below is the Main Table row the loop will iterate over each function */
    ?>
        <tr>
        <td>
            <div class="multi-link-container" >
              <span class="linked-text" ><?= $title; ?></span>
                <div class="link-dialog" >
                  <figure>
                      <img src="<?= $image; ?>" alt="<?= $imageAlt; ?>">
                      <figcaption><a href="<?= $linked_image; ?>"><?= $figCaption; ?></a></figcaption>
                  </figure>
                </div>
            </div>
            </td>

              <td>
            <div class="multi-link-container">
              <span tabindex="0" class="linked-text"><?= $description; ?></span>
              <div class="link-dialog">
                <?php
                echo '<h2 class="section-title" style="box-shadow:none;">'.$title.'</h2>';
                foreach ($paragraphDialogs as $index) {
                  echo '<p tabindex="0">' . $index . '</p>';
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
    <?php
  }
  ?>
    </table>
  </article>
  <?php
}

function parables() {

  global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
  global $introduction, $_JesusChrist, $list, $bible;

  $_JesusChrist = [ 'Jesus in the Gospels',
                    'Jesus actively interacts with a wide range of people, using parables as a key tool to communicate His message in a way that everyone could understand by the use of mental illustrations.'];
  $introduction =  [
            $list => ['The parables were Universally accessible by using every day scenarios, Jesus made complex spiritual concepts understandable to both educated scholars and illiterate laborers.',
                      'The use of parables was culturally relevant by using the agricultural and domestic settings of these stories resonated with his audience\'s daily experiences in the 1st century.',
                      'The multiple layers of meaning often contained surface-level stories that anyone could grasp, while offering deeper theological insights to those willing to contemplate them further.',
                      'The narrative structure of parables made them easier to remember and share than abstract theological concepts.',
                      'Rather than forcing interpretations, parables invited listeners to discover meaning for themselves, engaging their minds and hearts in the process.',
                     ], 'Parable', 'Description', 'Scripture Reference','Bible'
          ];
  $bible = ['https://ebible.org/find/show.php?id=eng-web', 'World English Bible with Deuterocanon', 'Bible'];

  function theSower()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
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

  function mustardSeed()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
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

  function leavenedFlour()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
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

  function hiddenTreasure()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Hidden Treasure';
    $image = '../images/_JesusChrist/hiddenTreasure.webp';
    $imageAlt = 'The Hidden Treasure Parable';
    $linked_image = '../images/_JesusChrist/hiddenTreasure.png';
    $figCaption = 'The Parable of the Hidden Treasure';
    $description = "Reveals the supreme value of God's kingdom, worth sacrificing everything to obtain";
    $paragraphDialogs = [
      "Jesus told a story about a man who was walking through someone else's field. While he was walking, he found a treasure that was hidden in the ground!",
      'The man was super excited about finding this treasure. He covered it back up really quick so nobody else would find it.',
      "Then he went and sold everything he owned - like all his stuff! That's how badly he wanted this treasure.",
      'With all the money he got from selling his things, he bought the field where the treasure was hidden. Now the treasure was all his!',
      "Jesus was teaching that God's kingdom is like that treasure. When people realize how amazing God's kingdom is, they'll be willing to give up everything else just to be part of it. It's that valuable!"
    ];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT13_44&t1=local%3Aeng-web&w1=bible'];
    $passage = ['13:44'];
  }

  function pearlOfGreatPrice()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Pearl of Great Price';
    $image = '../images/_JesusChrist/pearlOfGreatPrice.webp';
    $imageAlt = 'The Pearl of Great Price Parable';
    $linked_image = '../images/_JesusChrist/pearlOfGreatPrice.png';
    $figCaption = 'The Parable of the Pearl of Great Price';
    $description = "Similar to the Hidden Treasure, emphasizes the kingdom's incomparable worth";
    $paragraphDialogs = [
      'Jesus told a story about a merchant, which is like a businessman who buys and sells valuable things. This merchant was looking for beautiful pearls to sell.',
      'One day, he found an amazing pearl - the most perfect and valuable pearl he had ever seen in his whole life!',
      'The merchant wanted this special pearl so badly that he went and sold absolutely everything he owned just to get enough money to buy it.',
      "Jesus was showing us that God's kingdom is like that perfect pearl. When we truly understand how amazing God's kingdom is, we'll think it's worth giving up everything else we have just to be part of it!"
    ];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT13_45&t1=local%3Aeng-web&w1=bible'];
    $passage = ['13:45-46'];
  }

  function dragnet()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Dragnet';
    $image = '../images/_JesusChrist/dragnet.webp';
    $imageAlt = 'The Dragnet Parable';
    $linked_image = '../images/_JesusChrist/dragnet.png';
    $figCaption = 'The Parable of the Dragnet';
    $description = 'Describes the final judgment when the righteous will be separated from the wicked';
    $paragraphDialogs = [
      'Jesus told a story about some fishermen who threw a big net into the lake. The net caught all kinds of fish - good ones and bad ones all mixed together.',
      'When the net was full, the fishermen pulled it up onto the shore. Then they sat down and began sorting through all the fish.',
      'They put the good fish into baskets to keep, but they threw the bad fish away because nobody would want to eat those.',
      'Jesus said this is like what will happen at the end of the world. Angels will separate good people from bad people, just like the fishermen separated good fish from bad fish.',
      "The bad people will be thrown away into a fiery furnace where there will be crying and lots of sadness. But the good people, who follow God, will shine like the sun in God's kingdom!"
    ];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT13_47&t1=local%3Aeng-web&w1=bible'];
    $passage = ['13:47-50'];
  }

  function goodSamaritan()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Good Samaritan';
    $image = '../images/_JesusChrist/goodSamaritan.webp';
    $imageAlt = 'The Good Samaritan Parable';
    $linked_image = '../images/_JesusChrist/goodSamaritan.png';
    $figCaption = 'The Parable of the Good Samaritan';
    $description = "Teaches about loving one's neighbor through the story of an unlikely hero helping a wounded stranger";
    $paragraphDialogs = [
      'Jesus told a story about a Jewish man who was traveling on a road from Jerusalem to Jericho. While he was traveling, some robbers attacked him! They beat him up, took all his stuff, and left him hurt really badly on the side of the road.',
      "A priest (that's like a church leader) came walking down the same road. But when he saw the hurt man, he just crossed to the other side of the road and kept on walking!",
      'Then another religious leader called a Levite came by. He also saw the hurt man, but he did the same thing - he just walked on by without helping!',
      "Finally, a Samaritan man came down the road. Now, Samaritans and Jews usually didn't like each other at all. But when this Samaritan saw the hurt Jewish man, he felt sorry for him.",
      "The Samaritan cleaned and bandaged the man's wounds. Then he put the hurt man on his own donkey and took him to an inn, which is like a hotel. The Samaritan even paid the innkeeper to take care of the hurt man until he got better!",
      'After telling this story, Jesus asked. Who was a real neighbor to the man who got hurt? The answer was the Samaritan - the one who showed kindness and mercy. Jesus told us to go and do the same thing - to show love to everyone, even people who might be different from us.'
    ];
    $gospel = ['Luke'];
    $gospelLinks = ['?w1=bible&t1=local%3Aeng-web&v1=LK10_25'];
    $passage = ['10:25-37'];
  }

  function prodigalSon()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Prodigal Son';
    $image = '../images/_JesusChrist/prodigalSon.webp';
    $imageAlt = 'The Prodigal Son Parable';
    $linked_image = '../images/_JesusChrist/prodigalSon.png';
    $figCaption = 'The Parable of the Prodigal Son';
    $description = "Illustrates God's forgiveness and the joy of reconciliation through a father welcoming back his wayward son";
    $paragraphDialogs = [
      "Jesus told a story about a father who had two sons. The younger son asked his father for his share of the family money, even though his father wasn't dead yet! This was super disrespectful, but the father gave him the money anyway.",
      'The younger son took all that money and moved far away from home. There, he wasted all his money on wild parties and doing whatever he wanted. He was having fun for a while, but then he ran out of money completely!',
      "Right at that time, there was a terrible famine in that country, which means there wasn't enough food. The son got so desperate and hungry that he took a job feeding pigs. He was so hungry that he even wanted to eat the gross pig food!",
      'Finally, the son realized how badly he had messed up. He thought, "Even my father\'s servants have plenty of food, and here I am starving!" So he decided to go back home and beg his father to let him be just a servant.',
      'But while the son was still a long way off, his father saw him coming. Instead of being angry, the father ran to his son, hugged him, and kissed him! The son started to apologize, but the father was already calling for a celebration.',
      'The father gave his son a fancy robe, a ring, and sandals. Then he threw a big party because his son who had been "dead" was now alive again; his son who had been lost was now found!',
      'The older brother got mad about this party. He complained that he had always obeyed his father, but never got a party. The father explained that everything he had already belonged to the older son, but they needed to celebrate because the lost brother had returned.',
      'Jesus told this story to show how much God loves us and is ready to forgive us. Like the father in the story, God eagerly waits for us to come back to Him when we mess up, and He celebrates when we do!'
    ];
    $gospel = ['Luke'];
    $gospelLinks = ['?v1=LK15_11&t1=local%3Aeng-web&w1=bible'];
    $passage = ['15:11-32'];
  }

  function lostSheep()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Lost Sheep';
    $image = '../images/_JesusChrist/lostSheep.webp';
    $imageAlt = 'The Lost Sheep Parable';
    $linked_image = '../images/_JesusChrist/lostSheep.png';
    $figCaption = 'The Parable of the Lost Sheep';
    $description = "Shows God's concern for each individual through a shepherd seeking one lost sheep";
    $paragraphDialogs = [
      'Jesus told a story about a shepherd who had 100 sheep. Shepherds take care of sheep and protect them from wild animals and danger.',
      'One day, the shepherd noticed that one of his sheep was missing! What do you think he did? He left the 99 other sheep in a safe place and went searching for that one lost sheep.',
      'When the shepherd finally found his lost sheep, he was so happy! He put the sheep on his shoulders and carried it all the way home.',
      'The shepherd was so excited about finding his lost sheep that he called all his friends and neighbors together for a celebration!',
      "Jesus explained that this is how God feels about people who are lost and then found. He said there's more joy in heaven over one lost person who turns back to God than over 99 people who are already following God.",
      "This story shows that God cares about every single person. Just like the shepherd wasn't willing to lose even one sheep, God doesn't want to lose any of us. He will come looking for us when we wander away!"
    ];
    $gospel = ['Matthew', 'Luke'];
    $gospelLinks = ['?w1=bible&t1=local%3Aeng-web&v1=MT18_12', '?w1=bible&t1=local%3Aeng-web&v1=LK15_1'];
    $passage = ['18:12-14,', '15:1-7'];
  }

  function lostCoin()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Lost Coin';
    $image = '../images/_JesusChrist/lostCoin.webp';
    $imageAlt = 'The Lost Coin Parable';
    $linked_image = '../images/_JesusChrist/lostCoin.png';
    $figCaption = 'The Parable of the Lost Coin';
    $description = 'Emphasizes the value God places on finding those who are lost';
    $paragraphDialogs = [
      'Jesus told a story about a woman who had ten silver coins. These coins were very important to her.',
      'One day, she realized that one of her coins was missing! She was so worried about finding it that she lit a lamp, swept the whole house, and searched carefully everywhere until she found it.',
      'When she finally found her lost coin, she was super happy! She called all her friends and neighbors together and said, "Come celebrate with me because I\'ve found my lost coin!"',
      "Jesus explained that this is how God and the angels feel when one person who was doing wrong turns back to God. There's a big celebration in heaven!",
      'This story teaches us that God values each person so much. Just like the woman searched hard for one coin, God seeks out people who are lost. And just like she celebrated finding her coin, God celebrates when someone comes back to Him!'
    ];
    $gospel = ['Luke'];
    $gospelLinks = ['?w1=bible&t1=local%3Aeng-web&v1=LK15_8'];
    $passage = ['15:8-10'];
  }

  function unmercifulServant()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Unmerciful Servant';
    $image = '../images/_JesusChrist/unmercifulServant.webp';
    $imageAlt = 'The Unmerciful Servant Parable';
    $linked_image = '../images/_JesusChrist/unmercifulServant.png';
    $figCaption = 'The Parable of the Unmerciful Servant';
    $description = "Teaches about forgiveness by contrasting a king's mercy with a servant's harshness";
    $paragraphDialogs = [
      'Jesus told a story about a king who wanted to settle accounts with his servants. One servant was brought to him who owed the king millions of dollars - way more money than the servant could ever pay back!',
      'The king ordered that the servant and his whole family should be sold as slaves to pay back some of the debt. The servant fell on his knees and begged, "Please be patient with me, and I will pay back everything!"',
      'The king felt sorry for the servant and did something amazing - he canceled the whole debt! He let the servant go free without having to pay back anything at all!',
      'But then that same servant went out and found a fellow servant who owed him just several hundred dollars. He grabbed him, started choking him, and demanded, "Pay back what you owe me!"',
      'The fellow servant begged for patience, just like the first servant had done with the king. But the first servant refused to show mercy. He had the man thrown into prison until he could pay the debt.',
      'When the other servants saw what happened, they were really upset. They went and told the king everything. The king called the first servant back and said, "You wicked servant! I canceled all that debt because you begged me to. Shouldn\'t you have had mercy on your fellow servant just as I had on you?"',
      'The angry king then handed the unmerciful servant over to the jailers to be punished until he could pay back all he owed.',
      "Jesus ended by saying that this is how God will treat us if we don't forgive others from our heart. The story teaches us that since God has forgiven us so much, we should also be willing to forgive others when they do wrong to us."
    ];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT18_21&t1=local%3Aeng-web&w1=bible'];
    $passage = ['18:21-35'];
  }

  function workersInVineyard()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Workers in the Vineyard';
    $image = '../images/_JesusChrist/workersInVineyard.webp';
    $imageAlt = 'The Workers in the Vineyard Parable';
    $linked_image = '../images/_JesusChrist/workersInVineyard.png';
    $figCaption = 'The Parable of the Workers in the Vineyard';
    $description = "Reveals God's generosity and grace that defies human expectations of fairness";
    $paragraphDialogs = [
      'Jesus told a story about a landowner who needed workers for his vineyard. Early in the morning, around 6 AM, he went out and hired some workers. He agreed to pay them a denarius for the day, which was the normal daily wage.',
      'Later that morning, around 9 AM, the landowner saw more people standing in the marketplace with nothing to do. He told them, "You also go and work in my vineyard, and I will pay you whatever is right." So they went.',
      'The landowner did the same thing at noon, at 3 PM, and even at 5 PM when the workday was almost over! Each time, he sent more workers into his vineyard.',
      'When evening came, it was time to pay all the workers. The landowner told his manager to call the workers and pay them, starting with the ones who were hired last.',
      "The workers who were hired at 5 PM came first. Surprisingly, each of them received a full denarius - a whole day's wage! When the workers who were hired first saw this, they got excited thinking they would get even more.",
      'But when their turn came, they also received one denarius each - exactly what they had agreed to at the beginning of the day. They started complaining to the landowner, "These people who were hired last worked only one hour, but you\'ve paid them the same as us who worked all day in the hot sun!"',
      "The landowner replied to one of them, \"Friend, I'm not being unfair to you. Didn't you agree to work for a denarius? Take your pay and go. I want to give the one who was hired last the same as I gave you. Don't I have the right to do what I want with my own money? Or are you envious because I am generous?\"",
      "Jesus ended by saying, \"So the last will be first, and the first will be last.\" This story teaches us that God's way of rewarding people isn't based on how long or how much they work. Instead, God is generous and gives good gifts to everyone who follows Him, whether they've been following Him their whole life or just started recently."
    ];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT20_1&t1=local%3Aeng-web&w1=bible'];
    $passage = ['20:1-16'];
  }

  function richManAndLazarus()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Rich Man and Lazarus';
    $image = '../images/_JesusChrist/richManAndLazarus.webp';
    $imageAlt = 'The Rich Man and Lazarus Parable';
    $linked_image = '../images/_JesusChrist/richManAndLazarus.png';
    $figCaption = 'The Parable of the Rich Man and Lazarus';
    $description = 'Warns about the dangers of wealth and ignoring those in need';
    $paragraphDialogs = [
      'Jesus told a story about a rich man who lived in luxury every day. He wore expensive purple clothes and fine linen, and he feasted on delicious food all the time.',
      "At the rich man's gate was a poor beggar named Lazarus. His body was covered with sores, and he was so hungry that he wished he could eat just the crumbs that fell from the rich man's table. Even dogs came and licked his sores. The rich man didn't help Lazarus at all.",
      "Eventually, both men died. Lazarus was carried by angels to Abraham's side in heaven. The rich man went to Hades, where he was in terrible pain.",
      'The rich man looked up and saw Abraham far away with Lazarus by his side. He called out, "Father Abraham, have mercy on me! Send Lazarus to dip the tip of his finger in water and cool my tongue, because I\'m suffering in this fire."',
      'But Abraham replied, "Son, remember that in your lifetime you received good things, while Lazarus received bad things. Now he is comforted here, and you are in agony. Besides, there\'s a huge gap between us that nobody can cross."',
      'The rich man then begged Abraham to send Lazarus to warn his five brothers so they wouldn\'t end up in the same painful place. Abraham said, "They have Moses and the Prophets; let them listen to them."',
      'The rich man argued, "No, father Abraham, but if someone from the dead goes to them, they will repent!" Abraham responded, "If they don\'t listen to Moses and the Prophets, they won\'t be convinced even if someone rises from the dead."',
      'Jesus told this story to warn people about the dangers of focusing on wealth and comfort while ignoring those in need. The story teaches us that how we treat others, especially people who are poor or suffering, matters a lot to God.'
    ];
    $gospel = ['Luke'];
    $gospelLinks = ['?w1=bible&t1=local%3Aeng-web&v1=LK16_19'];
    $passage = ['16:19-31'];
  }

  function phariseeAndTaxCollector()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Pharisee and the Tax Collector';
    $image = '../images/_JesusChrist/phariseeAndTaxCollector.webp';
    $imageAlt = 'The Pharisee and the Tax Collector Parable';
    $linked_image = '../images/_JesusChrist/phariseeAndTaxCollector.png';
    $figCaption = 'The Parable of the Pharisee and the Tax Collector';
    $description = 'Contrasts self-righteous pride with humble repentance in prayer';
    $paragraphDialogs = [
      'Jesus told a story about two men who went to the temple to pray. One was a Pharisee, which is like a religious leader who followed all the rules really carefully. The other was a tax collector, which most people disliked because tax collectors often cheated people.',
      'The Pharisee stood up by himself and prayed, "God, I thank you that I\'m not like other people—robbers, evildoers, adulterers—or even like this tax collector. I fast twice a week and give a tenth of all I get." He was basically bragging about how good he was!',
      'But the tax collector stood at a distance. He wouldn\'t even look up to heaven. Instead, he beat his chest and said, "God, have mercy on me, a sinner." He knew he had done wrong things and was asking God to forgive him.',
      'Jesus said that it was actually the tax collector, not the Pharisee, who went home right with God! Then Jesus explained, "For all those who make themselves important will become unimportant, and those who humble themselves will become important."',
      "This story teaches us that God doesn't want us to be proud or to think we're better than other people. Instead, God wants us to be honest about our mistakes and to ask for His forgiveness with a humble heart."
    ];
    $gospel = ['Luke'];
    $gospelLinks = ['?w1=bible&t1=local%3Aeng-web&v1=LK18_9'];
    $passage = ['18:9-14'];
  }

  function persistentWidow()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Persistent Widow';
    $image = '../images/_JesusChrist/persistentWidow.webp';
    $imageAlt = 'The Persistent Widow Parable';
    $linked_image = '../images/_JesusChrist/persistentWidow.png';
    $figCaption = 'The Parable of the Persistent Widow';
    $description = 'Encourages persistent prayer through the story of a widow seeking justice';
    $paragraphDialogs = [
      "Jesus told a story to teach his followers that they should always pray and never give up. The story was about a judge who didn't care about God or what people thought about him.",
      'In the same town was a widow who kept coming to this judge with the same request: "Grant me justice against my opponent." A widow is a woman whose husband has died, and in those days, widows often had a hard time taking care of themselves.',
      "For a long time, the judge refused to help her. But the widow didn't give up! She kept coming back again and again, asking for justice.",
      "Finally, the judge thought to himself, \"Even though I don't care about God or people, I will give this widow justice because she keeps bothering me. If I don't help her, she'll wear me out with her constant requests!\"",
      'Then Jesus explained the point of the story. He said, "Listen to what the unfair judge said. And won\'t God bring justice for his chosen people, who cry out to him day and night? Will he keep putting them off? I tell you, he will give them justice quickly."',
      'The story teaches us that if even an unfair judge will eventually respond to someone who keeps asking, how much more will God - who is perfectly good and who loves us - respond to our prayers when we keep bringing our needs to Him!'
    ];
    $gospel = ['Luke'];
    $gospelLinks = ['?w1=bible&t1=local%3Aeng-web&v1=LK18_1'];
    $passage = ['18:1-8'];
  }

  function tenVirgins()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Ten Virgins';
    $image = '../images/_JesusChrist/tenVirgins.webp';
    $imageAlt = 'The Ten Virgins Parable';
    $linked_image = '../images/_JesusChrist/tenVirgins.png';
    $figCaption = 'The Parable of the Ten Virgins';
    $description = "Stresses readiness for Christ's return through the analogy of wedding attendants";
    $paragraphDialogs = [
      "Jesus told a story comparing the kingdom of heaven to ten bridesmaids who took their lamps and went out to meet the bridegroom (that's the man getting married).",
      "Five of the bridesmaids were foolish, and five were wise. The foolish ones took their lamps but didn't bring any extra oil with them. The wise ones, however, took oil in jars along with their lamps. They were prepared!",
      'The bridegroom was a long time in coming, and all the bridesmaids got sleepy and fell asleep. But at midnight, someone shouted, "Here\'s the bridegroom! Come out to meet him!"',
      'All the bridesmaids woke up and got their lamps ready. The foolish ones realized they were running out of oil and said to the wise ones, "Give us some of your oil; our lamps are going out."',
      'But the wise ones replied, "No, there may not be enough for both us and you. Go to those who sell oil and buy some for yourselves."',
      'While the foolish bridesmaids were gone buying oil, the bridegroom arrived. The wise bridesmaids, who were ready, went in with him to the wedding banquet. And then the door was shut and locked!',
      'Later, the foolish bridesmaids came back and called out, "Sir! Sir! Open the door for us!" But the bridegroom answered, "Truly I tell you, I don\'t know you."',
      'Jesus ended the story by saying, "Therefore keep watch, because you do not know the day or the hour." He was teaching us to always be ready for when He comes back, because we don\'t know exactly when that will be!'
    ];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT25_1&t1=local%3Aeng-web&w1=bible'];
    $passage = ['25:1-13'];
  }

  function talents()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Talents/Minas';
    $image = '../images/_JesusChrist/talents.webp';
    $imageAlt = 'The Talents Parable';
    $linked_image = '../images/_JesusChrist/talents.png';
    $figCaption = 'The Parable of the Talents';
    $description = 'Teaches about stewardship and accountability for what God entrusts to us';
    $paragraphDialogs = [
      'Jesus told a story about a man going on a journey. Before he left, he called his servants and entrusted his wealth to them. Talents were large amounts of money in those days.',
      'To one servant he gave five talents, to another two talents, and to another just one talent. He gave to each according to their ability. Then he went on his journey.',
      "The servant who received five talents went right away and put the money to work, earning five more talents. The one with two talents gained two more. But the servant who got one talent dug a hole in the ground and hid his master's money.",
      'After a long time, the master came back and settled accounts with his servants. The one who had received five talents brought the additional five and said, "Master, you gave me five talents. See, I have gained five more!"',
      'The master replied, "Well done, good and faithful servant! You have been faithful with a few things; I will put you in charge of many things. Come and share your master\'s happiness!"',
      'The servant who had received two talents also came and said, "Master, you gave me two talents. See, I have gained two more!" The master said the same thing to him, "Well done, good and faithful servant!"',
      'Then the servant who had received one talent came and said, "Master, I knew you are a hard man, harvesting where you haven\'t sown and gathering where you haven\'t scattered seed. So I was afraid and went out and hid your talent in the ground. Here, take back what belongs to you."',
      'The master replied, "You wicked, lazy servant! If you knew I harvest where I haven\'t sown, you should have at least put my money in the bank so I could have gotten it back with interest!"',
      'The master took the one talent from him and gave it to the servant who had ten talents. He said, "Everyone who uses well what they are given will get more. But the one who does not use well what they are given will have everything taken away."',
      'Jesus told this story to teach that God expects us to use the gifts, abilities, and opportunities He gives us. When we use them well, He will give us more responsibilities and blessings!'
    ];
    $gospel = ['Matthew', 'Luke'];
    $gospelLinks = ['?v1=MT25_14&t1=local%3Aeng-web&w1=bible', '?v1=LK19_11&t1=local%3Aeng-web&w1=bible'];
    $passage = ['25:14-30', '19:11-27'];
  }

  function parableSheepAndGoats()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Sheep and the Goats';
    $image = '../images/_JesusChrist/sheepAndGoats.webp';
    $imageAlt = 'Jesus separates the sheep and the goats';
    $linked_image = '../images/_JesusChrist/sheepAndGoats.png';
    $figCaption = 'The Parable of the Sheep and the Goats';
    $description = 'Describes the final judgment based on how people treated "the least of these"';
    $paragraphDialogs = [
      'Jesus says when He comes back, He will separate people like a shepherd separates sheep from goats.',
      'The sheep are the people who helped others when they were hungry, sick, or in trouble. Jesus says they were really helping Him.',
      'The goats are the people who didn’t help others. Jesus says they ignored Him by not caring for others.',
      'This story teaches us that showing kindness to others is very important to God.'
    ];
    $gospel = ['Matthew'];
    $gospelLinks = ['?v1=MT25_31&t1=local%3Aeng-web&w1=bible'];
    $passage = ['25:31-46'];
  }




















  //WE ARE HERE
  function parableTwoDebtors()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Two Debtors';
    $image = '../images/_JesusChrist/twoDebtors.webp';
    $imageAlt = 'Two people owe money to the same lender';
    $linked_image = '../images/_JesusChrist/twoDebtors.png';
    $description = 'Shows how gratitude flows from understanding the depth of forgiveness received';
    $paragraphDialogs = [
      'Jesus tells a story about two people who owe money. One person owes a little, and the other owes a lot.',
      'The lender decides to forgive both of them and says they don’t have to pay it back.',
      'Jesus asks which person will love the lender more. The answer is the one who was forgiven the most.',
      'This shows us that people who know they’ve been forgiven a lot by God will love Him more.'
    ];
    $gospel = ['Luke'];
    $gospelLinks = ['?v1=LK7_41&w1=bible&t1=local%3Aeng-web'];
    $passage = ['7:41-43'];
  }

  function parableUnfruitfulFigTree()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Unfruitful Fig Tree';
    $image = '../images/_JesusChrist/unfruitfulFigTree.webp';
    $imageAlt = 'A fig tree without fruit is given one more chance';
    $linked_image = '../images/_JesusChrist/unfruitfulFigTree.png';
    $description = "Warns about the need for spiritual fruitfulness and God's patience";
    $paragraphDialogs = [
      'A man planted a fig tree, but year after year it didn’t grow any fruit.',
      'He wanted to cut it down, but the gardener asked for one more year to take care of it and help it grow.',
      'The man agreed to wait. If the tree grows fruit, it can stay. If not, then it will be cut down.',
      'This shows that God gives people more time to grow and change before judgment.'
    ];
    $gospel = ['Luke'];
    $gospelLinks = ['?t1=local%3Aeng-web&w1=bible&v1=LK13_6'];
    $passage = ['13:6-9'];
  }

  function parableWickedTenants()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Wicked Tenants';
    $image = '../images/_JesusChrist/wickedTenants.webp';
    $imageAlt = "Vineyard workers attack the owner's messengers";
    $linked_image = '../images/_JesusChrist/wickedTenants.png';

    $description = "Foretells Jesus' rejection by religious leaders through the story of rebellious vineyard workers";

    $paragraphDialogs = [
      'A man owned a vineyard and rented it to some farmers. When it was time to collect fruit, he sent servants.',
      'The farmers beat the servants and sent them away. The man sent more, and they were treated badly too.',
      'Finally, he sent his son, thinking they would respect him. But the farmers killed the son.',
      "Jesus told this story to show how people rejected God's messengers and even Jesus, God's Son."
    ];
    $gospel = ['Matthew', 'Mark', 'Luke'];
    $gospelLinks = ['?v1=MT21_33&w1=bible&t1=local%3Aeng-web', '?v1=MK12_1&w1=bible&t1=local%3Aeng-web', '?v1=LK20_9&w1=bible&t1=local%3Aeng-web'];
    $passage = ['21:33-46,', '12:1-12', '20:9-19'];
  }

  function parableWeddingFeast()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Wedding Feast';
    $image = '../images/_JesusChrist/weddingFeast.webp';
    $imageAlt = 'Guests are invited to a royal wedding';
    $linked_image = '../images/_JesusChrist/weddingFeast.png';
    $description = "Illustrates the invitation to God's kingdom and the importance of proper response";
    $paragraphDialogs = [
      'A king planned a big wedding for his son and invited many guests.',
      'But the guests didn’t want to come. Some made excuses, and others were mean to the messengers.',
      'The king then invited people from the streets, both good and bad, and the wedding hall was filled.',
      "Jesus says this is like God's kingdom—everyone is invited, but we must be ready and take it seriously."
    ];
    $gospel = ['Matthew', 'Luke'];
    $gospelLinks = ['https://ebible.org/study/?v1=MT22_1&w1=bible&t1=local%3Aeng-web', '?v1=LK14_16&w1=bible&t1=local%3Aeng-web'];
    $passage = ['22:1-14,', '14:16-24'];
  }

  function parableRichFool()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
    $title = 'The Rich Fool';
    $image = '../images/_JesusChrist/richFool.webp';
    $imageAlt = 'A man builds bigger barns for his crops';
    $linked_image = '../images/_JesusChrist/richFool.png';
    $description = 'Warns against greed and storing up treasures on earth rather than being rich toward God';
    $paragraphDialogs = [
      'A rich man had a great harvest and didn’t know where to store all his crops.',
      'He decided to tear down his barns and build bigger ones to keep everything.',
      'He thought, ‘Now I can relax, eat, drink, and enjoy life!’',
      'But that night, he died. Jesus said this shows how foolish it is to only think about money and not about God.'
    ];
    $gospel = ['Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['luke/12.htm#13'];
    $passage = ['12:13-21'];
  }

  function wiseAndFoolishBuilders()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Wise and Foolish Builders';
    $image = '../images/_JesusChrist/wiseAndFoolishBuilders.webp';
    $imageAlt = 'The Wise and Foolish Builders Parable';
    $linked_image = '../images/_JesusChrist/wiseAndFoolishBuilders.png';
    $figCaption = 'The Parable of the Wise and Foolish Builders';
    $description = "Contrasts those who hear Jesus' words and act on them versus those who don't";

    $paragraphDialogs = [
      'Jesus told a story about two people who both built houses. One was wise, and one was foolish.',
      'The wise builder constructed his house on solid rock. He dug deep and made sure the foundation was strong.',
      'The foolish builder was lazy and built his house right on the sand, without any strong foundation at all.',
      'Then the rainy season came! Heavy rain poured down, streams rose, and strong winds blew against both houses.',
      'The house built on the rock stood firm through the storm. But the house built on sand? It completely collapsed with a big crash!',
      "Jesus explained that people who hear His words and put them into practice are like the wise builder with the strong foundation. When tough times come, they'll stay standing.",
      "But people who hear His words and don't follow them are like the foolish builder who built on sand. When problems come, everything falls apart for them.",
      "This story teaches us that it's not enough to just listen to what Jesus says - we need to actually do what He teaches us!"
    ];

    $gospel = ['Matthew', 'Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['matthew/7.htm#24', 'luke/6.htm#47'];
    $passage = ['7:24-27', '6:47-49'];
  }

  function growingSeed()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Growing Seed';
    $image = '../images/_JesusChrist/growingSeed.webp';
    $imageAlt = 'The Growing Seed Parable';
    $linked_image = '../images/_JesusChrist/growingSeed.png';
    $figCaption = 'The Parable of the Growing Seed';
    $description = "Shows how God's kingdom grows mysteriously by God's power, not human effort";

    $paragraphDialogs = [
      "Jesus told a story comparing God's kingdom to a man who scattered seed on the ground.",
      'Night and day, whether the man was asleep or awake, the seeds sprouted and grew. But the man had no idea how it happened!',
      'The soil produced grain all by itself - first the stalk, then the head, then the full kernel in the head.',
      'As soon as the grain was ripe, the man went out with his sickle to harvest it, because the harvest time had come.',
      "Jesus was teaching that God's kingdom grows in ways we don't always understand. We might plant seeds by telling others about Jesus, but it's God who makes those seeds grow!",
      "This story shows us that we don't need to worry so much about making God's kingdom grow - that's God's job! Our job is to scatter the seeds and be ready for the harvest."
    ];

    $gospel = ['Mark'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['mark/4.htm#26'];
    $passage = ['4:26-29'];
  }

  function newClothOnOldGarment()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'New Cloth on Old Garment';
    $image = '../images/_JesusChrist/newClothOnOldGarment.webp';
    $imageAlt = 'The New Cloth on Old Garment Parable';
    $linked_image = '../images/_JesusChrist/newClothOnOldGarment.png';
    $figCaption = 'The Parable of the New Cloth on Old Garment';
    $description = "Illustrates the incompatibility of the old religious system with Jesus' new teaching";

    $paragraphDialogs = [
      'Jesus told a short story about clothes to help people understand something important. He asked, "Who would use a piece of new cloth to patch up an old garment?"',
      'He explained that if you did that, the new patch would shrink when you wash it. Then it would pull away from the old garment and make an even bigger tear than before!',
      'This might seem like just a practical sewing tip, but Jesus was actually teaching about something much bigger. The "old garment" stood for the old religious ways that people were used to.',
      'The "new patch" represented Jesus\' new teachings and the new way of relating to God that He was bringing.',
      "Jesus was saying that you can't just add His new teachings onto the old religious system - they wouldn't fit together right. His new way required a completely fresh start!",
      "This story helped people see that Jesus wasn't just fixing up the old way of doing things. He was bringing something totally new that would change everything!"
    ];

    $gospel = ['Matthew', 'Mark', 'Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['matthew/9.htm#16', 'mark/2.htm#21', 'luke/5.htm#36'];
    $passage = ['9:16', '2:21', '5:36'];
  }

  function newWineInOldWineskins()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'New Wine in Old Wineskins';
    $image = '../images/_JesusChrist/newWineInOldWineskins.webp';
    $imageAlt = 'The New Wine in Old Wineskins Parable';
    $linked_image = '../images/_JesusChrist/newWineInOldWineskins.png';
    $figCaption = 'The Parable of the New Wine in Old Wineskins';
    $description = "Similar to the cloth parable, shows how Jesus' message requires new structures";

    $paragraphDialogs = [
      'Jesus told another short story about wine to help explain His ministry. He asked, "Does anyone pour new wine into old wineskins?"',
      'In those days, they used animal skins as containers for wine. When wine was new, it would still be fermenting and producing gases that would make the wineskin stretch.',
      "Old wineskins had already been stretched out and had become brittle. If you put new wine in them, they'd burst as the wine expanded! Then both the wine and wineskins would be ruined.",
      'Jesus explained that new wine must be poured into new wineskins so both can be preserved.',
      'Like the cloth story, Jesus wasn\'t really giving tips about making wine. The "new wine" was His fresh, powerful message and the Holy Spirit\'s work.',
      'The "old wineskins" represented old religious systems and traditions that couldn\'t contain Jesus\' new way without breaking.',
      'Jesus was teaching that His message was so new and different that it needed new ways of thinking and new structures. People needed to be ready for completely new ways of relating to God!'
    ];

    $gospel = ['Matthew', 'Mark', 'Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['matthew/9.htm#17', 'mark/2.htm#22', 'luke/5.htm#37'];
    $passage = ['9:17', '2:22', '5:37-39'];
  }

  function lampOnStand()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Lamp on a Stand';
    $image = '../images/_JesusChrist/lampOnStand.webp';
    $imageAlt = 'The Lamp on a Stand Parable';
    $linked_image = '../images/_JesusChrist/lampOnStand.png';
    $figCaption = 'The Parable of the Lamp on a Stand';
    $description = 'Teaches that spiritual truth is meant to illuminate, not be hidden';

    $paragraphDialogs = [
      'Jesus asked a simple question: "Do people light a lamp and then put it under a bowl or a bed? Of course not! They put it on a stand so it can give light to everyone in the house."',
      "In Jesus' time, they used oil lamps to light their homes at night. It would be silly to light a lamp and then hide it - that would defeat the whole purpose of having a lamp!",
      "Jesus explained that there's nothing hidden that won't eventually be revealed, and nothing kept secret that won't come to light.",
      "He was teaching that the truth of God's kingdom isn't meant to be hidden or kept secret. God's truth is like a lamp that should be put on a stand where everyone can see it and benefit from its light.",
      'Jesus also said, "You are the light of the world." He wanted His followers to shine brightly for others to see, like a city on a hill that can\'t be hidden.',
      "This story reminds us that we shouldn't hide our faith or the things God has taught us. Instead, we should let our light shine so others can see it and give glory to God!"
    ];

    $gospel = ['Matthew', 'Mark', 'Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['matthew/5.htm#14', 'mark/4.htm#21', 'luke/8.htm#16', 'luke/11.htm#33'];
    $passage = ['5:14-16', '4:21-22', '8:16-17', '11:33-36'];
  }

  function twoSons()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Two Sons';
    $image = '../images/_JesusChrist/twoSons.webp';
    $imageAlt = 'The Two Sons Parable';
    $linked_image = '../images/_JesusChrist/twoSons.png';
    $figCaption = 'The Parable of the Two Sons';
    $description = 'Contrasts obedience with mere words, showing the importance of actual repentance';

    $paragraphDialogs = [
      'Jesus told a story about a father who had two sons. The father went to the first son and said, "Son, go and work today in the vineyard."',
      'The first son answered, "I will not." But later he changed his mind and went to work in the vineyard after all.',
      'Then the father went to his second son and said the same thing. This son answered, "Yes, sir, I will," but he didn\'t actually go.',
      'Jesus asked the people listening, "Which of the two sons did what his father wanted?" They answered, "The first son," and they were right!',
      "Jesus used this story to make an important point. He compared the religious leaders to the second son - they said the right words but didn't really obey God.",
      'And He compared tax collectors and prostitutes (people everyone looked down on) to the first son. These people had said "no" to God at first through their sinful lives, but then they had changed their minds and truly repented when they heard John the Baptist\'s message.',
      "Jesus was teaching that it's not just what we say that matters to God, but what we actually do. God cares more about true repentance and obedience than about people who just say the right religious words but don't follow through with their actions."
    ];

    $gospel = ['Matthew'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['matthew/21.htm#28'];
    $passage = ['21:28-32'];
  }

  function unjustSteward()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Unjust Steward';
    $image = '../images/_JesusChrist/unjustSteward.webp';
    $imageAlt = 'The Unjust Steward Parable';
    $linked_image = '../images/_JesusChrist/unjustSteward.png';
    $figCaption = 'The Parable of the Unjust Steward';
    $description = 'Encourages wise use of worldly resources with eternal perspective';

    $paragraphDialogs = [
      'Jesus told a strange story about a manager (or steward) who worked for a rich man. The rich man found out that this manager was wasting his money, so he called him in and said, "What\'s this I hear about you? Give an account of your management, because you cannot be manager any longer."',
      "The manager thought to himself, \"Oh no! I'm going to lose my job! I'm not strong enough to dig, and I'm too proud to beg. What will I do?\" Then he came up with a clever plan to make friends who would help him after he lost his job.",
      'He called in each of his master\'s debtors. To the first he said, "How much do you owe my master?" The man replied, "Eight hundred gallons of olive oil." The manager told him, "Quick, take your bill and make it four hundred."',
      'To another debtor who owed a thousand bushels of wheat, the manager said, "Take your bill and make it eight hundred." The manager was cutting their debts so they would be grateful to him!',
      'When the rich man found out what the manager had done, he surprisingly praised him for being clever! The dishonest manager had acted shrewdly and planned ahead.',
      'Jesus wasn\'t saying we should be dishonest! But He did say, "The people of this world are more shrewd in dealing with their own kind than are the people of the light." He was pointing out that sometimes worldly people are better at planning ahead with their resources than God\'s people are.',
      'Jesus then taught, "Use worldly wealth to gain friends for yourselves, so that when it is gone, you will be welcomed into eternal dwellings." He was saying we should use our money and possessions in ways that have eternal value - like helping others and advancing God\'s kingdom.',
      'Jesus ended with an important reminder: "Whoever can be trusted with very little can also be trusted with much." He taught that how we handle money shows a lot about our character, and we can\'t serve both God and money at the same time.'
    ];

    $gospel = ['Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['luke/16.htm#1'];
    $passage = ['16:1-13'];
  }

  function friendAtMidnight()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Friend at Midnight';
    $image = '../images/_JesusChrist/friendAtMidnight.webp';
    $imageAlt = 'Illustration of a person knocking on a door at night';
    $linked_image = '../images/_JesusChrist/friendAtMidnight.png';
    $figCaption = 'The Friend at Midnight';
    $description = 'Teaches persistence in prayer through a story about borrowing bread at night';

    $paragraphDialogs = [
      "In this parable, Jesus tells about a guy who had a friend come visit him late at night. The problem was, he didn't have any food to give his visitor! So he went to another friend's house at midnight to ask for some bread.",
      "The friend was already in bed with his family and didn't want to get up. But the first guy kept knocking and asking, and wouldn't stop.",
      'Finally, the friend got up and gave him what he needed - not because they were friends, but because the guy was so persistent!',
      "Jesus used this story to teach us about prayer. God isn't like the grumpy friend who doesn't want to help. But Jesus wants us to understand that we should keep praying and not give up, even when it seems like no one is listening."
    ];

    $gospel = ['Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['luke/11.htm#5'];
    $passage = ['11:5-8'];
  }

  function barrenFigTree()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Barren Fig Tree';
    $image = '../images/_JesusChrist/barrenFigTree.webp';
    $imageAlt = 'Illustration of a fig tree without fruit';
    $linked_image = '../images/_JesusChrist/barrenFigTree.png';
    $figCaption = 'The Barren Fig Tree';
    $description = "Warns about the consequences of unfruitfulness despite God's patience";

    $paragraphDialogs = [
      "Jesus told a story about a man who had a fig tree in his garden that wasn't growing any figs. For three whole years, the man came looking for fruit but found nothing!",
      'He told his gardener to just cut it down because it was wasting space and soil.',
      'But the gardener asked for one more chance - he would dig around it and put fertilizer on it. If it grew fruit next year, great! If not, then they could cut it down.',
      "This parable teaches us that God is patient with us, but He does expect us to grow and change. He gives us chances to become better and produce 'good fruit' in our lives, but His patience won't last forever.",
      'We need to use the time He gives us to grow and become better people.'
    ];

    $gospel = ['Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['luke/13.htm#6'];
    $passage = ['13:6-9'];
  }

  function greatBanquet()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Great Banquet';
    $image = '../images/_JesusChrist/greatBanquet.webp';
    $imageAlt = 'Illustration of a grand feast with empty seats and servants inviting new guests';
    $linked_image = '../images/_JesusChrist/greatBanquet.png';
    $figCaption = 'The Great Banquet';
    $description = "Shows how many reject God's invitation while the unlikely are welcomed";

    $paragraphDialogs = [
      'Jesus told about a man who planned a huge dinner party and sent out invitations to lots of people. When everything was ready, he sent his servant to tell the guests it was time to come.',
      "But they all started making excuses! One guy said he bought a field and had to go see it. Another said he bought some oxen and needed to try them out. Another said he just got married so he couldn't come.",
      'The host got really upset and told his servant to go into the streets and bring in the poor, the disabled, the blind, and the lame instead.',
      'After doing this, there was still room, so the host sent the servant to the roads and country lanes to invite even more people!',
      "Jesus used this story to show how many people who should have accepted God's invitation to be part of His kingdom make excuses and miss out. So God welcomes those who society often ignores or looks down on.",
      "The point is that God's invitation is for everyone, but especially for those who recognize their need for Him."
    ];

    $gospel = ['Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['luke/14.htm#15'];
    $passage = ['14:15-24'];
  }

  function buildingTowerAndKingGoingToWar()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'Building a Tower and King Going to War';
    $image = '../images/_JesusChrist/buildingTower.webp';
    $imageAlt = 'Illustration of a person planning a tower and a king planning for battle';
    $linked_image = '../images/_JesusChrist/buildingTower.png';
    $figCaption = 'Building a Tower and King Going to War';
    $description = 'Emphasizes counting the cost of discipleship before committing';

    $paragraphDialogs = [
      'Jesus shared two short stories to make people think carefully before deciding to follow Him.',
      'First, He talked about someone who wants to build a tower. A smart builder would sit down first and figure out how much it would cost to make sure they have enough money to finish it. Otherwise, they might lay the foundation but run out of money, and everyone would laugh at them!',
      "In the second story, Jesus described a king who's about to go to war against another king. Before fighting, he needs to figure out if his 10,000 soldiers can beat the other king's 20,000 soldiers. If not, he'd better send people to ask for peace terms!",
      'Jesus used these examples to teach that following Him is a serious decision. We need to understand what it will cost us - like maybe losing friends or facing hard times - and be prepared to go all the way, not just start and then quit when things get tough.'
    ];

    $gospel = ['Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['luke/14.htm#28'];
    $passage = ['14:28-33'];
  }

  function unprofitableServants()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Unprofitable Servants';
    $image = '../images/_JesusChrist/unprofitableServants.webp';
    $imageAlt = 'Illustration of servants working in a field';
    $linked_image = '../images/_JesusChrist/unprofitableServants.png';
    $figCaption = 'The Unprofitable Servants';
    $description = 'Teaches humility in service, showing we only do our duty before God';

    $paragraphDialogs = [
      "Jesus asked His followers to imagine they had a servant who worked in their fields or took care of their sheep. When that servant comes in from working all day, would the master say, 'Hey, come sit down and eat'?",
      "No way! Instead, the master would tell the servant to make dinner, serve it, and only after the master finished eating could the servant eat. And the master wouldn't thank the servant for doing these things because that's just what servants are supposed to do.",
      "Jesus then told His disciples that they should have the same attitude. When they've done everything God has commanded them to do, they shouldn't expect special praise or rewards.",
      "They should simply say, 'We are unprofitable servants; we have only done what was our duty to do.'",
      "This teaches us to be humble when we serve God and others. We shouldn't serve to get attention or praise, but because it's the right thing to do."
    ];

    $gospel = ['Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['luke/17.htm#7'];
    $passage = ['17:7-10'];
  }

  function unjustJudge()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Unjust Judge';
    $image = '../images/_JesusChrist/unjustJudge.webp';
    $imageAlt = 'Illustration of a widow persistently appearing before a judge';
    $linked_image = '../images/_JesusChrist/unjustJudge.png';
    $figCaption = 'The Unjust Judge';
    $description = 'Encourages persistent prayer and faith until Jesus returns';

    $paragraphDialogs = [
      "Jesus told this story to teach His followers to keep praying and never give up. There was a judge in a certain city who didn't care about God or what people thought about him.",
      "A widow in that city kept coming to him, asking for justice against someone who had wronged her. For a long time the judge ignored her. But she wouldn't stop asking!",
      "Finally, the judge thought, 'Even though I don't care about God or people, this woman is driving me crazy with her constant requests. I'll give her justice just to get her to leave me alone!'",
      'Jesus explained that if even an unfair judge eventually helps because of persistence, how much more will God - who is perfectly good and loves us - answer His people who pray day and night?',
      "But then Jesus asked a sad question: 'When I come back, will I find people on earth who still have faith?' This reminds us to keep trusting God and praying even when it seems like He's not answering right away."
    ];

    $gospel = ['Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['luke/18.htm#1'];
    $passage = ['18:1-8'];
  }

  function blindLeadingTheBlind()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'Blind Leading the Blind';
    $image = '../images/_JesusChrist/blindLeadingBlind.webp';
    $imageAlt = 'Illustration of two blind people where one is trying to lead the other';
    $linked_image = '../images/_JesusChrist/blindLeadingBlind.png';
    $figCaption = 'Blind Leading the Blind';
    $description = 'Warns against following spiritually blind teachers';

    $paragraphDialogs = [
      "Jesus asked a really good question: 'Can a blind person lead another blind person?' Of course not! They'd both fall into a ditch!",
      "This short parable has a simple but important message. If someone doesn't understand the truth about God themselves, they can't properly teach others about Him. It's like trying to give directions to a place you've never been.",
      "Jesus was warning people to be careful about who they listen to and learn from. Some religious teachers act like they know everything about God, but if they don't really understand God's truth, following them will lead to trouble.",
      "Jesus also taught that a student isn't better than their teacher - at best, they'll know what their teacher knows. So if we want to grow in our understanding of God, we need to make sure we're learning from people who truly know Him."
    ];

    $gospel = ['Matthew', 'Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['matthew/15.htm#14', 'luke/6.htm#39'];
    $passage = ['15:14', '6:39'];
  }

  function faithfulAndWiseServant()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Faithful and Wise Servant';
    $image = '../images/_JesusChrist/faithfulWiseServant.webp';
    $imageAlt = 'Illustration of a servant managing a household while the master is away';
    $linked_image = '../images/_JesusChrist/faithfulWiseServant.png';
    $figCaption = 'The Faithful and Wise Servant';
    $description = "Contrasts faithful and unfaithful stewardship while waiting for the master's return";

    $paragraphDialogs = [
      'Jesus told about a master who put a servant in charge of his household while he went away on a trip. The servant had one main job - to make sure all the other servants were fed at the right time.',
      "Jesus asked, 'Who is the faithful and wise servant that the master can trust to do this?' A good servant would be found doing his job when the master returned, and the master would reward him by giving him even more responsibility.",
      "But what if the servant was bad and thought, 'My master is taking a long time to come back,' and started beating the other servants and partying with troublemakers?",
      "When the master finally returned on a day when the servant wasn't expecting him, he would punish that servant severely!",
      "Jesus was teaching about how we should live while we wait for Him to return. We shouldn't get lazy or do wrong things just because Jesus hasn't come back yet.",
      "Instead, we should faithfully do what He's asked us to do, caring for others and living right, so we'll be ready whenever He returns."
    ];

    $gospel = ['Matthew', 'Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['matthew/24.htm#45', 'luke/12.htm#42'];
    $passage = ['24:45-51', '12:42-48'];
  }

  function watchfulServants()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Watchful Servants';
    $image = '../images/_JesusChrist/watchfulServants.webp';
    $imageAlt = "Illustration of servants with lamps lit waiting for their master's return";
    $linked_image = '../images/_JesusChrist/watchfulServants.png';
    $figCaption = 'The Watchful Servants';
    $description = "Emphasizes staying alert and ready for Christ's return";

    $paragraphDialogs = [
      'Jesus told His followers to be like servants waiting for their master to return from a wedding feast. These good servants would be dressed and ready for action, with their lamps lit even late at night. When the master knocked, they could immediately open the door.',
      'The master would be so happy with these watchful servants that he would do something amazing - he would have them sit down while he served them a meal!',
      "Jesus also compared His return to a thief breaking into a house at night - you don't know exactly when it will happen, so you need to be ready all the time.",
      'In another version of this teaching, Jesus described a man going on a journey who puts his servants in charge of his house, giving each one a job to do. The doorkeeper especially needs to stay awake and watch because no one knows when the master will return - evening, midnight, when the rooster crows, or at dawn.',
      "Jesus was teaching us to live in a way that we'd be happy for Him to find us at any moment - not doing wrong things or being lazy, but actively doing what He's asked us to do."
    ];

    $gospel = ['Mark', 'Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['mark/13.htm#34', 'luke/12.htm#35'];
    $passage = ['13:34-37', '12:35-40'];
  }

  function childrenInTheMarketplace()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'Children in the Marketplace';
    $image = '../images/_JesusChrist/childrenMarketplace.webp';
    $imageAlt = 'Illustration of children playing in a marketplace while others refuse to join';
    $linked_image = '../images/_JesusChrist/childrenMarketplace.png';
    $figCaption = 'Children in the Marketplace';
    $description = 'Illustrates the inconsistent criticism Jesus and John the Baptist received';

    $paragraphDialogs = [
      "Jesus noticed how people were never satisfied with God's messengers, no matter what they did. He compared them to kids sitting in the marketplace calling out to other kids: 'We played wedding music for you, but you wouldn't dance! We played funeral music, but you wouldn't cry!'",
      "Then Jesus explained what He meant. John the Baptist came living super strictly - not drinking wine and barely eating - and people said, 'He's crazy! He has a demon!'",
      "Then Jesus came, enjoying food and wine at parties with all kinds of people, and the same critics said, 'Look at him! He eats too much, drinks too much, and hangs out with tax collectors and sinners!'",
      "Jesus was pointing out how some people were just determined to find fault no matter what. These critics weren't being honest or fair - they just didn't want to listen to God's message, so they made excuses about the messengers.",
      "But Jesus said that wisdom is proved right by its results - both His way and John's way were part of God's plan and produced good fruit in the lives of those who actually listened."
    ];

    $gospel = ['Matthew', 'Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['matthew/11.htm#16', 'luke/7.htm#31'];
    $passage = ['11:16-19', '7:31-35'];
  }

  function speckAndLog()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Speck and the Log';
    $image = '../images/_JesusChrist/speckAndLog.webp';
    $imageAlt = "Illustration of a person with a log in their eye trying to remove a speck from another's eye";
    $linked_image = '../images/_JesusChrist/speckAndLog.png';
    $figCaption = 'The Speck and the Log';
    $description = 'Warns against hypocritical judgment of others';

    $paragraphDialogs = [
      "Jesus used a funny picture to teach about judging others. He asked, 'Why do you notice the tiny speck of sawdust in your friend's eye, but completely ignore the massive log sticking out of your own eye?'",
      'Imagine trying to help someone get a tiny dust particle out of their eye when you have a huge wooden beam sticking out of yours!',
      "Jesus called people who do this 'hypocrites' - people who criticize others for small mistakes while ignoring their own big problems.",
      "He said we should first take the log out of our own eye (fix our own major issues), and then we'll be able to see clearly enough to help others with their smaller problems.",
      "This doesn't mean we should never help others improve - it means we need to be honest about our own faults first. We should deal with our own mistakes before pointing fingers at everyone else.",
      'Jesus wants us to help each other grow, but with humility and self-awareness, not with a judgmental attitude.'
    ];

    $gospel = ['Matthew', 'Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['matthew/7.htm#3', 'luke/6.htm#41'];
    $passage = ['7:3-5', '6:41-42'];
  }

  function fishNet()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Fish Net';
    $image = '../images/_JesusChrist/fishNet.webp';
    $imageAlt = 'Illustration of fishermen sorting good fish from bad after a catch';
    $linked_image = '../images/_JesusChrist/fishNet.png';
    $figCaption = 'The Fish Net';
    $description = 'Describes the final separation of the righteous and wicked';

    $paragraphDialogs = [
      "Jesus said God's kingdom is like a huge fishing net that was thrown into the lake and caught all kinds of fish. When it was full, the fishermen pulled it up on the shore.",
      'Then they sat down and sorted the good fish into containers, but threw the bad ones away.',
      'Jesus explained that this is how it will be at the end of the world. Angels will come and separate the wicked people from the righteous ones, and throw the wicked into a fiery furnace, where there will be weeping and gnashing of teeth.',
      "This parable teaches that right now, both people who truly follow God and people who don't are mixed together in the world - just like different kinds of fish in the same net. But a time is coming when God will sort everyone out.",
      "It's a serious reminder that our choices now about whether to follow Jesus or not have big consequences for our future. Jesus wants everyone to be counted among the 'good fish' by believing in Him and living according to His teachings."
    ];

    $gospel = ['Matthew'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['matthew/13.htm#47'];
    $passage = ['13:47-50'];
  }

  function householder()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Householder';
    $image = '../images/_JesusChrist/householder.webp';
    $imageAlt = 'Illustration of a homeowner bringing out treasures from storage';
    $linked_image = '../images/_JesusChrist/householder.png';
    $figCaption = 'The Householder';
    $description = 'Compares a teacher of scripture to a homeowner bringing out treasures old and new';

    $paragraphDialogs = [
      "After teaching several parables about God's kingdom, Jesus asked His disciples if they understood everything He said. When they answered yes, He gave them one more short comparison.",
      'He said that every teacher of religious law who has become a disciple in the kingdom of heaven is like the owner of a house who brings out of his storeroom new treasures as well as old.',
      "This mini-parable is about how Jesus' followers should teach others. A good teacher doesn't just stick to old familiar ideas or only chase after new trends.",
      "Instead, they're like someone who has collected valuable things over time - some old, some new - and knows when to share each one.",
      'Jesus was telling His disciples that they should use both the treasured wisdom from the Old Testament scriptures AND the new teachings He was giving them. Both are valuable!',
      "This teaches us that we should appreciate traditional wisdom while also being open to fresh insights about God's truth."
    ];

    $gospel = ['Matthew'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['matthew/13.htm#52'];
    $passage = ['13:52'];
  }

  function dishonestManager()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Dishonest Manager';
    $image = '../images/_JesusChrist/dishonestManager.webp';
    $imageAlt = 'Illustration of a manager reducing debts owed to his master';
    $linked_image = '../images/_JesusChrist/dishonestManager.png';
    $figCaption = 'The Dishonest Manager';
    $description = 'Teaches shrewd use of worldly resources for eternal purposes';

    $paragraphDialogs = [
      "Jesus told one of His most surprising stories about a manager who was about to get fired for wasting his rich employer's money.",
      "Realizing he'd soon be unemployed, the manager quickly called in people who owed his master money and reduced their debts - cutting one bill from 800 gallons of olive oil to 400, and another from 1,000 bushels of wheat to 800. He did this so these people would welcome him into their homes after he lost his job.",
      'The weird part is that when the rich man found out, he actually praised the dishonest manager for being so clever!',
      "Jesus wasn't saying we should be dishonest. Instead, He made the point that 'the people of this world are more shrewd in dealing with their own kind than are the people of the light.'",
      "Then Jesus gave the real lesson: we should use our money ('worldly wealth') to help others and make friends, so that when earthly money is gone, these people will welcome us into 'eternal dwellings' (heaven).",
      'Jesus was teaching that we should be at least as clever about using our resources for eternal purposes as dishonest people are about using money for their temporary benefit on earth.'
    ];

    $gospel = ['Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['luke/16.htm#1'];
    $passage = ['16:1-9'];
  }

  function goodShepherd()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Good Shepherd';
    $image = '../images/_JesusChrist/goodShepherd.webp';
    $imageAlt = 'Illustration of a shepherd protecting his sheep';
    $linked_image = '../images/_JesusChrist/goodShepherd.png';
    $figCaption = 'The Good Shepherd';
    $description = 'Depicts Jesus as the shepherd who knows, protects, and lays down his life for his sheep';

    $paragraphDialogs = [
      "Jesus described Himself as the Good Shepherd who truly cares for His sheep. Unlike a hired worker who runs away when wolves come because the sheep don't really belong to him, Jesus actually lays down His life to protect His sheep.",
      "He explained that He knows His sheep personally, and they know His voice. When He calls, they follow Him because they recognize and trust Him, but they run from strangers whose voices they don't know.",
      "Jesus also said He has 'other sheep' (meaning non-Jewish believers) who will also become part of His one flock under one shepherd.",
      'The most amazing part is when Jesus said that no one forces Him to die for His sheep - He chooses to lay down His life willingly, and He has the power to take it up again.',
      'This beautiful word picture teaches us that Jesus loves us personally, protects us, guides us, and made the ultimate sacrifice for us.',
      'It also shows that Jesus is not just a good person or teacher - He claimed the authority to lay down His life and take it up again, something only God could do.'
    ];

    $gospel = ['John'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['john/10.htm#1'];
    $passage = ['10:1-18'];
  }

  function vineAndBranches()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Vine and the Branches';
    $image = '../images/_JesusChrist/vineAndBranches.webp';
    $imageAlt = 'Illustration of a grapevine with branches bearing fruit';
    $linked_image = '../images/_JesusChrist/vineAndBranches.png';
    $figCaption = 'The Vine and the Branches';
    $description = 'Illustrates the necessity of remaining connected to Jesus to bear spiritual fruit';

    $paragraphDialogs = [
      "Jesus used a picture that His followers would easily understand - a grapevine. He said, 'I am the true vine, and my Father is the gardener.' He explained that God removes branches that don't bear fruit, but prunes (cuts back) the fruitful ones so they'll produce even more.",
      "Then Jesus told His disciples the most important part: 'Remain in me, and I will remain in you. No branch can bear fruit by itself; it must remain in the vine.' Just like a branch can't grow grapes if it's cut off from the vine, we can't live truly good and meaningful lives if we're disconnected from Jesus.",
      "He said, 'Apart from me you can do nothing.' Jesus also warned that branches that don't stay connected get thrown away, wither, and are burned.",
      'But He gave an amazing promise too: if we stay connected to Him and His words stay in us, we can ask whatever we wish, and it will be done for us!',
      "The 'fruit' Jesus talked about includes things like love, joy, peace, patience, and kindness - the good qualities that naturally grow in our lives when we stay close to Him."
    ];

    $gospel = ['John'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['john/15.htm#1'];
    $passage = ['15:1-8'];
  }

  function masterAndServant()
  {
    global $title, $image, $imageAlt, $linked_image, $figCaption, $description;
    global $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;

    $title = 'The Master and Servant';
    $image = '../images/_JesusChrist/masterAndServant.webp';
    $imageAlt = 'Illustration of a servant working in a field then serving his master at the table';
    $linked_image = '../images/_JesusChrist/masterAndServant.png';
    $figCaption = 'The Master and Servant';
    $description = 'Shows the proper relationship between God and his servants';

    $paragraphDialogs = [
      "Jesus asked His disciples to imagine they owned a servant who had been plowing fields or taking care of sheep all day. When that servant came in from the fields, would any master say, 'Come and sit down to eat'?",
      "No way! Instead, the master would say, 'Make my dinner, serve me while I eat and drink, and afterward you can eat and drink.' And the master wouldn't thank the servant for just doing what he was supposed to do.",
      'Jesus then told His followers that they should have the same attitude when serving God: \'When you have done everything you were told to do, you should say, "We are unworthy servants; we have only done our duty."\'',
      "This parable teaches us humility in our relationship with God. We shouldn't serve God expecting special praise or thinking we deserve rewards. Everything we have already comes from God, so when we serve Him, we're just doing what we ought to do.",
      "This doesn't mean God doesn't appreciate our service - other teachings show that He does reward faithfulness. But it reminds us that our attitude should be humble gratitude for the privilege of serving Him, not pride or a feeling that God owes us something."
    ];

    $gospel = ['Luke'];
    $gLP = 'https://openbible.com/ylt/';
    $gospelLinks = ['luke/17.htm#7'];
    $passage = ['17:7-10'];
  }
    content();
} // function parables() bracket

function parabolas(){
  global $introducion, $_Jesucristo, $lista, $biblia;
  $_Jesucristo = [ 'Jesús en los Evangelios',
                    'Jesús interactúa activamente con una amplia variedad de personas, utilizando parábolas como una herramienta clave para comunicar Su mensaje de una manera que todos pudieran entender con el uso de ilustraciones mentales.'];
  $introducion =  [
            $lista => ['Las parabolas eran universalmente accesibles: al usar escenarios cotidianos, Jesús hacía que conceptos espirituales complejos fueran comprensibles tanto para los eruditos educados como para los trabajadores analfabetos.',
                      'El uso de parábolas era culturalmente relevante: al utilizar entornos agrícolas y domésticos, estas historias resonaban con las experiencias diarias de su audiencia en el siglo I.',
                      'Las múltiples capas de significado a menudo contenían historias superficiales que cualquiera podía comprender, mientras ofrecían profundos conocimientos teológicos a quienes estaban dispuestos a reflexionarlas más a fondo.',
                      'La estructura narrativa de las parábolas las hacía más fáciles de recordar y compartir que los conceptos teológicos abstractos.',
                      'En lugar de imponer interpretaciones, las parábolas invitaban a los oyentes a descubrir el significado por sí mismos, involucrando sus mentes y corazones en el proceso.',
                     ], 'Parable', 'Description', 'Scripture Reference','Bible'
          ];
  $biblia = ['https://ebible.org/find/details.php?id=spablm', 'Santa Biblia libre para el mundo', 'Biblia'];

    ?>

   <article class="fullbar">
     <h3 style="font-size:2em; margin:0;padding:1.3%;text-align:center;">Jesús en los Evangelios</h3>

     <ul>
       <li>Las parabolas eran universalmente accesibles: al usar escenarios cotidianos, Jesús hacía que conceptos espirituales complejos
         fueran comprensibles tanto para los eruditos educados como para los trabajadores analfabetos.</li>
         <li>El uso de parábolas era culturalmente relevante: al utilizar entornos agrícolas y domésticos, estas historias resonaban con las experiencias diarias de su audiencia en el siglo I.</li>
           <li>Las múltiples capas de significado a menudo contenían historias superficiales que cualquiera podía comprender, mientras ofrecían profundos conocimientos teológicos a quienes estaban dispuestos a reflexionarlas más a fondo.
            </li>
            <li>La estructura narrativa de las parábolas las hacía más fáciles de recordar y compartir que los conceptos
              teológicos abstractos.</li>
              <li>En lugar de imponer interpretaciones, las parábolas invitaban a los oyentes a descubrir el significado por sí
                mismos, involucrando sus mentes y corazones en el proceso.</li>
              </ul>
              <h2>Jesús interactúa activamente con una amplia variedad de personas, utilizando parábolas como una herramienta clave para comunicar Su mensaje de una manera que todos pudieran entender con el uso de ilustraciones mentales.
              </h2>
      <table>

          <tr>
          <th>Parábola</th>
            <th>Descripción</th>
            <th>Referencia Bíblica <span style="float:right;margin-right:10%;">
                                <a href="https://www.vatican.va/archive/ESL0506/_INDEX.HTM" title="EL LIBRO DEL PUEBLO DE DIOS
                                                                                                    La Biblia
                                                                                                    (Traducción argentina)

                                                                                                    1990" style="color:white;"><ruby>
                              [1] <rt> Biblia </rt></ruby>
                      </a></span>
              </th>
          </tr>
          <tr>
            <td>El Sembrador</td>
            <td>Jesús enseña a sus discípulos que el reino de Dios es como un sembrador que sembró semillas en un campo.</td>
            <td>Mateo 13:1-23, Marcos 4:1-20, Lucas 8:4-15</td>
          </tr>
          </table>

   </article>
    <?php
    //content();
}
include './anvil/structure.php';
?>