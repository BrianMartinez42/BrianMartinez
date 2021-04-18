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
