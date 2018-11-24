<?php 


$id = $_SESSION['iduser'];
Class ModeloUsuario {
    static public function mostrarUsuarioMdl($tabla){
        $id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla ");
		$sql -> execute();
		return $sql -> fetchAll();
    }
    static public function mostrarUsuarioPendienteMdl($tabla){
        $id = $_SESSION['iduser'];
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla ");
		$sql -> execute();
		return $sql -> fetchAll();
    }
}



?>