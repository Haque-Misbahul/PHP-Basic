<?php

$largeArray = range(1, 1_000_000);
$startTime = microtime(true);
$starMemory = memory_get_usage();

//$out = [];

foreach($largeArray as &$value) {
   //$out [] = $value *2;
   $value *= $value *2;
}

$endTime = microtime(true);
$endMemory = memory_get_usage();

echo "Time: " . ($endTime - $startTime) . "Seconds\n";
echo "Memory: " . round(($endMemory - $starMemory)/1024/1024) . "MBs\n";
