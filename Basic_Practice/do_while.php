<?php

do {
   $diceRoll = rand(1,6);

   echo "You rolled a $diceRoll \n";

   if(6 == $diceRoll){
      echo "Congrats!! you hit the jackpot! \n";

   }
   echo "wanna roll again? (y/n)\n";

   $rollAgain = trim(fgets(STDIN));
} while('y' == $rollAgain);