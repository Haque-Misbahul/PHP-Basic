<?php


$mb_string = "こんにちは";

var_dump(strlen($mb_string));

$url = "https://en.wikipedia.org/wiki/%22Hello,_World!%22_program";

// var_dump(urlencode($url));

// var_dump(urldecode($url));

$html = '<p>This is "quoted" text & a <ahref="#">link</a>.</p>'; 

var_dump((htmlentities($html)));

$encoded = base64_encode("Hello World!");

var_dump($encoded);
var_dump(base64_encode($encoded));