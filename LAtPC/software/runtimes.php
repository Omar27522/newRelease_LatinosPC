<?php
/**
 * Runtimes Component
 * Modularized from software.php
 */

echo "<div class=\"fullbar\">";
sw_breadCrumbs();
echo "<h1>Runtimes</h1>";
echo "</div>";

$title = "Understanding Program Runtimes:<br />The Magic Behind Your Apps";

$question = "Ever wondered why some apps run smoothly while others feel sluggish? Or why the same game might run perfectly on your friend's phone but struggle on yours? The answer lies in something called \"runtime\" - the invisible conductor orchestrating everything your apps do.";

$links = [
    'programming' => 'https://en.wikipedia.org/wiki/History_of_programming_languages#Current_trends',
    'mobile' => 'https://en.wikipedia.org/wiki/Mobile_game',
    'next100Years' => 'https://www.nyas.org/ideas-insights/blog/imagining-the-next-100-years-of-science-and-technology/',
    'technicalDetails' => 'https://www.techtarget.com/searchsoftwarequality/definition/runtime'
];

$subtitles = [
    'What is Runtime? — Think of it as a Kitchen',
    'How Does Runtime Work?',
    '🌟 Fun Fact:',
    'Why Some Apps Run Better Than Others'
];

$kitchen = [
    'Imagine your computer as a busy restaurant kitchen:',
    'the' => 'The',
    'chef' => ['The chef', '(runtime environment)', 'coordinates everything'],
    'recipe' => ['The recipe', '(program code)', 'tells what needs to be done'],
    'ingredients' => ['The ingredients', '(data)', 'are what you\'re working with'],
    'tools' => ['The kitchen tools', '(system resources)', 'help get the job done'],
    'just' => 'Just like a kitchen needs all these elements working together to serve a meal, your apps need runtime to function!',
    'how' => 'Every <a href="' . $links['programming'] . '">programming language</a> needs its own special runtime environment. Think of it as different types of kitchens - a sushi restaurant needs different tools than a pizzeria, but they both make delicious food!'
];

$funFact = 'When you\'re playing a mobile game, the runtime is handling millions of tiny tasks every second - from making sure your character jumps when you tap, to keeping track of your score, all while making sure your phone\'s battery isn\'t drained too quickly!';

$complexity = [
    '1. App Complexity',
    'Simple apps (like a calculator) are like making toast - quick and easy. Complex games are like preparing a five-course meal - they need more time and resources!'
];

$devicePower = [
    '2. Your Device\'s Power',
    'Different devices have different capabilities:',
    'desktop' => ['🖥️ Desktop Computers:', 'Like a professional kitchen - lots of power and space'],
    'laptop' => ['💻 Laptops:', 'Like a home kitchen - good for most tasks'],
    'mobile' => ['📱 Mobile Devices:', 'Like a food truck kitchen - smaller but surprisingly capable!']
];

$future = [
    '🚀 The <a href="' . $links['next100Years'] . '">Future</a> is Exciting!',
    'Technology keeps getting better - imagine having the power of today\'s desktop computer in tomorrow\'s smartwatch! Many tech-companies are constantly developing new ways to pack more processing power into smaller spaces.'
];

$learnMore = [
    'Want to Learn More?',
    'If you\'re curious about how computers work, runtime is just the beginning! You might also be interested in:',
    'How programming languages work',
    'What makes some computers faster than others',
    'How games and apps are made',
    'The latest in computer chip technology'
];

$proTips = [
    '💡 Pro Tips for Better Runtime Performance',
    'Keep your device\'s operating system updated',
    'Close apps you\'re not using',
    'Make sure you have enough free storage space',
    'Choose apps that match your device\'s capabilities'
];

$deepDive = [
    'Want to Dive Deeper?',
    '<a href="' . $links['technicalDetails'] . '">Understanding Runtime (Technical Details)</a>',
    'Check out our other <a href="../#ps2">articles</a> about computer basics and advanced topics!'
];

