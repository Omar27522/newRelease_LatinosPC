<?php
/**
 * Backups Strategies (English: security_backups, Spanish: respaldos)
 */

function security_backups() {
    global $page;
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
    $types = [
        ['full','&#x1F4E6;','Full Backup',        'A complete copy of all data. Slowest to create &amp; restore, but gives total protection for disaster recovery.'],
        ['incr','&#x1F4C8;','Incremental Backup', 'Only saves changes since the last backup. Fast and light, but recovery requires chaining multiple backups.'],
        ['diff','&#x1F4CA;','Differential Backup','All changes since the last full backup. Faster recovery than incremental, more storage than incremental.'],
        ['mirr','&#x1FA9E;','Mirror Backup',       'An exact real-time copy of data. Instant restore, but accidental deletions mirror instantly too.'],
    ];
    ?>
<div class="fullbar">
    <?php include __DIR__ . '/navBarSecurity.php'; ?>
    <h2 class="sec-section-title" id="top"><span>&#x1F4BE;</span> Backups</h2>
    <p>A backup is a copy of data you can restore if the original is lost or damaged. Choose the right strategy for your needs:</p>
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
        &#x1F4A1; <strong>Best practice:</strong> Follow the <strong>3-2-1 Rule</strong> &mdash; keep 3 copies of your data,
        on 2 different media types, with 1 copy stored offsite.
    </div>
    <h2 class="sec-section-title"><span>&#x1F4CD;</span> Where to Store Your Backups</h2>
    <div class="storage-trio">
        <div class="storage-card">
            <span class="st-icon">&#x1F3E0;</span>
            <h3><a href="#onsite_b">Onsite Backup</a></h3>
            <p>Easy to set up. Fast access. No internet required to back up or restore. Best for day-to-day recovery.</p>
        </div>
        <div class="storage-card" style="border-top-color:var(--secondary-color, #e67e22)">
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
    <h3 id="onsite_b" style="color:var(--primary-dark, #0a192f);margin-bottom:.5rem">&#x1F3E0; Onsite Backup</h3>
    <p>Storing data on local physical media &mdash; portable hard drives or flash drives. A second internal drive can
        serve as a live backup; if the primary fails, downtime is minimal because drives typically warn of failure ahead of time.</p>
    <h3 id="offsite_b" style="color:var(--primary-dark, #0a192f);margin:1.5rem 0 .5rem">&#x1F697; Offsite Backup</h3>
    <p>Same physical media concept, but the drive is taken to a separate building. Protects against scenarios where both
        the computer and a local backup could be lost at the same time (fire, flood, theft).</p>
    <h3 id="online_b" style="color:var(--primary-dark, #0a192f);margin:1.5rem 0 .5rem">&#x2601;&#xFE0F; Cloud Storage</h3>
    <p>Data is stored on remote servers accessed via the internet. Log in from anywhere to retrieve files. Many services
        offer automatic syncing. Free tiers have limited space &mdash; choose a paid plan for full coverage.</p>
    <div style="margin-top:1.5rem"><a href="#top" class="back-top-btn">&#x2B06; Back to top</a></div>
</div>
<?php }

function respaldos() {
    global $page;
    $imgDir = (isset($page) && method_exists($page, 'getDir')) ? $page->getDir() : '../../';
    $types = [
        ['full','&#x1F4E6;','Respaldo completo',       'Copia total de todos los datos. M&aacute;s lento de crear y restaurar, pero ofrece protecci&oacute;n total ante desastres.'],
        ['incr','&#x1F4C8;','Respaldo incremental',    'Solo guarda los cambios desde el &uacute;ltimo respaldo. R&aacute;pido y liviano, pero la recuperaci&oacute;n encadena m&uacute;ltiples archivos.'],
        ['diff','&#x1F4CA;','Respaldo diferencial',    'Todos los cambios desde el &uacute;ltimo respaldo completo. Recuperaci&oacute;n m&aacute;s r&aacute;pida que el incremental.'],
        ['mirr','&#x1FA9E;','Respaldo espejo (Mirror)','Copia exacta en tiempo real. Restauraci&oacute;n inmediata, pero eliminaciones accidentales tambi&eacute;n se reflejan al instante.'],
    ];
    ?>
<div class="fullbar">
    <?php include __DIR__ . '/navBarSecurity.php'; ?>
    <h2 class="sec-section-title" id="top"><span>&#x1F4BE;</span> Respaldo (Backup)</h2>
    <p>Un respaldo es una copia de datos que puedes restaurar si el original se pierde o da&ntilde;a. Elige la estrategia correcta:</p>
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
            <p>F&aacute;cil de configurar. Acceso r&aacute;pido. No requiere internet. Ideal para recuperaci&oacute;n diaria.</p>
        </div>
        <div class="storage-card" style="border-top-color:var(--secondary-color, #e67e22)">
            <span class="st-icon">&#x1F697;</span>
            <h3><a href="#offsite_b">Externo (Offsite)</a></h3>
            <p>Una copia f&iacute;sica en un lugar diferente. Protege ante desastres locales como incendio o robo.</p>
        </div>
        <div class="storage-card" style="border-top-color:#8e44ad">
            <span class="st-icon">&#x2601;&#xFE0F;</span>
            <h3><a href="#online_b">Nube (Cloud)</a></h3>
            <p>Autom&aacute;tico, accesible desde cualquier lugar con internet. Excelente como tercera capa de protecci&oacute;n.</p>
        </div>
    </div>
    <hr class="sec-divider">
    <h3 id="onsite_b" style="color:var(--primary-dark, #0a192f);margin-bottom:.5rem">&#x1F3E0; Respaldo local</h3>
    <p>Almacenar datos en medios f&iacute;sicos locales &mdash; discos duros port&aacute;tiles o memorias USB. Un
        segundo disco interno puede funcionar como respaldo en vivo; si el primario falla, el tiempo de inactividad es m&iacute;nimo.</p>
    <h3 id="offsite_b" style="color:var(--primary-dark, #0a192f);margin:1.5rem 0 .5rem">&#x1F697; Respaldo externo</h3>
    <p>Misma l&oacute;gica f&iacute;sica, pero el dispositivo se lleva a otro edificio. Protege contra escenarios donde
        tanto la computadora como un respaldo local podr&iacute;an perderse al mismo tiempo (incendio, inundaci&oacute;n, robo).</p>
    <h3 id="online_b" style="color:var(--primary-dark, #0a192f);margin:1.5rem 0 .5rem">&#x2601;&#xFE0F; Almacenamiento en la nube</h3>
    <p>Los datos se almacenan en servidores remotos accesibles por internet. Inicia sesi&oacute;n desde cualquier lugar.
        Muchos servicios sincronizan autom&aacute;ticamente. Los planes gratuitos tienen espacio limitado.</p>
    <div style="margin-top:1.5rem"><a href="#top" class="back-top-btn">&#x2B06; Volver al inicio</a></div>
</div>
<?php }
