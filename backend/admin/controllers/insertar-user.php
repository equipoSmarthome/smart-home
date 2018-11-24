<?php
require_once '../models/insertar-user.php';

$tabla = "usuario_1";
$correo = $_POST['correo'];
$mac = $_POST['mac'];
$pass = $_POST['pass'];

$respuesta = insertarUser::insertarUsuario($tabla, $correo, $mac, $pass);
return $respuesta;




?>