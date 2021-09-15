<?php
  $dni = $_GET['dni'];
  // $dni = $_POST["DNI"];
  // $prov = $_POST["Provincia"];
  // $radio = $_POST["radiob"];

  $conexion = mysqli_connect("localhost", "root", "", "padron");
  $consulta =
  "SELECT pnombre, apellido, cnombre, direccion, numero
  FROM users JOIN colegio
  WHERE (users.colegio_id = colegio.id) AND (users.dni='$dni')";
  $resultado = mysqli_query($conexion, $consulta);

  // $fila = $resultado->fetch_assoc();
  $filas=mysqli_num_rows($resultado);
  if ($filas>0){
    $fila=mysqli_fetch_row($resultado);
    echo json_encode($fila);
  }
  else
  {
    $fila = 0;
    echo $fila;
  }

  // mysqli_free_result($resultado);
  // mysqli_close($conexion);
?>
