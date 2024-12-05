<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Camión</title>
    <link rel="stylesheet" href="../components/forms/FormStyles.css">

    <style>
    
        #map1 { height: 16rem;width: 100%;}


        .custom-row {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            /* Espacio entre los select */
        }

        .custom-group {
            flex: 1;
            /* Hace que los select ocupen el mismo espacio */
            min-width: 180px;
            /* Puedes ajustar el tamaño mínimo */
        }

        .custom-group select {
            width: 100%;
            /* Asegura que los select llenen el espacio */
        }

        .modal-content {

            max-width: 650px;
            height: 70%;


        }

        .profile-container {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            max-width: 100%;
        }

        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 2px solid #ccc;
        }

        .profile-info {
            display: flex;
            flex-direction: column;
        }

        .profile-name {
            font-size: 16px;
            font-weight: bold;
            margin: 0;
            color: #333;
        }

        .profile-date {
            font-size: 14px;
            color: #666;
            margin: 5px 0 0 0;
        }
    </style>
</head>


<body>

<!-- Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span id="closeModalBtn" class="close-btn">&times;</span>
        <h2>Nueva Asignación</h2>
        <form id="CamionForm">
            <div class="custom-row">
                <div class="custom-group">
                    <label for="trabajador">Trabajadores</label>
                    <select id="trabajador" class="custom-select"></select>
                </div>

                <div class="custom-group">
                    <label for="camion">Camiones</label>
                    <select id="camion" class="custom-select"></select>
                </div>

                <div class="custom-group">
                    <label for="ruta">Rutas</label>
                    <select id="ruta" class="custom-select"></select>
                </div>
            </div>

            <div class="profile-container"> 
                <img src="http://via.placeholder.com/50" alt="Foto de perfil" class="profile-pic" id="profilePic">
                <div class="profile-info">
                    <p class="profile-name" id="nombreView">Nombre del trabajador</p>
                    <p class="profile-date" id="telefonoView">Teléfono:</p>
                </div>
            </div>

            <div id="map1" ></div>

            <button type="button" onclick="add()" class="register">Registrar</button>
        </form>
    </div>
</div>

    <?php include '../components/cargando.php';?>
  

<script>


</script>

</body>

</html>