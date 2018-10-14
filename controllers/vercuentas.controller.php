<?php

class ControllerCuenta {
    public function verCuentas(){
        $tabla = "usuario_2";
        $respuesta = ModeloCuenta::verCuenta($tabla);
        return $respuesta;
    }
}
?>