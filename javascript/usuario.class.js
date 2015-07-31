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
		if (typeof(navigator.geolocation) != 'undefined'){
			navigator.geolocation.getCurrentPosition(function(p){
				$.post(
					'?mod=cchat&action=sendUbicacion', {
						latitud: p.coords.latitude, 
						longitud: p.coords.longitude
					},
					function(result){
						console.log("Ubicación enviada");
					},
					"json"
				);	
			},
			function(error){
				switch(error.code){
					case 1: alert("Vaya :/ tu equipo no nos permitió el obtener tu localización, para nosotros seria importante que habilitaras esta opción"); break;
					case 2: alert("Upps... por alguna razón no se pudo obtener la ubicación de tu equipo"); break;
					case 3: alert("Algo fue mal :| ... no pudimos obtener tu localizacón");
				}
			});
		}else{
			alert("Tu navegador no admite el compartir tu ubicación");
		}
	};
	
	this.getUsersJoomla = function(){
		$.post(
				'?mod=cusuario&action=usuariosJoomla', {},
				function(result){
				},
				"json"
			);
	};
	
	this.getConectados = function(fn){
		$.ajax({
			type: "GET",
			url: '?mod=listaConectados',
			success: function(data) {
				if (fn != undefined)
				   fn.post(data);
			}
		});
	};
};