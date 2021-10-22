<?php
  class Hora{
    public static function getHora(){
      $hora = date('h');
      $minutos = date('m');
      $segundos = date('s');
      return $hora."/".$minutos."/".$segundos;
      }
  }
 ?>
