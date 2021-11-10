<?php
// Variable scope

$name = 'Hasanur Rahman';

function whatsName(){
    // $name = "Hasan Himmat";

    /*global $name;
    echo "My name is {$name}";*/

    echo $GLOBALS['name'];
    echo PHP_EOL;
}

whatsName();

// Others function
function doSomething(){
    global $name;
    echo "My name is {$name}";
    echo PHP_EOL;
}

doSomething();

// Others function
function something(){
    static $i; // static persist value
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

something();
something();
something();