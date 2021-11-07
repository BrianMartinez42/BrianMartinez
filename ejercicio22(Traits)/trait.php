<?php
  trait Saludar{
    function decirHola(){
      echo "Hola";
    }

    abstract public function getName();
  }

  trait Despedir{
    function decirChau(){
      echo "Chau";
    }
  }

?>
