<?php 
    require_once '../../controllers/switch.vista.controller.php';
    require_once '../../models/switch.modelo.php';
	session_start();
	if (!isset($_SESSION['correo'])) {
	 	header('Location: ../index.php');
	}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/datepicker.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap-switch.min.css">
    <script src="../js/bootstrap-datepicker.js"></script>
    <title>Puertas</title>
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
                            <a class="nav-link" href="miperfil.php">Mi Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nueva-cuenta.php">Añadir Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salir.php">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </nav>
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
            <div class="d-none d-md-block logo-header">
                <img class="" src="../img/logo/logo-pequeño.png" alt="">
            </div>
        </div>
    </header>
    <div class="container principal">
        <div class="row">
            <div class="col-12 col-md-6">
                <fieldset class="menu-principal">
                    <legend>Puerta Principal</legend>
                    <div class="row">
                        <div class="col-12 mt-3 mb-5 boton-desbloqueo">
                            <button class="btn btn-primary"><img class="iconos-menu mt-3" src="../img/iconos/unlock.png" alt=""><p class="mt-4">Desbloquear</p></button>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="col-12 col-md-6">
                <fieldset class="menu-principal">
                    <legend>Puerta Garage</legend>
                    <div class="row">
                        <div class="col-12 boton-garage ">
                            <button class="btn btn-primary"><img class="iconos-menu mt-2" src="../img/iconos/abrir-puerta.png" alt=""><p class="mt-4">Abrir</p></button>
                        </div>

                        <div class="col-12 boton-garage">
                            <button class="btn btn-primary"><img class="iconos-menu mt-2" src="../img/iconos/bajar-puerta.png" alt=""><p class="mt-4">Cerrar</p></button>
                        </div>

                        
                    </div>
                </fieldset>

                <div class="row justify-content-end ">
                    <div class="col-auto">
                        <div class="btn btn-primary" id="volverMenu">Volver</div>
                    </div>
    </div>
            </div>
        </div>
    </div>
    
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/fontawesome.min.js"></script>
    <script src="../js/bootstrap-switch.min.js"></script>
    <script src="../js/luces.js"></script>
    
</body>
</html>