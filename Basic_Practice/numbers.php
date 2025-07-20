<?php


$int =42;
$float = 3.1415;
$stringToInt = (int)"100";
$floatToInt = (int)3.99;

var_dump($int, $float,$stringToInt,$floatToInt);

// var_dump(7 % 2 == 1);

var_dump(
   round(3.7),
   round(3.4),
   floor(3.9),
   ceil(3.1),
   min(1,2,5,4),
   max(1,64,897,3),
   rand(1,10),
   abs(-5)
);

$number = 1234.89;

echo "Formatted: ". number_format($number,2, '.',',');

