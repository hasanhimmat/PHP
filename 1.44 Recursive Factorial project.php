<?php
// Recursion factorial

function factorial($n){
    if($n <= 1){
        return 1;
    }

    return $n * factorial($n - 1);
}

// Factorial output
echo factorial(5);

echo PHP_EOL;

echo factorial(6);

echo PHP_EOL;

echo factorial(3);

echo PHP_EOL;

echo factorial(4);