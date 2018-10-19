<?php
require_once '../models/estadopuerta.modelo.php';
$dato = $_POST['datos'];
if ($dato == 'abrirPuerta'){
    $tabla = 'dispositivos_casa';
    $respuesta = PuertaModeloo::AbrirPuerta($tabla);
    return ($respuesta);
} else if ($dato == 'abrirPuertaNeutro'){
    $tabla = 'dispositivos_casa';
    $respuesta = PuertaModeloo::AbrirPuertaNeutro($tabla);
    return ($respuesta);
} else if ($dato == 'cerrarPuerta'){
    $tabla = 'dispositivos_casa';
    $respuesta = PuertaModeloo::CerrarPuerta($tabla);
    return ($respuesta);
} else if ($dato == 'cerrarPuertaNeutro'){
    $tabla = 'dispositivos_casa';
    $respuesta = PuertaModeloo::CerrarPuertaNeutro($tabla);
    return ($respuesta);
} else if ($dato == 'abrirPuertaPrincipal'){
    $tabla = 'dispositivos_casa';
    $respuesta = PuertaModeloo::abrirPuertaPrincipal($tabla);
    return ($respuesta);
} else if ($dato == 'cerrarPuertaPrincipal'){
    $tabla = 'dispositivos_casa';
    $respuesta = PuertaModeloo::cerrarPuertaPrincipal($tabla);
    return ($respuesta);
}

?>