<?php

class Animal {
   public $name;
   public $age;
   public $color;

   function __construct($animalName ,$animalAge ,$animalColor){
      $this->name = $animalName;
      $this->age = $animalAge;
      $this->color = $animalColor;
   }

   function __destruct(){
      echo "animal name is: {$this->name} and animal age is: {$this->age} and animal color is: {$this->color}";
   }
}

$cat = new Animal('cat','23','black');
// var_dump($cat);