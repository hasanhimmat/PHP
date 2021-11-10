<?php
// unix timestamp

echo time();
echo PHP_EOL;

echo mktime(0,0,0,12,1,2021);
echo PHP_EOL;

// local time
date_default_timezone_set("Asia/Dhaka");
echo mktime(0,0,0,12,1,2021);
echo PHP_EOL;

// diff