<?php

$mysqli = new mysqli('localhost', 'root', '', 'TBS');
if ($mysqli->connect_error) {
    die('Error de conexión (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}


try {
    $url = filter_input(INPUT_SERVER, "REQUEST_URI");
    // executar la consulta depenent la pàgina on es situï
    switch ($url) {
        case "/M12/view/reserva.php":
            $query = "INSERT INTO Reservas (NomReserva, emailReserva, telefonoReserva, arteReserva, fechaHoraReserva) VALUES ('" . $nomReserva . "','" . $emailReserva_Sano . "'," . $telefonoReserva . ",'" . $arteReserva . "','" . $fechaHoraReserva . "')";
            $mysqli->query($query);
            require 'correoReserva.php';
            header('Location: ../view/correcto.php');
            break;
        case "/M12/view/login2.php":
            $query02 = "SELECT * FROM login";
            $resultadoLogin = $mysqli->query($query02);
            break;
        case "/M12/view/listado.php":
            $query04 = "SELECT NumReserva,NomReserva, emailReserva, telefonoReserva, arteReserva, fechaHoraReserva FROM Reservas ORDER BY fechaHoraReserva";
            $resultat = $mysqli->query($query04);
            //echo "listado";
            break;
        case "/M12/view/borrar.php":
            $query03 = "DELETE FROM Reservas where NumReserva=".$NumReserva;
            $queryCancelacion = "SELECT * FROM Reservas WHERE NumReserva=".$NumReserva;
            $row = $mysqli->query($queryCancelacion);
            $capturaCancelacion = mysqli_fetch_array($row, MYSQLI_ASSOC);
            $mysqli->query($query03);
            require 'correoCancelacion.php';
            break;
        default:
            //Proves
            break;
    }
} catch (Exception $e) {
    throw $e->getMessage();
}

// tancar la connexió 
$mysqli->close();
