<?php
// Associative array
$friends = array(
    "primary" => "Sujon",
    "highschool" => "Kawsar", 
    "collage" => "Nazmul", 
    "nu" => "Shakil"
);


// remove data
unset($friends['collage']);

// output
print_r($friends);





