<?php
require_once '../models/nuevacuenta.modelo.php';
$correo = $_POST['correo'];
$pass1 = $_POST['pass'];
$pass2 = $_POST['pass2'];

if ($pass1 == $pass2){
    $tabla = "usuario_2";
    $respuesta = nuevaCuentalModelo::nuevaCuenta($tabla, $correo, $pass1);
    return ($respuesta);
}else {
    echo '2';
}


?>