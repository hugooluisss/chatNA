TMensaje = function(){
	var self = this;
	
	this.enviar = function(mensaje){
		if (typeof navigator.geolocation == 'object')
			navigator.geolocation.getCurrentPosition(mostrar_ubicacion);
		
		function mostrar_ubicacion(p){
			$.post(
				'?mod=cchat&action=push', {
					"texto" : mensaje,
					latitud: p.coords.latitude, 
					longitud: p.coords.longitude
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
	};
	
	this.getMensajes = function(){
		$.ajax({
			type: "GET",
			url: '?mod=mensajes',
			data: {evento: $("#evento").val()},
			success: function(data) {
				$('#conversacion').html(data);
				if ($("#chkScroll").prop("checked"))
					$("#conversacion").scrollTop($("#conversacion").prop("scrollHeight"));
					
				$("#conversacion div:last-child p").css({"color": "red"});
			}
		});
	};
};