<?php
// Start the session
session_start();
if (!isset($_SESSION['training'])) {
    header('Location: login.php'); //Si no hi ha sessió iniciada, torna
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
                <li><a href="#novedades">Novedades</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </div>
        <?php
        echo 'Bienvenido '.$_SESSION['training'];
        $IniciTaula='<table border="1"><th>Nombre</th><th>Email</th><th>Telefono</th><th>Arte marcial</th><th>Fecha y Hora</th><th>Borrar</th>';//emmagatzem l'inici de la taula en una variable
        echo $IniciTaula;
        // bucle per recuperar resultats
        while ($fila = $resultat->fetch_assoc()) {
            echo '<tr>';
            echo '<td>'.$fila['NomReserva'].'</td>';
            echo '<td>'.$fila['emailReserva'].'</td>';
            if($fila['telefonoReserva']==0){
                echo '<td>No se ha introducido</td>';
            }else{
                echo '<td>'.$fila['telefonoReserva'].'</td>';

            }
            echo '<td>'.$fila['arteReserva'].'</td>';
            echo '<td>'.$fila['fechaHoraReserva'].'</td>';
            echo '<td align="center" valign="middle"><form id='.$fila['NumReserva'].' method="post" action="borrar.php"><input type="hidden" name="NumReserva" value='.$fila['NumReserva'].'><a href="javascript:document.getElementById('.$fila['NumReserva'].').submit();"><img class="icono" src="../img/trash.ico"></a></form></td>';
            //echo "<script>alert(".$fila['NumReserva'].")</script>";

            echo '</tr>';
        }
        echo '</table>';
        ?>
        //Cabrera!!!!!!, ponlo bonito esto -------------------------------------------------------------------------------------
        <a href="salirSesion.php"><img class="icono" src="../img/exit.png" alt="Salir"/></a>
    </body>
</html>