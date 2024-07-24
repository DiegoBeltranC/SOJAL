<?php
session_start();

$usuario_correcto = 'admin@gmail.com';
$contraseña_correcta = '1234';

$usuario_correctoCiudadano = 'ciudadano@gmail.com';
$contraseña_correctoCiudadano = '123';

$usuario_correctoTrabajador = 'trabajador@gmail.com';
$contraseña_correctoTrabajador = '321';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['gmail'];
    $contraseña = $_POST['password'];

    if ($usuario === $usuario_correcto && $contraseña === $contraseña_correcta) {
        $_SESSION['usuario'] = $usuario;
        header('Location: ../views/estadisticas.php');
        exit;
    }elseif ($usuario === $usuario_correctoCiudadano && $contraseña === $contraseña_correctoCiudadano) {
        header('Location: ../Ciudadanos/usuario_index.php');
        exit;
    }elseif ($usuario === $usuario_correctoTrabajador && $contraseña === $contraseña_correctoTrabajador) {
        header('Location: ../Trabajador/trabajador_index.php');
        exit;
    }
}
?>
