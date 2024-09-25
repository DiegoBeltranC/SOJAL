<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/ViewLogin.css" />
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
                name="gmail" 
                placeholder="ejemplo@gmail.com" 
                required 
                pattern="^[a-zA-Z0-9._%+-]+@gmail\.com$" 
                title="Introduce un correo de Gmail válido"><br><br>
            <label class="label" for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" placeholder="Contraseña" required><br><br>
            <label class="checkbox-container">
                <input type="checkbox" id="ViewPassword">
                <span class="checkbox-custom"></span>
                Mostrar Contraseña
            </label><br><br>

            <button type="submit" id="entrarSistema">Iniciar Sesión</button>
            <a class="RecoverPassword" href="/sojal/views/RecoverPassword/ViewRecoverPassword.php">Olvide mi contraseña</a>
        </form>
    </div>
</div>
<script>
    // JavaScript para manejar el evento de clic en el botón de cancelar
    document.getElementById('btnCancelar').addEventListener('click', function() {
        var div = document.querySelector('.body');
        div.style.display = 'none';
    });
</script>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/login.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
</body>
</html>
