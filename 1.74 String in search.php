<?php
// String in search
$lorenStr = "Lorem ipsum dolor sit amet consectetur adipisicing elit Repellat possimus";

echo $lorenStr[2];
echo PHP_EOL;

// string search
echo strpos($lorenStr, "amet"); // normal search
echo PHP_EOL;

echo stripos($lorenStr, "Amet",); // case insensitive
echo PHP_EOL;

echo stripos($lorenStr, "Amet", 23); // search start
echo PHP_EOL;

echo strrpos($lorenStr, "Amet", 23); // search reverse last to start
echo PHP_EOL;

// string search
$search_item = "dolor";
$offset = stripos($lorenStr, $search_item);
if($offset){
    echo "\nWord was found position: {$offset}\n";
}else{
    echo "\nWord not found\n";
}

// string search function
function strSearch($string, $search){
    $offset = stripos($string, $search);
    if($offset){
        echo "\n{$search} is found position: {$offset}\n";
    }else{
        echo "\nNot found {$search}/n";
    }
}

strSearch($lorenStr, "amet");