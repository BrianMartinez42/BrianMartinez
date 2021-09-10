<?php
  session_start();
  $mail=$_POST['mail'];
  $pass=$_POST['pass'];

  $conexion = mysqli_connect("localhost", "root", "", "test");
  $consulta = "SELECT pass, name FROM users WHERE email='$mail'";
  $resultado = mysqli_query($conexion, $consulta);

  // $filas=mysqli_num_rows($resultado);
  // if ($filas>0){ //verifico si encuentra el mail en la BD
  //   while($fila=mysqli_fetch_row($resultado)){
  //     if (password_verify($pass, $fila[0])) { //verifico si la pass coincide con el hash de la BD
  //     header("location:index.php");
  //     } else {
  //       echo"Contraseña incorrecta";
  //       include_once 'login.html';
  //     }
  //   }
  // }
  // else{
  //     echo "El email no existe";
  //     include_once 'login.html';
  // }

  $filas=mysqli_num_rows($resultado);
  if ($filas>0){
    while ($fila = $resultado->fetch_assoc()) {
      if (password_verify($pass, $fila['pass'])) {
        $_SESSION['nombre'] = $fila['name'];
        header('location:index.php');
      } else {
        echo"Contraseña incorrecta";
        include_once 'login.html';
      }
    }
  }
  else
  {
      echo "El email no existe";
      include_once 'login.html';
  }

  mysqli_free_result($resultado);
  mysqli_close($conexion);

?>
