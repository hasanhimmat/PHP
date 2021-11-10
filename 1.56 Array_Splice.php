<?php
// Array splice
$family = array("Hasna Banu", "Sopna Begum", "Nupur Akter", "Md Nuruzzaman", "Hasan Himmat");

// $now_family = array_splice($family, 2,3);

// add array removed position
$children = array("Abdul Hasib", "Hossain","Obaidulla", "Ruqayyah Sinha", "Abdur Rahim");
$now_family = array_splice($family, 2,3, $children);

print_r($family);

print_r($now_family);