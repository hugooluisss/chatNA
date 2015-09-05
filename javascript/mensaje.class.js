var lastId = null;

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
		$.post(
			'?mod=mensajes', {
				"id" :  id == undefined?$("#evento").val():id, 
				"coordinador": coordinador?'s':'n',
				"ultimo" : lastId
			},
			function(result){
				if(result.band == "false")
					alert("Upps, ocurrio un error recuperar los mensjes");
				else{
					var mensajes = new Array;
					$.each(result.mensajes, function(key, mensaje){
						
						el = $('<div/>', { 'class': 'well well-sm mensajeActivo', 'obj': mensaje.json });
						el.html('<p>' + mensaje.from + ' dijo el <span class="label label-warning">' + mensaje.hora + '</span></p>' + mensaje.texto);
						
						mensajes.push(el);
						lastId = mensaje.idMensaje;
					});
					
					if (fn.post != undefined)
						fn.post(result, mensajes);
				} 
				
			},
			"json"
		);
		
		
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