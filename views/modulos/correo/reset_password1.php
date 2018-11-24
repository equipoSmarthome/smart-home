<?php
	if(isset($_POST["reset-password"])) {
		$conn = mysqli_connect("localhost", "root", "", "smarthome");
		mysqli_set_charset($conn, "utf8");
		$sql = "UPDATE usuario_1 SET Contraseña = '". $_POST["pass"]."' WHERE id_Usuario = '".$_GET["identificador"]. "'";

		$result = mysqli_query($conn,$sql);
		$success_message = "Contraseña Actualizada.";
		
	}
?>

<script>
function validate_password_reset() {
	if((document.getElementById("pass").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Ingresa tu nueva contraseña"
		return false;
	}
	if(document.getElementById("pass").value  != document.getElementById("confirm_password").value) {
		document.getElementById("validation-message").innerHTML = "Las contraseñas deben ser iguales"
		return false;
	}
	
	return true;
}
</script>
<form name="frmReset" id="frmReset" method="post" onSubmit="return validate_password_reset();">
<h1>Restablecer contraseña</h1>
	<?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>

	<div class="field-group">
		<div><label for="Password">Contraseña</label></div>
		<div>
		<input type="password" name="pass" id="Contraseña" class="input-field"></div>
	</div>
	
	<div class="field-group">
		<div><label for="email">Repetir contraseña</label></div>
		<div><input type="password" name="confirm_password" id="confirm_password" class="input-field"></div>
	</div>
	
	<div class="field-group">
		<div><input type="submit" name="reset-password" id="reset-password" value="Confirmar" class="form-submit-button"></div>
	</div>	
</form>
				