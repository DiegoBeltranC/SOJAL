<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/vistaConCuadro.css"/>
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
        <i class='bx bxs-cog' id="btn"></i>
      </div>
      <ul class="nav_list" style="list-style-type: none">

        <li>
          <a href="#">
            <i class='bx bxs-pie-chart-alt-2'></i>
            <span class="links_name">Estadisticas</span>
          </a>
          <span class="tooltip"> Estadisticas</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-file-doc'></i>
            <span class="links_name">Evaluar Informes </span>
          </a>
          <span class="tooltip"> Evaluar Informes</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-envelope' ></i>
            <span class="links_name">Notificaciones</span>
          </a>
          <span class="tooltip"> Notificaciones</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-map-pin'></i>
            <span class="links_name">Trayectos</span>
          </a>
          <span class="tooltip"> Trayectos</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-user-account'></i>
            <span class="links_name">Usuarios</span>
          </a>
          <span class="tooltip"> Usuarios</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-male-female'></i>
            <span class="links_name">Trabajadores</span>
          </a>
          <span class="tooltip"> Trabajadores</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-truck' ></i>
            <span class="links_name">Camiones</span>
          </a>
          <span class="tooltip"> Camiones</span>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-user-detail'></i>
            <span class="links_name">Administradores</span>
          </a>
          <span class="tooltip"> Administradores</span>
        </li>
      </ul>
      <div class="profile_content">
        <div class="profile">
          <div class="profile_details">
            <img src="/images/user.jpg" alt="" />
            <div class="name_job">
              <div class="name">Administrador</div>
              <div class="job">Web Designer</div>
            </div>
          </div>
          <i class="bx bx-log-out" id="log_out"></i>
        </div>
      </div>
    </div>
    <div class="home_content">
      <!--
      <div class="text">Home content</div>
      <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
      <p>Esta es la página principal.</p>
      <a href="../logout.php">Cerrar Sesión</a>
      -->
      <div class="filters-table">
        <h1>Notificaciones</h1>
        <h2>Filtrar por</h2>

        <div class="notification-div-filter">
          <label for="fecha-inicio-filter">Fecha Inicio: </label>
          <input type="date" min="2020-01-01" id="fecha-inicio-filter" class="input-notification-filter">

          <label for="fecha-expiracion-filter">Fecha Expiración: </label>
          <input type="date" id="fecha-inicio-filter">
          <br>
          <br>

          <label for="creation-filter">Creacion</label>
          <select name="creation-filter" id="creation-filter">
            <option value="reciente">reciente</option>
            <option value="hace-un-mes">Hace un mes</option>
          </select>
          <select name="state-filter" id="state-filter">
            <option value="inactivo">reciente</option>
            <option value="activo">Hace un mes</option>
          </select>
        </div>

      </div>

      <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Administrador</th>
                    <th>Me gusta</th>
                    <th>Estado</th>
                    <th>Fecha de Publicación</th>
                    <th>Fecha de Expiración</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row -->
                <tr>
                    <td>1</td>
                    <td>Título de la Noticia</td>
                    <td>Admin1</td>
                    <td>10</td>
                    <td>Activo</td>
                    <td>2024-07-10</td>
                    <td>2024-08-10</td>
                    <td><button class="details-button">Detalles</button></td>
                </tr>
            </tbody>
        </table>
    </div>

  </body>
</html>
