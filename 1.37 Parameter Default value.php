<?php
// Parameter Default value
function hotel($foodType = 'Coffee', $numberOfItems = '1 cup'){
    echo "{$numberOfItems} of {$foodType} have been serve";
    echo PHP_EOL;
}

hotel();
hotel("Coffee", "3 cps");
hotel("Tea", "5 cps");