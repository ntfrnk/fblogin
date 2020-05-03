<div class="pop-bg"></div>
	
<div class="pop-box none" id="user-new">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">
		<h2>Nuevo usuario</h2>
		<div class="form-wrapper">
			<div class="form-group">
				<input type="text" id="user-new-nombre" class="form-input" placeholder="Nombre" autocomplete="off" required>
				<span class="f12 text-danger msj" id="nombre-msj"></span>
			</div>
			<div class="form-group">
				<input type="text" id="user-new-apellido" class="form-input" placeholder="Apellido" autocomplete="off" required>
				<span class="f12 text-danger msj" id="apellido-msj"></span>
			</div>
			<div class="form-group">
				<input type="email" id="user-new-email" class="form-input" autocomplete="off" placeholder="E-mail" autocomplete="off" required>
				<span class="f12 text-danger msj" id="email-msj"></span>
			</div>
			<div class="form-group">
				<input type="password" id="user-new-pass" class="form-input" placeholder="Contraseña" autocomplete="off" required>
				<span class="f12 text-danger msj" id="pass-msj"></span>
			</div>
			<div class="form-group marT25">
				<a href="javascript:;" class="btn btn-primary marR5" onclick="user_save_new()">
					<span>Guardar usuario</span>
					<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
						<span class="sr-only">Loading...</span>
					</div>
				</a>
				<a href="javascript:;" onclick="close_modal();" class="btn btn-link">Cancelar</a>
			</div>
		</div>
	</div>
</div>


	
<div class="pop-box none" id="user-edit">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">
		<h2>Editar información</h2>
		<div class="form-wrapper">
			<div class="form-group">
				<input type="text" id="user-edit-nombre" class="form-input" placeholder="Nombre" autocomplete="off" required>
				<span class="f12 text-danger msj" id="nombre-edit-msj"></span>
			</div>
			<div class="form-group">
				<input type="text" id="user-edit-apellido" class="form-input" placeholder="Apellido" autocomplete="off" required>
				<span class="f12 text-danger msj" id="apellido-edit-msj"></span>
			</div>
			<div class="form-group">
				<input type="email" id="user-edit-email" class="form-input" placeholder="E-mail" autocomplete="off" required>
				<span class="f12 text-danger msj" id="email-edit-msj"></span>
			</div>
			<input type="hidden" id="user-edit-id">
			<div class="form-group marT25">
				<a href="javascript:;" class="btn btn-primary marR5" onclick="user_save();">
					<span>Guardar cambios</span>
					<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
						<span class="sr-only">Loading...</span>
					</div>
				</a>
				<a href="javascript:;" onclick="close_modal();" class="btn btn-link">Cancelar</a>
			</div>
		</div>
	</div>
</div>



<div class="pop-box2 none" id="user-info">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">
		<h2>Información de usuario</h2>
		<div class="form-wrapper">
			<div class="" id="user-info-detail"></div>
		</div>
	</div>
</div>



<div class="pop-box none" id="user-pass">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">
		<h2>Cambiar contraseña de usuario</h2>
		<div class="form-wrapper">
			<div class="form-group marT20">
				<input type="password" id="user-pass-new" class="form-input" placeholder="Escribe la nueva contraseña">
				<input type="hidden" id="user-pass-id">
			</div>
			<div class="form-group marT25">
				<a href="javascript:;" class="btn btn-primary marR5" onclick="user_pass_save();">
					<span>Guardar cambios</span>
					<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
						<span class="sr-only">Loading...</span>
					</div>
				</a>
				<a href="javascript:;" onclick="close_modal();" class="btn btn-link">Cancelar</a>
			</div>
		</div>
	</div>
</div>



<div class="pop-box none" id="user-cursos">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">
		<h2>Suscripciones de usuario</h2>
		<div class="cursos"></div>
		<div class="form-wrapper">
			<div class="" id="user-cursos-detail"></div>
		</div>
	</div>
</div>



<div class="pop-box none" id="user-tareas">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">
		<h2>Calificar tareas</h2>
		<div class="tasks"></div>
		<div class="form-wrapper">
			<div class="" id="user-tarea-detail"></div>
		</div>
	</div>
</div>



<div class="pop-box none" id="user-docs">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">
		<h2>Documentación de usuario</h2>
		<div class="form-wrapper padT0">
			<div class="" id="user-docs-detail"></div>
		</div>
	</div>
