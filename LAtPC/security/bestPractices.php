<?php
/**
 * Best Practices (English: best_practices, Spanish: mejores_practicas)
 * Fed dynamically from databaseConnection('security').
 */

include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('security');
global $content, $key;

function render_best_practices_view($isSpanish = false) {
    global $page, $content, $key;
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
    $baseRoute = $isSpanish ? 'seguridad' : 'offered_security';

    $icons = [
        'physical' => '&#x1FAB9;',
        'sidechan' => '&#x1F4E1;',
        'remote'   => '&#x1F310;',
        'supply'   => '&#x1F4E6;',
        'pwcrack'  => '&#x1F513;',
        'social'   => '&#x1F3AD;',
        'quantum'  => '&#x269B;&#xFE0F;',
        'ai'       => '&#x1F916;'
    ];

    $threats = [
        ['physical', $content[48][$key] ?? 'Physical Attacks',         $content[49][$key] ?? ''],
        ['sidechan', $content[50][$key] ?? 'Side-Channel Attacks',      $content[51][$key] ?? ''],
        ['remote',   $content[52][$key] ?? 'Remote Access Attacks',     $content[53][$key] ?? ''],
        ['supply',   $content[54][$key] ?? 'Supply-Chain Attacks',      $content[55][$key] ?? ''],
        ['pwcrack',  $content[56][$key] ?? 'Password Cracking',         $content[57][$key] ?? ''],
        ['social',   $content[58][$key] ?? 'Social Engineering',        $content[59][$key] ?? ''],
        ['quantum',  $content[60][$key] ?? 'Quantum Computing Attacks', $content[61][$key] ?? ''],
        ['ai',       $content[62][$key] ?? 'AI-Based Attacks',          $content[63][$key] ?? ''],
    ];

    $physIcons = [
        "&#x1F512;", "&#x26D3;&#xFE0F;", "&#x1F4F7;", "&#x26A1;", "&#x1F32C;&#xFE0F;",
        "&#x1F4BB;", "&#x1F392;", "&#x1F697;", "&#x1F440;"
    ];

    $pmRisks = [
        ["&#x1F513;",  $content[78][$key] ?? 'Security Breaches',      $content[79][$key] ?? ''],
        ["&#x1F6AA;",  $content[80][$key] ?? 'Loss of Access',          $content[81][$key] ?? ''],
        ["&#x1F3A3;",  $content[82][$key] ?? 'Phishing',                $content[83][$key] ?? ''],
        ["&#x2601;&#xFE0F;", $content[84][$key] ?? 'Cloud-Based Risks', $content[85][$key] ?? ''],
        ["&#x1F4A5;",  $content[86][$key] ?? 'Single Point of Failure', $content[87][$key] ?? ''],
    ];
?>
<div class="fullbar">
    <?php include __DIR__ . '/navBarSecurity.php'; ?>
    <h2 class="sec-section-title" id="p3s"><span>&#x26A0;&#xFE0F;</span> <?= $content[46][$key] ?? ($isSpanish ? 'Capacítate — Conoce las Amenazas' : 'Train Yourself & Your Team — Know the Threats'); ?></h2>
    <p><a href="<?= $imgDir . $baseRoute; ?>/<?= $isSpanish ? 'mejores_practicas' : 'best_practices'; ?>" title="<?= $isSpanish ? 'Mejores Prácticas' : 'Best Practices'; ?>"><?= $content[47][$key] ?? ''; ?></a></p>
    <div class="threat-grid">
        <?php foreach ($threats as [$cls, $title, $desc]): ?>
        <div class="threat-card <?= $cls ?>" data-icon="<?= $icons[$cls] ?>">
            <h2><?= $icons[$cls] ?> <?= $title ?></h2>
            <h3><?= $desc ?></h3>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="sec-tip">
        <strong>&#x1F30D;</strong> <?= $content[64][$key] ?? ''; ?>
        <a href="<?= $imgDir . $baseRoute; ?>/"><?= $content[65][$key] ?? ($isSpanish ? 'Volver a Seguridad →' : 'Back to Security overview →'); ?></a>
    </div>
</div>

<div class="fullbar">
    <h2 class="sec-section-title"><span>&#x1F3E0;</span> <?= $content[66][$key] ?? ($isSpanish ? 'Mejores Prácticas Físicas' : 'Physical Device Best Practices'); ?></h2>
    <div class="sec-checklist">
        <?php for ($j = 0; $j < 9; $j++): ?>
        <div class="sec-card">
            <span class="sec-card-icon"><?= $physIcons[$j] ?></span>
            <p><?= $content[67 + $j][$key] ?? ''; ?></p>
        </div>
        <?php endfor; ?>
    </div>
    <hr class="sec-divider">
    <h2 class="sec-section-title"><span>&#x1F5C4;&#xFE0F;</span> <?= $content[76][$key] ?? ($isSpanish ? 'Gestores de Contraseñas — Comodidad vs. Riesgo' : 'Password Managers — Convenience vs. Risk'); ?></h2>
    <p><?= $content[77][$key] ?? ''; ?></p>
    <div class="pm-risk-list">
        <?php foreach ($pmRisks as [$ico, $title, $desc]): ?>
        <div class="pm-risk-card">
            <h3><?= "$ico $title" ?></h3>
            <p><?= $desc ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="sec-tip">
        <strong>&#x2705; <?= $isSpanish ? 'Mitigación:' : 'Mitigation:'; ?></strong> <?= $content[88][$key] ?? ''; ?>
    </div>
</div>
<?php
}

function best_practices() {
    render_best_practices_view(false);
}

function mejores_practicas() {
    render_best_practices_view(true);
}
