<?php

$status = 600;

$message = match ($status) {

   200,300 => "Success",
   400,404,500 => "Error",
   default => "unknown status"
};

// match is availbel >= 8.0

echo $message . "\n";