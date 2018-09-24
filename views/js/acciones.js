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
    $.ajax({
        url: 'backend/correo/enviar.php',
        type: 'POST',
        data: datos,
        success: function(respuesta){
            console.log(respuesta)
            if (respuesta == 1) {
                swal("Genial", "Petición de registro enviada correctamente", "success").then((result) => {
                    if (result.value) {
                      swal(
                        window.location = "../../index.php"
                      )
                    }
                  })
                
            } else if (respuesta == 2){
                swal("Faltan Campos", "Tienes que completar todos los campos ", "error");
            }else if (respuesta == 3){
                swal("Algo esta mal", "Ocurrio un error inesperado. Intente nuevamente", "error");
            }else if (respuesta == 4){
                swal("Mac Incorrecta", "La Direccion Mac es incorrecta", "error");
            }else if (respuesta == 5){
                swal("Correo Incorrecto", "El Correo es incorrecto", "error");
            }
        }
    })
})
$("#form-login").submit(function(e){
    e.preventDefault();
    var datos = $(this).serialize()
    $.ajax({
        url: 'backend/models/validar-login.php',
        type: 'POST',
        data: datos,
        success: function(respuesta){
            console.log(respuesta)
            if (respuesta == 1) {
                swal({
                    position: 'top-end',
                    type: 'success',
                    title: 'Genial, Usuario Registrado',
                    showConfirmButton: false,
                    timer: 1000
                  })
                swal("Genial", "Petición de registro enviada correctamente", "success")
            } else if (respuesta == 2){
                swal("Faltan Campos", "Tienes que completar todos los campos ", "error");
            }else if (respuesta == 3){
                swal("Algo esta mal", "Ocurrio un error inesperado. Intente nuevamente", "error");
            }else if (respuesta == 4){
                swal("Mac Incorrecta", "La Direccion Mac es incorrecta", "error");
            }else if (respuesta == 5){
                swal("Correo Incorrecto", "El Correo es incorrecto", "error");
            }
        }
    })
})


