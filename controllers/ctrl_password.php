<?php

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function EnviarPassword($correo) {
     $password = generarContrasena();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $mail = new PHPMailer(true);
    
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; 
            $mail->SMTPAuth   = true;
            $mail->Username   = 'sojal.soporte@gmail.com'; 
            $mail->Password   = 'jfcnznlvacqldqvh';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
    
            $mail->setFrom('sojal.soporte@gmail.com', 'SOJAL');
            $mail->addAddress($correo);
    
            $mail->isHTML(true);
            $mail->Subject = 'Tu contraseña de SOJAL';
            $mail->Body = "
            <html>
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f7f6;
                        margin: 0;
                        padding: 0;
                    }
                    .container {
                        width: 100%;
                        max-width: 600px;
                        margin: 0 auto;
                        background-color: #ffffff;
                        padding: 20px;
                        border-radius: 8px;
                        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                    }
                    h2 {
                        color: #333333;
                        text-align: center;
                        font-size: 24px;
                    }
                    p {
                        font-size: 18px;
                        color: #555555;
                        line-height: 1.6;
                        text-align: center;
                        margin: 20px 0;
                    }
                    .password {
                        font-family: 'Courier New', Courier, monospace;
                        font-size: 20px;
                        color: #333333;
                        background-color: #f0f0f0;
                        padding: 10px;
                        border-radius: 4px;
                        display: block;
                        width: fit-content;
                        margin: 0 auto;
                        text-align: center;
                    }
                    .footer {
                        font-size: 14px;
                        color: #888888;
                        text-align: center;
                        margin-top: 30px;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h2>Tu contraseña de SOJAL</h2>
                    <p>Hola,</p>
                    <p>A continuación te proporcionamos la contraseña que solicitaste para acceder a tu cuenta en SOJAL:</p>
                    <p class='password'>" . $password . "</p>
                    <p>Recuerda mantener esta información segura. Si no solicitaste este correo, por favor, ignóralo.</p>
                    <div class='footer'>
                        <p>&copy; 2024 SOJAL. Todos los derechos reservados.</p>
                    </div>
                </div>
            </body>
            </html>
            ";
            
            $mail->send();
            return $password;
        } catch (Exception $e) {
            return "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        return 'Método no permitido.';
    }

}

function generarContrasena() {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $contrasena = '';
    $max = strlen($caracteres) - 1;

    for ($i = 0; $i < 8; $i++) {
        $contrasena .= $caracteres[random_int(0, $max)];
    }

    return $contrasena;
}


?>