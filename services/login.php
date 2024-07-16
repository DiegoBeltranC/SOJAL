<?php
session_start();

$usuario_correcto = 'admin@gmail.com';
$contraseña_correcta = '1234';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['gmail'];
    $contraseña = $_POST['password'];

    if ($usuario === $usuario_correcto && $contraseña === $contraseña_correcta) {
        $_SESSION['usuario'] = $usuario;
        header('Location: ../views/estadisticas.php');
        exit;
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}
?>
