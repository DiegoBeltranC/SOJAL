<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./modals_css/modal_form_report.css">
</head>
<body>


    <div class="nav">
        <div class="user-container">
            <div class="user-icon-container"><img src="../icons/profile.jpg" alt=""></div>
            <div class="user-name-container">
                <p>Jonathan Cherriz Solis</p>
            </div>
        </div>
        <div class="log-out-container">
            <button id="log-out">Cerrar Session</button>
        </div>
    </div>

    <div class="main-container">
        <div class="options-container">
            <a href="./views/historial_reportes.php">
                <div class="option-user">
                    <h2>Reportes Asignados</h2>
                    <div class="option-img-container">
                        <img src="../Icons/101671.png" alt="">
                    </div>
                </div>
            </a>

  
            <a href="./views/info_usuario.php">
            <div class="option-user">
                <h2>Usuario</h2>
                <div class="option-img-container">
                    <img src="../Icons/profile.jpg" alt="">
                </div>
            </div>
            </a>
        </div>
        <div class="map-container">
    
            <iframe class="map-img-container" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d60527.24775793153!2d-88.3549105079047!3d18.53102661939893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x8f5ba5ab475175c3%3A0x556ce78c2c7ad105!2sLas%20Am%C3%A9ricas%20III%2C%20Avenida%20Maria%20Cristina%20Sangri%20Aguilar%2C%20Chetumal%2C%20Q.R.!3m2!1d18.5626158!2d-88.2813764!4m5!1s0x8f5bbda5c1c31125%3A0xb3f65d9f0d46ff6b!2sUniversidad%20Tecnol%C3%B3gica%20de%20Chetumal%2C%20Acceso%20Universidad%20Tecnol%C3%B3gica%20de%20Chetumal%2C%2077040%20Q.R.!3m2!1d18.5018469!2d-88.3473166!5e0!3m2!1ses!2smx!4v1721361719617!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
        </div>

    </div>
<script src="./js/script.js"></script>
</body>
</html>