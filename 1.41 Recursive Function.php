<?php
// Recursive Function recursion

/*
function printN($n){
    if($n>=10){
        return;
    }

    echo $n."\n";
    $n++;
    printN($n);
}

printN(1);
*/


function printNumber($counter, $end, $stepping){
    if($counter > $end){
        return;
    }

    echo $counter."\n";
    $counter += $stepping;
    printNumber($counter, $end, $stepping);
}

printNumber(1, 30, 3);