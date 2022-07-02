<?php

require_once ('Animal.php');

class Cat implements Animal {

   public function eat(){
      echo 'eat very fast';
   }
}

$cat = new Cat();
$cat->eat();