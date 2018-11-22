<?php 


Class ControllerSesionp {

	public function iniciarSesionCtr() {

		if (isset($_POST["user"])) {
			$tabla = "administrador";
			$usuario = $_POST["user"];

			$respuesta = ModeloSesion::iniciarSesionMdl($tabla, $usuario);
			
			if($respuesta["correo_admin"] == $_POST["user"] && $respuesta["password_admin"] == $_POST["password"]) {

				$_SESSION["autenticar"] = "ok";
				$_SESSION["nombre"] = $respuesta["correo_admin"];
				$_SESSION["id"] = $respuesta["id"];
			

				echo '
					<script>
						window.location = "usuariosa"
					</script>
				';

			} else {
				echo '
					<div class="alert alert-danger">
						Datos incorrectos. Inténtelo nuevamente.
					</div>	
				';
			}
		}
	}
	public function listarUserCtr() {
		$tabla = "usuario_1";
		$respuesta = ModeloSesion::listarUserMdl($tabla);
		return $respuesta;
	}

	static public function ctrEliminarUsuario($id_usuario) {
		$tabla = "usuario_pendiente";
		$respuesta = ModeloSesion::mdlEliminarUsuario($tabla, $id_usuario);	
		return $respuesta;
	}
}

?>