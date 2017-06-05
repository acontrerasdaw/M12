<?php
if(isset($_REQUEST['reservar'])){
    $nomReserva=$_REQUEST['nomReserva'];
    $emailReserva=$_REQUEST['emailReserva'];
    $nomReserva=$_REQUEST['nomReserva'];
    $nomReserva=$_REQUEST['nomReserva'];
    $nomReserva=$_REQUEST['nomReserva'];
    echo $nomReserva;
}else{?>
<html>
    <head>
        
        <script src="../js/jquery-2.1.3.min.js"></script>
        <script src="../js/test.js"></script>
        <script src="../build/jquery.datetimepicker.full.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/jquery.datetimepicker.css"/>
    </head>
    <form method="post">
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" maxlength="50" name="nomReserva"/></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" maxlength="50" name="emailReserva"/></td>
            </tr>
            <tr>
                <td>Teléfono:</td>
                <td><input type="text" maxlength="9" name="telefonoReserva"/></td>
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
                <td><input id="datetimepicker" type="text"/></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Reservar" name="reservar"/></td>
            </tr>
        </table>
    </form>
</html>
<?php

    
}



?>