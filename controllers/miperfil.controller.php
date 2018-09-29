<?php
require_once '../models/miperfil.modelo.php';
$correo = $_POST['micorreo'];
$pass1 = $_POST['mipass'];
$pass2 = $_POST['mipass2'];

if ($pass1 == $pass2){
    $tabla = "usuario_1";
    $respuesta = miPerfilModelo::MiPerfil($tabla, $correo, $pass1);
    return ($respuesta);
}else {
    echo '2';
}


?>