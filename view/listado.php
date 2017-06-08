<?php
$mysqli=new mysqli('localhost','root','','TBS');
if($mysqli->connect_error){
    die('Error de conexión ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}
$sql="SELECT NomReserva, emailReserva, telefonoReserva, arteReserva, fechaHoraReserva FROM Reservas";
$result=mysqli_query($mysqli,$sql);

// Fetch all
mysqli_fetch_all($result,MYSQLI_ASSOC);
// Free result set
mysqli_free_result($result);
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
                <li><a href="./view/reserva.php">Reserva</a></li>
                <li><a href="#novedades">Novedades</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </div>
        <?php
        
        ?>
    </body>
</html>