$(document).ready(function(){
	var objMsg = new TMensaje;
	function getMSG(){
		objMsg.getMensajes($("#id").val(), {post: function(data, mensajes){
			$.each(mensajes, function(key, el){
				$("#conversacionAdmon").append(el);			
			});
    		$("#conversacionAdmon .well").each(function(){
    			var el = jQuery.parseJSON($(this).attr("obj"));
    			$(this).addClass("mensajeActivo");
    			
    			if (!el.coordinador){
    			   $(this).addClass("mensajeActivo");
				   
				   $(this).attr("title", "Click para mostrar al coordinador");
    			
        			$(this).click(function(){
        				if (confirm("¿Seguro de mandar el mensaje al coordinador?")){
        				   objMsg.enviarCoordinador(el.idMensaje, {ok: function(){
        				   		getMSG();
        				   }});
        				}
        			});
    			}else
					$(this).prepend('<span class="label label-success">Mostrado al coordinador</span><br /> <br />');
    		});
    		
    		if ($("#chkScroll").prop("checked"))
				$("#conversacionAdmon").scrollTop($("#conversacionAdmon").prop("scrollHeight"));
		}});
	}
	
	getMSG();
	
	setInterval(function(){
		getMSG();
	}, 3000);
	
	var objUser = new TUsuario;
	function getConectados(){
		objUser.getConectados({
			post: function(data){
				$("#conectados").html(data);
			}
		});
	}
	
	getConectados();
	/*Usuarios conectados*/
	setInterval(function(){
		getConectados();
	}, 1000 * 60);
});