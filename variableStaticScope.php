<?php

function incridible() {
    static $set_angka = 1;
    echo "$set_angka" . PHP_EOL;
    $set_angka++;
}

incridible();
incridible();
incridible();