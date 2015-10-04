TMedio = function(){
	var self = this;
	
	this.setPanel = function(json){
		var sala = jQuery.parseJSON(json);
		
		$("#wowza").html("");
		$f("wowza", "http://releases.flowplayer.org/swf/flowplayer-3.2.18.swf", {
				autoPlay: true,
				fullscreen: true,
				clip: {
				provider: 'cloudfront',
				
				// combined streams are configured in the "streams" node as follows:
				streams: [
					{ url: 'livestream'},
				]
			},
			// our rtmp plugin is configured identically as in the first example
			plugins: {
				cloudfront: {
					url: "flowplayer.rtmp-3.2.13.swf",
					netConnectionUrl: 'rtmp://209.208.97.249:1936/' + (sala.medio == undefined?'live':sala.medio)
				},
				controls: {
					playlist: false,
					fullscreen: sala.pantallaCompleta == undefined?true:sala.pantallaCompleta,
					stop: false,
					time: false,
					play: false,
					scrubber: true
				}
			},
			onLoad: function() { // called when player has finished loading
				this.setVolume(1000); // set volume property
			},
			onError: function(){
				alert("Ocurrió un error");
			}
		});
	}
};