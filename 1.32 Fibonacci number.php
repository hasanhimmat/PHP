<?php
$oldMain = 0;
$oldNum = 1;
$newNum = 1;

for ($i = 0; $i < 10; $i++) {
    echo $oldMain . " ";
    $oldNum = $newNum;
    $newNum = $oldNum + $oldMain;
    $oldMain = $oldNum;

    // Line Break
    echo PHP_EOL;
}
