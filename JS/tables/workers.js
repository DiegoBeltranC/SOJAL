const modal = document.getElementById('modal');
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');

var table;

$(document).ready(function() {
    table = $('#trabajadoresTable').DataTable({
        "ajax": "http://localhost/API_SOJAL/consult_trabajadores.php",
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
                            <button class="btn btn-danger" title="Eliminar" onclick="eliminar(${row.idUsuario});"><i class="fas fa-trash-alt"></i></button>
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
        "dom": '<"top"f>rt<"bottom"p><"clear">',
        "initComplete": function(settings, json) {
            // Aquí agregamos el botón "Nuevo Camión" en la parte superior de la tabla
            var nuevoTrabajador = $('<button>', {
                text: 'Nuevo Trabajador',
                class: 'add-form',
                id: 'openModalBtn',
                click: function() {
                    modal.style.display = 'flex';
                }
            });

            // Inserta el botón antes de la tabla
            $('#trabajadoresTable').before(nuevoTrabajador);
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
                        Swal.fire('¡Eliminado!', 'El Trabajador ha sido eliminado.', 'success');
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