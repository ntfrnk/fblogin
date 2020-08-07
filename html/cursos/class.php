<?

foreach(regById("cursos_clases", $pow_get['Id']) as $class);
foreach(regById("cursos", $class['cursoID']) as $curso);
$clases = listReg("cursos_clases", "where cursoID='".$class['cursoID']."'");
$state = cursando_estado($_SESSION['user_learn'], $class['cursoID']);
$descargas = listReg("cursos_clases_adjuntos", "where claseID='".$class['Id']."'");

// Verifico si ya hizo la tarea

$tareas = listReg("users_tareas", "where userID='".$_SESSION['user_learn']."' and claseID='".$class['Id']."'", "", "rand()");

$r = count($tareas);
foreach($tareas as $tarea);

// Si no hizo la tarea o debe rehacer, muestro las preguntas.

$preguntas = listReg("cursos_clases_preguntas", "where claseID='".$class['Id']."'", "", "orden,asc");

?>

<section id="content">

	<div class="container">

		<div class="row">

			<div class="col-4 d-none d-md-block">
				<div class="marT50 padT0">

					<h4>Curso: <?=$curso['nombre']?></h4>

					<ul class="items-col marT20 f17 lh32" id="class-list-side">
						<? foreach($clases as $clase){ ?>

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

						<? } ?>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-8">

				<div class="marT50">
					<h1 class="f32"><?=trim(substr($class['titulo'], 3))?></h1>
					<span id="claseID" class="hide"><?=$class['Id']?></span>
				</div>
				
				<ul class="nav nav-tabs marT30 marB0" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="clase-tab" data-toggle="tab" href="#tclase" role="tab" aria-controls="clase" aria-selected="true">Clase</a>
					</li>
					<? if(count($preguntas)!=0){ ?>
						<li class="nav-item">
							<a class="nav-link" id="tarea-tab" data-toggle="tab" href="#ttarea" role="tab" aria-controls="tarea" aria-selected="false">
								Tarea 
								<? if($tarea['estado']==1){ ?>
									<span class="text-danger">
										<i class="fa fa-times text-danger"></i>
									</span>
								<? } elseif($tarea['estado']==2){ ?>
									<span class="text-success">
										<i class="fa fa-check text-success"></i>
									</span>
								<? } ?>
							</a>
						</li>
					<? } ?>
				</ul>

				<div class="tab-content" id="myTabContent">
					
					<div class="tab-pane fade show active" id="tclase" role="tabpanel" aria-labelledby="clase-tab">
						<div class="marT15">
							<figure class="video marB20">
								<div id="doplayer">
									<?
									$placa = "upload/placa/".$class['placa'];
									if(file_exists($placa) and !is_dir($placa)){
										$img_video = $placa;
									} else {
										$img_video = "upload/placa/default.jpg";
									}
									?>
									<img src="<?=$img_video?>" class="img-fluid" />
									<button type="button" class="playbutton">
										<i class="fa fa-play"></i>
									</button>
								</div>
							</figure>
						</div>
						<div class="marT0 marB0 d-block d-md-none align-center">
							<a href="cursos/list/<?=$curso['Id']?>/" class="d-block d-md-none btn btn-secondary block">« Volver al listado de clases</a>
						</div>
						<div class="marT30">
							<div class="alert alert-info" role="alert">
								<h4 class="marT10">Material adicional</h4>
								<? if(count($descargas)!=0){ ?>
									<p>El siguiente material es un complemento a la clase que acaba de tomar. Por favor descargue los archivos y revíselos.</p>
									<ul>
										<? foreach($descargas as $archivo){ ?>
											<li><a href="upload/material/<?=$class['Id']."_".$archivo['archivo']?>" class="alert-link" download><?=$archivo['archivo']?></a></li>
										<? } ?>
									</ul>
								<? } else { ?>
									<p><i>No hay archivos asociados a esta clase.</i></p>
								<? } ?>
							</div>
						</div>
					</div>

					<? if(count($preguntas)!=0){ ?>

						<div class="tab-pane fade" id="ttarea" role="tabpanel" aria-labelledby="tarea-tab">
							<div class="marT30 marB50">
									
								<h4 class="marT10">Tarea</h4>
								<p>A continuación le realizamos una serie de preguntas que servirán para evaluar la asimilación de los conceptos expuestos en la presente clase. Por favor desarrolle las consignas y haga click en el botón "Enviar respuestas".</p>
								<p>
									<? if($r!=0){ ?>
										<? if($tarea['estado']==0){ ?>
											<div class="alert alert-warning align-center" disabled>Aguardando calificación</div>
										<? } elseif($tarea['estado']==1) { ?>
											<div class="alert alert-warning align-center">Tarea corregida (debe revisar alguna/s respuestas)</div>
										<? } else { ?>
											<div class="alert alert-success align-center">Tarea corregida (aprobado)</div>
										<? } ?>
									<? } ?>

								</p>

								<div class="" id="test">

									<div class="box-quiz padTB20 padLR30">

										<form id="respuestas-test" action="process/clase-test.php" method="post">

											<?$i=1?>

											<? foreach($preguntas as $pregunta){ ?>

												<?
												$respuestas = listReg("users_respuestas", "where claseID='".$pow_get['Id']."' and userID='".$_SESSION['user_learn']."' and preguntaID='".$pregunta['Id']."'", "1,0");
												foreach($respuestas as $respuesta);
												?>

												<div class="form-group">
													<label for="q<?=$pregunta['Id']?>" class="bold label-quiz marT30 f18"><?=$i?> - <?=buscalinks($pregunta['pregunta'])?>
														<? if($respuesta['estado']==1){ ?>
															<small>(Corregir)</small>
															<span class="float-right"><i class="fa fa-times text-danger"></i></span>
														<? } elseif($respuesta['estado']==2) { ?>
															<span class="float-right"><i class="fa fa-check text-success"></i></span>
														<? } ?>
													</label>
													<? if($r==0){ ?>
														<textarea id="q<?=$pregunta['Id']?>" name="respuestas[<?=$pregunta['Id']?>]" class="form-control" rows="3" required></textarea>
													<? } else { ?>
														<? if($respuesta['estado']==1){ ?>
															<textarea id="q<?=$pregunta['Id']?>" name="respuestas[<?=$pregunta['Id']?>]" class="form-control" rows="3" required><?=$respuesta['respuesta']?></textarea>
															<? if(!empty($respuesta['feedback']) && $tarea['estado']==1){ ?>
																<div class="alert alert-danger marT10 padTB5 f14"><strong>Devolución de EPASI:</strong> <?=$respuesta['feedback']?></div>
															<? } ?>
														<? } elseif($respuesta['estado']==2) { ?>
															<hr><p class="color-green"><?=$respuesta['respuesta']?></p>
															<? if(!empty($respuesta['feedback']) && $tarea['estado']==1){ ?>
																<div class="alert alert-success padTB5 f14"><strong>Devolución de EPASI:</strong> <?=$respuesta['feedback']?></div>
															<? } ?>
														<? } elseif($respuesta['estado']==0) { ?>
															<hr><p class="text-secondary"><?=$respuesta['respuesta']?></p>
															<? if(!empty($respuesta['feedback'])){ ?>
																<div class="alert alert-success padTB5 f14"><strong>Devolución de EPASI:</strong> <?=$respuesta['feedback']?></div>
															<? } ?>
														<? } ?>
													<? } ?>
												</div>

												<?$i++?>

											<? } ?>

											<div class="form-group">
												<input type="hidden" name="claseID" value="<?=$class['Id']?>">
												<? if($r==0){ ?>
													<button type="submit" class="btn btn-primary">Enviar respuestas</button>
												<? } else { ?>
													<? if($tarea['estado']==1){ ?>
														<input type="hidden" name="quizedit" value="1">
														<button type="submit" class="btn btn-primary">Enviar correcciones</button>
													<? } ?>
												<? } ?>
											</div>

										</form>

									</div>

								</div>

							</div>
						</div>

					<? } ?>

				</div>

			</div>

		</div>
		
	</div>

</section>

<div class="rp-cont">

	<div class="rp-box">
		<video id="videoplayer" class="video-js rp-player" controls data-setup="{}">
			<source src="<?=md5(time())?><?=$class['video']?><?=md5(rand(0,9))?>_<?=md5(mt_rand(10,99))?>/" type="video/mp4" />
			<p class="vjs-no-js">
				Este navegador no soporta la reproducción de videos.
			</p>
		</video>
		<a href="javascript:;" onclick="closePlayer()" class="block marT10">[ Cerrar reproductor ]</a>
	</div>

</div>