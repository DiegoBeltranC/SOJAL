<?php
  session_start();
	if(isset($_SESSION['autenticado']) && $_SESSION['autenticado'] === 1){
    header("Location: ../index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icons-page/Evaluar.png" />
    <link rel="stylesheet" href="../css/Page.css">
    <title>Evaluar Informes</title>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.css' rel='stylesheet' />
    <style>
        #map {
            width: 100%;
            height: 500px; /* Ajusta la altura según lo necesites */
        }
    </style>
</head>
<body>
<?php include '../layouts/NavBar.php';?>
<div class="home-container">
    <!-- SideBar-->
<?php include '../layouts/sidebar.php';?>
    
    <!-- Contenido-->
    <div class="content">
    <h2>EVALUAR INFORMES</h2>
    <div id="map"></div>

    </div>

</div>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.js"></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWxpc3RhcmRldiIsImEiOiJjbTFyOHlseXowOHRzMnhxMm9tdnBwcTR5In0.D5D_X4S6CB4FdAyeTIL0GQ';
        
        const map = new mapboxgl.Map({
            container: 'map', // ID del contenedor
            style: 'mapbox://styles/mapbox/streets-v11', // Estilo del mapa
            center: [-88.3094386, 18.5267782], // Coordenadas iniciales (longitud, latitud)
            zoom: 13 // Nivel de zoom
        });

        // Función para obtener las ubicaciones de la API
        fetch('http://localhost/API_SOJAL/consult_reportes.php') // Reemplaza con tu endpoint
            .then(response => response.json())
            .then(data => {
                data.forEach(location => {
                    const lngLat = [location.longitud, location.latitud];
                    addMarker(lngLat, location.name);
                });
            })
            .catch(error => console.error('Error al cargar las ubicaciones:', error));

        function addMarker(lngLat, name) {
            new mapboxgl.Marker()
                .setLngLat(lngLat)
                .setPopup(new mapboxgl.Popup().setText(name)) // Popup con el nombre
                .addTo(map);
        }
    </script>
    <script src="../js/ViewSideBar.js"></script>
</body>
</html>