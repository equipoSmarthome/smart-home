$("#cambiar-estado").click(function(){
    var valor = $(this).val()
    console.log(valor)
    $.ajax({
        url: '../../models/completar-modal.php',
        type: 'POST',
        data: valor,
        success: function(respuesta){
            console.log(respuesta)
        }
    })
})