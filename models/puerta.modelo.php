<?php
require_once 'conexion.php';
class PuertaModelo {
    static public function mostrarPuerta($tabla) {
        $id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_Dispositivo = 9 AND id_Usuario = '$id'  ");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function AbrirPuerta ($tabla) {
		$id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo = 1 WHERE id_Dispositivo = 9 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funciona';
	}
	static public function CerrarPuerta ($tabla) {
		$id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo = 0 WHERE id_Dispositivo = 9 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funcionaaaaa';
	}
}




?>