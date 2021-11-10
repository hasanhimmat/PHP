<?php
// Day mont year

echo date('d M, Y');
echo PHP_EOL;

echo date('dS M, Y');
echo PHP_EOL;

echo date('d M, Y h:i:s');
echo PHP_EOL;

echo date('d M, Y H:i:s a');
echo PHP_EOL;

echo date('d M, Y H:i:s A');
echo PHP_EOL;

echo date('t');
echo PHP_EOL;
echo PHP_EOL;

// local time zone
date_default_timezone_set("Asia/Dhaka");

echo date('d M, Y H:i:s A', time() + 12*60*60);
echo PHP_EOL;