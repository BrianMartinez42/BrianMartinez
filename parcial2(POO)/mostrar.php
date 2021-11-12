<?php
  require_once "Profesor.php";
  require_once "Alumno.php";
  $nombre_p = $_POST["nombre_p"];
  $apellido_p = $_POST["apellido_p"];
  $dni_p = $_POST["dni_p"];
  $carrera_p = $_POST["carrera_p"];
  $materia_p = $_POST["materia_p"];
  $edad_p = $_POST["edad_p"];

  $nombre_a = $_POST["nombre_a"];
  $apellido_a = $_POST["apellido_a"];
  $materia_a = $_POST["materia_a"];
  $edad_a = $_POST["edad_a"];

  echo "<h3>Profesor</h3>";
  $profe = new Profesor($nombre_p,$apellido_p,$edad_p);
  $profe->set_carrera($carrera_p);
  $profe->set_materia($materia_p);
  $profe->set_dni($dni_p);
  $profe->nombreCompleto();
  $profe->fechaDeNacimiento($edad_p);
  echo "<hr>";
  echo "<h3>Alumno</h3>";
  $alum = new Alumno($nombre_a,$apellido_a,$edad_a);
  $alum->set_materia($materia_a);
  $alum->nombreCompleto();
  $alum->fechaDeNacimiento($edad_a);
  echo "<hr>";
  echo "<h3>Datos</h3>";
  $profe->diferenciaEdad($alum->edad);
  $profe->mismaMateria($materia_a);
?>
