// Load just enough for the splash screen
subscribe("prepreload", function(){

	Preload([

		// For the Splash
		{id:"button_large", image:"http://127.0.0.1:8000/crowds-master/sprites/button_large.png"},
		{id:"line", image:"http://127.0.0.1:8000/crowds-master/sprites/line.png"},
		{id:"peeps", image:"http://127.0.0.1:8000/crowds-master/sprites/peeps.png"},
		{id:"pencil", image:"http://127.0.0.1:8000/crowds-master/sprites/pencil.png"},

		// Sound Effects
		{id:"pencil", audio:"http://127.0.0.1:8000/crowds-master/audio/pencil.mp3"},
		{id:"pencil_short", audio:"http://127.0.0.1:8000/crowds-master/audio/pencil_short.mp3"},
		{id:"snip0", audio:"http://127.0.0.1:8000/crowds-master/audio/snip0.mp3"},
		{id:"snip1", audio:"http://127.0.0.1:8000/crowds-master/audio/snip1.mp3"},
		{id:"snip2", audio:"http://127.0.0.1:8000/crowds-master/audio/snip2.mp3"},

		// UI
		{id:"sound", image:"http://127.0.0.1:8000/crowds-master/sprites/ui/sound.png"},
		{id:"sharing", image:"http://127.0.0.1:8000/crowds-master/sprites/ui/sharing.png"},

	],function(progress){
		if(progress==1){
			publish("prepreload/done");
			publish("preload");
		}
	});

});

// Load the rest of it
window.PRELOAD_PROGRESS = 0;
subscribe("preload", function(){

	Preload([

		// Music
		{id:"bg_music", audio:"http://127.0.0.1:8000/crowds-master/audio/bg_music.mp3"},

		// Sound Effects
		{id:"bonk", audio:"http://127.0.0.1:8000/crowds-master/audio/bonk.mp3"},
		{id:"boom", audio:"http://127.0.0.1:8000/crowds-master/audio/boom.mp3"},
		{id:"button0", audio:"http://127.0.0.1:8000/crowds-master/audio/button0.mp3"},
		{id:"button1", audio:"http://127.0.0.1:8000/crowds-master/audio/button1.mp3"},
		{id:"button2", audio:"http://127.0.0.1:8000/crowds-master/audio/button2.mp3"},
		{id:"chimes", audio:"http://127.0.0.1:8000/crowds-master/audio/chimes.mp3"},
		{id:"contagion", audio:"http://127.0.0.1:8000/crowds-master/audio/contagion.mp3"},
		{id:"party", audio:"http://127.0.0.1:8000/crowds-master/audio/party.mp3"},
		{id:"party_short", audio:"http://127.0.0.1:8000/crowds-master/audio/party_short.mp3"},
		{id:"pluck0", audio:"http://127.0.0.1:8000/crowds-master/audio/pluck0.mp3"},
		{id:"pluck1", audio:"http://127.0.0.1:8000/crowds-master/audio/pluck1.mp3"},
		{id:"pluck2", audio:"http://127.0.0.1:8000/crowds-master/audio/pluck2.mp3"},
		{id:"pluck3", audio:"http://127.0.0.1:8000/crowds-master/audio/pluck3.mp3"},
		{id:"pop", audio:"http://127.0.0.1:8000/crowds-master/audio/pop.mp3"},
		{id:"scratch_in", audio:"http://127.0.0.1:8000/crowds-master/audio/scratch_in.mp3"},
		{id:"scratch_out", audio:"http://127.0.0.1:8000/crowds-master/audio/scratch_out.mp3"},
		{id:"squeak_down", audio:"http://127.0.0.1:8000/crowds-master/audio/squeak_down.mp3"},
		{id:"squeak_up", audio:"http://127.0.0.1:8000/crowds-master/audio/squeak_up.mp3"},
		{id:"trash", audio:"http://127.0.0.1:8000/crowds-master/audio/trash.mp3"},

		// For the slides
		{id:"icons/blue", image:"http://127.0.0.1:8000/crowds-master/sprites/icons/blue.png"},
		{id:"icons/gray", image:"http://127.0.0.1:8000/crowds-master/sprites/icons/gray.png"},
		{id:"icons/red", image:"http://127.0.0.1:8000/crowds-master/sprites/icons/red.png"},
		{id:"icons/yellow", image:"http://127.0.0.1:8000/crowds-master/sprites/icons/yellow.png"},
		{id:"confetti", image:"http://127.0.0.1:8000/crowds-master/sprites/confetti.png"},
		{id:"nasa", image:"http://127.0.0.1:8000/crowds-master/sprites/nasa.png"},
		{id:"red_button", image:"http://127.0.0.1:8000/crowds-master/sprites/red_button.png"},
		{id:"sandbox_tools", image:"http://127.0.0.1:8000/crowds-master/sprites/sandbox_tools.png"},
		{id:"scratch", image:"http://127.0.0.1:8000/crowds-master/sprites/scratch.png"},
		{id:"small_world", image:"http://127.0.0.1:8000/crowds-master/sprites/small_world.png"},
		{id:"tutorial_connect", image:"http://127.0.0.1:8000/crowds-master/sprites/tutorial_connect.png"},
		{id:"tutorial_disconnect", image:"http://127.0.0.1:8000/crowds-master/sprites/tutorial_disconnect.png"},

		// UI
		{id:"arrow", image:"http://127.0.0.1:8000/crowds-master/sprites/ui/arrow.png"},
		{id:"bonus", image:"http://127.0.0.1:8000/crowds-master/sprites/ui/bonus.png"}

	],function(progress){
		window.PRELOAD_PROGRESS = progress;
	});

});


///////////////////////////////////////////
///////////////////////////////////////////

var IMAGES = {}; // todo: actually USE these images
var SOUNDS = {};
function Preload(assets, onProgress){

	var loaded = 0;
	var _onAssetLoad = function(){
		loaded++;
		onProgress(loaded/assets.length);
	};

	assets.forEach(function(asset){

		// Image
		if(asset.image){
			var img = new Image();
			img.onload = _onAssetLoad;
			img.src = asset.image;
			IMAGES[asset.id] = img;
		}

		// Audio
		if(asset.audio){
			var sound = new Howl({ src:[asset.audio] });
			sound.once('load', _onAssetLoad);
			SOUNDS[asset.id] = sound;
		}

	});

}


