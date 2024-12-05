<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Reporte</title>
    <link rel="stylesheet" href="../components/view/ViewStyles.css">
    <link rel="stylesheet" href="../components/view/reporteView.css">
</head>
<body>
<div id="modalView" class="modalView">
  <div class="modal-content">
    <h2>Información del Reporte</h2>
      <p id="descripcionView" hidden>id</p>

      <div class="form-group">
        <label>Fotos:</label>
        <div class="content-img" id="content-img"></div>
      </div>

     
      <div class="form-group">
        <label>Descripcion:</label>
        <p id="decripcionView"></p>
      </div>
      <div class="form-group">
        <label>Referencias:</label>
        <p id="referenciasView"></p>
      </div>
      <div class="form-group">
        <label>Colonia:</label>
        <p id="coloniaView"></p>
      </div>
      <div class="form-group">
        <label>Calle:</label>
        <p id="calleView"></p>
      </div>
      <div class="form-group">
        <label>Cruzamientos:</label>
        <p id="cruzamientosView"></p>
      </div>
      <div class="form-group">
        <label>No.Casa:</label>
        <p id="numeroView"></p>
      </div>

      <div class="profile-container">
    <img src="http://via.placeholder.com/50" alt="Foto de perfil" class="profile-pic" id="profilePic">
    <div class="profile-info">
        <p class="profile-name" id="nombreView">Nombre del Usuario</p>
        <p class="profile-date"  id="fechaView">Fecha de creación:</p>
    </div>

</div>
   <div id="mapAsignar"></div>
<div class="button-container">
    <button type="button" onclick="" class="asignar" id="asignar">Asignar Reporte</button>
    <button type="button" onclick="" class="avances"  id="avances">Visualizar Avances</button>
    <button type="button" onclick="" class="finalizar">Finalizar Reporte</button>
</div>

  </div>
  
</div>  

<script src="https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>

    // Detectar cuando el modal se hace visible
    const modalView = document.getElementById('modalView');

    // Asumiendo que haces visible el modal cambiando `display` a `block`
    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.attributeName === 'style') {
                const isVisible = window.getComputedStyle(modalView).display === 'flex';
                if (isVisible) {
                    cargarReporte();
                }
            }
        });
    });

    observer.observe(modalView, { attributes: true });
    mapboxgl.accessToken = 'pk.eyJ1IjoiYWxpc3RhcmRldiIsImEiOiJjbTFyOHlseXowOHRzMnhxMm9tdnBwcTR5In0.D5D_X4S6CB4FdAyeTIL0GQ';

    function cargarMapa() {
        const mapView = new mapboxgl.Map({
    container: 'mapAsignar', // ID del contenedor
    style: 'mapbox://styles/mapbox/streets-v11', // Estilo del mapa
    center: [-88.3094386, 18.5267782], // Coordenadas iniciales (longitud, latitud)
    zoom: 13 // Nivel de zoom
});
    }
    function cargarReporte() {
        cargarMapa()
 

        let idCamion = document.getElementById('descripcionView').textContent;

        console.log('Id del camión es ' + idCamion);

        $.ajax({
    url: 'http://localhost/API_SOJAL/consult_reportes.php',
    type: 'POST',
    data: { id: idCamion },
    dataType: 'json', // Especifica el tipo de datos esperado del servidor
    success: function (response) {
        if (response.length > 0) {
            let reporte = response[0]; // Accede al primer objeto del arreglo
            const creado = reporte.fechaCreacion; // Ejemplo: "2024-11-21 19:28:32"
            const fecha = creado.split(' ')[0]; // Obtiene "2024-11-21"
            $('#decripcionView').text(reporte.descripcion); 
            $('#referenciasView').text(reporte.referencias);
            $('#coloniaView').text(reporte.colonia);
            $('#calleView').text(reporte.calle);
            $('#cruzamientosView').text(reporte.cruzamientos);
            $('#numeroView').text(reporte.numCasa);
            $('#fechaView').text('Fecha de creación: '+fecha);

            if (reporte.estado == 2) {
              $('#asignar').css('display', 'flex');
              $('#avances').css('display', 'none');
            } else {
                $('#avances').css('display', 'flex');
                $('#asignar').css('display', 'none');
            }

            // Carga de imágenes
            let imagenes = JSON.parse(reporte.imagenes); // Convierte la cadena a un array
            let contentImg = $('#content-img');
            contentImg.empty(); // Limpia el contenedor antes de añadir nuevas imágenes

            imagenes.forEach(imagen => {
                let imgTag = `<img src="../package/image/report/${imagen}" alt="Imagen del reporte"  style="margin: 5px; max-width: 200px;">`;
                contentImg.append(imgTag);
            });
            const idUsuario = reporte.idUsuario;
            $.ajax({
                url: 'http://localhost/API_SOJAL/CRUD/users_crud.php',
                type: 'POST',
                data: { id: idUsuario, opcion: 2 },
                dataType: 'json', // Especifica el tipo de datos esperado del servidor
                success: function (result) {
                    // Asegúrate de que "result" tiene datos antes de intentar acceder
                    if (result.data && result.data.length > 0) {
                        const img = result.data[0].fotoPerfil; 
                        const nombre = result.data[0].nombre + ' '+ result.data[0].apellidoP + ' ' + result.data[0].apellidoM;
                        
                        $('#nombreView').text(nombre);
                        $('#profilePic').attr('src', '../package/image/photos/' + img);

                    }
                },
   
            });
        } else {
            console.warn('No se encontraron reportes en la respuesta.');
        }
    },
    error: function (xhr, status, error) {
        console.error('Error en la solicitud:', error);
    }
});
    }


    // Cerrar modal al hacer clic fuera de él
    window.addEventListener('click', (e) => {
        if (e.target === modalView) {
            modalView.style.display = 'none';
        }
    });
</script>
</body>
</html>
