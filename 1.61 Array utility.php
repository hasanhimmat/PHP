<?php
// Array utility
$numbers = array(1,2,3,4,5,6, 7,8,9,10,11,12);

// function
function square($n){
    printf("Square of %d is %d\n", $n, $n*$n);
}

array_walk($numbers, "square");
echo PHP_EOL;

// function
function cube($n){
    return $n*$n*$n;
}

$cube_all = array_map("cube", $numbers);
echo PHP_EOL;

// print_r($numbers);

print_r($cube_all);
echo PHP_EOL;

// function
function even($n){
    return $n%2==0;
}

function odd($n){
    return $n%2==1;
}

$all_even = array_filter($numbers, "even");

$all_odd = array_filter($numbers, "odd");

print_r($all_even);
echo PHP_EOL;

print_r($all_odd);
echo PHP_EOL;

