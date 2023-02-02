<?php

goto a;
echo "Hello Word" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;


$start = 1 ;

while (true) {
    echo "Ini adalah (break) untuk menghentikan perulangan ke-$start" . PHP_EOL;
    $start++;

    if ($start > 10) {
        goto end;
    }
}

end:
echo "End loop" . PHP_EOL;