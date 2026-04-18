<?php
function security(){
  ?>
  <article class="fullbar">
  <h1>Security</h1>
    <div class="clr"></div>
    <p><span class="date">Febuary 1st, 2023</span> &nbsp;|&nbsp Posted by <a href="../about/?omar#scroll">Omar
            Garcia</a>&nbsp;|&nbsp; site <a href="?security#navi">Security</a>, <a href="?best_practices#navi">Best
            Practices</a></p>
    <h1 id="title">Valuable Implementable Measures.</h1>
    <h2>Keep your Security in check</h2><img src="../../images/gallery/secty.jpg" class="fl" width="300px">
    <ul>
        <li>Your operating system and software must be kept up to date, installed with the latest security patches.</li>
        <li>Use a strong, unique password for each device and account, also enable two-factor authentication when available.</li>
        <li>Avoid clicking on links or downloading attachments from unknown or suspicious sources.</li>
        <li>Use anti-virus and anti-malware software to protect against known threats.</li>
        <li>Keep a backup of important files to an external drive or cloud service in case they are lost or stolen.</li>
        <li>Use encryption to protect sensitive data stored on your devices. Be cautious when connecting to public Wi-Fi
            networks, and use a virtual private network (VPN) when possible.</li>
        <li>Use a firewall to block unauthorized access to your devices. Use a lockout policy to automatically lock your
            device after a period of inactivity.</li>
        <li>Log out of accounts and lock your device when you're not using it. Be aware of social engineering tactics,
            such as phishing scams, and do not provide personal information or login credentials to anyone you do not
            trust. Use a pop-up blocker to prevent unwanted advertisements and pop-ups from appearing on your device.
        </li>
        <li>Limit the number of users with administrative access to your devices, and restrict access to sensitive data
            and settings.</li>
        <li>Regularly review and audit user accounts and permissions to ensure that only authorized individuals have
            access.</li>
        <li>Use parental controls to limit access to inappropriate or harmful content on your devices.</li>
        <li>Regularly review your device's security settings and configurations to ensure they are up to date and
            appropriate for your needs.</li>
        <li>When discarding or selling old devices, securely erase all data and restore the device to its factory
            settings.</li>
    </ul>
    </article>
  <?php
}

function best_practices() {
    ?>


    <div class="fullbar">
    <h2 id="p3s"><a href="?best_practices#navi" title="Best Practices">Train yourself and your employees on best
            practices for device security. Regularly remind emplyees to be vigilant and aware of potential threats,
            these include:</a></h2>
    <img src="https://latinospc.com/images/s_teal.jpg" class="rtl" width="300px">
    <h2>Physical attacks:</h2>
    <h3>A bad actor may try to gain physical access to a device by stealing it or by using a technique called "evil
        maid" attack, where they tamper with a device while it is unattended in a public place such as a hotel room.
    </h3>
    <h2>Side-channel attacks:</h2>
    <h3>A bad actor may attempt to extract sensitive information from a device by measuring its power consumption,
        electromagnetic emissions or other physical characteristics.</h3>
    <h2>Remote access attacks:</h2>
    <h3>A bad actor may try to gain unauthorized access to a device by exploiting vulnerabilities in remote access
        software or by using malware to establish a backdoor into the device.</h3>
    <h2>Supply-chain attacks:</h2>
    <h3>A bad actor may try to compromise a device by tampering with it before it is delivered to the end user, for
        example by installing malware on the device during manufacturing.</h3>
    <h2>Password cracking:</h2>
    <h3>A bad actor may try to crack the password of an account or device by using a brute-force attack, a dictionary
        attack or by exploiting known vulnerabilities in the password-hashing algorithm.</h3>
    <h2>Social engineering attacks:</h2>
    <h3>A bad actor may try to trick users into providing sensitive information or login credentials by disguising
        themselves as a trusted entity, such as a bank or a government agency.</h3>
    <h2>Quantum computing attacks:</h2>
    <h3>A bad actor may try to use the power of quantum computing to crack encryption keys and gain access to sensitive
        information.</h3>
    <h2>AI-based attacks:</h2>
    <h3>A bad actor may try to use Artificial intelligence to identify vulnerabilities on the system and exploit them.
    </h3>
    </div>
    <div class="article fullbar">
    <h1 id="p4s"><a href="?security#navi">It's important to note that the threat landscape is constantly evolving, so
            it's essential to stay informed and adapt security measures accordingly.</a></h1>
    <h3>
        <li>Keep the computers in a secure location when not in use, such as a locked room or cabinet.</li>
    </h3>
    <h3>
        <li>Use a cable lock to physically secure the computers to a desk or other immovable object.</li>
    </h3>
    <h3>
        <li>Use a privacy screen or webcam cover to prevent unwanted access to the computer's camera.</li>
    </h3>
    <h3>
        <li>Use a surge protector to protect the computer from power surges and voltage spikes.</li>
    </h3>
    <h3>
        <li>Keep the computer and its peripherals in good condition, such as cleaning dust from fans and vents to
            prevent overheating.</li>
    </h3>
    <h3>
        <li>Use a laptop lock to physically secure the computer to a desk or other immovable object.</li>
    </h3>
    <h3>
        <li>Always use a protective carrying case when transporting a portable device, laptop or desktop computer.</li>
    </h3>
    <h3>
        <li>Avoid leaving portable devices in plain sight in vehicles or other public places.</li>
    </h3>
    <h3>
        <li>Be aware of your surroundings when using a portable computer in public, and be prepared to close and secure
            it quickly if necessary.</li>
    </h3>
    <h1><a href="?security#navi" title="click here to select text">Pass-words managers for passwords:</a></h1>
    <h3>password managers have inherited problems and risks in exchange for convenience to the user.</h3>
    <h2>These problems include:</h2>
    <h3>Security breaches:</h3>Password managers store all of your passwords in a single location, so if a hacker gains
    access to the password manager's database, they will have access to all of your stored passwords.
    <h3>Loss of access:</h3>If you lose access to your password manager account (e.g. if you forget your master
    password), you will lose access to all of your stored passwords.
    <h3>Phishing:</h3>If a user falls for a phishing attack, the attacker may gain access to the user's password manager
    account, including all the stored passwords.
    <h3>Cloud-based password manager:</h3>If the password manager is cloud-based, the company that runs the service
    could potentially access your stored passwords, or they could be compromised in a data breach.
    <h3>Single point of failure:</h3>If the password manager software or service goes down or out of business, you may
    lose access to all of your stored passwords.To mitigate risks, your password manager should be set up with strong
    and unique master password, enabled multi-factor authentication (2FA) and regularly updated software. Additionally,
    it's important to backup the password manager's data to a safe place and keep an offline copy of your important
    passwords in a secure location.
    </div>
    <?php
}

