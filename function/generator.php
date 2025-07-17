<?php

function countDown(int $start): Generator {

   for ($i = $start; $i > 0; $i--){
      echo "Generation number...\n";
      yield random_int(1, 100);
   }
}

foreach(countDown(5) as $numbers) {
   echo "$numbers\n";
}