</div>



<div class="pop-box none" id="user-notify">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">
		<h2>Enviar mensaje a usuario</h2>
		<div class="form-wrapper padT20" id="user-notify-form"></div>
	</div>
</div>



<div class="pop-box none" id="curso-new">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">		
		<h2>Nuevo Curso</h2>
		<div class="form-wrapper">
			<div class="form-group">
				<input type="text" id="curso-new-nombre" class="form-input" placeholder="Nombre" autocomplete="off" required>
				<span class="f12 text-danger msj" id="nombre-msj"></span>
			</div>
			<div class="form-group">
				<textarea id="curso-new-descripcion" class="form-input" placeholder="Descripción" autocomplete="off" required></textarea>
				<span class="f12 text-danger msj" id="apellido-msj"></span>
			</div>
			<div class="row">
				<div class="form-group col-6">
					<input type="date" id="curso-new-fecha" class="form-input" autocomplete="off" placeholder="Fecha" autocomplete="off" required>
					<span class="f12 text-danger msj" id="email-msj"></span>
				</div>
				<div class="form-group col-6">
					<input type="number" id="curso-new-costo" class="form-input" autocomplete="off" placeholder="Costo (USD)" autocomplete="off" required>
					<span class="f12 text-danger msj" id="email-msj"></span>
				</div>
			</div>
			<div class="form-group marT25">
				<a href="javascript:;" class="btn btn-primary marR5" onclick="curso_save_new()">
					<span>Guardar curso</span>
					<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
						<span class="sr-only">Loading...</span>
					</div>
				</a>
				<a href="javascript:;" onclick="close_modal();" class="btn btn-link">Cancelar</a>
			</div>
		</div>
	</div>
</div>



<div class="pop-box none" id="curso-edit">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">
		<h2>Editar curso</h2>
		<div class="form-wrapper" id="curso-edit-content"></div>
	</div>
</div>



<div class="pop-box none" id="curso-clone">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">
		<h2>Clonar curso</h2>
		<div class="form-wrapper" id="curso-clone-content">
			<p>Estás a punto de clonar este curso, con todas sus clases, recursos y tareas. Este proceso sugiere una gran carga para el servidor. ¿Estás seguro de que deseas hacerlo?</p>
			<div class="form-group marT25">
				<span style="display: none;" id="idCursoClone"></span>
				<a href="javascript:;" class="btn btn-primary marR5" onclick="curso_clone_ok($('#idCursoClone').html());">
					<span id="curso-clone-btn">Confirmar acción</span>
					<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status" id="curso-clone-spinner">
						<span class="sr-only">Loading...</span>
					</div>
				</a>
				<a href="javascript:;" onclick="close_modal();" class="btn btn-link">Cancelar</a>
			</div>
		</div>
	</div>
</div>



<div class="pop-box none" id="clase-new">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<form name="nueva-clase" id="class-new" action="process/clase-save.php" method="post" enctype="multipart/form-data">
		<div class="pop-container">		
			<h2>Nueva Clase</h2>
			<div class="form-wrapper">
				<div class="form-group">
					<input type="text" id="clase-new-titulo" name="titulo" class="form-input" placeholder="Título" autocomplete="off" required>
					<span class="f12 text-danger msj" id="titulo-msj"></span>
				</div>
				<div class="form-group">
					<input type="text" id="clase-new-video" name="video" class="form-input" placeholder="Link video" autocomplete="off">
					<span class="f12 text-danger msj" id="video-msj"></span>
				</div>
				<div class="form-group">
					<input type="file" id="clase-new-placa" name="placa" class="form-input">
				</div>
				<div class="row">
					<div class="form-group col lh50">
						<label>Inicio:</label>
					</div>
					<div class="form-group col">
						<input type="date" id="clase-new-inicio" name="inicio" class="form-input" autocomplete="off" placeholder="Fecha de inicio" autocomplete="off" required>
						<span class="f12 text-danger msj" id="inicio-msj"></span>
					</div>
					<div class="form-group col lh50">
						<label>Final:</label>
					</div>
					<div class="form-group col">
						<input type="date" id="clase-new-final" name="final" class="form-input" autocomplete="off" placeholder="Fecha de finalización" autocomplete="off" required>
						<span class="f12 text-danger msj" id="final-msj"></span>
					</div>
				</div>
				<input type="hidden" id="clase-new-cursoID" name="cursoID" value="<?=$pow_get['Id']?>">
				<div class="form-group marT25">
					<button type="submit" class="btn btn-primary marR5">
						<span>Guardar clase</span>
						<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
							<span class="sr-only">Loading...</span>
						</div>
					</button>
					<a href="javascript:;" onclick="close_modal();" class="btn btn-link">Cancelar</a>
				</div>
			</div>
		</div>
	</form>
