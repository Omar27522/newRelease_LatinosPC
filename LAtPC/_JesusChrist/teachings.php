    <?php
function cssStyles(){
    global $page;
    $dir = isset($page) && method_exists($page, 'getDir') ? $page->getDir() : '';
    ?>
    <link rel="stylesheet" href="<?= $dir ?>_JesusChrist/styles/teachings.css">
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

    <?php
    if (isset($_GET['intro'])):
        // Below is a <section> that ends after the <nav>.
        ?>

    <section class="section fullbar" data-section="Intro">
        <!--Intro-->
        <nav class="crumbs">
            <div class="bread-crumbs">
                <a href="../#^" class="crumb-link">Jesus Christ</a>
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
        <p>Hi there! This guide is all about the amazing things Jesus taught when He lived on Earth about 2,000 years
            ago.
            Jesus was God's son, and He came to teach people how to live good lives and how to love God and each other.
        </p>
        <p>The stories about Jesus are written in four special books called the Gospels. These books are named Matthew,
            Mark, Luke, and John - after the people who wrote them. Each writer told the story of Jesus in their own
            way,
            kind of like how you and your friends might tell the same story but focus on different parts.</p>
        <div class="highlight-box">
            <p><strong>Think of it like this:</strong> if you went to an amazing birthday party, you might tell your mom
                about the games you played. Your sister might tell about the delicious cake. Your brother might talk
                about
                the funny clown. And your friend might describe the cool decorations. You all went to the same party,
                but
                you each noticed different things that were special to you.</p>
        </div>
        <p>That's exactly what happened with the four Gospel writers. They all knew about Jesus and His teachings, but
            each
            one wrote about the parts that were most important for the people they were writing to.</p>
        <h3><span class="emoji">💖</span>Why Jesus's Teachings Matter</h3>
        <p>Jesus taught people how to be kind, loving, and good. His teachings help us know how to treat our families,
            friends, and even people we don't know very well. He taught about being honest, helping others, and loving
            God
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

    <section id="^" class="section fullbar" data-section="Gospels">
        <!--Gospels-->
        <nav class="crumbs">
            <div class="bread-crumbs">
                <a href="../#^" class="crumb-link">Jesus Christ</a>
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
                <summary>Matthew</summary>In Matthew <a
                    href="../../eng-web_html/MAT23.htm#:~:text=Then Jesus spoke to the multitudes and to his disciples%2C saying%2C “The scribes and the Pharisees sit on Moses’ seat."
                    title="Matthew 23:1">(23-25)</a>,
                the author provides the most comprehensive account of this discourse. Matthew's presentation includes
                not
                only the prophetic elements found in the
                other Gospels but also additional parables and teachings about judgment and preparedness.
                The discourse begins with Jesus's denunciation of the scribes and Pharisees in chapter 23,
                moves through prophecies about the destruction of Jerusalem and signs of the end times in chapter 24,
                and concludes with parables about the final judgment in chapter 25. This extended treatment reflects
                Matthew's systematic
                approach to organizing Jesus's teachings and his emphasis on Jesus as the authoritative teacher and
                judge.
            </details>

            <details>
                <summary>Mark</summary>In Mark <a href="../../eng-web_html/MRK13.htm#:~:text=Jesus%2C answering%2C began to tell them%2C “Be careful,What I tell you%2C I tell all: Watch!"
                    title="Mark 13:5">(13:5-37)</a>,
                the author offers a more concise but equally powerful presentation of the same material.
                Mark's account focuses primarily on the prophetic warnings and signs, maintaining his characteristic
                emphasis on immediate action and urgency.
                The use of the word "immediately" throughout Mark's Gospel creates a sense of pressing concern that
                permeates his version of the Olivet Discourse.
                Mark's presentation serves his overall theme of Jesus as the suffering servant whose followers must be
                prepared for persecution and tribulation.
            </details>

            <details>
                <summary>Luke</summary>In Luke <a href="../../eng-web_html/LUK21.htm#:~:text=As some were talking about the temple and,and to stand before the Son of Man."
                    title="Luke 21:5">(21:5-36)</a>,
                the author provides yet another perspective on this crucial teaching.
                Luke's account includes unique elements that reflect his concern for Gentile readers and his emphasis on
                the
                universal scope of Jesus's message.
                Luke's version contains specific warnings about the destruction of Jerusalem that are more detailed than
                those found in
                Matthew and Mark, possibly reflecting Luke's writing after the actual destruction of the temple in 70
                AD.
            </details>

            <details>
                <summary>John</summary>
                Rather than including a direct parallel to the Olivet Discourse, John incorporates
                eschatological themes throughout his Gospel, particularly in the Farewell Discourse
                <a href="../../eng-web_html/JHN13.htm#:~:text=Now before the feast of the Passover%2C Jesus%2C,crow until you have denied me three times." title="John 13">(John
                    13-17)</a>.
                John's emphasis on eternal life as a present reality rather than merely a future hope provides
                a different theological perspective on the same ultimate concerns addressed in the Olivet Discourse.
            </details>

            <p>Think of it like this: if your parents told you they were going on a trip but would come back, they might
                give you instructions about what to do while they're gone. They'd want you to be good, and be ready for
                when
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
    <section id="^" class="section fullbar" data-section="Matthew">
        <!--Matthew-->
        <nav class="crumbs">
            <div class="bread-crumbs">
                <a href="../#^" class="crumb-link">Jesus Christ</a>
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
            of the most sophisticated literary structures in the New Testament <sup>[<a
                    href="?conclusion#[1]:~:text=Circe%20Institute.">1</a>]</sup>.
        </p>
        <h3>Biblical scholars have long recognized that these five discourses are marked by a distinctive closing
            formula:
        </h3>
        <p>"when Jesus had finished speaking" or similar phrases that appear at
            <a href="../../eng-web_html/MAT07.htm#:~:text=When Jesus had finished saying these things%2C the multitudes were astonished at his teaching%2C for he taught them with authority%2C and not like the scribes." title="Matthew 7:28">7:28</a>,
            <a href="../../eng-web_html/MAT11.htm#:~:text=When Jesus had finished directing his twelve disciples%2C he departed from there to teach and preach in their cities." title="Matthew 11:1">11:1</a>,
            <a href="../../eng-web_html/MAT13.htm#:~:text=When Jesus had finished these parables%2C he departed from there." title="Matthew 13:53">13:53</a>,
            <a href="../../eng-web_html/MAT19.htm#:~:text=When Jesus had finished these words%2C he departed from Galilee and came into the borders of Judea beyond the Jordan." title="Matthew 19:1">19:1</a>,
            <a href="../../eng-web_html/MAT26.htm#:~:text=When Jesus had finished all these words%2C he said to his disciples%2C “You know that after two days the Passover is coming%2C and the Son of Man will be delivered up to be crucified.” Then the chief priests%2C the scribes%2C and the elders of the people were gathered together in the court of the high priest%2C who was called Caiaphas." title="Matthew 26:1">26:1</a>
            <sup>[<a href="?conclusion#[2]">2</a>]</sup>.
            This structural pattern creates a framework that some scholars have compared to the five books of the
            Pentateuch,
            suggesting that Matthew intended to present Jesus as a new Moses delivering a new law to God's people.
        </p>
        <p><a href="https://circeinstitute.org/blog/author/brian-phillips/">Brian Phillips</a>'s analysis of these
            discourses reveals an even more sophisticated
            structure, demonstrating how Matthew uses these five blocks of teaching to retell the
            entire Old Testament narrative, showing Jesus as the fulfillment of all previous
            revelation <sup>[<a href="?conclusion#[1]">1</a>]</sup>.
            Each discourse corresponds to a different period of Old Testament history,
            from the giving of the law at Sinai through the prophetic warnings of judgment and
            restoration. This structure serves Matthew's overarching theological purpose of
            demonstrating Jesus's role as the culmination of Jewish history and prophecy.
        </p>

        <h3 id="Sermon on the Mount"><span class="emoji">⛰️</span>Lesson 1: The Sermon on the Mount (How to Live a Good
            Life)</h3>
        <p>This is probably the most famous teaching Jesus ever gave.
            He went up on a mountain and taught a huge crowd of people about how to live in a way that makes God happy.
        </p>

        <div class="highlight-box">
            <h4>The Beatitudes (The "Blessed Are" Sayings
                <a href="../../eng-web_html/MAT05.htm#:~:text=Blessed are the poor in spirit%2C for theirs,they persecuted the prophets who were before you." title="Matthew 5:3">Matthew
                    5:3-12</a>)
            </h4>
            <p>Jesus started by telling people about different kinds of people who are blessed
                (which means God is especially happy with them and will take care of them). Here are some examples in
                simple
                words:</p>
            <ul style="margin-left: 20px; margin-top: 10px;">
                <li>Blessed are the poor in spirit: for theirs is the kingdom of heaven.</li>
                <li>Blessed are they that mourn: for they shall be comforted.</li>
                <li>Blessed are the meek: for they shall inherit the earth.</li>
                <li>Blessed are they which do hunger and thirst after righteousness: for they shall be filled.</li>
                <li>Blessed are the merciful: for they shall obtain mercy.</li>
                <li>Blessed are the pure in heart: for they shall see God.</li>
                <li>Blessed are the peacemakers: for they shall be called the children of God.</li>
                <li>Blessed are they which are persecuted for righteousness' sake: for theirs is the kingdom of heaven.
                </li>
                <li>Blessed are ye, when men shall revile you, and persecute you, and shall say all manner of evil
                    against
                    you falsely, for my sake.</li>
                <li>Rejoice, and be exceeding glad: for great is your reward in heaven: for so persecuted they the
                    prophets
                    which were before you.</li>
            </ul>
        </div>

        <div class="story-box">
            <h4>The Antitheses (<a href="../../eng-web_html/MAT05.htm#:~:text=You have heard that it was said to,just as your Father in heaven is perfect."
                    title="Matthew 5:21">Matthew 5:21-48</a>)</h4>
            <p>Represent Jesus's most direct engagement with
                Jewish law and tradition. Six times Jesus uses the formula "You have heard that it was
                said... but I say to you," demonstrating his authority to interpret and even supersede
                traditional interpretations of the law. These teachings address anger, adultery, divorce,
                oaths, retaliation, and love for enemies, consistently calling for a higher standard of
                righteousness that goes beyond external compliance to internal transformation.</p>
        </div>

        <h4><span class="emoji">🙏</span><a href="https://www.vaticannews.va/en/prayers/our-father.html">The Lord's
                Prayer
            </a>(<a href="../../eng-web_html/MAT06.htm#:~:text=Pray like this:,Kingdom%2C the power%2C and the glory forever. Amen." title="Matthew 6:9">Matthew
                6:9-13</a>)</h4>
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
                (<a href="../../eng-web_html/MAT06.htm#:~:text=Therefore I tell you%2C don’t be anxious for your life: what you will eat%2C or what you will drink; nor yet for your body%2C what you will wear." title="Matthew 6:25">Matthew
                    6:25</a> &
                <a href="../../eng-web_html/MAT07.htm#:~:text=“Don’t judge%2C so that you won’t be judged." title="Matthew 7:1">Matthew
                    7:1</a>)
            </h4>
            <p>This teaching addresses practical concerns of daily life while maintaining focus on spiritual priorities.
                Jesus's teaching
                about not worrying about food and clothing, illustrated with references to birds and lilies, has
                provided comfort and guidance to countless believers throughout history.
                The famous teaching about not judging others establishes principles for community life and interpersonal
                relationships.</p>
        </div>

        <div class="story-box">
            <h4>The Golden Rule and Narrow Gate (<a
                    href="../../eng-web_html/MAT07.htm#:~:text=Ask%2C and it will be given you.,There are few who find it." title="Matthew 7:7">Matthew
                    7:7-14</a>)</h4>
            <p>This teaching provides both positive guidance for ethical behavior and warnings about the difficulty of
                the
                Christian path.
                The Golden Rule, <b>"Therefore, whatever you want men to do to you, do also to them"</b> (<a
                    href="../../eng-web_html/MAT07.htm#:~:text=Therefore%2C whatever you desire for men to do to you%2C you shall also do to them; for this is the law and the prophets." title="Matthew 7:12">Matthew
                    7:12</a>),
                has become one of the most widely recognized ethical principles in human history, transcending religious
                boundaries to influence secular ethics and law.
                The Sermon on the Mount concludes with the <a
                    href="parables#:~:text=The%20Wise%20and%20Foolish%20Builders">Parable of the Two Builders</a>
                (<a href="../../eng-web_html/MAT07.htm#:~:text=Everyone therefore who hears these words of mine,house; and it fell—and its fall was great." title="Matthew 7:24">Matthew
                    7:24-27</a>),
                which emphasizes the importance of not merely hearing Jesus's words but putting them into practice.
                This conclusion reinforces the practical nature of Jesus's teaching and the necessity of obedience for
                those
                who would be his disciples.</p>
        </div>

        <h3 id="The Mission Discourse"><span class="emoji">🔔</span>The Mission Discourse
        </h3>
        <div class="highlight-box">
            <p>This Second Discourse: The Mission Discourse (<a
                    href="../../eng-web_html/MAT10.htm#:~:text=He called to himself his twelve disciples%2C and,he will in no way lose his reward." title="Matthew 10">Matthew
                    10</a>), also known as the Little Commission, provides detailed
                instructions for the Twelve Apostles as they embark on their first missionary journey.
                This discourse reveals Jesus's understanding of the challenges facing his followers and
                his expectations for their ministry approach.</p>
            <h4>The Commissioning (<a href="../../eng-web_html/MAT10.htm#:~:text=He called to himself his twelve disciples%2C and,Simon the Zealot; and Judas Iscariot%2C who also betrayed him."
                    title="Matthew 10:1-4">Matthew 10:1-4</a>)</h4>
            <p>begins with Jesus giving the twelve disciples
                authority over unclean spirits and power to heal diseases. The naming of the twelve
                apostles establishes the foundation of Jesus's earthly ministry and foreshadows the
                leadership structure of the early church. This delegation of authority demonstrates
                Jesus's intention to extend his ministry through his followers rather than limiting it to his
                personal presence.</p>
            <h4>Instructions for Ministry (<a href="../../eng-web_html/MAT10.htm#:~:text=Jesus sent these twelve out and commanded them%2C,the day of judgment than for that city."
                    title="Matthew 10:5-15">Matthew 10:5-15</a>)</h4>
            <p>provide specific guidance for the apostles'
                mission strategy. Jesus's instruction to go "only to the lost sheep of the house of Israel"
                reflects the initial focus of his earthly ministry on the Jewish people, though this
                limitation would later be expanded to include all nations. The instructions about
                traveling light, accepting hospitality, and responding to rejection establish principles for
                Christian ministry that continue to guide missionary work today.</p>
            <h4>Warnings About Persecution (<a href="../../eng-web_html/MAT10.htm#:~:text=Behold%2C I send you out as sheep among wolves.,Beelzebul%2C how much more those of his household!"
                    title="Matthew 10:16-25">Matthew 10:16-25</a>)</h4>
            <p>prepare the disciples for the
                opposition they will face. Jesus's famous instruction to be "wise as serpents and
                harmless as doves" (<a href="../../eng-web_html/MAT10.htm#:~:text=“Behold%2C I send you out as sheep among wolves."
                    title="Matthew 10:16">Matthew 10:16</a>) provides a model for navigating hostile
                environments while maintaining Christian integrity. The warnings about family division
                and persecution before governors and kings proved prophetic as the early church faced
                systematic opposition from both religious and political authorities.</p>
            <h4>Teachings on Fear and Confession (<a
                    href="../../eng-web_html/MAT10.htm#:~:text=Therefore don’t be afraid of them%2C for there,him before my Father who is in heaven."
                    title="Matthew 10:26-33">Matthew 10:26-33</a>)</h4>
            <p>address the psychological and
                spiritual challenges of discipleship under persecution. Jesus's repeated exhortation "do
                not fear" acknowledges the natural human response to danger while calling for
                supernatural courage based on trust in God's care and protection. The teaching about
                confessing Christ before men establishes the public nature of Christian faith and the
                importance of bold witness even in difficult circumstances.</p>
            <h4>The Cost of Discipleship (<a href="../../eng-web_html/MAT10.htm#:~:text=Don’t think that I came to send peace,he will in no way lose his reward."
                    title="Matthew 10:34-42">Matthew 10:34-42</a>)</h4>
            <p>presents some of Jesus's most
                challenging teachings about the demands of following him. The statement "I did not
                come to bring peace but a sword" (<a
                    href="../../eng-web_html/MAT10.htm#:~:text=“Don’t think that I came to send peace on the earth."
                    title="Matthew 10:34">Matthew 10:34</a>) has often been misunderstood, but in
                context it refers to the inevitable conflict that arises when the Gospel challenges existing
                social and religious structures. The teaching about taking up one's cross and losing
                one's life to find it establishes the paradoxical nature of Christian discipleship, where
                apparent loss leads to ultimate gain.</p>
        </div>

        <h3 id="The Parabolic Discourse"><span class="emoji">🔔</span>The Parabolic Discourse</h3>
        <div class="highlight-box">
            <p>In this third Discourse: The Parabolic Discourse represents Jesus's most systematic presentation of
                Kingdom
                teaching through the use of parables. This discourse includes seven parables specifically
                about the Kingdom of Heaven, each revealing different aspects of God's reign and its
                impact on human life and society.</p>
            <h4>The Setting and Method </h4>
            <p><a href="../../eng-web_html/MAT13.htm#:~:text=On that day Jesus went out of the,saying%2C “Behold%2C a farmer went out to sow." title="Matthew 13:1-3">Matthew
                    13:1-3</a>
                establishes the context for Jesus's parabolic
                teaching. The movement from the house to the seaside, where Jesus teaches from a
                boat to crowds on the shore, creates a natural amphitheater that allows his voice to
                carry to large numbers of people. The introduction of parabolic teaching at this point in
                Matthew's Gospel marks a significant shift in Jesus's pedagogical approach, moving
                from direct instruction to indirect revelation through stories and metaphors.</p>
            <h4><a href="parables#:~:text=The%20Sower">The Parable of the Sower</a></h4>
            <p><a href="../../eng-web_html/MAT13.htm#:~:text=He spoke to them many things in parables%2C,He who has ears to hear%2C let him hear." title="Matthew 13:3-9">Matthew
                    13:3-9</a>,
                and <a href="../../eng-web_html/MAT13.htm#:~:text=Hear%2C then%2C the parable of the farmer.,times as much%2C some sixty%2C and some thirty."
                    title="Matthew 13:18-23">Matthew 13:18-23</a>
                serves as both the first parable and
                the interpretive key for understanding Jesus's parabolic method. The detailed
                explanation that Jesus provides to his disciples reveals the allegorical nature of many
                parables and establishes the principle that spiritual understanding requires divine
                illumination. The four types of soil represent different responses to the Gospel message,
                from immediate rejection to fruitful acceptance.</p>
            <h4>The Purpose of Parables</h4>
            <p><a href="../../eng-web_html/MAT13.htm#:~:text=The disciples came%2C and said to him%2C “Why,things which you hear%2C and didn’t hear them."
                    title="Matthew 13:10-17">Matthew
                    13:10-17</a>
                addresses the disciples' question why Jesus speaks in parables.
                Jesus's explanation that parables both reveal and conceal truth,
                depending on the spiritual condition of the hearer, demonstrates the selective
                nature of divine revelation. This teaching establishes the principle that spiritual
                understanding is a gift from God rather than merely the result of human intelligence or
                effort.</p>
            <h4><a href="parables#:~:text=The%20Parable%20of%20the%20Wheat%20and%20the%20Weeds">The Parable of the
                    Tares</a>
            </h4>
            <p><a href="../../eng-web_html/MAT13.htm#:~:text=He set another parable before them%2C saying%2C “The,gather the wheat into my barn."
                    title="Matthew 13:24-30">Matthew
                    13:24-30</a>
                and <a href="../../eng-web_html/MAT13.htm#:~:text=Then Jesus sent the multitudes away%2C and went,He who has ears to hear%2C let him hear."
                    title="Matthew 13:36-43">Matthew 13:36-43</a>
                addresses the problem of evil in the world and God's ultimate plan for dealing with it.
                The image of wheat and tares growing together until harvest provides comfort for believers
                who struggle with the presence of evil in the world while warning of ultimate judgment for
                those who reject God's rule. The detailed explanation emphasizes the role of angels in the
                final judgment and the eternal consequences of human choices.</p>
            <h4><a
                    href="parables#:~:text=Illustrates%20how%20God's%20kingdom%20starts%20small%20but%20grows%20enormously">The
                    Parables of Growth</a></h4>
            <p><a href="../../eng-web_html/MAT13.htm#:~:text=He set another parable before them%2C saying%2C “The,measures of meal%2C until it was all leavened.">Matthew 13:31-33</a>
                By the use of the images of <a href="parables#:~:text=The%20Mustard%20Seed">mustard seed</a> and <a
                    href="parables#:~:text=The%20Leaven">leaven</a> to illustrate the Kingdom's surprising growth from
                small
                beginnings to great
                influence. These parables encourage believers who might be discouraged by the
                apparent insignificance of the Kingdom's early manifestations while warning opponents
                not to underestimate its ultimate power and scope.</p>
            <h4><a
                    href="parables#:~:text=Reveals%20the%20supreme%20value%20of%20God's%20kingdom,%20worth%20sacrificing%20everything%20to%20obtain">The
                    Parables of Value</a></h4>
            <p><a href="../../eng-web_html/MAT13.htm#:~:text=Again%2C the Kingdom of Heaven is like treasure,sold all that he had and bought it.">Matthew 13:44-46</a>
                employ the images of <a href="parables#:~:text=The%20Hidden%20Treasure">hidden treasure</a> and
                <a href="parables#:~:text=The%20Pearl%20of%20Great%20Price">pearl of great price</a> to illustrate the
                supreme worth of the Kingdom of Heaven.
                These parables emphasize the joy and sacrifice involved in obtaining the Kingdom,
                suggesting that those who truly understand its value will gladly give up everything else to possess it.
            </p>
            <h4><a href="parables#:~:text=The%20Fish%20Net">The Parable of the Net</a></h4>
            <p><a href="../../eng-web_html/MAT13.htm#:~:text=Again%2C the Kingdom of Heaven is like a,There will be weeping and gnashing of teeth.">Matthew 13:47-50</a>
                concludes the public portion of the discourse with another judgment parable, emphasizing the mixed
                nature of
                the
                Kingdom's earthly manifestation and the certainty of final separation between the
                righteous and the wicked. This parable reinforces the themes of the <a
                    href="parables#:~:text=The%20Parable%20of%20the%20Wheat%20and%20the%20Weeds">Tares parable</a>while
                using the familiar image of fishing to make the teaching accessible to Jesus's audience.</p>
        </div>

        <h3 id="The Discourse on the Church"><span class="emoji">🔔</span>The Discourse on the Church</h3>
        <div class="highlight-box">
            <p>The Fourth Discourse: The Discourse on the Church represents Matthew's unique contribution to
                understanding Christian community life and church governance. This discourse is
                particularly significant because Matthew is the only Gospel to use the word
                "church" (<b><a href="https://www.google.com/search?q=Ekklesia"
                        title="Google Definition">Ekklesia</a></b>
                in Greek, <b><a href="https://www.google.com/search?q=Ecclesiam">Ecclesiam</a></b> in Latin), appearing
                twice in this section (<a
                    href="../../eng-web_html/MAT16.htm#:~:text=I also tell you that you are Peter%2C and on this rock I will build my assembly%2C and the gates of Hades will not prevail against it.">Matthew
                    16:18</a> and <a href="../../eng-web_html/MAT18.htm#:~:text=If he refuses to listen to them%2C tell it to the assembly.">Matthew
                    18:17</a>) <sup>[<a
                        href="?conclusion#:~:text=Christianity%20Applied.%20&quot;The%20Discourses%20of%20Christ%20in%20Chronological%20Order.&quot;%20Christianity%20Applied.%20January%202025.">4</a>]</sup>.
                The teachings
                in this discourse have profoundly influenced Christian understanding of church
                discipline, forgiveness, and community relationships.</p>
            <h4>The Question of Greatness</h4>
            <p><a href="../../eng-web_html/MAT18.htm#:~:text=In that hour the disciples came to Jesus%2C,such little child in my name receives me%2C">Matthew 18:1-5</a> begins the
                discourse with the disciples' question about who is greatest in the Kingdom of Heaven.
                Jesus's response, using a child as an object lesson, overturns conventional notions of greatness and
                establishes
                humility as the fundamental virtue for Kingdom citizens. This teaching sets the tone for
                the entire discourse, emphasizing that Christian community operates according to
                different principles than worldly organizations.</p>
            <h4>Warnings Against Causing Sin</h4>
            <p><a href="../../eng-web_html/MAT18.htm#:~:text=but whoever causes one of these little ones,two eyes to be cast into the Gehenna">Matthew 18:6-9</a> address the
                serious responsibility that
                comes with influence over others, particularly those who are vulnerable or new in faith.
                The severe language about millstones and cutting off hands and feet emphasizes the
                gravity of leading others into sin and the lengths to which believers should go to avoid
                such behavior. These teachings establish the principle of corporate responsibility within
                the Christian community.</p>
            <h4><a href="parables#:~:text=The%20Lost%20Sheep">The Parable of the Lost Sheep</a></h4>
            <p><a href="../../eng-web_html/MAT18.htm#:~:text=See that you don’t despise one of these,that one of these little ones should perish.">Matthew 18:10-14</a>
                illustrates God's concern for every individual believer and establishes the responsibility of church
                leaders
                to seek out and
                restore those who have wandered from the faith. This parable emphasizes the value that
                God places on each person and the joy that results from restoration and reconciliation.</p>
            <h4>Church Discipline</h4>
            <p><a href="../../eng-web_html/MAT18.htm#:~:text=If your brother sins against you%2C go%2C show,there I am in the middle of them.">Matthew 18:15-20</a> provides
                the
                most detailed instructions in the
                New Testament for handling conflicts and sin within the Christian community. The four-
                step process of private confrontation, witnesses, church involvement, and ultimate
                exclusion establishes principles for maintaining both truth and love in community
                relationships. The promise that "where two or three are gathered together in My name,
                I am there in the midst of them" (<a
                    href="../../eng-web_html/MAT18.htm#:~:text=For where two or three are gathered together in my name%2C there I am in the middle of them.” Then Peter came and said to him%2C “Lord%2C how often shall my brother sin against me%2C and I forgive him?">Matthew 18:20</a>)
                has become one of the most beloved assurances in Christian worship and fellowship.</p>
            <h4><a href="parables#:~:text=The%20Unmerciful%20Servant">The Parable of the Unforgiving Servant</a></h4>
            <p><a href="../../eng-web_html/MAT18.htm#:~:text=Then Peter came and said to him%2C “Lord%2C,your brother from your hearts for his misdeeds.">Matthew 18:21-35</a> concludes
                the
                discourse
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
            <p><a href="../../eng-web_html/MAT23.htm#:~:text=Then Jesus spoke to the multitudes and to his disciples%2C,all these things will come upon this generation.">Matthew 23:1-36</a>
                begins the discourse with a scathing denunciation of religious hypocrisy and false leadership.
                The seven woes pronounced against the scribes and Pharisees serve as both specific criticism of
                first-century Jewish
                leadership and timeless warnings against religious pride and corruption. These
                teachings establish Jesus's authority to judge religious institutions and leaders while
                warning against the dangers of external religiosity without internal transformation.</p>
            <h4>Lament Over Jerusalem</h4>
            <p><a href="../../eng-web_html/MAT23.htm#:~:text=Jerusalem%2C Jerusalem%2C who kills the prophets and stones,comes in the name of the Lord!">Matthew 23:37-39</a>
                reveals Jesus's heart for his people
                despite their rejection of his message. The image of gathering Jerusalem's children "as a
                hen gathers her chicks under her wings" demonstrates the tender love that motivates
                even the harshest prophetic warnings. The prediction that Jerusalem will not see Jesus
                again "till you say, 'Blessed is He who comes in the name of the Lord'" points forward to
                his second coming and ultimate vindication.</p>
            <h4>Prophecies of Destruction</h4>
            <p><a href="../../eng-web_html/MAT24.htm#:~:text=Jesus went out from the temple%2C and was,away%2C but my words will not pass away.">Matthew 24:1-35</a>
                address the disciples' questions about the destruction of the temple and the signs of Jesus's coming.
                These prophecies have been the subject of extensive interpretation throughout Christian history,
                with some seeing fulfillment in the destruction of Jerusalem in 70 AD and others looking for future
                fulfillment. The warnings about false messiahs, wars, famines, and persecution provide
                guidance for believers living in times of crisis and uncertainty.</p>
            <h4>Parables of Preparedness</h4>
            <p><a href="../../eng-web_html/MAT24.htm#:~:text=But no one knows of that day and,“Behold%2C I have told you beforehand.">Matthew 24:36-25:30</a>
                emphasize the importance of readiness for Jesus's return, since the exact timing remains unknown.
                The Parable of the Faithful Servant, the Ten Virgins, and the Talents all stress the need for vigilance,
                wisdom, and faithful stewardship during the period of waiting.
                These parables have provided comfort and motivation for believers throughout
                the centuries who have looked forward to Christ's return.</p>
            <h4>The Final Judgment</h4>
            <p><a href="../../eng-web_html/MAT25.htm#:~:text=But when the Son of Man comes in,eternal punishment%2C but the righteous into eternal life.">Matthew 25:31-46</a>
                concludes the discourse with Jesus's most detailed description of the last judgment.
                The separation of sheep and goats based on acts of mercy toward "the least of these"
                has profoundly influenced Christian understanding of social responsibility and the relationship between
                faith and works.
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
                establishment of Kingdom principles through the <a href="#The%20Mission%20Discourse">Mission
                    Discourse's</a>
                instructions for ministry, the <a href="#The%20Parabolic%20Discourse">Parabolic Discourse's</a>
                revelation of Kingdom mysteries, the <a href="#The%20Discourse%20on%20the%20Church">Church
                    Discourse's</a>
                guidance for community life, and the <a href="#The%20Olivet%20Discourse">Olivet Discourse's</a>
                warnings about judgment creates a comprehensive curriculum for Christian discipleship.
                Each discourse builds upon the previous ones while addressing different aspects of the Christian life
                and
                mission.</p>
            <p>Matthew's emphasis on Jesus's words rather than merely his actions reflects the evangelist's
                understanding that Jesus came not only to demonstrate God's power but to reveal God's will
                through authoritative teaching. The careful preservation and organization of these discourses
                has made Matthew's Gospel the primary source for Christian ethics, church governance, and
                eschatological understanding throughout the history of the church.</p>
        </div>
    </section>
    <?php /*
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
*/
    elseif (isset($_GET['John'])):
