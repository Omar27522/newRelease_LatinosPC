<?php
/**
 * Messaging Component
 * Modularized from software.php
 */

echo "<div class=\"fullbar\">";
sw_breadCrumbs();
echo "</div>";

$introduction = [
    'title' => 'Messaging',
    'content' => [
        'From the dawn of human civilization, the need to communicate has driven countless innovations. As societies evolved, so did their methods of communication, transitioning from smoke signals and carrier pigeons to telegraphs and telephones. With the advent of the internet in the late 20th century, a new era of instantaneous, global communication was born. <a href="https://www.scicommcollective.com/articles/sccsymposium/communicationmedia" title="Science Communication Through Art: The Universal Language">Communication</a>',
        'Aside from email, we can communicate instantaneously over the internet using a messaging program (APP), now days we can send attached video files, pictures, links and attachments over these apps. Most modern messaging applications offer private group chats, video/voice calling the person(s), make and accept payments, and of course, play games.',
        '"<i>Though the term dates from the 1990s, instant messaging predates the Internet, first appearing on multi-user operating systems like Compatible Time-Sharing System (CTSS) and Multiplexed Information and Computing Service (Multics)[12][13] in the mid-1960s. Initially, some of these systems were used as notification systems for services like printing, but quickly were used to facilitate communication with other users logged into the same machine. CTSS facilitated communication via text message for up to 30 people.[14] </i>"'
    ],
    'wiki_link' => 'https://en.wikipedia.org/wiki/Instant_messaging'
];

$links = [
    'sms' => 'https://en.wikipedia.org/wiki/SMS',
    'whatsApp' => 'https://www.whatsapp.com/',
    'facebookMessenger' => 'https://www.messenger.com/',
    'weChat' => 'https://www.wechat.com/en/',
    'telegram' => 'https://telegram.org/',
    'signal' => 'https://signal.org/',
    'iMessage' => 'https://en.wikipedia.org/wiki/IMessage',
    'googleChat' => 'https://workspace.google.com/products/chat/',
    'slack' => 'https://slack.com/',
    'microsoftTeams' => 'https://www.microsoft.com/en-us/microsoft-365/microsoft-teams/group-chat-software',
    'encryptionEnd2End' => 'https://en.wikipedia.org/wiki/End-to-end_encryption',
    'discord' => 'https://discord.com/',
    'snapchat' => 'https://www.snapchat.com/',
    'viber' => 'https://www.viber.com/',
    'line' => 'https://line.me/en/',
    'kik' => 'https://www.kik.com/',
    'skype' => 'https://www.skype.com/',
    'dust' => 'https://www.useDust.com/',
    'qq' => 'https://www.imqq.com/',
    'kakaoTalk' => 'https://www.kakaocorp.com/page/service/service/KakaoTalk?lang=ENG&tab=all',
    'marcoPolo' => 'https://www.marcopolo.me/',
    'textMe' => 'https://www.textmeinc.com/',
    'textNow' => 'https://www.textnow.com/',
    'threema' => 'https://threema.ch/en/',
    'wire' => 'https://wire.com/',
    'session' => 'https://getsession.org/',
    'wickr' => 'https://wickr.com/',
    'tango' => 'https://www.tango.me/',
    'chompSMS' => 'https://chompsms.com/',
    'pinger' => 'https://www.pinger.com/',
    'hike' => 'https://hike.in/'
];

// Recent Messaging Apps section
$recent_apps = [
    'title' => 'Here are some Messaging Apps as of recently',
    'apps' => [
        '<a href="' . $links['sms'] . '" target="_blank" rel="noopener noreferrer">Text Messaging (SMS)</a>',
        '<a href="' . $links['whatsApp'] . '" target="_blank" rel="noopener noreferrer">WhatsApp</a>',
        '<a href="' . $links['facebookMessenger'] . '" target="_blank" rel="noopener noreferrer">Facebook Messenger</a>',
        '<a href="' . $links['weChat'] . '" target="_blank" rel="noopener noreferrer">WeChat</a>',
        '<a href="' . $links['telegram'] . '" target="_blank" rel="noopener noreferrer">Telegram</a>',
        '<a href="' . $links['signal'] . '" target="_blank" rel="noopener noreferrer">Signal</a>',
        '<a href="' . $links['iMessage'] . '" target="_blank" rel="noopener noreferrer">iMessage</a>',
        '<a href="' . $links['googleChat'] . '" target="_blank" rel="noopener noreferrer">Google Chat</a>',
        '<a href="' . $links['slack'] . '" target="_blank" rel="noopener noreferrer">Slack</a>',
        '<a href="' . $links['microsoftTeams'] . '" target="_blank" rel="noopener noreferrer">Microsoft Teams</a>'
    ],
    'security_title' => 'Security and Privacy in Modern Messaging',
    'security_content' => 'In today\'s digital age, security and privacy have become paramount in messaging applications. Most modern messaging platforms implement <a href="' . $links['encryptionEnd2End'] . '" target="_blank" rel="noopener noreferrer">end-to-end encryption</a>, ensuring that only the intended recipients can read the messages. Features like disappearing messages, two-factor authentication, and secure cloud backups have become standard. Apps like Signal and Telegram have gained popularity specifically for their enhanced security features and commitment to user privacy.'
];

