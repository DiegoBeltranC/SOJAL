<?php
  //Cargar sesion del usuario logueado
  session_start();
	if(!isset($_SESSION['autenticado'])){//Si no hay un usuario logueado, regresar al logueo**
    header("Location: ../index.php");

  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../images/icons-page/ruta.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Page.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map { height: 70%; width: 100%; z-index: 1; }
    </style>
    <title>Trayectos</title>
</head>
<body>
<?php include '../layouts/NavBar.php';?>
  <!-- Contenedor-->
  <div class="home-container">
    <!-- SideBar-->
   
    
    <!-- Contenido-->
    <div class="content">
    <h2>Agregar Ruta</h2>
    <div id="map"></div>
    </div>
    <?php include '../layouts/sidebar.php';?>
  
  </div>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.css" rel="stylesheet" />
  
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWxpc3RhcmRldiIsImEiOiJjbTFyOHlseXowOHRzMnhxMm9tdnBwcTR5In0.D5D_X4S6CB4FdAyeTIL0GQ';
        const map = L.map('map').setView([18.5267782, -88.3094386], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        let markers = [];
        let routeLayer;

        map.on('click', function(e) {
            const marker = L.marker(e.latlng).addTo(map);
            markers.push(e.latlng);
            if (markers.length > 1) {
                getRoute();
            }
        });

        async function getRoute() {
            const coordinates = markers.map(marker => `${marker.lng},${marker.lat}`).join(';');
            const url = `https://api.mapbox.com/directions/v5/mapbox/driving/${coordinates}?geometries=geojson&access_token=${mapboxgl.accessToken}`;
            const response = await fetch(url);
            const data = await response.json();
            const route = data.routes[0].geometry;

            if (routeLayer) {
                map.removeLayer(routeLayer);
            }

            routeLayer = L.geoJSON(route, {
                style: {
                    color: 'blue',
                    weight: 4
                }
            }).addTo(map);

            map.fitBounds(routeLayer.getBounds());
        }
    </script>
<script src="../js/ViewSideBar.js"></script>
</body>
</html>
