<?php
//include '../controller/connect.php';
$NumReserva=  filter_input(INPUT_GET, 'NumReserva');
$query03 = "DELETE FROM Reservas where NumReserva=".$NumReserva;
    $mysqli->query($query03);
//header('Location: ./listado.php');
