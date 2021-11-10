<?php
// String parse and extract helper
$name = "Hasan Himmat 0194880447";
$parts = sscanf($name, "%s %s %11s");

print_r($parts);

// line break
echo PHP_EOL;

sscanf($name, "%s %s %11s", $fname, $lname, $mobile);

echo $fname;
echo PHP_EOL;
echo $lname;
echo PHP_EOL;
echo $mobile;
echo PHP_EOL;


// hex color
echo PHP_EOL;
$hexColor = "#FF2F44";
sscanf($hexColor, "#%2x%2x%2x", $red, $green, $blue);

echo $red;
echo PHP_EOL;
echo $green;
echo PHP_EOL;
echo $blue;
