<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario en Modal</title>
  <link rel="stylesheet" href="../components/forms/FormStyles.css">
</head>
<body>

  <!-- Modal -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <span id="closeModalBtn" class="close-btn">&times;</span>
      <h2>Formulario de Contacto</h2>
      <form id="contactForm">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Correo Electrónico:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Mensaje:</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </div>

  <script src="../js/Forms.js"></script>
</body>
</html>
