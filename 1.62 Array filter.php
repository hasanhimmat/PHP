<?php
// Array filter
$friends = array("sujon", "belal", "abid", "Nazmul", "asadul", "shakil", "rabbi", "shakib", "zahid", "mehadi", "rahul", "tarek", "mishrat");

function check($name){
    return $name[0] == "s";
}

$target_friend = array_filter($friends, "check");

print_r($target_friend);