<?php
// array_diff array_intersect
$numbers_one = array(1,3,6,7,8,9,32,23,13,11,2,5,75,32,53,14,4,21);
$numbers_two = array(34,89,93,4,21,64,98,24,67,3,2,75,24,21,54,32);

$fruits_one = array("a"=>"apple", "b"=>"banana", "c"=>"lemon"); 
$fruits_two = array("p"=>"pineapple", "g"=>"grapes", "l"=>"lemon"); 

$common = array_intersect($numbers_one, $numbers_two);

// $common = array_intersect($fruits_one, $fruits_two);

// $common = array_intersect_assoc($fruits_one, $fruits_two);
// it check key and value
// print_r($common);

$diff = array_diff($fruits_one, $fruits_two);
// $diff = array_diff_assoc($fruits_one, $fruits_two);

print_r($diff);

echo PHP_EOL;

print_r($common);

