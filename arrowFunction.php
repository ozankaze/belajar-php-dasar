<?php

$firstName = "Eunha";
$lastName = "Eva";

$anonyMouse = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $anonyMouse();
echo $arrowFunction();