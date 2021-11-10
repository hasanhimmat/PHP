<?php
$foods = array("Rice", "Beef", "Chicken", "Sugar", "Coco-cola");

$numbers = array(3,50,30,2,43,4,64,98,1,6);

// original
print_r($foods);
echo PHP_EOL;

print_r($numbers);
echo PHP_EOL;

// array sort

// sort($foods);
// rsort($foods);
// ksort($foods);
asort($foods); // asort received key
sort($numbers);

// output
print_r($foods);
echo PHP_EOL;

print_r($numbers);
echo PHP_EOL;