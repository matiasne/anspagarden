<?php
// Check for empty fields

   
$name = strip_tags(htmlspecialchars($_POST['nombre']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = $_POST['mensaje'];
$celular = strip_tags(htmlspecialchars($_POST['telefono']));
   
// Create the email and send the message
$to = 'matiasnegri85@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "Nuevo mensaje desde la página web.\n\n"."Detalles:\n\nName:. $name.\n\nEmail:. $email_address.\n\n Mensaje:\n. $message";
$headers = "From: matiasnegri85@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.

mail($to,$email_subject,$email_body,$headers);

echo "Mensaje Enviado! ";



?>