<?php
/*
    ARCHIVO NO UTILIZADO EN LA IMPLEMENTACIÓN
    SOLO CONTIENE CODIGO BASE PARA HACER PRUEBAS DE ENVIO DE CORREO
 */
require './vendor/autoload.php';
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'beakertbs';                 // SMTP username
$mail->Password = 'm12daw2017';                           // SMTP password
$mail->SMTPSecure = 'tls';                           // Enable TLS encryption, `ssl` also accepted
//$mail->SMTPSecure = 'ssl'; 
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('beakertbs@gmail.com', 'Mailer');
$mail->addAddress('beakertbs@gmail.com', 'cliente');     // Add a recipient
//$mail->addAddress('beakerstb@gmail.com');               // Name is optional
//$mail->addReplyTo('beakerstb@gmail.com', 'Information');
//$mail->addCC('beakerstb@gmail.com');
//$mail->addBCC('beakerstb@gmail.com');
//
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Asunto';
$mail->Body    = 'Cuerpo';
//$mail->AltBody = 'Cuerpo alternativo';
//$mail->SMTPDebug = 4;
//if(!$mail->send()) {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
//    
//} else {
//    echo 'Message has been sent';
//}
//$mail->send();