<?php 

require_once "controllers/template.controller.php";
require_once "controllers/enrutamiento.controller.php";

require_once "controllers/usuariosp.controller.php";
require_once "controllers/sesion.controller.php";

require_once "models/sesion.modelo.php";
require_once "models/usuariosp.modelo.php";


$template = new ControllerTemplate();
$template -> template();


?>