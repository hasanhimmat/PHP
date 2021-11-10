<?php
// String to array
$mobiles  = "Symphony, Walton, Samsung, Xiaomi, Oppo, Vivo, Realme, Nokia, Asus, Lenovo, Winmax-BD";

// $mobile = explode(", ", $mobiles);

$mobile = preg_split("/(, |,)/", $mobiles);
// Explode working and output same result

print_r($mobile);

$mobileString = join(", ", $mobile);

// line break
echo "\n";


echo $mobileString;

// line break
echo "\n\n";

echo count($mobile);