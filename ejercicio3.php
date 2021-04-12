<?php
echo "<head>";
	echo "<title> Ejercicio 3 </title>";
	echo "<link rel=stylesheet type=text/css href=./css/bootstrap.min.css>";
	echo "<link rel=stylesheet type=text/css href=./css/prog2.css>";
echo "</head>";

echo "<body>";
    $n = 1;
    echo "<div class=select>";
      echo "<select name=format id=format>";
      echo "<option disabled selected>Selecciona una opción</option>";
      for ($n=1; $n < 11; $i++) {
         echo "<option>$n</option>";
         $n = $n+1;
    }
    echo "</select>";
    echo "</div>";
  echo "</body>";
 ?>
