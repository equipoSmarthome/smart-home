$(document).ready(dockOk)
function dockOk(){
    $("#iniciarSesion").click(irMenu)
    $("#luz").click(irLuz)
    $("#temperatura").click(irTemp)
    $("#puerta").click(irPuerta)
    $("#eventos").click(irEventos)
    $("#volverMenu").click(volverMenu)
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
$("[name='alarma']").bootstrapSwitch()
if ($("[name='alarma']").val() == 1 ) {
    $('input[name="alarma"]').bootstrapSwitch('state', true, true)
};
//Alarma
$('input[name="alarma"]').on('switchChange.bootstrapSwitch', function(event, state) {
    if (state){
        $(this).attr("value", 1)
        var datos = $(this)
        $.ajax({
            url: '../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'alarmaOn'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } else{
        $(this).attr("value", 0)
        var datos = $(this)
        $.ajax({
            url: '../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'alarmaOff'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } 
  });