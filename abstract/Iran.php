<?php

require_once 'Country.php';

class Iran extends Country {

   public function shoaar() : string{
      return 'Hi Iran';
   }


}

$iran = new Iran('iran');
echo $iran->shoaar();