?>
<article class="hero4">
    <div class="content_resize">
        <div class="fullbar">
            <h2 id="title"><?= empty($title) ? $titulo : $title; ?></h2>

            <div class="highlight-box">
                <p><?= empty($question) ? $pregunta : $question ?></p>
            </div>

            <h2><?= empty($title) ? $subtitulos[0] : $subtitles[0]; ?></h2>
            <p><?= empty($kitchen) ? $cocina[0] : $kitchen[0]; ?></p>
            <ul class="kitchen-analogy">
                <?php
                $activeArray = empty($kitchen) ? $cocina : $kitchen;
                $keys = empty($kitchen) ? ['chef', 'receta', 'ingredientes', 'herramientas'] : ['chef', 'recipe', 'ingredients', 'tools'];
                foreach ($keys as $key) :
                    echo '<li>';
                    echo $activeArray[$key][0] . ' '; // Article
                    echo '<strong>' . $activeArray[$key][1] . '</strong> '; // Parenthetical term
                    echo $activeArray[$key][2]; // Description
                    echo '</li>';
                endforeach;
                ?></ul>
            <p><?= empty($kitchen) ? $cocina['justo'] : $kitchen['just']; ?></p>

            <h2><?= empty($title) ? $subtitulos[1] : $subtitles[1]; ?></h2>
            <p><?= empty($kitchen) ? $cocina['como'] : $kitchen['how']; ?></p>

            <div class="fun-fact">
                <h3><?= empty($title) ? $subtitulos[2] : $subtitles[2]; ?></h3>
                <p><?= empty($funFact) ? $datoCurioso : $funFact; ?></p>
            </div>

            <h2><?= empty($title) ? $subtitulos[3] : $subtitles[3]; ?></h2>
            <h3><?= empty($complexity) ? $complejidad[0] : $complexity[0]; ?></h3>
            <div class="highlight-box">
                <p><?= empty($complexity) ? $complejidad[1] : $complexity[1]; ?></p>
            </div>

            <h3><?= empty($devicePower) ? $dispositivoPotencia[0] : $devicePower[0]; ?></h3>
            <p><?= empty($devicePower) ? $dispositivoPotencia[1] : $devicePower[1]; ?></p>

            <ul class="device-list">
                <?php $devices = ['desktop', 'laptop', 'mobile'];
                foreach ($devices as $device) : ?>
                    <li>
                        <strong><?= empty($devicePower) ? $dispositivoPotencia[$device][0] : $devicePower[$device][0]; ?></strong>
                        <?= empty($devicePower) ? $dispositivoPotencia[$device][1] : $devicePower[$device][1]; ?>
                    </li>
                <?php endforeach; ?>
            </ul>


            <div class="future-section">
                <h3><?= empty($future) ? $futuro[0] : $future[0]; ?></h3>
                <p><?= empty($future) ? $futuro[1] : $future[1]; ?></p>
            </div>

            <div class="learn-more">
                <h2><?= empty($learnMore) ? $aprendeMas[0] : $learnMore[0]; ?></h2>
                <p><?= empty($learnMore) ? $aprendeMas[1] : $learnMore[1]; ?></p>
                <ul>
                    <?php $learnMoreToShow = array_slice(empty($learnMore) ? $aprendeMas : $learnMore, 2);
                    foreach ($learnMoreToShow as $learn) : ?>
                        <li><?= $learn; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="pro-tip">
                <h3><?= empty($proTips) ? $consejosPro[0] : $proTips[0]; ?></h3>
                <ul>
                    <?php
                    $proTipsToShow = array_slice(empty($proTips) ? $consejosPro : $proTips, 1);
                    foreach ($proTipsToShow as $tip) : ?>
                        <li><?= $tip; ?></li>
                    <?php endforeach; ?>

                </ul>
            </div>

            <div class="references">
                <h3><?= empty($deepDive) ? $chapuzon[0] : $deepDive[0]; ?></h3>
                <ul>
                    <li><?= empty($deepDive) ? $chapuzon[1] : $deepDive[1]; ?></li>
                    <li><?= empty($deepDive) ? $chapuzon[2] : $deepDive[2]; ?></li>
                </ul>
            </div>
        </div>
    </div>
</article>
