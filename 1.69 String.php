<?php
// PHP string
$name = "Hasan";

$string01 = 'My name is $name \n \t';
echo $string01;

// line break
echo PHP_EOL;

$string01 = "My name is $name \n \t";
echo $string01;

// line break
echo PHP_EOL;

// now_doc = <<<'EOD'; // working same behavior '' single code
$heredoc = <<<EOD
Hello World!
My name is Hasan Himmat
My nick name {$name}
Thanks
EOD;

echo $heredoc;