// Advanced Features section
$advanced_features = [
    'title' => 'Advanced Features and Capabilities',
    'intro' => 'Modern messaging apps have evolved far beyond simple text communication. Users can now enjoy features like:',
    'features' => [
        'Cross-platform synchronization across devices',
        'Voice and video messaging',
        'Live location sharing',
        'Message reactions and replies',
        'File sharing and cloud storage integration',
        'Digital payments and money transfers',
        'Group video calls and conferences'
    ]
];

// Future Trends section
$future_trends = [
    'title' => 'Emerging Trends and Future of Messaging',
    'content' => 'The messaging landscape continues to evolve with emerging technologies. Rich Communication Services (RCS) is positioned to replace traditional SMS, offering enhanced features like read receipts and higher quality media sharing. Artificial Intelligence is being integrated into messaging platforms, enabling smart replies, automated translations, and intelligent chatbots. Some platforms are even experimenting with AR/VR elements, allowing users to create immersive messaging experiences with filters, effects, and virtual environments.'
];

// Market Stats section
$market_stats = [
    'content' => 'As of 2023, WhatsApp leads the global messaging market with over 2 billion monthly active users, followed by WeChat and Facebook Messenger. The COVID-19 pandemic has significantly accelerated the adoption of messaging platforms, with businesses increasingly using these platforms for customer service and communication.'
];

// Additional Messaging Apps section
$additional_apps = [
    'title' => 'More Messaging & Social Platforms',
    'apps' => [
        '<a href="' . $links['discord'] . '" target="_blank" rel="noopener noreferrer">Discord</a>',
        '<a href="' . $links['snapchat'] . '" target="_blank" rel="noopener noreferrer">Snapchat</a>',
        '<a href="' . $links['viber'] . '" target="_blank" rel="noopener noreferrer">Viber</a>',
        '<a href="' . $links['line'] . '" target="_blank" rel="noopener noreferrer">Line</a>',
        '<a href="' . $links['kik'] . '" target="_blank" rel="noopener noreferrer">Kik</a>',
        '<a href="' . $links['skype'] . '" target="_blank" rel="noopener noreferrer">Skype</a>',
        '<a href="' . $links['dust'] . '" target="_blank" rel="noopener noreferrer">Dust</a>',
        '<a href="' . $links['qq'] . '" target="_blank" rel="noopener noreferrer">QQ</a>',
        '<a href="' . $links['kakaoTalk'] . '" target="_blank" rel="noopener noreferrer">KakaoTalk</a>',
        '<a href="' . $links['marcoPolo'] . '" target="_blank" rel="noopener noreferrer">Marco Polo</a>',
        '<a href="' . $links['textMe'] . '" target="_blank" rel="noopener noreferrer">Text Me</a>',
        '<a href="' . $links['textNow'] . '" target="_blank" rel="noopener noreferrer">Text Now</a>',
        '<a href="' . $links['threema'] . '" target="_blank" rel="noopener noreferrer">Threema</a>',
        '<a href="' . $links['wire'] . '" target="_blank" rel="noopener noreferrer">Wire</a>',
        '<a href="' . $links['session'] . '" target="_blank" rel="noopener noreferrer">Session</a>',
        '<a href="' . $links['wickr'] . '" target="_blank" rel="noopener noreferrer">Wickr</a>',
        '<a href="' . $links['tango'] . '" target="_blank" rel="noopener noreferrer">Tango</a>',
        '<a href="' . $links['chompSMS'] . '" target="_blank" rel="noopener noreferrer">Chomp SMS</a>',
        '<a href="' . $links['pinger'] . '" target="_blank" rel="noopener noreferrer">Pinger</a>',
        '<a href="' . $links['hike'] . '" target="_blank" rel="noopener noreferrer">Hike</a>'
    ]
];
?>

