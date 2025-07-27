<?php

class Person {

   //old thing
   // public string $name;
   // public int $age;

   // public function __construct(string $name, int $age) {
   //    $this->name = $name;
   //    $this->age = $age;
   // }

   //php 8 introduces constructor property promotion 
   // which reduce the deficne and initialize the property explicitely
   public function __construct(
      public string $name,
      public int $age
   ) {}

   public function introduce(): string {
      return "Hi, I am {$this -> name} and I am {$this -> age} years old.";
   }
}

$person = new person ("Haque", 30);
echo $person -> introduce();

$person2 = new person ("Misbah", 29);
echo $person2 -> introduce();