<?php
session_start();
if (isset($_SESSION['training'])) {
    $logueado = TRUE;
} else {
    $logueado = FALSE;
}
?>
<!DOCTYPE html>
<!--

-->
<html lang="es">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/stil.css">
        <meta charset="UTF-8">
        <title>Training Book-Self Mugendo</title>
    </head>
    <body>
        <div class="Cabecera">
            <div class="titulo">
                <a href="index.php" class="noticia"> <h1>Training Book-Self</h1></a>
            </div>
            <div class="logo">
                <IMG SRC="./img/logo.png" alt="Logo Mugendo"/>
            </div>
        </div>

        <div class="Menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="./view/reserva.php">Reserva</a></li>
                <?php
                if (!$logueado) {
                    echo '<li><a href="./view/login.php">Login</a></li>';
                } else {
                    echo '<li><a href="./view/listado.php">Listado</a></li>';
                }
                ?>
                <li><a href="./view/contacto.php">Contacto</a></li>
            </ul>
        </div>
        <h1 class="NOTICIAS">MUGENDO</h1>

        <div class="video">
            <IMG SRC="./img/bambu.jpeg" alt="Logo Mugendo"/>
            <iframe class="videom" src="https://www.youtube.com/embed/gC0F3lD0gSw" frameborder="0" alt="Video promocional" allowfullscreen></iframe>
            <IMG SRC="./img/bambu2.jpeg" alt="Logo Mugendo"/>
        </div>
        <footer>
            Copyright reserved to Training Book-Self&copy;
        </footer>
    </body>
</html>
