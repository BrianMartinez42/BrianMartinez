<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/prog.css">
    <title>Ejercicio 7</title>
  </head>
  <body>
    <header>
      <h1 class="contenedor__title">Página</h1>
    </header>
    <?php
      $nom = $_POST["Nombre"];
      $cor = $_POST["Correo"];
      $texta = $_POST["Text-Area"];
    ?>
      <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
          <blockquote class="blockquote">
            <h3 class="mb-0">Nombre</h3>
          </blockquote>
          <p class="lead"><?php echo $nom ?></p>
        </div>
        <div class="container-fluid">
          <blockquote class="blockquote">
            <h3 class="mb-0">Correo</h3>
          </blockquote>
          <p class="lead"><?php echo $cor ?></p>
        </div>
        <div class="container-fluid">
          <blockquote class="blockquote">
            <h3 class="mb-0">Mensaje</h3>
          </blockquote>
          <p class="lead"><?php echo $texta ?></p>
        </div>
      </div>
  </body>
</html>
