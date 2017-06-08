<?php
$mysqli=new mysqli('localhost','root','','TBS');
if($mysqli->connect_error){
    die('Error de conexión ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
$query = "SELECT NumReserva,NomReserva, emailReserva, telefonoReserva, arteReserva, fechaHoraReserva FROM Reservas ORDER BY fechaHoraReserva";
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
                <li><a href="#novedades">Novedades</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </div>
        <?php
        $resultat = $mysqli->query($query);
        $IniciTaula='<table border="1"><th>Nombre</th><th>Email</th><th>Telefono</th><th>Arte marcial</th><th>Fecha y Hora</th><th>Borrar</th>';//emmagatzem l'inici de la taula en una variable
        echo $IniciTaula;
        // bucle per recuperar resultats
        while ($fila = $resultat->fetch_assoc()) {
            echo '<tr>';
            echo '<td>'.$fila['NomReserva'].'</td>';
            echo '<td>'.$fila['emailReserva'].'</td>';
            echo '<td>'.$fila['telefonoReserva'].'</td>';
            echo '<td>'.$fila['arteReserva'].'</td>';
            echo '<td>'.$fila['fechaHoraReserva'].'</td>';
            echo '<td><a href=""><img class="icono" src="../img/trash.ico"></a></td>';
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </body>
</html>