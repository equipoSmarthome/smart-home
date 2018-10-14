<?php
require_once '../models/estadoTemp.modelo.php';
$dato = $_POST['datos'];
if ($dato == 'encenderTemp'){
    $tabla = 'dispositivos_casa';
    $respuesta = TemperaturaModeloo::EncenderTemp($tabla);
    return ($respuesta);
} else if ($dato == 'apagarTemp'){
    $tabla = 'dispositivos_casa';
    $respuesta = TemperaturaModeloo::ApagarTemp($tabla);
    return ($respuesta);
}

?>