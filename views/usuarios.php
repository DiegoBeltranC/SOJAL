<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homeContent.css" />
    <link rel="stylesheet" href="../modals_css/modal_usuario.css" />
    <link rel="stylesheet" href="../css/usuarios.css" />

    <title>Usuarios</title>
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
          <h1>Usuarios</h1>
          <h2>Filtrar por</h2>

          <div class="notification-div-filter">
            <label for="fnombre">Nombre: </label>
            <input type="text"  id="fnombre" class="input-notification-filter">
            <button type="button" class="btn btn-primary" id="">Filtrar</button>
          </div>

        </div>

        <div class="table-container">
          <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Usuario</th>
                      <th>Acciones</th>
                  </tr>
              </thead>
              <tbody>
                  <!-- Example Row -->
                  <tr>
                      <td>1</td>
                      <td>Ariel Alejandro Rivero Moo</td>
                      <td><button type="button" class="btn btn-primary" id="detalles">Detalles</button></td>
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
            <img src="../images/cancelar.png" width="6%" alt="Cancelar" id="btnCancelarModal"/>
          </div>
          <h1 class="titulo">Usuario</h1>
          <hr class="hr" />
          <div>
            <div class="div-image-container">
                <img src="../images/blank-profile-picture-973460_960_720.png" alt="" class="profile-picture-user">
            </div>

            <br><br>
            <label class="label">Nombre:</label><br />
            <input
              class="inputs"
              type="text"
              value="DIEGO"
              />
            <br/><br/>
            <label class="label">Apellido:</label><br />
            <div class="apellido-div">
                <input
                class="inputs"
                type="text"
                value="BELTRAN"
                />  
                <input
                class="inputs"
                type="text"
                value="CAN"
                /> 
            </div>
            <br>
            <label class="label">Correo:</label><br />
            <input
              class="inputs"
              type="email"
              value="ejemplo@gmail.com"
            />
            <br><br>
            <label class="label">Registrado</label><br />
            <div style="display: flex; justify-content: center;">
                <span>27-05-2024</span>
            </div>
            <br>
            <div class="buttons-user-form">
                <input type="button" value
                ="Enviar Correo">
                <input type="button" value="Ver reportes">
                <input type="button" value="Eliminar Usuario">
            </div>

  
            

          </div>
          <input type="button" value="Aceptar" class="primary-button-form"/>
        </form>
      </div>
</div>
 
<script src="../JS/usuarios.js"></script>
</body>
</html>

