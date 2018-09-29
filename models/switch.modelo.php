<?php
require_once 'conexion.php';
class SwitchModelo{
    static public function AlarmaOn ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 1 WHERE Id_Dispositivo = 1");
		$sql -> execute();
		echo 'funciona';
    }
    static public function AlarmaOff ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 0 WHERE Id_Dispositivo = 1");
		$sql -> execute();
		echo 'funcionaaaaa';
    }

    static public function CocinaOn ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 1 WHERE Id_Dispositivo = 2");
		$sql -> execute();
		echo 'funciona';
    }
    static public function CocinaOff ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 0 WHERE Id_Dispositivo = 2");
		$sql -> execute();
		echo 'funcionaaaaa';
    }

    static public function BañoOn ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 1 WHERE Id_Dispositivo = 3");
		$sql -> execute();
		echo 'funciona';
    }
    static public function BañoOff ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 0 WHERE Id_Dispositivo = 3");
		$sql -> execute();
		echo 'funcionaaaaa';
    }

    static public function GarageOn ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 1 WHERE Id_Dispositivo = 4");
		$sql -> execute();
		echo 'funciona';
    }
    static public function GarageOff ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 0 WHERE Id_Dispositivo = 4");
		$sql -> execute();
		echo 'funcionaaaaa';
    }

    static public function Dormitorio1On ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 1 WHERE Id_Dispositivo = 5");
		$sql -> execute();
		echo 'funciona';
    }
    static public function Dormitorio1Off ($tabla) {
        $sql = Conexion::conectar()->prepare("UPDATE $tabla SET Estado_Dispositivo= 0 WHERE Id_Dispositivo = 5");
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