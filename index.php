<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOJAL</title>
    <link rel="icon" href="./images/logo.ico" />
    <link rel="stylesheet" href="./css/navbar.css" />
    <style>
        body {
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        }

        /* Estilos básicos para los contenedores */
        .contenedor-principal {
            display: flex; 
            justify-content: space-between; 
            align-items: flex-start;
        }

        .contenedor-inf h1 {
            font-size: 2.5rem;
        }

        .contenedor-inf, .img {
            flex: 1; 
            margin: 10px; 
        }

        p {
            font-size: 1.5rem;
        }

        .contenedor-inf {
            padding: 6rem; /* Espaciado interno */
        }

        .img {
            display: flex; 
            justify-content: center; 
            align-items: center;
        }

        .img img {
            width: 35rem;
        }

        @media (max-width: 700px) { 
            .img img {
                display: none;
            }

            .contenedor-principal {
                display: block; 
            }
            p {
            font-size: 1.3rem;
            }

            .contenedor-inf {
              text-align: justify;
            padding: 1.5rem; /* Espaciado interno */
            }
            .contenedor-inf h1 {
            font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <?php include './components/viewLogin.php'; ?>
    <?php include './layouts/startnavbar.php'; ?>

    <div class="contenedor-principal">
        <div class="contenedor-inf">
            <h1>¿Qué es SOJAL?</h1>
            <p>Sojal es un innovador proyecto diseñado para abordar la problemática de la acumulación de basura en la ciudad de Chetumal. En respuesta a la creciente cantidad de residuos sólidos que afectan tanto la imagen urbana como la salud de los habitantes, Sojal propone una solución tecnológica a través de una aplicación móvil, donde los ciudadanos podrán notificar el gobierno para que acudan a solucionar el problema con ayuda con los trabajadores de la basura.</p>
        </div>
        <div class="img">
            <img src="./images/logo.png" alt="Imagen descriptiva">
        </div>
    </div>

    <!-- <div id="overlay"></div> -->

</body>
</html>
