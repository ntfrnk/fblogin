
$(document).on('ready', function(){
	$('.pop-bg').on('click', function(){
		close_modal();	
	});
});


var spinner = '<div class="spinner-grow spinner-grow-sm spinner-btn" role="status"><span class="sr-only">Loading...</span></div>';


function close_modal(){
	$('.pop-bg').hide();
	$('.pop-box').hide();
	$('.pop-box2').hide();
	$('.pop-box3').hide();
}

function open_modal(id){
	$('.pop-bg').show();
	$('#'+id).show();
	$("body, html").animate({
		scrollTop: 0
	}, 200 );
}

function datosFaltantes(){
	open_modal('datos-faltantes');
}

function user_new(val){
	if(val==false){
		close_modal();
	} else {
		open_modal('user-new');
	}
}

function user_save_new(){
	nombre = $('#user-new-nombre').val();
	apellido = $('#user-new-apellido').val();
	email = $('#user-new-email').val();
	pass = $('#user-new-pass').val();
	$.post('process/user-save.php', {
		'nombre':nombre,
		'apellido':apellido,
		'email':email,
		'pass':pass
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al guardar los datos");
		}
	});
}

function user_edit(id, nombre, apellido, email){
	if(id==false){
		$('#user-edit').hide();
	} else {
		$('#user-edit-id').val(id);
		$('#user-edit-nombre').val(nombre);
		$('#user-edit-apellido').val(apellido);
		$('#user-edit-email').val(email);
		open_modal('user-edit');
	}
}

function user_save(){
	nombre = $('#user-edit-nombre').val();
	apellido = $('#user-edit-apellido').val();
	email = $('#user-edit-email').val();
	id = $('#user-edit-id').val();
	$.post('process/user-save.php', {
		'Id':id,
		'nombre':nombre,
		'apellido':apellido,
		'email':email
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al guardar los datos");
		}
	});
}

function user_info(id){
	if(id==false){
		$('#user-info').hide();
	} else {
		$.post('process/user-info.php', {'Id':id}, function(resp){
			$('#user-info-detail').html(resp);
			open_modal('user-info');
		});
	}
}

function user_docs(id){
	if(id==false){
		$('#user-docs').hide();
	} else {
		$.post('process/user-docs.php', {'Id':id}, function(resp){
			$('#user-docs-detail').html(resp);
			open_modal('user-docs');
		});
	}
}

function user_notify(id){
	//$('#user-notify-id').val(id);
	//$('#user-notify-dest').html(nombre + " " + apellido);
	$.post('process/user-notify.php', {'Id':id}, function(resp){
		$('#user-notify-form').html(resp);
		open_modal('user-notify');
	});
}

function user_pass(id){
	$('#user-pass-id').val(id);
	open_modal('user-pass');
}

function user_send(){
	id = $('#user-notify-id').val();
	mensaje = $('#user-notify-mensaje').val();
	$.post('process/user-send.php', {
		'Id':id,
		'mensaje':mensaje
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al guardar los datos");
		}
	});
}

function user_cursos(id){
	$.post('process/user-cursos.php', {'Id':id}, function(resp){
		$('.cursos').html(resp);
		open_modal('user-cursos');
	});
}

function user_tareas(id){
	$.post('process/user-tareas.php', {'Id':id}, function(resp){
		$('.tasks').html(resp);
		open_modal('user-tareas');
	});
}

function user_tarea(userID, claseID){
	$.post('process/user-tarea.php', {
		'userID':userID,
		'claseID':claseID
	}, function(resp){
		$('.tasks').html(resp);
	});
}

function user_tarea_approve(userID, claseID, preguntaID, estado){
	$.post('process/user-tarea-approve.php', {
		'userID':userID,
		'claseID':claseID,
		'preguntaID':preguntaID,
		'estado':estado
	}, function(resp){
		$('#actions-'+preguntaID).html('');
		if(estado==1){
			$('#calificacion-'+preguntaID).html('<i class="fa fa-times text-danger"></i>');
		} else if(estado==2) {
			$('#calificacion-'+preguntaID).html('<i class="fa fa-check text-success"></i>');
		}
	});
}

function user_tarea_feedback(userID, claseID, preguntaID, comentario){
	$.post('process/user-tarea-feedback.php', {
		'userID':userID,
		'claseID':claseID,
		'preguntaID':preguntaID,
		'comentario':comentario
	}, function(resp){
		if(resp=="ok"){
			$('#comment-'+preguntaID).html('<hr><p class="text-info">'+comentario+'</p>');
		} else {
			console.log(resp);
		}
	});
}


/* Cursos */

function curso_new(){
	if(val==false){
		close_modal();
	} else {
		open_modal('curso-new');
	}
}

