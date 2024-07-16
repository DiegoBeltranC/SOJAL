<!DOCTYPE html>
<html lang="es-MX">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Descargar App</title>
    <link rel="icon" href="./images/logo.ico" />
    <link rel="stylesheet" href="./css/navbar.css" />

  </head>
  <body>

  <?php
        session_start();
        if (isset($_SESSION['usuario'])) {
            header('Location: ./views/estadisticas.php');
            exit;
        }
  ?>
<?php
      include './components/viewLogin.php';
  ?>
<?php
      include './layouts/Startnavbar.php';
  ?>


 <!--   <div id="overlay"></div> -->




  </body>
</html>
