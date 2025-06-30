<?php

$person = "John";
$client = &$person;

var_dump($person, $client);

$client = "Stefen";

var_dump($person, $client);

$person = "Robert";


var_dump($person, $client);