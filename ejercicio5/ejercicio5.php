<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/prog.css">
    <title>Ejercicio 5</title>
  </head>
  <body>
    <header>
      <h1 class="contenedor__title">Tabla</h1>
    </header>
    <?php
      $nom = $_GET["Nombre"];
      $ape = $_GET["Apellido"];
      $dni = $_GET["DNI"];
    ?>
    <br>
    <table class="table table-bordered table-hover">
      <th bgcolor="darkgrey">Nombre</th>
      <th bgcolor="darkgrey">Apellido</th>
      <th bgcolor="darkgrey">DNI</th>
        <tr>
          <td bgcolor="white"><?php echo $nom ?></td>
          <td bgcolor="white"><?php echo $ape ?></td>
          <td bgcolor="white"><?php echo $dni ?></td>
        </tr>
    </table>
  </body>
</html>
