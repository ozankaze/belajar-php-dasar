<?php

$name = "Eunha";
echo "Name : " . $name . PHP_EOL;

// ====

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"Eunha";
var_dump($valueInt);

$valueFloat = (float)"5.6669";
var_dump($valueFloat);

// ====

$name = "Zan";
echo $name[0]. PHP_EOL;
echo $name[1]. PHP_EOL;
echo $name[2]. PHP_EOL;

echo "Hello " . $name . " PHP Warning: Uninitialized string offset 3" . PHP_EOL;
echo "Hello $name PHP Warning: Uninitialized string offset 3" . PHP_EOL;

$var = "Riptide";
echo "This is {$var}s" . PHP_EOL;