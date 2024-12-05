// Variables globales
const modal = document.getElementById('modal');


document.getElementById('closeModalBtn').addEventListener('click', function() {
    modal.style.display = 'none';
});
let map;
let routeLayer; // Variable global para la capa de la ruta

    

// Función para inicializar el mapa con Leaflet
function cargarMapa() {
    // Verificar si el mapa ya está inicializado, si no lo inicializamos
    if (!map) {
        map = L.map('map1').setView([18.5267782, -88.3094386], 13);  // Coordenadas y zoom inicial

        // Cargar el mapa de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);
    }
}


// Escucha para cerrar el modal si se hace clic fuera del contenido del modal
window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});

let table;

// Función para cargar la tabla de asignaciones
function cargarTabla() {
    table = $('#asignacionTable').DataTable({
        "ajax": "http://localhost/API_SOJAL/consult_asignacion.php",  // Asegúrate de que la API devuelva el formato adecuado.
        "columns": [
            { "data": "idAsignacion" },  // ID Asignación
            { "data": "idUsuario" },
            { "data": "idRuta" },  // ID Ruta
            { "data": "idCamion" },  // ID Camión
            {
                "data": null,
                "render": function (data, type, row) {
                    return `
                        <div class="action-buttons">
                            <button class="btn btn-info" title="Visualizar" onclick="ver(${row.idAsignacion});"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-warning" title="Editar" onclick="editar(${row.idAsignacion});"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger" title="Eliminar" onclick="eliminar(${row.idAsignacion});"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    `;
                }
            }
        ],
        "pageLength": 8,
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
        "initComplete": function (settings, json) {
            var nuevoAsignacion = $('<button>', {
                text: 'Nueva Asignación',
                class: 'add-form',
                id: 'openModalBtn',
                click: function () {
                    modal.style.display = 'flex';
                    cargarTrabajadores();
                    cargarMapa();
                    cargarRutas();
                    cargarCamiones()
               // Cargar mapa dentro del modal

                    // Evento para cuando se selecciona una ruta

                }
            });
            $('#asignacionTable').before(nuevoAsignacion);
        }
    });
}

// Función para cargar los trabajadores en el select
function cargarTrabajadores() {
    $.ajax({
        url: 'http://localhost/API_SOJAL/CRUD/asignacion_crud.php',
        method: 'POST',
        data: { opcion: 1 },
        dataType: 'json',
        success: function (data) {
            $('#trabajador').empty();
            $('#trabajador').append('<option value="">Selecciona un Trabajador</option>');
            $.each(data, function (index, trabajador) {
                $('#trabajador').append(
                    `<option value="${trabajador.idUsuario}">${trabajador.nombre} ${trabajador.apellidoP} ${trabajador.apellidoM}</option>`
                );
            });
        },
        error: function () {
            alert('Error al cargar los trabajadores.');
        }
    });
}

// Función para cargar las rutas en el select
function cargarCamiones() {
    $.ajax({
        url: 'http://localhost/API_SOJAL/CRUD/asignacion_crud.php',
        method: 'POST',
        data: { opcion: 5 },
        dataType: 'json',
        success: function (data) {
            $('#camion').empty();
            $('#camion').append('<option value="">Selecciona un camion</option>');
            data.forEach((camion) => {
                $('#camion').append(
                    `<option value="${camion.idCamion}">${camion.placas}</option>`
                );
            });
        },
        error: function () {
            alert('Error al cargar las camion.');
        }
    });
}


// Función para cargar las rutas en el select
function cargarRutas() {
    $.ajax({
        url: 'http://localhost/API_SOJAL/CRUD/asignacion_crud.php',
        method: 'POST',
        data: { opcion: 3 },
        dataType: 'json',
        success: function (data) {
            $('#ruta').empty();
            $('#ruta').append('<option value="">Selecciona una Ruta</option>');
            data.forEach((ruta) => {
                $('#ruta').append(
                    `<option value="${ruta.idRuta}">${ruta.nombre}</option>`
                );
            });
        },
        error: function () {
            alert('Error al cargar las rutas.');
        }
    });
}

