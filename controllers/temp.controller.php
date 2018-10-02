<?php

class ControllerTemperatura {
    public function mostrarTemperatura() {
        $tabla = "dispositivos_casa";
        $respuesta = TemperaturaModelo::mostrarTemperatura($tabla);
        return $respuesta;
    }


}


?>