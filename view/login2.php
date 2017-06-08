<?php

require '../controller/connect.php';

$resultadoLogin;

$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$trobat = FALSE; //Per indicar si s'ha trobat la coincidència entre names i passwords


// bucle per recuperar resultats
while ($fila = $resultadoLogin->fetch_assoc()) {
    if ($fila['usuario'] == $nom && $fila['password'] == $password) {
        session_start(); //Vigila l'inici de sessió
        $_SESSION['training'] = $x;
        header('Location: listado.php'); //Si concuerdan, salta al tenis
        $trobat = TRUE;
    }
}

if (!$trobat) {
    header('Location: login.php'); //Si no concuerdan, vuelve
}