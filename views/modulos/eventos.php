<?php 
require_once '../../controllers/switch.vista.controller.php';
require_once '../../models/switch.modelo.php';
	if (!isset($_SESSION['correo'])) {
	 	header('Location: ../index.php');
    }
    // Definimos nuestra zona horaria
date_default_timezone_set("America/Santiago");

// incluimos el archivo de funciones
include '../../calendario/funciones.php';

// incluimos el archivo de configuracion
include '../../calendario/config.php';

// Verificamos si se ha enviado el campo con name from
if (isset($_POST['from'])) 
{

    // Si se ha enviado verificamos que no vengan vacios
    if ($_POST['from']!="" AND $_POST['to']!="") 
    {

        // Recibimos el fecha de inicio y la fecha final desde el form
$Datein                    = date('d/m/Y H:i:s', strtotime($_POST['from']));
$Datefi                    = date('d/m/Y H:i:s', strtotime($_POST['to']));
        $inicio = _formatear($Datein);
        // y la formateamos con la funcion _formatear

        $final  = _formatear($Datefi);

        // Recibimos el fecha de inicio y la fecha final desde el form
        $orderDate                      = date('d/m/Y H:i:s', strtotime($_POST['from']));
        $inicio_normal = $orderDate;

        // y la formateamos con la funcion _formatear
        $orderDate2                      = date('d/m/Y H:i:s', strtotime($_POST['to']));
        $final_normal  = $orderDate2;

        // Recibimos los demas datos desde el form
        $titulo = evaluar($_POST['title']);

        // y con la funcion evaluar
        $body   = evaluar($_POST['event']);

        // reemplazamos los caracteres no permitidos
        $clase  = evaluar($_POST['class']);

        // insertamos el evento
        $query="INSERT INTO agenda VALUES(null,'$titulo','$body','','$clase','$inicio','$final','$inicio_normal','$final_normal')";

        // Ejecutamos nuestra sentencia sql
         $conexion->query($query)or die('<script type="text/javascript">alert("Horario No Disponible ")</script>');
         
         header("Location:../eventos/");         
  
          
        // Obtenemos el ultimo id insetado
        $im=$conexion->query("SELECT MAX(id) AS id FROM agenda");
        $row = $im->fetch_row();  
        $id = trim($row[0]);

        // para generar el link del evento
        $link = "../eventos/"."descripcion_evento.php?id=$id";

        // y actualizamos su link
        $query="UPDATE agenda SET url = '$link' WHERE id = $id";

        // Ejecutamos nuestra sentencia sql
        $conexion->query($query); 

        // redireccionamos a nuestro calendario
        header("Location:../eventos.php"); 
    }
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
    <link rel="stylesheet" href="../css/calendar.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="../css/estilos.css">

    <link rel="stylesheet" href="../../calendario/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="../../calendario/css/calendar.css">
    <link rel="stylesheet" href="../../calendario/css/estilos.css">

    
    
    
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
                        <?php
                            if ($_SESSION['nivel'] == 1 ) {
                                echo '
                                <a class="nav-link" href="nueva-cuenta.php">Añadir Cuenta</a>
                                ';
                            }
                            ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salir.php">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="col-auto col-md-1 nombre-usuario " >
                <p><?php echo $_SESSION['correo']; ?></p>
            </div>
            <div class="d-none d-md-block logo-header">
                <img class="" src="../img/logo/logo-pequeño.png" alt="">
            </div>
        </div>
    </header>
    <div class="container principal">
        <div class="row">
            <div class="col-12 col-md-6">
                <!-- Inicio Calendario -->
                <div class="page-header"><h2></h2></div>
            <div class="pull-left form-inline">
                <br>
                <div class="btn-group botones-mes">
                    <button class="btn btn-primary" data-calendar-nav="prev"><< Anterior</button>
                    <button class="btn" data-calendar-nav="today">Hoy</button>
                    <button class="btn btn-primary" data-calendar-nav="next">Siguiente >></button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div id="calendar"></div> <!-- Aqui se mostrara nuestro calendario -->
                <br><br>
            </div>
            <div class="modal fade" id="events-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body" style="height: 400px">
                                    <p>One fine body&hellip;</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->





                <!-- Fin Calendario -->
            </div>
            <script src="../../calendario/js/es-ES.js"></script>
            <script src="../../calendario/js/jquery.min.js"></script>            
            <script src="../../calendario/js/moment.js"></script>
            <script src="../../calendario/js/bootstrap.min.js"></script>
            <script src="../../calendario/js/bootstrap-datetimepicker.js"></script>
            <script src="../../calendario/js/underscore-min.js"></script>
            <script src="../../calendario/js/calendar.js"></script>
            
            <script type="text/javascript">
        (function($){
                //creamos la fecha actual
                var date = new Date();
                var yyyy = date.getFullYear().toString();
                var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
                var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();

                //establecemos los valores del calendario
                var options = {

                    // definimos que los agenda se mostraran en ventana modal
                        modal: '#events-modal', 

                        // dentro de un iframe
                        modal_type:'iframe',    

                        //obtenemos los agenda de la base de datos
                        events_source: '../../calendario/obtener_eventos.php', 

                        // mostramos el calendario en el mes
                        view: 'month',             

                        // y dia actual
                        day: yyyy+"-"+mm+"-"+dd,   


                        // definimos el idioma por defecto
                        language: 'es-ES', 

                        //Template de nuestro calendario
                        tmpl_path: '../../calendario/tmpls/', 
                        tmpl_cache: false,


                        // Hora de inicio
                        time_start: '08:00', 

                        // y Hora final de cada dia
                        time_end: '22:00',   

                        // intervalo de tiempo entre las hora, en este caso son 30 minutos
                        time_split: '30',    

                        // Definimos un ancho del 100% a nuestro calendario
                        width: '100%', 

                        onAfterEventsLoad: function(events)
                        {
                                if(!events)
                                {
                                        return;
                                }
                                var list = $('#eventlist');
                                list.html('');

                                $.each(events, function(key, val)
                                {
                                        $(document.createElement('li'))
                                                .html('<a href="' + val.url + '">' + val.title + '</a>')
                                                .appendTo(list);
                                });
                        },
                        onAfterViewLoad: function(view)
                        {
                                $('.page-header h2').text(this.getTitle());
                                $('.btn-group button').removeClass('active');
                                $('button[data-calendar-view="' + view + '"]').addClass('active');
                        },
                        classes: {
                                months: {
                                        general: 'label'
                                }
                        }
                };


                // id del div donde se mostrara el calendario
                var calendar = $('#calendar').calendar(options); 

                $('.btn-group button[data-calendar-nav]').each(function()
                {
                        var $this = $(this);
                        $this.click(function()
                        {
                                calendar.navigate($this.data('calendar-nav'));
                        });
                });

                $('.btn-group button[data-calendar-view]').each(function()
                {
                        var $this = $(this);
                        $this.click(function()
                        {
                                calendar.view($this.data('calendar-view'));
                        });
                });

                $('#first_day').change(function()
                {
                        var value = $(this).val();
                        value = value.length ? parseInt(value) : null;
                        calendar.setOptions({first_day: value});
                        calendar.view();
                });
        }(jQuery));
    </script>
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
                <input type="date" name=" " id="">
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
    

    
    
    
    <script src="../js/underscore-min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/fontawesome.min.js"></script>
    <script src="../js/es-ES.js"></script>
    
    
    <script src="../js/bootstrap-datetimepicker.js"></script>
    <script src="../js/bootstrap-switch.min.js"></script>
    <script src="../js/luces.js"></script>
    
</body>
</html>