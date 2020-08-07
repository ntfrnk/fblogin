<section id="login" class="padT50">

	<div class="container login">

		<div class="login-box pad40 form-wrapper">

			<div class="marB15">
				<h3>Confirmar correo</h3>
			</div>

			<div class="form-group resp">
				<p class="f15 lh18 texto">
                Te enviaremos un código de validación para comenzar a usar tu cuenta. Por favor, escribe aquí tu correo electrónico.
				</p>
			</div>

			<div class="form-group resp none">
				<p class="f15 lh18 texto text-danger code-resp-text">
					Error en el procedimiento. Por favor, <a href="registro/validate/">envía de nuevo el correo de validación</a>.
				</p>
			</div>

			<div class="form-group">
				<input type="email" id="email-validate" class="form-input" autocomplete="off" placeholder="Tu correo electrónico" required>
				<span class="f12 text-danger" id="code-msj"></span>
			</div>

			<div class="form-group marT25">
				<a href="javascript:;" class="btn btn-primary marR5" id="email-send">
					<span>Enviar código</span>
					<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
						<span class="sr-only">Loading...</span>
					</div>
				</a>
			</div>

		</div>
		
	</div>

</section>