<?php
/**
 * Media Component
 * Modularized from software.php
 */
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;

$isSpanish = ($key === 'contenido');

// Dynamic Content & Links Resolver from SQLite laTpc.db ($content pool)
$media = [];
$links = [];
foreach ($content as $item) {
    if (isset($item['name']) && str_starts_with($item['name'], 'media_')) {
        $val = !empty($item[$key]) ? $item[$key] : ($item['content'] ?? '');
        if (str_starts_with($item['name'], 'media_link_')) {
            $linkKey = str_replace('media_link_', '', $item['name']);
            $links[$linkKey] = $val;
        } else {
            $mediaKey = str_replace('media_', '', $item['name']);
            $media[$mediaKey] = $val;
        }
    }
}

echo "<div class=\"fullbar\">";
if (function_exists('sw_breadCrumbs')) {
    sw_breadCrumbs();
}
echo "</div>";
?>

<article class="hero4">
    <div class="fullbar">
        <h2 id="title"><?= htmlspecialchars($media['title'] ?? 'Digital Media'); ?></h2>

        <h2><?= htmlspecialchars($media['sub_understanding'] ?? 'Understanding Digital Media: Visual, Audio, and Interactive Content'); ?></h2>
        <div tabindex="0" class="selection">
            <!-- Stats Section -->
            <div class="stats-grid">
                <a class="stat-card" href="<?= htmlspecialchars($links['mediaFormats'] ?? '#'); ?>" title="Media Formats Registry" target="_blank" rel="noopener noreferrer">
                    <div class="stat-number"><?= htmlspecialchars($media['stat_formats_num'] ?? '500+'); ?></div>
                    <div class="stat-label"><?= htmlspecialchars($media['stat_formats_label'] ?? 'Media Formats'); ?></div>
                </a>
                <a class="stat-card" href="<?= htmlspecialchars($links['internetUsers'] ?? '#'); ?>" title="Global Digital Insights" target="_blank" rel="noopener noreferrer">
                    <div class="stat-number"><?= htmlspecialchars($media['stat_users_num'] ?? '5.52B'); ?></div>
                    <div class="stat-label"><?= htmlspecialchars($media['stat_users_label'] ?? 'Internet Users'); ?></div>
                </a>
                <a class="stat-card" href="<?= htmlspecialchars($links['videoTraffic'] ?? '#'); ?>" title="Video Statistics" target="_blank" rel="noopener noreferrer">
                    <div class="stat-number"><?= htmlspecialchars($media['stat_video_num'] ?? 'Video'); ?></div>
                    <div class="stat-label"><?= htmlspecialchars($media['stat_video_label'] ?? '82% of all internet traffic'); ?></div>
                </a>
            </div> <!-- Stats Section -->

            <p>
                <?= htmlspecialchars($media['digital_desc'] ?? ''); ?>
            </p>

            <div class="media-types media-card">
                <h3><?= htmlspecialchars($media['sub_core_types'] ?? 'Core Media Types'); ?></h3>
                <div class="tech-grid">
                    <a href="<?= htmlspecialchars($links['core_image'] ?? '#'); ?>" title="Media Types Images" class="tech-item" target="_blank" rel="noopener noreferrer">
                        <div class="media-icon">📷</div>
                        <strong><?= htmlspecialchars($media['core_image'] ?? 'Images'); ?></strong>
                    </a>
                    <a href="<?= htmlspecialchars($links['core_audio'] ?? '#'); ?>" title="Media Types Audio" class="tech-item" target="_blank" rel="noopener noreferrer">
                        <div class="media-icon">🎵</div>
                        <strong><?= htmlspecialchars($media['core_audio'] ?? 'Audio'); ?></strong>
                    </a>
                    <a href="<?= htmlspecialchars($links['core_video'] ?? '#'); ?>" title="Media Types Video" class="tech-item" target="_blank" rel="noopener noreferrer">
                        <div class="media-icon">🎬</div>
                        <strong><?= htmlspecialchars($media['core_video'] ?? 'Video'); ?></strong>
                    </a>
                    <a href="<?= htmlspecialchars($links['core_text'] ?? '#'); ?>" title="Media Types Text" class="tech-item" target="_blank" rel="noopener noreferrer">
                        <div class="media-icon">📝</div>
                        <strong><?= htmlspecialchars($media['core_text'] ?? 'Text'); ?></strong>
                    </a>
                </div>
            </div>

            <div class="timeline">
                <h3><?= htmlspecialchars($media['sub_evolution'] ?? 'Evolution of Digital Media'); ?></h3>

                <!-- 1940s-1950s -->
                <div class="timeline-item">
                    <strong>
                        <a href="<?= htmlspecialchars($links['timeline_40'] ?? '#'); ?>" title="<?= htmlspecialchars($media['timeline_40_title'] ?? ''); ?>" target="_blank" rel="noopener noreferrer">
                            <?= htmlspecialchars($media['timeline_40_era'] ?? '1940s-1950s'); ?>
                        </a>
                    </strong>:
                    <?= htmlspecialchars($media['timeline_40_title'] ?? ''); ?>
                </div>

                <!-- 1960s-1970s -->
                <div class="timeline-item">
                    <strong>
                        <a href="<?= htmlspecialchars($links['timeline_60'] ?? '#'); ?>" title="<?= htmlspecialchars($media['timeline_60_title'] ?? ''); ?>" target="_blank" rel="noopener noreferrer">
                            <?= htmlspecialchars($media['timeline_60_era'] ?? '1960s-1970s'); ?>
                        </a>
                    </strong>:
                    <?= htmlspecialchars($media['timeline_60_title'] ?? ''); ?>
                </div>

                <!-- 1980s-1990s Special Dual Link -->
                <div class="timeline-item">
                    <strong><?= htmlspecialchars($media['timeline_80_era'] ?? '1980s-1990s'); ?>:</strong>
                    <?= htmlspecialchars($media['timeline_80_title'] ?? 'Digital'); ?>
                    <a href="<?= htmlspecialchars($links['timeline_80_img'] ?? '#'); ?>" title="Digital Images" target="_blank" rel="noopener noreferrer">
                        <?= htmlspecialchars($media['timeline_80_img'] ?? 'Images'); ?>
                    </a>
                    <?= htmlspecialchars($media['timeline_80_and'] ?? 'and'); ?>
                    <a href="<?= htmlspecialchars($links['timeline_80_vid'] ?? '#'); ?>" title="Digital Video" target="_blank" rel="noopener noreferrer">
                        <?= htmlspecialchars($media['timeline_80_vid'] ?? 'Video'); ?>
                    </a>
                </div>

                <!-- 2000s-2010s -->
                <div class="timeline-item">
                    <strong>
                        <a href="<?= htmlspecialchars($links['timeline_00'] ?? '#'); ?>" title="<?= htmlspecialchars($media['timeline_00_title'] ?? ''); ?>" target="_blank" rel="noopener noreferrer">
                            <?= htmlspecialchars($media['timeline_00_era'] ?? '2000s-2010s'); ?>
                        </a>
                    </strong>:
                    <?= htmlspecialchars($media['timeline_00_title'] ?? ''); ?>
                </div>

                <!-- 2020s -->
                <div class="timeline-item">
                    <strong>
                        <a href="<?= htmlspecialchars($links['timeline_20'] ?? '#'); ?>" title="<?= htmlspecialchars($media['timeline_20_title'] ?? ''); ?>" target="_blank" rel="noopener noreferrer">
                            <?= htmlspecialchars($media['timeline_20_era'] ?? '2020s'); ?>
                        </a>
                    </strong>:
                    <?= htmlspecialchars($media['timeline_20_title'] ?? ''); ?>
                </div>
            </div>

            <div class="media-formats media-card">
                <h3><?= htmlspecialchars($media['sub_popular_formats'] ?? 'Popular Media Formats'); ?></h3>
                <div class="tech-grid">
                    <?php
                    $formats = [
                        'fmt_jpg' => 'JPG',
                        'fmt_png' => 'PNG',
                        'fmt_mp4' => 'MP4',
                        'fmt_mp3' => 'MP3',
                        'fmt_gif' => 'GIF',
                        'fmt_wav' => 'WAV',
                        'fmt_pdf' => 'PDF',
                        'fmt_svg' => 'SVG'
                    ];
                    foreach ($formats as $fmtKey => $fmtLabel): ?>
                    <a href="<?= htmlspecialchars($links[$fmtKey] ?? '#'); ?>" title="<?= $fmtLabel; ?>" class="tech-item" target="_blank" rel="noopener noreferrer">
                        <?= $fmtLabel; ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="media-importance">
                <h3><?= htmlspecialchars($media['sub_role_today'] ?? 'The Role of Digital Media Today'); ?></h3>
                <p>
                    <?= htmlspecialchars($media['role_intro'] ?? ''); ?><br>
                    <b><?= htmlspecialchars($media['role_enables'] ?? 'It enables:'); ?></b>
                </p>
                <ul>
                    <li><?= htmlspecialchars($media['role_item_1'] ?? ''); ?></li>
                    <li><?= htmlspecialchars($media['role_item_2'] ?? ''); ?></li>
                    <li><?= htmlspecialchars($media['role_item_3'] ?? ''); ?></li>
                    <li><?= htmlspecialchars($media['role_item_4'] ?? ''); ?></li>
                    <li><?= htmlspecialchars($media['role_item_5'] ?? ''); ?></li>
                </ul>
            </div>

            <blockquote class="expert-quote">
                <p><?= htmlspecialchars($media['quote_text'] ?? ''); ?></p>
                <footer>— <cite><a href="<?= htmlspecialchars($links['aacr'] ?? '#'); ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($media['quote_author'] ?? 'American Addiction Centers Resource'); ?></a></cite></footer>
            </blockquote>

            <p class="learn-more">
                <a href="<?= htmlspecialchars($links['media_type'] ?? '#'); ?>" class="reference-link" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($media['learn_more'] ?? 'Learn more about Internet Media Types →'); ?></a>
            </p>
        </div>
    </div>
</article>