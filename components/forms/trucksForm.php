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
      <form id="contactForm">
      <div class="form-group">
          <label for="name">Imagenes:</label>
          <input type="file" id="imageUpload" accept="image/*">
        </div>
      
        <div class="form-group">
          <label for="name">Placas:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Modelo:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Año:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Marca:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Estado:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <button type="submit">Registrar</button>
      </form>
    </div>
  </div>
  <script src="../js/tables/trucks.js"></script>
</body>
</html>
