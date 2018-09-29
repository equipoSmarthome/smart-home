<?php
require_once '../models/switch.modelo.php';
$dato = $_POST['datos'];
// Alarma
if ($dato == 'alarmaOn'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::AlarmaOn($tabla);
    return ($respuesta);
} else if ($dato == 'alarmaOff'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::AlarmaOff($tabla);
    return ($respuesta);
// Luz Cocina
} else if ($dato == 'cocinaOn'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::CocinaOn($tabla);
    return ($respuesta);
} else if ($dato == 'cocinaOff'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::CocinaOff($tabla);
    return ($respuesta);
} else if ($dato == 'bañoOn'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::BañoOn($tabla);
    return ($respuesta);
} else if ($dato == 'bañoOff'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::BañoOff($tabla);
    return ($respuesta);
} else if ($dato == 'garageOn'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::GarageOn($tabla);
    return ($respuesta);
} else if ($dato == 'garageOff'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::GarageOff($tabla);
    return ($respuesta);
} else if ($dato == 'dormitorio1On'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::Dormitorio1On($tabla);
    return ($respuesta);
} else if ($dato == 'dormitorio1Off'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::Dormitorio1Off($tabla);
    return ($respuesta);
} else if ($dato == 'dormitorio2On'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::Dormitorio2On($tabla);
    return ($respuesta);
} else if ($dato == 'dormitorio2Off'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::Dormitorio2Off($tabla);
    return ($respuesta);
} else if ($dato == 'dormitorio3On'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::Dormitorio3On($tabla);
    return ($respuesta);
} else if ($dato == 'dormitorio3Off'){
    $tabla = 'casa';
    $respuesta = SwitchModelo::Dormitorio3Off($tabla);
    return ($respuesta);
}
?>