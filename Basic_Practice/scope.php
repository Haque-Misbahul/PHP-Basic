<?php


$superhero = "Superman";

function revealIdentity() {
   
   global $superhero;
   $message = "real name is Clark Kent \n";
   //$superhero = "Spiderman";
   echo "$superhero $message";
}

//can not access local variable from outside
//echo $message;

echo "$superhero \n";
revealIdentity();

function countVisitor() {
   static $visitorCount = 0;
   $visitorCount++;
   echo "Visitor #$visitorCount has arrived\n";
}

countVisitor();
countVisitor();
countVisitor();