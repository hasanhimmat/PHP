<?php
// Function parameter
function addition(int $a){
    $result = (int)$a;  //Type Casting
    echo "Your result is: {$result}";
}

addition("3");