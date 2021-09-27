<?php
  $dni = $_POST["dni"];
  $prov = $_POST["provincia"];
  $radio = $_POST["radiob"];
  $ciudad = $_POST["ciudad"];

  $conexion = mysqli_connect("localhost", "root", "", "padron");
  $conexion->set_charset("utf8");
  $consulta =
  ("SELECT personas.nombre, apellido, colegios.nombre, direccion, numero, provincias.nombre
  FROM ((personas
    INNER JOIN colegios ON personas.colegio_id = colegios.colegio_id)
    INNER JOIN provincias ON personas.provincia_id = provincias.provincia_id)
  WHERE (personas.dni='$dni') AND (provincias.nombre='$prov') AND (personas.sexo='$radio')");

  $consulta_ciudad =
  ("SELECT personas.nombre, apellido, colegios.nombre, direccion, numero, provincias.nombre, ciudades.nombre
  FROM (((personas
    INNER JOIN colegios ON personas.colegio_id = colegios.colegio_id)
    INNER JOIN provincias ON personas.provincia_id = provincias.provincia_id)
    INNER JOIN ciudades ON ciudades.provincia_id = provincias.provincia_id)
  WHERE (personas.dni='$dni') AND (provincias.nombre='$prov') AND (personas.sexo='$radio') AND (ciudades.nombre='$ciudad')");

  if ($prov === 'Entre Ríos') {
    $resultado = mysqli_query($conexion, $consulta_ciudad);

    $filas=mysqli_num_rows($resultado);
    if ($filas>0){
      $fila=mysqli_fetch_row($resultado);
      echo ('
          <div class="jumbotron" style="height: auto; width: auto; text-align: center;">
            <div class="container-fluid">
              <blockquote class="blockquote">
                <h3 class="mb-0">'.$fila[1].', '.$fila[0].'</h3>
              </blockquote><br>

              <p class="lead">Localidad</p>
              <blockquote class="blockquote">
                <h3 class="mb-0">'.$fila[6].', '.$fila[5].'</h3>
              </blockquote><br>
              <hr>

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
  }else {
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

              <p class="lead">Provincia</p>
              <blockquote class="blockquote">
                <h3 class="mb-0">'.$fila[5].'</h3>
              </blockquote><br>
              <hr>

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
  }



  // mysqli_free_result($resultado);
  // mysqli_close($conexion);
?>
