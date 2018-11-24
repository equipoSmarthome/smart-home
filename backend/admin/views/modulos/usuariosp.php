<?php 
require_once '../../models/conexion.php';
session_start();
require_once "../../controllers/mostraruser.controller.php";
require_once "../../models/mostaruser.modelo.php";
require_once "../../models/completar-modal.php";

if (!isset($_SESSION['correo'])) {
  header('Location: ../../../../index.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Usuarios Pendientes</title>
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
        <div class="nombre-admin col-10 col-md-10">   
					<?php echo '<p style="text-align: center;">Bienvenido: '.$_SESSION['correo'].'</p>'; ?>
				</div>
					<a href="usuariosa.php"><i class="fas fa-user"></i><span>Usuarios Activos</span></a>
					<a href="usuariosp.php" class="active"><i class="fas fa-question-circle"></i><span>Usuarios Pendientes</span></a>
					<a href="../../../../views/modulos/salir.php"><i class="fas fa-times-circle"></i><span>Salir</span></a>
				</nav>
			</div>
      
			<main class="main col">
				<div class="row justify-content-center">
					<div class="col-auto mb-1">
						<h2 style="margin-bottom: 35px; margin-top:20px;">Usuarios Pendientes</h2>
          </div>
          <br>
          <br>
					<div class="col-12">
						<table class="table table-inverse table-hover">
 							 <thead>
					            <tr>
					              <th scope="col">Id</th>
					              <th scope="col">Correo</th>
					              <th scope="col">Fecha</th>
					              <th scope="col">Opciones</th>
					            </tr>
          					 </thead>
          						<tbody>
                        <?php 
                  $usuario = ControllerUsuario::mostrarUsuarioPendiente();
                  foreach ($usuario as $key => $value) {
                    echo '
				              <tr>
                        <th scope="row">'.$value["0"].'</th>
                        <th scope="row">'.$value["1"].'</th>
                        <th scope="row">'.$value["3"].'</th>
                        <th scope="row" class="editar"><button type="button" class="btn btn-primary" id="cambiar-estado" data-toggle="modal" data-target="#editar-estado" value="'.$value["0"].'"  name="'.$value["0"].'">Editar </button></th>

				              </tr>
				            ';
                  }
				          
				          ?>
						              
           						</tbody>
						</table>
					</div>
				</div>
			</main>

			<!-- --------------------------Modal----------------------- -->
			<div class="modal fade" id="editar-estado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 class="modal-title" id="exampleModalLabel">Activacion Usuarios</h4>
			      </div>
			      <div class="modal-body">
			      	<form action="" class="app" id="app">
              
                        <div class="row justify-content-center">
                        <div class="col-12">
                          <div class="input-group mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
														</div>
                        	<input type="text" class="form-control" placeholder="Correo" id="correo-pendiente" aria-describedby="basic-addon1" name="correo">
                         </div>
      
                      <div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1"><i class="fas fa-laptop"></i></span>
											</div>
                        <input type="text" class="form-control" placeholder="Mac" id="mac-pendiente" aria-describedby="basic-addon1" name="mac" readonly>
                      </div>
      
                              <div class="fila numero-caracteres">
                              <div>
                                <input type="hidden" id="numero-caracteres" readonly value="10">
                              </div>
                              </div>
      
                              <div class="fila simbolos">
                                <div class="col">
                                  <button class="botones-ocultos" id="btn-simbolos"></button>
                                </div>
                              </div>
      
                              <div class="fila numeros">
                                <div class="col">
                                  <button class="botones-ocultos" id="btn-numeros"></i></button>
                                </div>
                              </div>
      
                              <div class="fila mayusculas">
                                <div class="col">
                                  <button class="botones-ocultos" id="btn-mayusculas"></button>
                                </div>
                              </div>
      
                              <div class="fila generar row justify-content-center mb-3">
                                <div class="input-group mb-3 col-auto">
																<div class="input-group-prepend">
																	<span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
																</div>
                                  <input type="text" class="form-control" id="input-password" placeholder="Generador de contraseña" aria-describedby="basic-addon1" name="pass" required readonly>
                                </div>
      
                                <div class="col-12">
                                  <button type="button" class="btn btn-primary btn-lg btn-block btn-sm btn-generar" id="btn-generar">Generar <i class="fas fa-lock" ></i></button>
                                </div>
                              </div>
      
                              
                        </div>
                      </div>
											<div class="modal-footer">
			        <button type="submit" class="btn btn-success" id="activar-usuario">Activar</button>
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			      </div>
			      		
			      	</form>
			        
			      </div>
			      
			    </div>
			  </div>
			</div>
			<!-- --------------------------Modal----------------------- -->
		</div>
	</div>
	
	<!-- Usar la CDN requiere acceso a Internet -->
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->

	
	<script src="../../js/jquery-3.2.1.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../../js/app.js"></script>
	<script src="../../js/acciones.js"></script>
</body>
</html>