</div>



<div class="pop-box none" id="clase-edit">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container" id="form-class-edit"></div>
</div>


<div class="pop-box none" id="clase-material">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">		
		<h2>Adjuntar material</h2>
		<div class="form-wrapper">
			<div class="form-group marT25">
				<form id="uploader" method="POST" action="process/clase-material-upload.php" enctype="multipart/form-data">
					<div class="hide">
						<input type="file" name="clase-edit-archivo[]" id="clase-attach-archivo" onchange="clase_material_upload();" accept=".pdf,.zip,.rar,.mp4" multiple>
						<input type="hidden" name="clase-edit-claseID" id="clase-attach-claseID">
						<input type="hidden" name="clase-edit-cursoID" id="clase-attach-cursoID" value="<?=$pow_get['Id']?>">
					</div>
					<div class="">
						<button type="button" onclick="$('#clase-attach-archivo').trigger('click');" class="btn btn-outline-primary col">Toca aquí para subir uno o más archivos</button>
					</div>
				</form>
			</div>
			<div class="form-group adjuntos"></div>
			<div class="form-group marT25">
				<a href="javascript:;" class="btn btn-primary marR5" onclick="close_modal();">
					<span>Finalizar</span>
				</a>
			</div>
		</div>
	</div>
</div>


<div class="pop-box none" id="clase-tareas">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">		
		<h2>Gestionar tareas</h2>
		<div class="form-wrapper">
			<div class="form-group marT25">
				<div class="hide">
					<input type="hidden" id="clase-tasks-claseID">
					<input type="hidden" id="clase-tasks-cursoID" value="<?=$pow_get['Id']?>">
				</div>
				<div class="row">
					<div class="col-8">
						<input type="text" class="form-input" id="clase-tasks-consigna" placeholder="Escribe la consigna..." />
					</div>
					<div class="col-4">
						<button type="button" class="btn btn-outline-primary" onclick="clase_tareas_add();">Agregar consigna</button>
					</div>
				</div>
			</div>
			<div class="form-group tareas"></div>
			<div class="form-group marT25">
				<a href="javascript:;" class="btn btn-primary marR5" onclick="close_modal();">
					<span>Finalizar</span>
				</a>
			</div>
		</div>
	</div>
</div>



<div class="pop-box none" id="msj-leer">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">		
		<h2>Mensaje</h2>
		<div class="form-wrapper">
			<div class="form-group mensaje"></div>
			<div class="form-group marT25 d-none d-md-block">
				<a href="javascript:;" class="btn btn-primary marR5" onclick="close_modal();">
					<span>Entendido!</span>
				</a>
			</div>
			<div class="form-group marT25 d-block d-md-none align-center">
				<a href="javascript:;" class="btn btn-primary marR5" onclick="close_modal();">
					<span>Entendido!</span>
				</a>
			</div>
		</div>
	</div>
</div>



<div class="pop-box none" id="curso-suscribe">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">		
		<h2>¡Inscripción iniciada!</h2>
		<div class="form-wrapper">
			<div class="form-group">
				<p>Nos alegra informarte que el proceso de inscripción a este curso ya está en marcha. Lo próximo que necesitamos es que te asegures de completar toda la información requerida en el <a href="config/">siguiente formulario</a> (pestañas "Info personal" y "Documentación"), para poder evaluar tu participación en esta capacitación.</p>
			</div>
			<div class="form-group marT25">
				<a href="config/" class="btn btn-secondary">
					<span>Ir al formulario</span>
				</a>
			</div>
		</div>
	</div>
</div>



<div class="pop-box none" id="curso-suscribe-logout">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">
		<div class="form-wrapper">
			<div class="form-group align-center marT20">
				<p>Para inscribirte en este curso primero necesitas iniciar sesión.</p>
			</div>
			<div class="form-group marT25 align-center">
				<a href="login/" class="btn btn-secondary">
					<span>Iniciar sesión</span>
				</a>
			</div>
		</div>
	</div>
