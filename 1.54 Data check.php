<?php
$name = " ";

if(isset($name) && (!empty($name) && $name != " ")){
    echo "Name is set";
}else{
    echo "Not set";
}

echo PHP_EOL;

// manual checking
$checker = strlen($name);

if($checker >= 0 && (!empty($name) && $name != " ")){
    echo "Name is set";
}else{
    echo "Not set";
}