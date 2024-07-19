<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/noticias.css">
</head>
<body>
<div class="nav">
        <div class="user-container">
            <a href="../trabajador_index.php">
                <div class="user-icon-container"><img src="../../Icons/back_icon.png" alt=""></div>
            </a>

        </div>
        <div class="log-out-container">
            <button id="log-out">Cerrar Session</button>
        </div>
    </div>

<div class="contenedor">
    <div class="header">
        <img src="../../Icons/profile.jpg" alt="Foto de Juan Pérez Martínez">
        <h1>Juan Pérez Martínez</h1>
    </div>

    <div class="contact-info">
        <p><strong>Dirección:</strong></p>
        <p>Colonia: El Rosal</p>
        <p>Código Postal: 12345</p>
        <p>Calle: Avenida Primavera</p>
        <p>Número de Casa: 123</p>
    </div>
    </div>
</body>
</html>

<style >
        .contenedor {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .contact-info {
            margin-bottom: 20px;
        }
        .contact-info p {
            margin: 5px 0;
        }
</style>