<?php
  // incluir el archivo que conecta con la BD
  include_once("config.php");

  //tomar datos en order decendente (el ultimo entra primero)
  $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/prog3.css">
  	<title>Inicio</title>
  </head>

  <body>
    <header>
      <h1 class="contenedor__title">Ejercicio 16: Base de Datos</h1>
    </header>
    <br/>
    <div class="container">
    <a href="alta.html" class='button-green'>Añadir nuevos datos</a><br/><br/>

  	<table class="table table-hover table-bordered table-dark" >
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Edad</th>
          <th scope="col">Email</th>
          <th scope="col">Actualizar</th>
        </tr>
      </thead>

    	<?php
      	while($res = mysqli_fetch_array($result)) {
      		echo "<tr>";
      		echo "<td>".$res['name']."</td>";
      		echo "<td>".$res['age']."</td>";
      		echo "<td>".$res['email']."</td>";
      		echo "<td><a href=\"editar.php?id=$res[id]\" class='button-blue'>Editar</a>  <a href=\"baja.php?id=$res[id]\" onClick=\"return confirm('¿Seguro que quiere borrar?')\" class='button-red'>Borrar</a></td>";
      	}
    	?>
  	</table>
    </div>
  </body>
</html>
