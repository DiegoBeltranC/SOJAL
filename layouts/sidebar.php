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
    <link rel="stylesheet" href="../css/sidebar.css"/>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>side bar</title>
    
  </head>
  <body>
    <div class="sidebar">
      <div class="logo_content">
        <div class="logo">
          <i class="bx bx-trash-alt"></i>
          <div class="logo_name">SOJAL</div>
        </div>
        
      </div>
      <ul class="nav_list" style="list-style-type: none">

        <li>
          <a href="estadisticas.php">
            <i class='bx bxs-pie-chart-alt-2'></i>
            <span class="links_name">Estadisticas</span>
          </a>
          <span class="tooltip"> Estadisticas</span>
        </li>
        <li>
          <a href="informes.php">
            <i class='bx bxs-file-doc'></i>
            <span class="links_name">Evaluar Informes </span>
          </a>
          <span class="tooltip"> Evaluar Informes</span>
        </li>
        <li>
          <a href="notificacion.php">
            <i class='bx bxs-envelope' ></i>
            <span class="links_name">Notificaciones</span>
          </a>
          <span class="tooltip"> Notificaciones</span>
        </li>
        <li>
          <a href="trayectos.php">
            <i class='bx bx-map-pin'></i>
            <span class="links_name">Trayectos</span>
          </a>
          <span class="tooltip"> Trayectos</span>
        </li>
        <li>
          <a href="usuarios.php">
            <i class='bx bxs-user-account'></i>
            <span class="links_name">Usuarios</span>
          </a>
          <span class="tooltip"> Usuarios</span>
        </li>
        <li>
          <a href="trabajadores.php">
            <i class='bx bx-male-female'></i>
            <span class="links_name">Trabajadores</span>
          </a>
          <span class="tooltip"> Trabajadores</span>
        </li>
        <li>
          <a href="camiones.php">
            <i class='bx bxs-truck' ></i>
            <span class="links_name">Camiones</span>
          </a>
          <span class="tooltip"> Camiones</span>
        </li>
        <li>
          <a href="administradores.php">
            <i class='bx bxs-user-detail'></i>
            <span class="links_name">Administradores</span>
          </a>
          <span class="tooltip"> Administradores</span>
        </li>
      </ul>
      <div class="profile_content">
        <div class="profile">
          <div class="profile_details">
            <img src="../images/user.jpg" alt="" />
            <div class="name_job">
              <div class="name">Administrador</div>
              <div class="job"> <p><?php echo $_SESSION['nombre'];?></p></div>
            </div>
          </div>
          <a href="../services/logout.php"><i class="bx bx-log-out" id="log_out"></i></a> 
          
        </div>
      </div>
    </div>
  </body>
</html>
