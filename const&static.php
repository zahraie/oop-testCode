<?php

class Animal {
   public $name;
   public $age;
   public static $color = 'black';

   const FIRST_NAME = 'zahra';

   public function showName(){
      echo self::FIRST_NAME;
   }

   public static function showHi(){
      echo 'hi';
   }

   public function __construct(){
      self::showHi();
   }

}

echo Animal::FIRST_NAME;
echo '</br>';
// $cat = new Animal();
// $cat->showName();

echo Animal::$color;
echo '</br>';
Animal::showHi();