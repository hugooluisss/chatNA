$(document).ready(function(){
	console.log("Cargando script");
	$("form:not(.filter) :input:visible:enabled:first").focus();
	
	$("#frmLogin").submit(function(){
		console.log("Validando datos del login");
		if ($("#txtUsuario").val() == ""){
			alert("Escribe tu usuario o grupo");
			$("#txtUsuario").focus();
		}else if(($("#txtPass").val() == "")){
			alert("Escribe tu contraseña");
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
						alert(result.mensaje);
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