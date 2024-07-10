<?php
$nombre="";
$apellidoP="";
$apellidoMat="";
$curp="";
$ActaN="";
$rfc="";


if(isset($_POST['txtNombre']))
$nombre = $_POST['txtNombre'];
if(isset($_POST['txtApellido']))
$apellidoP = $_POST['txtApellido'];
if(isset($_POST['txtApellidoM']))
$apellidoMat = $_POST['txtApellidoM'];
if(isset($_POST['txtCurp']))
$curp = $_POST['txtCurp'];
if(isset($_POST['txtActa']))
$ActaN = $_POST['txtActa'];
if(isset($_POST['txtRFC']))
$rfc = $_POST['txtRFC'];

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Procesamiento de datos con POST</title>
<link rel="icon" type="image/png" href="images/html5icon.png">
</head>
<body>
<h3>Procesamiento de datos recibidos de un reporte con método
Post</h3>
<?php
echo "El nombre del Administrador es: " . $nombre . "<br>";
echo "El apellido paterno del Administrador es: " . $apellidoP . "<br>";
echo "El apellido materno del Administrador es: " . $apellidoMat . "<br>";
echo "La CURP del Administrador: " . $curp . "<br>";
echo "El acta del Administrador es esta: " . $ActaN . "<br>";
echo "El RFC del Administrador es el siguiente : " . $rfc . "<br>";
?>