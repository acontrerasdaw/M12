<?php
// Inicia la sessio
session_start();
if (!isset($_SESSION['training'])) {
    header('Location: login.php'); //Si no hi ha sessió iniciada, torna
}else{
    $logueado = TRUE;
}
require '../controller/connect.php';

$resultat;
?>
<!DOCTYPE html>
<!--

-->
<html lang="es">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/stil.css">
        <title>Listado</title>
    </head>
    <body>
        <div class="Cabecera">
            <div class="titulo">
                <a href="../index.php" class="noticia"> <h1>Training Book-Self</h1></a>
            </div>
            <div class="logo">
                <IMG SRC="../img/logo.png" alt="Logo Mugendo"/>
            </div>
        </div>

        <div class="Menu">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="./reserva.php">Reserva</a></li>
                <?php
                    if(!$logueado){
                        echo '<li><a href="./login.php">Login</a></li>';
                    }else{
                        echo '<li><a href="./listado.php">Listado</a></li>';
                    }
                ?>
                <li><a href="./contacto.php">Contacto</a></li>
            </ul>
        </div>
        <?php
        echo '<h3 class="welcome">Bienvenido ' . $_SESSION['training'] . '</h3>';
        $IniciTaula = '<table border="1" class="reservas"><th>Nombre</th><th>Email</th><th>Telefono</th><th>Arte marcial</th><th>Fecha y Hora</th><th>Borrar</th>'; //emmagatzem l'inici de la taula en una variable
        echo $IniciTaula;
        // bucle per recuperar resultats
        while ($fila = $resultat->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $fila['NomReserva'] . '</td>';
            echo '<td>' . $fila['emailReserva'] . '</td>';
            if ($fila['telefonoReserva'] == 0) {
                echo '<td>No se ha introducido</td>';
            } else {
                echo '<td>' . $fila['telefonoReserva'] . '</td>';
            }
            echo '<td>' . $fila['arteReserva'] . '</td>';
            echo '<td>' . $fila['fechaHoraReserva'] . '</td>';
            echo '<td align="center" valign="middle"><form id=' . $fila['NumReserva'] . ' method="post" action="borrar.php"><input type="hidden" name="NumReserva" value=' . $fila['NumReserva'] . '><a href="javascript:document.getElementById(' . $fila['NumReserva'] . ').submit();"><img class="icono" src="../img/trash.ico"></a></form></td>';
            echo '</tr>';
        }
        echo '</table>';
        ?>
        <a href="salirSesion.php"><img class="iconosal" src="../img/exit.png" alt="Salir"/></a>
        <footer>
            Copyright reserved to Training Book-Self&copy;
        </footer>
    </body>
</html>