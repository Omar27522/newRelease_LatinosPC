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
        '<a href="' . $links['sms'] . '">Text Messaging (SMS)</a>',
        '<a href="' . $links['whatsApp'] . '">WhatsApp</a>',
        '<a href="' . $links['facebookMessenger'] . '">Facebook Messenger</a>',
        '<a href="' . $links['weChat'] . '">WeChat</a>',
        '<a href="' . $links['telegram'] . '">Telegram</a>',
        '<a href="' . $links['signal'] . '">Signal</a>',
        '<a href="' . $links['iMessage'] . '">iMessage</a>',
        '<a href="' . $links['googleChat'] . '">Google Chat</a>',
        '<a href="' . $links['slack'] . '">Slack</a>',
        '<a href="' . $links['microsoftTeams'] . '">Microsoft Teams</a>'
    ],
    'security_title' => 'Security and Privacy in Modern Messaging',
    'security_content' => 'In today\'s digital age, security and privacy have become paramount in messaging applications. Most modern messaging platforms implement <a href="' . $links['encryptionEnd2End'] . '">end-to-end encryption</a>, ensuring that only the intended recipients can read the messages. Features like disappearing messages, two-factor authentication, and secure cloud backups have become standard. Apps like Signal and Telegram have gained popularity specifically for their enhanced security features and commitment to user privacy.'
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
    'apps' => [
        '<a href="' . $links['discord'] . '">Discord</a>',
        '<a href="' . $links['snapchat'] . '">Snapchat</a>',
        '<a href="' . $links['viber'] . '">Viber</a>',
        '<a href="' . $links['line'] . '">Line</a>',
        '<a href="' . $links['kik'] . '">Kik</a>',
        '<a href="' . $links['skype'] . '">Skype</a>',
        '<a href="' . $links['dust'] . '">Dust</a>',
        '<a href="' . $links['qq'] . '">QQ</a>',
        '<a href="' . $links['kakaoTalk'] . '">KakaoTalk</a>',
        '<a href="' . $links['marcoPolo'] . '">Marco Polo</a>',
        '<a href="' . $links['textMe'] . '">Text Me</a>',
        '<a href="' . $links['textNow'] . '">Text Now</a>',
        '<a href="' . $links['threema'] . '">Threema</a>',
        '<a href="' . $links['wire'] . '">Wire</a>',
        '<a href="' . $links['session'] . '">Session</a>',
        '<a href="' . $links['wickr'] . '">Wickr</a>',
        '<a href="' . $links['tango'] . '">Tango</a>',
        '<a href="' . $links['chompSMS'] . '">Chomp SMS</a>',
        '<a href="' . $links['pinger'] . '">Pinger</a>',
        '<a href="' . $links['hike'] . '">Hike</a>'
    ]
];
?>

<div class="hero4 fullbar">
    <h1 id="title"><?= empty($introduction) ? $introduccion['titulo'] : $introduction['title']; ?></h1>

    <img src="../../../tempimages/messaging1.jpg" class="rtl" style="background-color:black">

    <?php if (!empty($introduction) || !empty($introduccion)) :
        foreach ((!empty($introduction) ? $introduction['content'] : $introduccion['contenido']) as $paragraph) : ?>
            <p tabindex="0" class="selection"><?php echo $paragraph; ?></p>
    <?php endforeach;
    endif; ?>

    <p tabindex="0" class="selection" style="display:inline;margin:1%;"><a href="<?= empty($introduction) ? $introduccion['wiki_link'] : $introduction['wiki_link']; ?>">Wikipedia</a></p>
    <hr />
    <h2><?= empty($recent_apps) ? $apps_recientes['titulo'] : $recent_apps['title']; ?></h2>
    <ul class="newspaper2">
        <?php if (!empty($recent_apps) || !empty($apps_recientes)) :
            foreach ((!empty($recent_apps) ? $recent_apps['apps'] : $apps_recientes['apps']) as $app) : ?>
                <li style="line-height:1.5;"><?php echo $app; ?></li>
        <?php endforeach;
        endif; ?>
    </ul>
    <h2><?= empty($recent_apps) ? $apps_recientes['titulo_seguridad'] : $recent_apps['security_title']; ?></h2>
    <p tabindex="0" class="selection"><?= empty($recent_apps) ? $apps_recientes['contenido_seguridad'] : $recent_apps['security_content']; ?></p>
    <hr />
    <h2><?= empty($advanced_features) ? $rasgos_avanzados['titulo'] : $advanced_features['title']; ?></h2>
    <p tabindex="0" class="selection"><?= empty($advanced_features) ? $rasgos_avanzados['intro'] : $advanced_features['intro']; ?></p>
    <ul class="newspaper2">
        <?php if (!empty($advanced_features) || !empty($rasgos_avanzados)) :
            foreach ((!empty($advanced_features) ? $advanced_features['features'] : $rasgos_avanzados['rasgos']) as $feature) : ?>
                <p>
                    <li tabindex="0" class="border-li"><?php echo $feature; ?></li>
                </p>
        <?php endforeach;
        endif; ?>
    </ul>
    <hr />
    <h2><?= empty($future_trends) ? $tendencias_futuras['titulo'] : $future_trends['title']; ?></h2>
    <p tabindex="0" class="selection"><?= empty($future_trends) ? $tendencias_futuras['contenido'] : $future_trends['content']; ?></p>
    <hr />
    <p tabindex="0" class="selection"><?= empty($market_stats) ? $estadisticas_mercado['contenido'] : $market_stats['content']; ?></p>
    <hr />
    <ul class="newspaper2 lastItem">
        <?php if (!empty($additional_apps) || !empty($apps_adicionales)) :
            foreach (!empty($additional_apps) ? $additional_apps['apps'] : $apps_adicionales['apps'] as $app) : ?>
                <div style="line-height:1.5;">
                    <li><?php echo $app; ?></li>
                </div>
        <?php endforeach;
        endif; ?>
    </ul>
</div>
