<section id="alerts">

	<? if(!empty($_SESSION['guardado'])){ ?>

		<div class="alert alert-success alert-dismisible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="container align-center">
				<strong>Perfecto!</strong> Los cambios efectuados se guardaron correctamente.
			</div>
		</div>

		<? $_SESSION['guardado'] = ""; ?>

	<? } ?>

	<? if(!empty($_SESSION['enviado'])){ ?>

		<div class="alert alert-success alert-dismisible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="container align-center">
				<strong>Perfecto!</strong> El mensaje se envió correctamente.
			</div>
		</div>

		<? $_SESSION['enviado'] = ""; ?>

	<? } ?>


	<? if(!empty($_SESSION['eliminado'])){ ?>

		<div class="alert alert-success alert-dismisible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="container align-center">
				El registro fue eliminado correctamente.
			</div>
		</div>

		<? $_SESSION['eliminado'] = ""; ?>

	<? } ?>

	<? if(cant_mensajes()==-10){ ?>

		<div class="alert alert-warning alert-dismisible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="container align-center">
				<strong>Atención!</strong> Tienes mensajes nuevos en tu buzón de comunicaciones. Para ingresar puedes hacer <a href="mensajes/" class="alert-link">click aquí</a>.
			</div>
		</div>

	<? } ?>

	

</section>

<? if($_SESSION['faltan'] && $_SESSION['user_learn']){ ?>
	<div class="alert alert-danger align-center" role="alert">
		<div class="container">
			Faltan algunos de tus datos en nuestro sistema. Por favor complétalos en este formulario para poder continuar.
		</div>
	</div>
<? } ?>