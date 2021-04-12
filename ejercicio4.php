<?php
  $num1 = 90;
  $num2 = 4;
  function NumeroMayor($n1,$n2) {
   $mayor=0;
     if ($n1>$n2)
     $mayor = $n1;
     else {
       $mayor = $n2;
     }
   echo "El mayor es: $mayor";
  }
  NumeroMayor($num1,$num2)
?>
