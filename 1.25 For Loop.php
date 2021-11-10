<?php
// For Loop
for($n = 1; $n <= 5; $n++){
    echo "Hello for loop\n";
}

// Line Break
echo PHP_EOL;

for($i = 1; $i<10; $i++){
    echo PHP_EOL;
    for($j = 0; $j<$i; $j++){
        echo "*";
    }
}

// Line Break
echo PHP_EOL;

for($j = 10; $j >= 1; $j--){
    echo $j.":". (11 - $j);
    echo PHP_EOL;
}