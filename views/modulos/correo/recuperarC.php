<?php
if(!class_exists('PHPMailer')) {
    require('class.phpmailer.php');
	require('class.smtp.php');
}
require_once("configuracion_email.php");
$mail = new PHPMailer();
$emailBody = "<div><br><br><p>Haz click en el siguiente enlace para reestablecer tu contraseña<br><a href='" . SMART_HOME . "correo/reset_password.php?identificador=" . $user["id_Usuario"] . "'>" . SMART_HOME . "correo/reset_password.php?identificador=" . $user["id_Usuario"] . "</a><br><br></p>Saludos,<br> Administracion SM.</div>";

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = PORT;  
$mail->Username = MAIL_USERNAME;
$mail->Password = MAIL_PASSWORD;
$mail->Host     = MAIL_HOST;
$mail->Mailer   = MAILER;

$mail->SetFrom(SERDER_EMAIL, SENDER_NAME);
$mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME);
$mail->ReturnPath=SERDER_EMAIL;	
$mail->AddAddress($user["Correo_Usuario_1"]);
$mail->Subject = "Restablece el Acceso a tu Cuenta";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	$error_message = 'Se genero un problema al enviar el correo';
} else {
	$success_message = 'Verifica tu correo electronico';
}

?>
