<?

include("../config/config.php");

$preguntas = listReg("cursos_clases_preguntas", "where claseID='".$pow_post['claseID']."'", "", "orden,asc");

?>

<div class="marT20">

	<div class="accordion" id="accordionExample">

		<? foreach($preguntas as $pregunta){ ?>

			<? $respuestas = listReg("users_respuestas", "where claseID='".$pow_post['claseID']."' and userID='".$pow_post['userID']."' and preguntaID='".$pregunta['Id']."'", "1,0"); ?>

			<? foreach($respuestas as $respuesta); ?>

			<? if($i==0){ $mostrar = " show"; } else { $mostrar = ""; } ?>

			<div class="card">
				<div class="card-header padTB0" id="heading<?=$pregunta['Id']?>">
					<p class="mb-0">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?=$pregunta['Id']?>" aria-expanded="true" aria-controls="collapse<?=$pregunta['Id']?>">
							<?=$pregunta['pregunta']?>
						</button>
						<? if($respuesta['estado']==0){ ?>
							<span class="inline-block float-right lh38" id="calificacion-<?=$pregunta['Id']?>"></span>
						<? } elseif($respuesta['estado']==1) { ?>
							<span class="inline-block float-right lh38" id="calificacion-<?=$pregunta['Id']?>"><i class="fa fa-times text-danger"></i></span>
						<? } else { ?>
							<span class="inline-block float-right lh38"><i class="fa fa-check text-success"></i></span>
						<? } ?>
					</p>
				</div>

				<div id="collapse<?=$pregunta['Id']?>" class="collapse<?=$mostrar?>" aria-labelledby="heading<?=$pregunta['Id']?>" data-parent="#accordionExample">
					<div class="card-body">
						<div class="align-right float-right marL15 inline-block">
							<? if(empty($respuesta['feedback'])){ ?>
								<button type="button" class="btn btn-sm btn-primary" onclick="$('#comment-<?=$pregunta['Id']?>').toggle();" title="Realizar un comentario."><i class="fa fa-comment-dots"></i></button>
							<? } ?>
							<? if($respuesta['estado']==0 || $respuesta['estado']==1){ ?>
								<span id="actions-<?=$pregunta['Id']?>">
									<button type="button" class="btn btn-sm btn-success" onclick="user_tarea_approve(<?=$pow_post['userID']?>, <?=$pow_post['claseID']?>, <?=$pregunta['Id']?>, 2);" title="Aprobar respuesta"><i class="fa fa-check"></i></button>
									<button type="button" class="btn btn-sm btn-danger" onclick="user_tarea_approve(<?=$pow_post['userID']?>, <?=$pow_post['claseID']?>, <?=$pregunta['Id']?>, 1);" title="Desaprobar respuesta"><i class="fa fa-times"></i></button>
								</span>
							<? } ?>
						</div>
						<span class="f14"><?=$respuesta['respuesta']?></span>
						<? if(empty($respuesta['feedback'])){ ?>
							<div class="none marT15" id="comment-<?=$pregunta['Id']?>">
								<textarea class="form-control" rows="3" id="feedback-<?=$pregunta['Id']?>"></textarea>
								<button type="button" class="btn btn-sm btn-primary marT15" onclick="user_tarea_feedback(<?=$pow_post['userID']?>, <?=$pow_post['claseID']?>, <?=$pregunta['Id']?>, $('#feedback-<?=$pregunta['Id']?>').val());">Enviar comentario</button>
							</div>
						<? } else { ?>
							<div class="marT15">
								<div class="alert alert-info marB0 f15" role="alert"><?=$respuesta['feedback']?></div>
							</div>
						<? } ?>
					</div>
				</div>
			</div>

			<? $i++; ?>

		<? } ?>

	</div>

</div>