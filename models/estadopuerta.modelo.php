<?php
require_once 'conexion.php';
session_start();
class PuertaModeloo {
	static public function AbrirPuerta ($tabla) {
		$id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo = 1 WHERE id_Dispositivo = 9 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funciona';
	}
	static public function AbrirPuertaNeutro ($tabla) {
		$id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo = 3 WHERE id_Dispositivo = 9 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funciona';
	}
	static public function CerrarPuerta ($tabla) {
		$id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo = 0 WHERE id_Dispositivo = 9 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funcionaaaaa';
	}
	static public function CerrarPuertaNeutro ($tabla) {
		$id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo = 4 WHERE id_Dispositivo = 9 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funcionaaaaa';
	}

	static public function abrirPuertaPrincipal ($tabla) {
		$id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo = 1 WHERE id_Dispositivo = 8 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funciona';
	}
	static public function cerrarPuertaPrincipal ($tabla) {
		$id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo = 0 WHERE id_Dispositivo = 8 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funcionaaaaa';
	}
	
}