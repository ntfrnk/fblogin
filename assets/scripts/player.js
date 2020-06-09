
$(document).on('ready', function(){

	$("body").on("contextmenu",function(e){
        return false;
	});
	
	$('body').bind('cut copy paste', function (e) {
        e.preventDefault();
	});
	
	$('.playbutton').on('click', function(){
		code = $('#code').html();
		$('#videoplayer').attr('src', code);
		$('.rp-cont').show();
		playPause();
		
	});

});

var myVideo = document.getElementById("videoplayer");

function playPause() {
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
}