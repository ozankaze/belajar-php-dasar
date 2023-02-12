<?php

$name = "Eva"; // Global Scope

function sayName() {
    global $name; // Global Keyword
    echo $name . PHP_EOL; // Error
}

sayName();