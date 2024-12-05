
  <?php
// Determina la página actual
$current_page = basename($_SERVER['PHP_SELF']);
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


  <ol>
    <a href="ViewEstadisticas.php">
      <li class="option <?php echo $current_page == 'ViewEstadisticas.php' ? 'active' : ''; ?>">
        <img class="mi-svg" src="../images/Icons/grafico-circular.svg" alt="icon"/>
        <p>Estadísticas</p>
      </li>
    </a>
    <a href="ViewEvaluar.php">
      <li class="option <?php echo $current_page == 'ViewEvaluar.php' ? 'active' : ''; ?>">
        <img class="mi-svg" src="../images/Icons/lista.svg" alt="Mi SVG feliz"/>
        <p>Evaluar informes</p>
      </li>
    </a>
    <a href="ViewNotificacion.php">
      <li class="option <?php echo $current_page == 'ViewNotificacion.php' ? 'active' : ''; ?>">
        <img class="mi-svg" src="../images/Icons/mensajes.svg" alt="Mi SVG feliz"/>
        <p>Notificaciones</p>
      </li>
    </a>
    <a href="ViewTrayectos.php">
      <li class="option <?php echo $current_page == 'ViewTrayectos.php' ? 'active' : ''; ?>">
        <img class="mi-svg" src="../images/Icons/RutaIcon.svg" alt="Mi SVG feliz"/>
        <p>Trayectos</p>
      </li>
    </a>
    <a href="ViewUsuarios.php">
      <li class="option <?php echo $current_page == 'ViewUsuarios.php' ? 'active' : ''; ?>">
        <img class="mi-svg" src="../images/Icons/usuarios.svg" alt="Mi SVG feliz"/>
        <p>Usuarios</p>
      </li>
    </a>
    <a href="ViewAsignacion.php">
      <li class="option <?php echo $current_page == 'ViewAsignacion.php' ? 'active' : ''; ?>">
        <img class="mi-svg" src="../images/Icons/conjunto-de-habilidades.svg" alt="Mi SVG feliz"/>
        <p>Asignación</p>
      </li>
    </a>
    <a href="ViewTrabajadores.php">
      <li class="option <?php echo $current_page == 'ViewTrabajadores.php' ? 'active' : ''; ?>">
        <img class="mi-svg" src="../images/Icons/trabajador.svg" alt="Mi SVG feliz"/>
        <p>Trabajadores</p>
      </li>
    </a>
    <a href="ViewCamiones.php">
      <li class="option <?php echo $current_page == 'ViewCamiones.php' ? 'active' : ''; ?>">
        <img class="mi-svg" src="../images/Icons/camion-de-la-basura.svg" alt="Mi SVG feliz"/>
        <p>Camiones</p>
      </li>
    </a>
    <a href="ViewAdmins.php">
      <li class="option <?php echo $current_page == 'ViewAdmins.php' ? 'active' : ''; ?>">
        <img class="mi-svg" src="../images/Icons/ajustes.svg" alt="Mi SVG feliz"/>
        <p>Administradores</p>
      </li>
    </a>
  </ol>

</div>

<style>
  .option.active {
    background-color: #26776d; 
    color: white; 
  }
</style>

  </body>
</html>
