<?php

class ControllerTemperatura {
    public function mostrarTemperatura() {
        $tabla = "dispositivos_casa";
        $respuesta = TemperaturaModelo::mostrarTemperatura($tabla);
        return $respuesta;
    }
    public function mostrarTempActual(){
        $tabla = "dispositivos_casa";
        $respuesta = TemperaturaModelo::mostrarTemperaturaActual($tabla);
        return $respuesta;
    }
    public function mostrarHumedad(){
        $tabla = "dispositivos_casa";
        $respuesta = TemperaturaModelo::mostrarHumedad($tabla);
        return $respuesta;
    }

}


?>