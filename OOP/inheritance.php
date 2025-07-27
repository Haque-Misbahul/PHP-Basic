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


class Employee extends Person {
    public function __construct(
      public string $name,
      public int $age,
      public string $position
   ) {}

    public function introduce(): string {
      return parent :: introduce() . " I work as a {$this -> position}.";
   }

}

// $employee = new Employee("Misbahul Haque", 30, "Manager");
// echo $employee -> introduce() . "\n";

$people = [ 
   new Employee("Misbahul Haque", 30, "Manager"),
   new person("Sayem", 29)

];

function introduce(Person $person) {
   echo $person -> introduce() . "\n";

}

foreach ($people as $person) {
   introduce($person);
}