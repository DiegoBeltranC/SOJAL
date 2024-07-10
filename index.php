<!DOCTYPE html>
<html lang="es-MX">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOJAL</title>
    <link rel="icon" href="./images/logo.ico" />
    <link rel="stylesheet" href="./css/navbar.css" />

  </head>
  <body>
  <?php
        session_start();
        if (isset($_SESSION['usuario'])) {
            header('Location: inicio.php');
            exit;
        }
    ?>

    <nav>
      <div class="left">
        <img src="./images/logo.ico" alt="sojal.ico" />
        <h2>SOJAL</h2>
        <a href="index.html">Descripción</a>

        <a href="#">¿Quienes somos?</a>

        <a href="#">Descargar App</a>
      </div>
      <div class="right">
        <input type="button" value="Iniciar Sesión">
      </div>
    </nav>

    <div id="overlay"></div>

<div id="loginForm">
    <form action="login.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</div>


  </body>
</html>
