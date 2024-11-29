<?php
  session_start();
	if(isset($_SESSION['autenticado']) && $_SESSION['autenticado'] === 1){
    header("Location: ../index.php");
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
    <title>Administradores</title>
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
        <h2>ADMINISTRADORES</h2>
        <table id="data-table" class="display" style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Los datos se cargan mediante DataTables -->
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<?php include '../components/forms/administratorsForm.php';?>
<?php include '../components/view/admidInfo.php';?>
<?php include '../components/edit/administratorsEdit.php';?>
<script src="../js/ViewSideBar.js"></script>

</body>
</html>
