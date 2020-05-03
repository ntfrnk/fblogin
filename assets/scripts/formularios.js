
$(function(){

	var pow_base = $('#pow_base').html();

	/* Registro */

	$('#registro-nombre').focus();

	$('#registro-send').on('click', function(){

		nombre = $('#registro-nombre').val();
		apellido = $('#registro-apellido').val();
		email = $('#registro-email').val();
		pass = $('#registro-pass').val();

		if(nombre=="" || nombre==null || nombre==undefined){
			msjError("nombre-msj", "Este campo es obligatorio.");
		} else if(apellido=="" || apellido==null || apellido==undefined){
			msjError("apellido-msj", "Este campo es obligatorio.");
		} else if(email=="" || email==null || email==undefined){
			msjError("email-msj", "Este campo es obligatorio.");
		} else if(validar_email(email)==false){
			msjError("email-msj", "Por favor ingresa un correo válido.");
		} else if(pass=="" || pass==null || pass==undefined){
			msjError("pass-msj", "Por favor indica una contraseña.");
		} else if(pass.length < 6){
			msjError("pass-msj", "Tu contraseña debe tener al menos 6 caracteres.");
		} else {
			$('.spinner-btn').addClass('spinner-btn-on');
			$('#registro-send>span').html('Enviando... ');
			$.post('process/registro.php',{
				'nombre':nombre,
				'apellido':apellido,
				'email':email,
				'pass':pass
			}, function(resp){
				if(resp=="ok"){
					window.location = pow_base + 'login/';
				} else if(resp=="yala") {
					msjError("email-msj", "Este correo ya está en uso.");
					$('.spinner-btn').removeClass('spinner-btn-on');
					$('#registro-send>span').html('Registrarme');
				} else{
					console.log("Error");
				}
			});
		}

	});


	/* Inicio de sesión */

	$('#login-email').focus();
	
	$("#login-email").keypress(function(event) {
		if ( event.which == 13 ) {
			$('#login-pass').focus();
		}
	});
	
	$("#login-pass").keypress(function(event) {
		if ( event.which == 13 ) {
			$('#login-send').trigger('click');
		}
	});


	$('#login-send').on('click', function(){

		email = $('#login-email').val();
		pass = $('#login-pass').val();

		if(email=="" || email==null || email==undefined){
			msjError("email-msj", "Este campo es obligatorio.");
		} else if(validar_email(email)==false){
			msjError("email-msj", "Debes indicar un correo válido.");
		} else if(pass=="" || pass==null || pass==undefined){
			msjError("pass-msj", "Por favor indica una contraseña.");
		} else {
			$('.spinner-btn').addClass('spinner-btn-on');
			$('#login-send>span').html('Validando... ');
			$.post('process/login.php',{
				'email':email,
				'pass':pass
			}, function(resp){
				if(resp=="ok"){
					window.location = pow_base + 'home/';
				} else if(resp=="block"){
					$('.spinner-btn').removeClass('spinner-btn-on');
					$('#login-send>span').html('Ingresar');
					$('.login-resp-text').html('Usuario bloqueado.');
					$('.login-resp').addClass('login-resp-on');
					console.log("Usuario bloqueado.");
				} else {
					$('.spinner-btn').removeClass('spinner-btn-on');
					$('#login-send>span').html('Ingresar');
					$('.login-resp').addClass('login-resp-on');
					console.log("Error de validación.");
				}
			});
		}

	});


	$('.formload').on('change', function(){
		$(this).submit();
	});

});

function msjError(id, mensaje){
	$('.msj').html('');
	$('#'+id).html(mensaje);
	console.log(id + ": " + mensaje);
}

function validar_email(valor){
    var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
    if(filter.test(valor)){
        return true;
    } else {
    	return false;
    }
}