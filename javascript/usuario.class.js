TUsuario = function(){
	var self = this;
	
	this.add = function(datos){
		if (datos.fn.before !== undefined) datos.fn.before();
		
		$.post('cusuarios', {
				"id": datos.id,
				"nombre": datos.nombre,
				"email": datos.email, 
				"pass": datos.pass,
				"tipo": datos.tipo,
				"action": "add"
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (datos.fn.after !== undefined)
					datos.fn.after(data);
			}, "json");
	};
	
	this.del = function(usuario, fn){
		$.post('?mod=cusuarios&action=del', {
			"usuario": usuario,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar al usuario");
			}
		}, "json");
	};
	
	this.login = function(usuario, pass, fn){
		if (fn.before !== undefined)
			fn.before();
			
		$.post('clogin', {
			"usuario": usuario,
			"pass": pass,
			"action": "login"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false'){
				console.log("Los datos del usuario no son válidos");
			}
		}, "json");
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
		$.post('cusuario', {
					"action": "usuariosJoomla"
				},
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