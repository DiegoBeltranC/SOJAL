<?php
session_start();

$usuario_correcto = 'admin';
$contraseña_correcta = '1234';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['username'];
    $contraseña = $_POST['password'];

    if ($usuario === $usuario_correcto && $contraseña === $contraseña_correcta) {
        $_SESSION['usuario'] = $usuario;
        header('Location: ./VISTAS/inicio.php');
        exit;
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}
?>
