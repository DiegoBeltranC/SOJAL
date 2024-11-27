<?php

require '../vendor/autoload.php';
require 'ctrl_password.php';
use GuzzleHttp\Client;

$opcion = $_POST['opcion'];
$id = $_POST['id'];
$idRol = $_POST['rol'];
$fotoPerfil = basename($_FILES['image']['name']);
$nombre = $_POST['nombre'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$RFC = $_POST['rfc'];
$CURP = $_POST['curp'];


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
    $url_insert = dirname(dirname(__FILE__)) . "/package/image/photos";
    $url_target = str_replace('\\', '/', $url_insert) . '/' . $file;

    // Crear la carpeta si no existe
    if (!file_exists($url_insert)) {
        mkdir($url_insert, 0777, true); 
    }

  
    if (move_uploaded_file($url_temp, $url_target)) {
        // Si el archivo se movió correctamente
        return $file;
    } else {
        // Si hubo un error al mover el archivo
        return 'Userdefault.png';
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



?>
