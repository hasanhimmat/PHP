<?php
$n = 12;
$remainder = $n % 2;

switch ($remainder){
    case 0:
        echo "{$n} is an Even number";
        break;
    case 1:
        echo "{$n} is Odd Number";
        break;
    default:
        echo "Something is Wrong";
}