<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homeContent.css" />
    <link rel="stylesheet" href="../css/modals.css" />

    <!--<link rel="stylesheet" href="../css/trabajador.css"/>-->
    <link rel="stylesheet" href="../css/trabajador.css"/>
    <title>Evaluar informes</title>
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
          <h1>Evaluar informes</h1>
          <!--<h2>Foto de maps de chetumal</h2>-->

          <div class="notification-div-filter">
            <h2>Sección</h2>
            <label for="postal">Código postal: </label>
            <input type="text" id="postal" class="input-notification-filter">
            <label for="colonia">Colonia: </label>
            <select name="colonia" id="colonia">
              <option value="">ejemplo 1</option>
              <option value="">ejemplo 2</option>
            </select>
            <button type="button" class="btn btn-primary" >Filtrar</button>
            <br>
            <br>

            <h2>Filtrar por</h2>
            <label for="publicaciones">Publicaciones: </label>
            <select name="publicaciones" id="publicaciones">
              <option value="">ejemplo 1</option>
              <option value="">ejemplo 2</option>
            </select>
            <label for="tipo">Tipo: </label>
            <select name="tipo" id="tipo">
              <option value="">ejemplo 1</option>
              <option value="">ejemplo 2</option>
            </select>
            <label for="estatus">Estatus: </label>
            <select name="estatus" id="estatus">
              <option value="">ejemplo 1</option>
              <option value="">ejemplo 2</option>
            </select>
          </div>

        </div>

        <div class="table-container">
          <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Tipo</th>
                      <th>Usuario</th>
                      <th>Fecha de creación</th>
                      <th>Estatus</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                  <!-- Example Row -->
                  <tr>
                      <td>1</td>
                      <td>Escombro</td>
                      <td>Ariel</td>
                      <td>2024-07-10</td>
                      <td>Espera</td>
                      <td><button type="button" class="btn btn-success" id="nuevo">Asignar</button></td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>

  

</body>
</html>