/*
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
*/
?>
    <section id="^" class="section fullbar" data-section="John">
        <!--John-->
        <nav class="crumbs">
            <div class="bread-crumbs">
                <a href="../#^" class="crumb-link">Jesus Christ</a>
                <a href="?intro#^" class="crumb-link">📚 Introduction</a>
                <a href="?gospels#^" class="crumb-link">🌟 All Gospels</a>
                <a href="?Matthew#^" class="crumb-link">📖 Matthew</a>
                <div class="dropdown crumb-link">
                    <input type="checkbox" id="dropdown-toggle-john" class="dropdown-toggle">
                    <label for="dropdown-toggle-john" class="dropdown-label">💫 <b>John</b></label>
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
            <p><span class="emoji" style="font-size:1.7rem;">🏃</span>John's presentation of Jesus's discourses thus
                provides essential theological content
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
                <a href="../../eng-web_html/JHN06.htm#:~:text=Jesus said to them%2C “I am the bread of life." title="John 6:35">
                    <small><ruby>John<rt>6:35</rt></ruby></small></a>
            </p>
            <p>Jesus wasn't talking about regular bread that fills your stomach. He was talking about spiritual food
                that fills your heart and soul. Just like your body needs food to grow strong, your spirit needs Jesus
                to
                grow strong.</p>
        </div>

        <h2><span class="emoji">💡</span>"I Am the Light of the World"</h2>
        <div class="story-box">
            <p class="paragraphStoryBox">Jesus said, <strong>"I am the light of the world.
                    Whoever follows me will never walk in darkness but will have the light of life."</strong>
                <a href="../../eng-web_html/JHN08.htm#:~:text=Again%2C therefore%2C Jesus spoke to them%2C saying%2C “I am the light of the world." title="John 8:12">
                    <small><ruby>John<rt>8:12</rt></ruby></small></a> Think about what happens when you're in a dark
                room
                and someone turns on the light.
                Suddenly you can see everything clearly! That's what Jesus does for our lives. Before we know Jesus,
                it's
                like we're walking around in the dark, not sure which way to go or what's right and wrong. But when
                Jesus comes into our lives, it's like someone turned on a bright light.
            </p>
        </div>

        <h2><span class="emoji">🐑</span>"I Am the Good Shepherd"</h2>
        <div class="story-box">
            <p class="paragraphStoryBox">Jesus said, <strong>"I am the good shepherd. The good shepherd gives his life
                    for
                    the sheep."</strong>
                <a href="../../eng-web_html/JHN10.htm#:~:text=I am the good shepherd.,I received this commandment from my Father." title="John 10:11-18">
                    <small><ruby>John<rt>10:11</rt></ruby></small></a> In Jesus's time, shepherds took care of sheep.
                A good shepherd would protect the sheep from wolves and other dangerous animals,
                even if it meant getting hurt himself. Jesus was saying that He's like a good shepherd,
                and we're like His sheep. He loves us so much that He was willing to die on the cross
                to save us from our sins (the wrong things we do).
            </p>
        </div>

        <h2><span class="emoji">🌅</span>Jesus and Nicodemus: Being Born Again</h2>
        <cite>Nicodemus was a religious leader who came to talk to Jesus at night.</cite>
        <div class="story-box">
            <p class="paragraphStoryBox"> Jesus told him something that confused him:
                <strong>"You must be born again."</strong> <a
                    href="../../eng-web_html/JHN03.htm#:~:text=Jesus answered him%2C “Most certainly I tell you%2C unless one is born anew%2C he can’t see God’s Kingdom.” Nicodemus said to him%2C “How can a man be born when he is old?" title="John 3:3">
                    <small><ruby>John<rt>3:3</rt></ruby></small></a>
                Nicodemus was confused because he thought Jesus was talking about being born as a baby again, which is
                impossible!
                But Jesus explained that He wasn't talking about physical birth. He was talking about spiritual birth.
                When we believe in Jesus and ask Him to be our Savior, it's like being born again spiritually. God gives
                us
                a
                new heart that wants to love Him and do good things.
            </p>
            <p>Jesus told Nicodemus the most famous verse in the Bible: <strong>"For God so loved the world that he gave
                    his
                    one and only Son,
                    that whoever believes in him shall not perish but have eternal life."</strong>
                <a href="../../eng-web_html/JHN03.htm#:~:text=For God so loved the world%2C that he gave his only born Son%2C that whoever believes in him should not perish%2C but have eternal life." title="John 3:16">
                    <small><ruby>John<rt>3:16</rt></ruby></small></a>
                This means God loves everyone so much that He sent Jesus to die for our sins so we could live with God
                forever.
            </p>
        </div>

        <h2 id="Unique Sermons and Discourses" style="justify-content: center;"><span class="emoji">🌟</span>John's
            Unique
            Sermons and Discourses</h2>
        <div class="highlight-box">
            <p>The Gospel of John stands apart from the <a href="https://en.wikipedia.org/wiki/Synoptic_Gospels"
                    title="Wikipedia">Synoptic Gospels</a>
                (<a href="?Matthew#^" title="Matthew's Special Teachings">Matthew</a>,
                <a href="?Mark#^" title="Mark's Special Way of Telling the Story">Mark</a>, and
                <a href="?Luke#^" title="Luke's Special Teachings">Luke</a>)
                in its presentation of Jesus's teachings. While the Synoptics often present Jesus speaking
                in brief sayings and parables, John records extended theological discourses that explore
                profound questions about Jesus's identity, his relationship with the Father, and the
                nature of salvation. These discourses represent some of the most theologically rich
                material in the New Testament and have profoundly influenced Christian doctrine,
                particularly regarding Christology, pneumatology, and soteriology.
            </p>
            <h3><span class="emoji">🌟</span>John's Distinctive Approach to Jesus's Teachings</h3>
            <div class="story-box">
                <p class="paragraphStoryBox">John's approach to Jesus's teachings differs significantly from the
                    Synoptic
                    Gospels in
                    several important ways. First, John presents Jesus's words in longer, more developed
                    discourses rather than the brief sayings and parables that characterize the Synoptics.
                    Second, John's Jesus speaks in a distinctive theological vocabulary, using terms like
                    <a href="../../eng-web_html/JHN01.htm#:~:text=In him was life%2C and the life was the light of men."
                        title="John 1:4">"life,"</a>
                    <a href="../../eng-web_html/JHN01.htm#:~:text=The same came as a witness%2C that he might testify about the light%2C that all might believe through him."
                        title="John 1:7">"light,"</a>
                    <a href="../../eng-web_html/JHN01.htm#:~:text=The Word became flesh and lived among us."
                        title="John 1:14">"truth,"</a>
                    and <a href="../../eng-web_html/JHN03.htm#:~:text=The Father loves the Son%2C and has given all things into his hand."
                        title="John 3:35">"love"</a>
                    as central metaphors for his ministry and identity.
                    Third, John frequently presents Jesus's teachings as responses to specific encounters or
                    controversies, embedding them in narrative contexts that illuminate their meaning and significance.
                </p>
                <p>The purpose of John's Gospel, as stated in <a
                        href="../../eng-web_html/JHN20.htm#:~:text=but these are written that you may believe that Jesus is the Christ%2C the Son of God%2C and that believing you may have life in his name." title="John 20:31">John
                        20:31</a>,
                    is <strong>"that you may believe that Jesus is the Christ, the Son of God, and that believing you
                        may
                        have life in His name."</strong>
                    This explicit evangelistic and theological purpose shapes John's presentation of Jesus's discourses,
                    focusing them on questions of Jesus's identity and the nature of salvation through faith in him.
                    In John's Gospel, Jesus consistently points to himself as the source of eternal life,
                    making claims about his divine nature and authority that are more explicit than those found in the
                    Synoptic Gospels.</p>
            </div>
        </div>

        <h3 id="The Word Made Flesh"><span class="emoji">🌟</span>The Word Made Flesh <small><a
                    href="../../eng-web_html/JHN01.htm#:~:text=In the beginning was the Word%2C and the,the bosom of the Father%2C has declared him." title="John 1:1-18">
                    John 1:1-18</a></small></h3>
        <div class="story-box">
            <p class="paragraphStoryBox">
                The Prologue to John's Gospel, while not a discourse of Jesus in the strict sense,
                establishes the theological framework for understanding all of Jesus's subsequent
                teachings in this Gospel. This poetic introduction presents Jesus as the eternal Word
                (<a href="https://en.wikipedia.org/wiki/Logos" title="Wikipedia">Logos</a>).
                <strong>"In the beginning was the Word, and the Word was with God, and the Word was God."</strong>
                <a href="../../eng-web_html/JHN01.htm#:~:text=In the beginning was the Word%2C and the Word was with God%2C and the Word was God."
                    title="John 1:1"><small><ruby>John
                            <rt>1:1</rt>
                        </ruby></small></a>
            </p>
            <p>The Divine <b>Word</b> establishes Jesus's pre-existence, divine nature, and role
                in creation. The declaration that <strong>"the Word was God"</strong>
                represents one of the most explicit statements of Jesus's divinity in the New Testament.
                The identification of Jesus as the source of <strong>"life"</strong> and <strong>"light"</strong>
                introduces key metaphors that will recur throughout the Gospel, particularly in Jesus's own
                self-descriptions.</p>
            <h3>The Witness of John the Baptist</h3>
            <span class="passage"><a href="../../eng-web_html/JHN01.htm#:~:text=There came a man sent from God%2C whose,sent that he might testify about the light."
                    title="John 1:6-8"><ruby>John<rt>1:6-8</rt></ruby></a>
                & <a href="../../eng-web_html/JHN01.htm#:~:text=John testified about him." title="John 1:15"><ruby>John
                        <rt>
                            1:15</rt>
                    </ruby></a></span>
            <p>establishes the relationship between
                <a href="https://www.vaticannews.va/en/liturgical-holidays/memorial-of-the-passion-of-saint-john-the-baptist.html"
                    title="Memorial of the Passion of Saint John the Baptist">
                    John the Baptist</a> and Jesus, <strong>"He was not the light, but was sent that he might testify
                    about
                    the light."</strong>
                <a href="../../eng-web_html/JHN01.htm#:~:text=He was not the light%2C but was sent that he might testify about the light."
                    title="John 1:8"><small><ruby>John
                            <rt>1:8</rt>
                        </ruby></small></a>
                This clarification addresses potential confusion about John's role and establishes the proper
                relationship
                between the forerunner and the Messiah.
            </p>
            <h4>The Incarnation and Revelation</h4>
            <span class="passage"><a href="../../eng-web_html/JHN01.htm#:~:text=The true light that enlightens everyone was coming,of the Father%2C full of grace and truth."
                    title="John 1:9-14 & 16-18<"><ruby>John<rt>1:9-14 & 16-18</rt></ruby></a></span>
            <p>describes the Word's entrance into the world and humanity's varied responses to him.
                The statement that <strong>"He came to His own, and His own did not receive Him"</strong>
                <a href="../../eng-web_html/JHN01.htm#:~:text=He came to his own%2C and those who were his own didn’t receive him."
                    title="John 1:11"><small><ruby>John<rt>1:11</rt></ruby></small></a>
                anticipates the rejection that Jesus will face throughout the Gospel. The promise that <strong>"those
                    who
                    receive him become 'children of God'"</strong>
                <a href="../../eng-web_html/JHN01.htm#:~:text=But as many as received him%2C to them he gave the right to become God’s children%2C to those who believe in his name: who were born%2C not of blood%2C nor of the will of the flesh%2C nor of the will of man%2C but of God."
                    title="John 1:12"><small><ruby>John<rt>1:12</rt></ruby></small></a>
                introduces the theme of spiritual rebirth that will be developed in Jesus's discourse with
                <a href="https://www.vaticannews.va/en/pope/news/2025-03/pope-francis-nicodemus-finds-hope-in-encounter-with-jesus.html#:~:text=Jesus%20illuminates%20the%20darkness%20of%20the%20heart"
                    title="Nicodemus finds hope in encounter with Jesus">
                    Nicodemus</a>.
            </p>
            <p>The Prologue concludes with the declaration that <strong>"No one has seen God at any time.
                    The only begotten Son, who is in the bosom of the Father, He has declared Him"</strong>
                <a href="../../eng-web_html/JHN01.htm#:~:text=No one has seen God at any time."
                    title="John 1:18"><small><ruby>John<rt>1:18</rt></ruby></small></a>
                This statement establishes Jesus as the definitive revelation of God, a theme that will be
                central to his discourses throughout the Gospel. Jesus's claim to reveal the Father
                becomes one of the most distinctive aspects of his teaching in John's Gospel.
            </p>
        </div>

        <h3 id="The New Birth"><span class="emoji">🌟</span>The New Birth <small><a
                    href="../../eng-web_html/JHN03.htm#:~:text=Now there was a man of the Pharisees,revealed%2C that they have been done in God." title="John 3:1-21">
                    John 3:1-21</a></small></h3>
        <div class="story-box">
            <p class="paragraphStoryBox">
                The Discourse with Nicodemus: Jesus's conversation represents the first major discourse in John's
                Gospel and introduces several themes that will be developed throughout the narrative.
                This nighttime encounter with a member of the Jewish ruling council addresses fundamental questions
                about
                spiritual transformation and the nature of salvation.</p>
            <span class="passage"><a href="../../eng-web_html/JHN03.htm#:~:text=Now there was a man of the Pharisees,So is everyone who is born of the Spirit."
                    title="John 3:1-8"><ruby>John<rt>3:1-8</rt></ruby></a></span>
            <p>The conversation begins with Nicodemus's acknowledgment of Jesus as <strong>"a teacher come from
                    God"</strong>
                <a href="../../eng-web_html/JHN03.htm#:~:text=He came to Jesus by night and said to him%2C “Rabbi%2C we know that you are a teacher come from God%2C for no one can do these signs that you do%2C unless God is with him.” Jesus answered him%2C “Most certainly I tell you%2C unless one is born anew%2C he can’t see God’s Kingdom.” Nicodemus said to him%2C “How can a man be born when he is old?"
                    title="John 3:2"><small><ruby>John
                            <rt>3:2</rt>
                        </ruby></small></a>
                based on the signs he has performed. Jesus's response, <strong>“Most certainly I tell you, unless one is
                    born anew, he can’t see God’s Kingdom.”</strong>
                <a href="../../eng-web_html/JHN03.htm#:~:text=Jesus answered him%2C “Most certainly I tell you%2C unless one is born anew%2C he can’t see God’s Kingdom.” Nicodemus said to him%2C “How can a man be born when he is old?"
                    title="John 3:3"><small><ruby>John
                            <rt>3:3</rt>
                        </ruby></small></a>,
                shifts the conversation from Jesus's identity to the radical transformation required for entrance into
                God's
                kingdom. The subsequent discussion of being
                <strong>"born of water and the Spirit"</strong>
                <a href="../../eng-web_html/JHN03.htm#:~:text=Jesus answered%2C “Most certainly I tell you%2C unless one is born of water and Spirit%2C he can’t enter into God’s Kingdom."
                    title="John 3:5"><small><ruby>John
                            <rt>3:5</rt>
                        </ruby></small></a>
                establishes the supernatural nature of this transformation and its essential role in salvation.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN03.htm#:~:text=Nicodemus answered him%2C “How can these things be?”,him should not perish%2C but have eternal life."
                    title="John 3:9-15"><ruby>John<rt>3:9-15</rt></ruby></a></span>
            <p>The Heavenly Witness addresses Nicodemus's confusion about spiritual rebirth with an assertion of Jesus's
                unique authority to speak about heavenly things. The reference:
                <strong>"No one has ascended into heaven but he who descended out of heaven, the Son of Man, who is in
                    heaven"</strong>
                <a href="../../eng-web_html/JHN03.htm#:~:text=No one has ascended into heaven but he who descended out of heaven%2C the Son of Man%2C who is in heaven."
                    title="John 3:13"><small><ruby>John<rt>3:13</rt></ruby></small></a>
                and <strong>"As Moses lifted up the serpent in the wilderness, even so must the Son of Man be lifted
                    up,"</strong>
                <a href="../../eng-web_html/JHN03.htm#:~:text=As Moses lifted up the serpent in the wilderness%2C even so must the Son of Man be lifted up%2C that whoever believes in him should not perish%2C but have eternal life."
                    title="John 3:14"><small><ruby>John<rt>3:14</rt></ruby></small></a>
                introduces both the incarnation and the crucifixion as essential aspects of Jesus's redemptive mission.
                The comparison to Moses lifting up the serpent in the wilderness provides an Old Testament type for
                understanding Jesus's death as the source of healing and salvation.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN03.htm#:~:text=For God so loved the world%2C that he,revealed%2C that they have been done in God."
                    title="John 3:16-21"><ruby>John<rt>3:16-21</rt></ruby></a></span>
            <p>God's Love and Judgment contains what is perhaps the most famous verse in the Bible:
                <strong>"For God so loved the world that He gave His only begotten Son, that whoever believes in Him
                    should
                    not perish but have everlasting life"</strong>
                <a href="../../eng-web_html/JHN03.htm#:~:text=For God so loved the world%2C that he gave his only born Son%2C that whoever believes in him should not perish%2C but have eternal life."
                    title="John 3:16"><small><ruby>John<rt>3:16</rt></ruby></small></a>
                This statement encapsulates the Gospel message and establishes God's love as the motivation for
                salvation.
                The subsequent discussion of judgment clarifies that condemnation results not from God's desire but from
                human rejection of the light that has come into the world.
            </p>
            <p>This discourse establishes several key themes that will recur throughout John's Gospel:
                the necessity of spiritual transformation, Jesus's heavenly origin and authority, salvation through
                faith in
                Christ,
                and the division of humanity based on their response to the light.
                The conversation with Nicodemus also introduces John's characteristic technique of using
                misunderstanding as
                a teaching opportunity, as Nicodemus's literal interpretation of
                <strong>~born again~</strong> <a href="../../eng-web_html/JHN03.htm#:~:text=Nicodemus said to him%2C “How can a man be born when he is old?"
                    title="John 3:4"><small><ruby>John<rt>3:4</rt></ruby></small></a>
                allows Jesus to clarify the spiritual nature of the rebirth he describes.
            </p>
        </div>

        <h3 id="Living Water"><span class="emoji">🌟</span>Living Water <small><a
                    href="../../eng-web_html/JHN04.htm#:~:text=Therefore when the Lord knew that the Pharisees,indeed the Christ%2C the Savior of the world." title="John 4:1-42">John
                    4:1-42</a></small></h3>
        <div class="story-box">
            <p class="paragraphStoryBox">
                Jesus's conversation with the Samaritan woman at Jacob's well represents another
                significant discourse in John's Gospel, addressing themes of worship, spiritual thirst,
                and Jesus's messianic identity. This encounter crosses multiple social boundaries—
                gender, ethnicity, and moral status—demonstrating the universal scope of Jesus's
                mission and message.</p>
            <span class="passage"><a href="../../eng-web_html/JHN04.htm#:~:text=Therefore when the Lord knew that the Pharisees,neither come all the way here to draw."
                    title="John 4:1-15"><ruby>John<rt>4:1-15</rt></ruby></a></span>
            <p>The Request for Water begins with Jesus's simple request for a drink,
                which surprises the Samaritan woman because of the hostility between Jews and
                Samaritans. Jesus redirects the conversation by offering living water.
                <strong>“If you knew the gift of God, and who it is who says to you, ‘Give me a drink,’ you would have
                    asked
                    him, and he would have given you living water.”</strong>
                <a href="../../eng-web_html/JHN04.htm#:~:text=Jesus answered her%2C “If you knew the gift of God%2C and who it is who says to you%2C ‘Give me a drink%2C’ you would have asked him%2C and he would have given you living water.” The woman said to him%2C “Sir%2C you have nothing to draw with%2C and the well is deep."
                    title="John 4:10"><small><ruby>John<rt>4:10</rt></ruby></small></a><br />
                <strong>"but whoever drinks of the water that I will give him will never thirst again; but the water
                    that I
                    will give him will become in him a well of water springing up to eternal life."</strong>
                <a href="../../eng-web_html/JHN04.htm#:~:text=but whoever drinks of the water that I will give him will never thirst again; but the water that I will give him will become in him a well of water springing up to eternal life.” The woman said to him%2C “Sir%2C give me this water%2C so that I don’t get thirsty%2C neither come all the way here to draw.” Jesus said to her%2C “Go%2C call your husband%2C and come here.” The woman answered%2C “I have no husband.” Jesus said to her%2C “You said well%2C ‘I have no husband%2C’ for you have had five husbands; and he whom you now have is not your husband."
                    title="John 4:14"><small><ruby>John<rt>4:14</rt></ruby></small></a>
                This metaphor of living water builds on Old Testament imagery of God as the source of living water
                (<a href="../../eng-web_html/JER02.htm#:~:text=“For my people have committed two evils: they have forsaken me%2C the spring of living waters%2C and cut out cisterns for themselves: broken cisterns that can’t hold water.">Jeremiah 2:13 </a>, <a
                    href="../../eng-web_html/JER17.htm#:~:text=Yahweh%2C the hope of Israel%2C all who forsake you will be disappointed.">Jeremiah 17:13</a>)
                while pointing to the spiritual satisfaction that comes through relationship with Christ.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN04.htm#:~:text=Jesus said to her%2C “Go%2C call your husband%2C,worship him must worship in spirit and truth."
                    title="John 4:16-24"><ruby>John<rt>4:16-24</rt></ruby></a></span>
            <p>True Worship shifts to a discussion of worship after Jesus demonstrates supernatural knowledge of the
                woman's
                marital history.
                When she raises the question of the proper location for worship—Mount Gerizim for Samaritans or
                Jerusalem
                for Jews— Jesus transcends the geographical dispute by declaring that
                <strong>"the hour is coming, and now is, when the true worshipers will worship the Father in spirit and
                    truth for the Father seeks such to be his worshipers."</strong>
                <a href="../../eng-web_html/JHN04.htm#:~:text=But the hour comes%2C and now is%2C when the true worshipers will worship the Father in spirit and truth%2C for the Father seeks such to be his worshipers."
                    title="John 4:23"><small><ruby>John<rt>4:23</rt></ruby></small></a>
                This teaching establishes that authentic worship depends not on location but on the worshiper's
                spiritual
                condition and relationship with God.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN04.htm#:~:text=The woman said to him%2C “I know that,am he%2C the one who speaks to you."
                    title="John 4:25"><ruby>John<rt>4:25-26</rt></ruby></a></span>
            <p>The Messiah's Self-Revelation represents one of the clearest declarations of Jesus's messianic identity
                in
                the Gospels.
                When the woman mentions the coming Messiah who <strong>"will tell us all things,"</strong>
                <a href="../../eng-web_html/JHN04.htm#:~:text=The woman said to him%2C “I know that Messiah is coming%2C he who is called Christ."
                    title="John 4:25"><small><ruby>John<rt>4:25</rt></ruby></small></a>
                Jesus responds with the direct statement, <strong>"I who speak to you am He"</strong>
                <a href="../../eng-web_html/JHN04.htm#:~:text=Jesus said to her%2C “I am he%2C the one who speaks to you.” Just then%2C his disciples came."
                    title="John 4:26"><small><ruby>John<rt>4:26</rt></ruby></small></a>. This explicit
                self-identification
                as the Messiah contrasts with the more
                guarded approach found in the Synoptic Gospels, where Jesus often discourages public declarations of his
                messianic status.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN04.htm#:~:text=Just then%2C his disciples came.,indeed the Christ%2C the Savior of the world."
                    title="John 4:27-42"><ruby>John<rt>4:27-42</rt></ruby></a></span>
            <p>The discourse extends to include Jesus's conversation with his disciples about spiritual harvest and the
                subsequent belief of many Samaritans.
                Jesus's statement that <strong>"the fields... are already white for harvest"</strong>
                <a href="../../eng-web_html/JHN04.htm#:~:text=Don’t you say%2C ‘There are yet four months until the harvest’?"
                    title="John 4:35"><small><ruby>John<rt>4:35</rt></ruby></small></a>
                establishes the urgency of the evangelistic mission while his discussion of sowers and reapers
                acknowledges
                the cooperative nature of spiritual ministry.
                The Samaritans' confession that Jesus is <strong>"the Savior of the world"</strong>
                <a href="../../eng-web_html/JHN04.htm#:~:text=They said to the woman%2C “Now we believe%2C not because of your speaking; for we have heard for ourselves%2C and know that this is indeed the Christ%2C the Savior of the world.” After the two days he went out from there and went into Galilee."
                    title="John 4:42"><small><ruby>John<rt>4:42</rt></ruby></small></a>
                emphasizes the universal scope of his mission beyond the boundaries of Judaism. This discourse
                demonstrates
                Jesus's concern for those marginalized
                by religious and social structures while establishing principles for authentic worship that transcend
                cultural and geographical limitations.
                The woman's transformation from skeptic to evangelist illustrates the life-changing impact of
                encountering
                Jesus and recognizing his true identity.
            </p>
        </div>

        <h2 id="Divine Authority"><span class="emoji">🌟</span>Divine Authority <small><a
                    href="../../eng-web_html/JHN05.htm#:~:text=After these things%2C there was a feast of,his writings%2C how will you believe my words?" title="John 5">John
                    5</a></small>
        </h2>
        <div class="story-box">
            <p class="paragraphStoryBox">Following the healing of a paralyzed man at the pool of Bethesda on the
                Sabbath,
                Jesus
                delivers a discourse on his relationship with the Father and his divine authority.
                This teaching addresses the Jewish leaders' objections to Sabbath healing while making
                some of the most explicit claims about Jesus's divine identity and authority found in the Gospels.</p>
            <span class="passage"><a href="../../eng-web_html/JHN05.htm#:~:text=After these things%2C there was a feast of,his own Father%2C making himself equal with God."
                    title="John 5:1-18"><ruby>John<rt>5:1-18</rt></ruby></a></span>
            <p>The Sabbath Controversy begins with Jesus healing a man who had been paralyzed for thirty-eight years.
                When the Jewish leaders object to the man carrying his mat on the Sabbath and later to Jesus healing on
                the
                Sabbath,
                Jesus responds with the statement, <br /><strong>"My Father has been working until now, and I have been
                    working"</strong>
                <a href="../../eng-web_html/JHN05.htm#:~:text=But Jesus answered them%2C “My Father is still working%2C so I am working%2C too.” For this cause therefore the Jews sought all the more to kill him%2C because he not only broke the Sabbath%2C but also called God his own Father%2C making himself equal with God."
                    title="John 5:17"><small><ruby>John<rt>5:17</rt></ruby></small></a>.
                This claim to a unique relationship with God as Father and to divine prerogative regarding the Sabbath
                provokes charges of blasphemy and intensifies the conflict with religious authorities.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN05.htm#:~:text=Jesus therefore answered them%2C “Most certainly%2C I tell,Son doesn’t honor the Father who sent him."
                    title="John 5:19-23"><ruby>John<rt>5:19-23</rt></ruby></a></span>
            <p>The Son's Relationship with the Father establishes the intimate
                connection between Jesus's actions and the Father's will. Jesus's statement that <strong>"the
                    Son can do nothing of Himself, but what He sees the Father do"</strong> <a
                    href="../../eng-web_html/JHN05.htm#:~:text=Jesus therefore answered them%2C “Most certainly%2C I tell you%2C the Son can do nothing of himself%2C but what he sees the Father doing."
                    title="John 5:19"><small><ruby>John<rt>5:19</rt></ruby></small></a>
                emphasizes his perfect alignment with the Father's purposes while his claim that <strong>"all should
                    honor
                    the Son just as they honor the Father"</strong>
                <a href="../../eng-web_html/JHN05.htm#:~:text=that all may honor the Son%2C even as they honor the Father." title="John 5:23">
                    <small><ruby>John<rt>5:23</rt></ruby></small></a>
                asserts his right to divine worship. This teaching establishes Jesus's divine authority while
                maintaining
                the distinction between the Father and the Son.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN05.htm#:~:text=Most certainly I tell you%2C he who hears,the will of my Father who sent me."
                    title="John 5:24-30"><ruby>John<rt>5:24-30</rt></ruby></a></span>
            <p>Life and Judgment addresses Jesus's authority to give life and execute judgment.
                The promise that <strong>"he who hears My word and believes in Him who sent Me has everlasting
                    life"</strong>
                <a href="../../eng-web_html/JHN05.htm#:~:text=“Most certainly I tell you%2C he who hears my word and believes him who sent me has eternal life%2C and doesn’t come into judgment%2C but has passed out of death into life." title="John 5:24">
                    <small><ruby>John<rt>5:24</rt></ruby></small></a>
                establishes faith in Christ as the path to eternal life. The declaration that <strong>"the hour is
                    coming,
                    and now is, when the dead will hear the voice of the Son of God; and those who hear will
                    live"</strong>
                <a href="../../eng-web_html/JHN05.htm#:~:text=Most certainly I tell you%2C the hour comes%2C and now is%2C when the dead will hear the Son of God’s voice; and those who hear will live." title="John 5:25">
                    <small><ruby>John<rt>5:25</rt></ruby></small></a>
                refers both to spiritual resurrection in the present and physical resurrection in the future.
                Jesus's claim to be the judge of all humanity based on the Father's delegation of <strong>"authority to
                    execute judgment"</strong>
                <a href="../../eng-web_html/JHN05.htm#:~:text=He also gave him authority to execute judgment%2C because he is a son of man."
                    title="John 5:27"><small><ruby>John<rt>5:27</rt></ruby></a></small>
                represents one of the most explicit assertions of divine prerogative in the Gospels.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN05.htm#:~:text=If I testify about myself%2C my witness is not valid.,his writings%2C how will you believe my words?"
                    title="John 5:31-47"><ruby>John<rt>5:31-47</rt></ruby></a></span>
            <p>Witnesses to Jesus addresses the question of evidence for Jesus's
                claims by citing four witnesses: John the Baptist, Jesus's miraculous works, the Father's
                direct testimony, and the Scriptures, particularly the writings of Moses. This section
                establishes the abundant evidence for Jesus's claims while exposing the underlying
                spiritual resistance that prevents the religious leaders from accepting this evidence.
                The indictment that <strong>"you are not willing to come to Me that you may have life"</strong>
                <small><a href="../../eng-web_html/JHN05.htm#:~:text=Yet you will not come to me%2C that you may have life."
                        title="John 5:40"><ruby>John<rt>5:40</rt></ruby></a></small>
                identifies the volitional rather than intellectual nature of their unbelief.
                This discourse establishes Jesus's divine authority in terms of his relationship with the
                Father, his power to give life and execute judgment, and his fulfillment of scriptural
                prophecy. The teaching represents one of John's clearest presentations of high
                <a href="https://www.google.com/search?q=Christology" title="Google Search">Christology</a>,
                establishing
                Jesus's divine nature and authority while maintaining the
                distinction between the Father and the Son.
            </p>
        </div>

        <h3 id="The Bread of Life"><span class="emoji">🌟</span>The Bread of Life<small><a
                    href="../../eng-web_html/JHN06.htm#:~:text=On the next day%2C the multitude that stood,in the synagogue%2C as he taught in Capernaum." title="John 6:22-59">John
                    6:22-59</a></small></h3>
        <div class="story-box">
            <p class="paragraphStoryBox">Following the <a
                    href="https://en.wikipedia.org/wiki/Feeding_the_multitude#:~:text=The%20Feeding%20of%20the%205%2C000%20is%20also%20known%20as%20the,boy%20to%20feed%20a%20multitude.">feeding
                    of the five thousand</a>, Jesus delivers the Bread of Life discourse,
                which develops the metaphor of spiritual nourishment and introduces the controversial teaching about
                eating
                his flesh and drinking his blood.
                This discourse represents one of the most challenging and divisive teachings in John's Gospel, leading
                many
                disciples to abandon Jesus.</p>
            <span class="passage"><a href="../../eng-web_html/JHN06.htm#:~:text=On the next day%2C the multitude that stood on the other side of the sea saw that there was no other boat there%2C except the one in which his disciples had embarked%2C and that Jesus hadn’t entered with his disciples into the boat%2C but his disciples had gone away alone."
                    title="John 6:22"><ruby>John<rt>6:22</rt></ruby></a></span>
            <p>The Search for Jesus describes the crowds following Jesus to Capernaum after the miraculous feeding,
                setting
                the stage for the discourse that follows.
                Their pursuit of Jesus after receiving physical bread creates the opportunity for teaching
                about spiritual nourishment and eternal life.</p>
            <span class="passage"><a href="../../eng-web_html/JHN06.htm#:~:text=When they found him on the other side,you believe in him whom he has sent."
                    title="John 6:25"><ruby>John<rt>6:25-29</rt></ruby></a></span>
            <p>The Work of God begins with Jesus challenging the crowds' motivation,
                stating that they seek him <strong>"not because you saw the signs, but because you ate of the loaves and
                    were filled"</strong>
                <a href="../../eng-web_html/JHN06.htm#:~:text=Jesus answered them%2C “Most certainly I tell you%2C you seek me%2C not because you saw signs%2C but because you ate of the loaves and were filled."
                    title="John 6:26"><small><ruby>John<rt>6:26</rt></ruby></small></a>.
                He redirects their focus from perishable food to <strong>"food which endures to everlasting
                    life"</strong>
                <a href="../../eng-web_html/JHN06.htm#:~:text=Don’t work for the food which perishes%2C but for the food which remains to eternal life%2C which the Son of Man will give to you."
                    title="John 6:27"><small><ruby>John<rt>6:27</rt></ruby></small></a>
                and defines "the work of God" as believing in the one God has sent. This establishes faith in Christ as
                the
                fundamental requirement for receiving eternal life.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN06.htm#:~:text=They said therefore to him%2C “What then do,will raise him up at the last day."
                    title="John 6:30-40"><ruby>John<rt>6:30-40</rt></ruby></a></span>
            <p>The True Bread from Heaven responds to the crowds' request for a sign
                comparable to the manna given through Moses. Jesus clarifies that it was not Moses but
                God who gave the manna and that God <strong>"gives you the true bread from heaven"</strong>
                <a href="../../eng-web_html/JHN06.htm#:~:text=Jesus therefore said to them%2C “Most certainly%2C I tell you%2C it wasn’t Moses who gave you the bread out of heaven%2C but my Father gives you the true bread out of heaven."
                    title="John 6:32"><small><ruby>John<rt>6:32</rt></ruby></small></a>
                His declaration <strong>"I am the bread of life"</strong>
                <a href="../../eng-web_html/JHN06.htm#:~:text=Jesus said to them%2C “I am the bread of life."
                    title="John 6:35"><small><ruby>John<rt>6:35</rt></ruby></small></a>
                represents the first of seven <b><i>"I am"</i></b> statements in John's Gospel, each of which reveals an
                aspect of Jesus's identity and mission.
                The promise that <strong>"everyone who sees the Son and believes in Him may have everlasting
                    life"</strong>
                <a href="../../eng-web_html/JHN06.htm#:~:text=This is the will of the one who sent me%2C that everyone who sees the Son and believes in him should have eternal life; and I will raise him up at the last day.” The Jews therefore murmured concerning him%2C because he said%2C “I am the bread which came down out of heaven.” They said%2C “Isn’t this Jesus%2C the son of Joseph%2C whose father and mother we know?"
                    title="John 6:40"><small><ruby>John<rt>6:40</rt></ruby></small></a>
                establishes faith in Christ as the path to eternal life.
                Murmuring and Divine Drawing <a
                    href="../../eng-web_html/JHN06.htm#:~:text=The Jews therefore murmured concerning him%2C because he,the life of the world is my flesh." title="John 6:41-51">John
                    6:41-51</a>
                addresses the Jews' objection to Jesus's claim to have <b><i>"come down from heaven"</i></b> given their
                knowledge of his human parentage.
                Jesus responds by emphasizing the necessity of divine drawing: <strong>"No one can come to Me unless the
                    Father who sent Me draws him"</strong>
                <a href="../../eng-web_html/JHN06.htm#:~:text=No one can come to me unless the Father who sent me draws him; and I will raise him up in the last day."
                    title="John 6:44"><small><ruby>John<rt>6:44</rt></ruby></small></a>
                This teaching establishes the supernatural nature of faith and the essential role of divine initiative
                in
                salvation. Jesus's statement that <strong>"he who believes in Me has everlasting life"</strong>
                <a href="../../eng-web_html/JHN06.htm#:~:text=Most certainly%2C I tell you%2C he who believes in me has eternal life."
                    title="John 6:47"><small><ruby>John<rt>6:47</rt></ruby></small></a>
                reiterates the centrality of faith while his declaration that
                <strong>"the bread that I shall give is My flesh, which I shall give for the life of the world"</strong>
                <a href="../../eng-web_html/JHN06.htm#:~:text=I am the living bread which came down out of heaven."
                    title="John 6:51"><small><ruby>John<rt>6:51</rt></ruby></small></a>
                introduces the sacrificial aspect of his mission.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN06.htm#:~:text=The Jews therefore contended with one another%2C saying%2C,in the synagogue%2C as he taught in Capernaum."
                    title="John 6:52-59"><ruby>John<rt>6:52-59</rt></ruby></a></span>
            <p>Eating Flesh and Drinking Blood presents Jesus's most controversial teaching in this discourse.
                His insistence that <strong>"unless you eat the flesh of the Son of Man and drink His blood, you have no
                    life in you"</strong>
                <a href="../../eng-web_html/JHN06.htm#:~:text=Jesus therefore said to them%2C “Most certainly I tell you%2C unless you eat the flesh of the Son of Man and drink his blood%2C you don’t have life in yourselves."
                    title="John 6:53"><small><ruby>John<rt>6:53</rt></ruby></small></a>
                provokes strong objections from his hearers. The repeated emphasis on eating his flesh and drinking his
                blood, coupled with the promise that
                <strong>"he who eats My flesh and drinks My blood abides in Me, and I in him"</strong>
                <a href="../../eng-web_html/JHN06.htm#:~:text=He who eats my flesh and drinks my blood lives in me%2C and I in him."
                    title="John 6:56"><small><ruby>John<rt>6:56</rt></ruby></small></a>
                establishes the necessity of intimate spiritual union with Christ. While Christians have interpreted
                this
                teaching in various ways—some seeing it as
                a reference to the <a
                    href="https://www.vatican.va/content/catechism/en/part_two/section_two/chapter_one/article_3/in_brief.html"
                    title="Holy Communion">Eucharist</a><a
                    href="https://www.vatican.va/content/catechism/en/part_two/section_two/chapter_one/article_3/i_the_eucharist_-_source_and_summit_of_ecclesial_life.html#$1KY"
                    title="The Eucharist - Source and Summit of Ecclesial Life"><ruby>
                        <rd>[&#8544;]</rd>
                    </ruby></a>, others as a metaphor for faith—the emphasis on complete
                dependence on Christ's sacrificial death remains central to all interpretations.
                This discourse establishes Jesus as the source of spiritual nourishment and eternal life
                while emphasizing the necessity of faith in him. The challenging nature of the teaching,
                which led many disciples to turn away, demonstrates Jesus's unwillingness to
                compromise truth for popularity and establishes the dividing line between genuine
                discipleship and superficial following.
            </p>
        </div>

        <h3 id="The Light of the World"><span class="emoji">🌟</span>The Light of the World<small><a
                    href="../../eng-web_html/JHN08.htm#:~:text=Again%2C therefore%2C Jesus spoke to them%2C saying%2C “I,As he spoke these things%2C many believed in him.">John 8:12-30</a></small>
        </h3>
        <div class="story-box">
            <p class="paragraphStoryBox">Following the controversy over the woman caught in adultery, Jesus declares
                himself
                to be
                <b><i>"the light of the world"</i></b>
                and engages in a heated debate with the Pharisees about his
                identity and authority. This discourse develops the metaphor of light introduced in the
                Prologue and establishes Jesus's divine origin and mission.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN08.htm#:~:text=Again%2C therefore%2C Jesus spoke to them%2C saying%2C “I,him%2C because his hour had not yet come."
                    title="John 8:12-20"><ruby>John<rt>John 8:12-20</rt></ruby></a></span>
            <p>The Declaration and Challenge begins with Jesus's statement, <strong>"I am
                    the light of the world. He who follows Me shall not walk in darkness, but have the light of
                    life"</strong> <small><a href="../../eng-web_html/JHN08.htm#:~:text=Again%2C therefore%2C Jesus spoke to them%2C saying%2C “I am the light of the world."
                        title="John 8:12"><ruby>John<rt>John 8:12</rt></ruby></a></small>.
                This second <b><i>"I am"</i></b> statement builds on the Old Testament imagery of
                God as light <a href="../../eng-web_html/PSA027.htm#:~:text=Yahweh is my light and my salvation."
                    title="Psalm 27:1">Psalm 27:1</a>,
                <a href="../../eng-web_html/ISA60.htm#:~:text=The sun will be no more your light,and the days of your mourning will end."
                    title="Isaiah 60:19-20">Isaiah
                    60:19-20</a>
                while establishing Jesus as the source of spiritual illumination and guidance. The Pharisees' objection
                that
                Jesus bears witness to
                himself leads to a discussion of testimony and judgment, with Jesus asserting that his
                testimony is valid because of his knowledge of his origin and destination. His statement
                that <strong>"I am not alone, but I am with the Father who sent Me"</strong>
                <small><a href="../../eng-web_html/JHN08.htm#:~:text=Even if I do judge%2C my judgment is true%2C for I am not alone%2C but I am with the Father who sent me."><ruby>John<rt>John 8:16
                            </rt></ruby></a></small>
                establishes the divine validation of his mission.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN08.htm#:~:text=Jesus said therefore again to them%2C “I am,am he%2C you will die in your sins."><ruby>John
                        <rt>
                            John 8:21-24</rt>
                    </ruby></a></span>
            <p>Origin and Destiny addresses the question of Jesus's identity in
                terms of his divine origin. His statement that <strong>"you are from beneath; I am from above"</strong>
                and
                <strong>"you are of this world; I am not of this world"</strong> <small><a
                        href="../../eng-web_html/JHN08.htm#:~:text=He said to them%2C “You are from beneath."><ruby>John<rt>8:23</rt>
                        </ruby></a></small>
                establishes the fundamental distinction between his heavenly nature and human existence.
                The warning that <strong>"if you do not believe that I am He, you will die in your sins"</strong>
                <small><a href="../../eng-web_html/JHN08.htm#:~:text=I said therefore to you that you will die in your sins; for unless you believe that I am he%2C you will die in your sins.” They said therefore to him%2C “Who are you?” Jesus said to them%2C “Just what I have been saying to you from the beginning."><ruby>John<rt>8:24</rt>
                        </ruby></a></small>
                establishes faith in Jesus's divine identity as essential for salvation. The use of <b><i>"I am"</i></b>
                (<a href="https://www.google.com/search?q=ego+eimi">ego eimi</a>) without a predicate echoes God's
                self-revelation to Moses in
                <a href="../../eng-web_html/EXO03.htm#:~:text=God said to Moses%2C “I AM WHO I AM%2C” and he said%2C “You shall tell the children of Israel this: ‘I AM has sent me to you.’ ” God said moreover to Moses%2C “You shall tell the children of Israel this%2C ‘Yahweh%2C the God of your fathers%2C the God of Abraham%2C the God of Isaac%2C and the God of Jacob%2C has sent me to you.’ This is my name forever%2C and this is my memorial to all generations.">Exodus 3:14</a> and
                represents one of John's subtle claims to Jesus's divinity.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN08.htm#:~:text=They said therefore to him%2C “Who are you?”,As he spoke these things%2C many believed in him."><ruby>John
                        <rt>
                            8:25-30</rt>
                    </ruby></a></span>
            <p>The Son's Relationship with the Father responds to the direct question <b><i>"Who are You?"</i></b>
                with reference to Jesus's consistent teaching and his relationship with the Father.
                The statement that <strong>"when you lift up the Son of Man, then you will know that I am He"</strong>
                <small><a href="../../eng-web_html/JHN08.htm#:~:text=Jesus therefore said to them%2C “When you have lifted up the Son of Man%2C then you will know that I am he%2C and I do nothing of myself%2C but as my Father taught me%2C I say these things."
                        title="John 8:28"><ruby>John<rt>8:28</rt></ruby></a></small>
                points to the crucifixion as the ultimate revelation of Jesus's identity.
                The affirmation that <strong>"I always do those things that please Him"</strong>
                <small><a href="../../eng-web_html/JHN08.htm#:~:text=He who sent me is with me."
                        title="John 8:29"><ruby>John<rt>8:29</rt></ruby></a></small>
                establishes Jesus's perfect obedience to the Father's will as the foundation of their relationship.
            </p>
            <p>This discourse establishes Jesus as the divine light who reveals truth and guides believers out of
                darkness.
                The emphasis on Jesus's heavenly origin and perfect alignment with the Father's will establishes his
                unique
                identity and authority
                while the promise of light to those who follow him offers hope of spiritual illumination and guidance.
            </p>
        </div>

        <h2 id="The Good Shepherd"><span class="emoji">🌟</span>
            The Good Shepherd <small><a href="../../eng-web_html/JHN10.htm#:~:text=Most certainly%2C I tell you%2C one who doesn’t,I received this commandment from my Father.">John
                    10:1-18</a></small></h2>
        <div class="story-box">
            <p class="paragraphStoryBox">
                Following the healing of the man born blind and the subsequent controversy with the
                Pharisees, Jesus delivers the Good Shepherd discourse, which uses pastoral imagery to
                describe his relationship with his followers and his sacrificial mission. This teaching
                develops the contrast between true and false spiritual leadership while establishing
                Jesus's unique role as the divinely appointed savior.</p>
            <span class="passage"><a href="../../eng-web_html/JHN10.htm#:~:text=Most certainly%2C I tell you%2C one who doesn’t,they didn’t understand what he was telling them."><ruby>John
                        <rt>
                            John 10:1-6</rt>
                    </ruby></a></span>
            <p>The Sheepfold Analogy begins with a distinction between the shepherd who enters by the door and thieves
                and
                robbers who climb in another way.
                This analogy establishes the legitimacy of Jesus's ministry in contrast to false leaders who lack divine
                authorization.
                The description of the sheep recognizing the shepherd's voice and following him establishes the intimate
                relationship between Jesus
                and his followers and their ability to discern his authentic leadership.</p>
            <span class="passage"><a href="../../eng-web_html/JHN10.htm#:~:text=Jesus therefore said to them again%2C “Most certainly%2C,may have life%2C and may have it abundantly."><ruby>John
                        <rt>
                            John 10:7-10</rt>
                    </ruby></a></span>
            <p>Jesus as the Door presents the third <b><i>"I am"</i></b> statement: <strong>"I am the door of the
                    sheep"</strong>
                <small><a href="../../eng-web_html/JHN10.htm#:~:text=Jesus therefore said to them again%2C “Most certainly%2C I tell you%2C I am the sheep’s door."><ruby>John<rt>10:7</rt>
                        </ruby></a></small>.
                This metaphor establishes Jesus as the exclusive means ofentrance into God's flock and the source of
                salvation.
                The contrast between thieves who <strong>"steal, and kill, and destroy" and Jesus who came "that they
                    may
                    have life, and that they may have it more abundantly"</strong>
                <small><a href="../../eng-web_html/JHN10.htm#:~:text=The thief only comes to steal%2C kill%2C and destroy."><ruby>John<rt>10:10
                            </rt>
                        </ruby></a></small>
                establishes the life-giving purpose of Jesus's mission in contrast to the destructive influence of false
                leaders.
            </p>
            <span class="passage"><a href="../../eng-web_html/JHN10.htm#:~:text=I am the good shepherd.,I received this commandment from my Father."><ruby>John
                        <rt>
                            John 10:11-18</rt>
                    </ruby></a></span>
            <p>Jesus as the Good Shepherd presents the fourth <b><i>"I am"</i></b> statement: <strong>"I am the good
                    shepherd"</strong>
                <small><a href="../../eng-web_html/JHN10.htm#:~:text=“I am the good shepherd."><ruby>John<rt>10:11
                            </rt>
                        </ruby></a></small>.
                This metaphor builds on Old Testament imagery of God as the shepherd of Israel
                (<a href="../../eng-web_html/PSA023.htm#:~:text=Yahweh is my shepherd; I shall lack nothing.,and I will dwell in Yahweh’s house forever.">Psalm 23</a>, <a
                    href="../../eng-web_html/EZK34.htm#:~:text=Yahweh’s word came to me%2C saying%2C,I am your God%2C’ says the Lord Yahweh.">Ezekiel 34</a>)
                while emphasizing Jesus's sacrificial love: <strong>"The good shepherd gives His life for the
                    sheep"</strong>
                <small><a href="../../eng-web_html/JHN10.htm#:~:text=“I am the good shepherd."><ruby>John<rt>10:11
                            </rt>
                        </ruby></a></small>.
                The contrast between the good shepherd and the hireling who abandons the sheep in danger
                establishes the depth of Jesus's commitment to his followers. The statement that <strong>"I lay down My
                    life
                    for the sheep"</strong>
                <small><a href="../../eng-web_html/JHN10.htm#:~:text=even as the Father knows me%2C and I know the Father."><ruby>John<rt>10:15
                            </rt>
                        </ruby></a></small>
                anticipates Jesus's sacrificial death while the declaration that <strong>"I have power to lay it down,
                    and I
                    have power to take it again"</strong>
                <small><a href="../../eng-web_html/JHN10.htm#:~:text=No one takes it away from me%2C but I lay it down by myself."><ruby>John<rt>10:18
                            </rt>
                        </ruby></a></small>
                points to his resurrection and establishes his divine authority over life and death.
                This discourse establishes Jesus as both the exclusive means of salvation <b><i>(the door)</i></b> and
                the sacrificial protector of his people <b><i>(the good shepherd)</i></b>. The emphasis on Jesus's
                voluntary sacrifice, his intimate knowledge of his followers, and his divine commission
                establishes the unique nature of his redemptive mission and the security of those who belong to his
                flock.
            </p>
        </div>

        <h2 id="The Farewell Discourse"><span class="emoji">🌟</span>
            The Farewell Discourse <small><a href="../../eng-web_html/JHN13.htm#:~:text=Now before the feast of the Passover%2C Jesus%2C,crow until you have denied me three times.">John
                    13-17</a></small></h2>
        <div class="highlight-box">
            <p>The Farewell Discourse represents the longest and most comprehensive teaching section
                in John's Gospel, spanning five chapters and addressing a wide range of topics related to
                Jesus's departure, the coming of the Holy Spirit, and the future of the disciples.
                This extended teaching, delivered on the night of Jesus's betrayal, provides essential
                guidance for the disciples as they face the challenges of continuing Jesus's mission in his
                physical absence.</p>
            <div class="story-box">
                <h3><span class="emoji">🦶🫧</span>The Foot Washing and New Commandment
                    <small><a href="../../eng-web_html/JHN13.htm#:~:text=Now before the feast of the Passover%2C Jesus%2C,disciples%2C if you have love for one another.">John
                            13:1-35</a></small>
                </h3>
                <p>The Foot Washing and New Commandment begins with Jesus's
                    symbolic act of washing the disciples' feet, demonstrating humble service as the model
                    for Christian leadership. Peter's resistance and Jesus's insistence establish the necessity
                    of receiving Jesus's cleansing ministry. The subsequent teaching about the betrayer
                    leads to Judas's departure, after which Jesus gives the new commandment:
                    <strong>"Love one another; as I have loved you"</strong>
                    <small><a href="../../eng-web_html/JHN13.htm#:~:text=A new commandment I give to you%2C that you love one another."><ruby><ruby>John
                                    <rt>
                                        13:34</rt>
                                </ruby></ruby></a></small>.
                    This establishes sacrificial love as the distinguishing mark of Christian community and the primary
                    ethical imperative for Jesus's followers.
                </p>
            </div>
            <div class="story-box">
                <h3><span class="emoji">🌱</span>The Way, the Truth, and the Life
                    <small><a href="../../eng-web_html/JHN14.htm#:~:text=Don’t let your heart be troubled.,anything in my name%2C I will do it.">John
                            14:1-14</a></small>
                </h3>
                <p>The Way, the Truth, and the Life addresses the disciples' anxiety about
                    Jesus's departure with promises of reunion and continued relationship. The assurance
                    that Jesus goes to prepare a place in the Father's house offers hope of ultimate reunion
                    while the declaration <strong>"I am the way, the truth, and the life. No one comes to the Father
                        except
                        through Me"</strong>
                    <small><a href="../../eng-web_html/JHN14.htm#:~:text=Jesus said to him%2C “I am the way%2C the truth%2C and the life."><ruby><ruby>John
                                    <rt>
                                        14:6</rt>
                                </ruby></ruby></a></small>
                    establishes Jesus as the exclusive mediator between God and humanity.
                    The teaching about Jesus's unity with the Father—<strong>"He who has seen Me has seen the
                        Father"</strong>
                    <small><a href="../../eng-web_html/JHN14.htm#:~:text=Jesus said to him%2C “Have I been with you such a long time%2C and do you not know me%2C Philip?"><ruby><ruby>John
                                    <rt>
                                        14:9</rt>
                                </ruby></ruby></a></small>
                    establishes Jesus as the definitive revelation of God while the promise of greater works through
                    prayer
                    in Jesus's name establishes the
                    ongoing power available to his followers.
                </p>
            </div>
            <div class="story-box">
                <h3><span class="emoji">🕊️</span>The Promise of the Holy Spirit
                    <small><a href="../../eng-web_html/JHN14.htm#:~:text=If you love me%2C keep my commandments.,Arise%2C let’s go from here.">John
                            14:15-31</a></small>
                </h3>
                <p>The Promise of the Holy Spirit addresses the apparent abandonment
                    the disciples will experience at Jesus's departure by promising:
                    <strong>I will pray to the Father, and he will give you another Counselor, that he may be with you
                        forever</strong>
                    <small><a href="../../eng-web_html/JHN14.htm#:~:text=I will pray to the Father%2C and he will give you another Counselor%2C that he may be with you forever: the Spirit of truth%2C whom the world can’t receive%2C for it doesn’t see him and doesn’t know him."><ruby><ruby>John
                                    <rt>
                                        14:16</rt>
                                </ruby></ruby></a></small>.
                    The identification of this Helper as <strong>"the Spirit of truth"</strong>
                    <small><a href="../../eng-web_html/JHN14.htm#:~:text=the Spirit of truth%2C whom the world can’t receive%2C for it doesn’t see him and doesn’t know him."><ruby><ruby>John
                                    <rt>
                                        14:17</rt>
                                </ruby></ruby></a></small>
                    establishes the Holy Spirit's role in guiding believers into truth while the
                    promise that <strong>"I will not leave you orphans; I will come to you"</strong>
                    <small><a href="../../eng-web_html/JHN14.htm#:~:text=I will not leave you orphans."><ruby><ruby>John
                                    <rt>
                                        14:18</rt>
                                </ruby></ruby></a></small>
                    suggests Jesus's continued presence through the Spirit. The teaching about the indwelling of the
                    Father, Son, and Spirit establishes the intimate communion between God and believers
                    while the promise of peace—<strong>"My peace I give to you"</strong>
                    <small><a href="../../eng-web_html/JHN14.htm#:~:text=Peace I leave with you."><ruby><ruby>John
                                    <rt>
                                        14:27</rt>
                                </ruby></ruby></a></small>
                    offers comfort in the face of tribulation.
                </p>
            </div>
            <div class="story-box">
                <h3><span class="emoji">🍇</span>The True Vine
                    <small><a href="../../eng-web_html/JHN15.htm#:~:text=I am the true vine%2C and my Father,to you%2C that you may love one another.">John
                            15:1-17</a></small>
                </h3>
                <p>The True Vine presents the fifth <b><i>"I am"</i></b> statement: <strong>"I am the true
                        vine"</strong>
                    <small><a href="../../eng-web_html/JHN15.htm#:~:text=“I am the true vine%2C and my Father is the farmer."><ruby><ruby>John
                                    <rt>
                                        15:1</rt>
                                </ruby></ruby></a></small>.
                    This metaphor establishes the organic connection between Jesus and
                    his followers and the necessity of <b><i>"abiding"</i></b> in him for spiritual fruitfulness. The
                    repeated
                    emphasis on abiding—<strong>"He who abides in Me, and I in him, bears much fruit; for without Me you
                        can
                        do nothing"</strong>
                    <small><a href="../../eng-web_html/JHN15.htm#:~:text=I am the vine."><ruby><ruby>John
                                    <rt>
                                        15:5</rt>
                                </ruby></ruby></a></small>
                    —establishes complete dependence on Christ as the essential condition for spiritual productivity.
                    The restatement of the love commandment and the designation of the disciples as
                    <b><i>"friends"</i></b>
                    rather than servants establishes the
                    intimate nature of their relationship with Jesus and the privilege of sharing in his mission.
                </p>
            </div>
            <div class="story-box">
                <h3><span class="emoji">🌎</span>The World's Hatred and the Spirit's Witness
                    <small><a href="../../eng-web_html/JHN15.htm#:~:text=If the world hates you%2C you know that,my name%2C he may give it to you.">John
                            15:18-16:15</a></small>
                </h3>
                <p>The World's Hatred and the Spirit's Witness prepares the disciples
                    for the opposition they will face from a hostile world. The warning that <strong>"if they persecuted
                        Me,
                        they will also persecute you"</strong>
                    <small><a href="../../eng-web_html/JHN15.htm#:~:text=Remember the word that I said to you: ‘A servant is not greater than his lord.’ If they persecuted me%2C they will also persecute you."><ruby><ruby>John
                                    <rt>
                                        15:20</rt>
                                </ruby></ruby></a></small>
                    establishes the inevitable conflict between Christ's followers and the world system. The promise of
                    the
                    Holy Spirit's coming to
                    <strong>"convict the world of sin, and of righteousness, and of judgment"</strong>
                    <small><a href="../../eng-web_html/JHN16.htm#:~:text=When he has come%2C he will convict the world about sin%2C about righteousness%2C and about judgment; about sin%2C because they don’t believe in me; about righteousness%2C because I am going to my Father%2C and you won’t see me any more; about judgment%2C because the prince of this world has been judged."><ruby><ruby>John
                                    <rt>
                                        16:8</rt>
                                </ruby></ruby></a></small>
                    establishes the Spirit's role in confronting unbelief while the promise to <strong>"guide you into
                        all
                        truth"</strong>
                    <small><a href="../../eng-web_html/JHN16.htm#:~:text=However%2C when he%2C the Spirit of truth%2C has come%2C he will guide you into all truth%2C for he will not speak from himself; but whatever he hears%2C he will speak."><ruby><ruby>John
                                    <rt>
                                        16:13</rt>
                                </ruby></ruby></a></small>
                    establishes the Spirit's role in illuminating believers. The assurance that the Spirit <strong>"will
                        glorify Me"</strong>
                    <small><a href="../../eng-web_html/JHN16.htm#:~:text=He will glorify me%2C for he will take from what is mine and will declare it to you."><ruby><ruby>John
                                    <rt>
                                        16:14</rt>
                                </ruby></ruby></a></small>
                    establishes Christ-centeredness as the criterion for authentic spiritual ministry.
                </p>
            </div>
            <div class="story-box">
                <h3><span class="emoji">🥀 💫</span>Sorrow Turned to Joy
                    <small><a href="../../eng-web_html/JHN16.htm#:~:text=A little while%2C and you will not see me.,I have overcome the world.">John
                            16:16-33</a></small>
                </h3>
                <p>Sorrow Turned to Joy addresses the disciples' confusion and grief
                    about Jesus's departure with promises of reunion and ultimate joy. The metaphor of a
                    woman in labor, whose pain is forgotten in the joy of new life, illustrates how the
                    disciples' temporary sorrow will be transformed into permanent joy. The promise of
                    direct access to the Father <strong>"in My name"</strong> <small><a
                            href="../../eng-web_html/JHN16.htm#:~:text=“In that day you will ask me no questions."><ruby><ruby>John<rt>
                                        16:23</rt></ruby></ruby></a></small>
                    establishes a new relationship with God based on Jesus's mediatorial work. The final assurance—
                    <strong>"In the world you will have tribulation; but be of good cheer, I have overcome the
                        world"</strong>
                    <small><a href="../../eng-web_html/JHN16.htm#:~:text=I have told you these things%2C that in me you may have peace."><ruby><ruby>John
                                    <rt>
                                        16:33</rt>
                                </ruby></ruby></a></small>
                    offers hope based on Jesus's ultimate victory over all opposing forces.
                </p>
            </div>
            <div class="story-box">
                <h3><span class="emoji">☁️</span>The High Priestly Prayer
                    <small><a href="../../eng-web_html/JHN17.htm#:~:text=Jesus said these things%2C then lifting up his,may be in them%2C and I in them.">John 17</a></small>
                </h3>
                <p>The High Priestly Prayer concludes the Farewell Discourse with Jesus's
                    extended prayer for himself, his disciples, and all future believers. The prayer for glorification—
                    <strong>"Glorify Your Son, that Your Son also may glorify You"</strong>
                    <small><a href="../../eng-web_html/JHN17.htm#:~:text=Jesus said these things%2C then lifting up his eyes to heaven%2C he said%2C “Father%2C the time has come."><ruby><ruby>John
                                    <rt>
                                        17:1</rt>
                                </ruby></ruby></a></small>
                    establishes the mutual glorification of Father and Son through the work of redemption.
                    The definition of eternal life as knowing <strong>"the only true God, and Jesus Christ whom You have
                        sent"</strong>
                    <small><a href="../../eng-web_html/JHN17.htm#:~:text=This is eternal life%2C that they should know you%2C the only true God%2C and him whom you sent%2C Jesus Christ."><ruby><ruby>John
                                    <rt>
                                        17:3</rt>
                                </ruby></ruby></a></small>
                    establishes salvation in relational rather than merely temporal terms.
                    The prayer for the disciples' protection, sanctification, and unity establishes
                    Jesus's ongoing concern for his followers and his vision for the church's witness in the world.
                    The final prayer for all believers <strong>"that they may be one" and "that the love with which You
                        loved Me may be in them"</strong>
                    <small><a href="../../eng-web_html/JHN17.htm#:~:text=I made known to them your name%2C and will make it known; that the love with which you loved me may be in them%2C and I in them.” John < 17 > * 17:17 Psalms 119:142 This is the Classic World English Bible with the full ecumenical book set."><ruby><ruby>John
                                    <rt>
                                        17:26</rt>
                                </ruby></ruby></a></small>
                    establishes unity and love as the ultimate goals for the Christian community.
                </p>
            </div>
            <h3 style="text-align: center;"><span class="emoji">👋</span>The Farewell Discourse conclusion
                <small><a href="https://en.wikipedia.org/wiki/Farewell_Discourse" title="Wikipedia">John
                        13-17</a></small>
            </h3>
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
                <strong><a href="https://desirejesus.com/blog/2019/11/24/jesus-said-i-am-the-door"
                        title="Desire Jesus dotcom">"I am the door"</a>,</strong>
                <strong><a href="#The Good Shepherd">"I am the good shepherd"</a>,</strong>
                <strong><a href="#Living Water">"I am the resurrection and the life"</a>,</strong>
                <strong><a href="#The Farewell Discourse">"I am the way, the truth, and the life"</a>,</strong>
                <strong><a href="#The Farewell Discourse">"I am the true vine"</a></strong>
                —provide a multifaceted revelation of Jesus's identity and mission. Each metaphor illuminates a
                different
                aspect of Christ's
                relationship with believers and his role in God's redemptive plan. The emphasis on Jesus's divine origin
                and
                authority establishes high Christology as the
                foundation for Christian faith. The repeated claims to have come from the Father, to
                speak the Father's words, and to do the Father's works establish Jesus as the definitive
                revelation of God and the exclusive mediator of salvation. The teaching about Jesus's
                pre-existence, incarnation, and return to the Father creates a comprehensive
                Christological framework that complements and deepens the presentation found in the
                <a href="https://en.wikipedia.org/wiki/Synoptic_Gospels" title="Wikipedia">Synoptic Gospels</a>.
            </p>

            <p>
                The teaching about the Holy Spirit, particularly in the Farewell Discourse, provides the
                most detailed <a href="https://www.google.com/search?q=pneumatology"
                    title="Google Search">pneumatology</a>
                in the Gospels. The promises of the Spirit's coming as
                <b><i>"another Helper,"</i></b> his role in guiding believers into truth, and his work of glorifying
                Christ
                establish the foundation for Christian understanding of the Spirit's ministry. The
                emphasis on the Spirit's role in continuing Jesus's work and mediating his presence to
                believers offers comfort and assurance to the church in every generation.
                The emphasis on eternal life as a present reality, not merely a future hope, establishes
                salvation as a transformative relationship with God through Christ. The teaching about
                being "<a href="#The New Birth">born again</a>," drinking <a href="#Living Water">"living water</a>,"
                eating
                <a href="#The Bread of Life">"the bread of life</a>,"
                and abiding in <b><i>"the true vine"</i></b> provides rich metaphors for understanding the nature of
                spiritual life and
                growth. The emphasis on faith as the means of receiving eternal life establishes the
                fundamental principle of salvation by grace through faith that would become central to
                Christian <a href="https://en.wikipedia.org/wiki/Soteriology" title="Wikipedia">soteriology</a>.
            </p>
        </div>
    </section>
    <?php /*
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
*/
    elseif (isset($_GET['Luke'])):
/*
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
*/
?>
    <section id="^" class="section fullbar" data-section="Luke">
        <nav class="crumbs">
            <div class="bread-crumbs">
                <a href="../#^" class="crumb-link">Jesus Christ</a>
                <a href="?intro#^" class="crumb-link">📚 Introduction</a>
                <a href="?gospels#^" class="crumb-link">🌟 All Gospels</a>
                <a href="?Matthew#^" class="crumb-link">📖 Matthew</a>
                <a href="?John#^" class="crumb-link">💫 John</a>
                <div class="dropdown crumb-link">
                    <input type="checkbox" id="dropdown-toggle-luke" class="dropdown-toggle">
                    <label for="dropdown-toggle-luke" class="dropdown-label">❤️ <b>Luke</b></label>
                    <div class="dropdown-content">
                        <a href="#Parables">Unique Parables</a>
                        <a href="#Distinctive Approach">Distinctive Approach</a>
                        <a href="#Nazareth Synagogue Discourse">Nazareth Synagogue Discourse</a>
                        <a href="#Sermon on the Plain">Sermon on the Plain</a>
                        <a href="#Emphasis on Prayer and the Holy Spirit">Emphasis on Prayer and the Holy Spirit</a>
                        <a href="#Theological Contribution">Theological Contribution</a>
                    </div>
                </div>
                <a href="?Mark#^" class="crumb-link">⚡ Mark</a>
                <a href="?conclusion#^" class="crumb-link">🎯 Conclusion</a>
            </div>
        </nav>
        <h1><span class="emoji">❤️</span>Luke's Special Teachings</h1>
        <div class="highlight-box">
            <p>Luke was like the friend who always noticed when someone was left out and made sure to include them.
                Luke's Gospel is full of stories about Jesus caring for people that others might ignore - people who
                were poor, sick, lonely, or different.</p>
            <p>The Gospel of Luke contains a wealth of unique material not found in the other
                Gospels,
                including some of Jesus's most beloved parables and teachings. Luke's distinctive
                emphasis on Jesus's ministry to the marginalized, his concern for social justice, and his
                focus on prayer and the Holy Spirit create a portrait of Jesus that complements and
                enriches the presentations found in <a href="?Matthew#^">Matthew</a>, <a href="?Mark#^">Mark</a>, and <a
                    href="?John#^">John</a>. Luke's unique
                contributions have profoundly influenced Christian understanding of Jesus's
                compassion, inclusivity, and concern for the poor and outcast.</p>
        </div>

        <h2 id="Parables">Unique Parables in Luke's Gospel</h2>
        <h3>Luke's Gospel contains fifteen parables that appear nowhere else in the New Testament.</h3>
        <p>These unique parables, many of which have become among the most beloved and
            influential of Jesus's teachings, reflect Luke's distinctive emphasis on mercy, inclusion,
            and God's concern for the lost and marginalized. The following analysis examines
            several of the most significant of these unique parables and their contribution to Luke's
            theological vision.</p>
        <ul class="homepage-grid" style="list-style:none;">
            <li><a href="#TheGoodSamaritan">The Good Samaritan</a></li>
            <li><a href="#TheProdigalSon">The Prodigal Son</a></li>
            <li><a href="#TheRichManAndLazarus">The Rich Man and Lazarus</a></li>
            <li><a href="#ThePhariseeAndTheTaxCollector">The Pharisee and the Tax Collector</a></li>
            <li><a href="#TheTwoDebtors">The Two Debtors</a></li>
            <li><a href="#TheFriendAtMidnight">The Friend at Midnight</a></li>
            <li><a href="#TheRichFool">The Rich Fool</a></li>
            <li><a href="#TheBarrenFigTree">The Barren Fig Tree</a></li>
            <li><a href="#TheGreatBanquet">The Great Banquet</a></li>
            <li><a href="#TheTowerBuilder_And_TheBattlingKing">The Tower Builder</a></li>
            <li><a href="#TheTowerBuilder_And_TheBattlingKing">The Battling King</a></li>
            <li><a href="#TheLostCoin">The Lost Coin</a></li>
            <li><a href="#TheDishonestManager">The Dishonest Manager</a></li>
            <li><a href="#TheUnprofitableServants">The Unworthy Servants</a></li>
            <li><a href="#ThePersistentWidow">The Persistent Widow and the Unjust Judge</a></li>
        </ul>

        <div class="highlight-box" id="Distinctive Approach">
            <h2>Luke's Distinctive Approach to Jesus's Teachings</h2>
            <p>The approach to Jesus's teachings reflects his overall purpose and audience.
                Writing primarily for Gentile readers, particularly Greeks,
                <a href="https://en.wikipedia.org/wiki/Luke_the_Evangelist" title="Wikipedia">Luke</a>
                presents <a href="https://en.wikipedia.org/wiki/Christ_(title)"
                    title="Wikipedia"><strong>Jesus</strong></a>
                as the Savior of all humanity, not merely the Jewish people. This universal scope is evident from the
                beginning of the Gospel, where Jesus's genealogy is traced back to <a
                    href="https://en.wikipedia.org/wiki/Adam" title="Wikipedia">Adam</a> rather than
                stopping at <a href="https://en.wikipedia.org/wiki/Abraham_in_Islam" title="Wikipedia">Abraham</a>
                as <a href="https://en.wikipedia.org/wiki/Matthew_the_Apostle" title="Wikipedia">Matthew</a> does.
                <a href="https://en.wikipedia.org/wiki/Luke_the_Evangelist" title="Wikipedia">Luke</a>'s emphasis on
                Jesus's
                ministry to those on
                the margins of society—<a href="https://en.wikipedia.org/wiki/Woman" title="Wikipedia">women</a>,
                <a href="https://en.wikipedia.org/wiki/Gentile" title="Wikipedia">Gentiles</a>, <a
                    href="https://en.wikipedia.org/wiki/Samaritans" title="Wikipedia">Samaritans</a>,
                <a href="https://en.wikipedia.org/wiki/Publicani" title="Wikipedia">tax collectors</a>, <a
                    href="https://en.wikipedia.org/wiki/Christian_views_on_sin" title="Wikipedia">sinners</a>, and the
                <a href="https://en.wikipedia.org/wiki/Poverty" title="Wikipedia">poor</a>—demonstrates the inclusive
                nature
                of <a href="https://en.wikipedia.org/wiki/Kingdom_of_God_(Christianity)" title="Wikipedia">God's
                    kingdom</a>
                and the transformative
                power of <a href="https://en.wikipedia.org/wiki/Divine_Mercy_(Catholic_devotion)"
                    title="Wikipedia">divine
                    mercy</a>.
            </p>
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

        <div class="story-box" id="Nazareth Synagogue Discourse">
            <h2><span class="emoji">ˏˋ✞ˎˊ</span>The Nazareth Synagogue Discourse <small><a
                        href="../../eng-web_html/LUK04.htm#:~:text=He came to Nazareth%2C where he had been brought up.,through the middle of them%2C went his way.">Luke 4:16-30</a></small>
            </h2>
            <p>Luke uniquely places Jesus's rejection at Nazareth at the beginning of his public ministry
                rather than later as in Matthew and Mark. This strategic placement establishes Jesus's
                mission statement and anticipates the opposition he will face throughout his ministry.
                The discourse in the Nazareth synagogue represents one of Luke's most significant
                contributions to understanding Jesus's self-conception and mission.</p>
            <span class="passage"><a href="../../eng-web_html/LUK04.htm#:~:text=He came to Nazareth%2C where he had been brought up.,and to proclaim the acceptable year of the Lord."><ruby>Luke
                        <rt>
                            4:16-19</rt>
                    </ruby></a></span>
            <p>The Reading from Isaiah describes Jesus entering the synagogue on the
                Sabbath, standing up to read, and being handed the scroll of Isaiah. His selection of
                <a href="../../eng-web_html/ISA61.htm#:~:text=The Lord Yahweh’s Spirit is on me%2C because,of our God%2C to comfort all who mourn%2C">Isaiah 61:1-2</a> is highly
                significant, as this passage describes the mission of the Messiah in
                terms of bringing good news to the poor, freedom to captives, sight to the blind, and
                liberty to the oppressed. This text establishes Jesus's ministry as focused particularly on
                those who are vulnerable, marginalized, and suffering, a theme that will be developed
                throughout Luke's Gospel.
            </p>
            <span class="passage"><a href="../../eng-web_html/LUK04.htm#:~:text=He closed the book%2C gave it back to,mouth; and they said%2C “Isn’t this Joseph’s son?"><ruby>Luke
                        <rt>
                            4:20-22</rt>
                    </ruby></a></span>
            <p>The Proclamation of Fulfillment describes Jesus's dramatic statement
                after reading the Isaiah passage: <strong>"Today this Scripture is fulfilled in your hearing"</strong>
                <a href="../../eng-web_html/LUK04.htm#:~:text=He began to tell them%2C “Today%2C this Scripture has been fulfilled in your hearing.” All testified about him and wondered at the gracious words which proceeded out of his mouth; and they said%2C “Isn’t this Joseph’s son?” He said to them%2C “Doubtless you will tell me this proverb%2C ‘Physician%2C heal yourself!"><ruby>Luke<rt>4:21</rt>
                    </ruby></a>.
                This declaration represents Jesus's explicit claim to be the Messiah described in
                Isaiah's prophecy and establishes his ministry as the fulfillment of Old Testament promises.
                The initial positive response of the crowd, who <b><i>"marveled at the gracious words which proceeded
                        out of
                        His mouth,"</i></b>
                suggests the appealing nature of Jesus's message before controversy erupted.
            </p>
            <span class="passage"><a href="../../eng-web_html/LUK04.htm#:~:text=He said to them%2C “Doubtless you will tell,of them was cleansed%2C except Naaman%2C the Syrian."><ruby>Luke
                        <rt>
                            4:23-27</rt>
                    </ruby></a></span>
            <p>The Challenge to Expectations records Jesus's anticipation of the
                crowd's demand for miraculous signs like those performed in Capernaum. His reference
                to the proverb <b><i>"Physician, heal yourself"</i></b> suggests their expectation that he would
                demonstrate his powers in his hometown. Jesus's response cites two examples from the
                Old Testament—<a href="../../eng-web_html/1KI17.htm#:~:text=So he arose and went to Zarephath; and when he came to the gate of the city%2C behold%2C a widow was there gathering sticks.">Elijah's
                    ministry
                    to the widow of Zarephath</a> and
                <a href="../../eng-web_html/2KI05.htm#:~:text=Now Naaman%2C captain of the army of the king of Syria%2C was a great man with his master%2C and honorable%2C because by him Yahweh had given victory to Syria; he was also a mighty man of valor%2C but he was a leper.">Elisha's healing of Naaman the
                    Syrian</a>—both
                of which involve God's prophets ministering to Gentiles rather than Israelites. These examples establish
                the
                precedent for Jesus's ministry extending
                beyond national boundaries and anticipate the universal scope of the gospel that will be a major theme
                in
                Luke-Acts.
            </p>
            <span class="passage"><a href="../../eng-web_html/LUK04.htm#:~:text=They were all filled with wrath in the,through the middle of them%2C went his way."><ruby>Luke
                        <rt>
                            4:28-30</rt>
                    </ruby></a></span>
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

        <div class="story-box" id="Sermon on the Plain">
            <h2><span class="emoji">🌳</span>The Sermon on the Plain <small><a
                        href="../../eng-web_html/LUK06.htm#:~:text=He came down with them and stood on,and the ruin of that house was great.">Luke 6:17-49</a></small>
            </h2>
            <p>The Sermon on the Plain represents Luke's parallel to Matthew's Sermon on the
                Mount, though with significant differences in content, emphasis, and setting. The name derives
                from Luke's description of Jesus coming down from the mountain and standing <strong>"on a level
                    place"</strong>
                <a href="../../eng-web_html/LUK06.htm#:~:text=He came down with them and stood on a level place%2C with a crowd of his disciples and a great number of the people from all Judea and Jerusalem and the sea coast of Tyre and Sidon%2C who came to hear him and to be healed of their diseases%2C as well as those who were troubled by unclean spirits; and they were being healed."><ruby>Luke<rt>6:17</rt>
                    </ruby></a>
                to deliver this teaching, in contrast to Matthew's setting on a
                mountainside. This geographical distinction carries symbolic significance, suggesting
                Jesus's accessibility and solidarity with the people rather than elevated separation.
            </p>
            <span class="passage"><a href="../../eng-web_html/LUK06.htm#:~:text=He came down with them and stood on,came out of him and healed them all."><ruby>Luke
                        <rt>
                            6:17-19</rt>
                    </ruby></a></span>
            <p>The Setting and Audience establishes the context for the sermon.
                Luke specifically mentions that the audience included not only Jews from Judea and
                Jerusalem but also people from <b><i>"the seacoast of Tyre and Sidon,"</i></b> indicating a Gentile
                presence.
                This mixed audience reflects Luke's emphasis on the universal scope of
                Jesus's ministry and message. The description of people coming to hear Jesus and to be
                healed of their diseases establishes the connection between Jesus's teaching and
                healing ministries, both of which address human needs and demonstrate divine
                compassion.</p>
            <span class="passage"><a href="../../eng-web_html/LUK06.htm#:~:text=He lifted up his eyes to his disciples%2C and said:,did the same thing to the false prophets."><ruby>Luke
                        <rt>
                            6:20-26</rt>
                    </ruby></a></span>
            <p>The Beatitudes and Woes present a more direct and concrete version of the blessings than Matthew's more
                spiritualized account.
                Luke's Jesus pronounces blessing on <b><i>"you who are poor"</i></b> rather than <strong>"the poor in
                    spirit"</strong> and on <b><i>"you who hunger now"</i></b>
                rather than <strong>"those who hunger and thirst for righteousness."</strong> <a
                    href="../../eng-web_html/MAT05.htm#:~:text=Blessed are the poor in spirit%2C for theirs,sake%2C for theirs is the Kingdom of Heaven."><small><ruby>Matthew<rt>5:3-10
                            </rt></ruby></small></a>
                This emphasis on physical conditions rather than spiritual attitudes reflects Luke's concern with actual
                social and economic inequities and Jesus's solidarity with the materially deprived.
                The addition of corresponding <b><i>"woes"</i></b> to the wealthy, the full, and those who laugh now
                creates a pattern of reversal that characterizes Luke's presentation of the kingdom of
                God, where present circumstances will be dramatically inverted in the future.</p>
            <span class="passage"><a href="../../eng-web_html/LUK06.htm#:~:text=But I tell you who hear:,“Therefore be merciful%2C even as your Father is also merciful."><ruby>Luke
                        <rt>
                            6:27-36</rt>
                    </ruby></a></span>
            <p>Love for Enemies presents Jesus's radical ethic of love that extends
                even to those who hate, curse, and mistreat his followers. The command to <b><i>"do good to those who
                        hate
                        you"</i></b>
                establishes a proactive response to hostility that goes beyond mere
                non-retaliation. The principle of <i>lending without expecting repayment</i> challenges
                conventional economic practices and establishes generosity as a fundamental
                characteristic of kingdom ethics. The section culminates in the call to <strong>"be merciful, just
                    as your Father also is merciful"</strong> <a
                    href="../../eng-web_html/LUK06.htm#:~:text=“Therefore be merciful%2C even as your Father is also merciful."><ruby>Luke<rt>6:36</rt>
                    </ruby></a>,
                which parallels Matthew's <strong>"be perfect, just as your Father in heaven is perfect"</strong> <a
                    href="../../eng-web_html/MAT05.htm#:~:text=Therefore you shall be perfect%2C just as your Father in heaven is perfect."><small><ruby>Matthew<rt>5:48
                            </rt>
                        </ruby></small></a>
                but with a significant shift in emphasis from <i>perfection</i> to <i>mercy</i>. This difference
                highlights
                Luke's focus on compassion as the defining attribute of God and the primary virtue for Jesus's
                followers.
            </p>
            <span class="passage"><a href="../../eng-web_html/LUK06.htm#:~:text=Don’t judge%2C and you won’t be judged.,of chaff that is in your brother’s eye."><ruby>Luke
                        <rt>
                            6:37-42</rt>
                    </ruby></a></span>
            <p>Judging Others addresses interpersonal relationships with an emphasis
                on forgiveness, generosity, and self-examination. The warning against judging others
                and the promise that <b><i>"with the same measure that you use, it will be measured back to you"</i></b>
                establishes reciprocity as a principle of divine justice. The metaphor of the <i>speck and the plank</i>
                emphasizes the importance of addressing one's own faults before attempting to correct others,
                establishing
                humility and self-awareness as prerequisites for spiritual leadership.</p>
            <span class="passage"><a href="../../eng-web_html/LUK06.htm#:~:text=For there is no good tree that produces,the abundance of the heart%2C his mouth speaks."><ruby>Luke
                        <rt>
                            6:43-45</rt>
                    </ruby></a></span>
            <p>A Tree and Its Fruit uses agricultural imagery to illustrate the connection
                between character and behavior. The principle that <b><i>"a good tree does not bear bad fruit, nor does
                        a
                        bad tree bear good fruit"</i></b>
                establishes the organic relationship between inner nature and outward actions. The statement that
                <b><i>"out
                        of the abundance of the heart his mouth speaks"</i></b>
                establishes the heart as the source of words and actions and emphasizes the importance of inner
                transformation rather than merely external compliance.
            </p>
            <span class="passage"><a href="../../eng-web_html/LUK06.htm#:~:text=Why do you call me%2C ‘Lord%2C Lord%2C’ and,and the ruin of that house was great."><ruby>Luke
                        <rt>
                            6:46-49</rt>
                    </ruby></a></span>
            <div class="carousel-group img_rtl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/wiseAndFoolishBuilders_thumb.webp"
                                alt="Wise and Foolish Builders" height="150" width="auto">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
                </div>
            </div>
            <p>
                <!-- Carousel img -->
                The Two Foundations concludes the sermon with the parable of the
                <a href="./parables#:~:text=The%20Wise%20and%20Foolish%20Builders">wise and foolish builders</a>,
                emphasizing the importance of not merely hearing Jesus's
                words but putting them into practice. The contrast between the house built on the rock,
                which withstands the flood, and the house built on the earth, which collapses,
                establishes the practical difference between superficial and genuine discipleship. The
                question <b><i>"Why do you call Me 'Lord, Lord,' and not do the things which I say?"</i></b>
                challenges nominal faith and establishes obedience as the authentic expression of commitment to Christ.
            </p>
            <p><span style="font-size: 1.2em;">The Sermon on the Plain</span> establishes the ethical foundation for Luke's presentation
                of discipleship, with particular emphasis on mercy, generosity, and practical obedience.
                The focus on concrete social and economic conditions rather than merely spiritual
                attitudes reflects Luke's concern with Jesus's ministry to the materially poor and socially
                marginalized. The emphasis on mercy as the defining attribute of God and the primary
                virtue for believers establishes compassion as the heart of Christian ethics and community life.</p>
        </div>

        <div class="highlight-box" id="TheGoodSamaritan">
            <h2><span class="emoji">🤝</span>The Good Samaritan
                <small><a href="../../eng-web_html/LUK10.htm#:~:text=Behold%2C a certain lawyer stood up and tested,Then Jesus said to him%2C “Go and do likewise.">Luke
                        10:25-37</a></small>
            </h2>
            <p>This is probably one of the most famous stories Jesus ever told. A man asked Jesus,
                <strong>"Who is my neighbor?"</strong>
                <small><a href="../../eng-web_html/LUK10.htm#:~:text=But he%2C desiring to justify himself%2C asked Jesus%2C “Who is my neighbor?” Jesus answered%2C “A certain man was going down from Jerusalem to Jericho%2C and he fell among robbers%2C who both stripped him and beat him%2C and departed%2C leaving him half dead."><ruby>Luke<rt>10:29
                            </rt>
                        </ruby></a></small>
                Instead of giving a simple answer, Jesus told this story:
            </p>
            <div class="carousel-group img_fl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/goodSamaritan_thumb.webp" alt="Good Samaritan" width="200"
                                height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="1"></div>
                </div>
            </div>
            <p class="rtl">
                <!-- Carousel img -->
                A man was walking from Jerusalem to Jericho when robbers attacked him. They beat him up, took all his
                money
                and clothes, and left him half dead on the side of the road.
                <i>First</i>, a priest (a religious leader) came walking down the road. When he saw the hurt man, he
                crossed
                to the other side of the road and kept walking.
                <i>Then</i> a Levite (another religious person) came by. He also saw the hurt man but walked past on the
                other side.
                <i>Finally</i>, a Samaritan man came along, but when this Samaritan man saw the hurt person, he felt
                sorry
                for him.
                The Samaritan man stopped and took care of the hurt man. He cleaned his wounds, put him on his own
                donkey,
                took him to an inn, and paid for his care.
            </p>
            <p><b>Now, this is important to know: Jewish people and Samaritan people didn't like each other at all. They
                    were like enemies.</b>
                <small><a href="https://www.franciscanmedia.org/ask-a-franciscan/the-rift-between-jews-and-samaritans/"
                        title="The Rift between Jews and Samaritans">Link</a></small>
            </p>
            <p>This parable challenges conventional definitions of <b><i>"neighbor"</i></b> based on ethnic,
                religious, or social boundaries. By making a Samaritan the hero of the story, Jesus
                subverts his audience's prejudices and establishes compassionate action rather than
                social identity as the criterion for fulfilling the command to <strong>"love your neighbor as
                    yourself."</strong>
                <a href="../../eng-web_html/LUK10.htm#:~:text=He answered%2C “You shall love the Lord your God with all your heart%2C with all your soul%2C with all your strength%2C and with all your mind; and your neighbor as yourself.” He said to him%2C “You have answered correctly."><ruby>Luke<rt>10:27</rt>
                    </ruby></a>
                The question <strong>"Which of these three do you think was neighbor to him who fell among the
                    thieves?"</strong>
                <a href="../../eng-web_html/LUK10.htm#:~:text=Now which of these three do you think seemed to be a neighbor to him who fell among the robbers?” He said%2C “He who showed mercy on him.” Then Jesus said to him%2C “Go and do likewise.” As they went on their way%2C he entered into a certain village%2C and a certain woman named Martha received him into her house."><ruby>Luke<rt>10:36</rt>
                    </ruby></a>
                shifts the focus from defining who deserves our love to becoming a person who shows mercy regardless of
                the
                recipient's identity.
            </p>
            <p>The parable establishes several key principles of Luke's ethical vision: the priority of
                compassion over ritual purity (explaining why the priest and Levite might have avoided
                the injured man), the irrelevance of social boundaries to moral obligation, and the
                definition of neighborliness through action rather than proximity or affinity. The command <strong>"Go
                    and
                    do likewise"</strong>
                <a href="../../eng-web_html/LUK10.htm#:~:text=He said%2C “He who showed mercy on him.” Then Jesus said to him%2C “Go and do likewise.” As they went on their way%2C he entered into a certain village%2C and a certain woman named Martha received him into her house."><ruby>Luke<rt>10:37</rt>
                    </ruby></a>
                establishes this radical compassion as normative for Jesus's followers rather than merely admirable or
                exceptional.
            </p>
            <h3>What This Story Teaches Us</h3>
            <p>Our <b><i>"neighbor"</i></b> isn't just the people who live next door or the people
                who are like us. Our neighbor is anyone who needs help, even if they're different from us or we
                don't know them very well. The story also teaches us that it's not enough to just know about God or go
                to
                church. What
                really matters is showing God's love by helping people who are in trouble.</p>
        </div>

        <div class="highlight-box" id="TheProdigalSon">
            <h2><span class="emoji">🏠</span>The Prodigal Son
                <small><a href="../../eng-web_html/LUK15.htm#:~:text=He said%2C “A certain man had two sons.,He was lost%2C and is found.">Luke
                        15:11-32</a></small>
            </h2>
            <p>The context for story starts in <a
                    href="../../eng-web_html/LUK14.htm#:~:text=When he went into the house of one,He who has ears to hear%2C let him hear.">chapter 14.</a>
                Jesus first shares two shorter parables about a <a href="./parables#:~:text=The%20Lost%20Sheep">lost
                    sheep</a> and a <a href="./parables#:~:text=The%20Lost%20Coin">lost coin</a> to emphasize God's joy
                over
                something lost being found and restored.
                With the religious leaders grumbling about his association with social outcasts, Jesus then began his
                longest story about a father with two sons to justify his actions and highlight the stark contrast
                between
                God's boundless mercy and the Pharisees' self-righteousness.
                He began with these simple words to invite everyone present into the narrative.
                This story is actually about two sons, but it's really about an amazing father who represents God.</p>
            <div class="carousel-group img_fl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/prodigalSon_thumb.webp" alt="Prodigal Son" width="200"
                                height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="2"></div>
                </div>
            </div>
            <p class="rtl">
                <!-- Carousel img -->
                A man had two sons. The younger son got tired of living at home and wanted to go have fun in the
                big city. He asked his father for his inheritance (the money he would get when his father died).
                This was really rude - it was like saying, "I wish you were dead so I could have your money!"
                But the father gave him the money anyway. The young man left home and went to a far country where
                he spent all his money on parties and foolish things. When his money was gone, his new <i>"friends"</i>
                disappeared, and he had nothing left. Finally, he came to his senses and decided to go home. But while
                he
                was still far away, his
                father saw him coming! The father ran to meet his son, hugged him, and kissed him. Then he threw
                a big party to celebrate his son's return!
            </p>
            <p><b>Jesus told this story as a direct response to the Pharisees and scribes, who were openly criticizing
                    him
                    for welcoming and eating with tax collectors and "sinners".</b></p>
            <p>This parable illustrates God's extravagant grace toward repentant sinners and challenges the resentment
                of
                the self-righteous toward such grace.
                The father's statement <strong>"this my son was dead and is alive again; he was lost and is
                    found"</strong>
                <a href="../../eng-web_html/LUK15.htm#:~:text=for this%2C my son%2C was dead and is alive again."><ruby>Luke<rt>15:24</rt>
                    </ruby></a>
                establishes restoration rather than retribution as God's response to repentance. The father's appeal
                to the older son—<strong>"all that I have is yours"</strong>
                <a href="../../eng-web_html/LUK15.htm#:~:text=“He said to him%2C ‘Son%2C you are always with me%2C and all that is mine is yours."><ruby>Luke<rt>15:31</rt>
                    </ruby></a>—addresses the unnecessary
                resentment of those who perceive grace toward others as somehow diminishing their own standing.
            </p>
            <p>The parable contributes to Luke's emphasis on God's compassion for the lost, the joy of
                heaven over repentance, and the inclusion of the morally compromised in the kingdom of God.
                The open-ended conclusion, which does not reveal whether the older son joins the celebration,
                challenges the audience to examine their own attitudes toward God's grace extended to those they
                consider
                undeserving.</p>
            <h3>The Lessons to be Learned</h3>
            <ul style="margin-left: 20px;">
                <li><strong>God's Amazing Love:</strong> The father in the story represents God. No matter what
                    we've done wrong, God is always ready to forgive us and welcome us back when we're truly sorry.</li>
                <li><strong>It's Never Too Late:</strong> Even when we've made really bad choices, we can always come
                    back
                    to God.</li>
                <li><strong>God Celebrates When We Come Home:</strong> Just like the father threw a party when his son
                    returned,
                    God and all the angels in heaven celebrate when someone decides to follow Jesus.</li>
            </ul>
        </div>

        <div class="highlight-box" id="TheRichManAndLazarus">
            <h2><span class="emoji">💰 𓁉</span>The Rich Man and Lazarus
                <small><a href="../../eng-web_html/LUK16.htm#:~:text=Now there was a certain rich man%2C and,persuaded if one rises from the dead.">Luke
                        16:19-31</a></small>
            </h2>
            <p>This famous parable is told by Jesus immediately after being mocked by the Pharisees, who are
                specifically
                described as <b><i>"lovers of money."</i></b>
                He had just finished teaching that you cannot serve both God and wealth.
                The story of the Rich Man and Lazarus, therefore, is not a random tale about the afterlife;
                it's a direct and sharp response to the Pharisees' worldview.
                It powerfully confronts the common belief that earthly riches are a sign of God's blessing,
                while illustrating the eternal consequences of a life spent in selfish luxury, blind to the suffering of
                the
                poor.</p>
            <div class="carousel-group img_fl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/richManAndLazarus_thumb.webp" alt="Rich Man and Lazarus"
                                width="200" height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="3"></div>
                </div>
            </div>
            <p class="rtl">
                <!-- Carousel img -->
                There was a very rich man who lived in a huge house, wore the best clothes, and ate amazing food every
                single day.
                Lying just outside his gate was a poor, sick beggar named Lazarus. Lazarus was so hungry he would have
                been
                happy just to eat the scraps that fell from the rich man's table.
                When they both died, their situations completely flipped. Angels carried Lazarus to a place of peace and
                comfort. The rich man, however, ended up in a terrible place of suffering.
                The rich man looked up and saw Lazarus and <a
                    href="../../eng-web_html/GEN17.htm#:~:text=When Abram was ninety-nine years old%2C Yahweh appeared to Abram and said to him%2C “I am God Almighty.">Abraham</a> far away in the
                good
                place.
                He shouted, <i>"Please, send Lazarus to dip the tip of his finger in water and cool my tongue, because I
                    am
                    in agony in this fire!"</i>
                But he was told that was impossible. In life, the rich man had all his good things while Lazarus had
                nothing
                but bad things.
                Now, everything was reversed, and there was a giant gap between them that no one could cross.
                So, the rich man begged, <i>"Then please send Lazarus back to the living to warn my five brothers, so
                    they
                    don't end up in this awful place!"</i>
                The answer was that his brothers already have Moses and the prophets, the word of God in the scriptures
                to
                guide them.
                The rich man argued that they would surely listen if someone came back from the dead.
                But he was told, <b><i>"If they do not listen to Moses and the prophets— the scriptures, they will not
                        be
                        convinced even if someone rises from the dead."</i></b>
            </p>
            <p>This parable addresses several themes central to Luke's Gospel: the reversal of fortunes
                in the kingdom of God, the responsibility of the wealthy toward the poor, and the
                sufficiency of existing revelation for moral guidance. The dramatic reversal of the two
                men's situations after death illustrates Jesus's teaching that <strong>"those who are first will be
                    last, and those who are last will be first"</strong> <a
                    href="../../eng-web_html/LUK13.htm#:~:text=Behold%2C there are some who are last who will be first%2C and there are some who are first who will be last.” On that same day%2C some Pharisees came%2C saying to him%2C “Get out of here and go away%2C for Herod wants to kill you.” He said to them%2C “Go and tell that fox%2C ‘Behold%2C I cast out demons and perform cures today and tomorrow%2C and the third day I complete my mission."><ruby>Luke<rt>13:30</rt>
                    </ruby></a>. The rich man's failure is not
                explicitly his wealth but his indifference to the suffering at his gate, illustrating the moral
                peril of affluence without compassion.</p>
            <p>The parable's conclusion about the sufficiency of <b><i>"Moses and the prophets"</i></b> establishes
                that additional miraculous confirmation is not necessary for those who resist the moral
                demands of existing revelation. The statement that even someone rising from the dead
                would not convince those who reject the Scriptures proves ironically prophetic of the
                response to Jesus's own resurrection by many religious leaders.</p>
            <p>This parable contributes to Luke's emphasis on economic justice, the dangers of wealth,
                and the <a href="https://en.wikipedia.org/wiki/Eschatology" title="Wikipedia">eschatological</a>
                reversal of
                present inequities.
                The naming of the poor man (Lazarus) while leaving the rich man unnamed reverses conventional narrative
                practice
                and emphasizes the dignity and value of those who are socially invisible in the present world order.</p>
            <h3>Moral of the Story</h3>
            <ul style="margin-left: 20px;">
                <li><strong>Care for the poor.</strong> The story is a powerful warning that ignoring the suffering of
                    those
                    in need has severe eternal consequences. Compassion matters deeply.</li>
                <li><strong>Earthly status is temporary.</strong> Your wealth, comfort, and social standing on Earth are
                    fleeting and will be irrelevant in the afterlife. The rich man's riches became worthless after
                    death.
                </li>
                <li><strong>Your actions have eternal consequences.</strong> The choices you make in this life directly
                    impact your fate in the next. There is a great reversal where justice is ultimately served.</li>
                <li><strong>Listen to the guidance you already have.</strong> The final part of the story emphasizes
                    that
                    people have enough wisdom in scripture to know how to live righteously. Waiting for a spectacular
                    miracle isn't an excuse for a hard heart.</li>
            </ul>
        </div>

        <div class="highlight-box" id="ThePhariseeAndTheTaxCollector">
            <h2><span class="emoji">🧾💸</span>The Pharisee and the Tax Collector
                <small><a href="../../eng-web_html/LUK18.htm#:~:text=He also spoke this parable to certain people,but he who humbles himself will be exalted.">Luke
                        18:9-14</a></small>
            </h2>
            <span class="highlight-box passage">Note: the 12's travels is underway in <a
                    href="../../eng-web_html/LUK17.htm#:~:text=As he was on his way to Jerusalem%2C he was passing along the borders of Samaria and Galilee."
                    title="Luke 17:11"><small><ruby>Luke<rt>17:11</rt></ruby></small></a>.</span>
            <p>This parable is told while Jesus is on his final, determined journey toward Jerusalem, a lengthy section
                of
                Luke's Gospel that's filled with critical teachings.
                The stories and lessons he shares along this path often focus on the nature of God's kingdom,
                frequently turning conventional wisdom upside down.</p>
            <p>This parable, addressed to <b><i>"some who trusted in themselves that they were righteous, and despised
                        others"</i></b>.</p>
            <div class="carousel-group img_fl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/phariseeAndTaxCollector_thumb.webp"
                                alt="Pharisee and Tax Collector" width="200" height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="4"></div>
                </div>
            </div>
            <p class="rlt">
                <!-- Carousel img -->
                The parable describes two men going to the temple to pray. The Pharisee stands prominently and prays a
                self-congratulatory prayer thanking God that
                he is not like other men, particularly the tax collector, and listing his religious
                accomplishments. The tax collector, standing <b><i>"afar off,"</i></b> beats his breast and prays
                simply, <b><i>"God, be merciful to me a sinner!"</i></b>. Jesus concludes that the tax
                collector rather than the Pharisee went home justified, stating that <b><i>"everyone who exalts
                        himself will be humbled, and he who humbles himself will be exalted"</i></b>
            </p>
            <p>This parable illustrates the contrast between self-righteousness and genuine humility
                before God. The Pharisee's prayer, though addressed to God, is actually about himself
                and his moral superiority to others. The tax collector's prayer acknowledges his
                sinfulness and need for divine mercy.</p>
            <h3> The surprising conclusion</h3>
            <p>The socially despised tax collector rather than the respected religious leader is justified before God
                challenges conventional assumptions about spiritual status and establishes humility
                rather than moral achievement as the prerequisite for divine acceptance.
                The parable contributes to Luke's emphasis on the inclusion of social outcasts in God's
                kingdom, the danger of religious pride, and the centrality of mercy in divine-human
                relationships. The principle that <strong>"everyone who exalts himself will be humbled, and he
                    who humbles himself will be exalted"</strong> <a
                    href="../../eng-web_html/LUK18.htm#:~:text=I tell you%2C this man went down to his house justified rather than the other; for everyone who exalts himself will be humbled%2C but he who humbles himself will be exalted.” They were also bringing their babies to him%2C that he might touch them."><ruby>Luke<rt>18:14</rt>
                    </ruby></a>
                establishes a pattern of reversal that characterizes
                God's kingdom as presented throughout Luke's Gospel.</p>
        </div>

        <div class="highlight-box" id="TheTwoDebtors">
            <h2><span class="emoji">💸 💳</span>The Two Debtors
                <small><a href="../../eng-web_html/LUK07.htm#:~:text=A certain lender had two debtors.,He said to him%2C “You have judged correctly.">Luke
                        7:41-43</a></small>
            </h2>
            <span class="highlight-box passage">A bit of Context: <a
                    href="../../eng-web_html/LUK07.htm#:~:text=One of the Pharisees invited him to eat with him.,Go in peace."
                    title="Luke 7:36"><small><ruby>Luke<rt>7:36-50</rt></ruby></small></a>.</span>
            <p>Jesus is having dinner at the house of Simon, a religious leader called a Pharisee.
                While they're eating, a woman from town who was known for making bad choices comes into the house.
                She wasn't invited, but she had heard Jesus was there, she was standing behind Jesus.
                She kneels and starts weeping, her tears fall on His feet, and she uses her long hair to dry them.
                Then, she kisses His feet and pours expensive perfume on them.
                Simon the host watches and is shocked. He thinks to himself, "If Jesus were really a prophet, he would
                know
                what a bad person this woman is.
                He wouldn't let her touch him!".
                But Jesus knows what Simon is thinking, and He decides to tell him a story.</p>
            <div class="carousel-group img_fl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/twoDebtors_thumb.webp" alt="Two Debtors" width="200"
                                height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="5"></div>
                </div>
            </div>
            <p class="rlt">
                <!-- Carousel img -->
                A man who loaned money had two people who owed him. One person owed him a very big amount—about five
                hundred
                silver coins. The other person owed him much less—only fifty silver coins. Neither of them could pay him
                back. Instead of demanding the money, the lender forgave both of their debts.
                Jesus asks, "Now, think about it: which of those two people do you think would be more thankful and love
                him
                more?"
            </p>
            <p>The parable illustrates the principle that those who are forgiven
                much will love much, explaining the extravagant gratitude of the sinful woman who
                anoints Jesus's feet. This parable establishes the connection between recognition of
                one's moral debt, experience of forgiveness, and depth of love for the Savior.</p>
            <h3>Take Away Message</h3>
            <ul style="margin-left: 20px;">
                <li><strong>Forgiveness is powerful.</strong> The lender chose to forgive both people even though they
                    couldn't pay.</li>
                <li><strong>Gratitude grows with forgiveness.</strong> The person forgiven more has a bigger reason to
                    be
                    thankful.</li>
                <li><strong>Think about God’s forgiveness.</strong> When we realize how much we've been forgiven, we
                    tend to
                    love and appreciate more.</li>
                <span style="font-size: 1.2em;">
                    <li style="text-align: center;list-style-type: none;margin-top:1%;"><strong>Main idea:</strong> The
                        more
                        we understand how much we've been forgiven, the more our love and gratitude grow.</li>
                </span>
            </ul>
        </div>

        <div class="highlight-box" id="TheFriendAtMidnight">
            <h2><span class="emoji">🫂 🌒</span>The Friend at Midnight
                <small><a href="../../eng-web_html/LUK11.htm#:~:text=He said to them%2C “Which of you%2C if,and give him as many as he needs.">Luke 11:5-8</a></small>
            </h2>
            <span class="highlight-box passage">Context: <a
                    href="../../eng-web_html/LUK10.htm#:~:text=Now after these things%2C the Lord also appointed seventy others%2C and sent them two by two ahead of him into every city and place where he was about to come."
                    title="Luke 10:1"><small><ruby>Luke<rt>10</rt></ruby></small></a>.</span>
            <p>This is one of the best parables in Luke's gospel, because it followed <a
                    href="../../eng-web_html/LUK11.htm#:~:text=He said to them%2C “When you pray%2C say%2C ‘Our Father in heaven%2C may your name be kept holy." title="The Lord's Prayer">The
                    Lord's Prayer</a>
                that Jesus taught His disciples. At the start of the reading, Jesus sends out seventy-two of His
                followers
                to share the good news.
                They return full of joy, amazed at the power of His name.
                Jesus reminds them that the greatest gift is knowing they belong to God.
                Soon after, a teacher of the law asks Jesus who his neighbor is.
                Jesus answers with the Parable of the Good Samaritan, showing that true love is helping anyone in
                need—even
                someone we might not expect.
                Then Jesus visits the home of two sisters, Martha and Mary.
                Martha is busy serving, but Mary sits at Jesus’ feet, listening to His teaching.
                Jesus gently reminds Martha that spending time with Him is the most important thing.
                After this, Jesus teaches His disciples how to pray.
                He gives them the Lord’s Prayer, followed by the Parable of the Friend at Midnight.</p>
            <div class="carousel-group img_fl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/friendAtMidnight_thumb.webp" alt="Friend at Midnight"
                                width="200" height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="6"></div>
                </div>
            </div>
            <!-- Carousel img -->
            <p>
                In the Parable of the Friend at Midnight, Jesus tells about a man who suddenly has a guest arrive late
                at
                night.
                Wanting to be a good host, he runs to his neighbor’s house and asks for bread.
                The neighbor at first refuses, saying the door is shut and his family is asleep.
                But because the man keeps on knocking and asking, the neighbor finally gets up and gives him what he
                needs.
            </p>
            <p>Jesus uses this picture to teach us about prayer.
                He says, <strong>“Ask, and it will be given to you; seek, and you will find; knock, and the door will be
                    opened.”</strong>
                <a href="../../eng-web_html/LUK11.htm#:~:text=I tell you%2C keep asking%2C and it will,To him who knocks it will be opened."><ruby>Luke<rt>11:9-10</rt>
                    </ruby></a>
                God wants us to pray with persistence, not giving up, because He is always listening.
                Unlike the sleepy neighbor who helps only because he feels pressured, God is a loving Father who gladly
                gives to His children.
            </p>
            <p>Jesus then reminds us that even earthly parents, though imperfect, give good gifts to their children.
                <b><i>If a child asks for bread, a father won’t give him a stone. If he asks for a fish, he won’t give
                        him a
                        snake.
                        If human parents know how to care for their children, how much more does our perfect Father in
                        heaven love to give what is best to us!</i></b>
                Jesus says that <strong>God especially loves to give the greatest gift of all—His Holy Spirit—to those
                    who
                    ask Him.</strong>
                <a href="../../eng-web_html/LUK11.htm#:~:text=Which of you fathers%2C if your son asks,the Holy Spirit to those who ask him?"><ruby>Luke<rt>11:11-13</rt>
                    </ruby></a>
            </p>
            <h3>What the Parable Shows</h3>
            <ul style="margin-left: 20px;">
                <li><strong>Persistence in prayer</strong>: by comparing God’s responsiveness to that of a reluctant
                    friend
                    who eventually responds to repeated requests.</li>
                <li><strong>God is generous, loving, and faithful</strong>: He doesn’t turn away from our prayers.</li>
                <li><strong>God delights when we come to Him again and again</strong>, trusting that He is able and
                    willing
                    to provide.</li>
                <span style="font-size: 1.2em;">
                    <li style="text-align: center;list-style-type: none;margin-top:1%;">This parable reflects His
                        emphasis
                        on prayer as a central spiritual practice.</li>
                </span>
            </ul>
        </div>

        <div class="highlight-box" id="TheRichFool">
            <h2><span class="emoji">🤑 🛠️</span>The Rich Fool
                <small><a href="../../eng-web_html/LUK12.htm#:~:text=He spoke a parable to them%2C saying%2C “The,for himself%2C and is not rich toward God.">Luke
                        12:16-21</a></small>
            </h2>
            <span class="passage highlight-box">Crowd from: <a
                    href="../../eng-web_html/LUK11.htm#:~:text=When he finished praying in a certain place%2C one of his disciples said to him%2C “Lord%2C teach us to pray%2C just as John also taught his disciples.” He said to them%2C “When you pray%2C say%2C ‘Our Father in heaven%2C may your name be kept holy."
                    title="Luke 11:1"><small><ruby>Luke<rt>11</rt></ruby></small></a>.</span>
            <p>In <a href="../../eng-web_html/LUK12.htm#:~:text=Meanwhile%2C when a multitude of many thousands had,you have paid the very last penny.">Luke 12</a>,
                Jesus warns the crowd against hypocrisy.
                He challenges the Pharisees and teachers of the law for caring more about outward appearances than about
                truly loving God.
                He also tells His followers not to fear people, but to fear God, who knows all things and cares deeply
                for
                them—even counting the hairs on their heads.
                As the crowds grow larger, someone calls out to Jesus, asking Him to tell his brother to divide an
                inheritance.
                But Jesus explains that He did not come to be a judge over money matters.
                Instead, He warns the people <strong>“Beware! Keep yourselves from <a
                        href="https://biblehub.com/topical/c/covetousness.htm" title="BibleHub">covetousness</a>, for a
                    man’s life doesn’t consist of the abundance of the things which he possesses.”</strong>
                <a href="../../eng-web_html/LUK12.htm#:~:text=He said to them%2C “Beware!"><ruby>Luke<rt>12:15</rt>
                    </ruby></a>
                It is in this moment that Jesus tells the Parable of the Rich Fool.
            </p>
            <div class="carousel-group img_fl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/richFool_thumb.webp" alt="Rich Fool" width="200"
                                height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="7"></div>
                </div>
            </div>
            <!-- Carousel img -->
            <p>Jesus told a story about a wealthy farmer whose land produced an amazing harvest. The crops were so great
                that his barns were not big enough to hold it all. Instead of sharing or thinking of others, the man
                began to think only of himself.
                He said to himself, <i>“What should I do? I don’t have anywhere to store all my grain and goods.”</i>
                Then he came up with a plan: <i>“I will tear down my barns and build bigger ones. Then I will have
                    plenty of room
                    to store all my grain. After that, I can relax! I will eat, drink, and enjoy life for many
                    years.”</i>
                But God spoke to him that very night and said, <span style="font-size: 1.2em;"><b><i>“You fool! This very night your life will be
                            demanded
                            from you. Then who will get all the things you have prepared for yourself?”</i></b></span>
                Jesus ended the parable by saying that this is what happens to anyone who piles up treasures for
                themselves but is not rich toward God.</p>
            <p>The Parable reminds us that true life is not found in storing up more and more things.
                The rich man thought he was secure because of his barns and harvest, but he forgot about God.
                His sudden death showed that earthly wealth cannot protect us or give us lasting joy.
                Jesus teaches that what really matters is being <b><i>“rich toward God”</i></b>—trusting Him, loving
                others, and living with eternity in mind.</p>
            <h3>The real Lesson <a href="../../eng-web_html/LUK12.htm#:~:text=He said to his disciples%2C “Therefore I tell you%2C don’t be anxious for your life%2C what you will eat%2C nor yet for your body%2C what you will wear."><ruby>Luke
                        <rt>12:22</rt>
                    </ruby></a></h3>
            <p>Jesus reminds His followers not to be worried about food, clothes, or the things of this life.</p>
            <ul style="margin-left: 20px;">
                <li>He points to the birds and the flowers.</li>
                <li>Ravens don’t plant or store grain, yet God feeds them.</li>
                <li>Lilies don’t work or sew clothes, yet they are dressed more beautifully than King Solomon in all his
                    glory.</li>
                <li><span style="font-size: 1.2em;"><b>If God takes such good care of birds and flowers, how much more will He care for His
                            children?</b></span></li>
            </ul>
            <p style="text-align: center;margin-top:1%;">Jesus teaches us not to chase after possessions the way the
                world does. Our heavenly Father already knows
                what we need. Instead, we should seek God’s Kingdom first, trusting that He will provide. Jesus even
                calls
                His followers <b><i>“little flock”</i></b> and promises that it makes the Father glad to give them the
                Kingdom.
                He encourages generosity—sharing with the poor and storing up treasures in heaven that can never be lost
                or
                stolen.</p>
            <p>Finally, Jesus warns His disciples to stay alert and ready, like servants waiting for their master
                to return. <strong>Therefore be ready also, for the Son of Man is coming in an hour that you don’t
                    expect him.</strong>
                <a href="../../eng-web_html/LUK12.htm#:~:text=Therefore be ready also%2C for the Son of Man is coming in an hour that you don’t expect him.” Peter said to him%2C “Lord%2C are you telling this parable to us%2C or to everybody?” The Lord said%2C “Who then is the faithful and wise steward%2C whom his lord will set over his household%2C to give them their portion of food at the right times?"><ruby>Luke<rt>12:40</rt>
                    </ruby></a>
            </p>
        </div>

        <div class="highlight-box" id="TheBarrenFigTree">
            <h2><span class="emoji"><span style="font-size: 1.2em;">𖣂</span></span>The Barren Fig Tree
                <small><a href="../../eng-web_html/LUK13.htm#:~:text=He spoke this parable.,after that%2C you can cut it down.">Luke 13:6-9</a></small>
            </h2>
            <span class="passage highlight-box">Same Crowd: <a
                    href="../../eng-web_html/LUK12.htm#:~:text=“Let your waist be dressed and your lamps burning."
                    title="Luke 12:35"><small><ruby>Luke<rt>12:35</rt></ruby></small></a>.</span>
            <p>After teaching about greed and worry, Jesus turns to His disciples and urges them to stay ready for His
                return. He tells them to keep their lamps burning like <a
                    href="parables#:~:text=The%20Watchful%20servants">servants waiting</a> for their master to come back
                from a wedding. <strong>Therefore be ready also, for the Son of Man is coming in an hour that you don’t
                    expect him.</strong> <a
                    href="../../eng-web_html/LUK12.htm#:~:text=“Let your waist be dressed and your lamps burning."><ruby>Luke<rt>12:35</rt>
                    </ruby></a></p>
            <p><a href="apostles#:~:text=Simon%20Peter%20and%20Andrew%20(Sons%20of%20Jonah)">Peter</a>
                then asks if this teaching is only for the disciples or for everyone. Jesus answers by describing <a
                    href="parables#:~:text=The%20Faithful%20and%20wise%20servant"> the faithful and wise servant.</a>
                He makes it clear that those who have been given much responsibility will be held accountable for how
                they use it.</p>
            <p>Then Jesus tells the crowds that His coming will not bring peace in the simple sense, but division—even
                within families. Following Him will require serious commitment. He warns them:
                <strong>You know how to interpret the appearance of the earth and the sky, but how is it that you don’t
                    interpret this time?</strong>
                <a href="../../eng-web_html/LUK12.htm#:~:text=You hypocrites!"><ruby>Luke<rt>12:56</rt>
                    </ruby></a>
                He urges them to settle matters quickly, before it is too late.
            </p>
            <p>At that time, some in the crowd tell Jesus about a tragedy where Pilate killed Galileans while they were
                offering sacrifices. Jesus also mentions a <a
                    href="https://en.wikipedia.org/wiki/Tower_of_Siloam#Biblical_reference" title="Wikipedia">tower in
                    Siloam</a> that fell and killed eighteen people. He explains
                that those who died were not worse sinners than anyone else. Instead, these events serve as a warning:
                <strong>unless you repent, you will all perish in the same way.</strong>
                <a href="../../eng-web_html/LUK13.htm#:~:text=I tell you%2C no%2C but%2C unless you repent%2C you will all perish in the same way.” He spoke this parable."><ruby>Luke<rt>13:5</rt>
                    </ruby></a>
            </p>
            <p style="text-align: center;"><i>It is in this context of urgency, repentance, and readiness for God’s
                    judgment that Jesus tells the Parable
                    of the Fig Tree.</i></p>
            <div class="carousel-group img_fl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/barrenFigTree_thumb.webp" alt="Barren Fig Tree" width="200"
                                height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="8"></div>
                </div>
            </div>
            <!-- Carousel img -->
            <p>There was a man who had a fig tree planted in his vineyard. For three years he came
                looking for fruit on the tree, but each time he found nothing. Finally, the man said to the gardener,
                <strong>“For three years I have been waiting, but this tree has not produced a single fig. Cut it down!
                    It’s only taking up space and wasting the soil.”</strong>
                But the gardener pleaded with him and said, <strong>“Please, give it one more year. I will dig around
                    the roots and add fertilizer to help it grow. If it produces fruit next year, that will be
                    wonderful. But if it still does not bear fruit, then you can cut it down.”</strong>
            </p>
            <p>Right after the parable, Jesus acts out the heart of His message. On the Sabbath, He heals a woman who
                had been bent over for eighteen years.
                This shows the kind of “fruit” God wants: compassion, mercy, and freedom. While the synagogue ruler
                criticizes Him for healing on the Sabbath, Jesus exposes their hypocrisy and demonstrates that God’s
                kingdom brings life, not empty rules.</p>
            <p>Jesus then tells two short parables about the <a href="parables#:~:text=The%20Mustard%20Seed">mustard
                    seed</a> and the <a href="parables#:~:text=The%20Leaven">yeast.</a>
                These 2 parables teach that the kingdom of God starts small but grows powerfully, spreading through the
                whole world—just as repentance and faith can grow in a person’s life.</p>
            <p>As He continues traveling toward Jerusalem, someone asks Him, <strong>“Will only a few be
                    saved?”</strong> <span><a
                        href="../../eng-web_html/LUK13.htm#:~:text=One said to him%2C “Lord%2C are they few who are saved?” He said to them%2C “Strive to enter in by the narrow door%2C for many%2C I tell you%2C will seek to enter in and will not be able."><ruby>Luke<rt>13:23</rt>
                        </ruby></a></span>.
                Jesus answers that <strong>the way is narrow, and many will try to enter but won’t be able</strong>.
                <span><a href="../../eng-web_html/LUK13.htm#:~:text=“Strive to enter in by the narrow door%2C for many%2C I tell you%2C will seek to enter in and will not be able."><ruby>Luke<rt>13:24
                            </rt></ruby></a></span> He warns that it’s not enough
                to hear Him or be near Him—people must truly know Him and live in obedience. <i>Again, the theme of
                    bearing fruit and readiness comes through.</i>
            </p>
            <p>Finally, as Jesus nears Jerusalem, some Pharisees warn Him about Herod’s threats <span><a
                        href="../../eng-web_html/LUK13.htm#:~:text=On that same day%2C some Pharisees came%2C saying,comes in the name of the Lord!"><ruby>Luke<rt>13:31–35
                            </rt></ruby></a></span>. But Jesus stays
                focused on His mission. He grieves over Jerusalem: <strong>"Jerusalem, Jerusalem, you who kills the
                    prophets and stones those who are sent to her! How often I wanted to gather your children together,
                    like a hen gathers her own brood under her wings, and you refused!"</strong> <span><a
                        href="../../eng-web_html/LUK13.htm#:~:text=“Jerusalem%2C Jerusalem%2C you who kills the prophets and stones those who are sent to her!"><ruby>Luke<rt>13:34</rt>
                        </ruby></a></span>
                <span style="font-size: 1.2em;">His lament ties back to the fig tree:</span> <i>God is patient, but rejection of His mercy leads to
                    judgment.</i>
            </p>
            <h3>Teaching</h3>
            <ul style="margin-left: 20px;">
                <li>Be Ready</li>
                <li>Repent</li>
                <li>Bear Fruit</li>
                <li>Live in Mercy</li>
                <li><b>Enter the Kingdom While There is Still Time</b></li>
            </ul>
            <p>The Barren Fig Tree illustrates both divine patience and the expectation
                of fruitfulness in God's people. The owner's willingness to give the unproductive tree
                one more year of cultivation before cutting it down represents God's merciful delay of
                judgment to allow for repentance.</p>

        </div>

        <div class="highlight-box" id="TheGreatBanquet">
            <h2><span class="emoji">🍲</span>The Great Feast
                <a href="../../eng-web_html/LUK14.htm#:~:text=But he said to him%2C “A certain man,are called%2C but few are chosen."><small>Luke
                        14:16-24</small></a>
            </h2>
            <span class="passage highlight-box">Jesus eats: <a
                    href="../../eng-web_html/LUK14.htm#:~:text=When he went into the house of one,He who has ears to hear%2C let him hear."
                    title="Luke 14"><small><ruby>Luke<rt>14</rt></ruby></small></a>.</span>
            <p>In Jesus’ day, meals were not just about eating. They were social events that showed status, honor, and
                belonging. Who you ate with—and where you sat—told everyone else your place in society. The Pharisees
                and religious leaders often used meals to show off their power and to separate themselves from
                <i>“outsiders.”</i>
                When Jesus heals on the <a href="https://en.wikipedia.org/wiki/Biblical_Sabbath"
                    title="Wikipedia">Sabbath</a>, sits at the table, and talks about humility and generosity, He is
                challenging the whole system of pride, self-promotion, and exclusion. He shows that God’s kingdom is not
                about climbing social ladders or protecting status—it’s about love, humility, and welcoming those who
                can’t repay you.
            </p>
            <div class="story-box">
                <h3>Healing on the Sabbath: <small><a
                            href="../../eng-web_html/LUK14.htm#:~:text=When he went into the house of one,They couldn’t answer him regarding these things."><ruby>Luke<rt>14:1–6
                                </rt></ruby></a></small></h3>
                <p>Jesus goes to eat at the house of a leading Pharisee on the Sabbath. A man suffering from swelling
                    (dropsy) is there, and the Pharisees are watching Jesus closely. Jesus asks them, <strong>“Is it
                        lawful to
                        heal
                        on the Sabbath or not?”</strong> They remain silent. He heals the man and reminds them that they
                    would rescue
                    even an ox or donkey on the Sabbath—so why not help a suffering person?</p>
                <h3>Teaching on Humility: <small><a
                            href="../../eng-web_html/LUK14.htm#:~:text=He spoke a parable to those who were,humbled%2C and whoever humbles himself will be exalted."><ruby>Luke<rt>14:7–11
                                </rt></ruby></a></small></h3>
                <p>As guests choose the best seats at the table, Jesus tells a parable. He says not to take the place of
                    honor at a feast, because the host may ask you to move for someone more important. Instead, take the
                    lowest seat, and then the host may honor you by moving you higher. He sums it up: <strong>“Whoever
                        exalts
                        himself will be humbled, and whoever humbles himself will be exalted.”</strong>
                <h3>Teaching on True Generosity: <small><a
                            href="../../eng-web_html/LUK14.htm#:~:text=He also said to the one who had,be repaid in the resurrection of the righteous."><ruby>Luke<rt>
                                    14:12–14</rt></ruby></a></small></h3>
                <p>Jesus then speaks directly to the host. He says not to invite only friends, relatives, or rich
                    neighbors
                    who can repay the favor. Instead, invite the poor, the crippled, the lame, and the blind. Such
                    generosity reflects God’s heart, and the reward will come at the resurrection of the righteous.
                <h3>Lead-in to the Parable: <small><a
                            href="../../eng-web_html/LUK14.htm#:~:text=When one of those who sat at the,a great supper%2C and he invited many people."><ruby>Luke<rt>
                                    14:15–16</rt></ruby></a></small></h3>
                <p>One of the dinner guests, hearing Jesus’ words, blurts out: <strong>“Blessed is the one who will eat
                        at the
                        feast
                        in the kingdom of God!”</strong> This sets the stage for Jesus to tell the Parable of the Great
                    Supper, which
                    describes who will really share in God’s banquet.</p>
            </div>
            <p style="text-align: center;"><i>While having a parallel in <a
                        href="../../eng-web_html/LUK13.htm#:~:text=Now there were some present at the same,be healed%2C and not on the Sabbath day!">
                        <ruby>Matthew<rt>22:1-14</rt></ruby>
                    </a>, the parable appears in a significantly different form in Luke.</i></p>

            <div class="carousel-group img_fl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/greatBanquet_thumb.webp" alt="Great Banquet" width="200"
                                height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="9"></div>
                </div>
            </div>
            <p>Jesus told a story about a man who prepared a big banquet. He invited many guests and, when
                everything was ready, he sent his servant to tell them, <b>“Come, the feast is ready!”</b>
                But one by one, the guests made excuses. The first said, <b>“I just bought a field, and I need to go
                    look at it.”</b> Another said, <b>“I just bought five pairs of oxen, and I need to go test
                    them.”</b> Another
                said, <b>“I just got married, so I can’t come.”</b>
                The servant went back and told the master what happened. The master was upset. He said to the
                servant, <b>“Go quickly into the city streets and alleys. Bring in the poor, the crippled, the
                    blind,
                    and the lame.”</b>
                The servant obeyed and then said, <b>“Master, I have done what you asked, but there is still
                    room.”</b> So
                the master said, <b>“Go out to the roads and country paths. Urge everyone you find to come, so that
                    my
                    house will be full.”</b>
                Then the master said, <b>“<i>None of those who were first invited will taste my supper.”</i></b></p>
            <p> This parable shows that God’s kingdom is like a feast. Many people make excuses and miss out, but
                God
                opens the invitation wide—to the poor, the broken, and even to those far away. His table will be
                full, but only those who accept His call will enjoy the feast.The emphasis on the inclusion of
                <b>"the
                    poor, the
                    maimed, the lame, the blind"</b> after the invited guests make excuses reflects
                God's reward for the marginalized and their special place in the kingdom.
            </p>
            <h3 id="TheTowerBuilder_And_TheBattlingKing">Building a Tower and
                King Going to War <a href="../../eng-web_html/LUK14.htm#:~:text=For which of you%2C desiring to build a,an envoy and asks for conditions of peace."><small>Luke
                        14:28-32</small></a></h3>
            <div class="carousel-group img_rtl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/buildingTower_thumb.webp" alt="Building a Tower"
                                width="200" height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="10"></div>
                </div>
            </div>
            <p>After telling the parable about the great banquet, Jesus turned to the large crowd that was following
                Him. He wanted them to understand that being His disciple was not something casual or easy—it would
                cost them everything.
                Jesus said that <i>anyone who wants to follow Him must love Him more than their own family and even
                    more than their own life.</i> This didn’t mean people should stop loving their parents, spouse, or
                children, but it meant that loyalty to Him comes first, above all other relationships.
                He also said that <i>anyone who follows Him must <b>“carry their cross.”</b></i> In those days, a cross
                meant death and suffering. Jesus was teaching that His disciples must be ready to give up comfort,
                safety, and even their lives if necessary, in order to stay faithful to Him.
                To explain, Jesus gave two examples:
                <a href="parables#:~:text=Building%20a%20Tower%20and%20King%20Going%20to%20War">Building a Tower and
                    King Going to War</a>
                In the same way, Jesus told the crowd to <b>“count the cost”</b> before following Him. A true disciple
                must
                be willing to give up possessions, pride, and anything else that competes with full devotion to Him.
                Finally, He said that disciples should be like salt. Salt is good and useful, but if it loses its
                flavor, it is thrown away. In the same way, His followers must remain faithful and committed, or
                else they lose their purpose.
            </p>
        </div>

        <div class="highlight-box" id="TheLostCoin">
            <h2 id="TheLostCoin"><span class="emoji">🪙</span> The Lost Coin <a
                    href="../../eng-web_html/LUK15.htm#:~:text=Or what woman%2C if she had ten drachma,the angels of God over one sinner repenting."><small>Luke
                        15:8-10</small></a></h2>
            <span class="passage highlight-box">In <a
                    href="../../eng-web_html/LUK15.htm#:~:text=Now all the tax collectors and sinners were,He was lost%2C and is found." title="Luke 15">Luke
                    15</a><br />
                large crowds are gathering around Jesus,<br />
                but not everyone is happy about it.</span>
            <p>The tax
                collectors and sinners are drawing near to listen, while the Pharisees and teachers of the law complain:
                <b><i>“This man welcomes sinners and eats with them!”</i></b> To them, sharing a meal with sinners was a
                sign of approval, so they were upset that Jesus showed kindness to people they thought were unworthy.
                In response, Jesus tells three parables: the <a href="parables#:~:text=The%20Lost%20Sheep">Lost
                    Sheep</a>, <a href="parables#:~:text=The%20Lost%20Coin">the Lost Coin</a>, and <a
                    href="parables#:~:text=The%20Prodigal%20Son">the Prodigal Son</a>.
                Each story shows God’s heart for those who are lost and His joy when they are found.
            </p>
            <p>By telling these stories, Jesus is teaching that every person is precious to God, no matter their past.
                He wants the Pharisees, the sinners, and all the listeners to see that God’s love reaches out to the
                lost,
                and that heaven rejoices when even one person repents and returns to Him.</p>
            <div class="carousel-group img_fl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/lostCoin_thumb.webp" alt="Lost Coin" width="200"
                                height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="11"></div>
                </div>
            </div>
            <p>A woman who had ten silver coins. One day, she lost one of them.
                The coin was very valuable to her, so she didn’t ignore it or just say, <b><i>“Well, I still have
                        nine.”</i></b>
                Instead, she lit a lamp, swept the whole house, and searched carefully until she found it.
                When she finally discovered the coin, she was filled with joy. She called her friends and neighbors
                together and said,
                <b><i>“Rejoice with me! I have found the coin I lost!”</i></b>
            </p>
            <p>The parable illustrates God's diligent search for and joy over one lost
                sinner who repents. The image of a woman carefully sweeping her house to find one lost
                coin provides a domestic parallel to the more masculine imagery of the shepherd
                seeking a lost sheep in the preceding parable.</p>
            <h3>Main Takeaway:</h3>
            <ul style="margin-left: 20px;">
                <li>Every person is valuable to God, no matter who they are or what they’ve done.</li>
                <li>God seeks after those who are lost, just like the woman searched for her coin.</li>
                <li>Heaven rejoices when even one sinner repents and turns back to God.</li>
                <li>We should share in God’s joy and care about others who are far from Him.</li>
            </ul>
        </div>

        <div class="highlight-box" id="TheDishonestManager">
            <h2 id="TheDishonestManager"><span class="emoji">😞</span> The Dishonest Manager <a
                    href="../../eng-web_html/LUK16.htm#:~:text=He also said to his disciples%2C “There was,they may receive you into the eternal tents."><small>Luke
                        16:1-9</small></a></h2>
            <div class="carousel-group img_fl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/dishonestManager_thumb.webp" alt="Dishonest Manager"
                                width="200" height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="12"></div>
                </div>
            </div>
            <p>There was a rich man who had a manager to take care of his business. One day the rich man heard that the
                manager was wasting his possessions. So he called the manager in and said,<br /> <b><i>“What is this I
                        hear about
                        you?
                        Give me a report of your work, because you can’t be my manager any longer.”</i></b><br />
                The manager thought to himself,<br /> <b><i>“What am I going to do now? My master is taking away my job.
                        I’m not
                        strong
                        enough to dig ditches, and I’m too ashamed to beg. I need a plan so that when I lose my job,
                        people will
                        welcome me into their homes.”</i></b><br />
                So he called in each person who owed his master money. To the first he asked,<br /> <b><i>“How much do
                        you owe my
                        master?”</i></b><br />
                The man replied,<br /> <b><i>“One hundred containers of oil.”</i></b><br />
                The manager said,<br /> <b><i>“Take your bill, sit down quickly, and change it to fifty.”</i></b><br />
                Then he asked another,<br /> <b><i>“How much do you owe?”</i></b><br />
                He said,<br /> <b><i>“One hundred baskets of wheat.”</i></b><br />
                The manager told him,<br /> <b><i>“Take your bill and make it eighty.”</i></b><br />
                When the master heard what the manager had done, he was surprised—but he actually praised the manager
                for
                being so clever. Jesus explained, <strong>“The people of this world are often more shrewd in handling
                    their own
                    affairs than the children of light.”</strong> <a
                    href="../../eng-web_html/LUK16.htm#:~:text=“His lord commended the dishonest manager because he had done wisely%2C for the children of this world are%2C in their own generation%2C wiser than the children of the light."><small><ruby>Luke<rt>16:8
                            </rt></ruby></small></a>
            <h3>After telling the parable of the dishonest manager, Jesus explained what it meant. He said:</h3>
            <span class="passage highlight-box">One of Jesus's most challenging parables</span>
            <p>The application—"make friends for yourselves by unrighteous mammon"—establishes the
                principle of using material resources for spiritual purposes and eternal benefit.</p>
            <p><strong>Use money and possessions (“<i>unrighteous mammon</i>”) wisely.</strong> Money itself won’t last
                forever, but how you
                use it can have eternal results. If you use what you have to bless others and serve God, then when
                earthly things fail, you will have treasure in heaven and eternal friendships.
                <a href="../../eng-web_html/LUK16.htm#:~:text=I tell you%2C make for yourselves friends by means of unrighteous mammon%2C so that when you fail%2C they may receive you into the eternal tents."><ruby>Luke<rt>16:9</rt>
                    </ruby></a>
            </p>
            <p><strong>Faithfulness matters.</strong> If someone can be trusted with small things, they can also be
                trusted with big
                things. But if they are dishonest in small things, they will also be dishonest in big ones.
                <a href="../../eng-web_html/LUK16.htm#:~:text=He who is faithful in a very little is faithful also in much."><ruby>Luke<rt>16:10</rt>
                    </ruby></a> God is
                looking for people who are faithful with earthly wealth so He can trust them with true spiritual riches.
            </p>
            <p><strong>Comparing earthly money with spiritual riches</strong> Everything we have—money, time,
                abilities—actually belongs to God. We are just managers (like the steward in the parable).
                If we’re careless or selfish with what belongs to God, why would He give us eternal treasures that will
                truly belong to us in His kingdom?
                <a href="../../eng-web_html/LUK16.htm#:~:text=If therefore you have not been faithful in,will give you that which is your own?"><ruby>Luke<rt>16:11-12</rt>
                    </ruby></a>
            </p>
            <p><strong>You cannot serve two masters.</strong> Just like a servant can’t serve two lords at once, you
                cannot serve both
                God and money. You will end up loving one and hating the other. Jesus made it clear: you have to choose
                which one rules your life.
                <a href="../../eng-web_html/LUK16.htm#:~:text=No servant can serve two masters%2C for either he will hate the one and love the other; or else he will hold to one and despise the other."><ruby>Luke<rt>16:13</rt>
                    </ruby></a>
            </p>
            <p>When the Pharisees heard this, they laughed at Jesus because they loved money. But Jesus told them,
                <strong>“You
                    try to make yourselves look right in front of people, but God knows your hearts.
                    <a href="../../eng-web_html/LUK16.htm#:~:text=The Pharisees%2C who were lovers of money%2C also heard all these things%2C and they scoffed at him."><ruby>Luke<rt>16:14</rt>
                        </ruby></a>
                    What people admire as success and wealth often doesn’t impress God—it can even be disgusting to
                    Him.”</strong>
            </p>
            <div class="story-box">
                <span class="paragraphStoryBox passage"><a
                        href="../../eng-web_html/LUK16.htm#:~:text=He said to them%2C “You are those who,who is divorced from a husband commits adultery.">
                        <ruby>Luke<rt>16:15-18</rt></ruby>
                    </a></span>
                <p>Jesus then reminded them that the Law of Moses was still in place until John the Baptist, but now the
                    kingdom of God was being preached. People were eagerly pressing into it. Still, God’s commands and
                    standards had not disappeared. That’s why He also reminded them about God’s design for marriage,
                    showing
                    that His standards remain firm, even as the new kingdom is breaking in.</p>
                <p>When Jesus taught about divorce and remarriage, He was not opposing Moses but restoring God’s
                    original design for marriage.
                    Moses allowed divorce as a concession because of human hardness of heart, but this was never God’s
                    true plan.
                    From the beginning, God created marriage to be a lifelong covenant between one man and one woman,
                    reflecting His faithful love.
                    By saying that divorce and remarriage amounts to adultery, Jesus was lifting marriage back to its
                    sacred purpose.
                    This was also the reason John the Baptist boldly confronted Herod, who had taken his brother’s wife
                    unlawfully, and it cost John his life.
                    For us today, Jesus’ teaching reminds us that marriage is holy, divorce is not God’s ideal, and His
                    followers are called to honor His design for faithfulness.
                </p>
                <ul style="margin-left: 20px;">
                    <li>Moses permitted divorce because of human hardness of heart, not because it was God’s desire.
                    </li>
                    <li>Jesus restores God’s original plan: marriage is a lifelong covenant meant to reflect His
                        faithfulness.</li>
                    <li>Divorce and remarriage outside of God’s design is like adultery because it breaks the covenant.
                    </li>
                    <li>John the Baptist was killed for speaking against Herod’s unlawful marriage, showing the cost of
                        standing for God’s truth.</li>
                    <li>For believers today, Jesus’ words call us to honor marriage as sacred and to live in
                        faithfulness before God.</li>
                    <hr>
                    <li style="list-style: none;"><a
                            href="../../eng-web_html/MAT05.htm#:~:text=It was also said%2C ‘Whoever shall put away,her when she is put away commits adultery."><ruby>Matthew<rt>
                                    5:31–32</rt></ruby></a> (Sermon on the Mount)</li>
                    <li style="list-style: none;"><a
                            href="../../eng-web_html/MAT19.htm#:~:text=Pharisees came to him%2C testing him and saying%2C,marries her when she is divorced commits adultery."><ruby>Matthew<rt>
                                    19:3–9</rt></ruby></a> (with the Pharisees)</li>
                    <li style="list-style: none;"><a
                            href="../../eng-web_html/MRK10.htm#:~:text=Pharisees came to him testing him%2C and asked,her husband and marries another%2C she commits adultery."><ruby>Mark<rt>10:2–12
                                </rt></ruby></a></li>
                </ul>
            </div>
            <h3>✨ The big lesson here:</h3>
            <p>Jesus used this parable to warn that money is temporary, but how you use it shows your heart. If you use
                wealth selfishly, you’re serving money, not God. If you use it to bless others and honor God, it shows
                your heart is faithful and trustworthy for greater things in God’s kingdom.</p>
        </div>

        <div class="highlight-box" id="TheUnprofitableServants">
            <h2><span class="emoji">🙋</span> The Unprofitable Servants <a
                    href="../../eng-web_html/LUK17.htm#:~:text=But who is there among you%2C having a,We have done our duty."><small>Luke
                        17:7-10</small></a></h2>
            <p>Before Jesus told this parable, He was teaching His disciples about some very serious matters of
                discipleship. First, He warned them about causing others to stumble.
                Sin is real and temptations will come, but those who lead others astray carry a heavy responsibility
                before God.</p>
            <p>Next, He reminded them to live with a spirit of forgiveness. If someone sins against you—even seven times
                in one day—but sincerely repents, you must forgive.
                Hearing this, the apostles realized how hard such a life of forgiveness and holiness would be, so they
                cried out, <strong>“Increase our faith!”</strong><a
                    href="../../eng-web_html/LUK17.htm#:~:text=The apostles said to the Lord%2C “Increase our faith.” The Lord said%2C “If you had faith like a grain of mustard seed%2C you would tell this sycamore tree%2C ‘Be uprooted and be planted in the sea%2C’ and it would obey you."><ruby>Luke<rt>17:5</rt>
                    </ruby></a>
                Jesus answered by teaching that even faith as small as a mustard seed has great power when placed in
                God.
                Jesus is showing that discipleship means responsibility, forgiveness, faith, and humility.</p>
            <p>Then, to keep them from pride, Jesus gave the parable of the unprofitable servants:</p>
            <div class="carousel-group img_fl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/unprofitableServants_thumb.webp"
                                alt="Unprofitable Servants" width="200" height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="13"></div>
                </div>
            </div>
            <p>Imagine you are a servant working for a master. All day long you’ve been out in the field, plowing the
                ground or taking care of the sheep. When you finally come back inside, tired and hungry, do you think
                the master will say, <b><i>“Oh, you’ve worked so hard—come sit down right away and eat”?</i></b><br />

                No.<br /> Instead, the master will say:<br /> <b><i>“Change your clothes, make dinner, and serve me
                        first. After I have
                        finished eating and drinking, then you can have your meal.”</i></b> And when you do that, the
                master doesn’t
                thank you for simply doing your job—that’s just what is expected of a servant.<br />
                In the same way, Jesus said, you also should think of yourselves as servants of God. When you obey His
                commands—when you forgive, when you walk by faith, when you live holy lives—you are only doing your
                duty. You shouldn’t boast or act like God owes you something. Instead, you should say, <strong>“We are
                    unworthy
                    servants. We only did our job.”</strong><a
                    href="../../eng-web_html/LUK17.htm#:~:text=Even so you also%2C when you have done all the things that are commanded you%2C say%2C ‘We are unworthy servants."><ruby>Luke<rt>17:10</rt>
                    </ruby></a></p>
            <div class="highlight-box">
                <h3>Think about it like being on a sports team.</h3>
                <p>
                    When the coach asks you to run drills, play defense, or pass the ball, you don’t expect the coach to
                    throw you a party every time you do it. You’re just doing what it means to be a team player. In the
                    same way, being a disciple of Jesus means faithfully doing what God asks—not for applause, but
                    because we love and serve Him.</p>
            </div>
            <p>His point was clear:
                no matter how much His followers obey, forgive, or live by faith, they should not boast as if God owes
                them something. Instead, they should see themselves as servants simply doing their duty for their
                Master.</p>
            <p>After telling the parable of the unprofitable servants, Jesus went on His journey toward
                Jerusalem. On the way, He met ten men with leprosy, a terrible skin disease that forced people to live
                apart from everyone else. Standing at a distance, they cried out, <b><i>“Jesus, Master, have mercy on
                        us!”</i></b>

                Jesus told them, <strong>“Go and show yourselves to the priests.”</strong> As they went, they were
                healed—completely
                cleansed of their disease. But out of the ten, only one man, a Samaritan, came back. He shouted praises
                to God, fell at Jesus’ feet, and gave Him thanks.

                Jesus asked, <strong>“Weren’t all ten cleansed? Where are the other nine? Was no one found to return and
                    give
                    glory to God except this foreigner?”</strong> Then He told the man, <strong>“Get up and go. Your
                    faith has healed you.”</strong>
                <a href="../../eng-web_html/LUK17.htm#:~:text=As he was on his way to Jerusalem%2C,Your faith has healed you."><ruby>Luke<rt>17:11-19</rt>
                    </ruby></a>
            </p>
            <h3>Obedience to God is Love</h3>
            <ul style="margin-left: 20px;">
                <li>We should serve God humbly, obeying Him because He is our Master, not because we expect praise or
                    reward.</li>
                <li>We should live with thankful hearts, always returning to give glory to God for His blessings, like
                    the one leper who came back.</li>
                <li>God shows mercy to many, but only a few truly respond with faith and gratitude.</li>
                <li>Faithful obedience and thankful hearts are what mark true disciples of Jesus.</li>
            </ul>
        </div>

        <div class="highlight-box" id="ThePersistentWidow">
            <h2><span class="emoji">🙏</span> The Persistent Widow <small><a
                        href="../../eng-web_html/LUK18.htm#:~:text=He also spoke a parable to them that,comes%2C will he find faith on the earth?">Luke 18:1-8</a></small>
            </h2>
            <p>As Jesus continued teaching His disciples, He wanted them to understand how important it is to never give
                up when praying. Life can feel unfair, and sometimes it seems like our prayers go unanswered. But Jesus
                used a simple story to show that God hears us, and we should keep coming to Him with faith.</p>
            <div class="carousel-group img_fl">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img">
                            <img src="../../images/_JesusChrist/persistentWidow_thumb.webp" alt="Persistent Widow"
                                width="200" height="200">
                            <!-- <p>Primary Image</p> -->
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="14"></div>
                </div>
            </div>
            <p>Jesus told them a story about a poor widow who lived in a city where there was also a powerful judge. In
                those days, widows, children, women, and the disabled were some of the most vulnerable people in
                society. Without a husband to provide for them, they often had little money, little protection, and few
                people to defend them. This widow had an enemy who was taking advantage of her, and she needed justice.
            </p>
            <p>So she went to the judge, the one person who had the power to make things right. But there was a
                problem: this judge didn’t care about God’s laws, and he didn’t care about people either. He was
                selfish, stubborn, and only thought about himself. When the widow came to him the first time, he ignored
                her. When she came the second time, he turned her away again. Over and over, the judge refused to help
                her.</p>
            <p>But the widow didn’t stop. Day after day, she kept showing up, asking the judge to defend her. She
                wouldn’t quit, even when he rejected her. She was persistent—like a squeaky wheel that keeps making
                noise until someone finally oils it.</p>
            <p>Eventually, the judge said to himself, <b><i>“I don’t care about what’s right or wrong, and I don’t care
                        about
                        this woman. But she is wearing me out with her constant requests. If I don’t give her what she
                        wants,
                        she’s never going to stop bothering me!”</i></b> So, even though he didn’t care about justice,
                the judge finally
                gave in and helped her—simply because she refused to give up.</p>
            <h3>What Does This Mean?</h3>
            <p>It’s kind of like when a student keeps asking the teacher for help. Imagine a kid at school who didn’t
                understand a math problem. The teacher was busy and didn’t really feel like helping at first. But the
                student kept raising their hand, kept asking, and even came back after class. Finally, the teacher said,
                <i>“Okay, fine, let’s go over it!”</i> Not because the teacher was excited to explain the problem, but
                because
                the student’s persistence showed they really wanted help.
                That’s what the widow was like—she just wouldn’t stop asking until she was heard. And Jesus said, if
                even a stubborn judge will eventually give in, how much more will our loving Father in heaven answer His
                children when they cry out to Him day and night? God is not annoyed by our prayers. Instead, He wants us
                to keep coming to Him, trusting that He hears us and will answer in the right time.
                <a href="../../eng-web_html/LUK18.htm#:~:text=The Lord said%2C “Listen to what the unrighteous judge says.,comes%2C will he find faith on the earth?"title="Luke 18:6-8"><ruby>Luke<rt>18:6-8</rt>
                    </ruby></a>
            </p>
        </div>

        <h2 id="Emphasis on Prayer and the Holy Spirit">Luke's Emphasis on Prayer and the Holy Spirit</h2>
        <p>Teaching on Prayer appears throughout Luke's Gospel, often in material unique to Luke.
            <a href="#TheFriendAtMidnight">The Parable of the Friend at Midnight</a> <a
                href="./parables#:~:text=The%20Friend%20at%20Midnight"title="Luke 11:5-8"><ruby>Luke<rt>11:5-8</rt></ruby></a>
            and the Parable of <a href="#ThePersistentWidow">the Persistent Widow</a> <a
                href="./parables#:~:text=The%20Persistent%20Widow"title="Luke 18:1-8"><ruby>Luke<rt>18:1-8</rt></ruby></a>
            both encourage persistence in prayer. The teaching that follows the Lord's Prayer <a
                href="../../eng-web_html/LUK11.htm#:~:text=I tell you%2C keep asking%2C and it will,the Holy Spirit to those who ask him?"title="Luke 11:9-13"><ruby>Luke<rt>11:9-13</rt>
                </ruby></a>,
            emphasizes God's willingness to give good gifts, particularly the Holy Spirit, to those who ask. The
            instruction to <strong>"pray always and not
                lose heart"</strong> <a
                href="../../eng-web_html/LUK18.htm#:~:text=He also spoke a parable to them that they must always pray and not give up%2C saying%2C “There was a judge in a certain city who didn’t fear God and didn’t respect man."title="Luke 18:1"><ruby>Luke<rt>18:1</rt>
                </ruby></a>
            establishes prayer as an ongoing spiritual discipline rather than
            merely an occasional practice. These teachings create a comprehensive vision of prayer
            as essential to discipleship and effective in securing divine response.
        </p>
        <div class="story-box">
            <p class="paragraphStoryBox">Beyond his unique parables, Luke's Gospel is distinguished by its emphasis on
                Jesus's
                prayer life and teaching about prayer, as well as its focus on the Holy Spirit's role in
                Jesus's ministry and the life of the church. These emphases create a distinctive portrait
                of Jesus's relationship with the Father and the spiritual resources available to his
                followers. Jesus's Prayer Life receives particular attention in Luke's Gospel.</p>
            <div class="highlight-box">
                Luke alone records that Jesus was praying at his baptism when the Holy Spirit descended upon him
                <sup><small>[1]</small></sup>,
                that he spent the entire night in prayer before selecting the twelve apostles
                <sup><small>[2]</small></sup>,
                that he was praying alone when he asked the disciples
                <strong>"Who do the crowds say that I am?"</strong><sup><small>[3]</small></sup>,
                and that he was praying on the mountain when he was transfigured <sup><small>[4]</small></sup>.
                <span style="font-size: 1.2em;">These references establish prayer as fundamental to Jesus's relationship with the Father and his
                    discernment of the Father's will at key moments in his ministry.</span>
                <div class="multi-link-container" style="display:inline;">
                    <ruby class="linked-text" style="color: var(--primary-dark);" title="1">Luke<rt>3:21-22</rt></ruby>
                    <div class="link-dialog">
                        <p tabindex="0"><small>21</small> Now when all the people were baptized, Jesus also had been
                            baptized and was praying. The sky was opened,</p>
                        <p tabindex="0"><small>22</small> and the Holy Spirit descended in a bodily form like a dove on
                            him;
                            and a voice came out of the sky, saying <strong>“You are my beloved Son. In you I am well
                                pleased.”</strong></p>
                        <a href="../../eng-web_html/LUK03.htm#:~:text=Now when all the people were baptized%2C Jesus,In you I am well pleased."title="Luke 3:21-22">Luke 3:21-22</a>
                    </div>
                </div>
                <div class="multi-link-container" style="display:inline;padding-left:.5%;">
                    <ruby class="linked-text" style="color: var(--primary-dark);" title="2">Luke<rt>6:12-13</rt></ruby>
                    <div class="link-dialog">
                        <p tabindex="0"><small>12</small> In these days, he went out to the mountain to pray, and he
                            continued all night in prayer to God.</p>
                        <p tabindex="0"><small>13</small> When it was day, he called his disciples, and from them he
                            chose
                            twelve, whom he also named apostles:</p>
                        <br /><a href="../../eng-web_html/LUK06.htm#:~:text=In these days%2C he went out to the,he chose twelve%2C whom he also named apostles:"title="Luke 6:12-13">Luke 6:12-13</a>
                    </div>
                </div>
                <div class="multi-link-container" style="display:inline;padding-left:.5%;">
                    <ruby class="linked-text" style="color: var(--primary-dark);" title="3">Luke<rt>9:18-20</rt></ruby>
                    <div class="link-dialog">
                        <p tabindex="0"><small>18</small> As he was praying alone, the disciples were near him, and he
                            asked
                            them, <strong>“Who do the multitudes say that I am?”</strong></p>
                        <p tabindex="0"><small>19</small> They answered, <strong>“ ‘John the Baptizer,’ but others say,
                                ‘Elijah,’ and others, that one of the old prophets has risen again.”</strong></p>
                        <p tabindex="0"><small>20</small> He said to them, <strong>“But who do you say that I
                                am?”</strong>
                            Peter answered, <strong>“The Christ of God.”</strong></p>
                        <a href="../../eng-web_html/LUK09.htm#:~:text=As he was praying alone%2C the disciples were,Peter answered%2C “The Christ of God."title="Luke 9:18-20">Luke 9:18-20</a>
                    </div>
                </div>
                <div class="multi-link-container" style="display:inline;padding-left:.5%;">
                    <ruby class="linked-text" style="color: var(--primary-dark);" title="4">Luke<rt>9:28-31</rt></ruby>
                    <div class="link-dialog">
                        <p tabindex="0"><small>28</small> About eight days after these sayings, he took with him Peter,
                            John, and James, and went up onto the mountain to pray.</p>
                        <p tabindex="0"><small>29</small> As he was praying, the appearance of his face was altered, and
                            his
                            clothing became white and dazzling.</p>
                        <p tabindex="0"><small>30</small> Behold, two men were talking with him, who were Moses and
                            Elijah,
                        </p>
                        <p tabindex="0"><small>31</small> who appeared in glory and spoke of his departure, which he was
                            about to accomplish at Jerusalem.</p>
                        <a href="../../eng-web_html/LUK09.htm#:~:text=About eight days after these sayings%2C he took,which he was about to accomplish at Jerusalem."title="Luke 9:28-31">Luke 9:28-31</a>
                    </div>
                </div>
            </div>



        <h3>The Holy Spirit's Role receives particular emphasis in Luke's Gospel, anticipating the
            more extensive treatment in the Book of Acts.</h3>
            <p> Luke alone records that John the Baptist
                was <strong>"filled with the Holy Spirit, even from his mother's womb"</strong> <a
                    href="../../eng-web_html/LUK01.htm#:~:text=For he will be great in the sight of the Lord%2C and he will drink no wine nor strong drink."title="Luke 1:15"><ruby>Luke<rt>1:15</rt>
                        </ruby></a>, that Elizabeth
                was <strong>"filled with the Holy Spirit"</strong> when Mary visited her <a
                    href="../../eng-web_html/LUK01.htm#:~:text=When Elizabeth heard Mary’s greeting%2C the baby leaped in her womb; and Elizabeth was filled with the Holy Spirit."title="Luke 1:41"><ruby>Luke<rt>1:41</rt>
                        </ruby></a>, and that Zacharias
                was <strong>"filled with the Holy Spirit"</strong> when prophesying about his son's role as forerunner
                <a href="../../eng-web_html/LUK01.htm#:~:text=His father Zacharias was filled with the Holy Spirit%2C and prophesied%2C saying%2C “Blessed be the Lord%2C the God of Israel%2C for he has visited and redeemed his people; and has raised up a horn of salvation for us in the house of his servant David (as he spoke by the mouth of his holy prophets who have been from of old)%2C salvation from our enemies and from the hand of all who hate us; to show mercy toward our fathers%2C to remember his holy covenant%2C the oath which he swore to Abraham our father%2C to grant to us that we%2C being delivered out of the hand of our enemies%2C should serve him without fear%2C in holiness and righteousness before him all the days of our life."title="Luke 1:67"><ruby>Luke<rt>1:67</rt>
                        </ruby></a>. The Holy Spirit's role in Jesus's conception (Luke 1:35), his descent upon
                Jesus at baptism <a href="../../eng-web_html/LUK03.htm#:~:text=and the Holy Spirit descended in a bodily form like a dove on him; and a voice came out of the sky%2C saying “You are my beloved Son."title="Luke 3:22"><ruby>Luke
                        <rt>3:22</rt></ruby></a>, and Jesus's being <strong>"filled with the Holy Spirit"</strong> and
                <strong>"led by
                    the Spirit into the wilderness"</strong> <a
                    href="../../eng-web_html/LUK04.htm#:~:text=Jesus%2C full of the Holy Spirit%2C returned from the Jordan and was led by the Spirit into the wilderness for forty days%2C being tempted by the devil."title="Luke 4:1"><ruby>Luke<rt>4:1</rt>
                        </ruby></a> establish the Spirit's central role in Jesus's life
                and ministry.
            </p>
            <p>Jesus's teaching about the Holy Spirit also receives unique emphasis in Luke. The
                promise that the Father will <strong>"give the Holy Spirit to those who ask Him"</strong> <a
                    href="../../eng-web_html/LUK11.htm#:~:text=If you then%2C being evil%2C know how to give good gifts to your children%2C how much more will your heavenly Father give the Holy Spirit to those who ask him?” He was casting out a demon%2C and it was mute."title="Luke 11:13"><ruby>Luke<rt>11:13</rt>
                        </ruby></a>
                establishes the Spirit as the supreme gift available through prayer. The promise of
                <strong>"power from on high"</strong> <a
                    href="../../eng-web_html/LUK24.htm#:~:text=You are witnesses of these things."title="Luke 24:48"><ruby>Luke<rt>24:49</rt>
                        </ruby></a> in the Gospel's conclusion anticipates the coming of
                the Spirit at Pentecost as described in Acts. These teachings establish the Holy Spirit as
                the continuing divine presence that will empower the church's mission after Jesus's
                ascension.
            </p>
        </div>

        <h2 id="Theological Contribution">Luke's Theological Contribution</h2>
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

    <!-- Carousel
<div class="carousel-group">
    <div class="multi-link-container">
        <div class="thumbnail-container">
            <span tabindex="0" class="linked-text-img">
                <img src="https://latinospc.com/images/clouds.webp" width="263" height="186" alt="image" class="fr" alt="Start with Blank Page" class="thumbnail" />
                <p>Primary Image</p>
            </span>
        </div>
        <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
    </div>
</div>
-->
    <template id="carousel-images" data-section="Luke-Images">
        <div class="carousel-item" data-image-index="0">
            <a href="../../images/_JesusChrist/wiseAndFoolishBuilders.png">
                <img src="../../images/_JesusChrist/wiseAndFoolishBuilders.webp" alt="Wise and Foolish Builders" /></a>
            <p><a href="./parables#:~:text=The%20Wise%20and%20Foolish%20Builders">Wise and Foolish Builders</a></p>
        </div>

        <div class="carousel-item" data-image-index="1">
            <a href="../../images/_JesusChrist/goodSamaritan.png">
                <img src="../../images/_JesusChrist/goodSamaritan.webp" alt="Good Samaritan" /></a>
            <p><a href="./parables#:~:text=The%20Good%20Samaritan">Good Samaritan</a></p>
        </div>

        <div class="carousel-item" data-image-index="2">
            <a href="../../images/_JesusChrist/prodigalSon.png">
                <img src="../../images/_JesusChrist/prodigalSon.webp" alt="Prodigal Son" /></a>
            <p><a href="./parables#:~:text=The%20Prodigal%20Son">Prodigal Son</a></p>
        </div>

        <div class="carousel-item" data-image-index="3">
            <a href="../../images/_JesusChrist/richManAndLazarus.png">
                <img src="../../images/_JesusChrist/richManAndLazarus.webp" alt="Rich Man and Lazarus" /></a>
            <p><a href="./parables#:~:text=The%20Rich%20Man%20and%20Lazarus">Rich Man and Lazarus</a></p>
        </div>

        <div class="carousel-item" data-image-index="4">
            <a href="../../images/_JesusChrist/phariseeAndTaxCollector.png">
                <img src="../../images/_JesusChrist/phariseeAndTaxCollector.webp" alt="Pharisee and Tax Collector" /></a>
            <p><a href="./parables#:~:text=The%20Pharisee%20and%20the%20Tax%20Collector">Pharisee and Tax Collector</a>
            </p>
        </div>

        <div class="carousel-item" data-image-index="5">
            <a href="../../images/_JesusChrist/twoDebtors.png">
                <img src="../../images/_JesusChrist/twoDebtors.webp" alt="Two Debtors" /></a>
            <p><a href="./parables#:~:text=The%20Two%20Debtors">Two Debtors</a></p>
        </div>

        <div class="carousel-item" data-image-index="6">
            <a href="../../images/_JesusChrist/friendAtMidnight.png">
                <img src="../../images/_JesusChrist/friendAtMidnight.webp" alt="Friend at Midnight" /></a>
            <p><a href="./parables#:~:text=The%20Friend%20at%20Midnight">Friend at Midnight</a></p>
        </div>

        <div class="carousel-item" data-image-index="7">
            <a href="../../images/_JesusChrist/richFool.png">
                <img src="../../images/_JesusChrist/richFool.webp" alt="Rich Fool" /></a>
            <p><a href="./parables#:~:text=The%20Rich%20Fool">Rich Fool</a></p>
        </div>

        <div class="carousel-item" data-image-index="8">
            <a href="../../images/_JesusChrist/barrenFigTree.png">
                <img src="../../images/_JesusChrist/barrenFigTree.webp" alt="Barren Fig Tree" /></a>
            <p><a href="./parables#:~:text=The%20Barren%20Fig%20Tree">Barren Fig Tree</a></p>
        </div>

        <div class="carousel-item" data-image-index="9">
            <a href="../../images/_JesusChrist/greatBanquet.png">
                <img src="../../images/_JesusChrist/greatBanquet.webp" alt="Great Banquet" /></a>
            <p><a href="./parables#:~:text=The%20Great%20Banquet">Great Banquet</a></p>
        </div>

        <div class="carousel-item" data-image-index="10">
            <a href="../../images/_JesusChrist/buildingTower.png">
                <img src="../../images/_JesusChrist/buildingTower.webp" alt="Building Tower" /></a>
            <p><a href="./parables#:~:text=Building%20a%20Tower%20and%20King%20Going%20to%20War">Building Tower</a></p>
        </div>

        <div class="carousel-item" data-image-index="11">
            <a href="../../images/_JesusChrist/lostCoin.png">
                <img src="../../images/_JesusChrist/lostCoin.webp" alt="Lost Coin" /></a>
            <p><a href="./parables#:~:text=The%20Lost%20Coin">Lost Coin</a></p>
        </div>

        <div class="carousel-item" data-image-index="12">
            <a href="../../images/_JesusChrist/dishonestManager.png">
                <img src="../../images/_JesusChrist/dishonestManager.webp" alt="Dishonest Manager" /></a>
            <p><a href="./parables#:~:text=The%20Dishonest%20Manager">Dishonest Manager</a></p>
        </div>

        <div class="carousel-item" data-image-index="13">
            <a href="../../images/_JesusChrist/unprofitableServants.png">
                <img src="../../images/_JesusChrist/unprofitableServants.webp" alt="Unprofitable Servants" /></a>
            <p><a href="./parables#:~:text=The%20Unprofitable%20Servants">Unprofitable Servants</a></p>
        </div>

        <div class="carousel-item" data-image-index="14">
            <a href="../../images/_JesusChrist/persistentWidow.png">
                <img src="../../images/_JesusChrist/persistentWidow.webp" alt="Persistent Widow" /></a>
            <p><a href="./parables#:~:text=The%20Persistent%20Widow">Persistent Widow</a></p>
        </div>


    </template>
    <?php /*
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
*/
    elseif (isset($_GET['Mark'])):
/*
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
*/
?>
<section id="^" class="section fullbar" data-section="Mark">
    <nav class="crumbs">
        <div class="bread-crumbs">
            <a href="../#^" class="crumb-link">Jesus Christ</a>
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
    <p><a href="https://en.wikipedia.org/wiki/Mark_the_Evangelist" title="Wikipedia">Mark</a> was like the friend who's
        always in a hurry and gets straight to the point. Mark's Gospel is the
        shortest of
        the four, and it's packed with action! Instead of writing down lots of long speeches that Jesus gave, Mark
        focused on showing us what Jesus did.</p>

    <h3><span class="emoji">🏃‍♂️</span>Mark's Focus: What Jesus Did</h3>
    <p>While <a href="?Matthew#^">Matthew</a> focused on what Jesus said, Mark focused on what Jesus did. Mark wanted to
        show people that
        Jesus
        wasn't just a good teacher - He was someone with amazing power who could do things that only God could do.
    </p>
    <p>The Gospel of Mark stands as the most action-oriented of the four Gospels, with a
        distinctive focus on Jesus's deeds rather than his extended teachings. Mark's approach is
        characterized by brevity, immediacy, and an emphasis on Jesus as the suffering servant
        whose actions reveal his identity and mission. While Mark contains fewer unique
        discourses than the other Gospels, his distinctive presentation of Jesus's teachings and
        his narrative approach make a vital contribution to our understanding of Jesus's
        ministry and message.</p>

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
        <li>"Why are you so afraid? Do you still have no faith?" (This helped the disciples think about trusting
            God)
        </li>
    </ul>

    <div class="highlight-box">
        <p><strong>Following Jesus is Hard:</strong> Mark doesn't hide the fact that following Jesus can be
            difficult.
            Even Jesus's closest disciples often didn't understand what He was teaching them.</p>
        <p><strong>Jesus Came to Serve:</strong> One of the most important verses in Mark's Gospel is when Jesus
            says,
            "The Son of Man did not come to be served, but to serve, and to give his life as a ransom for many."</p>
        <p><strong>Faith vs. Fear:</strong> Throughout Mark's Gospel, Jesus often asks His disciples, "Why are you
            afraid? Where is your faith?"</p>
    </div>

    <section class="story-box">
        <h2><span class="emoji">🏃</span>Mark's Action-Oriented Narrative</h2>
        <p class="paragraphStoryBox">Mark's Gospel is distinguished by its focus on Jesus's actions rather than his
            words. The
            fast-paced narrative, driven by the frequent use of the word "<b>immediately</b>" (euthys,
            appearing 41 times), creates a sense of urgency and movement that reflects Mark's
            emphasis on Jesus as a man of action whose identity is revealed through what he does
            rather than merely what he says. This action-oriented approach answers the question
            "<b>What did Jesus do?</b>" rather than "<b>What did Jesus say?</b>" and presents Jesus primarily as
            the suffering servant who came "<strong>not to be served, but to serve, and to give His life a
                ransom for many</strong>" <a href="../../eng-web_html/MRK10.htm#:~:text=For the Son of Man also came not to be served but to serve%2C and to give his life as a ransom for many.” They came to Jericho."
                title="Mark 10:45">Mark 10:45</a></p>

        <p>The brevity of Mark's Gospel—significantly shorter than Matthew and Luke—reflects this
            focus on essential action rather than extended teaching. Mark includes fewer parables
            than Matthew and Luke and presents Jesus's teachings in more condensed form. This
            brevity may reflect Mark's purpose of presenting the Gospel to a Roman audience more
            interested in power and action than in theological discourse or ethical teaching. The
            emphasis on Jesus's miracles and exorcisms demonstrates his divine power and
            authority in terms that would be compelling to a Roman audience accustomed to
            evaluating leaders based on their demonstrations of power rather than their
            philosophical sophistication.</p>
    </section>

    <h2><span class="emoji">🌟</span>Mark's Presentation of Jesus's Teachings</h2>

    <p class="paragraphStoryBox">While Mark contains fewer unique discourses than the other Gospels, his
        presentation of
        Jesus's teachings makes a distinctive contribution to our understanding of Jesus's
        message. Mark's Jesus teaches with authority but often in brief, provocative sayings
        rather than extended discourses. The emphasis on action over words reflects Mark's
        understanding of Jesus as one who demonstrates the kingdom of God through powerful
        deeds rather than merely proclaiming it through eloquent speech.</p>

    <section class="highlight-box">
        <div class="carousel-group img_fl">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img">
                        <img src="../../../images/_JesusChrist/growingSeed.webp" width="150" height="150" alt="image"
                            class="fl thumbnail" alt="Start with Blank Page" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
            </div>
        </div>
        </article>

        <template id="carousel-images">
            <div class="carousel-item" data-image-index="0">
                <img src="../../../images/_JesusChrist/growingSeed.webp" alt="Image 1" />
                <p><a href="./parables#:~:text=The%20Growing%20Seed">The Growing Seed</a> <a
                        href="../../eng-web_html/MRK04.htm#:~:text=He said%2C “God’s Kingdom is as if a,in the sickle%2C because the harvest has come."
                        title="Mark 4:26-29">4:26-29</a></p>
            </div>
            <!-- <div class="carousel-item" data-image-index="1">
                <img src="../../images/_JesusChrist/phariseeAndTaxCollector_thumb.webp" alt="Image 2" />
                <p>Image 2 Description</p>
            </div>
            <div class="carousel-item" data-image-index="2">
                <img src="../../images/_JesusChrist/richManAndLazarus_thumb.webp" alt="Image 3" />
                <p>Image 3 Description</p>
            </div> -->
        </template>

        <p>Parables in Mark appear primarily in chapter 4, which presents a shorter parallel to
            <a href="?Matthew#The Parabolic Discourse">Matthew's Parabolic Discourse</a>. Mark includes the <a
                href="./parables#:~:text=The%20Sower">Parable of the Sower</a> with its detailed explanation
            <small><a href="../../eng-web_html/MRK04.htm#:~:text=Listen! Behold%2C the farmer went out to sow.,some sixty times%2C and some one hundred times."
                    title="Mark 4:3-20"><ruby>Mark<rt>4:3-20</rt></ruby></a></small>, emphasizing the importance of
            hearing and
            understanding God's word. <a href="./parables#:~:text=The%20Growing%20Seed">The Parable of the Growing
                Seed</a> <small><a href="../../eng-web_html/MRK04.htm#:~:text=He said%2C “God’s Kingdom is as if a,in the sickle%2C because the harvest has come."
                    title="Mark 4:26-29"><ruby>Mark<rt>4:26-29</rt></ruby></small></a>, unique to Mark, illustrates
            the mysterious and autonomous growth of the kingdom once the seed of the word has
            been planted. <a href="./parables#:~:text=The%20Mustard%20Seed">The Parable of the Mustard Seed</a>
            <small><a href="../../eng-web_html/MRK04.htm#:~:text=He said%2C “How will we liken God’s Kingdom?,of the sky can lodge under its shadow."
                    title="Mark 4:30-32"><ruby>Mark<rt>4:30-32</rt></ruby></small></a> emphasizes the contrast
            between the kingdom's small beginnings and its ultimate greatness. Mark's presentation
            of these parables maintains his characteristic focus on the immediate impact of Jesus's
            teaching and the urgency of response.
        </p>
    </section>

    <p><span class="passage"><a href="../../eng-web_html/MRK13.htm#:~:text=As he went out of the temple%2C one,What I tell you%2C I tell all: Watch!"
                title="Mark 13:1-37"><ruby>Mark<rt>13:1-37</rt></ruby></a></span>
        <a href="https://en.wikipedia.org/wiki/Olivet_Discourse">The Olivet Discourse</a> presents a more concise
        version of Jesus's eschatological teaching than Matthew's extended treatment.
        Mark's account focuses primarily on the prophetic warnings and signs, maintaining his characteristic
        emphasis on immediate action and urgency. The repeated calls to "<i>watch</i>" and "<i>take heed</i>"
        reflect Mark's concern with readiness for the coming crisis and judgment. The discourse concludes with the
        explicit command
        "<strong>What I say to you, I say to all: Watch!</strong>"
        <a href="../../eng-web_html/MRK13.htm#:~:text=What I tell you%2C I tell all: Watch!” Mark < 13 > † 13:6 or%2C “I AM!” * 13:14 Daniel 9:17 ; 11:31 ; 12:11 * 13:25 Isaiah 13:10 ; 34:4 ‡ 13:30 The word translated “generation” (genea) could also be translated “race”%2C “family”%2C or “people”." title="Mark 13:37"><ruby>Mark<rt>
                    13:37</rt></ruby></a>,
        emphasizing vigilance as the appropriate response to eschatological expectation.
        Teaching Through Questions represents a distinctive aspect of Mark's presentation of
        Jesus as teacher. Mark's Jesus frequently uses questions to provoke thought, challenge
        assumptions, and expose motives. Questions like "<strong>Who do men say that I am?</strong>"
        <a href="../../eng-web_html/MRK08.htm#:~:text=Jesus went out%2C with his disciples%2C into the villages of Caesarea Philippi." title="Mark 8:27"><ruby>Mark<rt>
                    8:27</rt></ruby></a>,
        "<strong>What do you want Me to do for you?</strong>" <a
            href="../../eng-web_html/MRK10.htm#:~:text=He said to them%2C “What do you want me to do for you?” They said to him%2C “Grant to us that we may sit%2C one at your right hand and one at your left hand%2C in your glory.” But Jesus said to them%2C “You don’t know what you are asking." title="Mark 10:36">
            <ruby>Mark<rt>10:36, 51</rt></ruby></a>, and "<strong>Why do you call Me
            good?</strong>" <a href="../../eng-web_html/MRK10.htm#:~:text=Jesus said to him%2C “Why do you call me good?"
            title="Mark 10:18">
            <ruby>Mark<rt>10:18</rt></ruby></a> invite engagement rather than merely passive reception of
        information. This dialogical approach to teaching reflects Mark's emphasis on Jesus's
        interaction with individuals and his concern with eliciting personal response rather than
        merely conveying information.
    </p>

    <p class="highlight-box">Teaching Through Actions represents perhaps the most distinctive aspect
        of Mark's
        presentation of Jesus as teacher. Throughout the Gospel, Jesus's actions serve as
        enacted parables that reveal the nature of God's kingdom and the character of true
        discipleship. The feeding of the five thousand demonstrates God's abundant provision,
        the healing of the blind man illustrates the gradual nature of spiritual illumination, and
        the cursing of the fig tree enacts judgment on fruitless religious observance. Jesus's
        washing of the disciples' feet in John's Gospel finds its Markan parallel in Jesus's
        statement that "the Son of Man did not come to be served, but to serve" (Mark 10:45),
        immediately followed by the healing of blind Bartimaeus as a demonstration of that
        servant ministry.</p>


    <h2><span class="emoji">📖</span>Mark's Unique Narrative Techniques</h2>
    <p>While Mark contains fewer unique discourses than the other Gospels, his distinctive
        narrative techniques create a powerful presentation of Jesus's identity and mission.
        These techniques include the use of the "Messianic secret," the "sandwich" technique of
        intercalating stories, and the emphasis on irony as a literary device.</p>

    <section class="story-box">
        <p class="paragraphStoryBox">The Messianic Secret refers to Jesus's frequent commands in Mark's Gospel for
            people
            to remain silent about his identity and miracles. After healing a leper, Jesus
            "<strong>strictly warned him</strong>" and sent him away with the command "<strong>See that you say
                nothing to
                anyone</strong>"
            <small><a href="../../eng-web_html/MRK01.htm#:~:text=He strictly warned him and immediately sent him out%2C,which Moses commanded%2C for a testimony to them."
                    title="Mark 1:43-44"><ruby>Mark<rt>1:43-44</rt></ruby></a></small>.
            After raising Jairus's daughter, Jesus "<strong>commanded them strictly that no one should know
                it</strong>"
            <small><a href="../../eng-web_html/MRK05.htm#:~:text=He strictly ordered them that no one should know this%2C and commanded that something should be given to her to eat."
                    title="Mark 5:43"><ruby>Mark<rt>5:43</rt></ruby></a></small>.
            After Peter's confession of Jesus as the Christ,
            Jesus "<strong>strictly warned them that they should tell no one about Him</strong>"
            <small><a href="../../eng-web_html/MRK08.htm#:~:text=He commanded them that they should tell no one about him."
                    title="Mark 8:30"><ruby>Mark<rt>8:30</rt></ruby></a></small>. This
            pattern of secrecy has been variously interpreted, but it serves Mark's narrative purpose
            of gradually revealing Jesus's identity while explaining why Jesus was not more widely
            recognized as Messiah during his lifetime. The secret creates narrative tension and
            emphasizes that Jesus's identity can be fully understood only in light of his suffering,
            death, and resurrection.
        </p>

        <p>The "Sandwich" Technique refers to Mark's characteristic practice of beginning
            one
            story, interrupting it with another, and then returning to complete the first. Examples
            include the healing of Jairus's daughter interrupted by the healing of the woman with
            the issue of blood <a href="../../eng-web_html/MRK05.htm#:~:text=When Jesus had crossed back over in the,something should be given to her to eat."
                title="Mark 5:21-43">Mark 5:21-43</a>, the cursing of the fig tree interrupted
            by the cleansing
            of the temple <a href="../../eng-web_html/MRK11.htm#:~:text=The next day%2C when they had come out,in heaven%2C may also forgive you your transgressions."
                title="Mark 11:12-25">Mark 11:12-25</a>, and the commissioning of the twelve interrupted by the
            account of Jesus's family seeking him <a
                href="../../eng-web_html/MRK03.htm#:~:text=He went up into the mountain and called,God is my brother%2C my sister%2C and mother." title="Mark 3:13-35">Mark
                3:13-35</a>. This technique creates
            connections between the intercalated stories, suggesting interpretive links between
            them. The technique also builds suspense and emphasizes Mark's theme of interruption
            and unexpected developments in the journey of discipleship.</p>

        <p>Irony serves as a significant literary device in Mark's Gospel, particularly in the passion
            narrative. The soldiers who mock Jesus as king unwittingly proclaim the truth about his
            identity. <small><a href="../../eng-web_html/MRK15.htm#:~:text=The soldiers led him away within the court%2C,They led him out to crucify him."
                    title="Mark 15:16-20"><ruby>Mark
                        <rt>15:16-20</rt>
                    </ruby></a></small> The religious leaders who challenge Jesus to come down from the cross to
            prove his identity fail to recognize that his remaining on the cross is the ultimate
            demonstration of his messianic mission. <small><a
                    href="../../eng-web_html/MRK15.htm#:~:text=Likewise%2C also the chief priests mocking among themselves,Those who were crucified with him also insulted him."
                    title="Mark 15:31-32"><ruby>Mark
                        <rt>15:31-32</rt>
                    </ruby></a></small> The centurion's confession "<strong>Truly this Man was the Son
                of God!</strong>"
            <small><a href="../../eng-web_html/MRK15.htm#:~:text=When the centurion%2C who stood by opposite him%2C saw that he cried out like this and breathed his last%2C he said%2C “Truly this man was the Son of God!” There were also women watching from afar%2C among whom were both Mary Magdalene and Mary the mother of James the less and of Joses%2C and Salome; who%2C when he was in Galilee%2C followed him and served him; and many other women who came up with him to Jerusalem."
                    title="Mark 15:39"><ruby>Mark
                        <rt>15:39</rt>
                    </ruby></a></small> represents the ironic recognition by a Gentile soldier of
            what Israel's religious leaders failed to see. This use of irony creates a sense of dramatic
            tension and invites readers to see beyond surface appearances to the deeper truth of
            Jesus's identity and mission.
        </p>
    </section>

    <h2><span class="emoji">🏃</span>Mark's Distinctive Emphases</h2>
    <p>While Mark contains fewer unique discourses than the other Gospels, his narrative
        presents several distinctive emphases that contribute significantly to our understanding
        of Jesus's ministry and message.</p>
    <section class="highlight-box">

        <p><a href="https://www.sermonnotebook.org/mark/Mark%2000%20-%20Series%20Introduction.htm"
                title="https://www.sermonnotebook.org/">The Suffering Servant</a> represents Mark's primary
            christological emphasis. The Gospel's
            central section (<a href="../../eng-web_html/MRK08.htm#:~:text=Jesus went out%2C with his disciples%2C into the,disciples and came into the region of Dalmanutha."
                title="Mark 8:27-10:45">Mark 8:27</a>-10:45) is structured around three passion predictions, each
            followed by teaching about the nature of discipleship as sharing in Jesus's suffering and
            service. The explicit statement that the Son of Man came "<strong>to give His life a ransom for
                many</strong>" <a href="../../eng-web_html/MRK10.htm#:~:text=For the Son of Man also came not to be served but to serve%2C and to give his life as a ransom for many.” They came to Jericho."
                title="Mark 10:45"><ruby>Mark
                    <rt>10:45</rt>
                </ruby></a> establishes sacrificial service as the heart of Jesus's mission and the
            model for his followers. This emphasis on suffering service rather than triumphant rule
            distinguishes Mark's presentation of Jesus from contemporary expectations of the
            Messiah as a political liberator.</p>

        <p><a href="https://integratedcatholiclife.org/2024/01/the-cost-of-discipleship/"
                title="https://integratedcatholiclife.org">The Cost of Discipleship</a> receives particular emphasis
            in Mark's Gospel. Following each
            passion prediction, Jesus teaches about the nature of discipleship in terms that parallel
            his own suffering mission. After the first prediction, he teaches that "<strong>whoever desires to
                come after Me, let him deny himself, and take up his cross, and follow Me</strong>".
            <small><a href="../../eng-web_html/MRK08.htm#:~:text=He called the multitude to himself with his disciples and said to them%2C “Whoever wants to come after me%2C let him deny himself%2C and take up his cross%2C and follow me."
                    title="Mark 8:34"><ruby>Mark
                        <rt>8:34</rt>
                    </ruby></a></small>
            After the second, he teaches that "<strong>if anyone desires to be first, he shall be last of all and
                servant of all</strong>".
            <small><a href="../../eng-web_html/MRK09.htm#:~:text=He sat down and called the twelve; and he said to them%2C “If any man wants to be first%2C he shall be last of all%2C and servant of all.” He took a little child and set him in the middle of them."
                    title="Mark 9:35"><ruby>Mark
                        <rt>9:35</rt>
                    </ruby></a></small>
            After the third, he teaches that "<strong>whoever desires to become
                great among you shall be your servant</strong>".
            <small><a href="../../eng-web_html/MRK10.htm#:~:text=But it shall not be so among you%2C but whoever wants to become great among you shall be your servant."
                    title="Mark 10:43"><ruby>Mark
                        <rt>10:43</rt>
                    </ruby></a></small>
            This consistent pattern establishes discipleship as participation in Jesus's suffering service rather
            than a path to prestige or power.
        </p>

        <p>The Failure of the Disciples receives more emphasis in Mark than in the other Gospels.
            Mark frequently notes the disciples' lack of understanding (Mark <a
                href="../../eng-web_html/MRK04.htm#:~:text=He said to them%2C “Don’t you understand this parable?">4:13</a>,
            <a href="../../eng-web_html/MRK06.htm#:~:text=for they hadn’t understood about the loaves%2C but their hearts were hardened.">6:52</a>,
            <a href="../../eng-web_html/MRK08.htm#:~:text=Jesus%2C perceiving it%2C said to them%2C “Why do,He asked them%2C “Don’t you understand yet?">8:17-21</a>),
            their inappropriate responses to Jesus's teaching (Mark <a
                href="../../eng-web_html/MRK08.htm#:~:text=He spoke to them openly.,things of God%2C but the things of men.">8:32-33</a>,
            <a href="../../eng-web_html/MRK09.htm#:~:text=He came to Capernaum%2C and when he was,on the way about who was the greatest.">9:33-34</a>,
            <a href="../../eng-web_html/MRK10.htm#:~:text=James and John%2C the sons of Zebedee%2C came,one at your left hand%2C in your glory.">10:35-37</a>), and
            their ultimate desertion at his arrest (Mark <a
                href="../../eng-web_html/MRK14.htm#:~:text=They all left him%2C and fled.">14:50</a>).
            This emphasis on discipleship failure serves several purposes: it creates a realistic portrait of the
            challenges of following
            Jesus, it emphasizes the necessity of divine grace rather than human achievement in
            discipleship, and it offers hope to Mark's readers who may be experiencing their own
            failures in following Christ. The fact that these same failed disciples became the leaders
            of the early church demonstrates the transformative power of the resurrection and the
            Spirit.
        </p>

        <p>The Present Reality of the Kingdom receives particular emphasis in Mark's
            presentation of Jesus's teaching. While not ignoring future aspects of the kingdom, Mark
            emphasizes its present manifestation in Jesus's ministry of healing, exorcism, and
            teaching. The declaration that "the kingdom of God has come near" <small><a
                    href="../../eng-web_html/MRK01.htm#:~:text=and saying%2C “The time is fulfilled%2C and God’s Kingdom is at hand!"><ruby>Mark
                        <rt>1:15</rt>
                    </ruby></a></small>
            establishes the immediacy of God's reign in Jesus's person and work. The emphasis on
            Jesus's authority over demons, disease, and natural forces demonstrates the kingdom's
            power breaking into the present world order. This emphasis on the kingdom's present
            reality creates a sense of urgency about response and establishes discipleship as
            participation in God's current work rather than merely preparation for a future reality.</p>
    </section>


    <h2><span class="emoji">🏃</span>Mark's Theological Contribution</h2>

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
</section>

    <?php
