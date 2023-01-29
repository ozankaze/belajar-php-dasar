<?php

$first = [
    "first_name" => "Zan"
];

$last = [
    "first_name" => "Eva",
    "last_name" => "Kaze"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Eva",
    "last_name" => "Kaze"
];

$b = [
    "last_name" => "Kaze",
    "first_name" => "Eva"
];

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);