<?php

// doc: 173
function sayHello($first_name, $last_name = null) {
    echo "My name is: $first_name $last_name" . PHP_EOL;
}

sayHello("Eva", "Shi");
sayHello("Eunha");
sayHello("Budi");

function sum($first, $last) {
    $total = $first + $last;
    echo "Nilai $first + $last = $total" . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);

function sumAll(...$values) {
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "total " . implode(",", $values) . "= $total" . PHP_EOL;
}

sumAll(5, 9, 8, 9);

$values = [6, 5, 4, 5];
sumAll(...$values);