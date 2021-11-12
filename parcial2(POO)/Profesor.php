<?php
  require_once "Persona.php";
  require_once "Funciones.php";
  class Profesor extends Persona{
    public $carrera;
    public $materia;
    public $dni;
    use Funciones;
    public function nombreCompleto(){
      echo "El nombre completo es: ".$this->nombre." ".$this->apellido."<br>";
    }

    public function set_carrera($carrera){
      $this->carrera=$carrera;
    }

    public function set_dni($dni){
      $this->dni=$dni;
    }
  }
?>
