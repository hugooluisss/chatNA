$(document).ready(function(){
	var objMsg = new TMensaje;
	
	objMsg.getMensajes($("#id").val(), {post: function(){
		$("#conversacion .well").each(function(){
			$(this).css({"cursor": "pointer"});
			$(this).attr("title", "Click para mostrar al coordinador");
			
			$(this).click(function(){
				var el = jQuery.parseJSON($(this).attr("obj"));
				alert(el.idMensaje);
			});
		});
	}});
});