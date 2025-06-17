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

