<?php

class Animal {
   public $name;
   public $age;
   public $color;

   // function setName($animalName){
   //    $this->name = $animalName;
   // }

   //**********یک setter کلی */
   function setAttr($animalName ,$animalAge ,$animalColor){
      $this->name = $animalName;
      $this->age = $animalAge;
      $this->color = $animalColor;
   }

   function getInfo(){
      echo $this->name;
      echo '</br>';
      echo $this->age;
      echo '</br>';
      echo $this->color;
      echo '</br>';
      return true ;
   }
}

$cat = new Animal();
$cat->setAttr('cat','23','black');
var_dump($cat->getInfo());