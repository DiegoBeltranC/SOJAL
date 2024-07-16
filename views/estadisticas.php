<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/homeContent.css" />
    <link rel="stylesheet" href="../css/modals.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Estadisticas</title>
  
</head>
<body>
  
<?php include '../layouts/sidebar.php';?>
  <div class="home_content">
        <!--
        <div class="text">Home content</div>
        <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
        <p>Esta es la página principal.</p>
        <a href="../logout.php">Cerrar Sesión</a>
        -->
        <div id="dashboard-notifications">
          <div class="filters-table">
            <h1>Maquetado de prueba</h1>
            <h2>Filtrar por</h2>
            <a href="../services/logout.php"> cerrar sesion</a> 
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
                <option value="hace-un-ano">Hace un año</option>
              </select>

              <label for="">Estado: </label>
              <select name="state-filter" id="state-filter">
                <option value="activo">activo</option>
                <option value="inactivo">inactivo</option>
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
                        <td><button class="details-button" id="btnModal">Detalles</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
<!--
      <div class="form-container-notification" id="form-container-notification">
        <img src="../Icons/icons8-close-50.png" alt="" id="close-icon-form">
        <form action="">
          <input type="text" class="title-form-notification" placeholder="TITULO">
          <div class="image-form-notification">
            <img src="" alt="">
          </div>
          <input type="file" >

          <textarea name="textarea-form-notification" id="textarea-form-notification" placeholder="MENSAJE"></textarea>
          <div class="footer-form-notification">
            <a href="">@diego</a>
            <div class="buttons-form-notification">
              <input type="button" value="Eliminar">
              <input type="button" value="Guardar">
            </div>
          </div>
        </form>
      </div>-->



  </div>
  <div id="contenedor" class="contenedor">
      <div id="contenedor-form">
        <form class="form" >
          <div class="container">
            <img src="../images/cancelar.png" width="6%" alt="Cancelar" id="btnCancelarModal"/>
          </div>
          <h1 class="titulo">Hola, Bienvenido!</h1>
          <hr class="hr" />
          <div>
            <label class="label" for="gmail">Correo:</label><br />
            <input
              class="inputs"
              type="email"
              id="gmail"
              name="gmail"
              placeholder="ejemplo@gmail.com"
              required
            /><br /><br />
            
            <label class="label" for="password">Contraseña:</label><br />
            <input
              class="inputs"
              type="password"
              id="password"
              name="password"
              placeholder="Contraseña"
              required
            /><br /><br />
            <label class="checkbox-container">
              <input type="checkbox" class="checkbox" />
              <span class="checkbox-custom"></span>
              Mostrar Contraseña </label
            ><br /><br />
          </div>
          <input type="submit" value="Iniciar Sesión" />
        </form>
      </div>
    </div>
  <script src="../js/modal.js"></script>
</body>
</html>