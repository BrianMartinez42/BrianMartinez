<?php
  $dni = $_POST["DNI"];
  $prov = $_POST["provincia"];
  $radio = $_POST["radiob"];

  $conexion = mysqli_connect("localhost", "root", "", "padron");
  $consulta =
  ("SELECT personas.nombre, apellido, colegios.nombre, direccion, numero
  FROM personas JOIN colegios
  WHERE (personas.colegio_id = colegios.colegio_id) AND (personas.dni='$dni') AND (personas.provincia='$prov') AND (personas.sexo='$radio')");
  $resultado = mysqli_query($conexion, $consulta);

  $filas=mysqli_num_rows($resultado);
  if ($filas>0){
    $fila=mysqli_fetch_row($resultado);
    echo ('
        <div class="jumbotron" style="height: auto; width: auto; text-align: center;">
          <div class="container-fluid">
            <blockquote class="blockquote">
              <h3 class="mb-0">'.$fila[1].', '.$fila[0].'</h3>
            </blockquote><br>

            <p class="lead">Establecimiento</p>
            <blockquote class="blockquote">
              <h3 class="mb-0">'.$fila[2].' N° '.$fila[4].'</h3>
            </blockquote><br>

            <p class="lead">Dirección</p>
            <blockquote class="blockquote">
              <h3 class="mb-0">'.$fila[3].'</h3>
            </blockquote>
          </div>
        </div>
    ');
  }
  else
  {
    echo ('error');
  }

  // mysqli_free_result($resultado);
  // mysqli_close($conexion);
?>
