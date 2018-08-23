<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Menu</title>
</head>
<body class="fondo">
    <div class="opacidad"></div>
    <!-- CONTAINER DEL MENU DE ARRIBA -->
    <nav class="nav navbar fixed-top navbar-expand-xs navbar-dark row justify-content-between cabezera">
        <div class="col-2 menuHamburgueza">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"   aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-5 mt-lg-0">
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
        </div>

        <div class="col-3 inDoor">
            <h1>Menu</h1>
        </div>

        <div class="col-3 outDoor">
          
        </div>

        <div class="col-3 logo">
            <img class="img-fluid" src="img/logo/logo-pequeño.png" alt="">
        </div>

    </nav>
    <!-- FIN DEL MENU DE ARRIBA -->

    <div class="container principal">
        <div class="row">
            <div class="col-12">
                <fieldset class="menu-principal">
                    <legend>menu</legend>
                    <div class="botones-menu mb-3">
                        <button class="btn btn-primary"><img class="iconos-menu mt-3" src="img/iconos/light-bulb.png" alt=""><p class="mt-4">Luces</p></button>
                        <button class="btn btn-primary"><img class="iconos-menu mt-3" src="img/iconos/thermometer.png" alt=""><p class="mt-4">Temperatura</p></button>
                        <button class="btn btn-primary"><img class="iconos-menu mt-3" src="img/iconos/door.png" alt=""><p class="mt-4">Puertas</p></button>
                        <button class="btn btn-primary"><img class="iconos-menu mt-3" src="img/iconos/calendar.png" alt=""><p class="mt-4">Eventos</p></button>
                    </div>
                </fieldset>
            </div>
        </div>

    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
</body>

</html>
