
$(function(){

	$('.show-menu').on('click', function(){
		if($('.menu-movil').hasClass('menu-movil-on')){
			$('.menu-movil').removeClass('menu-movil-on');
			$('.show-menu svg').removeClass('fa-times').addClass('fa-bars');
		} else {
			$('.menu-movil').addClass('menu-movil-on');
			$('.show-menu svg').removeClass('fa-bars').addClass('fa-times');
		}
	});

	$('#filtro-curso').on('change', function(){
		cursoID = $(this).val();
		view = $('#view').html();
		$.post('process/user-filters.php',{'cursoID':cursoID}, function(resp){
			if(resp=="ok"){
				window.location = 'gestion/' + view + '/';
			}
		});
	});

});


function user_ok(id){
	$.post('process/user-approved.php', {
		'Id':id
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al modificar el estado (approved).");
		}
	});
}

function user_pagos(id){
	$.post('process/user-pagos.php', {
		'Id':id
	}, function(resp){
		$('#pagos').html(resp);
		open_modal('user-pagos');
	});
}

function user_ban(id){
	$.post('process/user-active.php', {
		'Id':id
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else if(resp=="auto"){
			alert("No puedes auto-bloquearte.");
		} else {
			console.log("Error al modificar el estado (active).");
		}
	});
}

function user_delete(id){
	if(confirm("¿Estás seguro de que quieres eliminar este usuario?")){
		$.post('process/user-delete.php', {
			'Id':id
		}, function(resp){
			if(resp=="ok"){
				window.location.reload();
			} else if(resp=="auto"){
				alert("No puedes auto-eliminarte.");
			} else {
				console.log("Error al modificar el estado (active).");
			}
		});
	}
}

function user_confirm(id, tipo, revocar){
	$.post('process/user-confirm.php', {
		'Id':id,
		'tipo':tipo,
		'revocar':revocar
	}, function(resp){
		console.log(resp);
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al modificar el estado (confirm).");
		}
	});
}


function user_save_personal(){
	usuarioID = $('#userID').val();
	$.post('process/user-save-personal.php', {
		'nombre': $('#user-nombre').val(),
		'apellido': $('#user-apellido').val(),
		'nacimiento': $('#user-nacimiento').val(),
		'nacionalidad': $('#user-nacionalidad').val(),
		'dni': $('#user-dni').val(),
		'estado_civil': $('#user-estadocivil').val(),
		'celular': $('#user-celular').val(),
		'fijo': $('#user-fijo').val(),
		'direccion': $('#user-direccion').val(),
		'cp': $('#user-cp').val(),
		'ciudad': $('#user-ciudad').val(),
		'provincia': $('#user-provincia').val(),
		'pais': $('#user-pais').val(),
		'religion': $('#user-religion').val(),
		'proaborto': $('#user-proaborto').val(),
		'trabajo': $('#user-trabajo').val(),
		'tratamiento': $('#user-tratamiento').val(),
		'medicacion': $('#user-medicacion').val(),
		'referencia1_nombre': $('#user-referencia1-nombre').val(),
		'referencia1_email': $('#user-referencia1-email').val(),
		'referencia1_celular': $('#user-referencia1-celular').val(),
		'referencia2_nombre': $('#user-referencia2-nombre').val(),
		'referencia2_email': $('#user-referencia2-email').val(),
		'referencia2_celular': $('#user-referencia2-celular').val(),
		'razones': $('#user-razones').val(),
		'concepcion': $('#user-concepcion').val(),
		'userID':usuarioID
	}, function(resp){
		if(resp=="ok"){
			window.location = "config/pagos/";
		} else if(resp=="okuser"){
			window.location.reload();
		} else {
			console.log("Error al modificar el estado (confirm).");
		}
	});
}


