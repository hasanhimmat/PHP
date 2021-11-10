<?php
$n = 45;
$m = 12;

// Function return
function greaterOrSmaller($n, $m)
{
    if ($n > $m) {
        return 1;
    } elseif ($n == $m) {
        return 0;
    } else {
        return -1;
    }
}
// Using default method
if (greaterOrSmaller($n, $m) == 1) {
    echo "{$n} is Greater than {$m}";
} elseif (greaterOrSmaller($n, $m) == 0) {
    echo "{$n} and {$m} is equal";
} elseif (greaterOrSmaller($n, $m) == -1) {
    echo "{$n} is Smaller than {$m}";
} else {
    echo "Something is wrong";
}

echo PHP_EOL;

// php 7 specific operator

// > left value = return(1);
// < left value = return(-1);
// == left && right value = return(0);

$result = $n <=> $m;
if ($result == 1) {
    echo "{$n} is Greater than {$m}";
} elseif ($result == 0) {
    echo "{$n} and {$m} is equal";
} elseif ($result == -1) {
    echo "{$n} is Smaller than {$m}";
} else {
    echo "Something is wrong";
}
