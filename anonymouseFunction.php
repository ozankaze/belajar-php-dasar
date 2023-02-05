<?php

$sayHello = function(string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Budi");
$sayHello("Eunha");

function sayGoodBay(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

// 
// sayGoodBay("Zan", function(string $name): string{
//     return strtoupper($name);
// });

// 
$filterFunction = function(string $name): string{
    return strtoupper($name);
};

sayGoodBay("Zan", $filterFunction);

$firstName = "Eva";
$lastName = "Eunha";

$finalOutput = function() use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$finalOutput();