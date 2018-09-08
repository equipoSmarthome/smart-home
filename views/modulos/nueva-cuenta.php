<div>
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
        <link rel="stylesheet" href="../css/calendar.min.css">
        <script src="../js/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="../css/bootstrap-switch.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="../js/calendar.min.js"></script>
        <title>Mi Perfil</title>
    </head>
    <body>
        <div class="opacidad"></div>
        <div class="btn btn-primary" id="volverMenu">Volver</div>
        <header>
           <div class="col-12 nav fixed-top" >
                <nav class="col-3 navbar navbar-expand-xs navbar-dark">
                    <button class="navbar-toggler boton-nav mb-4 ml-5" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
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
                <div class="col-4 mt-1 alarma">
                    <h4>Alarma</h4>
                    <div class="custom-switch custom-switch-label-onoff actAlarma">   
                    <label class="bs-switch">
                    <input type="checkbox" name="alarma" checked>
      
                    </label>
                    </div>
                </div>
                <div class="logo-header">
                    <img class="" src="../img/logo/logo-pequeño.png" alt="">
                </div>
            </div>
        </header>
        <div class="container principal">
            <div class="row">
                <div class="col-12">
                    <fieldset class="menu-principal">
                        <legend>Mis Cuentas</legend>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Nueva Cuenta</button>

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nueva Cuenta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Categoria" required name="tituloCategoria">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Contraseña" required name="tituloCategoria">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Repetir Contraseña</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Contraseña" required name="tituloCategoria">
                                </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <br>
                        <br>
                        <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Usuarios</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
                    </fieldset>
                </div>
            </div>
        </div>
    
    
    
    
    
    
        
        
    

        
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/fontawesome.min.js"></script>
        <script src="../js/calendar.min.js"></script>
        <script src="../js/bootstrap-switch.min.js"></script>
        <script src="../js/acciones.js"></script>
        
    </body>
    </html>
</div>