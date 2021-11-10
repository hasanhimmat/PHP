<?php
// Nested if else
$condition1 = true;
$condition2 = true;
$condition3 = false;

if ($condition1){
    if($condition2){
        if($condition3){
            echo "3 condition is ok";
        }else{
            echo "2 condition is ok";
        }
    }else{
        echo "1 condition is ok";
    }
}else{
    echo "all false";
}

echo PHP_EOL;

if($condition1 && $condition2 && $condition3){
    echo "3 condition is ok";
}elseif($condition1 && $condition2){
    echo "2 condition is ok";
}elseif($condition1){
    echo "1 condition is ok";
}else{
    echo "all false";
}