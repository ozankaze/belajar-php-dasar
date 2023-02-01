<?php

// doc: 73

$start = 1 ;

while (true) {
    echo "Ini adalah (break) untuk menghentikan perulangan ke-$start" . PHP_EOL;
    $start++;

    if ($start > 10) {
        break;
    }
}