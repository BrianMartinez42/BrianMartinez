<?php
// incluir el archivo que conecta con la BD
include_once("config.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);

	// revisar campos vacios
	if(empty($name) || empty($age) || empty($email)) {

		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

	} else {
		//actualizar la tabla
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");

		//redireccionar a la pagina principal
		header("Location: index.php");
	}
}
?>
<?php
	//obtengo la id desde la url
	$id = $_GET['id'];

	//selecciono los datos asociados con su id particular
	$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

	while($res = mysqli_fetch_array($result))
	{
		$name = $res['name'];
		$age = $res['age'];
		$email = $res['email'];
	}
?>
<html lang="es">
<head>
	<title>Editar Datos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/prog3.css">
</head>

<body>
	<header>
		<h1 class="contenedor__title">Editar</h1>
	</header>
	<br/>
	<a href="index.php" class="button-grey">Inicio</a>

	<div class="ventana">
		<form name="form1" method="post" action="editar.php">
			Nombre
			<div class="form-group">
				<input class="form-control" type="text" name="name" autofocus required value="<?php echo $name;?>">
				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
			</div>
			Edad
			<div class="form-group">
				<input class="form-control" type="text" name="age" required value="<?php echo $age;?>">
			</div>
			Email
			<div class="form-group">
				<input class="form-control" type="text" name="email" required value="<?php echo $email;?>">
			</div>
			<input class="button-accept" type="submit" name="update" value="Actualizar">
		</form>
	</div>
</body>
</html>
