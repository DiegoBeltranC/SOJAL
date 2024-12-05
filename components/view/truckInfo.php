<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informacios del Camión</title>
  <link rel="stylesheet" href="../components/view/ViewStyles.css">
</head>
<body>
<!-- Modal -->
<div id="modalView" class="modal">
  <div class="modal-content">
    <span id="closeModalBtnView" class="close-btn">&times;</span>
    <h2>Información del Camión</h2>
    <div id="workerInfo">
    <div class="form-group">
        <label>Fotos:</label>
  
      </div>
    <div id="fotosCamion" class="preview-containerView"></div>
      <div class="form-group">
        <label>Placas:</label>
        <p id="placasView"></p>
      </div>
      <div class="form-group">
        <label>Modelo:</label>
        <p id="modeloView"></p>
      </div>
      <div class="form-group">
        <label>Año:</label>
        <p id="anoView"></p>
      </div>
      <div class="form-group">
        <label>Marca:</label>
        <p id="marcaView"></p>
      </div>
      <div class="form-group">
        <label>Estado:</label>
        <p id="estadoView"></p>
      </div>

    </div>
  </div>
</div>

<script src="../js/tables/trucks.js"></script>


</body>
</html>