function curso_save_new(){
	nombre = $('#curso-new-nombre').val();
	descripcion = $('#curso-new-descripcion').val();
	costo = $('#curso-new-costo').val();
	codigo_paypal = $('#curso-new-codigo-paypal').val();
	codigo_mp = $('#curso-new-codigo-mp').val();
	$.post('process/curso-save.php', {
		'nombre':nombre,
		'descripcion':descripcion,
		'costo':costo,
		'codigo_paypal':codigo_paypal,
		'codigo_mp':codigo_mp
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al guardar los datos");
		}
	});
}

function curso_edit(id){
	$.post('process/curso-edit.php', {'Id':id}, function(resp){
		$('#curso-edit-content').html(resp);
		open_modal('curso-edit');
	});
}

function curso_save(){
	nombre = $('#curso-edit-nombre').val();
	descripcion = $('#curso-edit-descripcion').val();
	costo = $('#curso-edit-costo').val();
	codigo_paypal = $('#curso-edit-codigo-paypal').val();
	codigo_mp = $('#curso-edit-codigo-mp').val();
	id = $('#curso-edit-id').val();
	$.post('process/curso-save.php', {
		'Id':id,
		'nombre':nombre,
		'descripcion':descripcion,
		'costo':costo,
		'codigo_paypal':codigo_paypal,
		'codigo_mp':codigo_mp
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al guardar los datos");
			console.log("Response: " + resp);
		}
	});
}


function curso_approve(cursoID, userID, accion){
	$.post('process/curso-approve.php', {
		'cursoID':cursoID,
		'userID':userID
	}, function(resp){
		$.post('process/user-cursos.php', {'Id':userID}, function(r){
			$('.cursos').html(r);
		});
	});
}


function curso_reject(cursoID, userID){
	$.post('process/curso-reject.php', {
		'cursoID':cursoID,
		'userID':userID
	}, function(resp){
		$.post('process/user-cursos.php', {'Id':userID}, function(r){
			$('.cursos').html(r);
		});
	});
}


function curso_clone(cursoID){
	$('#idCursoClone').html(cursoID);
	open_modal('curso-clone');
}

function curso_clone_ok(cursoID){
	$('#curso-clone-btn').html("Clonando ");
	$('#curso-clone-spinner').css({'display':'inline-block'});
	$.post('process/curso-clone.php', {'Id':cursoID}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error en el procedimiento.");
			console.log("Respuesta: "+resp);
		}
	})
}


/* Clases */

function clase_save_new(){
	titulo = $('#clase-new-titulo').val();
	video = $('#clase-new-video').val();
	cursoID = $('#clase-new-cursoID').val();
	$.post('process/clase-save.php', {
		'titulo':titulo,
		'video':video,
		'cursoID':cursoID
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al guardar los datos");
		}
	});
}

function clase_edit(id){
	$.post("process/class-edit-form.php",{'Id':id},function(resp){
		$('#form-class-edit').html(resp);
		open_modal('clase-edit');
	});
}

function clase_save(){
	titulo = $('#clase-edit-titulo').val();
	video = $('#clase-edit-video').val();
	id = $('#clase-edit-id').val();
	$.post('process/clase-save.php', {
		'Id':id,
		'titulo':titulo,
		'video':video
	}, function(resp){
		if(resp=="ok"){
			window.location.reload();
		} else {
			console.log("Error al guardar los datos");
		}
	});
}


function clase_material(id, cursoID){
	$('.adjuntos').html(spinner);
	$('#clase-attach-claseID').val(id);
	$('#clase-attach-cursoID').val(cursoID);
	$.post('process/clase-material.php',{
		'Id':id
	}, function(resp){
		$('.adjuntos').html(resp);
	});
	open_modal('clase-material');
}


function clase_material_upload(){
	$('#uploader').submit();
}


function clase_material_delete(id, claseID){
	$.post('process/clase-material-delete.php',{
		'Id':id,
		'claseID':claseID
	}, function(resp){
		$('.adjuntos').html(resp);
	});
}


function clase_tareas(id, cursoID){
	$('.adjuntos').html(spinner);
	$('#clase-tasks-claseID').val(id);
	$('#clase-tasks-cursoID').val(cursoID);
	$.post('process/clase-tareas.php',{
		'Id':id
	}, function(resp){
		$('.tareas').html(resp);
	});
	open_modal('clase-tareas');
}


function clase_tareas_add(){
	$('.tareas').html(spinner);
	id = $('#clase-tasks-claseID').val();
	cursoID = $('#clase-tasks-cursoID').val();
	consigna = $('#clase-tasks-consigna').val();
	$.post('process/clase-tareas-add.php',{
		'Id':id,
		'consigna':consigna,
		'cursoID':cursoID
	}, function(resp){
		$('#clase-tasks-consigna').val('');
		$('#clase-tasks-consigna').focus();
		$('.tareas').html(resp);
	});
}


function clase_tarea_delete(id, claseID){
	$.post('process/clase-tarea-delete.php',{
		'Id':id,
		'claseID':claseID
	}, function(resp){
		$('.tareas').html(resp);
	});
}