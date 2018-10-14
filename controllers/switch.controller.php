<?php
require_once '../models/switch.modelo.php';
$dato = $_POST['datos'];
// Alarma
if ($dato == 'alarmaOn'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::AlarmaOn($tabla);
    return ($respuesta);
} else if ($dato == 'alarmaOff'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::AlarmaOff($tabla);
    return ($respuesta);
// Luz Cocina
} else if ($dato == 'cocinaOn'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::CocinaOn($tabla);
    return ($respuesta);
} else if ($dato == 'cocinaOff'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::CocinaOff($tabla);
    return ($respuesta);
} else if ($dato == 'bañoOn'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::BañoOn($tabla);
    return ($respuesta);
} else if ($dato == 'bañoOff'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::BañoOff($tabla);
    return ($respuesta);
} else if ($dato == 'garageOn'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::GarageOn($tabla);
    return ($respuesta);
} else if ($dato == 'garageOff'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::GarageOff($tabla);
    return ($respuesta);
} else if ($dato == 'dormitorio1On'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::Dormitorio1On($tabla);
    return ($respuesta);
} else if ($dato == 'dormitorio1Off'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::Dormitorio1Off($tabla);
    return ($respuesta);
} else if ($dato == 'dormitorio2On'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::Dormitorio2On($tabla);
    return ($respuesta);
} else if ($dato == 'dormitorio2Off'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::Dormitorio2Off($tabla);
    return ($respuesta);
} else if ($dato == 'dormitorio3On'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::Dormitorio3On($tabla);
    return ($respuesta);
} else if ($dato == 'dormitorio3Off'){
    $tabla = 'dispositivos_casa';
    $respuesta = SwitchModelo::Dormitorio3Off($tabla);
    return ($respuesta);
}
?>