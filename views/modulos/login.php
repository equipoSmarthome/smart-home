<?php 
	//  session_start();
	//  unset($_SESSION['usuario']);
?>
<?php
    if(!empty($_POST["forgot-password"])){
        $conn = mysqli_connect("localhost", "root", "", "smarthome");
        
        $condition = "";
        if(!empty($_POST["user-email"])) {
            if(!empty($condition)) {
                $condition = " and ";
            }
            $condition = " Correo_Usuario_1 = '" . $_POST["user-email"] . "'";
        }
        
        if(!empty($condition)) {
            $condition = " where " . $condition;
        }

        $sql = "Select * from usuario_1 " . $condition;
        $result = mysqli_query($conn,$sql);
        $user = mysqli_fetch_array($result);
        
        if(!empty($user)) {
            require_once("correo/recuperarC.php");
        } else {
            $error_message = 'No User Found';
        }
    }
?>

<script>
function validate_forgot() {
    if(document.getElementById("user-email").value == "") {
        document.getElementById("validation-message").innerHTML = "Login name or Email is required!"
        return false;
    }
    return true
}
</script>

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
                <form id="form-login">
                    <div class="input-group mb-4 mt-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo"  aria-label="Username" name="correo" >
                    </div>
                    <div class="input-group mb-5">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Contraseña" aria-label="Username" name="pass" >
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
                <a class="link-recupera" href="#" data-toggle="modal" data-target="#modal-contra">Recuperar Contraseña</a>
            </div>
            <!-- fin del recuperar contraseña -->

            <!-- inicio de ventana modal -->
         <form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
            <div class="modal fade modal-recupera-contraseña" id="modal-contra" tabindex="-1" role="dialog" aria-labelledby="#modal-contra" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content bg-dark">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Recuperar Contraseña</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body bg-dark">
                            <!--<p class="">Para Recuperar su Contraseña, Ingrese su Correo Electronico</p>-->
                            <div class="col-auto input-group mb-3 mt-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="email" class="form-control" name="user-email" id="user-email" placeholder="Ingrese su Correo">
                            </div>
                        </div>
                        <div class="modal-footer">
                            
                          <button type="submit" name="forgot-password" id="forgot-password" value="Enviar" class="btn btn-primary">Enviar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- fin ventana modal -->
        </div>

        <div class="row justify-content-end ">
            <div class="col-auto mt-5">
               <div class="btn btn-primary" id="volverInicio">Volver</div>
            </div>
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