$(document).ready(function(){
	$("#btnAgregar").click(function(){
		$('#txtUser').val("");
		$('#txtPass').val("");
		$('#txtEmail').val("");
		$('#id').val("");
		
		$('#winInsertar').modal('show');
		//$('#txtNombre').focus();
	});
	
	$("#btnGuardar").click(function(){
		var obj = new TUsuario;
		obj.guardar($('#id').val(), $('#selTipo').val(), $('#txtUser').val(), $('#txtPass').val(), $('#txtEmail').val());
		
	});
	
	lista();
});

function lista(){
	$.ajax({
		type: "GET",
		url: '?mod=listaUsuarios',
		success: function(data) {
			$('#dvLista').html(data);
			$('#tblUsuarios').DataTable({
				"language": {
				    "url": "templates/js/tables.lang.json"
				}
			});
			
			$(".btnModificar").each(function(){
				$(this).click(function(){
					var el = jQuery.parseJSON($(this).attr("data"));
					$('#txtUser').val(el.user);
					$('#txtEmail').val(el.email);
					$('#id').val(el.idUsuario);
					
					$('#winInsertar').modal('show');
					$('#txtUser').focus();
				});
			});
			
			$(".btnEliminar").each(function(){
				$(this).click(function(){
					var el = jQuery.parseJSON($(this).attr("data"));
					var obj = new TUsuario;
					obj.eliminar(el.idUsuario);
				});
			});
		}
	});
}
