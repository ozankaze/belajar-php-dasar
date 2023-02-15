<?php

$name = "Zan";

$otherName = &$name;
$otherName = "Eunha";

echo $name . PHP_EOL;




function incrument(int &$value) {
    $value++ . PHP_EOL;
}

$counter = 1;
incrument($counter);

echo $counter . PHP_EOL;




function &getValue() {
    static $value;
    return $value;
}

$a = &getValue();
$a = 300;

$b = &getValue();
echo $b . PHP_EOL;