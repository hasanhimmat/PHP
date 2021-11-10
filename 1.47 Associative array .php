<?php
// Associative array
$friends = [
"primary" => "Sujon",
"highschool" => "Kawsar", 
"collage" => "Nazmul", 
"nu" => "Shakil"
];

// Add in associative array
$friends["nu"] = $friends["nu"].", Hasanur Rahman";
// Adding another way
$friends["nu"] .=", Abdul Hasib";

// echo implode(", ", $friends); // convert array to string

// line break
echo "\n\n";

echo $friends["primary"];
echo "\n";
echo $friends["nu"];

echo PHP_EOL;

echo "\n===Foreach===\n\n";

// loop system
foreach($friends as $key=>$value){
    echo $key . " => " . $value;
    echo PHP_EOL;
}

echo PHP_EOL;


// loop system

$keys = array_keys($friends);
// print_r($keys);

for($i = 0; $i < count($keys); $i++){
    $key = $keys[$i];
    echo $friends[$key];
    echo PHP_EOL;
}


echo PHP_EOL;

$values = array_values($friends);
// print_r($values);

for($i = 0; $i < count($values); $i++){
    $value = $values[$i];
    echo $value;
    echo PHP_EOL;
}