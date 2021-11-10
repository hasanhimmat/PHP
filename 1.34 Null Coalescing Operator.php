<?php
//Null Coalescing Operator

// $facebook_ceo = "Hasanur Rahman";
$default_ceo = "Mark Zuckerberg";
$result = $facebook_ceo ?? $default_ceo;
echo $result;

// Line break
echo PHP_EOL;

if (isset($facebook_ceo)) {
    echo $facebook_ceo;
} else {
    echo $default_ceo;
}

// Line break
echo PHP_EOL;
$result1 = isset($facebook_ceo) ? $facebook_ceo : $default_ceo;
echo $result1;
