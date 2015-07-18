$(document).ready(function(){
	var obj = new TMensaje;
	var numMsg = 0;
	obj.getMensajes(undefined, {
		post: mostrarMensages
	}, true);
	
	function mostrarMensages(data){
		$('#conversacion').html(data);
		if ($("#chkScroll").prop("checked"))
			$("#conversacion").scrollTop($("#conversacion").prop("scrollHeight"));
				
		$("#conversacion div:last-child p").css({"color": "red"});
		
		if ($("#conversacion div").size() > numMsg){
			navigator.vibrate = navigator.vibrate || navigator.webkitVibrate || navigator.mozVibrate || navigator.msVibrate;
			if (navigator.vibrate)
    			navigator.vibrate(5000);
    		
    		var nuevosMsg = $("#conversacion div").size() - numMsg;
    			
    		if (nuevosMsg > 0 && numMsg > 0)
    			alert('Tienes ' + nuevosMsg + " nuevos mensajes");
    				
    		numMsg = $("#conversacion div").size();
		}
	}
	
	setInterval(function(){
		obj.getMensajes(undefined, {
			post: mostrarMensages
		}, true);
	}, 3000);
});