TMensaje = function(){
	var self = this;
	
	this.enviar = function(mensaje, fn){
		$.post(
			'?mod=cchat&action=push', {
				"texto" : mensaje
			},
			function(result){
				if(result.band == "false")
					alert("Upps, ocurrio un error al enviar tu mensaje, verifica que tu conexión a internet se encuentre activa");
					
				if (fn != undefined)
					fn.post(result);
			},
			"json"
		);
	};
	
	this.getMensajes = function(id, fn, coordinador){
		$.ajax({
			type: "GET",
			url: '?mod=mensajes',
			data: {evento: id == undefined?$("#evento").val():id, "coordinador": coordinador?'s':'n'},
			success: function(data) {
				if (fn != undefined)
				   fn.post(data);
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