<?php
  //Cargar sesion del usuario logueado
  session_start();
	if(!isset($_SESSION['autenticado'])){//Si no hay un usuario logueado, regresar al logueo**
    header("Location: ../index.php");

  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/ViewSidebar.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      
    <h3>SOJAL</h3>
    <img class="menu-icon" src="../images/icons/MenuIcon.svg" alt="icon"/>
      <ol>
        <a href="#"><li class="option"><img class="mi-svg" src="../images/icons/grafico-circular.svg" alt="icon"/><p>Estadísticas</p></li></a>
        <a href="#"><li class="option"><img class="mi-svg" src="../images/icons/lista.svg" alt="Mi SVG feliz"/><p>Evaluar informes</p></li></a>
        <a href="#"><li class="option"><img class="mi-svg" src="../images/icons/mensajes.svg" alt="Mi SVG feliz"/><p>Notificaciones</p></li></a>
        <a href="#"><li class="option"><img class="mi-svg" src="../images/icons/RutaIcon.svg" alt="Mi SVG feliz"/><p>Trayectos</p></li></a>
        <a href="#"><li class="option"><img class="mi-svg" src="../images/icons/usuarios.svg" alt="Mi SVG feliz"/><p>Usuarios</p></li></a>
        <a href="#"><li class="option"><img class="mi-svg" src="../images/icons/trabajador.svg" alt="Mi SVG feliz"/><p>Trabajadores</p></li></a>
        <a href="#"><li class="option"><img class="mi-svg" src="../images/icons/camion-de-la-basura.svg" alt="Mi SVG feliz"/><p>Camiones</p></li></a>
        <a href="#"><li class="option"><img class="mi-svg" src="../images/icons/ajustes.svg" alt="Mi SVG feliz"/><p>Administradores</p></li></a>
      </ol>
    </div>
  </body>
</html>
