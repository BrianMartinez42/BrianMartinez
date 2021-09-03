<?php

  $mail=$_POST['mail'];
  $pass=$_POST['pass'];
  $conexion=mysqli_connect("localhost", "root", "", "test");
  $consulta="SELECT pass FROM users WHERE email='$mail'";
  $resultado=mysqli_query($conexion, $consulta);

  while($fila=mysqli_fetch_row($resultado)){
    // echo $fila[0] . "<br>";
    // echo $pass;
    if (password_verify($pass, $fila[0])) {
    header("location:index.php");
    } else {
      echo"Error en la autentificacion";
    $errorlogin = "Nombre de ussuario y/o password incorrecto";
    include_once 'login.html';
    }
  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);


  // $filas=mysqli_num_rows($resultado);
  // if ($filas>0){
  //     header("location:index.php");
  // }
  // else{
  //     echo"Error en la autentificacion";
  //     $errorlogin = "Nombre de ussuario y/o password incorrecto";
  //     include_once 'login.html';
  // }
  // mysqli_free_result($resultado);
  // mysqli_close($conexion);

?>
