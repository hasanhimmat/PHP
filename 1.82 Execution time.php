<?php
// Execution time
$startTime = microtime(true);

factorial(1000);

// sleep(2);

$endTime = microtime(true);

$executionTime = $endTime - $startTime;

// output
printf("%10.8f", $executionTime);





// factorial function
function factorial($n){
    $result = 1;
    for($i = 1; $i <= $n; $i++){
        $result *= $i;
    }
    return $result;
}