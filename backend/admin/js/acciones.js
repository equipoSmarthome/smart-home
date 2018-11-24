$(".editar button").click(function(){
    var valor = $(this).val()
    $.ajax({
        url: '../../controllers/completar-modal.php',
        type: 'POST',
        data: {datos: valor},
        success: function(respuesta){
            var valor = JSON.parse(respuesta)
            var correo_pendiente = valor[0][1]
            var mac_pendiente = valor[0][2]
            $('#correo-pendiente').attr("placeholder", correo_pendiente )
            $('#correo-pendiente').attr("value", correo_pendiente )
            $('#mac-pendiente').attr("placeholder", mac_pendiente )
			$('#mac-pendiente').attr("value", mac_pendiente )
            
        }
    })
})
$("#app").submit(function(e){
    e.preventDefault();
    var datos = $(this).serialize()
    if ($("input[name=pass]").val() == ""){
        swal("Faltan Datos", "Debes completar todos los campos", "error");
    } else {
        $.ajax({
            url: '../../controllers/insertar-user.php',
            type: 'POST',
            data: datos,
            success: function(respuesta){
                console.log(respuesta)
                if (respuesta == 1){  
                    swal({
                        title: "Genial",
                        text: "Se ha activado el usuario",
                        icon: "success",
                        timer: 1500,
                        button: false
                    }).then((result) => {
                        window.location = "../modulos/usuariosp.php"
                    })
                           
                }
            }
        })
    }
    
})