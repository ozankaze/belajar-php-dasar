<?php

function factorialLoop(int $value)
{
    $a = 1;

    for($i = 1; $i <= $value; $i++){
        $a *= $i;
    };
    
    return $a;
};

var_dump(factorialLoop(5));

function factorialRecursive(int $value)
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value -1);
    }
};

var_dump(factorialRecursive(5));

function loop(int $value)
{
    if($value == 0) {
        echo "End guys" . PHP_EOL;
    } else {
        echo "$value" . PHP_EOL;
        loop($value -1);
    }
};

loop(3000000);