/*
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
*/
    elseif (isset($_GET['conclusion'])):
/*
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
                                                            །† ͝ ︶ ͝ ꒷꒦︶︶︶︶︶꒷꒦︶︶︶︶︶꒦꒷ ͝ ︶ ͝ †། ·̩͙
*/
?>
    <section id="^" class="section fullbar" data-section="Conclusion">
        <nav class="crumbs">
            <div class="bread-crumbs">
                <a href="../#^" class="crumb-link">Jesus Christ</a>
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
        <p>Now that we've looked at all <a href="https://overviewbible.com/four-gospels/"title="https://overviewbible.com">four Gospel books</a>,
        we can see how they work together like pieces of a puzzle.
        Each one shows us something special about Jesus and His teachings.</p>

        <p>Jesus's teachings, as captured in the <a href="https://bibleproject.com/articles/what-is-the-sermon-on-the-mount/"title="https://bibleproject.com">
            Sermon on the Mount</a> and throughout His ministry, present a revolutionary spiritual and ethical framework centered on
            <a href="https://www.gotquestions.org/kingdom-of-God.html"title="https://www.gotquestions.org">the Kingdom of God</a>.
            This Kingdom isn't merely a future hope but a present reality that transforms how we live now.
            From the Beatitudes to the parables, Jesus consistently emphasized that God's reign brings an inversion of worldly values.</p>

        <p><span style="font-size: 1.2em;">The core of Jesus's message revolves around
            <a href="https://gferichsen.medium.com/the-two-great-commandments-are-they-one-and-the-same-29c1922aef47"title="https://medium.com/">
                two inseparable commandments</a>: <b>wholehearted love for God and
            selfless love for others—even enemies.</b></span> This radical ethic manifests in forgiveness, generosity, humility,
            and service. His teachings challenge followers to move beyond religious performance toward authentic relationship with
            God and compassionate engagement with humanity.</p>

        <p>Jesus embodied these teachings through His own life of service, ultimately demonstrating the depth of divine love
            through self-sacrifice. His invitation remains open today: to seek first God's Kingdom and righteousness,
            trusting in divine provision while actively participating in bringing glimpses of heaven's justice, mercy, and love.</p>

        <h3 class="subsection-title"><span class="emoji">🧩</span>How the Gospels Work Together</h3>
        <div class="highlight-box">
            <p><strong><a href="?Matthew#^">Matthew</a></strong> is like a great teacher who organizes everything perfectly. He shows us
                what
                Jesus taught about how to live good lives, how to treat others, and how to get ready for Jesus
                to come
                back.</p>
            <p><strong><a href="?Mark#^">Mark</a></strong> is like an exciting storyteller who shows us Jesus in action. He helps us
                see that
                Jesus has real power and that following Him is an adventure that requires courage and faith.</p>
            <p><strong><a href="?Luke#^">Luke</a></strong> is like a caring friend who makes sure everyone feels included. He shows us
                that
                Jesus loves everyone, especially people who are poor, sad, or left out.</p>
            <p><strong><a href="?John#^">John</a></strong> is like a wise teacher who helps us understand the deep truths about who
                Jesus
                really is. He shows us that Jesus is God's son who came to save us and give us eternal life.</p>
        </div>

        <h3 class="subsection-title"><span class="emoji">⭐</span>The Most Important Things Jesus Taught</h3>
        <div class="story-box">
            <p class="paragraphStoryBox">When we put all four Gospels together, we can see the most important things Jesus wants us to
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

        <h3 class="subsection-title"><span class="emoji">🌈</span>
        Your Next Steps
        <span style="transform: rotate(90deg); display: inline-block;" class="emoji">🌈</span></h3>
        <p>Now that you know about Jesus's amazing teachings, here are some things you can do:</p>
        <ul style="margin-left: 20px;">
            <li><strong>Read the Bible:</strong> Start reading the Gospel books for yourself. You might want to start with Mark since it's the shortest and most action-packed.</li>
            <li><strong>Pray:</strong> Talk to God every day. Thank Him for His love, ask Him to help you follow Jesus, and pray for other people.</li>
            <li><strong>Be Kind:</strong> Look for ways to be kind and helpful to others, especially people who might be sad, lonely, or in need.</li>
            <li><strong>Learn More:</strong> Keep learning about Jesus by going to church, Sunday school, or Bible study.</li>
            <li><strong>Tell Others:</strong> Share what you've learned about Jesus's love with your friends and family.</li>
        </ul>

        <div class="highlight-box">
            <p>Remember, following Jesus isn't about being perfect - it's about loving God and others and trying to live the way Jesus taught us.
                When we make mistakes (and we all do), we can ask God to forgive us, and He will!
            <blockquote><ruby><rt>7</rt></ruby> “Ask, and it will be given you. Seek, and you will find. Knock, and it will be opened for you.
                <ruby><rt>8</rt></ruby> For everyone who asks receives. He who seeks finds. To him who knocks it will be opened.
                <a href="../../eng-web_html/MAT07.htm#:~:text=Ask%2C and it will be given you.,To him who knocks it will be opened."><ruby class="rtl">Matthew<rt>7:7-8</rt></ruby></a></blockquote>
            </p>
            <p>Jesus's teachings show us that God loves us so much that He sent His son to save us. That's the most
                amazing news in the world, and it's available to everyone who believes in Jesus. What a wonderful gift!
            </p>
        </div>

        <hr class="section-divider">
            <h2 class="section-title"><span class="emoji">🔍</span>The Theological Significance of the Diversity</h2>
            <div class="story-box">
            <p class="paragraphStoryBox">The diversity in the Gospel presentations of Jesus's teachings reflects several important
                theological principles. First, it demonstrates the richness and complexity of Jesus's ministry, which cannot
                be adequately captured by any single perspective or approach. The different emphases of the
                evangelists reveal different aspects of Jesus's identity and mission, creating a comprehensive portrait that
                addresses the varied needs and concerns of different audiences and contexts.</p>
            <p>Second, the diversity reflects the principle of divine accommodation, whereby God's revelation is adapted
                to the specific needs and capacities of different recipients.
                <ul style="list-style-type: circle;padding-left: 20px;font-size: larger;"><li>Matthew's systematic organization serves readers who need clear ethical and doctrinal guidance.</li>
                <li>John's theological depth serves those seeking to understand the mysteries of faith.</li>
                <li>Luke's social emphasis serves those concerned with justice and inclusion.</li>
                <li>Mark's action-oriented approach serves those who need to see faith demonstrated in practice.</li></ul></p>
            <p>Third, the diversity demonstrates the ongoing relevance of Jesus's teachings for different
                situations and challenges. The varied presentations ensure that readers in different circumstances can find
                guidance and encouragement appropriate to their needs. Those facing persecution can find strength in
                Mark's emphasis on the suffering servant, those struggling with social justice issues can find
                direction in Luke's concern for the marginalized, those needing doctrinal clarity can find guidance in
                Matthew's systematic teaching, and those seeking deeper spiritual understanding can find illumination in
                John's theological discourses.</p>
                <h3 class="section-title"><span class="emoji">🤝</span>The Unity Underlying the Diversity</h3>
                <p>The <a href="https://en.wikipedia.org/wiki/Unity_in_diversity"title="Wikipeida">unity underlying the diversity</a>
                is perhaps most clearly seen in the shared emphasis on Jesus's death and resurrection as the climax of his ministry.
                While the Gospels differ in their presentation of Jesus's teachings, they are unanimous in their emphasis on his sacrificial death as the means of salvation
                and his resurrection as the vindication of his claims and the foundation of Christian hope. This shared emphasis
                establishes the cross and resurrection as the interpretive key for understanding all of Jesus's teachings,
                whether they focus on ethics, theology, social justice, or spiritual practice.</p>
            </div>
            <section class="highlight-box">
        <h2 class="section-title"><span class="emoji">📝</span>Implications for Contemporary Study and
            Application</h2>
        <p>The complementary nature of the Gospel presentations has important implications for contemporary
            study and application of Jesus's teachings. First, it suggests the importance of studying all four Gospels
            rather than focusing exclusively on one or two. Each Gospel provides essential insights that complement and
            enrich the others, and a comprehensive understanding of Jesus's teaching ministry requires attention to all
            four perspectives.</p>
        <p>Second, it suggests the importance of <i>recognizing</i> the different emphases and purposes of each Gospel
            when interpreting specific passages. Understanding Matthew's systematic approach, John's theological depth,
            Luke's social concern, and Mark's action orientation helps readers appreciate why certain teachings appear
            in some Gospels but not others and why the same teachings may be presented differently in different accounts.</p>
        <p>Third, it suggests the importance of <i>applying</i> Jesus's teachings in ways that reflect the full range
            of Gospel emphases. Christian discipleship should include the ethical rigor emphasized by Matthew, the
            theological depth emphasized by John, the social concern emphasized by Luke, and the practical action emphasized
            by Mark. A balanced Christian life requires attention to all these dimensions rather than focusing
            exclusively on one aspect of Jesus's teaching.</p>
            </section>

        <h2 class="section-title"><span class="emoji">🌟</span>The Continuing Relevance of Jesus's Teachings
        </h2>
        <p>The sermons and discourses of Jesus recorded in the four Gospels continue to provide essential
            guidance for Christian faith and practice nearly two millennia after they were first spoken. The ethical
            principles established in the Sermon on the Mount continue to challenge conventional values and call believers
            to a higher standard of righteousness. The theological insights revealed in John's discourses continue to
            illuminate the mysteries of faith and provide comfort and assurance to believers facing doubt or difficulty.
            The social concerns addressed in Luke's unique parables continue to challenge the church to care for the
            marginalized and work for justice in society. The call to costly discipleship emphasized in Mark continues
            to remind believers that following Jesus involves sacrifice and service rather than merely personal benefit.
        </p>
        <p>The enduring relevance of Jesus's teachings reflects their divine origin and their address to
            fundamental human needs and concerns that transcend cultural and temporal boundaries. The questions addressed by
            Jesus—how to live righteously, how to relate to God, how to treat others, how to face suffering and
            death—remain central to human existence in every generation. The answers provided by Jesus—through
            faith, love, mercy, and sacrificial service—continue to offer hope and guidance to all who seek authentic
            relationship with God and meaningful existence in the world.</p>
        <p>The study of Jesus's sermons and discourses thus remains essential for anyone seeking to understand
            the Christian faith or to live according to its principles. The four Gospels together provide a
            comprehensive
            curriculum for Christian discipleship that addresses every aspect of human existence and every
            challenge of faithful living. The diversity of their presentations ensures that readers in every circumstance can
            find relevant guidance, while the unity of their witness ensures that this guidance is grounded in the
            authoritative teaching of Jesus Christ, the Word made flesh, who came to reveal God's will and provide the
            way of salvation for all humanity.</p>
