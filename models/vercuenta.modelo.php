<?php
require_once 'conexion.php';

class ModeloCuenta {
    static public function verCuenta ($tabla){
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_Usuario_1 ='$id' ");
		$sql -> execute();
		return $sql -> fetchAll();   
    }
}


?>