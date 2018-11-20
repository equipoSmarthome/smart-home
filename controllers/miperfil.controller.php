<?php
require_once '../models/miperfil.modelo.php';
$correo = $_POST['micorreo'];
$pass1 = $_POST['mipass'];
$pass2 = $_POST['mipass2'];
if ( $pass1 == "" || $pass2 == "" || $correo == "") {
    echo 2;
} else {
    if ($pass1 != $pass2) {
        echo 3;
    } else {
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $tabla = "usuario_1";
            $respuesta = miPerfilModelo::MiPerfil($tabla, $correo, $pass1);
            return ($respuesta);
        } else {
            echo 4;
        }
        
    }
}
?>