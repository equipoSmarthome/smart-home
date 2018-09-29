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
// Inicializar los Switch
$("[name='alarma']").bootstrapSwitch();
$("[name='cocina']").bootstrapSwitch();
$("[name='baño']").bootstrapSwitch();
$("[name='garage']").bootstrapSwitch();
$("[name='dormitorio1']").bootstrapSwitch();
$("[name='dormitorio2']").bootstrapSwitch();
$("[name='dormitorio3']").bootstrapSwitch();

//Alarma
$('input[name="alarma"]').on('switchChange.bootstrapSwitch', function(event, state) {
    if (state){
        $(this).attr("value", 1)
        var datos = $(this)
        $.ajax({
            url: '../../controllers/switch.controller.php',
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
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'alarmaOff'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } 
  });

  //Cocina
  $('input[name="cocina"]').on('switchChange.bootstrapSwitch', function(event, state) {
    if (state){
        $(this).attr("value", 1)
        $.ajax({
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'cocinaOn'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } else{
        $(this).attr("value", 0)
        var datos = $(this)
        $.ajax({
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'cocinaOff'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } 
  });

  //Baño
  $('input[name="baño"]').on('switchChange.bootstrapSwitch', function(event, state) {
    if (state){
        $(this).attr("value", 1)
        var datos = $(this)
        $.ajax({
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'bañoOn'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } else{
        $(this).attr("value", 0)
        var datos = $(this)
        $.ajax({
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'bañoOff'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } 
  });


//Garage
  $('input[name="garage"]').on('switchChange.bootstrapSwitch', function(event, state) {
    if (state){
        $(this).attr("value", 1)
        var datos = $(this)
        $.ajax({
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'garageOn'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } else{
        $(this).attr("value", 0)
        var datos = $(this)
        $.ajax({
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'garageOff'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } 
  })

  //Dormitorio 1
  $('input[name="dormitorio1"]').on('switchChange.bootstrapSwitch', function(event, state) {
    if (state){
        $(this).attr("value", 1)
        var datos = $(this)
        $.ajax({
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'dormitorio1On'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } else{
        $(this).attr("value", 0)
        var datos = $(this)
        $.ajax({
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'dormitorio1Off'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } 
  })

  //Dormitorio 2
  $('input[name="dormitorio2"]').on('switchChange.bootstrapSwitch', function(event, state) {
    if (state){
        $(this).attr("value", 1)
        var datos = $(this)
        $.ajax({
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'dormitorio2On'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } else{
        $(this).attr("value", 0)
        var datos = $(this)
        $.ajax({
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'dormitorio2Off'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } 
  })

  //Dormitorio 3
  $('input[name="dormitorio3"]').on('switchChange.bootstrapSwitch', function(event, state) {
    if (state){
        $(this).attr("value", 1)
        var datos = $(this)
        $.ajax({
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'dormitorio3On'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } else{
        $(this).attr("value", 0)
        var datos = $(this)
        $.ajax({
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'dormitorio3Off'},
            success: function(respuesta){
                console.log(respuesta)
            }
        })
    } 
  });