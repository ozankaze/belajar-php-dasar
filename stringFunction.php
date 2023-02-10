<?php

var_dump(join(".", [5, 6, 7, 8, 9, 10]));
var_dump(explode(" ", "Returns an array of strings"));
var_dump(strtolower("RETURNS AN ARRAY OF STRINGS"));
var_dump(strtoupper("returns an array of strings"));
var_dump(str_shuffle("abcdefghijklmn"));


$str = "abcdefgh";

$strFinal = str_shuffle($str);
echo $strFinal . PHP_EOL;
