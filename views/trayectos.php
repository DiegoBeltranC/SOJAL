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
          <h1>Trayectos</h1>
          <div class="row">  
            <div class="col-izquierda">
              <h3>Camión 1</h3>
              <br>
              <img src="../images/ruta1.png" width="380" height="280" alt="ruta1" id="ruta1"/>
            </div>      
            <div class="col-derecha">
              <h3>Camión 2</h3>
              <br>
              <img src="../images/ruta2.png" width="380" height="280" alt="ruta2" id="ruta2"/>
            </div>  
          </div>
          
        </div>
</div>
   
</body>
</html>

