<?php
// Array search
$family = array("Hasna Banu", "Sopna Begum", "Nupur Akter", "Md Nuruzzaman", "Hasan Himmat");

$children = array("Abdul Hasib", "Hossain","Obaidulla", 7, "Ruqayyah Sinha", "Abdur Rahim");

// Associative array
$friends = array(
    "primary" => "Sujon",
    "highschool" => "Kawsar", 
    "collage" => "Nazmul", 
    "nu" => "Shakil"
);

// array merge
$full_family = array_merge($family, $children);



// array search
$search = 7;

$offset = array_search(ucwords($search), $full_family);

if(in_array(ucwords($search), $full_family)){
    echo "We are found: {$search}\nHer position is: {$offset}\n";
}else{
    echo "Not found!\n";
}

// Key search or exists
if(key_exists("nu", $friends)){
    echo "Your key is exists\n";
}else{
    echo "Key not found\n";
}