<?php
// String reverse
$myName = "Hasan Himmat";

// output
echo $myName;

// line break
echo PHP_EOL;
echo PHP_EOL;

// way 2
$length = strlen($myName) - 1;

for($i = $length; $i>=0; $i--){
    echo $myName[$i];
}

// line break
echo PHP_EOL;

// way 3
$length = strlen($myName);

for($i = 1; $i <= $length; $i++){
    echo $myName[$i * -1];
}

// line break
echo PHP_EOL;

// build in function
echo strrev($myName);
