<?php
// Factorial
$n = 6;
for ($i = $n, $factorial = 1; $i > 1; $i--) {
    $factorial *= $i;
}

printf("Factorial of %d is %d", $n, $factorial);

// Multi Step in PHP
// for ($i = 0; $i < 100; $i += 7) {
//     echo $i . "\n";
// }

// Using ternary
for ($i = 0; $i < 100; $i++) {
    echo $i % 7 == 0 ? $i . "\n" : '';
    echo $i % 7 == 11 ? $i . "\n" : '';
}
