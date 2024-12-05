const modal = document.getElementById('modal');
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');




var tabla;
document.addEventListener('DOMContentLoaded', () => {
    const modalView = document.getElementById('modalView');
    const modalEdit = document.getElementById('modalEdit');
    const modalViewclose = document.getElementById('closeModalBtnView');
    const modalEditclose = document.getElementById('closeModalBtnEdit')

    // Añade el evento de cierre para el modal de vista
    modalViewclose.addEventListener('click', () => {
        modalView.style.display = 'none';
    });

    modalEditclose.addEventListener('click', () => {
        modalEdit.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
        if (e.target === modalView) {
            modalView.style.display = 'none';
        }
    });

    window.addEventListener('click', (e) => {
        if (e.target === modalEdit) {
            modalEdit.style.display = 'none';
        }
    });
    

});


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
                                <button class="btn btn-warning" title="Editar" onclick="verEditar(${row.idUsuario});"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger" title="Eliminar" onclick="eliminar(${row.idUsuario});"><i class="fas fa-trash-alt"></i></button>
                            </div>
                    `;
                }
            }
        ],
        "pageLength": 8,
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
function add() {

    $('#loading').show();  // Muestra el div con el GIF

   
    const form = $('#administradorForm')[0];

    // Crear un objeto FormData
    const formData = new FormData(form);

    // Realizar la solicitud AJAX
    $.ajax({
        url: '../controllers/ctrl_users.php',
        type: 'POST',
        data: formData,
        processData: false, 
        contentType: false, 
        success: function (response) {
          
            $('#loading').hide();  

            if (response == 1) {
                Swal.fire({
                    title: '¡Éxito!',
                    text: 'El Administrador se registró correctamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                });
                table.ajax.reload();
                modal.style.display = 'none';
                $('#administradorForm')[0].reset(); // Limpiar el formulario
            } else {
                Swal.fire({
                    title: 'Error',
                    text: 'Hubo un problema al registrar al Administrador.',
                    icon: 'error',
                    confirmButtonText: 'Intentar de nuevo'
                });
            }
        },
        error: function (xhr, status, error) {
            // Ocultar el GIF de carga en caso de error
            $('#loading').hide();  // Oculta el div con el GIF

            Swal.fire({
                title: 'Error',
                text: error,
                icon: 'error',
                confirmButtonText: 'Intentar de nuevo'
            });
        }
    });
}

function ver(userId) {
    $.ajax({
        url: 'http://localhost/API_SOJAL/CRUD/users_crud.php', // Ruta del archivo PHP
        type: 'POST',
        data: { id: userId, opcion: 2 }, // Enviar el ID del usuario
        dataType: 'json',
        success: function(response) {
            if (response.error) {
                alert('Error: ' + response.error);
            } else {
                $('#imagenView').attr('src',  '../package/image/photos/' + response.data[0].fotoPerfil);
                $('#nombreView').text(response.data[0].nombre + ' ' + response.data[0].apellidoP + ' ' + response.data[0].apellidoM);
                $('#fechaView').text(response.data[0].fechaNacimiento);
                $('#telefonoView').text(response.data[0].telefono);
                $('#correoView').text(response.data[0].correo);
                $('#rfcView').text(response.data[0].rfc);
                $('#curpView').text(response.data[0].curp);
                // Mostrar el modal
                modalView.style.display = 'flex';

            }
        },
        error: function() {
            alert('Ocurrió un error al cargar los datos.');
        }
    });
}


function verEditar(userId) {
    $.ajax({
        url: 'http://localhost/API_SOJAL/CRUD/users_crud.php', // Ruta del archivo PHP
        type: 'POST',
        data: { id: userId, opcion: 2 }, // Enviar el ID del usuario
        dataType: 'json',
        success: function(response) {
            if (response.error) {
                alert('Error: ' + response.error);
            } else {
                //$('#imagenView').attr('src', response.data[0].fotoPerfil);
                $('#imagenEdit').attr('src',  '../package/image/photos/' + response.data[0].fotoPerfil);
                $('#nombreEdit').val(response.data[0].nombre);
                $('#apellidoPEdit').val(response.data[0].apellidoP);
                $('#apellidoMEdit').val(response.data[0].apellidoM);
                $('#fechaEdit').val(response.data[0].fechaNacimiento);
                $('#telefonoEdit').val(response.data[0].telefono);
                $('#correoEdit').val(response.data[0].correo);
                $('#rfcEdit').val(response.data[0].rfc);
                $('#curpEdit').val(response.data[0].curp);
                $('#id').val(response.data[0].idUsuario);
                $('#imagenAnterior').val(response.data[0].fotoPerfil);
                // Mostrar el modal
                modalEdit.style.display = 'flex';
            }
        },
        error: function() {
            alert('Ocurrió un error al cargar los datos.');
        }
    });
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


function actualizar(){
    $('#loading').show();  // Muestra el div con el GIF

    const form = $('#trabajadorFormEdit')[0];

    // Crear un objeto FormData
    const formData = new FormData(form);

    // Realizar la solicitud AJAX
    $.ajax({
        url: '../controllers/ctrl_users.php',
        type: 'POST',
        data: formData,
        processData: false, 
        contentType: false, 
        success: function (response) {
          
            $('#loading').hide();  

            if (response == 1) {
                Swal.fire({
                    title: '¡Éxito!',
                    text: 'El trabajador se actulizo correctamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                });
                table.ajax.reload();
                modalEdit.style.display = 'none';
               
            } else {
                Swal.fire({
                    title: 'Error',
                    text: 'Hubo un problema al registrar al trabajador.',
                    icon: 'error',
                    confirmButtonText: 'Intentar de nuevo'
                });
            }
        },
        error: function (xhr, status, error) {
            // Ocultar el GIF de carga en caso de error
            $('#loading').hide();  // Oculta el div con el GIF

            Swal.fire({
                title: 'Error',
                text: error,
                icon: 'error',
                confirmButtonText: 'Intentar de nuevo'
            });
        }
    });
}