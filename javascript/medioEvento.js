$(document).ready(function(){
	$(".chkMedio").each(function(){
		$(this).change(function(){
			var obj = new TEvento;
			if ($(this).is(':checked'))
				obj.addMedio($("#id").val(), $(this).val(), {
					before: function(){
						$(this).disabled = true;
					},
					after: function(data){
						$(this).disabled = false;
					}
				});
			else
				obj.delMedio($("#id").val(), $(this).val(), {
					before: function(){
						$(this).disabled = true;
					},
					after: function(data){
						$(this).disabled = false;
					}
				});
				
		});
	});
});