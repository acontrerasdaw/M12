<?php

$mysqli = new mysqli('localhost', 'root', '', 'TBS');
if ($mysqli->connect_error) {
    die('Error de conexión (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}

//header
$query = "INSERT INTO Reservas (NomReserva, emailReserva, telefonoReserva, arteReserva, fechaHoraReserva) VALUES ('" . $nomReserva . "','" . $emailReserva_Sano . "'," . $telefonoReserva . ",'" . $arteReserva . "','" . $fechaHoraReserva . "')";
//$tildes=$mysqli->query("SET NAMES 'utf8'");
$query02 = "SELECT * FROM login";
$query03 = "DELETE FROM Reservas where NumReserva=".$NumReserva;
$query04 = "SELECT NumReserva,NomReserva, emailReserva, telefonoReserva, arteReserva, fechaHoraReserva FROM Reservas ORDER BY fechaHoraReserva";
echo "<script>console.log(".$NumReserva.");</script>";
try {
    $url = filter_input(INPUT_SERVER, "REQUEST_URI");
    // executar la consulta depenent la pàgina on es situï
    switch ($url) {
        case "/M12/view/reserva.php":
            $mysqli->query($query);
            header('Location: ../view/correcto.php');
            break;
        case "/M12/view/login2.php":
            $resultadoLogin = $mysqli->query($query02);
            //echo 'muuu bien!!!';
            break;
        case "/M12/view/listado.php":
            $resultat = $mysqli->query($query04);
            echo $resultat;
            //echo "listado";
            break;
        case "/M12/view/borrar.php":
            $mysqli->query($query03);
            //header('Location: ../view/correcto2.php');
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
