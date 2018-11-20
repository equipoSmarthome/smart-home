$(document).ready(dockOk)
function dockOk(){
    $("#volverMenu").click(volverMenu)
}
function volverMenu(){
	window.location = "../menu.php"
}
/////////////  FUNCION SLEEP  ///////////////////
function sleep(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
      if ((new Date().getTime() - start) > milliseconds){
        break;
      }
    }
}
/////////////////////////////////////////////////
//////////////////  ALARMA  /////////////////////
// Inicializar del Switch
$("[name='alarma']").bootstrapSwitch();

// Si el valor del switch es 1 en la BD este queda seleccionado
// El switch por defecto esta apagado
if ($("[name='alarma']").val() == 1 ) {
    $('input[name="alarma"]').bootstrapSwitch('state', true, true)
}

// Funciones Switch Alarma
$('input[name="alarma"]').on('switchChange.bootstrapSwitch', function(event, state) {
    if (state){
        $(this).attr("value", 1)
        var datos = $(this)
        $.ajax({
            url: '../../controllers/switch.controller.php',
            type: 'POST',
            data: {datos: 'alarmaOn'},
            success: function(respuesta){
                //console.log(respuesta)
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
                //console.log(respuesta)
            }
        })
    } 
})

/////////////////////////////////////////////////
/////////////  MODULO  LUCES  ///////////////////
// Inicializar los Switch
$("[name='alarma']").bootstrapSwitch();
$("[name='Cocina']").bootstrapSwitch();
$("[name='Baño']").bootstrapSwitch();
$("[name='Garage']").bootstrapSwitch();
$("[name='Dormitorio 1']").bootstrapSwitch();
$("[name='Dormitorio 2']").bootstrapSwitch();
$("[name='Living Comedor']").bootstrapSwitch();

