$(document).ready(dockOk)
function dockOk(){
    $("#volverMenu").click(volverMenu)
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
  })

$("#editarCorreo").click(function(e){
    e.preventDefault();
    $(".btn-guardar").show()
    $("input[name=micorreo]").attr("value","")
    $("input[name=micorreo]").attr("placeholder","Ingrese Nuevo Correo")
    $("input[name=micorreo]").removeAttr("readonly")
    $("input[name=micorreo]").focus()
    $("#guardarMiPerfil").click(function(e){
        e.preventDefault();
         if ($("input[name=micorreo]").val() == ""){
            swal("Faltan Datos", "Debe Introducir un Correo para Guardar ", "error");
        } else if($("input[name=micorreo]").val().indexOf('@', 0) == -1 || $("input[name=micorreo]").val().indexOf('.', 0) == -1) {
            swal("Error", "El correo electrónico introducido no es correcto. ", "error");
            return false;
        } else {
            var datos = $("#form-miPerfil").serialize()
            console.log(datos)
            $.ajax({
                data: datos,
                url: "../../controllers/miperfil.controller.php",
                method: 'POST',
                success: function (respuesta){
                    console.log(respuesta)
                    if (respuesta == 1) {
                        swal("Genial", "Su Correo a sido Modificado. Por Favor Inicie Sesión Nuevamente", "success").then((result) => {
                                window.location = "login.php"
                              })
                    } else if (respuesta == 2){
                        swal("Faltan Campos", "Tienes que completar todos los campos ", "error");
                    }
                }
            })
        }  
    })
})

$("#editarPass").click(function(e){

    e.preventDefault();
    $(".btn-guardar").show()
    $("#pass2").show()
    $("input[name=mipass2]").attr("value","")
    $("input[name=mipass]").attr("value","")
    $("input[name=mipass]").attr("placeholder","Ingrese Nueva Contraseña")
    $("input[name=mipass2]").attr("placeholder","Repita Nueva Contraseña")
    $("input[name=mipass]").removeAttr("readonly")
    $("input[name=mipass2]").removeAttr("readonly")
    $("input[name=mipass]").focus()
    $("#guardarMiPerfil").click(function(e){
        e.preventDefault();
        console.log()
        if($("input[name=mipass]").val() == "" || $("input[name=mipass2]").val() == "" ){
            swal("Error", "Debes Completar los campos Contraseña. ", "error");

        }else if ($("input[name=mipass]").val() == $("input[name=mipass2]").val() ) {
            var datos = $("#form-miPerfil").serialize()
            console.log(datos)
            $.ajax({
                data: datos,
                url: '../../controllers/miperfil.controller.php',
                method: 'POST',
                success: function(respuesta){
                    console.log(respuesta)
                    if (respuesta == 1){
                        swal("Genial", "Su Contraseña a sido Modificada. Por Favor Inicie Sesión Nuevamente", "success").then((result) => {
                            window.location = "login.php"
                        })
                    }
                }
            })            
        } else {
            swal("Error", "Las Contraseñas deben ser Iguales ", "error");
        } 
     })
})