<?php
/* ============================================================
   Security page - CSS injected via the cssStyles() hook
   ============================================================ */
function cssStyles() {
    ?>
<style>
/* ── Hero ── */
.sec-hero {
    background:
        radial-gradient(circle at 86% 50%, rgba(96, 165, 250, 0.42) 0%, rgba(30, 58, 95, 0.2) 42%, transparent 68%),
        linear-gradient(135deg, #0a192f 0%, #112844 40%, #16365c 75%, #1d4674 100%);
    color: #fff;
    border-radius: 20px;
    padding: 3rem 2.5rem 2.5rem;
    margin: 1.5rem auto;
    max-width: 1200px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 24px 64px rgba(0, 0, 0, .22);
}

.sec-hero::before {
    content: '';
    position: absolute;
    top: -80px;
    right: -80px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(255, 255, 255, .07) 0%, transparent 70%);
    border-radius: 50%;
}

.sec-hero::after {
    content: '';
    position: absolute;
    bottom: -100px;
    left: -60px;
    width: 350px;
    height: 350px;
    background: radial-gradient(circle, rgba(59, 130, 246, .12) 0%, transparent 70%);
    border-radius: 50%;
}

.sec-hero-inner {
    display: flex;
    align-items: center;
    gap: 1.8rem;
    flex-wrap: wrap;
    position: relative;
    z-index: 2;
    max-width: 650px;
}

.sec-hero-bg-art {
    position: absolute;
    right: 1.5rem;
    top: 50%;
    transform: translateY(-50%);
    width: 440px;
    max-width: 45%;
    mix-blend-mode: multiply;
    pointer-events: none;
    z-index: 1;
    opacity: 0.95;
    filter: contrast(1.05) brightness(1.02);
    mask-image: radial-gradient(ellipse at center, rgba(0, 0, 0, 1) 55%, rgba(172, 162, 162, 0.42) 88%);
    -webkit-mask-image: radial-gradient(ellipse at center, rgba(0, 0, 0, 1) 55%, rgba(0, 0, 0, 0) 88%);
}

.sec-hero-bg-art img {
    width: 100%;
    height: auto;
    display: block;
}

.sec-shield {
    font-size: 4.5rem;
    animation: shieldPulse 2.4s ease-in-out infinite;
    filter: drop-shadow(0 0 18px rgba(96, 165, 250, .55));
    flex-shrink: 0;
}

@keyframes shieldPulse {

    0%,
    100% {
        transform: scale(1) rotate(-2deg);
    }

    50% {
        transform: scale(1.08) rotate(2deg);
    }
}

.sec-hero h1 {
    color: #fff !important;
    font-size: clamp(1.8rem, 4vw, 2.6rem);
    margin: 0 0 .4rem;
    letter-spacing: -.03em;
    font-weight: 800;
}

.sec-hero p {
    color: rgba(255, 255, 255, .82);
    font-size: .95rem;
    margin: 0;
}

.sec-hero .sec-meta {
    font-size: .78rem;
    color: rgba(255, 255, 255, .55);
    margin-top: .6rem;
}

.sec-hero .sec-meta a {
    color: rgba(255, 255, 255, .85);
    text-decoration: underline;
}

/* ── Checklist: clean floating tiles, full-width responsive grid ── */
.sec-checklist {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 1.1rem;
    margin: 1.8rem 0;
}

@media (max-width: 860px) {
    .sec-hero-bg-art {
        opacity: 0.22;
        width: 280px;
        max-width: 65%;
        right: -15px;
    }

    .sec-hero-inner {
        max-width: 100%;
    }
}

.sec-card {
    background: #fff;
    border-radius: 16px;
    padding: 1.25rem 1.4rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, .05), 0 8px 24px rgba(0, 0, 0, .07);
    display: flex;
    gap: 1rem;
    align-items: flex-start;
    transition: box-shadow .22s ease, transform .22s ease;
    cursor: default;
}

.sec-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 2px 6px rgba(0, 0, 0, .04), 0 16px 40px rgba(0, 30, 80, .12);
}

.sec-card-num {
    background: #f0f4ff;
    color: #1e3a5f;
    font-weight: 700;
    font-size: .78rem;
    letter-spacing: .02em;
    border-radius: 8px;
    width: 28px;
    height: 28px;
    min-width: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: .05rem;
    flex-shrink: 0;
}

.sec-card p {
    margin: 0;
    font-size: .9rem;
    color: #374151;
    line-height: 1.6;
}

.sec-card-icon {
    font-size: 1.35rem;
    flex-shrink: 0;
    margin-top: .05rem;
}

/* ── Section titles: editorial, no underline rule ── */
.sec-section-title {
    font-size: clamp(1.25rem, 2.5vw, 1.65rem);
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -.03em;
    margin: 2.8rem 0 1.2rem;
    display: flex;
    align-items: center;
    gap: .6rem;
}

.sec-section-title span {
    font-size: 1.4rem;
}

/* ── Threat cards: dark glass chips ── */
.threat-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    gap: 1rem;
    margin: 1.2rem 0 2.2rem;
}

.threat-card {
    border-radius: 18px;
    padding: 1.4rem 1.3rem;
    color: #fff;
    box-shadow: 0 4px 24px rgba(0, 0, 0, .16);
    transition: transform .22s ease, box-shadow .22s ease;
    position: relative;
    overflow: hidden;
}

.threat-card::before {
    content: attr(data-icon);
    position: absolute;
    right: -8px;
    bottom: -8px;
    font-size: 5.5rem;
    opacity: .09;
    line-height: 1;
    pointer-events: none;
}

.threat-card:hover {
    transform: translateY(-5px) scale(1.015);
    box-shadow: 0 14px 40px rgba(0, 0, 0, .22);
}

.threat-card h2 {
    font-size: .93rem;
    font-weight: 700;
    margin: 0 0 .45rem;
    letter-spacing: -.01em;
}

.threat-card h3 {
    font-size: .83rem;
    font-weight: 400;
    margin: 0;
    opacity: .85;
    line-height: 1.55;
}

