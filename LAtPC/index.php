<?php
echo "Hello World".PHP_EOL."more text ";

function first_function () {
    echo "Hello World from a function called First Function".PHP_EOL;
}

first_function();


class FIRST_CLASS {
    public function function_within_a_class($var){
        return $var;
    }
}

$var = new FIRST_CLASS();
echo $var->function_within_a_class("Hello World from a function within a class");
?>