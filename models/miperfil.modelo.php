<?php
require_once 'conexion.php';
session_start();
class miPerfilModelo {
    static public function MiPerfil ($tabla, $correo, $pass1){
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Correo_Usuario_1 = '$correo', Contraseña = '$pass1' WHERE id = '$id' ");
		$sql -> execute();
		echo $id;
    }
}

?>