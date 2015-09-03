$(document).ready(function(){
	
	
	var medio = new TMedio;
	$("#selMedio option:selected").each(function(){
		medio.setPanel($(this).attr("data"));
	});
	 
	$("#selMedio").change(function(){
		$("#selMedio option:selected").each(function(){
			medio.setPanel($(this).attr("data"));
		});
	});
	
	$("#btnMensaje").click(function(){
		var obj = new TMensaje;
		$("#txtMensaje").attr("disabled", true);
		$("#btnMensaje").attr("disabled", true);
		obj.enviar($("#txtMensaje").val(), {
			post: function(){
				$("#txtMensaje").attr("disabled", false);
				$("#btnMensaje").attr("disabled", false);
			}
		});
	});
	
	$("#txtMensaje").keypress(function(e){
		if(e.which == 13) {
			var obj = new TMensaje;
			
			$("#txtMensaje").attr("disabled", true);
			$("#btnMensaje").attr("disabled", true);
					
			obj.enviar($("#txtMensaje").val(), {post: function (result){
					$("#txtMensaje").attr("disabled", false);
					$("#btnMensaje").attr("disabled", false);					
					if (result.band == "true"){
						$("#txtMensaje").val("");
						$("#txtMensaje").focus();
						obj.getMensajes(undefined, {post: mostrarMensages});
					}
				}
			});
		}
	});
	
	var obj = new TMensaje;
	obj.getMensajes(undefined, {
		post: mostrarMensages
	});
	
	function mostrarMensages(data){
		$('#conversacion').html(data);
		if ($("#chkScroll").prop("checked"))
			$("#conversacion").scrollTop($("#conversacion").prop("scrollHeight"));
				
		$("#conversacion div:last-child p").css({"color": "red"});
	}
	
	var objUsuario = new TUsuario;
	objUsuario.sendUbicacion();
	
	setInterval(function(){
		obj.getMensajes(undefined, {
			post: mostrarMensages
		});
	}, 5000);
});