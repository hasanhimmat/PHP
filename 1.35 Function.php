<?php
// Function in php
function whatsNumber($number)
{
    if ($number % 2 == 0) {
        echo "{$number} is Even Number";
    } else {
        echo "{$number} is Odd Number";
    }
}

whatsNumber(43);
