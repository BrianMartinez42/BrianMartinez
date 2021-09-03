<html lang="es">
  <head>
    <title>Agregar datos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/prog3.css">
  </head>

  <body>
    <?php
      //incluir el archivo que conecta con la base de datos
      include_once("config.php");

      if(isset($_POST['Submit'])) {
      	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
      	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
      	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $pass = mysqli_real_escape_string($mysqli, $_POST['pass']);

      	// verificar campos vacios
      	if(empty($name) || empty($age) || empty($email)) {

      		if(empty($name)) {
      			echo "<font color='red'>El campo de NOMBRE no fue llenado.</font><br/>";
      		}

      		if(empty($age)) {
      			echo "<font color='red'>El campo de EDAD no fue llenado.</font><br/>";
      		}

      		if(empty($email)) {
      			echo "<font color='red'>El campo de EMAIL no fue llenado.</font><br/>";
      		}

          if(empty($pass)) {
      			echo "<font color='red'>El campo de PASSWORD no fue llenado.</font><br/>";
      		}

      		echo "<br/><a class='button-grey' href='javascript:self.history.back();'>Volver</a>";
      	} else {
      		// si todos los campos fueron llenados...

      		//insertar datos en la base de datos
          $pass=password_hash($_POST['pass'],PASSWORD_DEFAULT);
      		$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email,pass) VALUES('$name','$age','$email','$pass')");

      		//mostrar mensaje de exito
      		echo "<font color='green'>Datos agregados correctamente.";
      		echo "<br/><a class='button-grey' href='login.html'>Iniciar Sesión</a>";
      	}
      }
    ?>
  </body>
</html>
