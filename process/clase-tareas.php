<?

include("../config/config.php");

$tareas = listReg("cursos_clases_preguntas", " where claseID='".$pow_post['Id']."'");

?>

<? if(count($tareas)==0){ ?>

	<div class="align-center pad30 c999">
		<em>No hay consignas cargadas en esta clase</em>
	</div>

<? } else { ?>

	<div class="marTB10 legajo docs">

		<? foreach($tareas as $tarea){ ?>

		<div class="padTB5 marLR10 padLR0 row">
			<div class="col-10 wrapper" title="<?=$tarea['pregunta']?>">
				<i class="fa fa-chevron-circle-right"></i> &nbsp; <?=$tarea['pregunta']?>
			</div>
			<div class="col-2 align-right">
				<button type="button" onclick="clase_tarea_delete(<?=$tarea['Id']?>, <?=$tarea['claseID']?>);" class="btn btn-outline-danger btn-sm" title="Eliminar esta pregunta"><i class="fa fa-times"></i></button>
			</div>
		</div>

		<? } ?>

	</div>

<? } ?>