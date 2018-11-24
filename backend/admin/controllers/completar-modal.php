<?php
require_once "../models/completar-modal.php";
$valor = $_POST['datos'];
$tabla = "usuario_pendiente";
$respuesta = completarModal::completarModal1($valor, $tabla);
echo json_encode($respuesta);




?>