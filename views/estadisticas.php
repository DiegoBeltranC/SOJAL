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
                      <td><button class="details-button">Detalles</button></td>
                  </tr>
              </tbody>
          </table>
      </div>

      <div class="form-container-notification">
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
      </div>
  </div>
</body>
</html>