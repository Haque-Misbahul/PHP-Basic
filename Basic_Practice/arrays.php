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
// var_dump($fruits);
rsort($fruits);
// var_dump($fruits);

// var_dump($assosiateiveArray);

asort($assosiateiveArray);
// var_dump($assosiateiveArray);
ksort($assosiateiveArray);
// var_dump($assosiateiveArray);

$numbers = range(1,5);
// var_dump($numbers);

// in map variable at the end
$squared = array_map(fn($n) => $n ** 2, $numbers);

var_dump($squared);

// in filter variable is at the beginning
$evenNumbers = array_filter($numbers, fn($n) => $n % 2 ==0);

var_dump($evenNumbers);