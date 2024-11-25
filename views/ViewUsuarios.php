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
    <link rel="icon" href="../images/icons-page/Usuarios.png" />
    <link rel="stylesheet" href="../css/PageNavBar.css">
    <link rel="stylesheet" href="../css/Page.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/PageTables.css">
    <link rel="stylesheet" href="../css/sweetalert2.min.css" />
    <script src="../js/sweetalert2.all.js"></script>

    <style>
        .dataTables_filter {
            margin-bottom: 10px;
        }

        .content {

        height: 91.5vh;
        }
    </style>

    <title>Usuarios</title>

</head>
<body>
<?php include '../layouts/NavBar.php'; ?>
<div class="home-container">
    <?php include '../layouts/sidebar.php'; ?>

    <div class="content">
        <h2>USUARIOS</h2>

        <!-- Tabla de usuarios -->
        <table id="userTable" style="width: 100%;">
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
<script src="../js/ViewSideBar.js"></script>
<script src="../js/tables/users.js"></script>
</body>
</html>
