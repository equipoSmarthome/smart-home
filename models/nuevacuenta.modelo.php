<?php
require_once 'conexion.php';
session_start();


class nuevaCuentalModelo {
    static public function nuevaCuenta ($tabla, $correo, $pass1){
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("INSERT INTO $tabla (id, Correo_Usuario_2, Contraseña, id_Usuario_1, Nivel) VALUES (NULL, '$correo', '$pass1', '$id', Nivel=2) ");
		$sql -> execute();
		echo 1;
    }
}





?>