<section id="login" class="padT50">

	<div class="container login">

		<div class="login-box pad40 form-wrapper">

			<div class="marB15">
				<h3>Iniciar sesión</h3>
			</div>

			<? if($_SESSION['registro']=="ok"){ ?>
				<div class="form-group resp">
					<p class="f15 lh18 texto text-success">
						<strong>Perfecto!</strong> Ya puedes iniciar sesión con tus datos de registro.
					</p>
				</div>
				<? $_SESSION['registro'] = ""; ?>
			<? } ?>

			<div class="form-group resp login-resp">
				<p class="f15 lh18 texto text-danger login-resp-text">
					Los datos ingresados son incorrectos.
				</p>
			</div>

			<div class="form-group">
				<input type="email" id="login-email" class="form-input" autocomplete="off" placeholder="E-mail" required>
				<span class="f12 text-danger" id="email-msj"></span>
			</div>

			<div class="form-group">
				<input type="password" id="login-pass" class="form-input" placeholder="Contraseña" required>
				<span class="f12 text-danger" id="pass-msj"></span>
			</div>

			<div class="form-group marT25">
				<a href="javascript:;" class="btn btn-primary marR5" id="login-send">
					<span>Ingresar</span>
					<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
						<span class="sr-only">Loading...</span>
					</div>
				</a>
				<a href="registro/" class="btn btn-link">Registrarme</a>
				<div class="marT10">
					<a href="recover/" class="f14 link">¿Olvidaste tu contraseña?</a>
				</div>
			</div>

		</div>
		
	</div>

</section>