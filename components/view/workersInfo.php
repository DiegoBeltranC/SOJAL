<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informacios del Trabajador</title>
  <link rel="stylesheet" href="../components/view/ViewStyles.css">
</head>
<body>
<!-- Modal -->
<div id="modalView" class="modal">
  <div class="modal-content">
    <span id="closeModalBtnView" class="close-btn">&times;</span>
    <h2>Información del Trabajador</h2>
    <div id="workerInfo">

      <div class="profile-picture">
        <img id="imagenView" src="default-profile.png" alt="Foto de perfil" />
      </div>
      
      <div class="form-group">
        <label>Nombre:</label>
        <p id="nombreView">Juan Pérez</p>
      </div>
      <div class="form-group">
        <label>Fecha de Nacimiento:</label>
        <p id="fechaView">2005/10/11</p>
      </div>
      <div class="form-group">
        <label>Teléfono:</label>
        <p id="telefonoView">+52 123 456 7890</p>
      </div>
      <div class="form-group">
        <label>Correo Electrónico:</label>
        <p id="correoView">juan.perez@example.com</p>
      </div>
      <div class="form-group">
        <label>RFC:</label>
        <p id="rfcView">Vacio</p>
      </div>
      <div class="form-group">
        <label>CURP:</label>
        <p id="curpView">Vacio</p>
      </div>
    </div>
  </div>
</div>
<script src="../js/tables/workers.js"></script>
</body>
</html>
