<?php
function cssStyles(){
    ?>
    <style>
    .fullbar .nav-links a{
        color: var(--dialog-text-highlight);
    }
    .fullbar a:hover {
        border-radius:25px;
    }
    .fullbar p a, h3 a, h4 a{
        padding-left: .5%;
        padding-right: .5%;
    }

    .nav-links {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 10px;
    }
    .nav-link {
        display: block;
        padding: 12px 15px;
        background: linear-gradient(45deg, var(--secondary-dark), var(--primary-dark));
        color: white;
        text-decoration: none;
        border-radius: 25px;
        text-align: center;
        transition: all 0.3s ease;
        font-weight: bold;
    }
    .nav-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-dark));
    }

    .section {
        margin-bottom: 40px;
        padding: 25px;
        background: var(--background-color);
        border-radius: 15px;
        border-left: 5px solid var(--bannerAndFooter-bg);
        padding-top: 3px;

    }
    .section:hover {

        box-shadow: var(--box-shadow);
    }
    .section h1 {
        color: var(--primary-color);
        font-size: 2em;
        margin-bottom: 20px;
    }
    .section h2 {
        color: var(--primary-color);
        font-size: 2em;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .section h3 {
        color: var(--primary-dark);
        font-size: 1.5em;
        margin: 25px 0 15px 0;
        padding-left: 20px;
        border-left: 3px solid var(--secondary-dark);
    }
    .section h4 {
        color: var(--secondary-dark);
        font-size: 1.3em;
        margin: 20px 0 10px 0;
    }
    .section p {
        margin-bottom: 15px;
        font-size: 1.1em;
        text-align: justify;
    }

    .highlight-box {
        background: linear-gradient(135deg, #667eea20, #4ecdc420);
        border: 2px solid var(--secondary-dark);
        border-radius: 10px;
        padding: 20px;
        margin: 20px 0;
        position: relative;
    }
    .highlight-box::before {
        position: absolute;
        top: -10px;
        left: 20px;
        background: white;
        padding: 0 10px;
        font-size: 1.5em;
    }

    .story-box {
        background: linear-gradient(135deg, #ff6b6b20, #ffa50020);
        border: 2px solid var(--primary-dark);
        border-radius: 10px;
        padding: 20px;
        margin: 20px 0;
        position: relative;
    }
    .story-box::before {
        content: '📖';
        position: absolute;
        left: 20px;
        background: transparent;
        padding: 0 10px;
        font-size: 1.5em;
        margin: -2%;
    }
    .story-box:hover::before {
        transform: translateY(-2px);
        background-color: transparent;
        cursor: grab;
    }

    .paragraphStoryBox{
        margin-top: 1%;
    }

    .passage{
        float:left;
        display:inline;
        margin-right: 1%;
        font-size: 1.1rem;
        font-weight: bold;
        transform: translateY(7px);
    }

    .emoji {
        font-size: 1.5em;
        margin-right: 10px;
    }
    .emoji:hover {
        transform: translateY(-2px);
        background-color: transparent;
        cursor: grab;
    }

    details {
        background-color: var(--card-bg);
        gap: 15px;
        padding: 20px;
    }
    details:open {
        background-color: var(--dialog-text-highlight);
        color: var(--primary-dark);
    }
    summary {
        border: var(--secondary-color) solid 10px;
        background-color: var(--dialog-text-highlight);
        color: var(--primary-dark);
        list-style-type: '⬇ ';
        cursor: pointer;
        text-align: center;
        font-size: 1.5rem;
    }
    summary::marker {
        color: var(--primary-dark);
        font-size: 1.7rem;
    }
    .img_fl{
        border-right: 4px solid skyblue;
    }
    .references-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
        padding: 20px;
        background: linear-gradient(135deg, var(--dialog-text-highlight) 0%, var(--secondary-dark) 100%);
        border-radius: 10px;
        border-left: 4px solid var(--secondary-dark);
        margin: 20px 0;
    }
    .reference {
        padding: 12px;
        background: var(--background);
        border-radius: 8px;
        box-shadow: var(--box-shadow);
        border-left: 3px solid var(--secondary-color);
    }
    .reference:hover {
        box-shadow: var(--box-shadow);
    }
    .reference strong {
        color: var(--primary-dark);
        font-size: 0.9em;
    }
    .reference a {
        color: var(--secondary-dark);
        text-decoration: none;
        font-size: 0.9em;
        word-break: break-all;
    }

    /* Breadcrumb Navigation Styles */
    .crumbs {
        border-radius: 7px;
        border-right: 4px solid var(--primary-color);
        padding-top:-20px;
    }
    .bread-crumbs{
        display: flex;
        gap: 10px;
        justify-content: flex-end;
    }
    .crumb-link{
     padding: 10px;
    }
    .crumb-link b {
        text-decoration: underline;
    }

        /* Dropdown Button */
   /* Hide the actual checkbox */
    .dropdown-toggle {
      display: none;
    }
    /* Style the label to look like a button */
    .dropdown-label {
      cursor: pointer;
      color: var(--primary-color);
    }
    .dropdown-label b {
      text-decoration: underline;
    }
    /* The container <div> - needed to position the dropdown content */
    .dropdown {
      position: relative;
      display: inline-block;
    }
    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    /* Links inside the dropdown */
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    /* --- The Magic Rule --- */
    /* When the checkbox is checked, show the dropdown-content that is a sibling */
    .dropdown-toggle:checked ~ .dropdown-content {
      display: block;
    }
    /* Change color of dropdown links on hover */
    .dropdown-content a:hover, .dropdown-content a:focus {background-color: #ddd;}
    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content, .dropdown:focus .dropdown-content {display: block;}

    @media (max-width: 768px) {
        .container {
            margin: 10px;
            border-radius: 10px;
        }
        .section {
            padding: 20px;
        }

        .nav-links {
            grid-template-columns: 1fr;
        }
        .paragraphStoryBox{
            margin-top: 5%;
        }
        .bread-crumbs{
            font-size: .7rem;
            gap: 0;

        }
        .crumbs{
            border-right: none;
        }
    }
    @media (min-width: 768px) {
        pre {
            font-size: 1.5rem;
        }
    }
    @media (max-width: 500px) {
        .bread-crumbs{
            font-size: .5rem;
            gap: 0;

        }.dropdown-content a {
            font-size: 1rem;
        }
    }
    </style>
    <?php
}

function content(){
    ?>

<?php
        //when Translating make an array for the Ids of the sections,
        //they are used in the conclusion I noticed this on Matthew's Gosple section.
}

function teachings()  {
?>
</section>
<?php
    if (isset($_GET['intro'])):
        // Below is a <section> that ends after the <nav>.
        ?>

<section class="section fullbar">
<nav class="crumbs">
<div class="bread-crumbs">
    <a href="?intro#^" class="crumb-link">📚 <b>Introduction</b></a>
    <a href="?gospels#^" class="crumb-link">🌟 All Gospels</a>
    <a href="?Matthew#^" class="crumb-link">📖 Matthew</a>
    <a href="?John#^" class="crumb-link">💫 John</a>
    <a href="?Luke#^" class="crumb-link">❤️ Luke</a>
    <a href="?Mark#^" class="crumb-link">⚡ Mark</a>
    <a href="?conclusion#^" class="crumb-link">🎯 Conclusion</a>
</div>
</nav>
    <h1 id="^"><span class="emoji">📚</span>What This Guide Is About</h1>
    <p>Hi there! This guide is all about the amazing things Jesus taught when He lived on Earth about 2,000 years ago.
        Jesus was God's son, and He came to teach people how to live good lives and how to love God and each other.</p>
    <p>The stories about Jesus are written in four special books called the Gospels. These books are named Matthew,
        Mark, Luke, and John - after the people who wrote them. Each writer told the story of Jesus in their own way,
        kind of like how you and your friends might tell the same story but focus on different parts.</p>
    <div class="highlight-box">
        <p><strong>Think of it like this:</strong> if you went to an amazing birthday party, you might tell your mom
            about the games you played. Your sister might tell about the delicious cake. Your brother might talk about
            the funny clown. And your friend might describe the cool decorations. You all went to the same party, but
            you each noticed different things that were special to you.</p>
    </div>
    <p>That's exactly what happened with the four Gospel writers. They all knew about Jesus and His teachings, but each
        one wrote about the parts that were most important for the people they were writing to.</p>
    <h3><span class="emoji">💖</span>Why Jesus's Teachings Matter</h3>
    <p>Jesus taught people how to be kind, loving, and good. His teachings help us know how to treat our families,
        friends, and even people we don't know very well. He taught about being honest, helping others, and loving God
        with all our hearts.</p>
</section>
<?php /*
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
*/
    elseif (isset($_GET['gospels'])):
/*
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
*/
?>

<section id="^" class="section fullbar">
<nav class="crumbs">
<div class="bread-crumbs">
    <a href="?intro#^" class="crumb-link">📚 Introduction</a>
    <a href="?gospels#^" class="crumb-link">🌟 <b>All Gospels</b></a>
    <a href="?Matthew#^" class="crumb-link">📖 Matthew</a>
    <a href="?John#^" class="crumb-link">💫 John</a>
    <a href="?Luke#^" class="crumb-link">❤️ Luke</a>
    <a href="?Mark#^" class="crumb-link">⚡ Mark</a>
    <a href="?conclusion#^" class="crumb-link">🎯 Conclusion</a>
</div>
</nav>
    <h1><span class="emoji">🌟</span>Teachings Found in Multiple Gospel Books</h1>
    <p>When something appears in more than one Gospel book, it means it was really, really important. It's like when
        all your teachers at school tell you the same rule - you know it must be super important!
        The same goes for when at work, people get fired for breaking the rules.</p>

    <h3 id="Olivet Discourse"><span class="emoji">🏔️</span>The Big Talk About the End Times</h3>
    <p>One of the most important teachings that appears in three of the four Gospel books is when Jesus talked about
        what would happen in the future. This is sometimes called the "Olivet Discourse" because Jesus gave this
        talk on a hill called the Mount of Olives.</p>

    <div class="highlight-box">
        <h4>What Jesus Taught About the Future</h4>
        <!--His friends are his disciples.-->
        <p>Jesus told His friends that someday He would come back to Earth. But before that happened,
            there would be some difficult times. He wanted to prepare them so they wouldn't be scared or confused.
        </p>
        <p>Jesus said there would be wars and earthquakes and other scary things. But He told His followers not to
            worry because God would take care of them. He said the most important thing was to keep loving God and
            being ready for when He comes back.</p>
    </div>

    <div class="highlight-box">
        <details>
            <summary>Matthew</summary>In Matthew <a href="https://ebible.org/study/?v1=MT23_1&w1=bible&t1=local%3Aeng-web" title="Matthew 23:1">(23-25)</a>,
            the author provides the most comprehensive account of this discourse. Matthew's presentation includes not only the prophetic elements found in the
            other Gospels but also additional parables and teachings about judgment and preparedness.
            The discourse begins with Jesus's denunciation of the scribes and Pharisees in chapter 23,
            moves through prophecies about the destruction of Jerusalem and signs of the end times in chapter 24,
            and concludes with parables about the final judgment in chapter 25. This extended treatment reflects Matthew's systematic
            approach to organizing Jesus's teachings and his emphasis on Jesus as the authoritative teacher and judge.
        </details>

        <details>
            <summary>Mark</summary>In Mark <a href="https://ebible.org/study/?v1=MK13_5&w1=bible&t1=local%3Aeng-web" title="Mark 13:5">(13:5-37)</a>,
            the author offers a more concise but equally powerful presentation of the same material.
            Mark's account focuses primarily on the prophetic warnings and signs, maintaining his characteristic emphasis on immediate action and urgency.
            The use of the word "immediately" throughout Mark's Gospel creates a sense of pressing concern that permeates his version of the Olivet Discourse.
            Mark's presentation serves his overall theme of Jesus as the suffering servant whose followers must be prepared for persecution and tribulation.
        </details>

        <details>
            <summary>Luke</summary>In Luke <a href="https://ebible.org/study/?v1=LK21_5&w1=bible&t1=local%3Aeng-web" title="Luke 21:5">(21:5-36)</a>,
            the author provides yet another perspective on this crucial teaching.
            Luke's account includes unique elements that reflect his concern for Gentile readers and his emphasis on the universal scope of Jesus's message.
            Luke's version contains specific warnings about the destruction of Jerusalem that are more detailed than those found in
            Matthew and Mark, possibly reflecting Luke's writing after the actual destruction of the temple in 70 AD.
        </details>

        <details>
            <summary>John</summary>
            Rather than including a direct parallel to the Olivet Discourse, John incorporates
            eschatological themes throughout his Gospel, particularly in the Farewell Discourse
            <a href="https://ebible.org/study/?v1=JN13_1&w1=bible&t1=local%3Aeng-web" title="John 13">(John 13-17)</a>.
            John's emphasis on eternal life as a present reality rather than merely a future hope provides
            a different theological perspective on the same ultimate concerns addressed in the Olivet Discourse.
        </details>

        <p>Think of it like this: if your parents told you they were going on a trip but would come back, they might
        give you instructions about what to do while they're gone. They'd want you to be good, and be ready for when
        they return.
        That's kind of what Jesus was doing - giving His friends instructions for while He was away.</p>
    </div>

    <h3><span class="emoji">📚</span>Jesus's Story-Lessons (<a href="../JesusChrist/parables#^">Parables</a>)</h3>
    <p>All four Gospel writers tell us that Jesus loved to teach using stories. These weren't just any stories -
        they were special stories with important meanings.</p>
    <div class="story-box">
        <h4>Why Jesus Used Stories</h4>
        <p>Jesus used stories because they help people remember important lessons. Just like how you might remember
            a story your grandma told you better than a list of rules for some task or project.
            Also people remembered Jesus's stories and the lessons they taught.</p>
    </div>
</section>

<?php /*
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
*/
    elseif (isset($_GET['Matthew'])):
/*
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
*/
?>
<section id="^" class="section fullbar">
<nav class="crumbs">
<div class="bread-crumbs">
    <a href="?intro#^" class="crumb-link">📚 Introduction</a>
    <a href="?gospels#^" class="crumb-link">🌟 All Gospels</a>
    <a href="?Matthew#^" class="crumb-link">📖 <b>Matthew</b></a>
    <a href="?John#^" class="crumb-link">💫 John</a>
    <a href="?Luke#^" class="crumb-link">❤️ Luke</a>
    <a href="?Mark#^" class="crumb-link">⚡ Mark</a>
    <a href="?conclusion#^" class="crumb-link">🎯 Conclusion</a>
</div>
</nav>
    <h1><span class="emoji">📖</span>Matthew's Special Teachings</h1>
    <p>Matthew was really good at organizing things. If Matthew were your teacher, he would probably have the most
        organized classroom with everything in its proper place! Matthew collected Jesus's teachings and organized
        them into five big groups. Each group teaches us something different about how to follow Jesus.</p>

        <h2><small>The Five Discourses: Structure and Significance</small></h2>
        <p>Matthew's organization of Jesus's teachings into five distinct discourses represents one
            of the most sophisticated literary structures in the New Testament <sup>[<a href="?conclusion#[1]">1</a>]</sup>.
        </p>
        <h3>Biblical scholars have long recognized that these five discourses are marked by a distinctive closing formula:</h3>
        <p>"when Jesus had finished speaking" or similar phrases that appear at
            <a href="https://ebible.org/study/?v1=MT7_28&w1=bible&t1=local%3Aeng-web"   title="Matthew 7:28">7:28</a>,
            <a href="https://ebible.org/study/?v1=MT11_1&w1=bible&t1=local%3Aeng-web"   title="Matthew 11:1">11:1</a>,
            <a href="https://ebible.org/study/?v1=MT13_53&w1=bible&t1=local%3Aeng-web"  title="Matthew 13:53">13:53</a>,
            <a href="https://ebible.org/study/?v1=MT19_1&w1=bible&t1=local%3Aeng-web"   title="Matthew 19:1">19:1</a>,
            <a href="https://ebible.org/study/?v1=MT26_1&w1=bible&t1=local%3Aeng-web"   title="Matthew 26:1">26:1</a>
            <sup>[<a href="?conclusion#[2]">2</a>]</sup>.
         This structural pattern creates a framework that some scholars have compared to the five books of the Pentateuch,
         suggesting that Matthew intended to present Jesus as a new Moses delivering a new law to God's people.</p>
        <p><a href="https://circeinstitute.org/blog/author/brian-phillips/">Brian Phillips</a>'s analysis of these discourses reveals an even more sophisticated
            structure, demonstrating how Matthew uses these five blocks of teaching to retell the
            entire Old Testament narrative, showing Jesus as the fulfillment of all previous
            revelation <sup>[<a href="?conclusion#[1]">1</a>]</sup>.
            Each discourse corresponds to a different period of Old Testament history,
            from the giving of the law at Sinai through the prophetic warnings of judgment and
            restoration. This structure serves Matthew's overarching theological purpose of
            demonstrating Jesus's role as the culmination of Jewish history and prophecy.
        </p>

    <h3 id="Sermon on the Mount"><span class="emoji">⛰️</span>Lesson 1: The Sermon on the Mount (How to Live a Good Life)</h3>
    <p>This is probably the most famous teaching Jesus ever gave.
        He went up on a mountain and taught a huge crowd of people about how to live in a way that makes God happy.</p>

    <div class="highlight-box">
        <h4>The Beatitudes (The "Blessed Are" Sayings
            <a href="https://ebible.org/study/?v1=MT5_3&w1=bible&t1=local%3Aeng-web" title="Matthew 5:3">Matthew 5:3-12</a>)</h4>
        <p>Jesus started by telling people about different kinds of people who are blessed
            (which means God is especially happy with them and will take care of them). Here are some examples in simple words:</p>
        <ul style="margin-left: 20px; margin-top: 10px;">
            <li>Blessed are the poor in spirit: for theirs is the kingdom of heaven.</li>
            <li>Blessed are they that mourn: for they shall be comforted.</li>
            <li>Blessed are the meek: for they shall inherit the earth.</li>
            <li>Blessed are they which do hunger and thirst after righteousness: for they shall be filled.</li>
            <li>Blessed are the merciful: for they shall obtain mercy.</li>
            <li>Blessed are the pure in heart: for they shall see God.</li>
            <li>Blessed are the peacemakers: for they shall be called the children of God.</li>
            <li>Blessed are they which are persecuted for righteousness' sake: for theirs is the kingdom of heaven.</li>
            <li>Blessed are ye, when men shall revile you, and persecute you, and shall say all manner of evil against you falsely, for my sake.</li>
            <li>Rejoice, and be exceeding glad: for great is your reward in heaven: for so persecuted they the prophets which were before you.</li>
        </ul>
    </div>

    <div class="story-box">
        <h4>The Antitheses (<a href="https://ebible.org/study/?v1=MT5_21&w1=bible&t1=local%3Aeng-web" title="Matthew 5:21">Matthew 5:21-48</a>)</h4>
        <p>Represent Jesus's most direct engagement with
            Jewish law and tradition. Six times Jesus uses the formula "You have heard that it was
            said... but I say to you," demonstrating his authority to interpret and even supersede
            traditional interpretations of the law. These teachings address anger, adultery, divorce,
            oaths, retaliation, and love for enemies, consistently calling for a higher standard of
            righteousness that goes beyond external compliance to internal transformation.</p>
    </div>

    <h4><span class="emoji">🙏</span><a href="https://www.vaticannews.va/en/prayers/our-father.html">The Lord's Prayer
            </a>(<a href="https://ebible.org/study/?v1=MT6_9&w1=bible&t1=local%3Aeng-web" title="Matthew 6:9">Matthew 6:9-13</a>)</h4>
    <p>Jesus taught His followers how to pray.</p>
    <ul style="margin-left: 20px;">
        <li>Our Father who art in heaven,</li>
        <li>hallowed be thy name.</li>
        <li>Thy kingdom come.</li>
        <li>Thy will be done</li>
        <li>on earth, as it is in heaven.</li>
        <li>Give us this day</li>
        <li>our daily bread,</li>
        <li>and forgive us our trespasses,</li>
        <li>as we forgive those who trespass against us,</li>
        <li>and lead us not into temptation,</li>
        <li>but deliver us from evil.</li>
    </ul>

    <div class="story-box">
        <h4>Teachings on Worry and Judgment
            (<a href="https://ebible.org/study/?t1=local%3Aeng-web&w1=bible&v1=MT6_25" title="Matthew 6:25">Matthew 6:25</a> &
            <a href="https://ebible.org/study/?t1=local%3Aeng-web&w1=bible&v1=MT7_1" title="Matthew 7:1">Matthew 7:1</a>)</h4>
        <p>This teaching addresses practical concerns of daily life while maintaining focus on spiritual priorities. Jesus's teaching
            about not worrying about food and clothing, illustrated with references to birds and lilies, has
            provided comfort and guidance to countless believers throughout history.
            The famous teaching about not judging others establishes principles for community life and interpersonal relationships.</p>
    </div>

    <div class="story-box">
        <h4>The Golden Rule and Narrow Gate (<a href="https://ebible.org/study/?t1=local%3Aeng-web&w1=bible&v1=MT7_7" title="Matthew 7:7">Matthew 7:7-14</a>)</h4>
        <p>This teaching provides both positive guidance for ethical behavior and warnings about the difficulty of the Christian path.
            The Golden Rule, <b>"Therefore, whatever you want men to do to you, do also to them"</b> (<a href="https://ebible.org/study/?t1=local%3Aeng-web&w1=bible&v1=MT7_12" title="Matthew 7:12">Matthew 7:12</a>),
            has become one of the most widely recognized ethical principles in human history, transcending religious boundaries to influence secular ethics and law.
            The Sermon on the Mount concludes with the <a href="parables#:~:text=The%20Wise%20and%20Foolish%20Builders">Parable of the Two Builders</a>
            (<a href="https://ebible.org/study/?t1=local%3Aeng-web&w1=bible&v1=MT7_24" title="Matthew 7:24">Matthew 7:24-27</a>),
            which emphasizes the importance of not merely hearing Jesus's words but putting them into practice.
            This conclusion reinforces the practical nature of Jesus's teaching and the necessity of obedience for those who would be his disciples.</p>
    </div>

    <h3 id="The Mission Discourse"><span class="emoji">🔔</span>The Mission Discourse
    </h3>
    <div class="highlight-box">
        <p>This Second Discourse: The Mission Discourse (<a href="https://ebible.org/study/?v1=MT10_1&w1=bible&t1=local%3Aeng-web" title="Matthew 10">Matthew 10</a>), also known as the Little Commission, provides detailed
            instructions for the Twelve Apostles as they embark on their first missionary journey.
            This discourse reveals Jesus's understanding of the challenges facing his followers and
            his expectations for their ministry approach.</p>
        <h4>The Commissioning (<a href="https://ebible.org/study/?v1=MT10_1&w1=bible&t1=local%3Aeng-web" title="Matthew 10:1-4">Matthew 10:1-4</a>)</h4>
        <p>begins with Jesus giving the twelve disciples
            authority over unclean spirits and power to heal diseases. The naming of the twelve
            apostles establishes the foundation of Jesus's earthly ministry and foreshadows the
            leadership structure of the early church. This delegation of authority demonstrates
            Jesus's intention to extend his ministry through his followers rather than limiting it to his
            personal presence.</p>
        <h4>Instructions for Ministry (<a href="https://ebible.org/study/?v1=MT10_5&w1=bible&t1=local%3Aeng-web" title="Matthew 10:5-15">Matthew 10:5-15</a>)</h4>
        <p>provide specific guidance for the apostles'
            mission strategy. Jesus's instruction to go "only to the lost sheep of the house of Israel"
            reflects the initial focus of his earthly ministry on the Jewish people, though this
            limitation would later be expanded to include all nations. The instructions about
            traveling light, accepting hospitality, and responding to rejection establish principles for
            Christian ministry that continue to guide missionary work today.</p>
        <h4>Warnings About Persecution (<a href="https://ebible.org/study/?v1=MT10_16&w1=bible&t1=local%3Aeng-web" title="Matthew 10:16-25">Matthew 10:16-25</a>)</h4>
        <p>prepare the disciples for the
            opposition they will face. Jesus's famous instruction to be "wise as serpents and
            harmless as doves" (<a href="https://ebible.org/study/?v1=MT10_16&w1=bible&t1=local%3Aeng-web" title="Matthew 10:16">Matthew 10:16</a>) provides a model for navigating hostile
            environments while maintaining Christian integrity. The warnings about family division
            and persecution before governors and kings proved prophetic as the early church faced
            systematic opposition from both religious and political authorities.</p>
        <h4>Teachings on Fear and Confession (<a href="https://ebible.org/study/?v1=MT10_26&w1=bible&t1=local%3Aeng-web" title="Matthew 10:26-33">Matthew 10:26-33</a>)</h4>
        <p>address the psychological and
            spiritual challenges of discipleship under persecution. Jesus's repeated exhortation "do
            not fear" acknowledges the natural human response to danger while calling for
            supernatural courage based on trust in God's care and protection. The teaching about
            confessing Christ before men establishes the public nature of Christian faith and the
            importance of bold witness even in difficult circumstances.</p>
        <h4>The Cost of Discipleship (<a href="https://ebible.org/study/?v1=MT10_34&w1=bible&t1=local%3Aeng-web" title="Matthew 10:34-42">Matthew 10:34-42</a>)</h4>
        <p>presents some of Jesus's most
            challenging teachings about the demands of following him. The statement "I did not
            come to bring peace but a sword" (<a href="https://ebible.org/study/?v1=MT10_34&w1=bible&t1=local%3Aeng-web" title="Matthew 10:34">Matthew 10:34</a>) has often been misunderstood, but in
            context it refers to the inevitable conflict that arises when the Gospel challenges existing
            social and religious structures. The teaching about taking up one's cross and losing
            one's life to find it establishes the paradoxical nature of Christian discipleship, where
            apparent loss leads to ultimate gain.</p>
    </div>

    <h3 id="The Parabolic Discourse"><span class="emoji">🔔</span>The Parabolic Discourse</h3>
    <div class="highlight-box">
        <p>In this third Discourse: The Parabolic Discourse represents Jesus's most systematic presentation of Kingdom
            teaching through the use of parables. This discourse includes seven parables specifically
            about the Kingdom of Heaven, each revealing different aspects of God's reign and its
            impact on human life and society.</p>
        <h4>The Setting and Method </h4>
        <p><a href="https://ebible.org/study/?v1=MT13_1&w1=bible&t1=local%3Aeng-web" title="Matthew 13:1-3">Matthew 13:1-3</a>
            establishes the context for Jesus's parabolic
            teaching. The movement from the house to the seaside, where Jesus teaches from a
            boat to crowds on the shore, creates a natural amphitheater that allows his voice to
            carry to large numbers of people. The introduction of parabolic teaching at this point in
            Matthew's Gospel marks a significant shift in Jesus's pedagogical approach, moving
            from direct instruction to indirect revelation through stories and metaphors.</p>
        <h4><a href="parables#:~:text=The%20Sower">The Parable of the Sower</a></h4>
        <p><a href="https://ebible.org/study/?v1=MT13_3&w1=bible&t1=local%3Aeng-web" title="Matthew 13:3-9">Matthew 13:3-9</a>,
            and <a href="https://ebible.org/study/?v1=MT13_18&w1=bible&t1=local%3Aeng-web" title="Matthew 13:18-23">Matthew 13:18-23</a>
            serves as both the first parable and
            the interpretive key for understanding Jesus's parabolic method. The detailed
            explanation that Jesus provides to his disciples reveals the allegorical nature of many
            parables and establishes the principle that spiritual understanding requires divine
            illumination. The four types of soil represent different responses to the Gospel message,
            from immediate rejection to fruitful acceptance.</p>
        <h4>The Purpose of Parables</h4>
        <p><a href="https://ebible.org/study/?v1=MT13_10&w1=bible&t1=local%3Aeng-web" title="Matthew 13:10-17">Matthew 13:10-17</a>
            addresses the disciples' question why Jesus speaks in parables.
            Jesus's explanation that parables both reveal and conceal truth,
            depending on the spiritual condition of the hearer, demonstrates the selective
            nature of divine revelation. This teaching establishes the principle that spiritual
            understanding is a gift from God rather than merely the result of human intelligence or
            effort.</p>
        <h4><a href="parables#:~:text=The%20Parable%20of%20the%20Wheat%20and%20the%20Weeds">The Parable of the Tares</a></h4>
        <p><a href="https://ebible.org/study/?v1=MT13_24&w1=bible&t1=local%3Aeng-web" title="Matthew 13:24-30">Matthew 13:24-30</a>
            and <a href="https://ebible.org/study/?v1=MT13_36&w1=bible&t1=local%3Aeng-web" title="Matthew 13:36-43">Matthew 13:36-43</a>
            addresses the problem of evil in the world and God's ultimate plan for dealing with it.
            The image of wheat and tares growing together until harvest provides comfort for believers
            who struggle with the presence of evil in the world while warning of ultimate judgment for
            those who reject God's rule. The detailed explanation emphasizes the role of angels in the
            final judgment and the eternal consequences of human choices.</p>
        <h4><a href="parables#:~:text=Illustrates%20how%20God's%20kingdom%20starts%20small%20but%20grows%20enormously">The Parables of Growth</a></h4>
        <p><a href="https://ebible.org/study/?v1=MT13_31&w1=bible&t1=local%3Aeng-web">Matthew 13:31-33</a>
            By the use of the images of <a href="parables#:~:text=The%20Mustard%20Seed">mustard seed</a> and <a href="parables#:~:text=The%20Leaven">leaven</a> to illustrate the Kingdom's surprising growth from small beginnings to great
            influence. These parables encourage believers who might be discouraged by the
            apparent insignificance of the Kingdom's early manifestations while warning opponents
            not to underestimate its ultimate power and scope.</p>
        <h4><a href="parables#:~:text=Reveals%20the%20supreme%20value%20of%20God's%20kingdom,%20worth%20sacrificing%20everything%20to%20obtain">The Parables of Value</a></h4>
        <p><a href="https://ebible.org/study/?v1=MT13_44&w1=bible&t1=local%3Aeng-web">Matthew 13:44-46</a>
            employ the images of <a href="parables#:~:text=The%20Hidden%20Treasure">hidden treasure</a> and
            <a href="parables#:~:text=The%20Pearl%20of%20Great%20Price">pearl of great price</a> to illustrate the supreme worth of the Kingdom of Heaven.
            These parables emphasize the joy and sacrifice involved in obtaining the Kingdom,
            suggesting that those who truly understand its value will gladly give up everything else to possess it.</p>
        <h4><a href="parables#:~:text=The%20Fish%20Net">The Parable of the Net</a></h4>
        <p><a href="https://ebible.org/study/?v1=MT13_47&w1=bible&t1=local%3Aeng-web">Matthew 13:47-50</a>
            concludes the public portion of the discourse with another judgment parable, emphasizing the mixed nature of the
            Kingdom's earthly manifestation and the certainty of final separation between the
            righteous and the wicked. This parable reinforces the themes of the <a href="parables#:~:text=The%20Parable%20of%20the%20Wheat%20and%20the%20Weeds">Tares parable</a>while
            using the familiar image of fishing to make the teaching accessible to Jesus's audience.</p>
    </div>

    <h3 id="The Discourse on the Church"><span class="emoji">🔔</span>The Discourse on the Church</h3>
    <div class="highlight-box">
        <p>The Fourth Discourse: The Discourse on the Church represents Matthew's unique contribution to
            understanding Christian community life and church governance. This discourse is
            particularly significant because Matthew is the only Gospel to use the word
            "church" (<b><a href="https://www.google.com/search?q=Ekklesia" title="Google Definition">Ekklesia</a></b> in Greek, <b><a href="https://www.google.com/search?q=Ecclesiam">Ecclesiam</a></b> in Latin), appearing twice in this section (<a href="https://ebible.org/study/?v1=MT16_18&w1=bible&t1=local%3Aeng-kjv">Matthew 16:18</a> and <a href="https://ebible.org/study/?v1=MT18_17&w1=bible&t1=local%3Aeng-kjv">Matthew 18:17</a>) <sup>[<a href="?conclusion#:~:text=Christianity%20Applied.%20&quot;The%20Discourses%20of%20Christ%20in%20Chronological%20Order.&quot;%20Christianity%20Applied.%20January%202025.">4</a>]</sup>. The teachings
            in this discourse have profoundly influenced Christian understanding of church
            discipline, forgiveness, and community relationships.</p>
        <h4>The Question of Greatness</h4>
        <p><a href="https://ebible.org/study/?v1=MT18_5&w1=bible&t1=local%3Aeng-web">Matthew 18:1-5</a> begins the discourse with the disciples' question about who is greatest in the Kingdom of Heaven.
            Jesus's response, using a child as an object lesson, overturns conventional notions of greatness and establishes
            humility as the fundamental virtue for Kingdom citizens. This teaching sets the tone for
            the entire discourse, emphasizing that Christian community operates according to
            different principles than worldly organizations.</p>
        <h4>Warnings Against Causing Sin</h4>
        <p><a href="https://ebible.org/study/?v1=MT18_6&w1=bible&t1=local%3Aeng-web">Matthew 18:6-9</a> address the serious responsibility that
            comes with influence over others, particularly those who are vulnerable or new in faith.
            The severe language about millstones and cutting off hands and feet emphasizes the
            gravity of leading others into sin and the lengths to which believers should go to avoid
            such behavior. These teachings establish the principle of corporate responsibility within
            the Christian community.</p>
        <h4><a href="parables#:~:text=The%20Lost%20Sheep">The Parable of the Lost Sheep</a></h4>
        <p><a href="https://ebible.org/study/?v1=MT18_10&w1=bible&t1=local%3Aeng-web">Matthew 18:10-14</a>
            illustrates God's concern for every individual believer and establishes the responsibility of church leaders to seek out and
            restore those who have wandered from the faith. This parable emphasizes the value that
            God places on each person and the joy that results from restoration and reconciliation.</p>
        <h4>Church Discipline</h4>
        <p><a href="https://ebible.org/study/?v1=MT18_15&w1=bible&t1=local%3Aeng-web">Matthew 18:15-20</a> provides the most detailed instructions in the
            New Testament for handling conflicts and sin within the Christian community. The four-
            step process of private confrontation, witnesses, church involvement, and ultimate
            exclusion establishes principles for maintaining both truth and love in community
            relationships. The promise that "where two or three are gathered together in My name,
            I am there in the midst of them" (<a href="https://ebible.org/study/?v1=MT18_20&w1=bible&t1=local%3Aeng-web">Matthew 18:20</a>)
            has become one of the most beloved assurances in Christian worship and fellowship.</p>
        <h4><a href="parables#:~:text=The%20Unmerciful%20Servant">The Parable of the Unforgiving Servant</a></h4>
        <p><a href="https://ebible.org/study/?v1=MT18_21&w1=bible&t1=local%3Aeng-web">Matthew 18:21-35</a> concludes the discourse
            with a powerful illustration of the relationship between divine forgiveness and human
            forgiveness. Peter's question about forgiving "up to seven times" receives Jesus's
            response of "seventy times seven," indicating that forgiveness should be unlimited. The
            parable that follows demonstrates that those who have received God's forgiveness must
            extend the same grace to others, with serious consequences for those who fail to do so.</p>
    </div>

    <h3 id="The Olivet Discourse"><span class="emoji">🔔</span>The Olivet Discourse</h3>
    <div class="highlight-box">
        <p>The Fifth Discourse: The Olivet Discourse represents the culmination of Matthew's presentation of Jesus's
            teaching ministry, combining prophetic warnings, ethical instruction, and eschatological
            revelation. This discourse is the longest single block of teaching in Matthew's Gospel and
            addresses some of the most challenging questions about God's justice, human
            responsibility, and the ultimate destiny of the world.</p>
        <h4>Woes Against the Pharisees</h4>
        <p><a href="https://ebible.org/study/?v1=MT23_1&w1=bible&t1=local%3Aeng-web">Matthew 23:1-36</a>
            begins the discourse with a scathing denunciation of religious hypocrisy and false leadership.
            The seven woes pronounced against the scribes and Pharisees serve as both specific criticism of first-century Jewish
            leadership and timeless warnings against religious pride and corruption. These
            teachings establish Jesus's authority to judge religious institutions and leaders while
            warning against the dangers of external religiosity without internal transformation.</p>
        <h4>Lament Over Jerusalem</h4>
        <p><a href="https://ebible.org/study/?v1=MT23_37&w1=bible&t1=local%3Aeng-web">Matthew 23:37-39</a>
            reveals Jesus's heart for his people
            despite their rejection of his message. The image of gathering Jerusalem's children "as a
            hen gathers her chicks under her wings" demonstrates the tender love that motivates
            even the harshest prophetic warnings. The prediction that Jerusalem will not see Jesus
            again "till you say, 'Blessed is He who comes in the name of the Lord'" points forward to
            his second coming and ultimate vindication.</p>
        <h4>Prophecies of Destruction</h4>
        <p><a href="https://ebible.org/study/?v1=MT24_1&w1=bible&t1=local%3Aeng-web">Matthew 24:1-35</a>
            address the disciples' questions about the destruction of the temple and the signs of Jesus's coming.
            These prophecies have been the subject of extensive interpretation throughout Christian history,
            with some seeing fulfillment in the destruction of Jerusalem in 70 AD and others looking for future
            fulfillment. The warnings about false messiahs, wars, famines, and persecution provide
            guidance for believers living in times of crisis and uncertainty.</p>
        <h4>Parables of Preparedness</h4>
        <p><a href="https://ebible.org/study/?v1=MT24_36&w1=bible&t1=local%3Aeng-web">Matthew 24:36-25:30</a>
            emphasize the importance of readiness for Jesus's return, since the exact timing remains unknown.
            The Parable of the Faithful Servant, the Ten Virgins, and the Talents all stress the need for vigilance,
            wisdom, and faithful stewardship during the period of waiting.
            These parables have provided comfort and motivation for believers throughout
            the centuries who have looked forward to Christ's return.</p>
        <h4>The Final Judgment</h4>
        <p><a href="https://ebible.org/study/?v1=MT25_31&w1=bible&t1=local%3Aeng-web">Matthew 25:31-46</a>
            concludes the discourse with Jesus's most detailed description of the last judgment.
            The separation of sheep and goats based on acts of mercy toward "the least of these"
            has profoundly influenced Christian understanding of social responsibility and the relationship between faith and works.
            This passage establishes the principle that genuine faith necessarily expresses itself in
            love and service to others, particularly those who are most vulnerable and needy.</p>
    </div>

    <h3><span class="emoji">📖</span>Matthew's Theological Contribution</h3>
    <div class="highlight-box">
        <p>Matthew's five discourses represent far more than a collection of Jesus's teachings;
            they constitute a carefully crafted theological presentation of Jesus as the authoritative
            teacher and interpreter of God's will. The systematic organization of these discourses
            reflects Matthew's concern to present Jesus's message in a way that would be accessible
            to Jewish readers while establishing the foundation for Christian doctrine and practice.</p>
        <p>The progression from the <a href="#Sermon%20on%20the%20Mount">Sermon on the Mount's</a>
            establishment of Kingdom principles through the <a href="#The%20Mission%20Discourse">Mission Discourse's</a>
            instructions for ministry, the <a href="#The%20Parabolic%20Discourse">Parabolic Discourse's</a>
            revelation of Kingdom mysteries, the <a href="#The%20Discourse%20on%20the%20Church">Church Discourse's</a>
            guidance for community life, and the <a href="#The%20Olivet%20Discourse">Olivet Discourse's</a>
            warnings about judgment creates a comprehensive curriculum for Christian discipleship.
            Each discourse builds upon the previous ones while addressing different aspects of the Christian life and mission.</p>
        <p>Matthew's emphasis on Jesus's words rather than merely his actions reflects the evangelist's
            understanding that Jesus came not only to demonstrate God's power but to reveal God's will
            through authoritative teaching. The careful preservation and organization of these discourses
            has made Matthew's Gospel the primary source for Christian ethics, church governance, and
            eschatological understanding throughout the history of the church.</p>
    </div>
</section>






<?php
    elseif (isset($_GET['John'])):
?>




<section id="^" class="section fullbar">
<nav class="crumbs">
<div class="bread-crumbs">
    <a href="?intro#^" class="crumb-link">📚 Introduction</a>
    <a href="?gospels#^" class="crumb-link">🌟 All Gospels</a>
    <a href="?Matthew#^" class="crumb-link">📖 Matthew</a>
    <div class="dropdown crumb-link">
        <input type="checkbox" id="dropdown-toggle" class="dropdown-toggle">
        <label for="dropdown-toggle" class="dropdown-label">💫 <b>John</b></label>
          <div class="dropdown-content">
            <a href="#Unique Sermons and Discourses">Unique Sermons and Discourses</a>
            <a href="#The Word Made Flesh">The Word Made Flesh</a>
            <a href="#The New Birth">The New Birth</a>
            <a href="#Living Water">Living Water</a>
            <a href="#Divine Authority">Divine Authority</a>
            <a href="#The Bread of Life">The Bread of Life</a>
            <a href="#The Light of the World">The Light of the World</a>
            <a href="#The Good Shepherd">The Good Shepherd</a>
            <a href="#The Farewell Discourse">The Farewell Discourse</a>
            <a href="#Theological Contribution">Theological Contribution</a>
          </div>
    </div>
    <a href="?Luke#^" class="crumb-link">❤️ Luke</a>
    <a href="?Mark#^" class="crumb-link">⚡ Mark</a>
    <a href="?conclusion#^" class="crumb-link">🎯 Conclusion</a>
</div>
</nav>
    <h1><span class="emoji">💫</span>John's Special Teachings</h1>
    <p>John was like the friend who always asked the deep questions.
        While the other Gospel writers focused on what Jesus did and said,
        John was really interested in helping people understand who Jesus really was and why He came to Earth.</p>
        <div class="highlight-box">
        <p><span class="emoji" style="font-size:1.7rem;">🏃</span>John's presentation of Jesus's discourses thus provides essential theological content
        that complements the more practical and ethical focus of the Synoptic Gospels.
        Together, these diverse presentations of Jesus's teaching create a comprehensive
        portrait of Christ as both the authoritative teacher of God's will and the divine revealer of
        God's nature. The theological depth and spiritual richness of John's discourses have
        made this Gospel particularly beloved by those seeking to understand the mysteries of
        faith and the nature of relationship with God through Christ.</p>
        </div>

    <h2><span class="emoji">🍞</span>"I Am the Bread of Life"</h2>
    <div class="highlight-box">
        <p>After Jesus fed 5,000 people with just five loaves of bread and two fish, the people wanted more free
            food. But Jesus told them something more important: <strong>"I am the bread of life. Anyone who comes to
            me will never be hungry, and anyone who believes in me will never be thirsty."</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_35" title="John 6:35">
                <small><ruby>John<rt>6:35</rt></ruby></small></a></p>
        <p>Jesus wasn't talking about regular bread that fills your stomach. He was talking about spiritual food
            that fills your heart and soul. Just like your body needs food to grow strong, your spirit needs Jesus to grow strong.</p>
    </div>

    <h2><span class="emoji">💡</span>"I Am the Light of the World"</h2>
    <div class="story-box">
        <p class="paragraphStoryBox">Jesus said, <strong>"I am the light of the world.
            Whoever follows me will never walk in darkness but will have the light of life."</strong>
        <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN8_12" title="John 8:12">
            <small><ruby>John<rt>8:12</rt></ruby></small></a> Think about what happens when you're in a dark room and someone turns on the light.
        Suddenly you can see everything clearly! That's what Jesus does for our lives. Before we know Jesus, it's
        like we're walking around in the dark, not sure which way to go or what's right and wrong. But when
        Jesus comes into our lives, it's like someone turned on a bright light.</p>
    </div>

    <h2><span class="emoji">🐑</span>"I Am the Good Shepherd"</h2>
    <div class="story-box">
        <p class="paragraphStoryBox">Jesus said, <strong>"I am the good shepherd. The good shepherd gives his life for the sheep."</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN10_11" title="John 10:11-18">
            <small><ruby>John<rt>10:11</rt></ruby></small></a> In Jesus's time, shepherds took care of sheep.
            A good shepherd would protect the sheep from wolves and other dangerous animals,
            even if it meant getting hurt himself. Jesus was saying that He's like a good shepherd,
            and we're like His sheep. He loves us so much that He was willing to die on the cross
            to save us from our sins (the wrong things we do).</p>
    </div>

    <h2><span class="emoji">🌅</span>Jesus and Nicodemus: Being Born Again</h2>
    <cite>Nicodemus was a religious leader who came to talk to Jesus at night.</cite>
    <div class="story-box">
    <p class="paragraphStoryBox"> Jesus told him something that confused him:
        <strong>"You must be born again."</strong> <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_3" title="John 3:3">
        <small><ruby>John<rt>3:3</rt></ruby></small></a>
        Nicodemus was confused because he thought Jesus was talking about being born as a baby again, which is impossible!
        But Jesus explained that He wasn't talking about physical birth. He was talking about spiritual birth.
        When we believe in Jesus and ask Him to be our Savior, it's like being born again spiritually. God gives us a
        new heart that wants to love Him and do good things.</p>
        <p>Jesus told Nicodemus the most famous verse in the Bible: <strong>"For God so loved the world that he gave his one and only Son,
            that whoever believes in him shall not perish but have eternal life."</strong>
                <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_16" title="John 3:16">
            <small><ruby>John<rt>3:16</rt></ruby></small></a>
            This means God loves everyone so much that He sent Jesus to die for our sins so we could live with God forever.
        </p>
    </div>

    <h2 id="Unique Sermons and Discourses" style="justify-content: center;"><span class="emoji">🌟</span>John's Unique Sermons and Discourses</h2>
    <div class="highlight-box">
        <p>The Gospel of John stands apart from the <a href="https://en.wikipedia.org/wiki/Synoptic_Gospels" title="Wikipedia">Synoptic Gospels</a>
            (<a href="?Matthew#^" title="Matthew's Special Teachings">Matthew</a>,
            <a href="?Mark#^" title="Mark's Special Way of Telling the Story">Mark</a>, and
            <a href="?Luke#^" title="Luke's Special Teachings">Luke</a>)
            in its presentation of Jesus's teachings. While the Synoptics often present Jesus speaking
            in brief sayings and parables, John records extended theological discourses that explore
            profound questions about Jesus's identity, his relationship with the Father, and the
            nature of salvation. These discourses represent some of the most theologically rich
            material in the New Testament and have profoundly influenced Christian doctrine,
            particularly regarding Christology, pneumatology, and soteriology.</p>
        <h3><span class="emoji">🌟</span>John's Distinctive Approach to Jesus's Teachings</h3>
        <div class="story-box">
            <p class="paragraphStoryBox">John's approach to Jesus's teachings differs significantly from the Synoptic Gospels in
                several important ways. First, John presents Jesus's words in longer, more developed
                discourses rather than the brief sayings and parables that characterize the Synoptics.
                Second, John's Jesus speaks in a distinctive theological vocabulary, using terms like
                <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN1_4" title="John 1:4">"life,"</a>
                <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN1_7" title="John 1:7">"light,"</a>
                <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN1_14" title="John 1:14">"truth,"</a>
                and <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_35" title="John 3:35">"love"</a>
                as central metaphors for his ministry and identity.
                Third, John frequently presents Jesus's teachings as responses to specific encounters or
                controversies, embedding them in narrative contexts that illuminate their meaning and significance.</p>
            <p>The purpose of John's Gospel, as stated in <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN20_31" title="John 20:31">John 20:31</a>,
                is <strong>"that you may believe that Jesus is the Christ, the Son of God, and that believing you may have life in His name."</strong>
                This explicit evangelistic and theological purpose shapes John's presentation of Jesus's discourses,
                focusing them on questions of Jesus's identity and the nature of salvation through faith in him.
                In John's Gospel, Jesus consistently points to himself as the source of eternal life,
                making claims about his divine nature and authority that are more explicit than those found in the Synoptic Gospels.</p>
        </div>
    </div>

    <h3 id="The Word Made Flesh"><span class="emoji">🌟</span>The Word Made Flesh <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN1_1" title="John 1:1-18">
        John 1:1-18</a></small></h3>
    <div class="story-box">
        <p class="paragraphStoryBox">
            The Prologue to John's Gospel, while not a discourse of Jesus in the strict sense,
            establishes the theological framework for understanding all of Jesus's subsequent
            teachings in this Gospel. This poetic introduction presents Jesus as the eternal Word
            (<a href="https://en.wikipedia.org/wiki/Logos" title="Wikipedia">Logos</a>).
            <strong>"In the beginning was the Word, and the Word was with God, and the Word was God."</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN1_1" title="John 1:1"><small><ruby>John<rt>1:1</rt></ruby></small></a></p>
        <p>The Divine <b>Word</b> establishes Jesus's pre-existence, divine nature, and role
            in creation. The declaration that <strong>"the Word was God"</strong>
            represents one of the most explicit statements of Jesus's divinity in the New Testament.
            The identification of Jesus as the source of <strong>"life"</strong> and <strong>"light"</strong>
            introduces key metaphors that will recur throughout the Gospel, particularly in Jesus's own self-descriptions.</p>
        <h3>The Witness of John the Baptist</h3>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN1_6" title="John 1:6-8"><ruby>John<rt>1:6-8</rt></ruby></a>
        & <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN1_15" title="John 1:15"><ruby>John<rt>1:15</rt></ruby></a></span>
        <p>establishes the relationship between
            <a href="https://www.vaticannews.va/en/liturgical-holidays/memorial-of-the-passion-of-saint-john-the-baptist.html"title="Memorial of the Passion of Saint John the Baptist">
                John the Baptist</a> and Jesus, <strong>"He was not the light, but was sent that he might testify about the light."</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN1_8"title="John 1:8"><small><ruby>John<rt>1:8</rt></ruby></small></a>
            This clarification addresses potential confusion about John's role and establishes the proper relationship between the forerunner and the Messiah.</p>
        <h4>The Incarnation and Revelation</h4>
        <span class="passage"><a href="https://ebible.org/study/?v1=JN1_9&t1=local%3Aeng-web&w1=bible" title="John 1:9-14 & 16-18<"><ruby>John<rt>1:9-14 & 16-18</rt></ruby></a></span>
        <p>describes the Word's entrance into the world and humanity's varied responses to him.
            The statement that <strong>"He came to His own, and His own did not receive Him"</strong>
            <a href="https://ebible.org/study/?v1=JN1_11&t1=local%3Aeng-web&w1=bible" title="John 1:11"><small><ruby>John<rt>1:11</rt></ruby></small></a>
            anticipates the rejection that Jesus will face throughout the Gospel. The promise that <strong>"those who receive him become 'children of God'"</strong>
            <a href="https://ebible.org/study/?v1=JN1_12&t1=local%3Aeng-web&w1=bible" title="John 1:12"><small><ruby>John<rt>1:12</rt></ruby></small></a>
            introduces the theme of spiritual rebirth that will be developed in Jesus's discourse with
            <a href="https://www.vaticannews.va/en/pope/news/2025-03/pope-francis-nicodemus-finds-hope-in-encounter-with-jesus.html#:~:text=Jesus%20illuminates%20the%20darkness%20of%20the%20heart"title="Nicodemus finds hope in encounter with Jesus">
                Nicodemus</a>.</p>
        <p>The Prologue concludes with the declaration that <strong>"No one has seen God at any time.
            The only begotten Son, who is in the bosom of the Father, He has declared Him"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN1_18" title="John 1:18"><small><ruby>John<rt>1:18</rt></ruby></small></a>
            This statement establishes Jesus as the definitive revelation of God, a theme that will be
            central to his discourses throughout the Gospel. Jesus's claim to reveal the Father
            becomes one of the most distinctive aspects of his teaching in John's Gospel.</p>
    </div>

    <h3 id="The New Birth"><span class="emoji">🌟</span>The New Birth <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_1-21" title="John 3:1-21">
        John 3:1-21</a></small></h3>
    <div class="story-box">
        <p class="paragraphStoryBox">
            The Discourse with Nicodemus:  Jesus's conversation represents the first major discourse in John's
            Gospel and introduces several themes that will be developed throughout the narrative.
            This nighttime encounter with a member of the Jewish ruling council addresses fundamental questions about spiritual transformation and the nature of salvation.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_1" title="John 3:1-8"><ruby>John<rt>3:1-8</rt></ruby></a></span>
        <p>The conversation begins with Nicodemus's acknowledgment of Jesus as <strong>"a teacher come from God"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_2" title="John 3:2"><small><ruby>John<rt>3:2</rt></ruby></small></a>
            based on the signs he has performed. Jesus's response, <strong>“Most certainly I tell you, unless one is born anew, he can’t see God’s Kingdom.”</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_3" title="John 3:3"><small><ruby>John<rt>3:3</rt></ruby></small></a>,
            shifts the conversation from Jesus's identity to the radical transformation required for entrance into God's kingdom. The subsequent discussion of being
            <strong>"born of water and the Spirit"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_5" title="John 3:5"><small><ruby>John<rt>3:5</rt></ruby></small></a>
            establishes the supernatural nature of this transformation and its essential role in salvation.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_9" title="John 3:9-15"><ruby>John<rt>3:9-15</rt></ruby></a></span>
        <p>The Heavenly Witness addresses Nicodemus's confusion about spiritual rebirth with an assertion of Jesus's unique authority to speak about heavenly things. The reference:
            <strong>"No one has ascended into heaven but he who descended out of heaven, the Son of Man, who is in heaven"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_13" title="John 3:13"><small><ruby>John<rt>3:13</rt></ruby></small></a>
            and <strong>"As Moses lifted up the serpent in the wilderness, even so must the Son of Man be lifted up,"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_14" title="John 3:14"><small><ruby>John<rt>3:14</rt></ruby></small></a>
            introduces both the incarnation and the crucifixion as essential aspects of Jesus's redemptive mission.
            The comparison to Moses lifting up the serpent in the wilderness provides an Old Testament type for understanding Jesus's death as the source of healing and salvation.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_16" title="John 3:16-21"><ruby>John<rt>3:16-21</rt></ruby></a></span>
        <p>God's Love and Judgment contains what is perhaps the most famous verse in the Bible:
            <strong>"For God so loved the world that He gave His only begotten Son, that whoever believes in Him should not perish but have everlasting life"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_16" title="John 3:16"><small><ruby>John<rt>3:16</rt></ruby></small></a>
            This statement encapsulates the Gospel message and establishes God's love as the motivation for salvation.
            The subsequent discussion of judgment clarifies that condemnation results not from God's desire but from human rejection of the light that has come into the world.</p>
        <p>This discourse establishes several key themes that will recur throughout John's Gospel:
            the necessity of spiritual transformation, Jesus's heavenly origin and authority, salvation through faith in Christ,
            and the division of humanity based on their response to the light.
            The conversation with Nicodemus also introduces John's characteristic technique of using misunderstanding as a teaching opportunity, as Nicodemus's literal interpretation of
            <strong>~born again~</strong> <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN3_4" title="John 3:4"><small><ruby>John<rt>3:4</rt></ruby></small></a>
            allows Jesus to clarify the spiritual nature of the rebirth he describes.</p>
    </div>

    <h3 id="Living Water"><span class="emoji">🌟</span>Living Water <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN4_1-42" title="John 4:1-42">John 4:1-42</a></small></h3>
    <div class="story-box">
        <p class="paragraphStoryBox">
            Jesus's conversation with the Samaritan woman at Jacob's well represents another
            significant discourse in John's Gospel, addressing themes of worship, spiritual thirst,
            and Jesus's messianic identity. This encounter crosses multiple social boundaries—
            gender, ethnicity, and moral status—demonstrating the universal scope of Jesus's
            mission and message.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN4_1" title="John 4:1-15"><ruby>John<rt>4:1-15</rt></ruby></a></span>
        <p>The Request for Water begins with Jesus's simple request for a drink,
            which surprises the Samaritan woman because of the hostility between Jews and
            Samaritans. Jesus redirects the conversation by offering living water.
            <strong>“If you knew the gift of God, and who it is who says to you, ‘Give me a drink,’ you would have asked him, and he would have given you living water.”</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN4_10" title="John 4:10"><small><ruby>John<rt>4:10</rt></ruby></small></a><br />
            <strong>"but whoever drinks of the water that I will give him will never thirst again; but the water that I will give him will become in him a well of water springing up to eternal life."</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN4_14" title="John 4:14"><small><ruby>John<rt>4:14</rt></ruby></small></a>
            This metaphor of living water builds on Old Testament imagery of God as the source of living water
            (<a href="https://ebible.org/study/?v1=JR2_13&t1=local%3Aeng-web&w1=bible">Jeremiah 2:13 </a>, <a href="https://ebible.org/study/?v1=JR17_13&t1=local%3Aeng-web&w1=bible">Jeremiah 17:13</a>)
            while pointing to the spiritual satisfaction that comes through relationship with Christ.</p>
            <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN4_16" title="John 4:16-24"><ruby>John<rt>4:16-24</rt></ruby></a></span>
            <p>True Worship shifts to a discussion of worship after Jesus demonstrates supernatural knowledge of the woman's marital history.
            When she raises the question of the proper location for worship—Mount Gerizim for Samaritans or Jerusalem for Jews— Jesus transcends the geographical dispute by declaring that
            <strong>"the hour is coming, and now is, when the true worshipers will worship the Father in spirit and truth for the Father seeks such to be his worshipers."</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN4_23" title="John 4:23"><small><ruby>John<rt>4:23</rt></ruby></small></a>
            This teaching establishes that authentic worship depends not on location but on the worshiper's spiritual condition and relationship with God.</p>
        <span class="passage"><a href="https://ebible.org/study/?v1=JN4_25&t1=local%3Aeng-web&w1=bible" title="John 4:25"><ruby>John<rt>4:25-26</rt></ruby></a></span>
        <p>The Messiah's Self-Revelation represents one of the clearest declarations of Jesus's messianic identity in the Gospels.
            When the woman mentions the coming Messiah who <strong>"will tell us all things,"</strong>
            <a href="https://ebible.org/study/?v1=JN4_25&t1=local%3Aeng-web&w1=bible" title="John 4:25"><small><ruby>John<rt>4:25</rt></ruby></small></a>
            Jesus responds with the direct statement, <strong>"I who speak to you am He"</strong>
            <a href="https://ebible.org/study/?v1=JN4_26&t1=local%3Aeng-web&w1=bible" title="John 4:26"><small><ruby>John<rt>4:26</rt></ruby></small></a>. This explicit self-identification as the Messiah contrasts with the more
            guarded approach found in the Synoptic Gospels, where Jesus often discourages public declarations of his messianic status.</p>
        <span class="passage"><a href="https://ebible.org/study/?v1=JN4_27&t1=local%3Aeng-web&w1=bible" title="John 4:27-42"><ruby>John<rt>4:27-42</rt></ruby></a></span>
        <p>The discourse extends to include Jesus's conversation with his disciples about spiritual harvest and the subsequent belief of many Samaritans.
            Jesus's statement that <strong>"the fields... are already white for harvest"</strong>
            <a href="https://ebible.org/study/?v1=JN4_35&t1=local%3Aeng-web&w1=bible" title="John 4:35"><small><ruby>John<rt>4:35</rt></ruby></small></a>
            establishes the urgency of the evangelistic mission while his discussion of sowers and reapers acknowledges the cooperative nature of spiritual ministry.
            The Samaritans' confession that Jesus is <strong>"the Savior of the world"</strong>
            <a href="https://ebible.org/study/?v1=JN4_42&t1=local%3Aeng-web&w1=bible" title="John 4:42"><small><ruby>John<rt>4:42</rt></ruby></small></a>
            emphasizes the universal scope of his mission beyond the boundaries of Judaism. This discourse demonstrates Jesus's concern for those marginalized
            by religious and social structures while establishing principles for authentic worship that transcend cultural and geographical limitations.
            The woman's transformation from skeptic to evangelist illustrates the life-changing impact of encountering Jesus and recognizing his true identity.</p>
    </div>

    <h2 id="Divine Authority"><span class="emoji">🌟</span>Divine Authority <small><a href="https://ebible.org/study/?v1=JN5_1&t1=local%3Aeng-web&w1=bible" title="John 5">John 5</a></small></h2>
    <div class="story-box">
        <p class="paragraphStoryBox">Following the healing of a paralyzed man at the pool of Bethesda on the Sabbath, Jesus
            delivers a discourse on his relationship with the Father and his divine authority.
            This teaching addresses the Jewish leaders' objections to Sabbath healing while making
            some of the most explicit claims about Jesus's divine identity and authority found in the Gospels.</p>
        <span class="passage"><a href="https://ebible.org/study/?v1=JN5_1&t1=local%3Aeng-web&w1=bible" title="John 5:1-18"><ruby>John<rt>5:1-18</rt></ruby></a></span>
        <p>The Sabbath Controversy begins with Jesus healing a man who had been paralyzed for thirty-eight years.
            When the Jewish leaders object to the man carrying his mat on the Sabbath and later to Jesus healing on the Sabbath,
            Jesus responds with the statement, <br /><strong>"My Father has been working until now, and I have been working"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN5_17" title="John 5:17"><small><ruby>John<rt>5:17</rt></ruby></small></a>.
            This claim to a unique relationship with God as Father and to divine prerogative regarding the Sabbath provokes charges of blasphemy and intensifies the conflict with religious authorities.</p>
        <span class="passage"><a href="https://ebible.org/study/?v1=JN5_19&t1=local%3Aeng-web&w1=bible" title="John 5:19-23"><ruby>John<rt>5:19-23</rt></ruby></a></span>
        <p>The Son's Relationship with the Father establishes the intimate
            connection between Jesus's actions and the Father's will. Jesus's statement that <strong>"the
            Son can do nothing of Himself, but what He sees the Father do"</strong> <a href="https://ebible.org/study/?v1=JN5_19&t1=local%3Aeng-web&w1=bible" title="John 5:19"><small><ruby>John<rt>5:19</rt></ruby></small></a>
            emphasizes his perfect alignment with the Father's purposes while his claim that <strong>"all should honor the Son just as they honor the Father"</strong>
            <a href="https://ebible.org/study/?v1=JN5_23&t1=local%3Aeng-web&w1=bible" title="John 5:23"> <small><ruby>John<rt>5:23</rt></ruby></small></a>
            asserts his right to divine worship. This teaching establishes Jesus's divine authority while maintaining the distinction between the Father and the Son.</p>
        <span class="passage"><a href="https://ebible.org/study/?v1=JN5_24&t1=local%3Aeng-web&w1=bible" title="John 5:24-30"><ruby>John<rt>5:24-30</rt></ruby></a></span>
        <p>Life and Judgment addresses Jesus's authority to give life and execute judgment.
            The promise that <strong>"he who hears My word and believes in Him who sent Me has everlasting life"</strong>
            <a href="https://ebible.org/study/?v1=JN5_24&t1=local%3Aeng-web&w1=bible" title="John 5:24"> <small><ruby>John<rt>5:24</rt></ruby></small></a>
            establishes faith in Christ as the path to eternal life. The declaration that <strong>"the hour is coming,
            and now is, when the dead will hear the voice of the Son of God; and those who hear will live"</strong>
            <a href="https://ebible.org/study/?v1=JN5_25&t1=local%3Aeng-web&w1=bible" title="John 5:25"> <small><ruby>John<rt>5:25</rt></ruby></small></a>
            refers both to spiritual resurrection in the present and physical resurrection in the future.
            Jesus's claim to be the judge of all humanity based on the Father's delegation of <strong>"authority to execute judgment"</strong>
            <a href="https://ebible.org/study/?v1=JN5_27&t1=local%3Aeng-web&w1=bible" title="John 5:27"><small><ruby>John<rt>5:27</rt></ruby></a></small>
            represents one of the most explicit assertions of divine prerogative in the Gospels.</p>
        <span class="passage"><a href="https://ebible.org/study/?v1=JN5_31&t1=local%3Aeng-web&w1=bible" title="John 5:31-47"><ruby>John<rt>5:31-47</rt></ruby></a></span>
        <p>Witnesses to Jesus addresses the question of evidence for Jesus's
            claims by citing four witnesses: John the Baptist, Jesus's miraculous works, the Father's
            direct testimony, and the Scriptures, particularly the writings of Moses. This section
            establishes the abundant evidence for Jesus's claims while exposing the underlying
            spiritual resistance that prevents the religious leaders from accepting this evidence.
            The indictment that <strong>"you are not willing to come to Me that you may have life"</strong>
            <small><a href="https://ebible.org/study/?v1=JN5_40&t1=local%3Aeng-web&w1=bible" title="John 5:40"><ruby>John<rt>5:40</rt></ruby></a></small>
            identifies the volitional rather than intellectual nature of their unbelief.
            This discourse establishes Jesus's divine authority in terms of his relationship with the
            Father, his power to give life and execute judgment, and his fulfillment of scriptural
            prophecy. The teaching represents one of John's clearest presentations of high
            <a href="https://www.google.com/search?q=Christology" title="Google Search">Christology</a>, establishing Jesus's divine nature and authority while maintaining the
            distinction between the Father and the Son.</p>
    </div>

    <h3 id="The Bread of Life"><span class="emoji">🌟</span>The Bread of Life<small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_22" title="John 6:22-59">John 6:22-59</a></small></h3>
    <div class="story-box">
        <p class="paragraphStoryBox">Following the <a href="https://en.wikipedia.org/wiki/Feeding_the_multitude#:~:text=The%20Feeding%20of%20the%205%2C000%20is%20also%20known%20as%20the,boy%20to%20feed%20a%20multitude.">feeding of the five thousand</a>, Jesus delivers the Bread of Life discourse,
            which develops the metaphor of spiritual nourishment and introduces the controversial teaching about eating his flesh and drinking his blood.
            This discourse represents one of the most challenging and divisive teachings in John's Gospel, leading many disciples to abandon Jesus.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_22" title="John 6:22"><ruby>John<rt>6:22</rt></ruby></a></span>
        <p>The Search for Jesus describes the crowds following Jesus to Capernaum after the miraculous feeding, setting the stage for the discourse that follows.
            Their pursuit of Jesus after receiving physical bread creates the opportunity for teaching
            about spiritual nourishment and eternal life.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_25" title="John 6:25"><ruby>John<rt>6:25-29</rt></ruby></a></span>
        <p>The Work of God begins with Jesus challenging the crowds' motivation,
            stating that they seek him <strong>"not because you saw the signs, but because you ate of the loaves and were filled"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_26" title="John 6:26"><small><ruby>John<rt>6:26</rt></ruby></small></a>.
            He redirects their focus from perishable food to <strong>"food which endures to everlasting life"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_27" title="John 6:27"><small><ruby>John<rt>6:27</rt></ruby></small></a>
            and defines "the work of God" as believing in the one God has sent. This establishes faith in Christ as the fundamental requirement for receiving eternal life.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_30" title="John 6:30-40"><ruby>John<rt>6:30-40</rt></ruby></a></span>
        <p>The True Bread from Heaven responds to the crowds' request for a sign
            comparable to the manna given through Moses. Jesus clarifies that it was not Moses but
            God who gave the manna and that God <strong>"gives you the true bread from heaven"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_32" title="John 6:32"><small><ruby>John<rt>6:32</rt></ruby></small></a>
            His declaration <strong>"I am the bread of life"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_35" title="John 6:35"><small><ruby>John<rt>6:35</rt></ruby></small></a>
            represents the first of seven <b><i>"I am"</i></b> statements in John's Gospel, each of which reveals an aspect of Jesus's identity and mission.
            The promise that <strong>"everyone who sees the Son and believes in Him may have everlasting life"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_40" title="John 6:40"><small><ruby>John<rt>6:40</rt></ruby></small></a>
            establishes faith in Christ as the path to eternal life.
            Murmuring and Divine Drawing <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_41-51" title="John 6:41-51">John 6:41-51</a>
            addresses the Jews' objection to Jesus's claim to have <b><i>"come down from heaven"</i></b> given their knowledge of his human parentage.
            Jesus responds by emphasizing the necessity of divine drawing: <strong>"No one can come to Me unless the Father who sent Me draws him"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_44" title="John 6:44"><small><ruby>John<rt>6:44</rt></ruby></small></a>
            This teaching establishes the supernatural nature of faith and the essential role of divine initiative in
            salvation. Jesus's statement that <strong>"he who believes in Me has everlasting life"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_47" title="John 6:47"><small><ruby>John<rt>6:47</rt></ruby></small></a>
            reiterates the centrality of faith while his declaration that
            <strong>"the bread that I shall give is My flesh, which I shall give for the life of the world"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_51" title="John 6:51"><small><ruby>John<rt>6:51</rt></ruby></small></a>
            introduces the sacrificial aspect of his mission.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_52" title="John 6:52-59"><ruby>John<rt>6:52-59</rt></ruby></a></span>
        <p>Eating Flesh and Drinking Blood presents Jesus's most controversial teaching in this discourse.
            His insistence that <strong>"unless you eat the flesh of the Son of Man and drink His blood, you have no life in you"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_53" title="John 6:53"><small><ruby>John<rt>6:53</rt></ruby></small></a>
            provokes strong objections from his hearers. The repeated emphasis on eating his flesh and drinking his blood, coupled with the promise that
            <strong>"he who eats My flesh and drinks My blood abides in Me, and I in him"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN6_56" title="John 6:56"><small><ruby>John<rt>6:56</rt></ruby></small></a>
            establishes the necessity of intimate spiritual union with Christ. While Christians have interpreted this teaching in various ways—some seeing it as
            a reference to the <a href="https://www.vatican.va/content/catechism/en/part_two/section_two/chapter_one/article_3/in_brief.html" title="Holy Communion">Eucharist</a><a href="https://www.vatican.va/content/catechism/en/part_two/section_two/chapter_one/article_3/i_the_eucharist_-_source_and_summit_of_ecclesial_life.html#$1KY"title="The Eucharist - Source and Summit of Ecclesial Life"><ruby><rd>[&#8544;]</rd></ruby></a>, others as a metaphor for faith—the emphasis on complete
            dependence on Christ's sacrificial death remains central to all interpretations.
            This discourse establishes Jesus as the source of spiritual nourishment and eternal life
            while emphasizing the necessity of faith in him. The challenging nature of the teaching,
            which led many disciples to turn away, demonstrates Jesus's unwillingness to
            compromise truth for popularity and establishes the dividing line between genuine
            discipleship and superficial following.</p>
    </div>

    <h3 id="The Light of the World"><span class="emoji">🌟</span>The Light of the World<small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN8_12-30">John 8:12-30</a></small></h3>
    <div class="story-box">
        <p class="paragraphStoryBox">Following the controversy over the woman caught in adultery, Jesus declares himself to be
            <b><i>"the light of the world"</i></b>
            and engages in a heated debate with the Pharisees about his
            identity and authority. This discourse develops the metaphor of light introduced in the
            Prologue and establishes Jesus's divine origin and mission.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN8_12-20" title="John 8:12-20"><ruby>John<rt>John 8:12-20</rt></ruby></a></span>
        <p>The Declaration and Challenge begins with Jesus's statement, <strong>"I am
            the light of the world. He who follows Me shall not walk in darkness, but have the light of
            life"</strong> <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN8_12"title="John 8:12"><ruby>John<rt>John 8:12</rt></ruby></a></small>.
            This second <b><i>"I am"</i></b> statement builds on the Old Testament imagery of
            God as light <a href="https://ebible.org/study/?v1=PS27_1&t1=local%3Aeng-web&w1=bible"title="Psalm 27:1">Psalm 27:1</a>,
            <a href="https://ebible.org/study/?v1=IS60_19&t1=local%3Aeng-web&w1=bible"title="Isaiah 60:19-20">Isaiah 60:19-20</a>
            while establishing Jesus as the source of spiritual illumination and guidance. The Pharisees' objection that Jesus bears witness to
            himself leads to a discussion of testimony and judgment, with Jesus asserting that his
            testimony is valid because of his knowledge of his origin and destination. His statement
            that <strong>"I am not alone, but I am with the Father who sent Me"</strong>
            <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN8_16"><ruby>John<rt>John 8:16</rt></ruby></a></small>
            establishes the divine validation of his mission.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN8_21"><ruby>John<rt>John 8:21-24</rt></ruby></a></span>
        <p>Origin and Destiny addresses the question of Jesus's identity in
            terms of his divine origin. His statement that <strong>"you are from beneath; I am from above"</strong> and
            <strong>"you are of this world; I am not of this world"</strong> <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN8_23"><ruby>John<rt>8:23</rt></ruby></a></small>
            establishes the fundamental distinction between his heavenly nature and human existence.
            The warning that <strong>"if you do not believe that I am He, you will die in your sins"</strong>
            <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN8_24"><ruby>John<rt>8:24</rt></ruby></a></small>
            establishes faith in Jesus's divine identity as essential for salvation. The use of <b><i>"I am"</i></b>
            (<a href="https://www.google.com/search?q=ego+eimi">ego eimi</a>) without a predicate echoes God's self-revelation to Moses in
            <a href="https://ebible.org/study/?v1=EX3_14&t1=local%3Aeng-web&w1=bible">Exodus 3:14</a> and
            represents one of John's subtle claims to Jesus's divinity.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN8_25"><ruby>John<rt>8:25-30</rt></ruby></a></span>
        <p>The Son's Relationship with the Father responds to the direct question <b><i>"Who are You?"</i></b>
            with reference to Jesus's consistent teaching and his relationship with the Father.
            The statement that <strong>"when you lift up the Son of Man, then you will know that I am He"</strong>
            <small><a href="https://ebible.org/study/?v1=JN8_28&t1=local%3Aeng-web&w1=bible"title="John 8:28"><ruby>John<rt>8:28</rt></ruby></a></small>
            points to the crucifixion as the ultimate revelation of Jesus's identity.
            The affirmation that <strong>"I always do those things that please Him"</strong>
            <small><a href="https://ebible.org/study/?v1=JN8_29&t1=local%3Aeng-web&w1=bible"title="John 8:29"><ruby>John<rt>8:29</rt></ruby></a></small>
            establishes Jesus's perfect obedience to the Father's will as the foundation of their relationship.</p>
        <p>This discourse establishes Jesus as the divine light who reveals truth and guides believers out of darkness.
            The emphasis on Jesus's heavenly origin and perfect alignment with the Father's will establishes his unique identity and authority
            while the promise of light to those who follow him offers hope of spiritual illumination and guidance.</p>
    </div>

    <h2 id="The Good Shepherd"><span class="emoji">🌟</span>
        The Good Shepherd <small><a href="https://ebible.org/study/?v1=JN10_1&t1=local%3Aeng-web&w1=bible">John 10:1-18</a></small></h2>
    <div class="story-box">
        <p class="paragraphStoryBox">
            Following the healing of the man born blind and the subsequent controversy with the
            Pharisees, Jesus delivers the Good Shepherd discourse, which uses pastoral imagery to
            describe his relationship with his followers and his sacrificial mission. This teaching
            develops the contrast between true and false spiritual leadership while establishing
            Jesus's unique role as the divinely appointed savior.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN10_1"><ruby>John<rt>John 10:1-6</rt></ruby></a></span>
        <p>The Sheepfold Analogy begins with a distinction between the shepherd who enters by the door and thieves and robbers who climb in another way.
            This analogy establishes the legitimacy of Jesus's ministry in contrast to false leaders who lack divine authorization.
            The description of the sheep recognizing the shepherd's voice and following him establishes the intimate relationship between Jesus
            and his followers and their ability to discern his authentic leadership.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN10_7"><ruby>John<rt>John 10:7-10</rt></ruby></a></span>
        <p>Jesus as the Door presents the third <b><i>"I am"</i></b> statement: <strong>"I am the door of the sheep"</strong>
            <small><a href="https://ebible.org/study/?v1=JN10_7&t1=local%3Aeng-web&w1=bible"><ruby>John<rt>10:7</rt></ruby></a></small>.
            This metaphor establishes Jesus as the exclusive means ofentrance into God's flock and the source of salvation.
            The contrast between thieves who <strong>"steal, and kill, and destroy" and Jesus who came "that they may have life, and that they may have it more abundantly"</strong>
            <small><a href="https://ebible.org/study/?v1=JN10_10&t1=local%3Aeng-web&w1=bible"><ruby>John<rt>10:10</rt></ruby></a></small>
            establishes the life-giving purpose of Jesus's mission in contrast to the destructive influence of false leaders.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN10_11"><ruby>John<rt>John 10:11-18</rt></ruby></a></span>
        <p>Jesus as the Good Shepherd presents the fourth <b><i>"I am"</i></b> statement: <strong>"I am the good shepherd"</strong>
            <small><a href="https://ebible.org/study/?v1=JN10_11&t1=local%3Aeng-web&w1=bible"><ruby>John<rt>10:11</rt></ruby></a></small>.
            This metaphor builds on Old Testament imagery of God as the shepherd of Israel
            (<a href="https://ebible.org/study/?v1=PS23_1&t1=local%3Aeng-web&w1=bible">Psalm 23</a>, <a href="https://ebible.org/study/?v1=EK34_1&t1=local%3Aeng-web&w1=bible">Ezekiel 34</a>)
            while emphasizing Jesus's sacrificial love: <strong>"The good shepherd gives His life for the sheep"</strong>
            <small><a href="https://ebible.org/study/?v1=JN10_11&t1=local%3Aeng-web&w1=bible"><ruby>John<rt>10:11</rt></ruby></a></small>.
            The contrast between the good shepherd and the hireling who abandons the sheep in danger
            establishes the depth of Jesus's commitment to his followers. The statement that <strong>"I lay down My life for the sheep"</strong>
            <small><a href="https://ebible.org/study/?v1=JN10_15&t1=local%3Aeng-web&w1=bible"><ruby>John<rt>10:15</rt></ruby></a></small>
            anticipates Jesus's sacrificial death while the declaration that <strong>"I have power to lay it down, and I have power to take it again"</strong>
            <small><a href="https://ebible.org/study/?v1=JN10_18&t1=local%3Aeng-web&w1=bible"><ruby>John<rt>10:18</rt></ruby></a></small>
            points to his resurrection and establishes his divine authority over life and death.
            This discourse establishes Jesus as both the exclusive means of salvation <b><i>(the door)</i></b> and
            the sacrificial protector of his people <b><i>(the good shepherd)</i></b>. The emphasis on Jesus's
            voluntary sacrifice, his intimate knowledge of his followers, and his divine commission
            establishes the unique nature of his redemptive mission and the security of those who belong to his flock.</p>
    </div>

    <h2 id="The Farewell Discourse"><span class="emoji">🌟</span>
        The Farewell Discourse <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN13_1">John 13-17</a></small></h2>
    <div class="highlight-box">
        <p>The Farewell Discourse represents the longest and most comprehensive teaching section
            in John's Gospel, spanning five chapters and addressing a wide range of topics related to
            Jesus's departure, the coming of the Holy Spirit, and the future of the disciples.
            This extended teaching, delivered on the night of Jesus's betrayal, provides essential
            guidance for the disciples as they face the challenges of continuing Jesus's mission in his
            physical absence.</p>
        <div class="story-box"><h3><span class="emoji">🦶🫧</span>The Foot Washing and New Commandment
        <small><a href="https://ebible.org/study/?v1=JN13_1&t1=local%3Aeng-web&w1=bible">John 13:1-35</a></small></h3>
            <p>The Foot Washing and New Commandment begins with Jesus's
            symbolic act of washing the disciples' feet, demonstrating humble service as the model
            for Christian leadership. Peter's resistance and Jesus's insistence establish the necessity
            of receiving Jesus's cleansing ministry. The subsequent teaching about the betrayer
            leads to Judas's departure, after which Jesus gives the new commandment:
            <strong>"Love one another; as I have loved you"</strong>
            <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN13_34"><ruby><ruby>John<rt>13:34</rt></ruby></ruby></a></small>.
            This establishes sacrificial love as the distinguishing mark of Christian community and the primary ethical imperative for Jesus's followers.</p>
        </div>
        <div class="story-box"><h3><span class="emoji">🌱</span>The Way, the Truth, and the Life
        <small><a href="https://ebible.org/study/?v1=JN14_1&t1=local%3Aeng-web&w1=bible">John 14:1-14</a></small></h3>
            <p>The Way, the Truth, and the Life addresses the disciples' anxiety about
            Jesus's departure with promises of reunion and continued relationship. The assurance
            that Jesus goes to prepare a place in the Father's house offers hope of ultimate reunion
            while the declaration <strong>"I am the way, the truth, and the life. No one comes to the Father except through Me"</strong>
            <small><a href="https://ebible.org/study/?v1=JN14_6&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>14:6</rt></ruby></ruby></a></small>
            establishes Jesus as the exclusive mediator between God and humanity.
            The teaching about Jesus's unity with the Father—<strong>"He who has seen Me has seen the Father"</strong>
            <small><a href="https://ebible.org/study/?v1=JN14_9&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>14:9</rt></ruby></ruby></a></small>
            establishes Jesus as the definitive revelation of God while the promise of greater works through prayer in Jesus's name establishes the
            ongoing power available to his followers.</p>
        </div>
        <div class="story-box"><h3><span class="emoji">🕊️</span>The Promise of the Holy Spirit
        <small><a href="https://ebible.org/study/?v1=JN14_15&t1=local%3Aeng-web&w1=bible">John 14:15-31</a></small></h3>
            <p>The Promise of the Holy Spirit addresses the apparent abandonment
            the disciples will experience at Jesus's departure by promising:
            <strong>I will pray to the Father, and he will give you another Counselor, that he may be with you forever</strong>
            <small><a href="https://ebible.org/study/?v1=JN14_16&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>14:16</rt></ruby></ruby></a></small>.
            The identification of this Helper as <strong>"the Spirit of truth"</strong>
            <small><a href="https://ebible.org/study/?v1=JN14_17&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>14:17</rt></ruby></ruby></a></small>
            establishes the Holy Spirit's role in guiding believers into truth while the
            promise that <strong>"I will not leave you orphans; I will come to you"</strong>
            <small><a href="https://ebible.org/study/?v1=JN14_18&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>14:18</rt></ruby></ruby></a></small>
            suggests Jesus's continued presence through the Spirit. The teaching about the indwelling of the
            Father, Son, and Spirit establishes the intimate communion between God and believers
            while the promise of peace—<strong>"My peace I give to you"</strong>
            <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN14_27"><ruby><ruby>John<rt>14:27</rt></ruby></ruby></a></small>
            offers comfort in the face of tribulation.</p>
        </div>
        <div class="story-box"><h3><span class="emoji">🍇</span>The True Vine
        <small><a href="https://ebible.org/study/?v1=JN15_1&t1=local%3Aeng-web&w1=bible">John 15:1-17</a></small></h3>
            <p>The True Vine presents the fifth <b><i>"I am"</i></b> statement: <strong>"I am the true vine"</strong>
            <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN15_1"><ruby><ruby>John<rt>15:1</rt></ruby></ruby></a></small>.
            This metaphor establishes the organic connection between Jesus and
            his followers and the necessity of <b><i>"abiding"</i></b> in him for spiritual fruitfulness. The repeated
            emphasis on abiding—<strong>"He who abides in Me, and I in him, bears much fruit; for without Me you can do nothing"</strong>
            <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=JN15_5"><ruby><ruby>John<rt>15:5</rt></ruby></ruby></a></small>
            —establishes complete dependence on Christ as the essential condition for spiritual productivity.
            The restatement of the love commandment and the designation of the disciples as <b><i>"friends"</i></b> rather than servants establishes the
            intimate nature of their relationship with Jesus and the privilege of sharing in his mission.</p>
        </div>
        <div class="story-box"><h3><span class="emoji">🌎</span>The World's Hatred and the Spirit's Witness
        <small><a href="https://ebible.org/study/?v1=JN15_18&t1=local%3Aeng-web&w1=bible">John 15:18-16:15</a></small></h3>
            <p>The World's Hatred and the Spirit's Witness prepares the disciples
            for the opposition they will face from a hostile world. The warning that <strong>"if they persecuted Me, they will also persecute you"</strong>
            <small><a href="https://ebible.org/study/?v1=JN15_20&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>15:20</rt></ruby></ruby></a></small>
            establishes the inevitable conflict between Christ's followers and the world system. The promise of the Holy Spirit's coming to
            <strong>"convict the world of sin, and of righteousness, and of judgment"</strong>
            <small><a href="https://ebible.org/study/?v1=JN16_8&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>16:8</rt></ruby></ruby></a></small>
            establishes the Spirit's role in confronting unbelief while the promise to <strong>"guide you into all truth"</strong>
            <small><a href="https://ebible.org/study/?v1=JN16_13&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>16:13</rt></ruby></ruby></a></small>
            establishes the Spirit's role in illuminating believers. The assurance that the Spirit <strong>"will glorify Me"</strong>
            <small><a href="https://ebible.org/study/?v1=JN16_14&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>16:14</rt></ruby></ruby></a></small>
            establishes Christ-centeredness as the criterion for authentic spiritual ministry.</p>
        </div>
        <div class="story-box"><h3><span class="emoji">🥀 💫</span>Sorrow Turned to Joy
        <small><a href="https://ebible.org/study/?v1=JN16_16&t1=local%3Aeng-web&w1=bible">John 16:16-33</a></small></h3>
            <p>Sorrow Turned to Joy addresses the disciples' confusion and grief
            about Jesus's departure with promises of reunion and ultimate joy. The metaphor of a
            woman in labor, whose pain is forgotten in the joy of new life, illustrates how the
            disciples' temporary sorrow will be transformed into permanent joy. The promise of
            direct access to the Father <strong>"in My name"</strong> <small><a href="https://ebible.org/study/?v1=JN16_23&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>16:23</rt></ruby></ruby></a></small>
            establishes a new relationship with God based on Jesus's mediatorial work. The final assurance—
            <strong>"In the world you will have tribulation; but be of good cheer, I have overcome the world"</strong>
            <small><a href="https://ebible.org/study/?v1=JN16_33&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>16:33</rt></ruby></ruby></a></small>
            offers hope based on Jesus's ultimate victory over all opposing forces.</p>
        </div>
        <div class="story-box"><h3><span class="emoji">☁️</span>The High Priestly Prayer
        <small><a href="https://ebible.org/study/?v1=JN17_1&t1=local%3Aeng-web&w1=bible">John 17</a></small></h3>
            <p>The High Priestly Prayer concludes the Farewell Discourse with Jesus's
            extended prayer for himself, his disciples, and all future believers. The prayer for glorification—
            <strong>"Glorify Your Son, that Your Son also may glorify You"</strong>
            <small><a href="https://ebible.org/study/?v1=JN17_1&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>17:1</rt></ruby></ruby></a></small>
            establishes the mutual glorification of Father and Son through the work of redemption.
            The definition of eternal life as knowing <strong>"the only true God, and Jesus Christ whom You have sent"</strong>
            <small><a href="https://ebible.org/study/?v1=JN17_3&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>17:3</rt></ruby></ruby></a></small>
            establishes salvation in relational rather than merely temporal terms.
            The prayer for the disciples' protection, sanctification, and unity establishes
            Jesus's ongoing concern for his followers and his vision for the church's witness in the world.
            The final prayer for all believers <strong>"that they may be one" and "that the love with which You loved Me may be in them"</strong>
            <small><a href="https://ebible.org/study/?v1=JN17_26&t1=local%3Aeng-web&w1=bible"><ruby><ruby>John<rt>17:26</rt></ruby></ruby></a></small>
            establishes unity and love as the ultimate goals for the Christian community.</p>
        </div>
        <h3 style="text-align: center;"><span class="emoji">👋</span>The Farewell Discourse conclusion
        <small><a href="https://en.wikipedia.org/wiki/Farewell_Discourse"title="Wikipedia">John 13-17</a></small></h3>
            <p>The Farewell Discourse represents John's most comprehensive presentation of Jesus's
            teaching about the Christian life, the Holy Spirit's ministry, and the nature of the church.
            The emphasis on love, unity, truth, and abiding relationship with Christ establishes the
            fundamental principles of Christian spirituality and community life. The promises of the
            Spirit's presence, guidance, and power offer hope and assurance to believers facing the
            challenges of living as Christ's representatives in a hostile world.</p>
    </div>

    <h2 id="Theological Contribution"><span class="emoji">🏃</span>John's Theological Contribution</h2>
    <div class="highlight-box">
    <p>
        John's presentation of Jesus's discourses makes a unique and essential contribution to
        Christian theology and spirituality. The extended, theologically rich teachings recorded
        in this Gospel provide the foundation for Christian understanding of Jesus's divine
        nature, his relationship with the Father, the work of the Holy Spirit, and the nature of
        salvation through faith in Christ.
    </p>

    <p>
        The seven <b><i>"I am"</i></b> statements—
        <strong><a href="#The Bread of Life">"I am the bread of life"</a>,</strong>
        <strong><a href="#The Light of the World">"I am the light of the world"</a>,</strong>
        <strong><a href="https://desirejesus.com/blog/2019/11/24/jesus-said-i-am-the-door"title="Desire Jesus dotcom">"I am the door"</a>,</strong>
        <strong><a href="#The Good Shepherd">"I am the good shepherd"</a>,</strong>
        <strong><a href="#Living Water">"I am the resurrection and the life"</a>,</strong>
        <strong><a href="#The Farewell Discourse">"I am the way, the truth, and the life"</a>,</strong>
        <strong><a href="#The Farewell Discourse">"I am the true vine"</a></strong>
        —provide a multifaceted revelation of Jesus's identity and mission. Each metaphor illuminates a different aspect of Christ's
        relationship with believers and his role in God's redemptive plan. The emphasis on Jesus's divine origin and authority establishes high Christology as the
        foundation for Christian faith. The repeated claims to have come from the Father, to
        speak the Father's words, and to do the Father's works establish Jesus as the definitive
        revelation of God and the exclusive mediator of salvation. The teaching about Jesus's
        pre-existence, incarnation, and return to the Father creates a comprehensive
        Christological framework that complements and deepens the presentation found in the
        <a href="https://en.wikipedia.org/wiki/Synoptic_Gospels"title="Wikipedia">Synoptic Gospels</a>.
    </p>

    <p>
        The teaching about the Holy Spirit, particularly in the Farewell Discourse, provides the
        most detailed <a href="https://www.google.com/search?q=pneumatology"title="Google Search">pneumatology</a> in the Gospels. The promises of the Spirit's coming as
        <b><i>"another Helper,"</i></b> his role in guiding believers into truth, and his work of glorifying Christ
        establish the foundation for Christian understanding of the Spirit's ministry. The
        emphasis on the Spirit's role in continuing Jesus's work and mediating his presence to
        believers offers comfort and assurance to the church in every generation.
        The emphasis on eternal life as a present reality, not merely a future hope, establishes
        salvation as a transformative relationship with God through Christ. The teaching about
        being "<a href="#The New Birth">born again</a>," drinking <a href="#Living Water">"living water</a>," eating <a href="#The Bread of Life">"the bread of life</a>,"
        and abiding in <b><i>"the true vine"</i></b> provides rich metaphors for understanding the nature of spiritual life and
        growth. The emphasis on faith as the means of receiving eternal life establishes the
        fundamental principle of salvation by grace through faith that would become central to
        Christian <a href="https://en.wikipedia.org/wiki/Soteriology"title="Wikipedia">soteriology</a>.
    </p>
            </div>
</section>








<?php
    elseif (isset($_GET['Luke'])):
?>






<section id="^" class="section fullbar">    <!--LUKE-->
    <nav class="crumbs">
    <div class="bread-crumbs">
        <a href="?intro#^" class="crumb-link">📚 Introduction</a>
        <a href="?gospels#^" class="crumb-link">🌟 All Gospels</a>
        <a href="?Matthew#^" class="crumb-link">📖 Matthew</a>
        <a href="?John#^" class="crumb-link">💫 John</a>
        <a href="?Luke#^" class="crumb-link">❤️ <b>Luke</b></a>
        <a href="?Mark#^" class="crumb-link">⚡ Mark</a>
        <a href="?conclusion#^" class="crumb-link">🎯 Conclusion</a>
    </div>
    </nav>
    <h1><span class="emoji">❤️</span>Luke's Special Teachings</h1>
    <div class="highlight-box">
    <p>Luke was like the friend who always noticed when someone was left out and made sure to include them.
    Luke's Gospel is full of stories about Jesus caring for people that others might ignore - people who
    were poor, sick, lonely, or different.</p>

    <!-- <h2>Luke's Unique Sermons and Discourses</h2> -->
        <p>The Gospel of Luke contains a wealth of unique material not found in the other
        Gospels,
        including some of Jesus's most beloved parables and teachings. Luke's distinctive
        emphasis on Jesus's ministry to the marginalized, his concern for social justice, and his
        focus on prayer and the Holy Spirit create a portrait of Jesus that complements and
        enriches the presentations found in <a href="?Matthew#^">Matthew</a>, <a href="?Mark#^">Mark</a>, and <a href="?John#^">John</a>. Luke's unique
        contributions have profoundly influenced Christian understanding of Jesus's
        compassion, inclusivity, and concern for the poor and outcast.</p>

    <h2>Luke's Distinctive Approach to Jesus's Teachings</h2>
    <p>The approach to Jesus's teachings reflects his overall purpose and audience.
        Writing primarily for Gentile readers, particularly Greeks,
        <a href="https://en.wikipedia.org/wiki/Luke_the_Evangelist"title="Wikipedia">Luke</a>
        presents <a href="https://en.wikipedia.org/wiki/Christ_(title)"title="Wikipedia"><strong>Jesus</strong></a>
        as the Savior of all humanity, not merely the Jewish people. This universal scope is evident from the
        beginning of the Gospel, where Jesus's genealogy is traced back to <a href="https://en.wikipedia.org/wiki/Adam"title="Wikipedia">Adam</a> rather than
        stopping at <a href="https://en.wikipedia.org/wiki/Abraham_in_Islam"title="Wikipedia">Abraham</a>
        as <a href="https://en.wikipedia.org/wiki/Matthew_the_Apostle"title="Wikipedia">Matthew</a> does.
        <a href="https://en.wikipedia.org/wiki/Luke_the_Evangelist"title="Wikipedia">Luke</a>'s emphasis on Jesus's ministry to those on
        the margins of society—<a href="https://en.wikipedia.org/wiki/Woman"title="Wikipedia">women</a>,
        <a href="https://en.wikipedia.org/wiki/Gentile"title="Wikipedia">Gentiles</a>, <a href="https://en.wikipedia.org/wiki/Samaritans"title="Wikipedia">Samaritans</a>,
        <a href="https://en.wikipedia.org/wiki/Publicani"title="Wikipedia">tax collectors</a>, <a href="https://en.wikipedia.org/wiki/Christian_views_on_sin"title="Wikipedia">sinners</a>, and the
        <a href="https://en.wikipedia.org/wiki/Poverty"title="Wikipedia">poor</a>—demonstrates the inclusive nature of <a href="https://en.wikipedia.org/wiki/Kingdom_of_God_(Christianity)"title="Wikipedia">God's kingdom</a> and the transformative
        power of <a href="https://en.wikipedia.org/wiki/Divine_Mercy_(Catholic_devotion)"title="Wikipedia">divine mercy</a>.</p>
    <p>Luke's organization of Jesus's teachings differs significantly from Matthew's
        structured
        discourses. Rather than grouping teachings by theme, Luke often embeds them in
        narrative contexts that illuminate their meaning and application. This narrative
        approach creates a dynamic portrait of Jesus as a teacher whose words emerge from
        and speak directly to real-life situations and human needs. Luke's emphasis on Jesus's
        interactions with individuals from diverse backgrounds demonstrates the personal
        nature of his ministry and the adaptability of his message to different contexts and
        concerns.</p>
    </div>

    <div class="story-box">
        <h2><span class="emoji">ˏˋ✞ˎˊ</span>The Nazareth Synagogue Discourse <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK4_16">Luke 4:16-30</a></small></h2>
        <p>Luke uniquely places Jesus's rejection at Nazareth at the beginning of his public ministry
            rather than later as in Matthew and Mark. This strategic placement establishes Jesus's
            mission statement and anticipates the opposition he will face throughout his ministry.
            The discourse in the Nazareth synagogue represents one of Luke's most significant
            contributions to understanding Jesus's self-conception and mission.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK4_16"><ruby>Luke<rt>4:16-19</rt></ruby></a></span>
        <p>The Reading from Isaiah describes Jesus entering the synagogue on the
            Sabbath, standing up to read, and being handed the scroll of Isaiah. His selection of
            <a href="https://ebible.org/study/?v1=IS61_1&t1=local%3Aeng-web&w1=bible">Isaiah 61:1-2</a> is highly significant, as this passage describes the mission of the Messiah in
            terms of bringing good news to the poor, freedom to captives, sight to the blind, and
            liberty to the oppressed. This text establishes Jesus's ministry as focused particularly on
            those who are vulnerable, marginalized, and suffering, a theme that will be developed
            throughout Luke's Gospel.</p>
        <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK4_20"><ruby>Luke<rt>4:20-22</rt></ruby></a></span>
        <p>The Proclamation of Fulfillment describes Jesus's dramatic statement
            after reading the Isaiah passage: <strong>"Today this Scripture is fulfilled in your hearing"</strong> <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK4_21"><ruby>Luke<rt>4:21</rt></ruby></a>.
            This declaration represents Jesus's explicit claim to be the Messiah described in
            Isaiah's prophecy and establishes his ministry as the fulfillment of Old Testament promises.
            The initial positive response of the crowd, who <b><i>"marveled at the gracious words which proceeded out of His mouth,"</i></b>
            suggests the appealing nature of Jesus's message before controversy erupted.</p>
            <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK4_23"><ruby>Luke<rt>4:23-27</rt></ruby></a></span>
        <p>The Challenge to Expectations records Jesus's anticipation of the
            crowd's demand for miraculous signs like those performed in Capernaum. His reference
            to the proverb <b><i>"Physician, heal yourself"</i></b> suggests their expectation that he would
            demonstrate his powers in his hometown. Jesus's response cites two examples from the
            Old Testament—<a href="https://ebible.org/study/?v1=K117_10&t1=local%3Aeng-web&w1=bible">Elijah's ministry to the widow of Zarephath</a> and
            <a href="https://ebible.org/study/?v1=K25_1&t1=local%3Aeng-web&w1=bible">Elisha's healing of Naaman the Syrian</a>—both
            of which involve God's prophets ministering to Gentiles rather than Israelites. These examples establish the precedent for Jesus's ministry extending
            beyond national boundaries and anticipate the universal scope of the gospel that will be a major theme in Luke-Acts.</p>
            <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK4_28"><ruby>Luke<rt>4:28-30</rt></ruby></a></span>
        <p>The Violent Rejection describes the crowd's furious response to Jesus's
            implied criticism and their attempt to kill him by throwing him off a cliff. This violent
            rejection in his hometown anticipates the opposition Jesus will face throughout his
            ministry and foreshadows his ultimate rejection and execution. The statement that
            Jesus <b><i>"passing through the midst of them, went His way"</i></b> suggests a supernatural
            protection that preserves him until the appointed time for his sacrifice.
            This discourse establishes several key themes that will characterize Luke's presentation
            of Jesus's ministry: his focus on the poor and marginalized, his fulfillment of Old
            Testament prophecy, his extension of God's grace beyond national boundaries, and the
            opposition he faces from those who resist this inclusive message. The placement of this
            episode at the beginning of Jesus's public ministry in Luke's Gospel establishes these
            themes as foundational to understanding Jesus's mission and message.</p>
    </div>

    <div class="story-box">
        <h2><span class="emoji">🌳</span>The Sermon on the Plain <small><a href="https://ebible.org/study/?v1=LK6_17&t1=local%3Aeng-web&w1=bible">Luke 6:17-49</a></small></h2>
        <p>The Sermon on the Plain represents Luke's parallel to Matthew's Sermon on the
            Mount, though with significant differences in content, emphasis, and setting. The name derives
            from Luke's description of Jesus coming down from the mountain and standing <strong>"on a level place"</strong>
            <a href="https://ebible.org/study/?v1=LK6_17&t1=local%3Aeng-web&w1=bible"><ruby>Luke<rt>6:17</rt></ruby></a> to deliver this teaching, in contrast to Matthew's setting on a
            mountainside. This geographical distinction carries symbolic significance, suggesting
            Jesus's accessibility and solidarity with the people rather than elevated separation.</p>
        <span class="passage"><a href="https://ebible.org/study/?v1=LK6_17&t1=local%3Aeng-web&w1=bible"><ruby>Luke<rt>6:17-19</rt></ruby></a></span>
        <p>The Setting and Audience  establishes the context for the sermon.
            Luke specifically mentions that the audience included not only Jews from Judea and
            Jerusalem but also people from <b><i>"the seacoast of Tyre and Sidon,"</i></b> indicating a Gentile presence.
            This mixed audience reflects Luke's emphasis on the universal scope of
            Jesus's ministry and message. The description of people coming to hear Jesus and to be
            healed of their diseases establishes the connection between Jesus's teaching and
            healing ministries, both of which address human needs and demonstrate divine
            compassion.</p>
        <span class="passage"><a href="https://ebible.org/study/?v1=LK6_20&t1=local%3Aeng-web&w1=bible"><ruby>Luke<rt>6:20-26</rt></ruby></a></span>
        <p>The Beatitudes and Woes present a more direct and concrete version of the blessings than Matthew's more spiritualized account.
            Luke's Jesus pronounces blessing on <b><i>"you who are poor"</i></b> rather than <strong>"the poor in spirit"</strong> and on <b><i>"you who hunger now"</i></b>
            rather than <strong>"those who hunger and thirst for righteousness."</strong> <a href="https://ebible.org/study/?t1=local%3Aeng-web&w1=bible&v1=MT5_3"><small><ruby>Matthew<rt>5:3-10</rt></ruby></small></a>
            This emphasis on physical conditions rather than spiritual attitudes reflects Luke's concern with actual
            social and economic inequities and Jesus's solidarity with the materially deprived.
            The addition of corresponding <b><i>"woes"</i></b> to the wealthy, the full, and those who laugh now
            creates a pattern of reversal that characterizes Luke's presentation of the kingdom of
            God, where present circumstances will be dramatically inverted in the future.</p>
        <span class="passage"><a href="https://ebible.org/study/?v1=LK6_27&t1=local%3Aeng-web&w1=bible"><ruby>Luke<rt>6:27-36</rt></ruby></a></span>
        <p>Love for Enemies presents Jesus's radical ethic of love that extends
            even to those who hate, curse, and mistreat his followers. The command to <b><i>"do good to those who hate you"</i></b>
            establishes a proactive response to hostility that goes beyond mere
            non-retaliation. The principle of <i>lending without expecting repayment</i> challenges
            conventional economic practices and establishes generosity as a fundamental
            characteristic of kingdom ethics. The section culminates in the call to <strong>"be merciful, just
            as your Father also is merciful"</strong> <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK6_36"><ruby>Luke<rt>6:36</rt></ruby></a>,
            which parallels Matthew's <strong>"be perfect, just as your Father in heaven is perfect"</strong> <a href="https://ebible.org/study/?t1=local%3Aeng-web&w1=bible&v1=MT5_48"><small><ruby>Matthew<rt>5:48</rt></ruby></small></a>
            but with a significant shift in emphasis from <i>perfection</i> to <i>mercy</i>. This difference highlights Luke's focus on compassion as the defining attribute of God and the primary virtue for Jesus's followers.</p>
        <span class="passage"><a href="https://ebible.org/study/?v1=LK6_37&t1=local%3Aeng-web&w1=bible"><ruby>Luke<rt>6:37-42</rt></ruby></a></span>
        <p>Judging Others addresses interpersonal relationships with an emphasis
            on forgiveness, generosity, and self-examination. The warning against judging others
            and the promise that <b><i>"with the same measure that you use, it will be measured back to you"</i></b>
            establishes reciprocity as a principle of divine justice. The metaphor of the <i>speck and the plank</i>
            emphasizes the importance of addressing one's own faults before attempting to correct others, establishing humility and self-awareness as prerequisites for spiritual leadership.</p>
        <span class="passage"><a href="https://ebible.org/study/?v1=LK6_43&t1=local%3Aeng-web&w1=bible"><ruby>Luke<rt>6:43-45</rt></ruby></a></span>
        <p>A Tree and Its Fruit uses agricultural imagery to illustrate the connection
            between character and behavior. The principle that <b><i>"a good tree does not bear bad fruit, nor does a bad tree bear good fruit"</i></b>
            establishes the organic relationship between inner nature and outward actions. The statement that <b><i>"out of the abundance of the heart his mouth speaks"</i></b>
            establishes the heart as the source of words and actions and emphasizes the importance of inner transformation rather than merely external compliance.</p>
            <span class="passage"><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK6_46"><ruby>Luke<rt>6:46-49</rt></ruby></a></span>
            <p><img src="../images/_JesusChrist/wiseAndFoolishBuilders_thumb.webp" alt="Wise and Foolish Builders"height="150"width="auto"class="img_rtl">
            The Two Foundations concludes the sermon with the parable of the
            <a href="./parables#:~:text=The%20Wise%20and%20Foolish%20Builders">wise and foolish builders</a>, emphasizing the importance of not merely hearing Jesus's
            words but putting them into practice. The contrast between the house built on the rock,
            which withstands the flood, and the house built on the earth, which collapses,
            establishes the practical difference between superficial and genuine discipleship. The
            question <b><i>"Why do you call Me 'Lord, Lord,' and not do the things which I say?"</i></b>
            challenges nominal faith and establishes obedience as the authentic expression of commitment to Christ.</p>
        <p><big>The Sermon on the Plain</big> establishes the ethical foundation for Luke's presentation
            of discipleship, with particular emphasis on mercy, generosity, and practical obedience.
            The focus on concrete social and economic conditions rather than merely spiritual
            attitudes reflects Luke's concern with Jesus's ministry to the materially poor and socially
            marginalized. The emphasis on mercy as the defining attribute of God and the primary
            virtue for believers establishes compassion as the heart of Christian ethics and community life.</p>
    </div>

    <h2>Unique Parables in Luke's Gospel</h2>
    <h3>Luke's Gospel contains fifteen/sixteen parables that appear nowhere else in the New Testament.</h3>
    <p>These unique parables, many of which have become among the most beloved and
    influential of Jesus's teachings, reflect Luke's distinctive emphasis on mercy, inclusion,
    and God's concern for the lost and marginalized. The following analysis examines
    several of the most significant of these unique parables and their contribution to Luke's
    theological vision.</p>
    <ul class="homepage-grid" style="list-style:none;">
            <li><a href="./parables#:~:text=The%20Two%20Debtors">The Two Debtors</a></li>
            <li><a href="./parables#:~:text=The%20Good%20Samaritan">The Good Samaritan</a></li>
            <li><a href="./parables#:~:text=The%20Friend%20at%20Midnight">The Friend at Midnight</a></li>
            <li><a href="./parables#:~:text=The%20Rich%20Fool">The Rich Fool</a></li>
            <li><a href="./parables#:~:text=The%20Persistent%20Widow">The Persistent Widow</a></li>
            <li><a href="./parables#:~:text=The%20Watchful%20Servants">The Watchful Servants</a></li>
            <li><a href="./parables#:~:text=The%20Barren%20Fig%20Tree">The Barren Fig Tree</a></li>
            <li><a href="./parables#:~:text=Building%20a%20Tower%20and%20King%20Going%20to%20War">The Tower Builder</a></li>
            <li><a href="./parables#:~:text=Building%20a%20Tower%20and%20King%20Going%20to%20War">The Battling King</a></li>
            <li><a href="./parables#:~:text=The%20Lost%20Coin">The Lost Coin</a></li>
            <li><a href="./parables#:~:text=The%20Prodigal%20Son">The Prodigal Son</a></li>
            <li><a href="./parables#:~:text=The%20Dishonest%20Manager">The Dishonest Manager</a></li>
            <li><a href="./parables#:~:text=The%20Rich%20Man%20and%20Lazarus">The Rich Man and Lazarus</a></li>
            <li><a href="./parables#:~:text=The%20Unprofitable%20Servants">The Unworthy Servants</a></li>
            <li><a href="./parables#:~:text=The%20Unjust%20Judge">The Unjust Judge</a></li>
            <li><a href="./parables#:~:text=The%20Pharisee%20and%20the%20Tax%20Collector">The Pharisee and the Tax Collector</a></li>
            <li class="highlight-box" style="width:fit-content;padding:.5px;"><a href="./parables#:~:text=The%20Talents/Minas">The Minas</a></li>
        </ul>

    <div class="highlight-box">
        <h2><span class="emoji">🤝</span>The Good Samaritan
            <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK10_25">Luke 10:25-37</a></small></h2>
        <p>This is probably one of the most famous stories Jesus ever told. A man asked Jesus,
            <strong>"Who is my neighbor?"</strong>
            <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK10_29"><ruby>Luke<rt>10:29</rt></ruby></a></small>
            Instead of giving a simple answer, Jesus told this story:</p>
        <p class="rtl">
            <img src="../images/_JesusChrist/goodSamaritan_thumb.webp" alt="Good Samaritan" width="200" height="200"class="img_fl">
            A man was walking from Jerusalem to Jericho when robbers attacked him. They beat him up, took all his money and clothes, and left him half dead on the side of the road.
            <i>First</i>, a priest (a religious leader) came walking down the road. When he saw the hurt man, he crossed to the other side of the road and kept walking.
            <i>Then</i> a Levite (another religious person) came by. He also saw the hurt man but walked past on the other side.
            <i>Finally</i>, a Samaritan man came along, but when this Samaritan man saw the hurt person, he felt sorry for him.
            The Samaritan man stopped and took care of the hurt man. He cleaned his wounds, put him on his own donkey, took him to an inn, and paid for his care.</p>
        <p><b>Now, this is important to know: Jewish people and Samaritan people didn't like each other at all. They were like enemies.</b>
            <small><a href="https://www.franciscanmedia.org/ask-a-franciscan/the-rift-between-jews-and-samaritans/"title="The Rift between Jews and Samaritans">Link</a></small></p>
        <p>This parable challenges conventional definitions of <b><i>"neighbor"</i></b> based on ethnic,
            religious, or social boundaries. By making a Samaritan the hero of the story, Jesus
            subverts his audience's prejudices and establishes compassionate action rather than
            social identity as the criterion for fulfilling the command to <strong>"love your neighbor as yourself."</strong>
            <a href="https://ebible.org/study/?v1=LK10_27&t1=local%3Aeng-web&w1=bible"><ruby>Luke<rt>10:27</rt></ruby></a>
            The question <strong>"Which of these three do you think was neighbor to him who fell among the thieves?"</strong>
            <a href="https://ebible.org/study/?v1=LK10_36&t1=local%3Aeng-web&w1=bible"><ruby>Luke<rt>10:36</rt></ruby></a>
            shifts the focus from defining who deserves our love to becoming a person who shows mercy regardless of the recipient's identity.</p>
        <p>The parable establishes several key principles of Luke's ethical vision: the priority of
            compassion over ritual purity (explaining why the priest and Levite might have avoided
            the injured man), the irrelevance of social boundaries to moral obligation, and the
            definition of neighborliness through action rather than proximity or affinity. The command <strong>"Go and do likewise"</strong>
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK10_37"><ruby>Luke<rt>10:37</rt></ruby></a>
            establishes this radical compassion as normative for Jesus's followers rather than merely admirable or exceptional.</p>
        <h3>What This Story Teaches Us</h3>
        <p>Our <b><i>"neighbor"</i></b> isn't just the people who live next door or the people
            who are like us. Our neighbor is anyone who needs help, even if they're different from us or we
            don't know them very well. The story also teaches us that it's not enough to just know about God or go to church. What
            really matters is showing God's love by helping people who are in trouble.</p>
    </div>

    <div class="highlight-box">
        <h2><span class="emoji">🏠</span>The Prodigal Son
            <small><a href="https://ebible.org/study/?v1=LK15_11&t1=local%3Aeng-web&w1=bible">Luke 15:11-32</a></small></h2>
        <p>The context for story starts in <a href="https://ebible.org/study/?v1=LK14_1&t1=local%3Aeng-web&w1=bible">chapter 14.</a>
            Jesus first shares two shorter parables about a <a href="./parables#:~:text=The%20Lost%20Sheep">lost sheep</a> and a <a href="./parables#:~:text=The%20Lost%20Coin">lost coin</a> to emphasize God's joy over something lost being found and restored.
            With the religious leaders grumbling about his association with social outcasts, Jesus then began his longest story about a father with two sons to justify his actions and highlight the stark contrast between God's boundless mercy and the Pharisees' self-righteousness.
            He began with these simple words to invite everyone present into the narrative.
            This story is actually about two sons, but it's really about an amazing father who represents God.</p>
        <p class="rtl">
            <img src="../images/_JesusChrist/prodigalSon_thumb.webp" alt="Prodigal Son" width="200" height="200"class="img_fl">
            A man had two sons. The younger son got tired of living at home and wanted to go have fun in the
            big city. He asked his father for his inheritance (the money he would get when his father died).
            This was really rude - it was like saying, "I wish you were dead so I could have your money!"
            But the father gave him the money anyway. The young man left home and went to a far country where
            he spent all his money on parties and foolish things. When his money was gone, his new <i>"friends"</i>
            disappeared, and he had nothing left. Finally, he came to his senses and decided to go home. But while he was still far away, his
            father saw him coming! The father ran to meet his son, hugged him, and kissed him. Then he threw
            a big party to celebrate his son's return!</p>
        <p><b>Jesus told this story as a direct response to the Pharisees and scribes, who were openly criticizing him for welcoming and eating with tax collectors and "sinners".</b></p>
        <p>This parable illustrates God's extravagant grace toward repentant sinners and challenges the resentment of the self-righteous toward such grace.
        The father's statement <strong>"this my son was dead and is alive again; he was lost and is found"</strong>
        <a href="https://ebible.org/study/?v1=LK15_24&t1=local%3Aeng-web&w1=bible"><ruby>Luke<rt>15:24</rt></ruby></a>
        establishes restoration rather than retribution as God's response to repentance. The father's appeal
        to the older son—<strong>"all that I have is yours"</strong>
        <a href="https://ebible.org/study/?v1=LK15_31&t1=local%3Aeng-web&w1=bible"><ruby>Luke<rt>15:31</rt></ruby></a>—addresses the unnecessary
        resentment of those who perceive grace toward others as somehow diminishing their own standing.</p>
        <p>The parable contributes to Luke's emphasis on God's compassion for the lost, the joy of
        heaven over repentance, and the inclusion of the morally compromised in the kingdom of God.
        The open-ended conclusion, which does not reveal whether the older son joins the celebration,
        challenges the audience to examine their own attitudes toward God's grace extended to those they consider undeserving.</p>
        <h3>The Lessons to be Learned</h3>
        <ul style="margin-left: 20px;">
        <li><strong>God's Amazing Love:</strong> The father in the story represents God. No matter what
            we've done wrong, God is always ready to forgive us and welcome us back when we're truly sorry.</li>
        <li><strong>It's Never Too Late:</strong> Even when we've made really bad choices, we can always come back to God.</li>
        <li><strong>God Celebrates When We Come Home:</strong> Just like the father threw a party when his son returned,
            God and all the angels in heaven celebrate when someone decides to follow Jesus.</li>
        </ul>
    </div>

    <div class="highlight-box">
        <h2><span class="emoji">💰 𓁉</span>The Rich Man and Lazarus
            <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK16_19">Luke 16:19-31</a></small></h2>
        <p>This famous parable is told by Jesus immediately after being mocked by the Pharisees, who are specifically described as <b><i>"lovers of money."</i></b>
            He had just finished teaching that you cannot serve both God and wealth.
            The story of the Rich Man and Lazarus, therefore, is not a random tale about the afterlife;
            it's a direct and sharp response to the Pharisees' worldview.
            It powerfully confronts the common belief that earthly riches are a sign of God's blessing,
            while illustrating the eternal consequences of a life spent in selfish luxury, blind to the suffering of the poor.</p>
        <p class="rtl"><img src="../images/_JesusChrist/richManAndLazarus_thumb.webp" alt="Rich Man and Lazarus" width="200" height="200"class="img_fl">
            There was a very rich man who lived in a huge house, wore the best clothes, and ate amazing food every single day.
            Lying just outside his gate was a poor, sick beggar named Lazarus. Lazarus was so hungry he would have been happy just to eat the scraps that fell from the rich man's table.
            When they both died, their situations completely flipped. Angels carried Lazarus to a place of peace and comfort. The rich man, however, ended up in a terrible place of suffering.
            The rich man looked up and saw Lazarus and <a href="https://ebible.org/study/?v1=GN17_1&t1=local%3Aeng-web&w1=bible">Abraham</a> far away in the good place.
            He shouted, <i>"Please, send Lazarus to dip the tip of his finger in water and cool my tongue, because I am in agony in this fire!"</i>
            But he was told that was impossible. In life, the rich man had all his good things while Lazarus had nothing but bad things.
            Now, everything was reversed, and there was a giant gap between them that no one could cross.
            So, the rich man begged, <i>"Then please send Lazarus back to the living to warn my five brothers, so they don't end up in this awful place!"</i>
            The answer was that his brothers already have Moses and the prophets, the word of God in the scriptures to guide them.
            The rich man argued that they would surely listen if someone came back from the dead.
            But he was told, <b><i>"If they do not listen to Moses and the prophets— the scriptures, they will not be convinced even if someone rises from the dead."</i></b>
        </p>
        <p>This parable addresses several themes central to Luke's Gospel: the reversal of fortunes
            in the kingdom of God, the responsibility of the wealthy toward the poor, and the
            sufficiency of existing revelation for moral guidance. The dramatic reversal of the two
            men's situations after death illustrates Jesus's teaching that <strong>"those who are first will be
            last, and those who are last will be first"</strong> <a href="https://ebible.org/study/?v1=LU13_30&t1=local%3Aeng-web&w1=bible"><ruby>Luke<rt>13:30</rt></ruby></a>. The rich man's failure is not
            explicitly his wealth but his indifference to the suffering at his gate, illustrating the moral
            peril of affluence without compassion.</p>
        <p>The parable's conclusion about the sufficiency of <b><i>"Moses and the prophets"</i></b> establishes
            that additional miraculous confirmation is not necessary for those who resist the moral
            demands of existing revelation. The statement that even someone rising from the dead
            would not convince those who reject the Scriptures proves ironically prophetic of the
            response to Jesus's own resurrection by many religious leaders.</p>
        <p>This parable contributes to Luke's emphasis on economic justice, the dangers of wealth,
            and the <a href="https://en.wikipedia.org/wiki/Eschatology"title="Wikipedia">eschatological</a> reversal of present inequities.
            The naming of the poor man (Lazarus) while leaving the rich man unnamed reverses conventional narrative practice
            and emphasizes the dignity and value of those who are socially invisible in the present world order.</p>
        <h3>Moral of the Story</h3>
        <ul style="margin-left: 20px;">
            <li><strong>Care for the poor.</strong> The story is a powerful warning that ignoring the suffering of those in need has severe eternal consequences. Compassion matters deeply.</li>
            <li><strong>Earthly status is temporary.</strong> Your wealth, comfort, and social standing on Earth are fleeting and will be irrelevant in the afterlife. The rich man's riches became worthless after death.</li>
            <li><strong>Your actions have eternal consequences.</strong> The choices you make in this life directly impact your fate in the next. There is a great reversal where justice is ultimately served.</li>
            <li><strong>Listen to the guidance you already have.</strong> The final part of the story emphasizes that people have enough wisdom in scripture to know how to live righteously. Waiting for a spectacular miracle isn't an excuse for a hard heart.</li>
        </ul>
    </div>

    <div class="highlight-box">
        <h2><span class="emoji">🧾💸</span>The Pharisee and the Tax Collector
        <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK18_9">Luke 18:9-14</a></small></h2>
        <span class="highlight-box passage">Note: the 12's travels is underway in <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=LK17_11"title="Luke 17:11"><small><ruby>Luke<rt>17:11</rt></ruby></small></a>.</span>
        <p>This parable is told while Jesus is on his final, determined journey toward Jerusalem, a lengthy section of Luke's Gospel that's filled with critical teachings.
            The stories and lessons he shares along this path often focus on the nature of God's kingdom,
            frequently turning conventional wisdom upside down.</p>
        <p>This parable, addressed to <b><i>"some who trusted in themselves that they were righteous, and despised others"</i></b>.</p>
        <p class="rlt"><img src="../images/_JesusChrist/phariseeAndTaxCollector_thumb.webp" alt="Pharisee and Tax Collector" width="200" height="200"class="img_fl">
            The parable describes two men going to the temple to pray. The Pharisee stands prominently and prays a self-congratulatory prayer thanking God that
            he is not like other men, particularly the tax collector, and listing his religious
            accomplishments. The tax collector, standing <b><i>"afar off,"</i></b> beats his breast and prays
            simply, <b><i>"God, be merciful to me a sinner!"</i></b>. Jesus concludes that the tax
            collector rather than the Pharisee went home justified, stating that <b><i>"everyone who exalts
            himself will be humbled, and he who humbles himself will be exalted"</i></b></p>
        <p>This parable illustrates the contrast between self-righteousness and genuine humility
            before God. The Pharisee's prayer, though addressed to God, is actually about himself
            and his moral superiority to others. The tax collector's prayer acknowledges his
            sinfulness and need for divine mercy.</p> <h3> The surprising conclusion</h3>
        <p>The socially despised tax collector rather than the respected religious leader is justified before God
            challenges conventional assumptions about spiritual status and establishes humility
            rather than moral achievement as the prerequisite for divine acceptance.
            The parable contributes to Luke's emphasis on the inclusion of social outcasts in God's
            kingdom, the danger of religious pride, and the centrality of mercy in divine-human
            relationships. The principle that <strong>"everyone who exalts himself will be humbled, and he
            who humbles himself will be exalted"</strong> <a href="https://ebible.org/study/?v1=LU18_14&t1=local%3Aeng-web&w1=bible"><ruby>Luke<rt>18:14</rt></ruby></a> establishes a pattern of reversal that characterizes
            God's kingdom as presented throughout Luke's Gospel.</p>
    </div>

    <!-- <h2>Other Unique Parables in Luke</h2>
    <h3>Luke contains several other unique parables that develop his distinctive theological
        emphases:</h3> -->

    <div class="highlight-box">
        <h2>The Two Debtors (Luke 7:41-43)</h2>
        <span class="highlight-box passage">A bit of Context: <a href="https://ebible.org/study/?v1=LU7_36&t1=local%3Aeng-web&w1=bible"title="Luke 7:36"><small><ruby>Luke<rt>7:36-50</rt></ruby></small></a>.</span>
        <p>Jesus is having dinner at the house of Simon, a religious leader called a Pharisee.
            While they're eating, a woman from town who was known for making bad choices comes into the house.
            She wasn't invited, but she had heard Jesus was there, she was standing behind Jesus.
            She kneels and starts weeping, her tears fall on His feet, and she uses her long hair to dry them.
            Then, she kisses His feet and pours expensive perfume on them.
            Simon the host watches and is shocked. He thinks to himself, "If Jesus were really a prophet, he would know what a bad person this woman is.
            He wouldn't let her touch him!".
            But Jesus knows what Simon is thinking, and He decides to tell him a story.</p>
        <p class="rlt"><img src="../images/_JesusChrist/twoDebtors_thumb.webp" alt="Two Debtors" width="200" height="200"class="img_fl">
            A man who loaned money had two people who owed him. One person owed him a very big amount—about five hundred silver coins. The other person owed him much less—only fifty silver coins. Neither of them could pay him back. Instead of demanding the money, the lender forgave both of their debts.
            Jesus asks, "Now, think about it: which of those two people do you think would be more thankful and love him more?"</p>
        <p>The parable illustrates the principle that those who are forgiven
            much will love much, explaining the extravagant gratitude of the sinful woman who
            anoints Jesus's feet. This parable establishes the connection between recognition of
            one's moral debt, experience of forgiveness, and depth of love for the Savior.</p>
        <h3>Take Away Message</h3>
        <ul style="margin-left: 20px;">
            <li><strong>Forgiveness is powerful.</strong> The lender chose to forgive both people even though they couldn't pay.</li>
            <li><strong>Gratitude grows with forgiveness.</strong> The person forgiven more has a bigger reason to be thankful.</li>
            <li><strong>Think about God’s forgiveness.</strong> When we realize how much we've been forgiven, we tend to love and appreciate more.</li>
            <big><li style="text-align: center;list-style-type: none;margin-top:1%;"><strong>Main idea:</strong> The more we understand how much we've been forgiven, the more our love and gratitude grow.</li></big>
        </ul>
    </div>

    <p class="highlight-box">
        The Friend at Midnight (Luke 11:5-8) encourages persistence in prayer by comparing
        God's responsiveness favorably to that of a reluctant friend who eventually responds to
        repeated requests. This parable, unique to Luke, reflects his emphasis on prayer as a
        central spiritual practice.
    </p>
    <p class="highlight-box">
        The Rich Fool (Luke 12:16-21) warns against the accumulation of wealth without regard
        for spiritual values or divine judgment. The fool's plan to build bigger barns for his
        abundant harvest, followed by his sudden death, illustrates Jesus's teaching that "one's
        life does not consist in the abundance of the things he possesses" (Luke 12:15).
    </p>
    <p class="highlight-box">
        The Barren Fig Tree (Luke 13:6-9) illustrates both divine patience and the expectation
        of fruitfulness in God's people. The owner's willingness to give the unproductive tree
        one more year of cultivation before cutting it down represents God's merciful delay of
        judgment to allow for repentance.
    </p>
    <p class="highlight-box">
        The Great Supper (Luke 14:16-24), while having a parallel in Matthew 22:1-14, appears
        in a significantly different form in Luke. The emphasis on the inclusion of "the poor, the
        maimed, the lame, the blind" (Luke 14:21) after the invited guests make excuses reflects
        Luke's concern for the marginalized and their special place in God's kingdom.
    </p>
    <p class="highlight-box">
        The Lost Coin (Luke 15:8-10) illustrates God's diligent search for and joy over one lost
        sinner who repents. The image of a woman carefully sweeping her house to find one lost
        coin provides a domestic parallel to the more masculine imagery of the shepherd
        seeking a lost sheep in the preceding parable.
    </p>
    <p class="highlight-box">
        The Unjust Steward (Luke 16:1-9) presents one of Jesus's most challenging parables, in
        which a dishonest manager is commended for his shrewd preparation for the future. The
        application—"make friends for yourselves by unrighteous mammon"—establishes the
        principle of using material resources for spiritual purposes and eternal benefit.
    </p>
    <p class="highlight-box">
        The Unprofitable Servants (Luke 17:7-10) challenges entitlement mentality in spiritual
        service by comparing disciples to servants who merely do their duty without expecting
        special commendation. This parable establishes humility as the appropriate attitude for
        those who serve God, recognizing that even their best service does not place God in their
        debt.
    </p>
    <p class="highlight-box">
        The Persistent Widow (Luke 18:1-8) encourages persistence in prayer by contrasting
        God's willingness to respond with an unjust judge who grants a widow's request merely
        to avoid being worn out by her continual coming. This parable, introduced explicitly as
        teaching that "men always ought to pray and not lose heart" (Luke 18:1), reflects Luke's
        emphasis on prayer as essential to discipleship.
    </p>
    <h3>Luke's Emphasis on Prayer and the Holy Spirit</h3>
    <p class="story-box">
        Beyond his unique parables, Luke's Gospel is distinguished by its emphasis on Jesus's
        prayer life and teaching about prayer, as well as its focus on the Holy Spirit's role in
        Jesus's ministry and the life of the church. These emphases create a distinctive portrait
        of Jesus's relationship with the Father and the spiritual resources available to his
        followers.
    </p>
    <p class="highlight-box">
        Jesus's Prayer Life receives particular attention in Luke's Gospel. Luke alone records
        that Jesus was praying at his baptism when the Holy Spirit descended upon him (Luke
        3:21), that he spent the entire night in prayer before selecting the twelve apostles (Luke
        6:12), that he was praying alone when he asked the disciples "Who do the crowds say
        that I am?" (Luke 9:18), and that he was praying on the mountain when he was
        transfigured (Luke 9:28-29). These references establish prayer as fundamental to Jesus's
        relationship with the Father and his discernment of the Father's will at key moments in
        his ministry.
    </p>
    <p class="highlight-box">
        Teaching on Prayer appears throughout Luke's Gospel, often in material unique to this
        evangelist. The Parable of the Friend at Midnight (Luke 11:5-8) and the Parable of the
        Persistent Widow (Luke 18:1-8) both encourage persistence in prayer. The teaching that
        follows the Lord's Prayer in Luke 11:9-13 emphasizes God's willingness to give good gifts,
        particularly the Holy Spirit, to those who ask. The instruction to "pray always and not
        lose heart" (Luke 18:1) establishes prayer as an ongoing spiritual discipline rather than
        merely an occasional practice. These teachings create a comprehensive vision of prayer
        as essential to discipleship and effective in securing divine response.</p>

    <h3>The Holy Spirit's Role receives particular emphasis in Luke's Gospel, anticipating the
        more extensive treatment in the Book of Acts.</h3>
    <p class="highlight-box"> Luke alone records that John the Baptist
        was "filled with the Holy Spirit, even from his mother's womb" (Luke 1:15), that Elizabeth
        was "filled with the Holy Spirit" when Mary visited her (Luke 1:41), and that Zacharias
        was "filled with the Holy Spirit" when prophesying about his son's role as forerunner
        (Luke 1:67). The Holy Spirit's role in Jesus's conception (Luke 1:35), his descent upon
        Jesus at baptism (Luke 3:22), and Jesus's being "filled with the Holy Spirit" and "led by
        the Spirit into the wilderness" (Luke 4:1) establish the Spirit's central role in Jesus's life
        and ministry.</p>
    <p>Jesus's teaching about the Holy Spirit also receives unique emphasis in Luke. The
        promise that the Father will "give the Holy Spirit to those who ask Him" (Luke 11:13)
        establishes the Spirit as the supreme gift available through prayer. The promise of
        "power from on high" (Luke 24:49) in the Gospel's conclusion anticipates the coming of
        the Spirit at Pentecost as described in Acts. These teachings establish the Holy Spirit as
        the continuing divine presence that will empower the church's mission after Jesus's
        ascension.</p>

    <h3>Luke's Theological Contribution</h3>
    <p>Luke's unique sermons, parables, and teachings make a distinctive contribution to
        Christian understanding of Jesus's message and mission. The emphasis on Jesus's
        ministry to the marginalized, his concern for social justice, and his inclusion of those
        typically excluded from religious privilege establishes the radically inclusive nature of
        God's kingdom. The focus on economic issues, particularly the dangers of wealth and
        the responsibility toward the poor, establishes social ethics as central to authentic
        discipleship rather than merely an optional application.</p>

    <p>The theme of reversal that runs throughout Luke's Gospel—the exaltation of the humble
        and humbling of the exalted, the filling of the hungry and emptying of the full, the
        finding of the lost and losing of the secure—establishes the counter-cultural nature of
        God's kingdom and challenges conventional assumptions about status, success, and
        security.</p>

    <p>The emphasis on mercy as the defining attribute of God and the primary virtue
        for believers establishes compassion rather than mere moral correctness as the heart of
        Christian ethics.</p>

    <p>The focus on prayer and the Holy Spirit establishes the spiritual resources available to
        believers for fulfilling their mission in the world. The portrayal of Jesus as dependent on
        prayer and the Spirit in his own ministry provides a model for his followers' dependence
        on the same divine resources. The promise of the Spirit's empowerment anticipates the
        church's mission as described in Acts and establishes continuity between Jesus's
        ministry and that of his followers.</p>

    <p>Luke's unique contribution thus lies in his presentation of Jesus as the compassionate
        Savior whose ministry focuses particularly on those at the margins of society, whose
        teaching challenges conventional values and social structures, and whose life
        demonstrates dependence on prayer and the Spirit. This portrait complements the more
        structured, teaching-focused presentation in Matthew and the more action-oriented
        narrative in Mark, creating a multifaceted understanding of Jesus's person and work that
        has enriched Christian theology and spirituality throughout the church's history.</p>
</section>








<?php
    elseif (isset($_GET['Mark'])):
?>





<section id="^" class="section fullbar">
<nav class="crumbs">
<div class="bread-crumbs">
    <a href="?intro#^" class="crumb-link">📚 Introduction</a>
    <a href="?gospels#^" class="crumb-link">🌟 All Gospels</a>
    <a href="?Matthew#^" class="crumb-link">📖 Matthew</a>
    <a href="?John#^" class="crumb-link">💫 John</a>
    <a href="?Luke#^" class="crumb-link">❤️ Luke</a>
    <a href="?Mark#^" class="crumb-link">⚡ <b>Mark</b></a>
    <a href="?conclusion#^" class="crumb-link">🎯 Conclusion</a>
</div>
</nav>
    <h2><span class="emoji">⚡</span>Mark's Special Way of Telling the Story</h2>
    <p>Mark was like the friend who's always in a hurry and gets straight to the point. Mark's Gospel is the shortest of
        the four, and it's packed with action! Instead of writing down lots of long speeches that Jesus gave, Mark
        focused on showing us what Jesus did.</p>

    <h3><span class="emoji">🏃‍♂️</span>Mark's Focus: What Jesus Did</h3>
    <p>While Matthew focused on what Jesus said, Mark focused on what Jesus did. Mark wanted to show people that Jesus
        wasn't just a good teacher - He was someone with amazing power who could do things that only God could do.</p>

    <div class="highlight-box">
        <h4>Jesus the Action Hero</h4>
        <p>In Mark's Gospel, Jesus is constantly moving, helping people, and demonstrating God's power:</p>
        <ul style="margin-left: 20px;">
            <li>He heals sick people</li>
            <li>He makes demons leave people alone</li>
            <li>He calms storms</li>
            <li>He feeds thousands of people with just a little food</li>
            <li>He brings dead people back to life</li>
        </ul>
    </div>

    <h3><span class="emoji">❓</span>Teaching Through Questions</h3>
    <p>Mark's Jesus asks lots of questions that make people think:</p>
    <ul style="margin-left: 20px;">
        <li>"Who do people say I am?" (This helped the disciples think about Jesus's identity)</li>
        <li>"What do you want me to do for you?" (This helped people think about what they really needed)</li>
        <li>"Why are you so afraid? Do you still have no faith?" (This helped the disciples think about trusting God)
        </li>
    </ul>

    <div class="highlight-box">
        <p><strong>Following Jesus is Hard:</strong> Mark doesn't hide the fact that following Jesus can be difficult.
            Even Jesus's closest disciples often didn't understand what He was teaching them.</p>
        <p><strong>Jesus Came to Serve:</strong> One of the most important verses in Mark's Gospel is when Jesus says,
            "The Son of Man did not come to be served, but to serve, and to give his life as a ransom for many."</p>
        <p><strong>Faith vs. Fear:</strong> Throughout Mark's Gospel, Jesus often asks His disciples, "Why are you
            afraid? Where is your faith?"</p>
    </div>

    <fieldset class="highlight-box">
        <legend>
            <h2><span class="emoji">🏃</span>Mark's Distinctive Approach to Sermons and Discourses</h2>
        </legend>
        <p>The Gospel of Mark stands as the most action-oriented of the four Gospels, with a
            distinctive focus on Jesus's deeds rather than his extended teachings. Mark's approach is
            characterized by brevity, immediacy, and an emphasis on Jesus as the suffering servant
            whose actions reveal his identity and mission. While Mark contains fewer unique
            discourses than the other Gospels, his distinctive presentation of Jesus's teachings and
            his narrative approach make a vital contribution to our understanding of Jesus's
            ministry and message.</p>
    </fieldset>

    <fieldset class="story-box">
        <legend>
            <h2><span class="emoji">🏃</span>Mark's Action-Oriented Narrative</h2>
        </legend>
        <p>Mark's Gospel is distinguished by its focus on Jesus's actions rather than his words. The
            fast-paced narrative, driven by the frequent use of the word "immediately" (euthys,
            appearing 41 times), creates a sense of urgency and movement that reflects Mark's
            emphasis on Jesus as a man of action whose identity is revealed through what he does
            rather than merely what he says. This action-oriented approach answers the question
            "What did Jesus do?" rather than "What did Jesus say?" and presents Jesus primarily as
            the suffering servant who came "not to be served, but to serve, and to give His life a
            ransom for many" (Mark 10:45).</p>

        <p>The brevity of Mark's Gospel—significantly shorter than Matthew and Luke—reflects this
            focus on essential action rather than extended teaching. Mark includes fewer parables
            than Matthew and Luke and presents Jesus's teachings in more condensed form. This
            brevity may reflect Mark's purpose of presenting the Gospel to a Roman audience more
            interested in power and action than in theological discourse or ethical teaching. The
            emphasis on Jesus's miracles and exorcisms demonstrates his divine power and
            authority in terms that would be compelling to a Roman audience accustomed to
            evaluating leaders based on their demonstrations of power rather than their
            philosophical sophistication.</p>
    </fieldset>

    <fieldset class="story-box">
        <legend>
            <h2><span class="emoji">🏃</span>Mark's Presentation of Jesus's Teachings</h2>
        </legend>
        <p>While Mark contains fewer unique discourses than the other Gospels, his presentation of
            Jesus's teachings makes a distinctive contribution to our understanding of Jesus's
            message. Mark's Jesus teaches with authority but often in brief, provocative sayings
            rather than extended discourses. The emphasis on action over words reflects Mark's
            understanding of Jesus as one who demonstrates the kingdom of God through powerful
            deeds rather than merely proclaiming it through eloquent speech.</p>

        <p>Parables in Mark appear primarily in chapter 4, which presents a shorter parallel to
            Matthew's Parabolic Discourse. Mark includes the Parable of the Sower with its detailed
            explanation (Mark 4:3-20), emphasizing the importance of hearing and understanding
            God's word. The Parable of the Growing Seed (Mark 4:26-29), unique to Mark, illustrates
            the mysterious and autonomous growth of the kingdom once the seed of the word has
            been planted. The Parable of the Mustard Seed (Mark 4:30-32) emphasizes the contrast
            between the kingdom's small beginnings and its ultimate greatness. Mark's presentation
            of these parables maintains his characteristic focus on the immediate impact of Jesus's
            teaching and the urgency of response.</p>
    </fieldset>

    <p>The Olivet Discourse in Mark 13 presents a more concise version of Jesus's
        eschatological teaching than Matthew's extended treatment. Mark's account focuses
        primarily on the prophetic warnings and signs, maintaining his characteristic emphasis
        on immediate action and urgency. The repeated calls to "watch" and "take heed" reflect
        Mark's concern with readiness for the coming crisis and judgment. The discourse
        concludes with the explicit command "What I say to you, I say to all: Watch!" (Mark
        13:37), emphasizing vigilance as the appropriate response to eschatological expectation.
        Teaching Through Questions represents a distinctive aspect of Mark's presentation of
        Jesus as teacher. Mark's Jesus frequently uses questions to provoke thought, challenge
        assumptions, and expose motives. Questions like "Who do men say that I am?" (Mark
        8:27), "What do you want Me to do for you?" (Mark 10:36, 51), and "Why do you call Me
        good?" (Mark 10:18) invite engagement rather than merely passive reception of
        information. This dialogical approach to teaching reflects Mark's emphasis on Jesus's
        interaction with individuals and his concern with eliciting personal response rather than
        merely conveying information.</p>

    <p>Teaching Through Actions represents perhaps the most distinctive aspect of Mark's
        presentation of Jesus as teacher. Throughout the Gospel, Jesus's actions serve as
        enacted parables that reveal the nature of God's kingdom and the character of true
        discipleship. The feeding of the five thousand demonstrates God's abundant provision,
        the healing of the blind man illustrates the gradual nature of spiritual illumination, and
        the cursing of the fig tree enacts judgment on fruitless religious observance. Jesus's
        washing of the disciples' feet in John's Gospel finds its Markan parallel in Jesus's
        statement that "the Son of Man did not come to be served, but to serve" (Mark 10:45),
        immediately followed by the healing of blind Bartimaeus as a demonstration of that
        servant ministry.</p>

    <fieldset class="highlight-box">
        <legend>
            <h2><span class="emoji">🏃</span>Mark's Unique Narrative Techniques</h2>
        </legend>
        <p>While Mark contains fewer unique discourses than the other Gospels, his distinctive
            narrative techniques create a powerful presentation of Jesus's identity and mission.
            These techniques include the use of the "Messianic secret," the "sandwich" technique of
            intercalating stories, and the emphasis on irony as a literary device.
            The Messianic Secret refers to Jesus's frequent commands in Mark's Gospel for people
            to remain silent about his identity and miracles. After healing a leper, Jesus "strictly
            warned him" and sent him away with the command "See that you say nothing to
            anyone" (Mark 1:43-44). After raising Jairus's daughter, Jesus "commanded them strictly
            that no one should know it" (Mark 5:43). After Peter's confession of Jesus as the Christ,
            Jesus "strictly warned them that they should tell no one about Him" (Mark 8:30). This
            pattern of secrecy has been variously interpreted, but it serves Mark's narrative purpose
            of gradually revealing Jesus's identity while explaining why Jesus was not more widely
            recognized as Messiah during his lifetime. The secret creates narrative tension and
            emphasizes that Jesus's identity can be fully understood only in light of his suffering,
            death, and resurrection.</p>

        <p>The "Sandwich" Technique refers to Mark's characteristic practice of beginning one
            story, interrupting it with another, and then returning to complete the first. Examples
            include the healing of Jairus's daughter interrupted by the healing of the woman with
            the issue of blood (Mark 5:21-43), the cursing of the fig tree interrupted by the cleansing
            of the temple (Mark 11:12-25), and the commissioning of the twelve interrupted by the
            account of Jesus's family seeking him (Mark 3:13-35). This technique creates
            connections between the intercalated stories, suggesting interpretive links between
            them. The technique also builds suspense and emphasizes Mark's theme of interruption
            and unexpected developments in the journey of discipleship.</p>

        <p>Irony serves as a significant literary device in Mark's Gospel, particularly in the passion
            narrative. The soldiers who mock Jesus as king unwittingly proclaim the truth about his
            identity. The religious leaders who challenge Jesus to come down from the cross to
            prove his identity fail to recognize that his remaining on the cross is the ultimate
            demonstration of his messianic mission. The centurion's confession "Truly this Man was
            the Son of God!" (Mark 15:39) represents the ironic recognition by a Gentile soldier of
            what Israel's religious leaders failed to see. This use of irony creates a sense of dramatic
            tension and invites readers to see beyond surface appearances to the deeper truth of
            Jesus's identity and mission.</p>
    </fieldset>

    <fieldset class="story-box">
        <legend>
            <h2><span class="emoji">🏃</span>Mark's Distinctive Emphases</h2>
        </legend>
        <p>While Mark contains fewer unique discourses than the other Gospels, his narrative
            presents several distinctive emphases that contribute significantly to our understanding
            of Jesus's ministry and message.</p>

        <p>The Suffering Servant represents Mark's primary christological emphasis. The Gospel's
            central section (Mark 8:27-10:45) is structured around three passion predictions, each
            followed by teaching about the nature of discipleship as sharing in Jesus's suffering and
            service. The explicit statement that the Son of Man came "to give His life a ransom for
            many" (Mark 10:45) establishes sacrificial service as the heart of Jesus's mission and the
            model for his followers. This emphasis on suffering service rather than triumphant rule
            distinguishes Mark's presentation of Jesus from contemporary expectations of the
            Messiah as a political liberator.</p>

        <p>The Cost of Discipleship receives particular emphasis in Mark's Gospel. Following each
            passion prediction, Jesus teaches about the nature of discipleship in terms that parallel
            his own suffering mission. After the first prediction, he teaches that "whoever desires to
            come after Me, let him deny himself, and take up his cross, and follow Me" (Mark 8:34).
            After the second, he teaches that "if anyone desires to be first, he shall be last of all and
            servant of all" (Mark 9:35). After the third, he teaches that "whoever desires to become
            great among you shall be your servant" (Mark 10:43). This consistent pattern establishes
            discipleship as participation in Jesus's suffering service rather than a path to prestige or
            power.</p>

        <p>The Failure of the Disciples receives more emphasis in Mark than in the other Gospels.
            Mark frequently notes the disciples' lack of understanding (Mark 4:13, 6:52, 8:17-21),
            their inappropriate responses to Jesus's teaching (Mark 8:32-33, 9:33-34, 10:35-37), and
            their ultimate desertion at his arrest (Mark 14:50). This emphasis on discipleship failure
            serves several purposes: it creates a realistic portrait of the challenges of following
            Jesus, it emphasizes the necessity of divine grace rather than human achievement in
            discipleship, and it offers hope to Mark's readers who may be experiencing their own
            failures in following Christ. The fact that these same failed disciples became the leaders
            of the early church demonstrates the transformative power of the resurrection and the
            Spirit.</p>

        <p>The Present Reality of the Kingdom receives particular emphasis in Mark's
            presentation of Jesus's teaching. While not ignoring future aspects of the kingdom, Mark
            emphasizes its present manifestation in Jesus's ministry of healing, exorcism, and
            teaching. The declaration that "the kingdom of God has come near" (Mark 1:15)
            establishes the immediacy of God's reign in Jesus's person and work. The emphasis on
            Jesus's authority over demons, disease, and natural forces demonstrates the kingdom's
            power breaking into the present world order. This emphasis on the kingdom's present
            reality creates a sense of urgency about response and establishes discipleship as
            participation in God's current work rather than merely preparation for a future reality.</p>
    </fieldset>

    <fieldset class="story-box">
        <legend>
            <h2><span class="emoji">🏃</span>Mark's Theological Contribution</h2>
        </legend>
        <p>Mark's distinctive approach to Jesus's teachings and his narrative presentation make a
            unique and essential contribution to our understanding of Jesus's ministry and
            message. The emphasis on Jesus as the suffering servant who reveals God's kingdom
            through powerful deeds rather than merely eloquent words provides a necessary
            complement to the more discourse-focused presentations in Matthew and John. The
            focus on the cost of discipleship and the failures of the first disciples creates a realistic
            portrait of the challenges of following Jesus while offering hope based on God's
            transformative grace rather than human achievement.</p>

        <p>Mark's fast-paced, action-oriented narrative style makes the Gospel particularly
            accessible to readers more interested in what Jesus did than in extended theological
            discourse. The emphasis on Jesus's deeds as revelatory of his identity and mission
            establishes the principle that authentic Christianity involves not merely correct belief
            but transformative action. The focus on Jesus's service and sacrifice as the model for
            discipleship establishes humility and self-giving as the defining characteristics of
            Christian leadership rather than dominance or self-promotion.</p>

        <p>Mark's Gospel thus provides an essential perspective on Jesus's teaching ministry,
            emphasizing its integration with his actions, its focus on sacrificial service, and its call to
            costly discipleship. While containing fewer unique discourses than the other Gospels,
            Mark's presentation of Jesus's teachings embedded in a fast-paced narrative of powerful
            deeds creates a compelling portrait of Jesus as the suffering servant whose words and
            actions together reveal the present reality of God's kingdom and the transformative
            demands of authentic discipleship.</p>
    </fieldset>
</section>







<?php
    elseif (isset($_GET['conclusion'])):
?>






<section id="^" class="section fullbar">
<nav class="crumbs">
<div class="bread-crumbs">
    <a href="?intro#^" class="crumb-link">📚 Introduction</a>
    <a href="?gospels#^" class="crumb-link">🌟 All Gospels</a>
    <a href="?Matthew#^" class="crumb-link">📖 Matthew</a>
    <a href="?John#^" class="crumb-link">💫 John</a>
    <a href="?Luke#^" class="crumb-link">❤️ Luke</a>
    <a href="?Mark#^" class="crumb-link">⚡ Mark</a>
    <a href="?conclusion#^" class="crumb-link">🎯 <b>Conclusion</b></a>
</div>
</nav>
    <h2 class="section-title"><span class="emoji">🎯</span>Conclusion: What We Learn from All Four Gospels
    </h2>
    <p>Now that we've looked at all four Gospel books, we can see how they work together like pieces of a
        puzzle.
        Each one shows us something special about Jesus and His teachings.</p>

    <p>Jesus's teachings, as captured in the Sermon on the Mount and throughout His ministry, present a revolutionary
        spiritual and ethical framework centered on the Kingdom of God. This Kingdom isn't merely a future hope but a
        present reality that transforms how we live now. From the Beatitudes to the parables, Jesus consistently
        emphasized that God's reign brings an inversion of worldly values.</p>

    <p>The core of Jesus's message revolves around two inseparable commandments: wholehearted love for God and selfless
        love for others—even enemies. This radical ethic manifests in forgiveness, generosity, humility, and service.
        His teachings challenge followers to move beyond religious performance toward authentic relationship with God
        and compassionate engagement with humanity.</p>

    <p>Jesus embodied these teachings through His own life of service, ultimately demonstrating the depth of divine love
        through self-sacrifice. His invitation remains open today: to seek first God's Kingdom and righteousness,
        trusting in divine provision while actively participating in bringing glimpses of heaven's justice, mercy, and
        love.</p>

    <h3 class="subsection-title"><span class="emoji">🧩</span>How the Gospels Work Together</h3>
    <div class="highlight-box">
        <p><strong>Matthew</strong> is like a great teacher who organizes everything perfectly. He shows us
            what
            Jesus taught about how to live good lives, how to treat others, and how to get ready for Jesus
            to come
            back.</p>
        <p><strong>Mark</strong> is like an exciting storyteller who shows us Jesus in action. He helps us
            see that
            Jesus has real power and that following Him is an adventure that requires courage and faith.</p>
        <p><strong>Luke</strong> is like a caring friend who makes sure everyone feels included. He shows us
            that
            Jesus loves everyone, especially people who are poor, sad, or left out.</p>
        <p><strong>John</strong> is like a wise teacher who helps us understand the deep truths about who
            Jesus
            really is. He shows us that Jesus is God's son who came to save us and give us eternal life.</p>
    </div>

    <h3 class="subsection-title"><span class="emoji">⭐</span>The Most Important Things Jesus Taught</h3>
    <div class="story-box">
        <p>When we put all four Gospels together, we can see the most important things Jesus wants us to
            know:</p>
        <ol style="margin-left: 20px;">
            <li><strong>God Loves You:</strong> No matter who you are or what you've done, God loves you and
                wants
                to have a relationship with you.</li>
            <li><strong>Jesus is the Way to God:</strong> Jesus is God's son who came to earth to show us
                what God
                is like and to die for our sins so we can be forgiven.</li>
            <li><strong>Love Others:</strong> The most important thing we can do is love God and love other
                people.
            </li>
            <li><strong>Help People in Need:</strong> Jesus wants us to take care of people who are poor,
                sick,
                lonely, or hurting.</li>
            <li><strong>Be Humble:</strong> We shouldn't think we're better than other people.</li>
            <li><strong>Forgive Others:</strong> Just like God forgives us, we should forgive people who
                hurt us.
            </li>
            <li><strong>Trust God:</strong> Even when scary or difficult things happen, we can trust that
                God loves
                us and will take care of us.</li>
            <li><strong>Be Ready:</strong> Jesus is coming back someday, and we should live in a way that
                makes Him
                happy.</li>
        </ol>
    </div>

    <h3 class="subsection-title"><span class="emoji">🌈</span>Your Next Steps</h3>
    <p>Now that you know about Jesus's amazing teachings, here are some things you can do:</p>
    <ul style="margin-left: 20px;">
        <li><strong>Read the Bible:</strong> Start reading the Gospel books for yourself. You might want to
            start
            with Mark since it's the shortest and most action-packed.</li>
        <li><strong>Pray:</strong> Talk to God every day. Thank Him for His love, ask Him to help you follow
            Jesus,
            and pray for other people.</li>
        <li><strong>Be Kind:</strong> Look for ways to be kind and helpful to others, especially people who
            might be
            sad, lonely, or in need.</li>
        <li><strong>Learn More:</strong> Keep learning about Jesus by going to church, Sunday school, or
            Bible
            study.</li>
        <li><strong>Tell Others:</strong> Share what you've learned about Jesus's love with your friends and
            family.
        </li>
    </ul>

    <div class="highlight-box">
        <p>Remember, following Jesus isn't about being perfect - it's about loving God and others and trying
            to live
            the way Jesus taught us. When we make mistakes (and we all do), we can ask God to forgive us,
            and He
            will!</p>
        <p>Jesus's teachings show us that God loves us so much that He sent His son to save us. That's the
            most
            amazing news in the world, and it's available to everyone who believes in Jesus. What a
            wonderful gift!
        </p>
    </div>

    <hr class="section-divider">
    <h2 class="section-title"><span class="emoji">🎯</span>Conclusion: The Complementary Nature of the
        Gospel
        Presentations</h2>
    <p>The examination of Jesus's sermons and discourses across the four Gospels reveals the remarkable
        complementary nature of these accounts. Rather than simply duplicating material, each evangelist
        selected
        and organized Jesus's teachings according to their specific theological purposes and audience needs,
        creating a multifaceted portrait of Jesus as teacher that is far richer than any single account
        could
        provide.</p>
    <h3 class="subsection-title"><span class="emoji">📚</span>The Unique Contributions of Each Gospel</h3>
    <div class="highlight-box">
        <h4><strong>Matthew's Contribution</strong></h4>
        <p>Matthew's contribution lies in his systematic organization of Jesus's teachings into five major
            discourses that establish the ethical, ecclesiological, and eschatological foundations of
            Christian
            faith.</p>
        <p>The Sermon on the Mount provides the fundamental principles of Christian discipleship, the
            Mission
            Discourse establishes guidelines for Christian ministry, the Parabolic Discourse reveals the
            mysteries
            of the Kingdom of Heaven, the Church Discourse addresses community life and governance, and the
            Olivet
            Discourse warns of coming judgment while calling for vigilance and faithfulness.</p>
        <p>Matthew's emphasis on Jesus as the authoritative teacher and interpreter of God's law makes his
            Gospel
            the primary source for Christian ethics and doctrine.</p>
    </div>
    <div class="highlight-box">
        <h4><strong>John's Contribution</strong></h4>
        <p>John's contribution lies in his presentation of extended theological discourses that explore the
            deepest
            questions about Jesus's identity, his relationship with the Father, and the nature of salvation
            through
            faith in him. The discourses with Nicodemus, the Samaritan woman, and others establish the
            necessity of
            spiritual transformation, while the Bread of Life discourse, the Good Shepherd teaching, and the
            Farewell Discourse provide profound insights into the nature of spiritual life and the resources
            available to believers. John's emphasis on Jesus as the divine revealer of God makes his Gospel
            essential for understanding Christian theology and spirituality.</p>
    </div>
    <div class="highlight-box">
        <h4><strong>Luke's Contribution</strong></h4>
        <p>Luke's contribution lies in his emphasis on Jesus's ministry to the marginalized and his concern
            for
            social justice, mercy, and inclusion. The unique parables of the Good Samaritan, the Prodigal
            Son, the
            Rich Man and Lazarus, and others establish compassion as the defining attribute of God and the
            primary
            virtue for believers. Luke's emphasis on prayer, the Holy Spirit, and the universal scope of the
            Gospel
            makes his account essential for understanding the inclusive nature of God's kingdom and the
            spiritual
            resources available for Christian mission.</p>
    </div>
    <div class="highlight-box">
        <h4><strong>Mark's Contribution</strong></h4>
        <p>Mark's contribution lies in his action-oriented presentation of Jesus as the suffering servant
            whose
            identity is revealed through powerful deeds rather than extended discourses. The emphasis on the
            cost of
            discipleship, the failures of the first disciples, and the present reality of God's kingdom
            creates a
            realistic portrait of the challenges and possibilities of following Jesus. Mark's fast-paced
            narrative
            style and focus on Jesus's actions make his Gospel particularly effective for demonstrating the
            integration of faith and practice in authentic Christian living.</p>
    </div>
    <h2 class="section-title"><span class="emoji">🔍</span>The Theological Significance of the Diversity
    </h2>
    <div class="story-box">
        <p>The diversity in the Gospel presentations of Jesus's teachings reflects several important
            theological
            principles. First, it demonstrates the richness and complexity of Jesus's ministry, which cannot
            be
            adequately captured by any single perspective or approach. The different emphases of the
            evangelists
            reveal different aspects of Jesus's identity and mission, creating a comprehensive portrait that
            addresses the varied needs and concerns of different audiences and contexts.</p>
        <p>Second, the diversity reflects the principle of divine accommodation, whereby God's revelation is
            adapted
            to the specific needs and capacities of different recipients. Matthew's systematic organization
            serves
            readers who need clear ethical and doctrinal guidance, John's theological depth serves those
            seeking to
            understand the mysteries of faith, Luke's social emphasis serves those concerned with justice
            and
            inclusion, and Mark's action-oriented approach serves those who need to see faith demonstrated
            in
            practice.</p>
        <p>Third, the diversity demonstrates the ongoing relevance of Jesus's teachings for different
            situations and
            challenges. The varied presentations ensure that readers in different circumstances can find
            guidance
            and encouragement appropriate to their needs. Those facing persecution can find strength in
            Mark's
            emphasis on the suffering servant, those struggling with social justice issues can find
            direction in
            Luke's concern for the marginalized, those needing doctrinal clarity can find guidance in
            Matthew's
            systematic teaching, and those seeking deeper spiritual understanding can find illumination in
            John's
            theological discourses.</p>
    </div>
    <h2 class="section-title"><span class="emoji">🤝</span>The Unity Underlying the Diversity</h2>
    <p>The unity underlying the diversity is perhaps most clearly seen in the shared emphasis on Jesus's
        death and
        resurrection as the climax of his ministry. While the Gospels differ in their presentation of
        Jesus's
        teachings, they are unanimous in their emphasis on his sacrificial death as the means of salvation
        and his
        resurrection as the vindication of his claims and the foundation of Christian hope. This shared
        emphasis
        establishes the cross and resurrection as the interpretive key for understanding all of Jesus's
        teachings,
        whether they focus on ethics, theology, social justice, or spiritual practice.</p>
    <h2 class="section-title"><span class="emoji">📝</span>Implications for Contemporary Study and
        Application</h2>
    <p>The complementary nature of the Gospel presentations has important implications for contemporary
        study and
        application of Jesus's teachings. First, it suggests the importance of studying all four Gospels
        rather than
        focusing exclusively on one or two. Each Gospel provides essential insights that complement and
        enrich the
        others, and a comprehensive understanding of Jesus's teaching ministry requires attention to all
        four
        perspectives.</p>
    <p>Second, it suggests the importance of recognizing the different emphases and purposes of each Gospel
        when
        interpreting specific passages. Understanding Matthew's systematic approach, John's theological
        depth,
        Luke's social concern, and Mark's action orientation helps readers appreciate why certain teachings
        appear
        in some Gospels but not others and why the same teachings may be presented differently in different
        accounts.</p>
    <p>Third, it suggests the importance of applying Jesus's teachings in ways that reflect the full range
        of Gospel
        emphases. Christian discipleship should include the ethical rigor emphasized by Matthew, the
        theological
        depth emphasized by John, the social concern emphasized by Luke, and the practical action emphasized
        by
        Mark. A balanced Christian life requires attention to all these dimensions rather than focusing
        exclusively
        on one aspect of Jesus's teaching.</p>
    <h2 class="section-title"><span class="emoji">🌟</span>The Continuing Relevance of Jesus's Teachings
    </h2>
    <p>The sermons and discourses of Jesus recorded in the four Gospels continue to provide essential
        guidance for
        Christian faith and practice nearly two millennia after they were first spoken. The ethical
        principles
        established in the Sermon on the Mount continue to challenge conventional values and call believers
        to a
        higher standard of righteousness. The theological insights revealed in John's discourses continue to
        illuminate the mysteries of faith and provide comfort and assurance to believers facing doubt or
        difficulty.
        The social concerns addressed in Luke's unique parables continue to challenge the church to care for
        the
        marginalized and work for justice in society. The call to costly discipleship emphasized in Mark
        continues
        to remind believers that following Jesus involves sacrifice and service rather than merely personal
        benefit.
    </p>
    <p>The enduring relevance of Jesus's teachings reflects their divine origin and their address to
        fundamental
        human needs and concerns that transcend cultural and temporal boundaries. The questions addressed by
        Jesus—how to live righteously, how to relate to God, how to treat others, how to face suffering and
        death—remain central to human existence in every generation. The answers provided by Jesus—through
        faith,
        love, mercy, and sacrificial service—continue to offer hope and guidance to all who seek authentic
        relationship with God and meaningful existence in the world.</p>
    <p>The study of Jesus's sermons and discourses thus remains essential for anyone seeking to understand
        the
        Christian faith or to live according to its principles. The four Gospels together provide a
        comprehensive
        curriculum for Christian discipleship that addresses every aspect of human existence and every
        challenge of
        faithful living. The diversity of their presentations ensures that readers in every circumstance can
        find
        relevant guidance, while the unity of their witness ensures that this guidance is grounded in the
        authoritative teaching of Jesus Christ, the Word made flesh, who came to reveal God's will and
        provide the
        way of salvation for all humanity.</p>


    <h2><span class="emoji">🎯</span>References</h2>

    <div class="references-list">

        <div class="reference" id="[1]">
            <strong>[1]</strong>
            <span>Circe Institute. "The 5 Discourses of Jesus." Circe Institute
                Blog. Accessed June 7, 2025.</span>
            <br /><a href="https://circeinstitute.org/blog/blog-5-discourses-jesus/">
                https://circeinstitute.org/blog/blog-5-discourses-jesus/</a>
        </div>

        <div class="reference" id="[2]">
            <strong>[2]</strong>
            <span>Wikipedia. "Five Discourses of Matthew." Wikipedia, The Free
                Encyclopedia. Accessed June 7, 2025.</span>
            <br /><a href="https://en.wikipedia.org/wiki/Five_Discourses_of_Matthew">
                https://en.wikipedia.org/wiki/Five_Discourses_of_Matthew</a>
        </div>

        <div class="reference" id="[3]">
            <strong>[3]</strong>
            <span>Campbell United Methodist Church. "Jesus in the Gospel of John:
                The Discourses of Jesus." Campbell United. March 18, 2018.</span>
            <br /><a
                href="https://www.campbellunited.org/documents/sermons/20180318_Jesus-In-Gospel-of-John_The-Discourses-of-Jesus.pdf">
                https://www.campbellunited.org/documents/sermons/20180318_Jesus-In-Gospel-of-John_The-Discourses-of-Jesus.pdf</a>
        </div>

        <div class="reference" id="[4]">
            <strong>[4]</strong>
            <span>Christianity Applied. "The Discourses of Christ in
                Chronological Order." Christianity Applied. January 2025.</span>
            <br /><a
                href="https://www.christianityapplied.org/wp-content/uploads/2025/01/The-Discourses-of-Christ-in-Chronological-Order.pdf">
                https://www.christianityapplied.org/wp-content/uploads/2025/01/The-Discourses-of-Christ-in-Chronological-Order.pdf</a>
        </div>

        <div class="reference" id="[5]">
            <strong>[5]</strong>
            <span>BibleHub. "John: Jesus' Discourses Upon." Nave's Topical Bible. Accessed June 7, 2025.</span>
            <br /><a href="https://biblehub.com/topical/naves/j/john--jesus_discourses_upon.htm">
                https://biblehub.com/topical/naves/j/john--jesus_discourses_upon.htm</a>
        </div>

        <div class="reference" id="[6]">
            <strong>[6]</strong>
            <span>Reinstorf, D. H. "Mark's Unique Contribution." Religious Studies Center, Brigham Young University.
                Vol. 17, No. 2, 2016.</span>
            <br /><a href="https://rsc.byu.edu/vol-17-no-2-2016/marks-unique-contribution">
                https://rsc.byu.edu/vol-17-no-2-2016/marks-unique-contribution</a>
        </div>

        <div class="reference" id="[7]">
            <strong>[7]</strong>
            <span>Public Square Magazine. "Unearthing the Overlooked Gems of Luke's Sermon on the Plain." Public Square
                Magazine. Accessed June 7, 2025.</span>
            <br /><a
                href="https://publicsquaremag.org/faith/gospel-fare/unearthing-the-overlooked-gems-of-lukes-sermon-on-the-plain/">
                https://publicsquaremag.org/faith/gospel-fare/unearthing-the-overlooked-gems-of-lukes-sermon-on-the-plain/</a>
        </div>

        <div class="reference" id="[8]">
            <strong>[8]</strong>
            <span>Quora. "Is it accurate that the gospel of Luke contains 17 unique parables of Jesus?" Quora. Accessed
                June 7, 2025.</span>
            <br /><a
                href="https://www.quora.com/Is-it-accurate-that-the-gospel-of-Luke-contains-17-unique-parables-of-Jesus">
                https://www.quora.com/Is-it-accurate-that-the-gospel-of-Luke-contains-17-unique-parables-of-Jesus</a>
        </div>

        <div class="reference" id="[9]">
            <strong>[9]</strong>
            <span>"The Sermons and Discourses of Jesus Christ: A Comprehensive Guide Organized by Gospel" By Manus AI.
                Created Access June 11, 2025.</span>
            <br /><a href="../_JesusChrist/Jesus_Christ_Sermons_and_Discourses_Guide.pdf">
                Jesus_Christ_Sermons_and_Discourses_Guide.pdf</a>
        </div>
</section>
<?php






    else:
        //This is the main introduction to the page, even before the introduction. maybe is some sort of prologue.




?>
<section class="section fullbar">
<nav class="crumbs">
<div class="bread-crumbs">
    <a href="?intro#^" class="crumb-link">📚 Introduction</a>
    <a href="?gospels#^" class="crumb-link">🌟 All Gospels</a>
    <a href="?Matthew#^" class="crumb-link">📖 Matthew</a>
    <a href="?John#^" class="crumb-link">💫 John</a>
    <a href="?Luke#^" class="crumb-link">❤️ Luke</a>
    <a href="?Mark#^" class="crumb-link">⚡ Mark</a>
    <a href="?conclusion#^" class="crumb-link">🎯 Conclusion</a>
</div>
</nav>
    <h2><span class="emoji">⭐</span>The Teachings of Jesus</h2>

    <p>Jesus Christ's teachings have profoundly influenced human history, offering wisdom that transcends time and
        culture. Below are some of His most important lessons that continue to inspire millions around the world.</p>

    <details class="highlight-box">
        <summary>
            Peacemakers
        </summary>
        <p>Going along with humility, in <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=MT5_9" title="https://ebible.org/study/">
            Matthew 5:9</a>Jesus says, "Blessed are the peacemakers, for they will be
            called children of God." Yes, this means those who help to pacify conflicts between others, but it surely also
            includes avoiding conflicts between oneself and others as well.</p>
        <blockquote class="story-box"><br />
            "You have heard that it was said, 'Eye for eye, and tooth for tooth.' But I say to you, do not show
            opposition against an evil person; but whoever slaps you on your right cheek, turn the other toward him also. And
            if anyone wants to sue you and take your tunic, let him have your cloak also. Whoever forces you to go one mile,
            go with him two. Give to him who asks of you, and do not turn away from him who wants to borrow from you."
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=MT5_38" title="Matthew 5:38"><small><ruby>Matthew<rt>5:38</rt></ruby></small></a>
        </blockquote>
        <p>Why is it important to embrace peace rather than conflict? Jesus teaches that peacemaking reflects the
            very character of God Himself. By choosing reconciliation over retaliation, we demonstrate we are truly
            children of the divine Father who offers grace even to those who oppose Him. When we refuse to perpetuate
            cycles of violence—even when justified by worldly standards—we participate in the revolutionary ethic of the
            Kingdom where enemies become neighbors and hatred is overcome by love.</p>
        <p>Jesus concludes this teaching by embodying it perfectly at the cross, where He prays for His persecutors
            rather than calling down heavenly vengeance. This ultimate demonstration of peaceful resistance transforms
            human history and reveals that God's power operates not through domination but through self-giving love that
            absorbs violence without returning it. In this way, peacemakers don't merely avoid conflict—they actively create
            new possibilities for reconciliation that mirror God's own redemptive work in the world.</p>
    </details>


    <details class="highlight-box">
        <summary>
            Let your light shine
        </summary>
        <p>Jesus uses a powerful metaphor of light to explain the visible impact His followers should have:</p>
        <blockquote class="story-box"><br />
            "You are the light of the world. A city built on a hill cannot be hid. People do not light a lamp and
            put it under the bushel basket; rather, they put it on the lampstand, and it gives light to all in the house.
            In the same way, let your light shine before others, so that they may see your good works and give glory to
            your Father in heaven."
            <a href="https://ebible.org/study/?v1=MT5_14&t1=local%3Aeng-web&w1=bible" title="Matthew 5:14"><small><ruby>Matthew<rt>5:14</rt></ruby></small></a>
        </blockquote>
        <p>This teaching reveals the inherently public nature of authentic discipleship. Just as light naturally
            illuminates darkness, genuine Kingdom living inevitably influences the surrounding culture. Jesus declares that His
            followers possess transformative potential—not to attract attention to themselves, but to redirect that
            attention toward God.</p>
        <p>The imagery of a city on a hill and a lamp on a stand emphasizes that Christian witness should be visible
            and accessible. Disciples aren't called to isolation or to hide their Kingdom values, but rather to
            demonstrate them openly through concrete actions of justice, mercy, and love. This visibility isn't self-promotion but
            divine testimony—the ultimate purpose is that others "give glory to your Father in heaven."</p>
        <p>This teaching connects to Jesus's broader mission of inaugurating God's Kingdom. As His followers embody
            Kingdom ethics—generosity, reconciliation, truthfulness, and compassion—they provide glimpses of God's coming
            reign and invite others to participate in this new reality. Their lives become living invitations to experience
            the transformative power of God's presence in the world.</p>
    </details>


    <details class="highlight-box">
        <summary>
            Love Your Enemies
        </summary>
        <blockquote class="story-box"><br />
            "You have heard that it was said, 'Love your neighbor and hate your enemy.' But I tell you, love your enemies
            and pray for those who persecute you, that you may be children of your Father in heaven. He causes his sun to
            rise on the evil and the good, and sends rain on the righteous and the unrighteous. If you love those who love
            you, what reward will you get? Are not even the tax collectors doing that?
            And if you greet only your own people, what are you doing more than others?
            Do not even pagans do that? Be perfect, therefore, as your heavenly Father is perfect."
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=MT5_43" title="Matthew 5:43"><small><ruby>Matthew<rt>5:43</rt></ruby></small></a>
        </blockquote>
        <p>In this revolutionary teaching, Jesus challenges the conventional wisdom of His time. While the cultural
            norm allowed for loving one's community while harboring hatred toward enemies, Jesus introduces a radical
            ethic of universal love that extends even to those who persecute us. This teaching represents one of the most
            challenging and distinctive aspects of Jesus's moral philosophy.</p>
        <p>This principle of unconditional love remains one of Jesus's most profound and difficult teachings. By
            calling us to imitate God's impartial benevolence, Jesus establishes a standard that transcends natural human
            inclinations and cultural boundaries. This teaching continues to challenge believers to rise above retribution
            and cultivate a love that reflects the perfect love of the heavenly Father.</p>
    </details>


    <details class="highlight-box">
        <summary>
            Forgive
        </summary>
        <blockquote class="story-box"><br />
            "And when you pray, you shall not be like the hypocrites.
            For they love to pray standing in the synagogues and on the corners of the streets, that they may be seen by men.
            Assuredly, I say to you, they have their reward.
            But you, when you pray, go into your room, and when you have shut your door, pray to your Father who is in the secret place;
            and your Father who sees in secret will reward you openly. And when you pray, do not use vain repetitions as the heathen do.
            For they think that they will be heard for their many words.
            Therefore do not be like them. For your Father knows the things you have need of before you ask Him.
            In this manner, therefore, pray:<br />
        <pre class="highlight-box" style="display: inline-block;font-weight: bold;">
            Our Father in heaven,
            Hallowed be Your name.
            Your kingdom come.
            Your will be done
            On earth as it is in heaven.
            Give us this day our daily bread.
            And forgive us our debts,
            As we forgive our debtors.
            And do not lead us into temptation,
            But deliver us from the evil one.
            For Yours is the kingdom
            And the power and the glory forever.
            Amen.<a href="https://www.vaticannews.va/en/prayers/our-father.html" title="Our Father Prayer"style="font-size:1rem;float:right;margin-right:1rem;"><small><ruby>Our Father<rt>Prayer</rt></ruby></small></a>
        </pre><br />
            For if you forgive men their trespasses, your heavenly Father will also forgive you. But if you do not
            forgive men their trespasses, neither will your Father forgive your trespasses."
            <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=MT6_7" title="Matthew 6:7"><small><ruby>Matthew<rt>6:7</rt></ruby></small></a>
        </blockquote>
        <p>In <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=MT6_5" title="Matthew 6:5-15">Matthew 6:5-15</a>,
            Jesus teaches about forgiveness as an essential spiritual practice. After instructing
            His disciples on how to pray with sincerity rather than for public approval, He provides the Lord's Prayer
            as a model. Central to this prayer is the concept of forgiveness—both receiving it from God and extending it to others.</p>
        <p>Jesus deliberately places forgiveness at the heart of spiritual life, creating a direct connection
            between how we treat others and how God treats us. The reciprocal nature of this teaching ("forgive us... as we forgive")
            establishes forgiveness not as optional but as fundamental to Christian discipleship. By emphasizing
            this principle immediately after the prayer itself, Jesus underscores that our relationship with God cannot
            be separated from our relationships with others.</p>
        <p>This teaching reveals that forgiveness is not merely an emotional release but a spiritual imperative that
            reflects God's character and determines our standing in His Kingdom. When we withhold forgiveness from
            others, we essentially reject the very mercy we seek from God, creating a spiritual barrier that prevents us
            from fully experiencing divine grace.</p>
    </details>


    <details class="highlight-box">
    <summary>
        Do Not Worry
    </summary>
    <blockquote class="story-box"><br />
        "Therefore I tell you, do not worry about your life, what you will eat or drink; or about your body, what you
        will wear. Is not life more than food, and the body more than clothes? Look at the birds of the air; they do not
        sow or reap or store away in barns, and yet your heavenly Father feeds them. Are you not much more valuable than
        they? Can any one of you by worrying add a single hour to your life?
        And why do you worry about clothes? See how the flowers of the field grow. They do not labor or spin. Yet I tell
        you that not even Solomon in all his splendor was dressed like one of these. If that is how God clothes the
        grass of the field, which is here today and tomorrow is thrown into the fire, will he not much more clothe
        you—you of little faith? So do not worry, saying, 'What shall we eat?' or 'What shall we drink?' or 'What shall
        we wear?' For the pagans run after all these things, and your heavenly Father knows that you need them. But seek
        first his kingdom and his righteousness, and all these things will be given to you as well. Therefore do not
        worry about tomorrow, for tomorrow will worry about itself. Each day has enough trouble of its own."
        <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=MT6_25" title="Matthew 6:25-34"><small><ruby>Matthew<rt>6:25-34</rt></ruby></small></a>
    </blockquote>
    <p>In this teaching from <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=MT6_25"title="Matthew 6:25-34">Matthew 6:25-34</a>,
    Jesus encourages us to trust in God's providence rather than being consumed by anxiety about material needs.
    By pointing to examples in nature, He reminds us that if God cares for the simplest creatures, He will certainly care for us.
    His children who are made in his image
    <small><a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=GN1_27"title="Genesis 1:27">Genesis 1:27</a></small></p>
        </details>


    <details class="highlight-box">
    <summary>
        The Golden Rule
    </summary>
    <blockquote class="story-box"><br />
        "Therefore, whatever you want men to do to you, do also to them, for this is the Law and the Prophets."
        <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=MT7_12" title="Matthew 7:12"><small><ruby>Matthew<rt>7:12</rt></ruby></small></a>
    </blockquote>
    <p>This simple yet profound teaching appears in Jesus's Sermon on the Mount, embedded within a broader discourse
        about living righteously. The Golden Rule serves as a practical ethical framework that summarizes much of
        Jesus's moral teaching. It follows His instructions about prayer, judging others, and seeking God, and precedes
        His warnings about the narrow path to salvation.</p>
    <p>In context, Jesus presents this principle as the culmination of His teachings on how to treat others—after
        warning against harsh judgment, encouraging persistent prayer, and explaining God's generous nature. The rule
        isn't merely about reciprocity; it calls for proactive compassion and treating others with the same dignity,
        respect, and care we desire for ourselves.</p>
    <p>This teaching echoes throughout many religious traditions. Rabbi Hillel, a Jewish contemporary of Jesus,
        similarly taught: "What is hateful to you, do not do to your neighbor. That is the whole Torah; the rest is
        explanation." By connecting this principle to "the Law and the Prophets," Jesus affirms that loving others as
        ourselves fulfills the essence of God's commandments.</p>
    </details>


    <details class="highlight-box">
    <summary>
        Eye of The Needle
    </summary>
    <p>In this profound encounter, Jesus addresses the relationship between wealth and spiritual commitment:</p>
    <blockquote class="story-box"><br />
        "It is easier for a camel to go through the eye of a needle than for someone who is rich to enter the kingdom of God."
        <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=MT19_24" title="Matthew 19:24"><small><ruby>Matthew<rt>19:24</rt></ruby></small></a>
    </blockquote>
    <p>This teaching emerges from Jesus's interaction with a wealthy young man seeking eternal life. Despite his
        religious observance, the man's attachment to his possessions prevented him from following Jesus completely,
        although he was a devout follower of the law. When challenged to sell everything and give to the poor, the young
        ruler departed in sorrow, unable to relinquish his wealth.</p>
    <p>Jesus's statement about camels and needles isn't merely hyperbole—it reveals a fundamental spiritual principle
        about the incompatibility between material attachment and Kingdom values. The rich often face unique spiritual
        obstacles: self-sufficiency that diminishes reliance on God, attachment to worldly security, and the tendency to
        accumulate rather than distribute resources.</p>
    <p>However, Jesus balances this severe warning with hope: "With God all things are possible." While wealth creates
        significant spiritual barriers, divine grace can overcome even these obstacles. This teaching calls believers to
        examine their relationship with possessions and recognize that Kingdom citizenship demands radical generosity
        and detachment from material wealth. True discipleship may require significant sacrifice, but Jesus promises
        that whatever is surrendered for His sake will be restored "a hundredfold" in the economy of God's Kingdom.</p>
    </details>


    <details class="highlight-box">
    <summary>
        Humility and Service
    </summary>
    <p>Jesus teaches one of his most profound lessons on leadership and humility when responding to an ambitious
        request:</p>
    <blockquote class="story-box"><br />
        "You know that the rulers of the Gentiles lord it over them, and their high officials exercise authority over
        them. Not so with you. Instead, whoever wants to become great among you must be your servant, and whoever wants
        to be first must be your slave—just as the Son of Man did not come to be served, but to serve, and to give his
        life as a ransom for many." <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=MT20_25" title="Matthew 20:25"><small><ruby>Matthew<rt>20:25-28</rt></ruby></small></a>
    </blockquote>
    <p>This teaching emerges from a family's request for status and power. The mother of James and John approaches Jesus
        seeking privileged positions for her sons in his kingdom. When the other disciples become indignant at this
        attempt to secure special favor, Jesus transforms the moment into a revolutionary lesson on leadership.</p>
    <p>Jesus contrasts worldly leadership, characterized by dominance and authority, with Kingdom leadership, defined by
        service and self-sacrifice. In God's economy, greatness is measured not by how many serve you, but by how many
        you serve. This inverted hierarchy establishes servanthood as the path to spiritual significance.</p>
    <p>Most powerfully, Jesus presents himself as the ultimate example of this servant leadership. The incarnate God
        enters human history not to be waited upon but to meet human needs, ultimately surrendering his very life. This
        teaching challenges believers to reject power-seeking and embrace Christ-like humility that places others' needs
        above personal ambition and status.</p>
    </details>


    <details class="highlight-box">
    <summary>
        Love God Above All
    </summary>
    <p>When challenged by religious leaders about which commandment was greatest, Jesus responded with clarity:</p>
    <blockquote class="story-box"><br />
        "You shall love the Lord your God with all your heart and with all your soul and with all your mind. This is the
        greatest and first commandment."
        <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=MT22_37" title="Matthew 22:37"><small><ruby>Matthew<rt>22:37</rt></ruby></small></a>
    </blockquote>
    <p>This teaching emerged during a series of confrontations in Jerusalem, where various religious factions sought to
        trap Jesus with difficult questions. After silencing the Sadducees on the question of resurrection, a Pharisaic
        legal expert tested Jesus by asking which commandment was supreme. Jesus's answer reaffirmed the central Jewish
        prayer known as the Shema (Deuteronomy 6:5), establishing that wholehearted devotion to God transcends all other
        religious obligations.</p>
    </details>


    <details class="highlight-box">
    <summary>
        Love Your Neighbor
    </summary>
    <p>Immediately after stating the first commandment, Jesus added:</p>
    <blockquote class="story-box"><br />
        "And the second is like it: 'You shall love your neighbor as yourself.' On these two commandments hang all the
        Law and the Prophets."
        <a href="https://ebible.org/study/?w1=bible&t1=local%3Aeng-web&v1=MT22_39" title="Matthew 22:39"><small><ruby>Matthew<rt>22:39</rt></ruby></small></a>
    </blockquote>
    <p>Jesus inseparably linked love for God with love for others, declaring that these twin commandments form the
        foundation of all scriptural teaching. This revolutionary ethical principle called believers to extend the same
        care and consideration to others that they naturally afford themselves. Unlike Greco-Roman philosophical
        traditions that emphasized personal happiness or well-being, Jesus established selfless love as the defining
        characteristic of his followers—a radical standard that would require personal sacrifice and active compassion
        toward all people.</p>
    </details>


    <?php
    endif;
    ?><nav class="nav fullbar">
        <div class="nav-links">
            <a href="?intro#^" class="nav-link">📚 Introduction</a>
            <a href="?gospels#^" class="nav-link">🌟 All Gospels</a>
            <a href="?Matthew#^" class="nav-link">📖 Matthew</a>
            <a href="?John#^" class="nav-link">💫 John</a>
            <a href="?Luke#^" class="nav-link">❤️ Luke</a>
            <a href="?Mark#^" class="nav-link">⚡ Mark</a>
            <a href="?conclusion#^" class="nav-link">🎯 Conclusion</a>
        </div>
    </nav>
</section>
<?php
content();
}

function ensenhanzas()
{
    echo ' <article class="fullbar">Hola!</article>';
}

include './anvil/structure.php';
?>