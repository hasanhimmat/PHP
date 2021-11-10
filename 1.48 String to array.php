<?php
// String to array
$mobiles  = "Symphony, Walton, Samsung, Xiaomi, Oppo, Vivo, Realme, Nokia, Asus, Lenovo";

$mobile = explode(", ", $mobiles);
// ", " delimiter 
// var_dump($mobile); // Type checking

echo $mobile[0];

// line break
echo "\n";

echo "I am use {$mobile[3]} mobile phone";

// line break
echo "\n";

$mobilesString = join(', ', $mobile);

echo $mobilesString;

// line break
echo "\n\n";

echo "There available ". (count($mobile) + 1)  . " mobile brands";

