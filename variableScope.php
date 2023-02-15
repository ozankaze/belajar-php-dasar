<?php

$first_name = "Eva"; // Global Scope
$last_name = "Eunha";

function sayName() {
    global $first_name; // Global Keyword
    echo $first_name . PHP_EOL; // Error

    echo $GLOBALS["last_name"] . PHP_EOL;
}

sayName();