<?php
// String char access
$intro = "Hello World";

echo $intro[0];
echo PHP_EOL;
echo $intro[-1];
echo PHP_EOL;
echo $intro[-5];
echo PHP_EOL;

echo substr($intro, 0,5);

$length = strlen($intro);
echo PHP_EOL;

echo substr($intro, $length-5);
echo PHP_EOL;

echo substr($intro, -5);
echo PHP_EOL;

echo substr($intro, -5,2);