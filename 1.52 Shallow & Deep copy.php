<?php
// shallow copy deep copy
$person = array("fname" => "Hasan", "lname" => "Himmat");
$new_person = $person; // copy by value || deep copy
$new_person["lname"] = "Utpol";

print_r($person);
echo "\n";
print_r($new_person);


echo PHP_EOL;

$person1 = array("fname" => "Abdul", "lname" => "Hasib");
$new_person = &$person; // copy by reference || shallow copy
$new_person1["lname"] = "Ahmed";

print_r($person1);
echo "\n";
print_r($new_person1);