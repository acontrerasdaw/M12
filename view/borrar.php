<?php
$NumReserva=  filter_input(INPUT_GET, 'NumReserva');
$query="DELETE FROM Reservas where NumReserva='".$NumReserva."'";
echo $NumReserva;
//header('Location: ./listado.php');
