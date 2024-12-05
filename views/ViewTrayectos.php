<?php
session_start();

if (!isset($_SESSION['autenticado']) && $_SESSION['autenticado'] !== true) {
    header("Location: ../index.php");
    exit(); 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../images/icons-page/ruta.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Page.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="../css/sweetalert2.min.css" />
    <script src="../js/sweetalert2.all.js"></script>
    <style>
        #map { height: 30rem; width: 100%; z-index: 1; }

    </style>
    <title>Trayectos</title>
</head>
<body>
<?php include '../layouts/NavBar.php';?>
  <!-- Contenedor-->
  <div class="home-container">
    <!-- SideBar-->
   
    
    <!-- Contenido-->
    <div class="content">
    <h2>Trayectos</h2>
    <button class="add" onclick="nuevaRuta()">Nueva Ruta</button>
    <div id="map"></div>
    </div>
    <?php include '../layouts/sidebar.php';?>
  
  </div>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.css" rel="stylesheet" />

<?php include '../components/NewRuta.php';?>

<script src="../js/ViewSideBar.js"></script>
</body>
</html>
