<?php 
require_once '../../models/conexion.php';
session_start();
require_once "../../controllers/mostraruser.controller.php";
require_once "../../models/mostaruser.modelo.php";

if (!isset($_SESSION['correo'])) {
  header('Location: ../../../../index.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Usuarios Activos</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,500" rel="stylesheet">
	
	<link rel="stylesheet" href="../../css/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="barra-lateral col-12 col-sm-auto">
        <br>
				<div class="logo" style="padding: .6em;">
					<img class="img-fluid" src="../../img/logo-pequeño.png" alt="">
        </div>
        <br>
				<nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
          <?php echo '<p style="text-align: center;">Bienvenido: '.$_SESSION['correo'].'</p>'; ?>
					<a href="usuariosa.php" class="active"><i class="fas fa-user"></i><span>Usuarios Activos</span></a>
					<a href="usuariosp.php"><i class="fas fa-question-circle"></i><span>Usuarios Pendientes</span></a>
					<a href="../../../../views/modulos/salir.php"><i class="fas fa-times-circle"></i><span>Salir</span></a>
				</nav>
			</div>

			<main class="main col">
				<div class="row justify-content-center">
					<div class="col-auto mb-1">
						<h2 style="margin-bottom: 35px; margin-top:20px;">Usuarios Activos</h2>
					</div>
					<div class="col-12 ">
						<table class="table table-inverse table-hover">
 							 <thead>
					            <tr>
					              <th scope="col">Id</th>
					              <th scope="col">Usuario</th>
                        <th scope="col">Mac</th>
                        <th scope="col">Licencia</th>
					            </tr>
          					 </thead>
          						<tbody>
                      <?php 
                  $usuario = ControllerUsuario::mostrarUsuario();
                  foreach ($usuario as $key => $value) {
                    echo '
				              <tr>
                        <th scope="row">'.$value["0"].'</th>
                        <th scope="row">'.$value["1"].'</th>
                        <th scope="row">'.$value["3"].'</th>
                        <th scope="row">'.$value["4"].'</th>

				              </tr>
				            ';
                  }
				          
				          ?>

						            
           						</tbody>
						</table>
					</div>
				</div>
			</main>

		</div>
	</div>
	
	<!-- Usar la CDN requiere acceso a Internet -->
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->

	
	<script src="../../js/jquery-3.2.1.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>

