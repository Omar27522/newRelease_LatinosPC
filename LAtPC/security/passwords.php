<?php
/**
 * Passwords & PPP (English: passwords, Spanish: clave)
 * Fed dynamically from databaseConnection('security').
 */

include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('security');
global $content, $key;

function render_passwords_view($isSpanish = false) {
    global $page, $content, $key;
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
    $langSuffix = $isSpanish ? 'es' : 'en';

    $methods = [
        ['&#x1F511;', $content[96][$key] ?? ($isSpanish ? 'Autenticación de 2 Factores' : '2-Factor Auth'),        $content[97][$key] ?? ''],
        ['&#x261D;&#xFE0F;',  $content[98][$key] ?? ($isSpanish ? 'Huella dactilar' : 'Fingerprint'),             $content[99][$key] ?? ''],
        ['&#x1F600;', $content[100][$key] ?? ($isSpanish ? 'Reconocimiento facial' : 'Facial Recognition'),      $content[101][$key] ?? ''],
        ['&#x1F310;', $content[102][$key] ?? ($isSpanish ? 'Inicio de sesión social' : 'Social Login'),          $content[103][$key] ?? ''],
        ['&#x1F52E;', $content[104][$key] ?? ($isSpanish ? 'El futuro de las contraseñas' : 'Future of Passwords'), $content[105][$key] ?? ''],
    ];
?>
<div class="fullbar">
    <?php include __DIR__ . '/navBarSecurity.php'; ?>
    <h2 class="sec-section-title" id="top"><span>&#x1F511;</span> <?= $content[89][$key] ?? ($isSpanish ? 'Contraseñas' : 'Passwords'); ?></h2>
    <p><span class="date"><?= $content[90][$key] ?? ''; ?></span> &nbsp;|&nbsp;
        <?= $content[8][$key] ?? ($isSpanish ? 'Publicado por' : 'Posted by'); ?> <a href="<?= $imgDir; ?>about/?omar#scroll"><?= $content[7][$key] ?? 'Omar Garcia'; ?></a> &nbsp;|&nbsp;
        <a href="<?= $imgDir; ?>about/"><?= $isSpanish ? 'Sobre Nosotros' : 'About Us'; ?></a>
    </p>
    <blockquote class="sec-tip" style="font-style:italic">
        <?= $content[91][$key] ?? ''; ?>
    </blockquote>
    <p><?= $content[92][$key] ?? ''; ?></p>

    <div class="pw-strength-demo">
        <label for="pw-input-<?= $langSuffix ?>">&#x1F50D; <?= $content[93][$key] ?? ($isSpanish ? 'Pruébalo — escribe una contraseña para ver su fortaleza:' : 'Try it — type a password to see its strength:'); ?></label>
        <input type="password" id="pw-input-<?= $langSuffix ?>" class="pw-input-field" placeholder="<?= $isSpanish ? 'Escribe una contraseña...' : 'Type a password...'; ?>"
            autocomplete="new-password">
        <div class="pw-meter-bar">
            <div class="pw-meter-fill" id="pw-fill-<?= $langSuffix ?>"></div>
        </div>
        <p class="pw-meter-label" id="pw-label-<?= $langSuffix ?>"><?= $isSpanish ? 'Comienza a escribir…' : 'Start typing…'; ?></p>
        <p style="font-size:.78rem;color:var(--light-text, #64748b);margin-top:.4rem">
            &#x2139;&#xFE0F; <?= $content[94][$key] ?? ($isSpanish ? 'Nada se envía a ningún sitio — esto se ejecuta 100% en tu navegador.' : 'Nothing is sent anywhere — this runs 100% in your browser.'); ?>
            <a href="https://www.security.org/how-secure-is-my-password/" target="_blank" rel="noopener"><?= $isSpanish ? 'Compruébalo a fondo →' : 'Check it further →'; ?></a>
        </p>
    </div>
    <script>
    (function() {
        var cfg = [{
            id: 'pw-input-<?= $langSuffix ?>',
            fill: 'pw-fill-<?= $langSuffix ?>',
            lbl: 'pw-label-<?= $langSuffix ?>',
            empty: '<?= $isSpanish ? "Comienza a escribir…" : "Start typing…" ?>',
            levels: [{
                max: 4,
                pct: 15,
                color: '#e74c3c',
                text: '\uD83D\uDD34 <?= $isSpanish ? "Muy débil" : "Very Weak" ?>'
            }, {
                max: 7,
                pct: 35,
                color: '#e67e22',
                text: '\uD83D\uDFE0 <?= $isSpanish ? "Débil" : "Weak" ?>'
            }, {
                max: 10,
                pct: 58,
                color: '#f1c40f',
                text: '\uD83D\uDFE1 <?= $isSpanish ? "Aceptable" : "Fair" ?>'
            }, {
                max: 13,
                pct: 78,
                color: '#2ecc71',
                text: '\uD83D\uDFE2 <?= $isSpanish ? "Fuerte" : "Strong" ?>'
            }, {
                max: Infinity,
                pct: 100,
                color: '#27ae60',
                text: '\uD83D\uDCAA <?= $isSpanish ? "¡Muy fuerte!" : "Very Strong!" ?>'
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
                    score = len + (/[A-Z]/.test(v) ? 2 : 0) + (/[a-z]/.test(v) ? 1 : 0) + (/[0-9]/.test(v) ? 2 : 0) + (/[^A-Za-z0-9]/.test(v) ? 4 : 0);
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

    <h2 class="sec-section-title" style="margin-top:2rem"><span>&#x1F6E1;&#xFE0F;</span> <?= $content[95][$key] ?? ($isSpanish ? 'Métodos de Autenticación' : 'Authentication Methods'); ?></h2>
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
    <h2 class="sec-section-title"><span>&#x1F0CF;</span> <?= $content[106][$key] ?? ($isSpanish ? 'Contraseñas Perfectas en Papel (PPP)' : 'Perfect Paper Passwords (PPP)'); ?></h2>
    <p><span class="date"><?= $content[107][$key] ?? ''; ?></span> &nbsp;|&nbsp; <?= $content[8][$key] ?? ($isSpanish ? 'Publicado por' : 'Posted by'); ?> <a
            href="<?= $imgDir; ?>about/?omar#scroll"><?= $content[7][$key] ?? 'Omar Garcia'; ?></a></p>
    <p><?= $content[108][$key] ?? ''; ?></p>
    <div class="ppp-box"><span class="ppp-header">      A      B      C      D      E</span>
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
        <strong><?= $isSpanish ? 'Cómo usarlo:' : 'How to use:'; ?></strong> <?= $content[109][$key] ?? ''; ?>
        <br><a href="https://grc.com/ppp.htm" target="_blank" rel="noopener"><?= $isSpanish ? 'Más información en GRC.com/ppp →' : 'Learn more at GRC.com/ppp →'; ?></a>
    </div>
    <div style="text-align:right;margin-top:1.5rem">
        <a href="<?= $imgDir; ?>contact/" class="back-top-btn">&#x1F4EC; <?= $content[110][$key] ?? ($isSpanish ? 'Ponte en contacto con nosotros' : 'Get in touch with us'); ?></a>
    </div>
</div>
<?php
}

function passwords() {
    render_passwords_view(false);
}

function clave() {
    render_passwords_view(true);
}