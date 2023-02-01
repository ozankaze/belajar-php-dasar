<?php

// doc: 73

$start = 1;
while ( $start <= 10 ) {
    echo "Ini adalah for while ke-$start" . PHP_EOL;
    $start++;
};

$start = 10;
while ( $start >= 1 ) :
    echo "Ini adalah for while ke-$start" . PHP_EOL;
    $start--;
endwhile;