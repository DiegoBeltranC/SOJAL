<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../css/homeContent.css" />
  <link rel="stylesheet" href="../css/modals.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--<link rel="stylesheet" href="../css/trabajador.css"/>-->
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
        <div id="dashboard-notifications">
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
            <button type="button" class="btn-primary" >Filtrar</button>
            <br>
            <br>

            <h2>Filtrar por</h2>
            <br>
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
                      <td><button class="btn-warning" id="btnModal">Asignar</button></td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div>
  </div>

  <div id="contenedor" class="contenedor">
    <div id="contenedor-form">
      <form class="form" >
        <div class="container">
          <img src="../images/cancelar.png" width="6%" alt="Cancelar" id="btnCancelarModalNuevo" class="btnCancelar"/>
        </div>
        <h1 class="titulo">Asignar reporte</h1>
        <hr class="hr" />
        <div>
          <label class="label" for="tipo_reporte">Tipo de reporte: </label><br/>
          <select class="inputs" name="tipo_reporte" id="ftipo_reporte">
            <option value="">ejemplo 1</option>
            <option value="">ejemplo 2</option>
          </select>
          <br>

          <h4 class="label">Descripción</h4>
          <p class="label">Lo saca de la bd</p>
         
          <br>
          <p class="label">Creado por <br>@Ariel Alejandro Rivero Moo</p>
          <br>
          <label class="label" for="trabajador">Trabajador</label>
          <select class="inputs" id="fTrabajador" name="select">
            <option value="1" >Trabajador 1</option>
            <option value="2" >Trabajador 2</option>
            <option value="3">Trabajador 3</option>
          </select>
          <br>
        </div>
        <input type="submit" value="Guardar" />
      </form>
    </div>
  </div>
  <script src="../js/notificacion_modal.js"></script>
  

</body>
</html>

