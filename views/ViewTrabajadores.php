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
    <link rel="stylesheet" href="../css/Page.css">
    <title>Trabajadores</title>
</head>
<body>
<div class="home-container">
    <!-- SideBar-->
<?php include '../layouts/sidebar.php';?>
    
    <!-- Contenido-->
    <div class="content">
    <h2>TRABAJADORES</h2>
    </div>

</div>
<script src="../js/ViewSideBar.js"></script>
</body>
</html>