TUsuario = function(){
	var self = this;
	
	this.guardar = function(id, tipo, user, pass, email){
		$.post(
			'?mod=cusuario&action=guardar', {
				"id" : id,
				"user" : user,
				"tipo" : tipo,
				"pass" : pass,
				"email" : email
			},
			function(result){
				if(result.band == "false")
					alert("Upps, ocurrio un error guardar los datos");
				else{
					lista();
					$('#winInsertar').modal('hide');
				}
			},
			"json"
		);
	};
	
	this.eliminar = function(id){
		$.post(
			'?mod=cusuario&action=eliminar', {
				"id": id
			},
			function(result){
				if(!result.band){
					alert(result.mensaje)
				}else
					lista();
			},
			"json"
		);
	}
	
	this.sendUbicacion = function(){
		if (typeof navigator.geolocation == 'object')
			navigator.geolocation.getCurrentPosition(mostrar_ubicacion);
		
		function mostrar_ubicacion(p){
			$.post(
				'?mod=cchat&action=ubicacion', {
					latitud: p.coords.latitude, 
					longitud: p.coords.longitude
				},
				function(result){
				},
				"json"
			);
		};
	}
};