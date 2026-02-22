<?php
function _JesusChrist_King_of_kings(){
try {
	$dbPath = __DIR__ . '../../db/laTpc.db';
	$pdo = new PDO('sqlite:' . $dbPath);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// Check if content table exists
	$tableExists = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='content'")->fetch();

	global $content;
	if ($tableExists) {
		$stmt = $pdo->query('SELECT * FROM content WHERE page_id = "home"');//each page has its own page_id wich is represnted by a table on the SQLite Connection file.
		$content = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
} catch (PDOException $e) {
	// Log error and continue without database content
	error_log('Database Error: ' . $e->getMessage());
	$content = [];
}


    global $content;

	$headingIndex = array_search('headings', array_column($content, 'name'));

    ?>
    <section class="fullbar">
        <nav class="crumbs">
      <div class="bread-crumbs">
        <a href="#^" class="crumb-link"><b>The Beloved Son</b></a>
      </div>
    </nav>
    <section class="homepage-grid">
   
        
        <a href="../<?= htmlspecialchars($content[16]['content']);?>/#^"
            class="cta-button" style="color: white;"><?= $content[11]['content'];?></a> <!-- There is a bug here, I want to reuse what the database has, but this is a terrible workaround, the link disapears until hover whhen  ../ is added to the begining of the link. Like I am not even touhing the text why does this happen? I need a better way to add stuff from the BD that makes sense visually. the current implementation os very difficult to follow. It feels overengineered and code reader deterrent -->
        <a href="../<?= htmlspecialchars($content[17]['content']);?>/#^"
            class="cta-button" style="color: white;"><?= $content[12]['content'];?></a>
        <a href="../<?= htmlspecialchars($content[18]['content']);?>/#^"
            class="cta-button" style="color: white;"><?= $content[13]['content'];?></a>
        <a href="../<?= htmlspecialchars($content[19]['content']);?>/#^"
            class="cta-button" style="color: white;"><?= $content[14]['content'];?></a>
        <a href="../<?= htmlspecialchars($content[20]['content']);?>/#^"
            class="cta-button" style="color: white;"><?= $content[15]['content'];?></a>

    </section>
        <pre id="^">
📜 Chronological Timeline Framework
A structured outline beginning with the 40 days in the desert and continuing through the early Christian movement after the crucifixion.

1. Before the 40 Days in the Desert (Context Setting)
Baptism by John the Baptist in the Jordan River

Recognition as the “Beloved Son” (Gospel accounts)

Beginning of public mission preparation

2. 40 Days in the Desert (Start of Public Ministry)
Retreat into the Judean wilderness

Fasting for 40 days

Temptations by Satan (three symbolic challenges)

Emergence to begin public ministry in Galilee

3. Early Galilean Ministry
Calling of the first disciples (Peter, Andrew, James, John)

First miracles (Cana wedding, healings, exorcisms)

Teachings in synagogues

Growing reputation as a healer and teacher

4. Major Teachings and Works
Sermon on the Mount

Parables (Kingdom of God themes)

Feeding of the multitudes

Walking on water

Raising of Lazarus

Growing conflict with religious authorities

5. Final Journey to Jerusalem
Triumphal Entry (Palm Sunday)

Cleansing of the Temple

Last Supper with disciples

Gethsemane prayer

Arrest and trial (Jewish and Roman authorities)

6. Crucifixion
Sentencing under Pontius Pilate

Crucifixion at Golgotha

Death and burial in a borrowed tomb

Tomb sealed and guarded (per Gospel accounts)

7. Resurrection (According to Christian Tradition)
Empty tomb discovered by women followers

Appearances to disciples in Jerusalem and Galilee

Commissioning of the apostles

8. 40 Days After the Resurrection
(Confirmed by Acts 1:3)

Multiple appearances to individuals and groups

Teaching about the Kingdom of God

Emphasis on the coming Holy Spirit

Final instructions to disciples

9. Ascension
Ascends from the Mount of Olives

Apostles return to Jerusalem to wait for the Spirit
</pre>

https://www.youtube.com/watch?v=MDkttJPR-7I

https://en.wikipedia.org/wiki/Seventy_disciples
</section>
<?php
}
include './anvil/structure.php';
?>