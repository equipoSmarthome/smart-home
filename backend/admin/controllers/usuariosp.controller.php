<?php 


Class ControllerUsuariosp {


	public function listarUserCtr() {
		$tabla = "usuario_pendiente";
		

		$respuesta = ModeloUsuariosp::listarUserMdl($tabla);
		return $respuesta;
	}

	static public function ctrEliminarUsuario($id_usuario) {
		$tabla2 = "usuario_1";
		$respuesta = ModeloUsuariosp::mdlEliminarUsuario($tabla, $id_usuario);	
		return $respuesta;
	}
}

?>