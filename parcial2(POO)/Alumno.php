<?php
  require_once "Persona.php";
  require_once "Funciones.php";
  class Alumno extends Persona{
    use Funciones;
    public function nombreCompleto(){
      echo "El nombre completo es: ".$this->nombre." ".$this->apellido."<br>";
    }
  }
?>
