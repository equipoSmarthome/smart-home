<?php

class ControllerPuerta {
    public function mostrarPuerta() {
        $tabla = "dispositivos_casa";
        $respuesta = PuertaModelo::mostrarPuerta($tabla);
        return $respuesta;
    }


}


?>