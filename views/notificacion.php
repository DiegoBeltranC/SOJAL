<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homeContent.css" />
    <link rel="stylesheet" href="../css/modals.css" />
    
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
              <option value="hace-un-ano">Hace un año</option>
            </select>

            <label for="">Estado: </label>
            <select name="state-filter" id="state-filter">
              <option value="activo">activo</option>
              <option value="inactivo">inactivo</option>
            </select>
            <button type="button" class="btn btn-success" id="">Filtrar</button>
            <button type="button" class="btn btn-success" id="nuevo">Nuevo</button>
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
                      <td><button type="button" class="btn btn-success" id="detalles">Detalles</button></td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>



</body>
</html>

