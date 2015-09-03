$(document).ready(function(){
	$(".chkMedio").each(function(){
		$(this).change(function(){
			var el = jQuery.parseJSON($(this).attr("data"));
			alert($(this).is(':checked')?'asdfasdfasdf':'');
		});
	});
});