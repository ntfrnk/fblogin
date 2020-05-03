
function goBack() {
	window.history.back();
}

function open_alert(texto){
	$('#alert-text').html(texto);
	open_modal('alert');
}

function open_alert2(texto){
	$('#alert-text2').html(texto);
	open_modal('alert2');
}