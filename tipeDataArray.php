<?php

$values = array(10,9,8,7.5);
var_dump($values);

$names = ["Jisoo", "Zan", "Eunha", "Eva"];
var_dump($names);

var_dump($names[0]);

$names[1] = "Cheribring";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Clean";
var_dump($names);

var_dump(count($names));

// ================ END ==================

$apexLegend = array(
    "id"    => 10,
    "name"  => "Ash",
    "skill" => "Incisive Instigator",
    "address" => array(
        "city" => "Cianjur",
        "country" => "Indonesia"
    )
);

var_dump($apexLegend);
var_dump($apexLegend["name"]);
var_dump($apexLegend["address"]["country"]);

$valorant = [
    "id"    => 30,
    "name"  => "Sage",
    "skill" => "Sentinel",
    "address" => [
        "city" => "Cirebon",
        "country" => "Indonesia"
    ]
];

var_dump($valorant["name"]);
var_dump($valorant["address"]["city"]);

// ================ END ==================