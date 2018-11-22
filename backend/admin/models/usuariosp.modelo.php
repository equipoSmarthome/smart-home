<?php 

require_once "conexion.php";
Class ModeloUsuariosp {
	
		static public function iniciarSesionMdl($tabla, $usuario) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE correo_admin = '$usuario'");
		$sql -> execute();
		return $sql->fetch();
	}
	
	static public function listarUserMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}

	static public function mdlCrearUsuariop($tabla, $id_usuario) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES(NULL, :Correo_Usuario_1, NULL, NULL, :Mac");
		$sql->bindParam(":id", $id_usuario, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}

}

?>