.threat-card.physical {
    background: linear-gradient(140deg, #7f1d1d, #991b1b);
}

.threat-card.sidechan {
    background: linear-gradient(140deg, #4c1d95, #5b21b6);
}

.threat-card.remote {
    background: linear-gradient(140deg, #1e3a5f, #1e4d7b);
}

.threat-card.supply {
    background: linear-gradient(140deg, #7c2d12, #9a3412);
}

.threat-card.pwcrack {
    background: linear-gradient(140deg, #064e3b, #065f46);
}

.threat-card.social {
    background: linear-gradient(140deg, #78350f, #92400e);
}

.threat-card.quantum {
    background: linear-gradient(140deg, #0c3257, #0f4270);
}

.threat-card.ai {
    background: linear-gradient(140deg, #14532d, #166534);
}

/* ── Password strength demo ── */
.pw-strength-demo {
    background: #fff;
    border-radius: 18px;
    padding: 1.8rem;
    margin: 1.4rem 0;
    box-shadow: 0 1px 3px rgba(0, 0, 0, .05), 0 8px 28px rgba(0, 0, 0, .07);
}

.pw-strength-demo label {
    font-weight: 700;
    font-size: .9rem;
    color: #0f172a;
    display: block;
    margin-bottom: .65rem;
    letter-spacing: -.01em;
}

.pw-input-field {
    width: 100%;
    padding: .8rem 1.1rem;
    background: #f8fafc;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    font-size: 1rem;
    font-family: 'SF Mono', 'Fira Code', monospace;
    outline: none;
    color: #0f172a;
    transition: border-color .2s, box-shadow .2s;
}

.pw-input-field:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, .12);
}

.pw-meter-bar {
    height: 6px;
    border-radius: 99px;
    background: #f1f5f9;
    margin: .9rem 0 .4rem;
    overflow: hidden;
}

.pw-meter-label {
    font-size: .82rem;
    font-weight: 600;
    color: #64748b;
    letter-spacing: .01em;
}

/* ── Auth method tiles ── */
.auth-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(190px, 1fr));
    gap: 1rem;
    margin: 1.2rem 0 1.8rem;
}

.auth-card {
    background: #fff;
    border-radius: 18px;
    padding: 1.5rem 1rem;
    text-align: center;
    box-shadow: 0 1px 3px rgba(0, 0, 0, .05), 0 6px 20px rgba(0, 0, 0, .07);
    transition: transform .22s ease, box-shadow .22s ease;
    cursor: default;
}

.auth-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 2px 6px rgba(0, 0, 0, .04), 0 16px 40px rgba(0, 30, 80, .12);
}

.auth-card .auth-icon {
    font-size: 2.2rem;
    display: block;
    margin-bottom: .6rem;
}

.auth-card h3 {
    font-size: .9rem;
    font-weight: 700;
    color: #0f172a;
    margin: 0 0 .35rem;
    letter-spacing: -.01em;
}

.auth-card p {
    font-size: .79rem;
    color: #64748b;
    margin: 0;
    line-height: 1.45;
}

/* ── Backup type tiles: white surface, hairline top accent, no border frame ── */
.backup-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(210px, 1fr));
    gap: 1rem;
    margin: 1.4rem 0;
}

.backup-card {
    background: #fff;
    border-radius: 18px;
    padding: 1.5rem 1.2rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, .05), 0 8px 24px rgba(0, 0, 0, .07);
    text-align: center;
    transition: transform .22s ease, box-shadow .22s ease;
    cursor: default;
    position: relative;
    overflow: hidden;
}

.backup-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    border-radius: 18px 18px 0 0;
}

.backup-card.full::before {
    background: #3b82f6;
}

.backup-card.incr::before {
    background: #10b981;
}

.backup-card.diff::before {
    background: #f59e0b;
}

.backup-card.mirr::before {
    background: #8b5cf6;
}

.backup-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 2px 6px rgba(0, 0, 0, .04), 0 16px 40px rgba(0, 30, 80, .11);
}

.backup-card .bk-icon {
    font-size: 2.4rem;
    display: block;
    margin-bottom: .65rem;
}

.backup-card h3 {
    font-size: .95rem;
    font-weight: 700;
    margin: 0 0 .45rem;
    color: #0f172a;
    letter-spacing: -.01em;
}

.backup-card p {
    font-size: .81rem;
    color: #475569;
    margin: 0;
    line-height: 1.5;
}

/* ── Storage location cards ── */
.storage-trio {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin: 1.2rem 0 1.8rem;
}

.storage-card {
    flex: 1 1 200px;
    background: #fff;
    border-radius: 18px;
    padding: 1.4rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, .05), 0 8px 24px rgba(0, 0, 0, .07);
    transition: transform .22s ease, box-shadow .22s ease;
}

.storage-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 2px 6px rgba(0, 0, 0, .04), 0 16px 40px rgba(0, 30, 80, .11);
}

.storage-card .st-icon {
    font-size: 2rem;
    display: block;
    margin-bottom: .5rem;
}

.storage-card h3 {
    font-size: .95rem;
    font-weight: 700;
    margin: 0 0 .4rem;
    color: #0f172a;
    letter-spacing: -.01em;
}

.storage-card p {
    font-size: .83rem;
    margin: 0;
    color: #64748b;
    line-height: 1.5;
}

/* ── PM risk cards: clean elevated white, no side border ── */
.pm-risk-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
    gap: 1rem;
    margin: 1.2rem 0 1.8rem;
}

.pm-risk-card {
    background: #fff;
    border-radius: 14px;
    padding: 1.15rem 1.2rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, .05), 0 6px 20px rgba(0, 0, 0, .07);
    transition: transform .22s ease, box-shadow .22s ease;
}

.pm-risk-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 2px 6px rgba(0, 0, 0, .04), 0 12px 32px rgba(0, 30, 80, .10);
}

.pm-risk-card h3 {
    font-size: .9rem;
    font-weight: 700;
    color: #0f172a;
    margin: 0 0 .3rem;
    letter-spacing: -.01em;
}

.pm-risk-card p {
    font-size: .82rem;
    margin: 0;
    color: #64748b;
    line-height: 1.5;
}

/* ── PPP terminal block ── */
.ppp-box {
    background: #0d1117;
    color: #79c0ff;
    font-family: 'SF Mono', 'Fira Code', monospace;
    border-radius: 14px;
    padding: 1.4rem 1.6rem;
    font-size: .88rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, .3);
    overflow-x: auto;
    margin: 1.2rem 0;
    line-height: 1.75;
    white-space: pre;
}

.ppp-box .ppp-header {
    color: #cdd9e5;
    font-weight: 700;
    margin-bottom: .3rem;
    display: block;
}

/* ── Tip / info box: elevated card, no left border ── */
.sec-tip {
    background: #f8fafc;
    border-radius: 14px;
    padding: 1.1rem 1.4rem;
    margin: 1.4rem 0;
    font-size: .9rem;
    color: #374151;
    box-shadow: 0 1px 3px rgba(0, 0, 0, .05), 0 4px 16px rgba(0, 0, 0, .06);
    line-height: 1.6;
}

.sec-tip strong {
    color: #0f172a;
}

/* ── Utility ── */
.sec-divider {
    border: none;
    border-top: 1px solid #f1f5f9;
    margin: 2.5rem 0;
}

.back-top-btn {
    display: inline-flex;
    align-items: center;
    gap: .4rem;
    margin: 1rem 0 .5rem;
    padding: .55rem 1.2rem;
    background: #0f172a;
    color: #fff !important;
    border-radius: 99px;
    font-size: .84rem;
    font-weight: 700;
    letter-spacing: .01em;
    text-decoration: none !important;
    transition: background .2s ease, transform .2s ease;
    box-shadow: 0 4px 14px rgba(0, 0, 0, .18);
}

.back-top-btn:hover {
    background: #1e3a5f;
    transform: translateY(-2px);
}
</style>
<?php
}

/* ============================================================
   ENGLISH FUNCTIONS
   ============================================================ */

