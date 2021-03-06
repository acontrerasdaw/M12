<?php
require 'vendor/autoload.php';

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

$mail->setFrom('beakertbs@gmail.com', 'Reserva efectuada TBS'); // Destinatari
//$mail->addAddress($emailReserva_Sano, $nomReserva);     // Receptor
//$mail->addAddress('beakertbs@gmail.com', 'Administrador');  // Name is optional
//$mail->addReplyTo('beakertbs@gmail.com', 'Information');
//$mail->addCC('beakertbs@gmail.com');
$mail->addBCC('beakertbs@gmail.com', 'Administrador');
$mail->addBCC($emailReserva_Sano, $nomReserva);
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Reserva TBS';
$mail->Body    = 'Querido/a '.$nomReserva.' su reserva realizada: '.$fechaHoraReserva.' ha sido realizada con éxito con la siguiente disciplina: '.$arteReserva.'. En caso de cualquier clase de problema, se procederá a notificarse por correo electrónico.';
//$mail->AltBody = 'Body alternativo';
//$mail->SMTPDebug = 4;
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    
} else {
    //echo 'Message has been sent';
}
