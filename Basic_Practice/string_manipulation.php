<?php

$str = "hello, World";
// echo $str[0];

// echo $str[-1];

// echo substr($str, 0, 5);

// echo substr($str, 5);

// echo strtoupper($str);
// echo strtolower($str);

// echo ucfirst($str);

echo ucfirst(strtolower($str));

$greeting = "Hello, " . "World";
$greeting .= " How are you?";

echo $greeting;