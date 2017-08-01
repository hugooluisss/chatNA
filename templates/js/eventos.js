$(document).ready(function(){
	$("#sendEventos").click(function(){
		window.location.href = "?mod=eventos";
	});
	
	$("#acercaDe").click(function(){
		$('#winAcercaDe').modal({keyboard: true, backdrop: true, show: true});
	});
	
	$("#btnSalir").click(function(){
		if (confirm("¿Seguro?"))
			window.location.href = "?mod=clogin&action=logout";
	});
});