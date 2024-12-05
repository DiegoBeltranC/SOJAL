<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Administrador</title>
    <link rel="stylesheet" href="../components/edit/FormEditStyles.css">
</head>
<body>
    <!-- Modal -->
    <div id="modalEdit" class="modal">
        <div class="modal-content">
            <span id="closeModalBtnEdit" class="close-btn">&times;</span>
            <h2>Editar Administrador</h2>
            <form id="trabajadorFormEdit" >
                <div class="form-group">
                    <div class="profile-picture">
                        <img id="imagenEdit" src="default-profile.png" alt="Foto de perfil" />
                    </div>
                    <label for="name">Foto de Perfil:</label>
                    <input type="file" id="imageUpload" name="image" accept="image/*">
                </div>

                <div class="form-group">
                    <label for="name">Nombres:</label>
                    <input type="text" id="nombreEdit" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="name">Apellido Paterno:</label>
                    <input type="text" id="apellidoPEdit" name="apellidoP" required>
                </div>
                <div class="form-group">
                    <label for="name">Apellido Materno:</label>
                    <input type="text" id="apellidoMEdit" name="apellidoM" required>
                </div>
                <div class="form-group">
                    <label for="date">Fecha de Nacimiento:</label>
                    <input type="date" id="fechaEdit" name="fechaNacimiento" required>
                </div>

                <div class="form-group">
                    <label for="name">Número de Teléfono:</label>
                    <input type="tel" id="telefonoEdit" name="telefono" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="correoEdit" name="correo" placeholder="Ej. usuario@dominio.com" required>
                </div>
                
                <div class="form-group">
                    <label for="curp">CURP:</label>
                    <input type="text" id="curpEdit" name="curp" placeholder="Ej. ABCD123456HDFRZZ01"
                        pattern="[A-Z]{4}[0-9]{6}[HM][A-Z]{5}[0-9]{2}"
                        title="Ingresa un CURP válido en mayúsculas, por ejemplo, ABCD123456HDFRZZ01" required>
                </div>
                <div class="form-group">
                    <label for="rfc">RFC:</label>
                    <input type="text" id="rfcEdit" name="rfc" placeholder="Ej. ABCD123456XXX"
                        pattern="[A-Z]{4}[0-9]{6}[A-Z0-9]{3}"
                        title="Ingresa un RFC válido en mayúsculas, por ejemplo, ABCD123456XXX" required>
                </div>

                <input type="hidden" name="opcion" value="5">
                <input type="hidden" name="id" id="id" >
                <input type="hidden" name="imagenAnterior" id="imagenAnterior" >
                <button type="button" onclick="actualizar()" class="register">Actualizar</button>


            </form>
        </div>
    </div>

    <script src="../js/tables/administrators.js"></script>
</body>
</html>