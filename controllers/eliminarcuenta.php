<?php
require_once '../models/eliminarcuenta.php';
class ControllerCuenta {
    public $idcuenta;

    public function eliminarCuenta (){
        $idcuenta = $this->idcuenta;
		$respuesta = ControllerCuenta::ctrEliminarCuenta($idcuenta);
		echo $respuesta;
    }

    static public function ctrEliminarCuenta($idcuenta){
        $tabla = "usuario_2";
        $respuesta = ModeloCuenta::eliminarCuenta($tabla, $idcuenta);
        return $respuesta;
    }

}






$tipoOperacion = $_POST["tipoOperacion"];
if ($tipoOperacion == "eliminarCuenta") {
	$eliminarCuenta = new ControllerCuenta();
	$eliminarCuenta -> idcuenta = $_POST["idcuenta"];
	$eliminarCuenta -> eliminarCuenta();
}



?>

