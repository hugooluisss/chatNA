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
					self.getMensajes();
				}
			},
			"json"
		);
	};
	
	this.getMensajes = function(id, fn){
		$.ajax({
			type: "GET",
			url: '?mod=mensajes',
			data: {evento: id == undefined?$("#evento").val():id},
			success: function(data) {
				$('#conversacion').html(data);
				if ($("#chkScroll").prop("checked"))
					$("#conversacion").scrollTop($("#conversacion").prop("scrollHeight"));
					
				$("#conversacion div:last-child p").css({"color": "red"});
				
				if (fn != undefined)
				   fn.post();
			}
		});
	};
	
	this.enviarCoordinador = function(id, fn){
		$.post(
			'?mod=cchat&action=sendCoordinador', {
				"id" : id
			},
			function(result){
				if(result.band == "false")
					alert("Upps, ocurrio un error al enviar el mensaje al coordinador");
				else if (fn != undefined)
					fn.ok();
				
			},
			"json"
		);				   
	}
};