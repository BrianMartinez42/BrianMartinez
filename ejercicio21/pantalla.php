<?php
  require_once "Persona.php";
  $persona1 = new Persona('Brian', 'Martinez', 21);
  $persona1->nombreCompleto();
  $persona1->getColorFavorito('amarillo');
  $persona1->getCancionFavorita('My Ordinary Life');
  $persona1->mayorEdad();
?>
