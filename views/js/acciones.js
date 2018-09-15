$(document).ready(dockOk)
function dockOk(){
    $("#irLogin").click(irLogin)
    $("#volverInicio").click(volverInicio)
    $("#iniciarSesion").click(irMenu)
    $("#luz").click(irLuz)
    $("#temperatura").click(irTemp)
    $("#puerta").click(irPuerta)
    $("#eventos").click(irEventos)
    $("#volverMenu").click(volverMenu)
}
function irLogin(){
    window.location = "views/modulos/login.php"
}

function volverInicio(){
    window.location = "../../"
}
function irMenu(){
	window.location = "../menu.php"
}
function irLuz(){
	window.location = "modulos/luces.php"
}
function irTemp(){
	window.location = "modulos/temperatura.php"
}
function irPuerta(){
	window.location = "modulos/puerta.php"
}
function irEventos(){
	window.location = "modulos/eventos.php"
}
function volverMenu(){
	window.location = "../menu.php"
}
$("#form-registro").submit(function(e){
    e.preventDefault();
    var datos = $(this).serialize()
    console.log(datos)
    $.ajax({
        url: 'backend/correo/enviar.php',
        type: 'POST',
        data: datos,
        success: function(respuesta){
            
            if (respuesta = 1) {
                swal("Genial", "Petición de registro enviada correctamente", "success")
            } else if (respuesta = 2){
                swal("Faltan Campos", "Tienes que completar todos los campos ", "error");
            }else if (respuesta = 3){
                swal("Algo esta mal", "Tu correo y/o contraseñas incorrectas", "error");
            }
        }
    })
})



