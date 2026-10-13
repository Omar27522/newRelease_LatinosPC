<?php
/**
 * Passwords & PPP (English: passwords, Spanish: clave)
 */

function passwords() {
    global $page;
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
    $methods = [
        ['&#x1F511;', '2-Factor Auth',        'Two passwords / factors. Something you know + something you have or are.'],
        ['&#x261D;&#xFE0F;',  'Fingerprint',   'Biometric login using your unique fingerprint &mdash; fast and hard to fake.'],
        ['&#x1F600;', 'Facial Recognition',    'Uses your unique facial geometry to verify identity without typing anything.'],
        ['&#x1F310;', 'Social Login',           'Uses your social media credentials (Google, Facebook) to authenticate ownership.'],
        ['&#x1F52E;', 'Future of Passwords',   'Passkeys, FIDO2, and hardware tokens are reshaping how we prove identity online.'],
    ];
    ?>
<div class="fullbar">
    <?php include __DIR__ . '/navBarSecurity.php'; ?>
    <h2 class="sec-section-title" id="top"><span>&#x1F511;</span> Passwords</h2>
    <p><span class="date">November 14, 2020</span> &nbsp;|&nbsp;
        Posted by <a href="<?= $imgDir; ?>about/?omar#scroll">Omar Garcia</a> &nbsp;|&nbsp;
        <a href="<?= $imgDir; ?>about/">About Us</a>
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
        <p style="font-size:.78rem;color:var(--light-text, #64748b);margin-top:.4rem">
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
    <p><span class="date">November 11, 2020</span> &nbsp;|&nbsp; Posted by <a
            href="<?= $imgDir; ?>about/?omar#scroll">Omar Garcia</a></p>
    <p>Instead of memorizing a long password, memorize a <strong>pattern</strong> on a printed card. Each cell is read
        like coordinates: <code>C3|G7|B10|E5|A1</code></p>
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
        <strong>How to use:</strong> Memorize a grid pattern (e.g., C3&rarr;G7&rarr;B10) and read those cell characters
        as your password.
        Change patterns per site. Never write the pattern &mdash; only keep the card.
        <br><a href="https://grc.com/ppp.htm" target="_blank" rel="noopener">Learn more at GRC.com/ppp &rarr;</a>
    </div>
    <div style="text-align:right;margin-top:1.5rem">
        <a href="<?= $imgDir; ?>contact/" class="back-top-btn">&#x1F4EC; Get in touch with us</a>
    </div>
</div>
<?php }

function clave() {
    global $page;
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
    $methods = [
        ['&#x1F511;', 'Autenticaci&oacute;n de 2 Factores', 'Dos contrase&ntilde;as / factores. Algo que sabes + algo que tienes o que eres.'],
        ['&#x261D;&#xFE0F;',  'Huella dactilar',              'Inicio biom&eacute;trico usando tu huella &uacute;nica &mdash; r&aacute;pido y dif&iacute;cil de falsificar.'],
        ['&#x1F600;', 'Reconocimiento facial',        'Usa tu geometr&iacute;a facial &uacute;nica para verificar identidad sin escribir nada.'],
        ['&#x1F310;', 'Inicio de sesi&oacute;n social', 'Usa credenciales de redes sociales (Google, Facebook) para autenticarte.'],
        ['&#x1F52E;', 'El futuro de las contrase&ntilde;as', 'Passkeys, FIDO2 y tokens de hardware est&aacute;n redefiniendo c&oacute;mo probamos identidad.'],
    ];
    ?>
<div class="fullbar">
    <?php include __DIR__ . '/navBarSecurity.php'; ?>
    <h2 class="sec-section-title" id="top"><span>&#x1F511;</span> Contrase&ntilde;as</h2>
    <p><span class="date">14 de noviembre de 2020</span> &nbsp;|&nbsp;
        Publicado por <a href="<?= $imgDir; ?>about/?omar#scroll">Omar Garc&iacute;a</a> &nbsp;|&nbsp;
        <a href="<?= $imgDir; ?>about/">Nosotros</a>
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
        <p style="font-size:.78rem;color:var(--light-text, #64748b);margin-top:.4rem">
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
    <p><span class="date">11 de noviembre de 2020</span> &nbsp;|&nbsp; Publicado por <a
            href="<?= $imgDir; ?>about/?omar#scroll">Omar Garc&iacute;a</a></p>
    <p>En vez de memorizar una contrase&ntilde;a larga, memoriza un <strong>patr&oacute;n</strong> en una tarjeta
        impresa. Cada celda se lee como coordenadas: <code>C3|G7|B10|E5|A1</code></p>
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
        <strong>C&oacute;mo usarla:</strong> Memoriza un patr&oacute;n de cuadr&iacute;cula (ej. C3&rarr;G7&rarr;B10) y
        lee los caracteres de esa celda como tu contrase&ntilde;a.
        Cambia el patr&oacute;n por sitio. Nunca escribas el patr&oacute;n &mdash; solo conserva la tarjeta.
        <br><a href="https://grc.com/ppp.htm" target="_blank" rel="noopener">Aprende m&aacute;s en GRC.com/ppp
            &rarr;</a>
    </div>
    <div style="text-align:right;margin-top:1.5rem">
        <a href="<?= $imgDir; ?>contact/" class="back-top-btn">&#x1F4EC; Ponte en contacto</a>
    </div>
</div>
<?php }