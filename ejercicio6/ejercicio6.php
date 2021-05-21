<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/prog.css">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <header>
      <h1 class="contenedor__title">Tabla</h1>
    </header>
    <?php
      $nom = $_POST["Nombre"];
      $ape = $_POST["Apellido"];
      $dni = $_POST["DNI"];
      $nac = $_POST["Fecha-Nac"];
      $mail = $_POST["Correo"];
      $prov = $_POST["Provincia"];
      $radio = ($_POST["radiob"]);

      if ($radio == 'option1')
        $rad = "Si";
      else {
        $rad = "No";
      }
    ?>
    <br>
    <table class="table table-bordered table-hover">
      <th bgcolor="darkgrey">Nombre</th>
      <th bgcolor="darkgrey">Apellido</th>
      <th bgcolor="darkgrey">DNI</th>
      <th bgcolor="darkgrey">Nacimiento</th>
      <th bgcolor="darkgrey">Correo</th>
      <th bgcolor="darkgrey">Provincia</th>
      <th bgcolor="darkgrey">Donante</th>
        <tr>
          <td bgcolor="white"><?php echo $nom ?></td>
          <td bgcolor="white"><?php echo $ape ?></td>
          <td bgcolor="white"><?php echo $dni ?></td>
          <td bgcolor="white"><?php echo $nac ?></td>
          <td bgcolor="white"><?php echo $mail ?></td>
          <td bgcolor="white"><?php echo $prov ?></td>
          <td bgcolor="white"><?php echo $rad ?></td>
        </tr>
    </table>
  </body>
</html>
