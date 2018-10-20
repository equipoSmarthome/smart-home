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
	static public function ventiladorAuto ($tabla, $valor) {
		$id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo = 3 WHERE id_Dispositivo = 7 AND id_Usuario = '$id' ");
		$sql1 = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo = $valor WHERE id_Dispositivo = 13 AND id_Usuario = '$id' ");
		$sql -> execute();
		$sql1 -> execute();
		echo 'funcionaaaaa';
	}
}