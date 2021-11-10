<?php
// Array manipulation
$friends = ["Sujon", "Zahid Hasan", "Belal", "Jony", "Nazmul", "Asadul"];


$friends[1] = "Hasan Himmat"; // Add target index
$friends[] = "Abdur Rahim"; // Add last

// Array function
array_pop($friends); // Remove last
array_shift($friends); // Remove first

array_push($friends, "Rafeh Qazi"); // Add last
array_push($friends, "Shakil"); // Add last

array_unshift($friends, "Rasmus Lerdorf"); // Add first
array_unshift($friends, "Mosh Hamedani"); // Add first

$len = count($friends);

for($i = 0; $i < $len; $i++){
    $_temp = $i . ' : ';
    echo  $_temp. $friends[$i];
    echo PHP_EOL;
}
