<?php

$data = [
    "action" => "Create"
];

// apakah isster mempunyai $data["action];  
// if (isset($data["action"])) {
//     $destroy = $data["action"];
// } else {
//     $destroy = "Nothing";
// };

// echo $destroy . PHP_EOL;


$action = $data["action"] ?? "Nothing";
echo $action . PHP_EOL;