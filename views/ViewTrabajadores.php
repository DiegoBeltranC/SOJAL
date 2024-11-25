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
    <link rel="icon" href="../images/icons-page/trabajadores.png" />
    <link rel="stylesheet" href="../css/PageNavBar.css">
    <link rel="stylesheet" href="../css/Page.css">
    <link rel="stylesheet" href="../css/PageTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Trabajadores</title>
    <link rel="stylesheet" href="../css/sweetalert2.min.css" />
    <script src="../js/sweetalert2.all.js"></script>
    <style>
    .content {

    height: 91.5vh;
    }
    </style>
</head>
<body>
<?php include '../layouts/NavBar.php'; ?>
<div class="home-container">
    <?php include '../layouts/sidebar.php'; ?>

    <div class="content">
        <h2>TRABAJADORES</h2>

        <!-- Tabla de trabajadores -->
        <table id="trabajadoresTable" style="width: 100%;">
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
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<?php include '../components/forms/workersForm.php';?>

<script src="../js/ViewSideBar.js"></script>

</body>
</html>
