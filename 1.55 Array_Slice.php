<?php
// Array slice
$family = array("Hasna Banu", "Sopna Begum", "Nupur Akter", "Md Nuruzzaman", "Hasan Himmat");

// $family_sister = array_slice($family, 0,3);
// $family_sister = array_slice($family, -5, -1);
$family_sister = array_slice($family, 0,3);
$just_brother = array_slice($family, -2,2,true);
// original key need to use true

print_r($family);
echo PHP_EOL;

print_r($family_sister);
echo PHP_EOL;

print_r($just_brother);
echo PHP_EOL;

// associative array
$friends = array(
    "primary" => "Sujon",
    "highschool" => "Kawsar", 
    "collage" => "Nazmul", 
    1 => "Abid Morshed",
    "nu" => "Shakil"
);


print_r($friends);
echo PHP_EOL;

$best_friends = array_slice($friends, -3, 3,true);
// must use 3 arguments if you use true
print_r($best_friends);


    