<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Usuarios Activos</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,500" rel="stylesheet">
  
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

</head>
<body class="hold-transition skin-blue sidebar-mini login-page">
  <?php
    session_start();
    
    if (isset($_SESSION["autenticar"]) && $_SESSION["autenticar"] == "ok") {
    include 'modulos/menu.php';

      if( isset($_GET["ruta"])) {
        
        $enrutar = new ControllerEnrutamiento();
        $enrutar -> enrutamiento();

       // include "modulos/modales/modales-".$_GET["ruta"].".php";

      } else {
        include "modulos/home.php";
      }
      
     


    } else {
      include "modulos/login.php";
    }
    
    
  ?>
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="views/dist/js/usuario.js"></script>


<script src="views/dist/js/slider.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.11/dist/sweetalert2.all.min.js"></script></body>
</html>