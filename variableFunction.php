<?php

function drink() {
    echo "Drink" . PHP_EOL;
}

function apple() {
    echo "Apple" . PHP_EOL;;
}

$result = "drink";
$result();

$result = "apple";
$result();

// 

function sayHello(string $name, $filter) 
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function testing(string $name) : string 
{
    return "Sample $name";
}

sayHello("Eunha", "testing");
sayHello("Zan", "strtoupper");
sayHello("Zan", "strtolower");