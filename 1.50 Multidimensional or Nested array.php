<?php
// Multidimensional array
$foods = [
    "vegetables" => explode(", ", "eggplant, lettuce, tomato, daikon, ginger"),
    "fruits" => explode(", ", "orange, apple, banana, grape, pineapple"),
    "drinks" => explode(", ", "milk, water, tea, coffee, juice")

];

// remove array element
array_shift($foods['vegetables']);
array_shift($foods['vegetables']);

array_shift($foods['fruits']);
array_shift($foods['fruits']);

array_shift($foods['drinks']);
array_shift($foods['drinks']);

// add array element
array_push($foods["vegetables"], "brocoli");

print_r($foods);

echo PHP_EOL;

echo "I am drinking {$foods["drinks"][2]}";