<?php
 trait Funciones{
  //public $edad;
   //ublic $edad_p;
   //public $edad_a;
   //public $materia_p;
   //public $materia_a;

   public function diferenciaEdad($edad_a){
     if ($this->edad>$edad_a){
       $aux = $this->edad-$edad_a;
       echo "La diferencia de edad es de ".$aux." años.<br>";
     }else {
       $aux = $edad_a-$this->edad;
       echo "La diferencia de edad es de ".$aux." años.<br>";
     }
   }

   public function mismaMateria($materia_a){
     if ($this->materia!=$materia_a){
       echo "No son la misma materia.<br>";
     }else {
       echo "Son la misma materia.<br>";
     }
   }

   public function fechaDeNacimiento($edad){
     $anio = date("Y");
     $aux=$anio-$edad;
     echo "El año de nacimiento es: ".$aux;
   }

   public function set_materia($materia){
     $this->materia=$materia;
   }
 }
?>
