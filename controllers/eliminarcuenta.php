<?php
require_once '../models/eliminarcuenta.php';
$tabla = "usuario_2";
$idUsuario = $_POST['id_cuenta'];
$respuesta = ModeloCuenta::eliminarCuenta($tabla, $idUsuario);
return $respuesta;
?>

