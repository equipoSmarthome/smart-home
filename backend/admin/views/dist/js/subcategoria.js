$(document).ready(function(){	
	$('input[name="tituloSubcategoria"]').blur(function(){
		var texto = $(this).val()

		var rutaAmigable =  limpiarUrl(texto)

		$('input[name="urlSubcategoria"]').val(rutaAmigable)
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
	
	$("#formu-nuevo-subcategoria").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxSubcategoria.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
					swal({
					  type: 'success',
					  title: 'Excelente',
					  text: 'Subcategoria creado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "subcategorias"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-subcategoria").submit(function (e){
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxSubcategoria.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
					swal({
					  type: 'success',
					  title: 'Actualizado',
					  text: 'Subcategoria actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "subcategorias"
					  }
					})
				}
			}
		})
	})
	$("body .table-dark").on("click", ".btnEditarSubcategoria", function(){
		var idSubcategoria = $(this).attr("idSubcategoria")
		var datos = new FormData()
		datos.append("id_subcategoria", idSubcategoria)
		datos.append("tipoOperacion", "editarSubcategoria")
		$.ajax({
			url: 'ajax/ajaxSubcategoria.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				$('#formu-editar-subcategoria input[name="tituloSubcategoria"]').val(valor.titulo_subcategoria)
				$('#formu-editar-subcategoria input[name="urlSubcategoria"]').val(valor.vinculo_subcategoria)
				$('#formu-editar-subcategoria #imagenSubcategoria').attr("src", valor.imagen)
				$('#formu-editar-subcategoria input[name="id_subcategoria"]').val(valor.id_subcategoria)
				$('#formu-editar-subcategoria input[name="rutaActual"]').val(valor.imagen)
				$('#formu-editar-subcategoria select[name="categoria"]').val(valor.categoria)
				
			}
		})
	})
	$("body .table-dark").on("click", ".btnEliminarSubcategoria", function(){
		var idSubcategoria = $(this).attr("idSubcategoria")
		var rutaImagen = $(this).attr("rutaPortada")
		var datos = new FormData()
		datos.append("id_subcategoria", idSubcategoria)
		datos.append("tipoOperacion", "eliminarSubcategoria")
		datos.append("rutaPortada", rutaImagen)
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
				url: 'ajax/ajaxSubcategoria.php',
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
						    window.location = "subcategorias"
						  }
						})
					}
				}
			})
		  }
		})
	})
$("#imagen").change(previsualizarImg)
	$("#imagenEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSubcategoria = this.files[0];
			if( imgSubcategoria["type"] != "image/jpeg" && imgSubcategoria["type"] != "image/png") {
				$("#custom").val("")
				swal({
					type: 'error',
					title: 'No es una imagen!!',
					text: 'Debe subir imagenes en formato JPEG o PNG',
				})
			} 
			if ( imgSubcategoria["type"] > 2000000) {
				$("#imagenSubcategoria").val("")
				swal({
					type: "Error al subir la imagen",
					text: "La imagen debe pesar MAX 2MB",
					icon: 'error',
					confirmButtonText: "¡Cerrar!",
				})
			}else{
				$("#imagenSubcategoria").css("display", "block")

				var datosImagen = new FileReader
		  		datosImagen.readAsDataURL(imgSubcategoria)

		  		$(datosImagen).on("load", function(event){

		  			var rutaImagen = event.target.result;

		  			$("." + identificador +" #imagenSubcategoria").attr("src", rutaImagen);
		  		})
			}
		}
})