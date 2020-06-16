
$(document).on('ready', function(){
	
	$('.playbutton').on('click', function(){
		code = $('#code').html();
		$('#videoplayer').attr('src', code);
		$('.rp-cont').show();
		playPause();
		
	});

});

function closePlayer(){
	$('.rp-cont').hide();
	vidPause();
}

var myVideo = document.getElementById("videoplayer");

function playPause() {
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
}

function vidPlay() {
	myVideo.play();
}

function vidPause() {
	myVideo.pause();
}