// Si el valor de los switch es 1 en la BD estos quedan seleccionados
// El switch por defecto esta apagado
if ($("[name='Cocina']").val() == 1 ) {
    $('input[name="Cocina"]').bootstrapSwitch('state', true, true)
}
if ($("[name='Baño']").val() == 1 ) {
    $('input[name="Baño"]').bootstrapSwitch('state', true, true)
}
if ($("[name='Garage']").val() == 1 ) {
    $('input[name="Garage"]').bootstrapSwitch('state', true, true)
}
if ($("[name='Dormitorio 1']").val() == 1 ) {
    $('input[name="Dormitorio 1"]').bootstrapSwitch('state', true, true)
}
if ($("[name='Dormitorio 2']").val() == 1 ) {
    $('input[name="Dormitorio 2"]').bootstrapSwitch('state', true, true)
}
if ($("[name='Living Comedor']").val() == 1 ) {
    $('input[name="Living Comedor"]').bootstrapSwitch('state', true, true)
}
// Funciones Switch Cocina
$('input[name="Cocina"]').on('switchChange.bootstrapSwitch', function(event, state) {
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
})
// Funciones Switch Baño
$('input[name="Baño"]').on('switchChange.bootstrapSwitch', function(event, state) {
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
})
// Funciones Switch Garage
$('input[name="Garage"]').on('switchChange.bootstrapSwitch', function(event, state) {
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
// Funciones Switch Dormitorio 1
$('input[name="Dormitorio 1"]').on('switchChange.bootstrapSwitch', function(event, state) {
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
// Funciones Switch Dormitorio 2
$('input[name="Dormitorio 2"]').on('switchChange.bootstrapSwitch', function(event, state) {
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
// Funciones Switch Living Comedor
$('input[name="Living Comedor"]').on('switchChange.bootstrapSwitch', function(event, state) {
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
//////////////////////////////////////////////////////////
/////////////////  MODULO  PUERTA  ///////////////////////
// Desbloquear Puerta Principal
$("button[name=puertaPrincipal]").on("click", function(){
    $(this).attr("value","1")
    $(".lock").attr("class","fas fa-lock-open mt-3 lock fa-3x")
    $(this).css({
        background: "#35AE6B",
        borderColor: "transparent",
    })
    $.ajax({
        url: '../../controllers/estadopuerta.controller.php',
        type: 'POST',
        data: {datos: 'abrirPuertaPrincipal'},
        success: function(respuesta){
            console.log(respuesta)
            var progreso = 0;
            var idIterval = setInterval(function(){
                progreso +=1;
                if(progreso == 100){
                    clearInterval(idIterval);
                    $(".lock").attr("class","fas fa-lock mt-3 lock fa-3x")
                    $("button[name=puertaPrincipal]").css({
                        background: "#0069D9",
                    }, 300)
                    $.ajax({
                        url: '../../controllers/estadopuerta.controller.php',
                        type: 'POST',
                        data: {datos: 'cerrarPuertaPrincipal'},
                        success: function(respuesta){
                            console.log(respuesta)
                        }
                    })
                }
            },100);
        }
    })
})
// Abrir Puerta Garage
$("button[name=abrirPuerta]").on("click", function(){
    $(this).attr("value","1")
    $("button[name=cerrarPuerta]").attr("value","0")
    $(this).css({
        background: "#35AE6B",
        borderColor: "transparent",
    })
    $("button[name=cerrarPuerta]").css({
        background: "#0069D9",
    })
    
    $.ajax({
        url: '../../controllers/estadopuerta.controller.php',
        type: 'POST',
        data: {datos: 'abrirPuerta'},
        success: function(respuesta){
            console.log(respuesta)
            sleep(5000);
            console.log("lalalalla")
            $.ajax({
                url: '../../controllers/estadopuerta.controller.php',
                type: 'POST',
                data: {datos: 'abrirPuertaNeutro'},
                success: function(respuesta){
                    console.log(respuesta)
                }
            })              
        }
    })
})
// Cerrar Puerta Garage
$("button[name=cerrarPuerta]").on("click", function(){
    $(this).attr("value","0")
    $("button[name=abrirPuerta]").attr("value","0")
    $(this).css({
        background: "#35AE6B",
        borderColor: "transparent",
    })
    $("button[name=abrirPuerta]").css({
        background: "#0069D9",
    })
    
    $.ajax({
        url: '../../controllers/estadopuerta.controller.php',
        type: 'POST',
        data: {datos: 'cerrarPuerta'},
        success: function(respuesta){
            console.log(respuesta)
            sleep(5000)
            console.log("lalalalla")
            $.ajax({
                url: '../../controllers/estadopuerta.controller.php',
                type: 'POST',
                data: {datos: 'cerrarPuertaNeutro'},
                success: function(respuesta){
                    console.log(respuesta)
                }
            })
        }
    })
})
//////////////////////////////////////////////////////////
///////////////  MODULO  TEMPERATURA  ////////////////////
// Encender Ventilador
$("button[name=TempOn]").on("click", function(){
    $(this).attr("value","1")
    $("button[name=TempOff]").attr("value","0")
    $(".ventiladorAuto").attr("value","0")
    $("button[name=TempOff]").css({
        background: "#0069D9",
    })
    $(".ventiladorAuto").css({
        background: "#0069D9",
    })
    $(this).css({
        background: "#35AE6B",
        borderColor: "transparent",
    })
    $.ajax({
        url: '../../controllers/estadoTemp.controller.php',
        type: 'POST',
        data: {datos: 'encenderTemp'},
        success: function(respuesta){
            console.log(respuesta)
        }    
    })
})
// Apagar Ventilador
$("button[name=TempOff]").on("click", function(){
    $(this).attr("value","1")
    $("button[name=TempOn]").attr("value","0")
    $(".ventiladorAuto").attr("value","0")
    $("button[name=TempOn]").css({
        background: "#0069D9",   
    })
    $(".ventiladorAuto").css({
        background: "#0069D9",
    })
    $(this).css({
        background: "#35AE6B",
        borderColor: "transparent",
    })
    $.ajax({
        url: '../../controllers/estadoTemp.controller.php',
        type: 'POST',
        data: {datos: 'apagarTemp'},
        success: function(respuesta){
            console.log(respuesta)
        }
    })
    
})
// Ventilador Automatico

var num = $(".total").text()
console.log(num)
$("#mas").click(function(e){
    e.preventDefault()
    num++;
    $(".total").html(num)
    $.ajax({
        url: '../../controllers/estadoTemp.controller.php',
        type: 'POST',
        data: {
            datos: 'tempVentiladorAuto',
            valor: $(".total").html()
        },
        success: function(respuesta){
            console.log(respuesta)
        }
    })
})
// Fin Suma Producto
// Inicio Resta Producto
$("#menos").click(function(e){
    e.preventDefault()
    if (num>=2){
        num-=1;
        $(".total").text(num)
        $.ajax({
            url: '../../controllers/estadoTemp.controller.php',
            type: 'POST',
            data: {
                datos: 'tempVentiladorAuto',
                valor: $(".total").html()
            },
            success: function(respuesta){
                console.log(respuesta)
            }
        })		
    }
})

$(".ventiladorAuto").on("click", function(){
    var tempAuto = $(".total").text()
    $(this).css({
        background: "#35AE6B",
        borderColor: "transparent",
    })
    $(this).attr("value","3")
    $("button[name=TempOn]").css({
        background: "#0069D9",   
    })
    $("button[name=TempOff]").css({
        background: "#0069D9",   
    })
    $("button[name=TempOn]").attr("value","0")
    $("button[name=TempOff]").attr("value","0")
    $.ajax({
        url: '../../controllers/estadoTemp.controller.php',
        type: 'POST',
        data: {
            datos: 'ventiladorAuto',
            data: tempAuto
        },
        success: function(respuesta){
            console.log(respuesta)
        }
    })


})
//////////////////////////////////////////////////////////
//////////////////  MODULO  PERFIL  //////////////////////
// Editar Correo
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
                    } else if (respuesta == 3){
                        swal("Contraseñas Incorrectas", "Las Contraseñas deben ser iguales", "error");
                    } else if (respuesta == 4){
                        swal("Correo Incorrecto", "Debes Ingresar un correo Valido", "error");
                    }
                }
            })
        }  
    })
})
// Editar Contraseña
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
        
        var pass1 = $("input[name=mipass]").val()
        console.log(pass1.length)

        if($("input[name=mipass]").val() == "" || $("input[name=mipass2]").val() == "" ){
            swal("Error", "Debes Completar los campos Contraseña. ", "error");

        } else if ( pass1.length < 7){
            swal("Error", "La contraseña debe tener entre 8 y 16 caracteres. ", "error");
        } else if ( pass1.length > 16){
            swal("Error", "La contraseña debe tener entre 8 y 16 caracteres. ", "error");
        } else if ($("input[name=mipass]").val() == $("input[name=mipass2]").val() ) {
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
                    } else if (respuesta == 2){
                        swal("Faltan Campos", "Tienes que completar todos los campos ", "error");
                    } else if (respuesta == 3){
                        swal("Contraseñas Incorrectas", "Las Contraseñas deben ser iguales", "error");
                    } else if (respuesta == 4){
                        swal("Correo Incorrecto", "Debes Ingresar un correo Valido", "error");
                    }
                }
            })            
        } else {
            swal("Error", "Las Contraseñas deben ser Iguales ", "error");
        } 
     })
})

