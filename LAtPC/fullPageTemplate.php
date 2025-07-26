<?php
$page = new Structure ("../","english","Template");
$keywords = "test_Keywords";
$description = "test_Description";

function template(){
    ?> <style>
    article{
        padding: 1rem 2rem 3rem;
        margin: 0 auto;
        position: relative;
        max-width: 1200px;
    }
    </style>
    <article>
    FOO BAR
    </article>
    <?php
}

include './anvil/structure.php';
?>