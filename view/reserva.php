<?php
require './comprobar.php';
?>
<html>
    <head>
        <script src="../js/jquery-2.1.3.min.js"></script>
        <script src="../js/test.js"></script>
        <script src="../build/jquery.datetimepicker.full.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/jquery.datetimepicker.css"/>
        <link rel="stylesheet" type="text/css" href="../css/stil.css">
    </head>
    <body>
        <div class="superfondo">
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
                    <li><a href="#novedades">Novedades</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </div>
            <div class="formulario">
                <form method="post" action="reserva.php">
                    <fieldset>
                        <legend>Formulario De Registro</legend>
                        <table>
                            <tr>
                                <td>Nombre:</td>
                                <td><input type="text" maxlength="50" name="nomReserva" value="<?php echo $nomReserva; ?>"/>
                                    <span class="error"><?php echo $errorNom; ?></span></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><input type="email" maxlength="50" name="emailReserva" value="<?php echo $emailReserva_Sano;?>"/>
                                <span class="error"><?php echo $errorEmailReserva; ?></span></td>
                            </tr>
                            <tr>
                                <td>Teléfono:</td>
                                <?php 
                                    if($telefonoReserva===0){
                                        $telefonoReserva="";
                                    }
                                ?>
                                <td><input type="text" maxlength="9" name="telefonoReserva" value="<?php echo $telefonoReserva ?>"/>
                            </tr>
                            <tr>
                                <td>Arte marcial:</td>
                                <td>
                                    <select name="arteReserva">
                                        <option value="Kick Boxing">Kick Boxing</option>
                                        <option value="Judo">Judo</option>
                                        <option value="Taekwondo">Taekwondo</option>
                                        <option value="Kendo">Kendo</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Fecha y hora:</td>
                                <td><input id="datetimepicker" name="fechaHoraReserva" type="text" value="<?php echo $fechaHoraReserva; ?>"/>
                                <span class="error"><?php echo $errorFechaHoraReserva; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="Reservar" name="reservar"/></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>
            <footer>
                Copyright reserved to Training Book-Self&copy;
            </footer>
        </div>
    </body>
</html>