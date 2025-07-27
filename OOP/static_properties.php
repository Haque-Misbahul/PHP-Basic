<?php

class MathUtils {
   public static float $pi = 3.14159;


   public static function square(float $num): float {
      return $num * $num;
   }
}

var_dump(
   MathUtils :: $pi,
   MathUtils :: square(4)
);

// expensive resouces and applying singleton design pattern

class Connetion {

   private static $instance = null;
   private function __construct(){}

   public static function singleton() {

      if (null === static :: $instance) {
         static :: $instance = new static();
      }
      return Connetion :: $instance;
   }
}

$connection = Connetion :: singleton();