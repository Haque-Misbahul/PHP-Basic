<?php

$size  = "M";

switch ($size) {

   case "S":
   Case "M":
   echo "small or medium size\n";
   break;

   case "L":
   Case "XL":
   echo "large or extra large size\n";
   break;

   default:
   echo "unknown size\n";
}

// Displayed the need of using break
$badAttemps = 3;

switch ($badAttemps) {

   case 3:
      echo "you are blocked \n";

      default:
         echo "bad attempt detected\n";
}