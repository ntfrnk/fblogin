<?

include("../config/config.php");

$cursos = listReg("users_cursos", "where userID='".$pow_post['Id']."'", "", "cursoID,asc");

?>

<div class="marT20">

	<? if(count($cursos)!=0){ ?>

		<? foreach($cursos as $curso){ ?>

			<div class="padTB10 padLR20 marB15 border-box">
				<strong>Curso: </strong><?=campoRegById("cursos", $curso['cursoID'], "nombre")?>
				<br><strong>Estado: </strong>
				<?
				if($curso['estado']==1 || $curso['estado']==0){
					echo '<p class="badge badge-warning inline-block">Pendiente de aprobación</p> &nbsp; ';
					echo '<a href="javascript:;" class="text-success" onclick="curso_approve('.$curso['cursoID'].', '.$pow_post['Id'].', 1);">¿Aprobar?</a>';
					echo ' <a href="javascript:;" class="text-danger" onclick="curso_reject('.$curso['cursoID'].', '.$pow_post['Id'].');">Rechazar</a>';
				} else {
					echo '<p class="badge badge-success inline-block">Aprobado: Cursando</p> &nbsp; ';
					echo '<a href="javascript:;" class="text-danger" onclick="curso_approve('.$curso['cursoID'].', '.$pow_post['Id'].', 2);">¿Revocar aprobación?</a>';
				}
				?>
			</div>

		<? } ?>

	<? } else { ?>

		<div class="padTB5">
			<i>Este usuario no posee suscripciones a cursos</i>
		</div>

	<? } ?>

	<div class="form-group marT25 padB20">
		<a href="javascript:;" class="btn btn-primary" onclick="close_modal();">Aceptar</a>
	</div>

</div>