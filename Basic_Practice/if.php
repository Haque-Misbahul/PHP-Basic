<?php

$x = 85;

if ($x > 5) {

   echo "x is greater that 5 \n";

}
$score = 85;

if ($score >= 90) {
   echo "A\n";  
} elseif ($score >= 80) {
   echo "B\n";
}elseif ($score >= 70) {
   echo "C\n";
}elseif ($score >= 60) {
   echo "D\n";
}else {
   echo "F\n";
}

$num = 16;

if ($num > 0) {
   if ($num == 0){
      echo "Positive even Number\n";
   }else
      echo "positive odd number\n"; 

} else{
      echo "Non positive number\n";
   }


$username = "admin";
$password = "password123";


if ($username == "admin" && $password == "password123") {
   echo "success";
} else {
   echo "failure";
}