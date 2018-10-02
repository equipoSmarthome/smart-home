<?php
require_once 'conexion.php';
class TemperaturaModelo {
    static public function mostrarTemperatura($tabla){
        $id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_Dispositivo = 7 AND id_Usuario = '$id'  ");
		$sql -> execute();
		return $sql -> fetchAll();
    }
}



?>