<?php
require_once "conexion.php";

Class completarModal {
    static public function completarModal1($valor, $tabla){
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_pendiente = '$valor' ");
        $sql -> execute();
        return $sql -> fetchAll();
    }
}




?>