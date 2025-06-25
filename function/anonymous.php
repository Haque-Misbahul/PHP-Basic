<?php

$greet = function ($name) {
   return "Hello, $name";
};

echo $greet("John \n");

$numbers = [1,2,3];
$squared = array_map(function($n) {
   retuRN $n * $n; 
}, $numbers);

// var_dump($squared, $numbers);

$message = "Bye";
$greet2 = function ($name) use ($message) {
   $message = $message . "!";
   return "$message, $name";
};

echo $greet2("John\n");
echo $message . "\n";