<?php

require_once 'Animal.php';
class cat extends Animal {

   public $color;

   public function makesound(){
      echo 'mio';
   }

   public function zahra(){
      $this->hi2();
   }

}

$gorbe = new cat();
$gorbe->makesound();
$gorbe->hi();
$gorbe->zahra();
$gorbe->show();