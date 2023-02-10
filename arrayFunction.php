<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $map = fn (int $value) => $value * 10;
// $mapResult = array_map($map, $data);
// var_dump($mapResult);

rsort($data);
var_dump($data);

$person = [
    "first_name" => "Eva",
    "last_name" => "Dlarama"
];

var_dump(array_keys($person));
var_dump(array_values($person));