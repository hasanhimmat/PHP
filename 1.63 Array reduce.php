<?php
// Array reduce
$numbers = array(1,2,3,4,5,6,7,8,9,10);

function sum($oldValue, $newValue){

    // // even number sum
    // if($newValue % 2 ==0){
    //     return $oldValue + $newValue;
    // }
    // return $oldValue;

    // // odd number sum
    // if($newValue % 2 == 1){
    //     return $oldValue + $newValue;
    // }
    // return $oldValue;

    // sum all array
    return $oldValue + $newValue;
}

$sum = array_reduce($numbers, "sum");
echo $sum;







// // sum function
// function sum($n){
//     $sum = 0;
//     $len = count($n);
//     for($i = 0; $i<$len; $i++){
//     $sum += $n[$i];
//     }
//     echo $sum."\n";
// }
// sum($numbers);