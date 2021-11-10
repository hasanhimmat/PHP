<?php
$year = 2024;

/*
if($year % 400 == 0){
    echo "{$year} is a Leap Year";
}elseif($year % 4 == 0 && $year % 100 != 0){
    echo "{$year} is a Leap Year";
}else{
    echo "{$year} Not a Leap Year";
}
echo PHP_EOL;
*/

// $year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0))
if($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)){
    echo "{$year} is a Leap Year";
}else{
    echo "{$year} Not a Leap Year";
}