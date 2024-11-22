<?php
require '../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$url = 'http://localhost/API_SOJAL/consult_users.php'; // Cambiar por la URL de tu API

try {
    $response = $client->request('GET', $url);
    $usuarios = json_decode($response->getBody(), true) ?? [];
} catch (Exception $e) {
    $usuarios = []; // En caso de error, define un array vacío
}
?>
