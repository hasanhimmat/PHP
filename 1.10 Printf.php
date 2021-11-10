<?php
$fname = "Hasanur";
$lname = "Rahman";
$md = 'Md';

// variable swapping
printf('My name is %3$s %2$s %1$s', $fname, $lname, $md); //argument
echo PHP_EOL;
printf('The binary is %1$d == %1$b', 12);
echo PHP_EOL;

$n = 8.072;
printf("%.2f", $n);
echo PHP_EOL;

$x = 138; // 0138
$y = 46; //0046

//printf("%05d.\n", $x);
//printf("%05d\n", $y);

printf("%07.2f\n", $x);
printf("%07.2f\n", $y);
