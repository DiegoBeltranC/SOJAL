var table;

$(document).ready(function() {
    table = $('#userTable').DataTable({
        "ajax": "http://localhost/API_SOJAL/consult_users.php",
        "columns": [
            { "data": "idUsuario" },
            { "data": null,
                "render": function(data, type, row) { return `${row.nombre} ${row.apellidoP} ${row.apellidoM}` }
            },
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
                            <button class="btn btn-danger" id="delete" title="Eliminar" onclick="eliminar(${row.idUsuario});"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    `;
                }
            }
        ],
        "language": {
            "lengthMenu": "",
            "info": "",
            "infoEmpty": "",
            "infoFiltered": "",
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "search": "Buscar: "
        },
    });

    $('#searchInput').on('keyup', function() {
        table.search(this.value).draw();
    });
});

function ver(id) {
    alert(`Ver detalles del trabajador con ID ${id}`);
}

function editar(id) {
    alert(`Editar trabajador con ID ${id}`);
}

function eliminar(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: 'Esta acción no se puede deshacer.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../controllers/ctrl_users.php",
                type: "POST",
                data: {
                    opcion: 3,
                    id: id,
                },
                success: function (respuesta) {
                    if(respuesta == 1) {
                        Swal.fire('¡Eliminado!', 'El Usuario ha sido eliminado.', 'success');
                        table.ajax.reload();  // Recarga la tabla
                    }
                    else {
                        Swal.fire('¡Fallo!', 'Error en la consulta.', 'error');
                    }
                }
            });
        } else {
            Swal.fire('Cancelado', 'La eliminación ha sido cancelada.', 'info');
        }
    });
}