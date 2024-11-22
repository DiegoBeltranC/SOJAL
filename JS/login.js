$(document).ready(function () {
    $('#formsesion').submit(function (event) {
        // Este evento se dispara solo si las validaciones HTML pasan
        // Si las validaciones HTML fallan, el formulario no se enviará

        // Ejecutar AJAX solo si las validaciones HTML son exitosas
        let datos = $(this).serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "controllers/ctrl_sesion.php",
            success: function (respuesta) {
                if (respuesta == true) {
                    window.location = "views/ViewEstadisticas.php";
                } else {
                    Swal.fire({
                        title: "Error!",
                        text: "Usuario o contraseña incorrectos!",
                        icon: "warning",
                        dangerMode: true
                    });
                }
            }
        });

        // Prevenir el envío del formulario (por si acaso)
        event.preventDefault();
    });

    // Muestra/oculta la contraseña
    let ViewPassword = document.getElementById("ViewPassword");
    let txtPassword = document.getElementById('password');

    ViewPassword.addEventListener("click", function () {
        txtPassword.type = ViewPassword.checked ? 'text' : 'password';
    });
});
