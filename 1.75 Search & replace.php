<?php
$my_info = "Hello Everyone, My name is Hasanur Rahman, I am a programmer";

// $my_info_new = str_replace('Hasanur Rahman', 'Hasan Himmat', $my_info);

$my_info_new = str_ireplace('hasanur rahman', 'Hasan Himmat', $my_info);
// case insensitive use this str_ireplace()
// if you use array to str_ireplace

echo $my_info;
echo PHP_EOL;

echo $my_info_new;