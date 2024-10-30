<?php
  //Cargar sesion del usuario logueado
  session_start();
	if(!isset($_SESSION['autenticado'])){//Si no hay un usuario logueado, regresar al logueo**
    header("Location: ../index.php");
  }
?>

<?php
 require '../vendor/autoload.php';
 use GuzzleHttp\Client;

 $client = new Client();

 function fetchData($client) {
 $response = $client->request('GET', 'http://localhost/API_SOJAL/consult_trabajadores.php');
 return json_decode($response->getBody(), true);
 }

 $data = fetchData($client);

 function calcularEdad($fechaNacimiento) {
  $fechaActual = new DateTime();
  $fechaNacimiento = new DateTime($fechaNacimiento);
  $edad = $fechaActual->diff($fechaNacimiento)->y;
  return $edad;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icons-page/trabajadores.png" />
    <link rel="stylesheet" href="../css/PageNavBar.css">
    <link rel="stylesheet" href="../css/Page.css">
    <link rel="stylesheet" href="../css/PageTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <title>Trabajadores</title>
</head>
<body>
<?php include '../layouts/NavBar.php';?>
<div class="home-container">
    <!-- SideBar-->
<?php include '../layouts/sidebar.php';?>
    
    <!-- Contenido-->
    <div class="content">
    <h2>TRABAJADORES</h2>
    <table id="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Télefono</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($data): ?>
                    <?php foreach ($data as $item): ?>
                        <tr>
                            <td><?= $item['id_trabajador'] ?></td>
                            <td><?= $item['nombre'] . ' ' . $item['apellido_p'] . ' ' . $item['apellido_m'] ?></td>
                            <td><?= $item['correo'] ?></td>
                            <td><?= $item['telefono'] ?></td>
                            <td><?= calcularEdad($item['fecha_nacimiento']) ?></td>
                            <td class="icon-cell">
                                <a href="#" title="Visualizar" class="icon"><i class="fas fa-eye"></i></a>
                                <a href="#" title="Editar" class="icon"><i class="fas fa-edit"></i></a>
                                <a href="#" title="Eliminar" class="icon" onclick="return confirm(<?= $item['id_trabajador'] ?>);"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No hay datos disponibles.</td>
                    </tr>
                <?php endif; ?>    
            </tbody>
        </table>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#data-table').DataTable();
});
</script>

<script src="../js/ViewSideBar.js"></script>
</body>
</html>