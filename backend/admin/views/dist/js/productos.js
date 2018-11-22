$(document).ready(function(){
	// Inicio Ruta Amigable
	$('input[name="tituloProducto"]').blur(function(){
		var texto = $(this).val()
		var rutaAmigable =  limpiarUrl(texto)
		$('input[name="urlProducto"]').val(rutaAmigable)
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
	// Fin Ruta Amigable
	// Inicio Select Categoria y SubCategorias Productos
	$(".Produc #selectCategoria").on("change", function(){
		var selectCategoria = $(this).val()
		var datos = {selectCategoria}
		$.ajax({
			url: 'ajax/ajaxProductosSelect.php',
			type: 'POST',
			data: {selectCategoria: selectCategoria},
			success: function(respuesta) {
				$("#selectSubCategoria").html(respuesta)
				$("#selectSubCategoria").on("change", function(){
				var selectSubCategoria = $(this).val()
				var datos = {selectSubCategoria}
				
				$.ajax({
					url: 'ajax/ajaxProductosCrearVista.php',
					type: 'POST',
					data: {selectSubCategoria: selectSubCategoria},
					success: function(respuesta) {
						
						$(".table-dark tbody").html(respuesta)
					}
				})
			})
			}
		})
	})
	// Fin Select Categoria y SubCategorias Productos
	// Inicio Select Categoria y SubCategorias Modal Productos
	$(".lala #selectCategoria").on("change", function(){
		var selectCategoria = $(this).val()
		var datos = {selectCategoria}
		$.ajax({
			url: 'ajax/ajaxProductosSelect.php',
			type: 'POST',
			data: {selectCategoria: selectCategoria},
			success: function lala(respuesta) {
				$(".lele #selectSubCategoria").html(respuesta)	
			}
		})
	})
	// Fin Select Categoria y SubCategorias Modal Productos
	// Inicio Opciones Checkbox Oferta
	$("#oferta").on( 'change', function() {
	    if( $(this).is(':checked') ) {
	        // Hacer algo si el checkbox ha sido seleccionado
	        $("#oferta").attr("value", 1)
	        $("#ocultar, #ocultar1, #ocultar2").fadeIn()
	        
	    } else {
	        // Hacer algo si el checkbox ha sido deseleccionado
	        $("#oferta").attr("value", 0)
	        $("#ocultar, #ocultar1, #ocultar2").fadeOut()
	    }
	})
	// Inicio Calculo del descuento
	$('input[name="descuentoProducto"]').blur(function(){
		var descuento = $(this).val()
		var precio = $('input[name="precioProducto"]').val()
		var precioDescuento = (precio-((descuento*precio)/100))
		$('input[name="precioOfertaProducto"]').val(precioDescuento)
	})
	// Inicio Calculo del descuento
	$("#ofertaEditar").on( 'change', function() {
	    if( $(this).is(':checked') ) {
	        // Hacer algo si el checkbox ha sido seleccionado
	        $("#oferta").attr("value", 1)
	        $("#ocultar, #ocultar1, #ocultar2").fadeIn()
	        
	    } else {
	        // Hacer algo si el checkbox ha sido deseleccionado
	        $("#oferta").attr("value", 0)
	        $("#ocultar, #ocultar1, #ocultar2").fadeOut()
	    }
	})
	$('input[name="descuentoProducto1"]').blur(function(){
		var descuento = $(this).val()
		var precio = $('input[name="precioProducto1"]').val()
		var precioDescuento = (precio-((descuento*precio)/100))
		$('input[name="precioOfertaProducto1"]').val(precioDescuento)
	})
	// Fin Calculo del descuento
	// Fin Opciones Checkbox Oferta
	// Inicio Nuevo Producto
	$("#formu-nuevo-producto").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxProductos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
					swal({
					  type: 'success',
					  title:'Excelente',
					  text: 'Producto creado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "productos"
					  }
					})
				}
			}
		})
	})


	$("#formu-editar-producto").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxProductos.php',
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
					  text: 'Producto actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "productos"
					  }
					})
				}
			}
		})
	})



	$("body .table-dark").on("click", ".btnEditarProductos", function(){
		var idProducto = $(this).attr("idproductos")
		var datos = new FormData()
		datos.append("idproductos", idProducto)
		datos.append("tipoOperacion", "editarProductos")
		console.log(idProducto)
		$.ajax({
			url: 'ajax/ajaxProductos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.oferta)
				$('#formu-editar-producto select[name="categoria"]').val(valor.categoria)
				$('#formu-editar-producto select[name="subcategoria"]').val(valor.subcategoria)
				$('#formu-editar-producto input[name="tituloProducto"]').val(valor.titulo)
				$('#formu-editar-producto input[name="urlProducto"]').val(valor.ruta)
				$('#formu-editar-producto textarea[name="descripcionProducto"]').val(valor.descripcion)
				$('#formu-editar-producto input[name="detalleProducto"]').val(valor.detalle)
				$('#formu-editar-producto input[name="precioProducto1"]').val(valor.precio)
				$('#formu-editar-producto #imagenProducto').attr("src", "backend/"+valor.imagen)
				$('#formu-editar-producto input[name="rutaActual"]').val(valor.imagen)
				$('#formu-editar-producto input[name="descuentoProducto1"]').val(valor.descuento)
				$('#formu-editar-producto input[name="precioOfertaProducto1"]').val(valor.precioOferta)
				$('#formu-editar-producto input[name="finOfertaProducto"]').val(valor.finOferta)
			}
		})
	})

	$("body .table-dark").on("click", ".btnEliminarProducto", function(){
		var idProducto = $(this).attr("idproductos")
		var rutaImagen = $(this).attr("rutaImagen")
		var datos = new FormData()
		datos.append("id_producto", idProducto)
		datos.append("tipoOperacion", "eliminarProducto")
		datos.append("rutaImagen", rutaImagen)
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
				url: 'ajax/ajaxProductos.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					console.log(respuesta)
					if ( respuesta.includes("ok")) {
						swal(
					      'Eliminado!',
					      'Su archivo a sido eliminado.',
					      'success'
					    ).then((result) => {
						  if (result.value) {
						    window.location = "productos"
						  }
						})
					}
				}

			})
		  }
		})




		

	})


	// PREVISUALIZAR IMAGENES

	$("#imagen").change(previsualizarImg)
	$("#imagenEditar").change(previsualizarImg)


	function previsualizarImg(e) {
		var contenedor = e.target.parentNode

		var identificador = contenedor.classList[1]

		imgsubCategoria = this.files[0];

			if( imgsubCategoria["type"] != "image/jpeg" && imgsubCategoria["type"] != "image/png") {
				$("#custom").val("")

				swal({
					type: 'error',
					title: 'No es una imagen!!',
					text: 'Debe subir imagenes en formato JPEG o PNG',
				})
			} 
			if ( imgsubCategoria["type"] > 2000000) {
				$("#imagensubCategoria").val("")

				swal({
					type: "Error al subir la imagen",
					text: "La imagen debe pesar MAX 2MB",
					icon: 'error',
					confirmButtonText: "¡Cerrar!",
				})
			}

			else {
				$("#imagensubCategoria").css("display", "block")

				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgsubCategoria);

		  		$(datosImagen).on("load", function(event){

		  			var rutaImagen = event.target.result;

		  			$("." + identificador +" #imagensubCategoria").attr("src", rutaImagen);
		  		})
			}

		}
	













	

	
})