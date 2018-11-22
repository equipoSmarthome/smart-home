<?php 
require_once "../controllers/sesion.controller.php";
require_once "../models/sesion.modelo.php";
Class ajaxUsuario {

	public $id_usuario;


	public function eliminarUsuario(){
		$id_usuario = $this->id_usuario;
		$respuesta = ControllerSesionp::ctrEliminarUsuario($id_usuario);
		echo $respuesta;
	}
}
$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion =="eliminarUsuario") {
	$eliminarUsuaario = new ajaxUsuario();
	$eliminarUsuaario -> id_usuario = $_POST["id_usuario"];
	$eliminarUsuaario -> eliminarUsuario();
}

?>