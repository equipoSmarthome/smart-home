<?php 

class Conexion {
	private static $conexion=null;
	public function conectar () {
		
		$conexion = new PDO("mysql:host=localhost;dbname=smarthome", 
			"root",
			"",
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);

		return $conexion;

	}

}

?>
