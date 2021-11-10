<?php
// Array in PHP
$friends = array("Sujon", "Zahid Hasan", "Belal", "Jony", "Nazmul", "Asadul");

// Array output
$len = count($friends);

for($i = 0; $i < $len; $i++){
    echo $friends[$i];
    echo PHP_EOL;
}

// Line break
echo PHP_EOL;

for($i = $len - 1; $i >= 0; $i--){
    echo $friends[$i];
    echo PHP_EOL;
}
