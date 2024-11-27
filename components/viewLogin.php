<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/ViewLogin.css" />
    <link rel="stylesheet" href="./css/sweetalert2.min.css" />
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/sweetalert2.all.js"></script>

</head>
<body>
<div class="body">
    <div id="loginForm">
        <form id="formsesion" class="formulario" method="post">
            <div class="container">
                <a id="btnCancelar"><img src="./images/cancelar.png" width="6%" alt="Cancelar"></a>
            </div>
            <h1 class="titulo">Hola, Bienvenido!</h1>
            <hr class="hr-login">
            <label class="label" for="gmail">Correo:</label><br>
            <input 
                type="email" 
                id="gmail" 
                name="correo" 
                placeholder="ejemplo@gmail.com" 
                required 
                pattern="^[a-zA-Z0-9._%+-]+@gmail\.com$"
                title="Introduce un correo de Gmail válido"><br><br>
            <label class="label" for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <label class="checkbox-container">
                <input type="checkbox" id="ViewPassword">
                <span class="checkbox-custom"></span>
                Mostrar Contraseña
            </label><br><br>

            <button type="submit" id="entrarSistema">Iniciar Sesión</button>
            <a class="RecoverPassword" href="/sojal/views/RecoverPassword/ViewRecoverPassword.html">Olvide mi contraseña</a>
        </form>
    </div>
</div>
<?php include 'components/cargando.php';?>


<script src="js/login.js" ></script>

</body>
</html>
