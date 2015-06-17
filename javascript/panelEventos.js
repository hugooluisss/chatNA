/**
 * @author bvmargarita
 */

$(document).ready(function(){
	$("#btnAgregar").click(function(){
		$('#txtNombre').val("");
		$('#txtDescripcion').val("");
		
		$('#winInsertarEvento').modal('show');
		$('#txtNombre').focus();
	});
	
	$("#btnGuardar").click(function(){
		$.post(
			'?mod=cevento&action=guardar', {
				"nombre" : $('#txtNombre').val(), 
				"descripcion": $('#txtDescripcion').val(),
				"id": $("#id").val()
			},
			function(result){
				if(!result.band){
					alert(result.mensaje)
				}else{
					lista();
					$('#winInsertarEvento').modal('hide');
				}
			},
			"json"
		);
	});
	
	lista();
});

function lista(){
	$.ajax({
			type: "GET",
			url: '?mod=listaEventos',
			success: function(data) {
				$('#dvLista').html(data);
				$('#tblEventos').DataTable();
				
				$(".btnModificar").each(function(){
					$(this).click(function(){
						var el = jQuery.parseJSON($(this).attr("data"));
						$('#txtNombre').val(el.nombre);
						$('#txtDescripcion').val(el.descripcion);
						$('#id').val(el.idEvento);
						
						$('#winInsertarEvento').modal('show');
						$('#txtNombre').focus();
					});
				});
				
				$(".btnEliminar").each(function(){
					$(this).click(function(){
						var el = jQuery.parseJSON($(this).attr("data"));
						alert("hola mundo");
					});
				});
			}
		});
}
