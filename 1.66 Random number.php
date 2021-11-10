<?php
// Random number
$numbers = range(20,72);
print_r($numbers);
echo PHP_EOL;

$random = mt_rand(0, 32);
echo $random; // array index use this
echo PHP_EOL;

echo $numbers[$random];
echo PHP_EOL;


// Luck project
echo PHP_EOL;
$toss = $random;
if($toss % 2 == 0){
    echo "Head";
}else{
    echo "Tail";
}