<?php
class Persona{
  public $nombre;
  public $apellido;
  public $peso;
  public function saludar($nombre){
    echo "Hola, como estas ".$nombre;
  }

  public function apellido($apellido){
    echo ", mi apellido es ".$apellido. "<br>";
  }

  public function pesar($peso,$nombre){
    if ($this->peso > $peso) { //uso la palabra reservada this para obtener el peso de persona1
      echo "El mas pesado es ".$this->nombre;
    }else {
      echo "El mas pesado es ".$nombre;
    }
  }
}

?>
