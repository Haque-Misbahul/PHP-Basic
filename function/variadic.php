<?php
declare(strict_types = 1);

function sum(int ...$numbers) {
   $sum = 0;
   var_dump($numbers);
   foreach ($numbers as $number) {
      $sum += $number;
   }
   return $sum;
}

var_dump(sum());
var_dump(sum(5));
var_dump(sum(1,2,3,4));

$numbers = [1,2,3];
var_dump(sum(...$numbers));

function introduceTeam(string $teamname, string ...$members): void {
   echo "Team: $teamname\n";
   echo "Members: " . implode(", ", $members) . "\n";
}

introduceTeam("Team DIU", "sayem","sujon","hridoy");

$members = ["A", "B", "C"];
introduceTeam("Team DIU2", "sayem","sujon","hridoy", ...$members);