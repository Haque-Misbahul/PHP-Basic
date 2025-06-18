<?php

function greet($name) {

   return "Hello, $name \n";
}

echo greet("Misbah");

//optiona argument can not be place before required argument
//function greetWithTime($time = "day", $name)
function greetWithTime($name, $time = "day") {

   return "Good $time, $name\n";
}

echo greetWithTime("Haque");
echo greetWithTime("Sayem", "evening");