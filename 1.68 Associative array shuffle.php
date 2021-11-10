<?php
// Associative array shuffle
$fruits = array("a"=>"apple", "b"=>"banana", "m"=>"mango", "p"=>"pineapple", "o"=> "orange");

// // solution
// shuffle($fruits);
// print_r($fruits);
// echo PHP_EOL;

// $key = array_rand($fruits);
// echo $fruits[$key];
// echo PHP_EOL;

$_fruits = $fruits;
shuffle($_fruits);
print_r($_fruits);
echo PHP_EOL;