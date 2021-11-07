<?php
  require 'Interface.php';
  class Persona implements Gente{
    public $nombre;
    public $apellido;
    public $edad;

    public function getColorFavorito($color){
      echo "Su color favorito es ".$color.".<br>";
    }
    public function getCancionFavorita($cancion){
      echo "Su cancion favorita es ".$cancion.".<br>";
    }
    function __construct($nombre,$apellido,$edad){
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->edad = $edad;
    }
    public function mayorEdad(){
      if ($this->edad<18){
        echo "Es menor de edad.<br>";
      }else {
        echo "Es mayor de edad.<br>";
      }
    }
    public function nombreCompleto(){
      echo "El nombre completo es ".$this->apellido.", ".$this->nombre.".<br>";
    }
  }
 ?>
