<section id="login" class="padT50">

	<div class="container login">

		<div class="login-box pad40 form-wrapper">

			<div class="marB15">
				<h3>Registrarme</h3>
			</div>

			<div class="form-group">
				<input type="text" id="registro-nombre" class="form-input" placeholder="Nombre" autocomplete="off" required>
				<span class="f12 text-danger msj" id="nombre-msj"></span>
			</div>

			<div class="form-group">
				<input type="text" id="registro-apellido" class="form-input" placeholder="Apellido" autocomplete="off" required>
				<span class="f12 text-danger msj" id="apellido-msj"></span>
			</div>

			<div class="form-group">
				<input type="email" id="registro-email" class="form-input" autocomplete="off" placeholder="E-mail" autocomplete="off" required>
				<span class="f12 text-danger msj" id="email-msj"></span>
			</div>

			<div class="form-group">
				<input type="password" id="registro-pass" class="form-input" placeholder="Contraseña" autocomplete="off" required>
				<span class="f12 text-danger msj" id="pass-msj"></span>
			</div>

			<div class="form-group marT25">
				<a href="javascript:;" class="btn btn-primary marR5" id="registro-send">
					<span>Registrarme</span>
					<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
						<span class="sr-only">Loading...</span>
					</div>
				</a>
				<a href="login/" class="btn btn-link">Iniciar sesión</a>
			</div>

		</div>
		
	</div>

</section>