function security() { 
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
?>
<article class="fullbar">
    <div class="sec-hero">
        <div class="sec-hero-inner">
            <span class="sec-shield" role="img" aria-label="shield">&#x1F6E1;&#xFE0F;</span>
            <div>
                <h1>Security</h1>
                <p>Valuable Implementable Measures &mdash; keep your digital life locked down.</p>
                <p class="sec-meta">
                    &#x1F4C5; February 1, 2023 &nbsp;|&nbsp; Posted by
                    <a href="../about/?omar#scroll">Omar Garcia</a> &nbsp;|&nbsp;
                    <a href="?security#navi">Security</a>,
                    <a href="?best_practices#navi">Best Practices</a>
                </p>
            </div>
        </div>
        <div class="sec-hero-bg-art" aria-hidden="true">
            <img src="<?= $imgDir; ?>images/gallery/secty.jpg"
                onerror="this.src='https://latinospc.com/images/gallery/secty.jpg'" alt="" width="600" height="451">
        </div>
    </div>

    <h2 class="sec-section-title"><span>&#x1F512;</span> Keep Your Security in Check</h2>
    <div class="sec-checklist" role="list">
        <?php
        $tips = [
            ["&#x1F5A5;&#xFE0F;",  "Your operating system and software must be kept up to date, installed with the latest security patches."],
            ["&#x1F511;",  "Use a strong, unique password for each device and account, also enable two-factor authentication (2FA) everywhere possible."],
            ["&#x1F6AB;",  "Avoid clicking on links or downloading attachments from unknown or suspicious sources."],
            ["&#x1F9A0;",  "Use anti-virus and anti-malware software to protect against known threats."],
            ["&#x1F4BE;",  "Keep a backup of important files to an external drive or cloud service &mdash; so you are never caught off guard."],
            ["&#x1F510;",  "Use encryption to protect sensitive data stored on your devices. Be cautious when connecting to public Wi-Fi networks, and use a virtual private network (VPN) when possible."],
            ["&#x1F525;",  "Use a firewall to block unauthorized access to your devices. Use a lockout policy to automatically lock your device after a period of inactivity."],
            ["&#x1F6AA;",  "Log out and lock your device when stepping away. Watch out for phishing &amp; social engineering."],
            ["&#x1F464;",  "Limit the number of admin users. Restrict access to sensitive data and settings."],
            ["&#x1F4CB;",  "Regularly review user accounts and permissions &mdash; only authorized people should have access."],
            ["&#x1F46A;",  "Use parental controls to block harmful content on family devices."],
            ["&#x2699;&#xFE0F;",   "Regularly review your device's security settings and configurations to ensure they are up to date and appropriate for your needs."],
            ["&#x1F5D1;&#xFE0F;",  "When discarding or selling old devices, securely erase all data and restore the device to its factory settings."],
        ];
        foreach ($tips as $i => [$icon, $text]): ?>
        <div class="sec-card" role="listitem">
            <span class="sec-card-icon"><?= $icon ?></span>
            <div class="sec-card-num"><?= $i + 1 ?></div>
            <p><?= $text ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</article>
<?php }

function best_practices() {
    $icons = ['physical'=>'&#x1FAB9;','sidechan'=>'&#x1F4E1;','remote'=>'&#x1F310;','supply'=>'&#x1F4E6;','pwcrack'=>'&#x1F513;','social'=>'&#x1F3AD;','quantum'=>'&#x269B;&#xFE0F;','ai'=>'&#x1F916;'];
    $threats = [
        ['physical', 'Physical Attacks',          'A bad actor may steal your device or use an "evil maid" attack &mdash; tampering with it while unattended in places like a hotel room.'],
        ['sidechan', 'Side-Channel Attacks',       'Attackers extract sensitive info by measuring power consumption, electromagnetic emissions, or other physical device characteristics.'],
        ['remote',   'Remote Access Attacks',      'Exploiting vulnerabilities in remote-access software or planting malware backdoors to silently access your system.'],
        ['supply',   'Supply-Chain Attacks',       'Compromising a device before it reaches you &mdash; e.g., pre-installing malware during manufacturing or shipping.'],
        ['pwcrack',  'Password Cracking',          'Brute-force, dictionary attacks, or known algorithm weaknesses used to crack account or device passwords.'],
        ['social',   'Social Engineering',         'Disguising as a trusted entity (bank, government) to trick users into handing over credentials or sensitive data.'],
        ['quantum',  'Quantum Computing Attacks',  'Future quantum computers may crack today\'s encryption keys, exposing data that feels safe right now.'],
        ['ai',       'AI-Based Attacks',           'Malicious AI scans for system vulnerabilities at machine speed, discovering and exploiting weaknesses faster than humans can respond.'],
    ];
    $physTips = [
        "&#x1F512;" => "Keep computers in a secure, locked room or cabinet when not in use.",
        "&#x26D3;&#xFE0F;" => "Use a cable lock (e.g., Kensington lock) to physically secure computers to a desk.",
        "&#x1F4F7;" => "Use a privacy screen or webcam cover to block unwanted camera access.",
        "&#x26A1;" => "Plug into a surge protector to guard against power spikes.",
        "&#x1F32C;&#xFE0F;" => "Clean dust from fans and vents regularly to prevent overheating.",
        "&#x1F4BB;" => "Use a laptop lock when working in public spaces.",
        "&#x1F392;" => "Always use a protective case when transporting any device.",
        "&#x1F697;" => "Never leave devices visible inside a vehicle or in public areas.",
        "&#x1F440;" => "Stay aware of your surroundings in public &mdash; be ready to close your laptop quickly.",
    ];
    $risks = [
        ["&#x1F513;", "Security Breaches",      "All passwords live in one place. If that database is breached, everything is exposed."],
        ["&#x1F6AA;", "Loss of Access",          "Forget your master password? You lose access to every stored credential."],
        ["&#x1F3A3;", "Phishing",                "A successful phishing attack against you hands the attacker your entire vault."],
        ["&#x2601;&#xFE0F;",  "Cloud-Based Risks",       "Cloud PM providers can potentially access your data &mdash; or be hit by a breach themselves."],
        ["&#x1F4A5;", "Single Point of Failure", "If the service shuts down or goes offline, you may be locked out of everything at once."],
    ];
    ?>
<div class="fullbar">
    <h2 class="sec-section-title" id="p3s"><span>&#x26A0;&#xFE0F;</span> Train Yourself &amp; Your Team &mdash; Know the
        Threats</h2>
    <p><a href="?best_practices#navi" title="Best Practices">Stay vigilant and aware of potential attack vectors,
            including:</a></p>
    <div class="threat-grid">
        <?php foreach ($threats as [$cls, $title, $desc]): ?>
        <div class="threat-card <?= $cls ?>" data-icon="<?= $icons[$cls] ?>">
            <h2><?= $icons[$cls] ?> <?= $title ?></h2>
            <h3><?= $desc ?></h3>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="sec-tip">
        <strong>&#x1F30D; The threat landscape is constantly evolving.</strong>
        Stay informed and adapt your security measures regularly.
        <a href="?security#navi">Back to Security overview &rarr;</a>
    </div>
</div>
<div class="fullbar">
    <h2 class="sec-section-title"><span>&#x1F3E0;</span> Physical Device Best Practices</h2>
    <div class="sec-checklist">
        <?php foreach ($physTips as $ico => $tip): ?>
        <div class="sec-card">
            <span class="sec-card-icon"><?= $ico ?></span>
            <p><?= $tip ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <hr class="sec-divider">
    <h2 class="sec-section-title"><span>&#x1F5C4;&#xFE0F;</span> Password Managers &mdash; Convenience vs. Risk</h2>
    <p>Password managers offer great convenience, but come with inherited risks you should know:</p>
    <div class="pm-risk-list">
        <?php foreach ($risks as [$ico, $title, $desc]): ?>
        <div class="pm-risk-card">
            <h3><?= "$ico $title" ?></h3>
            <p><?= $desc ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="sec-tip">
        <strong>&#x2705; Mitigation:</strong> Use a strong unique master password, enable 2FA, keep the software
        updated,
        back up your vault, and keep an offline copy of critical passwords in a secure location.
    </div>
</div>
<?php }

