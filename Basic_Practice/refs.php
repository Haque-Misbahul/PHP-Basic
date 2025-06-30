<?php

// like this pointing same intdex when one value is changes 
// the other value will be change automatically
// because both are pointing the same memory reference

$person = "John";
$client = &$person;

var_dump($person, $client);

$client = "Stefen";

var_dump($person, $client);

$person = "Robert";


var_dump($person, $client);