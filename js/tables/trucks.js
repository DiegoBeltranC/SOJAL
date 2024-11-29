const modal = document.getElementById('modal');
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');

$(function () {
    // Configuración del DataTable
    $('#data-table').DataTable({
        "ajax": "http://localhost/API_SOJAL/consult_camiones.php",
        "columns": [
            { "data": "idCamion" },
            { "data": "placas" },
            { "data": "marca" },
            { "data": "modelo" },
            { "data": "ano" },
            { "data": "estado" },
            {
                "data": null,
                "render": function (data, type, row) {
                    return `
                        <div class="action-buttons">
                            <button class="btn btn-info" title="Visualizar" onclick="ver(${row.id_usuario});"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-warning" title="Editar" onclick="editar(${row.id_usuario});"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger" title="Eliminar" onclick="return eliminar(${row.id_usuario});"><i class="fas fa-trash-alt"></i></button>
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
            var nuevoCamionBtn = $('<button>', {
                text: 'Nuevo Camión',
                class: 'add-form',
                id: 'openModalBtn',
                click: function () {
                    modal.style.display = 'flex';
                }
            });

            // Inserta el botón antes de la tabla
            $('#data-table').before(nuevoCamionBtn);
        }
    });

    // Buscador personalizado
    $('#searchInput').on('keyup', function () {
        $('#data-table').DataTable().search(this.value).draw();
    });
});


function ver(id) {
    alert(`Ver detalles del trabajador con ID ${id}`);
}



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