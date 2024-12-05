<?php
session_start();

if (!isset($_SESSION['autenticado']) && $_SESSION['autenticado'] !== true) {
    header("Location: ../index.php");
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icons-page/administrador.png" />
    <link rel="stylesheet" href="../css/PageNavBar.css">
    <link rel="stylesheet" href="../css/Page.css">
    <link rel="stylesheet" href="../css/PageTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/sweetalert2.min.css" />
    <script src="../js/sweetalert2.all.js"></script>
    <title>Asignación</title>
    <style>
    .content {
        height: 91.5vh;
    }
    </style>
</head>
<body>
<?php include '../layouts/NavBar.php';?>
<div class="home-container">
    <!-- SideBar-->
<?php include '../layouts/sidebar.php';?>
    
    <!-- Contenido-->
    <div class="content">
         <h2>ASIGNACIÓN</h2>

         <table id="asignacionTable" style="width: 100%;">
            <thead>
                <tr>
                    <th>ID Asignación</th>
                    <th>Usuario</th>
                    <th>Ruta</th>
                    <th>Camión</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

<script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>


<?php include '../components/forms/asignacionForm.php';?>
<script src="../js/tables/asignacion.js"></script>

<script src="../js/ViewSideBar.js"></script>

</body>
</html>
