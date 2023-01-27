<?php

$name = "Zan";
$name = null;

$age = null;

echo "Nama : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "Zan";
unset($contoh);

$contoh = "Jhahaha";
$contoh = null;

var_dump(isset($contoh));
