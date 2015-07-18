$(document).ready(function(){
	var map;
	var geocoder = new google.maps.Geocoder();
	
	$('#tblUsuarios').DataTable({
		"language": {
		    "url": "templates/js/tables.lang.json"
		}
	});

	if (navigator.geolocation)
		navigator.geolocation.watchPosition(initialize);
	else
		alert("No se pudieron obtener los datos de tu localización, no se puede continuar");
	
	function initialize(pos) {
		var mapOptions = {
			center: new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude),
			zoom: 8
		};
		
		map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
		getUsuarios();
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
	
	function addMarca(latlng, usuario, idUsuario){
		geocoder.geocode({'location': latlng}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				if (results[1]) {
					var marker = new google.maps.Marker({
						position: latlng,
						map: map
					});
					
					var infowindow = new google.maps.InfoWindow();
					infowindow.setContent(
					'<div id="content">' +
					'<div id="siteNotice"></div>' +
					'<h1 id="firstHeading" class="firstHeading">' + usuario + '</h1>' +
					'<div id="bodyContent">' + results[1].formatted_address +
					'</div>'+'</div>');
					if (idUsuario != undefined){
						$("#pos" + idUsuario).html(results[1].formatted_address);
						$("#btnPos" + idUsuario).click(function(){
							infowindow.open(map, marker);
						});
					}
					
					google.maps.event.addListener(marker, 'click', function() {
					    infowindow.open(map,marker);
					});
				} else
					console.log(usuario + 'Sin resultados');
			} else
				console.log('Falló al realizar la localización: ' + status);
		});
	}
	
	function getUsuarios(){
		$.post(
			'?mod=cusuario&action=ubicacion', {},
			function(result){
				for(var k in result) {
					var usuario = result[k];
					addMarca(new google.maps.LatLng(usuario.latitud, usuario.longitud), usuario.user, usuario.idUsuario);
				}
			},
			"json"
		);
	}
});