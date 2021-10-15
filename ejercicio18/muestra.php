<?php
  require 'Coche.php';
  require 'Moto.php';

  echo "<h1>Vehiculo</h1>";
  $auto3 = new Vehiculo();
  $auto3 -> estado();
  $auto3 -> encender();

  echo "<h1>Moto</h1>";
  $moto = new Moto();
  $moto->estado();
  $moto->apagar();

  echo "<h1>Coche</h1>";
  $auto4 = new Coche(2020,'amarillo',220);
  $auto4->mostrarInfo();
  // $auto4->encender();
  $auto4->estado();
?>
