<?php

$names = ["Eva", "Eunha", "Budi", "Zan"];

// for ($p = 0; $p < count($name) ; $p++) {
//     echo "Ini adalah data $p = $name[$p]" . PHP_EOL;
// }

foreach ($names as $index => $name) {
    echo "ini adalah data ke $index: $name" . PHP_EOL;
};

$person = [
    "first_name" => "Eunha",
    "last_name" => "Shi",
    "age" => "22"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
};