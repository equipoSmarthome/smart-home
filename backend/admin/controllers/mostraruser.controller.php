<?php
Class ControllerUsuario {
    public function mostrarUsuario() {
        $tabla = "usuario_1";
        $respuesta = ModeloUsuario::mostrarUsuarioMdl($tabla);
        return $respuesta;
    }
    public function mostrarUsuarioPendiente(){
        $tabla = "usuario_pendiente";
        $respuesta = ModeloUsuario::mostrarUsuarioPendienteMdl($tabla);
        return $respuesta;
    }
}




?>