<?php

$isStudent = 1;

var_dump($isStudent, true, $isStudent == true);

// $scores = [85, "95.5"];

$scores = [85, (int)"95.5"];

$total = $scores[0] +$scores[1];

var_dump($scores, $total);

echo "Total score is : ". $total . "\n";
// within single quote varialbe and special does not work