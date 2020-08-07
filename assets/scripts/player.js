
$(document).on('ready', function(){
	
	$('.playbutton').on('click', function(){
		code = $('#code').html();
		$('#videoplayer').attr('src', code);
		$('.rp-cont').show();
		playPause();
		clase_vista();
	});

});

function clase_vista(){
	setTimeout(function(){
		var claseID = $('#claseID').html();
		$.post('process/user-clase-vista.php', {'claseID': claseID}, function(resp){
			$.post('process/user-clase-newlist.php', {'claseID':claseID}, function(res){
				$('#class-list-side').html(res);
			});
		});
	}, 300000);
}

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