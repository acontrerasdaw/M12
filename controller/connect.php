<?php

$mysqli = new mysqli('localhost', 'root', '', 'TBS');
if ($mysqli->connect_error) {
    die('Error de conexión (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}

//header
$query = "INSERT INTO Reservas (NomReserva, emailReserva, telefonoReserva, arteReserva, fechaHoraReserva) VALUES ('" . $nomReserva . "','" . $emailReserva_Sano . "'," . $telefonoReserva . ",'" . $arteReserva . "','" . $fechaHoraReserva . "')";
//$tildes=$mysqli->query("SET NAMES 'utf8'");
$query02 = "";

try {
    $url = filter_input(INPUT_SERVER, "REQUEST_URI");
    // executar la consulta depenent la pàgina on es situï
    switch ($url) {
        case "/M12/view/comprovar.php":
            $mysqli->query($query);
            header('Location: ../view/correcto.php');
            break;
        case "/M12/view/login2.php":
            //$mysqli->query($query02);
            echo 'muuu bien!!!';
            break;
    }
} catch (Exception $e) {
    throw $e->getMessage();
}

// tancar la connexió 
$mysqli->close();
