<?php
  class Vehiculo{
    public $motor = false;
    public $marca;

    public function estado()
    {
      if ($this->motor == true) {
        echo 'El motor está encendido. <br>';
      }else {
        echo "El motor está apagado. <br>";
      }
    }

    public function encender()
    {
      if ($this->motor ==true) {
        echo "Cuidado, ya está encendido <br>";
      }else {
        echo "Ahora está encendido <br>";
        $this->motor=true;
      }
    }

    public function apagar()
    {
      if ($this->motor ==false) {
        echo "Cuidado, ya está apagado <br>";
      }else {
        echo "Ahora está apagado <br>";
        $this->motor=false;
      }
    }
  }

?>
