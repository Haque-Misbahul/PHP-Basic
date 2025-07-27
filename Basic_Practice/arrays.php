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

// var_dump($squared);

// in filter variable is at the beginning
$evenNumbers = array_filter($numbers, fn($n) => $n % 2 ==0);

// var_dump($evenNumbers);

$sum = array_reduce($numbers, 
fn($carry, $n) => $carry + $n, 
0);

// var_dump($sum);


$moreNumbers = [0, ...$numbers, 6];
// var_dump($moreNumbers);

[$first, ,$second] = $fruits;
// var_dump($first, $second);

$set1 = [1,2,3,4,5];
$set2 = [3,4,5,6,7];

// var_dump(
//    array_intersect($set1, $set2),
//    array_intersect($set2, $set1),
//    array_diff($set1, $set2),
//    array_diff($set2, $set1) 
// );

$keys = array_map(
                  fn($key) => ucfirst($key), 
                  array_keys($assosiateiveArray));
$values = array_values($assosiateiveArray);

// var_dump($keys, $values);

var_dump(
   array_key_exists('name', $assosiateiveArray),
   in_array('John', $assosiateiveArray)
);

$fruitString = implode(', ', $fruits);
$backToArray = explode(', ', $fruitString);

// var_dump($fruitString, $backToArray);

// var_dump(
//    array_merge($set1,$set2),
//    array_merge($assosiateiveArray, ['country' => 'DE']),

//    // union will not work properly because it work with the keys when it will see,
//    // both the array has same key then it will just show the elements from the first array only
//    $set1 + $set2,
//    // if anything is not there then it will add 
//    $assosiateiveArray + ['Desh' => 'DE'],


//    // using spread operator, it will work
//    [...$set1, ...$set2],
//    [...$assosiateiveArray, ...['country' => 'DE']]



// );


var_dump(
   array_unique(array_merge($set1, $set2)),
   array_slice($set1, 1, 3)
);

var_dump(
   array_search('banana', $fruits)
);