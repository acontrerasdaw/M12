<?php

$mysqli=new mysqli('localhost','root','','TBS');
if($mysqli->connect_error){
    die('Error de conexión ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}

//header
$query="INSERT INTO Reservas (NomReserva, emailReserva, telefonoReserva, arteReserva, fechaHoraReserva) VALUES ('".$nomReserva."','".$emailReserva_Sano."',".$telefonoReserva.",'".$arteReserva."','".$fechaHoraReserva."')";
//$tildes=$mysqli->query("SET NAMES 'utf8'");
$mysqli->query($query);
header('Location: ../view/correcto.php');

?>
