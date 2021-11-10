<?php
// string tokenization
$myInfo = "Hello Everyone, This is Hasanur Rahman, I am a programmer";

$parts1 = explode(",", $myInfo);
$parts2 = explode(" ", $myInfo);
// explode alternate is join

// print_r($parts1);
// echo PHP_EOL;
// print_r($parts2);
// echo PHP_EOL;

// // Char output
// $allChar = str_split($myInfo);
// print_r($allChar);
// echo PHP_EOL;


$parts3 = strtok($myInfo, " ,");
while($parts3 !== false){
    echo $parts3."\n"; //iterator
    $parts3 = strtok(" ,");
}

echo PHP_EOL;

$parts4 = preg_split("/ |,/", $myInfo);
// $parts4 = preg_split("/\s|,/", $myInfo);
print_r($parts4);
