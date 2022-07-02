<?php

class Animal {
   public $name;
   public $color;
   protected $age;
   private $secret;

   public function hi(){
      echo 'hi';
   }

   protected function hi2(){
      echo 'hi2';
   }

   private function secret(){
      echo 'secret';
   }

   public function show(){
      $this->secret();
   }

}

$dog = new Animal();
// $dog->show();