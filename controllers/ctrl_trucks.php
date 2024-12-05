<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

$opcion = $_POST['opcion'] ?? null;
$idCamion = $_POST['idCamion'] ?? null;
$images = $_FILES['fotos'] ?? null;
$placas = $_POST['placas'] ?? null;
$modelo = $_POST['modelo'] ?? null;
$ano = $_POST['ano'] ?? null;
$marca = $_POST['marca'] ?? null;
$estado = $_POST['estado'] ?? null;


if($opcion == 1) {

    add();
}

if($opcion == 2) {
    delate();
}


if($opcion == 4) {
    //actualizarImagenes();
    edit();
}


function add() {
    global $client, $opcion, $placas, $modelo, $ano, $marca, $estado;

    $response = $client->request('POST', 'http://localhost/API_SOJAL/CRUD/truck_crud.php', [
        'multipart' => [
            [
                'name'     => 'opcion',
                'contents' => $opcion,
            ],
            [
                'name'     => 'fotos',
                'contents' => savePictures(),
            ],
            [
                'name'     => 'placas',
                'contents' => $placas,
            ],
            [
                'name'     => 'modelo',
                'contents' => $modelo,
            ],
            [
                'name'     => 'ano',
                'contents' => $ano,
            ],
            [
                'name'     => 'marca',
                'contents' => $marca,
            ],
            [
                'name'     => 'estado',
                'contents' => $estado,
            ]
        ],
    ]);
    
    echo $response->getBody();

}

function edit() {
    
    global $client, $idCamion, $opcion, $placas, $modelo, $ano, $marca, $estado;
    
    $response = $client->request('POST', 'http://localhost/API_SOJAL/CRUD/truck_crud.php', [
        'multipart' => [
            [
                'name'     => 'idCamion',
                'contents' => $idCamion,
            ],
            [
                'name'     => 'opcion',
                'contents' => $opcion,
            ],
            [
                'name'     => 'fotos',
                'contents' => actualizarImagenes(),
            ],
            [
                'name'     => 'placas',
                'contents' => $placas,
            ],
            [
                'name'     => 'modelo',
                'contents' => $modelo,
            ],
            [
                'name'     => 'ano',
                'contents' => $ano,
            ],
            [
                'name'     => 'marca',
                'contents' => $marca,
            ],
            [
                'name'     => 'estado',
                'contents' => $estado,
            ]
        ],
    ]);
    
    echo $response->getBody();
}

function actualizarImagenes() {

    global $client, $idCamion, $opcion;
    $savedFiles = []; // Array para almacenar los nombres de los archivos guardados

    // Verificar si se han enviado imágenes
    if (isset($_FILES['fotos'])) {
        $imagenes = $_FILES['fotos'];

        // Crear el directorio de destino si no existe
        $directorio_destino = dirname(dirname(__FILE__)) . '/package/image/';
        if (!is_dir($directorio_destino)) {
            mkdir($directorio_destino, 0777, true);
        }

        // Procesar las imágenes recibidas
        foreach ($imagenes['tmp_name'] as $index => $tmp_name) {
            // Generar un nombre aleatorio para la imagen
            $nombre_imagen = bin2hex(random_bytes(8)) . '.jpg'; // Nombre aleatorio

            // Ruta de destino para guardar la imagen
            $ruta_destino = $directorio_destino . $nombre_imagen;

            // Mover el archivo al directorio de destino
            if (move_uploaded_file($tmp_name, $ruta_destino)) {
               // echo "Imagen {$nombre_imagen} cargada con éxito en {$ruta_destino}<br>";
                // Agregar el nombre del archivo al array
                $savedFiles[] = $nombre_imagen;
            } else {
                echo "Error al cargar la imagen {$nombre_imagen}.<br>";
            }
        }
    } else {
        echo "No se han recibido imágenes.";
    }
    $response = $client->request('POST', "http://localhost/API_SOJAL/CRUD/truck_crud.php", [
        'multipart' => [
            [
                'name'     => 'idCamion',
                'contents' => $idCamion,
            ],
            [
                'name'     => 'opcion',
                'contents' => 3,
            ]
        ] 
    ]);
    
    // Obtener el cuerpo de la respuesta y decodificarlo como un array
    $data = json_decode($response->getBody(), true);

    // Decodificar la propiedad 'fotos' que es una cadena JSON
    $fotosJson = $data['data']['fotos'];
    
    // Decodificar nuevamente la propiedad 'fotos' en un array PHP
    $fotosArray = json_decode($fotosJson, true);
    
    $directorio_destino = dirname(dirname(__FILE__)) . '/package/image/';

    foreach ($fotosArray as $foto) {
        $ruta_imagen = $directorio_destino . $foto;
    
        // Verificar si la imagen existe antes de intentar eliminarla
        if (file_exists($ruta_imagen)) {
            // Intentar eliminar la imagen
            if (unlink($ruta_imagen)) {

            }
            } else {
                echo "<script>console.log('Error al eliminar la imagen: " . $foto . "');</script>";
            }
        } 

        $jsonFiles = json_encode($savedFiles);
    

        // Devolver el JSON con los nombres de los archivos
        return $jsonFiles;
    }
    // Convertir el array de archivos guardados a JSON



function savePictures(){
    global $images, $opcion;
    $totalFiles = count($images['name']);
    $savedFiles = [];
    $uploadDir = dirname(dirname(__FILE__)) . "/package/image/";

    for ($i = 0; $i < $totalFiles; $i++) {
        if ($images['error'][$i] === UPLOAD_ERR_OK) {
            $tmpName = $images['tmp_name'][$i];
            $fileName = uniqid() . '-' . basename($images['name'][$i]);
            $destination = $uploadDir . $fileName;

            if (move_uploaded_file($tmpName, $destination)) {
                $savedFiles[] = $fileName; 
            } else {
                echo "Error al mover el archivo: " . $images['name'][$i] . "<br>";
            }
        } else {
            echo "Error al subir la imagen: " . $images['name'][$i] . "<br>";
        }
    }

    $jsonFiles = json_encode($savedFiles);
    return $jsonFiles;
}

function delate() {
    global $client, $opcion, $idCamion;
    $response = $client->request('POST', 'http://localhost/API_SOJAL/CRUD/truck_crud.php', [
        'multipart' => [
            [
                'name'     => 'opcion',
                'contents' => $opcion,
            ],
            [
                'name'     => 'idCamion',
                'contents' => $idCamion,
            ],
        ],
    ]);
    
    echo $response->getBody();
}

?>