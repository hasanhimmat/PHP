<?php
// Array merge
$family = array("Hasna Banu", "Sopna Begum", "Nupur Akter", "Md Nuruzzaman", "Hasan Himmat");

$children = array("Abdul Hasib", "Hossain","Obaidulla", "Ruqayyah Sinha", "Abdur Rahim");


$full_family = array_merge($family, $children);

// $full_family = $family + $children;
// same index not count +

print_r($full_family);