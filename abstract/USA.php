<?php

require_once 'Country.php';

class USA extends Country {

   public function shoaar() : string{
      return 'Hi USA';
   }


}

$usa = new USA('usa');
echo $usa->shoaar();