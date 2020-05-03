
$(document).on('ready', function(){
	
	$('.playbutton').on('click', function(){

		code = $('#codevideo').html();
		type = $('#typevideo').html();

		if(type=="default"){
			player = '<div class="embed-responsive embed-responsive-16by9" style="position: relative;"><iframe src="https://mega.nz/embed#!' + code + '" class="embed-responsive-item" ></iframe><div class="nooptions"></div></div>';
		} else {
			player = '<div class="embed-responsive embed-responsive-16by9" style="position: relative;"><iframe src="https://mega.nz/embed/' + code + '" class="embed-responsive-item" ></iframe><div class="nooptions"></div></div>';
		}
		
		$('#doplayer').html(player);
		
	});

});