function passwords(){
    ?>
    <div class="article fullbar">
    <h2 id="top"><span>Passwords</span></h2>
    <div class="clr"></div>
    <p><span class="date">November 14, 2020</span>
        &nbsp;|&nbsp
        Posted by
        <a href="?team#scroll">Omar Garcia</a>
        &nbsp;|&nbsp;
        site
        <a href="?about#scroll">About Us</a>,
        <a href="?team#scroll">Team members</a>
    </p>
    <p>“When the claimant successfully demonstrates knowledge
        of the password to the verifier through an established
        authentication protocol,[4] the verifier is able to infer
        the claimant's identity. “ <a href="https://en.wikipedia.org/wiki/Password">Wikipedia</a></p>

    <p>Traditional Advice tells us that a strong and secure
        password is 12 characters, minimum. Includes special
        characters, and a mix of lower and upper case letters.
        The password is not a dictionary word, or many. And
        doesn’t use obvious substitution, like a letter for a
        number or vice versa. </p>
    <ul>
        <li>
            <p>
                <a href="https://en.wikipedia.org/wiki/Multi-factor_authentication">Two factor authentication:</a>
                Is an added extra security layer, that in simplest terms is two passwords (factors).
                The user is granted access by presenting the passwords and a second piece of evidence (factor). Knowledge (something the user only knows), possession(something the user has), and (who the user is) Inheritance is presented to the authentication mechanism.
            </p>
        </li>

        <li>
            <p>
                <a href="https://www.fbi.gov/services/cjis/fingerprints-and-other-biometrics">Fingerprint</a> is a
                <a href="https://www.csoonline.com/article/3339565/what-is-biometrics-and-why-collecting-biometric-data-is-risky.html">biometric authentication;</a>
                lets users use hand's fingerprints to verify their identity.
            </p>
        </li>

        <li>
            <p>Facial recognition is a biometric authentication; lets users use unique facial features to verify ones identity.</p>
        </li>

        <li>
            <p>Social Log in is an authentication method that lets users use their social media credentials to verify ownership, partnership, or other. </p>
        </li>

        <li>
            <p>Future of passwords...</p>
        </li>
    </ul>

    </p>
    <p class="spec">
    <div style="text-align:right">
        <a href="?contact">Get in contact with us.</a>
        <!-- more links here -->
    </div>
    </p>



    <div class="clr"></div>
    <h2><span>Computer Solutions; Passwords</span></h2>
    <div class="clr"></div>
    <p><span class="date">November 11, 2020</span>
        &nbsp;|&nbsp
        Posted by
        <a href="?team#scroll">Omar Garcia</a>
        &nbsp;|&nbsp;
        site
        <a href="?about#scroll">About Us</a>,
        <a href="?team#scroll">Team members</a>
    </p>
    <img src="https://latinospc.com/images/websites/passcard.gif" width="263" height="146" alt="image" class="fl" />

    <h3>Passwords will have to be secured and should have a combination of alphanumeric numbers,
        (a-z, 1-9) and other character symbols(!@#$%^&*{}|`). Also secure passwords should be at least
        12 characters in length.<br /> </h3>
    <p>#note; capitalized letters are recognized different from lowercase,
        a T is different from t.</p>
    <div class="clr"></div>
    <img src="https://latinospc.com/images/websites/ppp.jpg" width="400" height="850" alt="image" class="rtl" />
    <h2>Print the <a href="?perfect_paper_passwords#navi">PassCard:</a></h2>

    <p><strong>How to use the <a href="?perfect_paper_passwords#navi">pass card:</a> </strong>
        By default the passcard generates a block of four characters (password piece)
        A-G, 1-10. A strong secure password should be of at least 12 characters long.
        Instead of memorizing a long password, is much simpler for a human to memorize a pattern.</p>
    <a href="https://latinospc.com/images/websites/passcard_animation.gif"><img src="https://latinospc.com/images/websites/passcard_animation.gif" width="400"
            height="200" alt="image" class="rtl" /></a>
    For this password, the sequence will be C3|G7|B10|E5|A1<br />
    The second password's sequence, will be A7|C9|D3|F4<br />
    <p>Check your password by going to.
        <a
            href="https://www.security.org/how-secure-is-my-password/">https://www.security.org/how-secure-is-my-password/</a>
    </p>
    </div>

    <div class="article fullbar">
    <h2><span>Perfect Paper Passwords</span></h2>
    <div class="clr"></div>
    <p><span class="date">November 11, 2020</span>
        &nbsp;|&nbsp;
        Posted by
        <a href="?omar#scroll">Omar Garcia</a>
        &nbsp;|&nbsp;
        site
        <a href="?about#scroll">About Us</a>,
        <a href="?team#scroll">Team members</a>
    </p>
    <h2><strong> Use perfect paper passwords</strong></h2>
    <img src="https://latinospc.com/images/websites/passcard.gif" width="263" height="146" alt="image" class="fl" />
    <h3>
        “Almost without exception, today's Internet users prove
        their identity online using a fixed account name and password.
        In the past, this simple system provided sufficient security.
        But with the growing popularity of online banking and eCommerce,
        the value of stealing online identities has skyrocketed. And the
        increasing presence and "spyware" and "malware" on innocent users'
        computers means that users can be "watched" while logging onto their
        banking and other eCommerce sites. Once their logon credentials have
        been "captured" and stolen, Internet criminals can easily assume their identity.
        The trouble with a username and password is that they never change.
        We create them, write them down or memorize them, then use them over
        and over again. What has been needed is an inexpensive system that
        provides something which changes everytime it is used. GRC's Perfect
        Paper Passwords system offers a simple, safe and secure, free and well
        documented solution that is being adopted by a growing number of
        security-conscious Internet facilities to provide their users with
        state-of-the-art cryptographic logon security.” <a href="https://grc.com/ppp.htm">https://grc.com/</a><br />

        <div class="clr"></div>
        <pre class="fl">
      A      B      C      D      E
 1: \.=who b%$@dh v9$hn? ddy6?q oyxd8f
 2: .c.3;3 %ytqm1 n$4uz] f84tj~ dw6scw
 3: ,~k_tk e5#4a. @9e4bm cgcib. 9%$"#!
 4: 7&oan- [:ri>w +jk3,! a=bvr' u:]&|=
 5: [etwvj 9k/xew rjl4p7 ds"k|n fw!odn
 6: ?7cpxv nj^gy] /wxfrk ixspk> {@mm:}
 7: zf/s6t zbaa>7 wcc$.^ !^teg? 2q7{\<
 8: |afn:8 ,rvb34 xrym4! 6*^!z% u.]6r6
 9: !;ar~j f_@x2k s,6v5t >cbud5 4yaroz
    10: od[/s" res.r] d\h%y, u}o3oz rkzsut
    </pre>
        <ol align="right"><a href="https://grc.com/ppp.htm">Go to grc.com/ppp</a></ol>
        <p>Sequence Key: Every-time the page refreshes the sequence key changes. You can copy and paste your key to
            later reprint the same card .
        </p>
        <p>Passcode character set: 64, 88, or your own. The alphabet that your password will have is the passcode
            character set. The default option offers 64 conservative characters, the second option however is much more
            visually aggressive, and therefore much more secure.
        </p>
        <p>Passcode length: The length of the block in characters; the minimum is two the maximum is sixteen.
        </p>
        <p>Passcard label:The name of your passcard, e.g. email,Social media, entertainment,Work etc.
        </p>
        <p>First passcard to generate: by default the fist passcard is the first to generate, but for example you could
            choose the hundreth passcard to be the one you want to display first.
        </p>
        <p>Passcard size: is the size of the passcard when printed. The deafult size is 14 which is the size of a
            “credit card” when printed.
        </p>
        <p>click on generate passcards and Print the desired passcard.</p>
        <p>Done! You now have a chance to improve your overall online experience, with the piece of mind that the
            password you are using is in fact a secure strong password.</p>

    </div>

    <?php
}

function security_backups(){
    ?>
    <div class="article fullbar">
    <h2 id="top"> Backup
        <!-- Tittle goes here between the h2 tag -->
    </h2>
    <h3>A backup is a copy of data that can be used to restore the original data in the event that it is lost or damaged. Backups are important because they allow you to recover
        from data loss due to accidents, hardware failures, software corruption, or other causes. There are many different approaches to backing up data, and the best approach will
        depend on your specific needs and resources.<br /> Some common types of backups include:<br /><br />
        <span class="box2">Full backups:</span> These backups include a complete copy of all data. Full backups can be time-consuming to create and restore, but they provide a
        complete record of all data and are useful for disaster recovery.<br /><br />
        <span class="box2">Incremental backups:</span> These backups only include changes made since the last backup. Incremental backups are faster to create and restore than full
        backups, but they may not provide as much protection in the event of a disaster.<br /><br />
        <span class="box2">Differential backups:</span> These backups include all changes made since the last full backup. Differential backups are similar to incremental backups
        in that they only include changes, but they provide more protection than incremental backups because they include all changes made since the last full backup.<br />
        <span class="box2">Mirror backups:</span> These backups create an exact copy of the data being backed up. Mirror backups are useful for quickly restoring data, but they may
        not be as comprehensive as other types of backups.<br /><br /> It is generally recommended to create backups on a regular basis and to store them in a secure location, such
        as an external hard drive or a cloud-based storage service. This will ensure that you have access to your data in case of an emergency.</h3>
    <div class="clr"></div>
    <!-- Content goes here -->
    <img src="../images/backup.png" alt="usbbackup" class="fl" />
    <h3>
        <strong><a href="#onsite_b">Onsite</a></strong> backup is easy to set up, data is convenient to access and no Internet connection is required to backup or restore data.
    </h3>
    <h3>
        <strong><a href="#offsite_b">Offsite</a></strong> backup is essentially saving the data on a memory drive or other device, and taking the device to a different place away
        from the primary location.</h3>
    <h3>
        <strong><a href="#online_b">Cloud</a></strong> backup requires an Internet connection to access cloud space where data is stored, it's simple, and data can be accessed from
        anywhere.</h3>
    <div class="clr"></div>
    <h2 id="onsite_b">Onsite backup &nbsp;</h2>
    <div class="clr"></div>
    <h3> Storing data on a physical media, now days portable hard drives and flash drives are the most common ways to backup data. say, you had 2 hard rives on your computer, one
        can be your main hard drive and the other can be your backup, if your hard drive were to fail, then all there is to do is to restore the data onto a new hard drive from the
        backup. and this way the downtime you will experience will be minimum the last example was a worst case scenario, hard drives are smart enough to tell the computer when
        they have errors and that they might fail.</h3>
    <h2 id="offsite_b">Offsite backup &nbsp;</h2>
    <div class="clr"></div>
    <h3> Storing data on a physical media, now days portable hard drives and flash drives are the most common ways to backup data. say, you had 2 hard drives on your computer, and
        the information is so important that one backup is not enough, because all of the data is in one place there is a risk of losing the data and the backup at the same time,
        one can prevent this by taking the backup away from the building to make it more secure in case of a disaster that can take your main data with it. the advantage of the
        off-site backup is that one can restore the data onto a new computer from the off-site backup. and this way the downtime you will experience will be minimum. the last
        example was a worst case scenario, h-drives are smart enough to tell the computer when they have errors and that they might fail, and to keep in mind that a replacement
        drive will be needed.</h3>
    <h2 id="online_b">Cloud storage &nbsp;</h2>
    <div class="clr"></div>
    <h3> Storing data on the internet, that way if you were to need a file, you can simply log in and retrieve the file from your online backup account. there are services that
        backup your data automatically online, most of the free ones have limited space and capabilities.</h3>
    <div class="clr"></div>
    <a href="#top"><i class="fa fa-caret-square-o-up"> back to the top</i></a>
    </div>
    <?php
}

function seguridad(){
	?>
    <article class="fullbar">
  <h1>Seguridad</h1>
  <div class="clr"></div>
  <p>
    <span class="date">1 de febrero de 2023</span> &nbsp;|&nbsp; Publicado por <a href="../about/?omar#scroll">Omar García</a>&nbsp;|&nbsp; sitio <a href="?security#navi">Seguridad</a>, <a href="?best_practices#navi">Mejores Prácticas</a>
  </p>
  <h1 id="title">Medidas valiosas y aplicables.</h1>
  <h2>Mantén tu seguridad al día</h2>
  <img src="../../images/gallery/secty.jpg" class="fl" width="300px">
  <ul>
    <li>Tu sistema operativo y software deben mantenerse actualizados, con los últimos parches de seguridad instalados.</li>
    <li>Usa una contraseña segura y única para cada dispositivo y cuenta; también activa la autenticación de dos factores cuando esté disponible.</li>
    <li>Evita hacer clic en enlaces o descargar archivos adjuntos de fuentes desconocidas o sospechosas.</li>
    <li>Utiliza software antivirus y antimalware para protegerte contra amenazas conocidas.</li>
    <li>Mantén un respaldo de tus archivos importantes en una unidad externa o servicio en la nube en caso de pérdida o robo.</li>
    <li>Usa cifrado para proteger los datos sensibles almacenados en tus dispositivos. Ten cuidado al conectarte a redes Wi-Fi públicas y usa una red privada virtual (VPN) cuando sea posible.</li>
    <li>Utiliza un firewall para bloquear el acceso no autorizado a tus dispositivos. Implementa una política de bloqueo para que tu dispositivo se bloquee automáticamente tras un periodo de inactividad.</li>
    <li>Cierra sesión en tus cuentas y bloquea tu dispositivo cuando no lo estés usando. Mantente alerta ante tácticas de ingeniería social, como el phishing, y no proporciones información personal ni credenciales de acceso a nadie en quien no confíes. Usa un bloqueador de ventanas emergentes para evitar anuncios no deseados.</li>
    <li>Limita el número de usuarios con acceso de administrador en tus dispositivos y restringe el acceso a configuraciones y datos sensibles.</li>
    <li>Revisa y audita regularmente las cuentas de usuario y sus permisos para asegurar que solo personas autorizadas tengan acceso.</li>
    <li>Usa controles parentales para limitar el acceso a contenido inapropiado o dañino en tus dispositivos.</li>
    <li>Revisa periódicamente los ajustes y configuraciones de seguridad de tu dispositivo para asegurar que estén actualizados y sean adecuados para tus necesidades.</li>
    <li>Al desechar o vender dispositivos viejos, borra de forma segura todos los datos y restaura el dispositivo a sus ajustes de fábrica.</li>
  </ul>
    </article>

    <?php
}

function mejores_practicas(){
	?>
    <div class="fullbar">
  <h2 id="p3s"><a href="?best_practices#navi" title="Mejores Prácticas">Capacítese usted y a sus empleados en las mejores prácticas de seguridad para dispositivos. Recuérdeles regularmente mantenerse alertas ante posibles amenazas, las cuales incluyen:</a></h2>
  <img src="https://latinospc.com/images/s_teal.jpg" class="rtl" width="300px">

  <h2>Ataques físicos:</h2>
  <h3>Un actor malicioso puede intentar obtener acceso físico a un dispositivo robándolo o utilizando una técnica llamada ataque de "sirvienta malvada" (evil maid), donde manipulan el dispositivo mientras se queda desatendido en un lugar público, como la habitación de un hotel.</h3>

  <h2>Ataques de canal lateral:</h2>
  <h3>Un actor malicioso puede intentar extraer información sensible de un dispositivo midiendo su consumo de energía, emisiones electromagnéticas u otras características físicas.</h3>

  <h2>Ataques de acceso remoto:</h2>
  <h3>Un actor malicioso puede intentar obtener acceso no autorizado a un dispositivo explotando vulnerabilidades en el software de acceso remoto o utilizando malware para establecer una "puerta trasera" (backdoor) en el sistema.</h3>

  <h2>Ataques a la cadena de suministro:</h2>
  <h3>Un actor malicioso puede intentar comprometer un dispositivo manipulándolo antes de que sea entregado al usuario final; por ejemplo, instalando malware durante su fabricación.</h3>

  <h2>Descifrado de contraseñas:</h2>
  <h3>Un actor malicioso puede intentar descifrar la contraseña de una cuenta o dispositivo mediante un ataque de fuerza bruta, un ataque de diccionario o explotando vulnerabilidades conocidas en el algoritmo de hash de la contraseña.</h3>

  <h2>Ataques de ingeniería social:</h2>
  <h3>Un actor malicioso puede intentar engañar a los usuarios para que proporcionen información sensible o credenciales de acceso haciéndose pasar por una entidad de confianza, como un banco o una agencia gubernamental.</h3>

  <h2>Ataques de computación cuántica:</h2>
  <h3>Un actor malicioso puede intentar usar el poder de la computación cuántica para descifrar claves de encriptación y obtener acceso a información confidencial.</h3>

  <h2>Ataques basados en IA:</h2>
  <h3>Un actor malicioso puede intentar utilizar Inteligencia Artificial para identificar vulnerabilidades en el sistema y explotarlas.</h3>
    </div>

    <div class="article fullbar">
  <h1 id="p4s"><a href="?security#navi">Es importante notar que el panorama de amenazas evoluciona constantemente, por lo que es esencial mantenerse informado y adaptar las medidas de seguridad según sea necesario.</a></h1>

  <h3> <li>Mantenga las computadoras en un lugar seguro cuando no estén en uso, como una habitación o gabinete con llave.</li> </h3>
  <h3> <li>Use un cable de seguridad (candado Kensington) para asegurar físicamente las computadoras a un escritorio u otro objeto inamovible.</li> </h3>
  <h3> <li>Use un protector de privacidad o una cubierta para la cámara web para evitar el acceso no deseado a la cámara de la computadora.</li> </h3>
  <h3> <li>Use un supresor de picos para proteger la computadora de variaciones de energía y picos de voltaje.</li> </h3>
  <h3> <li>Mantenga la computadora y sus periféricos en buen estado, como limpiar el polvo de los ventiladores y rejillas para evitar el sobrecalentamiento.</li> </h3>
  <h3> <li>Utilice un candado para laptop para asegurar físicamente el equipo a un escritorio u objeto fijo.</li> </h3>
  <h3> <li>Use siempre un maletín o funda protectora al transportar un dispositivo portátil, laptop o computadora de escritorio.</li> </h3>
  <h3> <li>Evite dejar dispositivos portátiles a la vista dentro de vehículos o en otros lugares públicos.</li> </h3>
  <h3> <li>Esté atento a su entorno cuando use una computadora portátil en público y prepárese para cerrarla y guardarla rápidamente si es necesario.</li> </h3>

  <h1><a href="?security#navi" title="haga clic aquí para seleccionar texto">Gestores de contraseñas:</a></h1>
  <h3>Los gestores de contraseñas conllevan problemas y riesgos inherentes a cambio de la comodidad para el usuario.</h3>

  <h2>Estos problemas incluyen:</h2>
  <h3>Brechas de seguridad:</h3>Los gestores de contraseñas almacenan todas sus claves en un solo lugar; si un hacker logra acceder a la base de datos del gestor, tendrá acceso a todas sus contraseñas guardadas.
  <h3>Pérdida de acceso:</h3>Si pierde el acceso a su cuenta del gestor de contraseñas (por ejemplo, si olvida su contraseña maestra), perderá el acceso a todas sus claves almacenadas.
  <h3>Phishing:</h3>Si un usuario cae en un ataque de phishing, el atacante podría obtener acceso a la cuenta del gestor de contraseñas, incluyendo toda la información guardada.
  <h3>Gestores basados en la nube:</h3>Si el gestor de contraseñas está en la nube, la empresa que opera el servicio podría potencialmente acceder a sus claves o estas podrían verse comprometidas en una filtración de datos masiva.
  <h3>Punto único de falla:</h3>Si el software o servicio del gestor de contraseñas deja de funcionar o desaparece el negocio, usted podría perder el acceso a todas sus contraseñas. Para mitigar los riesgos, su gestor debe configurarse con una contraseña maestra sólida y única, tener activa la autenticación de múltiples factores (2FA) y mantener el software actualizado. Además, es importante respaldar los datos del gestor en un lugar seguro y mantener una copia fuera de línea de sus contraseñas más importantes.
    </div>

    <?php

}

function respaldos(){
    ?>
    <div class="article fullbar">
      <h2 id="top"> Respaldo (Backup) <!-- Tittle goes here between the h2 tag --> </h2>
      <h3>Un respaldo es una copia de datos que puede utilizarse para restaurar la información original en caso de que se pierda o se dañe. Los respaldos son importantes porque permiten recuperarse de la pérdida de datos debida a accidentes, fallas de hardware, daños en el software u otras causas. Existen muchos enfoques diferentes para respaldar datos, y la mejor opción dependerá de sus necesidades y recursos específicos.<br /> Algunos tipos comunes de respaldos incluyen:<br /><br />
      <span class="box2">Respaldos completos:</span> Estos respaldos incluyen una copia completa de todos los datos. Crear y restaurar respaldos completos puede llevar mucho tiempo, pero proporcionan un registro total de toda la información y son útiles para la recuperación ante desastres.<br /><br />
      <span class="box2">Respaldos incrementales:</span> Estos respaldos solo incluyen los cambios realizados desde el último respaldo. Los respaldos incrementales son más rápidos de crear y restaurar que los completos, pero podrían no ofrecer tanta protección en caso de un desastre.<br /><br />
      <span class="box2">Respaldos diferenciales:</span> Estos respaldos incluyen todos los cambios realizados desde el último respaldo completo. Son similares a los incrementales en que solo incluyen cambios, pero ofrecen más protección porque contienen todas las modificaciones hechas desde el último respaldo completo.<br />
      <span class="box2">Respaldos espejo (Mirror):</span> Estos respaldos crean una copia exacta de los datos que se están respaldando. Son útiles para restaurar datos rápidamente, pero podrían no ser tan integrales como otros tipos de respaldo.<br /><br /> Por lo general, se recomienda crear respaldos de forma regular y almacenarlos en un lugar seguro, como un disco duro externo o un servicio de almacenamiento en la nube. Esto garantizará que tenga acceso a sus datos en caso de una emergencia.</h3>

      <div class="clr"></div> <!-- Content goes here -->
      <img src="../images/backup.png" alt="usbbackup" class="fl" />

      <h3> <strong><a href="#onsite_b">Local (Onsite)</a></strong>: El respaldo local es fácil de configurar, el acceso a los datos es conveniente y no se requiere conexión a Internet para respaldar o restaurar información. </h3>
      <h3> <strong><a href="#offsite_b">Externo (Offsite)</a></strong>: El respaldo externo consiste básicamente en guardar los datos en una unidad de memoria u otro dispositivo y llevarlo a un lugar distinto fuera de la ubicación principal.</h3>
      <h3> <strong><a href="#online_b">Nube (Cloud)</a></strong>: El respaldo en la nube requiere una conexión a Internet para acceder al espacio donde se almacenan los datos; es sencillo y se puede acceder a la información desde cualquier lugar.</h3>

      <div class="clr"></div>
      <h2 id="onsite_b">Respaldo local &nbsp;</h2>
      <div class="clr"></div>
      <h3> Almacenamiento de datos en un medio físico; hoy en día, los discos duros portátiles y las memorias USB son las formas más comunes de respaldar datos. Por ejemplo, si tuviera 2 discos duros en su computadora, uno puede ser su disco principal y el otro su respaldo; si su disco duro llegara a fallar, lo único que tendría que hacer es restaurar los datos en un disco nuevo desde el respaldo. De esta manera, el tiempo de inactividad que experimentará será mínimo. El ejemplo anterior fue un escenario extremo; los discos duros son lo suficientemente inteligentes como para avisar a la computadora cuando tienen errores y podrían fallar.</h3>

      <h2 id="offsite_b">Respaldo externo &nbsp;</h2>
      <div class="clr"></div>
      <h3> Almacenamiento de datos en un medio físico; hoy en día, los discos duros portátiles y las memorias USB son las formas más comunes de respaldar datos. Supongamos que tiene 2 discos duros en su computadora y la información es tan importante que un solo respaldo no es suficiente; debido a que todos los datos están en un mismo lugar, existe el riesgo de perder la información y el respaldo al mismo tiempo. Esto se puede prevenir llevando el respaldo fuera del edificio para hacerlo más seguro en caso de un desastre que pueda afectar sus datos principales. La ventaja del respaldo externo es que se pueden restaurar los datos en una computadora nueva. De esta manera, el tiempo de inactividad será mínimo. El último ejemplo fue un caso extremo; los discos duros son lo suficientemente inteligentes para avisar cuando hay errores y que se necesitará un disco de repuesto.</h3>

      <h2 id="online_b">Almacenamiento en la nube &nbsp;</h2>
      <div class="clr"></div>
      <h3> Consiste en guardar datos en Internet; de esa forma, si llegara a necesitar un archivo, simplemente puede iniciar sesión y recuperarlo desde su cuenta de respaldo en línea. Existen servicios que respaldan sus datos automáticamente en línea; la mayoría de los gratuitos tienen espacio y funciones limitadas.</h3>

      <div class="clr"></div>
      <a href="#top"><i class="fa fa-caret-square-o-up"> volver al inicio</i></a>
    </div>
    <?php
}

function clave(){
    ?>
    <div class="article fullbar">
  <h2 id="top"><span>Contraseñas</span></h2>
  <div class="clr"></div>
  <p><span class="date">14 de noviembre de 2020</span> &nbsp;|&nbsp; Publicado por <a href="?team#scroll">Omar García</a> &nbsp;|&nbsp; sitio <a href="?about#scroll">Nosotros</a>, <a href="?team#scroll">Integrantes del equipo</a> </p>
  <p>“Cuando el solicitante demuestra con éxito el conocimiento de la contraseña al verificador a través de un protocolo de autenticación establecido,[4] el verificador puede inferir la identidad del solicitante.” <a href="https://en.wikipedia.org/wiki/Password">Wikipedia</a></p>
  <p>El consejo tradicional nos dice que una contraseña fuerte y segura debe tener 12 caracteres como mínimo. Debe incluir caracteres especiales y una mezcla de letras mayúsculas y minúsculas. La contraseña no debe ser una palabra de diccionario, ni varias de ellas. Y no debe usar sustituciones obvias, como una letra por un número o viceversa. </p>
  <ul>
    <li>
      <p> <a href="https://en.wikipedia.org/wiki/Multi-factor_authentication">Autenticación de dos factores:</a> Es una capa de seguridad adicional que, en términos simples, son dos contraseñas (factores). Al usuario se le concede el acceso al presentar las contraseñas y una segunda pieza de evidencia (factor). Se presenta al mecanismo de autenticación el conocimiento (algo que solo el usuario sabe), la posesión (algo que el usuario tiene) y la herencia (quién es el usuario). </p>
    </li>
    <li>
      <p> <a href="https://www.fbi.gov/services/cjis/fingerprints-and-other-biometrics">La huella dactilar</a> es una <a href="https://www.csoonline.com/article/3339565/what-is-biometrics-and-why-collecting-biometric-data-is-risky.html">autenticación biométrica;</a> permite a los usuarios usar sus huellas digitales para verificar su identidad. </p>
    </li>
    <li>
      <p>El reconocimiento facial es una autenticación biométrica; permite a los usuarios usar rasgos faciales únicos para verificar su identidad.</p>
    </li>
    <li>
      <p>El inicio de sesión social (Social Login) es un método de autenticación que permite a los usuarios usar sus credenciales de redes sociales para verificar la propiedad, asociación u otros. </p>
    </li>
    <li>
      <p>El futuro de las contraseñas...</p>
    </li>
  </ul>
  <p class="spec">
    <div style="text-align:right">
      <a href="?contact">Ponte en contacto con nosotros.</a> <!-- more links here -->
    </div>
  </p>
  <div class="clr"></div>
  <h2><span>Soluciones Informáticas; Contraseñas</span></h2>
  <div class="clr"></div>
  <p><span class="date">11 de noviembre de 2020</span> &nbsp;|&nbsp; Publicado por <a href="?team#scroll">Omar García</a> &nbsp;|&nbsp; sitio <a href="?about#scroll">Nosotros</a>, <a href="?team#scroll">Integrantes del equipo</a> </p>
  <img src="https://latinospc.com/images/websites/passcard.gif" width="263" height="146" alt="imagen" class="fl" />
  <h3>Las contraseñas deberán estar protegidas y deben tener una combinación de caracteres alfanuméricos (a-z, 1-9) y otros símbolos (!@#$%^&*{}|`). Además, las contraseñas seguras deben tener al menos 12 caracteres de longitud.<br /> </h3>
  <p>#nota: las letras mayúsculas se reconocen de forma distinta a las minúsculas, una T es diferente de una t.</p>
  <div class="clr"></div>
  <img src="https://latinospc.com/images/websites/ppp.jpg" width="400" height="850" alt="imagen" class="rtl" />
  <h2>Imprime la <a href="?perfect_paper_passwords#navi">PassCard:</a></h2>
  <p><strong>Cómo usar la <a href="?perfect_paper_passwords#navi">tarjeta de contraseñas (pass card):</a> </strong> Por defecto, la tarjeta genera un bloque de cuatro caracteres (pieza de contraseña) de la A a la G y del 1 al 10. Una contraseña fuerte y segura debe tener al menos 12 caracteres de largo. En lugar de memorizar una contraseña larga, es mucho más sencillo para un humano memorizar un patrón.</p>
  <a href="https://latinospc.com/images/websites/passcard_animation.gif"><img src="https://latinospc.com/images/websites/passcard_animation.gif" width="400" height="200" alt="imagen" class="rtl" /></a> Para esta contraseña, la secuencia será C3|G7|B10|E5|A1<br /> La secuencia de la segunda contraseña será A7|C9|D3|F4<br />
  <p>Comprueba tu contraseña entrando a: <a href="https://www.security.org/how-secure-is-my-password/">https://www.security.org/how-secure-is-my-password/</a> </p>
    </div>

    <div class="article fullbar">
  <h2><span>Perfect Paper Passwords</span></h2>
  <div class="clr"></div>
  <p><span class="date">11 de noviembre de 2020</span> &nbsp;|&nbsp; Publicado por <a href="?omar#scroll">Omar García</a> &nbsp;|&nbsp; sitio <a href="?about#scroll">Nosotros</a>, <a href="?team#scroll">Integrantes del equipo</a> </p>
  <h2><strong>Usa contraseñas de papel perfectas (Perfect Paper Passwords)</strong></h2>
  <img src="https://latinospc.com/images/websites/passcard.gif" width="263" height="146" alt="imagen" class="fl" />
  <h3> “Casi sin excepción, los usuarios de Internet de hoy demuestran su identidad en línea utilizando un nombre de cuenta y una contraseña fijos. En el pasado, este sistema simple proporcionaba suficiente seguridad. Pero con la creciente popularidad de la banca en línea y el comercio electrónico, el valor de robar identidades en línea se ha disparado. Y la presencia cada vez mayor de 'spyware' y 'malware' en las computadoras de usuarios inocentes significa que los usuarios pueden ser 'vigilados' mientras inician sesión en sus sitios bancarios y otros sitios de comercio electrónico. Una vez que sus credenciales de inicio de sesión han sido 'capturadas' y robadas, los delincuentes de Internet pueden asumir fácilmente su identidad. El problema con un nombre de usuario y una contraseña es que nunca cambian. Los creamos, los anotamos o los memorizamos, y luego los usamos una y otra vez. Lo que se ha necesitado es un sistema económico que proporcione algo que cambie cada vez que se use. El sistema Perfect Paper Passwords de GRC ofrece una solución simple, confiable y segura, gratuita y bien documentada que está siendo adoptada por un número creciente de instalaciones de Internet preocupadas por la seguridad para brindar a sus usuarios una seguridad de inicio de sesión criptográfica de vanguardia.” <a href="https://grc.com/ppp.htm">https://grc.com/</a><br />
  <div class="clr"></div>
  <pre class="fl">
      A      B      C      D      E
  1: \.=who b%$@dh v9$hn? ddy6?q oyxd8f
  2: .c.3;3 %ytqm1 n$4uz] f84tj~ dw6scw
  3: ,~k_tk e5#4a. @9e4bm cgcib. 9%$"#!
  4: 7&oan- [:ri>w +jk3,! a=bvr' u:]&|=
  5: [etwvj 9k/xew rjl4p7 ds"k|n fw!odn
  6: ?7cpxv nj^gy] /wxfrk ixspk> {@mm:}
  7: zf/s6t zbaa>7 wcc$.^ !^teg? 2q7{\<
  8: |afn:8 ,rvb34 xrym4! 6*^!z% u.]6r6
  9: !;ar~j f_@x2k s,6v5t >cbud5 4yaroz
  10: od[/s" res.r] d\h%y, u}o3oz rkzsut
  </pre>
  <ol align="right"><a href="https://grc.com/ppp.htm">Ir a grc.com/ppp</a></ol>
  <p>Llave de secuencia: Cada vez que la página se actualiza, la llave de secuencia cambia. Puedes copiar y pegar tu llave para reimprimir la misma tarjeta más tarde.</p>
  <p>Juego de caracteres del código: 64, 88 o el tuyo propio. El alfabeto que tendrá tu contraseña es el juego de caracteres del código. La opción por defecto ofrece 64 caracteres conservadores; la segunda opción, sin embargo, es mucho más agresiva visualmente y, por lo tanto, mucho más segura.</p>
  <p>Longitud del código: La longitud del bloque en caracteres; el mínimo es dos y el máximo es dieciséis.</p>
  <p>Etiqueta de la tarjeta: El nombre de tu tarjeta de contraseñas, por ejemplo: correo, redes sociales, entretenimiento, trabajo, etc.</p>
  <p>Primera tarjeta a generar: por defecto se genera la primera tarjeta, pero podrías elegir, por ejemplo, que la tarjeta número cien sea la que se muestre primero.</p>
  <p>Tamaño de la tarjeta: es el tamaño de la tarjeta al imprimirse. El tamaño por defecto es 14, que es el tamaño de una “tarjeta de crédito” al imprimirse.</p>
  <p>Haz clic en generar tarjetas e imprime la tarjeta deseada.</p>
  <p>¡Listo! Ahora tienes la oportunidad de mejorar tu experiencia general en línea con la tranquilidad de que la contraseña que estás usando es, de hecho, una contraseña segura y fuerte.</p>
    </div>

    <?php
}


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