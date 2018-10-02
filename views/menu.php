<?php 
require_once '../controllers/switch.vista.controller.php';
require_once '../models/switch.modelo.php';
	
	if (!isset($_SESSION['correo'])) {
	 	header('Location: ../index.php');
	}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-switch.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Menu</title>
</head>
<body>
    <div class="opacidad"></div>
    <header>
       <div class="col-12 nav fixed-top" >
            <nav class="col-5 col-md-3 navbar navbar-expand-xs navbar-dark">
                <button class="navbar-toggler boton-nav mb-4 ml-5" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse texto-menu-hamburguesa" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu-desplegable">
                        <li class="nav-item active">
                            <a class="nav-link" href="modulos/miperfil.php">Mi Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="modulos/nueva-cuenta.php">Añadir Cuenta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="modulos/salir.php">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="col-auto col-md-1 nombre-usuario " >
                <p><?php echo $_SESSION['correo']; ?></p>
            </div>
            <div class="col col-md-4 mt-1 alarma">
                <h4>Alarma</h4>
                <div class="custom-switch custom-switch-label-onoff actAlarma">   
                <label class="bs-switch">
                
                <?php 
          
          $alarma = ControllerSwitch::mostrarSwitchAlarma();

          foreach ($alarma as $key => $value) {
            echo '
            <input type="checkbox" name="alarma" value="'.$value["Estado_Dispositivo"].'">
            ';
          }
          ?>
  
                </label>
                </div>
            </div>
            <div class="col d-none d-md-block logo-header">
                <img class="" src="img/logo/logo-pequeño.png" alt="">
            </div>
        </div>
    </header>
    <div class="container principal">
        <div class="row justify-content-center">
            <div class="col-12">
                <fieldset class="menu-principal">
                    <legend>Menu </legend>
                    <div class="botones-menu mb-3">
                        <div class="row">
                            <div class="col-12 col-md-6">
                            <button class="btn btn-primary" id="luz"><img class="iconos-menu " src="img/iconos/light-bulb.png" alt=""><p class="mt-3">Luces</p></button>
                            </div>

                            <div class="col-12 col-md-6">
                            <button class="btn btn-primary" id="temperatura"><img class="iconos-menu " src="img/iconos/thermometer.png" alt=""><p class="mt-3">Temperatura</p></button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                            <button class="btn btn-primary" id="puerta"><img class="iconos-menu " src="img/iconos/door.png" alt=""><p class="mt-3" >Puertas</p></button>
                            </div>

                            <div class="col-12 col-md-6">
                            <button class="btn btn-primary" id="eventos"><img class="iconos-menu " src="img/iconos/calendar.png" alt=""><p class="mt-3">Eventos</p></button>
                            </div>
                        </div>    
                        
                    </div>
                </fieldset>
            </div>
        </div>

    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <script src="js/bootstrap-switch.min.js"></script>
    <script src="js/acciones-menu.js"></script>
    <script src="js/alertify.js"></script>
</body>

</html>