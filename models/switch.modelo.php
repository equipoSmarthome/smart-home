<?php
require_once 'conexion.php';
session_start();
$id = $_SESSION['iduser'];
class SwitchModelo{
    
    static public function AlarmaOn ($tabla) {
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 1 WHERE id_Dispositivo = 1 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funciona';
    }
    static public function AlarmaOff ($tabla) {
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 0 WHERE id_Dispositivo = 1 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funcionaaaaa';
    }

    static public function CocinaOn ($tabla) {
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 1 WHERE id_Dispositivo = 2 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funciona';
    }
    static public function CocinaOff ($tabla) {
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 0 WHERE id_Dispositivo = 2 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funcionaaaaa';
    }

    static public function BañoOn ($tabla) {
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 1 WHERE id_Dispositivo = 3 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funciona';
    }
    static public function BañoOff ($tabla) {
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 0 WHERE id_Dispositivo = 3 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funcionaaaaa';
    }

    static public function GarageOn ($tabla) {
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 1 WHERE id_Dispositivo = 4 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funciona';
    }
    static public function GarageOff ($tabla) {
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 0 WHERE id_Dispositivo = 4 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funcionaaaaa';
    }

    static public function Dormitorio1On ($tabla) {
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 1 WHERE id_Dispositivo = 5 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funciona';
    }
    static public function Dormitorio1Off ($tabla) {
        $id = $_SESSION['iduser'];
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 0 WHERE id_Dispositivo = 5 AND id_Usuario = '$id' ");
		$sql -> execute();
		echo 'funcionaaaaa';
    }

    static public function Dormitorio2On ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 1 WHERE Id_Dispositivo = 6");
		$sql -> execute();
		echo 'funciona';
    }
    static public function Dormitorio2Off ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 0 WHERE Id_Dispositivo = 6");
		$sql -> execute();
		echo 'funcionaaaaa';
    }

    static public function Dormitorio3On ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 1 WHERE Id_Dispositivo = 7");
		$sql -> execute();
		echo 'funciona';
    }
    static public function Dormitorio3Off ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 0 WHERE Id_Dispositivo = 7");
		$sql -> execute();
		echo 'funcionaaaaa';
    }

}

?>