<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homeContent.css" />
    <link rel="stylesheet" href="../css/modals.css" />

    <title>Camiones</title>
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
          <h1>Camiones</h1>
          <h2>Filtrar por</h2>

          <div class="notification-div-filter">
            <label for="fmarca">Marca: </label>
            <input type="text"  id="fmarca" class="input-notification-filter">
            <label for="fmodelo">Modelo: </label>
            <input type="text"  id="fmodelo" class="input-notification-filter">
            <label for="fmatricula">Matricula: </label>
            <input type="text"  id="fmatricula" class="input-notification-filter">
            <button type="button" class="btn btn-primary" id="">Filtrar</button>
            <button type="button" class="btn-primary" id="nuevo">Nuevo camion</button>
          </div>

        </div>

        <div class="table-container">
          <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Id ruta</th>
                      <th>Matricula</th>
                      <th>Marca</th>
                      <th>Modelo</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                  </tr>
              </thead>
              <tbody>
                  <!-- Example Row -->
                  <tr>
                      <td>1</td>
                      <td>#2</td>
                      <td>ASW-3423</td>
                      <td>DAF</td>
                      <td>2015</td>
                      <td>Activo</td>
                      <td><button type="button" class="btn-warning" id="detalles">Detalles</button></td>
                  </tr>
              </tbody>
          </table>
      </div>
  
   
</body>
</html>

