<?php
/**
 * Other Component
 * Modularized from software.php
 * Powered by SQLite laTpc.db ($content pool for 'software')
 */

include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('software');
global $content, $key, $page;

$isSpanish = ($key === 'contenido');

// Dynamic Content & Links Resolver from SQLite laTpc.db ($content pool)
$other = [];
$links = [];
foreach ($content as $item) {
    if (isset($item['name']) && str_starts_with($item['name'], 'other_')) {
        $val = !empty($item[$key]) ? $item[$key] : ($item['content'] ?? '');
        if (str_starts_with($item['name'], 'other_link_')) {
            $linkKey = str_replace('other_link_', '', $item['name']);
            $links[$linkKey] = $val;
        } else {
            $otherKey = str_replace('other_', '', $item['name']);
            $other[$otherKey] = $val;
        }
    }
}

echo "<div class=\"fullbar\">";
if (function_exists('sw_breadCrumbs')) {
    sw_breadCrumbs();
}
echo "<h1>" . htmlspecialchars($other['title'] ?? 'Other') . "</h1>";
echo "</div>";

// Password managers list
$pwd_managers = [
    ['key' => 'mgr_1password', 'name' => '1Password'],
    ['key' => 'mgr_bitwarden', 'name' => 'Bitwarden'],
    ['key' => 'mgr_dashlane', 'name' => 'Dashlane'],
    ['key' => 'mgr_lastpass', 'name' => 'LastPass'],
    ['key' => 'mgr_nordpass', 'name' => 'NordPass'],
    ['key' => 'mgr_roboform', 'name' => 'RoboForm'],
    ['key' => 'mgr_enpass', 'name' => 'Enpass'],
    ['key' => 'mgr_keeper', 'name' => 'Keeper'],
    ['key' => 'mgr_intuitive', 'name' => 'Intuitive Password'],
    ['key' => 'mgr_sticky', 'name' => 'Sticky Password'],
];

// Password generators list
$pwd_generators = [
    ['key' => 'gen_1password', 'name' => '1Password Generator'],
    ['key' => 'gen_avast', 'name' => 'Avast Password Generator'],
    ['key' => 'gen_bitwarden', 'name' => 'Bitwarden Password Generator'],
    ['key' => 'gen_bulk', 'name' => 'Bulk Password Generator'],
    ['key' => 'gen_dashlane', 'name' => 'Dashlane Password Generator'],
    ['key' => 'gen_expressvpn', 'name' => 'ExpressVPN Password Generator'],
    ['key' => 'gen_keeper', 'name' => 'Keeper Password Generator'],
    ['key' => 'gen_lastpass', 'name' => 'LastPass Password Generator'],
    ['key' => 'gen_manytools', 'name' => 'ManyTools Password Generator'],
    ['key' => 'gen_nordpass', 'name' => 'NordPass Password Generator'],
    ['key' => 'gen_norton', 'name' => 'Norton Password Generator'],
    ['key' => 'gen_passwordsnet', 'name' => 'PasswordsGenerator.net'],
    ['key' => 'gen_roboform', 'name' => 'RoboForm Password Generator'],
];
?>

