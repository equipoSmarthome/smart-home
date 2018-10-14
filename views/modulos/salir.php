<?php 
	session_start();
	session_destroy(); //destruye la sesión
	header('Location: ../../index.php');//envia encabezado http
		
?>