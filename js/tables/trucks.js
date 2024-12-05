const modal = document.getElementById('modal');
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');

const modalView = document.getElementById('modalView');
const modalViewclose = document.getElementById('closeModalBtnView');

const modalEdit = document.getElementById('modalEdit');
const modalEditclose = document.getElementById('closeModalBtnEdit');

const previewContainer = document.getElementById('fotosCamionEdit');

var table;

modalEditclose.addEventListener('click', () => {
    modalEdit.style.display = 'none';
    previewContainer.innerHTML = ''; // Limpiar las imágenes
});


closeModalBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

modalViewclose.addEventListener('click', () => {
    modalView.style.display = 'none';

});

// Cerrar el modal si se hace clic fuera del contenido del modal
window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});

window.addEventListener('click', (e) => {
    if (e.target === modalView) {
        modalView.style.display = 'none';
    }
});

window.addEventListener('click', (e) => {
    if (e.target === modalEdit) {

        modalEdit.style.display = 'none';
        previewContainer.innerHTML = ''; // Limpiar las imágenes

    }
});

$(function () {
    // Configuración del DataTable
    cargarTabla();
});


function ver(id) {
    $.ajax({
        url: 'http://localhost/API_SOJAL/CRUD/truck_crud.php', // Ruta del archivo PHP
        type: 'POST',
        data: { idCamion: id, opcion: 3 }, // Enviar el ID del usuario
        dataType: 'json',
        success: function (response) {
            if (response.error) {
                alert('Error: ' + response.error);
            } else {

                $('#placasView').text(response.data.placas);
                $('#modeloView').text(response.data.modelo);
                $('#anoView').text(response.data.ano);

                $('#marcaView').text(response.data.marca);
                $('#estadoView').text(response.data.estado);
                // Mostrar el modal

                const photos = JSON.parse(response.data.fotos);

                // Limpiar cualquier imagen previa
                const previewContainer = document.getElementById('fotosCamion');
                previewContainer.innerHTML = '';

                // Verificar si hay fotos
                if (photos && Array.isArray(photos)) {
                    photos.forEach(function (photo) {
                        const img = document.createElement('img');
                        img.src = '../package/image/' + photo; // Asegúrate de colocar la ruta correcta de las imágenes
                        img.alt = photo;
                        img.style.maxWidth = '200px';
                        img.style.margin = '10px';
                        previewContainer.appendChild(img);
                    });
                }

                modalView.style.display = 'flex';
            }
        },
        error: function () {
            alert('Ocurrió un error al cargar los datos.');
        }
    });

}

document.getElementById('imageUpload').addEventListener('change', function (event) {

    const previewContainer = document.getElementById('previewContainer');
    previewContainer.innerHTML = ''; // Limpiar las previsualizaciones anteriores

    const files = event.target.files;

    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (file && file.type.startsWith('image')) {
            const reader = new FileReader();

            reader.onload = function (e) {

                const img = document.createElement('img');
                img.src = e.target.result;
                img.alt = file.name;
                img.style.maxWidth = '200px';
                img.style.margin = '10px';
                previewContainer.appendChild(img);
            };

            reader.readAsDataURL(file);
        }
    }
});

