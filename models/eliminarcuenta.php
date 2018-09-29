<?php
require_once 'conexion.php';
session_start();
class ModeloCuenta {
    static public function eliminarCuenta ($tabla, $idUsuario){
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id ='$idUsuario' ");
		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		} 
    }
}


?>