const modal = document.getElementById('modal');

window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});

function nuevaRuta() {
    modal.style.display = 'flex';
    cargarMapa();

    const add = document.getElementById('addRuta');
    add.addEventListener('click', () => {
        if (points.length > 0) {
            // Convertir los puntos a JSON y codificarlos
            const urlEncodedPoints = encodeURIComponent(JSON.stringify(points));

            const nombre = document.getElementById('nombre').value;  // Obtener el valor del nombre de la ruta
            const color = document.getElementById('color').value;

            fetch('http://localhost/API_SOJAL/CRUD/rutas_crud.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `points=${urlEncodedPoints}&opcion=1&nombre=${nombre}&color=${color}`
            })
                .then(response => response.json())
                .then(data => {
               
                    document.getElementById('nombre').value = '';  // Vaciar el valor del campo 'nombre'
                    document.getElementById('color').value = '#ff0000';  // Vaciar el valor del campo 'color'

                    if (data == 1) {
                        modal.style.display = 'none';
                        loadRoutes()
                        if (mapAdd) {
                            mapAdd.remove(); // Elimina el mapa existente
                        }
           
                      
                        Swal.fire({
                            title: '¡Éxito!',
                            text: 'La ruta se registró correctamente.',
                            icon: 'success',
                            confirmButtonText: 'Aceptar'
                        });
                        
                 
                       
                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: 'Hubo un problema al registrar la ruta.',
                            icon: 'error',
                            confirmButtonText: 'Intentar de nuevo'
                        });
                    }
                })
                .catch(error => {
                    console.error('Error al enviar los puntos:', error);
                });
        } else {
            console.log('No hay puntos para enviar');
        }
    });


}

$(document).ready(function () {

    loadRoutes()


});

mapboxgl.accessToken = 'pk.eyJ1IjoiYWxpc3RhcmRldiIsImEiOiJjbTFyOHlseXowOHRzMnhxMm9tdnBwcTR5In0.D5D_X4S6CB4FdAyeTIL0GQ';




const map = L.map('map').setView([18.5267782, -88.3094386], 13);



L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
}).addTo(map);

function loadRoutes() {
    const data = new URLSearchParams();


    data.append('opcion', 2); // Añadir el valor de la opción


    fetch('http://localhost/API_SOJAL/CRUD/rutas_crud.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: data.toString() // Enviar los datos como formulario
    })
        .then(response => response.json())
        .then(rutas => {
            console.log(rutas); // Mostrar los datos que recibes

            // Si el mapa no está creado, inicialízalo
            if (!map) {
                map = L.map('map').setView([18.5267782, -88.3094386], 13);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                }).addTo(map);
            }

            // Iterar sobre las rutas y trazar cada una en el mapa
            rutas.forEach(routeData => {
                const points = JSON.parse(routeData.puntos); // Decodificar los puntos de cada ruta
                const color = routeData.color || 'red'; // Usar el color de la base de datos o un valor por defecto

                // Trazar la ruta en el mapa con el color de la base de datos
                const polyline = L.polyline(points, { color: color }).addTo(map);

                // Agregar marcadores en el primer y último punto de la ruta
                L.marker(points[0]).addTo(map).bindPopup("Inicio de la ruta");
                L.marker(points[points.length - 1]).addTo(map).bindPopup("Fin de la ruta");
            });
        })
        .catch(error => {
            console.error('Error al cargar las rutas:', error);
        });
}



let points = [];
let markers = [];

let mapAdd;
function cargarMapa() {
 
    mapAdd = L.map('mapAdd').setView([18.5267782, -88.3094386], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(mapAdd);



    // Arreglos para almacenar puntos y marcadores


    let route = L.polyline([], { color: 'red' }).addTo(mapAdd);

    // Evento de clic en el mapa para agregar puntos
    mapAdd.on('click', (e) => {
        const { lat, lng } = e.latlng;

        // Agregar el punto al array
        points.push([lat, lng]);

        // Solo agregar íconos al primer y último punto
        if (points.length === 1) {
            // Agregar un marcador en el primer punto
            const firstMarker = L.marker([lat, lng]).addTo(mapAdd)
                .bindPopup(`Inicio: [${lat.toFixed(5)}, ${lng.toFixed(5)}]`)
                .openPopup();
            markers.push(firstMarker);
        } else if (points.length > 1) {
            // Si el punto anterior no es el primer punto, eliminar el marcador del último punto
            if (points.length > 2 || (points.length === 2 && markers.length > 1)) {
                const lastMarker = markers[markers.length - 1];
                mapAdd.removeLayer(lastMarker);
            }

            // Agregar un marcador en el último punto
            const lastPoint = points[points.length - 1];
            const newLastMarker = L.marker(lastPoint).addTo(mapAdd)
                .bindPopup(`Último punto: [${lat.toFixed(5)}, ${lng.toFixed(5)}]`)
                .openPopup();
            markers.push(newLastMarker);
        }

        // Actualizar la polyline
        route.setLatLngs(points);

        // Imprimir los puntos en la consola
        console.log('Puntos actuales:', points);
    });

    // Botón para eliminar el último punto
    const deletePointButton = document.getElementById('deletePoint');

    deletePointButton.addEventListener('click', () => {
        if (points.length > 0) {
            // Eliminar el último punto del array
            points.pop();

            // Verificar si no es el primer punto y eliminar el último marcador si no es el primero
            if (points.length > 1) {
                // Eliminar el marcador del último punto si el punto anterior no es el primero
                const lastMarker = markers.pop();
                mapAdd.removeLayer(lastMarker);
            } else if (points.length === 1) {
                // Si solo queda el primer punto, no eliminar su marcador
                const firstPoint = points[0];
                if (markers.length === 1) {
                    markers[0].setLatLng(firstPoint); // Actualiza la posición del primer marcador
                }
            }

            // Actualizar la polyline
            route.setLatLngs(points);

            // Deshabilitar el botón si ya no hay puntos
            if (points.length === 0) {
                deletePointButton.disabled = true;
            }

            // Imprimir los puntos actualizados en la consola
            console.log('Puntos actuales después de eliminar:', points);
        }
    });
}