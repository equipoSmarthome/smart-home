<?php 
	require_once('../models/usuario.php');
	require_once('../models/crud_usuario.php');
	require_once('../models/conexion.php');


	//inicio de sesion
	session_start();

	$usuario=new Usuario();
	$crud=new CrudUsuario();
	//verifica si la variable registrarse del registro.php
	//se da que está definicda cuando el usuario se loguea, ya que la envía en la petición
	if (isset($_POST['registrarse'])) {
		$usuario->setNombre($_POST['usuario']);
		$usuario->setClave($_POST['pas']);
		if ($crud->buscarUsuario($_POST['usuario'])) {
			$crud->insertar($usuario);
			header('Location: ../index.php');
		}else{
			echo '<script>
			alert("Datos erroneos");
			window.location.href="../index.php";
			</script>';  // cuando los datos son incorrectos se muestra el alert
		}
		
	}elseif (isset($_POST['entrar'])) { //verifica si la variable entrar está definida, este viene del login.php
		$usuario=$crud->obtenerUsuario($_POST['usuario'],$_POST['pas']);
		// si el id del objeto retornado no es null, quiere decir que encontro un registro en la base
		if ($usuario->getId()!=NULL) {
			$_SESSION['usuario']=$usuario; //si el usuario se encuentra, crea la sesión de usuario
			header('Location: ../views/menu.php'); //Si todo lo anterior esta OK, se redirecciona a menu.php
			
		}else{
			
			echo '<script>
			alert("Datos erroneos");
			window.location.href="../index.php";
			</script>';  // cuando los datos son incorrectos se muestra el alert
			
		}
	}
?>
