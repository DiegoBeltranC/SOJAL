<?php

require '../vendor/autoload.php';
require 'ctrl_password.php';
use GuzzleHttp\Client;

$opcion = $_POST['opcion'];
$id = $_POST['id'] ?? null;
$idRol = $_POST['rol'] ?? null;
$fotoAnterior = $_POST['imagenAnterior'] ?? null;
$fotoPerfil = basename($_FILES['image']['name']) ?? null;
$nombre = $_POST['nombre'] ?? null;
$apellidoP = $_POST['apellidoP'] ?? null;
$apellidoM = $_POST['apellidoM'] ?? null;
$fechaNacimiento = $_POST['fechaNacimiento'] ?? null;
$telefono = $_POST['telefono'] ?? null;
$correo = $_POST['correo'] ?? null;

$RFC = $_POST['rfc'] ?? null;
$CURP = $_POST['curp'] ?? null;


$client = new Client();

if($opcion == 1) {

    add();
}

if ($opcion == 3) {
    delete($id);
}


if($opcion == 4) {

  echo subirImagen();
}

if($opcion == 5) {
    actualizar();
}

if($opcion == 6) {
    actualizarUsuario();
}


function add() {
    global $client, $opcion,  $idRol, $fotoPerfil, $nombre, $apellidoP, $apellidoM, $fechaNacimiento, $telefono, $correo, $RFC, $CURP;

    $response = $client->request('POST', 'http://localhost/API_SOJAL/CRUD/users_crud.php', [
        'multipart' => [
            [
                'name'     => 'opcion',
                'contents' => $opcion,
            ],
            [
                'name'     => 'idRol',
                'contents' => $idRol,
            ],
            [
                'name'     => 'image',
                'contents' =>  subirImagen(),
            ],
            [
                'name'     => 'nombre',
                'contents' => $nombre,
            ],
            [
                'name'     => 'apellidoP',
                'contents' => $apellidoP,
            ],
            [
                'name'     => 'apellidoM',
                'contents' => $apellidoM,
            ],
            [
                'name'     => 'fechaNacimiento',
                'contents' => $fechaNacimiento,
            ],
            [
                'name'     => 'telefono',
                'contents' => $telefono,
            ],
            [
                'name'     => 'correo',
                'contents' => $correo,
            ],
            [
                'name'     => 'password',
                'contents' =>  EnviarPassword($correo),
            ],
            [
                'name'     => 'rfc',
                'contents' => $RFC,
            ],
            [
                'name'     => 'curp',
                'contents' => $CURP,
            ],
        ],
    ]);
    
    echo $response->getBody();

}
function subirImagen() {
    // Obtener el nombre del archivo y la ruta temporal
    $file = $_FILES["image"]["name"];
    $url_temp = $_FILES["image"]["tmp_name"];
    
    // Ruta donde se guardará el archivo
    $url_insert = dirname(dirname(__FILE__)) . "/package/image/photos";  // Ruta correcta para la carpeta

    // Asegúrate de que la carpeta existe, si no, crearla
    if (!file_exists($url_insert)) {
        mkdir($url_insert, 0777, true); // Crea la carpeta con permisos adecuados
    }

    // Ruta completa del archivo de destino
    $url_target = $url_insert . '/' . $file;

    // Intentar mover el archivo
    if (move_uploaded_file($url_temp, $url_target)) {
        // Si el archivo se movió correctamente
        return $file;
    } else {
        // Si hubo un error al mover el archivo
        return 'Userdefault.png';
    }
}

