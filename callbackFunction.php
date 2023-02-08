<?php 


function sayHello(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
};

sayHello("Eunha", "strtoupper");
sayHello("Eunha", "strtolower");
sayHello("Eva", function(string $name):string {
    return strtoupper($name);
});
sayHello("Jisoo", fn(string $name) => strtoupper($name));
