<?php 
    session_start();
    unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/fontawesome.min.css">
    <link rel="stylesheet" href="views/css/estilos.css">

    <title>Inicio</title>

</head>
<!-- -------Por Aqui Paso Patolalala------- -->
<body class="fondo">
    <!-- div para el efecto de opacidad -->
    <div class="opacidad"></div>
    <!-- -------------- -->

    <!-- Comienzo Estrucutura Pagina -->
    <div class="container mt-5">

        <div class="row justify-content-center">
            <!-- Columna del logo -->
            <div class="col-12 logo mt-2">
                <!-- ------- -->
                <img class="img-fluid" src="views/img/logo/logo.png" alt="">
                <!-- Eslogan -->
                <p class="eslogan">El control de tu Hogar al alcance de tu mano</p>
                <!-- ------------>
            </div>
            <!-- columna del boton -->
            <div class="col-6 boton">
                <button class="btn btn-primary btn-lg btn-block" id="irLogin">
                    <i class="fas fa-sign-in-alt"></i>Entrar</button>
            </div>
            <!-- Columna del link para Registrarse -->
            <div class="col-12 mt-5">
                <a class="link-Registrate" href="#" data-toggle="modal" data-target="#modal-registrarse">¿Eres Nuevo?¡Registrate!</a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modal-registrarse" tabindex="-1" role="dialog" aria-labelledby="modal-registrarse" aria-hidden="true">
                <div class="modal-dialog modal-dialog-md modal-dialog-centered " role="document">
                    <div class="modal-content bg-dark">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Activacion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body bg-dark">
                            <div class="col-auto input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Ingrese su Correo">
                            </div>
                            <div class="col-auto input-group mb-4">
                                <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Ingrese MAC de Arduino">
                                </div>
                            </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Enviar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="views/js/jquery-3.3.1.min.js"></script>
    <script src="views/js/popper.min.js"></script>
    <script src="views/js/bootstrap.min.js"></script>
    <script src="views/js/fontawesome.min.js"></script>
    <script src="views/js/acciones.js"></script>
</body>

</html>