function actualizarImagen($fotoAnterior) {

    $url_insert = dirname(dirname(__FILE__)) . "/package/image/photos";

    // Verificar si hay un archivo de imagen en la solicitud
    if ($_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {

        // Ruta completa de la imagen anterior
        $ruta_foto_anterior = $url_insert . '/' . $fotoAnterior;

        // Verificar si el archivo existe y eliminarlo
        if (file_exists($ruta_foto_anterior) && is_file($ruta_foto_anterior)) {
            unlink($ruta_foto_anterior); // Eliminar la imagen anterior
        }

        // Obtener el nombre del archivo y la ruta temporal
        $file = $_FILES["image"]["name"];
        $url_temp = $_FILES["image"]["tmp_name"];

        // Ruta donde se guardará el archivo
        $url_target = $url_insert . '/' . $file;

        // Intentar mover el archivo
        if (move_uploaded_file($url_temp, $url_target)) {
            // Si el archivo se movió correctamente, devolver el nuevo nombre
            return $file;
        } else {
            // Si hubo un error al mover el archivo, devolver una imagen por defecto
            return 'Userdefault.png';
        }
    } else {
        // Si no se seleccionó un archivo, devolver la imagen anterior sin cambios
        return $fotoAnterior;
    }
}


function delete($idUsuario) {
    global $client, $opcion;
    $response = $client->request('POST', 'http://localhost/API_SOJAL/CRUD/users_crud.php', [
        'multipart' => [
            [
                'name'     => 'opcion',
                'contents' => $opcion,
            ],
            [
                'name'     => 'id',
                'contents' => $idUsuario,
            ],
        ],
    ]);
    
    echo $response->getBody();
}
function actualizar() {
    global $client, $opcion,$id,$fotoAnterior,  $idRol, $fotoPerfil, $nombre, $apellidoP, $apellidoM, $fechaNacimiento, $telefono, $correo, $RFC, $CURP;
    $response = $client->request('POST', 'http://localhost/API_SOJAL/CRUD/users_crud.php', [
        'multipart' => [
            [
                'name'     => 'opcion',
                'contents' => $opcion,
            ],
            [
                'name'     => 'id',
                'contents' =>  $id,
            ],
            [
                'name'     => 'image',
                'contents' =>  actualizarImagen($fotoAnterior),
            ],
            [
                'name'     => 'nombre',
                'contents' => $nombre,
            ],
            [
                'name'     => 'apellidoP',
                'contents' => $apellidoP,
            ],
            [
                'name'     => 'apellidoM',
                'contents' => $apellidoM,
            ],
            [
                'name'     => 'fechaNacimiento',
                'contents' => $fechaNacimiento,
            ],
            [
                'name'     => 'telefono',
                'contents' => $telefono,
            ],
            [
                'name'     => 'correo',
                'contents' => $correo,
            ],
            [
                'name'     => 'rfc',
                'contents' => $RFC,
            ],
            [
                'name'     => 'curp',
                'contents' => $CURP,
            ],
        ],
    ]);
    
    echo $response->getBody();
}

function actualizarUsuario() {
    global $client, $opcion,$id,$fotoAnterior,  $idRol, $fotoPerfil, $nombre, $apellidoP, $apellidoM, $fechaNacimiento, $telefono, $correo, $RFC, $CURP;
    $response = $client->request('POST', 'http://localhost/API_SOJAL/CRUD/users_crud.php', [
        'multipart' => [
            [
                'name'     => 'opcion',
                'contents' => $opcion,
            ],
            [
                'name'     => 'id',
                'contents' =>  $id,
            ],
            [
                'name'     => 'image',
                'contents' =>  actualizarImagen($fotoAnterior),
            ],
            [
                'name'     => 'nombre',
                'contents' => $nombre,
            ],
            [
                'name'     => 'apellidoP',
                'contents' => $apellidoP,
            ],
            [
                'name'     => 'apellidoM',
                'contents' => $apellidoM,
            ],
            [
                'name'     => 'fechaNacimiento',
                'contents' => $fechaNacimiento,
            ],
            [
                'name'     => 'telefono',
                'contents' => $telefono,
            ],
            [
                'name'     => 'correo',
                'contents' => $correo,
            ],
            [
                'name'     => 'rfc',
                'contents' => $RFC,
            ],
            [
                'name'     => 'curp',
                'contents' => $CURP,
            ],
        ],
    ]);
    
    echo $response->getBody();
}


?>