<div class="hero4 fullbar messaging-container">
    <h1 id="title"><?= empty($introduction) ? $introduccion['titulo'] : $introduction['title']; ?></h1>

    <div class="messaging-hero-wrapper messaging-intro-section">
        <div class="messaging-intro-text">
            <?php if (!empty($introduction) || !empty($introduccion)) :
                $paragraphs = (!empty($introduction) ? $introduction['content'] : $introduccion['contenido']);
                foreach ($paragraphs as $idx => $paragraph) :
                    if ($idx === 2) : ?>
                        <blockquote class="intro-quote selection" tabindex="0">
                            <i class="fas fa-quote-left quote-icon" aria-hidden="true"></i>
                            <span class="quote-text"><?php echo $paragraph; ?></span>
                        </blockquote>
                    <?php else : ?>
                        <p tabindex="0" class="selection"><?php echo $paragraph; ?></p>
                    <?php endif;
                endforeach;
            endif; ?>

            <div class="wiki-source-container">
                <a href="<?= empty($introduction) ? $introduccion['wiki_link'] : $introduction['wiki_link']; ?>" target="_blank" rel="noopener noreferrer" class="wiki-source-btn" tabindex="0">
                    <i class="fa-brands fa-wikipedia-w"></i>
                    <span>Explore Instant Messaging on Wikipedia</span>
                    <i class="fas fa-arrow-up-right-from-square"></i>
                </a>
            </div>
        </div>
        <div class="messaging-hero-media">
            <img src="../images/programs/msg.jpg" alt="Instant Messaging Applications" class="messaging-hero-img" tabindex="0">
        </div>
    </div>

    <hr class="section-divider" />

    <section class="messaging-section">
        <h2 class="section-heading"><i class="fas fa-comments heading-icon"></i> <?= empty($recent_apps) ? $apps_recientes['titulo'] : $recent_apps['title']; ?></h2>
        <ul class="newspaper2 app-grid">
            <?php if (!empty($recent_apps) || !empty($apps_recientes)) :
                foreach ((!empty($recent_apps) ? $recent_apps['apps'] : $apps_recientes['apps']) as $app) : ?>
                    <li class="app-item"><?php echo $app; ?></li>
            <?php endforeach;
            endif; ?>
        </ul>
    </section>

    <section class="messaging-section security-section">
        <h2 class="section-heading"><i class="fas fa-shield-halved heading-icon"></i> <?= empty($recent_apps) ? $apps_recientes['titulo_seguridad'] : $recent_apps['security_title']; ?></h2>
        <div class="security-card">
            <p tabindex="0" class="selection security-content"><?= empty($recent_apps) ? $apps_recientes['contenido_seguridad'] : $recent_apps['security_content']; ?></p>
        </div>
    </section>

    <hr class="section-divider" />

    <section class="messaging-section">
        <h2 class="section-heading"><i class="fas fa-wand-magic-sparkles heading-icon"></i> <?= empty($advanced_features) ? $rasgos_avanzados['titulo'] : $advanced_features['title']; ?></h2>
        <p tabindex="0" class="selection feature-intro"><?= empty($advanced_features) ? $rasgos_avanzados['intro'] : $advanced_features['intro']; ?></p>
        <ul class="features-grid">
            <?php if (!empty($advanced_features) || !empty($rasgos_avanzados)) :
                foreach ((!empty($advanced_features) ? $advanced_features['features'] : $rasgos_avanzados['rasgos']) as $feature) : ?>
                    <li tabindex="0" class="border-li">
                        <i class="fas fa-circle-check feature-check" aria-hidden="true"></i>
                        <span><?php echo $feature; ?></span>
                    </li>
            <?php endforeach;
            endif; ?>
        </ul>
    </section>

    <hr class="section-divider" />

    <section class="messaging-section trends-section">
        <h2 class="section-heading"><i class="fas fa-bolt heading-icon"></i> <?= empty($future_trends) ? $tendencias_futuras['titulo'] : $future_trends['title']; ?></h2>
        <div class="trends-card">
            <p tabindex="0" class="selection trends-content"><?= empty($future_trends) ? $tendencias_futuras['contenido'] : $future_trends['content']; ?></p>
        </div>
    </section>

    <div class="market-stats-card">
        <div class="stats-badge"><i class="fas fa-chart-line"></i> Global Market Insight</div>
        <p tabindex="0" class="selection stats-content"><?= empty($market_stats) ? $estadisticas_mercado['contenido'] : $market_stats['content']; ?></p>
    </div>

    <hr class="section-divider" />

    <section class="messaging-section additional-apps-section">
        <h2 class="section-heading"><i class="fas fa-layer-group heading-icon"></i> <?= !empty($additional_apps['title']) ? $additional_apps['title'] : 'More Messaging & Social Platforms'; ?></h2>
        <ul class="newspaper2 app-grid lastItem">
            <?php if (!empty($additional_apps) || !empty($apps_adicionales)) :
                foreach (!empty($additional_apps) ? $additional_apps['apps'] : $apps_adicionales['apps'] as $app) : ?>
                    <li class="app-item"><?php echo $app; ?></li>
            <?php endforeach;
            endif; ?>
        </ul>
    </section>
</div>
