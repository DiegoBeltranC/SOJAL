<?php
  session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/PageNavBar.css">
    <link rel="stylesheet" href="../css/buttons.css">
</head>
<body>
    <div class="navbar-content">
    <img class="menu-icon" src="../images/Icons/menu.png" alt="Menu Icon" id="menu-toggle"/>
    <img class="logo" src="../images/Icons/logo.png" alt="Logo"/>
    <h2 class="title">SOJAL</h2>
    <img class="notification" src="../images/Icons/notification.svg" alt="Perfil" id="notification"/>
    <img class="photo" src="<?=  $_SESSION['perfil']; ?>" alt="Perfil" id="photo"/>
    </div>

    <div class="profile-content">
        <img class="photo-profile" src="<?= $_SESSION['perfil']; ?>" alt="Perfil"/>
        <div class="content-info">
        <strong><?= $_SESSION['usuario']; ?></strong>
        <p><?= $_SESSION['correo']; ?></p>
        <hr>
        </div>
        
        <a href="ViewSettings.php" class="enlace-button"> <button class="settings">Configuración</button> </a>
           <a href="../controllers/logout.php" class="enlace-button">

        <button class="button-red">Cerrar sesión</button>
        </a>
    </div>
</body>
</html>