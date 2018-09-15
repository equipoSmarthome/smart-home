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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">

    <title>Login</title>

</head>

<body class="fondo">
    <div class="btn btn-primary" id="volverInicio">Volver</div>
    <div class="opacidad"></div>

    <div class="container mt-5">

        <div class="row justify-content-center">
            <!-- inicio del logo -->
            <div class="col-12 col-sm-10 col-md-8 logo">
                <img class="img-fluid" src="../img/logo/logo.png" alt="">
            </div>
                <!-- fin del logo -->

                <!-- inicio del formulario -->
            <div class="col-10 col-md-6 col-lg-5 formulario" >
                <form method="post" action="../../controllers/sesion.controller.php">
                    <div class="input-group mb-4 mt-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo" aria-label="Username"name="usuario" required>
                    </div>

                    <div class="input-group mb-5">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Contraseña" aria-label="Username" name="pas" required>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-10">
                            <button type="submit" class="btn btn-primary btn-block" name="entrar" value="entrar">Iniciar Sesion</button>
                        </div>

                    </div>

                </form>
            </div>
                <!-- fin del formulario -->

                <!-- link de recuperar contraseña -->

            <div class="col-12 mt-4">
                <a class="link-recupera" href="#" data-toggle="modal" data-target="#modal-contraseña">Recuperar Contraseña</a>
            </div>
            <!-- fin del recuperar contraseña -->

            <!-- inicio de ventana modal -->
            <div class="modal fade modal-recupera-contraseña" id="modal-contraseña" tabindex="-1" role="dialog" aria-labelledby="#modal-contraseña" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content bg-dark">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Recuperar Contraseña</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body bg-dark">
                            <p class="">Para Recuperar su Contraseña, Ingrese su Correo Electronico</p>
                            <div class="col-auto input-group mb-3 mt-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Ingrese su Correo">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Enviar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin ventana modal -->
        </div>


    </div>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/fontawesome.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../js/acciones.js"></script>
</body>
</html>