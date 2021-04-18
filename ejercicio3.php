<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel=stylesheet type=text/css href=./css/bootstrap.min.css>
		<link rel="stylesheet" type="text/css" href="./css/prog2.css">
		<title> Ejercicio 3 </title>
	</head>
	<body>
		<div class=select>
			<select name=format id=format>
			<option disabled selected>Selecciona una opción</option>
		<?php
		$n = 1;
		for ($n=1; $n < 11; $i++) {
			 echo "<option>$n</option>";
			 $n = $n+1;
	}
	 ?>
	 </select>
	 </div>
	</body>
</html>
