<?php
 //Reseteo variables.
 $error = $usuario = NULL;

 //Comprobamos si esta definida el formulario y no es NULL.
 if (isset($_POST['login'])) {

    //Comprobamos que no este vacio nuestro input.
    if (empty($_POST['usuario'])) {
        $error = 'El email es obligatorio';
    } else {
        //Importante, añadir la conexion donde se va utilizar.
        require_once'../models/conexion.php';
       
    }

    //Si es verdadero nuestro input, continuamos.
    if ($usuario) {         
        //Sentencia
        $sql = $mysqli->query("SELECT * FROM usuarios WHERE correo = '$usuario' LIMIT 1"); 
        //Comprobamos si existe el registro.
        if ($sql->num_rows===1) {
            $row = $sql->fetch_assoc();
            $_SESSION['usuario'] = $row['usuario'];

            //Compones nuestro correo electronico

            //Incluimos libreria PHPmailer (deberas descargarlo).
            require'class.phpmailer.php';

            //Nuevo correo electronico.
            $mail = new PHPMailer;
            //Caracteres.
            $mail->CharSet = 'UTF-8';

            //De dirección correo electrónico y el nombre
            $mail->From = "smarthomeptomontt@gmail.com";
            $mail->FromName = "smtp.gmail.com";

            //Dirección de envio y nombre.
            $mail->addAddress($row['correo'], 'Nombre Admin');
            //Dirección a la que responderá destinatario.
            $mail->addReplyTo("smarthomeptomontt@gmail.com","Tunombre");

            //BCC ->  incluir copia oculta de email enviado.
            //$mail->addBCC("copia@tudominio.com");

            //Enviar codigo HTML o texto plano.
            $mail->isHTML(true);

            //Titulo email.
            $mail->Subject = "Nuestro titulo";
            //Cuerpo email con HTML.
            $mail->Body = "Tu contraseña actualizada es:" . $row['tu_contrasena']; //Podrias personalizar mediante HTML y CSS :)

            //Comprobamos el envio.
            if(!$mail->send()) {                    
                $error = "Ocurrió un error inesperado con él envió del correo electrónico, inténtelo de nuevo más tarde, disculpa las molestias.";
            } else {
                $error = "Se envio correctamente el correo electrónico.";
            }   
        } else { //0 registros.
            $error = 'El email ingresado no existe en nuestros registros.';
        } $sql->close();
    }       
 }
?>