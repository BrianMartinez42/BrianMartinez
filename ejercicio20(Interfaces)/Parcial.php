<?php
  require_once "Literatura.php";
  class Parcial implements Lectura, Escritura, Gramatica{
    public function getLectura(){
      echo "Lectura";
    }
    public function getEscritura(){
      echo "Escritura";
    }
    public function getGramatica(){
      echo "Gramatica";
    }
  }

  $aux = new Parcial();
  $aux->getLectura();
  $aux->getEscritura();
  $aux->getGramatica();
?>
