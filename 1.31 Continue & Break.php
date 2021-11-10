<?php
for ($i = 1; $i <= 30; $i++) {

    // if ($i % 13 == 0) {
    //     echo $i . "\n";
    //     break;
    // }

    if ($i < 27) {
        continue;
        // Alternate in go to
        //goto a; 
    }

    echo $i;
    echo PHP_EOL;
    //a:
}
