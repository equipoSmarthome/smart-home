<?php
class ControllerSwitch {
    public function mostrarSwitchAlarma() {
        $tabla = "dispositivos_casa";
        $respuesta = SwitchModelo::mostrarSwitchAlarma($tabla);
        return $respuesta;
    }
    public function mostrarSwitch() {
        $tabla = "dispositivos_casa";
        $respuesta = SwitchModelo::mostrarSwitch($tabla);
        return $respuesta;
    }


}





?>