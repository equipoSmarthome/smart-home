<?php
require_once '../models/estadopuerta.modelo.php';
$dato = $_POST['datos'];
if ($dato == 'abrirPuerta'){
    $tabla = 'dispositivos_casa';
    $respuesta = PuertaModeloo::AbrirPuerta($tabla);
    return ($respuesta);
} else if ($dato == 'cerrarPuerta'){
    $tabla = 'dispositivos_casa';
    $respuesta = PuertaModeloo::CerrarPuerta($tabla);
    return ($respuesta);
}

?>