<?php
  require 'Interface.php';
  class Transporte implements Automobil{
    public function getColor(){
      echo "azul";
    }

    public function getRuedas(){
      echo "rodado 13";
    }
  }

  $auto = new Transporte();
  $auto -> getColor();
 ?>
