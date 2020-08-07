<?

foreach(regById("cursos", $pow_get['Id']) as $curso);
$date = date_create($curso['fecha']);

$clases = listReg("cursos_clases", "where cursoID='".$curso['Id']."'");

$state = cursando_estado($_SESSION['user_learn'], $curso['Id']);

?>

<section id="content">

	<span id="dsadsa" style="display: none;">
		<?

		echo $_SESSION['user_learn'];

		cursando_estado($_SESSION['user_learn'], $curso['Id']);

		?>
	</span>

	<div class="container">

		<div class="row">

			<div class="col-0 col-md-1">
				&nbsp;
			</div>
			<div class="col-12 col-md-10">

				<div class="marT50">
					<h1>Curso: <?=$curso['nombre']?></h1>
					<p class="f18 marT30 align-justify curso-descripcion">
						<span class="desc-short">
							<?=nl2br(substr($curso['descripcion'], 0, 250))?>... 
							<a href="javascript:;" class="show-more">(Ver más)</a>
						</span>
						<span class="desc-long none">
							<?=nl2br($curso['descripcion'])?>
						</span>
					</p>
					<p class="">
						<? if($state==1){ ?>
							<span class="badge badge-warning f13">En proceso de inscripción</span>
						<? } elseif($state==2){ ?>
							<span class="badge badge-success f13">Cursando</span>
						<? } ?>
					</p>
				</div>

				<? if($state==2){ ?>

					<div class="marT50">
						<h4>Contenidos en este curso</h4>
						<ul class="items marT20 f17 lh32">
							<? foreach($clases as $clase){ ?>

								<? if($curso['Id']!=9){ ?>
									<? if(yala($_SESSION['user_learn'], $clase['Id'])){ ?>
										<li class="active"><a href="cursos/class/<?=$clase['Id']?>/"><?=$clase['titulo']?></a></li>
										<? $vista = "ok"; ?>
									<? } else { ?>
										<? if($vista=="ok"): ?>
											<li class="active"><a href="cursos/class/<?=$clase['Id']?>/"><?=$clase['titulo']?></a></li>
											<? $vista = "none"; ?>
										<? else : ?>
											<li><?=$clase['titulo']?></li>
										<? endif; ?>
									<? } ?>
								<? } else { ?>
									<? if($clase['inicio']<=date('Y-m-d')){ ?>
										<li class="active"><a href="cursos/class/<?=$clase['Id']?>/"><?=$clase['titulo']?></a></li>
									<? } else { ?>
										<li><?=$clase['titulo']?></li>
									<? } ?>
								<? } ?>

							<? } ?>
						</ul>
					</div>

				<? } ?>

				<div class="marT50">
					<div class="boton-suscribe">
						<? if(!empty($_SESSION['user_learn'])){ ?>
							<? if($state==1){ ?>
								<div class="alert alert-info" role="alert">
									<span class="f16">Estamos evaluando tu participación en este curso. Para aprobar tu cursado es necesario que hayas indicado todos los datos y documentación requerida en el siguiente link: <a href="config/data-personal/" class="alert-link">Información personal y documentación de usuario</a>.</span>
								</div>
							<? } elseif($state==0) { ?>
								<? if($curso['cierre']!=1){ ?>
									<a href="cursos/inscripcion/<?=$curso['Id']?>/" class="btn btn-primary">¡Inscribirme en este curso!</a>
								<? } else { ?>
									<div class="alert alert-warning" role="alert">
										<span class="f16">En este momento las inscripciones para este curso se encuentran cerradas.</span>
									</div>
								<? } ?>
							<? } ?>
						<? } else { ?>
							<? if($curso['cierre']!=1){ ?>
								<button type="button" class="btn btn-primary" onclick="open_modal('curso-suscribe-logout');">¡Inscribirme en este curso!</button>
							<? } else { ?>
								<div class="alert alert-warning" role="alert">
									<span class="f16">En este momento las inscripciones para este curso se encuentran cerradas.</span>
								</div>
							<? } ?>
						<? } ?>
					</div>
				</div>

			</div>

		</div>
		
	</div>

</section>