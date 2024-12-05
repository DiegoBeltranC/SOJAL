<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Camión</title>
    <link rel="stylesheet" href="../components/edit/FormEditStyles.css">
</head>

<body>

    <!-- Modal -->
    <div id="modalEdit" class="modal">
        <div class="modal-content">
            <span id="closeModalBtnEdit" class="close-btn">&times;</span>
            <h2>Editar Camión</h2>
            <form id="CamionFormEdit" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Foto del camión:</label>
        <input type="file" id="imageUploadEdit" accept="image/*" multiple>
    </div>


    <!-- Contenedor para mostrar las imágenes precargadas -->
    <div id="fotosCamionEdit" class="preview-container">
        <!-- Aquí se pueden agregar imágenes precargadas -->
    </div>

    <div class="form-group">
        <label for="name">Placas:</label>
        <input type="text" id="placasEdit" name="placas" required>
    </div>
    <div class="form-group">
        <label for="name">Modelo:</label>
        <input type="text" id="modeloEdit" name="modelo" required>
    </div>
    <div class="form-group">
        <label for="name">Año:</label>
        <input type="text" id="anoEdit" name="ano" required>
    </div>
    <div class="form-group">
        <label for="name">Marca:</label>
        <input type="text" id="marcaEdit" name="marca" required>
    </div>
    <div class="form-group">
        <label for="estado">Estado:</label>
        <select id="estadoEdit" name="estado" required>
            <option value="">Selecciona un estado</option>
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
        </select>
    </div>
    <input type="hidden" name="idCamion" id="idCamionEdit">
    <input type="hidden" name="opcion" value="4">
    <button type="button" onclick="edit()" class="register">Actualizar</button>
</form>

        </div>
    </div>
    <?php include '../components/cargando.php';?>


</body>

</html>