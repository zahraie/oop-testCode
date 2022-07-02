<?php

class Animal {
   public $name;
   public $age;
   public $color;

   function run(){
      echo 'run';
   }

   function eat(){
      echo 'eat';
   }
}

// $dog = new Animal();
// var_dump($dog);
// echo '</br></br>';
// $cat = new Animal();
// var_dump($cat);
//****************/



// $cat = new Animal();
// $cat->name = 'cat';
// $cat->color = 'black';
// var_dump($cat->name);
// var_dump($cat->color);
//****************/

$cat = new Animal();
$cat->run();