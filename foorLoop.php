<?php

// doc: 73

for ( $start = 1 ; $start <= 10 ; $start++ ) {
    echo "Ini adalah for loop ke-$start" . PHP_EOL;
}

for ( $start = 10 ; $start >= 1 ; $start-- ) {
    echo "Ini adalah for loop ke-$start" . PHP_EOL;
}

// Syntax Alternative For Loop

for ( $start = 1 ; $start <= 10 ; $start++ ) :
    echo "Ini adalah for loop ke-$start" . PHP_EOL;
endfor;

for ( $start = 10 ; $start >= 1 ; $start-- ) :
    echo "Ini adalah for loop ke-$start" . PHP_EOL;
endfor;