<?php
$n = -13;
//$r = $n % 2;
$r = abs($n) % 2;
switch ($r){
    case 0:
        switch ($n){
            case $n > 0:
                echo "$n is a positive even number";
                break;
            case $n < 0:
                echo "$n is a negative even number";
                break;
        }
        break;
    default:
    switch ($n){
        case $n > 0:
            echo "$n is positive odd number";
            break;
        case $n < 0:
            echo "$n is negative odd number";
            break;
    }
}

echo PHP_EOL;

switch (true){
    case ($r == 0 && $n > 0):
        echo "$n is a positive even number";
        break;
    case ($r == 1 && $n > 0):
        echo "$n is positive odd number";
        break;
    case ($r == 0 && $n < 0):
        echo "$n is a negative even number";
        break;
    //case ($r == -1 && $n < 0):
    case ($r == 1 && $n < 0):
        echo "$n is negative odd number";
        break;

}