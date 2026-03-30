<?php
/**
 * Media Component
 * Modularized from software.php
 */

echo "<div class=\"fullbar\">";
sw_breadCrumbs();
echo "</div>";

$title = "Digital Media";
$links = [
    'mediaFormats' => ['https://www.loc.gov/preservation/digital/formats/fdd/browse_list.shtml', 'Library of Congress (.gov)'],
    'internetUsers' => ['https://datareportal.com/global-digital-overview', 'DataReportal | Global Digital Insights | Digital Around the World'],
    'video' => ['https://www.synthesia.io/post/video-statistics#:~:text=Video%20made%20up%2082%25%20of,10%25%20through%20text).', 'Video Statistics'],
    'core' => [
        'image' => ['https://www.iana.org/assignments/media-types/media-types.xhtml#image', 'Media Types Images'],
        'audio' => ['https://www.iana.org/assignments/media-types/media-types.xhtml#audio', 'Media Types Audio'],
        'video' => ['https://www.iana.org/assignments/media-types/media-types.xhtml#video', 'Media Types Video'],
        'text' => ['https://www.iana.org/assignments/media-types/media-types.xhtml#text', 'Media Types Text']
    ],
    'evolution' => [
        '40' => ['http://world-information.org/wio/infostructure/100437611663/100438659338', 'Early Digital Computing'],
        '60' => ['https://en.wikipedia.org/wiki/Digital_audio', 'Digital Audio and Storage'],
        '80' => ['https://en.wikipedia.org/wiki/Digital_image', 'Digital Images', 'https://en.wikipedia.org/wiki/Digital_video', 'Digital Video'],
        '00' => ['https://www.socialchamp.io/in/blog/history-of-social-media/', 'History of Social Media: Tracing the Evolution from the Beginning to Now'],
        '20' => ['https://www.interaction-design.org/literature/topics/immersive-media', 'Immersive Media']
    ],
    'popularMediaFormats' => [
        'jpg' => ['https://en.wikipedia.org/wiki/JPEG', 'JPEG'],
        'png' => ['https://en.wikipedia.org/wiki/PNG', 'PNG'],
        'mp4' => ['https://en.wikipedia.org/wiki/MP4_file_format', 'MP4'],
        'mp3' => ['https://en.wikipedia.org/wiki/MP3', 'MP3'],
        'gif' => ['https://en.wikipedia.org/wiki/GIF', 'GIF'],
        'wav' => ['https://en.wikipedia.org/wiki/WAV', 'WAV'],
        'pdf' => ['https://en.wikipedia.org/wiki/PDF', 'PDF'],
        'svg' => ['https://en.wikipedia.org/wiki/SVG', 'SVG']
    ],
    'aACR' => ['https://www.mentalhelp.net/internet/types-of-media/', 'American Addiction Centers Resource'],
    'mediaType' => 'https://en.wikipedia.org/wiki/Media_type'
];

$subTitle = [
    'Understanding Digital Media: Visual, Audio, and Interactive Content',
    'Core Media Types',
    'Evolution of Digital Media',
    'Popular Media Formats',
    'The Role of Digital Media Today'
];

$stats = [
    'mediaFormats' => ['500+', 'Media Formats'],
    'internetUsers' => ['5.52', 'Internet Users'],
    'video' => ['Video', '82% of all internet traffic (2022)'],
];

$digital = ['Digital media encompasses all forms of content that can be created, viewed, distributed, modified and preserved on digital electronic devices. These representations primarily fall into several key categories:'];
$core = [
    'image' => ['📷', 'Images'],
    'audio' => ['🎵', 'Audio'],
    'video' => ['🎬', 'Video'],
    'text' => ['📝', 'Text'],
    'evolution' => [
        'earlyDigitalComputing' => ['1940s-1950s', 'Early Digital Computing'],
        'digitalAudioandStorage' => ['1960s-1970s', 'Digital Audio and Storage'],
        'digitalImagesandVideo' => ['1980s-1990s', 'Digital'],
        '80' => ['Images', 'and', 'Video'],
        '00' => ['2000s-2010s', 'Social Media Revolution'],
        '20' => ['2020s', 'Immersive and Interactive Media'],
    ]
];
$popularMediaFormats = ['JPG', 'PNG', 'MP4', 'MP3', 'GIF', 'WAV', 'PDF', 'SVG'];
$role = ['Digital media has transformed how we communicate, learn, and entertain ourselves.', 'It enables:', 'Instant global communication', 'Interactive learning experiences', 'Creative expression and sharing', 'Digital preservation of culture', 'Cross-platform content delivery'];
$modernMedia = ['aACR' => 'American Addiction Centers Resource', 'quote' => '"Modern media comes in many different formats, including print media (books, magazines, newspapers), television, movies, video games, music, cell phones, various kinds of software, and the Internet."'];
$learn = ['Learn more about Internet Media Types →'];
?>