<h2 class="section-title"><span class="emoji">🎯</span>Conclusion: The Complementary Nature of the Gospel Presentations</h2>
        <p>The examination of Jesus's sermons and discourses across the four Gospels reveals the remarkable
            complementary nature of these accounts. Rather than simply duplicating material, each evangelist
            selected and organized Jesus's teachings according to their specific theological purposes and audience needs,
            creating a multifaceted portrait of Jesus as teacher that is far richer than any single account could provide.</p>

        <h3 class="subsection-title"><span class="emoji">📚</span>The Unique Contributions of Each Gospel</h3>
            <h4><strong><a href="?Matthew#^">Matthew's Contribution</a></strong></h4>
            <p>Matthew's contribution lies in his systematic organization of Jesus's teachings into five major discourses that establish the ethical, ecclesiological, and eschatological foundations of Christian faith.</p>
            <p>The <a href="?Matthew#Sermon on the Mount">Sermon on the Mount</a> provides the fundamental principles of Christian discipleship, the
                <a href="?Matthew#The Mission Discourse">Mission Discourse</a> establishes guidelines for Christian ministry, the
                <a href="?Matthew#The Parabolic Discourse">Parabolic Discourse</a> reveals the mysteries of the Kingdom of Heaven, the
                <a href="?Matthew#The Discourse on the Church">Church Discourse</a> addresses community life and governance, and the
                <a href="?Matthew#The Olivet Discourse">Olivet Discourse</a> warns of coming judgment while calling for vigilance and faithfulness.</p>
            <p>Matthew's emphasis on Jesus as the authoritative teacher and interpreter of God's law makes his Gospel
                the primary source for Christian ethics and doctrine.</p>

            <h4><strong><a href="?John#^">John's Contribution</a></strong></h4>
            <p>John's contribution lies in his presentation of extended theological discourses that explore the deepest
                questions about Jesus's identity, his relationship with the Father, and the nature of salvation through
                faith in him. The discourses with <a href="?John#The New Birth"title="The New Birth">Nicodemus</a>,
                <a href="?John#Living Water"title="Living Water">the Samaritan woman</a>, and others establish the necessity of
                spiritual transformation, while <a href="?John#The Bread of Life"title="The Bread of Life">the Bread of Life discourse</a>,
                <a href="?John#The Good Shepherd"title="The Good Shepherd">the Good Shepherd teaching</a>, and the
                <a href="?John#The Farewell Discourse"title="The Farewell Discourse">Farewell Discourse</a>
                provide profound insights into the nature of spiritual life and the resources
                available to believers. John's emphasis on Jesus as the divine revealer of God makes his Gospel
                essential for understanding Christian theology and spirituality.</p>

            <h4><strong><a href="?Luke#^">Luke's Contribution</a></strong></h4>
            <p>Luke's contribution lies in his emphasis on Jesus's ministry to the marginalized and his concern for
                social justice, mercy, and inclusion. The unique parables of <a href="?Luke#TheGoodSamaritan">the Good Samaritan</a>,
                <a href="?Luke#TheProdigalSon">the Prodigal Son</a>,
                <a href="?Luke#TheRichManAndLazarus">the Rich Man and Lazarus </a>, and others establish compassion as the defining attribute of God and the
                primary virtue for believers. Luke's <a href="?Luke#Emphasis on Prayer and the Holy Spirit">emphasis on prayer, the Holy Spirit</a>, and the universal scope of the
                Gospel makes his account essential for understanding the inclusive nature of God's kingdom and the
                spiritual resources available for Christian mission.</p>
            <h4><strong><a href="?Mark#^">Mark's Contribution</a></strong></h4>
            <p>Mark's contribution lies in his action-oriented presentation of Jesus as the suffering servant whose identity is
                revealed through powerful deeds rather than extended discourses.
                The emphasis on the cost of discipleship, the failures of the first disciples, and the present reality of God's kingdom creates
                a realistic portrait of the challenges and possibilities of following Jesus.
                Mark's fast-paced narrative style and focus on Jesus's actions make his Gospel particularly effective for demonstrating
                the integration of faith and practice in authentic Christian living.</p>


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
                <span>Public Square Magazine. "Unearthing the Overlooked Gems of Luke's Sermon on the Plain." Public
                    Square
                    Magazine. Accessed June 7, 2025.</span>
                <br /><a
                    href="https://publicsquaremag.org/faith/gospel-fare/unearthing-the-overlooked-gems-of-lukes-sermon-on-the-plain/">
                    https://publicsquaremag.org/faith/gospel-fare/unearthing-the-overlooked-gems-of-lukes-sermon-on-the-plain/</a>
            </div>

            <div class="reference" id="[8]">
                <strong>[8]</strong>
                <span>Quora. "Is it accurate that the gospel of Luke contains 17 unique parables of Jesus?" Quora.
                    Accessed
                    June 7, 2025.</span>
                <br /><a
                    href="https://www.quora.com/Is-it-accurate-that-the-gospel-of-Luke-contains-17-unique-parables-of-Jesus">
                    https://www.quora.com/Is-it-accurate-that-the-gospel-of-Luke-contains-17-unique-parables-of-Jesus</a>
            </div>

            <div class="reference" id="[9]">
                <strong>[9]</strong>
                <span>"The Sermons and Discourses of Jesus Christ: A Comprehensive Guide Organized by Gospel" By Manus
                    AI.
                    Created Access June 11, 2025.</span>
                <br /><a href="../_JesusChrist/TeachingsReferenceNine%20Jesus_Christ_Sermons_and_Discourses_Guide.pdf">
                    Jesus_Christ_Sermons_and_Discourses_Guide.pdf</a>
            </div>
    </section>
    <?php






    else:
        //This is the main introduction to the page, even before the introduction. maybe is some sort of prologue.




