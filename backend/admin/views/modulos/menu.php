<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Administración</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	    <meta charset="utf-8" />   
   
	</head>
    <body>
  <div class="container-fluid">
    <div class="row">

      <div class="barra-lateral col-12 col-sm-auto">
        <div class="logo">¡Hola!
          <?php echo $_SESSION["nombre"]; ?>
          <img class="img-fluid" src="img/logo-pequeño.png" alt="">
        </div>
        <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
          <a href="usuariosa"><i class="fas fa-user"></i><span>Usuarios Activos</span></a>
          <a href="usuariosp" ><i class="fas fa-question-circle"></i><span>Usuarios Pendientes</span></a>
          <a href="salir"><i class="fas fa-times-circle"></i><span>Salir</span></a>
        </nav>
      </div>

  <!-- Usar la CDN requiere acceso a Internet -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
