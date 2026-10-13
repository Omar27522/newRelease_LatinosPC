<?php
/**
 * Best Practices (English: best_practices, Spanish: mejores_practicas)
 */

function best_practices() {
    global $page;
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
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
    <?php include __DIR__ . '/navBarSecurity.php'; ?>
    <h2 class="sec-section-title" id="p3s"><span>&#x26A0;&#xFE0F;</span> Train Yourself &amp; Your Team &mdash; Know the Threats</h2>
    <p><a href="<?= $imgDir; ?>offered_security/best_practices" title="Best Practices">Stay vigilant and aware of potential attack vectors, including:</a></p>
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
        <a href="<?= $imgDir; ?>offered_security/">Back to Security overview &rarr;</a>
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
        <strong>&#x2705; Mitigation:</strong> Use a strong unique master password, enable 2FA, keep the software updated,
        back up your vault, and keep an offline copy of critical passwords in a secure location.
    </div>
</div>
<?php }

function mejores_practicas() {
    global $page;
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
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
    <?php include __DIR__ . '/navBarSecurity.php'; ?>
    <h2 class="sec-section-title" id="p3s"><span>&#x26A0;&#xFE0F;</span> Cap&aacute;citate &mdash; Conoce las Amenazas</h2>
    <p><a href="<?= $imgDir; ?>seguridad/mejores_practicas" title="Mejores Pr&aacute;cticas">Mant&eacute;nte alerta ante posibles vectores de ataque, los cuales incluyen:</a></p>
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
        <a href="<?= $imgDir; ?>seguridad/">Volver a Seguridad &rarr;</a>
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
    <h2 class="sec-section-title"><span>&#x1F5C4;&#xFE0F;</span> Gestores de Contrase&ntilde;as &mdash; Comodidad vs. Riesgo</h2>
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
        <strong>&#x2705; Mitigaci&oacute;n:</strong> Usa una contrase&ntilde;a maestra fuerte y &uacute;nica, activa 2FA, mant&eacute;n el software actualizado,
        respalda tu b&oacute;veda y conserva una copia offline de tus contrase&ntilde;as m&aacute;s importantes en un lugar seguro.
    </div>
</div>
<?php }
