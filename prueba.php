<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';




$mail = new PHPMailer(true);


try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'gastonaguirre1997@gmail.com';                     // SMTP username
    $mail->Password   = 'yoganador';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('gastonaguirre1997@gmail.com',  $_POST['nombre']);
    $mail->addAddress('gastonaguirre19972@gmail.com');     // Add a recipient

    $mensaje= "<p>Nombre: ".$_POST['nombre'] ."</p>"
             ."<p>Telefono: ".$_POST['telefono'] ."</p>"
             ."<p>E-mail: ".$_POST['email'] ."</p>"
             ."<p>Mensaje: ".$_POST['mensaje'] ."</p>";

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Consulta';
    $mail->Body    = $mensaje;

    $mail->send();
    echo "<p>Su consulta se envio con exito</p>";
    echo "<a href= 'http://localhost/Proyectos/anspagarden/anspagarden-master/index.html'>Volver al sitio web</a>";
 
} catch (Exception $e) {
    // echo "Hubo un error al enviar el correo: {$mail->ErrorInfo}";
    header('Location: http://localhost/Proyectos/anspagarden/anspagarden-master/index.html#Contacto');
}
    
?>