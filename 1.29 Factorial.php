<?php
$n = 3;
for($i = $n, $factorial = 1; $i > 1; $i--){
    $factorial = $factorial * $i;
}

echo $factorial;