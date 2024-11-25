<?php

require '../vendor/autoload.php';
use GuzzleHttp\Client;

$correo = $_POST['correo'];
$password = $_POST['password'];


$client = new Client();

$response = $client->request('POST', 'http://localhost/API_SOJAL/consult_login.php', [
    'multipart' => [
        [
            'name'     => 'correo',
            'contents' => $correo,
        ],
        [
            'name'     => 'password',
            'contents' => $password,
        ],
    ],
]);


$json = $response->getBody();
$session = json_decode($json, true);


if ($session['success'] === true) {
    session_start();
    $_SESSION['autenticado'] = true;
    $_SESSION['usuario'] = $session['usuario'];
    $_SESSION['correo'] = $session['correo'];
    $_SESSION['perfil'] = $session['foto'];
    echo true;
} else {
    echo false;
}
?>
