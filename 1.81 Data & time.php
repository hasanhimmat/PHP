<?php
// Date & time php
echo time();

// unix epoch
// unix time stand 

echo PHP_EOL;

echo date('d/m/y');
echo PHP_EOL;

echo date('D/M/Y');
echo PHP_EOL;

echo date('d/F/y');
echo PHP_EOL;

echo microtime(true);
echo PHP_EOL;

echo microtime(false);
echo PHP_EOL;


var_dump(microtime(false));
echo PHP_EOL;

$mt = microtime(true);
printf("%10.5f", $mt);
echo PHP_EOL;