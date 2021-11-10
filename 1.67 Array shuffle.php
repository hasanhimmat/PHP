<?php
// Array shuffle
$numbers = range(20, 80);

print_r($numbers);
echo PHP_EOL;

// function
shuffle($numbers);
print_r($numbers);
echo PHP_EOL;

echo $numbers[1];