$("#formu-nuevaCuenta").submit(function(e){
    e.preventDefault()
    var datos = $(this).serialize()
    console.log(datos)
    $.ajax({
        url: '../../controllers/nuevacuenta.controller.php',
        type: 'POST',
        data: datos,
        success: function(respuesta){
            console.log(respuesta)
            if (respuesta == 1){

                
                swal("Genial", "Ha creado una Nueva Cuenta", "success").then((result) => {
                    window.location = "../modulos/nueva-cuenta.php"
                })        
            } else if (respuesta == 2){
                swal("Faltan Campos", "Tienes que completar todos los campos ", "error");        
            } else if (respuesta == 3){
                swal("Contraseñas Distintas", "Las Contraseñas deben ser iguales ", "error");        
            } else if (respuesta == 4){
                swal("Correo Incorrecto", "Debes Ingresar un correo Valido", "error")       
            } else if ( respuesta == 5){
                swal("Error", "La contraseña debe tener entre 8 y 16 caracteres.", "error")    
            }

        }
    })
})



$("body .table-dark").on("click", ".btnEliminarCuenta", function(){
    var idcuenta = $(this).attr("idcuenta")
    var datos = new FormData()
    datos.append("idcuenta", idcuenta)
    datos.append("tipoOperacion", "eliminarCuenta")
    swal({
      title: '¿Estás seguro de eliminar?',
      text: "Los cambios no son reversibles!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, Elimina!'
    }).then((result) => {
      if (result.value) {
          $.ajax({
            url: '../../controllers/eliminarcuenta.php',
            type: 'POST',
            data: datos,
            processData: false,
            contentType: false,
            success: function(respuesta) {
                console.log(respuesta)
                if ( respuesta == 1) {
                    swal(
                      'Eliminado!',
                      'Su cuenta ha sido eliminada.',
                      'success'
                    ).then((result) => {
                      
                        window.location = "../modulos/nueva-cuenta.php"
                      
                    })
                }
            }
        })
      }
    })
})
