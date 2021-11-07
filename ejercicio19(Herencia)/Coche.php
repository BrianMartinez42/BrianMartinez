<?php
require_once 'Vehiculo.php';
class Coche extends Vehiculo{
  public $modelo;
  public $color;
  public $velocidad;

  public function __construct($modelo, $color, $velocidad){
    $this->modelo = $modelo;
    $this->color = $color;
    $this->velocidad = $velocidad;
  }

  public function mostrarInfo(){
    $info = "<h3>Información del Coche</h3>";
    $info .= "modelo: " . $this->modelo . "<br>";
    $info .= "color: " . $this->getColor() . "<br>";
    $info .= "velocidad: " . $this->velocidad . "<br>";
    echo $info;
  }

  private function getColor(){
    return $this->color;
  }
}
?>
