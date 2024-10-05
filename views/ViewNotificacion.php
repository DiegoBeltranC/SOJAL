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
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../images/icons-page/correo-electronico.png" />
  <title>Notificaciones</title>
  <link rel="stylesheet" href="../css/ViewNotifiacion.css">
  <link rel="stylesheet" href="../css/Page.css">
  <link rel="stylesheet" href="../css/buttons.css">

</head>
<body>
<?php include '../layouts/NavBar.php';?>
  <!-- Contenedor-->
  <div class="home-container">
    <!-- SideBar-->
    <?php include '../layouts/sidebar.php';?>
    
    <!-- Contenido-->
    <div class="content">
    <div class="content-button">
      <h2>NOTIFICACIONES</h2>
      <button class="add">
      <span class="button-text">Agregar</span>
     <img src="../images/icons/boton-mas.svg" alt="Icono" class="button-icon">
    </button>

      </div>
      <div class="container-cards">
    <div class="card">
        <img src="../images/RecolectorBasura.jpg" alt="Descripción de la imagen 1">
        <h2>Título 1</h2>
        <p><strong>Fecha de publicación:</strong> 01/01/2024</p>
        <p><strong>Fecha de expiración:</strong> 01/02/2024</p>
        <p>@Jonathan Cherriz</p>
    </div>
    <div class="card">
        <img src="../images/RecolectorBasura.jpg" alt="Descripción de la imagen 2">
        <h2>Título 2</h2>
        <p><strong>Fecha de publicación:</strong> 02/01/2024</p>
        <p><strong>Fecha de expiración:</strong> 02/02/2024</p>
        <p>@Jonathan Cherriz</p>
    </div>
    <div class="card">
        <img src="../images/RecolectorBasura.jpg" alt="Descripción de la imagen 3">
        <h2>Título 3</h2>
        <p><strong>Fecha de publicación:</strong> 03/01/2024</p>
        <p><strong>Fecha de expiración:</strong> 03/02/2024</p>
        <p>@Jonathan Cherriz</p>
    </div>
    <div class="card">
        <img src="../images/RecolectorBasura.jpg" alt="Descripción de la imagen 4">
        <h2>Título 4</h2>
        <p><strong>Fecha de publicación:</strong> 04/01/2024</p>
        <p><strong>Fecha de expiración:</strong> 04/02/2024</p>
        <p>@Jonathan Cherriz</p>
    </div>
</div>

    </div>
  </div>

  <script src="../js/ViewSideBar.js"></script>
</body>
</html>
