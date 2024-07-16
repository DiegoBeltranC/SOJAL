<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homeContent.css" />
    <link rel="stylesheet" href="../css/modals.css" />
    <title>Trabajadores</title>
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
          <h1>Trabajadores</h1>
          <h2>Filtrar por</h2>

          <div class="notification-div-filter">
            <label for="fecha-inicio-filter">Fecha Inicio: </label>
            <input type="date" min="2020-01-01" id="fecha-inicio-filter" class="input-notification-filter">

            <label for="fecha-expiracion-filter">Fecha Expiración: </label>
            <input type="date" id="fecha-inicio-filter">
            <br>
            <br>

            <button type="button" class="btn btn-primary" >Filtrar</button>
            <button type="button" class="btn btn-success" id="nuevo">Nuevo</button>
          </div>

        </div>

        <div class="table-container">
          <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Trabajador</th>
                      <th>Reporte</th>
                      <th>Fecha inicio</th>
                      <th>Acciones</th>
                  </tr>
              </thead>
              <tbody>
                  <!-- Example Row -->
                  <tr>
                      <td>1</td>
                      <td>Ariel Alejandro Rivero Moo</td>
                      <td>#1</td>
                      <td>2024-07-10</td>
                      <td><button type="button" class="btn btn-warning" id="detalles">Detalles</button></td>
                  </tr>
              </tbody>
          </table>
        </div>
    </div>

  
   
</body>
</html>

