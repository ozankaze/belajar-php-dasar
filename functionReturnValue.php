<?php

// 
function sum(int $first, int $last) : int
{
    return $first + $last;    
}

$result = sum(80, 20);
var_dump($result);

// 
function finalResult(int $value) : string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$result = finalResult(40);
var_dump($result);