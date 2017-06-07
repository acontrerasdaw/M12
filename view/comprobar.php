<?php
//archivo contenedor del formulario

$enviar = filter_input(INPUT_POST, 'reservar');//reservar nombre boton
$errorNom = $errorEmailReserva = $errorTelefonoReserva = $errorArteReserva = $errorFechaHoraReserva = "";
$errores = FALSE;

if(isset($enviar)){
    $errors = ["Está vacío", "Sólo caracteres", "La fecha no es correcta", 
        "Eres menor de edad", "El formato del password no es correcto", "Formato no válido", "Formato solo numérico"];
    $nomReserva = filter_input(INPUT_POST, 'nomReserva', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $emailReserva_Sano = filter_input(INPUT_POST, 'emailReserva', FILTER_SANITIZE_EMAIL);
    $telefonoReserva = filter_input(INPUT_POST, 'telefonoReserva', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $arteReserva = filter_input(INPUT_POST, 'arteReserva', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $fechaHoraReserva = filter_input(INPUT_POST, 'fechaHoraReserva', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    if($nomReserva === "") {
        $errorNom = $errors[0];
        $errores = TRUE;
    }elseif (!ctype_alpha(str_replace(' ','',$nomReserva))) {//Només lletres i espais
        $errorNom = $errors[1];
        $errores = TRUE;
    }
    if($emailReserva_Sano === "") {//comprobar email
        $errorEmailReserva = $errors[0];
        $errores = TRUE;
    }elseif (!filter_var($emailReserva_Sano, FILTER_VALIDATE_EMAIL)) {
        $errorEmailReserva= $errors[5];
        $errores = TRUE;
    }
    if($telefonoReserva === "") {
        $errorTelefonoReserva = $errors[0];
        $errores = TRUE;
    }elseif(!ctype_digit($telefonoReserva)){
        $errorTelefonoReserva = $errors[6];
        $errores = TRUE;
    }
    if($arteReserva=== ""){
        $errorArteReserva=$errors[0];
        $errores = TRUE;
    }
    if ($fechaHoraReserva === ""){
        $errorFechaHoraReserva = $errors[0];
        $errores = TRUE;
    }
    
//    if(($errorNom != "") && ($errorEmailReserva!="") && ($errorTelefonoReserva!="") && ($errorArteReserva!="") && ($errorFechaHoraReserva!="")){
    if(!$errores){        
        //hacer conexion/include conexion
        include '../controller/connect.php';
    }else{
        //echo "<script>alert('Algo incorrecto');</script>";

    }
    //Comprobar errores, si estan vacios, conexion BD mas añadir
    
}else{//Evita errors, formulari no enviat
    $nomReserva = "";
    $emailReserva= "";
    $emailReserva_Sano= "";
    $telefonoReserva = "";
    $arteReserva = "";
    $fechaHoraReserva = "";
    $errores = FALSE;
}
?>