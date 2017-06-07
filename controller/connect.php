<?php

$mysqli=new mysqli('localhost','root','','TBS');
if($mysqli->connect_error){
    die('Error de conexión ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}

//header
header('Location: ../view/correcto.php');

?>
