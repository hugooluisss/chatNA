/**
 * @author bvmargarita
 */

$(document).ready(function(){
	$("#btnAgregar").click(function(){
		$('#txtNombre').val("");
		$('#id').val("");
		$('#txtDescripcion').val("");
		
		$('#winInsertarEvento').modal('show');
		$('#txtNombre').focus();
	});
	
	$("#btnGuardar").click(function(){
		var obj = new TEvento;
		obj.guardar($('#id').val(), $('#txtNombre').val(), $('#txtDescripcion').val());
	});
	
	lista();
});

function lista(){
	$.ajax({
			type: "GET",
			url: '?mod=listaEventos',
			success: function(data) {
				$('#dvLista').html(data);
				var table = $('#tblEventos').DataTable({
					"language": {
						"ordering": false,
					    "url": "templates/js/tables.lang.json"
					}
				});
				
				table.order( 3, 'desc').draw();
				
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
						var obj = new TEvento;
						obj.eliminar(el.idEvento);
					});
				});
				
				$(".btnMensajes").each(function(){
					$(this).click(function(){
						var el = jQuery.parseJSON($(this).attr("data"));
						window.location="?mod=panelMsgAdmon&id=" + el.idEvento;
					});
				});
			}
		});
}
