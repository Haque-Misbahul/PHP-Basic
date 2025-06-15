<?php

echo "Rocket Launch countdown: \n";

for ($i = 10; $i > 0; $i--){
   echo $i . "...";

   if(1 == $i){
      echo "Liftoff! \n";
   }

   sleep(1);
}