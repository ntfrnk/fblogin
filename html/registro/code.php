<section id="login" class="padT50">

	<div class="container login">

		<div class="login-box pad40 form-wrapper">

			<div class="marB15">
				<h3>Confirmar correo</h3>
			</div>

			<div class="form-group resp">
				<p class="f15 lh18 texto">
					Por favor compia aquí el código de validación que te enviamos a tu correo electrónico.
				</p>
			</div>

			<div class="form-group resp none">
				<p class="f15 lh18 texto text-danger code-resp-text">
					Error en el procedimiento. Por favor, <a href="registro/validate/">envía de nuevo el correo de validación</a>.
				</p>
			</div>

			<div class="form-group">
				<input type="number" id="confirm-code" class="form-input" max="999999" autocomplete="off" placeholder="Escribe el código" pattern="[0-9]{6}" required>
				<span class="f12 text-danger" id="code-msj"></span>
			</div>

			<div class="form-group marT25">
				<a href="javascript:;" class="btn btn-primary marR5" id="code-validate">
					<span>Confirmar</span>
					<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
						<span class="sr-only">Loading...</span>
					</div>
				</a>
			</div>

		</div>
		
	</div>

</section>