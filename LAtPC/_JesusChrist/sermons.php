<?php
function content(){
    ?>
    <style>
        section {
            border: none;
            width: fit-content;
            padding: 10px;
            margin: 10px;
        }
        section h2 {
           font-size: 2rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-weight: bold;
        }
        section a {
            display: block;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-weight: bold;
        }
        section a:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-dark));
        }
    </style>
    <?php
}
function sermons() {
    ?>

    <article class="fullbar">
        <div class="homepage-grid">
            <section class="grid-item">
           <h1>Sermons and Discourses</h1>
    <a href="teachings?John#New%20Birth%20Discourse">New Birth Discourse</a>
    <a href="teachings?John#Living%20Water%20Discourse">Living Water Discourse</a>
    <a href="teachings?Matthew#Sermon%20on%20the%20Mount">Sermon on the Mount</a>
    <a href="teachings?Luke#Sermon%20on%20the%20Plain">Sermon on the Plain</a>
    <a href="teachings?Luke#Mission%20Discourse">Mission Discourse</a>
    <a href="parables#^">Parables</a>
    <a href="teachings?Matthew#The%20Parabolic%20Discourse">The Parabolic Discourse</a>
    <a href="teachings?John#Bread%20of%20Life%20Discourse">Bread of Life Discourse</a>
    <a href="teachings?John#Light%20of%20the%20World%20Discourse">Light of the World Discourse</a>
    <a href="teachings?John#Good%20Shepherd%20Discourse">Good Shepherd Discourse</a>
    <a href="teachings?Matthew#The%20Discourse%20on%20the%20Church">The Discourse on the Church</a>
    <a href="teachings?John#Son%20and%20the%20Father%20Discourse">Son and the Father Discourse</a>
    <a href="teachings?gospels#Olivet%20Discourse">Olivet Discourse</a>
    <a href="teachings?John#Farewell%20Discourse">Farewell Discourse</a>
    <a href="teachings?Acts#Ascension%20Discourse">Ascension Discourse</a>
    <a href="teachings?Acts#Road%20to%20Damascus%20Discourse">Road to Damascus Discourse</a>
    <a href="teachings?Revelation#Final%20Testimony%20of%20Jesus">Final Testimony of Jesus</a>
</section>

<section class="grid-item">
    <h2>Gospels</h2>
  <h3>Matthew</h3>
    <a href="teachings?Matthew#Sermon%20on%20the%20Mount">Sermon on the Mount</a>
    <a href="teachings?Matthew#The%20Mission%20Discourse">The Mission Discourse</a>
    <a href="teachings?Matthew#The%20Parabolic%20Discourse">The Parabolic Discourse</a>
    <a href="teachings?Matthew#The%20Discourse%20on%20the%20Church">The Discourse on the Church</a>
    <a href="teachings?Matthew#The%20Olivet%20Discourse">The Olivet Discourse</a>
  <h3>Mark</h3>
    <a href="teachings?Mark#Parabolic%20Discourse">Parabolic Discourse</a>
    <a href="teachings?Mark#Olivet%20Discourse">Olivet Discourse</a>
  <h3>Luke</h3>
    <a href="teachings?Luke#Sermon%20on%20the%20Plain">Sermon on the Plain</a>
    <a href="teachings?Luke#Mission%20Discourse">Mission Discourse</a>
    <a href="teachings?Luke#Parabolic%20Discourse">Parabolic Discourse</a>
    <a href="teachings?Luke#Olivet%20Discourse">Olivet Discourse</a>
</section>

<section class="grid-item">
  <h2>Gospel of John</h2>
    <a href="teachings?John#New%20Birth%20Discourse">New Birth Discourse</a>
    <a href="teachings?John#Bread%20of%20Life%20Discourse">Bread of Life Discourse</a>
    <a href="teachings?John#Living%20Water%20Discourse">Living Water Discourse</a>
    <a href="teachings?John#Light%20of%20the%20World%20Discourse">Light of the World Discourse</a>
    <a href="teachings?John#Good%20Shepherd%20Discourse">Good Shepherd Discourse</a>
    <a href="teachings?John#Son%20and%20the%20Father%20Discourse">Son and the Father Discourse</a>
    <a href="teachings?John#Farewell%20Discourse">Farewell Discourse</a>
    <a href="teachings?John#High%20Priestly%20Prayer">High Priestly Prayer</a>
  <h2>Other Books — Words of Jesus</h2>
    <a href="teachings?Acts#Great%20Commission">Great Commission</a>
    <a href="teachings?Acts#Ascension%20Discourse">Ascension Discourse</a>
    <a href="teachings?Acts#Road%20to%20Damascus%20Discourse">Road to Damascus Discourse</a>
</section>

<section class="grid-item">
  <h2>Book of Revelation</h2>
    <a href="https://en.wikipedia.org/wiki/John%27s_vision_of_the_Son_of_Man"title="Wikipedia">Vision of the Son of Man</a>
    <a href="teachings?Revelation#Message%20to%20Ephesus">Message to Ephesus</a>
    <a href="teachings?Revelation#Message%20to%20Smyrna">Message to Smyrna</a>
    <a href="teachings?Revelation#Message%20to%20Pergamum">Message to Pergamum</a>
    <a href="teachings?Revelation#Message%20to%20Thyatira">Message to Thyatira</a>
    <a href="teachings?Revelation#Message%20to%20Sardis">Message to Sardis</a>
    <a href="teachings?Revelation#Message%20to%20Philadelphia">Message to Philadelphia</a>
    <a href="teachings?Revelation#Message%20to%20Laodicea">Message to Laodicea</a>
    <a href="teachings?Revelation#Final%20Testimony%20of%20Jesus">Final Testimony of Jesus</a>
</section>

</div>
    </article>
    <?php
    content();
}
function sermones() {
    echo ' <article class="fullbar">¡Hola!</article>';
    content();
}
include './anvil/structure.php';
