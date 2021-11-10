<?php
// String recape
$something = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. A iusto, quod modi error quidem perspiciatis asperiores maxime neque eligendi adipisci!";

echo strlen($something);
echo PHP_EOL;

echo str_word_count($something);
echo PHP_EOL;

echo strpos($something, "sit");
echo PHP_EOL;

echo strrev($something);
echo PHP_EOL;

echo wordwrap($something, 20);
echo PHP_EOL;

echo str_replace("amet", "Hasan", $something);
echo PHP_EOL;