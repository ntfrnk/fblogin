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
				<textarea id="curso-new-descripcion" rows="4" class="form-input" placeholder="Descripción" autocomplete="off" required></textarea>
				<span class="f12 text-danger msj" id="apellido-msj"></span>
			</div>
			<div class="form-group">
				<input type="number" id="curso-new-costo" class="form-input" autocomplete="off" placeholder="Costo (USD)" autocomplete="off" required>
				<span class="f12 text-danger msj" id="email-msj"></span>
			</div>
			<div class="form-group">
				<textarea id="curso-new-codigo-paypal" rows="1" class="form-input" autocomplete="off" placeholder="Código paypal"></textarea>
				<span class="f12 text-danger msj" id="codigo-paypal-msj"></span>
			</div>
			<div class="form-group">
				<textarea id="curso-new-codigo-mp" rows="1" class="form-input" autocomplete="off" placeholder="Código Mercado Pago"></textarea>
				<span class="f12 text-danger msj" id="codigo-mp-msj"></span>
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
				<!-- <div class="row">
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
				</div> -->
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



<div class="pop-box2 none" id="terminos">
	<a href="javascript:;" onclick="close_modal();" class="pop-dismiss"><i class="fa fa-times"></i></a>
	<div class="pop-container padB30">
		<h2>Acuerdo de Términos y condiciones</h2>
		<div class="form-wrapper">
			<div class="form-group marT20" style="overflow: auto; height: 320px;">

				<p>INFORMACIÓN GENERAL</p>
				<p>Este sitio web es operado por Fundación EPASI. En todo el sitio, los términos “nosotros”, “nos” y “nuestro” se refieren a Fundación EPASI. La Fundación EPASI ofrece este sitio web, incluyendo toda la información, herramientas y servicios disponibles para ti en este sitio, el usuario, está condicionado a la aceptación de todos los términos, condiciones, políticas y notificaciones aquí establecidos.</p>
				<p>Al visitar nuestro sitio y/o comprar algo de nosotros, participas en nuestro “Servicio” y aceptas los siguientes términos y condiciones (“Términos de Servicio”, “Términos”), incluidos todos los términos y condiciones adicionales y las políticas a las que se hace referencia en el presente documento y/o disponible a través de hipervínculos. Estas Condiciones de Servicio se aplican a todos los usuarios del sitio, incluyendo sin limitación a usuarios que sean navegadores, proveedores, clientes, comerciantes, y/o colaboradores de contenido.</p>
				<p>Por favor, lee estos Términos de Servicio cuidadosamente antes de acceder o utilizar nuestro sitio web. Al acceder o utilizar cualquier parte del sitio, estás aceptando los Términos de Servicio. Si no estás de acuerdo con todos los términos y condiciones de este acuerdo, entonces no deberías acceder a la página web o usar cualquiera de los servicios. Si los Términos de Servicio son considerados una oferta, la aceptación está expresamente limitada a estos Términos de Servicio.</p>
				<p>Cualquier función nueva o herramienta que se añadan a la plataforma actual, también estarán sujetas a los Términos de Servicio. Puedes revisar la versión actualizada de los Términos de Servicio, en cualquier momento en esta página. Nos reservamos el derecho de actualizar, cambiar o reemplazar cualquier parte de los Términos de Servicio mediante la publicación de actualizaciones y/o cambios en nuestro sitio web.</p>
				<p>Es tu responsabilidad chequear esta página periódicamente para verificar cambios. Tu uso continuo o el acceso al sitio web después de la publicación de cualquier cambio constituye la aceptación de dichos cambios.</p>
				<p>SECCIÓN 1 - TÉRMINOS DE LA TIENDA EN LÍNEA</p>
				<p>Al utilizar este sitio, declaras que tienes al menos la mayoría de edad en tu estado o provincia de residencia.</p>
				<p>No puedes usar nuestros productos/cursos con ningún propósito ilegal o no autorizado; tampoco puedes, en el uso del Servicio, violar cualquier ley en tu jurisdicción (incluyendo pero no limitado a las leyes de derecho de autor).</p>
				<p>No debes transmitir gusanos, virus o cualquier código de naturaleza destructiva. El incumplimiento o violación de cualquiera de estos Términos darán lugar al cese inmediato de nuestros sericios.</p>
				<p>SECCIÓN 2 - CONDICIONES GENERALES</p>
				<p>Nos reservamos el derecho de rechazar la prestación de servicio a cualquier persona, por cualquier motivo y en cualquier momento.</p>
				<p>Entiendes que tu contenido (sin incluir la información de tu tarjeta de crédito), puede ser transferida sin encriptar e involucrar (a) transmisiones a través de varias redes; y (b) cambios para ajustarse o adaptarse a los requisitos técnicos de conexión de redes o dispositivos. La información de tarjetas de crédito está siempre encriptada durante la transferencia a través de las redes.</p>
				<p>Estás de acuerdo con no reproducir, duplicar, copiar, vender, revender o explotar cualquier parte del Servicio, uso del Servicio, acceso al Servicio o cualquier contacto en el sitio web a través del cual se presta el servicio, sin el expreso permiso por escrito de nuestra parte.</p>
				<p>Los títulos utilizados en este acuerdo se incluyen solo por conveniencia y no limita o afecta a estos Términos.</p>
				<p>SECCIÓN 3 - EXACTITUD, EXHAUSTIVIDAD Y ACTUALIDAD DE LA INFORMACIÓN</p>
				<p>Nos reservamos el derecho de modificar los contenidos de este sitio en cualquier momento, pero no tenemos obligación de actualizar cualquier información en nuestro sitio. Aceptas que es tu responsabilidad de monitorear los cambios en nuestro sitio.</p>
				<p>SECCÓN 4 - MODIFICACIONES AL SERVICIO Y PRECIOS</p>
				<p>Los precios de nuestros productos están sujetos a cambio sin aviso. Nos reservamos el derecho de modificar o discontinuar el Servicio (o cualquier parte del contenido) en cualquier momento sin aviso previo. No seremos responsables ante ti o alguna tercera parte por cualquier modificación, cambio de precio, suspensión o discontinuidad del Servicio.</p>
				<p>SECCIÓN 5 - PRODUCTOS O SERVICIOS (si aplicable)</p>
				<p>Ciertos productos o servicios pueden estar disponibles exclusivamente en línea a través del sitio web. Estos productos o servicios pueden tener cantidades limitadas y estar sujetas a devolución o cambio de acuerdo a nuestra política de devolución solamente.</p>
				<p>Nos reservamos el derecho, pero no estamos obligados, para limitar las ventas de nuestros productos o servicios a cualquier persona, región geográfica o jurisdicción. Podemos ejercer este derecho basados en cada caso. Nos reservamos el derecho de limitar las cantidades de los productos o servicios que ofrecemos. Todas las descripciones de productos o precios de los productos están sujetos a cambios en cualquier momento sin previo aviso, a nuestra sola discreción. Nos reservamos el derecho de discontinuar cualquier producto o servicio en cualquier momento. Cualquier oferta de producto o servicio hecho en este sitio es nulo donde esté prohibido.</p>
				<p>No garantizamos que la calidad de los productos, servicios, información u otro material comprado u obtenido por ti cumpla con tus expectativas, o que cualquier error en el Servicio será corregido.</p>
				<p>SECCIÓN 6 - EXACTITUD DE FACTURACIÓN E INFORMACIÓN DE CUENTA</p>
				<p>Nos reservamos el derecho de rechazar cualquier pedido de servicio que realice con nosotros. La cuenta y los servicios brindados están dirigió solo a la persona que completo el formulario. La cuenta no puede ser transferida a otra persona. La cuenta no puede ser utilizada por otra persona que sea la que brindo los datos para la apertura.</p>
				<p>En el caso de que no se cumpla no anterior el servicio puede ser cancelado de manera total o parcial sin previo aviso.</p>
				<p>Te comprometes a proporcionar información actual, completa y precisa referido a los datos del titular de cuenta. Te comprometes a actualizar rápidamente los datos y otra información, incluyendo tu dirección de correo electrónico y demás datos requeridos en el formulario de inscripción.</p>
				<p>SECCIÓN 7 - ENLACES DE TERCERAS PARTES</p>
				<p>Cierto contenido, productos y servicios disponibles vía nuestro Servicio puede incluír material de terceras partes. Enlaces de terceras partes en este sitio pueden direccionarte a sitios web de terceras partes que no están afiliadas con nosotros. No nos responsabilizamos de examinar o evaluar el contenido o exactitud y no garantizamos ni tendremos ninguna obligación o responsabilidad por cualquier material de terceros o sititos web, o de cualquier material, productos o servicios de terceros.</p>
				<p>No nos hacemos responsables de cualquier daño o daños relacionados con la adquisición o utilización de bienes, servicios, recursos, contenidos, o cualquier otra transacción realizadas en conexión con sitios web de terceros. Por favor revisa cuidadosamente las políticas y prácticas de terceros y asegúrate de entenderlas antes de participar en cualquier transacción. Quejas, reclamos, inquietudes o preguntas con respecto a productos de terceros deben ser dirigidas a la tercera parte.</p>
				<p>SECCIÓN 8 - COMENTARIOS DE USUARIO, CAPTACIÓN Y OTROS ENVÍOS</p>
				<p>Si, a pedido nuestro, envías ciertas presentaciones específicas (por ejemplo la participación en concursos) o sin un pedido de nuestra parte envías ideas creativas, sugerencias, proposiciones, planes, u otros materiales, ya sea en línea, por email, por correo postal, o de otra manera (colectivamente, 'comentarios'), aceptas que podamos, en cualquier momento, sin restricción, editar, copiar, publicar, distribuír, traducir o utilizar por cualquier medio comentarios que nos hayas enviado. No tenemos ni tendremos ninguna obligación (1) de mantener ningún comentario confidencialmente; (2) de pagar compensación por comentarios; o (3) de responder a comentarios.</p>
				<p>Nosotros podemos, pero no tenemos obligación de, monitorear, editar o remover contenido que consideremos sea ilegítimo, ofensivo, amenazante, calumnioso, difamatorio, pornográfico, obsceno u objetable o viole la propiedad intelectual de cualquiera de las partes o los Términos de Servicio.</p>
				<p>Aceptas que tus comentarios no violarán los derechos de terceras partes, incluyendo derechos de autor, marca, privacidad, personalidad u otro derecho personal o de propiedad. Asimismo, aceptas que tus comentarios no contienen material difamatorio o ilegal, abusivo u obsceno, o contienen virus informáticos u otro malware que pudiera, de alguna manera, afectar el funcionamiento del Servicio o de cualquier sitio web relacionado. No puedes utilizar una dirección de correo electrónico falsa, usar otra identidad que no sea legítima, o engañar a terceras partes o a nosotros en cuanto a tus datos del formulario. Tu eres el único responsable por los datos del formulario brindados.</p>
				<p>SECCIÓN 9 - INFORMACIÓN PERSONAL</p>
				<p>Tu presentación de información personal a través del sitio se rige por nuestra Política de Privacidad. Para ver nuestra Política de Privacidad puedes hacer click aquí.</p>
				<p>SECCIÓN 10 - ERRORES, INEXACTITUDES Y OMISIONES</p>
				<p>De vez en cuando puede haber información en nuestro sitio o en el Servicio que contiene errores tipográficos, inexactitudes u omisiones que puedan estar relacionadas con el contenido aquí brindado. Nos reservamos el derecho de corregir los errores, inexactitudes u omisiones y de cambiar o actualizar la información o cancelar  servicios si alguna información en el Servicio o en cualquier sitio web relacionado es inexacta en cualquier momento sin previo aviso (incluso después de que haya comenzado cualquier curso).</p>
				<p>No asumimos ninguna obligación de actualizar, corregir o aclarar la información en el Servicio o en cualquier sitio web relacionado, incluyendo, sin limitación, la información de precios, excepto cuando sea requerido por la ley. Ninguna especificación actualizada o fecha de actualización aplicada en el Servicio o en cualquier sitio web relacionado, debe ser tomada para indicar que toda la información en el Servicio o en cualquier sitio web relacionado ha sido modificado o actualizado.</p>
				<p>SECCIÓN 11 - USOS PROHIBIDOS</p>
				<p>En adición a otras prohibiciones como se establece en los Términos de Servicio, se prohíbe el uso del sitio o su contenido: (a) para ningún propósito ilegal; (b) para pedirle a otros que realicen o participen en actos ilícitos; (c) para violar cualquier regulación, reglas, leyes internacionales, federales, provinciales o estatales, u ordenanzas locales; (d) para infringir o violar el derecho de propiedad intelectual nuestro o de terceras partes; (e) para presentar información falsa o engañosa; (f) para cargar o transmitir virus o cualquier otro tipo de código malicioso que sea o pueda ser utilizado en cualquier forma que pueda comprometer la funcionalidad o el funcionamiento del Servicio o de cualquier sitio web relacionado, otros sitios o Internet; (g) para recopilar o rastrear información personal de otros; (h) para generar spam, phish, pharm, pretext, spider, crawl, or scrape; (i) para cualquier propósito obsceno o inmoral; o (j) para interferir con o burlar los elementos de seguridad del Servicio o cualquier sitio web relacionado, otros sitios o Internet. Nos reservamos el derecho de suspender el uso del Servicio o de cualquier sitio web relacionado por violar cualquiera de los ítems de los usos prohibidos; (k) para replicar el sitio web o el contenido aquí proporcionado, imágenes, audio o cualquier material multimedial o escrito, (l) ser transferido o cedido cualquier material adquirido brindado por la Fundación EPASI.</p>
				<p>Se prohíbe vender o reproducir parcial o totalmente el contenido de los servicios/cursos ya sea material, digital o intelectual. Se prohíbe transferir o regalar el contenido de los servicios/cursos a otras personas o instituciones. A lo que se refiere a la “formación de preventores”; es ejercicio exclusivo de la fundación EPASI. Se asume el compromiso de aplicar el “Programa de Prevención Mientras Nos Divertimos Aprendemos a Vivir conforme a la metodología aprendida; queda prohibida su modificación sin previo aviso y aprobación de la Fundación EPASI. Se asume a usar y mantener el nombre de la Fundación EPASI y su Programa Educativo Mientras Nos Divertimos Aprendemos a Vivir, “creado por la Lic. Viviana Salinas en colaboración con la Fundación EPASI”. Se prohíbe la utilización del material brindado que no se para el dictado del programa. Se acepta la supervisión de la Fundación EPASI (como Órgano de Contralor), en lo pertinente a la aplicación de los talleres.</p>
				<p>SECCIÓN 12 - EXCLUSIÓN DE GARANTÍAS; LIMITACIÓN DE RESPONSABILIDAD</p>
				<p>No garantizamos ni aseguramos que el uso de nuestro servicio será ininterrumpido, puntual, seguro o libre de errores. No garantizamos que los resultados que se puedan obtener del uso del servicio serán exactos o confiables.</p>
				<p>Aceptas que de vez en cuando podemos quitar el servicio por períodos de tiempo indefinidos o cancelar el servicio en cualquier momento sin previo aviso. Aceptas expresamente que el uso de, o la posibilidad de utilizar, el servicio es bajo tu propio riesgo. El servicio y todos los productos y servicios proporcionados a través del servicio son (salvo lo expresamente manifestado por nosotros) proporcionados "tal cual" y "según esté disponible" para su uso, sin ningún tipo de representación, garantías o condiciones de ningún tipo, ya sea expresa o implícita, incluidas todas las garantías o condiciones implícitas de comercialización, calidad comercializable, la aptitud para un propósito particular, durabilidad, título y no infracción.</p>
				<p>En ningún caso la Fundación EPASI, nuestros directores, funcionarios, empleados, afiliados, agentes, contratistas, internos, proveedores, prestadores de servicios o licenciantes serán responsables por cualquier daño, pérdida, reclamo, o daños directos, indirectos, incidentales, punitivos, especiales o consecuentes de cualquier tipo, incluyendo, sin limitación, pérdida de beneficios, pérdida de ingresos, pérdida de ahorros, pérdida de datos, costos de reemplazo, o cualquier daño similar, ya sea basado en contrato, agravio (incluyendo negligencia), responsabilidad estricta o de otra manera, como consecuencia del uso de cualquiera de los servicios o productos adquiridos mediante el servicio, o por cualquier otro reclamo relacionado de alguna manera con el uso del servicio o cualquier producto, incluyendo pero no limitado, a cualquier error u omisión en cualquier contenido, o cualquier pérdida o daño de cualquier tipo incurridos como resultados de la utilización del servicio o cualquier contenido (o producto) publicado, transmitido, o que se pongan a disposición a través del servicio, incluso si se avisa de su posibilidad. Debido a que algunos estados o jurisdicciones no permiten la exclusión o la limitación de responsabilidad por daños consecuenciales o incidentales, en tales estados o jurisdicciones, nuestra responsabilidad se limitará en la medida máxima permitida por la ley.</p>
				<p>SECCIÓN 13 - INDEMNIZACIÓN</p>
				<p>Aceptas indemnizar, defender y mantener indemne la Fundación EPASI y nuestras matrices, subsidiarias, afiliados, socios, funcionarios, directores, agentes, contratistas, concesionarios, proveedores de servicios, subcontratistas, proveedores, internos y empleados, de cualquier reclamo o demanda, incluyendo honorarios razonables de abogados, hechos por cualquier tercero a causa o como resultado de tu incumplimiento de las Condiciones de Servicio o de los documentos que incorporan como referencia, o la violación de cualquier ley o de los derechos de u tercero.</p>
				<p>SECCIÓN 14 - DIVISIBILIDAD</p>
				<p>En el caso de que se determine que cualquier disposición de estas Condiciones de Servicio sea ilegal, nula o inejecutable, dicha disposición será, no obstante, efectiva a obtener la máxima medida permitida por la ley aplicable, y la parte no exigible se considerará separada de estos Términos de Servicio, dicha determinación no afectará la validez de aplicabilidad de las demás disposiciones restantes.</p>
				<p>SECCIÓN 16 - RESCISIÓN</p>
				<p>Las obligaciones y responsabilidades de las partes que hayan incurrido con anterioridad a la fecha de terminación sobrevivirán a la terminación de este acuerdo a todos los efectos. Estas Condiciones de servicio son efectivos aun que se haya concluido el curso/servicio. Es decir, se aplican de manera vitalicia en cuanto se refiere a la persona que haya participado de manera parcial o total en algún curso/servicio; ya que los contenidos aquí brindados están resguardados por la ley de derechos de autor nacional e internacional.</p>
				<p>Si a nuestro juicio, fallas, o se sospecha que haz fallado, en el cumplimiento de cualquier término o disposición de estas Condiciones de Servicio, también podemos terminar cualquier servicio/curso en cualquier momento sin previo aviso, y seguirás siendo responsable de todos los montos adeudados hasta incluida la fecha de terminación; y/o en consecuencia podemos negarte el acceso a nuestros servicios (o cualquier parte del mismo).</p>
				<p>SECCIÓN 16 - ACUERDO COMPLETO</p>
				<p>Nuestra falla para ejercer o hacer valer cualquier derecho o disposiciôn de estas Condiciones de Servicio no constituirá una renuncia a tal derecho o disposición. Estas Condiciones del servicio y las políticas o reglas de operación publicadas por nosotros en este sitio o con respecto al servicio constituyen el acuerdo completo y el entendimiento entre tú y nosotros y rigen el uso del Servicio y reemplaza cualquier acuerdo, comunicaciones y propuestas anteriores o contemporáneas, ya sea oral o  escrita, entre tú y nosotros (incluyendo, pero no limitado a, cualquier versión previa de los Términos de Servicio).</p>
				<p>Cualquier ambigüedad en la interpretación de estas Condiciones del servicio no se interpretarán en contra del grupo de redacción.</p>
				<p>SECCIÓN 17 - LEY</p>
				<p>Estas Condiciones del servicio y cualquier acuerdo aparte en el que te proporcionemos servicios se regirán e interpretarán en conformidad con las leyes vigentes en Tucumán - Argentina.</p>
				<p>SECCIÓN 18 - CAMBIOS EN LOS TÉRMINOS DE SERVICIO</p>
				<p>Puedes revisar la versión más actualizada de los Términos de Servicio en cualquier momento en esta página. Nos reservamos el derecho, a nuestra sola discreción, de actualizar, modificar o reemplazar cualquier parte de estas Condiciones del servicio mediante la publicación de las actualizaciones y los cambios en nuestro sitio web. Es tu responsabilidad revisar nuestro sitio web periódicamente para verificar los cambios. El uso continuo de o el acceso a nuestro sitio Web o el Servicio después de la publicación de cualquier cambio en estas Condiciones de servicio implica la aceptación de dichos cambios.</p>
				<p>SECCIÓN 20 - INFORMACIÓN DE CONTACTO</p>
				<p>Preguntas acerca de los Términos y condiciones del servicio deben ser enviadas a «info@epasieducacion.com».</p>
			
			</div>
			<div class="form-group marT15 align-center">
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