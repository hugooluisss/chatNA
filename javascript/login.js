$(document).ready(function(){
	console.log("Cargando script");
	$("form:not(.filter) :input:visible:enabled:first").focus();
	
	$("#frmLogin").submit(function(){
		console.log("Validando datos del login");
		if ($("#txtUsuario").val() == ""){
			$("#msg-texto").html("Escribe tu usuario o grupo");
			$('#winModal').modal({keyboard: true, backdrop: true, show: true});
			$("#txtUsuario").focus();
		}else if(($("#txtPass").val() == "")){
			$("#msg-texto").html("Escribe tu contraseña");
			$('#winModal').modal({keyboard: true, backdrop: true, show: true});
			$("#txtPass").focus();
		}else{
			console.log("Validación inicial exitosa");
			$('#frmLogin').find('input, textarea, button, select').attr('disabled', true);
			$.post(
				'?mod=clogin&action=validarCredenciales', {
					usuario : $('#txtUsuario').val(), 
					pass: $('#txtPass').val()
				},
				function(result){
					if(!result.band){
						$("#msg-texto").html(result.mensaje);
						$('#winModal').modal({keyboard: true, backdrop: true, show: true});
						$("#txtPass").select();
					}else
						window.location.href = "?mod=panel";
					
					$('#frmLogin').find('input, textarea, button, select').attr('disabled', false);
				},
				"json"
			);
		}
	});
});