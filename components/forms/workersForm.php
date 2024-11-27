<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Trabajador</title>
    <link rel="stylesheet" href="../components/forms/FormStyles.css">

</head>

<body>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span id="closeModalBtn" class="close-btn">&times;</span>
            <h2>Registrar Trabajador</h2>
            <form id="trabajadorForm" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Foto de Perfil:</label>
                    <input type="file" id="imageUpload"  name="image" accept="image/*">
                </div>

                <div class="form-group">
                    <label for="name">Nombres:</label>
                    <input type="text" id="name" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="name">Apellido Paterno:</label>
                    <input type="text" id="name" name="apellidoP" required>
                </div>
                <div class="form-group">
                    <label for="name">Apellido Materno:</label>
                    <input type="text" id="name" name="apellidoM" required>
                </div>
                <div class="form-group">
                    <label for="date">Fecha de Nacimiento:</label>
                    <input type="date" id="date" name="fechaNacimiento" required>
                </div>

                <div class="form-group">
                    <label for="name">Número de Teléfono:</label>
                    <input type="tel" id="name" name="telefono" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="correo" placeholder="Ej. usuario@dominio.com" required>
                </div>
                <div class="form-group">
                    <label>Enviar contraseña por:</label>
                    <div class="group-radio">
                        <div>
                            <input type="radio" id="optionEmail" name="sendOption" value="email" required>
                            <label for="optionEmail">Correo</label>
                        </div>
                        <div>
                            <input type="radio" id="optionPhone" name="sendOption" value="phone">
                            <label for="optionPhone">Teléfono</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="curp">CURP:</label>
                    <input type="text" id="curp" name="curp" placeholder="Ej. ABCD123456HDFRZZ01"
                        pattern="[A-Z]{4}[0-9]{6}[HM][A-Z]{5}[0-9]{2}"
                        title="Ingresa un CURP válido en mayúsculas, por ejemplo, ABCD123456HDFRZZ01">
                </div>
                <div class="form-group">
                    <label for="rfc">RFC:</label>
                    <input type="text" id="rfc" name="rfc" placeholder="Ej. ABCD123456XXX"
                        pattern="[A-Z]{4}[0-9]{6}[A-Z0-9]{3}"
                        title="Ingresa un RFC válido en mayúsculas, por ejemplo, ABCD123456XXX" >
                </div>
                <input type="hidden" name="opcion" value="1">
                <input type="hidden" name="rol" value="2">
                <button type="button" onclick="add()" class="register">Registrar</button>

            </form>
        </div>
    </div>
    <?php include '../components/cargando.php';?>

   
</body>

</html>