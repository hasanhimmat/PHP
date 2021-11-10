<?php
// Array range
// $numbers = array(12,13,14,15,16,17,18,20);

// // projects
// $numbers = array();
// for($i = 12; $i<= 20; $i++){
//     array_push($numbers, $i);
// }
// print_r($numbers);
// echo PHP_EOL;

// $numbers = range(12, 20);
$numbers = range(12, 20,2); // add stepping
print_r($numbers);
echo PHP_EOL;

foreach($numbers as $single){
    echo $single;
    echo PHP_EOL;
}

// line break
echo "\n";

foreach($numbers as $key=>$value){;
    echo $key ." : ". $numbers[$key];
    echo PHP_EOL;
}