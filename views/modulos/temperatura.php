<?php 
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
            <div class="col col-md-4 mt-1 alarma">
                <h4>Alarma</h4>
                <div class="custom-switch custom-switch-label-onoff actAlarma">   
                <label class="bs-switch">
                <input type="checkbox" name="alarma" checked>
  
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
            <div class="col-12 col-md-6 temperatura">
                <fieldset class="menu-principal">
                    <legend>Informacion General</legend>
                    <div class="row">
                        <div class="col-12 mt-3 mb-5">
                            <h1>Temperatura Actual</h1>
                            <p class="h1 texto-temperatura">5,0° C</p>                 
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="col-12 col-md-6 configuracion-ventilador ">
                <fieldset class="menu-principal">
                    <legend>Configuracion Ventilador</legend>
                    <label>Funciones Ventilador</label>
                    <h6 class="mb-3">Definido por el sensor de T°</h6>
                    <div class="row">
                        <div class="col-12 boton-automatico ">
                            <button class="btn btn-primary"><img class="iconos-menu-temperatura mt-1" src="../img/iconos/rayo.png" alt=""><p class="mt-2">Automatico</p></button>
                        </div>

                        
                        <div class="col-12 mt-3 mb-3">
                            <h6 class="mb-3">Definido por el usuario</h6>
                                <div class="row">
                                    <div class="col-6 col-md-6 boton-usuario">
                                        <button class="btn btn-primary" id="luz"><img class="iconos-menu-temperatura mt-1" src="../img/iconos/ventilador-apagado.png" alt=""><p class="mt-2">Desactivado</p></button>
                                    </div>         

                                    <div class="col-6 col-md-6 boton-usuario">
                                        <button class="btn btn-primary" id="luz"><img class="iconos-menu-temperatura mt-1" src="../img/iconos/ventilador-encendido.png" alt=""><p class="mt-2">Activado</p></button>
                                    </div>                        
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
    <script src="../js/acciones.js"></script>
</body>
</html>