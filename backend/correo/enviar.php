<?php
require("class.phpmailer.php");
require("class.smtp.php");

$email = $_POST["email"];
$mac = $_POST["mac"];
$destinatario = "smarthomeptomontt@gmail.com";

// Valores enviados desde el formulario
if ( $email == "" || $mac == "" ) {
    echo 2;
} else {
    if(preg_match('/^[a-f0-9]{2}[:-][a-f0-9]{2}[:-][a-f0-9]{2}[:-][a-f0-9]{2}[:-][a-f0-9]{2}[:-][a-f0-9]{2}$/i',$mac)){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Datos de la cuenta de correo utilizada para enviar v�a SMTP
            $smtpHost = " smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
            $smtpUsuario = "smarthomeptomontt@gmail.com";  // Mi cuenta de correo
            $smtpClave = "smart31415";  // Mi contrase�a

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->Port = 587; 
            $mail->IsHTML(true); 
            $mail->CharSet = "utf-8";


            // VALORES A MODIFICAR //
            $mail->Host = $smtpHost; 
            $mail->Username = $smtpUsuario; 
            $mail->Password = $smtpClave;


            $mail->From =  $_POST["email"]; // Email desde donde env�o el correo.
            $mail->AddAddress($destinatario); // Esta es la direcci�n a donde enviamos los datos del formulario
            $mail->Subject = "Peticion de registro"; // Este es el titulo del email.
            $mail->Body = " <html> 
                                <body> 
                                    <h1>Un nuevo cliente se quiere registrar</h1>
                                    <p>Informacion enviada por el usuario de la web:</p>
                                    <p>Email: {$email}</p>
                                    <p>Mac: {$mac}</p>
                                </body> 
                            </html>
                            <br />"; // Texto del email en formato HTML

            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $estadoEnvio = $mail->Send(); 
            if($estadoEnvio){
                echo 1; 
            } else {
                echo 3;
            }




        } else {
            echo 5;
        }
    }else{
        echo "4";
    }





    
}





   













?>

