<?php
$n = 39;

if($n % 2 == 0){
    echo "This is Even Number";
}else{
    echo "This is Odd Number";
}

echo PHP_EOL;

// If alternate
if($n % 2 == 0):
    echo "This is Even Number";
else:
    echo "This is Odd Number";
endif;

echo PHP_EOL;

// Switch alternate
// switch($n % 2):
//     case 0:
//         echo "{$n} is Even Number";
//     case 1:
//         echo "{$n} is Odd Number";
//         break;
//     default:
//     echo "Wrong";
//     endswitch;

echo PHP_EOL;
    
// If alternate
if($n % 2 == 0):
    echo "This is Even Number ++";
?>

<?php
else:
    echo "This is Odd Number ++";
endif;
?>