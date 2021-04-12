<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/prog2.css">
    <title> Ejercicio 4 </title>
    <meta charset="utf-8">
  </head>

  <body>
    <div id="contenedor">
      <div id="ventana">
        <form method="POST" action="">
          <div class="form-group">
            Ingrese el primer dato:
            <input class="form-control" type="text" autofocus name="numero1">
            <br>Ingrese el segundo dato:
            <input class="form-control" type="text" autofocus name="numero2">
          </div>
          <br>
          <div class="form-group">
            <button class="boton1" type="submit"> Mayor </button>
          </div>
          <?php
            $num1 = $_POST["numero1"];
            $num2 = $_POST["numero2"];
            function NumeroMayor($n1,$n2) {
             $mayor=0;
               if ($n1>$n2)
               $mayor = $n1;
               else {
                 $mayor = $n2;
               }
             echo "<br>El mayor es: $mayor";
            }
            NumeroMayor($num1,$num2);
          ?>
        </form>
      </div>
    </div>
  </body>
</html>