function passwords() {
    $methods = [
        ['&#x1F511;', '2-Factor Auth',        'Two passwords / factors. Something you know + something you have or are.'],
        ['&#x261D;&#xFE0F;',  'Fingerprint',   'Biometric login using your unique fingerprint &mdash; fast and hard to fake.'],
        ['&#x1F600;', 'Facial Recognition',    'Uses your unique facial geometry to verify identity without typing anything.'],
        ['&#x1F310;', 'Social Login',           'Uses your social media credentials (Google, Facebook) to authenticate ownership.'],
        ['&#x1F52E;', 'Future of Passwords',   'Passkeys, FIDO2, and hardware tokens are reshaping how we prove identity online.'],
    ];
    ?>
<div class="fullbar">
    <h2 class="sec-section-title" id="top"><span>&#x1F511;</span> Passwords</h2>
    <p><span class="date">November 14, 2020</span> &nbsp;|&nbsp;
        Posted by <a href="?team#scroll">Omar Garcia</a> &nbsp;|&nbsp;
        <a href="?about#scroll">About Us</a>, <a href="?team#scroll">Team</a>
    </p>
    <blockquote class="sec-tip" style="font-style:italic">
        &ldquo;When the claimant successfully demonstrates knowledge of the password to the verifier through an
        established authentication protocol, the verifier is able to infer the claimant&rsquo;s identity.&rdquo;
        &mdash; <a href="https://en.wikipedia.org/wiki/Password" target="_blank" rel="noopener">Wikipedia</a>
    </blockquote>
    <p>Traditional advice: a strong password is <strong>12+ characters</strong>, mixes uppercase, lowercase,
        numbers, and symbols &mdash; and is <em>never</em> a dictionary word or obvious substitution.</p>

    <div class="pw-strength-demo">
        <label for="pw-input-en">&#x1F50D; Try it &mdash; type a password to see its strength:</label>
        <input type="password" id="pw-input-en" class="pw-input-field" placeholder="Type a password..."
            autocomplete="new-password">
        <div class="pw-meter-bar">
            <div class="pw-meter-fill" id="pw-fill-en"></div>
        </div>
        <p class="pw-meter-label" id="pw-label-en">Start typing&hellip;</p>
        <p style="font-size:.78rem;color:var(--light-text);margin-top:.4rem">
            &#x2139;&#xFE0F; Nothing is sent anywhere &mdash; this runs 100% in your browser.
            <a href="https://www.security.org/how-secure-is-my-password/" target="_blank" rel="noopener">Check it
                further &rarr;</a>
        </p>
    </div>
    <script>
    (function() {
        var cfg = [{
            id: 'pw-input-en',
            fill: 'pw-fill-en',
            lbl: 'pw-label-en',
            empty: 'Start typing\u2026',
            levels: [{
                max: 4,
                pct: 15,
                color: '#e74c3c',
                text: '\uD83D\uDD34 Very Weak'
            }, {
                max: 7,
                pct: 35,
                color: '#e67e22',
                text: '\uD83D\uDFE0 Weak'
            }, {
                max: 10,
                pct: 58,
                color: '#f1c40f',
                text: '\uD83D\uDFE1 Fair'
            }, {
                max: 13,
                pct: 78,
                color: '#2ecc71',
                text: '\uD83D\uDFE2 Strong'
            }, {
                max: Infinity,
                pct: 100,
                color: '#27ae60',
                text: '\uD83D\uDCAA Very Strong!'
            }]
        }];
        cfg.forEach(function(c) {
            var inp = document.getElementById(c.id),
                fill = document.getElementById(c.fill),
                lbl = document.getElementById(c.lbl);
            if (!inp) return;
            inp.addEventListener('input', function() {
                var v = this.value,
                    len = v.length,
                    score = len + (/[A-Z]/.test(v) ? 2 : 0) + (/[a-z]/.test(v) ? 1 : 0) + (/[0-9]/
                        .test(v) ? 2 : 0) + (/[^A-Za-z0-9]/.test(v) ? 4 : 0);
                if (!len) {
                    fill.style.width = '0%';
                    lbl.textContent = c.empty;
                    return;
                }
                for (var i = 0; i < c.levels.length; i++) {
                    if (score <= c.levels[i].max) {
                        fill.style.width = c.levels[i].pct + '%';
                        fill.style.background = c.levels[i].color;
                        lbl.textContent = c.levels[i].text;
                        break;
                    }
                }
            });
        });
    })();
    </script>

    <h2 class="sec-section-title" style="margin-top:2rem"><span>&#x1F6E1;&#xFE0F;</span> Authentication Methods</h2>
    <div class="auth-grid">
        <?php foreach ($methods as [$ico, $name, $desc]): ?>
        <div class="auth-card">
            <span class="auth-icon"><?= $ico ?></span>
            <h3><?= $name ?></h3>
            <p><?= $desc ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <hr class="sec-divider">
    <h2 class="sec-section-title"><span>&#x1F0CF;</span> Perfect Paper Passwords (PPP)</h2>
    <p><span class="date">November 11, 2020</span> &nbsp;|&nbsp; Posted by <a href="?omar#scroll">Omar Garcia</a></p>
    <p>Instead of memorizing a long password, memorize a <strong>pattern</strong> on a printed card. Each cell is read
        like coordinates: <code>C3|G7|B10|E5|A1</code></p>
    <div class="ppp-box"><span class="ppp-header"> A B C D E</span>
        1: \.=who b%$@dh v9$hn? ddy6?q oyxd8f
        2: .c.3;3 %ytqm1 n$4uz] f84tj~ dw6scw
        3: ,~k_tk e5#4a. @9e4bm cgcib. 9%$"#!
        4: 7&amp;oan- [:ri&gt;w +jk3,! a=bvr' u:]&amp;|=
        5: [etwvj 9k/xew rjl4p7 ds"k|n fw!odn
        6: ?7cpxv nj^gy] /wxfrk ixspk&gt; {@mm:}
        7: zf/s6t zbaa&gt;7 wcc$.^ !^teg? 2q7{\&lt;
        8: |afn:8 ,rvb34 xrym4! 6*^!z% u.]6r6
        9: !;ar~j f_@x2k s,6v5t &gt;cbud5 4yaroz
        10: od[/s" res.r] d\h%y, u}o3oz rkzsut</div>
    <div class="sec-tip">
        <strong>How to use:</strong> Memorize a grid pattern (e.g., C3&rarr;G7&rarr;B10) and read those cell characters
        as your password.
        Change patterns per site. Never write the pattern &mdash; only keep the card.
        <br><a href="https://grc.com/ppp.htm" target="_blank" rel="noopener">Learn more at GRC.com/ppp &rarr;</a>
    </div>
    <div style="text-align:right;margin-top:1.5rem">
        <a href="?contact" class="back-top-btn">&#x1F4EC; Get in touch with us</a>
    </div>
</div>
<?php }

function security_backups() {
    $types = [
        ['full','&#x1F4E6;','Full Backup',        'A complete copy of all data. Slowest to create &amp; restore, but gives total protection for disaster recovery.'],
        ['incr','&#x1F4C8;','Incremental Backup', 'Only saves changes since the last backup. Fast and light, but recovery requires chaining multiple backups.'],
        ['diff','&#x1F4CA;','Differential Backup','All changes since the last full backup. Faster recovery than incremental, more storage than incremental.'],
        ['mirr','&#x1FA9E;','Mirror Backup',       'An exact real-time copy of data. Instant restore, but accidental deletions mirror instantly too.'],
    ];
    ?>
<div class="fullbar">
    <h2 class="sec-section-title" id="top"><span>&#x1F4BE;</span> Backups</h2>
    <p>A backup is a copy of data you can restore if the original is lost or damaged. Choose the right strategy for your
        needs:</p>
    <div class="backup-grid">
        <?php foreach ($types as [$cls,$ico,$name,$desc]): ?>
        <div class="backup-card <?= $cls ?>">
            <span class="bk-icon"><?= $ico ?></span>
            <h3><?= $name ?></h3>
            <p><?= $desc ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="sec-tip">
        &#x1F4A1; <strong>Best practice:</strong> Follow the <strong>3-2-1 Rule</strong> &mdash; keep 3 copies of your
        data,
        on 2 different media types, with 1 copy stored offsite.
    </div>
    <h2 class="sec-section-title"><span>&#x1F4CD;</span> Where to Store Your Backups</h2>
    <div class="storage-trio">
        <div class="storage-card">
            <span class="st-icon">&#x1F3E0;</span>
            <h3><a href="#onsite_b">Onsite Backup</a></h3>
            <p>Easy to set up. Fast access. No internet required to back up or restore. Best for day-to-day recovery.
            </p>
        </div>
        <div class="storage-card" style="border-top-color:var(--secondary-color)">
            <span class="st-icon">&#x1F697;</span>
            <h3><a href="#offsite_b">Offsite Backup</a></h3>
            <p>A physical copy stored at a different location. Protects against local disasters like fire or theft.</p>
        </div>
        <div class="storage-card" style="border-top-color:#8e44ad">
            <span class="st-icon">&#x2601;&#xFE0F;</span>
            <h3><a href="#online_b">Cloud Backup</a></h3>
            <p>Automatic, accessible from anywhere with internet. Great as a third redundant layer of protection.</p>
        </div>
    </div>
    <hr class="sec-divider">
    <h3 id="onsite_b" style="color:var(--primary-dark);margin-bottom:.5rem">&#x1F3E0; Onsite Backup</h3>
    <p>Storing data on local physical media &mdash; portable hard drives or flash drives. A second internal drive can
        serve as a live backup; if the primary fails, downtime is minimal because drives typically warn of failure ahead
        of time.</p>
    <h3 id="offsite_b" style="color:var(--primary-dark);margin:1.5rem 0 .5rem">&#x1F697; Offsite Backup</h3>
    <p>Same physical media concept, but the drive is taken to a separate building. Protects against scenarios where both
        the computer and a local backup could be lost at the same time (fire, flood, theft).</p>
    <h3 id="online_b" style="color:var(--primary-dark);margin:1.5rem 0 .5rem">&#x2601;&#xFE0F; Cloud Storage</h3>
    <p>Data is stored on remote servers accessed via the internet. Log in from anywhere to retrieve files. Many services
        offer automatic syncing. Free tiers have limited space &mdash; choose a paid plan for full coverage.</p>
    <div style="margin-top:1.5rem"><a href="#top" class="back-top-btn">&#x2B06; Back to top</a></div>
</div>
<?php }

/* ============================================================
   SPANISH FUNCTIONS
   ============================================================ */

function seguridad() { 
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
?>
<article class="fullbar">
    <div class="sec-hero">
        <div class="sec-hero-inner">
            <span class="sec-shield" role="img" aria-label="escudo">&#x1F6E1;&#xFE0F;</span>
            <div>
                <h1>Seguridad</h1>
                <p>Medidas valiosas y aplicables &mdash; mant&eacute;n tu vida digital bajo llave.</p>
                <p class="sec-meta">
                    &#x1F4C5; 1 de febrero de 2023 &nbsp;|&nbsp; Publicado por
                    <a href="../about/?omar#scroll">Omar Garc&iacute;a</a> &nbsp;|&nbsp;
                    <a href="?security#navi">Seguridad</a>,
                    <a href="?best_practices#navi">Mejores Pr&aacute;cticas</a>
                </p>
            </div>
        </div>
        <div class="sec-hero-bg-art" aria-hidden="true">
            <img src="<?= $imgDir; ?>images/gallery/secty.jpg"
                onerror="this.src='https://latinospc.com/images/gallery/secty.jpg'" alt="" width="600" height="451">
        </div>
    </div>
    <h2 class="sec-section-title"><span>&#x1F512;</span> Mant&eacute;n tu Seguridad al D&iacute;a</h2>
    <div class="sec-checklist" role="list">
        <?php
        $tips = [
            ["&#x1F5A5;&#xFE0F;",  "Tu sistema operativo y software deben mantenerse actualizados con los &uacute;ltimos parches de seguridad."],
            ["&#x1F511;",  "Usa una contrase&ntilde;a segura y &uacute;nica para cada cuenta. Activa la autenticaci&oacute;n de dos factores (2FA) donde sea posible."],
            ["&#x1F6AB;",  "Evita hacer clic en enlaces o descargar archivos de fuentes desconocidas o sospechosas."],
            ["&#x1F9A0;",  "Instala software antivirus y antimalware de confianza para protegerte contra amenazas conocidas."],
            ["&#x1F4BE;",  "Respalda tus archivos importantes en una unidad externa o servicio en la nube."],
            ["&#x1F510;",  "Cifra los datos sensibles en tus dispositivos. Usa una VPN en redes Wi-Fi p&uacute;blicas."],
            ["&#x1F525;",  "Activa un firewall para bloquear accesos no autorizados. Configura el bloqueo autom&aacute;tico tras inactividad."],
            ["&#x1F6AA;",  "Cierra sesi&oacute;n y bloquea tu dispositivo cuando no lo uses. Mant&eacute;nte alerta ante phishing e ingenier&iacute;a social."],
            ["&#x1F464;",  "Limita el n&uacute;mero de usuarios administradores y restringe el acceso a datos sensibles."],
            ["&#x1F4CB;",  "Revisa peri&oacute;dicamente las cuentas y permisos de usuario. Solo personas autorizadas deben tener acceso."],
            ["&#x1F46A;",  "Usa controles parentales para bloquear contenido inapropiado en dispositivos familiares."],
            ["&#x2699;&#xFE0F;",   "Revisa regularmente la configuraci&oacute;n de seguridad de tus dispositivos para mantenerla al d&iacute;a."],
            ["&#x1F5D1;&#xFE0F;",  "Antes de vender o desechar un dispositivo, borra todos los datos de forma segura y restaura la configuraci&oacute;n de f&aacute;brica."],
        ];
        foreach ($tips as $i => [$icon, $text]): ?>
        <div class="sec-card" role="listitem">
            <span class="sec-card-icon"><?= $icon ?></span>
            <div class="sec-card-num"><?= $i + 1 ?></div>
            <p><?= $text ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</article>
<?php }

function mejores_practicas() {
    $icons = ['physical'=>'&#x1FAB9;','sidechan'=>'&#x1F4E1;','remote'=>'&#x1F310;','supply'=>'&#x1F4E6;','pwcrack'=>'&#x1F513;','social'=>'&#x1F3AD;','quantum'=>'&#x269B;&#xFE0F;','ai'=>'&#x1F916;'];
    $threats = [
        ['physical', 'Ataques f&iacute;sicos',              'Un actor malicioso puede robar tu dispositivo o usar el ataque "evil maid": manipularlo mientras est&aacute; desatendido en un lugar p&uacute;blico.'],
        ['sidechan', 'Ataques de canal lateral',            'Extraen informaci&oacute;n midiendo consumo de energ&iacute;a, emisiones electromagn&eacute;ticas u otras caracter&iacute;sticas f&iacute;sicas del dispositivo.'],
        ['remote',   'Ataques de acceso remoto',            'Explotan vulnerabilidades en software de acceso remoto o instalan malware con backdoors para acceder silenciosamente al sistema.'],
        ['supply',   'Ataques a la cadena de suministro',   'Comprometen el dispositivo antes de que llegue al usuario final &mdash; por ejemplo, instalando malware durante la fabricaci&oacute;n.'],
        ['pwcrack',  'Descifrado de contrase&ntilde;as',    'Ataques de fuerza bruta, diccionario o vulnerabilidades conocidas en algoritmos de hash para crackear contrase&ntilde;as.'],
        ['social',   'Ingenier&iacute;a social',            'Se disfrazan de una entidad confiable (banco, gobierno) para enga&ntilde;arte y obtener credenciales o informaci&oacute;n sensible.'],
        ['quantum',  'Ataques de computaci&oacute;n cu&aacute;ntica', 'Computadoras cu&aacute;nticas futuras podr&iacute;an descifrar claves de encriptaci&oacute;n actuales, exponiendo datos que hoy parecen seguros.'],
        ['ai',       'Ataques basados en IA',               'La IA maliciosa escanea vulnerabilidades a velocidad de m&aacute;quina, descubri&eacute;ndolas y explot&aacute;ndolas m&aacute;s r&aacute;pido que los humanos.'],
    ];
    $physTips = [
        "&#x1F512;" => "Mant&eacute;n las computadoras en un lugar seguro con llave cuando no se usen.",
        "&#x26D3;&#xFE0F;" => "Usa un cable de seguridad (candado Kensington) para fijar el equipo al escritorio.",
        "&#x1F4F7;" => "Usa un protector de privacidad o cubierta para la webcam.",
        "&#x26A1;" => "Conecta a un supresor de picos para protegerte de variaciones de voltaje.",
        "&#x1F32C;&#xFE0F;" => "Limpia el polvo de ventiladores y rejillas regularmente para evitar sobrecalentamiento.",
        "&#x1F4BB;" => "Usa un candado para laptop cuando trabajes en espacios p&uacute;blicos.",
        "&#x1F392;" => "Usa siempre una funda protectora al transportar cualquier dispositivo.",
        "&#x1F697;" => "Nunca dejes dispositivos a la vista dentro de un veh&iacute;culo o en lugares p&uacute;blicos.",
        "&#x1F440;" => "Permanece atento a tu entorno en p&uacute;blico &mdash; prep&aacute;rate para cerrar la laptop r&aacute;pidamente.",
    ];
    $risks = [
        ["&#x1F513;", "Brechas de seguridad",       "Todas tus contrase&ntilde;as est&aacute;n en un solo lugar. Si esa base de datos es comprometida, todo queda expuesto."],
        ["&#x1F6AA;", "P&eacute;rdida de acceso",   "&iquest;Olvidaste la contrase&ntilde;a maestra? Pierdes acceso a todas tus credenciales almacenadas."],
        ["&#x1F3A3;", "Phishing",                    "Un ataque de phishing exitoso le entrega al atacante toda tu b&oacute;veda de contrase&ntilde;as."],
        ["&#x2601;&#xFE0F;",  "Riesgos en la nube", "Los proveedores en la nube pueden potencialmente acceder a tus datos o sufrir una brecha."],
        ["&#x1F4A5;", "Punto &uacute;nico de falla", "Si el servicio cierra o queda fuera de l&iacute;nea, podr&iacute;as perder el acceso a todo de golpe."],
    ];
    ?>
<div class="fullbar">
    <h2 class="sec-section-title" id="p3s"><span>&#x26A0;&#xFE0F;</span> Cap&aacute;citate &mdash; Conoce las Amenazas
    </h2>
    <p><a href="?best_practices#navi" title="Mejores Pr&aacute;cticas">Mant&eacute;nte alerta ante posibles vectores de
            ataque, los cuales incluyen:</a></p>
    <div class="threat-grid">
        <?php foreach ($threats as [$cls, $title, $desc]): ?>
        <div class="threat-card <?= $cls ?>" data-icon="<?= $icons[$cls] ?>">
            <h2><?= $icons[$cls] ?> <?= $title ?></h2>
            <h3><?= $desc ?></h3>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="sec-tip">
        <strong>&#x1F30D; El panorama de amenazas evoluciona constantemente.</strong>
        Mant&eacute;nte informado y adapta tus medidas de seguridad con regularidad.
        <a href="?security#navi">Volver a Seguridad &rarr;</a>
    </div>
</div>
<div class="fullbar">
    <h2 class="sec-section-title"><span>&#x1F3E0;</span> Mejores Pr&aacute;cticas F&iacute;sicas</h2>
    <div class="sec-checklist">
        <?php foreach ($physTips as $ico => $tip): ?>
        <div class="sec-card">
            <span class="sec-card-icon"><?= $ico ?></span>
            <p><?= $tip ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <hr class="sec-divider">
    <h2 class="sec-section-title"><span>&#x1F5C4;&#xFE0F;</span> Gestores de Contrase&ntilde;as &mdash; Comodidad vs.
        Riesgo</h2>
    <p>Los gestores de contrase&ntilde;as ofrecen comodidad, pero conllevan riesgos inherentes que debes conocer:</p>
    <div class="pm-risk-list">
        <?php foreach ($risks as [$ico, $title, $desc]): ?>
        <div class="pm-risk-card">
            <h3><?= "$ico $title" ?></h3>
            <p><?= $desc ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="sec-tip">
        <strong>&#x2705; Mitigaci&oacute;n:</strong> Usa una contrase&ntilde;a maestra fuerte y &uacute;nica, activa
        2FA, mant&eacute;n el software actualizado,
        respalda tu b&oacute;veda y conserva una copia offline de tus contrase&ntilde;as m&aacute;s importantes en un
        lugar seguro.
    </div>
</div>
<?php }

function respaldos() {
    $types = [
        ['full','&#x1F4E6;','Respaldo completo',       'Copia total de todos los datos. M&aacute;s lento de crear y restaurar, pero ofrece protecci&oacute;n total ante desastres.'],
        ['incr','&#x1F4C8;','Respaldo incremental',    'Solo guarda los cambios desde el &uacute;ltimo respaldo. R&aacute;pido y liviano, pero la recuperaci&oacute;n encadena m&uacute;ltiples archivos.'],
        ['diff','&#x1F4CA;','Respaldo diferencial',    'Todos los cambios desde el &uacute;ltimo respaldo completo. Recuperaci&oacute;n m&aacute;s r&aacute;pida que el incremental.'],
        ['mirr','&#x1FA9E;','Respaldo espejo (Mirror)','Copia exacta en tiempo real. Restauraci&oacute;n inmediata, pero eliminaciones accidentales tambi&eacute;n se reflejan al instante.'],
    ];
    ?>
<div class="fullbar">
    <h2 class="sec-section-title" id="top"><span>&#x1F4BE;</span> Respaldo (Backup)</h2>
    <p>Un respaldo es una copia de datos que puedes restaurar si el original se pierde o da&ntilde;a. Elige la
        estrategia correcta:</p>
    <div class="backup-grid">
        <?php foreach ($types as [$cls,$ico,$name,$desc]): ?>
        <div class="backup-card <?= $cls ?>">
            <span class="bk-icon"><?= $ico ?></span>
            <h3><?= $name ?></h3>
            <p><?= $desc ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="sec-tip">
        &#x1F4A1; <strong>Regla 3-2-1:</strong> Mant&eacute;n 3 copias de tus datos, en 2 medios diferentes, con 1 copia
        almacenada fuera del lugar principal.
    </div>
    <h2 class="sec-section-title"><span>&#x1F4CD;</span> &iquest;D&oacute;nde Guardar tus Respaldos?</h2>
    <div class="storage-trio">
        <div class="storage-card">
            <span class="st-icon">&#x1F3E0;</span>
            <h3><a href="#onsite_b">Local (Onsite)</a></h3>
            <p>F&aacute;cil de configurar. Acceso r&aacute;pido. No requiere internet. Ideal para recuperaci&oacute;n
                diaria.</p>
        </div>
        <div class="storage-card" style="border-top-color:var(--secondary-color)">
            <span class="st-icon">&#x1F697;</span>
            <h3><a href="#offsite_b">Externo (Offsite)</a></h3>
            <p>Una copia f&iacute;sica en un lugar diferente. Protege ante desastres locales como incendio o robo.</p>
        </div>
        <div class="storage-card" style="border-top-color:#8e44ad">
            <span class="st-icon">&#x2601;&#xFE0F;</span>
            <h3><a href="#online_b">Nube (Cloud)</a></h3>
            <p>Autom&aacute;tico, accesible desde cualquier lugar con internet. Excelente como tercera capa de
                protecci&oacute;n.</p>
        </div>
    </div>
    <hr class="sec-divider">
    <h3 id="onsite_b" style="color:var(--primary-dark);margin-bottom:.5rem">&#x1F3E0; Respaldo local</h3>
    <p>Almacenar datos en medios f&iacute;sicos locales &mdash; discos duros port&aacute;tiles o memorias USB. Un
        segundo disco interno puede funcionar como respaldo en vivo; si el primario falla, el tiempo de inactividad es
        m&iacute;nimo.</p>
    <h3 id="offsite_b" style="color:var(--primary-dark);margin:1.5rem 0 .5rem">&#x1F697; Respaldo externo</h3>
    <p>Misma l&oacute;gica f&iacute;sica, pero el dispositivo se lleva a otro edificio. Protege contra escenarios donde
        tanto la computadora como un respaldo local podr&iacute;an perderse al mismo tiempo (incendio,
        inundaci&oacute;n, robo).</p>
    <h3 id="online_b" style="color:var(--primary-dark);margin:1.5rem 0 .5rem">&#x2601;&#xFE0F; Almacenamiento en la nube
    </h3>
    <p>Los datos se almacenan en servidores remotos accesibles por internet. Inicia sesi&oacute;n desde cualquier lugar.
        Muchos servicios sincronizan autom&aacute;ticamente. Los planes gratuitos tienen espacio limitado.</p>
    <div style="margin-top:1.5rem"><a href="#top" class="back-top-btn">&#x2B06; Volver al inicio</a></div>
</div>
<?php }

function clave() {
    $methods = [
        ['&#x1F511;', 'Autenticaci&oacute;n de 2 Factores', 'Dos contrase&ntilde;as / factores. Algo que sabes + algo que tienes o que eres.'],
        ['&#x261D;&#xFE0F;',  'Huella dactilar',              'Inicio biom&eacute;trico usando tu huella &uacute;nica &mdash; r&aacute;pido y dif&iacute;cil de falsificar.'],
        ['&#x1F600;', 'Reconocimiento facial',        'Usa tu geometr&iacute;a facial &uacute;nica para verificar identidad sin escribir nada.'],
        ['&#x1F310;', 'Inicio de sesi&oacute;n social', 'Usa credenciales de redes sociales (Google, Facebook) para autenticarte.'],
        ['&#x1F52E;', 'El futuro de las contrase&ntilde;as', 'Passkeys, FIDO2 y tokens de hardware est&aacute;n redefiniendo c&oacute;mo probamos identidad.'],
    ];
    ?>
<div class="fullbar">
    <h2 class="sec-section-title" id="top"><span>&#x1F511;</span> Contrase&ntilde;as</h2>
    <p><span class="date">14 de noviembre de 2020</span> &nbsp;|&nbsp;
        Publicado por <a href="?team#scroll">Omar Garc&iacute;a</a> &nbsp;|&nbsp;
        <a href="?about#scroll">Nosotros</a>, <a href="?team#scroll">Integrantes</a>
    </p>
    <blockquote class="sec-tip" style="font-style:italic">
        &ldquo;Cuando el solicitante demuestra con &eacute;xito el conocimiento de la contrase&ntilde;a al verificador a
        trav&eacute;s
        de un protocolo de autenticaci&oacute;n establecido, el verificador puede inferir la identidad del
        solicitante.&rdquo;
        &mdash; <a href="https://en.wikipedia.org/wiki/Password" target="_blank" rel="noopener">Wikipedia</a>
    </blockquote>
    <p>El consejo tradicional: una contrase&ntilde;a fuerte tiene <strong>12+ caracteres</strong>, combina
        may&uacute;sculas,
        min&uacute;sculas, n&uacute;meros y s&iacute;mbolos &mdash; y <em>nunca</em> es una palabra del diccionario ni
        una sustituci&oacute;n obvia.</p>

    <div class="pw-strength-demo">
        <label for="pw-input-es">&#x1F50D; Pru&eacute;balo &mdash; escribe una contrase&ntilde;a para ver su
            fortaleza:</label>
        <input type="password" id="pw-input-es" class="pw-input-field"
            placeholder="Escribe una contrase&ntilde;a&hellip;" autocomplete="new-password">
        <div class="pw-meter-bar">
            <div class="pw-meter-fill" id="pw-fill-es"></div>
        </div>
        <p class="pw-meter-label" id="pw-label-es">Empieza a escribir&hellip;</p>
        <p style="font-size:.78rem;color:var(--light-text);margin-top:.4rem">
            &#x2139;&#xFE0F; Nada se env&iacute;a a ning&uacute;n lado &mdash; funciona 100% en tu navegador.
            <a href="https://www.security.org/how-secure-is-my-password/" target="_blank" rel="noopener">Verifica
                m&aacute;s &rarr;</a>
        </p>
    </div>
    <script>
    (function() {
        var cfg = [{
            id: 'pw-input-es',
            fill: 'pw-fill-es',
            lbl: 'pw-label-es',
            empty: 'Empieza a escribir\u2026',
            levels: [{
                max: 4,
                pct: 15,
                color: '#e74c3c',
                text: '\uD83D\uDD34 Muy d\u00e9bil'
            }, {
                max: 7,
                pct: 35,
                color: '#e67e22',
                text: '\uD83D\uDFE0 D\u00e9bil'
            }, {
                max: 10,
                pct: 58,
                color: '#f1c40f',
                text: '\uD83D\uDFE1 Regular'
            }, {
                max: 13,
                pct: 78,
                color: '#2ecc71',
                text: '\uD83D\uDFE2 Fuerte'
            }, {
                max: Infinity,
                pct: 100,
                color: '#27ae60',
                text: '\uD83D\uDCAA \u00a1Muy fuerte!'
            }]
        }];
        cfg.forEach(function(c) {
            var inp = document.getElementById(c.id),
                fill = document.getElementById(c.fill),
                lbl = document.getElementById(c.lbl);
            if (!inp) return;
            inp.addEventListener('input', function() {
                var v = this.value,
                    len = v.length,
                    score = len + (/[A-Z]/.test(v) ? 2 : 0) + (/[a-z]/.test(v) ? 1 : 0) + (/[0-9]/
                        .test(v) ? 2 : 0) + (/[^A-Za-z0-9]/.test(v) ? 4 : 0);
                if (!len) {
                    fill.style.width = '0%';
                    lbl.textContent = c.empty;
                    return;
                }
                for (var i = 0; i < c.levels.length; i++) {
                    if (score <= c.levels[i].max) {
                        fill.style.width = c.levels[i].pct + '%';
                        fill.style.background = c.levels[i].color;
                        lbl.textContent = c.levels[i].text;
                        break;
                    }
                }
            });
        });
    })();
    </script>

    <h2 class="sec-section-title" style="margin-top:2rem"><span>&#x1F6E1;&#xFE0F;</span> M&eacute;todos de
        Autenticaci&oacute;n</h2>
    <div class="auth-grid">
        <?php foreach ($methods as [$ico, $name, $desc]): ?>
        <div class="auth-card">
            <span class="auth-icon"><?= $ico ?></span>
            <h3><?= $name ?></h3>
            <p><?= $desc ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <hr class="sec-divider">
    <h2 class="sec-section-title"><span>&#x1F0CF;</span> Perfect Paper Passwords (PPP)</h2>
    <p><span class="date">11 de noviembre de 2020</span> &nbsp;|&nbsp; Publicado por <a href="?omar#scroll">Omar
            Garc&iacute;a</a></p>
    <p>En vez de memorizar una contrase&ntilde;a larga, memoriza un <strong>patr&oacute;n</strong> en una tarjeta
        impresa. Cada celda se lee como coordenadas: <code>C3|G7|B10|E5|A1</code></p>
    <div class="ppp-box"><span class="ppp-header"> A B C D E</span>
        1: \.=who b%$@dh v9$hn? ddy6?q oyxd8f
        2: .c.3;3 %ytqm1 n$4uz] f84tj~ dw6scw
        3: ,~k_tk e5#4a. @9e4bm cgcib. 9%$"#!
        4: 7&amp;oan- [:ri&gt;w +jk3,! a=bvr' u:]&amp;|=
        5: [etwvj 9k/xew rjl4p7 ds"k|n fw!odn
        6: ?7cpxv nj^gy] /wxfrk ixspk&gt; {@mm:}
        7: zf/s6t zbaa&gt;7 wcc$.^ !^teg? 2q7{\&lt;
        8: |afn:8 ,rvb34 xrym4! 6*^!z% u.]6r6
        9: !;ar~j f_@x2k s,6v5t &gt;cbud5 4yaroz
        10: od[/s" res.r] d\h%y, u}o3oz rkzsut</div>
    <div class="sec-tip">
        <strong>C&oacute;mo usarla:</strong> Memoriza un patr&oacute;n de cuadr&iacute;cula (ej. C3&rarr;G7&rarr;B10) y
        lee los caracteres de esa celda como tu contrase&ntilde;a.
        Cambia el patr&oacute;n por sitio. Nunca escribas el patr&oacute;n &mdash; solo conserva la tarjeta.
        <br><a href="https://grc.com/ppp.htm" target="_blank" rel="noopener">Aprende m&aacute;s en GRC.com/ppp
            &rarr;</a>
    </div>
    <div style="text-align:right;margin-top:1.5rem">
        <a href="?contact" class="back-top-btn">&#x1F4EC; Ponte en contacto</a>
    </div>
</div>
<?php }


include dirname(__DIR__) . '/anvil/structure.php';

/*
   A      B      C      D      E
 1: \.=who b%$<dh +v9hn? ddy6?q oyxd8f
 2: .c.};{ %ytqm{ n<4uz] f84tj~ dw6scw
 3: ,~k_tk e5#4a. @9e)bm cgcib. 9%$"#!
 4: 7&oan- [:ri>w +jk3,! a=bvr' u:]&|=
 5: [etwvj 9k/xew rjl4p7 ds"k|n fw!odn
 6: ?7cpxv nj^gy] /wxfrk ixspk> {@mm:}
 7: zf/s6t zbaa>7 wcc$.^ !^teg? 2q7{\<
 8: |afn:8 ,rvb34 xrym4! 6*^!z% u.]6r6
 9: !;ar~j f_)x2k s,6v5t >cbud5 4yaroz
10: od[/s" res.r] d\h(y, u}o<oz rkzsut

*/
?>