</div>



<div class="pop-box3 none" id="alert">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container3">
		<div class="form-wrapper">
			<div class="form-group align-center marT20">
				<p id="alert-text"></p>
			</div>
			<div class="form-group marT15 align-center">
				<a href="javascript:;" class="btn btn-sm btn-secondary" onclick="close_modal();">
					<span>Aceptar</span>
				</a>
			</div>
		</div>
	</div>
</div>



<div class="pop-box2 none" id="alert2">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container3">
		<h2 class="padLR30 marT20">Guía para el video</h2>
		<div class="form-wrapper">
			<div class="form-group marT20 padLR30">
				<p id="alert-text2"></p>
			</div>
			<div class="form-group marT25 marB25 align-center">
				<a href="javascript:;" class="btn btn-sm btn-secondary" onclick="close_modal();">
					<span>Aceptar</span>
				</a>
			</div>
		</div>
	</div>
</div>



<div class="pop-box3 none" id="new-pago">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container3">
		<h2 class="padLR30 marT20">Nuevo pago</h2>
		<div class="form-wrapper">
			<div class="form-group marT10 padLR30">
				<div id="pagar" class="marT10 legajo docs">
					<div class="padTB5">
						<p class="marB0"><strong>Elija el curso a pagar:</strong></p>
						<select id="mcursoID" class="form-control">
							<option value="0" selected disabled>Elija una opción</option>
							<? foreach(listReg("cursos", "where cierre!=1", "", "nombre,asc") as $curso) { ?>
								<option value="<?=$curso['Id']?>"><?=$curso['nombre']?></option>
							<? } ?>
						</select>
					</div>
					<div class="padTB10">
						<p class="marB0"><strong>Elija el medio de pago:</strong></p>
						<select id="mmedio-pago" class="form-control">
							<option value="Mercado Pago">Mercado Pago</option>
							<option value="Paypal">Paypal</option>
							<option value="Banco">Operación bancaria</option>
						</select>
						<p class="f14 marTB5 none mcosto"><em>Inversión <span class="mccosto"></span> dólares (o equivalente en pesos).</em></p>
					</div>
					<div class="padTB10">
						<a href="javascript:;" class="btn btn-sm btn-primary marT10 marR5" onclick="user_pay($('#mcursoID').val(), $('#mmedio-pago').val())">
							<span>Enviar datos de pago a mi correo</span>
							<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
								<span class="sr-only">Loading...</span>
							</div>
						</a>
						<a href="javascript:;" class="btn btn-sm btn-secondary marT10" onclick="close_modal();">
							<span>Cancelar</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="pop-box2 none" id="user-pagos">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container">
		<h2>Pagos de usuario</h2>
		<div class="form-wrapper">
			<div class="form-group marT20" id="pagos"></div>
			<div class="form-group marT35 align-center">
				<a href="javascript:;" class="btn btn-secondary" onclick="close_modal();">
					<span>Aceptar</span>
				</a>
			</div>
		</div>
	</div>
</div>


<? if(!empty($_SESSION['user_learn']) and faltanDatos($_SESSION['user_learn']) and $pow_get['seccion']!="config"){ ?>
	<div class="pop-box none" id="datos-faltantes">
		<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
		<div class="pop-container padB20">
			<h2>Datos faltantes</h2>
			<div class="form-wrapper">
				<div class="form-group marT20">
					Faltan algunos de tus datos en nuestro sistema (<a href="javascript:;" onclick="$('#camposfaltan').slideDown();">¿Cuales?</a>). Por favor complétalos en <a href="config/" class="alert-link">este formulario</a>.
				</div>
				<div class="form-group marT20 none" id="camposfaltan">
					Los campos que están faltando son los siguientes.
					<ul>
						<? foreach(faltanDatos($_SESSION['user_learn'], 1) as $falta){ ?>
							<li><?=$falta?></li>
						<? } ?>
					</ul>
				</div>
				<div class="form-group marT35 align-center">
					<a href="config/" class="btn btn-secondary" onclick="close_modal();">
						<span>Ir al formulario</span>
					</a>
				</div>
			</div>
		</div>
	</div>
<? } ?>