<?php
session_start();

$admin = 'admin@gmail.com';
$contraseña_admin = '1234';

$alumno = 'alumno@gmail.com';
$contraseña_alumno = '1234';

$trabajador = 'trabajador@gmail.com';
$contraseña_trabajador = '1234';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['gmail'];
    $contraseña = $_POST['password'];

    if ($usuario === $admin && $contraseña === $contraseña_admin) {
        $_SESSION['usuario'] = $usuario;
        header('Location: ../views/estadisticas.php');
        exit;
    } else if($usuario === $alumno && $contraseña === $contraseña_alumno) {
            $_SESSION['usuario'] = $usuario;
            header('Location: ../views/informes.php');
            exit;
    } else if ($usuario === $trabajador && $contraseña === $contraseña_trabajador) {
            $_SESSION['usuario'] = $usuario;
            header('Location: ../views/usuarios.php');
            exit;
     }
}
?>
