<?php

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;


while($attempts < $maxAttempts){
   echo "Guess the Password: ";
   $guess = trim(fgets(STDIN));
   $attempts++;


   if($guess == $secret){
      echo "Correct!! you have unlocked the treseaure \n";
      break;
   } elseif ($attempts == $maxAttempts){
      echo "Out of attempts! the treseaure remians locked\n";
      break;
   } else {
      echo "Wrong!! try again. Attempts leff: ".
      ($maxAttempts - $attempts). "\n";
   }
}