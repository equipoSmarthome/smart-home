$(document).ready(function(){
	$('input[name="tituloCategoria"]').blur(function(){
		var texto = $(this).val()

		var rutaAmigable =  limpiarUrl(texto)

		$('input[name="rutaCategoria"]').val(rutaAmigable)
	})
	function limpiarUrl(texto) {
		texto = texto.toLowerCase()
		texto = texto.replace(/á/g, "a");
		texto = texto.replace(/é/g, "e");
		texto = texto.replace(/í/g, "i");
		texto = texto.replace(/ó/g, "o");
		texto = texto.replace(/ú/g, "u");
		texto = texto.replace(/ñ/g, "n");
		texto = texto.replace(/\s/g,"-");
		return texto
	}	

	$("#formu-nuevo-categoria").submit(function (e) {
		e.preventDefault()
		
		var datos = $(this).serialize()
		$.ajax({
			url: 'ajax/ajaxCategoria.php',
			type: 'POST',
			data: datos,
			success: function(respuesta) {
				if (respuesta == "ok") {
					swal({
					  type: 'success',
					  title: 'Excelente',
					  text: 'Categoria creada con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "categorias"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-categoria").submit(function (e) {
		e.preventDefault()
		var datos = $("#formu-editar-categoria").serialize()
		$.ajax({
			url: 'ajax/ajaxCategoria.php',
			type: 'POST',
			data: datos,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
					swal({
					  type: 'success',
					  title: 'Actualizado',
					  text: 'Categoria actualizada con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "categorias"
					  }
					})
				}
			}
		})
	})
	$("body .table-dark").on("click", ".btnEditarCategoria", function(){
		var idCategoria = $(this).attr("idCategoria")
		var datos = new FormData()
		console.log(datos)
		datos.append("id_categoria", idCategoria)
		datos.append("tipoOperacion", "editarCategoria")
		
		$.ajax({
			url: 'ajax/ajaxCategoria.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				$('#formu-editar-categoria input[name="tituloCategoria"]').val(valor.categoria)
				$('#formu-editar-categoria input[name="rutaCategoria"]').val(valor.ruta)
				$('#formu-editar-categoria input[name="id_categoria"]').val(valor.id_categoria)
			}
		})
	})
	$("body .table-dark").on("click", ".btnEliminarCategoria", function(){
		var idCategoria = $(this).attr("idCategoria")
		var datos = new FormData()
		datos.append("id_categoria", idCategoria)
		datos.append("tipoOperacion", "eliminarCategoria")
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
				url: 'ajax/ajaxCategoria.php',
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
						    window.location = "categorias"
						  }
						})
					}
				}
			})
		  }
		})
	})


})