const modal = document.getElementById('modal');
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');

var tabla;

$(document).ready(function () {
    table = $('#data-table').DataTable({
        "ajax": "http://localhost/API_SOJAL/consult_admins.php", // API que devuelve los administradores
        "columns": [
            { "data": "idUsuario" },
            {
                "data": null,
                "render": function (data, type, row) { return `${row.nombre} ${row.apellidoP} ${row.apellidoM}` }
            },
            { "data": "correo" },
            { "data": "telefono" },
            { "data": "edad" },
            {
                "data": null,
                "render": function (data, type, row) {
                    return `
                            <div class="action-buttons">
                                <button class="btn btn-info" title="Visualizar" onclick="ver(${row.idUsuario});"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-warning" title="Editar" onclick="editar(${row.idUsuario});"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger" title="Eliminar" onclick="eliminar(${row.idUsuario});"><i class="fas fa-trash-alt"></i></button>
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
        },
        "dom": '<"top"f>rt<"bottom"p><"clear">',
        "initComplete": function (settings, json) {
            // Aquí agregamos el botón "Nuevo Camión" en la parte superior de la tabla
            var nuevoAdministrador = $('<button>', {
                text: 'Nuevo Administrador',
                class: 'add-form',
                id: 'openModalBtn',
                click: function () {
                    modal.style.display = 'flex';
                }
            });

            // Inserta el botón antes de la tabla
            $('#data-table').before(nuevoAdministrador);
        }
    });
});

// Cerrar el modal cuando se hace clic en el botón de cerrar
closeModalBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Cerrar el modal si se hace clic fuera del contenido del modal
window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
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
                        Swal.fire('¡Eliminado!', 'El Administrador ha sido eliminado.', 'success');
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