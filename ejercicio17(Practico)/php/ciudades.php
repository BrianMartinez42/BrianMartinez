<?php

  $conexion = mysqli_connect('localhost', 'root','', 'padron');
  $conexion->set_charset("utf8");
  $consulta="SELECT nombre FROM ciudades ORDER BY nombre";
  $resultado = mysqli_query($conexion, $consulta);

  while (($fila = mysqli_fetch_array($resultado)) != NULL) {
      echo '<option>'.$fila["nombre"].'</option>';
  }
  // Liberar resultados
  mysqli_free_result($resultado);

  // Cerrar la conexión
  mysqli_close($conexion);

?>
