TMensaje = function(){
	var self = this;
	
	this.enviar = function(mensaje){
		$.post(
			'?mod=cchat&action=push', {
				"texto" : mensaje
			},
			function(result){
				if(result.band == "false")
					alert("Upps, ocurrio un error al enviar tu mensaje, verifica que tu conexión a internet se encuentre activa");
				else{
					$("#txtMensaje").val("");
					$("#txtMensaje").focus();
				}
			},
			"json"
		);
	};
	
	this.getMensajes = function(){
		$.ajax({
			type: "GET",
			url: '?mod=mensajes',
			success: function(data) {
				$('#conversacion').html(data);
			}
		});
	}
};