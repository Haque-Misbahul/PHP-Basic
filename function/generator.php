<?php

function countDown(int $start): array {

   $result = [];
   for ($i = $start; $i > 0; $i--){
      echo "Generation number...\n";
      $result[] = random_int(1, 100);
   }
   return $result;
}

foreach(countDown(5) as $numbers) {
   echo "$numbers\n";
}