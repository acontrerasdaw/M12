<?php
session_start();
if (!isset($_SESSION['training'])) {
    header('Location: login.php'); //Si no hi ha sessió iniciada, torna
}

$NumReserva = filter_input(INPUT_POST, 'NumReserva');
include '../controller/connect.php';
?>
<!DOCTYPE html>
<!--

-->
<html lang="es">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/stil.css">
        <meta charset="UTF-8">
        <title>Registro completado</title>
    </head>
    <body>
        <div class="Cabecera">
            <div class="titulo">
                <a href="../index.php" class="noticia"><h1>Training Book-Self</h1></a>
            </div>
            <div class="logo">
                <IMG SRC="../img/logo.png" alt="Logo Mugendo"/>
            </div>
        </div>
        <div class="Menu">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="./reserva.php">Reserva</a></li>
                <li><a href="./login.php">Login</a></li>
                <li><a href="./contacto.php">Contacto</a></li>
            </ul>
        </div>
        <div class="happy2">
            <div class="happy">
                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                <h2>Reserva anulada correctamente</h2>
                <a href="../index.php" class="noticia2">Volver al inicio</a><br/><br/>
                <a href="./listado.php" class="noticia2">Volver a las reservas</a>
            </div>
        </div>
        <footer>
            Copyright reserved to Training Book-Self&copy;
        </footer>
    </body>
</html>

