<?php
// Constant
const NAME = "Hasnaur Rahman";
define("JOB", "Software Developer\n");

// Variable
$task = "Read\n";
echo $task;
$task = "Write\n";
echo $task;

// echo constant
$constant = "constant";
echo "My Name is {$constant('NAME')}, I am {$constant('JOB')}";


// use true to non case sensitive enable
// define("JOB", "Software Developer\n", true);
// echo job;