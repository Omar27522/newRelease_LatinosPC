<?php
/**
 * Security Overview (English: security, Spanish: seguridad)
 */

function security() { 
    global $page;
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
?>
<article class="fullbar">
    <?php include __DIR__ . '/navBarSecurity.php'; ?>
    <div class="sec-hero">
        <div class="sec-hero-inner">
            <span class="sec-shield" role="img" aria-label="shield">&#x1F6E1;&#xFE0F;</span>
            <div>
                <h1>Security</h1>
                <p>Valuable Implementable Measures &mdash; keep your digital life locked down.</p>
                <p class="sec-meta">
                    &#x1F4C5; February 1, 2023 &nbsp;|&nbsp; Posted by
                    <a href="<?= $imgDir; ?>about/?omar#scroll">Omar Garcia</a> &nbsp;|&nbsp;
                    <a href="<?= $imgDir; ?>offered_security/">Security</a>,
                    <a href="<?= $imgDir; ?>offered_security/best_practices">Best Practices</a>
                </p>
            </div>
        </div>
        <div class="sec-hero-bg-art" aria-hidden="true">
            <img src="<?= $imgDir; ?>images/gallery/secty.jpg" onerror="this.src='../images/gallery/secty.jpg'" alt=""
                width="600" height="451">
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

function seguridad() { 
    global $page;
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
?>
<article class="fullbar">
    <?php include __DIR__ . '/navBarSecurity.php'; ?>
    <div class="sec-hero">
        <div class="sec-hero-inner">
            <span class="sec-shield" role="img" aria-label="escudo">&#x1F6E1;&#xFE0F;</span>
            <div>
                <h1>Seguridad</h1>
                <p>Medidas valiosas y aplicables &mdash; mant&eacute;n tu vida digital bajo llave.</p>
                <p class="sec-meta">
                    &#x1F4C5; 1 de febrero de 2023 &nbsp;|&nbsp; Publicado por
                    <a href="<?= $imgDir; ?>about/?omar#scroll">Omar Garc&iacute;a</a> &nbsp;|&nbsp;
                    <a href="<?= $imgDir; ?>seguridad/">Seguridad</a>,
                    <a href="<?= $imgDir; ?>seguridad/mejores_practicas">Mejores Pr&aacute;cticas</a>
                </p>
            </div>
        </div>
        <div class="sec-hero-bg-art" aria-hidden="true">
            <img src="<?= $imgDir; ?>images/gallery/secty.jpg" onerror="this.src='../images/gallery/secty.jpg'" alt=""
                width="600" height="451">
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
