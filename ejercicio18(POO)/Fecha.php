<?php
  class Fecha{
    public static function getFecha(){
      $anio = date("Y");
      $mes = date("m");
      $dia = date("d");
      echo $dia .'/'. $mes .'/'. $anio;
    }
  }
 ?>
