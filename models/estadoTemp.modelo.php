<?php
require_once 'conexion.php';
session_start();
class TemperaturaModeloo {
	static public function EncenderTemp ($tabla) {
		$id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo = 1 WHERE id_Dispositivo = 7 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funciona';
	}
	static public function ApagarTemp ($tabla) {
		$id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo = 0 WHERE id_Dispositivo = 7 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funcionaaaaa';
	}
}