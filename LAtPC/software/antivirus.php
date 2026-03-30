<?php
 $title = 'Antivirus';
    $links = ['computerVirus'=>'https://en.wikipedia.org/wiki/Computer_virus'];
    $av =[
        'An anti-virus program in itself, is created to help the computer shield itself from <a href="'.$links['computerVirus'].'">viruses</a>.',
        'The best antivirus solutions are the ones keeping Up to date with whats out there trying to harm the computer (PC).',
        'Also, the best antivirus solutions are simple, cost less than imagined, and bring peace of mind to the whole operation; which is to keep the PC Free from any viruses that will harm the computer and/or its components.'
    ];
    $history = [
        'The Bad Old Days',
        'From Mistakes to Menace',
        'The Virus Wild West',
        'Why You Need to Protect Your Digital Castle',
        'oldDays'=>'Way back when computers were clunky behemoths, problems started popping up. Little mistakes in their programming turned into annoying glitches. Nobody knew it then, but these were the tiny seeds of trouble that would grow into something much bigger.',
        'fromMto_M'=>'As computers got smarter, so did the people using them. Some folks figured out how to turn those little mistakes into mean little programs. These digital bullies, called viruses, started causing chaos, stealing stuff, and generally being jerks to computers.',
        'wildWest'=>'Viruses didn\'t stop at being annoying. They got super sneaky, hiding in places you\'d never expect. It was like a digital Wild West, with viruses always coming up with new tricks to mess with your computer.',
        'digitalCastle'=>'Viruses can steal your stuff, ruin your computer, and even steal your identity. It\'s like leaving your front door wide open for any creep to walk in. So lock that digital door, and don\'t be a sitting duck for those virtual villains.',

    ];

    $tips = [
        'Regular Antivirus scans, are less frequently needed; this is due to the technology inside each of the Av Solutions.',
        'Never install 2 antivirus solutions; this is due to the fact that False positives are a true nature on any field.',
        'Free antivirus solutions are just as good as paid ones, but paid ones have an incentive which is to keep the PC free from viruses, and because of their technology the PC can ensure trust in their solution.
            <br />Also Paid solutions have more features than free solutions such as, online storage, and malware protection, etc.',
        'Paid antivirus solutions also offer live support, and are reliable solution to ultimately keep computer data, safe.',
        'Scheduled scans: are a great way to ensure no viruses are hiding behind other files, and can be on set hours that the computer might not be in use.',
        'Safe browsing habits',
        'Software updates',
        'Strong passwords',
        'Backup data',
        'safe'=>'Be cautious of suspicious links and websites, and avoid downloading files from unknown sources.',
        'updates'=>'Keep your operating system and software applications up-to-date with the latest security patches.',
        'passwords'=>'Create complex and unique passwords for your online accounts, and consider using a password manager.',
        'backup'=>'Regularly back up your important files to an external hard drive or cloud storage.',
        'title'=>'Tips'
    ];

    $features = [
        'Real-time protection',
        'Firewall',
        'Phishing protection',
        'Ransomware protection',
        'Performance impact',
        'realTime'=>'Constantly monitors your system for threats, blocking them before they can cause damage.',
        'firewall'=>'Acts as a security barrier, protecting your computer from unauthorized network access.',
        'phishingProtection'=>'Identifies and blocks fraudulent attempts to steal your personal information.',
        'ransomwareProtection'=>'Detects and prevents ransomware attacks, safeguarding your files.',
        'performance'=>'Offers strong protection without significantly slowing down your computer.',
        'title'=>'Antivirus Features'
    ];

    $questions = [
        'Is a paid antivirus really necessary?',
        'What are the key benefits of paid antivirus software?',
        'How much does a good antivirus program cost?',
        'Is it worth paying for extra features like VPN and password management?',
        'Can I rely solely on my operating system\'s built-in protection?',
        'paidAv'=>'While free options exist, paid antivirus solutions often offer more comprehensive protection, advanced features, and dedicated customer support.',
        'benefits'=>'Paid antivirus typically includes features like real-time protection, firewalls, anti-phishing, ransomware protection, VPN access, password managers, and cloud storage.',
        'cost'=>'Prices vary based on the features and number of devices covered. Many offer flexible subscription plans.',
        'vpn'=>'It depends on your needs. If you value online privacy and convenience, these features can be beneficial.',
        'builtIn'=>'While operating systems offer some protection, a dedicated antivirus provides more robust security.',
        'title'=>'Common Antivirus Questions'
    ];



        echo "<div class=\"fullbar\">";
        sw_breadCrumbs();
        echo "<h1 id=\"^\">Anti-Virus</h1>";
        echo "</div>";

    ?>
            <article class="hero4">
        <div class=" fullbar">
            <div style="display:inline-block;">
                <a href="../#software">
                    <h2 id="title"><?= empty($title) ? $titulo : $title;?></h2>
                </a>
            </div>
            <?php  //BreadCrumbs

                    ?>
                <p tabindex="0" class=""><?= $av[0]; ?><br />
                    <img tabindex="0" src="https://latinospc.com/images/programs/av.jpg" height="210" width="240" alt="First Image" class="rtl selection_2 card2"
                        style="background-color: darkgray;color: whitesmoke;text-align: center;font-size: 2rem;">
                    <br /><?= $av[1]; ?><br /><br /><?= $av[2];?>
                </p>

                <section tabindex="0" class="">
                    <p><strong><?= empty($history) ?$historia[0]: $history[0];?>:</strong>
                        <?= empty($history) ?$historia['viejosTiempos']: $history['oldDays'];?></p>
                    <p><strong><?= empty($history) ?$historia[1]: $history[1];?>:</strong>
                        <?= empty($history) ?$historia['de_M_a_M']: $history['fromMto_M'];?></p>
                    <p><strong><?= empty($history) ?$historia[2]: $history[2];?>:</strong>
                        <?= empty($history) ?$historia['salvajeOeste']: $history['wildWest'];?></p>
                    <img tabindex="0" src="../../../tempimages/th.jpg" height="150" width="350" alt="Second Image" class="fl selection_2 card2"
                        style="background-color: darkcyan;color: whitesmoke;text-align: center;font-size: 2rem;">
                    <p><strong><?= empty($history) ?$historia[3]: $history[3];?>:</strong>
                        <?= empty($history) ?$historia['castilloDigital']: $history['digitalCastle'];?></p>
                </section>

                <h2><?= empty($tips) ? $consejos['titulo'] : $tips['title'];?></h2>
                <section>
                    <p class="colms2">
                        <span tabindex="0" class="selection_2">
                            <?= empty($tips) ? $consejos[0] : $tips[0];?></span>
                        <br /><br /><span tabindex="0" class="selection_2">
                            <?= empty($tips) ? $consejos[1] : $tips[1];?></span>
                        <br /><br /><span tabindex="0" class="selection_2">
                            <?= empty($tips) ? $consejos[2] : $tips[2];?></span>
                        <br /><br /><span tabindex="0" class="selection_2">
                            <?= empty($tips) ? $consejos[3] : $tips[3];?></span>
                        <br /><br /><span tabindex="0" class="selection_2">
                            <?= empty($tips) ? $consejos[4] : $tips[4];?></span>
                    </p>
                    <div tabindex="0" class="">
                        <p><strong><?= empty($tips) ? $consejos[5] : $tips[5];?>:</strong>
                            <?= empty($tips) ? $consejos['aSalvo'] : $tips['safe']; ?></p>
                        <img tabindex="0" src="../../../tempimages/OIG2.jpg" height="315" width="440" alt="Second to Last Image" class="rtl selection_2 card2"
                            style="background-color: burlywood;color: whitesmoke;text-align: center;font-size: 2rem;">
                        <p><strong><?= empty($tips) ? $consejos[6] : $tips[6];?>:</strong>
                            <?= empty($tips) ? $consejos['actualizaciones'] : $tips['updates']; ?></p>
                        <p><strong><?= empty($tips) ? $consejos[7] : $tips[7];?>:</strong>
                            <?= empty($tips) ? $consejos['contraseñas'] : $tips['passwords']; ?></p>
                        <p><strong><?= empty($tips) ? $consejos[8] : $tips[8];?>:</strong>
                            <?= empty($tips) ? $consejos['respaldo'] : $tips['backup']; ?></p>
                    </div>
                </section>
        </div><!-- /fullbar -->

        <div class="hero4 fullbar" style="margin-bottom: 0;">
            <h2><?= empty($features) ? $caracteristicas['titulo'] : $features['title'];?></h2>
            <section tabindex="0" class="selection">
                <p><strong><?= empty($features) ? $caracteristicas[0] : $features[0];?>:</strong>
                    <?= empty($features) ? $caracteristicas['tiempoReal'] : $features['realTime'];?></p>
                <p><strong><?= empty($features) ? $caracteristicas[1] : $features[1];?>:</strong>
                    <?= empty($features) ? $caracteristicas['paredesCortaFuegos'] : $features['firewall']; ?></p>
                <p><strong><?= empty($features) ? $caracteristicas[2] : $features[2];?>:</strong>
                    <?= empty($features) ? $caracteristicas['proteccionFraude'] : $features['phishingProtection']; ?></p>
                <p><strong><?= empty($features) ? $caracteristicas[3] : $features[3];?>:</strong>
                    <?= empty($features) ? $caracteristicas['proteccionRescate'] : $features['ransomwareProtection']; ?></p>
                <p><strong><?= empty($features) ? $caracteristicas[4] : $features[4];?>:</strong>
                    <?= empty($features) ? $caracteristicas['rendimiento'] : $features['performance']; ?></p>
            </section>

            <h2><?= empty($questions) ? $preguntas['titulo'] : $questions['title']; ?></h2>
            <section tabindex="0" class="">
                <p><strong><?= empty($questions) ? $preguntas[0] : $questions[0];?></strong>
                    <?= empty($questions) ? $preguntas['avPagado'] : $questions['paidAv']; ?></p>
                <p><strong><?= empty($questions) ? $preguntas[1] : $questions[1];?></strong>
                    <?= empty($questions) ? $preguntas['beneficios'] : $questions['benefits']; ?></p>
                <img tabindex="0" src="../../../tempimages/thm.jpg" height="150" width="250" alt="Last Image" class="fl selection_2 card2"
                    style="background-color: darkred;color: whitesmoke;text-align: center;font-size: 2rem;">
                <p><strong><?= empty($questions) ? $preguntas[2] : $questions[2];?></strong>
                    <?= empty($questions) ? $preguntas['costo'] : $questions['cost']; ?></p>
                <p><strong><?= empty($questions) ? $preguntas[3] : $questions[3];?></strong>
                    <?= empty($questions) ? $preguntas['vpn'] : $questions['vpn']; ?></p>
                <p><strong><?= empty($questions) ? $preguntas[4] : $questions[4];?></strong>
                    <?= empty($questions) ? $preguntas['incorporado'] : $questions['builtIn']; ?></p>
            </section>
        </div>
    </article>