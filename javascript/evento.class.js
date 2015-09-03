TEvento = function(){
	var self = this;
	
	this.guardar = function(id, nombre, descripcion){
		$.post(
			'?mod=cevento&action=guardar', {
				"nombre" : nombre, 
				"descripcion": descripcion,
				"id": id
			},
			function(result){
				if(!result.band){
					alert(result.mensaje);
				}else{
					lista();
					$('#winInsertarEvento').modal('hide');
				}
			},
			"json"
		);
	};
	
	this.eliminar = function(id){
		$.post(
			'?mod=cevento&action=eliminar', {
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
	
	this.addMedio = function(id, sala, fn){
		if (fn.before != undefined) fn.before();
		
		$.post(
			'?mod=cevento&action=addSala', {
				"id": id,
				"sala": sala
			},
			function(result){
				if (fn.after != undefined)
					fn.after(result);
					
				if(!result.band){
					alert(result.mensaje)
				}else
					lista();
			},
			"json"
		);
	} 
	
	this.delMedio = function(id, sala, fn){
		if (fn.before != undefined) fn.before();
		
		$.post(
			'?mod=cevento&action=delSala', {
				"id": id,
				"sala": sala
			},
			function(result){
				if (fn.after != undefined)
					fn.after(result);
					
				if(!result.band){
					alert(result.mensaje)
				}else
					lista();
			},
			"json"
		);
	}
}