<?php

// doc: 73

for ($start = 0; $start <= 100; $start++) {
    if ($start % 2 == 1) {
        continue;
    }
    echo "kita cek dulu $start" . PHP_EOL;
};