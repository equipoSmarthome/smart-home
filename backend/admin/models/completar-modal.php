<?php
require_once '../../models/conexion.php';

$valor = $_POST['valor'];
$tabla = "usuario_pendiente";
$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE 'id_pendiente' = $valor");
$sql -> execute();
return $sql -> fetchAll();


?>