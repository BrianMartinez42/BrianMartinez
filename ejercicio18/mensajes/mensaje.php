 <?php
   require '../personas/Persona.php';

   $persona1 = new Persona();
   $persona1 -> nombre = 'Javier';
   $persona1 -> apellido = 'Parra';
   $persona1 -> peso = '85';
   // $persona1 -> saludar($persona1->nombre);
   // $persona1 -> apellido($persona1->apellido);

   $persona2 = new Persona();
   $persona2 -> nombre = 'Brian';
   $persona2 -> apellido = 'Martinez';
   $persona2 -> peso = '70';

   $persona1 -> pesar($persona2->peso,$persona2->nombre);
  ?>
