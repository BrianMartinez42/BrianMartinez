<?php
  require_once "conflicto.php";
  class Reproductor{
    use Juego, Musica,Music{
      Juego::play insteadof Musica,Music;
    }
  }
  $reproductor = new Reproductor();
  $reproductor->play();
?>
