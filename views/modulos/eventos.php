<?php 
require_once '../../controllers/switch.vista.controller.php';
require_once '../../models/switch.modelo.php';
	session_start();
	if (!isset($_SESSION['correo'])) {
	 	header('Location: ../index.php');
	}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/calendar.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap-switch.min.css">
    <script src="../js/calendar.min.js"></script>
    <title>Eventos</title>
</head>
<body>
    <div class="opacidad"></div>
    <header>
       <div class="col-12 nav fixed-top" >
            <nav class="col-5 col-md-3 navbar navbar-expand-xs navbar-dark">
                <button class="navbar-toggler boton-nav mb-4 ml-5" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse texto-menu-hamburguesa" id="navbarTogglerDemo01">
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
            <div class="col col-md-4 mt-1 alarma">
                <h4>Alarma</h4>
                <div class="custom-switch custom-switch-label-onoff actAlarma">   
                <label class="bs-switch">

                <?php 
          
          $alarma = ControllerSwitch::mostrarSwitchAlarma();

          foreach ($alarma as $key => $value) {
            echo '
            <input type="checkbox" name="alarma" value="'.$value["Estado_Dispositivo"].'">
            ';
          }
          ?>
  
                </label>
                </div>
            </div>
            <div class="d-none d-md-block logo-header">
                <img class="" src="../img/logo/logo-pequeño.png" alt="">
            </div>
        </div>
    </header>
    <div class="container principal">
        <div class="row">
            <div class="col-12 col-md-6">
            <div class="calendar" data-color="normal">
        <div data-role="day" data-day="<?php echo date("Ynd",mktime(0,0,0,date("m"),date("d")+1,date("Y"))); ?>">
            <div data-role="event" data-name="Soy un evento que siempre saldr&eacute; ma&ntilde;ana" data-start="9.00" data-end="9.30" data-location="martiniglesias.eu">
            </div>
        </div>
    </div>
	<script>
	var yy;
	var calendarArray =[];
	var monthOffset = [6,7,8,9,10,11,0,1,2,3,4,5];
	var monthArray = [["ENE","enero"],["FEB","Febrero"],["MAR","Marzo"],["ABR","Abril"],["MAY","Mayo"],["JUN","Junio"],["JUL","Julio"],["AGO","Agosto"],["SEP","Septiembre"],["OCT","Octubre"],["NOV","Noviembre"],["DIC","Diciembre"]];
	var letrasArray = ["L","M","X","J","V","S","D"];
	var dayArray = ["7","1","2","3","4","5","6"];
	$(document).ready(function() {
		$(document).on('click','.calendar-day.have-events',activateDay);
		$(document).on('click','.specific-day',activatecalendar);
		$(document).on('click','.calendar-month-view-arrow',offsetcalendar);
		$(window).resize(calendarScale);
		$(".calendar").calendar({
			"2013910": {
				"Mulberry Festival": {
					start: "9.00",
					end: "9.30",
					location: "London"
				}
			}
		});
		calendarSet();
		calendarScale();
		});
	</script>
	
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("UA-266167-20");
		pageTracker._setDomainName(".martiniglesias.eu");
		pageTracker._trackPageview();
	} catch(err) {}</script>
            </div>

<div class="col-12 col-md-6 botones-evento mt-2">
    <button type="button" class="btn btn-primary btn-block boton-ver-evento" data-toggle="modal" data-target="#modal-ver-evento">
            Ver Evento
    </button>
    <button type="button" class="btn btn-primary btn-block boton-crear-evento" data-toggle="modal" data-target="#modal-crear-evento">
            Crear Evento
    </button>
</div>

<div class="modal fade modal-lista-evento" id="modal-ver-evento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-dark">
          <div class="table-responsive-md">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Dispositivo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Luz de la Cocina</th>
                    <td>On</td>
                    <td><a href=""><i class="far fa-edit"></i></a></td>
                    <td><a href=""><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                    <tr>
                    <th scope="row">Ventilador</th>
                    <td>On</td>
                    <td><a href=""><i class="far fa-edit"></i></a></td>
                    <td><a href=""><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-crear-evento" id="modal-crear-evento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-dark">
        <div class="row inicio-evento">
            <div class="col-6 col-md-3">
                <h6>Comienza</h6>
                <input type="date">
            </div>
            <div class="col-6 col-md-3">
                <h6>Hora</h6>
                <input type="time">
            </div>
            <div class="col-12 col-md-6">
                <h6>Estado</h6>
                <div class="row">
                    <div class="col-3 col-md-auto">
                        <p>Encender</p>
                    </div> 
                    <div class="col-6 col-md-auto">
                        <div class="custom-switch custom-switch-label-onoff estado">   
                            <label class="bs-switch">
                                <input type="checkbox" name="alarma" checked class="estado">
                             </label>
                        </div>
                    </div>
                    <div class="col-3 col-md-auto">
                        <p>Apagar</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row finaliza-evento">
            <div class="col-6 col-md-3">
                <h6>Finaliza</h6>
                <input type="date">
            </div>
            <div class="col-6 col-md-3">
                <h6>Hora</h6>
                <input type="time">
            </div>
            <div class="col-12 col-md-6">
                <h6>Estado</h6>
                <div class="row">
                    <div class="col-3 col-md-auto">
                        <p>Encender</p>
                    </div> 
                    <div class="col-6 col-md-auto">
                        <div class="custom-switch custom-switch-label-onoff estado">   
                            <label class="bs-switch">
                                <input type="checkbox" name="alarma" checked class="estado">
                             </label>
                        </div>
                    </div>
                    <div class="col-3 col-md-auto">
                        <p>Apagar</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <label for="dispositivos" class="dispositivos-select-label">Dispositivos</label>
                    <select class="form-control tamano-select" id="dispositivos">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Crear Evento</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>
<div class="row justify-content-end ">
      <div class="col-auto">
           <div class="btn btn-primary" id="volverMenu">Volver</div>
       </div>
    </div>
 </div>
    

    
    
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/fontawesome.min.js"></script>
    <script src="../js/calendar.min.js"></script>
    <script src="../js/bootstrap-switch.min.js"></script>
    <script src="../js/luces.js"></script>
    
</body>
</html>