<?php
require_once 'conexion.php';

class ModeloCuenta {
    static public function verCuenta ($tabla){
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_Usuario_1 ='$id' ");
		$sql -> execute();
		return $sql -> fetchAll();   
    }
    static public function misPerfiles ($tabla){
        
        $correo = $_SESSION['correo'];
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE Correo_Usuario_2 ='$correo' ");
		$sql -> execute();
		return $sql -> fetchAll();   
    }
}


?>