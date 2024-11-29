
// JavaScript para manejar el evento de clic en el botón de cancelar
document.getElementById('btnCancelar').addEventListener('click', function () {
    var div = document.querySelector('.body');
    div.style.display = 'none';
});

$(document).ready(function () {
    $('#formsesion').on('submit', function (event) {

        event.preventDefault();

        var correo = $('#gmail').val();
        var password = $('#password').val();
        $('#loading').show(); 
        $.ajax({
            url: "controllers/ctrl_sesion.php",
            type: "POST",
            data: {
                correo: correo,
                password: password
            },
            success: function (respuesta) {
                if (respuesta == 1) {
                    $('#loading').hide();
                    window.location.href = "views/ViewEstadisticas.php"
                }
                else {
                    $('#loading').hide();
                    Swal.fire({
                        title: "Error!",
                        text: "Usuario o contraseña incorrectos!",
                        icon: "warning",
                        dangerMode: true,
        
                    });
                }
            }
        });

    });


    let ViewPassword = document.getElementById("ViewPassword");
    let txtPassword = document.getElementById('password');

    ViewPassword.addEventListener("click", function () {

        txtPassword.type = ViewPassword.checked ? 'text' : 'password';
    });
});
