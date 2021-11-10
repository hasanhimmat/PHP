<?php
// Unlimited Arguments
function sum(int ...$numbers){
    $result = 0;
    for($i = 0; $i<count($numbers); $i++){
        $result += $numbers[$i];
    }
    return $result;
}

echo sum(4,5,3,2,5,6,4,7,54);