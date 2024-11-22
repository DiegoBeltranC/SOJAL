<?php 

include '../controllers/ctrl_users.php'; 

function calcularEdad($fechaNacimiento)
{
    $nacimiento = new DateTime($fechaNacimiento);
    return $nacimiento->diff(new DateTime())->y; // Calcula años de diferencia
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

    <!-- Agregar Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/PageTables.css">
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
<script>
    $(document).ready(function() {
        $('#userTable').DataTable({
            "ajax": "http://localhost/API_SOJAL/consult_users.php",
            "columns": [
                { "data": "idUsuario" },
                { "data": null,
                 "render": function(data, type, row) { return `${row.nombre} ${row.apellidoP} ${row.apellidoM}`} },
                { "data": "correo" },
                { "data": "telefono" },
                { "data": "edad" },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `
                            <div class="action-buttons">
                                <button class="btn btn-info" title="Visualizar" onclick="ver(${row.idUsuario});"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning" title="Editar" onclick="editar(${row.idUsuario});"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger" title="Eliminar" onclick="return eliminar(${row.idUsuario});"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        `;
                    }
                }
            ],
            "language": {
                "lengthMenu": "", // Elimina "Show entries"
                "info": "", // Elimina la información de la paginación ("Showing 1 to 10 of 14 entries")
                "infoEmpty": "", // Elimina el mensaje cuando no hay datos
                "infoFiltered": "", // Elimina el mensaje de filtrado
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "search": "Buscar: " // Cambia el texto del campo de búsqueda
            }
        });

        // Buscador personalizado
        $('#searchInput').on('keyup', function() {
            $('#userTable').DataTable().search(this.value).draw();
        });
    });

    function ver(id) {
        alert(`Ver detalles del trabajador con ID ${id}`);
    }

    function editar(id) {
        alert(`Editar trabajador con ID ${id}`);
    }

    function eliminar(id) {
        if (confirm(`¿Estás seguro de que deseas eliminar al trabajador con ID ${id}?`)) {
            alert(`Trabajador con ID ${id} eliminado.`);
            return true;
        }
        return false;
    }
</script>
</body>
</html>
