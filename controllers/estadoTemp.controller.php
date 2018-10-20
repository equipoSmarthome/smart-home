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
} else if ($dato == 'ventiladorAuto'){
    $valor = $_POST['data'];
    $tabla = 'dispositivos_casa';
    $respuesta = TemperaturaModeloo::ventiladorAuto($tabla, $valor);
    return ($respuesta);
} else if ($dato == 'tempVentiladorAuto'){
    $valor = $_POST['valor'];
    $tabla = 'dispositivos_casa';
    $respuesta = TemperaturaModeloo::tempVentiladorAuto($tabla, $valor);
    return ($respuesta);
}
?>