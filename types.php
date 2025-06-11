<?php

$isStudent = 1;

var_dump($isStudent, true, $isStudent == true);

// $scores = [85, "95.5"];

$scores = [85, (int)"95.5"];

var_dump($scores, $scores[0] +$scores[1]);