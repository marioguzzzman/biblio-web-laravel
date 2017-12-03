		window.addEventListener("load", function() {

			// var audio = new Audio("/Sample.wav ");
      //
			// play();

			function play() {
				var audio = document.getElementById('audio');

				if (audio.paused) {
					audio.play();
					$('#play').removeClass('glyphicon-play-circle')
					$('#play').addClass('glyphicon-pause')
				} else {
					audio.pause();
					audio.currentTime = 0
					$('#play').addClass('glyphicon-play-circle')
					$('#play').removeClass('glyphicon-pause')
				}
			}
		}); //on window
