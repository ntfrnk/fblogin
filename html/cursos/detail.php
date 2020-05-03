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
					<p class="f18 marT30 align-justify"><?=nl2br($curso['descripcion'])?></p>
					<p class="">
						<span class="badge badge-info f18">Inicia el <b><?=date_format($date, "d-m-Y")?></b></span>
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

								<?

								$hoy = strtotime(date("d-m-Y",time()));
								$finicio = substr($clase['inicio'],0,10);
								$inicio = strtotime($finicio);
								$ffinal = substr($clase['final'],0,10);
								$final = strtotime($ffinal);

								$comienza = date_create($finicio);
								$termina = date_create($ffinal);

								?>

								<? if($state!=2){ ?>
									<li><?=$clase['titulo']?></li>
								<? } else { ?>
									<? if($hoy>=$inicio && $hoy<=$final){ ?>
										<li><a href="cursos/class/<?=$clase['Id']?>/"><?=$clase['titulo']?><small>[Vigente hasta el <?=date_format($termina, "d/m/Y")?>]</small></a></li>
									<? } else { ?>
										<? if($hoy<$inicio){ ?>
											<li><?=$clase['titulo']?> <small>[Disponible desde el <?=date_format($comienza, "d/m/Y")?>]</small></li>
										<? } else { ?>
											<li><?=$clase['titulo']?> <small>[Caducó el <?=date_format($termina, "d/m/Y")?>]</small></li>
										<? } ?>
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
									<span class="f16">Estamos evaluando tu participación en este curso. Para aprobar tu cursado es necesario que hayas indicado todos los datos y documentación requerida en el siguiente link: <a href="config/" class="alert-link">Información personal y documentación de usuario</a>.</span>
								</div>
							<? } elseif($state==0) { ?>
								<? if($curso['cierre']!=1){ ?>
									<button type="button" onclick="curso_suscribe(<?=$_SESSION['user_learn']?>, <?=$curso['Id']?>);" class="btn btn-primary">¡Inscribirme en este curso!</button>
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