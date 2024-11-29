<!DOCTYPE html>
<html lang="es-MX">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOJAL</title>
    <link rel="icon" href="./images/logo.ico" />
    <link rel="stylesheet" href="../css/navbar.css" />

  </head>
  <body>

    <nav>
      <div class="left">
        <img src="./images/Icons/logo.png" alt="sojal.ico" />
        <h2>SOJAL</h2>
        <a href="#inicio">Inicio</a>
        <a href="#quienesSomos">¿Quiénes somos?</a>
        <a href="#descargarApp">Descargar App</a>

      </div>
      <div class="right">
        <input id="btnFormulario" type="button" value="Iniciar Sesión">
      </div>
    </nav>

    <script>
        // JavaScript para manejar el evento de clic en el botón de cancelar
        document.getElementById('btnFormulario').addEventListener('click', function() {
            let div = document.querySelector('.body');
            document.querySelector('.body').style.display = 'block';
            div.classList.add('animated'); 
        });
    </script>

  </body>
</html>
