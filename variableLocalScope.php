<?php

function createName() {
    $name = "Eva" . PHP_EOL; // Local Scope
}

createName();
echo $name;