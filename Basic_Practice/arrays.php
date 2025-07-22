<?php

$simpleArray = [1,2,3,4,5];
$assosiateiveArray = [
   'name' => 'John',
   'age' => 30,
   'city' => 'New York'
];

echo $simpleArray[0];
echo $assosiateiveArray['name'];

$simpleArray[] = 6;

$assosiateiveArray['country'] = 'USA';

$matrix = [
   [1,2,3],
   [4,5,6]
];
echo $matrix[1][1];

$fruits = ['apple', 'banana', 'orange'];

var_dump(count($fruits));
sort($fruits);
var_dump($fruits);
rsort($fruits);
var_dump($fruits);