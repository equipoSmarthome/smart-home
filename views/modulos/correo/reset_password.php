<?php 
    //  session_start();
    //  unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/fontawesome.min.css">
    <link rel="stylesheet" href="../../css/estilos.css">

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
            <div class="col-12 logo mt-2">
                <img class="img-fluid" src="../..//img/logo/logo.png" alt="">
            </div>
            <!-- columna del boton -->
            <div class="col-8 col-md-6">
            <?php
                if(isset($_POST["reset-password"])) {
                    $conn = mysqli_connect("localhost", "root", "", "smarthome");
                    mysqli_set_charset($conn, "utf8");
                    $sql = "UPDATE usuario_1 SET Contraseña = '". $_POST["pass"]."' WHERE id_Usuario = '".$_GET["identificador"]. "'";

                    $result = mysqli_query($conn,$sql);
                    $success_message = "Contraseña Actualizada.";
                    
                }
            ?>

            <script>
            function validate_password_reset() {
                if((document.getElementById("pass").value == "") && (document.getElementById("confirm_password").value == "")) {
                    document.getElementById("validation-message").innerHTML = "Ingresa tu nueva contraseña"
                    return false;
                }
                if(document.getElementById("pass").value  != document.getElementById("confirm_password").value) {
                    document.getElementById("validation-message").innerHTML = "Las contraseñas deben ser iguales"
                    return false;
                }
                
                return true;
            }
            </script>
            <form name="frmReset" id="frmReset" method="post" onSubmit="return validate_password_reset();">
            <h3 class="restablecer-titulo">Restablecer Contraseña</h3>
                <?php if(!empty($success_message)) { ?>
                <div class="success_message"><?php echo $success_message; ?></div>
                <?php } ?>

                <div id="validation-message">
                    <?php if(!empty($error_message)) { ?>
                <?php echo $error_message; ?>
                <?php } ?>
				</div>
				
				<div class="input-group mt-3 mb-4">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
					</div>
					<input type="password" name="pass" id="Contraseña" class="form-control input-field" placeholder="Ingresa Nueva Contraseña">
				</div>

				<div class="input-group mb-4">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
					</div>
					<input type="password" name="confirm_password" id="confirm_password" class="form-control input-field" placeholder="Repita Nueva Contraseña">
				</div>
                
                <div class="field-group">
                    <div><input type="submit" name="reset-password" id="reset-password" value="Confirmar" class="btn btn-primary form-submit-button"></div>
                </div>	
            </form>
				
            </div>
        </div>
    </div>
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../../js/acciones.js"></script>
</body>

</html>