<article class="hero4">
    <div class="fullbar">
        <h2 id="title"><?= empty($title) ? $titulo : $title; ?></h2>

        <h2><?= empty($subTitle) ? $subTitulo[0] : $subTitle[0]; ?></h2>
        <div tabindex="0" class="selection">
            <!-- Stats Section -->
            <div class="stats-grid">
                <?php
                $sections = [
                    'multimediaFormatos' => 'mediaFormats',
                    'internetUsuarios' => 'internetUsers',
                    'video' => 'video'
                ];
                foreach ($sections as $spanishKey => $englishKey) :
                    $linkKey = empty($links) ? $enlaces[$spanishKey] : $links[$englishKey];
                    $statKey = empty($stats) ? $estadisticas[$spanishKey] : $stats[$englishKey];
                ?>
                    <a class="stat-card" href="<?= $linkKey[0] ?>" title="<?= $linkKey[1] ?>">
                        <div class="stat-number"><?= $statKey[0] ?></div>
                        <div class="stat-label"><?= $statKey[1] ?></div>
                    </a>
                <?php
                endforeach;
                ?>
            </div> <!-- Stats Section -->
            <p>
                <?= $digital[0]; ?>
            </p>
            <div class="media-types media-card">
                <h3><?= empty($subSubtitle) ? $subTitulo[1] : $subTitle[1]; ?></h3>
                <div class="tech-grid">
                    <a href="<?= empty($links) ? $enlaces['centro']['imagen'][0] : $links['core']['image'][0]; ?>" title="<?= empty($links) ? $enlaces['centro']['imagen'][1] : $links['core']['image'][1]; ?>" class="tech-item">
                        <div class="media-icon"><?= empty($core) ? $centro['imagen'][0] : $core['image'][0]; ?></div>
                        <strong><?= empty($core) ? $centro['imagen'][1] : $core['image'][1]; ?></strong>
                    </a>
                    <a href="<?= empty($links) ? $enlaces['centro']['audio'][0] : $links['core']['audio'][0]; ?>" title="<?= empty($links) ? $enlaces['centro']['audio'][1] : $links['core']['audio'][1]; ?>" class="tech-item">
                        <div class="media-icon"><?= empty($core) ? $centro['audio'][0] : $core['audio'][0]; ?></div>
                        <strong><?= empty($core) ? $centro['audio'][1] : $core['audio'][1]; ?></strong>
                    </a>
                    <a href="<?= empty($links) ? $enlaces['video'][0] : $links['core']['video'][0]; ?>" title="<?= empty($links) ? $enlaces['centro']['video'][1] : $links['core']['video'][1]; ?>" class="tech-item">
                        <div class="media-icon"><?= empty($core) ? $centro['video'][0] : $core['video'][0]; ?></div>
                        <strong><?= empty($core) ? $centro['video'][1] : $core['video'][1]; ?></strong>
                    </a>
                    <a href="<?= empty($links) ? $enlaces['centro']['texto'][0] : $links['core']['text'][0]; ?>" title="<?= empty($links) ? $enlaces['centro']['texto'][1] : $links['core']['text'][1]; ?>" class="tech-item">
                        <div class="media-icon"><?= empty($core) ? $centro['texto'][0] : $core['text'][0]; ?></div>
                        <strong><?= empty($core) ? $centro['texto'][1] : $core['text'][1]; ?></strong>
                    </a>
                </div>
            </div>
            <div class="timeline">
                <h3><?= empty($subTitle) ? $subTitulo[2] : $subTitle[2]; ?></h3>
                <?php
                // Define the timeline data structure
                $timelineItems = [
                    '40' => [
                        'key' => 'computacionDigitalTemprana',
                        'englishKey' => 'earlyDigitalComputing',
                        'hasLink' => true,
                        'specialFormat' => false
                    ],
                    '60' => [
                        'key' => 'audioyAlmacenamientoDigital',
                        'englishKey' => 'digitalAudioandStorage',
                        'hasLink' => true,
                        'specialFormat' => false
                    ],
                    '80' => [
                        'key' => 'imageneyVideoDigital',
                        'englishKey' => 'digitalImagesandVideo',
                        'hasLink' => false,
                        'specialFormat' => true
                    ],
                    '00' => [
                        'key' => '00',
                        'englishKey' => '00',
                        'hasLink' => true,
                        'specialFormat' => false
                    ],
                    '20' => [
                        'key' => '20',
                        'englishKey' => '20',
                        'hasLink' => true,
                        'specialFormat' => false
                    ]
                ];
                foreach ($timelineItems as $decade => $item) :
                    $baseKey = empty($core) ? $centro['evolucion'] : $core['evolution'];
                    $linkBase = empty($links) ? $enlaces['evolucion'] : $links['evolution'];
                ?>
                    <div class="timeline-item">
                        <?php if ($item['specialFormat']) { // Special case for 80s entry
                        ?>
                            <strong><?= empty($core) ? $baseKey[$item['key']][0] : $core['evolution'][$item['englishKey']][0]; ?>:</strong>
                            <?= empty($core) ? $baseKey[$item['key']][1] : $core['evolution'][$item['englishKey']][1]; ?>
                            <a href="<?= $linkBase[$decade][0] ?>" title="<?= $linkBase[$decade][1] ?>">
                                <?= $baseKey[$decade][0] ?>
                            </a>
                            <?= $baseKey[$decade][1] ?>
                            <a href="<?= $linkBase[$decade][2] ?>" title="<?= $linkBase[$decade][3] ?>">
                                <?= $baseKey[$decade][2] ?>
                            </a>
                        <?php } else { // Standard format for other entries 
                        ?>
                            <strong>
                                <?php if ($item['hasLink']) { ?>
                                    <a href="<?= $linkBase[$decade][0] ?>" title="<?= $linkBase[$decade][1] ?>">
                                    <?php } ?>
                                    <?= empty($core) ? $baseKey[$item['key']][0] : $core['evolution'][$item['englishKey']][0]; ?>
                                    <?php if ($item['hasLink']) { ?>
                                    </a>
                                <?php } ?>
                            </strong>:
                            <?= empty($core) ? $baseKey[$item['key']][1] : $core['evolution'][$item['englishKey']][1] ?>
                        <?php } ?>
                    </div>
                <?php endforeach; ?>


            </div>
            <div class="media-formats media-card">
                <h3><?= empty($subSubtitle) ? $subTitulo[3] : $subTitle[3]; ?></h3>
                <div class="tech-grid">

                    <?php
                    // Define the formats we want to display
                    $formatTypes = ['jpg', 'png', 'mp4', 'mp3', 'gif', 'wav', 'pdf', 'svg'];
                    foreach ($formatTypes as $index => $format) :
                        $href = empty($links)
                            ? $enlaces['formatos'][$format][0]
                            : $links['popularMediaFormats'][$format][0];
                        $title = empty($links)
                            ? $enlaces['formatos'][$format][1]
                            : $links['popularMediaFormats'][$format][1];
                        $text = empty($popularMediaFormats)
                            ? $formatos[$index]
                            : $popularMediaFormats[$index];
                    ?>
                        <a href="<?= $href ?>" title="<?= $title ?>" class="tech-item">
                            <?= $text ?>
                        </a>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
            <div class="media-importance">
                <h3><?= empty($subSubtitle) ? $subTitulo[4] : $subTitle[4]; ?></h3>
                <p><?= empty($role) ? $rol[0] : $role[0]; ?><br><b><?= empty($role) ? $rol[1] : $role[1]; ?></b></p>
                <ul>
                    <?php for ($i = 2; $i < 7; $i++) : ?>
                        <li><?= empty($role) ? $rol[$i] : $role[$i]; ?></li>
                    <?php endfor; ?>
                </ul>
            </div>
            <blockquote class="expert-quote">
                <p><?= empty($modernMedia) ? $multimediaModerna['cita'] : $modernMedia['quote']; ?></p>
                <footer>— <cite><a href="<?= empty($links) ? $enlaces['aACR'][0] : $links['aACR'][0]; ?>"><?= empty($modernMedia) ? $multimediaModerna['aACR'] : $modernMedia['aACR']; ?></a></cite>
                </footer>
            </blockquote>
            <p class="learn-more">
                <a href="<?= empty($links) ? $enlaces['tiposMultimedia'] : $links['mediaType']; ?>" class="reference-link"><?= empty($learn) ? $aprender[0] : $learn[0]; ?></a>
            </p>
        </div>
    </div>
</article>