<div class="content-grid fullbar">
    <h2 id="title"><?= htmlspecialchars($other['subtitle'] ?? 'Computer Tools & Resources'); ?></h2>

    <!-- Computer Repair Section -->
    <details tabindex="0" class="main-section">
        <summary class="section-title">
            <i class="fas fa-tools"></i> <?= htmlspecialchars($other['repair_summary'] ?? 'Computer Repair Guide'); ?>
        </summary>
        <div class="section-content">
            <p class="section-intro"><?= htmlspecialchars($other['repair_intro'] ?? ''); ?></p>
            <div class="troubleshooting-steps">
                <details tabindex="0" class="step-item">
                    <summary><?= htmlspecialchars($other['repair_step1_sum'] ?? '1. Check Physical Connections'); ?></summary>
                    <div>
                        <p>
                            <span tabindex="0" class="selection_2"><?= htmlspecialchars($other['repair_step1_p1'] ?? ''); ?></span><br/>
                            <span tabindex="0" class="selection_2"><?= htmlspecialchars($other['repair_step1_p2'] ?? ''); ?></span>
                        </p>
                    </div>
                </details>

                <details tabindex="0" class="step-item">
                    <summary><?= htmlspecialchars($other['repair_step2_sum'] ?? '2. Power Supply Verification'); ?></summary>
                    <div>
                        <p>
                            <span tabindex="0" class="selection_2"><?= htmlspecialchars($other['repair_step2_p1'] ?? ''); ?></span><br/>
                            <span tabindex="0" class="selection_2"><?= htmlspecialchars($other['repair_step2_p2'] ?? ''); ?></span><br/>
                            <span tabindex="0" class="selection_2"><?= htmlspecialchars($other['repair_step2_p3'] ?? ''); ?></span>
                        </p>
                    </div>
                </details>

                <details tabindex="0" class="step-item">
                    <summary><?= htmlspecialchars($other['repair_step3_sum'] ?? '3. Hardware Component Check'); ?></summary>
                    <div>
                        <p>
                            <span tabindex="0" class="selection_2"><?= htmlspecialchars($other['repair_step3_p1'] ?? ''); ?></span><br/>
                            <span tabindex="0" class="selection_2"><?= htmlspecialchars($other['repair_step3_p2'] ?? ''); ?></span><br/>
                            <span tabindex="0" class="selection_2"><?= htmlspecialchars($other['repair_step3_p3'] ?? ''); ?></span>
                        </p>
                    </div>
                </details>
            </div>

            <p class="section-intro">
                <?= str_replace(
                    ['{SEARCH_LINK}', '{SEARCH_ATTR}'],
                    [htmlspecialchars($links['repair_search'] ?? '#'), htmlspecialchars($other['repair_search_attr'] ?? '')],
                    $other['repair_note'] ?? ''
                ); ?>
            </p>
        </div>
    </details>

    <!-- Windows Shortcuts Section -->
    <details tabindex="0" class="main-section">
        <summary class="section-title">
            <i class="fab fa-windows"></i> <?= htmlspecialchars($other['sc_summary'] ?? 'Essential Windows Shortcuts'); ?>
        </summary>
        <div class="shortcuts-grid">
            <!-- File Operations -->
            <div class="shortcut-category">
                <h3 class="category-title"><?= htmlspecialchars($other['sc_cat1'] ?? 'File Operations'); ?></h3>
                <div class="shortcut-list">
                    <section tabindex="0">
                        <p>Ctrl + C</p>
                        <p><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['sc_cat1_1'] ?? 'Copy selected item'); ?></span></p>
                    </section>
                    <section tabindex="0">
                        <p>Ctrl + X</p>
                        <p><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['sc_cat1_2'] ?? 'Cut selected item'); ?></span></p>
                    </section>
                    <section tabindex="0">
                        <p>Ctrl + V</p>
                        <p><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['sc_cat1_3'] ?? 'Paste selected item'); ?></span></p>
                    </section>
                    <section tabindex="0">
                        <p>Ctrl + S</p>
                        <p><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['sc_cat1_4'] ?? 'Save current file'); ?></span></p>
                    </section>
                </div>
            </div>

            <!-- System Navigation -->
            <div class="shortcut-category">
                <h3 class="category-title"><?= htmlspecialchars($other['sc_cat2'] ?? 'System Navigation'); ?></h3>
                <div class="shortcut-list">
                    <section tabindex="0">
                        <p>Win + E</p>
                        <p><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['sc_cat2_1'] ?? 'Open File Explorer'); ?></span></p>
                    </section>
                    <section tabindex="0">
                        <p>Win + D</p>
                        <p><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['sc_cat2_2'] ?? 'Show desktop'); ?></span></p>
                    </section>
                    <section tabindex="0">
                        <p>Win + L</p>
                        <p><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['sc_cat2_3'] ?? 'Lock computer'); ?></span></p>
                    </section>
                    <section tabindex="0">
                        <p>Alt + Tab</p>
                        <p><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['sc_cat2_4'] ?? 'Switch between programs'); ?></span></p>
                    </section>
                </div>
            </div>

            <!-- Window Management -->
            <div class="shortcut-category">
                <h3 class="category-title"><?= htmlspecialchars($other['sc_cat3'] ?? 'Window Management'); ?></h3>
                <div class="shortcut-list">
                    <section tabindex="0">
                        <p>Win + &larr;/&rarr;</p>
                        <p><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['sc_cat3_1'] ?? 'Snap window left/right'); ?></span></p>
                    </section>
                    <section tabindex="0">
                        <p>Win + &uarr;/&darr;</p>
                        <p><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['sc_cat3_2'] ?? 'Maximize/minimize window'); ?></span></p>
                    </section>
                    <section tabindex="0">
                        <p>Alt + F4</p>
                        <p><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['sc_cat3_3'] ?? 'Close active window'); ?></span></p>
                    </section>
                </div>
            </div>
        </div>
    </details>

    <!-- Remote Support Section -->
    <details tabindex="0" class="main-section">
        <summary class="section-title">
            <i class="fas fa-desktop"></i> <?= htmlspecialchars($other['remote_summary'] ?? 'Remote Support Services'); ?>
        </summary>
        <div class="section-content">
            <p class="section-intro"><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['remote_intro'] ?? ''); ?></span></p>
            <ul class="service-list">
                <li><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['remote_item1'] ?? ''); ?></span></li>
                <li><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['remote_item2'] ?? ''); ?></span></li>
                <li><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['remote_item3'] ?? ''); ?></span></li>
                <li><span tabindex="0" class="selection_2"><?= htmlspecialchars($other['remote_item4'] ?? ''); ?></span></li>
            </ul>
            <div class="service-link">
                <a href="../offered_services/remoteSupport" title="<?= htmlspecialchars($other['remote_btn'] ?? ''); ?>" class="button">
                    <i class="fas fa-arrow-right"></i> <?= htmlspecialchars($other['remote_btn'] ?? 'Explore Our Remote Support Services'); ?>
                </a>
            </div>
        </div>
    </details>

    <!-- MSP Section -->
    <details tabindex="0" class="main-section">
        <summary class="section-title">
            <i class="fas fa-network-wired"></i> <?= htmlspecialchars($other['msp_summary'] ?? 'Managed Service Providers (MSP)'); ?>
        </summary>
        <div class="section-content">
            <p class="section-intro"><cite><?= htmlspecialchars($other['msp_intro'] ?? ''); ?></cite></p>
            <ul class="msp-services">
                <li><?= htmlspecialchars($other['msp_item1'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['msp_item2'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['msp_item3'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['msp_item4'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['msp_item5'] ?? ''); ?></li>
            </ul>
        </div>
    </details>

    <!-- Backups Section -->
    <details tabindex="0" class="main-section">
        <summary class="section-title">
            <i class="fas fa-database"></i> <?= htmlspecialchars($other['backup_summary'] ?? 'Backups'); ?>
        </summary>
        <div class="section-content">
            <p class="section-intro"><cite><?= htmlspecialchars($other['backup_intro'] ?? ''); ?></cite></p>
            <ul class="backups">
                <li><?= htmlspecialchars($other['backup_item1'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['backup_item2'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['backup_item3'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['backup_item4'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['backup_item5'] ?? ''); ?></li>
            </ul>
            <div class="service-link">
                <a href="../offered_security/backups" title="<?= htmlspecialchars($other['backup_btn'] ?? 'Explore more'); ?>" class="button">
                    <i class="fas fa-arrow-right"></i> <?= htmlspecialchars($other['backup_btn'] ?? 'Explore more'); ?>
                </a>
            </div>
        </div>
    </details>

    <!-- Best Practices Section -->
    <details tabindex="0" class="main-section">
        <summary class="section-title">
            <i class="fas fa-shield-halved"></i> <?= htmlspecialchars($other['bp_summary'] ?? 'Best Practices'); ?>
        </summary>
        <div class="section-content">
            <p class="section-intro"><cite><?= htmlspecialchars($other['bp_intro'] ?? ''); ?></cite></p>
            <ul class="best-practices">
                <li><?= htmlspecialchars($other['bp_item1'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['bp_item2'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['bp_item3'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['bp_item4'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['bp_item5'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['bp_item6'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['bp_item7'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['bp_item8'] ?? ''); ?></li>
                <li><?= htmlspecialchars($other['bp_item9'] ?? ''); ?></li>
            </ul>
            <div class="service-link">
                <a href="../offered_security/best_practices" title="<?= htmlspecialchars($other['bp_btn'] ?? 'Explore more'); ?>" class="button">
                    <i class="fas fa-arrow-right"></i> <?= htmlspecialchars($other['bp_btn'] ?? 'Explore more'); ?>
                </a>
            </div>
        </div>
    </details>

    <!-- Passwords Section -->
    <details tabindex="0" class="main-section">
        <summary class="section-title">
            <i class="fas fa-key"></i> <?= htmlspecialchars($other['pwd_summary'] ?? 'Passwords'); ?>
        </summary>
        <div class="section-content">
            <p class="section-intro"><cite><?= htmlspecialchars($other['pwd_intro'] ?? ''); ?></cite></p>
            <div class="passwords">
                <details>
                    <summary><?= htmlspecialchars($other['pwd_strong_sum'] ?? 'Use strong passwords'); ?></summary>
                    <p><?= htmlspecialchars($other['pwd_strong_text'] ?? ''); ?></p>
                </details>
                <details>
                    <summary><?= htmlspecialchars($other['pwd_unique_sum'] ?? 'Use unique passwords'); ?></summary>
                    <p><?= htmlspecialchars($other['pwd_unique_text'] ?? ''); ?></p>
                </details>
                <details>
                    <summary><?= htmlspecialchars($other['pwd_mgr_sum'] ?? 'password managers'); ?></summary>
                    <ul class="mgr-list">
                        <?php foreach ($pwd_managers as $mgr) : 
                            $href = htmlspecialchars($links[$mgr['key']] ?? '#');
                        ?>
                            <li><a href="<?= $href; ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($mgr['name']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </details>
                <details>
                    <summary><?= htmlspecialchars($other['pwd_gen_sum'] ?? 'password generators'); ?></summary>
                    <ul class="gen-list">
                        <?php foreach ($pwd_generators as $gen) : 
                            $href = htmlspecialchars($links[$gen['key']] ?? '#');
                        ?>
                            <li><a href="<?= $href; ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($gen['name']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </details>
                <details>
                    <summary><?= htmlspecialchars($other['pwd_vault_sum'] ?? 'Password vaults'); ?></summary>
                    <p><?= htmlspecialchars($other['pwd_vault_text'] ?? ''); ?></p>
                </details>
            </div>
            <div class="service-link">
                <a href="../offered_security/passwords" title="<?= htmlspecialchars($other['pwd_btn'] ?? 'Explore more'); ?>" class="button">
                    <i class="fas fa-arrow-right"></i> <?= htmlspecialchars($other['pwd_btn'] ?? 'Explore more'); ?>
                </a>
            </div>
        </div>
    </details>
</div>
