<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Trabajador</title>
    <link rel="stylesheet" href="../components/edit/FormEditStyles.css">

</head>

<body>

    <!-- Modal -->
    <div id="modalEdit" class="modal">
        <div class="modal-content">
            <span id="closeModalBtnEdit" class="close-btn">&times;</span>
            <h2>Editar Trabajador</h2>
            <form id="userFormEdit" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="profile-picture">
                        <img id="imagenEdit" src="default-profile.png" alt="Foto de perfil" />
                    </div>
                        <label for="name">Foto de Perfil:</label>
                        <input type="file" id="imageUpload"  name="image" accept="image/*">
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
                    <input type="text" id="curpEdit" name="curp" placeholder="Ej. ABCD123456HDFRZZ01">
                </div>
                <div class="form-group">
                    <label for="rfc">RFC:</label>
                    <input type="text" id="rfcEdit" name="rfc" placeholder="Ej. ABCD123456XXX" >
                </div>
                <input type="hidden" name="opcion" value="5">
                <input type="hidden" name="id" id="id" >
                <input type="hidden" name="imagenAnterior" id="imagenAnterior" >
                <button type="button" onclick="actualizar()" class="register">Actualizar</button>

            </form>
        </div>
    </div>

   
</body>

</html>