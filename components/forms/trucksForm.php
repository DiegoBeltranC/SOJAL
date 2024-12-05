<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Camión</title>
    <link rel="stylesheet" href="../components/forms/FormStyles.css">
</head>

<body>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span id="closeModalBtn" class="close-btn">&times;</span>
            <h2>Registrar Camión</h2>
            <form id="CamionForm">
                <div class="form-group">
                    <label for="name">Fotó del camión:</label>
                    <input type="file" name="fotos[]" id="imageUpload" accept="image/*" multiple>
                </div>
                <div id="previewContainer" class="preview-container"></div>
                <div class="form-group">
                    <label for="name">Placas:</label>
                    <input type="text" id="name" name="placas" required>
                </div>
                <div class="form-group">
                    <label for="name">Modelo:</label>
                    <input type="text" id="name" name="modelo" required>
                </div>
                <div class="form-group">
                    <label for="name">Año:</label>
                    <input type="text" id="name" name="ano" required>
                </div>
                <div class="form-group">
                    <label for="name">Marca:</label>
                    <input type="text" id="name" name="marca" required>
                </div>
                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <select id="estado" name="estado" required>
                        <option value="">Selecciona un estado</option> <!-- Opción por defecto -->
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                </div>
                <input type="hidden" name="opcion" value="1">
                <button type="button" onclick="add()" class="register">Registrar</button>
            </form>
        </div>
    </div>
    <?php include '../components/cargando.php';?>


</body>

</html>