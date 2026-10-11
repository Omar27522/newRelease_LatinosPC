<?php
/**
 * Runtimes Component
 * Modularized from software.php
 * Powered by SQLite laTpc.db ($content pool for 'software')
 */

include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;

$isSpanish = ($key === 'contenido');

// Dynamic Content & Links Resolver from SQLite laTpc.db ($content pool)
$rt = [];
$links = [];
foreach ($content as $item) {
    if (isset($item['name']) && str_starts_with($item['name'], 'rt_')) {
        $val = !empty($item[$key]) ? $item[$key] : ($item['content'] ?? '');
        if (str_starts_with($item['name'], 'rt_link_')) {
            $linkKey = str_replace('rt_link_', '', $item['name']);
            $links[$linkKey] = $val;
        } else {
            $rtKey = str_replace('rt_', '', $item['name']);
            $rt[$rtKey] = $val;
        }
    }
}

echo "<div class=\"fullbar\">";
if (function_exists('sw_breadCrumbs')) {
    sw_breadCrumbs();
}
echo "<h1>" . htmlspecialchars($rt['main_title'] ?? 'Runtimes') . "</h1>";
echo "</div>";

// Kitchen elements
$kitchen_elements = [
    ['label' => $rt['chef_label'] ?? 'The chef', 'paren' => $rt['chef_paren'] ?? '(runtime environment)', 'desc' => $rt['chef_desc'] ?? 'coordinates everything'],
    ['label' => $rt['recipe_label'] ?? 'The recipe', 'paren' => $rt['recipe_paren'] ?? '(program code)', 'desc' => $rt['recipe_desc'] ?? 'tells what needs to be done'],
    ['label' => $rt['ingred_label'] ?? 'The ingredients', 'paren' => $rt['ingred_paren'] ?? '(data)', 'desc' => $rt['ingred_desc'] ?? "are what you're working with"],
    ['label' => $rt['tools_label'] ?? 'The kitchen tools', 'paren' => $rt['tools_paren'] ?? '(system resources)', 'desc' => $rt['tools_desc'] ?? 'help get the job done'],
];

// Device power list
$devices_list = [
    ['label' => $rt['dev_desktop_label'] ?? '🖥️ Desktop Computers:', 'desc' => $rt['dev_desktop_desc'] ?? 'Like a professional kitchen - lots of power and space'],
    ['label' => $rt['dev_laptop_label'] ?? '💻 Laptops:', 'desc' => $rt['dev_laptop_desc'] ?? 'Like a home kitchen - good for most tasks'],
    ['label' => $rt['dev_mobile_label'] ?? '📱 Mobile Devices:', 'desc' => $rt['dev_mobile_desc'] ?? 'Like a food truck kitchen - smaller but surprisingly capable!'],
];

// Learn more items
$learn_items = [
    $rt['learn_item1'] ?? 'How programming languages work',
    $rt['learn_item2'] ?? 'What makes some computers faster than others',
    $rt['learn_item3'] ?? 'How games and apps are made',
    $rt['learn_item4'] ?? 'The latest in computer chip technology',
];

// Pro tips
$pro_tips = [
    $rt['protips_item1'] ?? "Keep your device's operating system updated",
    $rt['protips_item2'] ?? "Close apps you're not using",
    $rt['protips_item3'] ?? "Make sure you have enough free storage space",
    $rt['protips_item4'] ?? "Choose apps that match your device's capabilities",
];
?>

<article class="hero4">
    <div class="content_resize">
        <div class="fullbar">
            <h2 id="title"><?= $rt['sub_hero'] ?? 'Understanding Program Runtimes:<br />The Magic Behind Your Apps'; ?></h2>

            <div class="highlight-box">
                <p><?= htmlspecialchars($rt['question'] ?? ''); ?></p>
            </div>

            <h2><?= htmlspecialchars($rt['sub_kitchen'] ?? 'What is Runtime? — Think of it as a Kitchen'); ?></h2>
            <p><?= htmlspecialchars($rt['kitchen_intro'] ?? ''); ?></p>
            <ul class="kitchen-analogy">
                <?php foreach ($kitchen_elements as $el) : ?>
                    <li>
                        <?= htmlspecialchars($el['label']); ?>
                        <strong><?= htmlspecialchars($el['paren']); ?></strong>
                        <?= htmlspecialchars($el['desc']); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <p><?= htmlspecialchars($rt['kitchen_just'] ?? ''); ?></p>

            <h2><?= htmlspecialchars($rt['sub_how'] ?? 'How Does Runtime Work?'); ?></h2>
            <p><?= str_replace('{PROG_LINK}', htmlspecialchars($links['programming'] ?? '#'), $rt['kitchen_how'] ?? ''); ?></p>

            <div class="fun-fact">
                <h3><?= htmlspecialchars($rt['sub_funfact'] ?? '🌟 Fun Fact:'); ?></h3>
                <p><?= htmlspecialchars($rt['funfact'] ?? ''); ?></p>
            </div>

            <h2><?= htmlspecialchars($rt['sub_why'] ?? 'Why Some Apps Run Better Than Others'); ?></h2>
            <h3><?= htmlspecialchars($rt['complexity_title'] ?? '1. App Complexity'); ?></h3>
            <div class="highlight-box">
                <p><?= htmlspecialchars($rt['complexity_text'] ?? ''); ?></p>
            </div>

            <h3><?= htmlspecialchars($rt['device_title'] ?? "2. Your Device's Power"); ?></h3>
            <p><?= htmlspecialchars($rt['device_intro'] ?? ''); ?></p>

            <ul class="device-list">
                <?php foreach ($devices_list as $device) : ?>
                    <li>
                        <strong><?= htmlspecialchars($device['label']); ?></strong>
                        <?= htmlspecialchars($device['desc']); ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="future-section">
                <h3><?= str_replace('{FUTURE_LINK}', htmlspecialchars($links['next100Years'] ?? '#'), $rt['future_title'] ?? ''); ?></h3>
                <p><?= htmlspecialchars($rt['future_text'] ?? ''); ?></p>
            </div>

            <div class="learn-more">
                <h2><?= htmlspecialchars($rt['learn_title'] ?? 'Want to Learn More?'); ?></h2>
                <p><?= htmlspecialchars($rt['learn_intro'] ?? ''); ?></p>
                <ul>
                    <?php foreach ($learn_items as $learn) : ?>
                        <li><?= htmlspecialchars($learn); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="pro-tip">
                <h3><?= htmlspecialchars($rt['protips_title'] ?? '💡 Pro Tips for Better Runtime Performance'); ?></h3>
                <ul>
                    <?php foreach ($pro_tips as $tip) : ?>
                        <li><?= htmlspecialchars($tip); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="references">
                <h3><?= htmlspecialchars($rt['deepdive_title'] ?? 'Want to Dive Deeper?'); ?></h3>
                <ul>
                    <li>
                        <a href="<?= htmlspecialchars($links['technicalDetails'] ?? '#'); ?>" target="_blank" rel="noopener noreferrer">
                            <?= htmlspecialchars($rt['deepdive_link_label'] ?? 'Understanding Runtime (Technical Details)'); ?>
                        </a>
                    </li>
                    <li><?= $rt['deepdive_articles'] ?? 'Check out our other <a href="../#ps2">articles</a> about computer basics and advanced topics!'; ?></li>
                </ul>
            </div>
        </div>
    </div>
</article>
