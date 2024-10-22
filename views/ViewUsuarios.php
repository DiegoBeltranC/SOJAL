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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icons-page/Usuarios.png" />
    <link rel="stylesheet" href="../css/PageNavBar.css">
    <link rel="stylesheet" href="../css/Page.css">
    <title>Usuarios</title>
</head>
<body>
<?php include '../layouts/NavBar.php';?>
<div class="home-container">
    <!-- SideBar-->
<?php include '../layouts/sidebar.php';?>
    
    <!-- Contenido-->
    <div class="content">
    <h2>USUARIOS</h2>
    </div>

</div>
<script src="../JS/ViewSideBar.js"></script>
</body>
</html>