<?php 

Class ControllerSubcategoria {
	public function listarSubCategoriaCtr(){
		$tabla = "subcategorias";
		$respuesta = ModeloSubCategoria::listarSubCategoriaMdl($tabla);
		return $respuesta;
	}

	static public function ctrCrearSubcategoria($datos) {
		$tabla = "subcategorias";
		list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);	
		$nuevoAncho = 1024;
		$nuevoAlto = 768;
		$directorio = "../views/dist/img/subcategorias";
		if($datos["imagen"]["type"] == "image/jpeg"){
			$rutaImagen = $directorio."/".md5($datos["imagen"]["tmp_name"]).".jpeg";
			$origen = imagecreatefromjpeg($datos["imagen"]["tmp_name"]);
			$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
			imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
			imagejpeg($destino, $rutaImagen);
		}
		if($datos["imagen"]["type"] == "image/png"){
			$rutaImagen = $directorio."/".md5($datos["imagen"]["name"]).".png";
			$origen = imagecreatefrompng($datos["imagen"]["tmp_name"]);						
			$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
			imagealphablending($destino, FALSE);
			imagesavealpha($destino, TRUE);
			imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
			imagepng($destino, $rutaImagen);
		}
		$respuesta = ModeloSubcategoria::mdlCrearSubcategoria($tabla, $datos, $rutaImagen);
		return $respuesta;
	}

	static public function ctrEliminarSubcategoria($id_subcategoria, $ruta) {
		$tabla = "subcategorias";
		if ( unlink($ruta) ) {
			$respuesta = ModeloSubcategoria::mdlEliminarSubcategoria($tabla, $id_subcategoria);	
		}
		return $respuesta;
	}

	static public function ctrEditarSubcategoria($id_subcategoria) {
		$tabla = "subcategorias";
		$respuesta = ModeloSubcategoria::mdlEditarSubcategoria($tabla, $id_subcategoria);
		return $respuesta;
	}

	static public function ctrActualizarSubcategoria($datos) {
		$tabla = "subcategorias";
		if ($datos["imagen"]["error"] == 4) {
			$rutaImagen = null;
		} 
		else {
			unlink("../".$datos["rutaActual"]);
			list($ancho, $alto) = getimagesize($datos["imagen"]["tmp_name"]);
			$nuevoAncho = 1024;
			$nuevoAlto = 768;
			$directorio = "../views/dist/img/subcategorias";
			if($datos["imagen"]["type"] == "image/jpeg"){
				$rutaImagen = $directorio."/".md5($datos["imagen"]["tmp_name"]).".jpeg";
				$origen = imagecreatefromjpeg($datos["imagen"]["tmp_name"]);						
				$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
				imagejpeg($destino, $rutaImagen);
			}
			if($datos["imagen"]["type"] == "image/png"){
				$rutaImagen = $directorio."/".md5($datos["imagen"]["name"]).".png";
				$origen = imagecreatefrompng($datos["imagen"]["tmp_name"]);						
				$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
				imagealphablending($destino, FALSE);
		
				imagesavealpha($destino, TRUE);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
				imagepng($destino, $rutaImagen);
			}		
		}
		$respuesta = ModeloSubcategoria::mdlActualizarSubcategoria($tabla, $datos, $rutaImagen);
		return $respuesta;
	}
}

?>