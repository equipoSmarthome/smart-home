<?php
require_once 'conexion.php';
session_start();
class ModeloCuenta {
    static public function eliminarCuenta ($tabla, $idcuenta){
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id ='$idcuenta' AND id_Usuario_1 = '$id' ");
		if( $sql -> execute() ) {
			return "1";
		} else {
			return "error";
		} 
    }
}


?>