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
                    <legend>Mi Perfil</legend>
                    <br>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Correo</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Correo"  name="micorreo" readonly>
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-sm btn-info ">
                            
                                <i class="fas fa-edit">Editar</i>
                            </button>  
                        </div>
                  
                    </div>
                    <br>
                    <div class="form-group row">
                        
                        <label class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-7">
                        <input type="password" class="form-control" placeholder="Contraseña"  name="mipass">
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-sm btn-info ">
                                <i class="far fa-edit">Editar</i>
                            </button>  
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        
                        <label class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-7">
                        <input type="password" class="form-control" placeholder="Contraseña"  name="mipass">
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-sm btn-info ">
                                <i class="far fa-edit">Editar</i>
                            </button>  
                        </div>
                    <br>
                    <br>
                    <div class="form-group row">
                       <button class="btn btn-primary">Guardar</button> 
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
    <script src="../js/calendar.min.js"></script>
    <script src="../js/bootstrap-switch.min.js"></script>
    <script src="../js/acciones.js"></script>
    
</body>
</html>