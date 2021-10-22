<?php
  $dni = $_POST["dni"];

  $conection = mysqli_connect("localhost", "root", "", "padron");
  $conection->set_charset("utf8");
  $query =
  "SELECT nombre, apellido, TIMESTAMPDIFF(YEAR,fec_nac,CURDATE()), sexo
  FROM personas
  WHERE (dni='$dni');";

  $resultado = mysqli_query($conection, $query);

  $filas=mysqli_num_rows($resultado);
  if ($filas>0){
    $fila=mysqli_fetch_array($resultado);
    if ($fila[3]=='i') {
      echo ('
          <div class="i" style="height: auto; width: auto; text-align: center;">
                <h3 class="mb-0">Nombre: '.$fila[0].'</h3>

                <h3 class="mb-0">Apellido: '.$fila[1].'</h3>

                <h3 class="mb-0">Edad: '.$fila[2].'</h3>
          </div>
      ');
    }elseif ($fila[3]=='f') {
      echo ('
          <div class="f" style="height: auto; width: auto; text-align: center;">
                <h3 class="mb-0">Nombre: '.$fila[0].'</h3>

                <h3 class="mb-0">Apellido: '.$fila[1].'</h3>

                <h3 class="mb-0">Edad: '.$fila[2].'</h3>
          </div>
      ');
    }elseif ($fila[3]=='m') {
      echo ('
          <div class="m" style="height: auto; width: auto; text-align: center;">
                <h3 class="mb-0">Nombre: '.$fila[0].'</h3>

                <h3 class="mb-0">Apellido: '.$fila[1].'</h3>

                <h3 class="mb-0">Edad: '.$fila[2].'</h3>
          </div>
      ');
    }
  }
  else
  {
    echo ('error');
  }
 ?>
