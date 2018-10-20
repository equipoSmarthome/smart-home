<?php 
    require_once '../../controllers/switch.vista.controller.php';
    require_once '../../models/switch.modelo.php';
    require_once '../../controllers/temp.controller.php';
    require_once '../../models/temp.modelo.php';
    
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
    <link rel="stylesheet" href="../css/bootstrap-switch.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Temperatura</title>
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

            <div class="col-auto col-md-1 nombre-usuario " >
                <p><?php echo $_SESSION['correo']; ?></p>
            </div>
            
            <div class="d-none d-md-block logo-header">
                <img class="" src="../img/logo/logo-pequeño.png" alt="">
            </div>
        </div>
    </header>
    <div class="container principal">
        <div class="row">
            <div class="col-12 col-md-6 temperatura">
                <fieldset class="menu-principal">
                    <legend>Informacion General</legend>
                    <div class="row">
                        <div class="col-12 mt-3 mb-5">
                            <h2>Temperatura Actual</h2>
                            <?php 
          
            $tempActual = ControllerTemperatura::mostrarTempActual();

          foreach ($tempActual as $key => $value) {
            echo '
            <p class="h1 texto-temperatura">'.$value[2].' °C
            ';
          }
          ?>
                                            
                        </div>
                        <div class="col-12 mt-3 mb-5">
                            <h2>Humedad Actual</h2>
                            <?php 
          
            $humedad = ControllerTemperatura::mostrarHumedad();

          foreach ($humedad as $key => $value) {
            echo '
            <p class="h1 texto-temperatura">'.$value[2].' %
            ';
          }
          ?>
                                            
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="col-12 col-md-6 configuracion-ventilador ">
                <fieldset class="menu-principal">
                    <legend>Configuracion Ventilador</legend>
                    <label>Funciones Ventilador</label>
                    <h6 class="mb-3">Definido por el sensor de T°</h6>
                    <div class="cantidad">
                        <div id="menos" class="col-7"><i class="fa fa-minus" aria-hidden="true"></i></div>

                        <?php 
          
          $ventiladorAuto = ControllerTemperatura::mostrartempIdeal();

        foreach ($ventiladorAuto as $key => $value) {
          echo '
          <div class="total" value="lala">'.$value[2].'</div>
          ';
        }
        ?>


                        
                        <div id="mas" class="col-7"><i class="fa fa-plus" aria-hidden="true"></i></div>
                    </div>
                    <br>
                            <br>
                    <div class="row">
                        <div class="col-12 boton-automatico ">
                            
                                <?php 
          
                                $temperatura = ControllerTemperatura::mostrarTemperatura();
                                foreach ($temperatura as $key => $value) {
                                    if ($value["Estado_Dispositivo"] == 1) {
                                        echo '
                                        <button class="btn btn-primary ventiladorAuto"><img class="iconos-menu-temperatura mt-1" src="../img/iconos/rayo.png" alt=""><p class="mt-2">Automatico</p></button> 
                        </div>                    
                        <div class="col-12 mt-3 mb-3">
                            <h6 class="mb-3">Definido por el usuario</h6>
                            <div class="row">
                                        <div class="col-6 col-md-6 boton-usuario">
                                            <button class="btn btn-primary" name="TempOff" value=0><img class="iconos-menu-temperatura mt-1" src="../img/iconos/ventilador-apagado.png" alt=""><p class="mt-2">Desactivar</p></button>
                                        </div> 
                                        <div class="col-6 col-md-6 boton-usuario">
                                            <button class="btn btn-primary" id="temperatura" name="TempOn" value=1" style="background: #35AE6B;  border-color: transparent"><img class="iconos-menu-temperatura mt-1" src="../img/iconos/ventilador-encendido.png" alt=""><p class="mt-2">Activado</p></button>
                                        </div>  
                                        ';
                                    } else if ($value["Estado_Dispositivo"] == 0){
                                        echo ' 
                                        <button class="btn btn-primary ventiladorAuto"><img class="iconos-menu-temperatura mt-1" src="../img/iconos/rayo.png" alt=""><p class="mt-2">Automatico</p></button> 
                        </div>                    
                        <div class="col-12 mt-3 mb-3">
                            <h6 class="mb-3">Definido por el usuario</h6>
                            <div class="row">
                                        <div class="col-6 col-md-6 boton-usuario">
                                            <button class="btn btn-primary" name="TempOff" value=1" style="background: #35AE6B;  border-color: transparent"><img class="iconos-menu-temperatura mt-1" src="../img/iconos/ventilador-apagado.png" alt=""><p class="mt-2">Desactivar</p></button>
                                        </div> 
                                        <div class="col-6 col-md-6 boton-usuario">
                                            <button class="btn btn-primary" id="temperatura" name="TempOn" value=0><img class="iconos-menu-temperatura mt-1" src="../img/iconos/ventilador-encendido.png" alt=""><p class="mt-2">Activado</p></button>
                                        </div>  
                                        ';
                                    } else if ($value["Estado_Dispositivo"] == 3){
                                        echo ' 
                                        <button class="btn btn-primary ventiladorAuto" style="background: #35AE6B;  border-color: transparent"><img class="iconos-menu-temperatura mt-1" src="../img/iconos/rayo.png" alt=""><p class="mt-2">Automatico</p></button> 
                        </div>                    
                        <div class="col-12 mt-3 mb-3">
                            <h6 class="mb-3">Definido por el usuario</h6>
                            <div class="row">
                                        <div class="col-6 col-md-6 boton-usuario">
                                            <button class="btn btn-primary" name="TempOff" value=0" ><img class="iconos-menu-temperatura mt-1" src="../img/iconos/ventilador-apagado.png" alt=""><p class="mt-2">Desactivar</p></button>
                                        </div> 
                                        <div class="col-6 col-md-6 boton-usuario">
                                            <button class="btn btn-primary" id="temperatura" name="TempOn" value=0><img class="iconos-menu-temperatura mt-1" src="../img/iconos/ventilador-encendido.png" alt=""><p class="mt-2">Activado</p></button>
                                        </div>  
                                        ';
                                    }
                                    
                                }
                                 ?>                                                    
                            </div>
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

    
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/fontawesome.min.js"></script>
    <script src="../js/bootstrap-switch.min.js"></script>
    <script src="../js/luces.js"></script>
</body>
</html>