?>
    <section class="section fullbar" data-section="Teachings-Main Page">
        <nav class="crumbs">
            <div class="bread-crumbs">
                <a href="../#^" class="crumb-link">Jesus Christ</a>
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
            culture. Below are some of His most important lessons that continue to inspire millions around the world.
        </p>

        <details class="highlight-box">
            <summary>
                Peacemakers
            </summary>
            <p>Going along with humility, in <a href="../../eng-web_html/MAT05.htm#:~:text=Blessed are the peacemakers%2C for they shall be called children of God."
                    title="Matthew 5:9">
                    Matthew 5:9</a>Jesus says, "Blessed are the peacemakers, for they will be
                called children of God." Yes, this means those who help to pacify conflicts between others, but it
                surely
                also
                includes avoiding conflicts between oneself and others as well.</p>
            <blockquote class="story-box"><br />
                "You have heard that it was said, 'Eye for eye, and tooth for tooth.' But I say to you, do not show
                opposition against an evil person; but whoever slaps you on your right cheek, turn the other toward him
                also. And
                if anyone wants to sue you and take your tunic, let him have your cloak also. Whoever forces you to go
                one
                mile,
                go with him two. Give to him who asks of you, and do not turn away from him who wants to borrow from
                you."
                <a href="../../eng-web_html/MAT05.htm#:~:text=“You have heard that it was said%2C ‘An eye for an eye%2C and a tooth for a tooth.’ But I tell you%2C don’t resist him who is evil; but whoever strikes you on your right cheek%2C turn to him the other also."
                    title="Matthew 5:38"><small><ruby>Matthew<rt>5:38</rt></ruby></small></a>
            </blockquote>
            <p>Why is it important to embrace peace rather than conflict? Jesus teaches that peacemaking reflects the
                very character of God Himself. By choosing reconciliation over retaliation, we demonstrate we are truly
                children of the divine Father who offers grace even to those who oppose Him. When we refuse to
                perpetuate
                cycles of violence—even when justified by worldly standards—we participate in the revolutionary ethic of
                the
                Kingdom where enemies become neighbors and hatred is overcome by love.</p>
            <p>Jesus concludes this teaching by embodying it perfectly at the cross, where He prays for His persecutors
                rather than calling down heavenly vengeance. This ultimate demonstration of peaceful resistance
                transforms
                human history and reveals that God's power operates not through domination but through self-giving love
                that
                absorbs violence without returning it. In this way, peacemakers don't merely avoid conflict—they
                actively
                create
                new possibilities for reconciliation that mirror God's own redemptive work in the world.</p>
        </details>


        <details class="highlight-box">
            <summary>
                Let your light shine
            </summary>
            <p>Jesus uses a powerful metaphor of light to explain the visible impact His followers should have:</p>
            <blockquote class="story-box"><br />
                "You are the light of the world. A city built on a hill cannot be hid. People do not light a lamp and
                put it under the bushel basket; rather, they put it on the lampstand, and it gives light to all in the
                house.
                In the same way, let your light shine before others, so that they may see your good works and give glory
                to
                your Father in heaven."
                <a href="../../eng-web_html/MAT05.htm#:~:text=“You are the light of the world."
                    title="Matthew 5:14"><small><ruby>Matthew<rt>5:14</rt></ruby></small></a>
            </blockquote>
            <p>This teaching reveals the inherently public nature of authentic discipleship. Just as light naturally
                illuminates darkness, genuine Kingdom living inevitably influences the surrounding culture. Jesus
                declares
                that His
                followers possess transformative potential—not to attract attention to themselves, but to redirect that
                attention toward God.</p>
            <p>The imagery of a city on a hill and a lamp on a stand emphasizes that Christian witness should be visible
                and accessible. Disciples aren't called to isolation or to hide their Kingdom values, but rather to
                demonstrate them openly through concrete actions of justice, mercy, and love. This visibility isn't
                self-promotion but
                divine testimony—the ultimate purpose is that others "give glory to your Father in heaven."</p>
            <p>This teaching connects to Jesus's broader mission of inaugurating God's Kingdom. As His followers embody
                Kingdom ethics—generosity, reconciliation, truthfulness, and compassion—they provide glimpses of God's
                coming
                reign and invite others to participate in this new reality. Their lives become living invitations to
                experience
                the transformative power of God's presence in the world.</p>
        </details>


        <details class="highlight-box">
            <summary>
                Love Your Enemies
            </summary>
            <blockquote class="story-box"><br />
                "You have heard that it was said, 'Love your neighbor and hate your enemy.' But I tell you, love your
                enemies
                and pray for those who persecute you, that you may be children of your Father in heaven. He causes his
                sun
                to
                rise on the evil and the good, and sends rain on the righteous and the unrighteous. If you love those
                who
                love
                you, what reward will you get? Are not even the tax collectors doing that?
                And if you greet only your own people, what are you doing more than others?
                Do not even pagans do that? Be perfect, therefore, as your heavenly Father is perfect."
                <a href="../../eng-web_html/MAT05.htm#:~:text=“You have heard that it was said%2C ‘You shall love your neighbor and hate your enemy.’ But I tell you%2C love your enemies%2C bless those who curse you%2C do good to those who hate you%2C and pray for those who mistreat you and persecute you%2C that you may be children of your Father who is in heaven."
                    title="Matthew 5:43"><small><ruby>Matthew<rt>5:43</rt></ruby></small></a>
            </blockquote>
            <p>In this revolutionary teaching, Jesus challenges the conventional wisdom of His time. While the cultural
                norm allowed for loving one's community while harboring hatred toward enemies, Jesus introduces a
                radical
                ethic of universal love that extends even to those who persecute us. This teaching represents one of the
                most
                challenging and distinctive aspects of Jesus's moral philosophy.</p>
            <p>This principle of unconditional love remains one of Jesus's most profound and difficult teachings. By
                calling us to imitate God's impartial benevolence, Jesus establishes a standard that transcends natural
                human
                inclinations and cultural boundaries. This teaching continues to challenge believers to rise above
                retribution
                and cultivate a love that reflects the perfect love of the heavenly Father.</p>
        </details>


        <details class="highlight-box">
            <summary>
                Forgive
            </summary>
            <blockquote class="story-box"><br />
                "And when you pray, you shall not be like the hypocrites.
                For they love to pray standing in the synagogues and on the corners of the streets, that they may be
                seen by
                men.
                Assuredly, I say to you, they have their reward.
                But you, when you pray, go into your room, and when you have shut your door, pray to your Father who is
                in
                the secret place;
                and your Father who sees in secret will reward you openly. And when you pray, do not use vain
                repetitions as
                the heathen do.
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
                <a href="../../eng-web_html/MAT06.htm#:~:text=In praying%2C don’t use vain repetitions as the Gentiles do; for they think that they will be heard for their much speaking."
                    title="Matthew 6:7"><small><ruby>Matthew<rt>6:7</rt></ruby></small></a>
            </blockquote>
            <p>In <a href="../../eng-web_html/MAT06.htm#:~:text=When you pray%2C you shall not be as,trespasses%2C neither will your Father forgive your trespasses."
                    title="Matthew 6:5-15">Matthew
                    6:5-15</a>,
                Jesus teaches about forgiveness as an essential spiritual practice. After instructing
                His disciples on how to pray with sincerity rather than for public approval, He provides the Lord's
                Prayer
                as a model. Central to this prayer is the concept of forgiveness—both receiving it from God and
                extending it
                to others.</p>
            <p>Jesus deliberately places forgiveness at the heart of spiritual life, creating a direct connection
                between how we treat others and how God treats us. The reciprocal nature of this teaching ("forgive
                us... as
                we forgive")
                establishes forgiveness not as optional but as fundamental to Christian discipleship. By emphasizing
                this principle immediately after the prayer itself, Jesus underscores that our relationship with God
                cannot
                be separated from our relationships with others.</p>
            <p>This teaching reveals that forgiveness is not merely an emotional release but a spiritual imperative that
                reflects God's character and determines our standing in His Kingdom. When we withhold forgiveness from
                others, we essentially reject the very mercy we seek from God, creating a spiritual barrier that
                prevents us
                from fully experiencing divine grace.</p>
        </details>


        <details class="highlight-box">
            <summary>
                Do Not Worry
            </summary>
            <blockquote class="story-box"><br />
                "Therefore I tell you, do not worry about your life, what you will eat or drink; or about your body,
                what
                you
                will wear. Is not life more than food, and the body more than clothes? Look at the birds of the air;
                they do
                not
                sow or reap or store away in barns, and yet your heavenly Father feeds them. Are you not much more
                valuable
                than
                they? Can any one of you by worrying add a single hour to your life?
                And why do you worry about clothes? See how the flowers of the field grow. They do not labor or spin.
                Yet I
                tell
                you that not even Solomon in all his splendor was dressed like one of these. If that is how God clothes
                the
                grass of the field, which is here today and tomorrow is thrown into the fire, will he not much more
                clothe
                you—you of little faith? So do not worry, saying, 'What shall we eat?' or 'What shall we drink?' or
                'What
                shall
                we wear?' For the pagans run after all these things, and your heavenly Father knows that you need them.
                But
                seek
                first his kingdom and his righteousness, and all these things will be given to you as well. Therefore do
                not
                worry about tomorrow, for tomorrow will worry about itself. Each day has enough trouble of its own."
                <a href="../../eng-web_html/MAT06.htm#:~:text=Therefore I tell you%2C don’t be anxious for your life:,Each day’s own evil is sufficient."
                    title="Matthew 6:25-34"><small><ruby>Matthew<rt>6:25-34</rt></ruby></small></a>
            </blockquote>
            <p>In this teaching from <a href="../../eng-web_html/MAT06.htm#:~:text=Therefore I tell you%2C don’t be anxious for your life:,Each day’s own evil is sufficient."
                    title="Matthew 6:25-34">Matthew 6:25-34</a>,
                Jesus encourages us to trust in God's providence rather than being consumed by anxiety about material
                needs.
                By pointing to examples in nature, He reminds us that if God cares for the simplest creatures, He will
                certainly care for us.
                His children who are made in his image
                <small><a href="../../eng-web_html/GEN01.htm#:~:text=God created man in his own image."
                        title="Genesis 1:27">Genesis 1:27</a></small>
            </p>
        </details>


        <details class="highlight-box">
            <summary>
                The Golden Rule
            </summary>
            <blockquote class="story-box"><br />
                "Therefore, whatever you want men to do to you, do also to them, for this is the Law and the Prophets."
                <a href="../../eng-web_html/MAT07.htm#:~:text=Therefore%2C whatever you desire for men to do to you%2C you shall also do to them; for this is the law and the prophets."
                    title="Matthew 7:12"><small><ruby>Matthew<rt>7:12</rt></ruby></small></a>
            </blockquote>
            <p>This simple yet profound teaching appears in Jesus's Sermon on the Mount, embedded within a broader
                discourse
                about living righteously. The Golden Rule serves as a practical ethical framework that summarizes much
                of
                Jesus's moral teaching. It follows His instructions about prayer, judging others, and seeking God, and
                precedes
                His warnings about the narrow path to salvation.</p>
            <p>In context, Jesus presents this principle as the culmination of His teachings on how to treat
                others—after
                warning against harsh judgment, encouraging persistent prayer, and explaining God's generous nature. The
                rule
                isn't merely about reciprocity; it calls for proactive compassion and treating others with the same
                dignity,
                respect, and care we desire for ourselves.</p>
            <p>This teaching echoes throughout many religious traditions. Rabbi Hillel, a Jewish contemporary of Jesus,
                similarly taught: "What is hateful to you, do not do to your neighbor. That is the whole Torah; the rest
                is
                explanation." By connecting this principle to "the Law and the Prophets," Jesus affirms that loving
                others
                as
                ourselves fulfills the essence of God's commandments.</p>
        </details>


        <details class="highlight-box">
            <summary>
                Eye of The Needle
            </summary>
            <p>In this profound encounter, Jesus addresses the relationship between wealth and spiritual commitment:</p>
            <blockquote class="story-box"><br />
                "It is easier for a camel to go through the eye of a needle than for someone who is rich to enter the
                kingdom of God."
                <a href="../../eng-web_html/MAT19.htm#:~:text=Again I tell you%2C it is easier for a camel to go through a needle’s eye than for a rich man to enter into God’s Kingdom.” When the disciples heard it%2C they were exceedingly astonished%2C saying%2C “Who then can be saved?” Looking at them%2C Jesus said%2C “With men this is impossible%2C but with God all things are possible.” Then Peter answered%2C “Behold%2C we have left everything and followed you."
                    title="Matthew 19:24"><small><ruby>Matthew<rt>19:24</rt></ruby></small></a>
            </blockquote>
            <p>This teaching emerges from Jesus's interaction with a wealthy young man seeking eternal life. Despite his
                religious observance, the man's attachment to his possessions prevented him from following Jesus
                completely,
                although he was a devout follower of the law. When challenged to sell everything and give to the poor,
                the
                young
                ruler departed in sorrow, unable to relinquish his wealth.</p>
            <p>Jesus's statement about camels and needles isn't merely hyperbole—it reveals a fundamental spiritual
                principle
                about the incompatibility between material attachment and Kingdom values. The rich often face unique
                spiritual
                obstacles: self-sufficiency that diminishes reliance on God, attachment to worldly security, and the
                tendency to
                accumulate rather than distribute resources.</p>
            <p>However, Jesus balances this severe warning with hope: "With God all things are possible." While wealth
                creates
                significant spiritual barriers, divine grace can overcome even these obstacles. This teaching calls
                believers to
                examine their relationship with possessions and recognize that Kingdom citizenship demands radical
                generosity
                and detachment from material wealth. True discipleship may require significant sacrifice, but Jesus
                promises
                that whatever is surrendered for His sake will be restored "a hundredfold" in the economy of God's
                Kingdom.
            </p>
        </details>


        <details class="highlight-box">
            <summary>
                Humility and Service
            </summary>
            <p>Jesus teaches one of his most profound lessons on leadership and humility when responding to an ambitious
                request:</p>
            <blockquote class="story-box"><br />
                "You know that the rulers of the Gentiles lord it over them, and their high officials exercise authority
                over
                them. Not so with you. Instead, whoever wants to become great among you must be your servant, and
                whoever
                wants
                to be first must be your slave—just as the Son of Man did not come to be served, but to serve, and to
                give
                his
                life as a ransom for many." <a href="../../eng-web_html/MAT20.htm#:~:text=But Jesus summoned them%2C and said%2C “You know,give his life as a ransom for many."
                    title="Matthew 20:25"><small><ruby>Matthew<rt>20:25-28</rt></ruby></small></a>
            </blockquote>
            <p>This teaching emerges from a family's request for status and power. The mother of James and John
                approaches
                Jesus
                seeking privileged positions for her sons in his kingdom. When the other disciples become indignant at
                this
                attempt to secure special favor, Jesus transforms the moment into a revolutionary lesson on leadership.
            </p>
            <p>Jesus contrasts worldly leadership, characterized by dominance and authority, with Kingdom leadership,
                defined by
                service and self-sacrifice. In God's economy, greatness is measured not by how many serve you, but by
                how
                many
                you serve. This inverted hierarchy establishes servanthood as the path to spiritual significance.</p>
            <p>Most powerfully, Jesus presents himself as the ultimate example of this servant leadership. The incarnate
                God
                enters human history not to be waited upon but to meet human needs, ultimately surrendering his very
                life.
                This
                teaching challenges believers to reject power-seeking and embrace Christ-like humility that places
                others'
                needs
                above personal ambition and status.</p>
        </details>


        <details class="highlight-box">
            <summary>
                Love God Above All
            </summary>
            <p>When challenged by religious leaders about which commandment was greatest, Jesus responded with clarity:
            </p>
            <blockquote class="story-box"><br />
                "You shall love the Lord your God with all your heart and with all your soul and with all your mind.
                This is
                the
                greatest and first commandment."
                <a href="../../eng-web_html/MAT22.htm#:~:text=Jesus said to him%2C “ ‘You shall love the Lord your God with all your heart%2C with all your soul%2C and with all your mind.’ This is the first and great commandment."
                    title="Matthew 22:37"><small><ruby>Matthew<rt>22:37</rt></ruby></small></a>
            </blockquote>
            <p>This teaching emerged during a series of confrontations in Jerusalem, where various religious factions
                sought
                to
                trap Jesus with difficult questions. After silencing the Sadducees on the question of resurrection, a
                Pharisaic
                legal expert tested Jesus by asking which commandment was supreme. Jesus's answer reaffirmed the central
                Jewish
                prayer known as the Shema (Deuteronomy 6:5), establishing that wholehearted devotion to God transcends
                all
                other
                religious obligations.</p>
        </details>


        <details class="highlight-box">
            <summary>
                Love Your Neighbor
            </summary>
            <p>Immediately after stating the first commandment, Jesus added:</p>
            <blockquote class="story-box"><br />
                "And the second is like it: 'You shall love your neighbor as yourself.' On these two commandments hang
                all
                the
                Law and the Prophets."
                <a href="../../eng-web_html/MAT22.htm#:~:text=A second likewise is this%2C ‘You shall love your neighbor as yourself.’ The whole law and the prophets depend on these two commandments.” Now while the Pharisees were gathered together%2C Jesus asked them a question%2C saying%2C “What do you think of the Christ?"
                    title="Matthew 22:39"><small><ruby>Matthew<rt>22:39</rt></ruby></small></a>
            </blockquote>
            <p>Jesus inseparably linked love for God with love for others, declaring that these twin commandments form
                the
                foundation of all scriptural teaching. This revolutionary ethical principle called believers to extend
                the
                same
                care and consideration to others that they naturally afford themselves. Unlike Greco-Roman philosophical
                traditions that emphasized personal happiness or well-being, Jesus established selfless love as the
                defining
                characteristic of his followers—a radical standard that would require personal sacrifice and active
                compassion
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