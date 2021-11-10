<?php
// Associative array
$student = array(
    "fname" => "Hasanur",
    "lname" => "Rahman",
    "age" => 20,
    "class" => 14,
    "section" => "BBA"
);

// echo implode(" ",$student); // array to string

print_r($student);

// line break
echo "\n";

// echo "My name is {$student["fname"]} {$student["lname"]}\n";

printf("My name is %s %s", $student["fname"], $student["lname"]);

echo PHP_EOL;

echo join(", ",$student);

echo "\n\n";

// $sed =  serialize($student); // serialize

// $used = unserialize($sed); // unserialize

// print_r($used);

$jsondata = json_encode($student);

echo $jsondata;

echo "\n\n";

$new_student = json_decode($jsondata, true); // remove std class object use true

print_r($new_student);