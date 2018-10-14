<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registro</title>
</head>
<body>
		<div>
			<form class="" action="../controllers/sesion.controller.php" method="post">
				<p>
					<label class="">Correo</label>
					<input class="" type="text" name="usuario">
				</p>
				<p>
					<label class="">Password</label>
					<input class="" type="password" name="pas">
				</p>
				<p>
					<input type="hidden" name="registrarse" value="registrarse">
					<button class="">Registrarse</button>
				</p>
				<p><a href="index.php">Volver al inicio</a></p>
			</form>
		</div>
</body>
</html>