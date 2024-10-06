<?php
require '../../vendor/autoload.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatario = $_POST['email'];

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
        $mail->addAddress($destinatario);

        $mail->isHTML(true);
        $mail->Subject = 'Recuperar contraseña';
        $mail->Body    = '
            <h2>Recupera tu contraseña</h2>
            <p>Hola,</p>
            <p>Hemos recibido una solicitud para restablecer la contraseña de tu cuenta. Para continuar, por favor haz clic en el botón a continuación:</p>
            <p>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" 
                   style="display: inline-block; background-color: #007bff; color: white; padding: 10px 20px; 
                          text-decoration: none; border-radius: 5px; font-weight: bold;">
                   Restablecer Contraseña
                </a>
            </p>
            <p>Si no solicitaste este cambio, puedes ignorar este mensaje.</p>
            <p>Gracias,<br>El equipo de soporte</p>
        ';
 
        $mail->send();
        echo 'El mensaje ha sido enviado';
    } catch (Exception $e) {
        echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Método no permitido.';
}
?>