// Función para cargar el perfil de un trabajador
function cargarPerfilTrabajador(id) {
    $.ajax({
        url: 'http://localhost/API_SOJAL/CRUD/asignacion_crud.php',
        method: 'POST',
        data: { opcion: 2, id: id },
        dataType: 'json',
        success: function (data) {
            if (data.length > 0) {
                var trabajador = data[0];
                $('#nombreView').text(trabajador.nombre + ' ' + trabajador.apellidoP + ' ' + trabajador.apellidoM);
                $('#telefonoView').text('Teléfono: ' + trabajador.telefono);
                $('#profilePic').attr('src', '../package/image/photos/' + trabajador.fotoPerfil);
            } else {
                alert('No se encontraron datos del trabajador.');
            }
        },
        error: function () {
            alert('Error al cargar el perfil del trabajador.');
        }
    });
}

// Función para limpiar el perfil
function limpiarPerfil() {
    $('#nombreView').text('Nombre del trabajador');
    $('#telefonoView').text('Teléfono:');
    $('#profilePic').attr('src', 'http://via.placeholder.com/50');
}

// Evento para cuando se selecciona un trabajador
$('#trabajador').change(function () {
    var trabajadorId = $(this).val();
    if (trabajadorId) {
        cargarPerfilTrabajador(trabajadorId);
    } else {
        limpiarPerfil();
    }
});


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
                url: "http://localhost/API_SOJAL/CRUD/asignacion_crud.php",
                type: "POST",
                data: {
                    opcion: 7,
                    id: id,
                },
                success: function (dato) {
                    console.log(dato);
                    if (dato == 'true') {
                        Swal.fire('¡Eliminado!', 'La Asignación ha sido eliminada.', 'success');
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

function add() {
    var idT = $('#trabajador').val();
    var idR = $('#ruta').val();
    var idC = $('#camion').val();
    $('#loading').show();  // Muestra el div con el GIF

   
    $.ajax({
        url: 'http://localhost/API_SOJAL/CRUD/asignacion_crud.php',
        method: 'POST',
        data: { opcion: 6, idT: idT, idR: idR, idC: idC },
        dataType: 'json',
        success: function (data) {
            $('#loading').hide();  

            if (data == true) {
                Swal.fire({
                    title: '¡Éxito!',
                    text: 'La asignación se registró correctamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                });
                console.log(data);
                table.ajax.reload();
                modal.style.display = 'none';
    
            } else {
                Swal.fire({
                    title: 'Error',
                    text: 'Hubo un problema al registrar la asignacion.',
                    icon: 'error',
                    confirmButtonText: 'Intentar de nuevo'
                });
            }
         
        },
        error: function () {
            alert('Error al cargar el perfil del trabajador.');
        }
    });
}

        // Función para cargar la ruta seleccionada
        function cargarRuta(idRuta) {
            $.ajax({
                url: 'http://localhost/API_SOJAL/CRUD/asignacion_crud.php',
                method: 'POST',
                data: { opcion: 4, id: idRuta },
                dataType: 'json',
                success: function (data) {
                    // Verificar si el mapa ya está inicializado
                    if (!map) {
                        cargarMapa();  // Si el mapa no está creado, lo inicializamos
                    }

                    // Eliminar la ruta anterior si existe
                    if (routeLayer) {
                        map.removeLayer(routeLayer);  // Eliminar la capa anterior
                    }

                    // Extraer la ruta seleccionada
                    const ruta = data[0]; // Asumiendo que la respuesta es un solo objeto
                    const puntos = JSON.parse(ruta.puntos); // Convertir la cadena JSON de puntos a un array

                    // Crear una nueva capa de línea para la ruta
                    const latLngs = puntos.map(function (point) {
                        return [point[0], point[1]]; // Convertir cada punto en una coordenada [lat, lng]
                    });

                    // Crear una capa de línea para la ruta
                    routeLayer = L.polyline(latLngs, {
                        color: ruta.color,  // Usar el color de la ruta
                        weight: 5
                    }).addTo(map);

                    // Ajustar el mapa para que se vea la ruta completa
                    map.fitBounds(routeLayer.getBounds());
                },
                error: function () {
                    alert('Error al cargar la ruta.');
                }
            });
        }
// Evento para cuando se selecciona una ruta
$('#ruta').change(function () {
    var idRuta = $(this).val();
    if (idRuta) {
        cargarRuta(idRuta); // Cargar la ruta seleccionada
    }
});

// Inicializar la tabla cuando la página cargue
$(document).ready(function () {
    cargarTabla(); // Cargar la tabla de asignaciones
    
});
