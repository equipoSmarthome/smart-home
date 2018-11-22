$(document).ready(function(){




	$("body .tableta").on("click", ".btnEliminarUsuario", function(){
		var idUsuario = $(this).attr("idUsuario")
		var datos = new FormData()
		datos.append("id_usuario", idUsuario)
		datos.append( "tipoOperacion","eliminarUsuario")
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
				url: 'ajax/ajaxUsuario.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					if ( respuesta == "ok") {
						swal(
					      'Eliminado!',
					      'Su archivo a sido eliminado.',
					      'success'
					    ).then((result) => {
						  if (result.value) {
						    window.location = "usuariosp"
						  }
						})
					}
				}
			})
		  }
		})
	})
})