function add() {

    $('#loading').show();  // Muestra el div con el GIF


    const form = $('#CamionForm')[0];

    // Crear un objeto FormData
    const formData = new FormData(form);

    // Realizar la solicitud AJAX
    $.ajax({
        url: '../controllers/ctrl_trucks.php',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            console.log(response);
            $('#loading').hide();

            if (response == 1) {
                Swal.fire({
                    title: '¡Éxito!',
                    text: 'El camión se registró correctamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                });
                table.ajax.reload();
                modal.style.display = 'none';
                $('#CamionForm')[0].reset(); // Limpiar el formulario
            } else {
                Swal.fire({
                    title: 'Error',
                    text: 'Hubo un problema al registrar al camión.',
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

function edit() {
    $('#loading').show();  // Mostrar el indicador de carga

    const form = $('#CamionFormEdit')[0];
    const formData = new FormData(form);
    const imagenes = document.querySelectorAll("#fotosCamionEdit img");

    // Crear un array de promesas para obtener todas las imágenes
    const imagePromises = Array.from(imagenes).map((img, index) => {
        const imgSrc = img.src;

  
        if (imgSrc.startsWith('blob:')) {
          
            return fetch(imgSrc)
                .then(response => response.blob())  // Convertir a Blob
                .then(blob => {
                    // Crear un archivo a partir del blob
                    const archivo = new File([blob], `imagen_${index}.jpg`, { type: 'image/jpeg' });
                    formData.append('fotos[]', archivo);
                    console.log(`Imagen blob añadida: imagen_${index}.jpg`);
                })
                .catch(error => {
                    console.error('Error al obtener la imagen blob:', error);
                });
        } else if (imgSrc.startsWith('http://') || imgSrc.startsWith('https://')) {
            // Si es una URL normal (http o https), descargar la imagen y convertirla en archivo
            return fetch(imgSrc)
                .then(response => response.blob())  // Convertir la URL a un blob
                .then(blob => {
                    // Crear un archivo a partir del blob
                    const archivo = new File([blob], `imagen_${index}.jpg`, { type: 'image/jpeg' });
                    formData.append('fotos[]', archivo);
                    console.log(`Imagen URL añadida como archivo: imagen_${index}.jpg`);
                })
                .catch(error => {
                    console.error('Error al obtener la imagen de la URL:', error);
                });
        } else {

            return Promise.resolve();
        }
    });

    // Esperar a que todas las imágenes se hayan procesado
    Promise.all(imagePromises).then(() => {
        // Enviar los datos con AJAX
        $.ajax({
            url: '../controllers/ctrl_trucks.php',  // Cambia la URL al controlador adecuado
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                $('#loading').hide();  // Ocultar el indicador de carga
                console.log(response);
                if (response == 1) {
                    Swal.fire({
                        title: '¡Éxito!',
                        text: 'El camión se actualizó correctamente.',
                        icon: 'success',
                        confirmButtonText: 'Aceptar'
                    });
                    table.ajax.reload();
                    modalEdit.style.display = 'none';
                    $('#CamionFormEdit')[0].reset();
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: 'Hubo un problema al actualizar el camión.',
                        icon: 'error',
                        confirmButtonText: 'Intentar de nuevo'
                    });
                }
            },
            error: function (xhr, status, error) {
                $('#loading').hide();
                Swal.fire({
                    title: 'Error',
                    text: error,
                    icon: 'error',
                    confirmButtonText: 'Intentar de nuevo'
                });
            }
        });
    });
}

function moverImagenes() {
    const imageWrappers = document.querySelectorAll('#fotosCamionEdit .image-wrapper img');
    const formData = new FormData();
    const imagenesArray = [];

    if (imageWrappers.length > 0) {
        imageWrappers.forEach((img) => {
            const imgSrc = img.src;
            const imgAlt = img.alt;
            imagenesArray.push(imgAlt);

            fetch(imgSrc)
                .then((response) => response.blob())
                .then((blob) => {
                    formData.append('imagenes[]', blob, imgAlt);
                })
                .catch((error) => console.error('Error al obtener la imagen:', error));
        });

        console.log('Imágenes a mover:', imagenesArray);
    } else {
        console.log('No hay imágenes cargadas en el contenedor.');
    }
}


function VerEditar(id) {
    $.ajax({
        url: 'http://localhost/API_SOJAL/CRUD/truck_crud.php', // Ruta del archivo PHP
        type: 'POST',
        data: { idCamion: id, opcion: 3 }, // Enviar el ID del usuario
        dataType: 'json',
        success: function (response) {
            if (response.error) {
                alert('Error: ' + response.error);
            } else {

                console.log(response);

                $('#idCamionEdit').val(response.data.idCamion); 

                $('#placasEdit').val(response.data.placas);
                $('#modeloEdit').val(response.data.modelo);
                $('#anoEdit').val(response.data.ano);
                $('#marcaEdit').val(response.data.marca);
                $('#estadoEdit').val(response.data.estado);

                // Limpiar el contenedor de imágenes antes de agregar nuevas
                previewContainer.innerHTML = '';

                const photos = JSON.parse(response.data.fotos); // Imágenes existentes
                const imageUpload = document.getElementById('imageUploadEdit');

                // Función para cargar imágenes existentes
                function cargarImagenesExistentes(photos) {
                    if (photos && Array.isArray(photos)) {
                        photos.forEach(function (photo) {
                            agregarImagen(`../package/image/${photo}`, photo, false);
                        });
                    }
                }

                // Función para agregar imágenes al contenedor
                function agregarImagen(src, alt, esNueva = true) {
                    // Verificar si la imagen ya existe en el contenedor
                    const existingImages = previewContainer.querySelectorAll('img');
                    for (let img of existingImages) {
                        if (img.alt === alt) {
                            console.log('La imagen ya está en el contenedor:', alt);
                            return;
                        }
                    }

                    const imageWrapper = document.createElement('div');
                    imageWrapper.classList.add('image-wrapper');

                    const img = document.createElement('img');
                    img.src = src;
                    img.alt = alt;
                    img.style.cursor = 'pointer';

                    const overlay = document.createElement('div');
                    overlay.classList.add('overlay');
                    overlay.textContent = 'Eliminar';

                    // Evento para eliminar la imagen
                    imageWrapper.addEventListener('click', function () {
                        previewContainer.removeChild(imageWrapper);
                        if (esNueva) {
                            console.log(`Imagen nueva "${alt}" eliminada.`);
                        } else {
                            console.log(`Imagen existente "${alt}" eliminada.`);
                        }
                    });

                    // Añadir imagen y overlay al contenedor
                    imageWrapper.appendChild(img);
                    imageWrapper.appendChild(overlay);
                    previewContainer.appendChild(imageWrapper);
                }

                // Manejar selección de imágenes nuevas desde el input
                imageUpload.addEventListener('change', function (event) {
                    const files = event.target.files;

                    // Verificar que hay archivos seleccionados
                    if (files.length > 0) {
                        for (const file of files) {
                            if (!file.type.startsWith('image/')) {
                                console.log('El archivo seleccionado no es una imagen:', file.name);
                                continue;
                            }

                            const imgURL = URL.createObjectURL(file);
                            agregarImagen(imgURL, file.name, true);

                            // Liberar memoria del objeto URL después de cargar la imagen
                            img.onload = () => URL.revokeObjectURL(imgURL);
                        }
                    }
                });

                // Inicializar las imágenes existentes al cargar la página
                cargarImagenesExistentes(photos);
                modalEdit.style.display = 'flex';
            }
        },
        error: function () {
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
                url: "../controllers/ctrl_trucks.php",
                type: "POST",
                data: {
                    opcion: 2,
                    idCamion: id,
                },
                success: function (respuesta) {
                    if (respuesta == 1) {
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

function cargarTabla() {
    table = $('#data-table').DataTable({
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
                            <button class="btn btn-info" title="Visualizar" onclick="ver(${row.idCamion});"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-warning" title="Editar" onclick="VerEditar(${row.idCamion});"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger" title="Eliminar" onclick="eliminar(${row.idCamion});"><i class="fas fa-trash-alt"></i></button>
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
            "search": "Buscar: "
        },
        "dom": '<"top"f>rt<"bottom"p><"clear">',
        "initComplete": function (settings, json) {

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

}