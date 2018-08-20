<?php 
class ControllerSesion {
	public function IniciarSesionCtr(){
		if (isset($_POST["user"])) {
			$tabla = "usuarios";
			$usuario = $_POST["user"];
			$respuesta = ModeloSesion::iniciarSesionMdl($tabla, $usuario);
			if ($respuesta["correo"] == $_POST["user"] && $respuesta["password"] == $_POST["password"] ){
				$_SESSION["nombre"] = $respuesta["correo"];
				$_SESSION["id"] = $respuesta["id"];
				echo '
					<script>
						window.location = "../menu.php"
					</script>

				';	
			} else {
				echo '
					<div class="alert alert-danger">
					Datos Incorrectos. Intentelos nuevamente</div>
				';
			}
		}
	}
}

?>
