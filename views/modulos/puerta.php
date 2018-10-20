<?php 
    require_once '../../controllers/switch.vista.controller.php';
    require_once '../../models/switch.modelo.php';
    require_once '../../controllers/puerta.controller.php';
    require_once '../../models/puerta.modelo.php';
    
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
                        <?php
                            if ($_SESSION['nivel'] == 1 ) {
                                echo '
                                <a class="nav-link" href="nueva-cuenta.php">Añadir Cuenta</a>
                                ';
                            }
                            ?>
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
        <div class="col-12 col-md-6">
                <fieldset class="menu-principal">
                    <legend>Puerta Principal</legend>
                    <div class="row">
                        <div class="col-12 mt-3 mb-5 boton-desbloqueo">
                            <button class="btn btn-primary" name="puertaPrincipal"><i class="fas fa-lock mt-3 lock fa-3x"></i><p class="mt-4">Desbloquear</p></button>
                            <br>
                            <br>
                            <div class="progress" style="display: none">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" >
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>* Al presionar. Desbloqueras la chapa por 10 seg. Despues se volvera a bloquear</p>
                        </div>
                    </div>
                </fieldset>
            </div> 

            
                        <?php 
          
          $puertaOn = ControllerPuerta::mostrarPuerta();

          foreach ($puertaOn as $key => $value) {
              if ($value["Estado_Dispositivo"] == 0 || $value["Estado_Dispositivo"] == 4) {
                  echo '
                  

            <div class="col-12 col-md-6">
                <fieldset class="menu-principal">
                    <legend>Puerta Garage</legend>
                    <div class="row">
                        <div class="col-12 boton-garage ">
                            <button class="btn btn-primary" value=0 name="abrirPuerta"><img class="iconos-menu mt-2" src="../img/iconos/abrir-puerta.png" alt=""><p class="mt-4">Abrir</p></button>
                        </div>

                        <div class="col-12 boton-garage">
                            <button class="btn btn-primary" value=1 name="cerrarPuerta" style="background: #35AE6B; border-color: transparent;"><img class="iconos-menu mt-2" src="../img/iconos/bajar-puerta.png" alt=""><p class="mt-4" >Cerrado</p></button>
                        </div>

                        
                    </div>
                </fieldset>
                
                  
                  
                  
                  ';
                  
              } else {
                echo '
               

          <div class="col-12 col-md-6">
              <fieldset class="menu-principal">
                  <legend>Puerta Garage</legend>
                  <div class="row">
                      <div class="col-12 boton-garage ">
                          <button class="btn btn-primary" value=1 name="abrirPuerta" style="background: #35AE6B; border-color: transparent;"><img class="iconos-menu mt-2" src="../img/iconos/abrir-puerta.png" alt=""><p class="mt-4">Abierto</p></button>
                      </div>

                      <div class="col-12 boton-garage-cerrar mb-5">
                          <button class="btn btn-primary"  value=0 name="cerrarPuerta"><img class="iconos-menu mt-2" src="../img/iconos/bajar-puerta.png" alt=""><p class="mt-4" >Cerrar</p></button>
                      </div>

                      
                  </div>
              </fieldset>
              
                
                
                
                ';
              }
            
            }
          ?>



                            
                        

                        

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