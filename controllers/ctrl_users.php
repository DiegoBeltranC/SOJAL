<?php
require '../vendor/autoload.php';
use GuzzleHttp\Client;

$opcion = $_POST['opcion'];
$id = $_POST['id'];

$client = new Client();

if ($opcion == 3) {
    delete($id);
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