function user_save_prevent(){
	$.post('process/user-save-prevent.php', {
		'lugar': $('#user-prevent-lugar').val(),
		'fecha': $('#user-prevent-fecha').val(),
		'certificado': $('#user-prevent-certificado').val(),
		'lugar_aplicacion': $('#user-prevent-lugar-aplicacion').val(),
		'edad_nivel': $('#user-prevent-edad-nivel').val(),
		'reporte': $('#user-prevent-reporte').val(),
		'revelacion': $('#user-prevent-revelacion').val(),
		'explicacion': $('#user-prevent-explicacion').val(),
		'userID':$('#userID').val()
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al modificar el estado (confirm).");
		}
	});
}


function user_save_account(){
	$.post('process/user-save-account.php', {
		'email': $('#user-email').val(),
		'pass': $('#user-pass').val(),
		'userID':$('#userID').val()
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al modificar el estado (confirm).");
		}
	});
}

function user_pay(cursoID, medio){
	$.post('process/user-pay.php', {
		'cursoID':cursoID,
		'medio':medio
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al modificar el estado (money).");
		}
	});
}

function user_pay_load(pagoID){
	$('#pagoID').val(pagoID);
	$('.loadcomprobantes').trigger('click');
}

function user_pay_cancel(pagoID){
	if(confirm("¿Estás seguro de que deseas cancelar este pago?")){
		$.post('process/user-pay-cancel.php', {'pagoID':pagoID}, function(resp){
			if(resp=="ok"){
				window.location.reload();
			} else {
				console.log("Error eliminando un pago.");
			}
		});
	}
}

function user_pass_save(Id, pass){
	$.post('process/user-save-pass.php', {
		'Id':$('#user-pass-id').val(),
		'pass':$('#user-pass-new').val()
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al modificar la contraseña.");
		}
	});
}


function msj_leido(id){
	$.post('process/msj-leido.php', {
		'Id':id
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al modificar el estado del mensaje.");
		}
	});
}

function msj_delete(id){
	$.post('process/msj-delete.php', {
		'Id':id
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al eliminar el mensaje.");
		}
	});
}

function msj_leer(id){
	$.post('process/msj-leer.php', {
		'Id':id
	}, function(resp){
		$('.mensaje').html(resp);
	});
	open_modal('msj-leer');
}


/* Cursos */

function curso_delete(id){
	if(confirm("¿Estás seguro de que quieres eliminar este curso?")){
		$.post('process/curso-delete.php', {
			'Id':id
		}, function(resp){
			if(resp=="ok"){
				window.location.reload();
			} else {
				console.log("Error al modificar el estado (active).");
			}
		});
	}
}

function curso_ban(id){
	$.post('process/curso-active.php', {
		'Id':id
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al modificar el estado (active).");
		}
	});
}

function curso_close(id){
	$.post('process/curso-close.php', {
		'Id':id
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al modificar el estado (active).");
		}
	});
}

$(function(){
	$('#cursoID').on('change', function(){
		id = $(this).val();
		$.post('process/curso-costo.php', {'Id':id}, function(resp){
			$('.ccosto').html(resp);
			$('.costo').show();
		});
	});
	$('#mcursoID').on('change', function(){
		id = $(this).val();
		$.post('process/curso-costo.php', {'Id':id}, function(resp){
			$('.mccosto').html(resp);
			$('.mcosto').show();
		});
	});
});


/* Clases */

function clase_ban(id){
	$.post('process/clase-active.php', {
		'Id':id
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al modificar el estado (active).");
		}
	});
}

function clase_delete(id){
	if(confirm("¿Estás seguro de que quieres eliminar esta clase?")){
		$.post('process/clase-delete.php', {
			'Id':id
		}, function(resp){
			if(resp=="ok"){
				window.location.reload();
			} else {
				console.log("Error al modificar el estado (active).");
			}
		});
	}
}


/* BORRAR ARCHIVOS */

function deletefile(nombre, tipo){
	$.post('process/file-delete.php',{
		'nombre':nombre,
		'tipo':tipo
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error en la eliminación");
		}
	});
}

function curso_suscribe(userID, cursoID){
	$.post('process/curso-suscribe.php',{'userID':userID,'cursoID':cursoID}, function(resp){
		open_modal('curso-suscribe');
	});
}