<?php 
require_once '../../controllers/vercuentas.controller.php';
require_once '../../controllers/switch.vista.controller.php';
    require_once '../../models/switch.modelo.php';
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
        <link rel="stylesheet" href="../css/bootstrap-switch.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <title>Mi Perfil</title>
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
                        <li class="nav-item">
                            <a class="nav-link" href="miperfil.php">Mi Perfil</a>
                        </li>
                        <li class="nav-item active">
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
                <div class="col-12">
                    <fieldset class="menu-principal nueva-cuenta">
                        <legend>Mis Cuentas</legend>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nueva-cuenta">Nueva Cuenta</button>

                        <div class="modal fade modal-nueva-cuenta" id="nueva-cuenta" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content bg-dark">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nueva Cuenta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body bg-dark">
                            <form id="formu-nuevaCuenta">
                            <div class="form-group row">
                                <h6 class="col-sm-2 col-form-label">Correo</h6>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" placeholder="Correo" required name="correo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-sm-2 col-form-label">Contraseña</h6>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Contraseña" required name="pass">
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-sm-2 col-form-label">Repetir Contraseña</h6>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Contraseña" required name="pass2">
                                </div>
                            </div>
                            <input type="hidden" name="tipoOperacion" value="insertarCuenta">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                            </div>
                        </div>
                        </form>
                        </div>
                        <br>
                        <br>
                        <div class="table-responsive-md">
                        <table class="table table-dark table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Usuarios</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
        <?php
        require_once '../../models/vercuenta.modelo.php';
        $cuenta = ControllerCuenta::verCuentas();
        foreach ($cuenta as $key => $value) {
            echo '
            <tr>
                <th scope="row">'.$value['id'].'</th>
                <td>'.$value['Correo_Usuario_2'].'</td>
                <td width="100">
                  <button class="btn btn-sm btn-danger btnEliminarCuenta" idcuenta="'.$value["id"].'">
                    <i class="far fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
            ';
        }
?>

        </table>
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
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
        <script src="../js/luces.js"></script>
        
    </body>
    </html>
