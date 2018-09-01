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
    <title>Luces</title>
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
                            <a class="nav-link" href="#">Mi Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Añadir Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="col-4 mt-1 alarma">
                <h4>Alarma</h4>
                <div class="custom-switch custom-switch-label-onoff actAlarma">   
                    <input class="custom-switch-input" id="ADD_ID_HERE" type="checkbox">
                    <label class="custom-switch-btn" for="ADD_ID_HERE"></label>
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
                    <legend>Menu</legend>
            <div class="luz">
                <label for="">Cocina</label>
                <div class="row">
                    <div class="col">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="col">
                        <div class="custom-switch custom-switch-label-onoff swith-luces">   
                            <input class="custom-switch-input" id="ADD_ID_HERE" type="checkbox">
                            <label class="custom-switch-btn" for="ADD_ID_HERE"></label>
                        </div>
                    </div>
                    <div class="col">
                    <i class="far fa-lightbulb"></i>
                    </div>
                </div>
            </div>

             <div class="luz">
                <label for="">Luz Baño</label>
                <div class="row">
                    <div class="col">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="col">
                        <div class="custom-switch custom-switch-label-onoff swith-luces">   
                            <input class="custom-switch-input" id="ADD_ID_HERE" type="checkbox">
                            <label class="custom-switch-btn" for="ADD_ID_HERE"></label>
                        </div>
                    </div>
                    <div class="col">
                    <i class="far fa-lightbulb"></i>
                    </div>
                </div>
            </div>

             <div class="luz">
                <label for="">Luz Garage</label>
                <div class="row">
                    <div class="col">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="col">
                        <div class="custom-switch custom-switch-label-onoff swith-luces">   
                            <input class="custom-switch-input" id="ADD_ID_HERE" type="checkbox">
                            <label class="custom-switch-btn" for="ADD_ID_HERE"></label>
                        </div>
                    </div>
                    <div class="col">
                    <i class="far fa-lightbulb"></i>
                    </div>
                </div>
            </div>

             <div class="luz">
                <label for="">Luz Dormitorio 1</label>
                <div class="row">
                    <div class="col">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="col">
                        <div class="custom-switch custom-switch-label-onoff swith-luces">   
                            <input class="custom-switch-input" id="ADD_ID_HERE" type="checkbox">
                            <label class="custom-switch-btn" for="ADD_ID_HERE"></label>
                        </div>
                    </div>
                    <div class="col">
                    <i class="far fa-lightbulb"></i>
                    </div>
                </div>
            </div>

             <div class="luz">
                <label for="">Luz Dormitorio 2</label>
                <div class="row">
                    <div class="col">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="col">
                        <div class="custom-switch custom-switch-label-onoff swith-luces">   
                            <input class="custom-switch-input" id="ADD_ID_HERE" type="checkbox">
                            <label class="custom-switch-btn" for="ADD_ID_HERE"></label>
                        </div>
                    </div>
                    <div class="col">
                    <i class="far fa-lightbulb"></i>
                    </div>
                </div>
            </div>

             <div class="luz">
                <label for="">Luz Dormitorio 3</label>
                <div class="row">
                    <div class="col">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="col">
                        <div class="custom-switch custom-switch-label-onoff swith-luces">   
                            <input class="custom-switch-input" id="ADD_ID_HERE" type="checkbox">
                            <label class="custom-switch-btn" for="ADD_ID_HERE"></label>
                        </div>
                    </div>
                    <div class="col">
                    <i class="far fa-lightbulb"></i>
                    </div>
                </div>
            </div>
                </fieldset>
            </div>
        </div>
    </div>
   
    <div class="btn btn-primary" id="volverMenu">Volver</div>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/fontawesome.min.js"></script>
    <script src="../js/acciones.js"></script>
</body>
</html>
