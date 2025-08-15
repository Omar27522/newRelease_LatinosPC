<?php
function content(){
    ?>
    <style>
        fieldset {
            border: none;
            width: fit-content;
            padding: 10px;
            margin: 10px;
        }
        fieldset legend {
           font-size: 2rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-weight: bold;
        }
        fieldset a {
            display: block;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-weight: bold;
        }
        fieldset a:hover {
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
        <fieldset><legend><h1>Sermons and Discourses</h1></legend>
    <a href="teachings?gospels#Olivet%20Discourse">Olivet Discourse</a>
    <a href="parables#^">Parables</a>
    </fieldset>

    <fieldset>
    <legend>Gospel of Matthew</legend>
    <a href="teachings?Matthew#Sermon%20on%20the%20Mount">Sermon on the Mount</a>
    <a href="teachings?Matthew#The%20Mission%20Discourse">The Mission Discourse</a>
    <a href="teachings?Matthew#The%20Parabolic%20Discourse">The Parabolic Discourse</a>
    <a href="teachings?Matthew#The%20Discourse%20on%20the%20Church">The Discourse on the Church</a>
    <a href="teachings?Matthew#The%20Olivet%20Discourse">The Olivet Discourse</a>
    </fieldset>
    </article>
    <?php
    content();
}
function sermones() {
    echo ' <article class="fullbar">¡Hola!</article>';
    content();
}
include './anvil/structure.php';
