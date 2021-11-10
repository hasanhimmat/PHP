<?php
$n = 7;
$m = 5;

if($n % 2 == 0){
    echo "{$n} is an Even number";
}else{
    echo "{$n} is an Odd Number";
}

echo PHP_EOL;

//if($n > $m){
//    echo "N: {$n} is Greater than M: {$m}";
//}else{
//    if($n == $m){
//        echo "The are equal";
//    }else{
//        echo "M: {$m} is Greater than N: {$n}";
//    }
//}

if($n > $m){
    echo "N = {$n} is Greater than M = {$m}";
}elseif($n == $m){
    echo "The are equal";
}else{
    echo "M = {$m} is Greater than N = {$n}";
}