<?php
$hasan = 100;
$sujon = 100;

if($hasan == $sujon){
    echo "Hasan has same of money as Sujon";
}elseif($hasan > $sujon){
    echo "Hasan has more money than Sujon";
}elseif($hasan < $sujon){
    echo "Hasan has less money than Sujon";
}else{
    echo "Something is wrong";
}

//if($hasan >= $sujon){
//    echo "Hasan has more and same money as Sujon";
//}

echo PHP_EOL;

$name = "Hasanur Rahman";
$age = 21;

if ($age >= 1 && $age < 13){
    echo "{$name} is Children";
}elseif($age >= 13 && $age <= 19){
    echo "{$name} is teenager";
}elseif($age > 19 && $age <= 30){
    echo "{$name} is Young man";
}else{
    echo "Sorry this feature isn't available right now";
}

echo PHP_EOL;

$food = "orange";

if("lemon" == $food || "orange" == $food){
    echo ucwords($food)." is Vitamin C";
}elseif("egg" == $food){
    echo ucwords($food)." is Vitamin D";
}else{
    echo "I don't know";
}